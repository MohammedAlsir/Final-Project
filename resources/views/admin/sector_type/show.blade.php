@extends('admin.home')
@section('title',$sector->sector_type)
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
                Sector
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
             {{$sector->sector_type}}
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
                ID
            </th>
            <th>
                Customer Name
            </th>
            <th>
                Counter Number
            </th>
            <th>
                Patriot Number
            </th>
            <th>
                Create At
            </th>
            
            
            
        </tr>
    </thead>
    <tbody>
        
        @foreach ($counters as $counter)
        <tr>
            <td>  {{$counter->id}}  </td>
            <td>  {{$counter->full_name}}  </td>
            <td>  {{$counter->counter_number}}  </td>
            <td>  {{$counter->patriot_number}}  </td>
            <td>  {{$counter->created_at}}  </td>
        
           
            
        @endforeach

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
                                EDIT Sector Type
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <form method="POST" action ="{{ route('Sector_type.update',$sector->id) }}" data-parsley-validate>
                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group">
                            <label name="name">Name:</label>
                        <input type="text" name="sector_type" value="{{ $sector->sector_type }}"  class="form-control" required >
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