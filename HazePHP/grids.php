<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 10]> <html lang="en" class="ie10"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Conquer | Grids & Portlets</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/style_responsive.css" rel="stylesheet" />
	<link href="assets/css/style_default.css" rel="stylesheet" id="style_color" />
	<link href="#" rel="stylesheet" id="style_metro" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.html">
				<img src="assets/img/logo.png" alt="Conquer"/>
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="arrow"></span>
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->				
				<div class="top-nav">
					<!-- BEGIN QUICK SEARCH FORM -->
					<form class="navbar-search hidden-phone">
						<div class="search-input-icon">
							<input type="text" class="search-query dropdown-toggle" id="quick_search" placeholder="Search" data-toggle="dropdown" />
							<i class="icon-search"></i>
							<!-- BEGIN QUICK SEARCH RESULT PREVIEW -->
							<ul class="dropdown-menu extended">								
								<li>
									<span class="arrow"></span>
									<p>Found 23 results</p>
								</li>
								<li>
									<a href="#">
									<span class="label label-success"><i class="icon-user"></i></span>
									Nick Kim, Technical Mana...<i class="icon icon-arrow-right"></i>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-info"><i class="icon-money"></i></span>
									Anual Report,Dec 20...<i class="icon icon-arrow-right"></i>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-warning"><i class="icon-comment"></i></span>
									Re: Nick Dalton, Sep 11:...<i class="icon icon-arrow-right"></i>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-important"><i class="icon-bullhorn"></i></span>
									Office Setup, Mar 12...<i class="icon icon-arrow-right"></i>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-info"><i class="icon-envelope"></i></span>
									Re: Order Status, Jan 12...<i class="icon icon-arrow-right"></i>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-info"><i class="icon-paper-clip"></i></span>
									project_2011.docx, Feb 12...<i class="icon icon-arrow-right"></i>
									</a>
								</li>
								<li>
									<a href="#">
									See all results...
									</a>
								</li>
							</ul>
							<!-- END QUICK SEARCH RESULT PREVIEW -->
						</div>
					</form>
					<!-- END QUICK SEARCH FORM -->
					<!-- BEGIN TOP NAVIGATION MENU -->					
					<ul class="nav pull-right" id="top_menu">
						<!-- BEGIN NOTIFICATION DROPDOWN -->	
						<li class="dropdown" id="header_notification_bar">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-warning-sign"></i>
							<span class="label label-important">15</span>
							</a>
							<ul class="dropdown-menu extended notification">
								<li>
									<p>You have 14 new notifications</p>
								</li>
								<li>
									<a href="#">
									<span class="label label-success"><i class="icon-plus"></i></span>
									New user registered. 
									<span class="small italic">Just now</span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-important"><i class="icon-bolt"></i></span>
									Server #12 overloaded. 
									<span class="small italic">15 mins</span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-warning"><i class="icon-bell"></i></span>
									Server #2 not respoding.
									<span class="small italic">22 mins</span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-info"><i class="icon-bullhorn"></i></span>
									Application error.
									<span class="small italic">40 mins</span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-important"><i class="icon-bolt"></i></span>
									Database overloaded 68%. 
									<span class="small italic">2 hrs</span>
									</a>
								</li>
								<li>
									<a href="#">
									<span class="label label-important"><i class="icon-bolt"></i></span>
									2 user IP addresses blacklisted.
									<span class="small italic">5 hrs</span>
									</a>
								</li>
								<li>
									<a href="#">See all notifications</a>
								</li>
							</ul>
						</li>
						<!-- END NOTIFICATION DROPDOWN -->
						<!-- BEGIN INBOX DROPDOWN -->
						<li class="dropdown" id="header_inbox_bar">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-envelope-alt"></i>
							<span class="label label-success">5</span>
							</a>
							<ul class="dropdown-menu extended inbox">
								<li>
									<p>You have 12 new messages</p>
								</li>
								<li>
									<a href="#">
									<span class="photo"><img src="./assets/img/avatar-mini.png" alt="avatar"/></span>
									<span class="subject">
									<span class="from">Lisa Wong</span>
									<span class="time">Just Now</span>
									</span>
									<span class="message">
									Vivamus sed auctor nibh congue nibh.
									</span>  
									</a>
								</li>
								<li>
									<a href="#">
									<span class="photo"><img src="./assets/img/avatar-mini.png" alt="avatar"/></span>
									<span class="subject">
									<span class="from">Alina Fionovna</span>
									<span class="time">16 mins</span>
									</span>
									<span class="message">
									Vivamus sed auctor nibh congue.
									</span>  
									</a>
								</li>
								<li>
									<a href="#">
									<span class="photo"><img src="./assets/img/avatar-mini.png" alt="avatar"/></span>
									<span class="subject">
									<span class="from">Mila Rock</span>
									<span class="time">2 hrs</span>
									</span>
									<span class="message">
									Vivamus sed auctor nibh congue.
									</span>  
									</a>
								</li>
								<li>
									<a href="#">See all messages</a>
								</li>
							</ul>
						</li>
						<!-- END INBOX DROPDOWN -->
						<li class="divider-vertical hidden-phone hidden-tablet"></li>
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-wrench"></i>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-cogs"></i> System Settings</a></li>
								<li><a href="#"><i class="icon-pushpin"></i> Shortcuts</a></li>
								<li><a href="#"><i class="icon-trash"></i> Trash</a></li>								
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
						<li class="divider-vertical hidden-phone hidden-tablet"></li>
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-user"></i>
							<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-user"></i> Mark King</a></li>
								<li><a href="#"><i class="icon-envelope-alt"></i> Inbox</a></li>
								<li><a href="#"><i class="icon-tasks"></i> Tasks</a></li>
								<li><a href="#"><i class="icon-ok"></i> Calendar</a></li>
								<li class="divider"></li>
								<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
					</ul>
					<!-- END TOP NAVIGATION MENU -->	
				</div>
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->	
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul>
				<li>
					<a href="index.html">
					<i class="icon-home"></i> Dashboard
					</a>					
				</li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					<i class="icon-bookmark-empty"></i> UI Elements
					<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="ui_elements_general.html">General</a></li>
						<li><a class="" href="ui_elements_buttons.html">Buttons</a></li>
						<li><a class="" href="ui_elements_tabs_accordions.html">Tabs & Accordions</a></li>
						<li><a class="" href="ui_elements_typography.html">Typography</a></li>
					</ul>
				</li>
				<li><a class="" href="forms.html"><i class="icon-table"></i> Form Stuff</a></li>
				<li><a class="" href="tables.html"><i class="icon-table"></i> Data Tables</a></li>
				<li class="active"><a class="" href="grids.html"><i class="icon-th"></i> Grids & Portlets</a></li>
				<li><a class="" href="charts.html"><i class="icon-bar-chart"></i> Visual Charts</a></li>
				<li class="has-sub">
					<a href="javascript:;" class="">
					<i class="icon-map-marker"></i> Maps
					<span class="arrow"></span>
					</a>
					<ul class="sub">
						<li><a class="" href="maps_google.html"> Google Maps</a></li>
						<li><a class="" href="maps_vector.html"> Vector Maps</a></li>
					</ul>
				</li>
				<li><a class="" href="calendar.html"><i class="icon-ok"></i> Calendar</a></li>
				<li><a class="" href="gallery.html"><i class="icon-camera"></i> Gallery</a></li>
				<li><a class="" href="login.html"><i class="icon-user"></i> Login Page</a></li>
			</ul>
			<!-- END SIDEBAR MENU -->		
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div id="body">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="widget-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button">×</button>
					<h3>Widget Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER-->
						<div id="styler" class="hidden-phone">
							<i class="icon-cog"></i>
							<span class="settings">
								<span class="text">Style:</span>
								<span class="colors">
									<span class="color-default" data-style="default">
									</span>
									<span class="color-grey" data-style="grey">
									</span>
									<span class="color-navygrey" data-style="navygrey">
									</span>											
									<span class="color-red" data-style="red">
									</span>	
								</span>
								<span class="layout">
									<label class="hidden-phone">
									<input type="checkbox" class="header" checked value="" />Sticky Header
									</label><br />
									<label><input type="checkbox" class="metro" value="" />Metro Style</label>
									<span class="space5"></span>
									<a class="btn fancybox-button" data-rel="fancybox-button" title="Conquer Large Desktop Preview"  href="assets/img/demo/desktop.png"><i class="icon-eye-open"></i> Screenshots</a>
									<a class="fancybox-button" data-rel="fancybox-button" title="Conquer Notebook Preview" href="assets/img/demo/notebook.png"></a>
									<a class="fancybox-button" data-rel="fancybox-button" title="Conquer Tablet Preview"  href="assets/img/demo/tablet.png"></a>
									<a class="fancybox-button" data-rel="fancybox-button" title="Conquer Phone Preview"  href="assets/img/demo/phone.png"></a>
								</span>
							</span>
						</div>
						<!-- END STYLE CUSTOMIZER-->   						
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->	
						<h3 class="page-title">
							Grids & Portlets
							<small>scrollable contents, grids and portlets</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> <span class="divider">/</span>
							</li>
							<li><a href="#">Grids & Portlets</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page">
					<div class="row-fluid">
						<div class="span4 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>	
									</span>							
								</div>
								<div class="widget-body">
									<div class="scroller" data-height="200px">
										<strong>Scroll is hidden</strong><br>
										Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
										consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
									</div>
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
						<div class="span4 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>	
									</span>							
								</div>
								<div class="widget-body">
									<div class="scroller" data-height="200px" data-always-visible="1">
										<strong>Scroll is always visible</strong><br>
										Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
									</div>
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
						<div class="span4 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									</span>							
								</div>
								<div class="widget-body">
									<div class="scroller" data-height="200px" data-always-visible="1" data-rail-visible="1">
										<strong>Scroll and rail are always visible</strong><br>
										Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
									</div>
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
					</div>
					<div class="row-fluid">
						<div class="span6 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>	
									</span>							
								</div>
								<div class="widget-body">
									Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
								</div>
							</div>
							<!-- END GRID PORTLET-->
						</div>
						<div class="span6 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>	
									</span>							
								</div>
								<div class="widget-body">
									Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>		
									<a href="javascript:;" class="icon-remove"></a>
									</span>							
								</div>
								<div class="widget-body">
									Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									</span>							
								</div>
								<div class="widget-body">
									Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
						<div class="span3 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>	
									</span>							
								</div>
								<div class="widget-body">
									Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
						<div class="span3 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									</span>							
								</div>
								<div class="widget-body">
									Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
						<div class="span3 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>	
									</span>							
								</div>
								<div class="widget-body">
									Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
					</div>
					<div class="row-fluid">
						<div class="span4 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>	
									</span>							
								</div>
								<div class="widget-body">
									Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
								</div>
							</div>
						</div>
						<div class="span8 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>	
									</span>							
								</div>
								<div class="widget-body">
									Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
					</div>
					<div class="row-fluid">
						<div class="span7 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>	
									</span>							
								</div>
								<div class="widget-body">
									Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->
						</div>
						<div class="span5 sortable">
							<!-- BEGIN GRID SAMPLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-reorder"></i>Grid Sample</h4>
									<span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>		
									</span>							
								</div>
								<div class="widget-body">
									Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
								</div>
							</div>
							<!-- END GRID SAMPLE PORTLET-->	
						</div>
					</div>
					<!--END:BODY-->
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->	
		</div>
		<!-- END PAGE -->
	</div>
	<!-- BEGIN FOOTER -->
	<div id="footer">
		2012 &copy; Conquer. Admin Dashboard Template.
		<div class="span pull-right">
			<span class="go-top"><i class="icon-arrow-up"></i></span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
	<script src="assets/js/jquery-1.8.2.min.js"></script>
	<script src="assets/jQuery-slimScroll/jquery-ui-1.9.2.custom.min.js"></script>	
	<script type="text/javascript" src="assets/jQuery-slimScroll/slimScroll.min.js"></script>		
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.blockui.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="assets/js/excanvas.js"></script>
	<script src="assets/js/respond.js"></script>
	<![endif]-->
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
	<script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
	<script src="assets/js/app.js"></script>		
	<script>
		jQuery(document).ready(function() {			
			// initiate layout and plugins
			App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>