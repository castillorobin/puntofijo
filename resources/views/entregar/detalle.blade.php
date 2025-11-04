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
            <!--end::Row-->

              <div class="row mb-8">
                 <!--begin::Col-->
                <div class="col-xl-3">
                   <!-- Botón Comprobante de entrega -->
<div class="fs-6 fw-semibold mt-2 mb-3 text-center">
    <button type="button" class="btn btn-light-success fw-bold" id="btn-abrir-camara">
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

    <div id="photo-preview-container" class="mt-4" style="display:none;">
        <h6 class="text-muted mb-2">Previsualización:</h6>
        <img id="photo-preview-entrega" class="img-fluid rounded border shadow-sm" alt="Previsualización de la foto">
    </div>
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
        <button type="submit" class="btn btn-success w-100" >Entregar</button>
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

            <div class="modal-body py-5">
                <!-- Campo de guía con lectura QR -->
                <div class="mb-3">
                    <label class="fw-semibold text-gray-700">Guía:</label>
                    <input type="text" id="qr-input-cambio" class="form-control form-control-solid" placeholder="Escanea un código QR" readonly>
                </div>

                <div id="qr-reader-cambio" style="width:100%; display:none;" class="border rounded p-2 mb-3"></div>

                <!-- Vista previa de cámara -->
                <div id="camera-section" class="text-center" style="display:none;">
                    <video id="camera-preview" width="100%" height="auto" autoplay playsinline class="rounded border mb-3"></video>
                    <canvas id="photo-canvas" style="display:none;"></canvas>
                    <img id="photo-preview" class="img-fluid rounded border" style="display:none;" alt="Previsualización de la foto">
                </div>
            </div>

            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-secondary" id="btn-tomar-foto">
                    <i class="fas fa-camera"></i> Tomar foto
                </button>
                <button type="button" class="btn btn-success" id="btn-capturar-foto" style="display:none;">
                    <i class="fas fa-check"></i> Capturar
                </button>
                <button type="button" class="btn btn-primary" id="btn-guardar-cambio">
                    <i class="fas fa-save"></i> Guardar
                </button>
            </div>
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
        photoPreview.src = capturedPhoto;
        photoPreview.style.display = "block";

        // Ocultar video
        video.style.display = "none";
        btnCapturarFoto.style.display = "none";
        btnTomarFoto.style.display = "inline-block";
    });

    // --- GUARDAR ---
    btnGuardarCambio.addEventListener("click", function() {
        const guia = qrInputCambio.value;
        if (guia === "") {
            alert("Por favor, escanea una guía antes de guardar.");
            return;
        }
        if (!capturedPhoto) {
            alert("Toma una foto antes de guardar.");
            return;
        }

        alert("✅ Guía: " + guia + "\nFoto capturada correctamente (listo para enviar al backend).");
    });

   // --- LIMPIAR TODO AL CERRAR EL MODAL ---
const modalHacerCambio = document.getElementById('modalHacerCambio');
modalHacerCambio.addEventListener('hidden.bs.modal', async function () {
    console.log("Modal cerrado, limpiando...");

    // Detener cámara si estaba activa
    if (cameraStream) {
        cameraStream.getTracks().forEach(track => track.stop());
        cameraStream = null;
    }

    // Detener lector QR si estaba activo o pendiente
    if (html5QrCodeCambio) {
        try {
            await html5QrCodeCambio.stop();
        } catch (e) {
            console.warn("El lector QR ya estaba detenido:", e);
        }
        html5QrCodeCambio.clear(); // Limpia el área del lector
        html5QrCodeCambio = null;  // Reinicia la instancia
        qrReaderCambio.style.display = "none";
    }

    // Limpiar campos y vista previa
    qrInputCambio.value = "";
    photoPreview.src = "";
    photoPreview.style.display = "none";
    video.style.display = "block";
    cameraSection.style.display = "none";
    btnCapturarFoto.style.display = "none";
    btnTomarFoto.style.display = "inline-block";
    capturedPhoto = null;
});
});
</script>



<script>
document.addEventListener("DOMContentLoaded", function() {
    const btnAbrirCamara = document.getElementById("btn-abrir-camara");
    const video = document.getElementById("camera-preview-entrega");
    const canvas = document.getElementById("photo-canvas-entrega");
    const btnCapturar = document.getElementById("btn-capturar-entrega");
    const btnGuardar = document.getElementById("btn-guardar-entrega");
    const previewContainer = document.getElementById("photo-preview-container");
    const photoPreview = document.getElementById("photo-preview-entrega");
    const cameraSection = document.getElementById("camera-section-entrega");

    let cameraStream = null;
    let capturedPhoto = null;

    // --- ABRIR CÁMARA ---
    btnAbrirCamara.addEventListener("click", async function() {
        try {
            cameraSection.style.display = "block";
            previewContainer.style.display = "none";

            cameraStream = await navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } });
            video.srcObject = cameraStream;
        } catch (err) {
            alert("No se pudo acceder a la cámara: " + err.message);
        }
    });

    // --- CAPTURAR FOTO ---
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

        // Mostrar foto
        capturedPhoto = canvas.toDataURL("image/png");
        photoPreview.src = capturedPhoto;
        previewContainer.style.display = "block";
    });

    // --- GUARDAR FOTO ---
    btnGuardar.addEventListener("click", async function() {
        if (!capturedPhoto) {
            alert("Primero toma una foto del comprobante.");
            return;
        }

        try {
            const response = await fetch("{{ route('guardarComprobante') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    guia: "{{ $envio[0]->guia }}",
                    foto: capturedPhoto
                })
            });

            if (response.ok) {
                alert("✅ Comprobante guardado correctamente.");

                // Opcional: actualizar la miniatura con la nueva foto
                const imageWrapper = document.querySelector(".image-input-wrapper");
                if (imageWrapper) {
                    imageWrapper.style.backgroundImage = `url(${capturedPhoto})`;
                }

                cameraSection.style.display = "none";
                previewContainer.style.display = "none";
                capturedPhoto = null;
            } else {
                alert("⚠️ Ocurrió un error al guardar la foto.");
            }
        } catch (err) {
            console.error("Error al enviar la foto:", err);
            alert("Error al enviar la foto al servidor.");
        }
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