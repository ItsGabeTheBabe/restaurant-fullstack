@extends('layouts.app')

@section('content')
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Sign Up To Recieve Notifications For Deals</h1>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first-name-input">First Name</label>
                                    <input type="text" class="form-control" name="first-name" id="first-name-input"
                                        placeholder="First Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last-name-input">Last Name</label>
                                    <input name="first-name" type="text" class="form-control" id="last-name-input"
                                        placeholder="Last Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email-input">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email-input"
                                        placeholder="name@example.com">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone-input">Phone Number</label>
                                    <input name="phone" type="text" class="form-control" id="phone-input"
                                        placeholder="xxx-xxx-xxxx ">
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
