<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Student Portal'))</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Styles -->
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-bg: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .main-content {
            min-height: calc(100vh - 160px);
            padding-top: 20px;
        }
        
        .sidebar {
            background: linear-gradient(180deg, var(--secondary-color) 0%, #1a252f 100%);
            min-height: 100vh;
        }
        
        .card-hover {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .action-buttons {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Navbar Partial -->
    @include('partials.navbar')
    
    <!-- Main Content -->
    <main>
        <!-- Page Header Section -->
        @hasSection('page-header')
            <div class="bg-primary text-white py-4 mb-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            @yield('page-header')
                        </div>
                        <div class="col-md-4 text-md-end">
                            @hasSection('header-actions')
                                @yield('header-actions')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
        
        <!-- Content Section -->
        <div class="container main-content">
            <!-- Flash Messages -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
            
            <!-- Main Content -->
            @yield('content')
        </div>
    </main>
    
    <!-- Footer Partial -->
    @include('partials.footer')
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Scripts -->
    <script>
        // Auto-dismiss alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(function(alert) {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                });
            }, 5000);
        });
    </script>
    
    @stack('scripts')
</body>
</html>