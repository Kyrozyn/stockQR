

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Cetak QR Code Barang</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="col-lg-4 center-block">
            <form onsubmit="klik()" action="javascript:void(0);">
                <div class="form-group">
                    <label for="idbarang">ID Barang</label>
                    <input type="text" class="form-control" required id="idbarang" aria-describedby="idbarang" placeholder="ID Barang">
                    <small class="form-text text-muted">Masukkan ID Barang yang akan dicetak QR Codenya</small>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Cetak</button>
                </div>
            </form>
            <script>
                function klik(){
                    var idbarang = $('#idbarang').val();
                    checkBarang(idbarang);
                }
                function checkBarang(kodebarang){
                    $.get("<?php echo e(base_url('/barang/checkKodeBarang')); ?>"+'/'+kodebarang,function (data){
                        if(data=='1'){
                            $('#qrcode').html('<im'+'g src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl='+kodebarang+'&choe=UTF-8&chld=Q">')
                            $('#Detail').html('<h'+'6>Silahkan Simpan Gambar Tersebut lalu cetak sesuai dengan kebutuhan</'+'h4>')
                            $('#linkdl').attr("href",'https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl='+kodebarang+'&choe=UTF-8&chld=Q');
                            $('#linkdl').show()
                            // var url = 'https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=' + kodebarang + '&choe=UTF-8&chld=Q';
                            // var isi = "<ht" + "ml><he" + "ad><scri" + "pt>function step1(){\n" +
                            //     "setTimeout('step2()', 10);}\n" +
                            //     "function st" + "ep2(){wi" + "ndow.pr" + "int();window.close()}\n" +
                            //     "</scri" + "pt></he" + "ad><bo" + "dy onl" + "oad='step1()'>\n" +
                            //     "<im" + "g src='" + url + "' /></bo" + "dy></h" + "tml>"
                            // var Pagelink = "about:blank";
                            // var pwa = window.open(Pagelink, "_new");
                            // pwa.document.open();
                            // pwa.document.write(isi);
                            // pwa.document.close();
                        }
                        else{
                            alert('Barang Tidak Ada');
                        }
                    })
                }
            </script>
        </div>
        <div class="col-lg-4 center-block">
            <div id="qrcode"></div>
        </div>
        <div class="col-lg-4 center-block">
            <a id="linkdl" href="" download class="btn btn-primary">Unduh Gambar</a>
        </div>
        <div class="col-lg-12 center-block">
            <div id="Detail"></div>
        </div>
    </div>
    <script>
        $('#linkdl').hide()
        function forceDownload(blob, filename) {
            var a = document.createElement('a');
            a.download = filename;
            a.href = blob;
            // For Firefox https://stackoverflow.com/a/32226068
            document.body.appendChild(a);
            a.click();
            a.remove();
        }

        // Current blob size limit is around 500MB for browsers
        function downloadResource(url, filename) {
            if (!filename) filename = url.split('\\').pop().split('/').pop();
            fetch(url, {
                headers: new Headers({
                    'Origin': location.origin
                }),
                mode: 'cors'
            })
                .then(response => response.blob())
                .then(blob => {
                    let blobUrl = window.URL.createObjectURL(blob);
                    forceDownload(blobUrl, filename);
                })
                .catch(e => console.error(e));
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\andre\PhpstormProjects\stockQR\app\Views/QR/print/index.blade.php ENDPATH**/ ?>