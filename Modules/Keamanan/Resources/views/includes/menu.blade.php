<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <img class="image" border="0" src="../../../app-assets/images/pages/patuh123 1.png" width="200px">
            <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route('home') }}"><span class="brand-logo">
                    </span>
                    {{-- <h2 class="brand-text">SIPATUH</h2> --}}
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="{{ Request::is('Keamanan/index') ? 'active' : 'nav-item' }} "><a
                    class="d-flex align-items-center" href="/Keamanan/index"><i data-feather="home"></i><span
                        class="menu-title text-truncate" data-i18n="home"><strong>Dashboard</strong></span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Menu Anda</span><i
                    data-feather="more-horizontal"></i>
            </li>
            {{-- <li class="{{ Request::is('Keamanan/datakeamanan*') ? 'active' : 'nav-item' }} "><a
                    class="d-flex align-items-center" href="/Keamanan/datakeamanan"><i data-feather="folder"></i><span
                        class="menu-title text-truncate" data-i18n="home">Data Keamanan</span></a>
            </li> --}}
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="folder"></i><span
                        class="menu-title text-truncate" data-i18n="Data Keamanan"><strong>Data
                            Keamanan</strong></span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="/Keamanan/datakeamanan"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Triwulan 1"><strong>Seluruh Data Tabel</strong></span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="/Keamanan/triwulan1"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Triwulan 1"><strong>Triwulan 1</strong></span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="/Keamanan/triwulan2"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Triwulan 2"><strong>Triwulan 2</strong></span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="/Keamanan/triwulan3"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Triwulan 3"><strong>Triwulan 3</strong></span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="/Keamanan/triwulan4"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="Triwulan 4"><strong>Triwulan 4</strong></span></a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('Keamanan/kepemimpinan*') ? 'active' : 'nav-item' }} "><a
                    class="d-flex align-items-center" href="/Keamanan/kepemimpinan"><i
                        data-feather="file-text"></i><span class="menu-title text-truncate"
                        data-i18n="home"><strong>Kepemimpinan dan Komitmen Manajemen</strong></span></a>
            </li>
            <li class="{{ Request::is('Keamanan/sosial*') ? 'active' : 'nav-item' }} "><a
                    class="d-flex align-items-center" href="/Keamanan/sosial"><i data-feather="file-text"></i><span
                        class="menu-title text-truncate" data-i18n="home"><strong>Sosialisasi, Kordinasi, Kerjasama
                            Lintas Sektoral Dan Kelembagaan Negara</strong></span></a>
            </li>
            <li class="{{ Request::is('Keamanan/pengamanan*') ? 'active' : 'nav-item' }} "><a
                    class="d-flex align-items-center" href="/Keamanan/pengamanan"><i data-feather="file-text"></i><span
                        class="menu-title text-truncate" data-i18n="home"><strong>Audit dan Assessment
                            Pengamanan</strong></span></a>
            </li>
            <li class="{{ Request::is('Keamanan/kerawanan*') ? 'active' : 'nav-item' }} "><a
                    class="d-flex align-items-center" href="/Keamanan/kerawanan"><i data-feather="file-text"></i><span
                        class="menu-title text-truncate" data-i18n="home"><strong>Identifikasi Tingkat Kerawanan
                            Keamanan</strong></span></a>
            </li>
            </li>
            <li class="{{ Request::is('Keamanan/pelatihan*') ? 'active' : 'nav-item' }} "><a
                    class="d-flex align-items-center" href="/Keamanan/pelatihan"><i data-feather="file-text"></i><span
                        class="menu-title text-truncate" data-i18n="home"><strong>Kompetensi Dan
                            Pelatihan</strong></span></a>
            </li>
            {{-- <li class="{{ Request::is('Keamanan/manager*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/Keamanan/manager"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="home">Inspeksi Manager</span></a>
          </li> --}}
            <li class="{{ Request::is('Keamanan/lapor*') ? 'active' : 'nav-item' }} "><a
                    class="d-flex align-items-center" href="/Keamanan/lapor"><i data-feather="file-text"></i><span
                        class="menu-title text-truncate" data-i18n="home"><strong>Pelaporan</strong></span></a>
            </li>
        </ul>
    </div>
</div>
