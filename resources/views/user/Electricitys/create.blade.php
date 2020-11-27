@extends('user.home')
@section('title','Last Updates')
@section('class','col-lg-4')

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
                Electricitys
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
            {{$counter->full_name}}
            </span>
        </div>
    </li>
</ul>
@endsection
{{-- end section the sub sub_titel --}}

{{-- begin section the content the page --}}
@section('content')
    <div class="m-widget6">
        @if(count($invoices)!=0)
                <div class="m-widget6__head">
                    <div class="m-widget6__item">
                        <span class="m-widget6__caption">
                            Sceduled
                        </span>
                        <span class="m-widget6__caption m--align-center">
                            Amount
                        </span>
                        <span class="m-widget6__caption m--align-center">
                            Quantity
                        </span>
                    </div>
                </div>
            
            @foreach($invoices as $invoice)

                <div class="m-widget6__body">
                    <div class="m-widget6__item">
                        <span class="m-widget6__text">
                        {{$invoice->created_at}}
                        </span>
                        <span class="m-widget6__text m--align-center ">
                            {{$invoice->electrics_quantity}}
                        </span>
                        <span class="m-widget6__text m--align-center m--font-boldest m--font-brand">
                        {{$invoice->amount}}
                        </span>
                    </div>
                    
                </div>
            @endforeach
        @else
        <div class="m-widget6">
            <div class="m-widget6__head">
                <div class="m-widget6__item">
                    <span class="m-widget6__caption">
                        There are no Invoices currently
                    </span>
                
                </div>
            </div>
        </div>
        @endif
        
    </div>



@endsection 

@section('content_2')

{{-- this begin add office section --}}
   {{--  --}}
   @if(count($first)!=0)
   <div class="col-xl-4">
    <!--begin:: Widgets/Sales States-->
        <div class="m-portlet m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            The Last Invoice
                        </h3>
                    </div>
                </div>
            
            </div>
            <div class="m-portlet__body">
                <div class="m-widget6">
                    <div class="m-widget6__head">
                        <div class="m-widget6__item">
                            <span class="m-widget6__caption">
                                Invoice
                            </span>
                        
                        </div>
                    </div>
                    <div class="m-widget6__body">
                        <div class="m-widget6__item">
                            <span class="m-widget6__text">
                                The Date
                            </span>
                            
                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                            {{$first->created_at}}
                            </span>
                        </div>
                        <div class="m-widget6__item">
                            <span class="m-widget6__text">
                                Counter Number
                            </span>
                            
                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                                {{$first->counter->counter_number}}
                            </span>
                        </div>
                        <div class="m-widget6__item">
                            <span class="m-widget6__text">
                            Customer Name
                            </span>
                            
                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                                {{$first->counter->full_name}}
                            </span>
                        </div>

                        <div class="m-widget6__item">
                            <span class="m-widget6__text">
                            Electrics Quantity
                            </span>
                            
                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                                {{$first->electrics_quantity}}
                            </span>
                        </div>

                        <div class="m-widget6__item">
                            <span class="m-widget6__text">
                            CODE 
                            </span>
                            
                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                                {{$first->electrics_code}}
                            </span>
                        </div>

                        <div class="m-widget6__item">
                            <span class="m-widget6__text">
                            Amount
                            </span>
                            
                            <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                                {{$first->amount}}
                            </span>
                        </div>

                        

                       
                    </div>
                    <div class="m-widget6__foot">
                        <div class="m-widget6__action m--align-right">
                            {{-- <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">
                                Print
                            </button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--end:: Widgets/Sales States-->
    </div>
   @else
   <div class="col-xl-4">
    <!--begin:: Widgets/Sales States-->
        <div class="m-portlet m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            The Invoice
                        </h3>
                    </div>
                </div>
            
            </div>
            <div class="m-portlet__body">
                <div class="m-widget6">
                    <div class="m-widget6__head">
                        <div class="m-widget6__item">
                            <span class="m-widget6__caption">
                                There are no Invoices currently
                            </span>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--end:: Widgets/Sales States-->
</div>
   @endif
  
   {{--  --}}
    <div class="col-lg-4">
        <!--begin::Portlet-->
        <div class="m-portlet">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Buy Electricity
                        </h3>
                    </div>
                </div>
            </div>
            
            <div class="m-portlet__body">
                <form method="POST" action ="{{ route('Electricitys.store',$counter->id) }}" data-parsley-validate>
                    {{ csrf_field() }}

                    

                    <div class="form-group">
                        <label name="name">Date </label>
                    <input type="" value="{{now()}}" disabled name="invoice_date"  class="form-control" required >
                    </div>

                    <div class="form-group">
                        <label name="name">Amount </label>
                    <input type="number" name="amount"  class="form-control" required >
                    <input type="hidden" name="counter_id" value="{{$counter->id}}" class="form-control">
                    </div>
                   
            
                    <button class="btn m-btn--pill  btn-accent m-btn m-btn--custom btn-block" type="submit">Buy</button>
                    
                </form>
             </div>
         <!--end::Portlet-->
            </div>
  
</div>
{{-- this end add office section --}}
@endsection
{{-- end section the content the page --}}