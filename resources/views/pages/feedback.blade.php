@extends('template/app')

@section('content')
    <div>
        <h1 class="text-primary">Feedback</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Feedback</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th id="name">Name</th>
                            <th id="phone">Phone</th>
                            <th id="service">Service</th>
                            <th id="therapist">Therapist</th>
                            <th id="testimony">Testimony</th>
                            <th id="star">Star</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th id="name">Name</th>
                            <th id="phone">Phone</th>
                            <th id="service">Service</th>
                            <th id="therapist">Therapist</th>
                            <th id="testimony">Testimony</th>
                            <th id="star">Star</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Abdul Kazar</td>
                            <td>04932034208</td>
                            <td>Bekam</td>
                            <td>Ratih Bayangkara</td>
                            <td>Saya merasa didengar dan dipahami oleh terapis saya. Mereka menunjukkan empati yang tulus
                                terhadap perasaan dan pengalaman saya, menciptakan lingkungan yang aman dan nyaman untuk
                                berbagi.</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Abdul Kazar</td>
                            <td>04932034208</td>
                            <td>Bekam</td>
                            <td>Ratih Bayangkara</td>
                            <td>Selama sesi terapi, saya merasa terapis kurang menunjukkan empati dan pemahaman terhadap
                                masalah yang saya hadapi. Saya berharap untuk mendapatkan lingkungan yang mendukung dan
                                berempati, namun yang saya dapatkan justru sebaliknya./td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Abdul Kazar</td>
                            <td>04932034208</td>
                            <td>Bekam</td>
                            <td>Ratih Bayangkara</td>
                            <td>Salah satu masalah utama yang saya hadapi adalah waktu tunggu yang panjang sebelum saya bisa
                                mendapatkan perawatan. Terkadang, jadwal mereka sangat padat, dan saya harus menunggu
                                berjam-jam sebelum dipanggil. Ini bisa menjadi sangat menyulitkan bagi mereka yang memiliki
                                jadwal yang sibuk.</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Abdul Kazar</td>
                            <td>04932034208</td>
                            <td>Bekam</td>
                            <td>Ratih Bayangkara</td>
                            <td>Penanganan profesional, ramah, memberikan edukasi jg kepada pasien.</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Abdul Kazar</td>
                            <td>04932034208</td>
                            <td>Bekam</td>
                            <td>Ratih Bayangkara</td>
                            <td>Saya merasa didengar dan dipahami oleh terapis saya. Mereka menunjukkan empati yang tulus
                                terhadap perasaan dan pengalaman saya, menciptakan lingkungan yang aman dan nyaman untuk
                                berbagi.</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Abdul Kazar</td>
                            <td>04932034208</td>
                            <td>Bekam</td>
                            <td>Ratih Bayangkara</td>
                            <td>Terapis yang saya temui sangat terampil dan berpengalaman dalam bidangnya. Mereka memiliki
                                pengetahuan yang mendalam tentang masalah yang saya hadapi dan memberikan pandangan yang
                                sangat berharga serta solusi yang efektif.</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Abdul Kazar</td>
                            <td>04932034208</td>
                            <td>Bekam</td>
                            <td>Ratih Bayangkara</td>
                            <td>Selama sesi terapi, saya merasa terapis kurang menunjukkan empati dan pemahaman terhadap
                                masalah yang saya hadapi. Saya berharap untuk mendapatkan lingkungan yang mendukung dan
                                berempati, namun yang saya dapatkan justru sebaliknya.</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Abdul Kazar</td>
                            <td>04932034208</td>
                            <td>Bekam</td>
                            <td>Ratih Bayangkara</td>
                            <td>Salah satu masalah utama yang saya hadapi adalah waktu tunggu yang panjang sebelum saya bisa
                                mendapatkan perawatan. Terkadang, jadwal mereka sangat padat, dan saya harus menunggu
                                berjam-jam sebelum dipanggil. Ini bisa menjadi sangat menyulitkan bagi mereka yang memiliki
                                jadwal yang sibuk.</td>
                            <td>5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
