@extends('layouts.app')

@section('title')
    {{ $settings['general']->site_title }} | Thank You
@endsection

@section('content')
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-8 offset-md-2 thank-you">
                    <h1>Thank You For Joining</h1>
                    <p>We will get back to you</p>
                </div>
            </div>
        </div>
    </div>
@endsection
