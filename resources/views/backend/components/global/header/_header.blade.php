	<!-- Main navbar -->
	<div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
		<div class="container-fluid">
			<div class="d-flex d-lg-none me-2">
				<button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
					<i class="ph-list"></i>
				</button>
			</div>

			<div class="navbar-brand flex-1 flex-lg-0">
				<!-- logo -->
				@include('backend.components.global.header.logo')
			</div>

			<ul class="nav flex-row justify-content-end order-1 order-lg-2">
				<!-- profile menu start -->
				@include('backend.components.global.header.profile-menu')
				<!-- profile menu end -->
			</ul>
		</div>
	</div>
	<!-- /main navbar -->