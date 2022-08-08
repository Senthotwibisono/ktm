<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $page_title or "Dashboard" }} | Administrator</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        
        <!-- JQuery-UI & JQgrid -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset/plugins/jQuery-ui/jquery-ui.min.css }}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset("/plugins/jQgrid/css/ui.jqgrid.css") }}" />
        <!-- Bootstrap 3.3.2 -->
        <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <style>
                        body{background-color:		#4682B4; }a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}

        </style>
        
        @yield('custom_css')
        
        <!-- Theme style -->
        <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link href="asset/bower_components/AdminLTE/dist/css/skins/skin-black.css" rel="stylesheet" type="text/css" />

        <!-- jQuery 2.2.3 -->
        <script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
        <!-- jQuery Masking -->
        <script src="{{ asset ("/bower_components/jquery.maskedinput/dist/jquery.maskedinput.min.js") }}"></script>
        
        <script src="{{ asset("/plugins/jQgrid/js/i18n/grid.locale-en.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/plugins/jQgrid/js/jquery.jqGrid.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/plugins/jQgrid/js/helper.js") }}" type="text/javascript"></script>
        
        <script>
            $(function () {
                $.ajaxSetup({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                });
            });
            
            function afterSubmitEvent(response, postdata)
            {
                //Parses the JSON response that comes from the server.
                result = JSON.parse(response.responseText);
                console.log(result);
                //result.success is a boolean value, if true the process continues,
                //if false an error message appear and all other processing is stopped,
                //result.message is ignored if result.success is true.
                return [result.success, result.message];
            }
        </script>
        
    </head>
    <body class="sidebar-mini skin-black" cz-shortcut-listen="true" style="height: auto; min-height: 100%;">
        <div class="wrapper" style="height: auto; min-height: 100%;">
            
            @include('partials.menu-ltt')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="min-height: 960px;">
                <div class="container" style="width: 100% !important;">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                          {{ $page_title or "Access Denied" }}
                          <small>{{ $page_description or null }}</small>
                        </h1>
                        <ol class="breadcrumb">
                          
                          @if(isset($breadcrumbs))
                              @foreach($breadcrumbs as $breadcrum)
                                  @if($breadcrum['action'])
                                      <li><a href="{{ $breadcrum['action'] }}">{{ $breadcrum['title'] }}</a></li>
                                  @else
                                      <li class="active">{{ $breadcrum['title'] }}</li>
                                  @endif
                              @endforeach
                          @endif
                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <!-- Your Page Content Here -->
                        @include('partials.alert') 

                        @yield('content')
                    </section>
                    <!-- /.content -->
                </div>
            </div>
            <!-- /.content-wrapper -->

        
            @include('partials.footer')


        </div>
        <!-- ./wrapper -->
        <!--TPS ONLINE MODAL-->
        <div id="tpsonline-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Upload TPS Online</h4>
                    </div>
                    <div class="modal-body">
                        <div id="tpsonline-modal-text"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        <a href="#" id="tpsonline-send-btn" class="btn btn-primary">Kirim Sekarang</a>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <!-- REQUIRED JS SCRIPTS -->

        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="{{ asset ("/bower_components/AdminLTE/plugins/fastclick/fastclick.js") }}" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
        
        @yield('custom_js')
        
        <!-- Optionally, you can add Slimscroll and FastClick plugins.
              Both of these plugins are recommended to enhance the
              user experience -->

    </body>
</html>