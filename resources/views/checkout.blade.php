@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 80px">
<h1 class="checkout-heading stylish-heading">Checkout</h1>
<div class="checkout-section">
        <div>
            {{-- <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
                {{ Session::get('error') }}
            
            </div> --}}
            <form method="POST" action="{{ route('checkout.index') }}" id="checkout-form">
                   <br>
                   <br><h2>Shipping Details</h2>
               
            <div class="col-md-8">  
            <div class="form-group">
                <label for="email">Email Address</label>
                @if (auth()->user())
                    <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                @else
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                @endif
            </div>
        </div>
            <div class="col-md-8"> 
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            </div>
            </div>
            <div class="col-md-8"> 
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
            </div>
             </div>
             <div class="col-md-8"> 
            <div class="half-form">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                </div>
                <div class="form-group">
                    <label for="province">Province</label>
                    <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                </div>
            </div>
        </div> <!-- end half-form -->
        <div class="col-md-8"> 
            <div class="half-form">
                <div class="form-group">
                    <label for="postalcode">Postal Code</label>
                    <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                </div>
            </div> <!-- end half-form -->
        </div>
            <div class="spacer"></div>

                    <br><h2>Payment Details</h2>

                    <div class="col-md-5">
                    <div class="form-group">
                        <label for="card-name">Card Holder Name</label>
                        <input type="text" class="form-control" id="card-name" name="card-name" value="" required>
                    </div>
                    </div>
                   
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="card-number">Credit Card Number</label>
                            <input type="text" class="form-control" id="card-number" name="card-number" value="">
                            <p>Dummy Credit Card Number: 4242424242424242</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="card-expiry-month">Expiration Month</label>
                                    <input type="text" id="card-expiry-month" name="card-expiry-month"
                                    class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="card-expiry-year">Expiration Year</label>
                                    <input type="text" id="card-expiry-year" name="card-expiry-year"
                                    class="form-control" required>
                                </div>
                            </div>
                        
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="card-cvc">CVC</label>
                            <input type="text" id="card-cvc" name="card-cvc" class="form-control" required>
                        </div>
                    </div>
                
                    <div class="spacer"></div>
                    {{ csrf_field() }}
                    <button type="submit" id="complete-order" name="complete-order" class="btn btn-success">Complete Order</button>
                
                
                </form>
        </div>
    </div>
</div>
@endsection


@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('js/checkout.js')}}"></script>
@endsection