<?php
$disPgDirFilnm = '';
$RegnPgUrlCom = "https://www.milesweb.com";
$RegnPgUrlIn = "https://www.milesweb.in";
$RegnPgUrlUk = "https://www.milesweb.co.uk";
include $_SERVER['DOCUMENT_ROOT'].'/inc-comn-rgnl.php';
$imgpath = "/img-assets/tools/";
//$inc_header_banner="YES";$oldmain_CSS="YES";
?>
<!DOCTYPE html>
<html <?php echo $html_lang; ?>>
<head>
<title>Tools</title>
<meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/inc-meta-files.php'; ?>
<style type="text/css">
    .re-ban-guarantee-p,.re-ban-content-h1{margin:auto}.hero-bg-clr{background: linear-gradient(99deg, #0440B5 0%, #082899 100%);}
    .re-banner {height: unset;}.re-banner-content {padding: 40px 20px;}
    .herobg{background: url('/img-assets/tools/pattern.png') center center;padding: 35px 10px 100px;}
    @media (min-width: 1600px) {.re-ban-content-h1{max-width: 740px;}.re-ban-guarantee-p{max-width: 940px;}.re-banner-content {padding: 100px 20px;}}

    .mw-tool-col{padding: 15px;}.mw-tool-box{border-radius: 20px;border: 1px solid #B8D5FF;padding: 30px 25px 45px;position: relative;margin: 30px auto;}.mw-tool-h4{margin: auto;text-align: center;}.mw-tool-box img{width: 90px;height: 90px;left: 50%;transform: translate(-50%);position: absolute;top: -60px;}

    .tool-fea-wrap{background: linear-gradient(276deg, #003093 0.61%, #044DB5 132.1%);}.tool-fea-box{margin: 15px auto;} .tool-fea-box img{width: 90px;height: 90px;}.tool-fea-box .wv-h4{margin: auto;border-bottom: 1px solid aliceblue; padding-bottom: 5px;transition: all .3s ease-in-out;}.tool-fea-box .wv-h4:hover{transform: scale(1.02);}

	.get-wrap{background: linear-gradient(92deg, #002881 -24.11%, #0052CD 100%);margin-top: 45px;}.get-btn{padding: 20px 35px;margin:20px 15px;}.get-btn0{background: #fff;color: #092734; }.get-btn1{border: 1px solid #FFF;}.get-wrapbg{background:url('/img-assets/tools/pattern.png');}@media(max-width:767px){.get-wrapbg{text-align: center;}.get-btn{margin: 15px 6px;}}

	.tool-box-wrap{margin-top: -110px;}.tool-box{border-radius: 30px;background: #FFF;box-shadow: 0px 0px 25.4px 0px rgba(4, 77, 181, 0.15);max-width: 80%;margin: auto;height: 500px;width: 700px;padding: 35px;}.drag-area{border: 1px dashed #8ABAFF; border-radius: 5px;display: flex;align-items: center;justify-content: center;flex-direction: column;position: relative;width: 100%;height: 100%;}
.drag-area input{width: 100%;height: 100%;position: absolute;z-index: 21;top:0;left:0;color: #fff;}
.drag-area input::file-selector-button {display: none;}.drag-area input::placeholder {display: none;}.drag-area-img{width:110px;}


table,th,td { border: 1px solid black;border-collapse: collapse;}
td {vertical-align: top;width: 50%;}
/* img {max-width: 100%; margin-bottom: 10px;display: block;} */
/* .tool-box-bg{background: url(/img-assets/tools/image-compressor.png)no-repeat;} */
.tool-rs-main{max-width: 700px;border-radius: 10px;box-shadow: 0px 0px 20px 0px rgba(4, 77, 181, 0.10);margin:40px auto 0;padding:10px;display: flex;justify-content: space-between;align-items: center;}
.tool-rs-box1,.tool-rs-box2{display: flex;align-items: center;}
.tool-rs-prev{width: 80px;height:80px;margin-right: 10px;display: flex;justify-content: center;align-items: center;}
.tool-rs-prev img{max-width: 80px;max-height: 80px;}
.tool-rs-name-wrap{display: flex;flex-direction: column;width: 60%;}
/* .tool-rs-img-nm{color: #303030;font-size: 20px;font-weight: 600;} */
.tool-rs-state{display: flex;justify-content: left;width: 100%;padding:3px 0px;}
.tool-rs-spn1{padding: 4px 8px 4px 9px;border-radius: 3px;background: #B5DAFF;color: #044DB5;}
.tool-rs-spn2{padding: 4px 8px 4px 9px;margin-left: 0;}
.tool-rs-btn{border-radius: 8px;background: #E0F0FF;cursor: pointer;}
.tool-rs-state2{padding:0 30px 0 10px;}
.tool-rs-icon{border-radius: 10px;background: #ABD7FF;padding:10px;}
.tool-rs-p{padding-top: 0;}
/* .err{background-color: #f9e2e2;color:#e24841} */
</style>
</head>
<body> 
<?php include $_SERVER['DOCUMENT_ROOT'].'/tools/inc-header.php'; ?>
<section class="hero-bg-clr">
	<div class="re-banner herobg">
		<div class="re-container">
			<div class="title-center re-banner-content">
				<h2 class="re-ban-content-h1">Compress Image</h2>  
                <p class="re-ban-guarantee re-ban-guarantee-p"> Boost website speed and optimize storage without sacrificing image quality. Reduce size while preserving every vital detail.</p>
			</div>
		</div>
	</div>
</section>
<section class="tool-box-wrap">
    <div class="tool-box">
        <div class="drag-area">
			<img class="drag-area-img" src="/img-assets/tools/image-compressor.png">
			<label for="web-worker" class="wv-h4 pb-22 pt-22">Drop Your Images Here! <span id="web-worker-progress"></span>
				<input id="web-worker" class="tool-box-bg" type="file" accept="image/*" multiple onchange="compressImages(event, true);" />
			</label>
			<p id=""></p>
    </div>
  </div>
  <button onclick="downloadZip()">Download ZIP</button>
  <div class="tool-rs">
    <!-- <div class="tool-rs-main">
      <div class="tool-rs-box1">
        <div class="tool-rs-prev inputPreviewContainer">image</div>
        <div class="tool-rs-name-wrap">
          <div class="wv-h4"></div>
          <div class="tool-rs-state">
            <span class="tool-rs-spn1">PNG</span><span class="tool-rs-spn2 wv-p sourceImageSize">Size</span>
          </div>
        </div>
      </div>
      <a class="tool-rs-box2 tool-rs-btn">
        <div class="tool-rs-state2">
          <div class="wv-h4 title-center compressionPercentage"></div>
          <div class="wv-p tool-rs-p outputImageSize">Size</div>
        </div>
        <div class="tool-rs-icon">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
              <path d="M27.3125 36.8125C31.9034 36.8125 35.625 33.0909 35.625 28.5C35.625 23.9091 31.9034 20.1875 27.3125 20.1875C22.7216 20.1875 19 23.9091 19 28.5C19 33.0909 22.7216 36.8125 27.3125 36.8125Z" stroke="#044DB5" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
              <path d="M20.1875 33.25H4.75C4.09687 33.25 3.5625 32.7156 3.5625 32.0625V2.375C3.5625 1.72187 4.09687 1.1875 4.75 1.1875H23.2631C23.5838 1.1875 23.8806 1.31812 24.1062 1.53187L30.5306 7.95625C30.7562 8.18187 30.875 8.47875 30.875 8.79937V16.625" stroke="#044DB5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M23.75 2.375V7.125C23.75 7.77813 24.2844 8.3125 24.9375 8.3125H29.6875" stroke="#044DB5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M27.3125 23.75V32.0625" stroke="#044DB5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M30.875 29.6875L27.3125 33.25L23.75 29.6875" stroke="#044DB5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div>PNG</div>
        </div>
      </a>
    </div> -->
  </div>

</section>
<!-- <section class="tool-box-wrap">
    <div class="tool-box">
        <div class="drag-area">
            <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
            <header>Drag & Drop to Upload File</header>
            <span>OR</span>
            <input type="file">
        </div>
    </div>
</section> -->
<div class="bodywrap">

<?php
$_features = array(
	array("icon" => "performance.png", "title" => "Image Compressor", "url" => "/tools/image-compressor/","description" => "Say goodbye to image pixelates! Get the best quality image compression that will look practically identical to the originals."),
	array("icon" => "performance.png", "title" => "CSS Compressor", "url" => "/tools/css-compressor/","description" => "Say goodbye to image pixelates! Get the best quality image compression that will look practically identical to the originals."),
	array("icon" => "performance.png", "title" => "JavaScript Compressor", "url" => "/tools/js-compressor/","description" => "Say goodbye to image pixelates! Get the best quality image compression that will look practically identical to the originals."),
    array("icon" => "performance.png", "title" => "Gradient Generator", "url" => "/tools/image-compressor/","description" => "Say goodbye to image pixelates! Get the best quality image compression that will look practically identical to the originals."),
	array("icon" => "performance.png", "title" => "CSS Compressor", "url" => "/tools/css-compressor/","description" => "Say goodbye to image pixelates! Get the best quality image compression that will look practically identical to the originals."),
	array("icon" => "performance.png", "title" => "JavaScript Compressor", "url" => "/tools/js-compressor/","description" => "Say goodbye to image pixelates! Get the best quality image compression that will look practically identical to the originals."),
);
?>
<section class="sections-space">   
    <div class="wv-container title-center pb-60">
        <h2 class="wv-h2">Get the Tools Your are Looking For!!</h2>
        <p class="wv-p">Reduced storage space and compress images hassle-free making them suitable for all-sizes websites. Get a better user experience and potentially improved SEO of your website.</p>
    </div>
	<div class="wv-container wv-row wv-center">
	<?php foreach($_features as $item){?>
		<div class="wv-col-4 mw-tool-col title-center">
			<div class="mw-tool-box">
				<img loading="lazy" class="img-fluid" src="<?php echo $imgpath ?><?php echo $item['icon']; ?>" alt="<?php echo $item['title']; ?> | MilesWeb India" title="<?php echo $item['title']; ?> | MilesWeb India" >
				<div class="wv-row mw-row-align pt-22">
					<div class="wv-h4 mw-tool-h4"> <?php echo $item['title']; ?></div>
				</div>
				<div class="wv-p pt-22"><?php echo $item['description']; ?></div>
			</div>
		</div>
	<?php } ?>
	</div>
</section>

<?php
$_features2 = array(
	array("icon" => "css.png", "title" => "CSS Compressor","url" => ""),array("icon" => "js.png", "title" => "JavaScript Compressor","url" => ""),
    array("icon" => "clr-gradient.png", "title" => "Gradient Generator","url" => ""),array("icon" => "clr-gradient.png", "title" => "Get more tools...","url" => ""),
);
?>
<section class="sections-space">  
	<div class="tool-fea-wrap sections-space">
    <div class="wv-container title-center pb-60">
        <h2 class="wv-h2 fff">Looking For More Such Tools</h2>
        <p class="wv-p fff">Tailored solutions for website owners, developers, and designers, ensuring optimal website performance for every project. Discover the advantages of faster loading times with our image optimization tools.</p>
    </div>
	<div class="wv-container wv-row wv-center">
	<?php foreach($_features2 as $item){?>
		<div class="wv-col-3 title-center">
			<div class="tool-fea-box">
				<img loading="lazy" class="img-fluid" src="<?php echo $imgpath ?><?php echo $item['icon']; ?>" alt="<?php echo $item['title']; ?> | MilesWeb India" title="<?php echo $item['title']; ?> | MilesWeb India" >
				<div class="wv-row mw-row-align pt-22">
					<a class="wv-h4 fff" href="<?php echo $item['url']; ?>"> <?php echo $item['title']; ?></a>
				</div>
			</div>
		</div>
	<?php } ?>
	</div>
	</div>
</section>

<?php
	$faqBoxesShow = '4';
	$faqsArray = array(
		array("What is caching and how does it improve WordPress website speed?",
			"<p>Caching involves storing copies of your website’s content to quickly serve visitors, reducing server load. It decreases data transfer amounts, reduces server load, and enhances page loading times.</p>"
		),
		array("How can I test my WordPress website speed?",
			"<p>Utilize tools like Google PageSpeed Insights, GTmetrix, or Pingdom to assess performance and get improvement suggestions.</p>"
		),
		array("Why is WordPress website speed important?",
			"<p><b>User Experience:</b> Fast-loading websites offer a superior user experience.</p>
            <p><b>SEO Ranking:</b> Search engines like Google prefer faster websites, which affects your SEO ranking.</p>
            <p><b>Conversion Rates:</b> Website speed impacts conversion rates and overall site performance.</p>"
		),
		array("What factors affect WordPress website speed?",
			"<p><b>WordPress Hosting:</b> Quality hosting infrastructure with the maximum uptime is crucial for online presence.</p>
            <p><b>Themes and Plugins:</b> Heavy or poorly coded themes/plugins can decrease speed.</p>
            <p><b>Images and Media:</b> Large, unoptimized images and media files can slow down your site.</p>
            <p><b>Caching:</b> Inefficient caching mechanisms can affect speed.</p>
            <p><b>External Scripts:</b> Loading external scripts such as ads, font loaders, etc., can impact speed.</p>"
		),
		array("How does image optimization affect WordPress website speed?",
			"<p>Optimizing images by resizing and compressing reduces file size without significantly losing quality, thus improving page load times.</p>"
		),
		array("Are there specific hosting solutions that improve WordPress speed?",
			"<p>Our managed WordPress hosting services are customized for WordPress efficiency, with features like server-level caching and unmetered bandwidth.</p>"
		),
	);
$faq_title = 'Frequently Asked Questions';
 include $_SERVER['DOCUMENT_ROOT'].'/inc-faq-listing-2col.php';?>

<section class="get-wrap">
    <div class="get-wrapbg pt-60 pb-60">
        <div class="wv-container">
            <div class="wv-row">
                <div class="wv-col-6">
                    <h2 class="wv-h2 fff">Get To Know More About Our Web Hosting Deals</h2>
                </div>
                <div class="wv-col-6">
                    <span class="mw-btn get-btn get-btn0">View Deals</span>
                    <span class="mw-btn get-btn get-btn1">Get Started</span>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
<?php include $_SERVER['DOCUMENT_ROOT'].'/inc-footer.php'; ?>
<script>
document.getElementById("web-worker").addEventListener("change", function() {
  fileFormat();
});

function fileFormat() {
  var fileInput = document.getElementById("web-worker");
  var file = fileInput.files[0];

  if (file) {
    var fileName = file.name;
    var idxDot = fileName.lastIndexOf(".") + 1;
    var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();

    if (extFile === "jpg" || extFile === "jpeg" || extFile === "png") {
      console.log("Valid");
      return true;
    } else {
      alert("Only jpg/jpeg and png files are allowed!");
      console.log("Invalid");
      return false;
    }
  }
}



  var controller;
  var outputSizeDiv;
  var files;
  function compressImage(file, useWebWorker, inputPreviewContainer, compressionPercentageDiv, index) {
  return new Promise(async function (resolve, reject) {
    try {
      var logDom, progressDom;
      if (useWebWorker) {
        logDom = document.querySelector("#web-worker-log");
        progressDom = document.querySelector("#web-worker-progress");
      }

      var imageNameElement = document.querySelectorAll('.tool-rs-name-wrap .wv-h4');
      if (imageNameElement) {
        imageNameElement[index].innerText = file.name;
      }

      var inputPreview = document.createElement("img");
      inputPreview.src = URL.createObjectURL(file);
      inputPreviewContainer.appendChild(inputPreview);

      // Calculate and display the source image size
      var sourceSize = (file.size / 1024).toFixed(2);
      var sourceSizeDiv = document.querySelectorAll('.sourceImageSize');
      if (sourceSizeDiv) {
        sourceSizeDiv[index].innerHTML = "Size " + sourceSize + " KB"; // Use '=' instead of '+='
      }

      imageCompression(file, {
        maxSizeMB: 1,
        useWebWorker: true,
        onProgress: onProgress,
        preserveExif: true,
        maxIteration: 20,
        initialQuality: 0.6,
      }).then(async function (compressedArrayBuffer) {
        // Create a Blob from the compressed data
        var output = new Blob([compressedArrayBuffer], { type: file.type });

        var outputSize = (output.size / 1024).toFixed(2);
        outputSizeDiv = document.querySelectorAll('.outputImageSize');
        if (outputSizeDiv) {
          outputSizeDiv[index].innerHTML = " " + outputSize + " KB"; // Use '=' instead of '+='
        }

        var compressionPercentage = calculateCompressionPercentage(file.size, output.size);
        if (compressionPercentageDiv) {
          compressionPercentageDiv.innerHTML = compressionPercentage + "%";
        }

        resolve({ originalFile: file, compressedOutput: output, index });
      });
    } catch (error) {
      reject(error);
    }

    function calculateCompressionPercentage(originalSize, compressedSize) {
  const percentage = Math.floor(((originalSize - compressedSize) / originalSize) * 100);
  return Math.max(percentage, 0); // Return 0 if the result is negative
}

    function onProgress(p) {
      console.log("onProgress", p);
      if (progressDom) {
        progressDom.innerHTML = "(" + p + "%" + ")";
      }
    }
  });
}



var originalFileNames = [];
var compressedImages = [];
var output;
var supportedFormats;
async function createNewContainer(file, index) {
  // Check if the file format is supported
  // Initialize a promise


  return new Promise(async (resolve) => {



 originalFileNames[index] = file.name;

  var parentContainer = document.querySelector(".tool-rs");

  var newContainer = document.createElement("div");
  newContainer.className = "tool-rs-main";
  parentContainer.append(newContainer);

  var inputPreviewContainer = document.createElement("div");
  inputPreviewContainer.className = "tool-rs-prev inputPreviewContainer";
  newContainer.appendChild(inputPreviewContainer);

  var nameWrap = document.createElement("div");
  nameWrap.className = "tool-rs-name-wrap";
  newContainer.appendChild(nameWrap);

  var imageNameElement = document.createElement("div");
  imageNameElement.className = "wv-h4";
  nameWrap.appendChild(imageNameElement);

  var state = document.createElement("div");
  state.className = "tool-rs-state";
  nameWrap.appendChild(state);

  var spn1 = document.createElement("span");
  spn1.className = "tool-rs-spn1 errtxt";
  spn1.innerText = file.name.split('.').pop().toUpperCase();
  state.appendChild(spn1);

  var spn2 = document.createElement("span");
  spn2.className = "tool-rs-spn2 wv-p sourceImageSize";
  spn2.innerText = "Size";
  state.appendChild(spn2);

  var box2 = document.createElement("a");
  box2.className = "tool-rs-box2 tool-rs-btn";
  newContainer.appendChild(box2);

  var state2 = document.createElement("div");
  state2.className = "tool-rs-state2";
  box2.appendChild(state2);

  var compressionPercentageDiv = document.createElement("div");
  compressionPercentageDiv.className = "wv-h4 title-center compressionPercentage";
  state2.appendChild(compressionPercentageDiv);

  var pElement = document.createElement("div");
  pElement.className = "wv-p tool-rs-p outputImageSize";
  pElement.innerText = "Size";
  state2.appendChild(pElement);

  var icon = document.createElement("div");
  icon.className = "tool-rs-icon";
  box2.appendChild(icon);

  var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  svg.setAttribute("xmlns", "http://www.w3.org/2000/svg");
  svg.setAttribute("width", "38");
  svg.setAttribute("height", "38");
  svg.setAttribute("viewBox", "0 0 38 38");
  svg.setAttribute("fill", "none");
  icon.appendChild(svg);

  var path1 = document.createElementNS("http://www.w3.org/2000/svg", "path");
  path1.setAttribute("d", "M27.3125 36.8125C31.9034 36.8125 35.625 33.0909 35.625 28.5C35.625 23.9091 31.9034 20.1875 27.3125 20.1875C22.7216 20.1875 19 23.9091 19 28.5C19 33.0909 22.7216 36.8125 27.3125 36.8125Z");
  path1.setAttribute("stroke", "#044DB5");
  path1.setAttribute("stroke-width", "2");
  path1.setAttribute("stroke-miterlimit", "10");
  path1.setAttribute("stroke-linecap", "round");
  svg.appendChild(path1);

  var path2 = document.createElementNS("http://www.w3.org/2000/svg", "path");
  path2.setAttribute("d", "M20.1875 33.25H4.75C4.09687 33.25 3.5625 32.7156 3.5625 32.0625V2.375C3.5625 1.72187 4.09687 1.1875 4.75 1.1875H23.2631C23.5838 1.1875 23.8806 1.31812 24.1062 1.53187L30.5306 7.95625C30.7562 8.18187 30.875 8.47875 30.875 8.79937V16.625");
  path2.setAttribute("stroke", "#044DB5");
  path2.setAttribute("stroke-width", "2");
  path2.setAttribute("stroke-linecap", "round");
  path2.setAttribute("stroke-linejoin", "round");
  svg.appendChild(path2);

  var path3 = document.createElementNS("http://www.w3.org/2000/svg", "path");
  path3.setAttribute("d", "M23.75 2.375V7.125C23.75 7.77813 24.2844 8.3125 24.9375 8.3125H29.6875");
  path3.setAttribute("stroke", "#044DB5");
  path3.setAttribute("stroke-width", "2");
  path3.setAttribute("stroke-linecap", "round");
  path3.setAttribute("stroke-linejoin", "round");
  svg.appendChild(path3);

  var path4 = document.createElementNS("http://www.w3.org/2000/svg", "path");
  path4.setAttribute("d", "M27.3125 23.75V32.0625");
  path4.setAttribute("stroke", "#044DB5");
  path4.setAttribute("stroke-width", "2");
  path4.setAttribute("stroke-linecap", "round");
  path4.setAttribute("stroke-linejoin", "round");
  svg.appendChild(path4);

  var path5 = document.createElementNS("http://www.w3.org/2000/svg", "path");
  path5.setAttribute("d", "M30.875 29.6875L27.3125 33.25L23.75 29.6875");
  path5.setAttribute("stroke", "#044DB5");
  path5.setAttribute("stroke-width", "2");
  path5.setAttribute("stroke-linecap", "round");
  path5.setAttribute("stroke-linejoin", "round");
  svg.appendChild(path5);

  var divIcon = document.createElement("div");
  var fileExtension = file.name.split('.').pop().toUpperCase();
  divIcon.innerText = fileExtension;
  icon.appendChild(divIcon);

output= await compressImage(file, true, inputPreviewContainer, compressionPercentageDiv, index);


if (output.compressedOutput instanceof Blob) {
  const downloadLink = URL.createObjectURL(output.compressedOutput);
  const divDownloadBtns = document.querySelectorAll(".tool-rs-btn");
  compressedImages[index] = output.compressedOutput;
    originalFileNames[index] = file.name;

  // Update values for the current container only
  const currentImageNameElement = imageNameElement;
  const currentSizeElement = spn2;

  if (currentImageNameElement && currentSizeElement) {
    currentImageNameElement.innerText = file.name;
    currentSizeElement.innerHTML = "Size " + (file.size / 1024).toFixed(2) + " KB";

    // Convert Blob to Data URL
    const reader = new FileReader();
    reader.onloadend = function () {
      const dataUrl = reader.result;

      // Add a click event listener to the download button
      divDownloadBtns[index].addEventListener('click', function () {
        // Create a link element
        const testLink = document.createElement('a');
        testLink.href = dataUrl; // Use the Data URL
        testLink.download = file.name;

        // Append the link to the body
        document.body.appendChild(testLink);

        // Trigger a click on the link
        testLink.click();

        // Clean up
        setTimeout(() => {
          document.body.removeChild(testLink);
        }, 1000); // You can adjust the delay as needed
      });
    };

    reader.readAsDataURL(output.compressedOutput);
  } else {
    console.error("Error: Elements are not defined.");
  }
} else {
  console.error("Error: compressImage did not return a valid Blob object");
}
resolve();
  });
}


var currentIndex = 0; // Initialize the counter outside the drop event handler

async function compressImages(useWebWorker) {
  var filesInput = document.getElementById("web-worker");
  var files = filesInput.files;
  console.log(files);
  var parentContainer = document.querySelector(".tool-rs");

  if (files.length === 0) {
    parentContainer.style.display = 'none';
    return;
  } else {
    parentContainer.style.display = 'block';
  }

  for (var i = 0; i < files.length; i++) {
    var isValidFormat = fileFormat(files[i]);

    if (isValidFormat) {
      await createNewContainer(files[i], currentIndex);
      currentIndex++; // Increment index for the next image
    }
  }
}




function abort() {
  if (controller) {
    controller.abort(new Error('I just want to stop'));
  }
}



async function downloadZip() {
  const zip = new JSZip();

  for (var i = 0; i < compressedImages.length; i++) {
    const blob = compressedImages[i];

    // Use the original filename and extension in the ZIP file
    zip.file(originalFileNames[i], blob, { binary: true });
  }

  try {
    const zipBlob = await zip.generateAsync({ type: 'blob' });

    if (Object.keys(zip.files).length === 0) {
      return;
    }

    const link = document.createElement('a');
    link.href = URL.createObjectURL(zipBlob);
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