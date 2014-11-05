<div class="page-sidebar-wrapper">
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-auto-scroll="true" data-slide-speed="200">
			<li class="start active ">
				<a href="{{url('stock')}}">
				<i class="icon-home"></i>
				<span class="title">สต๊อกสินค้า</span>
				<span class="selected"></span>
				</a>
			</li>
			<li>
				<a href="{{url('stock/create')}}">
				<i class="icon-home"></i>
				<span class="title">เพิ่มสต๊อก</span>
				<span class="selected"></span>
				</a>
			</li>			
			<li>
				<a href="{{url('withdraw')}}">
				<i class="icon-basket"></i>
				<span class="title">เบิก</span>
				<span class="arrow open"></span>
				</a>
			</li>
			<li>
				<a href="{{url('sell')}}">
				<i class="icon-handbag"></i>
				<span class="title">ขาย</span>
				<span class="arrow "></span>
				</a>
			</li>
			<!-- BEGIN FRONTEND THEME LINKS -->
			<li>
				<a href="{{url('return')}}">
				<i class="icon-action-undo"></i>
				<span class="title">คืน</span>
				<span class="arrow">
				</span>
				</a>
			</li>
			<!-- END FRONTEND THEME LINKS -->
			<li>
				<a href="{{url('production')}}">
				<i class="icon-hourglass"></i>
				<span class="title">รอผลิต</span>
				<span class="arrow "></span>
				</a>
			</li>
			<li>
				<a href="{{url('alert')}}">
				<i class="icon-bell"></i>
				<span class="title">แจ้งเตือน</span>
				<span class="arrow "></span>
				</a>
			</li>
			<li>
				<a href="{{url('report')}}">
				<i class="icon-notebook"></i>
				<span class="title">รายงาน</span>
				<span class="arrow "></span>
				</a>
			</li>
			<li>
				<a href="{{url('customer')}}">
				<i class="icon-user"></i>
				<span class="title">ลูกค้า</span>
				<span class="arrow "></span>
				</a>
			</li>
			<li>
				<a href="javascript:;">
				<i class="icon-settings"></i>
				<span class="title">ตั้งค่า</span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="form_controls.html">
						Form Controls</a>
					</li>
					<li>
						<a href="form_icheck.html">
						iCheck Controls</a>
					</li>
					<li>
						<a href="form_layouts.html">
						Form Layouts</a>
					</li>
					<li>
						<a href="form_editable.html">
						<span class="badge badge-roundless badge-warning">new</span>Form X-editable</a>
					</li>
					<li>
						<a href="form_wizard.html">
						Form Wizard</a>
					</li>
					<li>
						<a href="form_validation.html">
						Form Validation</a>
					</li>
					<li>
						<a href="form_image_crop.html">
						<span class="badge badge-roundless badge-danger">new</span>Image Cropping</a>
					</li>
					<li>
						<a href="form_fileupload.html">
						Multiple File Upload</a>
					</li>
					<li>
						<a href="form_dropzone.html">
						Dropzone File Upload</a>
					</li>
				</ul>
			</li>					
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>