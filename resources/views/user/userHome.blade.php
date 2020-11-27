@extends('user.home')
@section('title','Home')
@section('class','col-lg-12')
@section('style','display:none')
@section('style_row','justify-content:center')
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
                Home
            </span>
        </div>
    </li>
   
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content_2')
<div class="row">
    <a href="{{route('Counters.index')}}" style="text-decoration: none">
        <div class="col-md-4">
            <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-accent"style="height:150px; width: 270px;">
                <div class="m-portlet__body">
                    <div class="m-widget26">
                        <div class="m-widget26__number">
                            Counters
                            <small>
                                All Counters
                            </small>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="{{route('Electricitys.index')}}" style="text-decoration: none">
        <div class="col-md-4">
            <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-danger"style="height:150px; width: 270px;">
                <div class="m-portlet__body">
                    <div class="m-widget26">
                        <div class="m-widget26__number">
                            Electricitys
                            <small>
                                All Electricitys
                            </small>
                        </div>
                        
                    </div>
                </div>
            </div> 
        </div>
    </a>
  
    <a href="{{route('Notices.index')}}" style="text-decoration: none">
        <div class="col-md-4">
              <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-brand "style="height:150px; width: 270px;">
                  <div class="m-portlet__body">
                      <div class="m-widget26">
                          <div class="m-widget26__number">
                              Notices
                              <small>
                                  All Notices
                              </small>
                          </div>
                          
                      </div>
                  </div>
              </div>
          </div>
  </a>
  
    
</div>

@endsection
{{-- end section the content the page --}}