@extends('layouts.app')

@section('content')
    <div id="waitlist-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Get On The List</h1>
            <form class="form">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input name="firstName" type="text" class="form-control" id="firstNameInput" placeholder="John">
              </div>
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input name="lastName" type="text" class="form-control" id="lastNameInput" placeholder="Doe">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input name="email" type="email" class="form-control" id="emailInput" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="phone">Phone number</label>
                <input name="phone" type="tel" class="form-control" id="phoneInput" placeholder="212-222-2222">
              </div>
              <div class="form-group">
                <label for="guests">Number of guests</label>
                <select name="guests" class="form-control" id="guestsInput">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                </select>
              </div>
              <div class="form-group">
                <label for="time">What Time?</label>
                <select name="time" class="form-control" id="timeInput">
                  <option value="4">4:00 PM</option>
                  <option value="5">5:00 PM</option>
                  <option value="6">6:00 PM</option>
                  <option value="7">7:00 PM</option>
                  <option value="8">8:00 PM</option>
                  <option value="9">9:00 PM</option>
                  <option value="10">10:00 PM</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary mb-2">Send Reservation</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection