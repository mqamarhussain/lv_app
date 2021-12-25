<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <base href="./">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
      <meta name="author" content="Łukasz Holeczek">
      <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
      <title>CoreUI Free Bootstrap Admin Template</title>
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      @stack('css')
      @stack('js')
      <link rel="stylesheet" href="{{asset('admin/css/simplebar.css')}}">
      <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
      <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
      <script src="{{ mix('turbo/turbo.js') }}" defer></script>
      
      <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
      <script src="/vendor/datatables/buttons.server-side.js"></script>

      @livewireStyles
   </head>
   <body>
      @include('partials.sidebar')
      <div class="wrapper d-flex flex-column min-vh-100 bg-light">
         <header class="header header-sticky mb-4">
            <div class="container-fluid">
               <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                  <svg class="icon icon-lg">
                     <use xlink:href="{{ asset('admin/icons/free.svg#cil-menu') }}"></use>
                  </svg>
               </button>
               <ul class="header-nav ms-3">
                  <li class="nav-item dropdown">
                     <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('admin/img/8.jpg') }}" alt="user@email.com"></div>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end pt-0" style="">
                        <div class="dropdown-header bg-light py-2">
                           <div class="fw-semibold">Account</div>
                        </div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                           <svg class="icon me-2">
                              <use xlink:href="{{ asset('admin/icons/free.svg#cil-account-logout')}}"></use>
                           </svg>
                           Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                        </form>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb my-0 ms-2">
                     <li class="breadcrumb-item">
                        <span>Home</span>
                     </li>
                     <li class="breadcrumb-item active"><span>Dashboard</span></li>
                  </ol>
               </nav>
            </div>
         </header>
         <div class="body flex-grow-1 px-3">
            <div class="container-lg">
               @yield('content')
            </div>
         </div>
         <footer class="footer">
            <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2021 creativeLabs.</div>
            <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/bootstrap/ui-components/">CoreUI UI Components</a></div>
         </footer>
      </div>
      <script src="{{ asset('admin/js/coreui.bundle.min.js') }}"></script>
      <script src="{{ asset('admin/js/simplebar.min.js') }}"></script>
      <script src="{{ asset('admin/js/coreui-utils.js') }}"></script>
      @livewireScripts
      @stack('scripts')
   </body>
</html>
