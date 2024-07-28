<!DOCTYPE html>
<html lang="en">

<title>Admindek | Admin Template</title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="<?=base_url('resources/admin/')?>/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="<?=base_url('resources/admin/')?>/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/admin/')?>/assets/css/pages.css">
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo">
<a href="./index.html">
<img class="img-fluid" src="<?=base_url('resources/admin/')?>/assets/images/logo.png" alt="Theme-Logo" />
</a>
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="feather icon-menu icon-toggle-right"></i>
</a>
<a class="mobile-options waves-effect waves-light">
<i class="feather icon-more-horizontal"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<ul class="nav-left">
<li class="header-search">
<div class="main-search morphsearch-search">
<div class="input-group">
<span class="input-group-prepend search-close">
<i class="feather icon-x input-group-text"></i>
</span>
<input type="text" class="form-control" placeholder="Enter Keyword">
 <span class="input-group-append search-btn">
<i class="feather icon-search input-group-text"></i>
</span>
</div>
</div>
</li>
<li>
<a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
<i class="full-screen feather icon-maximize"></i>
</a>
</li>
</ul>
<ul class="nav-right">
<li class="header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<i class="feather icon-bell"></i>
<span class="badge bg-c-red">5</span>
</div>
<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
<h6>Notifications</h6>
<label class="label label-danger">New</label>
</li>
<li>
<div class="media">
<img class="img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">John Doe</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-3.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Joseph William</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Sara Soudein</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
</ul>
 </div>
</li>
<li class="header-notification">
<div class="dropdown-primary dropdown">
<div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
<i class="feather icon-message-square"></i>
<span class="badge bg-c-green">3</span>
</div>
</div>
</li>
<li class="user-profile header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
<img src="<?=base_url('resources/admin/')?>/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
<span>John Doe</span>
<i class="feather icon-chevron-down"></i>
</div>
<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
<a href="#!">
<i class="feather icon-settings"></i> Settings
</a>
</li>
<li>
<a href="#">
<i class="feather icon-user"></i> Profile
</a>
</li>
<li>
<a href="email-inbox.html">
<i class="feather icon-mail"></i> My Messages
</a>
</li>
<li>
<a href="auth-lock-screen.html">
<i class="feather icon-lock"></i> Lock Screen
</a>
</li>
<li>
<a href="auth-sign-in-social.html">
<i class="feather icon-log-out"></i> Logout
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>

<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="p-fixed users-main">
<div class="user-box">
<div class="chat-search-box">
<a class="back_friendlist">
<i class="feather icon-x"></i>
</a>
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
 </div>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-3.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="<?=base_url('resources/admin/')?>/assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
</div>
</div>
 </div>
</div>
</div>
</div>
</div>


<div class="showChat_inner">
<div class="media chat-inner-header">
<a class="back_chatBox">
<i class="feather icon-x"></i> Josephin Doe
</a>
</div>
<div class="main-friend-chat">
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="<?=base_url('resources/admin/')?>/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<div class="media-body chat-menu-reply">
<div class="">
<p class="chat-cont">Ohh! very nice</p>
</div>
<p class="chat-time">8:22 a.m.</p>
</div>
</div>
<div class="media chat-messages">
<a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="<?=base_url('resources/admin/')?>/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body chat-menu-content">
<div class="">
<p class="chat-cont">can you come with me?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="chat-reply-box">
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" class="form-control" placeholder="Write hear . . ">
<div class="input-group-append">
<button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
</div>
</div>
</div>
</div>
</div>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<nav class="pcoded-navbar">
<div class="nav-list">
<div class="pcoded-inner-navbar main-menu">
<div class="pcoded-navigation-label">Navigation</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-home"></i></span>
<span class="pcoded-mtext">Dashboard</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="./index.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Default</span>
</a>
</li>
<li class="">
<a href="dashboard-crm.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">CRM</span>
</a>
</li>
<li class="">
<a href="dashboard-analytics.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Analytics</span>
<span class="pcoded-badge label label-info ">NEW</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
<span class="pcoded-mtext">Page layouts</span>
<span class="pcoded-badge label label-warning">NEW</span>
</a>
<ul class="pcoded-submenu">
<li class=" pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Vertical</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="menu-static.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Static Layout</span>
</a>
</li>
<li class="">
<a href="menu-header-fixed.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Header Fixed</span>
</a>
</li>
<li class="">
<a href="menu-compact.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Compact</span>
</a>
</li>
<li class="">
<a href="menu-sidebar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Sidebar Fixed</span>
</a>
</li>
</ul>
</li>
<li class=" pcoded-hasmenu"> 
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Horizontal</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="menu-horizontal-static.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Static Layout</span>
</a>
</li>
<li class="">
<a href="menu-horizontal-fixed.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed layout</span>
</a>
</li>
<li class="">
<a href="menu-horizontal-icon.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Static With Icon</span>
</a>
</li>
<li class="">
<a href="menu-horizontal-icon-fixed.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed With Icon</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="menu-bottom.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Bottom Menu</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="navbar-light.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-menu"></i>
</span>
<span class="pcoded-mtext">Navigation</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-layers"></i>
</span>
<span class="pcoded-mtext">Widget</span>
<span class="pcoded-badge label label-danger">100+</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="widget-statistic.html" class="waves-effect waves-dark">
 <span class="pcoded-mtext">Statistic</span>
</a>
</li>
<li class="">
<a href="widget-data.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data</span>
</a>
</li>
<li class="">
<a href="widget-chart.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Chart Widget</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="pcoded-navigation-label">UI Element</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu active pcoded-trigger">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-box"></i>
</span>
<span class="pcoded-mtext">Basic</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="alert.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Alert</span>
</a>
</li>
<li class="">
<a href="breadcrumb.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Breadcrumbs</span>
</a>
</li>
<li class="active">
<a href="button.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Button</span>
</a>
</li>
<li class="">
<a href="box-shadow.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Box-Shadow</span>
</a>
</li>
<li class="">
<a href="accordion.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Accordion</span>
</a>
</li>
<li class="">
<a href="generic-class.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Generic Class</span>
</a>
</li>
<li class=" ">
 <a href="tabs.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tabs</span>
</a>
</li>
<li class=" ">
<a href="color.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Color</span>
</a>
</li>
<li class=" ">
<a href="label-badge.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Label Badge</span>
</a>
</li>
<li class=" ">
<a href="progress-bar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Progress Bar</span>
</a>
</li>
<li class=" ">
<a href="list.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">List</span>
</a>
</li>
<li class=" ">
<a href="tooltip.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tooltip And Popover</span>
</a>
</li>
<li class=" ">
<a href="typography.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Typography</span>
</a>
</li>
<li class=" ">
<a href="other.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Other</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-gitlab"></i>
</span>
<span class="pcoded-mtext">Advance</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="draggable.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Draggable</span>
</a>
</li>
<li class=" ">
<a href="modal.html" class="waves-effect waves-dark">
 <span class="pcoded-mtext">Modal</span>
</a>
</li>
<li class=" ">
<a href="notification.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Notifications</span>
</a>
</li>
<li class=" ">
<a href="rating.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rating</span>
</a>
</li>
<li class=" ">
<a href="range-slider.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Range Slider</span>
</a>
</li>
<li class=" ">
<a href="slider.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Slider</span>
</a>
</li>
<li class=" ">
<a href="syntax-highlighter.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Syntax Highlighter</span>
</a>
</li>
<li class=" ">
<a href="tour.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tour</span>
</a>
</li>
<li class=" ">
<a href="treeview.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tree View</span>
</a>
</li>
<li class=" ">
<a href="nestable.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Nestable</span>
</a>
</li>
<li class=" ">
<a href="toolbar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Toolbar</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-package"></i>
</span>
<span class="pcoded-mtext">Extra</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="session-timeout.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Session Timeout</span>
</a>
</li>
<li class=" ">
<a href="session-idle-timeout.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Session Idle Timeout</span>
</a>
</li>
<li class=" ">
<a href="offline.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Offline</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="animation.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-aperture rotate-refresh"></i>
</span>
<span class="pcoded-mtext">Animations</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-command"></i>
</span>
<span class="pcoded-mtext">Icons</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="icon-font-awesome.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Font Awesome</span>
</a>
</li>
<li class=" ">
<a href="icon-themify.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Themify</span>
</a>
</li>
<li class=" ">
<a href="icon-simple-line.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Simple Line Icon</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="pcoded-navigation-label">Forms</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
<span class="pcoded-mtext">Form</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="form-elements-component.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Components</span>
</a>
</li>
<li class=" ">
<a href="form-elements-add-on.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Add-On</span>
</a>
</li>
<li class=" ">
<a href="form-elements-advance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Advance</span>
</a>
</li>
<li class=" ">
<a href="form-validation.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Validation</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="form-picker.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-edit-1"></i>
</span>
<span class="pcoded-mtext">Form Picker</span>
<span class="pcoded-badge label label-warning">NEW</span>
</a>
</li>
<li class=" ">
<a href="form-select.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-feather"></i>
</span>
<span class="pcoded-mtext">Form Select</span>
</a>
</li>
<li class=" ">
<a href="form-masking.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-shield"></i>
</span>
<span class="pcoded-mtext">Form Masking</span>
</a>
</li>
<li class=" ">
<a href="form-wizard.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-tv"></i>
</span>
<span class="pcoded-mtext">Form Wizard</span>
</a>
</li>
</ul>
<div class="pcoded-navigation-label">Tables</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-credit-card"></i>
</span>
<span class="pcoded-mtext">Bootstrap Table</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="bs-basic-table.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-sizing.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Sizing Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-border.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Border Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-styling.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Styling Table</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-inbox"></i>
</span>
<span class="pcoded-mtext">Data Table</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-basic.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Initialization</span>
</a>
</li>
<li class=" ">
<a href="dt-advance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Advance Initialization</span>
</a>
</li>
<li class=" ">
<a href="dt-styling.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Styling</span>
</a>
</li>
<li class=" ">
<a href="dt-api.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">API</span>
</a>
</li>
<li class=" ">
<a href="dt-ajax.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Ajax</span>
</a>
</li>
<li class=" ">
<a href="dt-server-side.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Server Side</span>
</a>
</li>
<li class=" ">
<a href="dt-plugin.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Plug-In</span>
</a>
</li>
<li class=" ">
<a href="dt-data-sources.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Sources</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-server"></i>
</span>
<span class="pcoded-mtext">DT Extensions</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-ext-autofill.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">AutoFill</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Button</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-ext-basic-buttons.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Button</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-buttons-html-5-data-export.html" class="waves-effect waves-dark">
 <span class="pcoded-mtext">Data Export</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="dt-ext-col-reorder.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Col Reorder</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-fixed-columns.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed Columns</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-fixed-header.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed Header</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-key-table.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Key Table</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-responsive.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Responsive</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-row-reorder.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Row Reorder</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-scroller.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Scroller</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-select.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Select Table</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="foo-table.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-hash"></i>
</span>
<span class="pcoded-mtext">FooTable</span>
</a>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-airplay"></i>
</span>
<span class="pcoded-mtext">Handson Table</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="handson-appearance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Appearance</span>
</a>
</li>
<li class="">
<a href="handson-data-operation.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Operation</span>
</a>
</li>
<li class="">
<a href="handson-rows-cols.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rows Columns</span>
</a>
</li>
<li class="">
<a href="handson-columns-only.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Columns Only</span>
</a>
</li>
<li class="">
<a href="handson-cell-features.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Cell Features</span>
</a>
</li>
<li class="">
<a href="handson-cell-types.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Cell Types</span>
</a>
</li>
<li class="">
<a href="handson-integrations.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Integrations</span>
</a>
</li>
<li class="">
<a href="handson-rows-only.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rows Only</span>
</a>
</li>
<li class="">
<a href="handson-utilities.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Utilities</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="editable-table.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-edit"></i>
</span>
<span class="pcoded-mtext">Editable Table</span>
</a>
</li>
</ul>
<div class="pcoded-navigation-label">Chart And Maps</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-pie-chart"></i>
</span>
<span class="pcoded-mtext">Charts</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="chart-google.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Google Chart</span>
</a>
</li>
<li class="">
<a href="chart-chartjs.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">ChartJs</span>
</a>
</li>
<li class="">
<a href="chart-list.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">List Chart</span>
</a>
</li>
<li class="">
<a href="chart-float.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Float Chart</span>
</a>
</li>
<li class="">
<a href="chart-knob.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Knob chart</span>
</a>
</li>
<li class="">
<a href="chart-morris.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Morris Chart</span>
</a>
</li>
<li class="">
<a href="chart-nvd3.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Nvd3 Chart</span>
</a>
</li>
<li class="">
<a href="chart-peity.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Peity Chart</span>
 </a>
</li>
<li class="">
<a href="chart-radial.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Radial Chart</span>
</a>
</li>
<li class="">
<a href="chart-rickshaw.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rickshaw Chart</span>
</a>
</li>
<li class="">
<a href="chart-sparkline.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Sparkline Chart</span>
</a>
</li>
<li class="">
<a href="chart-c3.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">C3 Chart</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-map"></i>
</span>
<span class="pcoded-mtext">Maps</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="map-google.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Google Maps</span>
</a>
</li>
<li class="">
<a href="map-vector.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Vector Maps</span>
</a>
</li>
<li class="">
<a href="map-api.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Google Map Search API</span>
</a>
</li>
<li class="">
<a href="location.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Location</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="pcoded-navigation-label">Pages</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu ">
 <a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-unlock"></i>
</span>
<span class="pcoded-mtext">Authentication</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="auth-sign-in-social.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Login</span>
</a>
</li>
<li class="">
<a href="auth-sign-up-social.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Registration</span>
</a>
</li>
<li class="">
<a href="auth-reset-password.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Forgot Password</span>
</a>
</li>
<li class="">
<a href="auth-lock-screen.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Lock Screen</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-sliders"></i>
</span>
<span class="pcoded-mtext">Maintenance</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="error.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Error</span>
</a>
</li>
<li class="">
<a href="comming-soon.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Comming Soon</span>
</a>
</li>
<li class="">
<a href="offline-ui.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Offline UI</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-mail"></i>
</span>
<span class="pcoded-mtext">Email</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="email-compose.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Compose Email</span>
</a>
</li>
<li class="">
<a href="email-inbox.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Inbox</span>
</a>
</li>
<li class="">
<a href="email-read.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Read Mail</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="pcoded-navigation-label">App</div>
<ul class="pcoded-item pcoded-left-item">
<li class="">
<a href="todo.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-bookmark"></i>
</span>
<span class="pcoded-mtext">To-Do</span>
</a>
</li>
</ul>
<div class="pcoded-navigation-label">Extension</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-file-plus"></i>
</span>
<span class="pcoded-mtext">Editor</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="ck-editor.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">CK-Editor</span>
</a>
</li>
<li class="">
<a href="wysiwyg-editor.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">WYSIWYG Editor</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
 <span class="pcoded-micon">
<i class="feather icon-calendar"></i>
</span>
<span class="pcoded-mtext">Event Calendar</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="event-full-calender.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Full Calendar</span>
</a>
</li>
<li class="">
<a href="event-clndr.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">CLNDER</span>
<span class="pcoded-badge label label-info">NEW</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="image-crop.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-scissors"></i>
<b>IC</b>
</span>
<span class="pcoded-mtext">Image Cropper</span>
</a>
</li>
<li class="">
<a href="file-upload.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-upload-cloud"></i>
</span>
<span class="pcoded-mtext">File Upload</span>
</a>
</li>
<li class="">
<a href="change-loges.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-briefcase"></i>
</span>
<span class="pcoded-mtext">Change Loges</span>
<span class="pcoded-badge label label-warning">1.0</span>
</a>
</li>
</ul>
<div class="pcoded-navigation-label">Other</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-list"></i>
</span>
<span class="pcoded-mtext">Menu Levels</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="javascript:void(0)" class="waves-effect waves-dark">
 <span class="pcoded-mtext">Menu Level 2.1</span>
</a>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 2.2</span>
</a>
<ul class="pcoded-submenu">
<li class="">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 3.1</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 2.3</span>
</a>
</li>
</ul>
</li>
<li class="">
<a href="javascript:void(0)" class="disabled waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-power"></i>
<b>D</b>
</span>
<span class="pcoded-mtext">Disabled Menu</span>
</a>
</li>
<li class="">
<a href="sample-page.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-watch"></i>
</span>
<span class="pcoded-mtext">Sample Page</span>
</a>
</li>
</ul>
</div>
</div>
</nav>

<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-box bg-c-blue"></i>
<div class="d-inline">
<h5>Buttons</h5>
<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item"><a href="#!">Basic Components</a>
</li>
<li class="breadcrumb-item">
<a href="#!">Buttons</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-body button-page">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Color States</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">
<p>Checkout color states of all buttons on popover to buttons</p>
<button type="button" class="btn btn-primary waves-effect waves-light" id="primary-popover-content" data-container="body" data-toggle="popover" title="Primary color states" data-placement="bottom" data-content="<div class='color-code'>
                                                            <div class='row'>
                                                              <div class='col-sm-6 col-xs-12'>
                                                                <span class='block'>Normal</span>
                                                                <span class='block'>
                                                                  <small>#4680ff</small>
                                                              </span>
                                                          </div>
                                                          <div class='col-sm-6 col-xs-12'>
                                                            <div class='display-color' style='background-color:#4680ff;'></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class='color-code'>
                                                  <div class='row'>
                                                    <div class='col-sm-6 col-xs-12'>
                                                      <span class='block'>Hover</span>
                                                      <span class='block'>
                                                        <small>#79a3ff</small>
                                                    </span>
                                                </div>
                                                <div class='col-sm-6 col-xs-12'>
                                                  <div class='display-color' style='background-color:#79a3ff;'></div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class='color-code'>
                                          <div class='row'>
                                            <div class='col-sm-6 col-xs-12'>
                                              <span class='block'>Active</span>
                                              <span class='block'>
                                                <small>#0956ff</small>
                                            </span>
                                        </div>
                                        <div class='col-sm-6 col-xs-12'>
                                          <div class='display-color' style='background-color:#0956ff;'></div>
                                      </div>
                                  </div>
                              </div>

                              <div class='color-code'>
                                  <div class='row'>
                                    <div class='col-sm-6 col-xs-12'>
                                      <span class='block'>Disabled</span>
                                      <span class='block'>
                                        <small>#c3d5ff</small>
                                    </span>
                                </div>
                                <div class='col-sm-6 col-xs-12'>
                                  <div class='display-color' style='background-color:#c3d5ff;'></div>
                              </div>
                          </div>
                      </div>

                      ">Primary button</button>
<button type="button" class="btn btn-success waves-effect waves-light" data-container="body" data-toggle="popover" title="Success color states" data-placement="bottom" data-content="<div class='color-code'>
                        <div class='row'>
                          <div class='col-sm-6 col-xs-12'>
                            <span class='block'>Normal</span>
                            <span class='block'>
                              <small>#93BE52</small>
                          </span>
                      </div>
                      <div class='col-sm-6 col-xs-12'>
                        <div class='display-color' style='background-color:#93BE52;'></div>
                    </div>
                </div>
            </div>

            <div class='color-code'>
              <div class='row'>
                <div class='col-sm-6 col-xs-12'>
                  <span class='block'>Hover</span>
                  <span class='block'>
                    <small>#aacc77</small>
                </span>
            </div>
            <div class='col-sm-6 col-xs-12'>
              <div class='display-color' style='background-color:#aacc77;'></div>
          </div>
      </div>
  </div>

  <div class='color-code'>
      <div class='row'>
        <div class='col-sm-6 col-xs-12'>
          <span class='block'>Active</span>
          <span class='block'>
            <small>#73993a</small>
        </span>
    </div>
    <div class='col-sm-6 col-xs-12'>
      <div class='display-color' style='background-color:#73993a;'></div>
  </div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Disabled</span>
      <span class='block'>
        <small>#dce9c6</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#dce9c6;'></div>
</div>
</div>
</div>">Success button</button>
<button type="button" class="btn btn-info waves-effect waves-light" data-container="body" data-toggle="popover" title="Info color states" data-placement="bottom" data-content="<div class='color-code'>
    <div class='row'>
      <div class='col-sm-6 col-xs-12'>
        <span class='block'>Normal</span>
        <span class='block'>
          <small>#62d1f3</small>
      </span>
  </div>
  <div class='col-sm-6 col-xs-12'>
    <div class='display-color' style='background-color:#62d1f3;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Hover</span>
      <span class='block'>
        <small>#91dff7</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#91dff7;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Active</span>
      <span class='block'>
        <small>#29c0ef</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#29c0ef;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Disabled</span>
      <span class='block'>
        <small>#ccf0fb</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#ccf0fb;'></div>
</div>
</div>
</div>">Info button</button>
<button type="button" class="btn btn-warning waves-effect waves-light" data-container="body" data-toggle="popover" title="Warning color states" data-placement="bottom" data-content="<div class='color-code'>
    <div class='row'>
      <div class='col-sm-6 col-xs-12'>
        <span class='block'>Normal</span>
        <span class='block'>
          <small>#FFB64D</small>
      </span>
  </div>
  <div class='col-sm-6 col-xs-12'>
    <div class='display-color' style='background-color:#FFB64D;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Hover</span>
      <span class='block'>
        <small>#ffcb80</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#ffcb80;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Active</span>
      <span class='block'>
        <small>#ff9d10</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#ff9d10;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Disabled</span>
      <span class='block'>
        <small>#ffe7c4</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#ffe7c4;'></div>
</div>
</div>
</div>">warning button</button>
<button type="button" class="btn btn-danger waves-effect waves-light" data-container="body" data-toggle="popover" title="Danger color states" data-placement="bottom" data-content="<div class='color-code'>
    <div class='row'>
      <div class='col-sm-6 col-xs-12'>
        <span class='block'>Normal</span>
        <span class='block'>
          <small>#FC6180</small>
      </span>
  </div>
  <div class='col-sm-6 col-xs-12'>
    <div class='display-color' style='background-color:#FC6180;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Hover</span>
      <span class='block'>
        <small>#fd93a8</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#fd93a8;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Active</span>
      <span class='block'>
        <small>#fb2550</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#fb2550;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Disabled</span>
      <span class='block'>
        <small>#fecbd5</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#fecbd5;'></div>
</div>
</div>
</div>">Danger button</button>
<button type="button" class="btn btn-inverse waves-effect waves-light" data-container="body" data-toggle="popover" title="Inverse color states" data-placement="bottom" data-content="<div class='color-code'>
    <div class='row'>
      <div class='col-sm-6 col-xs-12'>
        <span class='block'>Normal</span>
        <span class='block'>
          <small>#303548</small>
      </span>
  </div>
  <div class='col-sm-6 col-xs-12'>
    <div class='display-color' style='background-color:#303548;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Hover</span>
      <span class='block'>
        <small>#444c67</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#444c67;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Active</span>
      <span class='block'>
        <small>#181a23</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#181a23;'></div>
</div>
</div>
</div>

<div class='color-code'>
  <div class='row'>
    <div class='col-sm-6 col-xs-12'>
      <span class='block'>Disabled</span>
      <span class='block'>
        <small>#bbbdc3</small>
    </span>
</div>
<div class='col-sm-6 col-xs-12'>
  <div class='display-color' style='background-color:#bbbdc3;'></div>
</div>
</div>
</div>">Inverse button</button>
<button type="button" class="btn btn-disabled waves-effect waves-light" data-container="body" data-toggle="popover" title="Disabled color states" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Disabled button</button>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Basic Buttons</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul>  </div>
</div>
<div class="card-block">

<p>
Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.
</p>
<button class="btn btn-primary waves-effect waves-light">Primary Button</button>
<button class="btn btn-success waves-effect waves-light">Success Button</button>
<button class="btn btn-info waves-effect waves-light">Info Button</button>
<button class="btn btn-warning waves-effect waves-light">Warning Button</button>
<button class="btn btn-danger waves-effect waves-light">Danger Button</button>
<button class="btn btn-inverse waves-effect waves-light">Inverse Button</button>
<button class="btn btn-disabled disabled waves-effect waves-light">Disabled Button</button>
</div>
</div>
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Rounded Buttons</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">

<p> Add <code>.btn-round</code> to default button to get rounded corners.</p>
<button class="btn btn-primary btn-round waves-effect waves-light">Primary Button</button>
<button class="btn btn-success btn-round waves-effect waves-light">Success Button</button>
<button class="btn btn-info btn-round waves-effect waves-light">Info Button</button>
<button class="btn btn-warning btn-round waves-effect waves-light">Warning Button</button>
<button class="btn btn-danger btn-round waves-effect waves-light">Danger Button</button>
<button class="btn btn-inverse btn-round waves-effect waves-light">Inverse Button</button>
<button class="btn btn-disabled btn-round disabled waves-effect waves-light">Disabled Button</button>
</div>
</div>
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Square Buttons</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li>  <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">

<p> Add <code>.btn-square</code> to default button to get square corners.</p>
<button class="btn waves-effect waves-light btn-primary btn-square">Primary Button</button>
<button class="btn waves-effect waves-light btn-success btn-square">Success Button</button>
<button class="btn waves-effect waves-light btn-info btn-square">Info Button</button>
<button class="btn waves-effect waves-light btn-warning btn-square">Warning Button</button>
<button class="btn waves-effect waves-light btn-danger btn-square">Danger Button</button>
<button class="btn waves-effect waves-light btn-inverse btn-square">Inverse Button</button>
<button class="btn waves-effect waves-light btn-disabled btn-square disabled">Disabled Button</button>
</div>
</div>
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Skew Buttons</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">

<p> Add <code>.btn-skew</code> to default button to get skew Buttons.</p>
<button class="btn waves-effect waves-light btn-primary btn-skew">Primary Button</button>
<button class="btn waves-effect waves-light btn-success btn-skew">Success Button</button>
<button class="btn waves-effect waves-light btn-info btn-skew">Info Button</button>
<button class="btn waves-effect waves-light btn-warning btn-skew">Warning Button</button>
<button class="btn waves-effect waves-light btn-danger btn-skew">Danger Button</button>
<button class="btn waves-effect waves-light btn-inverse btn-skew">Inverse Button</button>
<button class="btn waves-effect waves-light btn-disabled btn-skew disabled">Disabled Button</button>
</div>
</div>
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Inner Border</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">
<p>Use Class <code>.btn-out</code> inside button to make inner solid Border Button.</p>
<button class="btn btn-out waves-effect waves-light btn-primary btn-square">Primary Button</button>
<button class="btn btn-out waves-effect waves-light btn-success btn-square">Success Button</button>
<button class="btn btn-out waves-effect waves-light btn-info btn-square">Info Button</button>
<button class="btn btn-out waves-effect waves-light btn-warning btn-square">Warning Button</button>
<button class="btn btn-out waves-effect waves-light btn-danger btn-square">Danger Button</button>
<button class="btn btn-out waves-effect waves-light btn-inverse btn-square">Inverse Button</button>
<button class="btn btn-out waves-effect waves-light btn-disabled btn-square disabled">Disabled Button</button>
<p>Use Class <code>.btn-out-dashed</code> inside button to make inner dashed Border Button.</p>
<button class="btn btn-out-dashed waves-effect waves-light btn-primary btn-square">Primary Button</button>
<button class="btn btn-out-dashed waves-effect waves-light btn-success btn-square">Success Button</button>
<button class="btn btn-out-dashed waves-effect waves-light btn-info btn-square">Info Button</button>
<button class="btn btn-out-dashed waves-effect waves-light btn-warning btn-square">Warning Button</button>
<button class="btn btn-out-dashed waves-effect waves-light btn-danger btn-square">Danger Button</button>
<button class="btn btn-out-dashed waves-effect waves-light btn-inverse btn-square">Inverse Button</button>
<button class="btn btn-out-dashed waves-effect waves-light btn-disabled btn-square disabled">Disabled Button</button>
<p>Use Class <code>.btn-out-dotted</code> inside button to make inner solid dotted Button.</p>
<button class="btn btn-out-dotted waves-effect waves-light btn-primary btn-square">Primary Button</button>
<button class="btn btn-out-dotted waves-effect waves-light btn-success btn-square">Success Button</button>
<button class="btn btn-out-dotted waves-effect waves-light btn-info btn-square">Info Button</button>
<button class="btn btn-out-dotted waves-effect waves-light btn-warning btn-square">Warning Button</button>
<button class="btn btn-out-dotted waves-effect waves-light btn-danger btn-square">Danger Button</button>
<button class="btn btn-out-dotted waves-effect waves-light btn-inverse btn-square">Inverse Button</button>
<button class="btn btn-out-dotted waves-effect waves-light btn-disabled btn-square disabled">Disabled Button</button>
</div>
</div>
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Gradient</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">
<h4 class="sub-title">Vertical gradient</h4>
<p>Use Class <code>.btn-grd-*</code> inside button to make gradient Button.</p>
<button class="btn waves-effect waves-light btn-grd-primary ">Primary Button</button>
<button class="btn waves-effect waves-light btn-grd-success">Success Button</button>
<button class="btn waves-effect waves-light btn-grd-info ">Info Button</button>
<button class="btn waves-effect waves-light btn-grd-warning ">Warning Button</button>
<button class="btn waves-effect waves-light btn-grd-danger ">Danger Button</button>
<button class="btn waves-effect waves-light btn-grd-inverse ">Inverse Button</button>
<button class="btn waves-effect waves-light btn-grd-disabled btn-disabled disabled">Disabled Button</button>
<h4 class="sub-title">Horizontal gradient</h4>
<p>Use Class <code>.hor-grd .btn-grd-*</code> inside button to make horizontal gradient Button.</p>
<button class="btn waves-effect waves-light hor-grd btn-grd-primary ">Primary Button</button>
<button class="btn waves-effect waves-light hor-grd btn-grd-success">Success Button</button>
<button class="btn waves-effect waves-light hor-grd btn-grd-info ">Info Button</button>
<button class="btn waves-effect waves-light hor-grd btn-grd-warning ">Warning Button</button>
<button class="btn waves-effect waves-light hor-grd btn-grd-danger ">Danger Button</button>
<button class="btn waves-effect waves-light hor-grd btn-grd-inverse ">Inverse Button</button>
<button class="btn waves-effect waves-light hor-grd btn-grd-disabled btn-disabled disabled">Disabled Button</button>
</div>
</div>
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Materialized</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">
<p>Use Class <code>.btn-mat</code> inside button to make matrialized Button.</p>
<button class="btn btn-mat waves-effect waves-light btn-primary ">Primary Button</button>
<button class="btn btn-mat waves-effect waves-light btn-success">Success Button</button>
<button class="btn btn-mat waves-effect waves-light btn-info ">Info Button</button>
<button class="btn btn-mat waves-effect waves-light btn-warning ">Warning Button</button>
<button class="btn btn-mat waves-effect waves-light btn-danger ">Danger Button</button>
<button class="btn btn-mat waves-effect waves-light btn-inverse ">Inverse Button</button>
<button class="btn btn-mat waves-effect waves-light btn-disabled disabled">Disabled Button</button>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Buttons With Icon</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">

<p>Use <code>&lt;i class="icofont icofont-star"&gt;</code> inside button to add icon.</p>
<button class="btn waves-effect waves-light btn-primary"><i class="icofont icofont-user-alt-3"></i>Primary Button</button>
<button class="btn waves-effect waves-light btn-success"><i class="icofont icofont-check-circled"></i>Success Button</button>
<button class="btn waves-effect waves-light btn-info"><i class="icofont icofont-info-square"></i>Info Button</button>
<button class="btn waves-effect waves-light btn-warning"><i class="icofont icofont-warning-alt"></i>Warning Button</button>
<button class="btn waves-effect waves-light btn-danger"><i class="icofont icofont-eye-alt"></i>Danger Button</button>
<button class="btn waves-effect waves-light btn-inverse"><i class="icofont icofont-exchange"></i>Inverse Button</button>
<button class="btn waves-effect waves-light btn-disabled disabled"><i class="icofont icofont-not-allowed"></i>Disabled Button</button>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Border Buttons</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">

<p>Use Class <code>btn-outline-*</code> inside button to make Border Button.</p>
<button class="btn waves-effect waves-light btn-primary btn-outline-primary"><i class="icofont icofont-user-alt-3"></i>Primary Button</button>
<button class="btn waves-effect waves-light btn-success btn-outline-success"><i class="icofont icofont-check-circled"></i>Success Button</button>
<button class="btn waves-effect waves-light btn-info btn-outline-info"><i class="icofont icofont-info-square"></i>Info Button</button>
<button class="btn waves-effect waves-light btn-warning btn-outline-warning"><i class="icofont icofont-warning-alt"></i>Warning Button</button>
<button class="btn waves-effect waves-light btn-danger btn-outline-danger"><i class="icofont icofont-eye-alt"></i>Danger Button</button>
<button class="btn waves-effect waves-light btn-inverse btn-outline-inverse"><i class="icofont icofont-exchange"></i>Inverse Button</button>
<button class="btn waves-effect waves-light btn-disabled btn-outline-disabled disabled"><i class="icofont icofont-not-allowed"></i>Disabled Button</button>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Buttons Dropdown</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">

<div class="dropdown-primary dropdown open">
<button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Primary</button>
<div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="#">Action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
</div>
</div>
<div class="dropdown-success dropdown open">
<button class="btn btn-success dropdown-toggle waves-effect waves-light " type="button" id="dropdown-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Success</button>
<div class="dropdown-menu" aria-labelledby="dropdown-3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="#">Action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
</div>
</div>
<div class="dropdown-info dropdown open">
<button class="btn btn-info dropdown-toggle waves-effect waves-light " type="button" id="dropdown-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Info</button>
<div class="dropdown-menu" aria-labelledby="dropdown-4" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="#">Action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
</div>
</div>
<div class="dropdown-warning dropdown open">
<button class="btn btn-warning dropdown-toggle waves-effect waves-light " type="button" id="dropdown-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Warning</button>
<div class="dropdown-menu" aria-labelledby="dropdown-5" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="#">Action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
</div>
</div>
<div class="dropdown-danger dropdown open">
<button class="btn btn-danger dropdown-toggle waves-effect waves-light " type="button" id="dropdown-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Danger</button>
<div class="dropdown-menu" aria-labelledby="dropdown-6" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="#">Action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
</div>
</div>
<div class="dropdown-inverse dropdown open">
<button class="btn btn-inverse dropdown-toggle waves-effect waves-light " type="button" id="dropdown-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Inverse</button>
<div class="dropdown-menu" aria-labelledby="dropdown-7" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="#">Action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
</div>
</div>
<div class="dropdown-disabled dropdown open">
<button class="btn btn-disabled dropdown-toggle waves-effect waves-light disabled" type="button" id="dropdown-8" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Disabled</button>
<div class="dropdown-menu" aria-labelledby="dropdown-8" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<a class="dropdown-item waves-light waves-effect" href="#">Action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
<a class="dropdown-item waves-light waves-effect" href="#">Something else</a>
</div>
</div>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Buttons With Split Dropdown With Icon</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">
<div class="btn-group dropdown-split-primary">
<button type="button" class="btn btn-primary"><i class="icofont icofont-user-alt-3"></i>Primary</button>
<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle primary</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item waves-effect waves-light" href="#">Action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
</div>
</div>
<div class="btn-group dropdown-split-success">
<button type="button" class="btn btn-success"><i class="icofont icofont-check-circled"></i>Success</button>
<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle primary</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item waves-effect waves-light" href="#">Action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
</div>
</div>
<div class="btn-group dropdown-split-info">
<button type="button" class="btn btn-info"><i class="icofont icofont-info-square"></i>Info</button>
<button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle primary</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item waves-effect waves-light" href="#">Action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
</div>
</div>
<div class="btn-group dropdown-split-warning">
<button type="button" class="btn btn-warning"><i class="icofont icofont-warning-alt"></i>Warning</button>
<button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle primary</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item waves-effect waves-light" href="#">Action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
</div>
</div>
<div class="btn-group dropdown-split-danger">
<button type="button" class="btn btn-danger"><i class="icofont icofont-eye-alt"></i>Danger</button>
<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle primary</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item waves-effect waves-light" href="#">Action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
</div>
</div>
<div class="btn-group dropdown-split-inverse">
<button type="button" class="btn btn-inverse"><i class="icofont icofont-exchange"></i>Inverse</button>
<button type="button" class="btn btn-inverse dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle primary</span>
</button>
<div class="dropdown-menu">
<a class="dropdown-item waves-effect waves-light" href="#">Action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
</div>
</div>
<div class="btn-group dropdown-split-disabled">
<button type="button" class="btn btn-disabled disabled"><i class="icofont icofont-not-allowed"></i>Disabled</button>
<button type="button" class="btn btn-disabled disabled dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="sr-only">Toggle primary</span>
 </button>
<div class="dropdown-menu">
<a class="dropdown-item waves-effect waves-light" href="#">Action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
<a class="dropdown-item waves-effect waves-light" href="#">Something else</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item waves-effect waves-light" href="#">Separated link</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Icon Button</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block icon-btn">

<p>Use <code>&lt;i class="icofont icofont-star"&gt;</code> inside button to add icon.</p>
<div>
<button class="btn waves-effect waves-light btn-primary"><i class="icofont icofont-user-alt-3"></i></button>
<button class="btn waves-effect waves-light btn-success"><i class="icofont icofont-check-circled"></i></button>
<button class="btn waves-effect waves-light btn-info"><i class="icofont icofont-info-square"></i></button>
<button class="btn waves-effect waves-light btn-warning"><i class="icofont icofont-warning-alt"></i></button>
<button class="btn waves-effect waves-light btn-danger"><i class="icofont icofont-eye-alt"></i></button>
<button class="btn waves-effect waves-light btn-inverse"><i class="icofont icofont-exchange"></i></button>
<button class="btn waves-effect waves-light btn-disabled disabled"><i class="icofont icofont-not-allowed"></i></button>
</div>
<div>
<button class="btn waves-effect waves-light btn-primary btn-icon"><i class="icofont icofont-user-alt-3"></i></button>
<button class="btn waves-effect waves-light btn-success btn-icon"><i class="icofont icofont-check-circled"></i></button>
<button class="btn waves-effect waves-light btn-info btn-icon"><i class="icofont icofont-info-square"></i></button>
<button class="btn waves-effect waves-light btn-warning btn-icon"><i class="icofont icofont-warning-alt"></i></button>
<button class="btn waves-effect waves-light btn-danger btn-icon"><i class="icofont icofont-eye-alt"></i></button>
<button class="btn waves-effect waves-light btn-inverse btn-icon"><i class="icofont icofont-exchange"></i></button>
<button class="btn waves-effect waves-light btn-disabled btn-icon disabled"><i class="icofont icofont-not-allowed"></i></button>
</div>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Icon Border Buttons</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block icon-btn">

<p>Use Class <code>btn-outline-*</code> inside button to make Border Button.</p>
<div>
<button class="btn waves-effect waves-dark btn-primary btn-outline-primary"><i class="icofont icofont-user-alt-3"></i></button>
<button class="btn waves-effect waves-dark btn-success btn-outline-success"><i class="icofont icofont-check-circled"></i></button>
<button class="btn waves-effect waves-dark btn-info btn-outline-info"><i class="icofont icofont-info-square"></i></button>
<button class="btn waves-effect waves-dark btn-warning btn-outline-warning"><i class="icofont icofont-warning-alt"></i></button>
<button class="btn waves-effect waves-dark btn-danger btn-outline-danger"><i class="icofont icofont-eye-alt"></i></button>
<button class="btn waves-effect waves-dark btn-inverse btn-outline-inverse"><i class="icofont icofont-exchange"></i></button>
<button class="btn waves-effect waves-dark btn-disabled btn-outline-disabled disabled"><i class="icofont icofont-not-allowed"></i></button>
</div>
<div>
<button class="btn waves-effect waves-dark btn-primary btn-outline-primary btn-icon"><i class="icofont icofont-user-alt-3"></i></button>
<button class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i class="icofont icofont-check-circled"></i></button>
<button class="btn waves-effect waves-dark btn-info btn-outline-info btn-icon"><i class="icofont icofont-info-square"></i></button>
<button class="btn waves-effect waves-dark btn-warning btn-outline-warning btn-icon"><i class="icofont icofont-warning-alt"></i></button>
<button class="btn waves-effect waves-dark btn-danger btn-outline-danger btn-icon"><i class="icofont icofont-eye-alt"></i></button>
<button class="btn waves-effect waves-dark btn-inverse btn-outline-inverse btn-icon"><i class="icofont icofont-exchange"></i></button>
<button class="btn waves-effect waves-dark btn-disabled btn-outline-disabled btn-icon disabled"><i class="icofont icofont-not-allowed"></i></button>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Group Buttons</h5>
 </div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">

<p>Use <code>btn-xlg, btn-lg, btn-md, btn-sm, btn-mini</code> inside class to use different size button.</p>
<div>
<div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
<button type="button" class="btn btn-primary btn-xlg waves-effect waves-light">Left</button>
<button type="button" class="btn btn-primary btn-xlg waves-effect waves-light">Middle</button>
<button type="button" class="btn btn-primary btn-xlg waves-effect waves-light">Right</button>
</div>
<div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
<button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Left</button>
<button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Middle</button>
<button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Right</button>
</div>
<div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
<button type="button" class="btn btn-primary btn-md waves-effect waves-light">Left</button>
<button type="button" class="btn btn-primary btn-md waves-effect waves-light">Middle</button>
<button type="button" class="btn btn-primary btn-md waves-effect waves-light">Right</button>
</div>
<div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
<button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Left</button>
<button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Middle</button>
<button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Right</button>
</div>
<div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
<button type="button" class="btn btn-primary btn-mini waves-effect waves-light">Left</button>
<button type="button" class="btn btn-primary btn-mini waves-effect waves-light">Middle</button>
<button type="button" class="btn btn-primary btn-mini waves-effect waves-light">Right</button>
</div>
</div>
<div>
<div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
<button type="button" class="btn btn-primary btn-xlg waves-effect waves-light"><i class="icofont icofont-info-square"></i>Left</button>
<button type="button" class="btn btn-primary btn-xlg waves-effect waves-light"><i class="icofont icofont-info-square"></i>Middle</button>
<button type="button" class="btn btn-primary btn-xlg waves-effect waves-light"><i class="icofont icofont-info-square"></i>Right</button>
</div>
<div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
<button type="button" class="btn btn-primary btn-lg waves-effect waves-light"><i class="icofont icofont-info-square"></i>Left</button>
<button type="button" class="btn btn-primary btn-lg waves-effect waves-light"><i class="icofont icofont-info-square"></i>Middle</button>
<button type="button" class="btn btn-primary btn-lg waves-effect waves-light"><i class="icofont icofont-info-square"></i>Right</button>
</div>
<div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
<button type="button" class="btn btn-primary btn-md waves-effect waves-light"><i class="icofont icofont-info-square"></i>Left</button>
<button type="button" class="btn btn-primary btn-md waves-effect waves-light"><i class="icofont icofont-info-square"></i>Middle</button>
<button type="button" class="btn btn-primary btn-md waves-effect waves-light"><i class="icofont icofont-info-square"></i>Right</button>
</div>
<div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
<button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-info-square"></i>Left</button>
<button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-info-square"></i>Middle</button>
<button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-info-square"></i>Right</button>
</div>
<div class="btn-group " role="group" data-toggle="tooltip" data-placement="top" title="" data-original-title=".btn-xlg">
<button type="button" class="btn btn-primary btn-mini waves-effect waves-light"><i class="icofont icofont-info-square"></i>Left</button>
<button type="button" class="btn btn-primary btn-mini waves-effect waves-light"><i class="icofont icofont-info-square"></i>Middle</button>
<button type="button" class="btn btn-primary btn-mini waves-effect waves-light"><i class="icofont icofont-info-square"></i>Right</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Social Buttons</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">
<a href="#fakelink" class="btn waves-effect waves-light btn-facebook"><i class="icofont icofont-social-facebook"></i>Facebook</a>
<a href="#fakelink" class="btn waves-effect waves-light btn-twitter"><i class="icofont icofont-social-twitter"></i>Twitter</a>
<a href="#fakelink" class="btn waves-effect waves-light btn-linkedin"><i class="icofont icofont-brand-linkedin"></i>Linkedin</a>
<a href="#fakelink" class="btn waves-effect waves-light btn-dribbble"><i class="icofont icofont-social-dribble"></i>Dribble</a>
<a href="#fakelink" class="btn waves-effect waves-light btn-google-plus"><i class="icofont icofont-social-google-plus"></i>Google+</a>
<a href="#fakelink" class="btn waves-effect waves-light btn-instagram"><i class="icofont icofont-social-instagram"></i>Instagram</a>
<a href="#fakelink" class="btn waves-effect waves-light btn-pinterest"><i class="icofont icofont-social-pinterest"></i>Pinterest</a>
<a href="#fakelink" class="btn waves-effect waves-light btn-dropbox"><i class="icofont icofont-social-dropbox"></i>Dropbox</a>
<a href="#fakelink" class="btn waves-effect waves-light btn-tumblr"><i class="icofont icofont-social-tumblr"></i>Tumbler</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Social Buttons Without Label</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block remove-label">
<a href="#fakelink" class="btn waves-effect waves-light btn-facebook"><i class="icofont icofont-social-facebook"></i></a>
<a href="#fakelink" class="btn waves-effect waves-light btn-twitter"><i class="icofont icofont-social-twitter"></i></a>
<a href="#fakelink" class="btn waves-effect waves-light btn-linkedin"><i class="icofont icofont-brand-linkedin"></i></a>
<a href="#fakelink" class="btn waves-effect waves-light btn-dribbble"><i class="icofont icofont-social-dribble"></i></a>
<a href="#fakelink" class="btn waves-effect waves-light btn-google-plus"><i class="icofont icofont-social-google-plus"></i></a>
<a href="#fakelink" class="btn waves-effect waves-light btn-instagram"><i class="icofont icofont-social-instagram"></i></a>
<a href="#fakelink" class="btn waves-effect waves-light btn-pinterest"><i class="icofont icofont-social-pinterest"></i></a>
<a href="#fakelink" class="btn waves-effect waves-light btn-dropbox"><i class="icofont icofont-social-dropbox"></i></a>
<a href="#fakelink" class="btn waves-effect waves-light btn-tumblr"><i class="icofont icofont-social-tumblr"></i></a>
</div>
</div>
</div>
<div class="col-sm-6">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Link Buttons</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block remove-label">
<a href="#fakelink" class="btn btn-primary">Link</a>
<button type="button" class="btn btn-primary waves-effect waves-light">Button</button>
<input type="button" class="btn btn-primary waves-effect waves-light" value="Input">
<input type="submit" class="btn btn-primary waves-effect waves-light" value="Submit">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<div class="card-header-left">
<h5>Block Buttons</h5>
</div>
<div class="card-header-right"> <ul class="list-unstyled card-option"> <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li> <li><i class="feather icon-maximize full-card"></i></li> <li><i class="feather icon-minus minimize-card"></i></li> <li><i class="feather icon-refresh-cw reload-card"></i></li> <li><i class="feather icon-trash close-card"></i></li> <li><i class="feather icon-chevron-left open-card-option"></i></li> </ul> </div>
</div>
<div class="card-block">
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="form-group">
<button class="btn waves-effect waves-light btn-primary btn-block">Default Button</button>
<button class="btn waves-effect waves-light btn-primary btn-outline-primary btn-block"><i class="icofont icofont-user-alt-3"></i>Border Button</button>
</div>
</div>
<div class="col-lg-6 col-md-12">
 
<div class="form-group">
<button class="btn waves-effect waves-light btn-success btn-square btn-block">Square Button</button>
<button class="btn waves-effect waves-light btn-info btn-round btn-block">Rounded Button</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="<?=base_url('resources/admin/')?>/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="<?=base_url('resources/admin/')?>/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="<?=base_url('resources/admin/')?>/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="<?=base_url('resources/admin/')?>/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="<?=base_url('resources/admin/')?>/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="<?=base_url('resources/admin/')?>/assets/pages/waves/js/waves.min.js"></script>

<script src="<?=base_url('resources/admin/')?>/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?=base_url('resources/admin/')?>/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="<?=base_url('resources/admin/')?>/assets/js/pcoded.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/js/vertical/vertical-layout.min.js"></script>
<script src="<?=base_url('resources/admin/')?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover({
            html: true,
            content: function() {
                return $('#primary-popover-content').html();
            }
        });
    });
</script>
<script type="text/javascript" src="<?=base_url('resources/admin/')?>/assets/js/script.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/button.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Feb 2023 13:36:08 GMT -->
</html>
