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
      <!-- PERSONALIZADO -->
<form class="guardar-envios" data-tipo="Personalizado">
    <div class="row mb-7">
        <div class="col-md-9 offset-md-3">
            <input id="personalizado-qr-input" type="text" placeholder="Escanear QR" readonly class="form-control me-2" style="max-width: 300px;" />
            <div id="personalizado-qr-reader" style="width:100%; display:none;" class="border rounded p-2 mb-3"></div>
        </div>
    </div>

    <table class="table table-striped" id="personalizado-tabla">
        <thead>
            <tr><th># Guía</th><th>Tipo</th><th>Acción</th></tr>
        </thead>
        <tbody></tbody>
    </table>
 <!--begin::Action buttons
    <button type="submit" class="btn btn-primary">Guardar Personalizados</button>


   -->

   <div class="row mt-4">
    <div class="col-md-3 offset-md-3">
        <label class="form-label fw-semibold">Subtotal</label>
        <input type="number" id="personalizado-subtotal" class="form-control" placeholder="0.00" min="0" step="0.01">
    </div>
</div>
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
              <!-- Punto fijo -->
<form class="guardar-envios" data-tipo="Punto fijo">
    <div class="row mb-7">
        <div class="col-md-9 offset-md-3">
            <input id="puntofijo-qr-input" type="text" placeholder="Escanear QR" readonly class="form-control me-2" style="max-width: 300px;" />
            <div id="puntofijo-qr-reader" style="width:100%; display:none;" class="border rounded p-2 mb-3"></div>
        </div>
    </div>

    <table class="table table-striped" id="puntofijo-tabla">
        <thead>
            <tr><th># Guía</th><th>Tipo</th><th>Acción</th></tr>
        </thead>
        <tbody></tbody>
    </table>

    <div class="row mt-4">
    <div class="col-md-3 offset-md-3">
        <label class="form-label fw-semibold">Subtotal</label>
        <input type="number" id="puntofijo-subtotal" class="form-control" placeholder="0.00" min="0" step="0.01">
    </div>
</div>
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
            <!-- PERSONALIZADO DEPARTAMENTAL-->
<form class="guardar-envios" data-tipo="Personalizado Departamental">
    <div class="row mb-7">
        <div class="col-md-9 offset-md-3">
            <input id="personalizado-departamental-qr-input" type="text" placeholder="Escanear QR" readonly class="form-control me-2" style="max-width: 300px;" />
            <div id="personalizado-departamental-qr-reader" style="width:100%; display:none;" class="border rounded p-2 mb-3"></div>
        </div>
    </div>

    <table class="table table-striped" id="personalizado-departamental-tabla">
        <thead>
            <tr><th># Guía</th><th>Tipo</th><th>Acción</th></tr>
        </thead>
        <tbody></tbody>
    </table>

    <div class="row mt-4">
    <div class="col-md-3 offset-md-3">
        <label class="form-label fw-semibold">Subtotal</label>
        <input type="number" id="personalizado-departamental-subtotal" class="form-control" placeholder="0.00" min="0" step="0.01">
    </div>
</div>
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
             <!-- PERSONALIZADO -->
<form class="guardar-envios" data-tipo="Casillero">
    <div class="row mb-7">
        <div class="col-md-9 offset-md-3">
            <input id="casillero-qr-input" type="text" placeholder="Escanear QR" readonly class="form-control me-2" style="max-width: 300px;" />
            <div id="casillero-qr-reader" style="width:100%; display:none;" class="border rounded p-2 mb-3"></div>
        </div>
    </div>

    <table class="table table-striped" id="casillero-tabla">
        <thead>
            <tr><th># Guía</th><th>Tipo</th><th>Acción</th></tr>
        </thead>
        <tbody></tbody>
    </table>
    <div class="row mt-4">
    <div class="col-md-3 offset-md-3">
        <label class="form-label fw-semibold">Subtotal</label>
        <input type="number" id="casillero-subtotal" class="form-control" placeholder="0.00" min="0" step="0.01">
    </div>
</div>
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
                                                                            <h2>Datos de cobro</h2>
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
                                                                                <input type="text" class="form-control form-control-solid" name="total" id="total" value="0.00" readonly />
                                                                                <label for="Cajero">Total</label>
                                                                               
                                                                            </div>
                                                                           
                                                                       
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <textarea class="form-control form-control-solid" name="nota" id="nota" placeholder="Nota"></textarea>
                                                                                <label for="nota" style="padding-left: 25px;">Nota</label>
                                                                            </div>

                                                                             <div class="form-floating col-lg-12 mb-4">
                                                                                <input type="text" class="form-control form-control-solid" name="recibido" id="recibido" value="0.00" />
                                                                                <label for="Cajero">Recibido</label>
                                                                               
                                                                            </div>
                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <input type="text" class="form-control form-control-solid" name="cambio" id="cambio" value="0.00" readonly />
                                                                                <label for="Cajero">Cambio</label>
                                                                               
                                                                            </div>
                                                                           
                                                                            
                                                                        </tbody>
                                                                        <!--end::Table body-->
                                                                    </table>
                                                                    <!--end::Table-->
                                                                </div>                                     
                                                                
                                                                <input type="text" name="tota" id="tota" hidden>
                                                                <input type="text" name="stota" id="stota" hidden>
                                                                <!-- End of Payment and Change -->
                                                                <br>
                                                                <div class="modal-footer">
                                                                    <div class="d-flex justify-content-between w-100">
                                                                        <button type="submit" id="pagadito" style="margin: 10px" class="btn btn-success flex-grow-1 mr-2" onclick="redireccionarPagina()" formtarget="_blank">Cobrar</button>
                                                                        <button type="button" style="margin: 10px" class="btn btn-secondary flex-grow-1 mr-2 btn-cancelar" data-bs-dismiss="modal">Cancelar</button>
                                                                        

                                                                            <!--
                                                                        <button type="submit" id="pagadito" style="margin: 10px" class="btn btn-secondary flex-grow-1 mr-2" onclick="redireccionarPagina()" formtarget="_blank" disabled>Pagar</button>
                                                                        -->
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
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


<!--begin::Javascript-->

<script>
document.addEventListener("DOMContentLoaded", function () {
    const comercio = @json($comercio->comercio);

    const tiposEnvio = [
        { clave: 'personalizado', id: 'personalizado' },
        { clave: 'puntofijo', id: 'puntofijo' },
        { clave: 'departamental', id: 'personalizado-departamental' },
        { clave: 'casillero', id: 'casillero' }
    ];

    const listas = {
        personalizado: [],
        puntofijo: [],
        departamental: [],
        casillero: []
    };

    const subtotales = {
        personalizado: 0,
        puntofijo: 0,
        departamental: 0,
        casillero: 0
    };

    // 🔹 Manejaremos una instancia independiente por tipo
    const lectores = {};

    // === Inicialización ===
    tiposEnvio.forEach(({ clave, id }) => {
        const inputQR = document.querySelector(`#${id}-qr-input`);
        const readerDiv = document.querySelector(`#${id}-qr-reader`);
        const tabla = document.querySelector(`#${id}-tabla tbody`);
        const subtotalInput = document.querySelector(`#${id}-subtotal`);

        if (!inputQR || !readerDiv) return;

        inputQR.addEventListener("click", async function () {
            // 🔸 Detener cualquier lector activo antes de abrir uno nuevo
            for (const key in lectores) {
                try {
                    await lectores[key].stop();
                    document.querySelector(`#${tiposEnvio.find(t => t.clave === key).id}-qr-reader`).style.display = "none";
                } catch (_) {}
            }

            // 🔸 Crear una instancia nueva solo si no existe
            if (!lectores[clave]) {
                lectores[clave] = new Html5Qrcode(`${id}-qr-reader`);
            }

            readerDiv.style.display = "block";
            const config = { fps: 10, qrbox: { width: 250, height: 250 } };

            try {
                await lectores[clave].start(
                    { facingMode: "environment" },
                    config,
                    (codigo) => {
                        lectores[clave].stop(); // detener escaneo tras leer
                        readerDiv.style.display = "none";
                        inputQR.value = codigo;

                        if (listas[clave].includes(codigo)) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Duplicado',
                                text: `El código ${codigo} ya está en la lista.`,
                                toast: true,
                                position: 'top-end',
                                timer: 1500,
                                showConfirmButton: false
                            });
                            return;
                        }

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

        // 🔹 Subtotales
        if (subtotalInput) {
            subtotalInput.addEventListener("input", () => {
                subtotales[clave] = parseFloat(subtotalInput.value) || 0;
                actualizarTotalGlobal();
            });
        }
    });

    // === Eliminar fila de la tabla ===
    document.body.addEventListener("click", e => {
        if (e.target.classList.contains("btn-quitar")) {
            const tipo = e.target.dataset.tipo;
            const codigo = e.target.dataset.codigo;
            listas[tipo] = listas[tipo].filter(c => c !== codigo);
            e.target.closest("tr").remove();
        }
    });

    // === Botones Guardar: pasar a la siguiente pestaña ===
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

    // === Botón Cobrar ===
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

            if (res.ok) {
                Swal.fire({
                    icon: "success",
                    title: "Cobro realizado",
                    text: "Los envíos y el ticket fueron registrados correctamente.",
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => location.reload());
            } else {
                throw new Error("Error al procesar el cobro");
            }
        } catch (err) {
            Swal.fire({ icon: "error", title: "Error", text: "No se pudo guardar la información." });
            console.error(err);
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