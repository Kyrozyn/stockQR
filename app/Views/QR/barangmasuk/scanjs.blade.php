<script>
    if (localStorage.getItem('IDCAMERA') == null) {
        var idku = 0;
        localStorage.setItem('IDCAMERA', idku)
    } else {
        var idku = localStorage.getItem('IDCAMERA');
    }
    Html5Qrcode.getCameras().then(cameras => {
        /**
         * devices would be an array of objects of type:
         * { id: "id", label: "label" }
         */
        if (cameras && cameras.length) {
            var cameraId = cameras[idku].id;
            // .. use this to start scanning.
            const html5QrCode = new Html5Qrcode("qr-reader", true);

            function startQR() {
                html5QrCode.start(
                    cameraId, // retreived in the previous step.
                    {
                        fps: 10,    // sets the framerate to 10 frame per second
                        // qrbox: 250  // sets only 250 X 250 region of viewfinder to
                        // scannable, rest shaded.
                    },
                    qrCodeMessage => {
                        // do something when code is read. For example:
                        // console.log(`QR Code detected: ${qrCodeMessage}`);
                        // alert(`QR Code tersimpan!! ${qrCodeMessage}`);
                        $.get( "{{base_url('/stok/addStok')}}".concat("/",qrCodeMessage,"/1"), function( data ) {
                            alert(data);
                            console.log("masuk : "+data)
                        });
                        stopQR();
                    },
                    errorMessage => {
                        // parse error, ideally ignore it. For example:
                        //sconsole.log(`QR Code no longer in front of camera.`);
                    })
                    .catch(err => {
                        // Start failed, handle it. For example,
                        console.log(`Unable to start scanning, error: ${err}`);
                    });
            }

            function stopQR() {
                html5QrCode.stop().then(ignore => {
                    function resolveAfter2Seconds() {
                        return new Promise(resolve => {
                            setTimeout(() => {
                                resolve('resolved');
                            }, 2000);
                        });
                    }

                    async function starto() {
                        const result = await resolveAfter2Seconds();
                        console.log(result);
                        startQR();
                    }

                    starto();
                }).catch(err => {
                    // Stop failed, handle it.
                });
            }
            startQR()
        }
    }).catch(err => {
        console.log(err)
    });

    function changeCamera() {
        if (localStorage.getItem('IDCAMERA') == 0) {
            localStorage.setItem('IDCAMERA', 1)
        } else if (localStorage.getItem('IDCAMERA') == 1) {
            localStorage.setItem('IDCAMERA', 0)
        }
        console.log('klik')
        location.reload();
    }
</script>
<div class="col-12 center-block text-center" style="margin-bottom: 10px">
    <button class="btn btn-primary" onclick="changeCamera()">Ganti Kamera</button>
</div>
