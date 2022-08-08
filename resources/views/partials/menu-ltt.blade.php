
<header class="main-header navbar navbar-expand navbar-white navbar-light">
<script src="https://kit.fontawesome.com/c11c983b2d.js" crossorigin="anonymous"></script>
    <!-- Logo -->
    <a href="{{route('index')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <B>KTM</B>
      
    
      <!-- logo for regular state and mobile devices -->
    
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <style>
                        body{background-color:		#4682B4; }a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}

        </style>

      <!-- Sidebar toggle button-->
<!--      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>-->
      <div class="navbar-brand">
        <b>WMS</b>
        <i>KODJA TERRAMARIN</i>
      </div>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user"></span> 
              <span class=" hidden-xs">{{ \Auth::getUser()->name }}</span>
            </a>
            
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-footer">
<!--                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>-->
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-danger">
                  <span class="glyphicon glyphicon-off"></span>
                  </a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
      <!--  <ul>
        <a >
          <img  src="bower_components/AdminLTE/dist/img/kodja.png" alt="" width="100" height="100">
</a>
</ul> -->
        <li>
          <a href="{{route('index')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        @role('bea-cukai')
            @if(\Auth::getUser()->username != 'bcgaters1')
            <li class="treeview">
                <a href="#">
                  <i class="fa fa-th"></i> <span>Import LCL</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a tabindex="-1" href="{{ route('lcl-register-index') }}">Register</a></li>
                  <li><a tabindex="-1" href="{{ route('lcl-manifest-index') }}">Manifest</a></li>
                  <li><a tabindex="-1" href="{{ route('lcl-dispatche-index') }}">Dispatche E-Seal</a></li>

                  <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Realisasi
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('lcl-realisasi-gatein-index') }}">Masuk / Gate In</a></li>
                      <li><a href="{{ route('lcl-realisasi-stripping-index') }}">Stripping</a></li>
                      <li><a href="{{ route('lcl-realisasi-buangmty-index') }}">Buang MTY</a></li>
                    </ul>
                  </li>

                  <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Delivery
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('lcl-delivery-behandle-index') }}">Behandle</a></li>
                      <li><a href="{{ route('lcl-delivery-release-index') }}">Release / Gate Out</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-th"></i> <span>Import FCL</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a tabindex="-1" href="{{ route('fcl-register-index') }}">Register</a></li>
                  <li><a tabindex="-1" href="{{ route('fcl-dispatche-index') }}">Dispatche E-Seal</a></li>

                  <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Realisasi
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('fcl-realisasi-gatein-index') }}">Masuk / Gate In</a></li>
                    </ul>
                  </li>

                  <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Delivery
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('fcl-delivery-behandle-index') }}">Behandle</a></li>
                      <li><a href="{{ route('fcl-delivery-release-index') }}">Release / Gate Out</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-pie-chart"></i>
                  <span>TPS Online</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Penerimaan Data
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('tps-responPlp-index') }}">Data Respon PLP</a></li>
                      <li><a href="{{ route('tps-responBatalPlp-index') }}">Data Respon Batal PLP</a></li>
                      <li><a href="{{ route('tps-obLcl-index') }}">Data OB LCL</a></li>
                      <li><a href="{{ route('tps-obFcl-index') }}">Data OB FCL</a></li>
                      <li><a href="{{ route('tps-spjm-index') }}">Data SPJM</a></li>
                      <li><a href="{{ route('tps-dokManual-index') }}">Data Dok Manual</a></li>
                      <li><a href="{{ route('tps-dokpabean-index') }}">Data Dok Pabean</a></li>
                      <li><a href="{{ route('tps-sppbPib-index') }}">Data SPPB</a></li>
                      <li><a href="{{ route('tps-sppbBc-index') }}">Data SPPB BC23</a></li>
                      <li><a href="{{ route('tps-infoNomorBc-index') }}">Info Nomor BC11</a></li>
					 
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Pengiriman Data
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li class="treeview">
                          <a href="#"><i class="fa fa-circle-o"></i> COARI (Cargo Masuk)
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="{{ route('tps-coariCont-index') }}">Coari Cont</a></li>
                              <li><a href="{{ route('tps-coariKms-index') }}">Coari KMS</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#"><i class="fa fa-circle-o"></i> CODECO (Cargo Keluar)
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu">
                              <li><a href="{{ route('tps-codecoContFcl-index') }}">Codeco Cont FCL</a></li>
                              <li><a href="{{ route('tps-codecoContBuangMty-index') }}">Codeco Cont Buang MTY</a></li>
                              <li><a href="{{ route('tps-codecoKms-index') }}">Codeco KMS</a></li>
                          </ul>
                      </li>
                      <li><a href="{{ route('tps-realisasiBongkarMuat-index') }}">Realisasi Bongkar Muat</a></li>
                      <li><a href="{{ route('tps-laporanYor-index') }}">Laporan YOR</a></li>
                    </ul>
                  </li>

                </ul>
              </li>
            <li class="treeview">
                <a href="{{route('barcode-index')}}">
                    <i class="fa fa-barcode"></i> Gate Pass (Autogate)
                </a>
            </li>
            @endif
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-legal"></i> <span>Bea Cukai @if($notif_behandle['total'] > 0)<small class="label pull-right bg-red">{{$notif_behandle['total']}}</small>@endif</span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="#">
                            <span>LCL @if($notif_behandle['lcl'] > 0)<small class="label pull-right bg-red">{{$notif_behandle['lcl']}}</small>@endif</span>
                        </a>
                        <ul class="treeview-menu">
<!--                            <li><a tabindex="-1" href="{{ route('lcl-behandle-index') }}">Status Behandle @if($notif_behandle['lcl'] > 0)<small class="label pull-right bg-red">{{$notif_behandle['lcl']}}</small>@endif</a></li>-->
                            <li class="treeview">
                                <a href="#">
                                    <span>Behandle</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('lcl-behandle-index') }}">Ready @if($notif_behandle['lcl'] > 0)<small class="label pull-right bg-red">{{$notif_behandle['lcl']}}</small>@endif</a></li>
                                    <li><a href="{{ route('lcl-behandle-finish') }}">Finish</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('lcl-hold-index')}}">Dokumen HOLD</a></li>
							<li><a href="{{route('lcl-mtyhold-index')}}">Dokumen MTY HOLD</a></li>
                            <!--<li><a href="{{route('lcl-segel-index')}}">Segel Merah</a></li>-->
                            <li class="treeview">
                                <a href="#">
                                    <span>Segel Merah</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('lcl-segel-index') }}">List Container</a></li>
                                    <li><a href="{{ route('lcl-segel-report') }}">Report Lepas Segel</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <span>Report</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('lcl-bc-report-container') }}">Report Container</a></li>
                                    <li><a href="{{ route('lcl-bc-report-stock') }}">Report Cargo</a></li>
                                    <li><a href="{{ route('lcl-bc-report-inventory') }}">Report Stock</a></li>
                                    <li><a href="{{ route('lcl-report-harian') }}">Daily Report</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <span>FCL @if($notif_behandle['fcl'] > 0)<small class="label pull-right bg-red">{{$notif_behandle['fcl']}}</small>@endif</span>
                        </a>          
                        <ul class="treeview-menu">
                            <!--<li><a tabindex="-1" href="{{ route('fcl-behandle-index') }}">Status Behandle @if($notif_behandle['fcl'] > 0)<small class="label pull-right bg-red">{{$notif_behandle['fcl']}}</small>@endif</a></li>-->
                            <li class="treeview">
                                <a href="#">
                                    <span>Behandle</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('fcl-behandle-index') }}">Ready @if($notif_behandle['fcl'] > 0)<small class="label pull-right bg-red">{{$notif_behandle['fcl']}}</small>@endif</a></li>
                                    <li><a href="{{ route('fcl-behandle-finish') }}">Finish</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('fcl-hold-index')}}">Dokumen HOLD</a></li>
                            <!--<li><a href="{{route('fcl-segel-index')}}">Segel Merah</a></li>-->
                            <li class="treeview">
                                <a href="#">
                                    <span>Segel Merah</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('fcl-segel-index') }}">List Container</a></li>
                                    <li><a href="{{ route('fcl-segel-report') }}">Report Lepas Segel</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <span>Report</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('fcl-bc-report-container') }}">Report Container</a></li>
                                    <li><a href="{{ route('fcl-bc-report-inventory') }}">Report Stock</a></li>
                                    <li><a href="{{ route('fcl-report-harian') }}">Daily Report</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @else
        
        @role('upload-fcl')
            <li class="treeview">
                <a href="#">
                  <i class="fa fa-th"></i> <span>Import FCL</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Realisasi
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('fcl-realisasi-gatein-index') }}">Masuk / Gate In</a></li>
                    </ul>
                  </li>

                  <li class="treeview">
                    <a href="#"><i class="fa fa-circle-o"></i> Delivery
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('fcl-delivery-release-index') }}">Release / Gate Out</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
        @else
            @role('upload-lcl')
                <li class="treeview">
                    <a href="#">
                      <i class="fa fa-th"></i> <span>Import LCL</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a tabindex="-1" href="{{ route('lcl-manifest-index') }}">Manifest</a></li>

                      <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Realisasi
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('lcl-realisasi-gatein-index') }}">Masuk / Gate In</a></li>
                          <li><a href="{{ route('lcl-realisasi-stripping-index') }}">Stripping</a></li>
                        </ul>
                      </li>

                      <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Delivery
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('lcl-delivery-release-index') }}">Release / Gate Out</a></li>
                        </ul>
                      </li>

                    </ul>
                  </li>
            @else
                <li class="treeview">
                    <a href="#">
                      <i class="fa fa-book"></i>
                      <span>Master Data</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="{{ route('consolidator-index') }}">Consolidator</a></li>
                      <li><a href="{{ route('depomty-index') }}">Depo MTY</a></li>
                      <li><a href="{{ route('lokasisandar-index') }}">Lokasi Sandar</a></li>
                      <li><a href="{{ route('negara-index') }}">Negara</a></li>
                      <li><a href="{{ route('packing-index') }}">Packing</a></li>
                      <li><a href="{{ route('pelabuhan-index') }}">Pelabuhan</a></li>
                      <li><a href="{{ route('perusahaan-index') }}">Perusahaan</a></li>
                      <li><a href="{{ route('tpp-index') }}">TPP</a></li>
                      <li><a href="{{ route('shippingline-index') }}">Shipping Line</a></li>
                      <li><a href="{{ route('eseal-index') }}">E-Seal</a></li>
                      <li><a href="{{ route('vessel-index') }}">Vessel</a></li>
                      <li><a href="{{ route('ppjk-index') }}">PPJK</a></li> 
                    <!--  <li><a href="{{ route('location-index') }}">Lokasi LCL</a></li> --> 
                      <li><a href="{{ route('locationfcl-index') }}">Lokasi FCL</a></li> 
                    </ul>
                  </li>
              <!--    <li class="treeview">
                      <a href="{{route('payment-bni-index')}}">
                          <i class="fa fa-money"></i> BNI E-Collection
                      </a>
                  </li> 
                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-th"></i> <span>Import LCL</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a> -->
                    <ul class="treeview-menu">
                      <li><a tabindex="-1" href="{{ route('lcl-register-index') }}">Register</a></li>
                      <li><a tabindex="-1" href="{{ route('lcl-manifest-index') }}">Manifest</a></li>
                      <li><a tabindex="-1" href="{{ route('lcl-dispatche-index') }}">Dispatche E-Seal</a></li>
                      <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Photo
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('lcl-photo-container-index') }}">Container</a></li>
                          <li><a href="{{ route('lcl-photo-cargo-index') }}">Cargo</a></li>
                        </ul>
                      </li>
                      <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Realisasi
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('lcl-realisasi-gatein-index') }}">Masuk / Gate In</a></li>
                          <li><a href="{{ route('lcl-realisasi-stripping-index') }}">Stripping</a></li>
                          <li><a href="{{ route('lcl-realisasi-buangmty-index') }}">Buang MTY</a></li>
                        </ul>
                      </li>

                      <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Delivery
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('lcl-delivery-behandle-index') }}">Behandle</a></li>
                          <li><a href="{{ route('lcl-delivery-release-index') }}">Release / Gate Out</a></li>
                        </ul>
                      </li>

                      <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Report
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('lcl-report-container') }}">Report Container</a></li>
                          <li><a href="{{ route('lcl-report-inout') }}">Report Cargo</a></li>    
                          <li><a href="{{ route('lcl-report-longstay') }}">Report Stock</a></li>
                          <li><a href="{{ route('lcl-report-harian') }}">Daily Report</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-th"></i> <span>Import FCL</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a tabindex="-1" href="{{ route('fcl-register-index') }}">Register</a></li>
                      <li><a tabindex="-1" href="{{ route('fcl-dispatche-index') }}">Dispatche E-Seal</a></li>
                        <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Photo
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('fcl-photo-container-index') }}">Container</a></li>
                        </ul>
                      </li>
                      <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Realisasi
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('fcl-realisasi-gatein-index') }}">Masuk / Gate In</a></li>
                        </ul>
                      </li>

                      <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Delivery
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('fcl-delivery-behandle-index') }}">Behandle</a></li>
                          <li><a href="{{ route('fcl-delivery-release-index') }}">Release / Gate Out</a></li>
                        </ul>
                      </li>

                      <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Report
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('fcl-report-rekap') }}">Report Container</a></li>
                          <li><a href="{{ route('fcl-report-longstay') }}">Report Stock</a></li>
                          <li><a href="{{ route('fcl-report-harian') }}">Daily Report</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-database"></i>
                      <span>TPS Online</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Data
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('gudang-index') }}">Gudang</a></li>
                          <li><a href="{{ route('pelabuhandn-index') }}">Pelabuhan DN</a></li>
                          <li><a href="{{ route('pelabuhanln-index') }}">Pelabuhan LN</a></li>
                        </ul>
                      </li>
                      <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Penerimaan Data
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="{{ route('tps-responPlp-index') }}">Data Respon PLP</a></li>
                          <li><a href="{{ route('tps-responBatalPlp-index') }}">Data Respon Batal PLP</a></li>
                         <!-- <li><a href="{{ route('tps-obLcl-index') }}">Data OB LCL</a></li> -->
                          <li><a href="{{ route('tps-obFcl-index') }}">Data OB FCL</a></li>
                          <li><a href="{{ route('tps-spjm-index') }}">Data SPJM</a></li>
                          <li><a href="{{ route('tps-dokManual-index') }}">Data Dok Manual</a></li>
                          <li><a href="{{ route('tps-dokpabean-index') }}">Data Dok Pabean</a></li>
                          <li><a href="{{ route('tps-sppbPib-index') }}">Data SPPB</a></li>
                          <li><a href="{{ route('tps-sppbBc-index') }}">Data SPPB BC23</a></li>
                          <li><a href="{{ route('tps-infoNomorBc-index') }}">Info Nomor BC11</a></li>
						  <li><a href="{{ route('tps-dokNPE-index') }}">Data Dok NPE</a></li>
						
                        </ul>
                      </li>
                      <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Pengiriman Data
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li class="treeview">
                              <a href="#"><i class="fa fa-circle-o"></i> COARI (Cargo Masuk)
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                  <li><a href="{{ route('tps-coariCont-index') }}">Coari Cont</a></li>
                                  <li><a href="{{ route('tps-coariKms-index') }}">Coari KMS</a></li>
                              </ul>
                          </li>
                          <li class="treeview">
                              <a href="#"><i class="fa fa-circle-o"></i> CODECO (Cargo Keluar)
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                  <li><a href="{{ route('tps-codecoContFcl-index') }}">Codeco Cont FCL</a></li>
                                  <li><a href="{{ route('tps-codecoContBuangMty-index') }}">Codeco Cont Buang MTY</a></li>
                                  <li><a href="{{ route('tps-codecoKms-index') }}">Codeco KMS</a></li>
								  <li><a href="{{ route('tps-reject-index') }}">Info Data Reject</a></li>
                              </ul>
                          </li>
                          <li><a href="{{ route('tps-realisasiBongkarMuat-index') }}">Realisasi Bongkar Muat</a></li>
                          <li><a href="{{ route('tps-laporanYor-index') }}">Laporan YOR</a></li>
                        </ul>
                      </li>

                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-upload"></i>
                      <span>NPCT1</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">  
                      <li><a href="{{ route('movement-container-index') }}">Data Container</a></li>
                      <li><a href="{{ route('movement-index') }}">Laporan Movement</a></li>
                      <li><a href="{{ route('yor-index') }}">Laporan YOR</a></li>
                      <li><a href="{{ route('tracking-index') }}">Tracking</a></li>
                    </ul>
                  </li>
                  <li class="treeview">
                      <a href="#">
                      <i class="fa fa-usd"></i>                    
                        <span>Invoice</span>
                        <span class="pull-right-container">                                         
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                          <li class="treeview">
                              <a href="#"><i class="fa fa-circle-o"></i> FCL
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                  <li><a href="{{route('invoice-tarif-nct-index')}}">Data Tarif</a></li>
                                  <li><a href="{{route('invoice-release-nct-index')}}">Data Release/Gate Out</a></li>
                                  <li><a href="{{route('invoice-nct-index')}}">Data Invoice</a></li>
								  <li><a href="{{route('invoice-nct-index')}}">Laporan Pendapatan</a></li>
                              </ul>
                          </li>
                       <!--   <li class="treeview">
                              <a href="#"><i class="fa fa-circle-o"></i> LCL
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                  <li><a href="{{route('invoice-tarif-index')}}">Data Tarif</a></li>
                                  <li><a href="{{route('invoice-release-index')}}">Data Release/Gate Out</a></li>
                                  <li><a href="{{route('invoice-index')}}">Data Invoice</a></li>
                              </ul>
                          </li>-->

                      </ul>
                  </li>

                  <li class="treeview">
                      <a href="{{route('barcode-index')}}">
                          <i class="fa fa-truck"></i> Gate Pass (Autogate)
                      </a>
                  </li>
				  <li class="treeview">
                      <a href="http://203.173.92.178:8989/nle/">
                          <i class="fa fa-anchor"></i> NLE
                      </a>
                  </li>
                  <li class="treeview">
                      <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Users</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                          <li><a href="{{route('user-index')}}">User Lists</a></li>
                          <li><a href="{{route('role-index')}}">Roles</a></li>
                          <li><a href="{{route('permission-index')}}">Permissions</a></li>
                      </ul>
                  </li> 
            @endrole
        @endrole
    </ul>
    @endrole  
    </section>
    <!-- /.sidebar -->
  </aside>
<script>
    $('.sidebar-menu ul li').find('a').each(function () {
        var link = new RegExp($(this).attr('href')); //Check if some menu compares inside your the browsers link
        if (link.test(document.location.href)) {
            if(!$(this).parents().hasClass('active')){
                $(this).parents('li').addClass('menu-open');
                $(this).parents().addClass("active");
                $(this).addClass("active"); //Add this too
            }
        }
    });
     src="https://kit.fontawesome.com/c11c983b2d.js" crossorigin="anonymous"
</script>