<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
@include('admin.layouts.head')
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
	class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
	style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="overall_width">
		<div class="d-flex flex-column flex-root" style="height:100vh;">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<!-- aside-hoverable -->
				<div id="kt_aside" class="aside aside-dark" data-kt-drawer="true" data-kt-drawer-name="aside"
					data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
					data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
					data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo" style="background-color: #fff;">
						<!--begin::Logo-->
						<a href="/">
							<img style="width: 165px;" alt="Logo"
								src="{{asset('adminAssets/assets/images/logo_2.png')}}" class="logo" />
						</a>
						<!--end::Logo-->

						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
							data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
							data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<path opacity="0.5"
										d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
										fill="currentColor" />
									<path
										d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					@include('admin.layouts.sidebar')

					{{-- @if (session()->get('roleid') !=1)
						<head>
							<style>
							.wrapper {
								padding-left: 0px !important;
								padding-top: 0px !important;
							}

							.header {
								left: 0px !important;
								position: inherit !important;
							}

							.toolbar {
								position: inherit !important;
							}

							.overall_width {
								width: 90%;
								margin: 0px auto;
							}

							.menu-link {
								background-color: transparent !important;
								width: 300px;
							}

							.menu-link img {
								width: 100%;
							}

							.navbar {
								background-color: #3c2784 !important;
								border-radius: 5px;
							}

							.navbar .navbar-nav li a {
								color: #fff !important;
							}

							.progressbar {
								display: none;
							}
							</style>
						</head>
					@endif --}}

					<!--end::Aside menu-->
					
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper" style="padding-top: 45px; position: relative;">
					<!--begin::Header-->
					<div id="kt_header" style="margin-bottom: 30px; z-index:99999;" class="header align-items-stretch">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<!--begin::Aside mobile toggle-->
							<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
									id="kt_aside_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path
												d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Aside mobile toggle-->
							<!--begin::Mobile logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="{{ route('dashboard') }}" class="d-lg-none">
									<img alt="Logo" src="{{asset('adminAssets/assets/images/favicon.ico')}}" class="h-30px" />
								</a>
							</div>
							<!--end::Mobile logo-->
							<!--begin::Wrapper-->
							@include('admin.layouts.header')
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="min-height:580px;">

						<!--begin::Post-->
						{{-- @include('admin.layouts.toolbars') --}}
						@yield('content')
						<!--end::Post-->
						<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
							<span class="svg-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
										transform="rotate(90 13 6)" fill="currentColor" />
									<path
										d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
					</div>
					<!--end::Content-->
					<section id="loading" style="display: none">
						<div class="loader"></div>
					</section>
					<!--begin::Footer-->
					@include('admin.layouts.footer')
					<!--end::Footer-->
				</div>

				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
	</div>
	<!--end::Root-->
	<!--end::Main-->
	<!--begin::Javascript-->
	@include('admin.layouts.scripts')
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>