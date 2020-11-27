@extends('admin.home')
@section('class','col-lg-12')
{{-- begin section the sub sub_titel --}}
@section('sub_titel')
<script type="text/javascript" src="{{ URL::asset('assets/chars/staff.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/chars/get.js') }}"></script>	
<script type="text/javascript" src="{{ URL::asset('../../../assets/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js') }}"></script>	

@endsection

@section('sub_titel')

<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
    <li class="m-nav__item m-nav__item--home">
    <a href="{{route('admin')}}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
                Reports
                
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
                
                All Reports  
                
                
            </span>
        </div>
    </li>
</ul>

@endsection


{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}



@section('content_3')

<div class="col-xl-12">
    <!--begin::Reborts-->
    <div class="m-portlet m-portlet--tabs">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Staffs  
                    </h3>
                </div>
            </div>
            
            <div class="m-portlet__head-tools">
                <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand  m-tabs-line--right m-tabs-line-danger" role="tablist">
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#Summary" role="tab">
                            Summary
                        </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#All" role="tab">
                            All Data
                        </a>
                    </li>
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#Chars" role="tab">
                            Chars
                        </a>
                    </li>
                    <li class="nav-item m-tabs__item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" 	data-dropdown-toggle="hover">
                        <a href="#" class="nav-link m-tabs__link   m-dropdown__toggle dropdown-toggle">
                            <i class="la la-cog"></i>
                            Time
                        </a>
                        <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__content">
                                        <ul class="m-nav">
                                            
                                            <li class="m-nav__section m-nav__section--first" >
                                                <span class="m-nav__section-text">
                                                    Quick Actions
                                                </span>
                                            </li>
                                            
                                            <li class="m-nav__item">
                                                <a class="m-nav__link"  href="{{route('report_staffs2',$type='Today')}}" >
                                                    <i class="m-nav__link-icon flaticon-clipboard"></i>
                                                    <span class="m-nav__link-text">
                                                        Today
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a class="m-nav__link"  href="{{route('report_staffs2',$type='Yesterday')}}" >
                                                    <i class="m-nav__link-icon flaticon-clipboard"></i>
                                                    <span class="m-nav__link-text">
                                                        Yesterday
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a class="m-nav__link"  href="{{route('report_staffs2',$type='Last 7 Days')}}" >
                                                    <i class="m-nav__link-icon flaticon-clipboard"></i>
                                                    <span class="m-nav__link-text">
                                                        Last 7 Days
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a class="m-nav__link" href="{{route('report_staffs2',$type='Last 30 Days')}}" >
                                                    <i class="m-nav__link-icon flaticon-clipboard"></i>
                                                    <span class="m-nav__link-text">
                                                        Last 30 Days
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a class="m-nav__link" href="{{route('report_staffs2',$type='This Month')}}" >
                                                    <i class="m-nav__link-icon flaticon-clipboard"></i>
                                                    <span class="m-nav__link-text">
                                                        This Month
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item ">
                                                <a class="m-nav__link" href="{{route('report_staffs2',$type='Year')}}" >
                                                    <i class="m-nav__link-icon flaticon-clipboard"></i>
                                                    <span class="m-nav__link-text">
                                                        Last Year
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item ">
                                                <a class="m-nav__link" href="" data-toggle="modal" data-target="#m_daterangepicker_modal">
                                                    <i class="m-nav__link-icon flaticon-clipboard"></i>
                                                    <span class="m-nav__link-text">
                                                        Custom Range
                                                    </span>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item m-tabs__item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" 	data-dropdown-toggle="hover">
                        <a href="#" class="nav-link m-tabs__link   m-dropdown__toggle dropdown-toggle" data-toggle="tab">
                            <i class="la la-cog"></i>
                            All Reborts
                        </a>
                        <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__content">
                                        <ul class="m-nav">
                                            <li class="m-nav__section m-nav__section--first" >
                                                <span class="m-nav__section-text">
                                                    Quick Actions
                                                </span>
                                            </li>
                                            <li class="m-nav__item">
                                                <a class="m-nav__link" href="{{route('report_staffs')}}" >
                                                    <i class="m-nav__link-icon flaticon-layers" style="color: #716aca"></i>
                                                    <span class="m-nav__link-text" style="color: #716aca">
                                                        Staffs
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a class="m-nav__link"  href="{{route('report_maintenance')}}">
                                                    <i class="m-nav__link-icon flaticon-truck"></i>
                                                    <span class="m-nav__link-text">
                                                        Maintenance Workers
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a class="m-nav__link"  href="{{route('report_offices')}}">
                                                    <i class="m-nav__link-icon flaticon-suitcase"></i>
                                                    <span class="m-nav__link-text">
                                                        Offices
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a class="m-nav__link"  href="{{route('report_counters')}}">
                                                    <i class="m-nav__link-icon flaticon-clipboard"></i>
                                                    <span class="m-nav__link-text">
                                                        Counters
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a class="m-nav__link" href="{{route('report_notices')}}">
                                                    <i class="m-nav__link-icon flaticon-light"></i>
                                                    <span class="m-nav__link-text">
                                                        Notices
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a class="m-nav__link"  href="{{route('report_invoices')}}">
                                                    <i class="m-nav__link-icon flaticon-notes"></i>
                                                    <span class="m-nav__link-text">
                                                        Invoices
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
         
        
        <div class="m-portlet__body">
           
            @if($from == now()->format('Y-m-d'))
            <span class="m--font-danger">
                <b>Note</b> This Reports For Staffs 
                
                <br>
            </span>
            <span class="m--font-danger">
                IN DATE -
            </span>
            <span class="m--font-primary">
                 {{now()->format('Y-m-d')}}
            </span>
            @elseif($from!=1)
            <span class="m--font-danger">
                <b>Note</b> This Reports For Staffs 
                <br>
            </span>
            <span class="m--font-danger">
                FROM DATE -
            </span>
            <span class="m--font-primary">
                {{$from}}
            </span>
            <span class="m--font-danger">
                 - TO DATE - 
            </span>
            <span class="m--font-primary">
                {{$to}}
            </span>
            @else
            <span class="m--font-danger">
                <b>Note</b> This Reports For All Staffs 
                <br>
            </span>
            @endif 
            <div class="tab-content">
                
                <div>
                    {{--Start Staffs Rebort --}}
                    <div class="m-portlet__body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="Summary">
                                <div class="col-md-12">
                                    <div class="m-widget16">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="m-widget16__head">
                                                    <div class="m-widget16__item">
                                                        <span class="m-widget16__sceduled">
                                                            Type
                                                        </span>
                                                        <span class="m-widget16__amount m--align-right">
                                                            Count
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="m-widget16__body">
                                                    <!--begin::widget item-->
                                                    <div class="m-widget16__item">
                                                        <span class="m-widget16__date">
                                                            All Staffs
                                                        </span>
                                                        <span class="m-widget16__price m--align-right m--font-Metal">
                                                            {{$countstaffs->count()}}
                                                        </span>
                                                    </div>
                                                    <!--end::widget item-->	
                                                    <!--begin::widget item-->
                                                    <div class="m-widget16__item">
                                                        <span class="m-widget16__date">
                                                            Active Staffs
                                                        </span>
                                                        <span class="m-widget16__price m--align-right m--font-accent">
                                                            @if($countstaffs->count()<=0)
                                                            0%
                                                            @else
                                                            {{ROUND($active->count()*100/$countstaffs->count())}}%
                                                            @endif
                                                        </span>
                                                    </div>
                                                    <!--end::widget item-->
                                                    <!--begin::widget item-->
                                                    <div class="m-widget16__item">
                                                        <span class="m-widget16__date">
                                                            Non Active Staffs
                                                        </span>
                                                        <span class="m-widget16__price m--align-right m--font-danger">
                                                            @if($countstaffs->count()<=0)
                                                            0%
                                                            @else
                                                            {{ROUND($nonactive->count()*100/$countstaffs->count())}}%
                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <script>
                                                    var $active = {!! json_encode($active->count()) !!};
                                                    var $nonactive = {!! json_encode($nonactive->count()) !!};
                                                    
                                                  
                                                    
                                                </script>
                                                <canvas id="staffs"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="All">
                                @if($countstaffs->count()!=0)
                                {{-- <table class="m-datatable" id="html_table" width="100%"> --}}
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">

                                
                                    <thead>
                                        <tr>
                                            <th title="Field #1">
                                                ID
                                            </th>
                                            <th title="Field #2">
                                                Name
                                            </th>
                                            <th title="Field #3">
                                                Office
                                            </th>
                                            <th title="Field #4">
                                                Phone
                                            </th>
                                            <th title="Field #5">
                                                State
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                
                                        @foreach($staffs as $staff)
                                        @if($staff->level==2)
                                        
                                            <tr>
                                            <td >
                                                    {{$i++}}
                                            </td>
                                            <td>
                                                    {{$staff->name}}
                                            </td>
                                            <td>
                                                    {{$staff->office->office_name}}
                                            </td>
                                            <td>
                                                {{$staff->phone_number}}
                                            </td>
                                            <td>
                                                
                                                    @if($staff->state=="Active")
                                
                                                    <span class="m-badge m-badge--accent m-badge--wide" style="color: #FFF">
                                                        Active
                                                    </span>
                                                    @else
                                                    <span class="m-badge m-badge--danger m-badge--wide"style="color: #FFF">
                                                        Non Active
                                                    </span>
                                                    @endif
                                
                                            </td>
                                            
                                            
                                        </tr>
                                        @endif
                                
                                        
                                        @endforeach
                                        
                                    </tbody>
                                   
                                </table>
                                @else
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="alert m-alert--default" role="alert">
                                            <strong>
                                                Sorry,
                                            </strong>
                                            There Are No Staffs Currently
                                        </div>
                                    </div>
                
                                    
                                </div>
                                @endif
                            </div>
                            <div class="tab-pane" id="Chars">
                                <div class="row">
                                    <div class="col-md-6">
                                        <canvas id="staffs2"></canvas>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    {{--End Staffs Rebort --}}
                </div>  
            </div>
        </div>
    </div>
    <!--end::Reborts-->
</div>

<!--begin::Modal-->
<div class="modal fade" id="m_daterangepicker_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">
                    Please specify the start and end date of the report
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-remove"></span>
                </button>
            </div>
            <form  action="{{route('report_staffs2',$type='rang')}}"  class="m-form m-form--fit m-form--label-align-right">
           
                <div class="modal-body">
                    <div class="form-group m-form__group row">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            The Range
                        </label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <div class="input-daterange input-group" id="m_datepicker_5">
                                <input type="text" id="from" autocomplete="off" class="form-control m-input" name="from" required />
                                <span class="input-group-addon">
                                    <i class="la la-ellipsis-h"></i>
                                </span>
                                <input type="text" id="to" autocomplete="off" class="form-control m-input" name="to" required />
                            </div>
                           
                        </div>
                    </div>
                 
                </div>
                <div class="modal-footer">
                    <input type="submit" value="ok"  class="btn btn-info m-btn">

                    <button type="button" class="btn btn-danger m-btn" data-dismiss="modal">
                        Close
                    </button>
                   
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Modal-->
@endsection

@section('js_02')
<script type="text/javascript">
    $('#from').datepicker({
    format: 'yyyy-mm-dd',})
    $('#to').datepicker({
    format: 'yyyy-mm-dd',})
</script>

<script>
    jQuery(document).ready(function() {       
       Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
    QuickSidebar.init(); // init quick sidebar
    Demo.init(); // init demo features
       TableAdvanced.init();
    });
    </script>
@endsection

{{-- end section the content the page --}}