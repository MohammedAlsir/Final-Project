@extends('admin.home')
@section('title','ALL OFFICES')
@section('class','col-lg-8')

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
                Office
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
              Show All
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')
@if($offices->count()>0)
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
                State
            </th>
            <th>
                Count
            </th>
            <th>
                More
            </th>
            <th>
                Delete
            </th>
            
            
        </tr>
    </thead>
    <tbody>
        
        @foreach($offices as $office)
        
            <tr>
            <th scope="row">
                    {{$office->id}}
            </th>
            <td>
            {{$office->office_name}}        
            </td>
            <td>
                    {{$office->state}}
            </td>
            <td>
              
                {{  $office->users()->count() }}
            </td>
            
            <td>
                <a href="{{route('Office.show',$office->id)}}"   class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                    <i class="flaticon-folder-1"></i>
                </a>
             
                
            </td>

            <td>
                @if( $office->users()->count()==0 )
                <form action="{{route('Office.destroy',[$office->id])}}" method="POST">
                    {{ csrf_field()}}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                            <i class="flaticon-danger"></i> 
                    </button>
                </form>
                @else

                <a href="{{route('Office.index_2',$office->id)}}" class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                    <i class="la la-group"></i>
                </a>
                @endif
                
            </td>
        </tr>
   

        
        @endforeach
        
    </tbody>
</table>
@else
<div class="alert m-alert--default" role="alert">
    <strong>
        Sorry,
    </strong>
     there are no offices currently
</div>
@endif
@endsection 
@section('content_2')
{{-- this begin add office section --}}
 <div class="col-lg-4">
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                ADD OFFICE
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <form method="POST" action ="{{ route('Office.store') }}" data-parsley-validate>



                        {{ csrf_field() }}
                        <div class="form-group">
                            <label name="name">Name:</label>
                            <input type="text" name="office_name"  class="form-control" required maxlength="255">
                        </div>
                        <div class="form-group">
                            <label name="name">State:</label>
                            <input type="text" name="state"  class="form-control" required maxlength="255">
                        </div>
                
                        <div class="form-group">
                            <label name="name">Local:</label>
                            <input type="text" name="local"  class="form-control" required maxlength="255">
                        </div>
                
                
                       
                
                        <button class="btn m-btn--pill  btn-accent m-btn m-btn--custom btn-block" type="submit">ADD</button>
                        
                    </form>
                 </div>
             <!--end::Portlet-->
             </div>
      
         </div>
{{-- this end add office section --}}
@endsection
{{-- end section the content the page --}}