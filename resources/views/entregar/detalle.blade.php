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
                                               
                                                ENVIOS POR ENTREGARR
                                               
                                            </span>
                                            <span class="text-muted mt-1 fw-semibold fs-7">
                                                <!-- Puedes agregar un subtítulo dinámico aquí si lo necesitas -->
                                            </span>
                                        </h3>
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Body-->

                                    <div class="card-body py-3">
                                        <div class="table-responsive" style="overflow-x: auto; padding: 0;">

                                            <!--begin::Main wrapper-->
                                            <div id="kt_docs_search_handler_basic"
                                                data-kt-search-keypress="true"
                                                data-kt-search-min-length="2"
                                                data-kt-search-enter="true"
                                                data-kt-search-layout="inline">






                                            </div>
                                            <!--end::Main wrapper-->


<div class="card">
    <!--begin::Card header-->
    <div class="card-header">
        <!--begin::Card title-->
        <div class="card-title fs-3 fw-bold">Guia: {{ $envio[0]->guia }}</div>
        <!--end::Card title-->
        <a href="/dashboard" class="w-200" style="float:right; margin-top:20px; font-size:20px;">
            <i class="fas fa-window-close" style="font-size:40px; color:red;"></i>
        </a>
    </div>

                             <div class="col-sm-12 text-center mt-5">                                 
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(https://meloexpress.site/fotos/{{$envio[0]->foto1}})"></div>
                                    </div>
                                </div>  
                               

    <!--end::Card header-->

    <!--begin::Form-->
    <form action="/guardandofoto" method="POST" id="kt_account_profile_details_form" class="form" enctype="multipart/form-data">
                                @csrf
                            @method('GET')
                        <input type="text" value="{{ $envio[0]->guia }}" class="visually-hidden" name="guia2" id="guia2">
        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-5">
                 <!--begin::Row--> 
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Comercio:</div>
                </div>
                <!--end::Col-->

                 <!--begin::Col-->
                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ $envio[0]->comercio }}" readonly>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Destinatario:</div>
                </div>
                <!--end::Col-->

                 <!--begin::Col-->
                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ $envio[0]->destinatario }}" readonly>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Direccion:</div>
                </div>
                <!--end::Col-->

                 <!--begin::Col-->
                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ $envio[0]->direccion }}" readonly>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
            </div>
            <!--end::Row-->

             <!--begin::Row-->
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Nota:</div>
                </div>
                <!--end::Col-->

                 <!--begin::Col-->
                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ $envio[0]->nota }}" readonly>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
            </div>
            <!--end::Row-->

             <!--begin::Row-->
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">Total:</div>
                </div>
                <!--end::Col-->

                 <!--begin::Col-->
                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                    <input type="text" class="form-control form-control-solid" name="name" value="{{ $envio[0]->total }}" readonly>
                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
            </div>
            <!--end::Row-->

             <!--begin::Row-->
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3"><i class="fas fa-map-marked-alt" style="font-size: 30px;"></i> Ver Ubicación</div>
                </div>
                <!--end::Col-->

            </div>
            <!--end::Row-->
             
            </div>
            <br>
            <!--end::Row-->
            
<div class="row justify-content-end">
    <!-- Botón Guardar -->
<div class="row justify-content-end">
    <div class="col-sm-12 col-md-2 py-2">
        <button type="submit" class="btn btn-success w-100" id="kt_project_settings_submit">Entregar</button>
    </div>
</div>
    <!-- Botón Borrar -->
    <div class="col-sm-12 col-md-2 py-2">
        <a href="/dashboard">
        <button type="button" class="btn btn-light btn-active-light-primary w-100">
       
    Cancelar
</button>
</a>
    </div>

    <!-- Botón Capturar foto -->
    
</div>


       </form>
    <!--end:Form-->
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
    </div></div></div>
	
	
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>

    <script>
document.addEventListener("DOMContentLoaded", function() {
    const qrButton = document.getElementById("qr-button");
    const qrReader = document.getElementById("qr-reader");
    const qrInput = document.getElementById("qr-input");

    let html5QrCode;

    qrInput.addEventListener("click", async function() {
        if (!html5QrCode) {
            html5QrCode = new Html5Qrcode("qr-reader");
        }

        qrReader.style.display = "block";

        const config = { fps: 10, qrbox: { width: 250, height: 250 } };

        try {
            await html5QrCode.start(
                { facingMode: "environment" }, // Usa cámara trasera
                config,
                qrCodeMessage => {
                    qrInput.value = qrCodeMessage;
                    html5QrCode.stop().then(() => {
                        qrReader.style.display = "none";
                    });

                     window.location.href = `/envio/buscar?codigo=${encodeURIComponent(qrCodeMessage)}`;
                }
            );
        } catch (err) {
            console.error("Error al iniciar cámara:", err);
        }
    });
});
</script>

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