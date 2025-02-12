<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    .form-check-input{
        border-width:10px ;
    }
    .form-check {
        font-size:1.5rem!important; 
    }

    .modal-dialog {
        max-height: 90vh;
        overflow-y: auto;
    }
    .modal-content {
        max-height: 90vh;
        overflow-y: auto; 
    }
    @media (max-width: 576px) {
        .form-check {
            font-size:1rem!important;
        }
        .form-check-input{
            border-width:0px;
        }
    }
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Joy-Nostalg Group</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @include('components.loader')
    @include('components.navbar')
    <!-- Content Section -->
    <div style="position: relative; text-align: center;">
        <img style="display: block; margin: 0 auto; height:550px; width: 90%;" src="/img/Photos/contact_us/Contact Us.png" alt="Contact Us">
        <h1 style="position: absolute; top: 90%; left: 16%; transform: translate(-50%, -50%); color: white; font-size: 3rem; text-shadow:  5px 5px 8px rgba(0, 0, 0, 0.7);">
            CONTACT US
        </h1>
    </div>
    @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             {{ session('success') }}
            </div> 
    @endif
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mb-4 mt-4">
                <h1 class="fw-bold">Corporate Directory</h1>
                <h2>Choose the group you want to contact</h2>

                <form form id="inquiryForm"  action="{{ route('form.inquiry.submit') }}" method="POST">
                    @csrf
                    <div class="row">
                        @foreach(['Property', 'Power', 'Hospitality', 'Culinary', 'Enclavewrx', 'Foundation'] as $group)
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="group" id="{{ $group }}" value="{{ $group }}" {{ old('group') == $group ? 'checked' : '' }}>
                                    <label class="form-check-label" for="{{ $group }}">
                                        {{ $group }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <h3 class="required">Full Name</h3>
                        <input name="full_name" placeholder="Juan Dela Cruz" class="fs-4 w-100 mb-4" style="border-radius: 20px; padding-left: 20px;" value="{{ old('full_name') }}">
                    </div>
                    <div>
                        <h3 class="required">Email Address</h3>
                        <input type="email" name="email" placeholder="email@example.com" class="fs-4 w-100 mb-4" style="border-radius: 20px; padding-left: 20px;" value="{{ old('email') }}">
                    </div>
                    <div>
                        <h3 class="required">Subject</h3>
                        <input name="subject" placeholder="Email Subject" class="fs-4 w-100 mb-4" style="border-radius: 20px; padding-left: 20px;" value="{{ old('subject') }}">
                    </div>
                    <div>
                        <h3 class="d-inline">Message</h3>
                        <p class="text-muted fs-4 d-inline"><span id="inputCount">0</span>/1000</p>
                        <textarea name="message" placeholder="Your Message" class="fs-4 w-100 mb-4" style="border-radius: 20px; padding-left: 20px;" maxlength="1000" rows="5" oninput="document.getElementById('inputCount').textContent = this.value.length;">{{ old('message') }}</textarea>
                    </div>

                    <div>
                         
                        <label class="fs-5" for="dataprivacy">
                            <input type="checkbox" id="dataprivacy" name="dataprivacy" data-bs-toggle="modal" data-bs-target="#dataPrivacyModal" required> I have read and agree with the data privacy act
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary fs-4 w-100 mt-3" style="border-radius: 20px;">Submit</button>
                </form>
            </div>
            <div class="col-md-6 mb-4 mt-4">
                <h1 class="fw-bold">Corporate Directory</h1>
                <h2 class="fw-bold">Joy~Nostalg Head Office</h2>
                <h3 class="fs-4">17 ADB Avenue, Topaz Rd, Ortigas Center, Pasig, 1600 Metro Manila</h3>
            </div>
        </div>
    </div>
</div>

<!--DPA here-->
<div class="modal fade" id="dataPrivacyModal" tabindex="-1" aria-labelledby="dataPrivacyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content d-flex flex-column">
            <div class="modal-header position-sticky bg-warning" style="top: 0; z-index: 1050;">
                <h5 class="modal-title" id="dataPrivacyModalLabel">Data Privacy Policy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="p">We, <strong><strong>Joy~Nostalg Group,</strong></strong>&nbsp;respect your privacy and recognize your need for appropriate protection and management of your personal data that you have directly and voluntarily entrusted us. We have developed this Privacy Policy in order to protect your personal data in accordance with the Data Privacy Act of 2012 (DPA), its Implementing Rules and Regulations (IRR), other issuances of National Privacy Commission (NPC) and other relevant laws of the Philippines.<br>
                    &nbsp;&nbsp;<br>
                    Personal data refers to all types of personal information, sensitive personal information and privileged information. Personal information refers to “any information, whether recorded in a material form or not, from which the identity of an individual is apparent or can be reasonably and directly ascertained by the entity holding the information, or when put together with other information would directly and certainly identify an individual”.&nbsp;<br>
                This Privacy Policy tells you how we process (meaning, how we collect, use, share, and retain) and protect your personal data. It also tells you what steps you can take if you want us to change how we use your personal data, or if you want us to stop using your personal data.</p>

                <p class="p"><strong><strong>Why do we collect your personal data?</strong></strong></p>

                <p class="p">To enable us to perform processes related with recruitment and hiring, it is important that <strong><strong>Joy~Nostalg Group</strong></strong>&nbsp;collects, uses, stores and retains your personal data when it is reasonable and necessary.&nbsp;</p>

                <p class="p"><strong><strong>In particular, we are using your information to:</strong></strong><br>
                    Consider and evaluate your suitability for employment and, with your permission, inform and consider you for future job opportunities that may be of interest to you<br>
                    Provide us with the necessary information to perform related screening and background investigation;<br>
                Communicate with you about your employment application</p>

                <p class="p"><strong><strong>What type of personal data we collect?</strong></strong></p>

                <p class="p">If you elect to apply for a job opening with <strong><strong>Joy~Nostalg Group</strong></strong><strong><strong>,</strong></strong>&nbsp;you will be required to provide certain personal and sensitive personal Information in order to complete your application for employment. &nbsp;&nbsp;<br>
                    The types of personal information that you are required to provide in connection with your application for employment may vary depending on the particular position for which you are submitting an application.&nbsp;<br>
                You are also required to provide us a copy of your resume/curriculum vitae and if you will be hired, you will submit the documents listed in the Pre-employment Requirements which contains personal and sensitive personal information.&nbsp;</p>

                <p class="p"><strong><strong>The types of personal data collected by </strong></strong><strong><strong>Joy~Nostalg Group</strong></strong><strong><strong>&nbsp;from you includes the following:</strong></strong><br>
                    Basic personal information such as names, present address, contact number, email address;<br>
                    Educational background, employment record, government examination passed;<br>
                    Compensation and benefits package from current and previous employers;<br>
                    Companies with pending application and status; and<br>
                Motivations for applying and character references</p>

                <p class="p">Please note that you are responsible for ensuring that all such personal data you submit is accurate, complete and up-to-date.</p>

                <p class="p"><strong><strong>Who do we share your personal data with?</strong></strong></p>

                <p class="p">As a general rule, we are not allowed to share your data to a third party, except in limited circumstances as noted below.</p>

                <p class="p">By giving your consent, you authorize Joy~Nostalg Group&nbsp;to disclose your information to our affiliates or accredited third parties or independent/non-affiliated third parties, whether local or foreign in the following circumstances:<br>
                    As necessary for the proper execution of processes related to the declared purpose<br>
                The use or disclosure is reasonably necessary, required or authorized by or under law</p>

                <p class="p"><strong><strong>This means we might provide information to the following:</strong></strong><br>
                    Our affiliates, subsidiaries, partner companies, organizations, or agencies including their sub-contractors or prospective business partners that act as our service providers and contractors;<br>
                Law enforcement and government agencies;</p>

                <p class="p">However, these companies may only use such personal data for the purpose(s) disclosed in this Privacy Policy and may not use it for any other purpose.</p>

                <p class="p"><strong><strong>How do we protect your personal data?</strong></strong></p>

                <p class="p">We take reasonable steps to make sure that your personal data we collect, use or disclose are accurate, complete, and up-to-date. We strictly enforce our Privacy Policy within the <strong><strong>Joy~Nostalg Group</strong></strong>&nbsp;and we have implemented technological, organizational and physical security measures to protect your information we hold from loss, misuse, modification, unauthorized or accidental access or disclosure, alteration or destruction. We put in effect safeguards such as the following:</p>

                <p class="p">We keep and protect your personal data using secured servers behind a firewall, deploying encryption on computing devices and physical security controls.<br>
                    We restrict access to your personal data only to qualified and authorized personnel who hold your personal data with strict confidentiality.<br>
                    Any personal data that you provide is initially processed and stored by <strong><strong>Joy~Nostalg Group</strong></strong>&nbsp;Using a secured connection, only authorized <strong><strong>Joy~Nostalg Group</strong></strong>&nbsp;personnel can then access and download your personal data from the system.<br>
                    <br>
                    <strong><strong>How long do we keep your personal data?</strong></strong></p>

                    <p class="p"><strong><strong>Joy~Nostalg Group</strong></strong>&nbsp;reserves the right to retain your personal data in our files located in the Philippines after 6 months from accomplishment of this form, unless you request your data to be deleted in our systems, databases, hardcopies immediately. Once deleted, your personal data will no longer be searchable or included in anonymous searches and will be completely removed from all the storage location. If Joy~Nostalg Group&nbsp;is required to retain any portion of your personal data for such purposes, it shall use reasonable efforts to limit such data to what is necessary to accomplish the particular purpose.</p>

                    <p class="p"><strong><strong>What if there are changes in our Privacy Policy?</strong></strong></p>

                    <p class="p">From time to time, it may be necessary for <strong><strong>Joy~Nostalg Group</strong></strong>&nbsp;to change this Privacy Policy. If we change our Privacy Policy, we will communicate to data subject the latest Privacy Policy and it will take effect immediately. Changes will not be retroactively applied and will not alter how we handle previously collected personal data without obtaining your consent, unless required by law.</p>

                    <p class="p"><strong><strong>How you can access, correct and update the personal data we have about you?</strong></strong></p>

                    <p class="p">To exercise your rights which include right to access, modify, erase and object to processing your personal data within a reasonable time after such request or should you have any inquiries, feedbacks on this Privacy Policy, and/or complaints to <strong><strong>Joy~Nostalg Group</strong></strong><strong><strong>,</strong></strong>&nbsp;and you may reach us through a written letter or through an email to our Data Protection Officer (DPO).</p>

                    <p class="p"><strong><strong>Our contact details:</strong></strong></p>

                    <p class="p">37/F Joy Nostalg Center ADB Avenue Ortigas Center, Pasig City<br>
                        eve.dpo@elanvital.com.ph<br>
                    (02) 8570-8888&nbsp;</p>

                    <p class="p">You may also lodge a complaint before the National Privacy Commission (NPC). For further details, please refer to NPC’s website: <strong><strong>https://privacy.gov.ph/mechanics-for-complaints/.</strong></strong></p>

                    <p class="p">Our decisions to provide such access or consider any request for correction, erasure and objection to process your personal data as it appears in our records are always subject to any exceptions under applicable and relevant laws and/or the DPA, its IRR and other issuances of NPC.</p>

                    <p class="p">To cover for the cost of verifying a request for information and locating, retrieving, reviewing and copying any material requested, we may charge you reasonable fees based on administrative costs.</p>

                    <p class="p">By sending your application,, you explicitly and unambiguously consent to the collection, processing and storage of your personal information by <strong><strong>Joy~Nostalg Group</strong></strong><strong><strong>,</strong></strong>&nbsp;for the purpose(s) described in the foregoing Privacy Policy, and that you have freely and voluntarily signed this Consent and fully understood the contents of the Privacy Policy. Further, you agree to hold <strong><strong>Joy~Nostalg Group</strong></strong><strong><strong>,</strong></strong>&nbsp;its directors, officers and employees, free and harmless from any liability, claim or damages of any nature, which may arise from its reliance on this Consent.</p>

                </div>
                <div class="modal-footer position-sticky" style="bottom: 0; background: #fff; z-index: 1050;">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="dpAgree()" disabled>I Agree</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
<footer>
    @include('components.footer');
</footer>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modalBody = document.querySelector('.modal-body');
        const agreeButton = document.querySelector('#dataPrivacyModal .modal-footer button');
        
        // Initially disable the button
        agreeButton.disabled = true;

        // Add scroll event listener to modal body
        document.addEventListener('scroll', function () {
            console.log(modalBody.scrollTop )
            if (modalBody.scrollTop + modalBody.clientHeight >= modalBody.scrollHeight) {
                agreeButton.disabled = false;

            }
        });
    });

    function dpAgree() {
        document.getElementById('dataprivacy').checked = true;
        document.getElementById('dataprivacy').disabled = false;
    }
    window.addEventListener('load', () => {
        const loadingPopup = document.getElementById('loading-popup');
        const contentContainer = document.getElementById('content-container');
        loadingPopup.classList.add('hidden');
        contentContainer.style.display = 'block';
    });
     document.getElementById("inquiryForm").addEventListener("submit", function() {
 
        document.getElementById("loading-popup").classList.remove('hidden');
    });
</script>


</html>

