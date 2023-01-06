@extends('layouts.app')

@section ('content')

<div class="container p-0">
  @if(Session::has('success'))
  <div class="row">
    <div class="col-12">
      <div id="charge-message" class="alert alert-success">
        {{ Session::get('success') }}
      </div>
    </div>
  </div>
  @endif
  <!-- GET FIT FROM HOME [S]-->
    <div class="row">
      <div class="col-12 promowrap">
        <div class="row m-0 p-0">
          <div class="col-4 promo-info h-100">
            <div class="infowrapper d-flex flex-column h-100 justify-content-center">
              <h2>GET YOUR GOLF STUFF FROM HOME</h2>
              <h4>30% off all listed items!</h4>
              <p>Sale ends 23rd June 2020</p>
              <a href="{{ route('product.index') }}" class="w-100 button">SHOP NOW</a>
            </div>   
          </div> 
        </div>
        <img class="d-block w-100" src="{{ asset('photo/bg_golf.jpeg') }}" alt="">
      </div>
    </div>
    <!-- GET FIT FROM HOME [E]-->

    <!-- MEN & WOMEN [S]-->
    <div class="row pt-4">
      <div class="col-6 d-flex flex-column align-items-center genderwrapper">
        <a href="{{ route('product.index') }}">
          <button id="maleBtn">
          <div class="gender">
            <img class="d-block w-100 h-50" src="{{ asset('photo/men_golf.jpg') }}" alt="">
            <h2 class="pt-2">MEN</h2>
          </div>
        </button>
        </a>
      </div>
      <div class="col-6 d-flex flex-column align-items-center genderwrapper">
        <a href="{{ route('product.index') }}">
          <button id="femaleBtn">
          <div class="gender">
            <img class="d-block w-100" src="{{ asset('photo/woman_golf.jpg') }}" alt="">
            <h2 class="pt-2">WOMAN</h2>
          </div>
        </button>
        </a>
      </div>
    </div>
    <!-- MEN & WOMEN [E]-->

        

</div>

@endsection