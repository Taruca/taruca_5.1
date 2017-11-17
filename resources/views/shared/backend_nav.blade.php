             <header class="main-header">
                     <!-- Logo -->
                     <a href="{{url('backend/index')}}" class="logo">
                         <!-- mini logo for sidebar mini 50x50 pixels -->
                         <span class="logo-mini"><b>T</b></span>
                         <!-- logo for regular state and mobile devices -->
                         <span class="logo-lg"><b>Taruca</b></span>
                     </a>
                     <!-- Header Navbar: style can be found in header.less -->
                     <nav class="navbar navbar-static-top">
                         <!-- Sidebar toggle button-->
                         <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                             <span class="sr-only">Toggle navigation</span>
                         </a>

                         <div class="navbar-custom-menu">
                             <ul class="nav navbar-nav">
                                 <!-- User Account: style can be found in dropdown.less -->
                                 <li class="dropdown user user-menu">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                         <span class="hidden-xs">{{$userInfo['name']}}</span>
                                     </a>
                                     <ul class="dropdown-menu">
                                         <!-- User image -->
                                         <li class="user-header">
                                             <p>
                                                 {{$userInfo['name']}}
                                                 <small>{{$userInfo['created_at']}}</small>
                                             </p>
                                         </li>
                                     </ul>
                                 </li>
                                 <!-- Control Sidebar Toggle Button -->
                                 <li>
                                     <a href="#" title="Sign out"><i class="fa fa-sign-out"></i></a>
                                     {{--<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>--}}
                                 </li>
                             </ul>
                         </div>
                     </nav>
                 </header>