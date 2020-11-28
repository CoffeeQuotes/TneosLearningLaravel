@extends('layouts.app')
@section('page_title', 'Buy Now')
@section('content')
    <div class="container mt-5">
        <div class="row mt-2">

            <div class="col-md-6">
                <img src="{{Voyager::image($pack->image)}}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md-6">
                <p class="display-4 live-title">  {{$pack->name}} </p>
                <p class="card-text"> {!! $pack->description !!}</p>
                 <img src="{{asset('app-assets/img/core-img/rupees-shopping-bag.png')}}" alt=""><span class="text-success font-weight-bolder" style="font-size: 24px; line-height: 96px">{{ $pack->amount }} /- only</span></p>
                @if(Session::has('amount'))
                    <form action="{{route('pay')}}" method="POST">
                        <script
                            src="https://checkout.razorpay.com/v1/checkout.js"
                            data-key="rzp_live_CsYsxq7OyyehDC"
                            data-amount="{{Session::get('amount')}}"
                            data-currency="INR"
                            data-order_id="{{Session::get('order_id')}}"
                            data-buttontext="Pay Now"
                            data-name="Tneos Live"
                            data-description="{{$pack->name}}"
                            data-theme.color="#F37254"
                        ></script>
                        <input type="hidden" custom="Hidden Element" name="hidden">
                    </form>
            </div>
            @endif
         </div>
         <div class="row my-4">
             <div class="col">
          
         </div>
    </div>
    </div>
    </div>
@endsection
