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
                            <h2 id="heading">Career Preferences Selection</h2>
                            <div class="row justify-content-center">
                                <div class="col-10">
                                    <p>To proceed to the next step, please ensure that you have completed all the required fields. Don't worry if you're unsure about how the algorithm works, you can visit our "How It Works" page for a comprehensive guide.
                                        
                                        Our <a style="text-decoration: none; color: #fb6340;" href="/how-it-works">how it work</a> page provides a step-by-step breakdown of the algorithm, so you can get a better understanding of how it operates. We believe that transparency is key, and we want to ensure that you have all the information you need to make informed decisions.
                                        
                                        Thank you for choosing our platform, and we hope you find our service helpful and user-friendly.</p>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('cases.store') }}" id="msform">
                                    @csrf
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active" id="account"><strong>Alternative</strong></li>
                                        <li id="personal"><strong>Criteria</strong></li>
                                        <li id="confirm"><strong>Finish</strong></li>
                                    </ul> <!-- fieldsets -->
                                    <fieldset>
                                        <div class="form-card" id="alternative-container">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Job Alternatives :</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="font-size: 13px">Please enter the job choices that you have obtained in this form to continue the process. <a style="text-decoration: none; color: #fb6340;" href="/csv">Using CSV?</a></p>
                                                </div>
                                            </div> 
                                            <script>
                                                const alternativeCount = 20;
                                                const alternativeContainer = document.querySelector('#alternative-container');
                                                
                                                for (let i = 1; i <= alternativeCount; i++) {
                                                    const label = document.createElement('label');
                                                    label.textContent = `Alternative ${i} : *`;
                                                    label.className = 'fieldlabels';
                                                    
                                                    const input = document.createElement('input');
                                                    input.type = 'text';
                                                    input.className = 'mb-3';
                                                    input.id = `alternative${i}`;
                                                    input.name = `alternative${i}`;
                                                    input.placeholder = `Alternative ${i}`;
                                                    input.required = true;
                                                    
                                                    alternativeContainer.appendChild(label);
                                                    alternativeContainer.appendChild(input);
                                                }
                                            </script>                                       
                                        </div>
                                        <input type="button" id="nextButton" class="next action-button" value="Next" />
                                        <script>
                                            // Get all input fields and the Next button
                                            const inputs = document.querySelectorAll('input[name^="alternative"]');
                                            const nextButton = document.getElementById('nextButton');
                                            
                                            // Function to check if all input fields are filled
                                            function checkInputs() {
                                                let isValid = true;
                                                inputs.forEach(input => {
                                                    if (!input.value.trim()) {
                                                        isValid = false;
                                                        return;
                                                    }
                                                });
                                                return isValid;
                                            }
                                            
                                            // Add event listener to inputs
                                            inputs.forEach(input => {
                                                input.addEventListener('input', () => {
                                                    if (checkInputs()) {
                                                        nextButton.style.display = 'inline-block';
                                                    } else {
                                                        nextButton.style.display = 'none';
                                                    }
                                                });
                                            });
                                            
                                            // Hide the Next button initially
                                            nextButton.style.display = 'none';
                                        </script>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Job Criteria Score:</h2>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-12">
                                                    <p style="font-size: 13px">Please enter the criteria scores for each job alternative previously entered. These scores reflect the importance or preference for each criterion in the decision-making process. Fill in all available criteria, namely :</p>
                                                    <div style="display: flex; justify-content: space-between; font-size: 13px; color: grey;">
                                                        <div style="flex-basis: 15%;">
                                                            <ul>
                                                                <li>C1 : Salary</li>
                                                                <li>C2 : Distance</li>
                                                                <li>C3 : Company Benefits</li>
                                                                <li>C4 : Working Hours</li>
                                                                <li>C5 : Transportation</li>
                                                            </ul>
                                                        </div>
                                                        <div style="flex-basis: 95%;">
                                                            <ul>
                                                                <li>C6  : Work Experience</li>
                                                                <li>C7  : Health Facilities</li>
                                                                <li>C8  : Language Skills</li>
                                                                <li>C9  : Working Environment</li>
                                                                <li>C10 : Geographical Factor</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="table-responsive">
                                                <table class="table text-center">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th style="width: 10%"> </th>
                                                            <th >C1</th>
                                                            <th >C2</th>
                                                            <th >C3</th>
                                                            <th >C4</th>
                                                            <th >C5</th>
                                                            <th >C6</th>
                                                            <th >C7</th>
                                                            <th >C8</th>
                                                            <th >C9</th>
                                                            <th >C10</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="table-body">
                                                    </tbody>
                                                </table>
                                                <script>
                                                    const rowCount = 20;
                                                    const colCount = 10;
                                                    const tableBody = document.querySelector('#table-body');
                                                    
                                                    for (let i = 0; i < rowCount; i++) {
                                                        const tr = document.createElement('tr');
                                                        const td1 = document.createElement('td');
                                                        td1.className = 'text-center';
                                                        td1.style.paddingTop = '18px';
                                                        const p = document.createElement('p');
                                                        p.textContent = `Alternative ${i+1}`;
                                                        td1.appendChild(p);
                                                        tr.appendChild(td1);
                                                        for (let j = 0; j < colCount; j++) {
                                                            const td = document.createElement('td');
                                                            const input = document.createElement('input');
                                                            input.type = 'number';
                                                            input.className = 'form-control';
                                                            input.id = `a${i + 1}c${j + 1}`;
                                                            input.name = `a${i + 1}c${j + 1}`;
                                                            td.appendChild(input);
                                                            tr.appendChild(td);
                                                        }
                                                        tableBody.appendChild(tr);
                                                    }
                                                </script>
                                            </div>
                                        </div> 
                                        <input type="submit" name="next" class="next action-button" value="Submit" />
                                        <script>
                                            const inputs3 = document.querySelectorAll('input[type="number"]');
                                            const submitButton = document.querySelector('input[type="submit"]');
                                            function checkInputs3() {
                                                let isValid = true;
                                                inputs3.forEach(input => {
                                                    if (!input.value.trim()) {
                                                        isValid = false;
                                                        return;
                                                    }
                                                });
                                                return isValid;
                                            }
                                            inputs3.forEach(input => {
                                                input.addEventListener('input', () => {
                                                    if (checkInputs3()) {
                                                        submitButton.style.display = 'inline-block';
                                                    } else {
                                                        submitButton.style.display = 'none';
                                                    }
                                                });
                                            });
                                            submitButton.style.display = 'none';
                                        </script>
                                        <input type="button" id="previousButton2" name="previous" class="previous action-button-previous" value="Previous"/>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    @endsection
    
