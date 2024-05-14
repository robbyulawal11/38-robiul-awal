@extends('layouts/app')

@section('content')
    <div>
        <h1 class="text-primary mb-4">Appointment</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Appointment</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
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
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
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
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Robi</td>
                            <td>male</td>
                            <td>Sport Massase</td>
                            <td>Kartika</td>
                            <td>Unit 2</td>
                            <td>098820892032</td>
                            <td>20 Mey 2024</td>
                            <td>Sesi 1</td>
                            <td>Angkee</td>
                            <td>Progress</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>Robi</td>
                            <td>male</td>
                            <td>Sport Massase</td>
                            <td>Kartika</td>
                            <td>Unit 1</td>
                            <td>098820892032</td>
                            <td>20 Mey 2024</td>
                            <td>Sesi 4</td>
                            <td>Angkee</td>
                            <td>Progress</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>Robi</td>
                            <td>male</td>
                            <td>Sport Massase</td>
                            <td>Kartika</td>
                            <td>Unit 1</td>
                            <td>098820892032</td>
                            <td>20 Mey 2024</td>
                            <td>Sesi 1</td>
                            <td>Angkee</td>
                            <td>Progress</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>Robi</td>
                            <td>male</td>
                            <td>Sport Massase</td>
                            <td>Kartika</td>
                            <td>Unit 1</td>
                            <td>098820892032</td>
                            <td>20 Mey 2024</td>
                            <td>Sesi 1</td>
                            <td>Angkee</td>
                            <td>Completed</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>Robi</td>
                            <td>male</td>
                            <td>Sport Massase</td>
                            <td>Kartika</td>
                            <td>Unit 1</td>
                            <td>098820892032</td>
                            <td>20 Mey 2024</td>
                            <td>Sesi 2</td>
                            <td>Angkee</td>
                            <td>Progress</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>Robi</td>
                            <td>male</td>
                            <td>Sport Massase</td>
                            <td>Kartika</td>
                            <td>Unit 1</td>
                            <td>098820892032</td>
                            <td>20 Mey 2024</td>
                            <td>Sesi 1</td>
                            <td>Angkee</td>
                            <td>Progress</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>Robi</td>
                            <td>male</td>
                            <td>Sport Massase</td>
                            <td>Kartika</td>
                            <td>Unit 1</td>
                            <td>098820892032</td>
                            <td>20 Mey 2024</td>
                            <td>Sesi 1</td>
                            <td>Angkee</td>
                            <td>Completed</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>Robi</td>
                            <td>male</td>
                            <td>Sport Massase</td>
                            <td>Kartika</td>
                            <td>Unit 2</td>
                            <td>098820892032</td>
                            <td>20 Mey 2024</td>
                            <td>Sesi 5</td>
                            <td>Angkee</td>
                            <td>Progress</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>Robi</td>
                            <td>male</td>
                            <td>Sport Massase</td>
                            <td>Kartika</td>
                            <td>Unit 1</td>
                            <td>098820892032</td>
                            <td>20 Mey 2024</td>
                            <td>Sesi 1</td>
                            <td>Angkee</td>
                            <td>Progress</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>Robi</td>
                            <td>male</td>
                            <td>Sport Massase</td>
                            <td>Kartika</td>
                            <td>Unit 1</td>
                            <td>098820892032</td>
                            <td>20 Mey 2024</td>
                            <td>Sesi 1</td>
                            <td>Angkee</td>
                            <td>Completed</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>Robi</td>
                            <td>male</td>
                            <td>Sport Massase</td>
                            <td>Kartika</td>
                            <td>Unit 1</td>
                            <td>098820892032</td>
                            <td>20 Mey 2024</td>
                            <td>Sesi 1</td>
                            <td>Angkee</td>
                            <td>Progress</td>
                            <td>120.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
