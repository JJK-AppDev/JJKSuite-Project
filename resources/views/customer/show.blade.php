@extends('template.master')
@section('title', 'Customer')
@section('content')
<!-- Icon Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>View Profile</h3>
            </div>
            <div class="card-body">
                <div class="row g-0 bg-light position-relative">
                    <div class="col-md-4 mb-md-0 p-md-4">
                        <img src="{{ $customer->user->getAvatar() }}" class="w-100" alt="...">
                    </div>
                    <div class="col-md-8 p-4 ps-md-0" style="font-size: 18px">
                        <p><i class="bi bi-person-circle"></i>&nbsp; <b>Name:</b> &nbsp; {{ $customer->name }}</p>
                        <p><i class="bi bi-envelope-at-fill"></i>&nbsp; <b>Email:</b> &nbsp; {{ $customer->user->email }}</p>
                        <p><i class="bi bi-geo-alt-fill"></i>&nbsp; <b>Address:</b> &nbsp; {{ $customer->address }}</p>
                        <p><i class="bi bi-balloon-heart-fill"></i>&nbsp; <b>Birth Date:</b> &nbsp; {{ $customer->birthdate }}</p>
                        <p><i class="bi bi-gender-ambiguous"></i>&nbsp; <b>Gender:</b> &nbsp; {{ $customer->gender }}</p>
                        <p><i class="bi bi-briefcase-fill"></i>&nbsp; <b>Job:</b> &nbsp; {{ $customer->job }}</p>
                        <p><i class="bi bi-person-fill-gear"></i>&nbsp; <b>Roles:</b> &nbsp; {{ $customer->user->role }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
