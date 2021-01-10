@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">New User</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit
                        amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/users" class="breadcrumb-link">All
                                        User</a></li>
                                <li class="breadcrumb-item active" aria-current="page">New User</li>
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
                    <h5 class="card-header">Create A User</h5>
                    <div class="card-body">
                        <form class="" method="POST" action="/admin/users">
                            @csrf
                            <div class="form-group">
                                <label for="input-first-name">First Name</label>
                                <input id="input-first-name" type="text"
                                    class="form-control form-control-lg @error('input-first-name') is-invalid @enderror"
                                    name="fname" value="{{ old('input-first-name') }}" required autocomplete="name"
                                    autofocus placeholder="First Name">

                                @error('input-first-name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="input-last-name">Last Name</label>
                                <input id="input-last-name" type="text"
                                    class="form-control form-control-lg @error('input-last-name') is-invalid @enderror"
                                    name="lname" value="{{ old('input-last-name') }}" required autocomplete="name" autofocus
                                    placeholder="Last Name">

                                @error('input-last-name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="input-email">Email</label>
                                <input id="input-email" type="email"
                                    class="form-control form-control-lg @error('input-email') is-invalid @enderror"
                                    name="email" value="{{ old('input-email') }}" required autocomplete="email"
                                    placeholder="Email">

                                @error('input-email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="input-password">Password</label>
                                <input id="input-password" type="password"
                                    class="form-control form-control-lg @error('input-password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password" placeholder="Enter Password">

                                @error('input-password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">Password</label>
                                <input id="password-confirm" type="password" class="form-control form-control-lg"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <label for="input-role">Role</label>
                                <select class="form-control" id="input-role" name='role_id'>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" @if ($role->title == 'Admin')
                                            selected
                                    @endif
                                    >{{ $role->title }}</option>
                                    @endforeach
                                </select>
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
