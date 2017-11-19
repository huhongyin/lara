<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>Xenon - Horizontal Menu</title>

	
	<link rel="stylesheet" href="/assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="/assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/xenon-core.css">
	<link rel="stylesheet" href="/assets/css/xenon-forms.css">
	<link rel="stylesheet" href="/assets/css/xenon-components.css">
	<link rel="stylesheet" href="/assets/css/xenon-skins.css">
	<link rel="stylesheet" href="/assets/css/custom.css">

	<script src="/assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body">

	<div class="settings-pane">
			
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		
		<div class="settings-pane-inner">
			
			<div class="row">
				
				<div class="col-md-4">
					
					<div class="user-info">
						
						<div class="user-image">
							<a href="extra-profile.html">
								<img src="/assets/images/user-2.png" class="img-responsive img-circle" />
							</a>
						</div>
						
						<div class="user-details">
							
							<h3>
								<a href="extra-profile.html">John Smith</a>
								
								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>
							
							<p class="user-title">Web Developer</p>
							
							<div class="user-links">
								<a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
								<a href="extra-profile.html" class="btn btn-success">Upgrade</a>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-md-8 link-blocks-env">
					
					<div class="links-block left-sep">
						<h4>
							<span>Notifications</span>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
								<label for="sp-chk1">Messages</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
								<label for="sp-chk2">Events</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
								<label for="sp-chk3">Updates</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
								<label for="sp-chk4">Server Uptime</label>
							</li>
						</ul>
					</div>
					
					<div class="links-block left-sep">
						<h4>
							<a href="#">
								<span>Help Desk</span>
							</a>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Support Center
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Submit a Ticket
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Domains Protocol
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Terms of Service
								</a>
							</li>
						</ul>
					</div>
					
				</div>
				
			</div>
		
		</div>
		
	</div>
	
	<nav class="navbar horizontal-menu navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->
		
		<div class="navbar-inner">
		
			<!-- Navbar Brand -->
			<div class="navbar-brand">
				<a href="dashboard-1.html" class="logo">
					<img src="/assets/images/logo-white-bg@2x.png" width="80" alt="" class="hidden-xs" />
					<img src="/assets/images/logo@2x.png" width="80" alt="" class="visible-xs" />
				</a>
				<a href="#" data-toggle="settings-pane" data-animate="true">
					<i class="linecons-cog"></i>
				</a>
			</div>
				
			<!-- Mobile Toggles Links -->
			<div class="nav navbar-mobile">
			
				<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
				<div class="mobile-menu-toggle">
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<a href="#" data-toggle="settings-pane" data-animate="true">
						<i class="linecons-cog"></i>
					</a>
					
					<a href="#" data-toggle="user-info-menu-horizontal">
						<i class="fa-bell-o"></i>
						<span class="badge badge-success">7</span>
					</a>
					
					<!-- data-toggle="mobile-menu-horizontal" will show horizontal menu links only -->
					<!-- data-toggle="mobile-menu" will show sidebar menu links only -->
					<!-- data-toggle="mobile-menu-both" will show sidebar and horizontal menu links -->
					<a href="#" data-toggle="mobile-menu-horizontal">
						<i class="fa-bars"></i>
					</a>
				</div>
				
			</div>
			
			<div class="navbar-mobile-clear"></div>
			
			
			
			<!-- main menu -->
					
			<ul class="navbar-nav">
				<li>
					<a href="dashboard-1.html">
						<i class="linecons-cog"></i>
						<span class="title">Dashboard</span>
					</a>
					<ul>
						<li>
							<a href="dashboard-1.html">
								<span class="title">Dashboard 1</span>
							</a>
						</li>
						<li>
							<a href="dashboard-2.html">
								<span class="title">Dashboard 2</span>
							</a>
						</li>
						<li>
							<a href="dashboard-3.html">
								<span class="title">Dashboard 3</span>
							</a>
						</li>
						<li>
							<a href="dashboard-4.html">
								<span class="title">Dashboard 4</span>
							</a>
						</li>
						<li>
							<a href="skin-generator.html">
								<span class="title">Skin Generator</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="opened active">
					<a href="layout-variants.html">
						<i class="linecons-desktop"></i>
						<span class="title">Layouts</span>
					</a>
					<ul>
						<li>
							<a href="layout-variants.html">
								<span class="title">Layout Variants &amp; API</span>
							</a>
						</li>
						<li>
							<a href="layout-collapsed-sidebar.html">
								<span class="title">Collapsed Sidebar</span>
							</a>
						</li>
						<li>
							<a href="layout-static-sidebar.html">
								<span class="title">Static Sidebar</span>
							</a>
						</li>
						<li class="active">
							<a href="layout-horizontal-menu.html">
								<span class="title">Horizontal Menu</span>
							</a>
						</li>
						<li>
							<a href="layout-horizontal-plus-sidebar.html">
								<span class="title">Horizontal &amp; Sidebar Menu</span>
							</a>
						</li>
						<li>
							<a href="layout-horizontal-menu-click-to-open-subs.html">
								<span class="title">Horizontal Open On Click</span>
							</a>
						</li>
						<li>
							<a href="layout-horizontal-menu-min.html">
								<span class="title">Horizontal Menu Minimal</span>
							</a>
						</li>
						<li>
							<a href="layout-right-sidebar.html">
								<span class="title">Right Sidebar</span>
							</a>
						</li>
						<li>
							<a href="layout-chat-open.html">
								<span class="title">Chat Open</span>
							</a>
						</li>
						<li>
							<a href="layout-horizontal-sidebar-menu-collapsed-right.html">
								<span class="title">Both Menus &amp; Collapsed</span>
							</a>
						</li>
						<li>
							<a href="layout-boxed.html">
								<span class="title">Boxed Layout</span>
							</a>
						</li>
						<li>
							<a href="layout-boxed-horizontal-menu.html">
								<span class="title">Boxed &amp; Horizontal Menu</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="ui-panels.html">
						<i class="linecons-note"></i>
						<span class="title">UI Elements</span>
					</a>
					<ul>
						<li>
							<a href="ui-panels.html">
								<span class="title">Panels</span>
							</a>
						</li>
						<li>
							<a href="ui-buttons.html">
								<span class="title">Buttons</span>
							</a>
						</li>
						<li>
							<a href="ui-tabs-accordions.html">
								<span class="title">Tabs &amp; Accordions</span>
							</a>
						</li>
						<li>
							<a href="ui-modals.html">
								<span class="title">Modals</span>
							</a>
						</li>
						<li>
							<a href="ui-breadcrumbs.html">
								<span class="title">Breadcrumbs</span>
							</a>
						</li>
						<li>
							<a href="ui-blockquotes.html">
								<span class="title">Blockquotes</span>
							</a>
						</li>
						<li>
							<a href="ui-progressbars.html">
								<span class="title">Progress Bars</span>
							</a>
						</li>
						<li>
							<a href="ui-navbars.html">
								<span class="title">Navbars</span>
							</a>
						</li>
						<li>
							<a href="ui-alerts.html">
								<span class="title">Alerts</span>
							</a>
						</li>
						<li>
							<a href="ui-pagination.html">
								<span class="title">Pagination</span>
							</a>
						</li>
						<li>
							<a href="ui-typography.html">
								<span class="title">Typography</span>
							</a>
						</li>
						<li>
							<a href="ui-other-elements.html">
								<span class="title">Other Elements</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="forms-native.html">
						<i class="linecons-params"></i>
						<span class="title">Forms</span>
					</a>
					<ul>
						<li>
							<a href="forms-native.html">
								<span class="title">Native Elements</span>
							</a>
						</li>
						<li>
							<a href="forms-advanced.html">
								<span class="title">Advanced Plugins</span>
							</a>
						</li>
						<li>
							<a href="forms-wizard.html">
								<span class="title">Form Wizard</span>
							</a>
						</li>
						<li>
							<a href="forms-validation.html">
								<span class="title">Form Validation</span>
							</a>
						</li>
						<li>
							<a href="forms-input-masks.html">
								<span class="title">Input Masks</span>
							</a>
						</li>
						<li>
							<a href="forms-file-upload.html">
								<span class="title">File Upload</span>
							</a>
						</li>
						<li>
							<a href="forms-editors.html">
								<span class="title">Editors</span>
							</a>
						</li>
						<li>
							<a href="forms-sliders.html">
								<span class="title">Sliders</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="">
						<i class="linecons-diamond"></i>
						<span class="title">Other</span>
					</a>
					<ul>
						<li>
							<a href="ui-widgets.html">
								<i class="linecons-star"></i>
								<span class="title">Widgets</span>
							</a>
						</li>
						<li>
							<a href="mailbox-main.html">
								<i class="linecons-mail"></i>
								<span class="title">Mailbox</span>
								<span class="label label-success pull-right">5</span>
							</a>
							<ul>
								<li>
									<a href="mailbox-main.html">
										<span class="title">Inbox</span>
									</a>
								</li>
								<li>
									<a href="mailbox-compose.html">
										<span class="title">Compose Message</span>
									</a>
								</li>
								<li>
									<a href="mailbox-message.html">
										<span class="title">View Message</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="tables-basic.html">
								<i class="linecons-database"></i>
								<span class="title">Tables</span>
							</a>
							<ul>
								<li>
									<a href="tables-basic.html">
										<span class="title">Basic Tables</span>
									</a>
								</li>
								<li>
									<a href="tables-responsive.html">
										<span class="title">Responsive Table</span>
									</a>
								</li>
								<li>
									<a href="tables-datatables.html">
										<span class="title">Data Tables</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="extra-gallery.html">
								<i class="linecons-beaker"></i>
								<span class="title">Extra</span>
								<span class="label label-purple pull-right hidden-collapsed">New Items</span>
							</a>
							<ul>
								<li>
									<a href="extra-icons-fontawesome.html">
										<span class="title">Icons</span>
										<span class="label label-warning pull-right">4</span>
									</a>
									<ul>
										<li>
											<a href="extra-icons-fontawesome.html">
												<span class="title">Font Awesome</span>
											</a>
										</li>
										<li>
											<a href="extra-icons-linecons.html">
												<span class="title">Linecons</span>
											</a>
										</li>
										<li>
											<a href="extra-icons-elusive.html">
												<span class="title">Elusive</span>
											</a>
										</li>
										<li>
											<a href="extra-icons-meteocons.html">
												<span class="title">Meteocons</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="extra-maps-google.html">
										<span class="title">Maps</span>
									</a>
									<ul>
										<li>
											<a href="extra-maps-google.html">
												<span class="title">Google Maps</span>
											</a>
										</li>
										<li>
											<a href="extra-maps-advanced.html">
												<span class="title">Advanced Map</span>
											</a>
										</li>
										<li>
											<a href="extra-maps-vector.html">
												<span class="title">Vector Map</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="extra-gallery.html">
										<span class="title">Gallery</span>
									</a>
								</li>
								<li>
									<a href="extra-calendar.html">
										<span class="title">Calendar</span>
									</a>
								</li>
								<li>
									<a href="extra-profile.html">
										<span class="title">Profile</span>
									</a>
								</li>
								<li>
									<a href="extra-login.html">
										<span class="title">Login</span>
									</a>
								</li>
								<li>
									<a href="extra-lockscreen.html">
										<span class="title">Lockscreen</span>
									</a>
								</li>
								<li>
									<a href="extra-login-light.html">
										<span class="title">Login Light</span>
									</a>
								</li>
								<li>
									<a href="extra-timeline.html">
										<span class="title">Timeline</span>
									</a>
								</li>
								<li>
									<a href="extra-timeline-center.html">
										<span class="title">Timeline Centerd</span>
									</a>
								</li>
								<li>
									<a href="extra-notes.html">
										<span class="title">Notes</span>
									</a>
								</li>
								<li>
									<a href="extra-image-crop.html">
										<span class="title">Image Crop</span>
									</a>
								</li>
								<li>
									<a href="extra-portlets.html">
										<span class="title">Portlets</span>
									</a>
								</li>
								<li>
									<a href="blank-sidebar.html">
										<span class="title">Blank Page</span>
									</a>
								</li>
								<li>
									<a href="extra-search.html">
										<span class="title">Search</span>
									</a>
								</li>
								<li>
									<a href="extra-invoice.html">
										<span class="title">Invoice</span>
									</a>
								</li>
								<li>
									<a href="extra-not-found.html">
										<span class="title">404 Page</span>
									</a>
								</li>
								<li>
									<a href="extra-tocify.html">
										<span class="title">Tocify</span>
									</a>
								</li>
								<li>
									<a href="extra-loader.html">
										<span class="title">Loading Progress</span>
									</a>
								</li>
								<li>
									<a href="extra-page-loading-ol.html">
										<span class="title">Page Loading Overlay</span>
									</a>
								</li>
								<li>
									<a href="extra-notifications.html">
										<span class="title">Notifications</span>
									</a>
								</li>
								<li>
									<a href="extra-nestable-lists.html">
										<span class="title">Nestable Lists</span>
									</a>
								</li>
								<li>
									<a href="extra-scrollable.html">
										<span class="title">Scrollable</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="charts-main.html">
								<i class="linecons-globe"></i>
								<span class="title">Charts</span>
							</a>
							<ul>
								<li>
									<a href="charts-main.html">
										<span class="title">Chart Variants</span>
									</a>
								</li>
								<li>
									<a href="charts-range.html">
										<span class="title">Range Selector</span>
									</a>
								</li>
								<li>
									<a href="charts-sparklines.html">
										<span class="title">Sparklines</span>
									</a>
								</li>
								<li>
									<a href="charts-map.html">
										<span class="title">Map Charts</span>
									</a>
								</li>
								<li>
									<a href="charts-gauges.html">
										<span class="title">Circular Gauges</span>
									</a>
								</li>
								<li>
									<a href="charts-bar-gauges.html">
										<span class="title">Bar Gauges</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="linecons-cloud"></i>
								<span class="title">Menu Levels</span>
							</a>
							<ul>
								<li>
									<a href="#">
										<i class="entypo-flow-line"></i>
										<span class="title">Menu Level 1.1</span>
									</a>
									<ul>
										<li>
											<a href="#">
												<i class="entypo-flow-parallel"></i>
												<span class="title">Menu Level 2.1</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="entypo-flow-parallel"></i>
												<span class="title">Menu Level 2.2</span>
											</a>
											<ul>
												<li>
													<a href="#">
														<i class="entypo-flow-cascade"></i>
														<span class="title">Menu Level 3.1</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="entypo-flow-cascade"></i>
														<span class="title">Menu Level 3.2</span>
													</a>
													<ul>
														<li>
															<a href="#">
																<i class="entypo-flow-branch"></i>
																<span class="title">Menu Level 4.1</span>
															</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">
												<i class="entypo-flow-parallel"></i>
												<span class="title">Menu Level 2.3</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">
										<i class="entypo-flow-line"></i>
										<span class="title">Menu Level 1.2</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="entypo-flow-line"></i>
										<span class="title">Menu Level 1.3</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
					
			
			<!-- notifications and other links -->
			<ul class="nav nav-userinfo navbar-right">
				
			
				
	
		
				<li class="dropdown user-profile">
					<a href="#" data-toggle="dropdown">
						<img src="/assets/images/user-1.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
						<span>
							Arlind Nushi
							<i class="fa-angle-down"></i>
						</span>
					</a>
					
					<ul class="dropdown-menu user-profile-menu list-unstyled">
						<li>
							<a href="#edit-profile">
								<i class="fa-edit"></i>
								New Post
							</a>
						</li>
						<li>
							<a href="#settings">
								<i class="fa-wrench"></i>
								Settings
							</a>
						</li>
						<li>
							<a href="#profile">
								<i class="fa-user"></i>
								Profile
							</a>
						</li>
						<li>
							<a href="#help">
								<i class="fa-info"></i>
								Help
							</a>
						</li>
						<li class="last">
							<a href="extra-lockscreen.html">
								<i class="fa-lock"></i>
								Logout
							</a>
						</li>
					</ul>
				</li>
				
				
			</ul>
	
		</div>
		
	</nav>
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<div class="main-content">
					
			<script>
			jQuery(document).ready(function($)
			{
				$('a[href="#layout-variants"]').on('click', function(ev)
				{
					ev.preventDefault();
					
					var win = {top: $(window).scrollTop(), toTop: $("#layout-variants").offset().top - 15};
					
					TweenLite.to(win, .3, {top: win.toTop, roundProps: ["top"], ease: Sine.easeInOut, onUpdate: function()
						{
							$(window).scrollTop(win.top);
						}
					});
				});
			});
			</script>
			
			<div class="jumbotron">
				<h1>Layout API</h1>
				
				<p>
					Xenon Theme layout can be combined in many variants with sidebar and horizontal menu and offers a set of toggles (links) to manipulate with the theme layout. These features are enabled if you import <code>js/xenon-toggles.js</code> script in the document.
				</p>
				
				<br />
				<a class="btn btn-primary btn-lg" href="#layout-variants" role="button">See Layout Variants</a>
			</div>
			
			<h3 id="layout-toggles">
				Layout Toggles
				<br />
				<small>Links that will automatically collapse or expand side panels, chat or user settings pane.</small>
			</h3>
			<br />
			
			
			<div class="row">
				
				<div class="col-xs-3 text-muted">Link</div>
				<div class="col-xs-9 text-muted">Code</div>
				
				<div class="vspacer v3"></div>
			
				<div class="col-sm-3">
					<a href="#" class="btn btn-secondary btn-block btn-icon btn-icon-standalone text-left" data-toggle="sidebar">
						<i class="fa-bars"></i>
						<span>Toggle Sidebar</span>
					</a>
				</div>
				<div class="col-sm-9">
					<pre>&lt;a href=&quot;#&quot; data-toggle=&quot;sidebar&quot;&gt;Toggle Sidebar&lt;/a&gt;</pre>
				</div>
				
				<div class="clearfix"></div>
				<div class="vspacer v4"></div>
			
				<div class="col-sm-3">
					<a href="#" class="btn btn-secondary btn-block btn-icon btn-icon-standalone text-left" data-toggle="chat">
						<i class="fa-comment-o"></i>
						<span>Toggle Chat</span>
					</a>
				</div>
				<div class="col-sm-9">
					<pre>&lt;a href=&quot;#&quot; data-toggle=&quot;chat&quot;&gt;Toggle Chat&lt;/a&gt;</pre>
				</div>
				
				<div class="clearfix"></div>
				<div class="vspacer v4"></div>
			
				<div class="col-sm-3">
					<a href="#" class="btn btn-secondary btn-block btn-icon btn-icon-standalone text-left" data-toggle="settings-pane">
						<i class="linecons-user"></i>
						<span>Toggle Settings Pane</span>
					</a>
				</div>
				<div class="col-sm-9">
					<pre>&lt;a href=&quot;#&quot; data-toggle=&quot;chat&quot;&gt;Toggle Settings Pane&lt;/a&gt;</pre>
				</div>
			
				
				<div class="clearfix"></div>
				<div class="vspacer v4"></div>
			
				<div class="col-sm-3">
					<a href="#" class="btn btn-secondary btn-block btn-icon btn-icon-standalone text-left" data-toggle="settings-pane" data-animate="true">
						<i class="linecons-cog"></i>
						<span>Settings Pane /w Animation</span>
					</a>
				</div>
				<div class="col-sm-9">
					<pre>&lt;a href=&quot;#&quot; data-toggle=&quot;chat&quot; data-animate=&quot;true&quot;&gt;Toggle Settings Pane&lt;/a&gt;</pre>
				</div>
			
				
				<div class="clearfix"></div>
				<div class="vspacer v4"></div>
			
				<div class="col-sm-3">
					<a href="#" class="btn btn-secondary btn-block btn-icon btn-icon-standalone text-left" rel="go-top">
						<i class="fa-arrow-up"></i>
						<span>Go to Top</span>
					</a>
				</div>
				<div class="col-sm-9">
					<pre>&lt;a href=&quot;#&quot; rel=&quot;go-top&quot;&gt;Go to Top&lt;/a&gt;</pre>
				</div>
			
			</div>
			
			
			<br />
			<br />
			
			<h3 id="layout-variants">
				Layout Variants
				<br />
				<small>9 different layout types with fixed or static scrolling panels</small>
			</h3>
			
			<div class="panel panel-default panel-headerless">
				
				<div class="panel-body layout-variants">
				
					<div class="row">
						<div class="col-sm-4">
							
							<div class="layout-variant">
								<div class="layout-img">
									<a href="layout-variants.html">
										<img src="/assets/images/layouts/layout-sidebar.png" />
									</a>
								</div>
								<div class="layout-name">
									<a href="layout-variants.html">Left Sidebar</a>
								</div>
								<ul class="layout-links">
									<li>
										<a href="layout-variants.html" class="">Fixed Sidebar</a>
									</li>
									<li>
										<a href="layout-static-sidebar.html" class="">Static Sidebar</a>
									</li>
									<li>
										<a href="layout-without-submenu-toggle.html" class="">Other Submenus Toggle Off</a>
									</li>
								</ul>
							</div>
							
						</div>
						<div class="col-sm-4">
							
							<div class="layout-variant">
								<div class="layout-img">
									<a href="layout-right-sidebar.html">
										<img src="/assets/images/layouts/layout-sidebar-right.png" />
									</a>
								</div>
								<div class="layout-name">
									<a href="layout-right-sidebar.html">Right Sidebar</a>
								</div>
								<ul class="layout-links">
									<li>
										<a href="layout-right-sidebar.html" class="">Fixed Sidebar</a>
									</li>
									<li>
										<a href="layout-right-sidebar-static.html" class="">Static Sidebar</a>
									</li>
									<li>
										<a href="layout-without-submenu-toggle-right.html" class="">Other Submenus Toggle Off</a>
									</li>
								</ul>
							</div>
							
						</div>
						<div class="col-sm-4">
							
							<div class="layout-variant">
								<div class="layout-img">
									<a href="layout-collapsed-sidebar.html">
										<img src="/assets/images/layouts/layout-sidebar-collapsed.png" />
									</a>
								</div>
								<div class="layout-name">
									<a href="layout-collapsed-sidebar.html">Collapsed Sidebar</a>
								</div>
								<ul class="layout-links">
									<li>
										<a href="layout-collapsed-sidebar.html" class="disabled">
											<del>Fixed Sidebar</del>
										</a>
									</li>
									<li>
										<a href="layout-collapsed-sidebar.html" class="">Static Sidebar</a>
									</li>
									<li>
										<a href="layout-chat-open.html" class="">Static Sidebar &amp; Chat Open</a>
									</li>
								</ul>
							</div>
							
						</div>
						
						<div class="clearfix"></div>
						
						<div class="col-sm-4">
							
							<div class="layout-variant">
								<div class="layout-img">
									<a href="layout-right-collapsed-sidebar.html">
										<img src="/assets/images/layouts/layout-sidebar-right-collapsed.png" />
									</a>
								</div>
								<div class="layout-name">
									<a href="layout-right-collapsed-sidebar.html">Collapsed Right Sidebar</a>
								</div>
								<ul class="layout-links">
									<li>
										<a href="layout-right-collapsed-sidebar.html" class="disabled">
											<del>Fixed Sidebar</del>
										</a>
									</li>
									<li>
										<a href="layout-right-collapsed-sidebar.html" class="">Static Sidebar</a>
									</li>
									<li>
										<a href="layout-right-collapsed-sidebar-chat-open.html" class="">Static Sidebar &amp; Chat Open</a>
									</li>
								</ul>
							</div>
							
						</div>
						
						<div class="col-sm-4">
							
							<div class="layout-variant layout-current">
								<div class="layout-img">
									<a href="layout-horizontal-menu.html">
										<img src="/assets/images/layouts/layout-horizontal.png" />
									</a>
								</div>
								<div class="layout-name">
									<a href="layout-horizontal-menu.html">Horizontal Menu</a>
								</div>
								<ul class="layout-links">
									<li>
										<a href="layout-horizontal-menu.html" class="layout-mode-current">Fixed to Top</a>
									</li>
									<li>
										<a href="layout-horizontal-menu-static.html" class="">Static on Top</a>
									</li>
									<li>
										<a href="layout-horizontal-menu-boxed.html" class="">Boxed Content with Horizontal Menu</a>
									</li>
									<li>
										<a href="layout-horizontal-menu-click-to-open-subs.html" class="">Click to Open Submenus</a>
									</li>
									<li>
										<a href="layout-horizontal-menu-min.html" class="">Minimal Horizontal Menu</a>
									</li>
								</ul>
							</div>
							
						</div>
						<div class="col-sm-4">
							
							<div class="layout-variant">
								<div class="layout-img">
									<a href="layout-horizontal-plus-sidebar.html">
										<img src="/assets/images/layouts/layout-sidebar-horizontal.png" />
									</a>
								</div>
								<div class="layout-name">
									<a href="layout-horizontal-plus-sidebar.html">Sidebar &amp; Horizontal Menu</a>
								</div>
								<ul class="layout-links">
									<li>
										<a href="layout-horizontal-plus-sidebar.html" class="">Fixed Sidebar &amp; Horizontal Menu</a>
									</li>
									<li>
										<a href="layout-horizontal-sidebar-menu-static.html" class="">Static Sidebar &amp; Horizontal Menu</a>
									</li>
									<li>
										<a href="layout-horizontal-fixed-sidebar-menu-static.html" class="">Static Sidebar, Fixed Horizontal Menu</a>
									</li>
								</ul>
							</div>
							
						</div>
						
						<div class="clearfix"></div>
						
						<div class="col-sm-4">
							
							<div class="layout-variant">
								<div class="layout-img">
									<a href="layout-horizontal-right-sidebar-menu.html">
										<img src="/assets/images/layouts/layout-horizontal-right-sidebar.png" />
									</a>
								</div>
								<div class="layout-name">
									<a href="layout-horizontal-right-sidebar-menu.html">Right Sidebar &amp; Horizontal Menu</a>
								</div>
								<ul class="layout-links">
									<li>
										<a href="layout-horizontal-right-sidebar-menu.html" class="">Fixed Sidebar &amp; Horizontal Menu</a>
									</li>
									<li>
										<a href="layout-horizontal-right-sidebar-menu-static.html" class="">Static Sidebar &amp; Horizontal Menu</a>
									</li>
									<li>
										<a href="layout-horizontal-right-fixed-sidebar-menu-static.html" class="">Static Sidebar, Fixed Horizontal Menu</a>
									</li>
								</ul>
							</div>
							
						</div>
						<div class="col-sm-4">
							
							<div class="layout-variant">
								<div class="layout-img">
									<a href="layout-horizontal-sidebar-menu-collapsed.html">
										<img src="/assets/images/layouts/layout-sidebar-collapsed-horizontal.png" />
									</a>
								</div>
								<div class="layout-name">
									<a href="layout-horizontal-sidebar-menu-collapsed.html">Collapsed Sidebar &amp; Horizontal Menu</a>
								</div>
								<ul class="layout-links">
									<li>
										<a href="layout-horizontal-sidebar-menu-collapsed.html" class="">Static Sidebar &amp; Fixed Horizontal Menu</a>
									</li>
									<li>
										<a href="layout-horizontal-static-sidebar-menu-collapsed.html" class="">Static Sidebar &amp; Horizontal Menu</a>
									</li>
								</ul>
							</div>
							
						</div>
						
						
						<div class="col-sm-4">
							
							<div class="layout-variant">
								<div class="layout-img">
									<a href="layout-horizontal-sidebar-menu-collapsed-right.html">
										<img src="/assets/images/layouts/layout-horizontal-right-sidebar-collapsed.png" />
									</a>
								</div>
								<div class="layout-name">
									<a href="layout-horizontal-sidebar-menu-collapsed-right.html">Right Collapsed Sidebar &amp; Horizontal Menu</a>
								</div>
								<ul class="layout-links">
									<li>
										<a href="layout-horizontal-sidebar-menu-collapsed-right.html" class="">Static Sidebar &amp; Fixed Horizontal Menu</a>
									</li>
									<li>
										<a href="layout-horizontal-static-sidebar-menu-collapsed-right.html" class="">Static Sidebar &amp; Horizontal Menu</a>
									</li>
								</ul>
							</div>
							
						</div>
						
					</div>
				
				</div>
			
			</div>
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2014 
						<strong>Xenon</strong> 
						More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
					</div>
					
					
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
					
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
						
					</div>
					
				</div>
				
			</footer>
		</div>
		
			
		<!-- start: Chat Section -->
		<div id="chat" class="fixed">
			
			<div class="chat-inner">
			
				
				<h2 class="chat-header">
					<a href="#" class="chat-close" data-toggle="chat">
						<i class="fa-plus-circle rotate-45deg"></i>
					</a>
					
					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>
				
				<script type="text/javascript">
				// Here is just a sample how to open chat conversation box
				jQuery(document).ready(function($)
				{
					var $chat_conversation = $(".chat-conversation");
					
					$(".chat-group a").on('click', function(ev)
					{
						ev.preventDefault();
						
						$chat_conversation.toggleClass('is-open');
						
						$(".chat-conversation textarea").trigger('autosize.resize').focus();
					});
					
					$(".conversation-close").on('click', function(ev)
					{
						ev.preventDefault();
						$chat_conversation.removeClass('is-open');
					});
				});
				</script>
				
				
				<div class="chat-group">
					<strong>Favorites</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Work</strong>
					
					<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Other</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
				</div>
			
			</div>
			
			<!-- conversation template -->
			<div class="chat-conversation">
				
				<div class="conversation-header">
					<a href="#" class="conversation-close">
						&times;
					</a>
					
					<span class="user-status is-online"></span>
					<span class="display-name">Arlind Nushi</span> 
					<small>Online</small>
				</div>
				
				<ul class="conversation-body">	
					<li>
						<span class="user">Arlind Nushi</span>
						<span class="time">09:00</span>
						<p>Are you here?</p>
					</li>
					<li class="odd">
						<span class="user">Brandon S. Young</span>
						<span class="time">09:25</span>
						<p>This message is pre-queued.</p>
					</li>
					<li>
						<span class="user">Brandon S. Young</span>
						<span class="time">09:26</span>
						<p>Whohoo!</p>
					</li>
					<li class="odd">
						<span class="user">Arlind Nushi</span>
						<span class="time">09:27</span>
						<p>Do you like it?</p>
					</li>
				</ul>
				
				<div class="chat-textarea">
					<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
				</div>
				
			</div>
			
		</div>
		<!-- end: Chat Section -->
		
		
	</div>
	
	
	



	<!-- Bottom Scripts -->
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/TweenMax.min.js"></script>
	<script src="/assets/js/resizeable.js"></script>
	<script src="/assets/js/joinable.js"></script>
	<script src="/assets/js/xenon-api.js"></script>
	<script src="/assets/js/xenon-toggles.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="/assets/js/xenon-custom.js"></script>

</body>
</html>