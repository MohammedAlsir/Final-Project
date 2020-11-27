@extends('admin.home')
@section('title','ALL SECTORS')
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
                Sectors
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
@if($sectors->count()>0)
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
                Created At
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
        
        @foreach($sectors as $sector)
        
            <tr>
            <th scope="row">
                    {{$sector->id}}
            </th>
            <td>
                    {{$sector->sector_type}}        
            </td>
            <td>
                    {{$sector->created_at}}
            </td>
            <td>
              
                {{  $sector->counters()->count() }}
            </td>
            
            <td>
                <a href="{{route('Sector_type.show',$sector->id)}}"   class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                    <i class="flaticon-folder-1"></i>
                </a>
             
                
            </td>

            <td>
                @if( $sector->counters()->count()==0 )
                <form action="{{route('Sector_type.destroy',[$sector->id])}}" method="POST">
                    {{ csrf_field()}}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                            <i class="flaticon-danger"></i> 
                    </button>
                </form>
                @else
                <form action="{{route('Sector_type.destroy',[$sector->id])}}" method="POST">
                    {{ csrf_field()}}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                            <i class="flaticon-danger"></i> 
                    </button>
                </form>
                 <br>
                 Can Not Delete
                {{-- <a href="{{route('Office.index_2',$office->id)}}" class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                    <i class="la la-group"></i>
                </a> --}}
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
     There Are No Sectors Currently
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
                                Add Sector Type
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <form method="POST" action ="{{ route('Sector_type.store') }}" data-parsley-validate>



                        {{ csrf_field() }}
                        <div class="form-group">
                            <label name="name">Name:</label>
                            <input type="text" name="sector_type"  class="form-control" required maxlength="255">
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