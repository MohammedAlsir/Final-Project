@extends('user.home')
@section('title','ALL COUNTER')
@section('class','col-lg-12')
{{-- begin section the sub sub_titel --}}
@section('sub_titel')
<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
    <li class="m-nav__item m-nav__item--home">
    <a href="{{route('user')}}" class="m-nav__link m-nav__link--icon">
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
              Show All Counter
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')
@if($counters->count()!=0)

<!--begin: Search Form -->
<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
    <div class="row align-items-center">
        <div class="col-xl-8 order-2 order-xl-1">
            <div class="form-group m-form__group row align-items-center">
                <div class="col-md-12">
                    <div class="m-input-icon m-input-icon--left">
                        <input type="text" class="form-control m-input m-input--solid" placeholder="Search For Counter..." id="generalSearch"  >
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
                Customer Name
            </th>
            <th>
                Counter Number
            </th>
            <th>
                phone_number
            </th>
           
            <th>
                Sector Type
            </th>
            <th>
                Add
            </th>
          
          
            
        </tr>
    </thead>
    <tbody>
        
        @foreach($counters as $counter)
        
        
            <tr>
            <td>
                    {{$counter->id}}
            </td>
            <td>
                    {{$counter->full_name}}
            </td>
            <td>
                {{$counter->counter_number}}
            </td>
            <td>
                {{$counter->phone_number}}
            </td>
            <td>
                 
                {{$counter->sector_type->sector_type}}  
          
            </td>
           
            <td>
               
                
                <button type="button" class="btn btn-outline-accent m-btn m-btn--icon m-btn--icon-only m-btn--pill"
                  data-toggle="modal" data-target="#m_modal_1-{{$counter->id}}">
                      <i class="flaticon-folder-1"></i>
                      
                </button> 


               
            </td>
        </tr>


    
    <div class="modal fade" id="m_modal_1-{{$counter->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
        aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    New Notices
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        &times;
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Notices.store') }}" method="POST" role="form"  data-parsley-validate enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right">
                    {{ csrf_field() }}
                    

                  

                    
                    <div class="form-group m-form__group row m--margin-top-20">
                        <label class="col-form-label col-lg-3 col-sm-12">
                            Notice Type
                        </label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <select name="notice_type_id" class="form-control "  title="Choose Notice Type">
                                @foreach($noticeTypes as $notice_type)
                                    <option value="{{$notice_type->id}}">{{$notice_type->notice_type}}
                                    
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group m-form__group row m--margin-top-20">
                        <label class="col-form-label col-lg-3 col-sm-12">
                        Note
                         </label>
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            <textarea   name="notice" class="form-control" ></textarea>
                        </div>
                    </div>

                    
                      

               
                
                
               

                    <input type="hidden" value="{{$counter->id}}" name="counter_id" class="form-control">
                        <input type="hidden" value="NULL" name="procedure" class="form-control">
                        <input type="hidden" value="Current" name="notice_state" class="form-control">
                        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" class="form-control">
                        <input type="hidden" value="{{ Auth::user()->office_id}}" name="office_id" class="form-control">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit"   class="btn btn-primary">
                            Add
                        </button>
                </form>
            </div>
        </div>
    </div>
</div>

     
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
             there are no Counter currently
        </div>
    </div>

    <div class="col-lg-3">
        <a href="{{route('user')}}" class="btn m-btn--pill m-btn--air         btn-outline-accent m-btn m-btn--custom">
            BACK TO HOME
        </a>
    </div>
</div>
@endif


@endsection
{{-- end section the content the page --}}