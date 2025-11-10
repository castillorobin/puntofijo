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
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
		
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
			
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

            <!--begin:::Tab item-->
            <li class="nav-item" role="presentation">
                <a class="nav-link text-active-primary d-flex align-items-center pb-5" data-bs-toggle="tab" href="#kt_ecommerce_settings_customers" aria-selected="false" role="tab" tabindex="-1">
                    <i class="ki-duotone ki-people fs-2 me-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i> Guias
                </a>
            </li>

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
                
    
<!--begin::Form-->
<form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
    <!--begin::Heading-->
    <div class="row mb-7">
        <div class="col-md-9 offset-md-3">
            <div class="qr-container d-flex align-items-center">
											
    <input id="qr-input" type="text" placeholder="Escanear código QR" readonly class="form-control me-2" style="max-width: 300px;" />

    
</div>
<div id="qr-reader" style="width:100%; display:none;" class="border rounded p-2 mb-3"></div>
        </div>
    </div>
    
   <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_customers_table" style="width: 100%;"><colgroup><col data-dt-column="0" style="width: 33.5938px;"><col data-dt-column="1" style="width: 125px;"><col data-dt-column="2" style="width: 145.047px;"><col data-dt-column="3" style="width: 125px;"><col data-dt-column="4" style="width: 125px;"><col data-dt-column="5" style="width: 125px;"><col data-dt-column="6" style="width: 97.2188px;"></colgroup>
    <thead>
        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
			
			<th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title"># de guía</span><span class="dt-column-order" role="button" aria-label="Customer Name: Activate to sort" tabindex="0"></span></div></th>
			<th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title">Tipo de paquete</span><span class="dt-column-order" role="button" aria-label="Email: Activate to sort" tabindex="0"></span></div></th>
			<th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title">Accion</span><span class="dt-column-order" role="button" aria-label="Company: Activate to sort" tabindex="0"></span></div></th>
			</tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
	
	</tbody>
<tfoot></tfoot></table>


    <!--begin::Action buttons-->
    <div class="row py-5">
        <div class="col-md-9 offset-md-3">
            <div class="d-flex">
                <!--begin::Button-->
                <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                   Cancelar
                </button>
                <!--end::Button-->

                <!--begin::Button-->
                <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Guardar
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
                <!--end::Button-->
            </div>
        </div>
    </div>
    <!--end::Action buttons-->
</form>
<!--end::Form-->            </div>
            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
               
<!--begin::Form-->
<form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
    <!--begin::Heading-->
    <div class="row mb-7">
        <div class="col-md-9 offset-md-3">
            <div class="qr-container d-flex align-items-center">
											
    <input id="qr-input" type="text" placeholder="Escanear código QR" readonly class="form-control me-2" style="max-width: 300px;" />

    
</div>
<div id="qr-reader" style="width:100%; display:none;" class="border rounded p-2 mb-3"></div>
        </div>
    </div>
    
   <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_customers_table" style="width: 100%;"><colgroup><col data-dt-column="0" style="width: 33.5938px;"><col data-dt-column="1" style="width: 125px;"><col data-dt-column="2" style="width: 145.047px;"><col data-dt-column="3" style="width: 125px;"><col data-dt-column="4" style="width: 125px;"><col data-dt-column="5" style="width: 125px;"><col data-dt-column="6" style="width: 97.2188px;"></colgroup>
    <thead>
        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
			
			<th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title"># de guía</span><span class="dt-column-order" role="button" aria-label="Customer Name: Activate to sort" tabindex="0"></span></div></th>
			<th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title">Tipo de paquete</span><span class="dt-column-order" role="button" aria-label="Email: Activate to sort" tabindex="0"></span></div></th>
			<th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title">Accion</span><span class="dt-column-order" role="button" aria-label="Company: Activate to sort" tabindex="0"></span></div></th>
			</tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
	
	</tbody>
<tfoot></tfoot></table>
    <!--begin::Action buttons-->
    <div class="row py-5">
        <div class="col-md-9 offset-md-3">
            <div class="d-flex">
                <!--begin::Button-->
                <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                    Cancelar
                </button>
                <!--end::Button-->

                <!--begin::Button-->
                <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Guardar
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
                <!--end::Button-->
            </div>
        </div>
    </div>
    <!--end::Action buttons-->
</form>
<!--end::Form-->            </div>
            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
                
<!--begin::Form-->
<form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
    <!--begin::Heading-->
    <div class="row mb-7">
        <div class="col-md-9 offset-md-3">
            <div class="qr-container d-flex align-items-center">
											
    <input id="qr-input" type="text" placeholder="Escanear código QR" readonly class="form-control me-2" style="max-width: 300px;" />

    
</div>
<div id="qr-reader" style="width:100%; display:none;" class="border rounded p-2 mb-3"></div>
        </div>
    </div>
    
   <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_customers_table" style="width: 100%;"><colgroup><col data-dt-column="0" style="width: 33.5938px;"><col data-dt-column="1" style="width: 125px;"><col data-dt-column="2" style="width: 145.047px;"><col data-dt-column="3" style="width: 125px;"><col data-dt-column="4" style="width: 125px;"><col data-dt-column="5" style="width: 125px;"><col data-dt-column="6" style="width: 97.2188px;"></colgroup>
    <thead>
        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
			
			<th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title"># de guía</span><span class="dt-column-order" role="button" aria-label="Customer Name: Activate to sort" tabindex="0"></span></div></th>
			<th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title">Tipo de paquete</span><span class="dt-column-order" role="button" aria-label="Email: Activate to sort" tabindex="0"></span></div></th>
			<th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title">Accion</span><span class="dt-column-order" role="button" aria-label="Company: Activate to sort" tabindex="0"></span></div></th>
			</tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
	
	</tbody>
<tfoot></tfoot></table>
    <!--begin::Action buttons-->
    <div class="row py-5">
        <div class="col-md-9 offset-md-3">
            <div class="d-flex">
                <!--begin::Button-->
                <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                    Cancelar
                </button>
                <!--end::Button-->

                <!--begin::Button-->
                <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Guardar
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
                <!--end::Button-->
            </div>
        </div>
    </div>
    <!--end::Action buttons-->
</form>
<!--end::Form-->            </div>
            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_ecommerce_settings_products" role="tabpanel">
           
<!--begin::Form-->
<form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
    <!--begin::Heading-->
    <div class="row mb-7">
        <div class="col-md-9 offset-md-3">
            <div class="qr-container d-flex align-items-center">
											
    <input id="qr-input" type="text" placeholder="Escanear código QR" readonly class="form-control me-2" style="max-width: 300px;" />

    
</div>
<div id="qr-reader" style="width:100%; display:none;" class="border rounded p-2 mb-3"></div>
        </div>
    </div>
    
   <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable" id="kt_customers_table" style="width: 100%;"><colgroup><col data-dt-column="0" style="width: 33.5938px;"><col data-dt-column="1" style="width: 125px;"><col data-dt-column="2" style="width: 145.047px;"><col data-dt-column="3" style="width: 125px;"><col data-dt-column="4" style="width: 125px;"><col data-dt-column="5" style="width: 125px;"><col data-dt-column="6" style="width: 97.2188px;"></colgroup>
    <thead>
        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
			
			<th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="1" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title"># de guía</span><span class="dt-column-order" role="button" aria-label="Customer Name: Activate to sort" tabindex="0"></span></div></th>
			<th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="2" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title">Tipo de paquete</span><span class="dt-column-order" role="button" aria-label="Email: Activate to sort" tabindex="0"></span></div></th>
			<th class="min-w-125px dt-orderable-asc dt-orderable-desc" data-dt-column="3" rowspan="1" colspan="1"><div class="dt-column-header"><span class="dt-column-title">Accion</span><span class="dt-column-order" role="button" aria-label="Company: Activate to sort" tabindex="0"></span></div></th>
			</tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
	
	</tbody>
<tfoot></tfoot></table>
    <!--begin::Action buttons-->
    <div class="row py-5">
        <div class="col-md-9 offset-md-3">
            <div class="d-flex">
                <!--begin::Button-->
                <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                    Cancelar
                </button>
                <!--end::Button-->

                <!--begin::Button-->
                <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Guardar
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
                <!--end::Button-->
            </div>
        </div>
    </div>
    <!--end::Action buttons-->
</form>
<!--end::Form-->            </div>
            <!--end:::Tab pane-->

            <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="kt_ecommerce_settings_customers" role="tabpanel">
                 
<!--begin::Form-->
<form id="kt_ecommerce_settings_general_customers" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
    <!--begin::Heading-->
    <div class="row mb-7">
        <div class="col-md-9 offset-md-3">
            <h2>Guias</h2>
        </div>
    </div>
    <!--end::Heading-->



    <!--begin::Action buttons-->
    <div class="row py-5">
        <div class="col-md-9 offset-md-3">
            <div class="d-flex">
                <!--begin::Button-->
                <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                    Cancelar
                </button>
                <!--end::Button-->

                <!--begin::Button-->
                <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Guardar
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
                <!--end::Button-->
            </div>
        </div>
    </div>
    <!--end::Action buttons-->
</form>
<!--end::Form-->            </div>
            <!--end:::Tab pane-->
        </div>
        <!--end:::Tab content-->




          <!--begin:::Tab pane-->
            <div class="tab-pane fade" id="cobrar" role="tabpanel">
                 
<!--begin::Form-->
<form id="kt_ecommerce_settings_general_customers" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
    <!--begin::Heading-->
    <div class="row mb-7">
        <div class="col-md-9 offset-md-3">
            <h2>Cobrar</h2>
        </div>
    </div>
    <!--end::Heading-->



    <!--begin::Action buttons-->
    <div class="row py-5">
        <div class="col-md-9 offset-md-3">
            <div class="d-flex">
                <!--begin::Button-->
                <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">
                    Cancelar
                </button>
                <!--end::Button-->

                <!--begin::Button-->
                <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Guardar
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
                <!--end::Button-->
            </div>
        </div>
    </div>
    <!--end::Action buttons-->
</form>
<!--end::Form-->            </div>
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
</x-default-layout>

	   {{-- Global Metronic Scripts --}}
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>