<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
	<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
		<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
			<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('element-11', 'fs-2') !!}</span>
					<span class="menu-title">Inicio</span>
					<span class="menu-arrow"></span>
				</span>
			</div>
			<div class="menu-item pt-5">
				<div class="menu-content">
					<span class="menu-heading fw-bold text-uppercase fs-7">Secciones</span>
				</div>
			</div>

	

			<div class="menu-item menu-sub-indention menu-accordion" id="menu-item-1" data-kt-menu-trigger="click">
				<span class="menu-link">
					<span class="menu-icon">{!! getIcon('address-book', 'fs-2') !!}</span>
					<span class="menu-title">Usuarios</span>
					<span class="menu-arrow"></span>
				</span>
 
					<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a href="/usuarios/lista" class="menu-link py-3" style="background-color: transparent;">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Lista de usuarios</span>
								</a>
							</div>

							
						</div>
						
					</div>


					<div data-kt-menu-trigger="click" id="menu-item-caja" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">{!! getIcon('setting-3', 'fs-2') !!}</span>
							<span class="menu-title">Caja</span>
							<span class="menu-arrow"></span>
						</span>

						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
							<a class="menu-link " href="{{ url('/caja/cajero') }}">
								<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
								<span class="menu-title">Movimientos de caja</span>
							</a>
							</div>
						</div>
					</div>


					<div data-kt-menu-trigger="click" id="menu-item-caja" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">{!! getIcon('setting-3', 'fs-2') !!}</span>
							<span class="menu-title">Entregar</span>
							<span class="menu-arrow"></span>
						</span>

						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
							<a class="menu-link " href="{{ url('/entregarenvio') }}">
								<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
								<span class="menu-title">Entregar</span>
							</a>
							</div>
						</div>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
							<a class="menu-link " href="{{ url('/entregarenlote') }}">
								<span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
								<span class="menu-title">Entrega multiple</span>
							</a>
							</div>
						</div>
					</div>




					<div data-kt-menu-trigger="click" id="menu-item-caja" class="menu-item menu-accordion">
						<a  href="{{ url('/cobro/cobrar') }}">
						<span class="menu-link">
							<span class="menu-icon">{!! getIcon('setting-3', 'fs-2') !!}</span>
							<span class="menu-title">Cobrar</span>
						
						</span>
						</a>

						
					</div>




				</div>
			
				


			
		
	</div>
</div>