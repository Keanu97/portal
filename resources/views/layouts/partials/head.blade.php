<!-- begin::Head -->
<head>

    <!--begin::Base Path (base relative path for theme-assets of this page) -->
    <base href="../">

    <!--end::Base Path -->
    <meta charset="utf-8"/>
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Asap+Condensed:500"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{ asset('theme-assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
          type="text/css"/>

    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{ asset('theme-assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css') }}"
          rel="stylesheet" type="text/css"/>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{ asset('theme-assets/vendors/general/tether/dist/css/tether.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/select2/dist/css/select2.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/nouislider/distribute/nouislider.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/dropzone/dist/dropzone.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/summernote/dist/summernote.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/animate.css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/morris.js/morris.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/custom/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/custom/vendors/flaticon/flaticon.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/custom/vendors/flaticon2/flaticon.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('theme-assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css') }}"
          rel="stylesheet" type="text/css"/>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{ asset('theme-assets/css/demo11/style.bundle.css') }}" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}"/>
</head>
<!-- end::Head -->