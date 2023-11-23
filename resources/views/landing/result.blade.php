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
                            <h2 id="heading">Career Preferences DSS Result</h2>
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <p>This page displays the Preferenced Selection Index (PSI), which indicates how well a job matches someone's abilities, interests, and experience. The higher the PSI value, the more suitable the job is for someone's skills and interests. By using PSIwizard, you can find the most suitable career for you. Find the career you want now by using PSIwizard. If you're unsure about how the algorithm works, please visit the <a style="text-decoration: none; color: #fb6340;" href="/how-it-works">how it work</a> page for more information.</p>
                                </div>
                            </div>
                            <div id="msform">
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="fs-title text-center">Alternate Match Value Table</h2>
                                            </div>
                                        </div>
                                        <div class="row row justify-content-center">
                                            <div class="col-10">
                                                <p class="text-center">This table will show the final score for each job alternative that is tested using criteria determined by the user, indicating how well each alternative matches the criteria.</p>
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
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table-body">
                                                        </tbody>
                                                    </table>
                                                    <script>
                                                        const rowCount = 11;
                                                        const colCount = 5;
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
                                                        <h2 class="fs-title text-center mt-3">Normalizing(<span style="font-family: 'Times New Roman';">𝑁</span>)</h2>
                                                    </div>
                                                </div>
                                                <div class="row row justify-content-center">
                                                    <div class="col-12">
                                                        <p class="text-center">In the PSI method within DSS, normalization is used to transform values of each criterion into relative values from the same value range, in order to make them objectively comparable. Before performing normalization using the PSI method, the first step is to find the maximum (max) and minimum (min) values of each criterion for all alternatives in the DSS.</p>
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
                                                        </tr>
                                                        <tr>
                                                            <td>Min</td>
                                                            <td>{{ $maxmin -> min1 }}</td>
                                                            <td>{{ $maxmin -> min2 }}</td>
                                                            <td>{{ $maxmin -> min3 }}</td>
                                                            <td>{{ $maxmin -> min4 }}</td>
                                                            <td>{{ $maxmin -> min5 }}</td>
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
                                            <h2 class="fs-title text-center mt-2">Normalization</h2>
                                        </div>
                                    </div>
                                    <div class="row row justify-content-center">
                                        <div class="col-10">
                                            <p class="text-center">Criteria that have increasing values and a positive impact on users or job applicants, such as Salary, Company Benefits, Health Facilities, Transportation, and Working Environment can be considered as benefits. On the other hand, criteria that have increasing values and a negative impact on users or job applicants, such as Distance, Language Skills, Work Experience, Working Hours, and Geographical Factor can be considered as costs.</p>
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
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table-body1">
                                                    </tbody>
                                                </table>
                                                <script>
                                                    const tableBody2 = document.querySelector('#table-body1');
                                                    const normalisasi = @json($normalisasi);

                                                    for (let i = 0; i < 11; i++) {
                                                        const tr = document.createElement('tr');
                                                        for (let j = 0; j < 5; j++) {
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
                                                    <h2 class="fs-title text-center mt-2">Example</h2>
                                                </div>
                                            </div>
                                            <div class="row row justify-content-center">
                                                <div class="col-12">
                                                    <p class="text-center">Here is an example of benefit and cost calculation for Criteria 1 and Criteria 2, where Criteria 1 is a benefit and Criteria 2 is a cost. The following table shows the calculation steps :</p>
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
                                                        <th>C1 Calculation (Benefit)</th>
                                                        <th>C2 Calculation (Cost)</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="table-body2">
                                                    @foreach ($join as $join)
                                                    <tr>
                                                        <td>
                                                            <p>𝑁11 = {{ $join -> a1c1 }} / {{ $join -> max1 }} = {{ $join -> na1c1 }}</p>
                                                        </td>
                                                        <td>
                                                            <p>𝑁12 = {{ $join -> min2 }} /  {{ $join -> a1c2 }} = {{ $join -> na1c2 }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>𝑁21 = {{ $join -> a2c1 }} / {{ $join -> max1 }} = {{ $join -> na2c1 }}</p>
                                                        </td>
                                                        <td>
                                                            <p>𝑁22 = {{ $join -> min2 }} /  {{ $join -> a2c2 }} = {{ $join -> na2c2 }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>𝑁31 = {{ $join -> a3c1 }} / {{ $join -> max1 }} = {{ $join -> na3c1 }}</p>
                                                        </td>
                                                        <td>
                                                            <p>𝑁32 = {{ $join -> min2 }} /  {{ $join -> a3c2 }} = {{ $join -> na3c2 }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>𝑁41 = {{ $join -> a4c1 }} / {{ $join -> max1 }} = {{ $join -> na4c1 }}</p>
                                                        </td>
                                                        <td>
                                                            <p>𝑁42 = {{ $join -> min2 }} /  {{ $join -> a4c2 }} = {{ $join -> na4c2 }}</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>𝑁51 = {{ $join -> a5c1 }} / {{ $join -> max1 }} = {{ $join -> na5c1 }}</p>
                                                        </td>
                                                        <td>
                                                            <p>𝑁52 = {{ $join -> min2 }} /  {{ $join -> a5c2 }} = {{ $join -> na5c2 }}</p>
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
                                            <h2 class="fs-title text-center mt-3">Calculating The Mean</h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <p class="text-center">To calculate the average for each criterion across all alternatives, you need to first calculate the sum of the normalized values for each criterion across all alternatives. Then, divide the sum of normalized values for each criterion by the total number of alternatives. The result of this division is the average value for each criterion across all alternatives.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title text-center mt-2">Total Per Criteria 1</h2>
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
                                            <h2 class="fs-title text-center mt-3">Calculating</h2>
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
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="row justify-content-center">
                                                <div class="col-12 mb-2">
                                                    <p class="text-center">The formula to calculate the average of the Preference Selection Index (PSI) after normalization is by adding up the PSI values of each criteria, then dividing it by the total number of alternatives.</p>
                                                </div>
                                            </div>
                                            <div style="font-size: 13px; color: grey;">
                                                <div style="display: inline-block; width: 49%;">
                                                    <p>𝑁 = {{ $mean->m1 }} / 10 = {{ $mean->mean1 }}</p>
                                                    <p>𝑁 = {{ $mean->m2 }} / 10 = {{ $mean->mean2 }}</p>
                                                    <p>𝑁 = {{ $mean->m3 }} / 10 = {{ $mean->mean3 }}</p>
                                                    <p>𝑁 = {{ $mean->m4 }} / 10 = {{ $mean->mean4 }}</p>
                                                    <p>𝑁 = {{ $mean->m5 }} / 10 = {{ $mean->mean5 }}</p>
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
                                            <h2 class="fs-title text-center mt-3">Determining The Value of Preference Variation(∅)</h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <p class="text-center">Calculating the value of preference variation can be done by summing the multiplication of each element in a row of a normalized matrix with the corresponding preference weight in the column of the matrix.</p>
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
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table-body3">
                                                    </tbody>
                                                </table>
                                                <script>
                                                    const tableBody3 = document.querySelector('#table-body3');
                                                    const determine = @json($determine);
                                                    console.log(determine)

                                                    for (let i = 0; i < 11; i++) {
                                                        const tr = document.createElement('tr');
                                                        for (let j = 0; j < 5; j++) {
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
                                            <p>∅51 = ({{ $item -> na5c1 }} - {{ $item -> mean1 }})^2  = {{ $item -> ∅a5c1 }}</p>
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
                                            <h2 class="fs-title text-center mt-3">Specifying The Value in Preferences(𝛺)</h2>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <p class="text-center">Sum each column in the matrix Ωj is reduced by 1 according to the number of columns present. After that, sum the calculation results in each column of matrix Ω𝑗.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="fs-title text-center mt-2">Total Per Criteria 2</h2>
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
                                            <h2 class="fs-title text-center mt-2">Calculating</h2>
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
                                                    <p>𝛺5 = 1 - {{ $spec -> ∅5 }} = {{ $spec -> spec5 }}</p>
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
                                            <h2 class="fs-title text-center mt-3">Determine The Weight Criteria(<span style="font-style: italic">W<span>)</h2>
                                            </div>
                                            <div class="col-10">
                                                <p>In determining the weight criteria, the next step is to divide the sum of each column in the Ωj matrix by the total number of columns ∑ Ω𝑗. The result of this division will produce weights for each criterion. These weights will be used to multiply the value of each alternative on each criterion in the next step, namely the calculation of preference values for each alternative. The larger the weight of a criterion, the greater its influence in determining the best alternative.</p>
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
                                                        <p>𝑊5 = {{ $weight -> spec5 }} / {{ $weight -> spectotal }}  = {{ $weight -> weight5 }}</p>
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
                                                <h2 class="fs-title text-center mt-3">Count PSI(<span style="font-style: italic">∅<span>)</h2>
                                                </div>
                                                <div class="col-10">
                                                    <p>Determining the preference selection index, where the normalized matrix Xij is multiplied by the result of 𝜔𝑗. After the multiplication is successful, the next step is to sum each row in the matrix 𝜃𝑖. The sum of each row in the θi matrix is the final result that determines the ranking of alternatives, and the alternative with the highest preference index value is the best alternative.</p>
                                                    <table class="table table-bordered text-center">
                                                        <thead class="">
                                                            <tr>
                                                                <th >C1</th>
                                                                <th >C2</th>
                                                                <th >C3</th>
                                                                <th >C4</th>
                                                                <th >C5</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table-body4">
                                                        </tbody>
                                                    </table>
                                                    <script>
                                                        const tableBody4 = document.querySelector('#table-body4');
                                                        const psi = @json($psi);

                                                        for (let i = 0; i < 10; i++) {
                                                            const tr = document.createElement('tr');
                                                            for (let j = 0; j < 5; j++) {
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
                                                    <p>The formula calculates the value of an alternative i in a multi-criteria decision-making system using the Weighted Sum Model. The formula sums up the products of the preference values Xij of alternative i on criterion j and the weight Wj of criterion j. The process is repeated for all criteria, resulting in the total preference value θi for alternative i.</p>
                                                    <p>∅i = ∑(Xij * Wj) j=1 to m</p>
                                                    @foreach ($psijoin as $psijoin)
                                                    <div style="font-size: 13px; color: grey;">
                                                        <div style="display: inline-block; width: 49%;">
                                                            <p>∅ = {{ $psijoin -> na1c1 }} × {{ $psijoin -> weight1 }}  = {{ $psijoin -> psia1c1 }}</p>
                                                            <p>∅ = {{ $psijoin -> na1c2 }} × {{ $psijoin -> weight2 }}  = {{ $psijoin -> psia1c2 }}</p>
                                                            <p>∅ = {{ $psijoin -> na1c3 }} × {{ $psijoin -> weight3 }}  = {{ $psijoin -> psia1c3 }}</p>
                                                            <p>∅ = {{ $psijoin -> na1c4 }} × {{ $psijoin -> weight4 }}  = {{ $psijoin -> psia1c4 }}</p>
                                                            <p>∅ = {{ $psijoin -> na1c5 }} × {{ $psijoin -> weight5 }}  = {{ $psijoin -> psia1c5 }}</p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="col-12">
                                                    <h2 class="fs-title text-center mt-3">Ranking</h2>
                                                </div>
                                                <div class="col-4">
                                                    <table class="table table-bordered text-center">
                                                        <thead class="">
                                                            <tr>
                                                                <th>No</th>
                                                                <th >Alternatif</th>
                                                                <th >Ranking Value</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table-body5">
                                                            @foreach ($sum3 as $sum3)
                                                            @for($i=1; $i<=10; $i++)
                                                            <tr>
                                                                <td>A{{$i}}</td>
                                                                <td style="text-align: left">
                                                                    {{ $sum3->{'alternative'.$i} }}
                                                                </td>
                                                                <td>
                                                                    {{ $sum3->{'A'.$i} }}
                                                                </td>
                                                            </tr>
                                                            @endfor
                                                            @endforeach
                                                            <tr><td></td></tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-12">
                                                    <h2 class="fs-title text-center mt-3">Summary</h2>
                                                </div>
                                                <div class="col-10">
                                                    <p>The PSI method was used to evaluate various options and determine the most suitable one based on the user's needs and preferences. Option <span style="color: #fb6340;">{{ $highestRanking->tabel }}</span>  had the highest PSI value of <span style="color: #fb6340;">{{ $highestRanking->rank }}</span>, indicating that it was the most recommended option. This conclusion was based on a careful analysis of the data and consideration of various factors, making it the best choice for the user to achieve their desired outcome. If you're unsure about how the algorithm works, please visit the <a style="text-decoration: none; color: #fb6340;" href="/how-it-works">how it work</a> page for more information.</p></p>
                                                    <button class="buttonCustom" style="margin-left: 40px" onclick="location.href='/psi';">Discover More Cases?</button>
                                                    <button class="buttonCustom" onclick="location.href='/';">Take Me Home</button>
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

