@extends('template/app')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h1 class="text-primary mb-4">Appointment</h1>
        <a href="{{ route('appointment.create') }}" class="btn btn-primary mb-5">
            <i class="fa fa-book fa-lg"></i> Create Appointment</a>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Appointment</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th id="no">No</th>
                            <th id="name">Name</th>
                            <th id="gender">Gender</th>
                            <th id="service">Service</th>
                            <th id="therapist">Therapist Id</th>
                            <th id="location">Location</th>
                            <th id="phone">Phone</th>
                            <th id="date">Date</th>
                            <th id="time">Time</th>
                            <th id="complaint">Complaint</th>
                            <th id="status">Status</th>
                            <th id="price">Price</th>
                            <th id="price">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->service }}</td>
                                <td>{{ $item->therapist_id }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->event_date }}</td>
                                <td>{{ $item->start_time }}</td>
                                <td>{{ $item->complaint }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->price }}</td>
                                <td class="d-flex flex-column align-items-center gap-3">
                                    <a href="{{ route('appointment.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('appointment.destroy', $item->id) }}" method="post">
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
                            <th id="no">No</th>
                            <th id="name">Name</th>
                            <th id="gender">Gender</th>
                            <th id="service">Service</th>
                            <th id="therapist">Therapist</th>
                            <th id="location">Location</th>
                            <th id="phone">Phone</th>
                            <th id="date">Date</th>
                            <th id="time">Time</th>
                            <th id="complaint">Complaint</th>
                            <th id="status">Status</th>
                            <th id="price">Price</th>
                            <th id="price">Action</th>
                        </tr>
                    </tfoot>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
