@extends('layouts.app')

@section('content')
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Sign Up To Recieve Notifications For Deals</h1>
                    <form class="" method="POST" action="/offers">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-fname">First Name</label>
                                    <input id="input-fname" type="text"
                                        class="form-control form-control-lg @error('fname') is-invalid @enderror"
                                        name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus
                                        placeholder="Enter First Name">

                                    @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-lname">First Name</label>
                                    <input id="input-lname" type="text"
                                        class="form-control form-control-lg @error('lname') is-invalid @enderror"
                                        name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus
                                        placeholder="Enter Last Name">

                                    @error('lname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-email">Email address</label>
                                    <input id="input-email" type="email"
                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Enter Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="input-phone">Phone Number</label>
                                    <input id="input-phone" type="tel"
                                        class="form-control form-control-lg @error('phone_number') is-invalid @enderror"
                                        name="phone_number" value="{{ old('phone_number') }}" required
                                        autocomplete="phone_number" autofocus placeholder="Enter Phone Number">

                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <p>
                                    In signing up I acknowledge that I am 18 years of age or older, want to recieve email
                                    offers
                                    from Billy's Burgurs and if, I select to join Dinne Rewards, agree to the terms and
                                    conditions of the program
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
