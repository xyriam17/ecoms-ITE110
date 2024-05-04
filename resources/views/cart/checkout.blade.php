@extends('master')

@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session()->has('message'))
    <div class="alert alert-{{session('type')}}">
        {{session('message')}}
    </div>
    @endif



    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form action="{{route('order')}}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <a href="#"><h5><i>Name: {{auth()->user()->name}}</i></h5></a>
                </div>
            </div>

            <div class="mb-3">
                <a href="#"><h5><i>Number: {{auth()->user()->phone_number}}</i></h5></a>

            </div>

            <div class="mb-3">
                <a href="#"><h5><i>Email: {{auth()->user()->email}}</i></h5></a>

            </div>

            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>


            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="city">City</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="City you live in..." required>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>

                
            </div>
           

            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
                
                <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="paypal">Cash On Delivery</label>
                </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        </form>
    </div>
</div>
    <br>

<script>
    (function() {
        'use strict';

        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

@stop
