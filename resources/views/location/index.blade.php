@extends('layout.main')
@section('content')
<div class="content">
    <div class="container-fluid">
        <!-- Success Message -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <!-- Page Header -->
        <div class="d-flex align-items-center justify-content-between gap-2 mb-4 flex-wrap">
            <div>
                <h4 class="mb-0">Locations</h4>
            </div>
            <div class="gap-2 d-flex align-items-center flex-wrap">
                <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add">
                    <i class="ti ti-plus"></i> Add Location
                </button>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- start row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped datatable">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Country</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($locations as $location)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td>{{ $location->id }}</td>
                                        <td>{{ $location->name }}</td>
                                        <td>{{ $location->address }}</td>
                                        <td>{{ $location->city }}</td>
                                        <td>{{ $location->state }}</td>
                                        <td>{{ $location->country }}</td>
                                        <td>{{ $location->created_at->format('d M Y, h:i A') }}</td>
                                        <td>
                                            <div class="dropdown table-action">
                                                <a href="#" class="action-icon btn btn-xs shadow btn-icon btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" data-location-id="{{ $location->id }}">
                                                        <i class="ti ti-edit text-blue me-1"></i>Edit
                                                    </a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_location" data-location-id="{{ $location->id }}">
                                                        <i class="ti ti-trash text-blue me-1"></i>Delete
                                                    </a>
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#location_detail" data-location-id="{{ $location->id }}">
                                                        <i class="ti ti-eye text-blue me-1"></i>View
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No locations found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>

<!-- Start Add Location -->
<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
        <h5 class="fw-semibold">Add Location</h5>
        <button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ti ti-x"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('location.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Location Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" name="state">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" name="country">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Zip Code</label>
                                <input type="text" class="form-control" name="zip_code">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <button type="button" data-bs-dismiss="offcanvas" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Create Location</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Add Location -->

<!-- Start Edit Location -->
<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
        <h5 class="fw-semibold">Edit Location</h5>
        <button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ti ti-x"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="card">
            <div class="card-body">
                <form id="edit-location-form" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Location Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="edit-name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="edit-address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" name="city" id="edit-city">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" name="state" id="edit-state">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" name="country" id="edit-country">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Zip Code</label>
                                <input type="text" class="form-control" name="zip_code" id="edit-zip_code">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <button type="button" data-bs-dismiss="offcanvas" class="btn btn-sm btn-light me-2">Cancel</button>
                        <button type="submit" class="btn btn-sm btn-primary">Update Location</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Edit Location -->

<!-- Delete Location Modal -->
<div class="modal fade" id="delete_location" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Location</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this location?</p>
                <p>This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="delete-location-form" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Location Detail Modal -->
<div class="modal fade" id="location_detail" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Location Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Name:</label>
                        <p id="detail-name"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Address:</label>
                        <p id="detail-address"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">City:</label>
                        <p id="detail-city"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">State:</label>
                        <p id="detail-state"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Country:</label>
                        <p id="detail-country"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Zip Code:</label>
                        <p id="detail-zip_code"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="fw-bold">Created At:</label>
                        <p id="detail-created_at"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        // Handle edit button click
        $('#offcanvas_edit').on('show.bs.offcanvas', function (event) {
            var button = $(event.relatedTarget);
            var locationId = button.data('location-id');
            var form = $('#edit-location-form');

            // Set the form action URL
            form.attr('action', '/location/' + locationId);

            // Fetch location data via AJAX
            $.ajax({
                url: '/location/' + locationId + '/edit',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#edit-name').val(data.name);
                    $('#edit-address').val(data.address);
                    $('#edit-city').val(data.city);
                    $('#edit-state').val(data.state);
                    $('#edit-country').val(data.country);
                    $('#edit-zip_code').val(data.zip_code);
                },
                error: function(xhr) {
                    console.error('Error fetching location data');
                }
            });
        });

        // Handle delete button click
        $('#delete_location').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var locationId = button.data('location-id');
            var form = $('#delete-location-form');

            // Set the form action URL
            form.attr('action', '/location/' + locationId);
        });

        // Handle view button click
        $('#location_detail').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var locationId = button.data('location-id');

            // Fetch location data via AJAX
            $.ajax({
                url: '/location/' + locationId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#detail-name').text(data.name);
                    $('#detail-address').text(data.address || 'N/A');
                    $('#detail-city').text(data.city || 'N/A');
                    $('#detail-state').text(data.state || 'N/A');
                    $('#detail-country').text(data.country || 'N/A');
                    $('#detail-zip_code').text(data.zip_code || 'N/A');
                    $('#detail-created_at').text(data.created_at);
                },
                error: function(xhr) {
                    console.error('Error fetching location data');
                }
            });
        });
    });
</script>
@endpush

@endsection
