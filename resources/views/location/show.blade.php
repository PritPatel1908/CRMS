@extends('layout.main')
@section('content')
<div class="content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
            <div>
                <h4 class="mb-0">Location Details</h4>
            </div>
            <div class="gap-2 d-flex align-items-center flex-wrap">
                <a href="{{ route('location.edit', $location->id) }}" class="btn btn-primary"><i class="ti ti-edit"></i> Edit</a>
                <a href="{{ route('location.index') }}" class="btn btn-secondary"><i class="ti ti-arrow-left"></i> Back to Locations</a>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- start row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="text-muted">Location ID</h5>
                                    <p>{{ $location->id }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="text-muted">Name</h5>
                                    <p>{{ $location->name }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="text-muted">Address</h5>
                                    <p>{{ $location->address ?: 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="text-muted">City</h5>
                                    <p>{{ $location->city ?: 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="text-muted">State</h5>
                                    <p>{{ $location->state ?: 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="text-muted">Country</h5>
                                    <p>{{ $location->country ?: 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="text-muted">Zip Code</h5>
                                    <p>{{ $location->zip_code ?: 'N/A' }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="text-muted">Created At</h5>
                                    <p>{{ $location->created_at->format('d M Y, h:i A') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
@endsection