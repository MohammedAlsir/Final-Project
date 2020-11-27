@extends('user.home')
@section('title',' EDIT NEW COUNTER')
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
                COUNTERS
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
               EDIT NEW COUNTER
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')

<form method="POST" action="{{ route('Counters.update',$counter->id) }}" data-parsley-validate enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
    <div class="m-portlet__body">

        {{ csrf_field() }}
        {{ method_field('put') }}

        <div class="form-group m-form__group row">
            <label class="col-lg-2 col-form-label">
                Counter Number 
            </label>
            <div class="col-lg-3">
            <input type="number" value="{{$counter->counter_number}}" required name="counter_number" class="form-control m-input m-input--pill m-input--air" placeholder="Enter full name">
               
            </div>

            <label class="col-lg-2 col-form-label">
                Full Name 
            </label>
            <div class="col-lg-3">
                <input type="text" value="{{$counter->full_name}}" required name="full_name" class="form-control m-input m-input--pill m-input--air" placeholder="Enter Custoumer Name ">
                
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label class="col-lg-2 col-form-label">
                Patriot Number 
            </label>
            <div class="col-lg-3">
                <input type="number" value="{{$counter->patriot_number}}" required name="patriot_number"  class="form-control m-input m-input--pill m-input--air" placeholder="Enter Patriot Number">
               
            </div>

            <label class="col-lg-2 col-form-label">
                Neighborhood 
            </label>
            <div class="col-lg-3">
                <input type="text" value="{{$counter->neighborhood}}" required name="neighborhood" class="form-control m-input m-input--pill m-input--air" placeholder="Enter Custoumer Neighborhood ">
                
            </div>
        </div>


        <div class="form-group m-form__group row">
            <label class="col-lg-2 col-form-label">
                Square Number 
            </label>
            <div class="col-lg-3">
                <input type="number" value="{{$counter->square_number}}" required name="square_number"  class="form-control m-input m-input--pill m-input--air" placeholder="Enter Square Number">
               
            </div>

            <label class="col-lg-2 col-form-label">
                Street Number 
            </label>
            <div class="col-lg-3">
                <input type="number" value="{{$counter->street_number}}" required name="street_number" class="form-control m-input m-input--pill m-input--air" placeholder="Enter Street Number ">
                
            </div>
        </div>

        <div class="form-group m-form__group row">
            <label class="col-lg-2 col-form-label">
                Phone Number 
            </label>
            <div class="col-lg-3">
                <input type="number"  value="{{$counter->phone_number}}" required name="phone_number"  class="form-control m-input m-input--pill m-input--air" placeholder="X000000000">
               
            </div>

            <label class="col-lg-2 col-form-label">
                Sector Type 
            </label>
            <div class="col-lg-3">
                <div class="m-select2 m-select2--air m-select2--pill">

                    <select required class="form-control m-select2" id="m_select2_1" name="sector_type_id" data-placeholder="Choose Sector Type">
                        <option></option>   
                        @foreach ($sectors as $sector)
                            <option value="{{$sector->id}}">{{$sector->sector_type}}</option>   
                        @endforeach
                        
                    </select>
                </div>                
            </div>
        </div>

        <input type="hidden" required name="user_id"  value=" {{ Auth::user()->id }}">

      
        
    </div>
    <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
        <div class="m-form__actions m-form__actions--solid">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-10">
                    <button type="submit" class="btn btn-success">
                        Edit
                    </button>
                    <a href="{{route('Counters.index')}}" class="btn btn-secondary">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
{{-- end section the content the page --}}