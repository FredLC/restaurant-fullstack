@extends('layouts.landing-page')

@section('content')
    <section id="info">
      <div class="restaurant-image">
        <img src="/img/bar-view.jpg" alt="bar view">
      </div>
      <div class="info-content">
        <h2>Serving amazing food since 2009</h2>
        <div class="paragraphs">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint mollitia velit ducimus maiores laborum fuga, in explicabo possimus veritatis! Eveniet tempora voluptatem, consequatur eos cumque ratione exercitationem odit illum debitis.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro velit commodi dolore possimus fugiat temporibus voluptatem sunt numquam saepe voluptatum repellat labore provident adipisci, facilis est libero expedita illum iure!</p>
        </div>
        <a href="#" class="about-link"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <span>Learn more about our restaurant</span></a>
      </div>
    </section>
    <section id="food-preview">
      <h2>Feast your eyes, fill your stomach.</h2>
      <div class="button-rounded">
        View our menu
      </div>
      <div class="container">
        <div class="left-button">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
         <div class="right-button">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
        <div class="food-slider">
          <div class="sliding-system">
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Starters
                </div>
                <div class="food-description">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel rerum repudiandae unde aliquid. Voluptatibus sit, modi ullam consectetur, officia veniam inventore dolores perferendis ipsa ipsam, eaque aliquid. A, repellat ea!
                </div>
                <img src="/img/nachos.jpeg" alt="">
            </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Burgers
                </div>
                <div class="food-description">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel rerum repudiandae unde aliquid. Voluptatibus sit, modi ullam consectetur, officia veniam inventore dolores perferendis ipsa ipsam, eaque aliquid. A, repellat ea!
                </div>
                <img src="/img/burger2.jpeg" alt="">
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Sandwiches
                </div>
                <div class="food-description">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel rerum repudiandae unde aliquid. Voluptatibus sit, modi ullam consectetur, officia veniam inventore dolores perferendis ipsa ipsam, eaque aliquid. A, repellat ea!
                </div>
                <img src="/img/wrap.jpeg" alt="">
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Pizzas
                </div>
                <div class="food-description">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel rerum repudiandae unde aliquid. Voluptatibus sit, modi ullam consectetur, officia veniam inventore dolores perferendis ipsa ipsam, eaque aliquid. A, repellat ea!
                </div>
                <img src="/img/pizza.jpeg" alt="">
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Pizzas
                </div>
                <div class="food-description">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel rerum repudiandae unde aliquid. Voluptatibus sit, modi ullam consectetur, officia veniam inventore dolores perferendis ipsa ipsam, eaque aliquid. A, repellat ea!
                </div>
                <img src="/img/pizza.jpeg" alt="">
              </div>
            </div>
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Pizzas
                </div>
                <div class="food-description">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel rerum repudiandae unde aliquid. Voluptatibus sit, modi ullam consectetur, officia veniam inventore dolores perferendis ipsa ipsam, eaque aliquid. A, repellat ea!
                </div>
                <img src="/img/pizza.jpeg" alt="">
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
    </section>
@endsection