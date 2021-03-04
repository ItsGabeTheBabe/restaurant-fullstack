@extends('layouts.app')

@section('title')
    {{ $settings['general']->site_title }} | About Us
@endsection

@section('description')
    Every day, more than 11 million guests visit Billy's Burgers restaurants around the world. And they do so because our
    restaurants are known for serving high-quality, great-tasting, and affordable food. Founded in 1954, Billy's Burgers is
    the
    second largest fast food hamburger chain in the world. The original Home of the Whopper, our commitment to premium
    ingredients, signature recipes, and family-friendly dining experiences is what has defined our brand for more than 50
    successful years.
@endsection

@section('content')
    <div id="about-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>About</h1>
                    <p>Neutra selfies cronut yuccie viral freegan hoodie man bun tumblr four loko umami kickstarter paleo.
                        Pop-up
                        typewriter retro, tacos post-ironic lumbersexual prism beard cred skateboard scenester williamsburg.
                        Truffaut stumptown gochujang, try-hard artisan pok pok yuccie glossier subway tile mumblecore XOXO 3
                        wolf
                        moon gentrify. Lomo tumblr sriracha subway tile, brunch tbh adaptogen vinyl single-origin coffee
                        forage
                        keytar keffiyeh. Crucifix 3 wolf moon +1, live-edge swag microdosing vinyl poutine cardigan keytar
                        synth
                        celiac umami. Tote bag wolf 3 wolf moon, hammock chia jean shorts copper mug banh mi crucifix kogi
                        godard.
                    </p>
                    <p>Neutra selfies cronut yuccie viral freegan hoodie man bun tumblr four loko umami kickstarter paleo.
                        Pop-up
                        typewriter retro, tacos post-ironic lumbersexual prism beard cred skateboard scenester williamsburg.
                        Truffaut stumptown gochujang, try-hard artisan pok pok yuccie glossier subway tile mumblecore XOXO 3
                        wolf
                        moon gentrify. Lomo tumblr sriracha subway tile, brunch tbh adaptogen vinyl single-origin coffee
                        forage
                        keytar keffiyeh. Crucifix 3 wolf moon +1, live-edge swag microdosing vinyl poutine cardigan keytar
                        synth
                        celiac umami. Tote bag wolf 3 wolf moon, hammock chia jean shorts copper mug banh mi crucifix kogi
                        godard.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="img/about-page-img.jpeg" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
