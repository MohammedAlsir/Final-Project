@extends('admin.home')
@section('title','ALL NOTICE TYPES')
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
                Notices Types
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
@if($types->count()>0)
<table class="table">
    
    <thead class="thead-default">
        <tr>
            <th>
                ID
            </th>
            <th>
                Notice Type
            </th>
           
            <th>
                Notices Count 
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
        
        @foreach($types as $type)
       
        
            <tr>
            <th scope="row">
                    {{$type->id}}
            </th>
            <td>
                    {{$type->notice_type}}        
            </td>
            <td>
                    {{  $type->notices()->count() }}
            </td>
           
            
           

           

            <td>
            <button type="button" class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--pill"
            data-toggle="modal" data-target="#m_modal_1-{{"$type->id"}}">
                    <i class="flaticon-network"></i>
                </button>
                
            </td>

            <td>
                @if( $type->notices()->count()==0 )
                <form action="{{route('Notice_type.destroy',[$type->id])}}" method="POST">
                    {{ csrf_field()}}
                    {{ method_field('delete') }}
                    <button type="submit" class="btn btn-outline-danger m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                            <i class="flaticon-danger"></i> 
                    </button>
                </form>
                @else
            
                <a href="{{route('Notice_type.index_2',$type->id)}}" class="btn btn-outline-success m-btn m-btn--icon m-btn--icon-only m-btn--pill">
                    <i class="flaticon-information"></i>
                </a>
                @endif
                
            </td>

         
        </tr>
   
        <form method="POST"  action="{{ route('Notice_type.update',$type->id) }}" data-parsley-validate enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
            {{ csrf_field() }}
            {{ method_field('put') }}
          
            <div class="modal fade" id="m_modal_1-{{"$type->id"}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            Edit Notice Type
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                &times;
                            </span>
                        </button>
                    </div>
                    <div class="modal-body">
        
                       
        
                        <div class="form-group">
                            <label class="form-control-label">
                                 Notice Type
                            </label>
                            <input  value="{{$type->notice_type}}" type="text" name="name" class="form-control" required>
        
                        </div>
        
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit"   class="btn btn-primary">
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        
        @endforeach
       
        
        
    </tbody>
</table>


@else
<div class="alert m-alert--default" role="alert">
    <strong>
        Sorry,
    </strong>
     there are no notice types currently
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
                                ADD NOTICE TYPE
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <form method="POST" action ="{{ route('Notice_type.store') }}" data-parsley-validate>



                        {{ csrf_field() }}
                        <div class="form-group">
                            <label name="name">Name </label>
                            <input type="text" name="name"  class="form-control" required maxlength="255">
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