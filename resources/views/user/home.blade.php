@extends('layouts.app')

@section('content')
<div class="container-fluid" style="height: 100vh; background: linear-gradient(135deg, #1e1e2f, #2b2b3c);">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 p-0" style="background-color: #2f2f44; height: 100vh;">
            <div class="d-flex flex-column align-items-center p-4">
                <h4 class="text-white">User Dashboard</h4>
                <nav class="nav flex-column mt-4">
                    <a class="nav-link text-white" href="#" style="font-size: 16px; border-bottom: 1px solid #4e73df; color: white;">Dashboard</a>
                    <a class="nav-link text-white" href="#" style="font-size: 16px; border-bottom: 1px solid #4e73df; color: white;">Profile</a>
                    <a class="nav-link text-white" href="#" style="font-size: 16px; border-bottom: 1px solid #4e73df; color: white;">Settings</a>
                    <a class="nav-link text-white" href="#" style="font-size: 16px; border-bottom: 1px solid #4e73df; color: white;">My Orders</a>
                    <a class="nav-link text-white" href="#" style="font-size: 16px; border-bottom: 1px solid #4e73df; color: white;">Logout</a>
                </nav>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="col-md-9 col-lg-10 p-5">
            <!-- Dashboard Header -->
            <div class="card border-0 rounded-4 shadow-lg" style="background: rgba(30, 30, 48, 0.95); backdrop-filter: blur(10px); color: #f1f1f1;">
                <div class="card-header text-center text-white rounded-top-4" style="background-color: #4e73df;">
                    <h4>Welcome, {{ Auth::user()->name }}!</h4>
                </div>

                <!-- Dashboard Content -->
                <div class="card-body">
                    <!-- User Profile Section -->
                    <div class="mb-4">
                        <h5>Profile</h5>
                        <p>Manage your profile information and update your preferences.</p>
                        <button class="btn btn-primary" disabled>Go to Profile</button>
                    </div>

                    <!-- Recent Activity Section -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
