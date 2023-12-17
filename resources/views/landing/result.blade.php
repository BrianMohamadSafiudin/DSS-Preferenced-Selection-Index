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
<main class="main-content">
    <section>
        <section class="multi">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-3 mt-3 mb-3" style="border-radius: 20px">
                            <h2 id="heading">Hasil Sistem Pendukung Keputusan Preferensi</h2>
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <p>Halaman ini menampilkan Preference Selection Index (PSI), Semakin tinggi nilai PSI, semakin cocok pilihan yang di rekomendasikan. Jika Anda ragu tentang bagaimana algoritma ini bekerja, silakan kunjungi halaman <a style="text-decoration: none; color: #fb6340;" href="/how-it-works">bagaimana cara kerjanya</a> untuk informasi lebih lanjut.</p>
                                </div>
                            </div>
                            <div id="msform">
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="fs-title text-center">Tabel Nilai Alternatif yang Cocok</h2>
                                            </div>
                                        </div>
                                        <div class="row row justify-content-center">
                                            <div class="col-10">
                                                <p class="text-center">Tabel ini akan menampilkan skor akhir untuk setiap alternatif yang diuji menggunakan kriteria yang ditentukan oleh pengguna, menunjukkan seberapa baik setiap alternatif cocok dengan kriteria tersebut.</p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered text-center">
                                                        <thead class="">
                                                            <tr>
                                                                <th style="width: 5%"> </th>
                                                                <th >C1</th>
                                                                <th >C2</th>
                                                                <th >C3</th>
                                                                <th >C4</th>
                                                                <th >C5</th>
                                                                <th >C6</th>
                                                                <th >C7</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table-body">
                                                        </tbody>
                                                    </table>
                                                    <script>
                                                        const rowCount = 16;
                                                        const colCount = 7;
                                                        const tableBody = document.querySelector('#table-body');
                                                        const cases = @json($cases);
                                                        console.log(cases)

                                                        for (let i = 0; i < rowCount; i++) {
                                                            const tr = document.createElement('tr');
                                                            const td1 = document.createElement('td');
                                                            td1.className = 'text-left';
                                                            td1.style.textAlign = 'left';
                                                            td1.style.paddingTop = '18px';
                                                            td1.style.fontWeight = '500'
                                                            const p = document.createElement('p');
                                                            p.style.fontWeight = '500'
                                                            p.textContent = cases[0]['alternative'+(i+1)];
                                                            td1.appendChild(p);
                                                            tr.appendChild(td1);
                                                            for (let j = 0; j < colCount; j++) {
                                                                const td = document.createElement('td');
                                                                const p = document.createElement('p');
                                                                p.textContent = cases[0]['a'+(i+1)+'c'+(j+1)];
                                                                p.style.fontWeight = '500'
                                                                td.appendChild(p);
                                                                tr.appendChild(td);
                                                            }
                                                            tableBody.appendChild(tr);
                                                        }
                                                    </script>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="fs-title text-center mt-3">Normalisasi(<span style="font-family: 'Times New Roman';">𝑁</span>)</h2>
                                                    </div>
                                                </div>
                                                <div class="row row justify-content-center">
                                                    <div class="col-12">
                                                        <p class="text-center">Dalam metode PSI dalam DSS, normalisasi digunakan untuk mengubah nilai dari setiap kriteria menjadi nilai relatif dari rentang nilai yang sama, agar dapat dibandingkan secara objektif. Sebelum melakukan normalisasi menggunakan metode PSI, langkah pertama adalah menemukan nilai maksimum (max) dan minimum (min) dari setiap kriteria untuk semua alternatif dalam DSS.</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="fs-title text-center mt-2">Max & Min</h2>
                                                    </div>
                                                </div>
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th >C1</th>
                                                            <th >C2</th>
                                                            <th >C3</th>
                                                            <th >C4</th>
                                                            <th >C5</th>
                                                            <th >C6</th>
                                                            <th >C7</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($maxmin as $maxmin)
                                                        <tr>
                                                            <td>Max</td>
                                                            <td>{{ $maxmin -> max1 }}</td>
                                                            <td>{{ $maxmin -> max2 }}</td>
                                                            <td>{{ $maxmin -> max3 }}</td>
                                                            <td>{{ $maxmin -> max4 }}</td>
                                                            <td>{{ $maxmin -> max5 }}</td>
                                                            <td>{{ $maxmin -> max6 }}</td>
                                                            <td>{{ $maxmin -> max7 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Min</td>
                                                            <td>{{ $maxmin -> min1 }}</td>
                                                            <td>{{ $maxmin -> min2 }}</td>
                                                            <td>{{ $maxmin -> min3 }}</td>
                                                            <td>{{ $maxmin -> min4 }}</td>
                                                            <td>{{ $maxmin -> min5 }}</td>
                                                            <td>{{ $maxmin -> min6 }}</td>
                                                            <td>{{ $maxmin -> min7 }}</td>
                                                        </tr>
                                                        @endforeach
                                                        <tr>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title text-center mt-2">Normalisasi</h2>
                                        </div>
                                    </div>
                                    <div class="row row justify-content-center">
                                        <div class="col-10">
                                            <p class="text-center">Kriteria yang memiliki nilai yang meningkat dan berdampak positif pada pengguna dapat dianggap sebagai benefit. Di sisi lain, kriteria yang memiliki nilai yang meningkat dan berdampak negatif pada pengguna dapat dianggap sebagai cost.</p>
                                        </div>
                                    </div>
                                    <div style="font-size: 13px; color: grey;">
                                        <div style="display: inline-block; width: 40%;">
                                            <p>Benefit</p>
                                            <p>𝑁ij = 𝑋ij / 𝑋jmax </p>
                                        </div>
                                        <div style="display: inline-block; width: 40%;">
                                            <p>Cost</p>
                                            <p>𝑁ij = 𝑋jmin / 𝑋ij </p>
                                        </div>
                                    </div>
                                    <div class="row row justify-content-center">
                                        <div class="col-10">
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-center">
                                                    <thead class="">
                                                        <tr>
                                                            <th >C1</th>
                                                            <th >C2</th>
                                                            <th >C3</th>
                                                            <th >C4</th>
                                                            <th >C5</th>
                                                            <th >C6</th>
                                                            <th >C7</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table-body1">
                                                    </tbody>
                                                </table>
                                                <script>
                                                    const tableBody2 = document.querySelector('#table-body1');
                                                    const normalisasi = @json($normalisasi);

                                                    for (let i = 0; i < 16; i++) {
                                                        const tr = document.createElement('tr');
                                                        for (let j = 0; j < 7; j++) {
                                                            const td = document.createElement('td');
                                                            const p = document.createElement('p');
                                                            p.textContent = normalisasi[0]['na'+(i+1)+'c'+(j+1)];
                                                            p.style.fontWeight = '500';
                                                            td.appendChild(p);
                                                            tr.appendChild(td);
                                                        }
                                                        tableBody2.appendChild(tr);
                                                    }
                                                </script>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <h2 class="fs-title text-center mt-2">Cara Menghitung Normalisasi</h2>
                                                </div>
                                            </div>
                                            <div class="row row justify-content-center">
                                                <div class="col-12">
                                                    <p class="text-center">Berikut adalah contoh perhitungan keuntungan dan biaya untuk Kriteria 1 dan Kriteria 7, di mana Kriteria 1 adalah keuntungan dan Kriteria 7 adalah biaya. Tabel berikut menunjukkan langkah-langkah perhitungan :</p>
                                                </div>
                                            </div>
                                            <div style="font-size: 13px; color: grey;">
                                                <div style="display: inline-block; width: 49%;">
                                                    <p>Benefit</p>
                                                    <p>𝑁ij = 𝑋ij / 𝑋jmax </p>
                                                </div>
                                                <div style="display: inline-block; width: 49%;">
                                                    <p>Cost</p>
                                                    <p>𝑁ij = 𝑋jmin / 𝑋ij </p>
                                                </div>
                                            </div>
                                            <table class="table table-bordered text-center">
                                                <thead class="">
                                                    <tr>
                                                        <th>Perhitungan C1 (Benefit)</th>
                                                        <th>Perhitungan C7 (Cost)</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="table-body2">
                                                    @foreach ($join as $join)
                                                    <tr>
                                                        <td>
                                                            <p>𝑁11 = {{ $join -> a1c1 }} / {{ $join -> max1 }} = {{ $join -> na1c1 }}</p>
                                                        </td>
                                                        <td>
                                                            <p>𝑁17 = {{ $join -> min7 }} /  {{ $join -> a1c7 }} = {{ $join -> na1c7 }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>𝑁21 = {{ $join -> a2c1 }} / {{ $join -> max1 }} = {{ $join -> na2c1 }}</p>
                                                        </td>
                                                        <td>
                                                            <p>𝑁27 = {{ $join -> min7 }} /  {{ $join -> a2c7 }} = {{ $join -> na2c7 }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>𝑁31 = {{ $join -> a3c1 }} / {{ $join -> max1 }} = {{ $join -> na3c1 }}</p>
                                                        </td>
                                                        <td>
                                                            <p>𝑁37 = {{ $join -> min7 }} /  {{ $join -> a3c7 }} = {{ $join -> na3c7 }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>𝑁41 = {{ $join -> a4c1 }} / {{ $join -> max1 }} = {{ $join -> na4c1 }}</p>
                                                        </td>
                                                        <td>
                                                            <p>𝑁47 = {{ $join -> min7 }} /  {{ $join -> a4c7 }} = {{ $join -> na4c7 }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>𝑁51 = {{ $join -> a5c1 }} / {{ $join -> max1 }} = {{ $join -> na5c1 }}</p>
                                                        </td>
                                                        <td>
                                                            <p>𝑁57 = {{ $join -> min7 }} /  {{ $join -> a5c7 }} = {{ $join -> na5c7 }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr><td></td></tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title text-center mt-3">Menghitung Mean / Rata-Rata</h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <p class="text-center">Untuk menghitung rata-rata untuk setiap kriteria di semua alternatif, Anda perlu pertama-tama menghitung jumlah dari nilai-nilai yang dinormalisasi untuk setiap kriteria di semua alternatif. Kemudian, bagi jumlah nilai yang dinormalisasi untuk setiap kriteria dengan total jumlah alternatif. Hasil dari pembagian ini adalah nilai rata-rata untuk setiap kriteria di semua alternatif.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title text-center mt-2">Total Per Kriteria 1</h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <th >C1</th>
                                                        <th >C2</th>
                                                        <th >C3</th>
                                                        <th >C4</th>
                                                        <th >C5</th>
                                                        <th >C6</th>
                                                        <th >C7</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($sum1 as $sum1)
                                                    <tr>
                                                        <td>{{ $sum1 -> m1 }}</td>
                                                        <td>{{ $sum1 -> m2 }}</td>
                                                        <td>{{ $sum1 -> m3 }}</td>
                                                        <td>{{ $sum1 -> m4 }}</td>
                                                        <td>{{ $sum1 -> m5 }}</td>
                                                        <td>{{ $sum1 -> m6 }}</td>
                                                        <td>{{ $sum1 -> m7 }}</td>
                                                    </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title text-center mt-3">Perhitungan</h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <th >C1</th>
                                                        <th >C2</th>
                                                        <th >C3</th>
                                                        <th >C4</th>
                                                        <th >C5</th>
                                                        <th >C6</th>
                                                        <th >C7</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($mean as $mean)
                                                    <tr>
                                                        <td>{{ $mean -> mean1 }}</td>
                                                        <td>{{ $mean -> mean2 }}</td>
                                                        <td>{{ $mean -> mean3 }}</td>
                                                        <td>{{ $mean -> mean4 }}</td>
                                                        <td>{{ $mean -> mean5 }}</td>
                                                        <td>{{ $mean -> mean6 }}</td>
                                                        <td>{{ $mean -> mean7 }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row justify-content-center">
                                                <div class="col-12 mb-2">
                                                    <p class="text-center">Rumus untuk menghitung rata-rata Indeks Pemilihan Preferensi (PSI) setelah normalisasi adalah dengan menjumlahkan nilai PSI dari setiap kriteria, kemudian membaginya dengan total jumlah alternatif.</p>
                                                </div>
                                            </div>
                                            <div style="font-size: 13px; color: grey;">
                                                <div style="display: inline-block; width: 49%;">
                                                    <p>𝑁 = {{ $mean->m1 }} / 15 = {{ $mean->mean1 }}</p>
                                                    <p>𝑁 = {{ $mean->m2 }} / 15 = {{ $mean->mean2 }}</p>
                                                    <p>𝑁 = {{ $mean->m3 }} / 15 = {{ $mean->mean3 }}</p>
                                                    <p>𝑁 = {{ $mean->m4 }} / 15 = {{ $mean->mean4 }}</p>
                                                </div>
                                                <div style="display: inline-block; width: 49%;">
                                                    <p>𝑁 = {{ $mean->m5 }} / 15 = {{ $mean->mean5 }}</p>
                                                    <p>𝑁 = {{ $mean->m6 }} / 15 = {{ $mean->mean6 }}</p>
                                                    <p>𝑁 = {{ $mean->m7 }} / 15 = {{ $mean->mean7 }}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mt-1">
                                        <div class="col-10">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title text-center mt-3">Menentukan Nilai Variasi Preferensi (∅)</h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <p class="text-center">Menghitung nilai variasi preferensi dapat dilakukan dengan menjumlahkan perkalian setiap elemen dalam baris matriks yang dinormalisasi dengan bobot preferensi yang sesuai dalam kolom matriks.</p>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-center">
                                                    <thead class="">
                                                        <tr>
                                                            <th >C1</th>
                                                            <th >C2</th>
                                                            <th >C3</th>
                                                            <th >C4</th>
                                                            <th >C5</th>
                                                            <th >C6</th>
                                                            <th >C7</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table-body3">
                                                    </tbody>
                                                </table>
                                                <script>
                                                    const tableBody3 = document.querySelector('#table-body3');
                                                    const determine = @json($determine);
                                                    console.log(determine)

                                                    for (let i = 0; i < 16; i++) {
                                                        const tr = document.createElement('tr');
                                                        for (let j = 0; j < 7; j++) {
                                                            const td = document.createElement('td');
                                                            const p = document.createElement('p');
                                                            p.textContent = determine[0]['∅a'+(i+1)+'c'+(j+1)];
                                                            p.style.fontWeight = '500';
                                                            td.appendChild(p);
                                                            tr.appendChild(td);
                                                        }
                                                        tableBody3.appendChild(tr);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <p>∅𝑗 = ∑ [(𝑁𝑖𝑗 / 𝑁𝑗) - (1/𝑁)]^2</p>
                                    @foreach ($determinejoin as $item)
                                    <div style="font-size: 13px; color: grey;">
                                        <div style="display: inline-block; width: 49%;">
                                            <p>∅11 = ({{ $item -> na1c1 }} - {{ $item -> mean1 }})^2  = {{ $item -> ∅a1c1 }}</p>
                                            <p>∅21 = ({{ $item -> na2c1 }} - {{ $item -> mean1 }})^2  = {{ $item -> ∅a2c1 }}</p>
                                            <p>∅31 = ({{ $item -> na3c1 }} - {{ $item -> mean1 }})^2  = {{ $item -> ∅a3c1 }}</p>
                                            <p>∅41 = ({{ $item -> na4c1 }} - {{ $item -> mean1 }})^2  = {{ $item -> ∅a4c1 }}</p>
                                        </div>
                                        <div style="display: inline-block; width: 49%;">
                                            <p>∅51 = ({{ $item -> na5c1 }} - {{ $item -> mean1 }})^2  = {{ $item -> ∅a5c1 }}</p>
                                            <p>∅61 = ({{ $item -> na6c1 }} - {{ $item -> mean1 }})^2  = {{ $item -> ∅a6c1 }}</p>
                                            <p>∅71 = ({{ $item -> na7c1 }} - {{ $item -> mean1 }})^2  = {{ $item -> ∅a7c1 }}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="row justify-content-center mt-1">
                                        <div class="col-10">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title text-center mt-3">Menentukan Nilai dalam Preferensi(𝛺)</h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <p class="text-center">Jumlahkan setiap kolom dalam matriks Ω𝑗 dikurangi 1 sesuai dengan jumlah kolom yang ada. Setelah itu, jumlahkan hasil perhitungan di setiap kolom matriks Ω𝑗.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title text-center mt-2">Total Per Kriteria 2</h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <th >C1</th>
                                                        <th >C2</th>
                                                        <th >C3</th>
                                                        <th >C4</th>
                                                        <th >C5</th>
                                                        <th >C6</th>
                                                        <th >C7</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($sum2 as $sum2)
                                                    <tr>
                                                        <td>{{ $sum2 -> ∅1 }}</td>
                                                        <td>{{ $sum2 -> ∅2 }}</td>
                                                        <td>{{ $sum2 -> ∅3 }}</td>
                                                        <td>{{ $sum2 -> ∅4 }}</td>
                                                        <td>{{ $sum2 -> ∅5 }}</td>
                                                        <td>{{ $sum2 -> ∅6 }}</td>
                                                        <td>{{ $sum2 -> ∅7 }}</td>
                                                    </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <h2 class="fs-title text-center mt-2">Perhitungan</h2>
                                        </div>
                                        <div class="col-10">
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                    <tr>
                                                        <th >C1</th>
                                                        <th >C2</th>
                                                        <th >C3</th>
                                                        <th >C4</th>
                                                        <th >C5</th>
                                                        <th >C6</th>
                                                        <th >C7</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($spec as $spec)
                                                    <tr>
                                                        <td>{{ $spec -> spec1 }}</td>
                                                        <td>{{ $spec -> spec2 }}</td>
                                                        <td>{{ $spec -> spec3 }}</td>
                                                        <td>{{ $spec -> spec4 }}</td>
                                                        <td>{{ $spec -> spec5 }}</td>
                                                        <td>{{ $spec -> spec6 }}</td>
                                                        <td>{{ $spec -> spec7 }}</td>
                                                        <td>{{ $spec -> spectotal }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div style="font-size: 13px; color: grey;">
                                                <div style="display: inline-block; width: 49%;">
                                                    <p>𝛺1 = 1 - {{ $spec -> ∅1 }} = {{ $spec -> spec1 }}</p>
                                                    <p>𝛺2 = 1 - {{ $spec -> ∅2 }} = {{ $spec -> spec2 }}</p>
                                                    <p>𝛺3 = 1 - {{ $spec -> ∅3 }} = {{ $spec -> spec3 }}</p>
                                                    <p>𝛺4 = 1 - {{ $spec -> ∅4 }} = {{ $spec -> spec4 }}</p>
                                                </div>
                                                <div style="display: inline-block; width: 49%;">
                                                    <p>𝛺5 = 1 - {{ $spec -> ∅5 }} = {{ $spec -> spec5 }}</p>
                                                    <p>𝛺6 = 1 - {{ $spec -> ∅6 }} = {{ $spec -> spec6 }}</p>
                                                    <p>𝛺7 = 1 - {{ $spec -> ∅7 }} = {{ $spec -> spec7 }}</p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="row justify-content-center mt-1">
                                        <div class="col-10">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <h2 class="fs-title text-center mt-3">Menentukan Bobot Kriteria(<span style="font-style: italic">W<span>)</h2>
                                            </div>
                                            <div class="col-10">
                                                <p>Untuk menentukan bobot kriteria, langkah berikutnya adalah membagi jumlah setiap kolom dalam matriks Ωj dengan jumlah total kolom ∑ Ω𝑗. Hasil pembagian ini akan menghasilkan bobot untuk setiap kriteria. Bobot ini akan digunakan untuk mengalikan nilai setiap alternatif pada setiap kriteria dalam langkah berikutnya, yaitu perhitungan nilai preferensi untuk setiap alternatif. Semakin besar bobot suatu kriteria, semakin besar pengaruhnya dalam menentukan alternatif terbaik.</p>
                                            </div>
                                            <div class="col-10">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th >C1</th>
                                                            <th >C2</th>
                                                            <th >C3</th>
                                                            <th >C4</th>
                                                            <th >C5</th>
                                                            <th >C6</th>
                                                            <th >C7</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($weight as $weight)
                                                        <tr>
                                                            <td>{{ $weight -> weight1 }}</td>
                                                            <td>{{ $weight -> weight2 }}</td>
                                                            <td>{{ $weight -> weight3 }}</td>
                                                            <td>{{ $weight -> weight4 }}</td>
                                                            <td>{{ $weight -> weight5 }}</td>
                                                            <td>{{ $weight -> weight6 }}</td>
                                                            <td>{{ $weight -> weight7 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p>𝑊𝑗 = Ωj / ∑ Ωj</p>
                                                <div style="font-size: 13px; color: grey;">
                                                    <div style="display: inline-block; width: 49%;">
                                                        <p>𝑊1 = {{ $weight -> spec1 }} / {{ $weight -> spectotal }}  = {{ $weight -> weight1 }}</p>
                                                        <p>𝑊2 = {{ $weight -> spec2 }} / {{ $weight -> spectotal }}  = {{ $weight -> weight2 }}</p>
                                                        <p>𝑊3 = {{ $weight -> spec3 }} / {{ $weight -> spectotal }}  = {{ $weight -> weight3 }}</p>
                                                        <p>𝑊4 = {{ $weight -> spec4 }} / {{ $weight -> spectotal }}  = {{ $weight -> weight4 }}</p>
                                                    </div>
                                                    <div style="display: inline-block; width: 49%;">
                                                        <p>𝑊5 = {{ $weight -> spec5 }} / {{ $weight -> spectotal }}  = {{ $weight -> weight5 }}</p>
                                                        <p>𝑊6 = {{ $weight -> spec6 }} / {{ $weight -> spectotal }}  = {{ $weight -> weight6 }}</p>
                                                        <p>𝑊7 = {{ $weight -> spec7 }} / {{ $weight -> spectotal }}  = {{ $weight -> weight7 }}</p>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mt-1">
                                            <div class="col-10">
                                                <hr>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center mt-1">
                                            <div class="col-12">
                                                <h2 class="fs-title text-center mt-3">Menghitung PSI(<span style="font-style: italic">∅<span>)</h2>
                                                </div>
                                                <div class="col-10">
                                                    <p>Penentuan Preference Selection Index (PSI), di mana matriks ter-normalisasi Xij dikalikan dengan hasil dari 𝜔𝑗. Setelah perkalian berhasil, langkah berikutnya adalah menjumlahkan setiap baris dalam matriks 𝜃𝑖. Jumlah dari setiap baris dalam matriks 𝜃𝑖 merupakan hasil akhir yang menentukan peringkat alternatif, dan alternatif dengan nilai indeks preferensi tertinggi adalah alternatif terbaik.</p>
                                                    <table class="table table-bordered text-center">
                                                        <thead class="">
                                                            <tr>
                                                                <th >C1</th>
                                                                <th >C2</th>
                                                                <th >C3</th>
                                                                <th >C4</th>
                                                                <th >C5</th>
                                                                <th >C6</th>
                                                                <th >C7</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table-body4">
                                                        </tbody>
                                                    </table>
                                                    <script>
                                                        const tableBody4 = document.querySelector('#table-body4');
                                                        const psi = @json($psi);

                                                        for (let i = 0; i < 15; i++) {
                                                            const tr = document.createElement('tr');
                                                            for (let j = 0; j < 7; j++) {
                                                                const td = document.createElement('td');
                                                                const p = document.createElement('p');
                                                                p.textContent = psi[0]['psia'+(i+1)+'c'+(j+1)].toFixed(6);
                                                                p.style.fontWeight = '500';
                                                                td.appendChild(p);
                                                                tr.appendChild(td);
                                                            }
                                                            tableBody4.appendChild(tr);
                                                        }
                                                        const tr = document.createElement('tr');
                                                        tableBody4.appendChild(tr);
                                                        tableBody4.appendChild(tr);
                                                    </script>
                                                    <p>Rumus menghitung nilai alternatif i dalam sistem pengambilan keputusan multikriteria menggunakan Weighted Sum Model. Rumus ini menjumlahkan produk dari nilai preferensi Xij dari alternatif i pada kriteria j dan bobot Wj dari kriteria j. Proses ini diulang untuk semua kriteria, menghasilkan nilai preferensi total θi untuk alternatif i.</p>
                                                    <p>∅i = ∑(Xij * Wj) j=1 to m</p>
                                                    @foreach ($psijoin as $psijoin)
                                                    <div style="font-size: 13px; color: grey;">
                                                        <div style="display: inline-block; width: 49%;">
                                                            <p>∅ = {{ $psijoin -> na1c1 }} × {{ $psijoin -> weight1 }}  = {{ $psijoin -> psia1c1 }}</p>
                                                            <p>∅ = {{ $psijoin -> na1c2 }} × {{ $psijoin -> weight2 }}  = {{ $psijoin -> psia1c2 }}</p>
                                                            <p>∅ = {{ $psijoin -> na1c3 }} × {{ $psijoin -> weight3 }}  = {{ $psijoin -> psia1c3 }}</p>
                                                            <p>∅ = {{ $psijoin -> na1c4 }} × {{ $psijoin -> weight4 }}  = {{ $psijoin -> psia1c4 }}</p>
                                                        </div>
                                                        <div style="display: inline-block; width: 49%;">
                                                            <p>∅ = {{ $psijoin -> na1c5 }} × {{ $psijoin -> weight5 }}  = {{ $psijoin -> psia1c5 }}</p>
                                                            <p>∅ = {{ $psijoin -> na1c6 }} × {{ $psijoin -> weight6 }}  = {{ $psijoin -> psia1c6 }}</p>
                                                            <p>∅ = {{ $psijoin -> na1c7 }} × {{ $psijoin -> weight7 }}  = {{ $psijoin -> psia1c7 }}</p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="col-12">
                                                    <hr>
                                                    <h2 class="fs-title text-center mt-3">🌟Peringkat</h2>
                                                    <hr>
                                                </div>
                                                <div class="col-4">
                                                    <table class="table table-bordered text-center">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Alternatif</th>
                                                                <th>Nilai Peringkat</th>
                                                                <th>Peringkat</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @php
                                                            $firstSum3 = $sum3->first();
                                                            $topAlternatives = [];
                                                        @endphp

                                                        @if($firstSum3)
                                                            @for($i = 1; $i <= 15; $i++)
                                                                <tr>
                                                                    <td>A{{ $i }}</td>
                                                                    <td style="text-align: center">
                                                                        {{ $firstSum3->{'alternative'.$i} }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $firstSum3->{'A'.$i} }}
                                                                    </td>
                                                                    <td>
                                                                        @foreach ($sum3 as $data)
                                                                            @php
                                                                            $alternatives = [];
                                                                                for($p = 1; $p <= 15; $p++)
                                                                                    $alternatives[] = [
                                                                                        'alternative' => $data->{'alternative' . $p},
                                                                                        'value' => $data->{'A' . $p},
                                                                                    ];
                                                                                    usort($alternatives, function ($a, $b) {
                                                                                        return $b['value'] <=> $a['value'];
                                                                                    });
                                                                            @endphp
                                                                        @endforeach

                                                                        @php $r = 1; @endphp

                                                                        @foreach ($alternatives as $alternative)
                                                                            @if($firstSum3->{'A'.$i} == $alternative['value'])
                                                                                    @if($r == 1)
                                                                                        @php $topAlternatives[] = $firstSum3->{'alternative'.$i} @endphp
                                                                                    @endif
                                                                                @break
                                                                            @endif
                                                                            @php $r++ @endphp
                                                                        @endforeach
                                                                        @php $peringkat = $r @endphp
                                                                        {{ $peringkat }}
                                                                    </td>
                                                                </tr>
                                                            @endfor
                                                        @endif

                                                            <tr><td></td></tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-12">
                                                    <h2 class="fs-title text-center mt-3">Ringkasan</h2>
                                                </div>
                                                <div class="col-10">
                                                    <p>Metode PSI digunakan untuk mengevaluasi berbagai opsi dan menentukan yang paling sesuai berdasarkan kebutuhan dan preferensi pengguna. Pilihan
                                                        <span style="color: #fb6340;">
                                                            @if (!empty($topAlternatives))
                                                                {{ implode(', ', $topAlternatives) }}
                                                            @else
                                                                Tidak ada alternatif dengan peringkat satu.
                                                            @endif
                                                        </span>
                                                    memiliki nilai PSI tertinggi yaitu <span style="color: #fb6340;">{{ $highestRanking->rank }}</span>, menunjukkan bahwa itu merupakan pilihan yang paling direkomendasikan. Kesimpulan ini didasarkan pada analisis data yang hati-hati dan pertimbangan berbagai faktor, menjadikannya pilihan terbaik untuk pengguna mencapai hasil yang diinginkan.</p></p>
                                                    <button class="buttonCustom" style="margin-left: 40px" onclick="location.href='/psi';">Temukan Lebih Banyak Kasus?</button>
                                                    <button class="buttonCustom" onclick="location.href='/';">Bawa Saya ke Halaman Utama</button>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <style>
        th,td {
            color: grey;
            font-weight: 500;
        }
        .buttonCustom {
            background-color: #fff; /* background putih */
            border-radius: 10px;
            cursor: pointer;
            margin: 10px 0px 10px 10px;
            border: 2px solid #fb6340;
            padding: 10px 20px; /* padding */
            font-size: 16px; /* ukuran font */
            cursor: pointer; /* pointer cursor */
            color: #fb6340;
            font-weight: 600;
        }

        .buttonCustom:hover {
            background-color: #fb6340; /* background orange ketika di hover */
            color: #fff; /* warna teks putih ketika di hover */
        }
          ::-webkit-scrollbar {
            width: 0px;
          }
    </style>
    @endsection

