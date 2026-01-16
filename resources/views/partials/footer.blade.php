<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5><i class="fas fa-graduation-cap me-2"></i>Student Portal</h5>
                <p>Your comprehensive solution for academic management and student success.</p>
                <div class="social-links">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>
            
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="{{ route('dashboard') }}" class="text-white text-decoration-none">Dashboard</a></li>
                    <li><a href="{{ route('about') }}" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact</a></li>
                </ul>
            </div>
            
            <div class="col-md-4">
                <h5>Contact Info</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt me-2"></i> 123 University Avenue</li>
                    <li><i class="fas fa-phone me-2"></i> (123) 456-7890</li>
                    <li><i class="fas fa-envelope me-2"></i> info@studentportal.edu</li>
                </ul>
            </div>
        </div>
        
        <hr class="bg-light">
        
        <div class="text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Student Portal. All rights reserved.</p>
        </div>
    </div>
</footer>
