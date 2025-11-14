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

<body id="kt_body" class="app-default">
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

	<x-default-layout>
	<div class="d-flex flex-column flex-root pt-5">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
		
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
			
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
											<a href="/" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
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
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-6">
										<!--begin::Card-->
										<div class="card card-stretch">
											<!--begin::Link-->
											<a href="/filtronoentregado" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
												<i class="ki-duotone ki-basket fs-2tx mb-5 ms-n1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
												<span class="fs-4 fw-bold">No entregados</span>
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
											<a href="/filtrocambio" class="btn btn-flex btn-text-gray-800 btn-icon-gray-400 btn-active-color-primary bg-body flex-column justfiy-content-start align-items-start text-start w-100 p-10">
												<i class="ki-duotone ki-gift fs-2tx mb-5 ms-n1">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
												<span class="fs-4 fw-bold">Cambios</span>
											</a>
											<!--end::Link-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Col-->
								</div>


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
													<table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
														<!--begin::Table head-->
														<thead>
															<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
																<th class="p-0 w-170px">Guia</th>
																<th class="p-0 min-w-100px">Comercio</th>
																<th class="p-0 min-w-100px">Destinatario</th>
																<th class="p-0 min-w-110px">Fecha</th>
																<th class="p-0 min-w-50px">Precio</th>
																<th class="p-0 min-w-50px">Estado</th>
															</tr>
														</thead>
														<!--end::Table head-->


														<!--begin::Table body-->
														<tbody>


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
</x-default-layout>

	   {{-- Global Metronic Scripts --}}
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>