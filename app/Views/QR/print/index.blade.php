@extends('template/index')

@section('content')
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
            <form onsubmit="klik()" action="#">
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
                    $.get("{{base_url('/barang/checkKodeBarang')}}"+'/'+kodebarang,function (data){
                        if(data=='1'){
                            $('#qrcode').html('<im'+'g src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl='+kodebarang+'&choe=UTF-8&chld=Q">')
                            $('#Detail').html('<h'+'6>Silahkan Simpan Gambar Tersebut lalu cetak sesuai dengan kebutuhan</'+'h4>')
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
        <div class="col-lg-12 center-block">
            <div id="Detail"></div>
        </div>
    </div>
@endsection