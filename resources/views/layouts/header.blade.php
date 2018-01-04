<nav class="navbar horizontal-menu navbar-fixed-top"><!-- set fixed position by adding class "navbar-fixed-top" -->
		
		<div class="navbar-inner">
		
			<!-- Navbar Brand -->
			<div class="navbar-brand">
				<a href="/" class="logo">
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
				<li class="opened active">
					<a href="/processEngineList">
						<i class="linecons-cog"></i>
						<span class="title">流程列表</span>
					</a>
					<!-- <ul>
						<li>
							<a href="/">
								<span class="title">结婚照</span>
							</a>
						</li>
						</li>
					</ul> -->
				</li>
			</ul>
					
			
			<!-- notifications and other links -->
			<ul class="nav nav-userinfo navbar-right">
				
				<li class="dropdown user-profile">
					<a href="#" data-toggle="dropdown">
						<img src="/assets/images/user-1.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
						<span>
							用户名
							<i class="fa-angle-down"></i>
						</span>
					</a>
					
					<ul class="dropdown-menu user-profile-menu list-unstyled">
						<li>
							<a href="/register">
								<i class="fa-edit"></i>
								注册
							</a>
						</li>
						<li class="/logout">
							<a href="extra-lockscreen.html">
								<i class="fa-lock"></i>
								退出
							</a>
						</li>
					</ul>
				</li>
				
				
			</ul>
	
		</div>
		
	</nav>