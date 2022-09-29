@can('is_admin')
    @if ('dashboardk3')
        <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route('home') }}"><span class="brand-logo">
                                <img class="image" border="0" src="../../../app-assets/images/pages/udiklat.png"
                                    width="20px" style="margin: 0px;padding: 0px color:white;">
                            </span>
                            <h2 class="brand-text">UPDL BOGOR</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                                class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                                class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                                data-feather="disc" data-ticon="disc"></i></a></li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="{{ Request::is('dashboardk3*') ? 'active' : 'nav-item' }} "><a
                            class="d-flex align-items-center" href="/dashboardk3"><i data-feather="home"></i><span
                                class="menu-title text-truncate" data-i18n="home">Dashboard</span></a>
                    </li>
                    <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Verifikator</span><i
                            data-feather="more-horizontal"></i>
                    </li>
                    {{-- 2022 --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span
                                class="menu-title text-truncate">2022</span></a>
                        <ul class="menu-content">
                            <!-- kantor Induk -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">KANTOR
                                        INDUK</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('admin1a*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/#"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/#"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/#"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/#"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- bogor -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        BOGOR</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogork3tw1*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3tw1"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogork3tw2*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3tw2"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogork3tw3*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3tw3"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogork3tw4*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3tw4"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Padang -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        PADANG</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/padangk3"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('padangk3tw1*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/padangk3tw1"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('padangk3tw2*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/padangk3tw2"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('padangk3tw3*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/padangk3tw3"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('padangk3tw4*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/padangk3tw4"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Banjarbaru -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        BANJARBARU</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/banjarbaruk3"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('banjarbaruk3tw1*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/banjarbaruk3tw1"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('banjarbaruk3tw2*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/banjarbaruk3tw2"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('banjarbaruk3tw3*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/banjarbaruk3tw3"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('banjarbaruk3tw4*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/banjarbaruk3tw4"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Jakarta -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        JAKARTA</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/jakartak3"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('jakartak3tw1*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/jakartak3tw1"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('jakartak3tw2*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/jakartak3tw2"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('jakartak3tw3*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/jakartak3tw3"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('jakartak3tw4*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/jakartak3tw4"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- MAKASAR -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        MAKASAR</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/makasark3"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('makasark3tw1*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/makasark3tw1"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('makasark3tw2*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/makasark3tw2"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('makasark3tw3*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/makasark3tw3"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('makasark3tw4*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/makasark3tw4"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- PALEMBANG -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        PALEMBANG</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/palembangk3"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('palembangk3tw1*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/palembangk3tw1"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('palembangk3tw2*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/palembangk3tw2"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('palembangk3tw3*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/palembangk3tw3"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('palembangk3tw4*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/palembangk3tw4"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- PANDAAN -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        PANDAAN</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/pandaank3"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('pandaank3tw1*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/pandaank3tw1"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('pandaank3tw2*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/pandaank3tw2"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('pandaank3tw3*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/pandaank3tw3"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('pandaank3tw4*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/pandaank3tw4"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- SURALAYA -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        SURALAYA</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/suralayak3"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('suralayak3tw1*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/suralayak3tw1"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('suralayak3tw2*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/suralayak3tw2"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('suralayak3tw3*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/suralayak3tw3"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('suralayak3tw4*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/suralayak3tw4"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- TUNTUNGAN -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        TUNTUNGAN</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('#*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/tuntungank3"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('tuntungank3tw1*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/tuntungank3tw1"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('tuntungank3tw2*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/tuntungank3tw2"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('tuntungank3tw3*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/tuntungank3tw3"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('tuntungank3tw4*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/tuntungank3tw4"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    {{-- 2023 --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">2023</span></a>
                        <ul class="menu-content">
                            <!-- kantor Induk -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">KANTOR
                                        INDUK</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('admin1a*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogork3tw1*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3tw1"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogork3tw2*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3tw2"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogork3tw3*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3tw3"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogork3tw4*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3tw4"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- bogor -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        BOGOR</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('admin1a*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogork3tw1*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3tw1"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogork3tw2*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3tw2"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogork3tw3*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3tw3"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogork3tw4*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogork3tw4"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Padang -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        PADANG</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('admin1a*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/admin1a"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Banjarbaru -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        BANJARBARU</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('admin1a*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/admin1a"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Jakarta -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        JAKARTA</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('admin1a*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/admin1a"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>

                            <!-- MAKASAR -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        MAKASAR</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('admin1a*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/admin1a"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- PALEMBANG -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        PALEMBANG</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('admin1a*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/admin1a"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- PANDAAN -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        PANDAAN</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('admin1a*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/admin1a"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- SURALAYA -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        SURALAYA</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('admin1a*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/admin1a"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            <!-- TUNTUNGAN -->
                            <li class="#"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                                        TUNTUNGAN</span></a>
                                <ul class="menu-content">
                                    <li class="{{ Request::is('admin1a*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/admin1a"><span
                                                class="menu-item text-truncate" data-i18n="List">Keseluruhan
                                                Data</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 1</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 2</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 3</span></a>
                                    </li>
                                    <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                            class="d-flex align-items-center" href="/bogor1b"><span
                                                class="menu-item text-truncate" data-i18n="List">Triwulan 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            {{-- menu contoh --}}
                            {{-- <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/banjarbaruk3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">KANTOR INDUK</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/banjarbaruk3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL BANJARBARU</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/bogork3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL BOGOR</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/padangk3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL PADANG</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/jakartak3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL JAKARTA</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/makasark3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL MAKASAR</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/makasark3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL MAKASAR</span></a>
          </li>
          <li class="{{ Request::is('palembangk3*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/palembangk3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL PALEMBANG</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/pandaank3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL PANDAAN</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/semarangk3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL SEMARANG</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/semarangk3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL SEMARANG</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/suralayak3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL SURALAYA</span></a>
          </li>
          <li class="{{ Request::is('contoh*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/tuntungank3"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="home">UPDL TUNTUNGAN</span></a>
          </li>
          <li class="{{ Request::is('K3/form*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/form"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="home">Form Upload</span></a>
          </li> --}}
                        </ul>
            </div>
        </div>
    @endif
@endcan
