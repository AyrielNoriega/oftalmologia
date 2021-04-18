@extends('front.layout.app')

@section('title', 'Optisoft - Shop')

@section('style')
    {{-- css adictional --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('content') 

<section>
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
        <div class="row">
          <div class="card shadow-sm col col-sm-6 col-md-6 col-lg-4 ">
            <div class="card-header">
              <img class="img-card-header" src="{{ asset('assets/img/default.png') }}" alt="">
            </div>
            <div class="card-body p-0">
              <ul class="list-unstyled mt-3 mb-0 ">
                <li><p class="title-product">Email support</p></li>
                <li><h3 class="price-product mb-0">$30.000</h3></li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-outline-primary btn-carrito">Añadir al carrito</button>
            </div>
          </div>

          <div class="card shadow-sm col col-sm-6 col-md-6 col-lg-4 ">
            <div class="card-header">
              <img class="img-card-header" src="{{ asset('assets/img/default.png') }}" alt="">
            </div>
            <div class="card-body p-0">
              <ul class="list-unstyled mt-3 mb-0">
                <li><p class="title-product">Email support</p></li>
                <li><h3 class="price-product mb-0">$30.000</h3></li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-outline-primary btn-carrito">Añadir al carrito</button>
            </div>
          </div>

          <div class="card shadow-sm col col-sm-6 col-md-6 col-lg-4 ">
            <div class="card-header">
              <img class="img-card-header" src="{{ asset('assets/img/default.png') }}" alt="">
            </div>
            <div class="card-body p-0">
              <ul class="list-unstyled mt-3 mb-0">
                <li><p class="title-product">Email support</p></li>
                <li><h3 class="price-product mb-0">$30.000</h3></li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-outline-primary btn-carrito">Añadir al carrito</button>
            </div> 
          </div>

          <div class="card shadow-sm col col-sm-6 col-md-6 col-lg-4 ">
            <div class="card-header">
              <img class="img-card-header" src="{{ asset('assets/img/default.png') }}" alt="">
            </div>
            <div class="card-body p-0">
              <ul class="list-unstyled mt-3 mb-0">
                <li><p class="title-product">Email support</p></li>
                <li><h3 class="price-product mb-0">$30.000</h3></li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-outline-primary btn-carrito">Añadir al carrito</button>
            </div> 
          </div>
      
        </div>
      </div>
    </div>
    {{-- fin --}}


  </div>
</section>
@endsection
