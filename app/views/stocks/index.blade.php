@extends('layouts.backend-master')

@section('content')

<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				 Widget settings form goes here
			</div>
			<div class="modal-footer">
				<button type="button" class="btn blue">Save changes</button>
				<button type="button" class="btn default" data-dismiss="modal">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- BEGIN STYLE CUSTOMIZER -->
<div class="theme-panel">
	<div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
		<i class="icon-settings"></i>
	</div>
	<div class="toggler-close">
		<i class="icon-close"></i>
	</div>
	<div class="theme-options">
		<div class="theme-option theme-colors clearfix">
			<span>
			THEME COLOR </span>
			<ul>
				<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
				</li>
				<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
				</li>
				<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
				</li>
				<li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark">
				</li>
				<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
				</li>
			</ul>
		</div>
		<div class="theme-option">
			<span>
			Layout </span>
			<select class="layout-option form-control input-small">
				<option value="fluid" selected="selected">Fluid</option>
				<option value="boxed">Boxed</option>
			</select>
		</div>
		<div class="theme-option">
			<span>
			Header </span>
			<select class="page-header-option form-control input-small">
				<option value="fixed" selected="selected">Fixed</option>
				<option value="default">Default</option>
			</select>
		</div>
		<div class="theme-option">
			<span>
			Sidebar Mode</span>
			<select class="sidebar-option form-control input-small">
				<option value="fixed">Fixed</option>
				<option value="default" selected="selected">Default</option>
			</select>
		</div>
		<div class="theme-option">
			<span>
			Sidebar Style</span>
			<select class="sidebar-style-option form-control input-small">
				<option value="default" selected="selected">Default</option>
				<option value="compact">Compact</option>
			</select>
		</div>
		<div class="theme-option">
			<span>
			Sidebar Menu </span>
			<select class="sidebar-menu-option form-control input-small">
				<option value="accordion" selected="selected">Accordion</option>
				<option value="hover">Hover</option>
			</select>
		</div>
		<div class="theme-option">
			<span>
			Sidebar Position </span>
			<select class="sidebar-pos-option form-control input-small">
				<option value="left" selected="selected">Left</option>
				<option value="right">Right</option>
			</select>
		</div>
		<div class="theme-option">
			<span>
			Footer </span>
			<select class="page-footer-option form-control input-small">
				<option value="fixed">Fixed</option>
				<option value="default" selected="selected">Default</option>
			</select>
		</div>
	</div>
</div>
<!-- END STYLE CUSTOMIZER -->
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
สต๊อคสินค้า</small>
</h3>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="index.html">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">eCommerce</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">Order View</a>
		</li>
	</ul>
	<div class="page-toolbar">
		<div class="btn-group pull-right">
			<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
			Actions <i class="fa fa-angle-down"></i>
			</button>
			<ul class="dropdown-menu pull-right" role="menu">
				<li>
					<a href="#">Action</a>
				</li>
				<li>
					<a href="#">Another action</a>
				</li>
				<li>
					<a href="#">Something else here</a>
				</li>
				<li class="divider">
				</li>
				<li>
					<a href="#">Separated link</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- Begin: life time stats -->
		<div class="portlet light">

			<div class="portlet-body">
				<div class="tabbable">
					<ul class="nav nav-tabs nav-tabs-lg">
						<li class="active">
							<a href="#tab_1" data-toggle="tab">
							ข้าวปุ๋ย </a>
						</li>
						<li>
							<a href="#tab_2" data-toggle="tab">
							ข้าวถุง <span class="badge badge-success">
							4 </span>
							</a>
						</li>
						<li>
							<a href="#tab_3" data-toggle="tab">
							อื่นๆ </a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_1">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="portlet red box">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-cogs"></i>ข้าวปุ๋ย
											</div>
											<div class="actions">
												<a href="#" class="btn btn-default btn-sm">
												<i class="fa fa-pencil"></i> Edit </a>
											</div>
										</div>
										<div class="portlet-body">
											<div class="table-responsive">
												<table class="table table-hover table-bordered table-striped">
												<thead>
												<tr>
													<th>
														 ชนิดสินค้า
													</th>
													<th>
														 ชื่อสินค้า
													</th>
													<th>
														 จำนวน
													</th>
													<th>
														 ราคา/หน่วย
													</th>
													<th>
														 Quantity
													</th>
													<th>
														 Tax Amount
													</th>
													<th>
														 Tax Percent
													</th>
													<th>
														 Discount Amount
													</th>
													<th>
														 Total
													</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<td>
														<a href="#">
														Product 1 </a>
													</td>
													<td>
														<span class="label label-sm label-success">
														Available
													</td>
													<td>
														 345.50$
													</td>
													<td>
														 345.50$
													</td>
													<td>
														 2
													</td>
													<td>
														 2.00$
													</td>
													<td>
														 4%
													</td>
													<td>
														 0.00$
													</td>
													<td>
														 691.00$
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">
														Product 1 </a>
													</td>
													<td>
														<span class="label label-sm label-success">
														Available
													</td>
													<td>
														 345.50$
													</td>
													<td>
														 345.50$
													</td>
													<td>
														 2
													</td>
													<td>
														 2.00$
													</td>
													<td>
														 4%
													</td>
													<td>
														 0.00$
													</td>
													<td>
														 691.00$
													</td>
												</tr>
												</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								</div>
								<div class="col-md-6">
									<div class="well">
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Sub Total:
											</div>
											<div class="col-md-3 value">
												 $1,124.50
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Shipping:
											</div>
											<div class="col-md-3 value">
												 $40.50
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Grand Total:
											</div>
											<div class="col-md-3 value">
												 $1,260.00
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Total Paid:
											</div>
											<div class="col-md-3 value">
												 $1,260.00
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Total Refunded:
											</div>
											<div class="col-md-3 value">
												 $0.00
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Total Due:
											</div>
											<div class="col-md-3 value">
												 $1,124.50
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab_2">

							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="portlet green box">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-cogs"></i>ข้าวถุง
											</div>
											<div class="actions">
												<a href="#" class="btn btn-default btn-sm">
												<i class="fa fa-pencil"></i> Edit </a>
											</div>
										</div>
										<div class="portlet-body">
											<div class="table-responsive">
												<table class="table table-hover table-bordered table-striped">
												<thead>
												<tr>
													<th>
														 Product
													</th>
													<th>
														 Item Status
													</th>
													<th>
														 Original Price
													</th>
													<th>
														 Price
													</th>
													<th>
														 Quantity
													</th>
													<th>
														 Tax Amount
													</th>
													<th>
														 Tax Percent
													</th>
													<th>
														 Discount Amount
													</th>
													<th>
														 Total
													</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<td>
														<a href="#">
														Product 1 </a>
													</td>
													<td>
														<span class="label label-sm label-success">
														Available
													</td>
													<td>
														 345.50$
													</td>
													<td>
														 345.50$
													</td>
													<td>
														 2
													</td>
													<td>
														 2.00$
													</td>
													<td>
														 4%
													</td>
													<td>
														 0.00$
													</td>
													<td>
														 691.00$
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">
														Product 1 </a>
													</td>
													<td>
														<span class="label label-sm label-success">
														Available
													</td>
													<td>
														 345.50$
													</td>
													<td>
														 345.50$
													</td>
													<td>
														 2
													</td>
													<td>
														 2.00$
													</td>
													<td>
														 4%
													</td>
													<td>
														 0.00$
													</td>
													<td>
														 691.00$
													</td>
												</tr>
												</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								</div>
								<div class="col-md-6">
									<div class="well">
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Sub Total:
											</div>
											<div class="col-md-3 value">
												 $1,124.50
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Shipping:
											</div>
											<div class="col-md-3 value">
												 $40.50
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Grand Total:
											</div>
											<div class="col-md-3 value">
												 $1,260.00
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Total Paid:
											</div>
											<div class="col-md-3 value">
												 $1,260.00
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Total Refunded:
											</div>
											<div class="col-md-3 value">
												 $0.00
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Total Due:
											</div>
											<div class="col-md-3 value">
												 $1,124.50
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="tab-pane" id="tab_3">

							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="portlet yellow-crusta box">
										<div class="portlet-title">
											<div class="caption">
												<i class="fa fa-cogs"></i>อื่นๆ
											</div>
											<div class="actions">
												<a href="#" class="btn btn-default btn-sm">
												<i class="fa fa-pencil"></i> Edit </a>
											</div>
										</div>
										<div class="portlet-body">
											<div class="table-responsive">
												<table class="table table-hover table-bordered table-striped">
												<thead>
												<tr>
													<th>
														 Product
													</th>
													<th>
														 Item Status
													</th>
													<th>
														 Original Price
													</th>
													<th>
														 Price
													</th>
													<th>
														 Quantity
													</th>
													<th>
														 Tax Amount
													</th>
													<th>
														 Tax Percent
													</th>
													<th>
														 Discount Amount
													</th>
													<th>
														 Total
													</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<td>
														<a href="#">
														Product 1 </a>
													</td>
													<td>
														<span class="label label-sm label-success">
														Available
													</td>
													<td>
														 345.50$
													</td>
													<td>
														 345.50$
													</td>
													<td>
														 2
													</td>
													<td>
														 2.00$
													</td>
													<td>
														 4%
													</td>
													<td>
														 0.00$
													</td>
													<td>
														 691.00$
													</td>
												</tr>
												<tr>
													<td>
														<a href="#">
														Product 1 </a>
													</td>
													<td>
														<span class="label label-sm label-success">
														Available
													</td>
													<td>
														 345.50$
													</td>
													<td>
														 345.50$
													</td>
													<td>
														 2
													</td>
													<td>
														 2.00$
													</td>
													<td>
														 4%
													</td>
													<td>
														 0.00$
													</td>
													<td>
														 691.00$
													</td>
												</tr>
												</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
								</div>
								<div class="col-md-6">
									<div class="well">
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Sub Total:
											</div>
											<div class="col-md-3 value">
												 $1,124.50
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Shipping:
											</div>
											<div class="col-md-3 value">
												 $40.50
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Grand Total:
											</div>
											<div class="col-md-3 value">
												 $1,260.00
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Total Paid:
											</div>
											<div class="col-md-3 value">
												 $1,260.00
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Total Refunded:
											</div>
											<div class="col-md-3 value">
												 $0.00
											</div>
										</div>
										<div class="row static-info align-reverse">
											<div class="col-md-8 name">
												 Total Due:
											</div>
											<div class="col-md-3 value">
												 $1,124.50
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
		<!-- End: life time stats -->
	</div>
</div>

@stop