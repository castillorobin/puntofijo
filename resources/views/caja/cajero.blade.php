<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <link rel="icon" type="image/png" href="{{ asset('fotos/logo.png') }}">
    <title>Melo Express</title>
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
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only) 
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
   -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />

    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />


    <style>
        .table th,
        .table td { 
            padding: 0.10rem;
            /* Ajusta el valor según sea necesario */
        }
    </style>

<style>
        .table th,
        .table td {
            padding: 0.10rem;
            /* Ajusta el valor según sea necesario */
        }

        .dataTables_filter {
            display: none;
        }

        
            
    </style>

    <!--end::Global Stylesheets Bundle-->
    <style>
        .table th,
        .table td {
            padding: 0.10rem;
            /* Ajusta el valor según sea necesario */
        }

        .margen{
            margin: 5px;
        }
        .margenint{
            padding: 5px;
        }
        
.columna{
    width:350px;
}
.centrar{
    
    text-align: center;
}
    </style>



</head>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>
    flatpickr("#kt_datepicker_1", {
        dateFormat: 'Y-m-d',
    });
</script>
<script>

   // $("#kt_datepicker_1").flatpickr();

    function doSearch()

{

const tableReg = document.getElementById('kt_ecommerce_report_shipping_table');

const searchText = document.getElementById('searchTerm').value.toLowerCase();

let total = 0;



// Recorremos todas las filas con contenido de la tabla

for (let i = 1; i < tableReg.rows.length; i++) {

    // Si el td tiene la clase "noSearch" no se busca en su cntenido

    if (tableReg.rows[i].classList.contains("noSearch")) {

        continue;

    }



    let found = false;

    const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

    // Recorremos todas las celdas

    for (let j = 0; j < cellsOfRow.length && !found; j++) {

        const compareWith = cellsOfRow[j].innerHTML.toLowerCase();

        // Buscamos el texto en el contenido de la celda

        if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {

            found = true;

            total++;

        }

    }

    if (found) {

        tableReg.rows[i].style.display = '';

    } else {

       

        tableReg.rows[i].style.display = 'none';

    }

}



// mostramos las coincidencias

const lastTR=tableReg.rows[tableReg.rows.length-1];

const td=lastTR.querySelector("td");

lastTR.classList.remove("hide", "red");

if (searchText == "") {

    lastTR.classList.add("hide");

} else if (total) {

    td.innerHTML="";

} else {

    lastTR.classList.add("red");

    td.innerHTML="";

}

}
</script>

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
                            
            <!--begin::Products-->
<div class="card card-flush" >
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5" >
        <!--begin::Card title-->
        <div class="card-title" >
            <!--begin::Search-->
   
            <div class="d-flex align-items-center position-relative my-1">
    
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i>                <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Buscar" spellcheck="false" data-ms-editor="true" id="searchTerm" onkeyup="doSearch()">
            </div>

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


@if (session('Error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert-error" style="margin-left: 25px;">
        {{ session('Error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        // Espera 4 segundos (4000 ms) y luego oculta el mensaje
        setTimeout(function () {
            let alertBox = document.getElementById('alert-error');
            if (alertBox) {
                alertBox.classList.remove('show');
                alertBox.classList.add('fade');
                alertBox.style.display = 'none';
            }
        }, 3000);
    </script>
@endif
            <!--end::Search-->

            <!--begin::Export buttons-->
            <div id="kt_ecommerce_report_returns_export" class="d-none"><div class="dt-buttons btn-group flex-wrap">      <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_returns_table" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_returns_table" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_returns_table" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="kt_ecommerce_report_returns_table" type="button"><span>PDF</span></button> </div></div>
            <!--end::Export buttons-->
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5" >
            <!--begin::Daterangepicker-->
 <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_stacked_1">
            Crear        </a>
<!--end::Daterangepicker-->

<!--begin::Export dropdown
<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
    <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i>    Exportar Reporte
</button>
-->
<!--end::Export dropdown-->        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0" style="min-height: 550px;">
        
<!--begin::Table-->
<div  id="kt_ecommerce_report_returns_table_wrapper" class="dt-container dt-bootstrap5 dt-empty-footer"><div id="" class="table-responsive">
    <table class="table align-middle table-bordered fs-6 gy-5 dataTable" id="kt_ecommerce_report_shipping_table" style="width: 100%;">
        <colgroup><col data-dt-column="0" style="width: 124.688px;"><col data-dt-column="1" style="width: 192.797px;"><col data-dt-column="2" style="width: 192.766px;"><col data-dt-column="3" style="width: 190.156px;"><col data-dt-column="4" style="width: 148.828px;"><col data-dt-column="5" style="width: 146.266px;"></colgroup>
    <thead>
        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
            <th class="min-w-100px dt-orderable-asc dt-orderable-desc text-center" data-dt-column="0" rowspan="1" colspan="1" aria-label="Date: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Fecha</span><span class="dt-column-order"></span>
            </th>

            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="1" rowspan="1" colspan="1" aria-label="No. Orders Returned: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Concepto</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="2" rowspan="1" colspan="1" aria-label="No. Orders Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Entrada</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-75px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="3" rowspan="1" colspan="1" aria-label="No. Orders Replaced: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Salida</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="4" rowspan="1" colspan="1" aria-label="Total Refunded: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Saldo</span><span class="dt-column-order"></span>
            </th>
            
            <th class="text-end min-w-100px dt-type-numeric dt-orderable-asc dt-orderable-desc text-center" data-dt-column="5" rowspan="1" colspan="1" aria-label="Total Replaced: Activate to sort" tabindex="0">
                <span class="dt-column-title" role="button">Cajero</span><span class="dt-column-order"></span>
            </th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
      
         @foreach ($cajas as $caja) 
             <tr class="'table-row-gray' : 'table-row-white' ">
                    <td class="text-center"> 
                    {{ date('d/m/Y', strtotime($caja->created_at)) }}
                    </td>
                    <td class="text-center">{{ $caja->concepto }}</td>
                    <td class="text-center">
                        @if ($caja->tipo == "Entrada")
                           $ {{ $caja->valor }}
                        @elseif ($caja->tipo == "Apertura de caja")
                            $ {{ $caja->valor }}
                        @else
                            $ 0.00
                        @endif
                    </td>
                    <td class="text-center">
                          @if ($caja->tipo == "Salida")
                           $ {{ $caja->valor }}
                        @elseif ($caja->tipo == "Cierre de caja")
                            $ {{ $caja->valor }}
                        @else
                            $ 0.00
                        @endif
                    </td>
                    <td class="text-center">
                        
                    $ {{$caja->saldo}}</td>
                    <td class="text-center">{{$caja->cajero}}</td>
                    </tr>
                    @endforeach
        </tbody>
<tfoot></tfoot></table></div><div id="" class="row">
    <div id="" class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start dt-toolbar" style="float:bottom;">
        <div >
    
           
<!--end::Table-->    </div>



    <!--end::Card body-->
</div>
<!--end::Products-->        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->	

                                    </div>



<!--inicia::Modal-->	

<div class="modal fade" tabindex="-1" id="kt_modal_stacked_1">
<div class="modal-dialog modal-dialog-centered">
     
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">Crear Movimiento</h3>
<form action="/caja/guardar" method="GET">
     
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
            </div>
            <!--end::Close-->
        </div>

        <div class="modal-body">
            
           <input type="text" name="cajero" class="form-control form-control-solid" value="{{ Auth::user()->name }}" readonly />
           <br>
            <input type="text" class="form-control form-control-solid" value="{{ date("d/m/Y") }}" readonly />
            
            <br>
            <input type="text" name="agencia" class="form-control form-control-solid" value="{{$empleado[0]->agencia}}" readonly/>
            <br>
          
              <select class="form-select form-select-solid" aria-label="Select example" name="concepto" id="select-concepto"> 
    <option>Concepto</option>
    @foreach ($conceptos as $concepto)
    <option value="{{$concepto->id}}">{{$concepto->concepto}}</option>
    @endforeach
</select>
            <br>
             <div id="input-cierre-wrapper3" class="mt-3">
            <input type="text" class="form-control form-control-solid" placeholder="$0.00" name="valor" />
            </div>
            
            <div class="row">
                <div class="col">
                    <div id="input-cierre-wrapper2" style="display: none;" class="mt-3">
                         
                             <label for="valor_caja" class="form-label">Saldo en caja</label>
                            @isset($caja->saldo)
                               <input type="text" name="valor_caja" id="valor_caja" class="form-control form-control-solid" placeholder="Saldo caja" value="{{$caja->saldo}}" readonly>
                            @endisset


                    </div>
                </div>
                <div class="col">
            <!-- Input oculto al principio -->
                    <div id="input-cierre-wrapper" style="display: none;" class="mt-3">
                        <label for="valor_cierre" class="form-label">Saldo de cajero</label>
                        <input type="text" name="valor_cierre" id="valor_cierre" class="form-control form-control-solid" placeholder="Saldo cajero">

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                
            <div id="input-saldo-final-wrapper" style="display: none;" class="mt-3">
               <label for="saldo_final" class="form-label">Descuadre</label>
                    <input type="number" name="saldo_final" id="saldo_final" class="form-control form-control-solid" placeholder="$0.00" readonly>
            </div>

              </div>
            </div>



        </div>



        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</div>
</div>




    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/js/custom/apps/ecommerce/reports/shipping/shipping.js"></script>
    <!--begin::Javascript-->
    <script>

    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
   





</body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectConcepto = document.getElementById('select-concepto');
        const inputWrapper = document.getElementById('input-cierre-wrapper');
        const inputWrapper2 = document.getElementById('input-cierre-wrapper2');
        const inputWrapper3 = document.getElementById('input-cierre-wrapper3');
        const inputSaldoFinal = document.getElementById('saldo_final');
        const inputSaldoFinalWrapper = document.getElementById('input-saldo-final-wrapper');
        const inputCierre = document.getElementById('valor_cierre');
        const inputcaja = document.getElementById('valor_caja');

        selectConcepto.addEventListener('change', function () {
            // Obtener el texto de la opción seleccionada
            const selectedText = selectConcepto.options[selectConcepto.selectedIndex].text;
            

            // Verificar si contiene "Cierre de caja"
            if (selectedText.includes('Cierre de caja')) {
                inputWrapper.style.display = 'block'; // Mostrar input
                inputWrapper2.style.display = 'block';
                inputWrapper3.style.display = 'none';
                inputSaldoFinalWrapper.style.display = 'block';

            } else {
                inputWrapper.style.display = 'none'; // Ocultar input
                inputWrapper2.style.display = 'none';
                inputWrapper3.style.display = 'block';
                inputSaldoFinalWrapper.style.display = 'none';
                inputSaldoFinal.value = '';
            }
        });


         // Calcular saldo final en tiempo real
        inputCierre.addEventListener('input', function () {
            const saldoCaja = parseFloat(inputcaja.value) || 0;
            const valorCierre = parseFloat(inputCierre.value) || 0;
            const saldoFinal = saldoCaja - valorCierre;

            inputSaldoFinal.value = saldoFinal.toFixed(2);
        });
    });
</script>
<!--end::Body-->

</html>