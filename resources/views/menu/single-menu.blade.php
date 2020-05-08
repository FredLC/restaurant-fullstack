@extends('layouts.app')

@section('content')
    <div id="single-menu-page">
      <div class="container">
          <h1>Burgers</h1>
          <div class="row items-row">
              <div class="col-md-5 item">
                  <div class="info">
                    <h4>Classic Hamburger</h4>
                    <span class="price">8.00</span>
                  </div>
                  <div class="description">
                      <p>served with a special sauce, lettuce, tomato, onion, pickles (add cheese for 50)</p>
                  </div>
              </div>
              <div class="col-md-5 offset-md-2 item">
                <div class="info">
                  <h4>Veggie Burger</h4>
                  <span class="price">9.00</span>
                </div>
                <div class="description">
                    <p>served with house-made vegan patty, lettuce, tomato, onion, garlic mayo</p>
                </div>
            </div>
          </div>
          <div class="row items-row">
            <div class="col-md-5 item">
                <div class="info">
                  <h4>Chili Burger</h4>
                  <span class="price">10.00</span>
                </div>
                <div class="description">
                    <p>served with a spicy sauce, ground beef, tomato, red chili, melted cheese</p>
                </div>
            </div>
            <div class="col-md-5 offset-md-2 item">
                <div class="info">
                  <h4>Texan Burger</h4>
                  <span class="price">12.00</span>
                </div>
                <div class="description">
                    <p>served with BBQ sauce, cheddar cheese, bacon, lettuce, tomato, onion, pickles</p>
                </div>
            </div>
        </div>
      </div>
    </div>
@endsection