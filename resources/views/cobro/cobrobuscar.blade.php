<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.8
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="" />
	<title>Melo Express - Punto Fijo</title>
	
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />

	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	    {{-- Global Metronic Styles --}}
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
	
<style>
input.is-valid {
    border: 2px solid #28a745 !important;
    background-color: #e6f9ec !important;
    color: #155724 !important;
    font-weight: 600;
}
input.is-invalid {
    border: 2px solid #dc3545 !important;
    background-color: #f8d7da !important;
    color: #721c24 !important;
    font-weight: 600;
}
</style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if (localStorage.getItem("data-bs-theme") !== null) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
				<!--begin::Logo-->
				<div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
					<a href="/dashboard">
						<img alt="Logo" src="assets/media/logos/demo9.svg" class="h-40px" />
					</a>
				</div>
				<!--end::Logo-->
                <div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
					<!--begin::Aside menu-->
					<div class="pt-15 w-100 " data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
						<div  class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-400 menu-arrow-gray-400 fw-semibold fs-6 my-auto" data-kt-menu="true">
							<!--begin:Menu item-->
							<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
								<!--begin:Menu link-->
								<span class="menu-link menu-center">
									<span class="menu-icon me-0">
										<i class="ki-duotone ki-home-2 fs-2x">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
								</span>
								<!--end:Menu link-->
								<!--begin:Menu sub-->
								<div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
									<!--begin:Menu item-->
									
									<!--end:Menu item-->
									<!--begin:Menu item-->
									<div class="menu-item">
										<!--begin:Menu link-->
										<a class="menu-link active" href="/dashboard">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Inicio</span>
										</a>
										
										<!--end:Menu link-->
									</div>
									<!--end:Menu item-->

								</div>


								<!--end:Menu sub-->
							</div>

							<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here show py-2">
								<!--begin:Menu link-->
								@can('repartidor-crear')
								
									<span class="menu-link menu-center">
										<span class="menu-icon me-0">
											<i class="ki-duotone ki-badge fs-2x">
												<span class="path1"></span>
												<span class="path2"></span>
												<span class="path3"></span>
												<span class="path4"></span>
												<span class="path5"></span>
											</i>
										</span>
									</span>
							
									<div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu content-->
											<div class="menu-content">
												<span class="menu-section fs-5 fw-bolder ps-1 py-1">Usuarios</span>
											</div>
											<!--end:Menu content-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="/usuarios/lista">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Lista</span>
											</a>

										
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
	
									</div>

									@endcan


                                    <!--end:Menu sub-->

                            </div>

                            </a>

						</div>


					</div>
					<!--end::Aside menu-->
				</div>
				<!--end::Nav-->
				<!--begin::Footer-->
				
				<!--end::Footer-->
			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				
				<!--end::Header tablet and mobile-->
				<!--begin::Header-->
				<div id="kt_header" class="header py-6 py-lg-0" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{lg: '300px'}">
					<!--begin::Container-->
					<div class="header-container container-xxl">
                        	<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
   <button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
     <i class="fas fa-bars" style="font-size: 28px;"></i>
</button>
</div>
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-20 py-3 py-lg-0 me-3">
							<!--begin::Heading-->
							<h1 class="d-flex flex-column text-dark fw-bold my-1">
								<span class="text-white fs-1">Hola, {{ Auth::user()->name }}</span>
								<small class="text-gray-600 fs-6 fw-normal pt-2"></small>
							</h1>
							<!--end::Heading-->
						</div>
						<!--end::Page title=-->
						<!--begin::Wrapper-->
						<div class="d-flex align-items-center flex-wrap">
							
							<!--end::Search-->
							<!--begin::Action-->
							<div class="d-flex align-items-center py-3 py-lg-0">
								
								<!--end::Item-->
								<!--begin::Item-->
								<div class="me-3">
									<a href="#" class="btn btn-icon btn-custom btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<i class="ki-duotone ki-user fs-1 text-white">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</a>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
														
													</div>
													
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										
									
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
											
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
											
												
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										
									
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
											<a href="#" class="menu-link px-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
												Cerrar Sesion
											</a>
										</div>

										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
								</div>
								<!--end::Item-->
								<!--begin::Theme mode-->
								<div class="d-flex align-items-center me-3">
									<!--begin::Menu toggle-->
									<a href="#" class="btn btn-icon btn-custom btn-active-color-primary" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<i class="ki-duotone ki-night-day theme-light-show fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
											<span class="path3"></span>
											<span class="path4"></span>
											<span class="path5"></span>
											<span class="path6"></span>
											<span class="path7"></span>
											<span class="path8"></span>
											<span class="path9"></span>
											<span class="path10"></span>
										</i>
										<i class="ki-duotone ki-moon theme-dark-show fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</a>
									<!--begin::Menu toggle-->
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-night-day fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-moon fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Theme mode-->
								<!--begin::Item-->
								
								<!--end::Item-->
							</div>
							<!--end::Action-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
					<div class="header-offset"></div>
				</div>
			
			
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Container-->
					<div class="container-fluid m-0" id="kt_content_container">
						<!--begin::Row-->
						<div class="row g-5 g-xl-8">
							<!--begin::Col-->
						
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-11 ps-xl-4 " >
                                <!--begin::Engage widget 1-->
                                <div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px bg-primary mb-5 mb-xl-8"
                                    style="background-color:white !important; " dir="ltr">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold fs-3 mb-1 text-gray-600 text-uppercase">
                                               
                                                Comercio : {{ $comercio->comercio }}
                                               
                                            </span>
                                            <span class="text-muted mt-1 fw-semibold fs-7">
                                                <!-- Puedes agregar un subtítulo dinámico aquí si lo necesitas -->
                                            </span>
                                        </h3>
                                    </div>
                                    <!--end::Header-->
									 @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert-success" style="margin-left: 25px;">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        // Espera 4 segundos (4000 ms) y luego oculta el mensaje
        setTimeout(function () {
            let alertBox = document.getElementById('alert-success');
            if (alertBox) {
                alertBox.classList.remove('show');
                alertBox.classList.add('fade');
                alertBox.style.display = 'none';
            }
        }, 3000);
    </script>
@endif
    

                                    <!--begin::Body-->

                                  <div class="card-body">
        <!--begin:::Tabs-->
        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-semibold mb-15" role="tablist">
            <!--begin:::Tab item-->
            <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary d-flex align-items-center pb-5 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general" aria-selected="true" role="tab">
                    <i class="ki-duotone ki-home fs-2 me-2"></i>                    Personalizado
                </a>
            </li>
            <!--end:::Tab item-->

            <!--begin:::Tab item-->
            <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_store" aria-selected="false" role="tab" tabindex="-1">
                    <i class="ki-duotone ki-shop fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Punto fijo
                </a>
            </li>
            <!--end:::Tab item-->

            <!--begin:::Tab item-->
            <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_localization" aria-selected="false" role="tab" tabindex="-1">
                    <i class="ki-duotone ki-compass fs-2 me-2"><span class="path1"></span><span class="path2"></span></i>                    Personalizado departamental
                </a>
            </li>
            <!--end:::Tab item-->

            <!--begin:::Tab item-->
            <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_products" aria-selected="false" role="tab" tabindex="-1">
                    <i class="ki-duotone ki-package fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>                    Casillero
                </a>
            </li>
            <!--end:::Tab item-->

			<li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#cobrar" aria-selected="false" role="tab" tabindex="-1">
                    <i class="ki-duotone ki-people fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Cobrar
                </a>
            </li>
            <!--end:::Tab item-->
        </ul>
        <!--end:::Tabs-->

        <!--begin:::Tab content-->
        <div class="tab-content" id="myTabContent">
            <!--begin:::Tab pane-->
          <div class="tab-pane fade active show" id="kt_ecommerce_settings_general" role="tabpanel">

    <form class="guardar-envios" data-tipo="Personalizado">

        <!-- QR (siempre a la izquierda en PC, arriba en móvil) -->
        <div class="row mb-4">
            <div class="col-12 col-lg-6">
                <input id="personalizado-qr-input" type="text"
                       placeholder="Escanear QR"
                       readonly
                       class="form-control mb-3"
                       style="max-width: 300px;" />

                <div id="personalizado-qr-reader"
                     style="width:100%; display:none;"
                     class="border rounded p-2 mb-3"></div>
            </div>
        </div>

        <!-- TABLA (ANCHO COMPLETO) -->
        <div class="row mb-5">
            <div class="col-12">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="personalizado-tabla">
                    <thead>
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                            <th># Guía</th>
                            <th>Tipo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

        <!-- SUBTOTAL + BOTONES (alineados a la derecha en PC, debajo de tabla) -->
        <div class="row justify-content-lg-end">

            <div class="col-12 col-lg-4 d-flex flex-column align-items-lg-end">

                <!-- Subtotal -->
                <div class="mb-3 w-100" style="max-width: 200px;">
                    
                    <input type="number" id="personalizado-subtotal"
                           class="form-control"
                           placeholder="0.00" min="0" step="0.01">
                </div>

                <!-- Botones -->
                <div class="d-flex gap-3 mt-2">
                    <a href="/cobro/cobrar" class="btn btn-light">Cancelar</a>

                    <button type="submit"
                            data-kt-ecommerce-settings-type="submit"
                            class="btn btn-primary">
                        <span class="indicator-label">Guardar</span>
                        <span class="indicator-progress">
                            Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                </div>

            </div>

        </div>

    </form>

</div>
            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
           <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">

    <form class="guardar-envios" data-tipo="Punto fijo">

        <!-- QR (arriba izquierda en PC / arriba en móvil) -->
        <div class="row mb-4">
            <div class="col-12 col-lg-6">
                <input id="puntofijo-qr-input" type="text"
                       placeholder="Escanear QR"
                       readonly
                       class="form-control mb-3"
                       style="max-width: 300px;" />

                <div id="puntofijo-qr-reader"
                     style="width:100%; display:none;"
                     class="border rounded p-2 mb-3"></div>
            </div>
        </div>

        <!-- TABLA (ancho completo) -->
        <div class="row mb-5">
            <div class="col-12">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="puntofijo-tabla">
                    <thead>
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                            <th># Guía</th>
                            <th>Tipo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

        <!-- SUBTOTAL + BOTONES alineados a la derecha (PC) -->
        <div class="row justify-content-lg-end">

            <div class="col-12 col-lg-4 d-flex flex-column align-items-lg-end">

                <!-- Subtotal -->
                <div class="mb-3 w-100" style="max-width: 200px;">
                    <input type="number" id="puntofijo-subtotal"
                           class="form-control"
                           placeholder="0.00" min="0" step="0.01">
                </div>

                <!-- Botones -->
                <div class="d-flex gap-3 mt-2">

                    <a href="/cobro/cobrar" class="btn btn-light">
                        Cancelar
                    </a>

                    <button type="submit"
                            data-kt-ecommerce-settings-type="submit"
                            class="btn btn-primary">
                        <span class="indicator-label">Guardar</span>
                        <span class="indicator-progress">
                            Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>

                </div>

            </div>

        </div>

    </form>

</div>
            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
           <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">

    <form class="guardar-envios" data-tipo="Personalizado Departamental">

        <!-- QR (arriba izquierda en PC / arriba en móvil) -->
        <div class="row mb-4">
            <div class="col-12 col-lg-6">
                <input id="personalizado-departamental-qr-input" type="text"
                       placeholder="Escanear QR"
                       readonly
                       class="form-control mb-3"
                       style="max-width: 300px;" />

                <div id="personalizado-departamental-qr-reader"
                     style="width:100%; display:none;"
                     class="border rounded p-2 mb-3"></div>
            </div>
        </div>

        <!-- TABLA (ancho completo) -->
        <div class="row mb-5">
            <div class="col-12">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="personalizado-departamental-tabla">
                    <thead>
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                            <th># Guía</th>
                            <th>Tipo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

        <!-- SUBTOTAL + BOTONES alineados a la derecha (PC) -->
        <div class="row justify-content-lg-end">

            <div class="col-12 col-lg-4 d-flex flex-column align-items-lg-end">

                <!-- Subtotal -->
                <div class="mb-3 w-100" style="max-width: 200px;">
                    <input type="number" id="personalizado-departamental-subtotal"
                           class="form-control"
                           placeholder="0.00"
                           min="0" step="0.01">
                </div>

                <!-- Botones -->
                <div class="d-flex gap-3 mt-2">

                    <a href="/cobro/cobrar" class="btn btn-light">
                        Cancelar
                    </a>

                    <button type="submit"
                            data-kt-ecommerce-settings-type="submit"
                            class="btn btn-primary">
                        <span class="indicator-label">Guardar</span>
                        <span class="indicator-progress">
                            Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>

                </div>

            </div>

        </div>

    </form>

</div>
            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
           <div class="tab-pane fade" id="kt_ecommerce_settings_products" role="tabpanel">

    <form class="guardar-envios" data-tipo="Casillero">

        <!-- QR (arriba izquierda en PC / arriba en móvil) -->
        <div class="row mb-4">
            <div class="col-12 col-lg-6">
                <input id="casillero-qr-input" type="text"
                       placeholder="Escanear QR"
                       readonly
                       class="form-control mb-3"
                       style="max-width: 300px;" />

                <div id="casillero-qr-reader"
                     style="width:100%; display:none;"
                     class="border rounded p-2 mb-3"></div>
            </div>
        </div>

        <!-- TABLA ANCHO COMPLETO -->
        <div class="row mb-5">
            <div class="col-12">
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="casillero-tabla">
                    <thead>
                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                            <th># Guía</th>
                            <th>Tipo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

        <!-- SUBTOTAL + BOTONES alineados a la derecha (PC) -->
        <div class="row justify-content-lg-end">

            <div class="col-12 col-lg-4 d-flex flex-column align-items-lg-end">

                <!-- Subtotal -->
                <div class="mb-3 w-100" style="max-width: 200px;">
                    <input type="number" id="casillero-subtotal"
                           class="form-control"
                           placeholder="0.00"
                           min="0" step="0.01">
                </div>

                <!-- Botones -->
                <div class="d-flex gap-3 mt-2">

                    <a href="/cobro/cobrar" class="btn btn-light">
                        Cancelar
                    </a>

                    <button type="submit"
                            data-kt-ecommerce-settings-type="submit"
                            class="btn btn-primary">
                        <span class="indicator-label">Guardar</span>
                        <span class="indicator-progress">
                            Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>

                </div>

            </div>

        </div>

    </form>

</div>
            <!--end:::Tab pane-->

           
        <!--end:::Tab content-->




         <!--begin:::Tab pane-->
<div class="tab-pane fade" id="cobrar" role="tabpanel">

    <div class="row ">  <!-- 🚀 CENTRA TODA LA SECCIÓN -->
        <div class="col-lg-4">

            <form>
                <div style="border: 2px solid white; border-radius: 30px; padding: 10px;">

                    <div class="table-responsive mb-8">
                        <table class="table align-middle gs-0 gy-4 my-0">
                            <thead>
                                <tr>
                                    <th class="min-w-100px"></th>
                                    <th class="w-200px"></th>
                                    <th class="w-60px"></th>
                                </tr>
                            </thead>

                            <tbody>

                                <h2 class="text-center">Datos de cobro</h2>
                                <br>

                                <div class="form-floating col-lg-12 mb-4">
                                    <input type="text" class="form-control form-control-solid" name="cajero" id="cajero"
                                           placeholder="Cajero" value="{{ Auth::user()->name }}" readonly />
                                    <label for="Cajero">Cajero</label>
                                </div>

                                <div class="form-floating col-lg-12 mb-4">
                                    <input type="text" class="form-control form-control-solid" name="fecha_entrega"
                                           id="fecha_entrega" value="{{ \Carbon\Carbon::now()->format('j/n/Y') }}" readonly />
                                    <label for="fecha_entrega">Fecha de pago</label>
                                </div>

                                <div class="form-floating col-lg-12 mb-4">
                                    <input type="text" name="agencia" id="agencia"
                                           class="form-control form-control-solid"
                                           value="{{ $empleado[0]->agencia }}" readonly />
                                    <label for="agencia" style="padding-left: 25px;">Agencia</label>
                                </div>

                                <div class="form-floating col-lg-12 mb-4">
                                    <select class="form-select form-select-solid" name="metodo" id="metodo" required>
                                        <option value="Efectivo">Efectivo</option>
                                        <option value="Transferencia_empresa">Transferencia a la empresa</option>
                                        <option value="Transferencia_comercio">Transferencia al comercio</option>
                                    </select>
                                    <label for="metodo">Método de pago</label>
                                </div>

                                <div class="form-floating col-lg-12 mb-4">
                                    <input type="text" class="form-control form-control-solid" name="total" id="total"
                                           value="0.00" readonly />
                                    <label for="total">Subtotal</label>
                                </div>

                                <div class="form-floating col-lg-12 mb-4">
                                    <input type="text" class="form-control form-control-solid" name="descuento"
                                           id="descuento" placeholder="0.00"  />
                                    <label for="descuento">Descuento</label>
                                </div>

                                <div class="form-floating col-lg-12 mb-4">
                                    <textarea class="form-control form-control-solid" name="nota" id="nota"
                                              placeholder="Nota"></textarea>
                                    <label for="nota" style="padding-left: 25px;">Nota</label>
                                </div>

                                                            <div class="row mb-8">
                                                                    <!-- Content -->
                                                                  
                                                                   <div class="col-6 d-flex align-items-center justify-content-end">
                                                                    <span class="form-label">Guias</span>
                                                                    </div>
                                                                     <div class="col-6">
                                                                    <input type="text" name="guias" id="guias" class="form-control form-control-solid" placeholder="0" />
                                                                    </div>
                                                                </div>

                                                               
                                                               
                                                                </div>

                                

                                <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-5">
                                                                    <!-- Content -->
                                                                    <div class="fs-6 fw-bold text-white">
                                                                        <span class="d-block lh-1 mb-2">Subtotal</span>
                                                                        <span class="d-block mb-2">Descuento</span>
                                                                        <span class="d-block fs-2qx lh-1">Total</span>
                                                                    </div>
                                                                    <!-- Content -->
                                                                    <div class="fs-6 fw-bold text-white text-end">
                                                                        
                                                                        <span id="stotal" name="stotal" class="d-block lh-1 mb-2" data-kt-pos-element="total">$</span>
                                                                        <span id="sdescuento" name="sdescuento" class="d-block mb-2" data-kt-pos-element="discount">$0</span>
                                                                        <span class="d-block fs-2qx lh-1" id="totalito" name="totalito" data-kt-pos-element="tot1">$</span>
                                                                                                                                               
                                                                    </div>
                                                                 </div>

                                                                <div class="row mb-8">
                                                                    <!-- Content -->
                                                                  
                                                                   <div class="col-6 d-flex align-items-center justify-content-end">
                                                                    <span class="form-label">Recibido</span>
                                                                    </div>
                                                                     <div class="col-6">
                                                                    <input type="text" name="recibido" id="recibido" class="form-control form-control-solid" placeholder="$0.00" />
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                <div class="col-6 d-flex align-items-center justify-content-end">
                                                                    <span class="form-label">Cambio</span>
                                                                </div>
                                                                <div class="col-6">
                                                                    <!-- Visible SOLO para mostrar con $ -->
                                                                    <input type="text" id="cambio_mostrado" class="form-control form-control-solid" placeholder="$0.00" readonly/>

                                                                    <!-- Oculto: este se manda al backend sin símbolos -->
                                                                    <input type="hidden" name="cambio" id="cambio_num" value="0">
                                                                </div>
                                                                </div>
                            </tbody>
                        </table>
                    </div>

                    <div class="modal-footer">
                        <div class="d-flex justify-content-between w-100">
                            <button type="submit" id="pagadito" class="btn btn-success flex-grow-1 mx-2">Cobrar</button>
                            <button type="button" class="btn btn-secondary flex-grow-1 mx-2 btn-cancelar"
                                    data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>

                </div>
            </form>

        </div>
    </div>

</div>
<!--end:::Tab pane-->
        </div>

    </div>

				<!--end::Card body-->
			
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--begin::Drawers-->
	
	
		<!--end::Modal dialog-->
	</div>
    </div></div></div>
	
	










	<!--begin::Global Javascript Bundle(mandatory for all pages)-->

<script>
document.addEventListener("DOMContentLoaded", function () {
    const comercio = @json($comercio->comercio);

    // 🔹 Identificadores por tipo
    const tiposEnvio = [
        { clave: 'personalizado', id: 'personalizado' },
        { clave: 'puntofijo', id: 'puntofijo' },
        { clave: 'departamental', id: 'personalizado-departamental' },
        { clave: 'casillero', id: 'casillero' }
    ];

    // 🔹 Estructuras principales
    const listas = { personalizado: [], puntofijo: [], departamental: [], casillero: [] };
    const subtotales = { personalizado: 0, puntofijo: 0, departamental: 0, casillero: 0 };
    const lectores = {}; // un lector independiente por pestaña

    // === Inicialización por pestaña ===
    tiposEnvio.forEach(({ clave, id }) => {
        const inputQR = document.querySelector(`#${id}-qr-input`);
        const readerDiv = document.querySelector(`#${id}-qr-reader`);
        const tabla = document.querySelector(`#${id}-tabla tbody`);
        const subtotalInput = document.querySelector(`#${id}-subtotal`);

        if (!inputQR || !readerDiv) return;

        inputQR.addEventListener("click", async function () {

            // 🔸 Detener cualquier lector activo
            for (const key in lectores) {
                try {
                    await lectores[key].stop();
                    const otherReader = document.querySelector(`#${tiposEnvio.find(t => t.clave === key).id}-qr-reader`);
                    if (otherReader) otherReader.style.display = "none";
                } catch (_) {}
            }

            // 🔸 Crear lector si no existe
            if (!lectores[clave]) {
                lectores[clave] = new Html5Qrcode(`${id}-qr-reader`);
            }

            readerDiv.style.display = "block";
            const config = { fps: 10, qrbox: { width: 250, height: 250 } };

            try {
                await lectores[clave].start(
                    { facingMode: "environment" },
                    config,
                    async (codigo) => {

                        await lectores[clave].stop();
                        readerDiv.style.display = "none";
                        inputQR.value = codigo;

                        // 🔹 VALIDACIÓN GLOBAL DE DUPLICADO
                        const duplicadoGlobal = Object.entries(listas)
                            .find(([_, lista]) => lista.includes(codigo));

                        if (duplicadoGlobal) {
                            const tipoExistente = duplicadoGlobal[0];
                            Swal.fire({
                                icon: 'warning',
                                title: 'Duplicado',
                                text: `La guía ${codigo} ya fue agregada en el tipo "${tipoExistente.toUpperCase()}".`,
                                toast: true,
                                position: 'top-end',
                                timer: 2000,
                                showConfirmButton: false
                            });
                            return;
                        }

                        // 🔹 Verificar duplicado en la base de datos
                        try {
                            const res = await fetch("{{ route('envios.verificar') }}", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                },
                                body: JSON.stringify({ guia: codigo })
                            });

                            const data = await res.json();
                            if (data.exists) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Guía ya registrada',
                                    text: `La guía ${codigo} ya existe en el sistema.`,
                                    toast: true,
                                    position: 'top-end',
                                    timer: 2000,
                                    showConfirmButton: false
                                });
                                return;
                            }

                        } catch (err) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error de conexión',
                                text: 'No se pudo verificar la guía en la base de datos.',
                                toast: true,
                                position: 'top-end',
                                timer: 2000,
                                showConfirmButton: false
                            });
                            return;
                        }

                        // 🔹 Agregar guía si es válida
                        listas[clave].push(codigo);
                        tabla.insertAdjacentHTML('beforeend', `
                            <tr>
                                <td>${codigo}</td>
                                <td>${clave.charAt(0).toUpperCase() + clave.slice(1)}</td>
                                <td>
                                    <button class="btn btn-sm btn-danger btn-quitar"
                                            data-tipo="${clave}"
                                            data-codigo="${codigo}">
                                        Borrar
                                    </button>
                                </td>
                            </tr>
                        `);
                    }
                );
            } catch (err) {
                console.error("Error al iniciar cámara:", err);
            }
        });

        // Subtotales
        if (subtotalInput) {
            subtotalInput.addEventListener("input", () => {
                subtotales[clave] = parseFloat(subtotalInput.value) || 0;
                actualizarTotalGlobal();
            });
        }
    });

    // === Eliminar filas ===
    document.body.addEventListener("click", e => {
        if (e.target.classList.contains("btn-quitar")) {
            const tipo = e.target.dataset.tipo;
            const codigo = e.target.dataset.codigo;
            listas[tipo] = listas[tipo].filter(c => c !== codigo);
            e.target.closest("tr").remove();
        }
    });

    // === Botón guardar por pestaña ===
    document.querySelectorAll("form.guardar-envios").forEach((form, index) => {
        form.addEventListener("submit", e => {
            e.preventDefault();
            const nextTab = document.querySelectorAll('[data-bs-toggle="tab"]')[index + 1];
            if (nextTab) new bootstrap.Tab(nextTab).show();
        });
    });

    // === Actualizar total global ===
    function actualizarTotalGlobal() {
        const total = Object.values(subtotales).reduce((a, b) => a + b, 0);
        document.getElementById("total").value = total.toFixed(2);
        actualizarCambio();
    }

    // === Botón C O B R A R ===
    document.getElementById("pagadito").addEventListener("click", async function (e) {
        e.preventDefault();

        const total = parseFloat(document.getElementById("total").value) || 0;
        const recibido = parseFloat(document.getElementById("recibido").value) || 0;
        const cambio = recibido - total;

        const cantidades = {
            personalizado: listas.personalizado.length,
            puntofijo: listas.puntofijo.length,
            departamental: listas.departamental.length,
            casillero: listas.casillero.length
        };

        const payload = {
            comercio: comercio,
            tipos: listas,
            subtotales: subtotales,
            cantidades: cantidades,
            total: total,
            recibido: recibido,
            cambio: cambio >= 0 ? cambio : 0,
            metodo: document.getElementById("metodo").value,
            agencia: document.getElementById("agencia").value,
            nota: document.getElementById("nota").value,
            cajero: document.getElementById("cajero").value
        };

        try {
            const res = await fetch("{{ route('cobros.cobrar') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify(payload)
            });

            const text = await res.text();
            console.log("📦 Servidor:", text);

            if (res.ok) {
                const data = JSON.parse(text);

                // Abrir ticket
                window.open(`/cobros/ticket/${data.ticket_id}`, "_blank");

                // Redirigir vista principal
                window.location.href = "{{ route('cobro') }}";

            } else {
                throw new Error("Error al procesar el cobro");
            }
        } catch (err) {
            console.error("❌ Error:", err);
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Ocurrió un error al intentar guardar."
            });
        }
    });
});

// === Cálculo de cambio ===
const inputTotal = document.getElementById("total");
const inputRecibido = document.getElementById("recibido");
const inputCambio = document.getElementById("cambio");

function actualizarCambio() {
    const total = parseFloat(inputTotal.value) || 0;
    const recibido = parseFloat(inputRecibido.value) || 0;
    const cambio = recibido - total;

    if (recibido === 0) {
        inputCambio.value = "0.00";
        inputCambio.classList.remove("is-valid", "is-invalid");
        return;
    }

    if (cambio >= 0) {
        inputCambio.value = cambio.toFixed(2);
        inputCambio.classList.add("is-valid");
        inputCambio.classList.remove("is-invalid");
    } else {
        inputCambio.value = "0.00";
        inputCambio.classList.add("is-invalid");
        inputCambio.classList.remove("is-valid");
    }
}
inputRecibido.addEventListener("input", actualizarCambio);
</script>

    <!--begin::Custom Javascript(used for this page only)-->

<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	   {{-- Global Metronic Scripts --}}
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>