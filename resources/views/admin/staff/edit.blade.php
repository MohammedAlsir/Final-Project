@extends('admin.home')
@section('title',' EDIT DATA STAFF')
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
                <a href="{{route('Staff.index')}}" style="text-decoration:none;color:#898b96">
                    Staffs
                </a>
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text"  style="color: #00c5dc">
              Edit Data Staff
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')

<form method="POST" class="m-form m-form--fit m-form--label-align-right" action ="{{ route('Staff.update',$staff->id) }}" data-parsley-validate enctype="multipart/form-data">

    <div class="m-portlet__body">
        
            {{ csrf_field() }}
            {{ method_field('put') }}
        

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Name
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                <input type="text" value="{{$staff->name}}" name="name" placeholder="Name Worker" class="form-control m-input m-input--pill m-input--air" required maxlength="255">

                 <div class="m--space-10"></div>
                </div>
            </div>

            <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Email
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <input type="email" value="{{$staff->email}}" name="email"  placeholder="Email Worker@example.com"class="form-control m-input m-input--pill m-input--air" required maxlength="255">

                     <div class="m--space-10"></div>
                    </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Phone number
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <input type="phone" value="{{$staff->phone_number}}" name="phone_number"  placeholder="01xxxxxxxx"class="form-control m-input m-input--pill m-input--air" required maxlength="255">

                 <div class="m--space-10"></div>
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                   State
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    
                    <select   name="state" class="form-control m-bootstrap-select m-bootstrap-select--air m-bootstrap-select--pill m_selectpicker" title="{{$staff->state}}">
                        <option value="Active" data-content="<span class='m-badge m-badge--success m-badge--wide m-badge--rounded'>Active </span>">
                            Active
                        </option>
                        <option value="Non Active" data-content="<span class='m-badge m-badge--danger m-badge--wide m-badge--rounded'>Non Active</span>">
                            Non Active
                        </option>
                        
                    </select>
                </div>
            </div>


            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Office
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <div class="m-select2 m-select2--air m-select2--pill">

                        <select class="form-control m-select2" id="m_select2_1" name="office" value="{{$staff->office_id}}" data-placeholder="{{$staff->office->office_name}}">
                            <option></option>   
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
                Edite
            </button>
            <a  href="{{route('Staff.index')}}" class="btn btn-secondary">
                Cancel
            </a>
        </div>
    </div>
</div>
</div>


</form>

@endsection
{{-- end section the content the page --}}