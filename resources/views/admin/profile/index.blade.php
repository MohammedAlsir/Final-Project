@extends('admin.home')
@section('title',' Edit Profile')
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
                Profile
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
              Admin
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')

<form method="POST" class="m-form m-form--fit m-form--label-align-right" action ="{{ route('profile_update',$user->id) }}" data-parsley-validate enctype="multipart/form-data">

    <div class="m-portlet__body">
        
            {{ csrf_field() }}
            {{ method_field('put') }}
        

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Name
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                <input type="text" value="{{$user->name}}" name="name" placeholder="Name" class="form-control m-input m-input--pill m-input--air"  maxlength="255">

                 <div class="m--space-10"></div>
                </div>
            </div>

            <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Email
                    </label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <input type="email" value="{{$user->email}}" name="email"  placeholder="Email Worker@example.com"class="form-control m-input m-input--pill m-input--air"  maxlength="255">

                     <div class="m--space-10"></div>
                    </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Phone number
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <input type="phone" value="{{$user->phone_number}}" name="phone_number"  placeholder="01xxxxxxxx"class="form-control m-input m-input--pill m-input--air"  maxlength="255">

                 <div class="m--space-10"></div>
                </div>
            </div>

            <div class="form-group m-form__group row">
                <label class="col-form-label col-lg-3 col-sm-12">
                    Password
                </label>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <input type="password" value="{{$user->password}}" name="password" class="form-control m-input m-input--pill m-input--air"  maxlength="255">

                 <div class="m--space-10"></div>
                </div>
        </div>

            


           

       
       
        
    </div>
    
<div class="m-portlet__foot m-portlet__foot--fit">
<div class="m-form__actions m-form__actions">
    <div class="row">
        <div class="col-lg-9 ml-lg-auto">
            <button type="submit" class="btn btn-brand">
                Edit
            </button>
            {{-- <button type="reset" class="btn btn-secondary">
                Cancel
            </button> --}}
        </div>
    </div>
</div>
</div>


</form>

@endsection
{{-- end section the content the page --}}