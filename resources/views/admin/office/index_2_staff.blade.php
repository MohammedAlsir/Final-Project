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
            <span class="m-nav__link-text">
                Staffs
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
              All Staffs in {{$office->office_name}}
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')
@if($staffs->count()!=0)
<table class="table">
    
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
            <th scope="row">
                    {{$staff->id}}
            </th>
            <td>
                    {{$staff->name}}
            </td>
            <td>
                    {{$staff->office->office_name}}
            </td>
            <td>
                    {{$staff->state}}
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
        <a href="{{route('Office.show',$office->id)}}" class="btn m-btn--pill m-btn--air         btn-outline-accent m-btn m-btn--custom">
            BACK
        </a>
    </div>
</div>

@endif

@endsection
{{-- end section the content the page --}}