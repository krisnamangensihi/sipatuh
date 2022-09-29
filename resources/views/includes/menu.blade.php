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
            <li class="{{ Request::is('adling*') ? 'active' : 'nav-item' }} "><a class="d-flex align-items-center"
                    href="/adling"><i data-feather="home"></i><span class="menu-title text-truncate"
                        data-i18n="home">Dashboard</span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Menu Anda</span><i
                    data-feather="more-horizontal"></i>
            </li>

            <!-- kantor induk -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="octagon"></i><span
                        class="menu-title text-truncate">Kantor Induk</span></a>
                <ul class="menu-content">
                    <!-- dokling -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="slack"></i><span class="menu-title text-truncate">Dokling dan
                                IL</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('kantor1a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor1a"><span
                                        class="menu-item text-truncate" data-i18n="List">a. Inventarisasi Dokling dan
                                        IL</span></a>
                            </li>
                            <li class="{{ Request::is('kantor1b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor1b"><span
                                        class="menu-item text-truncate" data-i18n="List">b. Dokling dan IL</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pplh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate">PPLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('kantor2a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor2a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA_Air Laut</span></a>
                            </li>
                            <li class="{{ Request::is('kantor2b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor2b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPA
                                        (Domestik)</span></a>
                            </li>
                            <li class="{{ Request::is('kantor2c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor2c">
                                    <span class="menu-item text-truncate" data-i18n="List">c. Pemanfaatan
                                        Air</span></a>
                            </li>
                            <li class="{{ Request::is('kantor2d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor2d">
                                    <span class="menu-item text-truncate" data-i18n="List">d. PLB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- ppau -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="command"></i><span class="menu-title text-truncate">PPAU</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('kantor3a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor3a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA</span></a>
                            </li>
                            <li class="{{ Request::is('kantor3b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor3b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPU</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pppi -->
                    <li class="{{ Request::is('kantor4a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/kantor4a"><i data-feather="hexagon"></i><span
                                class="menu-title text-truncate">PPPI</span></a>
                    </li>
                    <!-- limbah -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="alert-circle"></i><span class="menu-title text-truncate">Limbah B3 dan
                                Limbah nonB3</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('kantor5a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor5a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. PLB3</span></a>
                            </li>
                            <li class="{{ Request::is('kantor5b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor5b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Neraca LB3</span></a>
                            </li>
                            <li class="{{ Request::is('kantor5c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor5c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Pengelolaan
                                        Limbah B3</span></a>
                            </li>
                            <li class="{{ Request::is('kantor5d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor5d">
                                    <span class="menu-item text-truncate" data-i18n="List">4. Kontak & MoU
                                        Kerjasama</span></a>
                            </li>
                            <li class="{{ Request::is('kantor5e*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kantor5e">
                                    <span class="menu-item text-truncate" data-i18n="List">5. Logbook</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- kepatuhan -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="codepen"></i><span class="menu-title text-truncate">Kepatuhan</span></a>
                    </li>
                    <!-- plh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="codesandbox"></i><span class="menu-title text-truncate">PLH</span></a>
                        <ul class="menu-content">
                            <li class="#"><a class="d-flex align-items-center" href="#">
                                    <span class="menu-item text-truncate" data-i18n="List">1. Penyampaian
                                        Dokumen</span></a>
                            </li>
                            <li class="#"><a class="d-flex align-items-center" href="#">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Sertifikat Hasil
                                        Uji</span></a>
                            </li>
                            <li class="#"><a class="d-flex align-items-center" href="#">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Neraca
                                        LB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- PPL & DPL -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="framer"></i><span class="menu-title text-truncate">PPL & DPL</span></a>
                    </li>
                    <!-- Kepatuhan Kinerja -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">Kepatuhan
                                Kinerja</span></a>
                    </li>
                </ul>
            </li>

            <!-- bogor -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span
                        class="menu-title text-truncate">UPDL
                        Bogor</span></a>
                <ul class="menu-content">
                    <!-- dokling -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="slack"></i><span class="menu-title text-truncate">Dokling dan
                                IL</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('admin1a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/admin1a"><span
                                        class="menu-item text-truncate" data-i18n="List">a. Inventarisasi Dokling dan
                                        IL</span></a>
                            </li>
                            <li class="{{ Request::is('bogor1b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogor1b"><span
                                        class="menu-item text-truncate" data-i18n="List">b. Dokling dan IL</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pplh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate">PPLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor2a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogor2a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA_Air Laut</span></a>
                            </li>
                            <li class="{{ Request::is('bogor2b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogor2b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPA
                                        (Domestik)</span></a>
                            </li>
                            <li class="{{ Request::is('bogor2c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogor2c">
                                    <span class="menu-item text-truncate" data-i18n="List">c. Pemanfaatan
                                        Air</span></a>
                            </li>
                            <li class="{{ Request::is('bogor2d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogor2d">
                                    <span class="menu-item text-truncate" data-i18n="List">d. PLB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- ppau -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="command"></i><span class="menu-title text-truncate">PPAU</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor3a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogor3a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA</span></a>
                            </li>
                            <li class="{{ Request::is('bogor3b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogor3b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPU</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pppi -->
                    <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/bogor4a"><i data-feather="hexagon"></i><span
                                class="menu-title text-truncate">PPPI</span></a>
                    </li>
                    <!-- limbah -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="alert-circle"></i><span class="menu-title text-truncate">Limbah B3 dan
                                Limbah nonB3</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor5a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogor5a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. PLB3</span></a>
                            </li>
                            <li class="{{ Request::is('bogor5b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogor5b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Neraca LB3</span></a>
                            </li>
                            <li class="{{ Request::is('bogor5c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogor5c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Pengelolaan
                                        Limbah B3</span></a>
                            </li>
                            <li class="{{ Request::is('bogor5d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogor5d">
                                    <span class="menu-item text-truncate" data-i18n="List">4. Kontak & MoU
                                        Kerjasama</span></a>
                            </li>
                            <li class="{{ Request::is('bogor5e*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogor5e">
                                    <span class="menu-item text-truncate" data-i18n="List">5. Logbook</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- kepatuhan -->
                    <li class="{{ Request::is('bogor6a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/bogor6a"><i
                                data-feather="codepen"></i><span class="menu-title text-truncate">Kepatuhan</span></a>
                    </li>
                    <!-- plh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="codesandbox"></i><span class="menu-title text-truncate">PLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor7a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/bogor7a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. Penyampaian
                                        Dokumen</span></a>
                            </li>
                            <li class="{{ Request::is('bogor7b*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/bogor7b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Sertifikat Hasil
                                        Uji</span></a>
                            </li>
                            <li class="{{ Request::is('bogor7c*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/bogor7c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Neraca
                                        LB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- PPL & DPL -->
                    <li class="{{ Request::is('bogor8a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/bogor8a"><i
                                data-feather="framer"></i><span class="menu-title text-truncate">PPL & DPL</span></a>
                    </li>
                    <!-- Kepatuhan Kinerja -->
                    <li class="{{ Request::is('bogor9a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/bogor9a"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">Kepatuhan
                                Kinerja</span></a>
                    </li>
                </ul>
            </li>

            <!-- banjar -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i
                        data-feather="framer"></i><span class="menu-title text-truncate">UPDL
                        Banjarbaru</span></a>
                <ul class="menu-content">
                    <!-- dokling -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="slack"></i><span class="menu-title text-truncate">Dokling dan
                                IL</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('banjar1a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar1a"><span
                                        class="menu-item text-truncate" data-i18n="List">a. Inventarisasi Dokling dan
                                        IL</span></a>
                            </li>
                            <li class="{{ Request::is('banjar1b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar1b"><span
                                        class="menu-item text-truncate" data-i18n="List">b. Dokling dan IL</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pplh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate">PPLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('banjar2a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar2a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA_Air Laut</span></a>
                            </li>
                            <li class="{{ Request::is('banjar2b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar2b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPA
                                        (Domestik)</span></a>
                            </li>
                            <li class="{{ Request::is('banjar2c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar2c">
                                    <span class="menu-item text-truncate" data-i18n="List">c. Pemanfaatan
                                        Air</span></a>
                            </li>
                            <li class="{{ Request::is('banjar2d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar2d">
                                    <span class="menu-item text-truncate" data-i18n="List">d. PLB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- ppau -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="command"></i><span class="menu-title text-truncate">PPAU</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('banjar3a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar3a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA</span></a>
                            </li>
                            <li class="{{ Request::is('banjar3b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar3b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPU</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pppi -->
                    <li class="{{ Request::is('banjar4a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/banjar4a"><i data-feather="hexagon"></i><span
                                class="menu-title text-truncate">PPPI</span></a>
                    </li>
                    <!-- limbah -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="alert-circle"></i><span class="menu-title text-truncate">Limbah B3 dan
                                Limbah nonB3</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('banjar5a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar5a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. PLB3</span></a>
                            </li>
                            <li class="{{ Request::is('banjar5b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar5b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Neraca LB3</span></a>
                            </li>
                            <li class="{{ Request::is('banjar5c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar5c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Pengelolaan
                                        Limbah B3</span></a>
                            </li>
                            <li class="{{ Request::is('banjar5d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar5d">
                                    <span class="menu-item text-truncate" data-i18n="List">4. Kontak & MoU
                                        Kerjasama</span></a>
                            </li>
                            <li class="{{ Request::is('banjar5e*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjar5e">
                                    <span class="menu-item text-truncate" data-i18n="List">5. Logbook</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- kepatuhan -->
                    <li class="{{ Request::is('banjar6a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/banjar6a"><i
                                data-feather="codepen"></i><span class="menu-title text-truncate">Kepatuhan</span></a>
                    </li>
                    <!-- plh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="codesandbox"></i><span class="menu-title text-truncate">PLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('banjar7a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/banjar7a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. Penyampaian
                                        Dokumen</span></a>
                            </li>
                            <li class="{{ Request::is('banjar7b*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/banjar7b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Sertifikat Hasil
                                        Uji</span></a>
                            </li>
                            <li class="{{ Request::is('banjar7c*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/banjar7c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Neraca
                                        LB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- PPL & DPL -->
                    <li class="{{ Request::is('banjar8a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/banjar8a"><i
                                data-feather="framer"></i><span class="menu-title text-truncate">PPL & DPL</span></a>
                    </li>
                    <!-- Kepatuhan Kinerja -->
                    <li class="{{ Request::is('banjar9a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/banjar9a"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">Kepatuhan
                                Kinerja</span></a>
                    </li>
                </ul>
            </li>

            <!-- jakarta -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="figma"></i><span
                        class="menu-title text-truncate">UPDL
                        Jakarta</span></a>
                <ul class="menu-content">
                    <!-- dokling -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="slack"></i><span class="menu-title text-truncate">Dokling dan
                                IL</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('jakarta1a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta1a"><span
                                        class="menu-item text-truncate" data-i18n="List">a. Inventarisasi Dokling dan
                                        IL</span></a>
                            </li>
                            <li class="{{ Request::is('jakarta1b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta1b"><span
                                        class="menu-item text-truncate" data-i18n="List">b. Dokling dan IL</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pplh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate">PPLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('jakarta2a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta2a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA_Air Laut</span></a>
                            </li>
                            <li class="{{ Request::is('jakarta2b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta2b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPA
                                        (Domestik)</span></a>
                            </li>
                            <li class="{{ Request::is('jakarta2c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta2c">
                                    <span class="menu-item text-truncate" data-i18n="List">c. Pemanfaatan
                                        Air</span></a>
                            </li>
                            <li class="{{ Request::is('jakarta2d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta2d">
                                    <span class="menu-item text-truncate" data-i18n="List">d. PLB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- ppau -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="command"></i><span class="menu-title text-truncate">PPAU</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('jakarta3a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta3a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA</span></a>
                            </li>
                            <li class="{{ Request::is('jakarta3b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta3b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPU</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pppi -->
                    <li class="{{ Request::is('jakarta4a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/jakarta4a"><i data-feather="hexagon"></i><span
                                class="menu-title text-truncate">PPPI</span></a>
                    </li>
                    <!-- limbah -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="alert-circle"></i><span class="menu-title text-truncate">Limbah B3 dan
                                Limbah nonB3</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('jakarta5a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta5a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. PLB3</span></a>
                            </li>
                            <li class="{{ Request::is('jakarta5b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta5b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Neraca LB3</span></a>
                            </li>
                            <li class="{{ Request::is('jakarta5c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta5c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Pengelolaan
                                        Limbah B3</span></a>
                            </li>
                            <li class="{{ Request::is('jakarta5d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta5d">
                                    <span class="menu-item text-truncate" data-i18n="List">4. Kontak & MoU
                                        Kerjasama</span></a>
                            </li>
                            <li class="{{ Request::is('jakarta5e*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakarta5e">
                                    <span class="menu-item text-truncate" data-i18n="List">5. Logbook</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- kepatuhan -->
                    <li class="{{ Request::is('jakarta6a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/jakarta6a"><i
                                data-feather="codepen"></i><span class="menu-title text-truncate">Kepatuhan</span></a>
                    </li>
                    <!-- plh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="codesandbox"></i><span class="menu-title text-truncate">PLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('jakarta7a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/jakarta7a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. Penyampaian
                                        Dokumen</span></a>
                            </li>
                            <li class="{{ Request::is('jakarta7b*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/jakarta7b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Sertifikat Hasil
                                        Uji</span></a>
                            </li>
                            <li class="{{ Request::is('jakarta7c*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/jakarta7c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Neraca
                                        LB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- PPL & DPL -->
                    <li class="{{ Request::is('jakarta8a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/jakarta8a"><i
                                data-feather="framer"></i><span class="menu-title text-truncate">PPL & DPL</span></a>
                    </li>
                    <!-- Kepatuhan Kinerja -->
                    <li class="{{ Request::is('jakarta9a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/jakarta9a"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">Kepatuhan
                                Kinerja</span></a>
                    </li>
                </ul>
            </li>

            <!-- makasar -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i
                        data-feather="codepen"></i><span class="menu-title text-truncate">UPDL
                        Makasar</span></a>
                <ul class="menu-content">
                    <!-- dokling -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="slack"></i><span class="menu-title text-truncate">Dokling dan
                                IL</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('makasar1a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar1a"><span
                                        class="menu-item text-truncate" data-i18n="List">a. Inventarisasi Dokling dan
                                        IL</span></a>
                            </li>
                            <li class="{{ Request::is('makasar1b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar1b"><span
                                        class="menu-item text-truncate" data-i18n="List">b. Dokling dan IL</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pplh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate">PPLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('makasar2a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar2a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA_Air Laut</span></a>
                            </li>
                            <li class="{{ Request::is('makasar2b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar2b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPA
                                        (Domestik)</span></a>
                            </li>
                            <li class="{{ Request::is('makasar2c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar2c">
                                    <span class="menu-item text-truncate" data-i18n="List">c. Pemanfaatan
                                        Air</span></a>
                            </li>
                            <li class="{{ Request::is('makasar2d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar2d">
                                    <span class="menu-item text-truncate" data-i18n="List">d. PLB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- ppau -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="command"></i><span class="menu-title text-truncate">PPAU</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('makasar3a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar3a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA</span></a>
                            </li>
                            <li class="{{ Request::is('makasar3b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar3b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPU</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pppi -->
                    <li class="{{ Request::is('makasar4a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/makasar4a"><i data-feather="hexagon"></i><span
                                class="menu-title text-truncate">PPPI</span></a>
                    </li>
                    <!-- limbah -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="alert-circle"></i><span class="menu-title text-truncate">Limbah B3 dan
                                Limbah nonB3</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('makasar5a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar5a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. PLB3</span></a>
                            </li>
                            <li class="{{ Request::is('makasar5b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar5b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Neraca LB3</span></a>
                            </li>
                            <li class="{{ Request::is('makasar5c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar5c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Pengelolaan
                                        Limbah B3</span></a>
                            </li>
                            <li class="{{ Request::is('makasar5d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar5d">
                                    <span class="menu-item text-truncate" data-i18n="List">4. Kontak & MoU
                                        Kerjasama</span></a>
                            </li>
                            <li class="{{ Request::is('makasar5e*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasar5e">
                                    <span class="menu-item text-truncate" data-i18n="List">5. Logbook</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- kepatuhan -->
                    <li class="{{ Request::is('makasar6a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/makasar6a"><i
                                data-feather="codepen"></i><span class="menu-title text-truncate">Kepatuhan</span></a>
                    </li>
                    <!-- plh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="codesandbox"></i><span class="menu-title text-truncate">PLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('makasar7a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/makasar7a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. Penyampaian
                                        Dokumen</span></a>
                            </li>
                            <li class="{{ Request::is('makasar7b*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/makasar7b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Sertifikat Hasil
                                        Uji</span></a>
                            </li>
                            <li class="{{ Request::is('makasar7c*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/makasar7c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Neraca
                                        LB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- PPL & DPL -->
                    <li class="{{ Request::is('makasar8a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/makasar8a"><i
                                data-feather="framer"></i><span class="menu-title text-truncate">PPL & DPL</span></a>
                    </li>
                    <!-- Kepatuhan Kinerja -->
                    <li class="{{ Request::is('makasar9a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/makasar9a"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">Kepatuhan
                                Kinerja</span></a>
                    </li>
                </ul>
            </li>

            <!-- padang -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i
                        data-feather="command"></i><span class="menu-title text-truncate">UPDL
                        Padang</span></a>
                <ul class="menu-content">
                    <!-- dokling -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="slack"></i><span class="menu-title text-truncate">Dokling dan
                                IL</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('padang1a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang1a"><span
                                        class="menu-item text-truncate" data-i18n="List">a. Inventarisasi Dokling dan
                                        IL</span></a>
                            </li>
                            <li class="{{ Request::is('padang1b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang1b"><span
                                        class="menu-item text-truncate" data-i18n="List">b. Dokling dan IL</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pplh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate">PPLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('padang2a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang2a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA_Air Laut</span></a>
                            </li>
                            <li class="{{ Request::is('padang2b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang2b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPA
                                        (Domestik)</span></a>
                            </li>
                            <li class="{{ Request::is('padang2c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang2c">
                                    <span class="menu-item text-truncate" data-i18n="List">c. Pemanfaatan
                                        Air</span></a>
                            </li>
                            <li class="{{ Request::is('padang2d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang2d">
                                    <span class="menu-item text-truncate" data-i18n="List">d. PLB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- ppau -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="command"></i><span class="menu-title text-truncate">PPAU</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('padang3a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang3a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA</span></a>
                            </li>
                            <li class="{{ Request::is('padang3b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang3b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPU</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pppi -->
                    <li class="{{ Request::is('padang4a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/padang4a"><i data-feather="hexagon"></i><span
                                class="menu-title text-truncate">PPPI</span></a>
                    </li>
                    <!-- limbah -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="alert-circle"></i><span class="menu-title text-truncate">Limbah B3 dan
                                Limbah nonB3</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('padang5a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang5a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. PLB3</span></a>
                            </li>
                            <li class="{{ Request::is('padang5b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang5b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Neraca LB3</span></a>
                            </li>
                            <li class="{{ Request::is('padang5c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang5c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Pengelolaan
                                        Limbah B3</span></a>
                            </li>
                            <li class="{{ Request::is('padang5d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang5d">
                                    <span class="menu-item text-truncate" data-i18n="List">4. Kontak & MoU
                                        Kerjasama</span></a>
                            </li>
                            <li class="{{ Request::is('padang5e*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padang5e">
                                    <span class="menu-item text-truncate" data-i18n="List">5. Logbook</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- kepatuhan -->
                    <li class="{{ Request::is('padang6a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/padang6a"><i
                                data-feather="codepen"></i><span class="menu-title text-truncate">Kepatuhan</span></a>
                    </li>
                    <!-- plh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="codesandbox"></i><span class="menu-title text-truncate">PLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('padang7a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/padang7a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. Penyampaian
                                        Dokumen</span></a>
                            </li>
                            <li class="{{ Request::is('padang7b*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/padang7b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Sertifikat Hasil
                                        Uji</span></a>
                            </li>
                            <li class="{{ Request::is('padang7c*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/padang7c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Neraca
                                        LB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- PPL & DPL -->
                    <li class="{{ Request::is('padang8a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/padang8a"><i
                                data-feather="framer"></i><span class="menu-title text-truncate">PPL & DPL</span></a>
                    </li>
                    <!-- Kepatuhan Kinerja -->
                    <li class="{{ Request::is('padang9a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/padang9a"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">Kepatuhan
                                Kinerja</span></a>
                    </li>
                </ul>
            </li>

            <!-- palembang -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i
                        data-feather="codesandbox"></i><span class="menu-title text-truncate">UPDL
                        Palembang</span></a>
                <ul class="menu-content">
                    <!-- dokling -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="slack"></i><span class="menu-title text-truncate">Dokling dan
                                IL</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('palembang1a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang1a"><span
                                        class="menu-item text-truncate" data-i18n="List">a. Inventarisasi Dokling dan
                                        IL</span></a>
                            </li>
                            <li class="{{ Request::is('palembang1b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang1b"><span
                                        class="menu-item text-truncate" data-i18n="List">b. Dokling dan IL</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pplh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate">PPLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('palembang2a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang2a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA_Air Laut</span></a>
                            </li>
                            <li class="{{ Request::is('palembang2b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang2b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPA
                                        (Domestik)</span></a>
                            </li>
                            <li class="{{ Request::is('palembang2c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang2c">
                                    <span class="menu-item text-truncate" data-i18n="List">c. Pemanfaatan
                                        Air</span></a>
                            </li>
                            <li class="{{ Request::is('palembang2d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang2d">
                                    <span class="menu-item text-truncate" data-i18n="List">d. PLB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- ppau -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="command"></i><span class="menu-title text-truncate">PPAU</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('palembang3a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang3a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA</span></a>
                            </li>
                            <li class="{{ Request::is('palembang3b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang3b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPU</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pppi -->
                    <li class="{{ Request::is('palembang4a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/palembang4a"><i data-feather="hexagon"></i><span
                                class="menu-title text-truncate">PPPI</span></a>
                    </li>
                    <!-- limbah -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="alert-circle"></i><span class="menu-title text-truncate">Limbah B3 dan
                                Limbah nonB3</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('palembang5a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang5a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. PLB3</span></a>
                            </li>
                            <li class="{{ Request::is('palembang5b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang5b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Neraca LB3</span></a>
                            </li>
                            <li class="{{ Request::is('palembang5c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang5c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Pengelolaan
                                        Limbah B3</span></a>
                            </li>
                            <li class="{{ Request::is('palembang5d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang5d">
                                    <span class="menu-item text-truncate" data-i18n="List">4. Kontak & MoU
                                        Kerjasama</span></a>
                            </li>
                            <li class="{{ Request::is('palembang5e*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembang5e">
                                    <span class="menu-item text-truncate" data-i18n="List">5. Logbook</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- kepatuhan -->
                    <li class="{{ Request::is('palembang6a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/palembang6a"><i
                                data-feather="codepen"></i><span class="menu-title text-truncate">Kepatuhan</span></a>
                    </li>
                    <!-- plh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="codesandbox"></i><span class="menu-title text-truncate">PLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('palembang7a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/palembang7a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. Penyampaian
                                        Dokumen</span></a>
                            </li>
                            <li class="{{ Request::is('palembang7b*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/palembang7b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Sertifikat Hasil
                                        Uji</span></a>
                            </li>
                            <li class="{{ Request::is('palembang7c*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/palembang7c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Neraca
                                        LB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- PPL & DPL -->
                    <li class="{{ Request::is('palembang8a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/palembang8a"><i
                                data-feather="framer"></i><span class="menu-title text-truncate">PPL & DPL</span></a>
                    </li>
                    <!-- Kepatuhan Kinerja -->
                    <li class="{{ Request::is('palembang9a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/palembang9a"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">Kepatuhan
                                Kinerja</span></a>
                    </li>
                </ul>
            </li>

            <!-- pandaan -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i
                        data-feather="crosshair"></i><span class="menu-title text-truncate">UPDL
                        Pandaan</span></a>
                <ul class="menu-content">
                    <!-- dokling -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="slack"></i><span class="menu-title text-truncate">Dokling dan
                                IL</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('pandaan1a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan1a"><span
                                        class="menu-item text-truncate" data-i18n="List">a. Inventarisasi Dokling dan
                                        IL</span></a>
                            </li>
                            <li class="{{ Request::is('pandaan1b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan1b"><span
                                        class="menu-item text-truncate" data-i18n="List">b. Dokling dan
                                        IL</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pplh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate">PPLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('pandaan2a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan2a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA_Air
                                        Laut</span></a>
                            </li>
                            <li class="{{ Request::is('pandaan2b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan2b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPA
                                        (Domestik)</span></a>
                            </li>
                            <li class="{{ Request::is('pandaan2c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan2c">
                                    <span class="menu-item text-truncate" data-i18n="List">c. Pemanfaatan
                                        Air</span></a>
                            </li>
                            <li class="{{ Request::is('pandaan2d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan2d">
                                    <span class="menu-item text-truncate" data-i18n="List">d. PLB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- ppau -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="command"></i><span class="menu-title text-truncate">PPAU</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('pandaan3a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan3a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA</span></a>
                            </li>
                            <li class="{{ Request::is('pandaan3b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan3b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPU</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pppi -->
                    <li class="{{ Request::is('pandaan4a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/pandaan4a"><i
                                data-feather="hexagon"></i><span class="menu-title text-truncate">PPPI</span></a>
                    </li>
                    <!-- limbah -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="alert-circle"></i><span class="menu-title text-truncate">Limbah B3 dan
                                Limbah nonB3</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('pandaan5a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan5a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. PLB3</span></a>
                            </li>
                            <li class="{{ Request::is('pandaan5b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan5b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Neraca LB3</span></a>
                            </li>
                            <li class="{{ Request::is('pandaan5c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan5c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Pengelolaan
                                        Limbah B3</span></a>
                            </li>
                            <li class="{{ Request::is('pandaan5d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan5d">
                                    <span class="menu-item text-truncate" data-i18n="List">4. Kontak & MoU
                                        Kerjasama</span></a>
                            </li>
                            <li class="{{ Request::is('pandaan5e*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaan5e">
                                    <span class="menu-item text-truncate" data-i18n="List">5. Logbook</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- kepatuhan -->
                    <li class="{{ Request::is('pandaan6a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/pandaan6a"><i
                                data-feather="codepen"></i><span
                                class="menu-title text-truncate">Kepatuhan</span></a>
                    </li>
                    <!-- plh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="codesandbox"></i><span class="menu-title text-truncate">PLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('pandaan7a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/pandaan7a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. Penyampaian
                                        Dokumen</span></a>
                            </li>
                            <li class="{{ Request::is('pandaan7b*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/pandaan7b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Sertifikat Hasil
                                        Uji</span></a>
                            </li>
                            <li class="{{ Request::is('pandaan7c*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/pandaan7c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Neraca
                                        LB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- PPL & DPL -->
                    <li class="{{ Request::is('pandaan8a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/pandaan8a"><i
                                data-feather="framer"></i><span class="menu-title text-truncate">PPL &
                                DPL</span></a>
                    </li>
                    <!-- Kepatuhan Kinerja -->
                    <li class="{{ Request::is('pandaan9a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/pandaan9a"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">Kepatuhan
                                Kinerja</span></a>
                    </li>
                </ul>
            </li>

            <!-- semarang -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i
                        data-feather="hexagon"></i><span class="menu-title text-truncate">UPDL
                        Semarang</span></a>
                <ul class="menu-content">
                    <!-- dokling -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="slack"></i><span class="menu-title text-truncate">Dokling dan
                                IL</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('semar1a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar1a"><span
                                        class="menu-item text-truncate" data-i18n="List">a. Inventarisasi Dokling
                                        dan
                                        IL</span></a>
                            </li>
                            <li class="{{ Request::is('semar1b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar1b"><span
                                        class="menu-item text-truncate" data-i18n="List">b. Dokling dan
                                        IL</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pplh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate">PPLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('semar2a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar2a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA_Air
                                        Laut</span></a>
                            </li>
                            <li class="{{ Request::is('semar2b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar2b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPA
                                        (Domestik)</span></a>
                            </li>
                            <li class="{{ Request::is('semar2c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar2c">
                                    <span class="menu-item text-truncate" data-i18n="List">c. Pemanfaatan
                                        Air</span></a>
                            </li>
                            <li class="{{ Request::is('semar2d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar2d">
                                    <span class="menu-item text-truncate" data-i18n="List">d. PLB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- ppau -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="command"></i><span class="menu-title text-truncate">PPAU</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('semar3a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar3a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA</span></a>
                            </li>
                            <li class="{{ Request::is('semar3b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar3b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPU</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pppi -->
                    <li class="{{ Request::is('semar4a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/semar4a"><i data-feather="hexagon"></i><span
                                class="menu-title text-truncate">PPPI</span></a>
                    </li>
                    <!-- limbah -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="alert-circle"></i><span class="menu-title text-truncate">Limbah B3 dan
                                Limbah nonB3</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('semar5a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar5a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. PLB3</span></a>
                            </li>
                            <li class="{{ Request::is('semar5b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar5b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Neraca LB3</span></a>
                            </li>
                            <li class="{{ Request::is('semar5c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar5c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Pengelolaan
                                        Limbah B3</span></a>
                            </li>
                            <li class="{{ Request::is('semar5d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar5d">
                                    <span class="menu-item text-truncate" data-i18n="List">4. Kontak & MoU
                                        Kerjasama</span></a>
                            </li>
                            <li class="{{ Request::is('semar5e*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semar5e">
                                    <span class="menu-item text-truncate" data-i18n="List">5. Logbook</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- kepatuhan -->
                    <li class="{{ Request::is('semar6a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/semar6a"><i
                                data-feather="codepen"></i><span
                                class="menu-title text-truncate">Kepatuhan</span></a>
                    </li>
                    <!-- plh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="codesandbox"></i><span class="menu-title text-truncate">PLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('semar7a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/semar7a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. Penyampaian
                                        Dokumen</span></a>
                            </li>
                            <li class="{{ Request::is('semar7b*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/semar7b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Sertifikat Hasil
                                        Uji</span></a>
                            </li>
                            <li class="{{ Request::is('semar7c*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/semar7c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Neraca
                                        LB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- PPL & DPL -->
                    <li class="{{ Request::is('semar8a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/semar8a"><i
                                data-feather="framer"></i><span class="menu-title text-truncate">PPL &
                                DPL</span></a>
                    </li>
                    <!-- Kepatuhan Kinerja -->
                    <li class="{{ Request::is('semar9a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/semar9a"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">Kepatuhan
                                Kinerja</span></a>
                    </li>
                </ul>
            </li>

            <!-- suralaya -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i
                        data-feather="package"></i><span class="menu-title text-truncate">UPDL
                        Suralaya</span></a>
                <ul class="menu-content">
                    <!-- dokling -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="slack"></i><span class="menu-title text-truncate">Dokling dan
                                IL</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('sura1a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/sura1a"><span
                                        class="menu-item text-truncate" data-i18n="List">a. Inventarisasi Dokling
                                        dan
                                        IL</span></a>
                            </li>
                            <li class="{{ Request::is('sura1b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/sura1b"><span
                                        class="menu-item text-truncate" data-i18n="List">b. Dokling dan
                                        IL</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pplh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate">PPLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('sura2a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="sura2a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA_Air
                                        Laut</span></a>
                            </li>
                            <li class="{{ Request::is('sura2b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="sura2b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPA
                                        (Domestik)</span></a>
                            </li>
                            <li class="{{ Request::is('sura2c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="sura2c">
                                    <span class="menu-item text-truncate" data-i18n="List">c. Pemanfaatan
                                        Air</span></a>
                            </li>
                            <li class="{{ Request::is('sura2d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="sura2d">
                                    <span class="menu-item text-truncate" data-i18n="List">d. PLB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- ppau -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="command"></i><span class="menu-title text-truncate">PPAU</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('sura3a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/sura3a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA</span></a>
                            </li>
                            <li class="{{ Request::is('sura3b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/sura3b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPU</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pppi -->
                    <li class="{{ Request::is('sura4a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/sura4a"><i data-feather="hexagon"></i><span
                                class="menu-title text-truncate">PPPI</span></a>
                    </li>
                    <!-- limbah -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="alert-circle"></i><span class="menu-title text-truncate">Limbah B3 dan
                                Limbah nonB3</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('sura5a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/sura5a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. PLB3</span></a>
                            </li>
                            <li class="{{ Request::is('sura5b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/sura5b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Neraca LB3</span></a>
                            </li>
                            <li class="{{ Request::is('sura5c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/sura5c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Pengelolaan
                                        Limbah B3</span></a>
                            </li>
                            <li class="{{ Request::is('sura5d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/sura5d">
                                    <span class="menu-item text-truncate" data-i18n="List">4. Kontak & MoU
                                        Kerjasama</span></a>
                            </li>
                            <li class="{{ Request::is('sura5e*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/sura5e">
                                    <span class="menu-item text-truncate" data-i18n="List">5. Logbook</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- kepatuhan -->
                    <li class="{{ Request::is('sura6a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/sura6a"><i
                                data-feather="codepen"></i><span
                                class="menu-title text-truncate">Kepatuhan</span></a>
                    </li>
                    <!-- plh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="codesandbox"></i><span class="menu-title text-truncate">PLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('sura7a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/sura7a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. Penyampaian
                                        Dokumen</span></a>
                            </li>
                            <li class="{{ Request::is('sura7b*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/sura7b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Sertifikat Hasil
                                        Uji</span></a>
                            </li>
                            <li class="{{ Request::is('sura7c*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/sura7c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Neraca
                                        LB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- PPL & DPL -->
                    <li class="{{ Request::is('sura8a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/sura8a"><i
                                data-feather="framer"></i><span class="menu-title text-truncate">PPL &
                                DPL</span></a>
                    </li>
                    <!-- Kepatuhan Kinerja -->
                    <li class="{{ Request::is('sura9a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/sura9a"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">Kepatuhan
                                Kinerja</span></a>
                    </li>
                </ul>
            </li>

            <!-- tuntungan -->
            <li class="#"><a class="d-flex align-items-center" href="#"><i
                        data-feather="slack"></i><span class="menu-title text-truncate">UPDL
                        Tuntungan</span></a>
                <ul class="menu-content">
                    <!-- dokling -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="slack"></i><span class="menu-title text-truncate">Dokling dan
                                IL</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('tun1a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun1a"><span
                                        class="menu-item text-truncate" data-i18n="List">a. Inventarisasi Dokling
                                        dan
                                        IL</span></a>
                            </li>
                            <li class="{{ Request::is('tun1b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun1b"><span
                                        class="menu-item text-truncate" data-i18n="List">b. Dokling dan
                                        IL</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pplh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate">PPLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('tun2a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun2a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA_Air
                                        Laut</span></a>
                            </li>
                            <li class="{{ Request::is('tun2b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun2b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPA
                                        (Domestik)</span></a>
                            </li>
                            <li class="{{ Request::is('tun2c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun2c">
                                    <span class="menu-item text-truncate" data-i18n="List">c. Pemanfaatan
                                        Air</span></a>
                            </li>
                            <li class="{{ Request::is('tun2d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun2d">
                                    <span class="menu-item text-truncate" data-i18n="List">d. PLB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- ppau -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="command"></i><span class="menu-title text-truncate">PPAU</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('tun3a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun3a">
                                    <span class="menu-item text-truncate" data-i18n="List">a. PPA</span></a>
                            </li>
                            <li class="{{ Request::is('tun3b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun3b">
                                    <span class="menu-item text-truncate" data-i18n="List">b. PPU</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- pppi -->
                    <li class="{{ Request::is('tun4a*') ? 'active' : 'nav-item' }}"><a
                            class="d-flex align-items-center" href="/tun4a"><i data-feather="hexagon"></i><span
                                class="menu-title text-truncate">PPPI</span></a>
                    </li>
                    <!-- limbah -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="alert-circle"></i><span class="menu-title text-truncate">Limbah B3 dan
                                Limbah nonB3</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('tun5a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun5a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. PLB3</span></a>
                            </li>
                            <li class="{{ Request::is('tun5b*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun5b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Neraca LB3</span></a>
                            </li>
                            <li class="{{ Request::is('tun5c*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun5c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Pengelolaan
                                        Limbah B3</span></a>
                            </li>
                            <li class="{{ Request::is('tun5d*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun5d">
                                    <span class="menu-item text-truncate" data-i18n="List">4. Kontak & MoU
                                        Kerjasama</span></a>
                            </li>
                            <li class="{{ Request::is('tun5e*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tun5e">
                                    <span class="menu-item text-truncate" data-i18n="List">5. Logbook</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- kepatuhan -->
                    <li class="{{ Request::is('tun6a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/tun6a"><i
                                data-feather="codepen"></i><span
                                class="menu-title text-truncate">Kepatuhan</span></a>
                    </li>
                    <!-- plh -->
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="codesandbox"></i><span class="menu-title text-truncate">PLH</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('tun7a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/tun7a">
                                    <span class="menu-item text-truncate" data-i18n="List">1. Penyampaian
                                        Dokumen</span></a>
                            </li>
                            <li class="{{ Request::is('tun7b*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/tun7b">
                                    <span class="menu-item text-truncate" data-i18n="List">2. Sertifikat Hasil
                                        Uji</span></a>
                            </li>
                            <li class="{{ Request::is('tun7c*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/tun7c">
                                    <span class="menu-item text-truncate" data-i18n="List">3. Laporan Neraca
                                        LB3</span></a>
                            </li>
                        </ul>
                    </li>
                    <!-- PPL & DPL -->
                    <li class="{{ Request::is('tun8a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/tun8a"><i
                                data-feather="framer"></i><span class="menu-title text-truncate">PPL &
                                DPL</span></a>
                    </li>
                    <!-- Kepatuhan Kinerja -->
                    <li class="{{ Request::is('tun9a*') ? 'active' : 'nav-item' }}"><a class="d-flex align-items-center" href="/tun9a"><i
                                data-feather="grid"></i><span class="menu-title text-truncate">Kepatuhan
                                Kinerja</span></a>
                    </li>
                </ul>
            </li>


            {{-- <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="file"></i><span class="menu-title text-truncate">Form Upload</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="List">A. Inventarisasi</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('Lingkungan/saprofile*')? "active":"nav-item" }}"><a class="d-flex align-items-center"  href="/Lingkungan/saprofile"><span class="menu-item text-truncate" data-i18n="Account">Form SA-Profile Perusahaan</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="Security">Form SA-Izin Lingkungan</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point1a*')? "active":"nav-item" }}"><a class="d-flex align-items-center" href="/Lingkungan/point1a"><span class="menu-item text-truncate" data-i18n="List">1. Dokling dan IL</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point2a*')? "active":"nav-item" }}"><a class="d-flex align-items-center" href="/Lingkungan/point2a"><span class="menu-item text-truncate" data-i18n="List">2. PPLH</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point3a*')? "active":"nav-item" }}"><a class="d-flex align-items-center" href="/Lingkungan/point3a"><span class="menu-item text-truncate" data-i18n="List">3. PPAU</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point4a*')? "active":"nav-item" }}"><a class="d-flex align-items-center" href="/Lingkungan/point4a"><span class="menu-item text-truncate" data-i18n="List">4. PPPI</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point5a*')? "active":"nav-item" }}"><a class="d-flex align-items-center" href="/Lingkungan/point5a"><span class="menu-item text-truncate" data-i18n="List">5. Limbah B3 & Non B3</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point6a*')? "active":"nav-item" }}"><a class="d-flex align-items-center" href="/Lingkungan/point6a"><span class="menu-item text-truncate" data-i18n="List">6. Kepatuhan</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point7a*')? "active":"nav-item" }}"><a class="d-flex align-items-center" href="/Lingkungan/point7a"><span class="menu-item text-truncate" data-i18n="List">7. PLH</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point8a*')? "active":"nav-item" }}"><a class="d-flex align-items-center" href="/Lingkungan/point8a"><span class="menu-item text-truncate" data-i18n="List">8. PPL & DPL</span></a>
                    </li>
                    <li class="{{ Request::is('Lingkungan/point9a*')? "active":"nav-item" }}"><a class="d-flex align-items-center" href="/Lingkungan/point9a"><span class="menu-item text-truncate" data-i18n="List">9. Kepatuhan Kinerja</span></a>
                    </li>
                </ul>
            </li> --}}

        </ul>
    </div>
</div>
