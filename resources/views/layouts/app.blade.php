<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Å�ukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">

    <!-- Icons-->
    <link href="assets/node_modules/@coreui/icons/css/free.min.css" rel="stylesheet">
    <link href="assets/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="assets/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="assets/src/css/style.css" rel="stylesheet">
    <link href="{{asset('css/extra.css')}}" rel="stylesheet">
    <link href="assets/src/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>

    <!-- Styles -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ session('host')->title_page }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
<div id="app">
    <nav-bar></nav-bar>
    <div class="app-body">
        <sidebar></sidebar>
        <main class="main">
            <!-- Breadcrumb-->
            <breadcum></breadcum>
            <div class="container-fluid animated fadeIn">
                @yield('content')
            </div>
        </main>
        <aside class="aside-menu">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">
                        <i class="icon-list"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                        <i class="icon-speech"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                        <i class="icon-settings"></i>
                    </a>
                </li>
            </ul>
            <!-- Tab panes-->
            <div class="tab-content">
                <div class="tab-pane active" id="timeline" role="tabpanel">
                    <div class="list-group list-group-accent">
                        <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Today</div>
                        <div class="list-group-item list-group-item-accent-warning list-group-item-divider">
                            <div class="avatar float-right">
                                <img class="img-avatar" src="assets/src/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div>Meeting with
                                <strong>Lucas</strong>
                            </div>
                            <small class="text-muted mr-3">
                                <i class="icon-calendar"></i>Â  1 - 3pm</small>
                            <small class="text-muted">
                                <i class="icon-location-pin"></i>Â  Palo Alto, CA</small>
                        </div>
                        <div class="list-group-item list-group-item-accent-info">
                            <div class="avatar float-right">
                                <img class="img-avatar" src="assets/src/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                            </div>
                            <div>Skype with
                                <strong>Megan</strong>
                            </div>
                            <small class="text-muted mr-3">
                                <i class="icon-calendar"></i>Â  4 - 5pm</small>
                            <small class="text-muted">
                                <i class="icon-social-skype"></i>Â  On-line</small>
                        </div>
                        <div class="list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small">Tomorrow</div>
                        <div class="list-group-item list-group-item-accent-danger list-group-item-divider">
                            <div>New UI Project -
                                <strong>deadline</strong>
                            </div>
                            <small class="text-muted mr-3">
                                <i class="icon-calendar"></i>Â  10 - 11pm</small>
                            <small class="text-muted">
                                <i class="icon-home"></i>Â  creativeLabs HQ</small>
                            <div class="avatars-stack mt-2">
                                <div class="avatar avatar-xs">
                                    <img class="img-avatar" src="assets/src/img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img class="img-avatar" src="assets/src/img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                                </div>  
                                <div class="avatar avatar-xs">
                                    <img class="img-avatar" src="assets/src/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img class="img-avatar" src="assets/src/img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img class="img-avatar" src="assets/src/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-accent-success list-group-item-divider">
                            <div>
                                <strong>#10 Startups.Garden</strong> Meetup</div>
                            <small class="text-muted mr-3">
                                <i class="icon-calendar"></i>Â  1 - 3pm</small>
                            <small class="text-muted">
                                <i class="icon-location-pin"></i>Â  Palo Alto, CA</small>
                        </div>
                        <div class="list-group-item list-group-item-accent-primary list-group-item-divider">
                            <div>
                                <strong>Team meeting</strong>
                            </div>
                            <small class="text-muted mr-3">
                                <i class="icon-calendar"></i>Â  4 - 6pm</small>
                            <small class="text-muted">
                                <i class="icon-home"></i>Â  creativeLabs HQ</small>
                            <div class="avatars-stack mt-2">
                                <div class="avatar avatar-xs">
                                    <img class="img-avatar" src="assets/src/img/avatars/2.jpg" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img class="img-avatar" src="assets/src/img/avatars/3.jpg" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img class="img-avatar" src="assets/src/img/avatars/4.jpg" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img class="img-avatar" src="assets/src/img/avatars/5.jpg" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img class="img-avatar" src="assets/src/img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img class="img-avatar" src="assets/src/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                                </div>
                                <div class="avatar avatar-xs">
                                    <img class="img-avatar" src="assets/src/img/avatars/8.jpg" alt="admin@bootstrapmaster.com">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane p-3" id="messages" role="tabpanel">
                    <div class="message">
                        <div class="py-3 pb-5 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="assets/src/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-1">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="py-3 pb-5 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="assets/src/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-1">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="py-3 pb-5 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="assets/src/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-1">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="py-3 pb-5 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="assets/src/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-1">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                    <hr>
                    <div class="message">
                        <div class="py-3 pb-5 mr-3 float-left">
                            <div class="avatar">
                                <img class="img-avatar" src="assets/src/img/avatars/7.jpg" alt="admin@bootstrapmaster.com">
                                <span class="avatar-status badge-success"></span>
                            </div>
                        </div>
                        <div>
                            <small class="text-muted">Lukasz Holeczek</small>
                            <small class="text-muted float-right mt-1">1:52 PM</small>
                        </div>
                        <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                    </div>
                </div>
                <div class="tab-pane p-3" id="settings" role="tabpanel">
                    <h6>Settings</h6>
                    <div class="aside-options">
                        <div class="clearfix mt-4">
                            <small>
                                <b>Option 1</b>
                            </small>
                            <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                                <input class="switch-input" type="checkbox" checked="">
                                <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                            </label>
                        </div>
                        <div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                        </div>
                    </div>
                    <div class="aside-options">
                        <div class="clearfix mt-3">
                            <small>
                                <b>Option 2</b>
                            </small>
                            <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                                <input class="switch-input" type="checkbox">
                                <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                            </label>
                        </div>
                        <div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                        </div>
                    </div>
                    <div class="aside-options">
                        <div class="clearfix mt-3">
                            <small>
                                <b>Option 3</b>
                            </small>
                            <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                                <input class="switch-input" type="checkbox">
                                <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                            </label>
                        </div>
                    </div>
                    <div class="aside-options">
                        <div class="clearfix mt-3">
                            <small>
                                <b>Option 4</b>
                            </small>
                            <label class="switch switch-label switch-pill switch-success switch-sm float-right">
                                <input class="switch-input" type="checkbox" checked="">
                                <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <h6>System Utilization</h6>
                    <div class="text-uppercase mb-1 mt-4">
                        <small>
                            <b>CPU Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">348 Processes. 1/4 Cores.</small>
                    <div class="text-uppercase mb-1 mt-2">
                        <small>
                            <b>Memory Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">11444GB/16384MB</small>
                    <div class="text-uppercase mb-1 mt-2">
                        <small>
                            <b>SSD 1 Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">243GB/256GB</small>
                    <div class="text-uppercase mb-1 mt-2">
                        <small>
                            <b>SSD 2 Usage</b>
                        </small>
                    </div>
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted">25GB/256GB</small>
                </div>
            </div>
        </aside>
    </div>
    <footer class="app-footer">
        <div>
            <a href="https://coreui.io">CoreUI</a>
            <span>&copy; 2018 creativeLabs.</span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            <a href="https://coreui.io">CoreUI</a>
        </div>
    </footer>
</div>


<!-- CoreUI and necessary plugins-->
<script src="assets/node_modules/jquery/dist/jquery.min.js"></script>
<script src="assets/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/node_modules/pace-progress/pace.min.js"></script>
<script src="assets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="assets/node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
<script>
    $('#ui-view').ajaxLoad();
    $(document).ajaxComplete(function() {
        Pace.restart()
    });
</script>
</body>
</html>
