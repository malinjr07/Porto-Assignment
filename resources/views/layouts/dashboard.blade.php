<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Porto-Sample Ecommerce Website</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('public/all/admin') }}/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('public/all/admin') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/all/admin') }}/assets/css/bootstrap_limitless.min.css" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('public/all/admin') }}/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/all/admin') }}/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/all/admin') }}/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    @yield('css_ext')
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('public/all/admin') }}/global_assets/js/main/jquery.min.js"></script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/main/bootstrap.bundle.min.js">
    </script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/plugins/loaders/blockui.min.js">
    </script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('public/all/admin') }}/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/demo_pages/dashboard.js"></script>
    <script src="{{ asset('public/all/admin') }}/assets/js/app.js"></script>
    @yield('js_ext')
    {{-- 
        <script src="{{ asset('public/all/admin') }}/global_assets/js/plugins/pickers/daterangepicker.js"></script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js">
    </script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/demo_charts/pages/dashboard/light/sparklines.js">
    </script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/demo_charts/pages/dashboard/light/lines.js"></script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/demo_charts/pages/dashboard/light/areas.js"></script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/demo_charts/pages/dashboard/light/donuts.js"></script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/demo_charts/pages/dashboard/light/bars.js"></script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/demo_charts/pages/dashboard/light/progress.js">
    </script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js">
    </script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/demo_charts/pages/dashboard/light/pies.js"></script>
    <script src="{{ asset('public/all/admin') }}/global_assets/js/demo_charts/pages/dashboard/light/bullets.js">
    </script>
    --}}
    <!-- /theme JS files -->

</head>

<body>

    @php
    $user=Illuminate\Support\Facades\Auth::user();
    $user_no=$user->id;
    @endphp

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark">
        <div class="navbar-brand">
            <a href="{{ route('home') }}" class="d-inline-block">
                <img src="{{ asset('public/all/admin') }}/global_assets/images/logo_light.png" alt="">
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="javascript:void(0)" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-git-compare"></i>
                        <span class="d-md-none ml-2">Git updates</span>
                        <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
                    </a>

                    <div class="dropdown-menu dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Git updates</span>
                            <a href="javascript:void(0)" class="text-default"><i class="icon-sync"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="javascript:void(0)"
                                            class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i
                                                class="icon-git-pull-request"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Drop the IE <a href="javascript:void(0)">specific hacks</a> for temporal inputs
                                        <div class="text-muted font-size-sm">4 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="javascript:void(0)"
                                            class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon">
                                            <i class="icon-git-commit"></i>
                                        </a>
                                    </div>

                                    <div class="media-body">
                                        Add full font overrides for popovers and tooltips
                                        <div class="text-muted font-size-sm">36 minutes ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="javascript:void(0)"
                                            class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i
                                                class="icon-git-branch"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="javascript:void(0)">Chris Arney</a> created a new <span
                                            class="font-weight-semibold">Design</span> branch
                                        <div class="text-muted font-size-sm">2 hours ago</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="javascript:void(0)"
                                            class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i
                                                class="icon-git-merge"></i></a>
                                    </div>

                                    <div class="media-body">
                                        <a href="javascript:void(0)">Eugene Kopyov</a> merged <span
                                            class="font-weight-semibold">Master</span> and <span
                                            class="font-weight-semibold">Dev</span> branches
                                        <div class="text-muted font-size-sm">Dec 18, 18:36</div>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <a href="javascript:void(0)"
                                            class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i
                                                class="icon-git-pull-request"></i></a>
                                    </div>

                                    <div class="media-body">
                                        Have Carousel ignore keyboard events
                                        <div class="text-muted font-size-sm">Dec 12, 05:46</div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="javascript:void(0)" class="text-grey mr-auto">All updates</a>
                            <div>
                                <a href="javascript:void(0)" class="text-grey" data-popup="tooltip" title="Mark all as read"><i
                                        class="icon-radio-unchecked"></i></a>
                                <a href="javascript:void(0)" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i
                                        class="icon-bug2"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-people"></i>
                        <span class="d-md-none ml-2">Users</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Users online</span>
                            <a href="javascript:void(0)" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('public/all/admin') }}/global_assets/images/demo/users/face18.jpg"
                                            width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="javascript:void(0)" class="media-title font-weight-semibold">Jordana Ansley</a>
                                        <span class="d-block text-muted font-size-sm">Lead web developer</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span
                                            class="badge badge-mark border-success"></span></div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('public/all/admin') }}/global_assets/images/demo/users/face24.jpg"
                                            width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="javascript:void(0)" class="media-title font-weight-semibold">Will Brason</a>
                                        <span class="d-block text-muted font-size-sm">Marketing manager</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span
                                            class="badge badge-mark border-danger"></span></div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('public/all/admin') }}/global_assets/images/demo/users/face17.jpg"
                                            width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="javascript:void(0)" class="media-title font-weight-semibold">Hanna Walden</a>
                                        <span class="d-block text-muted font-size-sm">Project manager</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span
                                            class="badge badge-mark border-success"></span></div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('public/all/admin') }}/global_assets/images/demo/users/face19.jpg"
                                            width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="javascript:void(0)" class="media-title font-weight-semibold">Dori Laperriere</a>
                                        <span class="d-block text-muted font-size-sm">Business developer</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span
                                            class="badge badge-mark border-warning-300"></span></div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('public/all/admin') }}/global_assets/images/demo/users/face16.jpg"
                                            width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="javascript:void(0)" class="media-title font-weight-semibold">Vanessa Aurelius</a>
                                        <span class="d-block text-muted font-size-sm">UX expert</span>
                                    </div>
                                    <div class="ml-3 align-self-center"><span
                                            class="badge badge-mark border-grey-400"></span></div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer bg-light">
                            <a href="javascript:void(0)" class="text-grey mr-auto">All users</a>
                            <a href="javascript:void(0)" class="text-grey"><i class="icon-gear"></i></a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                        <i class="icon-bubbles4"></i>
                        <span class="d-md-none ml-2">Messages</span>
                        <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-header">
                            <span class="font-weight-semibold">Messages</span>
                            <a href="javascript:void(0)" class="text-default"><i class="icon-compose"></i></a>
                        </div>

                        <div class="dropdown-content-body dropdown-scrollable">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="{{ asset('public/all/admin') }}/global_assets/images/demo/users/face10.jpg"
                                            width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="javascript:void(0)">
                                                <span class="font-weight-semibold">James Alexander</span>
                                                <span class="text-muted float-right font-size-sm">04:58</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">who knows, maybe that would be the best thing for
                                            me...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3 position-relative">
                                        <img src="{{ asset('public/all/admin') }}/global_assets/images/demo/users/face3.jpg"
                                            width="36" height="36" class="rounded-circle" alt="">
                                    </div>

                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="javascript:void(0)">
                                                <span class="font-weight-semibold">Margo Baker</span>
                                                <span class="text-muted float-right font-size-sm">12:16</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">That was something he was unable to do
                                            because...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('public/all/admin') }}/global_assets/images/demo/users/face24.jpg"
                                            width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="javascript:void(0)">
                                                <span class="font-weight-semibold">Jeremy Victorino</span>
                                                <span class="text-muted float-right font-size-sm">22:48</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">But that would be extremely strained and
                                            suspicious...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('public/all/admin') }}/global_assets/images/demo/users/face4.jpg"
                                            width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="javascript:void(0)">
                                                <span class="font-weight-semibold">Beatrix Diaz</span>
                                                <span class="text-muted float-right font-size-sm">Tue</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">What a strenuous career it is that I've
                                            chosen...</span>
                                    </div>
                                </li>

                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{ asset('public/all/admin') }}/global_assets/images/demo/users/face25.jpg"
                                            width="36" height="36" class="rounded-circle" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-title">
                                            <a href="javascript:void(0)">
                                                <span class="font-weight-semibold">Richard Vango</span>
                                                <span class="text-muted float-right font-size-sm">Mon</span>
                                            </a>
                                        </div>

                                        <span class="text-muted">Other travelling salesmen live a life of
                                            luxury...</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="dropdown-content-footer justify-content-center p-0">
                            <a href="javascript:void(0)" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i
                                    class="icon-menu7 d-block top-0"></i></a>
                        </div>
                    </div>
                </li>

                        <li class="nav-item dropdown dropdown-user">
                            <a href="javascript:void(0)" class="navbar-nav-link d-flex align-items-center dropdown-toggle"
                                data-toggle="dropdown">
                                <img src="{{ URL::to($user->image) }}"
                                    class="rounded-circle mr-2" height="34" alt="">
                                <span>{{ $user->name }}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="javascript:void(0)" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span
                                        class="badge badge-pill bg-blue ml-auto">58</span></a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="icon-switch2"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /main navbar -->
            
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="javascript:void(0)" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Navigation
                <a href="javascript:void(0)" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3">
                                <a href="javascript:void(0)"><img
                                        src="{{ URL::to($user->image) }}"
                                        width="38" height="38" class="rounded-circle" alt=""></a>
                            </div>

                            <div class="media-body">
                                <div class="media-title font-weight-semibold">{{ $user->name }} {{ $user->last_name }}
                                </div>
                                <div class="font-size-xs opacity-50">
                                    <i class="icon-pin font-size-sm"></i> &nbsp; Santa Ana, CA
                                </div>
                            </div>

                            <div class="ml-3 align-self-center">
                                <a href="javascript:void(0)" class="text-white"><i class="icon-cog3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">

                        <!-- Main -->
                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu"
                                title="Main"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('main') }}" class="nav-link">
                                <i class="icon-home4"></i>
                                <span>
                                    Main Website
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin') }}" class="nav-link active">
                                <i class="icon-home4"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="nav-item nav-item-submenu">
                            <a href="javascript:void(0)" class="nav-link"><i class="icon-copy"></i> <span>Components</span></a>

                            <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                                <li class="nav-item">
                                    <a href="{{ route('form') }}"
                                        class="nav-link">Form</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('list') }}"
                                        class="nav-link">List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('sign_in') }}"
                                        class="nav-link">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('sign_up') }}"
                                        class="nav-link">Registration</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        @yield('page_name')
                        <a href="javascript:void(0)" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0)" class="btn btn-link btn-float text-default"><i
                                    class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-float text-default"><i
                                    class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                            <a href="javascript:void(0)" class="btn btn-link btn-float text-default"><i
                                    class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            @yield('breads')
                        </div>

                        <a href="javascript:void(0)" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="breadcrumb justify-content-center">
                            <a href="javascript:void(0)" class="breadcrumb-elements-item">
                                <i class="icon-comment-discussion mr-2"></i>
                                Support
                            </a>

                            <div class="breadcrumb-elements-item dropdown p-0">
                                <a href="javascript:void(0)" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear mr-2"></i>
                                    Settings
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="icon-user-lock"></i> Account
                                        security</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="icon-accessibility"></i>
                                        Accessibility</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">
                @yield('main')
            </div>
            <!-- /content area -->


            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        &copy; 2020 <a href="javascript:void(0)">Admin Dashboard</a> by <a href="http://maruf.fastcodertech.com"
                            target="_blank">Mosaddik Ali Maruf</a>
                    </span>
                </div>
            </div>
            <!-- /footer -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>