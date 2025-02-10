<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Joy-Nostalg Group</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Load jQuery first -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        @media (max-width: 992px) {
            .video-size {
                height: 480px;
                width: 854px ;
            }
        }
        @media (max-width: 576px) {
            .video-size {
                height: 240px !important;
                width: 426px !important;
            }

        }
        .position-relative {
            position: relative;
        }

        .overlay-caption {
            position: absolute;
            top:10%;
            left: 50%;
            transform: translateX(-50%);
            background-color: transparent   ;
            color: white;
            height: 128px;
            width: 237px;
            padding-left: 5px;
        }
        .overlay-caption h1 {
            margin:0;
        }
        .overlay-caption p {
            font-size:68px;
            margin: 0;
        }
        .table {
            border-collapse: collapse;
            width: 100%;
        }
        .table td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .table th{
           background-color: #000000 !important; 
           color: white !important;
           text-align: center;
       }

       .pagination .page-link {
        font-size: 14px !important;
        padding: 5px 10px !important;
    }

    .pagination .page-item.active .page-link {
        background-color: #007bff !important; 
        border-color: #007bff !important; 
        color: white;
    }
</style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @include('components.loader')
    @include('components.navbar')
    @include('components.carousel')
    <div class="container mt-5">

        <div class="d-flex justify-content-center align-items-center" style="">
            <div class="embed-responsive embed-responsive-16by9 ">
                <iframe class="embed-responsive-item justify-content-center video-size" src="https://www.youtube.com/embed/K4TOrB7at0Y" allowfullscreen style="height: 720px; width:1280px "></iframe>.
            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="text-warning fw-bold  ">Be part of our mission.</h2>
        <p class="fs-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat.</p>
    </div>
    <div class="container">
        <form id="filter-form" class="mb-4 mt-3">
            <div class="row">
                <div class="col-md-3">
                    <label for="job_title" class="form-label">Job Title</label>
                    <div class="input-group">
                        <input type="text" id="job_title" name="job_title" class="form-control" placeholder="Search Job...">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="filter_dept" class="form-label">Department</label>
                    <select id="filter_dept" name="filter_dept" class="form-select">
                        <option value="all" selected>All</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="filter_location" class="form-label">Location</label>
                    <select id="filter_location" name="filter_location" class="form-select">
                        <option value="all" selected>All</option>
                        @php
                        $locations = collect($joblisting[0])->pluck('Location')->unique();
                        @endphp
                        @foreach($locations as $location)
                        <option value="{{ $location }}">{{ $location }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="filter_company" class="form-label">Group</label>
                    <select id="filter_company" name="filter_company" class="form-select">
                        <option value="all" selected>All</option>
                        @php
                        $groups = collect($joblisting[0])->pluck('Group')->unique();
                        @endphp
                        @foreach($groups as $group)
                        <option value="{{ $group }}">{{ $group }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-end">
                    <button type="submit" class="btn btn-warning">Search</button>
                </div>
            </div>
        </form>
        <div class="row mt-4 mb-4">

            <div id="job-listing-container">
              <div id="job-listing-loader" style="display: none; text-align: center; margin: 20px 0;">
                <div class="spinner-border text-warning" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            @include('components.tables.job-listing', ['joblisting' => $joblisting])
        </div>



    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
<footer>
    @include('components.footer')
</footer>
</html>
<script>

    window.addEventListener('load', () => {
        const loadingPopup = document.getElementById('loading-popup');
        const contentContainer = document.getElementById('content-container');
        loadingPopup.classList.add('hidden');
        contentContainer.style.display = 'block';
    });

    $('#filter-form').on('submit', function(event) {
        event.preventDefault();
        $('#job-listing-loader').show();

        const formData = $(this).serialize();

        $.ajax({
            url: '{{ url("/search/jobs") }}',
            type: 'GET',
            data: formData,
            success: function(response) {
                $('#job-listing-container').html(response);
            },
            error: function(xhr) {
                console.error('Error fetching job listings:', xhr);
                alert('An error occurred while fetching job listings.');
            },
            complete: function() {
                $('#job-listing-loader').hide();
            }
        });
    });
</script>


</body>
</html>
