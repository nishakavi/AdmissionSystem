<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Admission System</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

 
		@include('includes.head-include');

	</head>

	@include('includes.footer-include')


	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				@include('includes.header')
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						@include('includes.tasks')
						@include('includes.notifications')
						@include('includes.messages')
						@include('includes.userlogo')
					</ul>
				</div>

			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				 

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					 		JAFFNA HINDU COLLEGE
					</div>


				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard</span>
						</a>
						<b class="arrow"></b>
					</li>

					@include('includes.right-menu')
					 
					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">

					@include('includes.page-route')

					<div class="page-content">
						<div class="page-header">
							<h1>
								@yield('LayoutTitle')
								 
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								@yield('content')

								<!-- // PAGE CONTENT BEGINS -->
							</div>	 
						</div>		
								  
									 
								 
								 
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			@include('includes.footer')

		 
		</div><!-- /.main-container -->

		<!-- basic scripts -->



	 
		 
	</body>
</html>
