@extends('template/app')
@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h1 class="text-primary mb-4">User</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th id="no">No</th>
                            <th id="ID">ID</th>
                            <th id="name">Name</th>
                            <th id="email">Email</th>
                            <th id="role">Role</th>
                            <th id="position">Position</th>
                            <th id="location">Location</th>
                            <th id="age">Age</th>
                            <th id="phone">Phone</th>
                            <th id="salary">Salary</th>
                            <th id="action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role }}</td>
                                <td>{{ $item->position }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->age }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->salary }}</td>
                                <td class="d-flex flex-column align-items-center gap-3">
                                    <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('user.destroy', $item->id) }}" method="post">
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
                            <th id="ID">ID</th>
                            <th id="name">Name</th>
                            <th id="email">Email</th>
                            <th id="role">Role</th>
                            <th id="position">Position</th>
                            <th id="location">Location</th>
                            <th id="age">Age</th>
                            <th id="phone">Phone</th>
                            <th id="salary">Salary</th>
                            <th id="action">Action</th>
                        </tr>
                    </tfoot>
                </table>
                <div class="d-flex flex-row justify-content-end">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
