@extends('layouts.app')

@section('content')
    <div id="offers-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Subscribe to Newsletter</h1>
            <form class="form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input name="firstName" type="text" class="form-control" id="firstNameInput" placeholder="John">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input name="email" type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastName">Last Name</label>
                  <input name="lastName" type="text" class="form-control" id="lastNameInput" placeholder="Smith">
                </div>
                <div class="form-group">
                  <label for="phone">Phone number</label>
                  <input name="phone" type="tel" class="form-control" id="phoneInput" placeholder="212-222-2222">
                </div>
              </div>
            </div>
            <small class="consent">We will not sell or distribute your email address. You can unsubscribe at any time.</small>
            <button type="submit" class="btn btn-primary mb-2">Send Reservation</button>
          </form>
          </div>
        </div>
      </div>
    </div>
@endsection