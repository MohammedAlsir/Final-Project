<!--begin::Web font -->
<script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js"></script>

<script>
  WebFont.load({
    google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
    active: function() {
        sessionStorage.fonts = true;
    }
  });
</script>
<!--end::Web font -->

{{-- char libs --}}
<script type="text/javascript" src="{{ URL::asset('assets/jsdelivr/jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/jsdelivr/jsdelivr.js') }}"></script>
{{-- <script type="text/javascript" src="{{ URL::asset('assets/chars/admin_chars.js') }}"></script> --}}
{{-- char libs --}}



<!--begin::Base Scripts -->
<script type="text/javascript" src="{{ URL::asset('assets/vendors/base/vendors.bundle.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('assets/demo/default/base/scripts.bundle.js') }}"></script>

<!--end::Base Scripts -->   
<!--begin::Page Vendors -->
<script type="text/javascript" src="{{ URL::asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('assets/app/js/dashboard.js') }}"></script>

<!--end::Page Vendors -->  
<!--begin::Page Snippets -->
<script type="text/javascript" src="{{ URL::asset('assets/app/js/dashboard.js') }}"></script>
<!--end::Page Snippets -->
<script type="text/javascript" src="{{ URL::asset('../../../assets/demo/default/custom/components/forms/widgets/select2.js') }}"></script>
{{-- select --}}
<script type="text/javascript" src="{{ URL::asset('../../../assets/demo/default/custom/components/forms/widgets/bootstrap-select.js') }}"></script>


{{-- search --}}
<script src="{{ asset('assets/demo/default/custom/components/datatables/locked/html-table.js') }}" type="text/javascript"></script>
<script src="{{ asset('../../../assets/demo/default/custom/components/forms/widgets/bootstrap-daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('../../../assets/demo/default/custom/components/forms/widgets/bootstrap-daterangepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('../../../assets/demo/default/custom/components/forms/widgets/bootstrap-touchspin.js') }}" type="text/javascript"></script>




