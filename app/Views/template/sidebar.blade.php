<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/barang" class="brand-link">
        <img src="{{base_url('assets/logo.jpeg')}}" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">PT. BBG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{session()->get('username')}}</a>
                <a href="#" class="d-block">{{session()->get('jenis_user')}}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="faslse">
                <li class="nav-item">
                    <a href="{{base_url('/barang')}}" class="nav-link">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Barang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{base_url('/permintaan')}}" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            Permintaan Barang
                        </p>
                    </a>
                </li>
                <?php
                helper('admin');
                ?>
                @if(checkIsAdmin())
                    <li class="nav-item">
                        <a href="{{base_url('/akun')}}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Pengolahan Akun
                            </p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{base_url('/QR/barangmasuk')}}" class="nav-link">
                        <i class="nav-icon fas fa-qrcode"></i>
                        <p>
                            Scan QR Barang Masuk
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{base_url('/QR/barangkeluar')}}" class="nav-link">
                        <i class="nav-icon fas fa-qrcode"></i>
                        <p>
                            Scan QR Barang Keluar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{base_url('/QR/printQR')}}" class="nav-link">
                        <i class="nav-icon fas fa-print"></i>
                        <p>
                            Cetak QR Code Barang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{base_url('/laporan')}}" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>