@extends('admin.home')
@section('title','ALL NOTICES')
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
                Notices
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
              All Notices in {{$type->notices_type}}
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')
@if($notices->count()!=0)
<table class="table">
    
    <thead class="thead-default">
        <tr>
            <th>
                ID
            </th>
            <th>
               Counter Number
            </th>
            <th>
                Notice State
            </th>
            <th>
                Procedure
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
        
        @foreach($notices as $notice)
        
            <tr>
            <th scope="row">
                    {{$notice->id}}
            </th>
            <td>
                    {{$notice->counter->counter_number}}
            </td>
            <td>
                    {{$notice->notice_state}}
            </td>
            <td>
                    {{$notice->procedure}}
            </td>
            
           

            <td>
                    <a href="{{route('Notice_type.edit',$notice->id)}}" class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                            <i class="flaticon-edit"></i>
                        </a>
            </td>

            <td>
                        

                            <form action="{{route('Notice_type.destroy_notice',[$notice->id])}}" method="POST">
                                        {{ csrf_field()}}
                                        {{ method_field('delete') }}
                                      
                                        

                            <button type="submit" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                                        <i class="flaticon-danger"></i> 
                                </button>
                                    </form>
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
            there are no Notices currently
        </div>
    </div>
    <div class="col-lg-3">
        <a href="{{route('Notice_type.index')}}" class="btn m-btn--pill m-btn--air         btn-outline-accent m-btn m-btn--custom">
            BACK
        </a>
    </div>
</div>

@endif

@endsection
{{-- end section the content the page --}}