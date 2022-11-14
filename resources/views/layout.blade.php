<!DOCTYPE html>

<html lang="en">

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="description" content="Inicio que da acceso a el sistema de don galleto" />
    <meta name="keywords" content="galletas, inicio, don galleto, gestion" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="es_MX" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Inicio" />
    <meta property="og:site_name" content="Don galleto sistema de gestión" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    @yield('link')
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <div id="kt_aside" class="aside aside-extended bg-white" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                <div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
                    <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto pt-10"
                        id="kt_aside_logo">
                        <img alt="Logo" src="{{ asset('assets/media/logos/logoSM.svg') }}" class="h-55px">
                    </div>
                    <div class="aside-nav d-flex flex-column flex-lg-center flex-column-fluid w-100 py-5 px-3"
                        id="kt_aside_nav">
                        <div class="w-100 hover-scroll-overlay-y d-flex" id="kt_aside_menu_wrapper"
                            data-kt-scroll="true" data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                            data-kt-scroll-wrappers="#kt_aside, #kt_aside_nav, #kt_aside_menu_wrapper"
                            data-kt-scroll-offset="5px" style="height: 436px;">
                            <div id="kt_aside_menu"
                                class="menu menu-column menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 my-auto"
                                data-kt-menu="true">
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item  show py-2"
                                    class="menu-item {{ Request::is('dashboard') ? 'show' : '' }} py-2">
                                    <span class="menu-link menu-center">
                                        <span class="menu-icon me-0">
                                            <span onclick="window.location.href='{{ url('/dashboard') }}';" class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Home/Home.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24"
                                                            height="24" />
                                                        <path
                                                            d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </span>
                                    <div class="menu-sub menu-sub-dropdown w-100px px-1 py-4">
                                        <div class="menu-item">
                                            <div class="menu-content">
                                                <span class="menu-section fs-5 fw-bolder ps-1 py-1">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Dashboard</font>
                                                    </font>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-placement="right-start"
                                    class="menu-item {{ Request::is('ventas') ? 'show' : '' }} py-2">
                                    <span class="menu-link menu-center">
                                        <span class="menu-icon me-0">
                                            <span onclick="window.location.href='{{ url('/ventas') }}';"
                                                class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Shopping/Bag1.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24"
                                                            height="24" />
                                                        <path
                                                            d="M14,9 L14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 L10,9 L8,9 L8,8 C8,5.790861 9.790861,4 12,4 C14.209139,4 16,5.790861 16,8 L16,9 L14,9 Z M14,9 L14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 L10,9 L8,9 L8,8 C8,5.790861 9.790861,4 12,4 C14.209139,4 16,5.790861 16,8 L16,9 L14,9 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M6.84712709,9 L17.1528729,9 C17.6417121,9 18.0589022,9.35341304 18.1392668,9.83560101 L19.611867,18.671202 C19.7934571,19.7607427 19.0574178,20.7911977 17.9678771,20.9727878 C17.8592143,20.9908983 17.7492409,21 17.6390792,21 L6.36092084,21 C5.25635134,21 4.36092084,20.1045695 4.36092084,19 C4.36092084,18.8898383 4.37002252,18.7798649 4.388133,18.671202 L5.86073316,9.83560101 C5.94109783,9.35341304 6.35828794,9 6.84712709,9 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </span>
                                    <div class="menu-sub menu-sub-dropdown w-100px px-1 py-4">
                                        <div class="menu-item">
                                            <div class="menu-content">
                                                <span class="menu-section fs-5 fw-bolder ps-1 py-1">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ventas</font>
                                                    </font>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item  show py-2"
                                    class="menu-item {{ Request::is('inventariogalletas') ? 'show' : '' }} py-2">
                                    <span class="menu-link menu-center">
                                        <span class="menu-icon me-0">
                                            <span onclick="window.location.href='{{ url('/inventariogalletas') }}';"
                                                class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Food/Cookie.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24"
                                                            height="24" />
                                                        <polygon fill="#000000" opacity="0.3"
                                                            points="12 20.6599888 9.46440699 20.6354368 7.31805655 19.2852462 5.19825383 17.8937466 4.12259707 15.5974894 3.09160702 13.2808335 3.42815736 10.7675551 3.81331204 8.26126488 5.45521712 6.32891335 7.13423264 4.4287182 9.5601992 3.69080156 12 3 14.4398008 3.69080156 16.8657674 4.4287182 18.5447829 6.32891335 20.186688 8.26126488 20.5718426 10.7675551 20.908393 13.2808335 19.8774029 15.5974894 18.8017462 17.8937466 16.6819434 19.2852462 14.535593 20.6354368" />
                                                        <circle fill="#000000" opacity="0.3" cx="8.5"
                                                            cy="13.5" r="1.5" />
                                                        <circle fill="#000000" opacity="0.3" cx="13.5"
                                                            cy="7.5" r="1.5" />
                                                        <circle fill="#000000" opacity="0.3" cx="14.5"
                                                            cy="15.5" r="1.5" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </span>
                                    <div class="menu-sub menu-sub-dropdown w-200px px-1 py-4">
                                        <div class="menu-item">
                                            <div class="menu-content">
                                                <span class="menu-section fs-5 fw-bolder ps-1 py-1">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Inventario de galletas
                                                        </font>
                                                    </font>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item  show py-2"
                                    class="menu-item {{ Request::is('inventarioinsumos') ? 'show' : '' }} py-2">
                                    <span class="menu-link menu-center">
                                        <span class="menu-icon me-0">
                                            <span onclick="window.location.href='{{ url('/inventarioinsumos') }}';"
                                                class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Shopping/Box3.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24"
                                                            height="24" />
                                                        <path
                                                            d="M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <polygon fill="#000000"
                                                            points="14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </span>
                                    <div class="menu-sub menu-sub-dropdown w-200px px-1 py-4">
                                        <div class="menu-item">
                                            <div class="menu-content">
                                                <span class="menu-section fs-5 fw-bolder ps-1 py-1">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Inventario de insumos
                                                        </font>
                                                    </font>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item  show py-2"
                                    class="menu-item {{ Request::is('ordenproducccion') ? 'show' : '' }} py-2">
                                    <span class="menu-link menu-center">
                                        <span class="menu-icon me-0">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Communication/Clipboard-list.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24"
                                                            height="24" />
                                                        <path
                                                            d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                            fill="#000000" opacity="0.3" />
                                                        <path
                                                            d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                            fill="#000000" />
                                                        <rect fill="#000000" opacity="0.3" x="10"
                                                            y="9" width="7" height="2"
                                                            rx="1" />
                                                        <rect fill="#000000" opacity="0.3" x="7"
                                                            y="9" width="2" height="2"
                                                            rx="1" />
                                                        <rect fill="#000000" opacity="0.3" x="7"
                                                            y="13" width="2" height="2"
                                                            rx="1" />
                                                        <rect fill="#000000" opacity="0.3" x="10"
                                                            y="13" width="7" height="2"
                                                            rx="1" />
                                                        <rect fill="#000000" opacity="0.3" x="7"
                                                            y="17" width="2" height="2"
                                                            rx="1" />
                                                        <rect fill="#000000" opacity="0.3" x="10"
                                                            y="17" width="7" height="2"
                                                            rx="1" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </span>
                                    <div class="menu-sub menu-sub-dropdown w-200px px-1 py-4">
                                        <div class="menu-item">
                                            <div class="menu-content">
                                                <span class="menu-section fs-5 fw-bolder ps-1 py-1">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Orden de producción
                                                        </font>
                                                    </font>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item  show py-2"
                                    class="menu-item {{ Request::is('inventarioinsumos') ? 'show' : '' }} py-2">
                                    <span class="menu-link menu-center">
                                        <span class="menu-icon me-0">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Sign-in.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24"
                                                            height="24" />
                                                        <rect fill="#000000" opacity="0.3"
                                                            transform="translate(9.000000, 12.000000) rotate(-270.000000) translate(-9.000000, -12.000000) "
                                                            x="8" y="6" width="2"
                                                            height="12" rx="1" />
                                                        <path
                                                            d="M20,7.00607258 C19.4477153,7.00607258 19,6.55855153 19,6.00650634 C19,5.45446114 19.4477153,5.00694009 20,5.00694009 L21,5.00694009 C23.209139,5.00694009 25,6.7970243 25,9.00520507 L25,15.001735 C25,17.2099158 23.209139,19 21,19 L9,19 C6.790861,19 5,17.2099158 5,15.001735 L5,8.99826498 C5,6.7900842 6.790861,5 9,5 L10.0000048,5 C10.5522896,5 11.0000048,5.44752105 11.0000048,5.99956624 C11.0000048,6.55161144 10.5522896,6.99913249 10.0000048,6.99913249 L9,6.99913249 C7.8954305,6.99913249 7,7.89417459 7,8.99826498 L7,15.001735 C7,16.1058254 7.8954305,17.0008675 9,17.0008675 L21,17.0008675 C22.1045695,17.0008675 23,16.1058254 23,15.001735 L23,9.00520507 C23,7.90111468 22.1045695,7.00607258 21,7.00607258 L20,7.00607258 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                            transform="translate(15.000000, 12.000000) rotate(-90.000000) translate(-15.000000, -12.000000) " />
                                                        <path
                                                            d="M16.7928932,9.79289322 C17.1834175,9.40236893 17.8165825,9.40236893 18.2071068,9.79289322 C18.5976311,10.1834175 18.5976311,10.8165825 18.2071068,11.2071068 L15.2071068,14.2071068 C14.8165825,14.5976311 14.1834175,14.5976311 13.7928932,14.2071068 L10.7928932,11.2071068 C10.4023689,10.8165825 10.4023689,10.1834175 10.7928932,9.79289322 C11.1834175,9.40236893 11.8165825,9.40236893 12.2071068,9.79289322 L14.5,12.0857864 L16.7928932,9.79289322 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(14.500000, 12.000000) rotate(-90.000000) translate(-14.500000, -12.000000) " />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </span>
                                    <div class="menu-sub menu-sub-dropdown w-200px px-1 py-4">
                                        <div class="menu-item">
                                            <div class="menu-content">
                                                <span class="menu-section fs-5 fw-bolder ps-1 py-1">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Entradas</font>
                                                    </font>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="right-start" class="menu-item  show py-2"
                                    class="menu-item {{ Request::is('inventarioinsumos') ? 'show' : '' }} py-2">
                                    <span class="menu-link menu-center">
                                        <span class="menu-icon me-0">
                                            <span class="svg-icon svg-icon-2x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Sign-out.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24"
                                                            height="24" />
                                                        <path
                                                            d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                                                            transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) " />
                                                        <rect fill="#000000" opacity="0.3"
                                                            transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                            x="13" y="6" width="2"
                                                            height="12" rx="1" />
                                                        <path
                                                            d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                            fill="#000000" fill-rule="nonzero"
                                                            transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) " />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </span>
                                    <div class="menu-sub menu-sub-dropdown w-200px px-1 py-4">
                                        <div class="menu-item">
                                            <div class="menu-content">
                                                <span class="menu-section fs-5 fw-bolder ps-1 py-1">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Salidas</font>
                                                    </font>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between"
                        id="kt_header_container">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
                            data-kt-swapper="true" data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                            <!--begin::Heading-->
                            <h1 class="text-dark fw-bolder my-1 fs-2">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        <h2>@yield('title')</h2>
                                    </font>
                                </font>
                            </h1>
                            <!--end::Heading-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb fw-bold fs-base my-1">
                                <li class="breadcrumb-item text-muted">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Inicio</font>
                                    </font>
                                </li>
                                <li class="breadcrumb-item text-dark">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">@yield('title')</font>
                                    </font>
                                </li>
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title=-->
                        <!--begin::Wrapper-->
                        <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                            <!--begin::Aside mobile toggle-->
                            <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.3"
                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Aside mobile toggle-->
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center">
                                <img alt="Logo" src="{{ asset('assets/media/logos/logoSM.svg') }}"
                                    height="30px">
                            </div>
                            <!--end::Logo-->
                        </div>
                    </div>
                </div>
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="container-xxl" id="kt_content_container">
                        <div class="row g-5 gx-xxl-8 mb-xxl-3">
                            <div class="col-xxl-4">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor"></rect>
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor"></path>
            </svg>
        </span>
    </div>
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/modals/users-search.js') }}"></script>
    @yield('script')
</body>

</html>
