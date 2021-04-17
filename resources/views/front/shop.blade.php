<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Pricing example · Bootstrap v4.6</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.min.css') }}">

  </head>
  <body>
    
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm bg-dark">
  <h5 class="my-0 mr-md-auto font-weight-normal">Optisoft - Shop</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="{{ url('/') }}">Home</a>
    <a class="p-2 text-dark" href="{{ url('/#contact') }}">Contacto</a>
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>



{{-- <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center"> --}}
  {{-- <h1 class="display-4">Pricing</h1> --}}
  {{-- <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p> --}}
{{-- </div> --}}

<div class="container-fluid">

  <div class="row">
    <div class="col">
      <p>4 productos</p>
    </div>
  </div>
  <div class="row">

    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div> 
    {{-- fin --}}

      <div class="card-deck m-0 text-center col-md-8 order-md-1">
          {{-- <div class="card-deck mb-3 text-center"> --}}
    
        <div class="card shadow-sm col-md-3 col-sm-6">
          <div class="card-header">
            {{-- <h4 class="my-0 font-weight-normal">Free</h4> --}}
            <img class="img-card-header" src="{{ asset('assets/img/default.png') }}" alt="">
          </div>
          <div class="card-body p-0">
            <ul class="list-unstyled mt-3 mb-0 ">
              <li><h3 class="title-product">Email support</h3></li>
              <li><h3 class="price-product mb-0">$30.000</h3></li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary btn-carrito">Añadir al carrito</button>
          </div>
        </div>
        <div class="card shadow-sm col-md-3 col-sm-6">
          <div class="card-header">
            {{-- <h4 class="my-0 font-weight-normal">Free</h4> --}}
            <img class="img-card-header" src="{{ asset('assets/img/default.png') }}" alt="">
          </div>
          <div class="card-body p-0">
            <ul class="list-unstyled mt-3 mb-0">
              <li><h3 class="title-product">Email support</h3></li>
              <li><h3 class="price-product mb-0">$30.000</h3></li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary btn-carrito">Añadir al carrito</button>
          </div>
        </div>
        <div class="card shadow-sm col-md-3 col-sm-6">
          <div class="card-header">
            {{-- <h4 class="my-0 font-weight-normal">Free</h4> --}}
            <img class="img-card-header" src="{{ asset('assets/img/default.png') }}" alt="">
          </div>
          <div class="card-body p-0">
            <ul class="list-unstyled mt-3 mb-0">
              <li><h3 class="title-product">Email support</h3></li>
              <li><h3 class="price-product mb-0">$30.000</h3></li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary btn-carrito">Añadir al carrito</button>
          </div> 
        </div>
        <div class="card shadow-sm col-md-3 col-sm-6">
          <div class="card-header">
            {{-- <h4 class="my-0 font-weight-normal">Free</h4> --}}
            <img class="img-card-header" src="{{ asset('assets/img/default.png') }}" alt="">
          </div>
          <div class="card-body p-0">
            <ul class="list-unstyled mt-3 mb-0">
              <li><h2 class="title-product">Email support</h2></li>
              <li><h3 class="price-product mb-0">$30.000</h3></li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary btn-carrito">Añadir al carrito</button>
          </div> 
        </div>
    
      </div>

  </div>
  {{-- fin --}}

        <!-- Footer-->
        <footer class="footer py-4 bg-dark">
          <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left color-footer">Copyright © Your oftalmology 2021</div>
                <div class="col-lg-4 my-3 my-lg-0">
                  <a class="btn btn-success btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                  <a class="btn btn-success btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-success btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right color-footer">
                  <a class="mr-3 color-footer" href="#!">Politicas de privacidad</a>
                  <a class="color-footer" href="#!">Terminos de uso</a>
                </div>
            </div>
          </div>
      </footer>
</div>


    
  </body>
</html>
