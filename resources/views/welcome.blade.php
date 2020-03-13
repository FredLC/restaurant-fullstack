<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Restaurant App</title>
        <link rel="stylesheet" href="/css/app.css">
         <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
    </head>
    <body>
        <section id="welcome">
      <div class="welcome-menu">
        <div class="logo">
          <img src="/img/restaurant-logo.png" alt="logo">
        </div>
        <div class="menu">
          <div class="menu-title">
            Menu
          </div>
          <ul class="links">
            <li>
              <a href="#">Menu</a>
            </li>
            <li>
              <a href="#">Order Now</a>
            </li>
            <li>
              <a href="#">Waitlist</a>
            </li>
            <li>
              <a href="#">Offers</a>
            </li>
            <li>
              <a href="#">Gift Cards</a>
            </li>
          </ul>
        </div>
        <div class="social-icons">
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
        <div class="location">
          <div class="address">
            123 W 51 st St <br>
            New York, NY, 10019 
          </div>
          <div class="phone-number">
            <a href="tel:212-318-3399">212-318-3399</a>
          </div>
        </div>
      </div>
      <div class="welcome-jumbotron">
        <h1>Try our new gourmet burgers!</h1>
        <p class="order-now"><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Order Now</a></p>
      </div>
    </section>
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
    </body>
</html>
