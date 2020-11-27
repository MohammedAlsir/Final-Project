@extends('user.home')
@section('title','SHOW COUNTER')
@section('class','col-lg-12')
{{-- begin section the sub sub_titel --}}
@section('sub_titel')
<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
    <li class="m-nav__item m-nav__item--home">
    <a href="{{route('user')}}" class="m-nav__link m-nav__link--icon">
            <i class="m-nav__link-icon la la-home"></i>
        </a>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
                 Counters
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
              {{$counter->full_name}}
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
                        Counter Number : 
                            {{$counter->counter_number}}
                    </h3>
                    <h2 class="m-portlet__head-label m-portlet__head-label--warning">
                        <span>
                            COUNTER DITAILS

                            
                        </span>
                    </h2>

                    
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <h5 class="m-portlet__head-text">
                Full Name :
                {{$counter->full_name}}
        
            </h5>
            <h5 class="m-portlet__head-text">
                Patriot Number :
            {{$counter->patriot_number}}
            </h5>

            <h5 class="m-portlet__head-text">
                Phone :
            {{$counter->phone_number}}
            </h5>

            <h5 class="m-portlet__head-text">
                Neighborhood :
                {{$counter->neighborhood}}
        
            </h5>
            <h5 class="m-portlet__head-text">
                Street Number :
                {{$counter->street_number}}
        
            </h5>
            <h5 class="m-portlet__head-text">
                Square Number :
                {{$counter->square_number}}
        
            </h5>
            <h5 class="m-portlet__head-text">
                Sector Type :
                {{$counter->sector_type->sector_type}}
        
            </h5>
        
        
        </div>
        
    </div>
    <!--end::Portlet-->

</div>
<div class="col-lg-3 mt-5" >
    <a href="{{route('Counters.index')}}" class="btn m-btn--pill m-btn--air   mt-5  btn-outline-accent btn-block">
        Home
    </a>

    <a href="{{route('Counters.edit',$counter->id)}}" class="btn m-btn--pill m-btn--air   mt-5  btn-outline-accent btn-block">
        EDIET
    </a>

    

    <form action="{{route('Counters.destroy',[$counter->id])}}" method="POST">
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