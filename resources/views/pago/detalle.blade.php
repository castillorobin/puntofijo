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
											<span class="menu-title">Pagar</span>
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
                                  
                              

									<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header card-header-stretch pb-0">
        <!--begin::Title-->
        <div class="card-title">
            <h3 class="m-0">Información de Ticket</h3>
        </div>
        <!--end::Title-->

        <!--begin::Toolbar-->
        <div class="card-toolbar m-0">
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

{{-- Mensaje de error general --}}
@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
    </div>

	<script>
setTimeout(() => {
    document.querySelectorAll('.alert').forEach(a => a.remove());
}, 3000);
</script>
@endif
            <!--end::Tab nav-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Tab content-->
    <div id="kt_billing_payment_tab_content" class="card-body tab-content">
        <!--begin::Tab panel-->
        <div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel" "="" aria-labelledby="kt_billing_creditcard_tab">
            <!--begin::Title-->
            
            <!--end::Title-->

            <!--begin::Row-->
            <div class="row gx-9 gy-6">
                <!--begin::Col-->
                <div class="col-xl-6" data-kt-billing-element="card">
                    <!--begin::Card-->
                    <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                        <!--begin::Info-->
                        <div class="d-flex flex-column py-2">
                            <!--begin::Owner-->
                         

                            <!--begin::Wrapper-->
							
                            <div class="d-flex align-items-center">
                                <!--begin::Icon-->
                               
                                <!--end::Icon-->

                                <!--begin::Details-->
                                <div >
									<span class="fs-4 fw-bold"># De Ticket: </span> <span class="fs-6 fw-semibold text-gray-500">{{ $ticket->id }}</span>
									<br>
                                    <span class="fs-4 fw-bold">Comercio: </span> <span class="fs-6 fw-semibold text-gray-500">{{ $ticket->comercio }}</span>
									<br>
									<span class="fs-4 fw-bold">Estado: </span> <span class="fs-6 fw-semibold text-gray-500">{{ $ticket->estado }}</span>
									<br>
									<span class="fs-4 fw-bold">Total: </span> <span class="fs-6 fw-semibold text-gray-500">${{ $ticket->total }}</span>
									<br>
									<span class="fs-4 fw-bold">Fecha de verificación: </span> <span class="fs-6 fw-semibold text-gray-500">{{ $ticket->fechapago }}</span>
									<br>
									<span class="fs-4 fw-bold">Usuario que verifico: </span> <span class="fs-6 fw-semibold text-gray-500">{{ $ticket->userpago }}</span>
                                </div>
								
								</div>
								
                                <!--end::Details-->

								
                            </div>
							 
                        <!--end::Info-->
						<div class="d-flex align-items-center py-2" style="margin-right: 150px;">
						<div><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_2">Pagar</button></div>
                        </div>
                        <!--begin::Actions-->
                       
                        <!--end::Actions-->
                    </div>

					
                    <!--end::Card-->
                </div>
                <!--end::Col-->

       
          
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        
    </div>
    <!--end::Tab content-->
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











	

                                    <div class="modal fade" tabindex="-1" id="kt_modal_2">
                                    <div class="modal-dialog">
                                        <div class="modal-content shadow-none">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detalles del pago</h5>

                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="ki-duotone ki-cross"><span class="path1"></span><span class="path2"></span></i>
                                                </div>
                                                <!--end::Close-->
                                            </div>

                                            
                                                <div class="modal-body">
                                                      <form action="/pagar/pagando" method="POST">
                                         @csrf
                                                   
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
                                                                                <input type="text" class="form-control form-control-solid" value="{{ now()->format('j/n/Y') }}" name="fecha_entrega" id="fecha_entrega" placeholder="Fecha de entrega" readonly />
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
                                                                                    <option value="Deposito">Deposito</option>
                                                                                    <option value="Transferencia_empresa">Transferencia a la empresa</option>
                                                                                    <option value="Transferencia_comercio">Transferencia al comercio</option>
                                                                                    <option value="Tigo_money">Tigo money</option>
                                                                                    <option value="Chivo">Chivo</option>
                                                                                </select>
                                                                                <label for="estado_envio">Método de pago</label>
                                                                                <div id="estadoEnvioValidationFeedback" class="invalid-feedback">
                                                                                    Por favor seleccione el método de pago.
                                                                                </div>
                                                                            </div>


                                                                             <div class="form-floating col-lg-12 mb-4">
                                                                                <input type="text" class="form-control form-control-solid" name="subtotal" id="sutota" value="{{$ticket->total}}" onchange="calcularsub()" readonly/>
                                                                                <label for="Cajero">Subtotal</label>
                                                                                <div id="CajeroValidationFeedback" class="invalid-feedback">
                                                                                    Por favor ingrese el destinatario.
                                                                                </div>
                                                                            </div>
                                                                           
                                                                             <!-- Campo para la cantidad de descuento -->
                                                                            

																			<div class="form-floating col-lg-12 mb-4">
                                                                                
                                                                                <input type="text" class="form-control form-control-solid"
																			name="descuento" id="descuento"
																			placeholder="Descuento"
																			onchange="calcularsub()" onkeyup="calcularsub()" />
																				<label for="Cajero">Descuento</label>
                                                                                <div id="CajeroValidationFeedback" class="invalid-feedback">
                                                                                    Por favor ingrese el destinatario.
                                                                                </div>
                                                                            </div>



                                                                            <div class="form-floating col-lg-12 mb-4">
                                                                                <textarea class="form-control form-control-solid" name="nota" id="nota" placeholder="Nota"></textarea>
                                                                                <label for="nota" style="padding-left: 25px;">Nota</label>
                                                                            </div>

																			                                                                         
                                                                      
                                                                            <div class="row">
                                                                            <div class="form-floating col-lg-6 mb-4">
                                                                                <input type="text" class="form-control form-control-solid" name="recibe" id="recibe" placeholder="Quien recibe" value="" />
                                                                                <label for="recibe" style="padding-left: 25px;">Quien recibe</label>
                                                                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                                                                            </div>


                                                                            <div class="form-floating col-lg-6 mb-4">
                                                                                <input type="text" class="form-control form-control-solid" name="dui" id="dui" placeholder="DUI" value="" />
                                                                                <label for="dui" style="padding-left: 25px;">DUI</label>
                                                                                <div class="invalid-feedback">Este campo es obligatorio.</div>
                                                                            </div>
                                                                        </div>
                                                                            <input type="hidden" name="stota" id="stota">
																			<input type="hidden" name="tota" id="tota">
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
                                                                        
                                                                        <span id="stotal" name="stotal" class="d-block lh-1 mb-2" data-kt-pos-element="total">${{$ticket->total}}</span>
                                                                        <span id="sdescuento" name="sdescuento" class="d-block mb-2" data-kt-pos-element="discount">$</span>
                                                                        <span class="d-block fs-2qx lh-1" id="totalito" name="totalito" data-kt-pos-element="tot1">${{$ticket->total}}</span>
                                                                       
                                                                        
                                                                        
                                                                    </div>

                                                                    


                                                                </div>
                                                             
                                                                <!-- End of Summary -->
                                                                <!-- Payment and Change -->
                                                               
                                                                
                                                                
                                                                <input type="text" name="tota" id="tota" hidden>
                                                                <input type="text" name="stota" id="stota" hidden>
																<input type="text" name="ticket_id" id="ticket_id" value="{{$ticket->id}}" hidden>
                                                                <!-- End of Payment and Change -->
                                                                <br>
                                                                <div class="modal-footer">
                                                                    <div class="d-flex justify-content-between w-100">
                                                                        <button type="button" style="margin: 10px" class="btn btn-secondary flex-grow-1 mr-2 btn-cancelar" data-bs-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" id="pagadito" style="margin: 10px" class="btn btn-secondary flex-grow-1 mr-2" formtarget="_blank">Pagar</button>

<!--
                                                                        <button type="submit" id="pagadito" style="margin: 10px" class="btn btn-secondary flex-grow-1 mr-2" onclick="redireccionarPagina()" formtarget="_blank" disabled>Pagar</button>
                                                                        -->
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         </div>
                                                         </div></div>
                                                   
                                                   

</form>

	


<script>
function calcularsub() {
    // Obtener valores
    let subtotal = parseFloat(document.getElementById("sutota").value) || 0;
    let descuento = parseFloat(document.getElementById("descuento").value) || 0;

    // Calcular total
    let total = subtotal - descuento;

    // Evitar totales negativos
    if (total < 0) total = 0;

    // Actualizar HTML del resumen (cuadro verde)
    document.getElementById("stotal").innerText = "$" + subtotal.toFixed(2);
    document.getElementById("sdescuento").innerText = "$" + descuento.toFixed(2);
    document.getElementById("totalito").innerText = "$" + total.toFixed(2);

    // Guardar en los inputs hidden
    document.getElementById("stota").value = subtotal.toFixed(2);
    document.getElementById("tota").value = total.toFixed(2);
}
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