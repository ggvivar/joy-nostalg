<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    .form-check-input{
        border-width:10px ;
    }
    .modal-dialog {
    max-height: 90vh; /* Limit modal height */
    overflow-y: auto; /* Enable vertical scrolling */
    }
    .modal-content {
        max-height: 90vh; /* Constrain content height */
        overflow-y: auto; /* Enable scrolling within modal */
    }
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Joy-Nostalg Group</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @include('components.loader')
    @include('components.navbar')
    <!-- Content Section -->
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="d-flex fw-bold text-warning justify-content-center mt-3 mb-3">Careers</h1>
            @if(session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             {{ session('success') }}
            </div> 
            @endif
            @if(session('error'))
            <div class="alert alert-danger">
            {{ session('error') }}
            </div>
            @endif
        </div>
    <div class="col-lg-12 shadow mb-3 pt-3">
        <h3 class="fw-bold">{{$jobDescription['Job_Title']}}</h3>
        <p>Property Development</p>
        <span class="fs-6 text-end">{{$jobDescription['Job_Posted']}}</span>
        <p class="fs-4">{{$jobDescription['Group']}}</p>
    </div>
    <div class="col-lg-8 shadow mb-3 pt-3">
    <h4>Job Description</h4>
        <!-- <p class="fs-3">{{$jobDescription['Group']}}</p> -->
    <h4>Requirement</h4>
    <!-- <p class="fs-3">{{$jobDescription['Group']}}</p> -->
   <button type="button" class="btn btn-primary mb-3 mt-3 text-end" data-bs-toggle="modal" data-bs-target="#applicationModal">Apply Now</button> 
    <div class="modal fade" id="applicationModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="applyModalLabel">Apply for {{$jobDescription['Job_Title']}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="jobForm" action="{{ route('form.job.submit') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input hidden type="text" name="title" value="{{$jobDescription['Job_Title']}}">
                        <input hidden type="text" name="group" value="{{$jobDescription['Group']}}">
                        <div class="mb-3">
                            <label for="applicantName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="applicantName" name="applicantName" required>
                        </div>
                        <div class="mb-3">
                            <label for="applicantEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="applicantEmail" name="applicantEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="applicantContact" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="applicantContact" name="applicantContact" required>
                        </div>
                        <div class="mb-3">
                            <label for="CV" class="form-label">Upload Resume/CV</label>
                            <input type="file" class="form-control" id="CV" name="CV" required>
                        </div>
                        <div>
                            <p><input type="checkbox" id="concent-cv" name="concent-cv" required> Please be informed that by submitting your curricula vitae (and other documents related to an application for employment), you consent to the processing of your personal information by any of the companies under the Joy-Nostalg Group ("JNG" or "JNG Companies") for purposes of evaluating your qualifications for the desired position. Kindly confirm if you grant your consent.</p>   
                        </div>
                        <div>
                            <p><input type="checkbox" id="concent-qualification" name="concent-qualification" required> The JNG Companies have interactions with other businesses for which your qualifications and skills may be relevant. Please confirm that you consent to JNG’s forwarding your submitted documents and the processing of your personal information by said companies for the purpose of evaluating your prospective employment. For this purpose, we will retain your application documents for six months counted from the date of your submission of the same.</p>
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-4 shadow mb-3 pt-3">
    <h5>RELATED JOBS</h5>
    <p>No Jobs Found</p>
    </div>
    </div>
    </div>
    

</body>
<footer>
    @include('components.footer');
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
            window.addEventListener('load', () => {
            const loadingPopup = document.getElementById('loading-popup');
            const contentContainer = document.getElementById('content-container');
            loadingPopup.classList.add('hidden');
            contentContainer.style.display = 'block';
        });
</script>
</html>

