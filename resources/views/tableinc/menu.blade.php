@can('is_admin')
    @if ('dashboardkeamanan')
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
                                class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                                data-feather="disc" data-ticon="disc"></i></a></li>
                </ul>
            </div>
            {{-- <div class="shadow-bottom"></div> --}}
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="{{ Request::is('dashboardkeamanan*') ? 'active' : 'nav-item' }} "><a
                            class="d-flex align-items-center" href="/dashboardkeamanan"><i data-feather="home"></i><span
                                class="menu-title text-truncate" data-i18n="home"><strong>Dashboard</strong></span></a>
                    </li>
                    <li class=" navigation-header"><span
                            data-i18n="Forms &amp; Tables"><strong>Verifikator</strong></span><i
                            data-feather="more-horizontal"></i>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                                data-feather="grid"></i><span class="menu-title text-truncate"
                                data-i18n="2022"><strong>2022</strong></span></a>
                        <ul class="menu-content">
                    </li>
                    {{-- KANTOR INDUK --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="folder"></i><span class="menu-title text-truncate"><strong>KANTOR
                                    INDUK</strong></span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kikeamanan"><i data-feather="circle"></i><span
                                        class="menu-title text-truncate"><strong>SELURUH TABEL</strong></span></a>
                            </li>
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/kikeamanantw1"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            1</strong></span></a>
                            </li>
                            <li class="#"><a class="d-flex align-items-center" href="/kikeamanantw2"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            2</strong></span></a>
                            </li>
                            <li class="#"><a class="d-flex align-items-center" href="/kikeamanantw3"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            3</strong></span></a>
                            </li>
                            <li class="#"><a class="d-flex align-items-center" href="/kikeamanantw4"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            4</strong></span></a>
                            </li>
                        </ul>
                    </li>

                    {{-- BOGOR --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="folder"></i><span class="menu-title text-truncate"><strong>UPDL
                                    BOGOR</strong></span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogorkeamanan"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>SELURUH
                                            TABEL</strong></span></a>
                            </li>
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/bogorkeamanantw1"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            1</strong></span></a>
                            </li>
                            <li class="#"><a class="d-flex align-items-center" href="/bogorkeamanantw2"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            2</strong></span></a>
                            </li>
                            <li class="#"><a class="d-flex align-items-center" href="/bogorkeamanantw3"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            3</strong></span></a>
                            </li>
                            <li class="#"><a class="d-flex align-items-center" href="/bogorkeamanantw4"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            4</strong></span></a>
                            </li>
                        </ul>
                    </li>

                    {{-- BANJARBARU --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="folder"></i><span class="menu-title text-truncate"><strong>UPDL
                                    BANJARBARU</strong></span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjarbarukeamanan"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>SELURUH
                                            TABEL</strong></span></a>
                            </li>
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/banjarbarukeamanantw1"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            1</strong></span></a>
                            </li>
                            <!-- kepatuhan -->
                            <li class="#"><a class="d-flex align-items-center" href="/banjarbarukeamanantw2"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            2</strong></span></a>
                            </li>
                            <!-- PPL & DPL -->
                            <li class="#"><a class="d-flex align-items-center" href="/banjarbarukeamanantw3"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            3</strong></span></a>
                            </li>
                            <!-- Kepatuhan Kinerja -->
                            <li class="#"><a class="d-flex align-items-center" href="/banjarbarukeamanantw4"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            4</strong></span></a>
                            </li>
                        </ul>
                    </li>

                    {{-- JAKARTA --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="folder"></i><span class="menu-title text-truncate"><strong>UPDL
                                    JAKARTA</strong></span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakartakeamanan"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>SELURUH
                                            TABEL</strong></span></a>
                            </li>
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/jakartakeamanantw1"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            1</strong></span></a>
                            </li>
                            <!-- kepatuhan -->
                            <li class="#"><a class="d-flex align-items-center" href="/jakartakeamanantw2"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            2</strong></span></a>
                            </li>
                            <!-- PPL & DPL -->
                            <li class="#"><a class="d-flex align-items-center" href="/jakartakeamanantw3"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            3</strong></span></a>
                            </li>
                            <!-- Kepatuhan Kinerja -->
                            <li class="#"><a class="d-flex align-items-center" href="/jakartakeamanantw4"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            4</strong></span></a>
                            </li>
                        </ul>
                    </li>

                    {{-- MAKASAR --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="folder"></i><span class="menu-title text-truncate"><strong>UPDL
                                    MAKASAR</strong></span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasarkeamanan"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>SELURUH
                                            TABEL</strong></span></a>
                            </li>
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/makasarkeamanantw1"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            1</strong></span></a>
                            </li>
                            <!-- kepatuhan -->
                            <li class="#"><a class="d-flex align-items-center" href="/makasarkeamanantw2"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            2</strong></span></a>
                            </li>
                            <!-- PPL & DPL -->
                            <li class="#"><a class="d-flex align-items-center" href="/makasarkeamanantw3"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            3</strong></span></a>
                            </li>
                            <!-- Kepatuhan Kinerja -->
                            <li class="#"><a class="d-flex align-items-center" href="/makasarkeamanantw4"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            4</strong></span></a>
                            </li>
                        </ul>
                    </li>

                    {{-- PADANG --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="folder"></i><span class="menu-title text-truncate"><strong>UPDL
                                    PADANG</strong></span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padangkeamanan"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>SELURUH
                                            TABEL</strong></span></a>
                            </li>
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/padangkeamanantw1"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            1</strong></span></a>
                            </li>
                            <!-- kepatuhan -->
                            <li class="#"><a class="d-flex align-items-center" href="/padangkeamanantw2"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            2</strong></span></a>
                            </li>
                            <!-- PPL & DPL -->
                            <li class="#"><a class="d-flex align-items-center" href="/padangkeamanantw3"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            3</strong></span></a>
                            </li>
                            <!-- Kepatuhan Kinerja -->
                            <li class="#"><a class="d-flex align-items-center" href="/padangkeamanantw4"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            4</strong></span></a>
                            </li>
                        </ul>
                    </li>

                    {{-- PALEMBANG --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="folder"></i><span class="menu-title text-truncate"><strong>UPDL
                                    PALEMBANG</strong></span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembangkeamanan"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>SELURUH
                                            TABEL</strong></span></a>
                            </li>
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/palembangkeamanantw1"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            1</strong></span></a>
                            </li>
                            <!-- kepatuhan -->
                            <li class="#"><a class="d-flex align-items-center" href="/palembangkeamanantw2"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            2</strong></span></a>
                            </li>
                            <!-- PPL & DPL -->
                            <li class="#"><a class="d-flex align-items-center" href="/palembangkeamanantw3"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            3</strong></span></a>
                            </li>
                            <!-- Kepatuhan Kinerja -->
                            <li class="#"><a class="d-flex align-items-center" href="/palembangkeamanantw4"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            4</strong></span></a>
                            </li>
                        </ul>
                    </li>

                    {{-- PANDAAN --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="folder"></i><span class="menu-title text-truncate"><strong>UPDL
                                    PANDAAN</strong></span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaankeamanan"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>SELURUH
                                            TABEL</strong></span></a>
                            </li>
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/pandaankeamanantw1"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            1</strong></span></a>
                            </li>
                            <!-- kepatuhan -->
                            <li class="#"><a class="d-flex align-items-center" href="/pandaankeamanantw2"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            2</strong></span></a>
                            </li>
                            <!-- PPL & DPL -->
                            <li class="#"><a class="d-flex align-items-center" href="/pandaankeamanantw3"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            3</strong></span></a>
                            </li>
                            <!-- Kepatuhan Kinerja -->
                            <li class="#"><a class="d-flex align-items-center" href="/pandaankeamanantw4"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            4</strong></span></a>
                            </li>
                        </ul>
                    </li>

                    {{-- SEMARANG --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="folder"></i><span class="menu-title text-truncate"><strong>UPDL
                                    SEMARANG</strong></span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semarangkeamanan"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>SELURUH
                                            TABEL</strong></span></a>
                            </li>
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/semarangkeamanantw1"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            1</strong></span></a>
                            </li>
                            <!-- kepatuhan -->
                            <li class="#"><a class="d-flex align-items-center" href="/semarangkeamanantw2"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            2</strong></span></a>
                            </li>
                            <!-- PPL & DPL -->
                            <li class="#"><a class="d-flex align-items-center" href="/semarangkeamanantw3"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            3</strong></span></a>
                            </li>
                            <!-- Kepatuhan Kinerja -->
                            <li class="#"><a class="d-flex align-items-center" href="/semarangkeamanantw4"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            4</strong></span></a>
                            </li>
                        </ul>
                    </li>

                    {{-- SURALAYA --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="folder"></i><span class="menu-title text-truncate"><strong>UPDL
                                    SURALAYA</strong></span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/suralayakeamanan"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>SELURUH
                                            TABEL</strong></span></a>
                            </li>
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/suralayakeamanantw1"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            1</strong></span></a>
                            </li>
                            <!-- kepatuhan -->
                            <li class="#"><a class="d-flex align-items-center" href="/suralayakeamanantw2"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            2</strong></span></a>
                            </li>
                            <!-- PPL & DPL -->
                            <li class="#"><a class="d-flex align-items-center" href="/suralayakeamanantw3"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            3</strong></span></a>
                            </li>
                            <!-- Kepatuhan Kinerja -->
                            <li class="#"><a class="d-flex align-items-center" href="/suralayakeamanantw4"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            4</strong></span></a>
                            </li>
                        </ul>
                    </li>

                    {{-- TUNTUNGAN --}}
                    <li class="#"><a class="d-flex align-items-center" href="#"><i
                                data-feather="folder"></i><span class="menu-title text-truncate"><strong>UPDL
                                    TUNTUNGAN</strong></span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tuntungankeamanan"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>SELURUH
                                            TABEL</strong></span></a>
                            </li>
                            <li class="{{ Request::is('bogor4a*') ? 'active' : 'nav-item' }}"><a
                                    class="d-flex align-items-center" href="/tuntungankeamanantw1"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            1</strong></span></a>
                            </li>
                            <!-- kepatuhan -->
                            <li class="#"><a class="d-flex align-items-center" href="/tuntungankeamanantw2"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            2</strong></span></a>
                            </li>
                            <!-- PPL & DPL -->
                            <li class="#"><a class="d-flex align-items-center" href="/tuntungankeamanantw3"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            3</strong></span></a>
                            </li>
                            <!-- Kepatuhan Kinerja -->
                            <li class="#"><a class="d-flex align-items-center" href="/tuntungankeamanantw4"><i
                                        data-feather="circle"></i><span class="menu-title text-truncate"><strong>TRIWULAN
                                            4</strong></span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                </ul>
            </div>
        </div>
    @endif
@endcan
