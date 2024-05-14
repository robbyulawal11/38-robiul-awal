@extends('layouts/app')

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
                            <th id="date">Date</th>
                            <th id="time">Time</th>
                            <th id="therapist">Therapist</th>
                            <th id="service">Service</th>
                            <th id="price">Price</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th id=""></th>
                            <th id=""></th>
                            <th id=""></th>
                            <th id="total">Total</th>
                            <th id="">2.300.000</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>12-05-2024</td>
                            <td>09.00</td>
                            <td>Katika Ramadhani</td>
                            <td>Sport Massase</td>
                            <td>200.000</td>
                        </tr>
                        <tr>
                            <td>12-05-2024</td>
                            <td>12.00</td>
                            <td>Katika Ramadhani</td>
                            <td>Sport Injury</td>
                            <td>120.000</td>
                        </tr>
                        <tr>
                            <td>12-05-2024</td>
                            <td>15.00</td>
                            <td>Ratih Kumalasari</td>
                            <td>Sport Massase</td>
                            <td>200.000</td>
                        </tr>

                        <tr>
                            <td>12-05-2024</td>
                            <td>15.00</td>
                            <td>Katika Ramadhani</td>
                            <td>Sport Massase</td>
                            <td>200.000</td>
                        </tr>
                        <tr>
                            <td>12-05-2024</td>
                            <td>15.00</td>
                            <td>Reka sanjani</td>
                            <td>Bekam</td>
                            <td>200.000</td>
                        </tr>

                        <tr>
                            <td>12-05-2024</td>
                            <td>15.00</td>
                            <td>Katika Ramadhani</td>
                            <td>Sport Massase</td>
                            <td>200.000</td>
                        </tr>
                        <tr>
                            <td>12-05-2024</td>
                            <td>15.00</td>
                            <td>Katika Ramadhani</td>
                            <td>Sport Massase</td>
                            <td>200.000</td>
                        </tr>
                        <tr>
                            <td>12-05-2024</td>
                            <td>15.00</td>
                            <td>Ratih Kumalasari</td>
                            <td>Sport Massase</td>
                            <td>200.000</td>
                        </tr>
                        <tr>
                            <td>12-05-2024</td>
                            <td>15.00</td>
                            <td>Reka sanjani</td>
                            <td>Bekam</td>
                            <td>200.000</td>
                        </tr>
                        <tr>
                            <td>12-05-2024</td>
                            <td>15.00</td>
                            <td>Reka sanjani</td>
                            <td>Sport Massase</td>
                            <td>200.000</td>
                        </tr>
                        <tr>
                            <td>12-05-2024</td>
                            <td>15.00</td>
                            <td>Katika Ramadhani</td>
                            <td>Sport Injury</td>
                            <td>120.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
