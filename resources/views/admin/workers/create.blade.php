@extends('admin.home')
@section('title',' ADD NEW Maintenance Worker')
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
                Add New Worker
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')

<form method="POST" class="m-form m-form--fit m-form--label-align-right" action ="{{ route('Workers.store') }}" data-parsley-validate enctype="multipart/form-data">

    <div class="m-portlet__body">
        
            {{ csrf_field() }}
            @csrf

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Name
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <input type="text" name="name" placeholder="Name Worker" class="form-control m-input m-input--pill m-input--air" required maxlength="255">

                 <div class="m--space-10"></div>
                </div>
            </div>

            <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Email
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <input type="email" name="email"  placeholder="Email Worker@example.com"class="form-control m-input m-input--pill m-input--air" required maxlength="255">

                     <div class="m--space-10"></div>
                    </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Phone number
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <input type="phone" name="phone_number"  placeholder="01xxxxxxxx"class="form-control m-input m-input--pill m-input--air" required maxlength="255">

                 <div class="m--space-10"></div>
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Office
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <div class="m-select2 m-select2--air m-select2--pill">

                        <select class="form-control m-select2"   id="m_select2_1" name="office" data-placeholder="Choose Office">
                            
                            @foreach($offices as $office)
                    
                                 <option value="{{$office->id}}">{{$office->office_name}}</option>
                
                             @endforeach


                        </select>
                    </div>
                </div>
            </div>

       
       
        
    </div>
    
<div class="m-portlet__foot m-portlet__foot--fit">
<div class="m-form__actions m-form__actions">
    <div class="row">
        <div class="col-lg-9 ml-lg-auto">
            <button type="submit" class="btn btn-brand">
                Add
            </button>
            <a  href="{{route('Workers.index')}}" class="btn btn-secondary">
                Cancel
            </a>
        </div>
    </div>
</div>
</div>


</form>

@endsection
{{-- end section the content the page --}}