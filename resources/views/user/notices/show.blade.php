@extends('user.home')
@section('title','SHOW NOTICE')
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
                 NOTICE
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
              {{$notice->counter->full_name}}
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')
<div class="row">
    <div class="col-lg-10">
    <!--begin::Portlet-->
    <div class="m-portlet m-portlet--creative m-portlet--first m-portlet--bordered-semi">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <span class="m-portlet__head-icon m--hide">
                        <i class="flaticon-statistics"></i>
                    </span>
                    <h3 class="m-portlet__head-text">
                        
                        {{-- Name : 
                            {{$notice->counter->full_name}} --}}
                    </h3>
                    
                    <h2 class="m-portlet__head-label m-portlet__head-label--warning">
                        <span>
                            NOTICE DITAILS

                            
                        </span>
                    </h2>

                    
                </div>
            </div>
           
        </div>
        <div class="m-portlet__body">
            <div class="m-widget16">
                <div class="row">
                   
                    <div class="col-md-6">
                        <div class="m-widget16__head">
                            <div class="m-widget16__item">
                                <span class="m-widget16__sceduled">
                                    Counter 
                                </span>
                                <span class="m-widget16__amount m--align-center">
                                    Info
                                </span>
                            </div>
                        </div>
                        <div class="m-widget16__body">
                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Counter Number
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{$notice->counter->counter_number}}
                                </span>
                            </div>
                            <!--begin::widget item-->
                            
                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Customer Name
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{$notice->counter->full_name}}
                                </span>
                            </div>

                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Neighborhood
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{$notice->counter->neighborhood}}
                                </span>
                            </div>

                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Square Number
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{$notice->counter->square_number}}
                                </span>
                            </div>

                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Street Number
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{$notice->counter->street_number}}
                                </span>
                            </div>

                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Phone Number
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{$notice->counter->phone_number}}
                                </span>
                            </div>

                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Sector Type
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{-- {{$notice->counter->sector_type}} --}}
                                    {{$notice->counter->sector_type->sector_type}}
                                </span>
                            </div>
                            
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="m-widget16__head">
                            <div class="m-widget16__item">
                                <span class="m-widget16__sceduled">
                                    Notice 
                                </span>
                                <span class="m-widget16__amount m--align-center">
                                    Info
                                </span>
                            </div>
                        </div>
                        <div class="m-widget16__body">
                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Notice Number
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{$notice->id}}
                                </span>
                            </div>
                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Notice State
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{$notice->notice_state}}
                                </span>
                            </div>
                            <!--begin::widget item-->
                            
                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Note
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{$notice->notes}}
                                </span>
                            </div>

                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Notice Type
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{$notice->notice_type->notice_type}}
                                </span>
                            </div>

                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Procedure
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{$notice->	measures}}
                                </span>
                            </div>

                            <div class="m-widget16__item">
                                <span class="m-widget16__date">
                                    Date
                                </span>
                                <span class="m-widget16__price m--align-center m--font-brand">
                                    {{$notice->created_at}}
                                </span>
                            </div>

                           

                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Portlet-->

    

</div>
<div class="col-lg-2 mt-5" >
    

    <a href="{{route('Notices.index')}}" class="btn m-btn--pill m-btn--air   mt-5  btn-outline-accent btn-block">
        Home
    </a>

    <button class="btn m-btn--pill m-btn--air   mt-5  btn-outline-accent btn-block"  data-toggle="modal" data-target="#m_modal_1">
        EDIET
    </button>

  {{-- begin form Edit --}}
 

  <div class="modal fade" id="m_modal_1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Notices
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('Notices.update',$notice->id) }}" method="POST" role="form"  data-parsley-validate enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        

                    

                        
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

                        
                        

                
                    
                    
                

                        {{-- <input type="hidden" value="{{$counter->id}}" name="counter_id" class="form-control"> --}}
                            {{-- <input type="hidden" value="NULL" name="procedure" class="form-control"> --}}
                            {{-- <input type="hidden" value="Current" name="notice_state" class="form-control"> --}}
                            {{-- <input type="hidden" value="{{ Auth::user()->id }}" name="user_id" class="form-control"> --}}
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit"   class="btn btn-primary">
                                Edit
                            </button>
                    </form>
                </div>
            </div>
        </div>
  </div>
  {{-- end form Edit --}}

    

    <form action="{{route('Notices.destroy',[$notice->id])}}" method="POST">
        {{ csrf_field()}}
        {{ method_field('delete') }}
      
        

        <button type="submit" class="btn m-btn--pill m-btn--air  mt-2  btn-outline-danger btn-block">
            DELETE
        </button>
    </form>
</div>
</div>

@endsection
{{-- end section the content the page --}}