<!DOCTYPE html>
	<!--
	This is a starter template page. Use this page to start your new project from
	scratch. This page gets rid of all links and provides the needed markup only.
	-->
	<html>
	<head>
		<meta charset="UTF-8">
		<title>IPAY Admin</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- Bootstrap 3.3.2 -->
		<link href="{{ asset("admin-lte/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
		<!-- Font Awesome Icons -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<!-- Ionicons -->
		<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<!-- Theme style -->
		<link href="{{ asset("admin-lte/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
		<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
			  page. However, you can choose any other skin. Make sure you
			  apply the skin class to the body tag so the changes take effect.
		-->
		<link href="{{ asset("admin-lte/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="skin-blue">
	<div class="wrapper">

		<!-- Main Header -->
		<!-- Modal form-->
		               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		                 <div class="modal-dialog ">
		                   <div class="modal-content">
		                     <div class="modal-header">
		                       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		                       <h4 class="modal-title" id="myModalLabel"></h4>
		                     </div>
		                     <div class="modal-body" id="modal-bodyku">
		                     </div>
		                     <div class="modal-footer" id="modal-footerq">
		                     </div>
		                   </div>
		                 </div>
		               </div>
		               <!-- end of modal ------------------------------>
		<header class="main-header">

			<!-- Logo -->
			<a href="#" class="logo"><b>Admin</b>IPAY</a>

			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<!-- Navbar Right Menu -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						
						<!-- Notifications Menu -->
						
						<!-- Tasks Menu -->
						
						<!-- User Account Menu -->
						<li class="dropdown user user-menu">
							<!-- Menu Toggle Button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<!-- The user image in the navbar-->
								<img src="{{ asset("img/admin.png") }}" class="user-image" alt="User Image"/>
								<!-- hidden-xs hides the username on small devices so only the image appears. -->
								<span class="hidden-xs">Super Admin</span>
							</a>
							<ul class="dropdown-menu">
								<!-- The user image in the menu -->
								<li class="user-header">
									<img src="{{ asset("img/admin.png") }}" class="img-circle" alt="User Image" />
									<p>
										Super Admin - IPAY
										<!-- <small>Member since Nov. 2012</small> -->
									</p>
								</li>
								<!-- Menu Body -->
								<!-- <li class="user-body">
									<div class="col-xs-4 text-center">
										<a href="#">Followers</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">Sales</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">Friends</a>
									</div>
								</li> -->
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="#" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="auth/logout" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">

			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">

				<!-- Sidebar user panel (optional) -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="{{ asset("img/admin.png") }}" class="img-circle" alt="User Image" />
					</div>
					<!-- <div class="pull-left info">
						<p>Alexander Pierce</p>
						<!-- Status -->
					<!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div> -->
				</div>

				<!-- search form (Optional) -->
				<form action="#" method="get" class="sidebar-form">
					<div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search..."/>
		  <span class="input-group-btn">
			<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
		  </span>
					</div>
				</form>
				<!-- /.search form -->

				<!-- Sidebar Menu -->
				<ul class="sidebar-menu">
					<li class="header">HEADER</li>
					<!-- Optionally, you can add icons to the links -->
					<li class="active" onClick="open_container();"><a ><span>Transaction Status</span></a></li>
					<!-- <li><a href="#"><span>Another Link</span></a></li>
					<li class="treeview">

						<a href="#"><span>Pages</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li><a href="{{url('admin/pages')}}">List Pages</a></li>
							<li><a href="#">Add Page</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li><a href="#">Link in level 2</a></li>
							<li><a href="#">Link in level 2</a></li>
						</ul>
					</li> -->
				</ul><!-- /.sidebar-menu -->
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			@section('content-header')
				<!-- <section class="content-header">
					<h1>
						Page Header
						<small>Optional description</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
						<li class="active">Here</li>
					</ol>
				</section> -->
			@show
			

			<!-- Main content -->
			<section class="content">

				<!-- Your Page Content Here -->
				@yield('content')
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="pull-right hidden-xs">
				<!-- Anything you want -->
			</div>
			<!-- Default to the left -->
			<strong>Copyright © 2015 <a href="#">iPay</a>.</strong> All rights reserved.
		</footer>

	</div><!-- ./wrapper -->

	<!-- REQUIRED JS SCRIPTS -->

	<!-- jQuery 2.1.3 -->
	<script src="{{ asset ("admin-lte/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="{{ asset ("admin-lte/bootstrap/js/jquery-ui.js") }}"></script>
	<script src="{{ asset ("admin-lte/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset ("admin-lte/dist/js/app.min.js") }}" type="text/javascript"></script>

	<!-- Optionally, you can add Slimscroll and FastClick plugins.
		  Both of these plugins are recommended to enhance the
		  user experience -->
	<script language="javascript">
        function open_container()
        {
            var size= 'small'; //document.getElementById('mysize').value;
            var content = '<form role="form"><div class="form-group"><label for="exampleInputEmail1">Enter PIN</label><input type="text" class="form-control" id="PIN" placeholder="Enter PIN"></div><div id="result" style=" display: none;"><div class="form-group"><label for="exampleInputEmail1">Status</label><div id="loader"><img id="ajax-loader" src="img/ajax-loader.gif" /></div></div></div></form>';
            var title = 'Check Transaction Status';
            var footer = '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary" onClick="checkStaus()">Check</button>';
            setModalBox(title,content,footer,size);
            $('#myModal').modal('show');
        }
        function setModalBox(title,content,footer,$size)
        {
            document.getElementById('modal-bodyku').innerHTML=content;
            document.getElementById('myModalLabel').innerHTML=title;
            document.getElementById('modal-footerq').innerHTML=footer;
            if($size == 'large')
            {
                $('#myModal').attr('class', 'modal fade bs-example-modal-lg')
                             .attr('aria-labelledby','myLargeModalLabel');
                $('.modal-dialog').attr('class','modal-dialog modal-lg');
            }
            if($size == 'standart')
            {
                $('#myModal').attr('class', 'modal fade')
                             .attr('aria-labelledby','myModalLabel');
                $('.modal-dialog').attr('class','modal-dialog');
            }
            if($size == 'small')
            {
                $('#myModal').attr('class', 'modal fade bs-example-modal-sm')
                             .attr('aria-labelledby','mySmallModalLabel');
                $('.modal-dialog').attr('class','modal-dialog modal-sm');
            }
        }
        function checkStaus(){
        	if(document.getElementById('PIN').value.length > 0){
        		document.getElementById('result').style.display = "block" ;
        		$.ajax({
        			url:"http://localhost/ipay_prem/soapAPI.php",
        			type:"POST",
        			data:{'PIN':document.getElementById('PIN').value} ,
        			context: document.body
        		}).done(function(res){
        			document.getElementById('loader').innerHTML = res;
        		}).error(function(){});
        	}
        	
        }
    </script>
	</body>
</html>