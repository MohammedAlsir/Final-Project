@extends('admin.home')
@section('title',' EDIT DATA WORKER')
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
              EDIT DATA WORKER
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')

<form method="POST" class="m-form m-form--fit m-form--label-align-right" action ="{{ route('Workers.update',$worker->id) }}" data-parsley-validate enctype="multipart/form-data">

    <div class="m-portlet__body">
        
            {{ csrf_field() }}
            {{ method_field('put') }}
        

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Name
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                <input type="text" value="{{$worker->name}}" name="name" placeholder="Name Worker" class="form-control m-input m-input--pill m-input--air" required maxlength="255">

                 <div class="m--space-10"></div>
                </div>
            </div>

            <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Email
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <input type="email" value="{{$worker->email}}" name="email"  placeholder="Email Worker@example.com"class="form-control m-input m-input--pill m-input--air" required maxlength="255">

                     <div class="m--space-10"></div>
                    </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Phone number
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <input type="phone" value="{{$worker->phone_number}}" name="phone_number"  placeholder="01xxxxxxxx"class="form-control m-input m-input--pill m-input--air" required maxlength="255">

                 <div class="m--space-10"></div>
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                   State
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    
                    <select   name="state" class="form-control m-bootstrap-select m-bootstrap-select--air m-bootstrap-select--pill m_selectpicker" title="{{$worker->state}}">
                        <option value="Active" data-content="<span class='m-badge m-badge--success m-badge--wide m-badge--rounded'>Active </span>">
                            Active
                        </option>
                        <option value="Non Active" data-content="<span class='m-badge m-badge--danger m-badge--wide m-badge--rounded'>Non Active</span>">
                            Non Active
                        </option>
                        
                    </select>
                </div>
            </div>


           

       
       
        
    </div>
    
<div class="m-portlet__foot m-portlet__foot--fit">
<div class="m-form__actions m-form__actions">
    <div class="row">
        <div class="col-lg-9 ml-lg-auto">
            <button type="submit" class="btn btn-brand">
                Submit
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