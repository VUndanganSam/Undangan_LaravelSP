@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">About Student Portal</h1>
    
    <div class="row mb-5">
        <div class="col-lg-6">
            <h2>Our Mission</h2>
            <p class="lead">To provide students with a comprehensive digital platform that enhances their academic experience through seamless access to educational resources, course management tools, and communication channels.</p>
        </div>
        <div class="col-lg-6">
            <img src="https://via.placeholder.com/500x300/2ecc71/ffffff?text=About+Us" 
                 alt="About Us" class="img-fluid rounded shadow">
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <i class="fas fa-rocket fa-3x text-primary mb-3"></i>
                    <h4>Vision</h4>
                    <p>To become the leading student portal platform that transforms how students interact with their educational institutions.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <i class="fas fa-handshake fa-3x text-success mb-3"></i>
                    <h4>Values</h4>
                    <p>Accessibility, Innovation, Security, and Student-Centric approach in everything we do.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 text-center">
                <div class="card-body">
                    <i class="fas fa-users fa-3x text-warning mb-3"></i>
                    <h4>Team</h4>
                    <p>Dedicated professionals committed to improving student life through technology.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
