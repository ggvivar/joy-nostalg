<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Joy-Nostalg Group</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
       body {
/*        background-image: linear-gradient(#ffeeb6, white);*/
    }

    .position-relative {
        position: relative;
    }

    .overlay-box-main {
        position: relative;
        bottom: 0px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #211F60;
        color: white;
        width: 347px !important;
        padding-left: 5px;
    }

    .overlay-box-main h4, 
    .overlay-box-main p {
        margin: 0;
        font-size: 1rem;
    }

    .overlay-box-sub {
        position: relative;
        bottom: 0px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #211F60;
        color: white;
        width: 256px !important;
        padding-left: 5px;
    }

    .overlay-box-sub h4, 
    .overlay-box-sub p {
        margin: 0;
        font-size: 1rem;
    }
    .text-justify {
        text-align: justify;
    }
    .image-box-container {
        margin-left: 40%;
        position: relative;
        display: inline-block; /* Adjust as needed */
/*            overflow: hidden;*/

}

.overlay-box {
    height: 300px;
    position: absolute;
    top: 50%;
/*    left:20%;*/
transform: translate(-90%, -50%);
background-color: #211F60ff; 
color: white;
padding: 20px;
border-radius: 8px;
width: 600px;
}
.overlay-box button {
    border-radius: 16px;
    border-color: white ;
    background-color: transparent;
    color: white;
    width: 150px;
}

.img-leader{

    object-fit: scale-down;
}

</style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @include('components.loader')
    @include('components.navbar')
    <!-- Content Section -->
    <div class="container">
        <div class="container">
            <div class="row mt-4">
                <h1 class=" fw-bold d-flex justify-content-center mt-3 mb-3" style="color:#211F60;">Our Leaders</h1>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4 position-relative">
                    <img style="height:462px;width:347px;" class="d-block mx-auto img-leader img-fluid" src="/img/Photos/who_we_are/EXECUTIVES/Jack Ng.png" alt="jn_leadership_geo">
                    <div class="overlay-box-main col-sm-12 col-md-6 col-lg-12">
                        <h3 class="text-white fw-bold ">Jacinto Ng, Jr.</h3>
                        <p>Group Executive Officer</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-8 mb-4 ">
                    <p class="d-flex flex-wrap">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="d-flex flex-wrap">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="d-flex flex-wrap">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="d-flex flex-wrap">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            @foreach($leaders as $leader)
            <div class="row mt-4">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4 position-relative">
                    <img style="height:462px;width:347px;" class="d-block mx-auto img-leader" src="{{ $leader['image'] }}" alt="jn_leadership_{{$loop->index}}">
                    <div class="overlay-box-main col-sm-12 col-md-6 col-lg-12">
                        <h3 class="text-white fw-bold ">{{ $leader['name'] }}</h3>
                        <p>{{ $leader['title'] }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-8 mb-4 ">
                   <p class="d-flex flex-wrap">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="d-flex flex-wrap">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="d-flex flex-wrap">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="d-flex flex-wrap">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>
        @endforeach
    </div>
    <hr/>
</div>>
</body>
<footer>
    @include('components.footer')
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", () => {
        const yearElements = document.querySelectorAll(".fs-4");
        yearElements.forEach((year) => {
            year.addEventListener("click", () => {
                yearElements.forEach((el) => el.classList.remove("highlight-milestone"));
                year.classList.add("highlight-milestone");
            });
        });
    });

    document.querySelectorAll('.award-year').forEach(year => {
        year.addEventListener('click', function () {
            document.querySelectorAll('.award-year').forEach(y => y.classList.remove('active'));
            this.classList.add('active');
        });
    });
    window.addEventListener('load', () => {
        const loadingPopup = document.getElementById('loading-popup');
        const contentContainer = document.getElementById('content-container');
        loadingPopup.classList.add('hidden');
        contentContainer.style.display = 'block';
    });
</script>
</html>
