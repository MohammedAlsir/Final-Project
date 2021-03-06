@extends('admin.home')
@section('title','SHOW WORKER')
@section('class','col-lg-12')
{{-- begin section the sub sub_titel --}}
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
                Maintenance Workers
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
              {{$worker->name}}
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')
<div class="row">
    <div class="col-lg-6">
    <!--begin::Portlet-->
    <div class="m-portlet m-portlet--creative m-portlet--first m-portlet--bordered-semi">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                        <i class="flaticon-statistics"></i>
                    </span>
                    <h3 class="m-portlet__head-text">
                        Name : 
                            {{$worker->name}}
                    </h3>
                    <h2 class="m-portlet__head-label m-portlet__head-label--warning">
                        <span>
                            WORKER DITAILS

                            
                        </span>
                    </h2>

                    
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item" >
                        
                        @if($worker->state=="Active")

                            ACTIVE
                            <br>
                            <div class="btn btn-success m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                            <i class="flaticon-user-ok"></i>
                        @else 
                            NON ACTIVE !
                            <br>
                            <div class="btn btn-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                            <i class="flaticon-signs-1"></i>
                        @endif
                        </div>
                    </li>        
                </ul>
            </div>
        </div>
        <div class="m-portlet__body">
            <h5 class="m-portlet__head-text">
                Email :
                {{$worker->email}}
        
            </h5>
            <h5 class="m-portlet__head-text">
                Office :
            {{$worker->office->office_name}}
           

            </h5>

            <h5 class="m-portlet__head-text">
                Phone :
            {{$worker->phone_number}}
            </h5>
        
        
        </div>
    </div>
    <!--end::Portlet-->

</div>
<div class="col-lg-3 mt-5" >
    

    <a href="{{route('Workers.edit',$worker->id)}}" class="btn m-btn--pill m-btn--air   mt-5  btn-outline-accent btn-block">
        EDIET
    </a>

    

    <form action="{{route('Workers.destroy',[$worker->id])}}" method="POST">
        {{ csrf_field()}}
        {{ method_field('delete') }}
      
        

        <button type="submit" class="btn m-btn--pill m-btn--air  mt-2  btn-outline-danger btn-block">
            DELETE
        </button>
    </form>
</div>
</div>

@endsection
{{-- end section the content the page --}}