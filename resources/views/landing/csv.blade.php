@extends('layouts.app2')

@section('content')
<!-- Vendor CSS Files -->
<link href="assets/css/form.css" rel="stylesheet">
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/jquery-3.6.4.min.js"></script>
<script src="assets/js/form.js"></script>
<style>
    ::-webkit-scrollbar {
        width: 0px;
    }
</style>
<main class="main-content">
    <section>
        <section class="multi">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-3 mt-3 mb-3" style="border-radius: 20px">
                            <h2 id="heading">PEMILIHAN PREFERENSI</h2>
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <p>Untuk melanjutkan ke langkah berikutnya, pastikan Anda telah melengkapi semua kolom yang diperlukan. Jika Anda tidak yakin tentang cara kerja algoritma, Anda dapat mengunjungi halaman "Cara Kerja" untuk panduan komprehensif.

                                         <a style="text-decoration: none; color: #fb6340;" href="/how-it-works">Cara kerja</a> ini memberikan perincian algoritma langkah demi langkah, sehingga Anda dapat lebih memahami cara kerjanya. Kami percaya bahwa transparansi adalah kuncinya, dan kami ingin memastikan bahwa Anda memiliki semua informasi yang Anda perlukan untuk membuat keputusan yang tepat.

                                        {{-- Thank you for choosing our platform, and we hope you find our service helpful and user-friendly.</p> --}}
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('cases.csvStore') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="csv_file">Upload CSV File:</label>
                                        <input type="file" class="form-control-file" id="csv_file" name="csv_file">
                                    </div>
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    @endsection

