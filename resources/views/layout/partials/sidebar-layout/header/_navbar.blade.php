<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
	<!--begin::Search-->
	
	<!--end::Theme mode-->
	<!--begin::User menu-->
	<div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
		<!--begin::Menu wrapper-->
		<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
			<img src="{{ image('avatars/300-1.jpg') }}" alt="user" />
		</div>
		@include('partials/menus/_user-account-menu')
		<!--end::Menu wrapper-->
	</div>
	<!--end::User menu-->
	<!--begin::Header menu toggle-->
	<div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
		
	</div>
	<!--end::Header menu toggle-->
</div>
<!--end::Navbar-->
