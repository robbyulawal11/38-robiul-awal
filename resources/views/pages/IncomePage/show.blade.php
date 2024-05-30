@extends('template/app')

@section('content')
    <div>
        <h1 class="text-primary">Income</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Income</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th id="no">No</th>
                            <th id="date">Date</th>
                            <th id="time">Time</th>
                            <th id="service">Service</th>
                            <th id="therapist">Therapist</th>
                            <th id="status">Status</th>
                            <th id="price">Price</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th id=""></th>
                            <th id=""></th>
                            <th id=""></th>
                            <th id=""></th>
                            <th id=""></th>
                            <th id="total">Total</th>
                            <th id="">{{ $totalIncome }}</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->event_date }}</td>
                                <td>{{ $item->start_time }}</td>
                                <td>{{ $item->service }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex flex-row justify-content-end">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
