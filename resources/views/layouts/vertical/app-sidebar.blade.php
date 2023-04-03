				<!--aside open-->
				<aside class="app-sidebar">
					<div class="app-sidebar__logo">
						<a class="header-brand" href="{{url('index')}}">
							<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
							<img src="{{asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Azea logo">
							<img src="{{asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Azea logo">
							<img src="{{asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Azea logo">
						</a>
					</div>
					<ul class="side-menu app-sidebar3">
						<li class="side-item side-item-category">Main</li>
						<li class="slide">
							<a class="side-menu__item"  href="{{url('index')}}">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg>
							<span class="side-menu__label">Dashboard</span></a>
						</li>
						<li class="side-item side-item-category">Components</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M12 22c4.879 0 9-4.121 9-9s-4.121-9-9-9-9 4.121-9 9 4.121 9 9 9zm0-16c3.794 0 7 3.206 7 7s-3.206 7-7 7-7-3.206-7-7 3.206-7 7-7zm5.284-2.293 1.412-1.416 3.01 3-1.413 1.417zM5.282 2.294 6.7 3.706l-2.99 3-1.417-1.413z"/><path d="M11 9h2v5h-2zm0 6h2v2h-2z"/></svg>
							<span class="side-menu__label">Utilities</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('element-border')}}" class="slide-item"> Border</a></li>
								<li><a href="{{url('element-colors')}}" class="slide-item"> Colors</a></li>
								<li><a href="{{url('element-display')}}" class="slide-item"> Display</a></li>
								<li><a href="{{url('element-flex')}}" class="slide-item"> Flex Items</a></li>
								<li><a href="{{url('element-height')}}" class="slide-item"> Height</a></li>
								<li><a href="{{url('element-margin')}}" class="slide-item"> Margin</a></li>
								<li><a href="{{url('element-padding')}}" class="slide-item"> Padding</a></li>
								<li><a href="{{url('element-typography')}}" class="slide-item"> Typhography</a></li>
								<li><a href="{{url('element-width')}}" class="slide-item"> Width</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 17V7c0-2.168-3.663-4-8-4S4 4.832 4 7v10c0 2.168 3.663 4 8 4s8-1.832 8-4zM12 5c3.691 0 5.931 1.507 6 1.994C17.931 7.493 15.691 9 12 9S6.069 7.493 6 7.006C6.069 6.507 8.309 5 12 5zM6 9.607C7.479 10.454 9.637 11 12 11s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2V9.607zM6 17v-2.393C7.479 15.454 9.637 16 12 16s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2z"/></svg>
							<span class="side-menu__label">Elements</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('accordion')}}" class="slide-item"> Accordion</a></li>
								<li><a href="{{url('alerts')}}" class="slide-item"> Alerts</a></li>
								<li><a href="{{url('avatars')}}" class="slide-item"> Avatars</a></li>
								<li><a href="{{url('badge')}}" class="slide-item"> Badges</a></li>
								<li><a href="{{url('breadcrumbs')}}" class="slide-item"> Breadcrumb</a></li>
								<li><a href="{{url('buttons')}}" class="slide-item"> Buttons</a></li>
								<li><a href="{{url('cards')}}" class="slide-item"> Cards</a></li>
								<li><a href="{{url('cards-image')}}" class="slide-item"> Card Images</a></li>
								<li><a href="{{url('carousel')}}" class="slide-item"> Carousel</a></li>
								<li><a href="{{url('dropdown')}}" class="slide-item"> Dropdown</a></li>
								<li><a href="{{url('footers')}}" class="slide-item"> Footers</a></li>
								<li><a href="{{url('listpage')}}" class="slide-item"> List Group</a></li>
								<li><a href="{{url('media-object')}}" class="slide-item"> Media Obejct</a></li>
								<li><a href="{{url('modal')}}" class="slide-item"> Modal</a></li>
								<li><a href="{{url('navigation')}}" class="slide-item"> Navigation</a></li>
								<li><a href="{{url('pagination')}}" class="slide-item"> Pagination</a></li>
								<li><a href="{{url('panels')}}" class="slide-item"> Panel</a></li>
								<li><a href="{{url('popover')}}" class="slide-item"> Popover</a></li>
								<li><a href="{{url('progress')}}" class="slide-item"> Progress</a></li>
								<li><a href="{{url('tabs')}}" class="slide-item"> Tabs</a></li>
								<li><a href="{{url('tags')}}" class="slide-item"> Tags</a></li>
								<li><a href="{{url('tooltip')}}" class="slide-item"> Tooltips</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"/></svg>
							<span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu ">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Chat</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('chat')}}">Chat 01</a></li>
										<li><a class="sub-slide-item" href="{{url('chat2')}}">Chat 02</a></li>

									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Contact</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('contact-list')}}">Contact list 01</a></li>
										<li><a class="sub-slide-item" href="{{url('contact-list2')}}">Contact list 02</a></li>
									</ul>
								</li>
								<li><a href="{{url('calendar')}}" class="slide-item"> Calendar</a></li>
								<li><a href="{{url('cookies')}}" class="slide-item"> Cookies</a></li>
								<li><a href="{{url('counters')}}" class="slide-item"> Counters</a></li>
								<li><a href="{{url('dragula')}}" class="slide-item"> Dragula Card</a></li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">File Manager</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('file-manager')}}">File Manager 01</a></li>
										<li><a class="sub-slide-item" href="{{url('file-manager-list')}}">File Manager 02</a></li>
									</ul>
								</li>
								<li><a href="{{url('image-comparison')}}" class="slide-item"> Image Comparison</a></li>
								<li><a href="{{url('img-crop')}}" class="slide-item"> Image Crop</a></li>
								<li><a href="{{url('loaders')}}" class="slide-item"> Loaders</a></li>
								<li><a href="{{url('notify')}}" class="slide-item"> Notifications</a></li>
								<li><a href="{{url('page-sessiontimeout')}}" class="slide-item"> Page-sessiontimeout</a></li>
								<li><a href="{{url('rangeslider')}}" class="slide-item"> Range slider</a></li>
								<li><a href="{{url('rating')}}" class="slide-item"> Rating</a></li>
								<li><a href="{{url('sweetalert')}}" class="slide-item"> Sweet alerts</a></li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Todo List</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('todo-list')}}">Todo List 01</a></li>
										<li><a class="sub-slide-item" href="{{url('todo-list2')}}">Todo List 02</a></li>
										<li><a class="sub-slide-item" href="{{url('todo-list3')}}">Todo List 03</a></li>
									</ul>
								</li>
								<li><a href="{{url('time-line')}}" class="slide-item"> Time Line</a></li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">User List</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('users-list1')}}">User List 01</a></li>

										<li><a class="sub-slide-item" href="{{url('users-list3')}}">User List 03</a></li>

									</ul>
								</li>
							</ul>
						</li>
						<li class="side-item side-item-category">Tables & Icons </li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 2 .001 4H5V5h14zM5 11h8v8H5v-8zm10 8v-8h4.001l.001 8H15z"/></svg>
							<span class="side-menu__label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('tables')}}" class="slide-item">Default table</a></li>
								<li><a href="{{url('datatable')}}" class="slide-item">Data Table</a></li>
							</ul>
						</li>
						<li class="slide">
						    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 7h-1.209A4.92 4.92 0 0 0 19 5.5C19 3.57 17.43 2 15.5 2c-1.622 0-2.705 1.482-3.404 3.085C11.407 3.57 10.269 2 8.5 2 6.57 2 5 3.57 5 5.5c0 .596.079 1.089.209 1.5H4c-1.103 0-2 .897-2 2v2c0 1.103.897 2 2 2v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zm-4.5-3c.827 0 1.5.673 1.5 1.5C17 7 16.374 7 16 7h-2.478c.511-1.576 1.253-3 1.978-3zM7 5.5C7 4.673 7.673 4 8.5 4c.888 0 1.714 1.525 2.198 3H8c-.374 0-1 0-1-1.5zM4 9h7v2H4V9zm2 11v-7h5v7H6zm12 0h-5v-7h5v7zm-5-9V9.085L13.017 9H20l.001 2H13z"/></svg>
							<span class="side-menu__label">Icons</span><span class="badge bg-danger  side-badge">11</span></a>
							<ul class="slide-menu">
								<li><a href="{{url('icons')}}" class="slide-item"> Font Awesome</a></li>
								<li><a href="{{url('icons2')}}" class="slide-item"> Material Design Icons</a></li>
								<li><a href="{{url('icons3')}}" class="slide-item"> Simple Line Icons</a></li>
								<li><a href="{{url('icons4')}}" class="slide-item"> Feather Icons</a></li>
								<li><a href="{{url('icons5')}}" class="slide-item"> Ionic Icons</a></li>
								<li><a href="{{url('icons6')}}" class="slide-item"> Flag Icons</a></li>
								<li><a href="{{url('icons7')}}" class="slide-item"> pe7 Icons</a></li>
								<li><a href="{{url('icons8')}}" class="slide-item"> Themify Icons</a></li>
								<li><a href="{{url('icons9')}}" class="slide-item">Typicons Icons</a></li>
								<li><a href="{{url('icons10')}}" class="slide-item">Weather Icons</a></li>
								<li><a href="{{url('icons11')}}" class="slide-item">Material Svgs</a></li>
								<li><a href="{{url('icons12')}}" class="slide-item">Bootstrap Svgs</a></li>
								</ul>
						</li>
						<li class="side-item side-item-category">Widgets & Maps</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11 4h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6h-4v-4h4v4zM17 3c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2zM7 13c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"/></svg>
							<span class="side-menu__label">Widgets</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu ">
								<li><a href="{{url('widgets2')}}" class="slide-item">Chart Widgets</a></li>
								<li><a href="{{url('widgets1')}}" class="slide-item">Widgets</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="m21.447 6.105-6-3a1 1 0 0 0-.895 0L9 5.882 3.447 3.105A1 1 0 0 0 2 4v13c0 .379.214.725.553.895l6 3a1 1 0 0 0 .895 0L15 18.118l5.553 2.776a.992.992 0 0 0 .972-.043c.295-.183.475-.504.475-.851V7c0-.379-.214-.725-.553-.895zM10 7.618l4-2v10.764l-4 2V7.618zm-6-2 4 2v10.764l-4-2V5.618zm16 12.764-4-2V5.618l4 2v10.764z"/></svg>
							<span class="side-menu__label">Map</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('maps2')}}" class="slide-item">Leaflet Maps</a></li>
								<li><a href="{{url('maps')}}" class="slide-item">Vector Maps</a></li>
							</ul>
						</li>
						<li class="side-item side-item-category">Forms & Charts </li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M19.937 8.68c-.011-.032-.02-.063-.033-.094a.997.997 0 0 0-.196-.293l-6-6a.997.997 0 0 0-.293-.196c-.03-.014-.062-.022-.094-.033a.991.991 0 0 0-.259-.051C13.04 2.011 13.021 2 13 2H6c-1.103 0-2 .897-2 2v16c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2V9c0-.021-.011-.04-.013-.062a.99.99 0 0 0-.05-.258zM16.586 8H14V5.414L16.586 8zM6 20V4h6v5a1 1 0 0 0 1 1h5l.002 10H6z"/></svg>
							<span class="side-menu__label">Forms</span><span class="badge bg-success side-badge">6</span></a>
							<ul class="slide-menu">
								<li><a href="{{url('form-elements')}}" class="slide-item"> Form Elements</a></li>
								<li><a href="{{url('advanced-forms')}}" class="slide-item"> Advanced Forms</a></li>
								<li><a href="{{url('form-wizard')}}" class="slide-item"> Form Wizard</a></li>
								<li><a href="{{url('form-editor')}}" class="slide-item"> Form Editor</a></li>
								<li><a href="{{url('form-sizes')}}" class="slide-item"> Form Element Sizes</a></li>
								<li><a href="{{url('form-treeview')}}" class="slide-item"> Form Treeview</a></li>
								<li><a href="{{url('form-validations')}}" class="slide-item"> Form Validations</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M20 7h-4V4c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H4c-1.103 0-2 .897-2 2v9a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9c0-1.103-.897-2-2-2zM4 11h4v8H4v-8zm6-1V4h4v15h-4v-9zm10 9h-4V9h4v10z"/></svg>
							<span class="side-menu__label">Charts</span><span class="badge bg-info side-badge">7</span></a>
							<ul class="slide-menu">
								<li><a href="{{url('chart-apex')}}" class="slide-item"> Apex Charts</a></li>
								<li><a href="{{url('chart-chartist')}}" class="slide-item">Chartjs Charts</a></li>
								<li><a href="{{url('chart-echart')}}" class="slide-item"> Echart Charts</a></li>
								<li><a href="{{url('chart-flot')}}" class="slide-item"> Flot Charts</a></li>
								<li><a href="{{url('chart-morris')}}" class="slide-item"> Morris Charts</a></li>
								<li><a href="{{url('chart-peity')}}" class="slide-item"> Pie Charts</a></li>
								<li><a href="{{url('chart-c3')}}" class="slide-item">C3 Charts</a></li>
							</ul>
						</li>
						<li class="side-item side-item-category">Custom  & Error Pages</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M3 11h8V3H3zm2-6h4v4H5zM3 21h8v-8H3zm2-6h4v4H5zm8-12v8h8V3zm6 6h-4V5h4zm-5.99 4h2v2h-2zm2 2h2v2h-2zm-2 2h2v2h-2zm4 0h2v2h-2zm2 2h2v2h-2zm-4 0h2v2h-2zm2-6h2v2h-2zm2 2h2v2h-2z"/></svg>
							<span class="side-menu__label">Custom Pages</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Register</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('register1')}}">Register 01</a></li>
										<li><a class="sub-slide-item" href="{{url('register2')}}">Register 02</a></li>
										<li><a class="sub-slide-item" href="{{url('register3')}}">Register 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Login</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('login1')}}">Login 01</a></li>
										<li><a class="sub-slide-item" href="{{url('login2')}}">Login 02</a></li>
										<li><a class="sub-slide-item" href="{{url('login3')}}">Login 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Forget Password</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('forgot-password1')}}">Forget Password 01</a></li>
										<li><a class="sub-slide-item" href="{{url('forgot-password2')}}">Forget Password 02</a></li>
										<li><a class="sub-slide-item" href="{{url('forgot-password3')}}">Forget Password 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Reset Password</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('reset-password1')}}">Reset Password 01</a></li>
										<li><a class="sub-slide-item" href="{{url('reset-password2')}}">Reset Password 02</a></li>
										<li><a class="sub-slide-item" href="{{url('reset-password3')}}">Reset Password 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Lock Screen</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('lockscreen1')}}">Lock Screen 01</a></li>
										<li><a class="sub-slide-item" href="{{url('lockscreen2')}}">Lock Screen 02</a></li>
										<li><a class="sub-slide-item" href="{{url('lockscreen3')}}">Lock Screen 03</a></li>
									</ul>
								</li>
								<li><a href="{{url('construction')}}" class="slide-item"> Under Construction</a></li>
								<li><a href="{{url('coming')}}" class="slide-item"> Coming Soon</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M16 2H8C4.691 2 2 4.691 2 8v13a1 1 0 0 0 1 1h13c3.309 0 6-2.691 6-6V8c0-3.309-2.691-6-6-6zm4 14c0 2.206-1.794 4-4 4H4V8c0-2.206 1.794-4 4-4h8c2.206 0 4 1.794 4 4v8z"/><path d="M11 6h2v8h-2zm0 10h2v2h-2z"/></svg>
							<span class="side-menu__label">Error Pages</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{url('error400')}}" class="slide-item"> 400</a></li>
								<li><a href="{{url('error401')}}" class="slide-item"> 401</a></li>
								<li><a href="{{url('error403')}}" class="slide-item"> 403</a></li>
								<li><a href="{{url('error404')}}" class="slide-item"> 404</a></li>
								<li><a href="{{url('error500')}}" class="slide-item"> 500</a></li>
								<li><a href="{{url('error503')}}" class="slide-item"> 503</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/></svg>
							<span class="side-menu__label">Sub Menus</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu ">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Submenu 1</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="javascript:void(0);">Submenu 1.1</a></li>
										<li class="sub-slide2">
											<a class="sub-slide-item2"  data-bs-toggle="sub-slide2" href="javascript:void(0);"><span class="sub-side-menu__label2">Submenu 1.2</span><i class="sub-angle2 fe fe-chevron-right"></i></a>
											<ul class="sub-slide-menu2">
												<li><a href="javascript:void(0);" class="sub-slide-item2">Submenu 1.2.1</a></li>
												<li><a href="javascript:void(0);" class="sub-slide-item2">Submenu 1.2.2</a></li>
												<li><a href="javascript:void(0);" class="sub-slide-item2">Submenu 1.2.3</a></li>
											</ul>
										</li>
										<li><a class="sub-slide-item" href="javascript:void(0);">Submenu 1.3</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0);" class="slide-item">Submenu 2</a></li>
								<li><a href="javascript:void(0);" class="slide-item">Submenu 3</a></li>
								<li><a href="javascript:void(0);" class="slide-item">Submenu 4</a></li>
							</ul>
						</li>
						<li class="side-item side-item-category">Pages & E-Commerce</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
							<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M22 7.999a1 1 0 0 0-.516-.874l-9.022-5a1.003 1.003 0 0 0-.968 0l-8.978 4.96a1 1 0 0 0-.003 1.748l9.022 5.04a.995.995 0 0 0 .973.001l8.978-5A1 1 0 0 0 22 7.999zm-9.977 3.855L5.06 7.965l6.917-3.822 6.964 3.859-6.918 3.852z"/><path d="M20.515 11.126 12 15.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z"/><path d="M20.515 15.126 12 19.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z"/></svg>
							<span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="slide-menu">
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Profile</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('profile1')}}">Profile 01</a></li>
										<li><a class="sub-slide-item" href="{{url('profile2')}}">Profile 02</a></li>
										<li><a class="sub-slide-item" href="{{url('profile3')}}">Profile 03</a></li>
									</ul>
								</li>
								<li><a href="{{url('editprofile')}}" class="slide-item"> Edit Profile</a></li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Email</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('email-compose')}}">Email Compose</a></li>
										<li><a class="sub-slide-item" href="{{url('email-inbox')}}">Email Inbox</a></li>
										<li><a class="sub-slide-item" href="{{url('email-read')}}">Email Read</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Pricing</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('pricing')}}">Pricing 01</a></li>
										<li><a class="sub-slide-item" href="{{url('pricing2')}}">Pricing 02</a></li>
										<li><a class="sub-slide-item" href="{{url('pricing3')}}">Pricing 03</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Invoice</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('invoice-list')}}">Invoice list</a></li>
										<li><a class="sub-slide-item" href="{{url('invoice1')}}">Invoice 01</a></li>
										<li><a class="sub-slide-item" href="{{url('invoice2')}}">Invoice 02</a></li>
										<li><a class="sub-slide-item" href="{{url('invoice3')}}">Invoice 03</a></li>
										<li><a class="sub-slide-item" href="{{url('invoice-add')}}">Add Invoice</a></li>
										<li><a class="sub-slide-item" href="{{url('invoice-edit')}}">Edit Invoice</a></li>
									</ul>
								</li>
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span class="sub-side-menu__label">Blog</span><i class="sub-angle fe fe-chevron-right"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{url('blog')}}">Blog 01</a></li>
										<li><a class="sub-slide-item" href="{{url('blog2')}}">Blog 02</a></li>
										<li><a class="sub-slide-item" href="{{url('blog3')}}">Blog 03</a></li>
										<li><a class="sub-slide-item" href="{{url('blog-styles')}}">Blog Styles</a></li>
									</ul>
								</li>
								<li><a href="{{url('gallery')}}" class="slide-item"> Gallery</a></li>
								<li><a href="{{url('faq')}}" class="slide-item"> FAQS</a></li>
								<li><a href="{{url('terms')}}" class="slide-item"> Terms</a></li>
								<li><a href="{{url('search')}}" class="slide-item"> Search</a></li>
								<li><a href="{{url('emptypage')}}" class="slide-item"> Empty Page</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z"/></svg>
							<span class="side-menu__label">E-Commerce</span><span class="badge bg-secondary side-badge">5</span></a>
							<ul class="slide-menu">
								<li><a href="{{url('shop')}}" class="slide-item"> Products</a></li>
								<li><a href="{{url('shop-des')}}" class="slide-item">Product Details</a></li>
								<li><a href="{{url('cart')}}" class="slide-item"> Shopping Cart</a></li>
                                 <li><a href="{{url('checkout')}}" class="slide-item"> Checkout</a></li>
								<li><a href="{{url('wishlist')}}" class="slide-item">wishlist</a></li>
							</ul>
						</li>
					</ul>
				</aside>
				<!--aside closed-->