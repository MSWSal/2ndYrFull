<html>

    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="<?= ROOT ?>/public/js/qrscan.js"></script>
    <link rel="stylesheet" href="<?= ROOT ?>/css/qrscan.css">
    <title>QR Scanner</title>


<body>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <video id="preview" width="100%"></video>
            </div>
            <div class="col-md-6">
                <label>SCAN QR CODE :</label>
                <input type="text" name="text" id="text" readonyy="" placeholder="scan qrcode" class="form-control">
                <button onclick="openURL()" id="myButton">Open</button>

            </div>
            <div class="col-md-6">
                
            <a href="<?=ROOT?>/search?id=<?=$campid?>"><button class="gosearch"><i class="fas fa-search"></i>Go to Search</button></a>

            </div>
            <div class="col-md-6">
                
            <a href="<?=ROOT?>/onetimeui?id=<?=$campid?>"><button class="backbtn"><i class="fas fa-arrow-left"></i>Go Back</button></a>

            </div>
        </div>
    </div>

    <script>
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                alert('No cameras found');
            }

        }).catch(function (e) {
            console.error(e);
        });

        scanner.addListener('scan', function (c) {
            document.getElementById('text').value = c;
        });
        function openURL() {
            var urlInput = document.getElementById('text');
            var url = urlInput.value;
            var newurl=`${url}&campid=<?=$campid?>`;
            // var pattern = /^http:\/\/localhost:8888\/Bloood%20Link%202\/public\/donor_details\?id=\d+$/;
            // var pattern = /^http:\/\/localhost\/Bloood%20Link%202\/public\/donor_details\?id=\d+$/;
            var pattern =/^http:\/\/localhost\/Bloood%20Link%202\/public\/donor_details\?id=\d+&campid=\d+$/;
            var isValidURL = pattern.test(newurl);

            // Open the URL in a new window
            if(isValidURL) {
            // window.open(url);
            window.location.href=newurl;
            }
        }





    </script>
</body>

</html>