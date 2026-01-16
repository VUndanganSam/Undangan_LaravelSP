@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-6">
            <h1 class="display-4 fw-bold mb-4">Welcome to Student Portal</h1>
            <p class="lead mb-4">Your one-stop solution for managing academic records, courses, and university information.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg px-4 me-md-2">
                    <i class="fas fa-tachometer-alt me-2"></i>Go to Dashboard
                </a>
                <a href="{{ route('about') }}" class="btn btn-outline-secondary btn-lg px-4">
                    <i class="fas fa-info-circle me-2"></i>Learn More
                </a>
            </div>
        </div>
        <div class="col-lg-6">
            <img src="https://via.placeholder.com/500x300/3498db/ffffff?text=Student+Portal" 
                 alt="Student Portal" class="img-fluid rounded shadow">
        </div>
    </div>
</div>

<div class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-5">Features</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-book fa-3x text-primary mb-3"></i>
                        <h4 class="card-title">Course Management</h4>
                        <p class="card-text">View and manage your courses, assignments, and grades all in one place.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-calendar-alt fa-3x text-success mb-3"></i>
                        <h4 class="card-title">Schedule</h4>
                        <p class="card-text">Access your class schedule, exam dates, and important academic events.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <i class="fas fa-chart-bar fa-3x text-warning mb-3"></i>
                        <h4 class="card-title">Progress Tracking</h4>
                        <p class="card-text">Monitor your academic progress with detailed reports and analytics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
