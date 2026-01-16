@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <!-- Sidebar -->
    <div class="col-md-3">
        <div class="sidebar p-3">
            <h4 class="mb-4"><i class="fas fa-user-graduate me-2"></i>Student Menu</h4>
            <a href="#">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
            <a href="#">
                <i class="fas fa-book me-2"></i> My Courses
            </a>
            <a href="#">
                <i class="fas fa-calendar me-2"></i> Schedule
            </a>
            <a href="#">
                <i class="fas fa-file-alt me-2"></i> Assignments
            </a>
            <a href="#">
                <i class="fas fa-chart-line me-2"></i> Grades
            </a>
            <a href="#">
                <i class="fas fa-university me-2"></i> University Info
            </a>
            <a href="{{ route('contact') }}">
                <i class="fas fa-question-circle me-2"></i> Help & Support
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="col-md-9 main-content">
        <h1 class="mb-4">Student Dashboard</h1>
        
        <!-- Stats Cards -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card stat-card">
                    <div class="card-body">
                        <h5 class="card-title">Current GPA</h5>
                        <h2 class="display-6">3.75</h2>
                        <p class="card-text">Out of 4.0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Courses</h5>
                        <h2 class="display-6">5</h2>
                        <p class="card-text">This Semester</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Assignments</h5>
                        <h2 class="display-6">3</h2>
                        <p class="card-text">Pending</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card bg-info">
                    <div class="card-body">
                        <h5 class="card-title">Attendance</h5>
                        <h2 class="display-6">95%</h2>
                        <p class="card-text">Overall</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Courses -->
        <div class="card">
            <div class="card-header">
                <h4><i class="fas fa-book me-2"></i>My Courses</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Instructor</th>
                            <th>Schedule</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CS101</td>
                            <td>Introduction to Programming</td>
                            <td>Dr. Smith</td>
                            <td>Mon, Wed 10:00 AM</td>
                            <td><span class="badge bg-success">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>MATH201</td>
                            <td>Calculus II</td>
                            <td>Prof. Johnson</td>
                            <td>Tue, Thu 2:00 PM</td>
                            <td><span class="badge bg-success">In Progress</span></td>
                        </tr>
                        <!-- Add more courses as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
