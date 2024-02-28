<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encrypted HTML</title>
    <style>
        textarea {width: 20%; height: 80vh;} 
    </style>
</head>
<body>

    <textarea class="your-code-here" placeholder="Enter your HTML code..."></textarea>
    <input class="encrypt-key" type="text" placeholder="Enter your AES key">
    <textarea class="get-code-here" readonly></textarea>
    <button onclick="encode()">Encrypt</button>

    <textarea class="your-decode-here" placeholder="Enter your encrypted HTML code..."></textarea>
    <input class="Decode-key" type="text" placeholder="Enter your AES key">
    <textarea class="get-decode-here" readonly></textarea>
    <button onclick="decode()">Decrypt</button>

    <script src="mw-turing.js"></script>
    <script>
        // Encryption function
        function encryptData(data, key) {
            const encrypted = CryptoJS.AES.encrypt(data, key);
            return encrypted.toString();
        }

        // Decryption function
        function decryptData(encryptedData, key) {
            const decrypted = CryptoJS.AES.decrypt(encryptedData, key);
            return decrypted.toString(CryptoJS.enc.Utf8);
        }

        function encode() {
            var input = document.querySelector('.your-code-here').value;
            var key = document.querySelector('.encrypt-key').value;
            var encoded = encryptData(input, key);
            document.querySelector('.get-code-here').value = encoded;
        }

        function decode() {
            var input = document.querySelector('.your-decode-here').value;
            var key = document.querySelector('.Decode-key').value;
            var decoded = decryptData(input, key);
            document.querySelector('.get-decode-here').value = decoded;
        }
    </script>

</body>
</html>
