@extends('layouts.adminapp')

@section('title', 'Dashboard')

@section('content')
    <h2 class="mb-4">Dashboard</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text">Manage registered users and permissions.</p>
                    <a href="#" class="btn btn-primary btn-sm">View Users</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Reports</h5>
                    <p class="card-text">Generate reports on user activity and data.</p>
                    <a href="#" class="btn btn-primary btn-sm">View Reports</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Settings</h5>
                    <p class="card-text">Adjust system configurations and preferences.</p>
                    <a href="#" class="btn btn-primary btn-sm">Open Settings</a>
                </div>
            </div>
        </div>
    </div>
@endsection
