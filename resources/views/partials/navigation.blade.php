@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-5">Contact Us</h1>
    
    <div class="row">
        <div class="col-lg-6 mb-5">
            <h3 class="mb-4">Get in Touch</h3>
            
            <div class="mb-4">
                <h5><i class="fas fa-map-marker-alt text-primary me-2"></i> Address</h5>
                <p class="ms-4">123 University Avenue<br>Academic City, AC 12345</p>
            </div>
            
            <div class="mb-4">
                <h5><i class="fas fa-phone text-primary me-2"></i> Phone</h5>
                <p class="ms-4">(123) 456-7890</p>
            </div>
            
            <div class="mb-4">
                <h5><i class="fas fa-envelope text-primary me-2"></i> Email</h5>
                <p class="ms-4">support@studentportal.edu</p>
            </div>
            
            <div class="mb-4">
                <h5><i class="fas fa-clock text-primary me-2"></i> Office Hours</h5>
                <p class="ms-4">Monday - Friday: 9:00 AM - 5:00 PM<br>Saturday: 10:00 AM - 2:00 PM</p>
            </div>
        </div>
        
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h3 class="mb-4">Send us a Message</h3>
                    
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <form action="{{ url('/contact') }}" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-paper-plane me-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
