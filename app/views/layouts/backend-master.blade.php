<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.3.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | eCommerce - Order View</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">

{{HTML::style('assets/css/global/font-awesome/css/font-awesome.min.css')}}
{{HTML::style('assets/css/global/simple-line-icons/simple-line-icons.min.css')}}
{{HTML::style('assets/css/global/bootstrap/css/bootstrap.min.css')}}
{{HTML::style('assets/css/global/uniform/css/uniform.default.css')}}
{{HTML::style('assets/css/global/bootstrap-switch/css/bootstrap-switch.min.css')}}

<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
@section('css_files')
{{HTML::style('assets/css/global/select2/select2.css')}}
{{HTML::style('assets/css/global/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}
{{HTML::style('assets/css/global/bootstrap-datepicker/css/datepicker.css')}}
{{HTML::style('assets/css/global/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}
@show
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
{{HTML::style('assets/css/global/components.css')}}
{{HTML::style('assets/css/global/plugins.css')}}
{{HTML::style('assets/css/admin/layout2/layout.css')}}
{{HTML::style('assets/css/admin/layout2/themes/default.css',['id'=>'style_color'])}}
{{HTML::style('assets/css/admin/layout2/custom.css')}}
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo ">

<!-- BEGIN HEADER -->
	@include('layouts.header')
<!-- END HEADER -->

<div class="clearfix">
</div>
<div class="container">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		@include('layouts.sidebar')
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				@yield('content')
				<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">
			 2014 &copy; Metronic by keenthemes.
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
{{HTML::script('assets/js/plugins/jquery.min.js')}}
{{HTML::script('assets/js/plugins/jquery-migrate.min.js')}}
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

{{HTML::script('assets/js/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}
{{HTML::script('assets/js/plugins/bootstrap/js/bootstrap.min.js')}}
{{HTML::script('assets/js/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}
{{HTML::script('assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}
{{HTML::script('assets/js/plugins/jquery.blockui.min.js')}}
{{HTML::script('assets/js/plugins/jquery.cokie.min.js')}}
{{HTML::script('assets/js/plugins/uniform/jquery.uniform.min.js')}}
{{HTML::script('assets/js/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@section('js_files')
{{HTML::script('assets/js/plugins/select2/select2.min.js')}}
{{HTML::script('assets/js/plugins/datatables/media/js/jquery.dataTables.min.js')}}
{{HTML::script('assets/js/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}
{{HTML::script('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}
{{HTML::script('assets/js/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}
@show
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{HTML::script('assets/js/scripts/metronic.js')}}
{{HTML::script('assets/js/scripts/layout.js')}}
{{HTML::script('assets/js/scripts/demo.js')}}
{{HTML::script('assets/js/scripts/datatable.js')}}
{{HTML::script('assets/js/scripts/ecommerce-orders-view.js')}}

<!-- END PAGE LEVEL SCRIPTS -->
<script>
        jQuery(document).ready(function() {    
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
           EcommerceOrdersView.init();
        });
    </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>