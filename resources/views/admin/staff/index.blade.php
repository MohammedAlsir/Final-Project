@extends('admin.home')
@section('title','ALL STAFFS')
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
            <span class="m-nav__link-text" style="color: #00c5dc">
                Staffs
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        {{-- - --}}
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
              {{-- Show All --}}
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')
@if($countstaffs->count()!=0)
<!--begin: Search Form -->
<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
    <div class="row align-items-center">
        <div class="col-xl-8 order-2 order-xl-1">
            <div class="form-group m-form__group row align-items-center">
                <div class="col-md-12">
                    <div class="m-input-icon m-input-icon--left">
                        <input type="text" class="form-control m-input m-input--solid" placeholder="Search For Staffs..." id="generalSearch"  >
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
                Name
            </th>
            <th>
                Office
            </th>
            <th>
                State
            </th>
            <th>
                Phone
            </th>
            <th>
                Edit
            </th>
            <th>
                Delete
            </th>
            
        </tr>
    </thead>
    <tbody>
        
        @foreach($staffs as $staff)
        @if($staff->level==2)
        
            <tr>
            <td>
                    {{-- {{$staff->id}} --}}
                    {{$i++ }}
            </td>
            <td>
                    {{$staff->name}}
            </td>
            <td>
                    {{$staff->office->office_name}}
            </td>
            <td>
                  
                    @if($staff->state=="Active")

                    <span class="m-nav__link-badge">
                        <span class="m-badge m-badge--success m-badge--wide">
                       Active
                   </span>
                   </span>
                    @else
                    <span class="m-nav__link-badge">
                        <span class="m-badge m-badge--danger m-badge--wide">
                            Non Active
                   </span>
                   </span>

                    @endif

            </td>
            
            <td>
                {{$staff->phone_number}}
            </td>

            <td>
                    <a href="{{route('Staff.edit',$staff->id)}}" class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                            <i class="flaticon-edit"></i>
                        </a>
            </td>

            <td>
                        

                            <form action="{{route('Staff.destroy',[$staff->id])}}" method="POST">
                                        {{ csrf_field()}}
                                        {{ method_field('delete') }}
                                      
                                        

                            <button type="submit" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                                        <i class="flaticon-danger"></i> 
                                </button>
                                    </form>
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
             there are no staffs currently
        </div>
    </div>

    <div class="col-lg-3">
        <a href="{{route('admin')}}" class="btn m-btn--pill m-btn--air         btn-outline-accent m-btn m-btn--custom">
            BACK TO HOME
        </a>
    </div>
</div>
@endif

@endsection
{{-- end section the content the page --}}