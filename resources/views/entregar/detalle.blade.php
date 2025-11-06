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
<style>
/* Estilo cuando el cambio es correcto (verde) */
input.is-valid {
    border: 2px solid #28a745 !important;
    background-color: #e6f9ec !important;
    color: #155724 !important;
    font-weight: 600;
}

/* Estilo cuando el dinero no alcanza (rojo) */
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
                                               
                                                ENVIOS POR ENTREGAR
                                               
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
        <a href="/dashboard" class="w-200" style="float:right; margin-top:20px; font-size:20px;">
            <i class="fas fa-window-close" style="font-size:40px; color:red;"></i>
        </a>
    </div>

                            <div class="col-sm-12 text-center mt-5">
    <div class="image-input image-input-outline cursor-pointer" 
         data-kt-image-input="true"
         style="background-image: url('assets/media/svg/avatars/blank.svg');"
         data-bs-toggle="modal" 
         data-bs-target="#modalVerFoto">
        <div class="image-input-wrapper w-125px h-125px border border-2 border-primary shadow-sm hover-scale" 
             style="background-image: url('https://meloexpress.site/fotos/{{$envio[0]->foto1}}'); background-size: cover; background-position: center;">
        </div>
    </div>
</div>
                               

    <!--end::Card header-->

    <!--begin::Form-->
    
                        <input type="text" value="{{ $envio[0]->guia }}" class="visually-hidden" name="guia2" id="guia2">
        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-5">
                 <!--begin::Row--> 
            <div class="row mb-8 align-items-center">
    <!-- Etiqueta -->
    <div class="col-xl-3">
        <div class="fs-6 fw-semibold mt-2 mb-3">Comercio: </div>
    </div>

    <!-- Input y teléfono -->
    <div class="col-xl-9 d-flex align-items-center fv-row fv-plugins-icon-container">
        <input type="text" 
               class="form-control form-control-solid me-2" 
               name="name" 
               value="{{ $envio[0]->comercio }}" 
               readonly>

        @if(!empty($comercio->telefono))
            <a href="tel:{{ $comercio->telefono }}" 
               class="btn btn-icon btn-light-success" 
               title="Llamar al destinatario">
                <i class="fas fa-phone"></i>
            </a>
        @endif
    </div>
</div>
            <!--end::Row-->
            <div class="row mb-8 align-items-center">
    <!-- Etiqueta -->
    <div class="col-xl-3">
        <div class="fs-6 fw-semibold mt-2 mb-3">Destinatario:</div>
    </div>

    <!-- Input y teléfono -->
    <div class="col-xl-9 d-flex align-items-center fv-row fv-plugins-icon-container">
        <input type="text" 
               class="form-control form-control-solid me-2" 
               name="name" 
               value="{{ $envio[0]->destinatario }}" 
               readonly>

        @if(!empty($envio[0]->telefono))
            <a href="tel:{{ $envio[0]->telefono }}" 
               class="btn btn-icon btn-light-success" 
               title="Llamar al destinatario">
                <i class="fas fa-phone"></i>
            </a>
        @endif
    </div>
</div>
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
                   <div class="fs-6 fw-semibold mt-2 mb-3">
    <a href="#" class="btn btn-light-primary fw-bold" data-bs-toggle="modal" data-bs-target="#modalVerUbicacion">
        <i class="fas fa-map-marked-alt" style="font-size: 25px;"></i> &nbsp; Ver Ubicación
    </a>
</div>
                </div>
                <!--end::Col-->

            </div>
            <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-semibold mt-2 mb-3">
    <a href="#" class="btn btn-light-primary fw-bold" data-bs-toggle="modal" data-bs-target="#modalHacerCambio">
        <i class="fas fa-exchange-alt" style="font-size: 25px;"></i> &nbsp; Hacer cambio
    </a>
</div>
                </div>
                <!--end::Col-->

            </div>
            <!--end::Row
  
                -->
              <div class="row mb-8">
                 <!--begin::Col-->
               
                <div class="col-xl-3">
             <!-- Botón Comprobante de entrega -->
<div class="fs-6 fw-semibold mt-2 mb-3 ">
    <button type="button" class="btn btn-light-primary fw-bold" id="btn-abrir-camara">
        <i class="fas fa-camera" style="font-size: 25px;"></i> &nbsp; Comprobante de Entrega
    </button>
</div>

</div>

<!-- Sección de cámara y previsualización -->
<div id="camera-section-entrega" class="text-center" style="display:none;">
    <video id="camera-preview-entrega" width="100%" height="auto" autoplay playsinline class="rounded border mb-3"></video>
    <canvas id="photo-canvas-entrega" style="display:none;"></canvas>

    <div class="mt-3">
        <button type="button" class="btn btn-warning" id="btn-capturar-entrega">
            <i class="fas fa-camera"></i> Tomar Foto
        </button>
    </div>
</div>

<!-- Contenedor de previsualización -->
<div id="photo-preview-container" class="mt-4 position-relative text-center" style="display:none;">
    <button type="button" id="btn-borrar-foto" 
            class="btn btn-icon btn-sm btn-active-light-danger position-absolute top-0 end-0 m-2" 
            title="Eliminar foto">
        <i class="fas fa-times fs-4 text-danger"></i>
    </button>
    <h6 class="text-muted mb-2">Previsualización:</h6>
    <img id="photo-preview-entrega" class="img-fluid rounded border shadow-sm" alt="Previsualización de la foto">
</div>

                </div>
                <!--end::Col-->

            </div>
            <!--end::Row-->
             
            </div>
            <br>
            <!--end::Row-->
            
<div class="row justify-content-end">
    <!-- Botón Guardar -->


    <div class="col-sm-12 col-md-2 py-2">
        <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#kt_modal_2 " >Entregar</button>
    </div>

    <!-- Botón Borrar -->
    <div class="col-sm-12 col-md-2 py-2">
        <a href="/dashboard">
        <button type="button" class="btn btn-light w-100">
            Cancelar
</button>
</a>
    </div>

    <!-- Botón Capturar foto -->
    
</div>


    
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





<!--begin::Modal - Ver Ubicación-->
<div class="modal fade" id="modalVerUbicacion" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-500px">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">
                    <i class="fas fa-map-marked-alt"></i> &nbsp; Ubicación del Paquete
                </h5>
                <button type="button" class="btn btn-icon btn-sm btn-active-light-danger" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="modal-body py-5">
                <div class="mb-3">
                    <label class="fw-semibold text-gray-700">Ubicacion:</label>
                    <input type="text" class="form-control form-control-solid" value="{{ $envio[0]->agenciaubi }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold text-gray-700">Tipo de Ubicación:</label>
                    <input type="text" class="form-control form-control-solid" value="{{ $envio[0]->ubicacion }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold text-gray-700">Caja:</label>
                    <input type="text" class="form-control form-control-solid" value="{{ $envio[0]->caja }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold text-gray-700">Rack:</label>
                    <input type="text" class="form-control form-control-solid" value="{{ $envio[0]->rack }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold text-gray-700">Nivel:</label>
                    <input type="text" class="form-control form-control-solid" value="{{ $envio[0]->nivel }}" readonly>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold text-gray-700">Tarima:</label>
                    <input type="text" class="form-control form-control-solid" value="{{ $envio[0]->tarima }}" readonly>
                </div>
            </div>

            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--end::Modal - Ver Ubicación-->
<!--begin::Modal - Hacer cambio-->
<div class="modal fade" id="modalHacerCambio" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-600px">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-dark">
                    <i class="fas fa-exchange-alt"></i> &nbsp; Hacer cambio
                </h5>

                <button type="button" class="btn btn-icon btn-sm btn-active-light-danger" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form id="formHacerCambio" method="POST" action="{{ route('envios.cambio') }}">
                @csrf
                <div class="modal-body py-5">
                    <!-- Campo de guía con lectura QR -->
                     <input type="text" class="form-control form-control-solid" name="guiacambio" value="{{ $envio[0]->guia }}" hidden>
                    <div class="mb-3">
                        <label class="fw-semibold text-gray-700">Guía:</label>
                        <input type="text" id="qr-input-cambio" name="guia" class="form-control form-control-solid" placeholder="Escanea un código QR" readonly>
                    </div>

                    <div id="qr-reader-cambio" style="width:100%; display:none;" class="border rounded p-2 mb-3"></div>

                    <!-- Vista previa de cámara -->
                    <div id="camera-section" class="text-center" style="display:none;">
                        <video id="camera-preview" width="100%" height="auto" autoplay playsinline class="rounded border mb-3"></video>
                        <canvas id="photo-canvas" style="display:none;"></canvas>
                    </div>

                    <!-- Previsualización con opción de borrar -->
                    <div id="photo-preview-container-cambio" class="position-relative text-center" style="display:none;">
                        <button type="button" id="btn-borrar-foto-cambio" 
                                class="btn btn-icon btn-sm btn-active-light-danger position-absolute top-0 end-0 m-2"
                                title="Eliminar foto">
                            <i class="fas fa-times fs-4 text-danger"></i>
                        </button>
                        <img id="photo-preview" class="img-fluid rounded border shadow-sm" alt="Previsualización de la foto">
                    </div>

                    <!-- Campo oculto para la imagen base64 -->
                    <input type="hidden" name="foto_cambio" id="foto_cambio_base64">
                </div>

                <div class="modal-footer justify-content-end">
                    <button type="button" class="btn btn-secondary" id="btn-tomar-foto">
                        <i class="fas fa-camera"></i> Tomar foto
                    </button>
                    <button type="button" class="btn btn-success" id="btn-capturar-foto" style="display:none;">
                        <i class="fas fa-check"></i> Capturar
                    </button>
                    <button type="submit" class="btn btn-primary" id="btn-guardar-cambio">
                        <i class="fas fa-save"></i> Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Modal - Hacer cambio-->

<!--begin::Modal - Ver Foto-->
<div class="modal fade" id="modalVerFoto" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-transparent border-0 shadow-none">
            <div class="modal-body text-center position-relative p-0">
                <button type="button" class="btn btn-icon btn-sm btn-active-light-danger position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times fs-2 text-white"></i>
                </button>
                <img id="fotoAmpliada" src="https://meloexpress.site/fotos/{{$envio[0]->foto1}}" 
                     class="img-fluid rounded-3 shadow-lg" 
                     alt="Foto del paquete"
                     style="max-height: 85vh; object-fit: contain;">
            </div>
        </div>
    </div>
</div>
<!--end::Modal - Ver Foto-->









                                    <div class="modal fade" tabindex="-1" id="kt_modal_2">
                                    <div class="modal-dialog">
                                        <div class="modal-content shadow-none">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detalles del pago</h5>
                                                <form id="formHacerEntrega" method="POST" action="{{ route('envios.guardarentrega') }}">
                @csrf
  <input type="text" value="{{ $envio[0]->guia }}" class="visually-hidden" name="guiaentrega" id="guiaentrega">
                 <input type="hidden" name="foto_entrega" id="foto_entrega_base64">
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ki-duotone ki-cross"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>

                                            
                                                <div class="modal-body">
                                                    
                                                   
                                                        <div class="col-lg-12">
                                                            <div style="border: 2px solid white; border-radius: 30px; padding: 10px;">

                                                                <div class="table-responsive mb-8">
                                                                    <!--begin::Table-->
                                                                    <table class="table align-middle gs-0 gy-4 my-0">
                                                                        <!--begin::Table head-->
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="min-w-100px"></th>
                                                                                <th class="w-200px"></th>
                                                                                <th class="w-60px"></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <!--end::Table head-->
                                                                        <!--begin::Table body-->
                                                                        <tbody>
                                                                            <h2>Datos de pagar</h2>
                                                                            <br>
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <input type="text" class="form-control form-control-solid" name="cajero" id="cajero" placeholder="Cajero" value="{{ Auth::user()->name }}" required readonly />
                                                                                <label for="Cajero">Cajero</label>
                                                                                <div id="CajeroValidationFeedback" class="invalid-feedback">
                                                                                    Por favor ingrese el destinatario.
                                                                                </div>
                                                                            </div>
                                                                             <div class="form-floating col-lg-12 mb-4">
                                                                                <input type="text" class="form-control form-control-solid"  name="fecha_entrega" id="fecha_entrega" value="{{ \Carbon\Carbon::now()->format('j/n/Y') }}" readonly />
                                                                                <label for="fecha_entrega">Fecha de pago</label>
                                                                                <div id="fechaEntregaValidationFeedback" class="invalid-feedback">
                                                                                    Por favor seleccione una fecha de entrega.
                                                                                </div>
                                                                            </div>
                                                                             <div class="form-floating col-lg-12 mb-4">
                                        
                                        
                                                                                            
                                              <input type="text" name="agencia" id="agencia" class="form-control form-control-solid" value="{{$empleado[0]->agencia}}" readonly/>         
                                                    
                                                    <label for="cenvio" style="padding-left: 25px;">Agencia</label>
                                                </div>
                                                                        </div>
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <select class="form-select form-select-solid" name="metodo" id="metodo" required>
                                                                                    <option value="Efectivo">Efectivo</option>
                                                                                    
                                                                                    <option value="Transferencia_empresa">Transferencia a la empresa</option>
                                                                                    <option value="Transferencia_comercio">Transferencia al comercio</option>
                                                                                    
                                                                                </select>
                                                                                <label for="estado_envio">Método de pago</label>
                                                                                <div id="estadoEnvioValidationFeedback" class="invalid-feedback">
                                                                                    Por favor seleccione el método de pago.
                                                                                </div>
                                                                            </div>


                                                                             <div class="form-floating col-lg-12 mb-4">
                                                                                <input type="text" class="form-control form-control-solid" name="subtotal" id="sutota" value="{{ $envio[0]->total }}"  readonly/>
                                                                                <label for="Cajero">Subtotal</label>
                                                                                <div id="CajeroValidationFeedback" class="invalid-feedback">
                                                                                    Por favor ingrese el destinatario.
                                                                                </div>
                                                                            </div>
                                                                           
                                                                             <!-- Campo para la cantidad de descuento -->
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <input type="text" class="form-control form-control-solid" name="descuento" id="descuento" placeholder="Descuento" value="0"  />
                                                                                <label for="descuento" style="padding-left: 25px;">Descuento</label>
                                                                                <div class="invalid-feedback">Este campo es obligatorio y solo se permiten números.</div>
                                                                            </div>
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <textarea class="form-control form-control-solid" name="nota" id="nota" placeholder="Nota"></textarea>
                                                                                <label for="nota" style="padding-left: 25px;">Nota</label>
                                                                            </div>
                                                                           
                                                                            <!-- Campo para la cantidad de descuento -->
                                                                            
                                                                            
                                                                        </tbody>
                                                                        <!--end::Table body-->
                                                                    </table>
                                                                    <!--end::Table-->
                                                                </div>
                                                                <!-- Summary -->
                                                                <div class="d-flex flex-stack bg-success rounded-3 p-6 mb-5">
                                                                    <!-- Content -->
                                                                    <div class="fs-6 fw-bold text-white">
                                                                        <span class="d-block lh-1 mb-2">Subtotal</span>
                                                                        <span class="d-block mb-2">Descuento</span>
                                                                        <span class="d-block fs-2qx lh-1">Total</span>
                                                                    </div>
                                                                    <!-- Content -->
                                                                    <div class="fs-6 fw-bold text-white text-end">
                                                                        
                                                                        <span id="stotal" name="stotal" class="d-block lh-1 mb-2" data-kt-pos-element="total">${{ $envio[0]->total }}</span>
                                                                        <span id="sdescuento" name="sdescuento" class="d-block mb-2" data-kt-pos-element="discount">$0</span>
                                                                        <span class="d-block fs-2qx lh-1" id="totalito" name="totalito" data-kt-pos-element="tot1">${{ $envio[0]->total }}</span>
                                                                                                                                               
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
 
                                                                
                                                                <input type="text" name="tota" id="tota" hidden>
                                                                <input type="text" name="stota" id="stota" hidden>
                                                                <!-- End of Payment and Change -->
                                                                <br>
                                                                <div class="modal-footer">
                                                                    <div class="d-flex justify-content-between w-100">
                                                                        <button type="submit" id="pagadito" style="margin: 10px" class="btn btn-success flex-grow-1 mr-2" onclick="redireccionarPagina()" formtarget="_blank">Entregar</button>
                                                                        <button type="button" style="margin: 10px" class="btn btn-secondary flex-grow-1 mr-2 btn-cancelar" data-bs-dismiss="modal">Cancelar</button>
                                                                        

<!--
                                                                        <button type="submit" id="pagadito" style="margin: 10px" class="btn btn-secondary flex-grow-1 mr-2" onclick="redireccionarPagina()" formtarget="_blank" disabled>Pagar</button>
                                                                        -->
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </div>
                                                         </div>
                                                         </div></div>
                                                        </form>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const inputSubtotal = document.getElementById("sutota");
  const inputDescuento = document.getElementById("descuento");
  const spanSubtotal  = document.getElementById("stotal");
  const spanDescuento = document.getElementById("sdescuento");
  const spanTotal     = document.getElementById("totalito");
  const inputRecibido = document.getElementById("recibido");

  const inputHiddenTotal    = document.getElementById("tota");
  const inputHiddenSubtotal = document.getElementById("stota");

  const cambioMostrado = document.getElementById("cambio_mostrado");
  const cambioNum      = document.getElementById("cambio_num");

  // helper
  const fmt = v => "$" + (parseFloat(v||0)).toFixed(2);

  function actualizarTotales() {
    let subtotal  = parseFloat(inputSubtotal.value)  || 0;
    let descuento = parseFloat(inputDescuento.value) || 0;
    if (descuento > subtotal) { descuento = subtotal; inputDescuento.value = descuento; }

    const total = subtotal - descuento;

    spanSubtotal.textContent  = fmt(subtotal);
    spanDescuento.textContent = fmt(descuento);
    spanTotal.textContent     = fmt(total);

    inputHiddenTotal.value    = total.toFixed(2);
    inputHiddenSubtotal.value = subtotal.toFixed(2);

    actualizarCambio();
  }

  function actualizarCambio() {
    const recibido = parseFloat(inputRecibido.value) || 0;
    const total    = parseFloat(inputHiddenTotal.value) || 0;
    const cambio   = recibido - total;

    // visible (con $)
    cambioMostrado.value = fmt(Math.max(cambio, 0));

    // oculto (numérico limpio)
    cambioNum.value = (cambio >= 0 ? cambio : 0).toFixed(2);

    // colores opcionales
    if (!recibido) {
      cambioMostrado.classList.remove("is-valid","is-invalid");
    } else if (cambio >= 0) {
      cambioMostrado.classList.add("is-valid");
      cambioMostrado.classList.remove("is-invalid");
    } else {
      cambioMostrado.classList.add("is-invalid");
      cambioMostrado.classList.remove("is-valid");
    }
  }

  inputDescuento.addEventListener("input", actualizarTotales);
  inputRecibido.addEventListener("input", actualizarCambio);
  actualizarTotales(); // init

  // Seguridad extra: antes de enviar, asegura que los numéricos vayan limpios
  const form = document.getElementById('formHacerEntrega');
  if (form) {
    form.addEventListener('submit', () => {
      // si por algo algún campo trae símbolos, límpialos aquí también:
      const clean = v => String(v||'').replace(/[^\d.\-]/g,'');
      inputDescuento.value = clean(inputDescuento.value);
      inputRecibido.value  = clean(inputRecibido.value);
      // cambio ya va en cambio_num
    });
  }
});
</script>


	
	
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>


	   {{-- Global Metronic Scripts --}}
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const qrInputCambio = document.getElementById("qr-input-cambio");
    const qrReaderCambio = document.getElementById("qr-reader-cambio");
    const btnTomarFoto = document.getElementById("btn-tomar-foto");
    const btnCapturarFoto = document.getElementById("btn-capturar-foto");
    const btnGuardarCambio = document.getElementById("btn-guardar-cambio");
    const cameraSection = document.getElementById("camera-section");
    const video = document.getElementById("camera-preview");
    const canvas = document.getElementById("photo-canvas");
    const photoPreview = document.getElementById("photo-preview");
    const previewContainerCambio = document.getElementById("photo-preview-container-cambio");
    const btnBorrarFotoCambio = document.getElementById("btn-borrar-foto-cambio");
    const inputFotoHidden = document.getElementById("foto_cambio_base64");

    let html5QrCodeCambio;
    let cameraStream = null;
    let capturedPhoto = null;

    // --- ESCANEO DE QR ---
    qrInputCambio.addEventListener("click", async function() {
        if (!html5QrCodeCambio) {
            html5QrCodeCambio = new Html5Qrcode("qr-reader-cambio");
        }

        qrReaderCambio.style.display = "block";
        const config = { fps: 10, qrbox: { width: 250, height: 250 } };

        try {
            await html5QrCodeCambio.start(
                { facingMode: "environment" },
                config,
                qrCodeMessage => {
                    qrInputCambio.value = qrCodeMessage;
                    html5QrCodeCambio.stop().then(() => {
                        qrReaderCambio.style.display = "none";
                    });
                }
            );
        } catch (err) {
            console.error("Error al iniciar cámara para QR:", err);
        }
    });

    // --- ABRIR CÁMARA ---
    btnTomarFoto.addEventListener("click", async function() {
        try {
            cameraSection.style.display = "block";
            previewContainerCambio.style.display = "none";
            btnCapturarFoto.style.display = "inline-block";
            btnTomarFoto.style.display = "none";

            cameraStream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } });
            video.srcObject = cameraStream;
        } catch (err) {
            alert("No se pudo acceder a la cámara: " + err.message);
        }
    });

    // --- CAPTURAR FOTO ---
    btnCapturarFoto.addEventListener("click", function() {
        const context = canvas.getContext("2d");
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        context.drawImage(video, 0, 0, canvas.width, canvas.height);

        // Detener cámara
        cameraStream.getTracks().forEach(track => track.stop());
        cameraStream = null;

        // Mostrar foto
        capturedPhoto = canvas.toDataURL("image/png");
        inputFotoHidden.value = capturedPhoto; // Guardar en input oculto
        photoPreview.src = capturedPhoto;
        previewContainerCambio.style.display = "block";

        // Ocultar video
        video.style.display = "none";
        cameraSection.style.display = "none";
        btnCapturarFoto.style.display = "none";
        btnTomarFoto.style.display = "inline-block";
    });

    // --- ELIMINAR FOTO ---
    btnBorrarFotoCambio.addEventListener("click", function() {
        capturedPhoto = null;
        inputFotoHidden.value = "";
        photoPreview.src = "";
        previewContainerCambio.style.display = "none";
        btnTomarFoto.style.display = "inline-block";
    });

    // --- LIMPIAR TODO AL CERRAR EL MODAL ---
    const modalHacerCambio = document.getElementById('modalHacerCambio');
    modalHacerCambio.addEventListener('hidden.bs.modal', function () {
        if (cameraStream) {
            cameraStream.getTracks().forEach(track => track.stop());
            cameraStream = null;
        }
        if (html5QrCodeCambio) {
            html5QrCodeCambio.stop().catch(() => {}).then(() => {
                qrReaderCambio.style.display = "none";
            });
        }

        // Limpiar todo
        qrInputCambio.value = "";
        inputFotoHidden.value = "";
        photoPreview.src = "";
        previewContainerCambio.style.display = "none";
        cameraSection.style.display = "none";
        btnCapturarFoto.style.display = "none";
        btnTomarFoto.style.display = "inline-block";
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const btnAbrirCamara = document.getElementById("btn-abrir-camara");
    const video = document.getElementById("camera-preview-entrega");
    const canvas = document.getElementById("photo-canvas-entrega");
    const btnCapturar = document.getElementById("btn-capturar-entrega");
    const previewContainer = document.getElementById("photo-preview-container");
    const photoPreview = document.getElementById("photo-preview-entrega");
    const cameraSection = document.getElementById("camera-section-entrega");
    const btnBorrarFoto = document.getElementById("btn-borrar-foto");
    const inputFotoHidden = document.getElementById("foto_entrega_base64");

    let cameraStream = null;
    let capturedPhoto = null;

    // --- Abrir cámara ---
    btnAbrirCamara.addEventListener("click", async function() {
        if (cameraStream) return;
        try {
            cameraSection.style.display = "block";
            previewContainer.style.display = "none";
            btnCapturar.style.display = "inline-block";

            cameraStream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } });
            video.srcObject = cameraStream;
        } catch (err) {
            alert("No se pudo acceder a la cámara: " + err.message);
        }
    });

    // --- Capturar foto ---
    btnCapturar.addEventListener("click", function() {
        const context = canvas.getContext("2d");
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        context.drawImage(video, 0, 0, canvas.width, canvas.height);

        // Detener cámara
        if (cameraStream) {
            cameraStream.getTracks().forEach(track => track.stop());
            cameraStream = null;
        }

        // Guardar imagen base64
        capturedPhoto = canvas.toDataURL("image/png");
        inputFotoHidden.value = capturedPhoto;

        // Mostrar previsualización
        photoPreview.src = capturedPhoto;
        previewContainer.style.display = "block";

        // Ocultar video
        video.style.display = "none";
        cameraSection.style.display = "none";
        btnCapturar.style.display = "none";
    });

    // --- Borrar foto ---
    btnBorrarFoto.addEventListener("click", function() {
        capturedPhoto = null;
        inputFotoHidden.value = "";
        photoPreview.src = "";
        previewContainer.style.display = "none";
        btnCapturar.style.display = "inline-block";
        video.style.display = "block";
        cameraSection.style.display = "block";
    });
});
</script>

	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
</x-default-layout>

	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>