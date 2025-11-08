<!--begin::Header-->
<div id="kt_app_header" class="app-header">
	<!--begin::Header container-->
	<div class="app-container container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
		<!--begin::Logo-->
		<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
			<a href="/">
				<img alt="Logo" src="{{ image('logos/default-dark.svg') }}" class="h-20px h-lg-30px app-sidebar-logo-default" />
			</a>
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt quos suscipit in voluptatem veniam inventore praesentium consectetur quibusdam repudiandae error sequi tempora rerum reprehenderit veritatis ipsum corporis omnis, et nulla.
		</div>
		<!--end::Logo-->
		<!--begin::Header wrapper-->
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
			@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/header-layout/header/_menu/_menu')
			@include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/header-layout/header/_navbar')
		</div>
		<!--end::Header wrapper-->
	</div>
	<!--end::Header container-->
</div>
<!--end::Header-->
