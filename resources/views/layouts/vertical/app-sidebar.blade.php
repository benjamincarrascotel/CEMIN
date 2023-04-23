				<!--aside open-->
				<aside class="app-sidebar">
					<div class="app-sidebar__logo">
						@if(auth()->user()->admin)
							<a class="header-brand" href="{{route('admin.index')}}">
						@elseif(auth()->user()->superadmin)
							<a class="header-brand" href="{{route('superadmin.index')}}">
						@endif
							<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
							<img src="{{asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Azea logo">
							<img src="{{asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Azea logo">
							<img src="{{asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Azea logo">
						</a>
					</div>

					<ul class="side-menu app-sidebar3">
						<li class="side-item side-item-category">Principal</li>

						@if(auth()->user()->superadmin)
						<li class="slide">
							<a class="side-menu__item"  href="{{route('superadmin.index')}}">
							<span class="side-menu__label">Dashboard SuperAdmin</span></a>
						</li>
						
						@elseif(auth()->user()->admin)
						<li class="slide">
							<a class="side-menu__item"  href="{{route('admin.index')}}">
							<span class="side-menu__label">Dashboard Admin</span></a>
						</li>
						@endif

						
						@if(auth()->user()->superadmin)
						<li class="side-item side-item-category">Administracion</li>
						<!-- USUARIOS -->
						<li class="slide">
							<a class="side-menu__item"  href="{{route('usuarios.index')}}">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M9.36264 3.53846C7.60261 3.53846 6.17582 4.96525 6.17582 6.72528C6.17582 8.4853 7.60261 9.91209 9.36264 9.91209C11.1227 9.91209 12.5494 8.4853 12.5494 6.72528C12.5494 4.96525 11.1227 3.53846 9.36264 3.53846ZM4.63736 6.72528C4.63736 4.11558 6.75294 2 9.36264 2C11.9723 2 14.0879 4.11558 14.0879 6.72528C14.0879 9.33497 11.9723 11.4506 9.36264 11.4506C6.75294 11.4506 4.63736 9.33497 4.63736 6.72528Z" />
									<path fill-rule="evenodd" clip-rule="evenodd" d="M7.41153 15.4066C5.27249 15.4066 3.53846 17.1406 3.53846 19.2797C3.53846 19.3861 3.55682 19.4596 3.57526 19.5013C3.59011 19.5348 3.60106 19.5412 3.60591 19.544C4.13353 19.8541 5.65133 20.4615 9.36264 20.4615C13.0739 20.4615 14.5913 19.8543 15.1189 19.5443C15.1238 19.5414 15.1352 19.5348 15.15 19.5013C15.1685 19.4596 15.1868 19.3861 15.1868 19.2797C15.1868 17.1406 13.4528 15.4066 11.3137 15.4066H7.41153ZM2 19.2797C2 16.291 4.42282 13.8681 7.41153 13.8681H11.3137C14.3024 13.8681 16.7253 16.291 16.7253 19.2797C16.7253 19.7944 16.5513 20.4869 15.8984 20.8706C15.0381 21.3763 13.2089 22 9.36264 22C5.51639 22 3.68722 21.3763 2.82683 20.8706C2.17398 20.4869 2 19.7944 2 19.2797Z" />
									<path fill-rule="evenodd" clip-rule="evenodd" d="M15.5431 3.88721C15.654 3.47709 16.0763 3.23448 16.4864 3.34532C18.1832 3.80392 19.3626 5.47949 19.3626 7.38461C19.3626 9.39763 17.9829 11.2126 16.0478 11.4451C15.626 11.4957 15.243 11.1949 15.1923 10.7731C15.1416 10.3513 15.4425 9.96824 15.8643 9.91758C16.8962 9.79362 17.8242 8.75741 17.8242 7.38461C17.8242 6.08213 17.0256 5.0847 16.085 4.8305C15.6749 4.71966 15.4323 4.29733 15.5431 3.88721Z" />
									<path fill-rule="evenodd" clip-rule="evenodd" d="M17.8384 14.4901C17.9197 14.0731 18.3237 13.801 18.7407 13.8824C20.6337 14.2516 22 15.91 22 17.8388V18.3735C22 18.8469 21.858 19.5212 21.2404 19.9159C20.8246 20.1817 20.1798 20.4649 19.1855 20.666C18.7691 20.7503 18.3633 20.481 18.279 20.0646C18.1948 19.6482 18.464 19.2424 18.8804 19.1581C19.7287 18.9865 20.1871 18.7633 20.4118 18.6197L20.4136 18.6179C20.4153 18.6158 20.4213 18.6077 20.4287 18.5896C20.4451 18.5498 20.4615 18.4784 20.4615 18.3735V17.8388C20.4615 16.6462 19.6167 15.6207 18.4462 15.3924C18.0292 15.311 17.7571 14.9071 17.8384 14.4901Z" />
								</svg>
							<span class="side-menu__label">Usuarios</span></a>
						</li>
						@endif

						@if(auth()->user()->superadmin)
						<li class="side-item side-item-category">Contratos</li>

						<!-- CREAR -->
						<li class="slide">
							<a class="side-menu__item"  href="{{route('contrato.create')}}">
								<svg class="side-menu__icon" width="24" height="24" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h32v32H0z"/><path d="M19.12 0a6 6 0 0 1 4.69 2.259l4.88 6.118A6 6 0 0 1 30 12.118V26a6 6 0 0 1-6 6H8a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6zm0 2H8a4 4 0 0 0-3.995 3.8L4 6v20a4 4 0 0 0 3.8 3.995L8 30h16a4 4 0 0 0 3.995-3.8L28 26V12.118a4 4 0 0 0-.725-2.297l-.148-.197-4.88-6.118a4 4 0 0 0-2.9-1.5zM16 11a1 1 0 0 1 1 1v4h4a1 1 0 0 1 0 2h-4v4a1 1 0 0 1-2 0v-4h-4a1 1 0 0 1 0-2h4v-4a1 1 0 0 1 1-1z" fill="#000" fill-rule="nonzero"/></g></svg>							
							<span class="side-menu__label">Crear</span></a>
						</li>

						<!-- DETALLES -->
						<li class="slide">
							<a class="side-menu__item"  href="{{route('contrato.detalles')}}">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" fill="none" viewBox="0 0 38.086 38.086" style="enable-background:new 0 0 38.086 38.086" xml:space="preserve"><path d="M28.451 14.074C28.451 6.313 22.138 0 14.378 0 6.618 0 .305 6.313.305 14.074s6.312 14.072 14.072 14.072c7.761 0 14.074-6.312 14.074-14.072zM14.378 24.613c-5.812 0-10.539-4.729-10.539-10.539 0-5.812 4.729-10.541 10.539-10.541 5.812 0 10.54 4.729 10.54 10.541s-4.729 10.539-10.54 10.539zm23.403 10.362-3.111 3.111-10.813-10.811 3.111-3.111 10.813 10.811z"/></svg>
							<span class="side-menu__label">Detalles</span></a>
						</li>

						<!-- PLAN DE CONTRATOS -->
						<li class="slide">
							<a class="side-menu__item"  href="{{route('contrato.plan')}}">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 489.6 489.6" style="enable-background:new 0 0 489.6 489.6" xml:space="preserve"><path d="m311.6 437.9-129.4 34.6 9.4-34.6H44.7V51.7h293v168.2l44.7-44.7V3.1H0v483.4h382.4V369.2z"/><path d="m235.1 364.9-20.2 74.6 75-19.8zm190.4-200.2L246.7 343.5l.4.4 63.8 63.7h.4l178.3-178.7zm-132.9-59.4H91.7c-6.2 0-11.7 5.1-11.7 11.7 0 6.2 5.1 11.7 11.7 11.7h200.9c6.2 0 11.7-5.1 11.7-11.7 0-6.3-5.5-11.7-11.7-11.7zm0 71.1H91.7c-6.2 0-11.7 5.1-11.7 11.7 0 6.2 5.1 11.7 11.7 11.7h200.9c6.2 0 11.7-5.1 11.7-11.7 0-6.3-5.5-11.7-11.7-11.7zm11.7 82.8c0-6.2-5.1-11.7-11.7-11.7H91.7c-6.2 0-11.7 5.1-11.7 11.7 0 6.2 5.1 11.7 11.7 11.7h200.9c6.2-.1 11.7-5.5 11.7-11.7z"/></svg>
							<span class="side-menu__label">Plan de Contratos</span></a>
						</li>

						<!-- FECHA DE CONTRATOS -->
						<li class="slide">
							<a class="side-menu__item"  href="{{route('contrato.fechas')}}">
								<svg class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22 2.25h-3.25V.75a.75.75 0 0 0-1.5-.001V2.25h-4.5V.75a.75.75 0 0 0-1.5-.001V2.25h-4.5V.75a.75.75 0 0 0-1.5-.001V2.25H2a2 2 0 0 0-2 1.999v17.75a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V4.249a2 2 0 0 0-2-1.999zM22.5 22a.5.5 0 0 1-.499.5H2a.5.5 0 0 1-.5-.5V4.25a.5.5 0 0 1 .5-.499h3.25v1.5a.75.75 0 0 0 1.5.001V3.751h4.5v1.5a.75.75 0 0 0 1.5.001V3.751h4.5v1.5a.75.75 0 0 0 1.5.001V3.751H22a.5.5 0 0 1 .499.499z"/><path d="M5.25 9h3v2.25h-3zm0 3.75h3V15h-3zm0 3.75h3v2.25h-3zm5.25 0h3v2.25h-3zm0-3.75h3V15h-3zm0-3.75h3v2.25h-3zm5.25 7.5h3v2.25h-3zm0-3.75h3V15h-3zm0-3.75h3v2.25h-3z"/></svg>
							<span class="side-menu__label">Fechas de Contratos</span></a>
						</li>

						<!-- CRONOGRAMA LICITACION -->
						<li class="slide">
							<a class="side-menu__item"  href="{{route('contrato.cronograma')}}">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 32 32" data-name="Layer 1">
									<path d="M29.92 16.38a1 1 0 0 0 0-.76 1 1 0 0 0-.21-.33l-6-6a1 1 0 0 0-1.42 1.42l4.3 4.29H16V7a2 2 0 0 0-2-2h-4V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V7h4v8h-4v-1a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-1h4v8h-4v-1a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-1h4a2 2 0 0 0 2-2v-8h10.59l-4.3 4.29a1 1 0 0 0 0 1.42 1 1 0 0 0 1.42 0l6-6a1 1 0 0 0 .21-.33ZM8 8H4V4h4Zm0 10H4v-4h4Zm0 10H4v-4h4Z" style="fill:#4d4d4d"/>
								</svg>							
							<span class="side-menu__label">Cronograma Licitación</span></a>
						</li>

						<!-- KPI'S Gastos -->
						<li class="slide">
							<a class="side-menu__item"  href="{{route('contrato.kpis')}}">
								<svg class="side-menu__icon" width="24" height="24" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M7.667 27.503 2 22.448l1.331-1.492 5.641 5.031 7.69-7.445a1.928 1.928 0 0 1 2.674-.008l3.624 3.464 5.58-5.973L30 17.39l-5.581 5.975a1.996 1.996 0 0 1-2.838.08l-3.577-3.419-7.666 7.42a1.963 1.963 0 0 1-2.671.056ZM30 11h-4l2-3 2 3zm-8-7h-4v2h4v2h-3v2h3v2h-4v2h4a2.003 2.003 0 0 0 2-2V6a2.002 2.002 0 0 0-2-2Zm-6 10h-6v-4a2.002 2.002 0 0 1 2-2h2V6h-4V4h4a2.002 2.002 0 0 1 2 2v2a2.002 2.002 0 0 1-2 2h-2v2h4ZM6 12V4H4v1H2v2h2v5H2v2h6v-2H6z"/><path data-name="&lt;Transparent Rectangle&gt;" style="fill:none" d="M0 0h32v32H0z"/></svg>
							<span class="side-menu__label">KPI'S Gastos</span></a>
						</li>
						@endif

					</ul>
				</aside>
				<!--aside closed-->