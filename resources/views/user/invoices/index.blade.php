@extends('user.home')
@section('title','Last Updates')
@section('class','col-lg-9')

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
                Invoices
            </span>
        </div>
    </li>
    <li class="m-nav__separator">
        -
    </li>
    <li class="m-nav__item">
        <div class="m-nav__link">
            <span class="m-nav__link-text">
            Show All Invoices
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
        <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
            <div class="row align-items-center">
                <div class="col-xl-8 order-2 order-xl-1">
                    <div class="form-group m-form__group row align-items-center">
                        <div class="col-md-12">
                            <div class="m-input-icon m-input-icon--left">
                                <input type="text" class="form-control m-input m-input--solid" placeholder="Search For Invoices..." id="generalSearch"  >
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
                        Sceduled
                    </th>
                    <th>
                        Amount
                    </th>
                    <th>
                        Quantity
                    </th>
                   
                </tr>
            </thead>
            <tbody>
                
                @foreach($invoices as $invoice)
                
                    <tr>
                    <td>
                            {{$invoice->id}}
                    </td>
                    <td>
                        {{$invoice->created_at}}
                    </td>
                    <td>
                        {{$invoice->electrics_quantity}}
                    </td>
                    
                    <td>
                        {{$invoice->amount}}
                    </td>
                    
                </tr>
                
        
                
                @endforeach
                
            </tbody>
        </table>
            
         
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

