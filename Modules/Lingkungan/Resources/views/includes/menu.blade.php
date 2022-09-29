<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route('home') }}"><span class="brand-logo">
                        {{-- <img class="image" border="0" src="../../../app-assets/images/pages/logsip.png" width="20px" style="margin: 0px;padding: 0px color:white;"> --}}
                    </span>
                    <h2 class="brand-text">SIPATUH</h2>
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
            <li class="{{ Request::is('Lingkungan/index*') ? 'active' : 'nav-item' }} "><a
                    class="d-flex align-items-center" href="/Lingkungan/index"><i data-feather="home"></i><span
                        class="menu-title text-truncate" data-i18n="home">Dashboard</span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Menu Anda</span><i
                    data-feather="more-horizontal"></i>
            </li>

            {{-- <li class="{{ Request::is('Lingkungan/datalingkungan*') ? 'active' : 'nav-item' }}"><a
                    class="d-flex align-items-center" href="#"><i
                        data-feather="folder"></i><span class="menu-title text-truncate">Rekap Berkas</span></a>
            </li> --}}

            <!-- dokling -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="slack"></i><span
                        class="menu-title text-truncate">Dokling dan IL</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('Lingkungan/p1a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p1a"><span
                                class="menu-item text-truncate" data-i18n="List">a. Inventarisasi Dokling dan
                                IL</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/p1b*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p1b"><span
                                class="menu-item text-truncate" data-i18n="List">b. Dokling dan IL</span></a>
                    </li>
                </ul>
            </li>

            <!-- pplh -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                        class="menu-title text-truncate">PPLH</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('Lingkungan/p2a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p2a">
                            <span class="menu-item text-truncate" data-i18n="List">a. PPA_Air Laut</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/p2b*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p2b">
                            <span class="menu-item text-truncate" data-i18n="List">b. PPA (Domestik)</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/p2c*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p2c">
                            <span class="menu-item text-truncate" data-i18n="List">c. Pemanfaatan Air</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/p2d*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p2d">
                            <span class="menu-item text-truncate" data-i18n="List">d. PLB3</span></a>
                    </li>
                </ul>
            </li>

            <!-- ppau -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="command"></i><span
                        class="menu-title text-truncate">PPAU</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('Lingkungan/p3a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p3a">
                            <span class="menu-item text-truncate" data-i18n="List">a. PPA</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/p3b*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p3b">
                            <span class="menu-item text-truncate" data-i18n="List">b. PPU</span></a>
                    </li>
                </ul>
            </li>

            <!-- pppi -->
            <li class="{{ Request::is('Lingkungan/p4a*') ? 'active' : 'nav-item' }}"><a
                    class="d-flex align-items-center" href="/Lingkungan/p4a"><i data-feather="hexagon"></i><span
                        class="menu-title text-truncate">PPPI</span></a>
            </li>

            <!-- limbah -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i
                        data-feather="alert-circle"></i><span class="menu-title text-truncate">Limbah B3 dan Limbah
                        nonB3</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('Lingkungan/p5a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p5a">
                            <span class="menu-item text-truncate" data-i18n="List">1. PLB3</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/p5b*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p5b">
                            <span class="menu-item text-truncate" data-i18n="List">2. Neraca LB3</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/p5c*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p5c">
                            <span class="menu-item text-truncate" data-i18n="List">3. Laporan Pengelolaan Limbah
                                B3</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/p5d*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p5d">
                            <span class="menu-item text-truncate" data-i18n="List">4. Kontrak & MoU
                                Kerjasama</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/p5e*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/p5e">
                            <span class="menu-item text-truncate" data-i18n="List">5. Logbook</span></a>
                    </li>
                </ul>
            </li>

            <!-- kepatuhan -->
            <li class="{{ Request::is('Lingkungan/p6a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/Lingkungan/p6a"><i
                        data-feather="codepen"></i><span class="menu-title text-truncate">Kepatuhan</span></a>
            </li>

            <!-- plh -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i
                        data-feather="codesandbox"></i><span class="menu-title text-truncate">PLH</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::is('Lingkungan/p7a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/Lingkungan/p7a">
                            <span class="menu-item text-truncate" data-i18n="List">1. Penyampaian Dokumen</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/p7b*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/Lingkungan/p7b">
                            <span class="menu-item text-truncate" data-i18n="List">2. Sertifikat Hasil Uji</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/p7c*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/Lingkungan/p7c">
                            <span class="menu-item text-truncate" data-i18n="List">3. Laporan Neraca LB3</span></a>
                    </li>
                </ul>
            </li>

            <!-- PPL & DPL -->
            <li class="{{ Request::is('Lingkungan/p8a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/Lingkungan/p8a"><i
                        data-feather="framer"></i><span class="menu-title text-truncate">PPL & DPL</span></a>
            </li>

            <!-- Kepatuhan Kinerja -->
            <li class="{{ Request::is('Lingkungan/p9a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/Lingkungan/p9a"><i
                        data-feather="grid"></i><span class="menu-title text-truncate">Kepatuhan Kinerja</span></a>
            </li>

            {{-- <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="file"></i><span
                        class="menu-title text-truncate">Form Upload</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate"
                                data-i18n="List">A. Inventarisasi</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('Lingkungan/saprofile*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/Lingkungan/saprofile"><span
                                        class="menu-item text-truncate" data-i18n="Account">Form SA-Profile
                                        Perusahaan</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="#"><span
                                        class="menu-item text-truncate" data-i18n="Security">Form SA-Izin
                                        Lingkungan</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point1a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/point1a"><span
                                class="menu-item text-truncate" data-i18n="List">1. Dokling dan IL</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point2a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/point2a"><span
                                class="menu-item text-truncate" data-i18n="List">2. PPLH</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point3a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/point3a"><span
                                class="menu-item text-truncate" data-i18n="List">3. PPAU</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point4a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/point4a"><span
                                class="menu-item text-truncate" data-i18n="List">4. PPPI</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point5a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/point5a"><span
                                class="menu-item text-truncate" data-i18n="List">5. Limbah B3 & Non B3</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point6a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/point6a"><span
                                class="menu-item text-truncate" data-i18n="List">6. Kepatuhan</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point7a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/point7a"><span
                                class="menu-item text-truncate" data-i18n="List">7. PLH</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point8a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/point8a"><span
                                class="menu-item text-truncate" data-i18n="List">8. PPL & DPL</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point9a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/Lingkungan/point9a"><span
                                class="menu-item text-truncate" data-i18n="List">9. Kepatuhan Kinerja</span></a>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div>
