@extends('user.home')
@section('title','ALL COUNTERS')
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
                Electricitys
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
              Show All Counter
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')
@if($counters->count()!=0)
<!--begin: Search Form -->
<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
    <div class="row align-items-center">
        <div class="col-xl-8 order-2 order-xl-1">
            <div class="form-group m-form__group row align-items-center">
                <div class="col-md-12">
                    <div class="m-input-icon m-input-icon--left">
                        <input type="text" class="form-control m-input m-input--solid" placeholder="Search For Counters..." id="generalSearch"  >
                        <span class="m-input-icon__icon m-input-icon__icon--left">
                            <span>
                                <i class="la la-search"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 order-1 order-xl-2 m--align-right">
            
            <div class="m-separator m-separator--dashed d-xl-none"></div>
        </div>
    </div>
</div>
<table class="m-datatable" id="html_table" width="100%">
    
    <thead class="thead-default">
        <tr>
            <th>
                ID
            </th>
            <th>
                Customer Name
            </th>
            <th>
                Counter Number
            </th>
            <th>
                Neighborhood
            </th>
           
            <th>
                Buy
            </th>
            <th>
                Bills
            </th>
            
          
            
        </tr>
    </thead>
    <tbody>
        
        @foreach($counters as $counter)
        
            <tr>
            <td>
                    {{$counter->id}}
            </td>
            <td>
                    {{$counter->full_name}}
            </td>
            <td>
                {{$counter->counter_number}}
            </td>
            
            <td>
                {{$counter->neighborhood}}
            </td>
          

            <td>
                     <a href="{{route('Electricitys.create',$counter->id)}}" class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                           <i class="flaticon-multimedia-1"></i>
                        </a> 
                
            </td>

            <td>
                <a href="{{route('Invoices.index',$counter->id)}}" class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                      <i class="flaticon-multimedia-1"></i>
                   </a> 
           
       </td>

        </tr>
        

        
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
             there are no counters currently
        </div>
    </div>

    <div class="col-lg-3">
        <a href="{{route('user')}}" class="btn m-btn--pill m-btn--air         btn-outline-accent m-btn m-btn--custom">
            BACK TO HOME
        </a>
    </div>
</div>
@endif

@endsection
{{-- end section the content the page --}}