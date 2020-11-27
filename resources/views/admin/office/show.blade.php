@extends('admin.home')
@section('title',$office->office_name)
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
             {{$office->office_name}}
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')
<table class="table">
    
    <thead class="thead-default">
        <tr>
         
            <th>
                Name
            </th>
            <th>
                State
            </th>
            <th>
                Local
            </th>
            <th>
                Count Staffs
            </th>
            <th>
                Staffs
            </th>
            
            
        </tr>
    </thead>
    <tbody>
        
        
            <tr>
            
            <td>
            {{$office->office_name}}        
            </td>
            <td>
                    {{$office->state}}
            </td>
            <td>
                {{$office->local}}
            </td>
            
            <td>
                {{  $office->users()->count() }}
            </td>

            <td>
                @if( $office->users()->count()!=0)
                <a href="{{route('Office.index_2',$office->id)}}" class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                    <i class="la la-group"></i>
                </a>
                @else
                
                    <i  class="la la-group"></i> No Staffs
               
                @endif
                
            </td>

   

        
        
    </tbody>
</table>



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
                                EDIT OFFICE
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <form method="POST" action ="{{ route('Office.update',$office->id) }}" data-parsley-validate>
                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group">
                            <label name="name">Name:</label>
                        <input type="text" name="office_name" value="{{ $office->state }}"  class="form-control" required >
                        </div>
                        <div class="form-group">
                            <label name="name">State:</label>
                            <input type="text" name="state"  value="{{$office->state}}"  class="form-control" required>
                        </div>
                
                        <div class="form-group">
                            <label name="name">Local:</label>
                            <input type="text" name="local" value="{{$office->local}}"  class="form-control" required >
                        </div>
                
                
                       
                
                        <button class="btn m-btn--pill  btn-accent m-btn m-btn--custom btn-block" type="submit">Edit Data</button>
                        
                    </form>
                 </div>
             <!--end::Portlet-->
             </div>
      
         </div>
{{-- this end add office section --}}
@endsection
{{-- end section the content the page --}}