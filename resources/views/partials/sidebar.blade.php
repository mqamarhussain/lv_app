<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
         <div class="sidebar-brand d-none d-md-flex">
            <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
               <use xlink:href="{{ asset('admin/icons/coreui.svg#full')}}"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
               <use xlink:href="{{ asset('admin/icons/coreui.svg#signet')}}"></use>
            </svg>
         </div>
         <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item">
               <a class="nav-link" href="index.html">
                  <svg class="nav-icon">
                     <use xlink:href="{{ asset('admin/icons/free.svg#cil-speedometer') }}"></use>
                  </svg>
                  Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('admin.posts.index') }}">
                  <svg class="nav-icon">
                     <use xlink:href="{{ asset('admin/icons/free.svg#cil-newspaper') }}"></use>
                  </svg>
                  Posts
               </a>
            </li>

            <li class="nav-group">
               <a class="nav-link nav-group-toggle" href="#">
                  <svg class="nav-icon">
                     <use xlink:href="{{ asset('admin/icons/free.svg#cil-puzzle') }}"></use>
                  </svg>
                  Base
               </a>
               <ul class="nav-group-items">
                  <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span> Accordion</a></li>
               </ul>
            </li>
         </ul>
      </div>