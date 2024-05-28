@extends('template/app')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h1 class="text-primary mb-4">Feedback</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Feedback</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th id="nomor">No</th>
                            <th id="name">Name</th>
                            <th id="phone">Phone</th>
                            <th id="service">Service</th>
                            <th id="therapist">Therapist ID</th>
                            <th id="testimony">Testimony</th>
                            <th id="star">Star</th>
                            <th id="action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->service }}</td>
                                <td>{{ $item->therapist_id }}</td>
                                <td>{{ $item->testimony }}</td>
                                <td>{{ $item->star }}</td>
                                <td>
                                    <form action="{{ route('feedback.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th id="nomor">No</th>
                            <th id="name">Name</th>
                            <th id="phone">Phone</th>
                            <th id="service">Service</th>
                            <th id="therapist">Therapist ID</th>
                            <th id="testimony">Testimony</th>
                            <th id="star">Star</th>
                            <th id="action">Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
