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
						

    <div class="card shadow-sm">
        <div class="card-header bg-light">
            <h3 class="card-title text-gray-700 fw-bold text-uppercase">Entrega multiple</h3>
        </div>

        <div class="card-body">

            <!-- Escáner QR -->
            <div class="d-flex align-items-center mb-4">
                <input id="qr-input" type="text" placeholder="Escanear código QR" readonly
                    class="form-control me-3" style="max-width: 300px;" />
               
            </div>

            <div id="qr-reader" style="width:100%; display:none;" class="border rounded p-2 mb-3"></div>

            <!-- Tabla de envíos -->
            <div class="table-responsive">
                <table class="table table-striped align-middle" id="tabla-lote">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>Guía</th>
                            <th>Comercio</th>
                            <th>Destinatario</th>
                            <th>Dirección</th>
                            <th>Nota</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>

            <div class="text-end mt-4">
                 <button type="button" id="btn-limpiar" class="btn btn-light-danger">Limpiar lista</button>
                <button type="button" id="btn-entregar-lote" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEntregarLote" disabled>
                    <i class="fas fa-check-circle"></i> Entregar
                </button>
            </div>

        </div>
    </div>
</div>

<!-- Modal Entregar en Lote -->
<div class="modal fade" id="modalEntregarLote" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form id="formEntregaLote" method="POST" action="{{ route('envios.guardarLote') }}">
                @csrf
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">Detalles del Pago - Entrega en Lote</h5>
                    <button type="button" class="btn btn-icon btn-sm btn-light" data-bs-dismiss="modal">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="guias" id="guias-lote">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Cajero</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Fecha</label>
                            <input type="text" class="form-control" value="{{ now()->format('j/n/Y') }}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Agencia</label>
                            <input type="text" class="form-control" value="{{ $empleado[0]->agencia }}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Método de Pago</label>
                            <select class="form-select" name="metodo" required>
                                <option value="Efectivo">Efectivo</option>
                                <option value="Transferencia_empresa">Transferencia a la empresa</option>
                                <option value="Transferencia_comercio">Transferencia al comercio</option>
                            </select>
                        </div>
                                                                
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Subtotal</label>
                            <input type="text" id="subtotal-lote" name="subtotal" class="form-control" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Descuento</label>
                            <input type="number" id="descuento-lote" name="descuento" class="form-control" value="0" min="0" step="0.01">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Nota</label>
                            <textarea name="nota" class="form-control" rows="2"></textarea>
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
                                                                        
                            <span id="lbl-subtotal" name="stotal" class="d-block lh-1 mb-2" data-kt-pos-element="total">$0.00</span>
                            <span id="lbl-descuento" name="sdescuento" class="d-block mb-2" data-kt-pos-element="discount">$0.00</span>
                            <span class="d-block fs-2qx lh-1" id="lbl-total" name="totalito" data-kt-pos-element="tot1">$0.00</span>
                                        <input type="hidden" name="total" id="total-lote">                                                                                                       
                        </div>
                    </div>

                   
                </div>

                                                                <!-- Campos de Recibido y Cambio -->
                <div class="row mt-4">
                    <div class="col-6 d-flex align-items-center justify-content-end">
                        <span class="form-label fw-semibold">Recibido</span>
                    </div>
                    <div class="col-6">
                        <input type="number" step="0.01" min="0" name="recibido" id="recibido-lote" class="form-control form-control-solid" placeholder="0.00" />
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-6 d-flex align-items-center justify-content-end">
                        <span class="form-label fw-semibold">Cambio</span>
                    </div>
                    <div class="col-6">
                        <!-- Visible -->
                        <input type="text" id="cambio_mostrado_lote" class="form-control form-control-solid" placeholder="$0.00" readonly/>

                        <!-- Oculto (solo el número sin símbolo) -->
                        <input type="hidden" name="cambio" id="cambio_num_lote" value="0">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Entregar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>




   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Librería QR -->
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const qrInput = document.getElementById("qr-input");
    const qrReader = document.getElementById("qr-reader");
    const tabla = document.querySelector("#tabla-lote tbody");
    const btnEntregar = document.getElementById("btn-entregar-lote");
    const btnLimpiar = document.getElementById("btn-limpiar");

    let html5QrCode;
    let listaGuias = [];

    qrInput.addEventListener("click", async function() {
        if (!html5QrCode) html5QrCode = new Html5Qrcode("qr-reader");
        qrReader.style.display = "block";
        const config = { fps: 10, qrbox: { width: 250, height: 250 } };

        try {
            await html5QrCode.start({ facingMode: "environment" }, config, async (qrCodeMessage) => {
                qrInput.value = qrCodeMessage;
                html5QrCode.stop();
                qrReader.style.display = "none";

                // Consultar datos del envío via AJAX
                const response = await fetch(`/envio/buscar/${qrCodeMessage}`);
                if (response.ok) {
    const envio = await response.json();

    // Verificar duplicado
    if (!listaGuias.includes(envio.guia)) {
        listaGuias.push(envio.guia);

        const fila = `
            <tr data-guia="${envio.guia}">
                <td>${envio.guia}</td>
                <td>${envio.comercio}</td>
                <td>${envio.destinatario}</td>
                <td>${envio.direccion}</td>
                <td>${envio.nota || ''}</td>
                <td class="text-end">$${parseFloat(envio.total).toFixed(2)}</td>
                <td><button class="btn btn-sm btn-danger btn-quitar">X</button></td>
            </tr>
        `;
        tabla.insertAdjacentHTML('beforeend', fila);
        actualizarTotales();
        btnEntregar.disabled = false;
    } else {
        // 🚨 AQUÍ va el mensaje de duplicado
        Swal.fire({
            icon: 'warning',
            title: 'Guía duplicada',
            text: `La guía ${envio.guia} ya fue agregada a la lista.`,
            timer: 2500,
            showConfirmButton: false,
            toast: true,
            position: 'top-end',
        });
    }
} else {
    Swal.fire({
        icon: 'error',
        title: 'Guía no encontrada',
        text: 'No se encontró la guía en la base de datos.',
        timer: 2500,
        showConfirmButton: false,
        toast: true,
        position: 'top-end',
    });
}
            });
        } catch (err) {
            console.error("Error al iniciar cámara:", err);
        }
    });

    // Quitar una fila
    tabla.addEventListener('click', e => {
        if (e.target.classList.contains('btn-quitar')) {
            const fila = e.target.closest('tr');
            const guia = fila.getAttribute('data-guia');
            listaGuias = listaGuias.filter(g => g !== guia);
            fila.remove();
            actualizarTotales();
            if (listaGuias.length === 0) btnEntregar.disabled = true;
        }
    });

    // Limpiar tabla completa
    btnLimpiar.addEventListener("click", function() {
        tabla.innerHTML = "";
        listaGuias = [];
        actualizarTotales();
        btnEntregar.disabled = true;
    });

    // Calcular totales
    function actualizarTotales() {
        let subtotal = 0;
        document.querySelectorAll("#tabla-lote tbody tr").forEach(row => {
            const valor = parseFloat(row.cells[5].textContent.replace('$', '')) || 0;
            subtotal += valor;
        });

        document.getElementById("subtotal-lote").value = subtotal.toFixed(2);
        document.getElementById("lbl-subtotal").textContent = `$${subtotal.toFixed(2)}`;

        const descuento = parseFloat(document.getElementById("descuento-lote").value) || 0;
        document.getElementById("lbl-descuento").textContent = `$${descuento.toFixed(2)}`;

        const total = subtotal - descuento;
        document.getElementById("lbl-total").textContent = `$${total.toFixed(2)}`;
        document.getElementById("total-lote").value = total.toFixed(2);
        document.getElementById("guias-lote").value = JSON.stringify(listaGuias);
    }

    document.getElementById("descuento-lote").addEventListener("input", actualizarTotales);



});


 // === CAMPOS DE RECIBIDO Y CAMBIO EN LOTE ===
    const inputRecibido = document.getElementById("recibido-lote");
    const cambioMostrado = document.getElementById("cambio_mostrado_lote");
    const cambioNum = document.getElementById("cambio_num_lote");
    const mensajeCambio = document.getElementById("mensaje-cambio-lote");

    function actualizarCambioLote() {
        const recibido = parseFloat(inputRecibido.value) || 0;
        const total = parseFloat(document.getElementById("total-lote").value) || 0;
        const cambio = recibido - total;

        // Actualizar valores
        cambioMostrado.value = "$" + (cambio >= 0 ? cambio.toFixed(2) : "0.00");
        cambioNum.value = (cambio >= 0 ? cambio.toFixed(2) : 0);

        // Cambiar color
        if (recibido === 0) {
            cambioMostrado.classList.remove("is-valid", "is-invalid");
            mensajeCambio.textContent = "";
        } else if (cambio >= 0) {
            cambioMostrado.classList.add("is-valid");
            cambioMostrado.classList.remove("is-invalid");
            mensajeCambio.textContent = "Cambio correcto ✔️";
            mensajeCambio.style.color = "#28a745";
        } else {
            cambioMostrado.classList.add("is-invalid");
            cambioMostrado.classList.remove("is-valid");
            mensajeCambio.textContent = "Falta dinero ❌";
            mensajeCambio.style.color = "#dc3545";
        }
    }

    inputRecibido.addEventListener("input", actualizarCambioLote);
</script>

	<!--begin::Global Javascript Bundle(mandatory for all pages)-->


	   {{-- Global Metronic Scripts --}}
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>