<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Joy-Nostalg Group</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50 custom-bg" >
    @include('components.loader')
    @include('components.navbar')
    @include('components.carousel')
    <div class="container mt-4">
        <div class="text-left mb-4">
            <h1 class="text-warning" style="font-weight: bold;">OUR COMPANIES</h2>
                <h4 class="text-justify"><b>Joy~Nostalg</b> is a Spiritually-Centered, Socially-Missioned Business Platform Enterprise dedicated to Home the Homeless, Power the Powerless and Love the Loveleast.</h5>
                </div>
                <div class="row">
                    @foreach($companydetails as $company)
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                        <img style="height:auto;width:258px " class="d-block mh-100 w-100" src="{{ $company['img_url'] }}" alt="{{ $company['companyName'] }}">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-8 mb-4">
                        <h3 class='fw-bold'>{{ $company['companyName'] }}</h3>
                        <p class="text-justify fs-5">{{ $company['companyDescription'] }}</p>
                        <a class="text-warning"  href="{{ $company['companyWebsite'] }}" target="_blank">
                            View more <i class="bi bi-arrow-up-right text-warning"></i>
                        </a>
                    </div>
                    @endforeach
                </div>

                <div class="text-left mb-4">
                    <h1 class="text-warning fw-bold">Joy~Nostalg Foundation</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                            <img style="height:250px;width:auto" class="d-block mh-100 w-100" src="{{ asset('img/Photos/homepage/Home 7.png') }}" alt="{{ $company['companyName'] }}">
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-8 mb-4">
                            <h3 class="fw-bold">Transforming the Lives of Filipinos</h3>
                            <p class="text-justify fs-5">Joy~Nostalg Foundation helps transform the lives of Filipinos through HOMEFUL and sustainable communities.</p>
                            <a class="text-warning href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjADWPSS_au7pPHnU1yJ_wli5xApSW0wc2rg&s" target="_blank">
                                View more <i class="bi bi-arrow-up-right text-warning"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="text-left mb-4">
                    <h1 class="text-warning fw-bold">Latest Articles</h1>
                    <h5>Explore our insights and updates—stay informed with the latest news and stories from Joy~Nostalg</h5>
                    <div class="image-box-container mt-3">
                        <img style="width:800px;height:auto;float:right!important" class="d-block mh-100 w-100 background-image" src="{{ $articles[0]['img_url'] }}">
                        <div class="overlay-box">
                            <h3>{{ $articles[0]['title'] }}</h3>
                            <h5>{{ $articles[0]['date'] }}</h5>
                            <p class="text-justify">{{ $articles[0]['content'] }}</p>
                            <button style="align-self: flex-end !important;" onclick="window.location='{{ url("/view/article/".$articles[0]["id"]) }}'">Read More</button>
                        </div>
                    </div>
                </div>

                <div class="container d-flex justify-content-center align-items-center mb-4">
                    <div class="row text-center justify-content-center" style="color: #213555;">
                        <!-- TALK TO US Section -->
                        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                            <div class="position-relative mx-auto" style="width: 8rem; height: 8rem;">
                                <i class="bi bi-telephone" style="font-size: 7rem; position: absolute; bottom: -80px; left: -5px;"></i>
                                <i class="bi bi-envelope" style="font-size: 6rem; position: absolute; right: -30px;"></i>
                            </div>
                            <div class="mt-5">
                                <h1 class="d-block fw-bold">TALK TO US</h1>
                                <p>Got a question or feedback? Reach out to us—we’re eager to hear your thoughts and help in any way we can.</p>
                                <a class="btn text-white mx-auto d-block" style="background-color: #211F60; border-radius: 20px; width: 150px;" href="/contact-us" role="button">CONTACT US</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                           <div class="position-relative mx-auto" style="width: 8rem; height: 8rem;">
                            <i class="bi bi-briefcase" style="font-size: 9rem;"></i>
                        </div>
                        <div class="mt-5">
                            <h1 class="fw-bold">JOIN US</h1>
                            <p>Ready to make a difference? Join the Joy~Nostalg family and help us shape a better tomorrow!</p>
                            <a class="btn text-white mx-auto d-block" style="background-color: #211F60; border-radius: 20px; width: 150px;" href="/join-us" role="button">JOIN US</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
    <footer>
@include('components.footer')
    </footer>
    <style>
        @font-face {
            font-family: 'Gotham';
            src: url('/resources/fonts/GothamBook.woff2') format('woff2'),
                 url('/resources/fonts/GothamBook.woff') format('woff');
            font-weight: normal;
            font-style: normal;
}       
        body{
/*            overflow-x: hidden;*/
            font-family: 'Roboto', sans-serif !important;
            margin-left: 100px;
            margin-right: 130px;
/*            width: 1366px;*/

        }
        p{
           font-family: 'Gotham', sans-serif !important;
                      text-align: justify;
       }
       * {
        box-sizing: border-box;
    }
    .text-justify {
        text-align: justify;
    }
    .image-box-container {
        margin-left: 30%;
        position: relative;
        display: inline-block; /* Adjust as needed */
    }

    .overlay-box {

        position: absolute;
        top: 50%;
        left:-10%;
        transform: translate(-50%, -50%);
        background-color: rgb(33,31,96, 90%); 
        color: white;
        padding: 20px;
        border-radius: 8px;
        height: 350px;
        width: 600px;
    }
    .overlay-box button {
        border-radius: 16px;
        border-color: white ;
        background-color: transparent;
        color: white;
        width: 150px;
    }

    .custom-bg{
/*            background-image: linear-gradient(#ffeeb6, white)!important;*/

    @media (max-width: 576px) {
    .image-box-container {
        margin-left: 0px;
        position: static;
        display: inline; /* Adjust as needed */
/*        overflow: hidden;*/
    }
    .image-box-container img{
                float:none!important
    }
    .overlay-box {
        height: 300px;
        position: static;
        top: 50%;
        left:20%;
        transform: translate(0,0);
        background-color: #211F60ff; 
        color: white;
        padding: 20px;
        border-radius: 8px 8px;
        width: 100%;

    }
    .overlay-box button {
        border-radius: 16px;
        border-color: white ;
        background-color: transparent;
        color: white;
        width: 150px;
    }
        }
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const sleep = (ms) => new Promise((resolve) => setTimeout(resolve, ms));
    window.addEventListener('load', async () => {
        const loadingPopup = document.getElementById('loading-popup');
        const contentContainer = document.getElementById('content-container');
        // await sleep(3000);//to test loader img only remove on prod
        loadingPopup.classList.add('hidden');
        contentContainer.style.display = 'block';
    });
</script>
</html>
