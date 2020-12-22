@extends('layouts.app')

@section('content')
    <div id="waitlist-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Reservation</h1>
                    <form>
                        <div class="form-group">
                            <label for="first-name-input">First Name</label>
                            <input name="fname" type="text" class="form-control" id="first-name-input" placeholder="John">
                        </div>
                        <div class="form-group">
                            <label for="last-name-input">Last Name</label>
                            <input name="lname" type="text" class="form-control" id="last-name-input" placeholder="Doe">
                        </div>
                        <div class="form-group">
                            <label for="email-input">Email address</label>
                            <input type="email" class="form-control" name="email" id="email-input"
                                placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phone-input">Phone Number</label>
                            <input name="phone" type="text" class="form-control" id="phone-input"
                                placeholder="xxx-xxx-xxxx ">
                        </div>
                        <div class="form-group">
                            <label for="guests-input">How Many Guests</label>
                            <select name="guests  " class="form-control" id="guests-input">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="time-input">What Time?</label>
                            <select name="time" class="form-control" id="time-input">
                                <option value="6">6:00 PM</option>
                                <option value="7">7:00 PM</option>
                                <option value="8">8:00 PM</option>
                                <option value="9">9:00 PM</option>
                                <option value="10">10:00 PM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <p>
                        Please Note: This is not a reservation. You will be added to the current waitlist. You may have a
                        short wait once you arrive while we prepare your table.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection