@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-5">Welcome, {{ auth()->user()->name }}!</h1>
            <p class="lead text-muted">This is your dashboard where you can manage your account.</p>
        </div>
    </div>

    <!-- Dashboard cards -->
    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <p class="card-text">View and update your personal information.</p>
                    <a href="#" class="btn btn-primary">Go to Profile</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Settings</h5>
                    <p class="card-text">Update your account settings and preferences.</p>
                    <a href="#" class="btn btn-warning text-white">Settings</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Activity</h5>
                    <p class="card-text">Check your recent activity and notifications.</p>
                    <a href="#" class="btn btn-success">View Activity</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Logout button -->
    {{-- <div class="row mt-5">
        <div class="col-12 text-center">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger btn-lg">Logout</button>
            </form>
        </div>
    </div> --}}
</div>
@endsection
