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
                            <h2 id="heading">How it Works</h2>
                            <div class="row row justify-content-center">
                                <div class="col-10">
                                    <p class="text-center">
                                        The Preferences Index Selection (PSI) method is employed to create decision support systems (DSS) that leverage computer assistance in the decision-making process. DSS is a system that utilizes data and decision models to address semi-structured and unstructured problems, facilitating decision-making. Developing a DSS with the PSI method entails defining criteria and conducting calculations to acquire relevant data for well-informed decision-making. These steps are derived from the article <a style="text-decoration: none; color: #fb6340;" href="https://ijcis.net/index.php/ijcis/article/view/55">"Selection Index (PSI) Method in Developing a Student Scholarship Decision Support System."</a></p>
                                    </div>
                                </div>
                                <div id="msform">
                                    <fieldset>
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <p style="font-size: 16px;font-weight: 500;">
                                                    Criteria Table
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-10">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered text-center">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Criteria</th>
                                                                <th>Information</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="table-body">
                                                            <tr>
                                                                <td class="text-center"
                                                                style="text-align: left; padding-top: 18px; font-weight: 500;">
                                                                <p style="font-weight: 500;">
                                                                    1
                                                                </p>
                                                            </td>
                                                            <td class="text-center"
                                                            style="text-align: left; padding-top: 18px;">
                                                            <p style="font-weight: 500;">
                                                                C1
                                                            </p>
                                                        </td>
                                                        <td class="text-center"
                                                        style="text-align: left; padding-top: 18px;">
                                                        <p style="font-weight: 500;">
                                                            Parent's Income
                                                        </p>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td class="text-center"
                                                    style="text-align: left; padding-top: 18px; font-weight: 500;">
                                                    <p style="font-weight: 500;">
                                                        2
                                                    </p>
                                                </td>
                                                <td class="text-center"
                                                style="text-align: left; padding-top: 18px;">
                                                <p style="font-weight: 500;">
                                                    C2
                                                </p>
                                            </td>
                                            <td class="text-center"
                                            style="text-align: left; padding-top: 18px;">
                                            <p style="font-weight: 500;">
                                                The number of dependents
                                            </p>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="text-center"
                                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                                        <p style="font-weight: 500;">
                                            3
                                        </p>
                                    </td>
                                    <td class="text-center"
                                    style="text-align: left; padding-top: 18px;">
                                    <p style="font-weight: 500;">
                                        C3
                                    </p>
                                </td>
                                <td class="text-center"
                                style="text-align: left; padding-top: 18px;">
                                <p style="font-weight: 500;">
                                    Parents' job
                                </p>
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="text-center"
                            style="text-align: left; padding-top: 18px; font-weight: 500;">
                            <p style="font-weight: 500;">
                                4
                            </p>
                        </td>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px;">
                        <p style="font-weight: 500;">
                            C4
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        Achievement
                    </p>
                </td>
            </tr>
            
            <tr>
                <td class="text-center"
                style="text-align: left; padding-top: 18px; font-weight: 500;">
                <p style="font-weight: 500;">
                    
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                
            </p>
        </td>
        <td class="text-center"
        style="text-align: left; padding-top: 18px;">
        <p style="font-weight: 500;">
            
        </p>
    </td>
</tr>

</tbody>
</table>
</div>
</div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p style="font-size: 16px;font-weight: 500;">
            Weight Value Table
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category</th>
                        <th>Weight</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            1
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        Very High
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    5
                </p>
            </td>
        </tr>
        
        <tr>
            <td class="text-center"
            style="text-align: left; padding-top: 18px; font-weight: 500;">
            <p style="font-weight: 500;">
                2
            </p>
        </td>
        <td class="text-center"
        style="text-align: left; padding-top: 18px;">
        <p style="font-weight: 500;">
            High
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        4
    </p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        3
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    Enough
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        4
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    Low
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p style="font-size: 16px;font-weight: 500;">
            Parent's Income Table
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Parent's income</th>
                        <th>Weight</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            Very High
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        < 500.000 </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        5
                    </p>
                </td>
            </tr>
            <tr>
                <td class="text-center"
                style="text-align: left; padding-top: 18px; font-weight: 500;">
                <p style="font-weight: 500;">
                    High
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                500000 -< 1.000.000 </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                4
            </p>
        </td>
    </tr>
    
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            Enough
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        1000.000 -< 1800.000 </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        3
    </p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        Low
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1800.000 - 2500.000
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        Very Low
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2500.000 >
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p style="font-size: 16px;font-weight: 500;">
            Dependent Table
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Dependent Category</th>
                        <th>Weight</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            More > 3
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        5
                    </p>
                </td>
            </tr>
            <tr>
                <td class="text-center"
                style="text-align: left; padding-top: 18px; font-weight: 500;">
                <p style="font-weight: 500;">
                    3
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                4
            </p>
        </td>
    </tr>
    
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            2
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        3
    </p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        1
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        blank
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p style="font-size: 16px;font-weight: 500;">
            Work Table
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Work</th>
                        <th>Weight</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            PNS
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        4
                    </p>
                </td>
            </tr>
            
            <tr>
                <td class="text-center"
                style="text-align: left; padding-top: 18px; font-weight: 500;">
                <p style="font-weight: 500;">
                    Private
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                3
            </p>
        </td>
    </tr>
    
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            Farmer
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        2
    </p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        Not Fixed
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p style="font-size: 16px;font-weight: 500;">
            Achievement Score Table
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Achievement</th>
                        <th>Weight</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            Has 4 achievements
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        5
                    </p>
                </td>
            </tr>
            
            <tr>
                <td class="text-center"
                style="text-align: left; padding-top: 18px; font-weight: 500;">
                <p style="font-weight: 500;">
                    Has 3 achievements
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                4
            </p>
        </td>
    </tr>
    
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            Has 2 achievements
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        3
    </p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        Has 1 achievements
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        do not have
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p style="font-size: 16px;font-weight: 500;">
            Alternate Match Value Table
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Alternative</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            A1
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        3
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    5
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                2
            </p>
        </td>
        <td class="text-center"
        style="text-align: left; padding-top: 18px;">
        <p style="font-weight: 500;">
            1
        </p>
    </td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A2
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    5
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A3
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    5
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A4
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    5
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A5
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A6
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A7
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    5
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A8
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A9
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A10
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>
<div class="row justify-content-center">
    <div class="col-10">
        <p>
            To solve the problem using the PSI (Preference Selection Index) method, the first step is to create an alternative table that includes the values of each weight. Then, the minimum and maximum values for each criterion are identified from the data. Once this is done, the suitability branch's alternative value can be determined by taking into account the values obtained for each alternative through the research. By applying the PSI method, a ranking can be established to help identify the best alternative based on the criteria and weights selected.
        </p>
    </div>
</div>

<div class="form-card">
    <div class="row">
        <div class="col-12">
            <h2 class="fs-title text-center">
                Alternative Max and Min Table
            </h2>
        </div>
    </div>
    <div class="row row justify-content-center">
        <div class="col-10">
            <p class="text-center">"The Alternative Max and Min table" is a tabular representation that summarizes the highest and lowest scores achieved by the options or alternatives being evaluated. This table provides a clear comparison of the extreme values within the preference selection index.
            </p>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width: 5%"> Alternative </th>
                            <th>C1</th>
                            <th>C2</th>
                            <th>C3</th>
                            <th>C4</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <tr>
                            <td class="text-center"
                            style="text-align: left; padding-top: 18px; font-weight: 500;">
                            <p style="font-weight: 500;">
                                A1
                            </p>
                        </td>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px;">
                        <p style="font-weight: 500;">
                            3
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        5
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    2
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                1
            </p>
        </td>
    </tr>
    
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            A2
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        5
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A3
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    5
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A4
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    5
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A5
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A6
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A7
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    5
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A8
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A9
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A10
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    2
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        MAX
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    5
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    5
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        MIN
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="row">
    <div class="col-12">
        <h2 class="fs-title text-center mt-3">Normalizing(<span style="font-family: 'Times New Roman';">𝑁</span>)</h2>
    </div>
</div>

<div class="row row justify-content-center">
    <div class="col-10">
        <p class="text-center">
            Criteria that have increasing values and a positive impact
            on users or job applicants, such as Salary, Company
            Benefits, Health Facilities, Transportation, and Working
            Environment can be considered as benefits. On the other
            hand, criteria that have increasing values and a negative
            impact on users or job applicants, such as Distance,
            Language Skills, Work Experience, Working Hours, and
            Geographical Factor can be considered as costs.
        </p>
    </div>
</div>

<div class="row row justify-content-center">
    <div class="col-10">
        <div style="text-align: center;">
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
        </div>
    </div>
</div>




<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Kriteria</th>
                        <th>C1 (Benefit)</th>
                        <th>C2 (Benefit)</th>
                        <th>C3 (Benefit)</th>
                        <th>C4 (Benefit)</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            A1
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px; font-weight: 500;">
                    <p style="font-weight: 500;">
                        0,6
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    1
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                0,6667
            </p>
        </td>
        <td class="text-center"
        style="text-align: left; padding-top: 18px;">
        <p style="font-weight: 500;">
            0,25
        </p>
    </td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A2
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,8
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,333
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,75
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A3
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0,6
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,6667
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,25
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A4
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0,8
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,6667
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,5
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A5
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0,8
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,8
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,333
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,25
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A6
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0,6
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A7
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,333
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,25
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A8
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0,8
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,6
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,333
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,75
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A9
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0,6
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,6
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,333
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,75
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A10
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0,6
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,8
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,6667
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,5
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        SUM
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    7,4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    7,4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    5,333
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    5,25
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>
</tbody>
</table>
</div>

</div>
</div>

<div class="row">
    <div class="col-12">
        <h2 class="fs-title text-center mt-3">
            Example
        </h2>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p class="text-center">
            Here is an example of benefit and cost calculation for Criteria
            1 and Criteria 2, where Criteria 1 is a benefit and Criteria 2
            is a cost. The following table shows the calculation steps :
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>C1 Normalization</th>
                        <th>C2 Normalization</th>
                        <th>C3 Normalization</th>
                        <th>C4 Normalization</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            𝑁11 = 3/5 = 0,6
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px; font-weight: 500;">
                    <p style="font-weight: 500;">
                        𝑁12 = 5/5 = 1
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    𝑁13 = 2/3 = 0,6667
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                𝑁14 = 1/4 = 0,25
            </p>
        </td>
    </tr>
    
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            𝑁21 = 5/5 = 1
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝑁22 = 4/5 = 0,8
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁23 = 1/3 = 0,3333
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁24 = 3/4 = 0,75
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝑁31 = 3/5 = 0,6
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    𝑁32 = 5/5 = 1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁33 = 2/3 = 0,6667
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁34 = 1/4 = 0,5
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝑁41 = 4/5 = 0,8
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    𝑁42 = 5/5 = 1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁43 = 2/3 = 0,6667
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁44 = 2/4 = 0,5
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝑁51 = 4/5 = 0,8
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    𝑁52 = 4/5 = 0,8
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁53 = 1/3 = 0,3333
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁54 = 1/4 = 0,25
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝑁61 = 3/5 = 0,6
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    𝑁62 = 2/5 = 0,4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁63 = 3/3 = 1
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁64 = 4/4 = 1
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝑁71 = 5/5 = 1
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    𝑁72 = 2/5 = 0,4
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁73 = 1/3 = 0,333
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁74 = 1/4 = 0,25
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝑁81 = 4/5 = 0,8
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    𝑁82 = 3/5 = 0,6
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁83 = 1/3 = 0,333
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁84 = 3/4 = 0,75
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝑁91 = 3/5 = 0,6
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    𝑁92 = 3/5 = 0,6
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁93 = 1/3 = 0,333
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁94 = 3/4 = 0,75
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝑁101 = 3/5 = 0,6
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    𝑁102 = 4/5 = 0,8
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁103 = 2/3 = 0,6667
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝑁104 = 2/4 = 0,5
</p>
</td>
</tr>



{{-- TABEL KOSONG: BIAR ADA BARIS AKHIR --}}
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>

<div class="row justify-content-center">
    <div class="row">
        <div class="col-12">
            <h2 class="fs-title text-center mt-3">Calculating The Mean</h2>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-10">
            <p class="text-center">
                To calculate the average for each criterion across all
                alternatives, you need to first calculate the sum of the
                normalized values for each criterion across all
                alternatives. Then, divide the sum of normalized values
                for each criterion by the total number of alternatives.
                The result of this division is the average value for
                each criterion across all alternatives.
            </p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <h2 class="fs-title text-center mt-2">
                Total Per Criteria 1
            </h2>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            0.74
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        0.74
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    0.5333
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                0.525
            </p>
        </td>
    </tr>
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            
        </p>
        {{-- <p style="font-weight: 500;">
            N = <sup>1</sup>/<sub>n</sub>
            &#8721;<sub>i=1</sub><sup>n</sup> Ni,j =
            <sup>1</sup>/<sub>10</sub> x 7.4 = 0.74
        </p> --}}
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="row">
    <div class="col-12">
        <h2 class="fs-title text-center mt-3">
            Example
        </h2>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p class="text-center">
            Here is the calculation of Mean. The following table shows
            the calculation steps :
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Criteria</th>
                    <th>Calculation Process</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <tr>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px; font-weight: 500;">
                    <p style="font-weight: 500;">
                        C1
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    N = SUM N / Total Alternative = 7.4 / 10
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                0,74
            </p>
        </td>
    </tr>
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            C2
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        N = SUM N / Total Alternative = 7.4 / 10
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,74
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        C3
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    N = SUM N / Total Alternative = 5.333 / 10
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,5333
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        C4
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    N = SUM N / Total Alternative = 5.25 / 10
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0,525
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
    {{-- <p style="font-weight: 500;">
        N = <sup>1</sup>/<sub>n</sub>
        &#8721;<sub>i=1</sub><sup>n</sup> Ni,j =
        <sup>1</sup>/<sub>10</sub> x 7.4 = 0.74
    </p> --}}
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="row">
    <div class="col-12">
        <h2 class="fs-title text-center mt-3">Determining The Value of Preference Variation(∅)</h2>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p class="text-center">
            Calculating the value of preference variation can be
            done by summing the multiplication of each element in a
            row of a normalized matrix with the corresponding
            preference weight in the column of the matrix.
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th></th>
                        <th>C1 / ∅𝐣𝟏</th>
                        <th>C2 / ∅𝑗2</th>
                        <th>C3 / ∅𝑗3</th>
                        <th>C4 / ∅𝑗4</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            A1
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px; font-weight: 500;">
                    <p style="font-weight: 500;">
                        0.0196
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    0.0676
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                0.0178
            </p>
        </td>
        <td class="text-center"
        style="text-align: left; padding-top: 18px;">
        <p style="font-weight: 500;">
            0.0756
        </p>
    </td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A2
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.0676
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0036
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.04
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0506
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A3
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.0196
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0676
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0178
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0752
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A4
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.0036
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0676
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0178
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0006
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A5
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.0036
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0036
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.04
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0756
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A6
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.0196
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1156
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.2178
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.2256
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A7
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.0676
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1156
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.04
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0756
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A8
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.0036
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0196
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.04
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0506
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A9
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.0196
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0196
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.04
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0506
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A10
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.0196
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0036
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0178
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0006
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        SUM
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.244
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.484
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.4889
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.6813
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<div class="row">
    <div class="col-12">
        <h2 class="fs-title text-center mt-3">
            Example
        </h2>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p class="text-center">
            Calculating the value of preference variation can be
            done by summing the multiplication of each element in a
            row of a normalized matrix with the corresponding
            preference weight in the column of the matrix.
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>∅𝑗1</th>
                        <th>∅𝑗2</th>
                        <th>∅𝑗3</th>
                        <th>∅𝑗4</th>
                    </tr>
                </thead>
                <tbody id="table-body" class="example">
                    
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            ∅𝑗11 = ∑𝑛 𝑖 (0,6 - 0.74)2 = 0.0196
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        ∅𝑗12 = ∑𝑛 𝑖 (1 - 0.74)2 = 0.0676
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    ∅𝑗13 = ∑𝑛 𝑖 (0.6667 - 0.5333)2 =
                    0.0178
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                ∅𝑗14 = ∑𝑛 𝑖 (0.25 - 0.525)2 = 0.0756
            </p>
        </td>
    </tr>
    
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            ∅𝑗21 = ∑𝑛 𝑖 (1 - 0.74)2 = 0.0676
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        ∅𝑗22 = ∑𝑛 𝑖 (0.8 - 0.74)2 = 0.0036
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗23 = ∑𝑛 𝑖 (0.3333 - 0.5333)2 = 0.04
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗24 = ∑𝑛 𝑖 (0.75 - 0.525)2 = 0.0506
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        ∅𝑗31 = ∑𝑛 𝑖 (0,6 - 0.74)2 = 0.0196
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗32 = ∑𝑛 𝑖 (1 - 0.74)2 = 0.0676
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗33 = ∑𝑛 𝑖 (0.6667- 0.5333)2 =
    0.0178
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗34 = ∑𝑛 𝑖 (0.25 - 0.525)2 = 0.0752
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        ∅𝑗41 = ∑𝑛 𝑖 (0,8 - 0.74)2 = 0.0036
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗42 = ∑𝑛 𝑖 (1 - 0.74)2 = 0.0676
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗43 = ∑𝑛 𝑖 (0.6667- 0.5333)2 =
    0.0178
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗44 = ∑𝑛 𝑖 (0.5 - 0.525)2 = 0.0006
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        ∅𝑗51 = ∑𝑛 𝑖 (0.8 - 0.74)2 = 0.0036
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗52 = ∑𝑛 𝑖 (0.8 - 0.74)2 = 0.0036
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗53 = ∑𝑛 𝑖 (0.3333 - 0.5333)2 = 0.04
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗54 = ∑𝑛 𝑖 (0.25 - 0.525)2 = 0.0756
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        ∅𝑗61 = ∑𝑛 𝑖 (0.6 - 0.74)2 = 0.0196
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗62 = ∑𝑛 𝑖 (0.4 - 0.74)2 = 0.1156
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗63 = ∑𝑛 𝑖 (1 - 0.5333)2 = 0.2178
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗64 = ∑𝑛 𝑖 (0.1- 0.525)2 = 0.2256
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        ∅𝑗71 = ∑𝑛 𝑖 (1 - 0.74)2 = 0.0676
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗72 = ∑𝑛 𝑖 (0.4 - 0.74)2 = 0.1156
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗73 = ∑𝑛 𝑖 (0.3333 - 0.5333)2 = 0.04
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗74 = ∑𝑛 𝑖 (0,25- 0.525)2 = 0.0756
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        ∅𝑗81 = ∑𝑛 𝑖 (0.8 - 0.74)2 = 0.0036
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗82 = ∑𝑛 𝑖 (0.6 - 0.74)2 = 0.0196
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗83 = ∑𝑛 𝑖 (0.3333 - 0.5333)2 = 0.04
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗84 = ∑𝑛 𝑖 (0.75- 0.525)2 = 0.0506
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        ∅𝑗91 = ∑𝑛 𝑖 (0.6 - 0.74)2 = 0.0196
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗92 = ∑𝑛 𝑖 (0.6 - 0.74)2 = 0.0196
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗93 = ∑𝑛 𝑖 (0.3333 - 0.5333)2 = 0.04
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗94 = ∑𝑛 𝑖 (0.75 - 0.525)2 = 0.0506
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        ∅𝑗101 = ∑𝑛 𝑖 (0.6 - 0.74)2 = 0.0196
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗102 = ∑𝑛 𝑖 (0.8 - 0.74)2 = 0.0036
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗103 = ∑𝑛 𝑖 (0.6667- 0.5333)2 =
    0.0178
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    ∅𝑗104 = ∑𝑛 𝑖 (0.5 - 0.525)2 = 0.0006
</p>
</td>
</tr>

<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>

</tbody>
</table>
</div>
</div>
</div>


<div class="row">
    <div class="col-12">
        <h2 class="fs-title text-center mt-3">Specifying The Value in Preferences(𝛺)</h2>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p class="text-center">
            Specifying the value refers to assigning specific
            numerical values or weights
            to different preferences or criteria that are being
            considered. It involves
            quantifying the importance or priority of each
            preference in order to create
            a systematic ranking or scoring system.
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th></th>
                        <th>C1 / Ω𝟏</th>
                        <th>C2 / Ω2</th>
                        <th>C3 / Ω3</th>
                        <th>C4 / Ω4</th>
                        <th>SUM</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            Ω
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px; font-weight: 500;">
                    <p style="font-weight: 500;">
                        0.756
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    0.516
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                0.5111
            </p>
        </td>
        <td class="text-center"
        style="text-align: left; padding-top: 18px;">
        <p style="font-weight: 500;">
            0.3188
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        2,1026
    </p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<div class="row">
    <div class="col-12">
        <h2 class="fs-title text-center mt-3">
            Example
        </h2>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p class="text-center">
            Here is the calculation of value in preference (Ω). The
            following table shows the calculation steps :
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Criteria</th>
                    <th>Calculation Process</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <tr>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px; font-weight: 500;">
                    <p style="font-weight: 500;">
                        C1
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    𝛺1 = 1 - 0.244
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                0.756
            </p>
        </td>
    </tr>
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            C2
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        𝛺2 = 1 - 0.484
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.516
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        C3
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝛺3 = 1 - 0.4889
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.5111
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        C4
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝛺4 = 1 - 0.6813
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.3188
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
    {{-- <p style="font-weight: 500;">
        N = <sup>1</sup>/<sub>n</sub>
        &#8721;<sub>i=1</sub><sup>n</sup> Ni,j =
        <sup>1</sup>/<sub>10</sub> x 7.4 = 0.74
    </p> --}}
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="row">
    <div class="col-12">
        <h2 class="fs-title text-center mt-3">Determine The Weight Criteria(<span style="font-style: italic">W<span>)</h2>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-10">
            <p class="text-center">
                Determining the weight criteria in a preference
                selection index
                involves assigning relative importance or weights to
                different
                criteria that are used to evaluate and compare options
                or alternatives.
                It is the process of quantifying the significance or
                priority of each
                criterion in the decision-making process.
            </p>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th></th>
                            <th>C1 / W𝟏</th>
                            <th>C2 / W2</th>
                            <th>C3 / W3</th>
                            <th>C4 / W4</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <tr>
                            <td class="text-center"
                            style="text-align: left; padding-top: 18px; font-weight: 500;">
                            <p style="font-weight: 500;">
                                W
                            </p>
                        </td>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            0.3597
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        0.2455
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    0.2432
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                0.1517
            </p>
        </td>
    </tr>
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<div class="row">
    <div class="col-12">
        <h2 class="fs-title text-center mt-3">
            Example
        </h2>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p class="text-center">
            Here is the calculation of Weight (W). The following table
            shows the calculation steps :
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <table class="table table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Criteria</th>
                    <th>Calculation Process</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <tr>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px; font-weight: 500;">
                    <p style="font-weight: 500;">
                        C1
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    W1 = Ωj / SUM Ωj = 0.756 / 2.1026
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                0.3597
            </p>
        </td>
    </tr>
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            C2
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        W2 = Ωj / SUM Ωj = 0.516 / 2.1026
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.2455
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        C3
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    W3 = Ωj / SUM Ωj = 0.5111 / 2.1026
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.2432
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        C4
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    W4 = Ωj / SUM Ωj = 0.3188 / 2.1026
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1517
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
    {{-- <p style="font-weight: 500;">
        N = <sup>1</sup>/<sub>n</sub>
        &#8721;<sub>i=1</sub><sup>n</sup> Ni,j =
        <sup>1</sup>/<sub>10</sub> x 7.4 = 0.74
    </p> --}}
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="row">
    <div class="col-12">
        <h2 class="fs-title text-center mt-3">
            Count PSI (∅)<span
            style="font-family: 'Times New Roman';"></span>
        </h2>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p class="text-center">
            Determining the preference selection index, where the
            normalized matrix Xij is multiplied by the result of
            𝜔𝑗. After the multiplication is successful, the next
            step is to sum each row in the matrix 𝜃𝑖. The sum of
            each row in the θi matrix is the final result that
            determines the ranking of alternatives, and the
            alternative with the highest preference index value is
            the best alternative.
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th></th>
                        <th>C1 / ∅𝟏</th>
                        <th>C2 / ∅2</th>
                        <th>C3 / ∅3</th>
                        <th>C4 / ∅4</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            A1
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px; font-weight: 500;">
                    <p style="font-weight: 500;">
                        0.2158
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    0.2455
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                0.1621
            </p>
        </td>
        <td class="text-center"
        style="text-align: left; padding-top: 18px;">
        <p style="font-weight: 500;">
            0.0379
        </p>
    </td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A2
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.3597
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1964
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0811
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1137
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A3
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.2158
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.2455
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1621
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0379
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A4
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.2877
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.2455
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1621
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0758
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A5
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.2877
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1964
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0811
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0379
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A6
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.2158
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0982
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.2432
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1517
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A7
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.3597
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0982
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0811
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0379
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A8
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.2877
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1473
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0811
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1137
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A9
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.2158
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1473
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0811
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1137
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A10
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.2158
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1964
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.1621
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    0.0758
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<div class="row">
    <div class="col-12">
        <h2 class="fs-title text-center mt-3">
            Example
        </h2>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p class="text-center">
            Here is an calculation of PSI. The following table shows the
            calculation steps :
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>C1 / ∅𝟏</th>
                        <th>C2 / ∅2</th>
                        <th>C3 / ∅3</th>
                        <th>C4 / ∅4</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            𝜃11 = 0.6 × 0.3597 = 0.2158
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px;">
                    <p style="font-weight: 500;">
                        𝜃12 = 1 × 0.2455 = 0.2455
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    𝜃13 = 0.6667 × 0.2432 = 0.1621
                </p>
            </td>
            <td class="text-center"
            style="text-align: left; padding-top: 18px;">
            <p style="font-weight: 500;">
                𝜃14 = 0.25 × 0.1517 = 0.0379
            </p>
        </td>
    </tr>
    <tr>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            𝜃21 = 0.6 × 0.3597 = 0.2158
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        𝜃22 = 1 × 0.2455 = 0.2455
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃23 = 0.3333 × 0.2432 = 0.0811
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃24 = 0.75 × 0.1517 = 0.1137
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝜃31 = 0.75 × 0.1517 = 0.1137
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃32 = 0.75 × 0.1517 = 0.1137
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃33 = 0.6667 × 0.2432 = 0.1621
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃34 = 0.25 × 0.1517 = 0.0379
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝜃41 = 0.8 × 0.3597 = 0.2877
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃42 = 1 × 0.2455 = 0.2455
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃43 = 0.6667 × 0.2432 = 0.1621
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃44 = 0.5 × 0.1517 = 0.0758
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝜃51 = 0.8 × 0.3597 = 0.2877
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃52 = 0.8 × 0.2455 = 0.1964
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃53 = 0.3333× 0.2432 = 0.0811
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃54 = 0.25 × 0.1517 = 0.0379
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝜃61 = 0.6 × 0.3597 = 0.2158
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃62 = 0.4 × 0.2455 = 0.0982
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃63 = 1 × 0.2432 = 0.2432
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃64 = 1 × 0.1517 = 0.1517
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝜃71 = 1 × 0.3597 = 0.3597
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃72 = 0.4× 0. 0.2455 = 0.0982
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃73 = 0.3333 × 0.2432 = 0.0811
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃74 = 0.25 × 0.1517 = 0.0379
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝜃81 = 0.8 × 0.3597 = 0.2877
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃82 = 0.6 × 0.2455 = 0.1473
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃83 = 0.3333× 0.2432 = 0.0811
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃84 = 0.75 × 0.1517 = 0.1137
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝜃91 = 0.6 × 0.3597 = 0.2158
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃92 = 0.6 × 0.2455= 0.1473
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃93 = 0.3333 × 0.2432 = 0.0811
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃94 = 0.75 × 0.1517 = 0.1137
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        𝜃101 = 0.6 × 0.3597 = 0.2158
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃102 = 0.8 × 0.2455= 0.1964
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃103 = 0.6667 × 0.2432 = 0.1621
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    𝜃104 = 0.5 × 0.1517 = 0.0758
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<div class="row">
    <div class="col-12">
        <h2 class="fs-title text-center mt-3">
            Looking For Rangking Value<span
            style="font-family: 'Times New Roman';"></span>
        </h2>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <p class="text-center">
            determining the relative ranking or position of
            different options or
            alternatives based on their overall performance or
            suitability within
            the index. It helps decision-makers identify the most
            preferable option
            among the available choices.
        </p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-10">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Criteria</th>
                        <th>SUM of PSI</th>
                        <th>Ranking</th>
                    </tr>
                </thead>
                <tbody id="table-body">
                    <tr>
                        <td class="text-center"
                        style="text-align: left; padding-top: 18px; font-weight: 500;">
                        <p style="font-weight: 500;">
                            A1
                        </p>
                    </td>
                    <td class="text-center"
                    style="text-align: left; padding-top: 18px; font-weight: 500;">
                    <p style="font-weight: 500;">
                        0.6613
                    </p>
                </td>
                <td class="text-center"
                style="text-align: left; padding-top: 18px;">
                <p style="font-weight: 500;">
                    4
                </p>
            </td>
        </tr>
        <tr>
            <td class="text-center"
            style="text-align: left; padding-top: 18px; font-weight: 500;">
            <p style="font-weight: 500;">
                A2
            </p>
        </td>
        <td class="text-center"
        style="text-align: left; padding-top: 18px; font-weight: 500;">
        <p style="font-weight: 500;">
            0.7509
        </p>
    </td>
    <td class="text-center"
    style="text-align: left; padding-top: 18px;">
    <p style="font-weight: 500;">
        2
    </p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A3
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.6613
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    4
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A4
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.7712
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    1
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A5
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.6031
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    8
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A6
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.7088
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    3
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A7
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.5768
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    9
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A8
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.6298
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    7
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A9
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.5579
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    10
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        A10
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px; font-weight: 500;">
<p style="font-weight: 500;">
    0.6501
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    6
</p>
</td>
</tr>
<tr>
    <td class="text-center"
    style="text-align: left; padding-top: 18px; font-weight: 500;">
    <p style="font-weight: 500;">
        
    </p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>
<td class="text-center"
style="text-align: left; padding-top: 18px;">
<p style="font-weight: 500;">
    
</p>
</td>

</tr>
</tbody>
</table>
<div>
    <p class="text-center">The Preferenced Selection Index (PSI) method is a powerful tool for decision-making, and it has determined that option A4 stands out as the most optimal choice with a remarkable PSI score of 0.7712. Based on the PSI value, it is safe to conclude that option A4 is the most recommended option. With this reliable and data-driven method, decision-makers can confidently choose the best option for their desired outcome.</p>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
<div class="row justify-content-center">
    <div class="col-10">
        <button class="buttonCustom" onclick="location.href='/psi';">Get Started</button>
        <button class="buttonCustom" onclick="location.href='/';">Get Back</button>
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
        width: 140px;
    }
    
    .buttonCustom:hover {
        background-color: #fb6340; /* background orange ketika di hover */
        color: #fff; /* warna teks putih ketika di hover */
    }
    .example p{
        font-size: 14px;
    }
</style>
@endsection
