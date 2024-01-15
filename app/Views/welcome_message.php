<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>เดียร์ สตูดิโอ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('navbar.php'); ?>
    <section id="sectionpage">
        <div class="row">
            <div class="col-4">
                <div class="card mt-3" style="padding: 20px;">
                    <div class="card-title" id="format2">
                        <h3>Photo ID</h3>
                        <hr>
                        <div class="mb-2"><label style="font-size: 14pt">Upload Image</label></div>
                        <input type="file" id="imageUpload" accept="image/*">
                    </div>
                    <div class="card-body">
                        <div>
                            เลือกขนาด
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="1in">
                                <label class="form-check-label me-3" for="1in">
                                    1 นิ้ว
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="15in">
                                <label class="form-check-label me-3" for="15in">
                                    1.5 นิ้ว
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="2in">
                                <label class="form-check-label me-3" for="2in">
                                    2 นิ้ว
                                </label>
                            </div>
                            <div class="mt-3 mb-3">

                                <div id="format1">
                                    <button type="button" class="btn btn-outline-primary btn-sm me-2" onclick="showSample()"><i class="bi bi-search me-1" style="font-size: 15px;"></i>ตัวอย่าง</button>
                                    <button type="button" class="btn btn-outline-success btn-sm me-2" onclick="downloadSample()"><i class="bi bi-download me-1" style="font-size: 15px;"></i>ดาวน์โหลด</button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm me-2" onclick="printCanvas()"><i class="bi bi-printer me-1" style="font-size: 15px;"></i>ปริ้น</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card mt-3" style="padding: 20px;">
                    <div class="card-body">
                        <h5>ตัวอย่าง</h5>
                        <div id="sampleContainer"></div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showSample() {
            var selectedSizeElement = document.querySelector('input[name="flexRadioDefault"]:checked');

            if (selectedSizeElement) {
                var selectedSize = selectedSizeElement.id;
                console.log('Selected Size:', selectedSize);

                var imgElement = document.getElementById('imageUpload');

                if (imgElement.files && imgElement.files[0]) {
                    var canvas = document.createElement('canvas');
                    var context = canvas.getContext('2d');

                    var paperWidth, paperHeight, imagesCount;

                    if (selectedSize === '1in') {
                        paperWidth = 4; // 4 inches
                        paperHeight = 6; // 6 inches
                        imagesCount = 12;
                    } else if (selectedSize === '15in') {
                        paperWidth = 4;
                        paperHeight = 6;
                        imagesCount = 6;
                    } else if (selectedSize === '2in') {
                        paperWidth = 4;
                        paperHeight = 6;
                        imagesCount = 4;
                    }

                    canvas.width = paperWidth * 150; // 1 inch = 100 pixels
                    canvas.height = paperHeight * 150; // 1 inch = 100 pixels

                    var reader = new FileReader();
                    reader.onload = function(event) {
                        var img = new Image();
                        img.src = event.target.result;
                        console.log('Image Source:', img.src);
                        img.onload = function() {
                            for (var i = 0; i < imagesCount; i++) {
                                var x = (i % 3) * (canvas.width / 3);
                                var y = Math.floor(i / 3) * (canvas.height / 4);
                                try {
                                    var borderSize = 7; // ขนาดขอบ (border) เพิ่มเติม
                                    context.fillStyle = 'white'; // ตั้งสีพื้นหลังเป็นขาว
                                    context.fillRect(x, y, canvas.width / 3, canvas.height / 4);
                                    context.drawImage(img, x + borderSize, y + borderSize, (canvas.width / 3) - 2 * borderSize, (canvas.height / 4) - 2 * borderSize);
                                    context.strokeStyle = 'white'; // ตั้งสีขอบเป็นขาว
                                    context.stroke(); // วาดเส้นขอบ
                                } catch (error) {
                                    console.error('Error drawing image:', error);
                                }
                            }

                            var sampleImage = new Image();
                            sampleImage.src = canvas.toDataURL('image/png');
                            var sampleContainer = document.getElementById('sampleContainer');
                            sampleContainer.innerHTML = '';
                            sampleContainer.appendChild(sampleImage);
                        };
                    };

                    reader.readAsDataURL(imgElement.files[0]);

                } else {
                    console.log('No Image Source');
                }
            } else {
                console.log('No Size Selected');
            }
        }

        function downloadSample() {
            var sampleImage = document.getElementById('sampleContainer').querySelector('img');

            if (sampleImage) {
                var a = document.createElement('a');
                a.href = sampleImage.src;
                a.download = 'sample_image.png';
                a.click();
            } else {
                console.log('No Sample Image to Download');
            }
        }

        function printCanvas() {
            var canvas = document.createElement('canvas');
            var context = canvas.getContext('2d');

            var imgElement = document.getElementById('sampleContainer').querySelector('img');

            canvas.width = imgElement.width;
            canvas.height = imgElement.height;

            context.drawImage(imgElement, 0, 0);

            var dataUrl = canvas.toDataURL('image/png');

            var windowContent = '<!DOCTYPE html>';
            windowContent += '<html>';
            windowContent += '<head><title>Print</title></head>';
            windowContent += '<body>';
            windowContent += '<img src="' + dataUrl + '" onload="window.print();window.onafterprint=function(){window.close();}">';
            windowContent += '</body>';
            windowContent += '</html>';

            var printWin = window.open('', '_blank');
            printWin.document.open();
            printWin.document.write(windowContent);
            printWin.document.close();
        }
    </script>

</body>
<style scoped>
    body {
        background-color: #DCEFFF;
        font-family: 'Kanit', sans-serif;
    }

    section {
        padding: 50px;
    }

    canvas {
        border: 1px solid white;
    }
</style>


</html>