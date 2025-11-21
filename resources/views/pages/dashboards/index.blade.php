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
						<img alt="Logo" src="assets/media/logos/logo.png" class="h-40px" />
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
				<!--begin::Header mobile-->

<!--end::Header mobile-->
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
							<div class="col-xl-4">
								<!--begin::Misc Widget 1-->
								<div class="row mb-5 mb-xl-8 g-5 g-xl-8">
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Card-->
										<div class="card card-stretch">
											<!--begin::Link-->
											<a href="/entregarenvio" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
												<i class="ki-duotone ki-fingerprint-scanning fs-2tx mb-5 ms-n1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
												</i>
												<span class="fs-4 fw-bold">Entregar</span>
											</a>
											<!--end::Link-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Card-->
										<div class="card card-stretch">
											<!--begin::Link-->
											<a href="/cobro/cobrar" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
												<i class="ki-duotone ki-gift fs-2tx mb-5 ms-n1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
												<span class="fs-4 fw-bold">Cobrar</span>
											</a>
											<!--end::Link-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
								
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Card-->
										<div class="card card-stretch">
											<!--begin::Link-->
											<a href="/pago/pagar" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
												<i class="ki-duotone ki-fingerprint-scanning fs-2tx mb-5 ms-n1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
												</i>
												<span class="fs-4 fw-bold">Pagar</span>
											</a>
											<!--end::Link-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Card-->
										<div class="card card-stretch">
											<!--begin::Link-->
											<a href="/caja/cajero" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
												<i class="ki-duotone ki-abstract-26 fs-2tx mb-5 ms-n1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<span class="fs-4 fw-bold">Caja</span>
											</a>
											<!--end::Link-->
										</div>
										<!--end::Card-->
									</div>


									<div class="col-6">
										<!--begin::Card-->
										<div class="card card-stretch">
											<!--begin::Link-->
											<a href="/entregarenlote" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
												<i class="ki-duotone ki-fingerprint-scanning fs-2tx mb-5 ms-n1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
													<span class="path5"></span>
												</i>
												<span class="fs-4 fw-bold">Entrega múltiple</span>
											</a>
											<!--end::Link-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Card-->
										<div class="card card-stretch">
											<!--begin::Link-->
											<a href="/envios/noentregados" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
												<i class="ki-duotone ki-abstract-26 fs-2tx mb-5 ms-n1">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<span class="fs-4 fw-bold">No entregados</span>
											</a>
											<!--end::Link-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
									</div>

									

									<!-- Fila nueva para centrar un botón -->
					
								


							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-8 ps-xl-12">
								<!--begin::Engage widget 1-->
								<div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px bg-primary mb-5 mb-xl-8" style="background-color:white !important; " dir="ltr">
									<!--begin::Body-->
									<!--begin::Header-->
									<div class="card-header border-0 pt-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bold fs-3 mb-1">Dashboard</span>
											<span class="text-muted mt-1 fw-semibold fs-7"></span>
										</h3>

									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body py-3">
										<div class="tab-content">
											<!--begin::Tap pane-->
											<div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
												<!--begin::Table container-->
												<div class="table-responsive">
													<!--begin::Table-->
													<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4" id="kt_ecommerce_report_shipping_table">
														<!--begin::Table head-->
														<thead>
															<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
																<th >Guia</th>
																<th class="min-w-150px">Comercio</th>
																<th class="min-w-150px">Destinatario</th>
																<th class="min-w-150px">Fecha</th>
																<th >Precio</th>
																<th >Estado</th>
															</tr>
														</thead>
														<!--end::Table head-->


														<!--begin::Table body-->
														<tbody class="fw-semibold text-gray-600">
															@php
                                                    $estadoColores = [
                                                    'En ruta' => '#F39C12',
                                                    'Entregado' => '#2ECC71',
                                                    'Fallido' => '#E74C3C',
                                                    'No entregado' => '#C0392B',
                                                    'Reprogramado' => '#F1C40F',
                                                    'Cambio' => '#3498DB'
                                                    ];
                                                    @endphp
															@foreach ($envios as $envio)
															 @php
                                                    $estado = $envio->estado;
                                                    $color = $estadoColores[$estado] ?? '#BDC3C7';
                                                    @endphp
															<tr>
																<td><a href="/detalles/{{ $envio->guia }}" class="text-gray-600 text-hover-primary">{{ $envio->guia }}</a></td>
																<td>{{ $envio->comercio }}</td>
                                                        <td>{{ $envio->destinatario }}</td>
														 <td data-order="{{ $envio->fecha_entrega }}">
                                                            {{ date('d M Y, h:i a', strtotime($envio->fecha_entrega)) }}
                                                        </td>
														<td class="text-end">${{ number_format($envio->precio, 2) }}</td>
														<td class="text-center">
                                                            <span class="badge" style="background-color: {{ $color }}; color: white; padding: 8px 8px; border-radius: 6px;">{{ $estado }}</span>
                                                        </td>
                                                       

															</tr>
														

															@endforeach
														</tbody>
														<!--end::Table body-->
													</table>
												</div>
												<!--end::Table-->
											</div>
											<!--end::Tap pane-->
										
										</div>
									</div>
									<!--end::Body-->
								</div>
								<!--end::Engage widget 1-->
							
							</div>
						</div>
						<!--end::Row-->

						<!--end::Tables Widget 5-->

						<!--end::Row-->
					</div>
					<!--end::Container-->
				</div>
			
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
	
	

	<!--begin::Global Javascript Bundle(mandatory for all pages)-->


	   {{-- Global Metronic Scripts --}}
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/js/custom/apps/ecommerce/reports/shipping/shipping.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>