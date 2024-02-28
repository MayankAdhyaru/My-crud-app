<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>

</head>

<body>

  Options:<br />
  <label for="maxWidthOrHeight">Choose MaxWidth:
    <input type="text" id="maxWidthOrHeight" name="maxWidthOrHeight" value="1920" /><span class="px-3">Size in
      px</span></label>
  <hr />
  <div>
    <label for="web-worker">
      Compress Your images here <span id="web-worker-progress"></span>
      <input id="web-worker" type="file" accept="image/*" multiple onchange="compressImages(event, true);" />
    </label>
    <p id="web-worker-log"></p>
  </div>
  <hr />
  <button onclick="downloadZip()">Download ZIP</button>
  <table>
    <tr>
      <td id="sourceImageSize">Source image size:</td>
      <td id="outputImageSize">Output size:</td>
    </tr>
    <tr>
      <td>input preview</td>
      <td>output preview <span id="compressionPercentage"></span></td>
    </tr>
    <tr>
      <td id="inputPreviewContainer"></td>
      <td id="outputPreviewContainer"></td>
    </tr>
  </table>

  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    td {
      vertical-align: top;
      width: 50%;
    }

    img {
      max-width: 100%;
      /* max-height: 150px; Adjust the maximum height for the preview images */
      margin-bottom: 10px;
      display: block;
    }
  </style>
  <script>
    var controller;
    document.querySelector("#version").innerHTML = imageCompression.version;

    function compressImage(file, useWebWorker, inputPreviewContainer, outputPreviewContainer, compressionPercentageDiv, index) {
      return new Promise(function (resolve, reject) {
        var logDom, progressDom;
        if (useWebWorker) {
          logDom = document.querySelector("#web-worker-log");
          progressDom = document.querySelector("#web-worker-progress");
        }

        var inputPreview = document.createElement("img");
        inputPreview.src = URL.createObjectURL(file);
        inputPreviewContainer.appendChild(inputPreview);

        // Calculate and display the source image size
        var sourceSize = (file.size / 1024).toFixed(2);
        document.getElementById('sourceImageSize').innerHTML += " " + sourceSize + " KB,";

        imageCompression.getExifOrientation(file).then(function (o) {
          console.log("ExifOrientation", o);
        });

        controller = typeof AbortController !== 'undefined' && new AbortController();

        var options = {
          maxSizeMB: 1,
          maxWidthOrHeight: parseFloat(document.querySelector("#maxWidthOrHeight").value),
          useWebWorker: true,
          onProgress: onProgress,
          preserveExif: true,
          maxIteration: 20,
          initialQuality: 0.6,
        };
        if (controller) {
          options.signal = controller.signal;
        }

        imageCompression(file, options)
          .then(function (output) {
            // Calculate and display the output size
            var outputSize = (output.size / 1024).toFixed(2);
            document.getElementById('outputImageSize').innerHTML += " " + outputSize + " KB,<br>";

            var compressionPercentage = calculateCompressionPercentage(file.size, output.size);
            compressionPercentageDiv.innerHTML += "Compression Percentage for " + file.name + ": " + compressionPercentage + "%<br>";
            const downloadLink = URL.createObjectURL(output);
            logDom.innerHTML +=
              '&nbsp;<a href="' +
              downloadLink +
              '" download="' +
              file.name +
              '">download compressed image</a>';

            var outputPreview = document.createElement("img");
            outputPreview.src = downloadLink;
            outputPreviewContainer.appendChild(outputPreview);

            // Resolve the promise with an object containing the original file and the compressed output
            resolve({ originalFile: file, compressedOutput: output, index });
          })
          .catch(function (error) {
            // Reject the promise with the error
            reject(error);
          });

        function calculateCompressionPercentage(originalSize, compressedSize) {
          return Math.floor(((originalSize - compressedSize) / originalSize) * 100);
        }

        function onProgress(p) {
          console.log("onProgress", p);
          progressDom.innerHTML = "(" + p + "%" + ")";
        }
      });
    }

    function compressImages(event, useWebWorker) {
  var files = event.target.files;
  var inputPreviewContainer = document.getElementById("inputPreviewContainer");
  var outputPreviewContainer = document.getElementById("outputPreviewContainer");
  var compressionPercentageDiv = document.getElementById('compressionPercentage');
  var sourceSizeDiv = document.getElementById('sourceImageSize');
  var outputSizeDiv = document.getElementById('outputImageSize');

  inputPreviewContainer.innerHTML = ""; // Clear previous previews
  outputPreviewContainer.innerHTML = ""; // Clear previous previews
  compressionPercentageDiv.innerHTML = ""; // Clear previous percentage
  sourceSizeDiv.innerHTML = "Source image size:"; // Reset source size display
  outputSizeDiv.innerHTML = "Output size:"; // Reset output size display

  // Create an array to store promises for each image compression
  var compressionPromises = [];

  // Process images sequentially
  function processImage(index) {
    if (index < files.length) {
      var file = files[index];
      // Add the promise for image compression to the array
      compressionPromises.push(
        compressImage(file, useWebWorker, inputPreviewContainer, outputPreviewContainer, compressionPercentageDiv, index)
          .then(function(result) {
            // Continue processing the next image
            processImage(index + 1);
            return result;
          })
      );
    } else {
      // All images have been processed, wait for all promises to resolve
      Promise.all(compressionPromises)
        .then(function (results) {
          // Sort the results based on the original index
          results.sort((a, b) => a.index - b.index);
          console.log("All images compressed successfully:", results);
        })
        .catch(function (error) {
          console.error("Error compressing images:", error);
        });
    }
  }

  // Start processing images
  processImage(0);
}

    function abort() {
      if (!controller) return
      controller.abort(new Error('I just want to stop'));
    }

    async function downloadZip() {
      const zip = new JSZip();

      var outputPreviewContainer = document.getElementById("outputPreviewContainer");
      var images = outputPreviewContainer.getElementsByTagName("img");

      for (var i = 0; i < images.length; i++) {
        var image = images[i];
        var imageUrl = image.src;

        // Fetch the image as a blob
        const response = await fetch(imageUrl);
        const blob = await response.blob();

        // Add the blob to the ZIP file
        zip.file(`compressed_image_${i + 1}.png`, blob, { binary: true });
      }

      try {
        // Generate the ZIP file
        const blob = await zip.generateAsync({ type: 'blob' });

        if (Object.keys(zip.files).length === 0) {
          // No files added to the ZIP, hide the download button
          return;
        }

        // Trigger download
        const link = document.createElement('a');
        link.href = URL.createObjectURL(blob);
        link.download = 'compressed_images.zip';
        link.click();
      } catch (error) {
        console.error('Error generating ZIP file:', error);
      }
    }

  </script>
  <script src="script-compress.js"></script>
  <script src="script-min.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
