@extends('layouts.app')

@section('content')
    <div id="waitlist-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Reservation</h1>
                    <form class="" method="POST" action="/reservations">
                        @csrf
                        <div class="form-group">
                            <label for="input-fname">First Name</label>
                            <input id="input-fname" type="text"
                                class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname"
                                value="{{ old('fname') }}" required autocomplete="fname" autofocus
                                placeholder="Enter First Name">

                            @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="input-lname">Last Name</label>
                            <input id="input-lname" type="text"
                                class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname"
                                value="{{ old('lname') }}" required autocomplete="lname" autofocus
                                placeholder="Enter Laste Name">

                            @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="input-email">Email address</label>
                            <input id="input-email" type="email"
                                class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Enter Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="input-phone">Phone Number</label>
                            <input id="input-phone" type="tel"
                                class="form-control form-control-lg @error('phone_number') is-invalid @enderror"
                                name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number"
                                autofocus placeholder="Enter Phone Number">

                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="guests-input">How Many Guests</label>
                            <select name="guests_total"
                                class="form-control form-control-lg @error('guests_total') is-invalid @enderror"
                                id="guests-input">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            @error('guests_total')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="time-input">What Time?</label>
                            <select name="time" class="form-control form-control-lg @error('time') is-invalid @enderror"
                                id="time-input">
                                <option value="6">6:00 PM</option>
                                <option value="7">7:00 PM</option>
                                <option value="8">8:00 PM</option>
                                <option value="9">9:00 PM</option>
                                <option value="10">10:00 PM</option>
                            </select>
                            @error('time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
