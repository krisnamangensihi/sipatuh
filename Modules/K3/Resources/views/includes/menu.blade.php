@can('is_user')
    
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route ('home') }}"><span class="brand-logo">
                        <img class="image" border="0" src="../../../app-assets/images/pages/udiklat.png" width="20px" style="margin: 0px;padding: 0px color:white;">
                </span>
                   <h2 class="brand-text">P L N</h2>
            </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="{{ Request::is('K3/index*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/index"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="home">Dashboard</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Menu Anda</span><i data-feather="more-horizontal"></i>
          </li>
          {{-- table --}}
          <li><a class="d-flex align-items-center" href="#"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="home">DataTable</span></a>
            <ul class="menu-content">
                  <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="slack"></i><span class="menu-title text-truncate" >2022</span></a>
                    <ul class="menu-content">
                <li class="{{ Request::is('K3/rkaptw1*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/rkaptw1"><span class="menu-title text-truncate" data-i18n="home">Triwulan 1</span></a>
          </li>  
                <li class="{{ Request::is('K3/rkaptw2*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/rkaptw2"><span class="menu-title text-truncate" data-i18n="home">Triwulan 2</span></a>
          </li>  
                <li class="{{ Request::is('K3/rkaptw3*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/rkaptw3"><span class="menu-title text-truncate" data-i18n="home">Triwulan 3</span></a>
          </li>  
                <li class="{{ Request::is('K3/rkaptw4*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/rkaptw4"><span class="menu-title text-truncate" data-i18n="home">Triwulan 4</span></a>
          </li>  
            </ul>
          </li>
                  <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="slack"></i><span class="menu-title text-truncate" >2023</span></a>
                    <ul class="menu-content">
                <li class="{{ Request::is('K3/rkaptw1*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/rkaptw1"><span class="menu-title text-truncate" data-i18n="home">Triwulan 1</span></a>
          </li>  
                <li class="{{ Request::is('K3/rkaptw2*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/rkaptw2"><span class="menu-title text-truncate" data-i18n="home">Triwulan 2</span></a>
          </li>  
                <li class="{{ Request::is('K3/rkaptw3*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/rkaptw3"><span class="menu-title text-truncate" data-i18n="home">Triwulan 3</span></a>
          </li>  
                <li class="{{ Request::is('K3/rkaptw4*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/rkaptw4"><span class="menu-title text-truncate" data-i18n="home">Triwulan 4</span></a>
          </li>  
            </ul>
          </li>
            </ul>
          </li>
          {{-- FORM UPLOAD --}}
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Form Upload</span></a>
                    <ul class="menu-content">
                        {{-- triwulan 1 --}}
                  <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span
                        class="menu-title text-truncate">Triwulan 1</span></a>
                <ul class="menu-content">
         <li class="{{ Request::is('K3/leadershiptw1*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/leadershiptw1"><span class="menu-title text-truncate" data-i18n="home">Leadership & Management Commitment</span></a>
          </li>
          <li class="{{ Request::is('K3/audittw1*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/audittw1"><span class="menu-title text-truncate" data-i18n="home"> Audit, Assessment and Inspection</span></a>
          </li>
          <li class="{{ Request::is('K3/penerapan*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/penerapan"><span class="menu-title text-truncate" data-i18n="home">Penerapan Identifikasi Bahaya, Penilaian dan Pengendalian Risiko (IBPPR)</span></a>
          </li>
          <li class="{{ Request::is('K3/safeti*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/safeti"><span class="menu-title text-truncate" data-i18n="home">Safety Training and Education</span></a>
          </li>
          <li class="{{ Request::is('K3/comunication*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/comunication"><span class="menu-title text-truncate" data-i18n="home">Safety Campaign and Communication</span></a>
          </li>
          <li class="{{ Request::is('K3/reporting*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/reporting"><span class="menu-title text-truncate" data-i18n="home">Reporting</span></a>
          </li>
                        </ul>
                    </li>
                    {{-- triwulan 2 --}}
                          <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span
                        class="menu-title text-truncate">Triwulan 2</span></a>
                <ul class="menu-content">
                    <!-- kantor Induk -->
         <li class="{{ Request::is('K3/leadershiptw2*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/leadershiptw2"><span class="menu-title text-truncate" data-i18n="home">Leadership & Management Commitment</span></a>
          </li>
          <li class="{{ Request::is('K3/audittw2*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/audittw2"><span class="menu-title text-truncate" data-i18n="home"> Audit, Assessment and Inspection</span></a>
          </li>
          <li class="{{ Request::is('K3/penerapan*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/penerapan"><span class="menu-title text-truncate" data-i18n="home">Penerapan Identifikasi Bahaya, Penilaian dan Pengendalian Risiko (IBPPR)</span></a>
          </li>
          <li class="{{ Request::is('K3/safeti*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/safeti"><span class="menu-title text-truncate" data-i18n="home">Safety Training and Education</span></a>
          </li>
          <li class="{{ Request::is('K3/comunication*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/comunication"><span class="menu-title text-truncate" data-i18n="home">Safety Campaign and Communication</span></a>
          </li>
          <li class="{{ Request::is('K3/reporting*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/reporting"><span class="menu-title text-truncate" data-i18n="home">Reporting</span></a>
          </li>
                        </ul>
                    </li>
         
                    {{-- triwulan 3 --}}
                          <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span
                        class="menu-title text-truncate">Triwulan 3</span></a>
                <ul class="menu-content">
                    <!-- kantor Induk -->
         <li class="{{ Request::is('K3/leadershiptw3*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/leadershiptw3"><span class="menu-title text-truncate" data-i18n="home">Leadership & Management Commitment</span></a>
          </li>
          <li class="{{ Request::is('K3/audittw3*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/audittw3"><span class="menu-title text-truncate" data-i18n="home"> Audit, Assessment and Inspection</span></a>
          </li>
          <li class="{{ Request::is('K3/penerapan*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/penerapan"><span class="menu-title text-truncate" data-i18n="home">Penerapan Identifikasi Bahaya, Penilaian dan Pengendalian Risiko (IBPPR)</span></a>
          </li>
          <li class="{{ Request::is('K3/safeti*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/safeti"><span class="menu-title text-truncate" data-i18n="home">Safety Training and Education</span></a>
          </li>
          <li class="{{ Request::is('K3/comunication*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/comunication"><span class="menu-title text-truncate" data-i18n="home">Safety Campaign and Communication</span></a>
          </li>
          <li class="{{ Request::is('K3/reporting*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/reporting"><span class="menu-title text-truncate" data-i18n="home">Reporting</span></a>
          </li>
                        </ul>
                    </li>
                    {{-- triwulan 4 --}}
                          <li class="#"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span
                        class="menu-title text-truncate">Triwulan 4</span></a>
                <ul class="menu-content">
                    <!-- kantor Induk -->
         <li class="{{ Request::is('K3/leadershiptw4*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/leadershiptw4"><span class="menu-title text-truncate" data-i18n="home">Leadership & Management Commitment</span></a>
          </li>
          <li class="{{ Request::is('K3/audittw4*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/audittw4"><span class="menu-title text-truncate" data-i18n="home"> Audit, Assessment and Inspection</span></a>
          </li>
          <li class="{{ Request::is('K3/penerapan*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/penerapan"><span class="menu-title text-truncate" data-i18n="home">Penerapan Identifikasi Bahaya, Penilaian dan Pengendalian Risiko (IBPPR)</span></a>
          </li>
          <li class="{{ Request::is('K3/safeti*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/safeti"><span class="menu-title text-truncate" data-i18n="home">Safety Training and Education</span></a>
          </li>
          <li class="{{ Request::is('K3/comunication*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/comunication"><span class="menu-title text-truncate" data-i18n="home">Safety Campaign and Communication</span></a>
          </li>
          <li class="{{ Request::is('K3/reporting*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/reporting"><span class="menu-title text-truncate" data-i18n="home">Reporting</span></a>
          </li>
                        </ul>
                    </li>
         
                        {{-- contoh --}}
                      {{-- <li class="{{ Request::is('K3/leadershiptw*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/leadership"><span class="menu-title text-truncate" data-i18n="home">Leadership & Management Commitment</span></a>
          </li>
          <li class="{{ Request::is('K3/audit*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/audit"><span class="menu-title text-truncate" data-i18n="home"> Audit, Assessment and Inspection</span></a>
          </li>
          <li class="{{ Request::is('K3/penerapan*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/penerapan"><span class="menu-title text-truncate" data-i18n="home">Penerapan Identifikasi Bahaya, Penilaian dan Pengendalian Risiko (IBPPR)</span></a>
          </li>
          <li class="{{ Request::is('K3/safeti*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/safeti"><span class="menu-title text-truncate" data-i18n="home">Safety Training and Education</span></a>
          </li>
          <li class="{{ Request::is('K3/comunication*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/comunication"><span class="menu-title text-truncate" data-i18n="home">Safety Campaign and Communication</span></a>
          </li>
          <li class="{{ Request::is('K3/reporting*')? "active":"nav-item" }} "><a class="d-flex align-items-center" href="/K3/reporting"><span class="menu-title text-truncate" data-i18n="home">Reporting</span></a>
          </li> --}}
          
                    </ul>
                </li>
             
        
        </div>
    </div>
            @endcan