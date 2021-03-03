@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit Social Settings</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit
                        amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Social Settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic form -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Edit Social Settings</h5>
                    <div class="card-body">
                        <form class="" method="POST" action="/admin/settings/social">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="input-facebook">Facebook Url</label>
                                <input id="input-facebook" type="text"
                                    class="form-control form-control-lg @error('facebook_url') is-invalid @enderror"
                                    name="facebook_url" value="{{ old('facebook_url', $social_setting->facebook_url) }}"
                                    autocomplete="description" autofocus placeholder="Add Enter Facebook Profile">

                                @error('facebook_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="input-twitter">Twitter Url</label>
                                <input id="input-twitter" type="text"
                                    class="form-control form-control-lg @error('twitter_url') is-invalid @enderror"
                                    name="twitter_url" value="{{ old('keywords', $social_setting->twitter_url) }}"
                                    autocomplete="twitter_url" autofocus placeholder="Add Twitter Profile">

                                @error('twitter_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="input-instagram">Instagram Url</label>
                                <input id="input-instagram" type="text"
                                    class="form-control form-control-lg @error('instagram_url') is-invalid @enderror"
                                    name="instagram_url" value="{{ old('keywords', $social_setting->instagram_url) }}"
                                    autocomplete="instagram_url" autofocus placeholder="Add Twitter Profile">

                                @error('instagram_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                </div>
                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic form -->
            <!-- ============================================================== -->
        </div>

    </div>
@endsection
