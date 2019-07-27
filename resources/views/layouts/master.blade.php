<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

@include('layouts.partials.head')

<!-- begin::Body -->
<body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="demo11/index.html">
            <img alt="Logo" src="{{ asset('') }}theme-assets/media/logos/logo-11-sm.png"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
                id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more-1"></i></button>
    </div>
</div>

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            @include('layouts.partials.header')

            <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
                <div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">

                    @include('layouts.partials.aside')
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

                       @include('layouts.partials.subheader')

                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            @yield('content')
                        </div>
                        <!-- end:: Content -->
                    </div>
                </div>
            </div>
            @include('layouts.partials.footer')
        </div>
    </div>
</div>
<!-- end:: Page -->

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>

<!-- end::Scrolltop -->
<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin:: Global Mandatory Vendors -->
<script src="{{ asset('theme-assets/vendors/general/jquery/dist/jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/bootstrap/dist/js/bootstrap.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/moment/min/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/sticky-js/dist/sticky.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/wnumb/wNumb.js') }}" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="{{ asset('theme-assets/vendors/general/jquery-form/dist/jquery.form.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/custom/js/vendors/bootstrap-switch.init.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/select2/dist/js/select2.full.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/typeahead.js/dist/typeahead.bundle.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/handlebars/dist/handlebars.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/nouislider/distribute/nouislider.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/owl.carousel/dist/owl.carousel.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/autosize/dist/autosize.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/clipboard/dist/clipboard.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/dropzone/dist/dropzone.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/summernote/dist/summernote.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/markdown/lib/markdown.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/custom/js/vendors/bootstrap-markdown.init.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/custom/js/vendors/bootstrap-notify.init.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/jquery-validation/dist/jquery.validate.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/jquery-validation/dist/additional-methods.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/custom/js/vendors/jquery-validation.init.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/raphael/raphael.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/morris.js/morris.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/waypoints/lib/jquery.waypoints.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/counterup/jquery.counterup.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/es6-promise-polyfill/promise.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/custom/js/vendors/sweetalert2.init.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/jquery.repeater/src/jquery.input.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/jquery.repeater/src/repeater.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/general/dompurify/dist/purify.js') }}" type="text/javascript"></script>

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{ asset('theme-assets/js/demo11/scripts.bundle.js') }}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="{{ asset('theme-assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}"
        type="text/javascript"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
<script src="{{ asset('theme-assets/vendors/custom/gmaps/gmaps.js') }}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{ asset('theme-assets/js/demo11/pages/dashboard.js') }}" type="text/javascript"></script>
<script>
    $('.lang').click(function(e){
        e.preventDefault();
        $('input[name="lang"]').val($(this).data('lang'));
        $('#lang-form').submit();
    });
</script>
<script>
    @stack('footer-script')
</script>
<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>