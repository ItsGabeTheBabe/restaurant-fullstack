@extends('layouts.app')

@section('title')
    {{ $settings['general']->site_title }} | Contact Us
@endsection

@section('description')
    Have a questions about your recent restaurant visit? Please reach out to our restaurant support team below.
@endsection

@section('content')
    <div id="contact-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                    <h3>Address</h3>
                    <p>{{ $settings['general']->address_1 }} {{ $settings['general']->address_2 }}<br>
                        {{ $settings['general']->city }} {{ $settings['general']->state }}
                        {{ $settings['general']->zipcode }}</p>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3357.1306786034093!2d-117.16450978481971!3d32.70915508099246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d9535752cf26c9%3A0xbf5bbe097a7420b1!2s285%20J%20St%2C%20San%20Diego%2C%20CA%2092101!5e0!3m2!1sen!2sus!4v1614894482094!5m2!1sen!2sus"
                        width="550" height="450" style="border:0;" frameborder="0" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
