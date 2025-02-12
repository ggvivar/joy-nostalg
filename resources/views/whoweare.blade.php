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
            display: none;
        }
        p{
           font-family: 'Gotham', sans-serif !important;
/*           text-align: justify;*/
       }
       h5{
           font-family: 'Gotham', sans-serif !important;
       }
.active-milestone {
    font-weight: bold !important;
    background-color: yellow !important;\
    background-size: 200px !important;
    border-radius: 20px;
    padding-left: 15px !important;
    padding-right: 15px !important;
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
    width: 400px !important;
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
    display: inline-block;
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
/* Box container styling */
.award-year-box {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 300px;
    height:50px!important;
    padding: 15px;
    border: 2px solid #ddd;
    border-radius: 12px;
    background-color: #FCC737;
    margin: 20px auto; /* Center the box */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.award-year-container {
    display: flex;
    gap: 10px;
}
.award-year {
    cursor: pointer;
    padding: 5px 10px;
    border: 1px solid transparent;
    border-radius: 4px;
    transition: background-color 0.3s, border-color 0.3s;
}

.award-year:hover {
    background-color: #f0f0f0;
}

.award-year.active {
    background-color: #211F60ff;
    color: #fff;
    border-color: #0056b3;
}

</style>

@include('components.loader')
@include('components.navbar')
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
   
    @include('components.carousel')
    <!-- Content Section -->
    <div class="container">
        <h1 class=" text-warning mt-4">The Joy~Nostalg Group</h1>
        <div class="d-flex justify-content-center align-items-center  w-100">
            <div class="embed-responsive embed-responsive-16by9" style="height: auto; width:100% ">
                <iframe class="embed-responsive-item justify-content-center" src="https://www.youtube.com/embed/bwEWmVuyShg?autoplay=1" frameborder="0" allow="accelerometer; autoplay;"></iframe>

            </div>
        </div>


        <div class="d-flex justify-content-center align-items-center text-center mx-5" style="height: 300px;">
            <div>
                <h1 class="fw-bold" style="color:#213555">About Joy~Nostalg</h1>
                <h5 class="text-justify">Joy~Nostalg operates as a spiritually-centered, socially-missioned enterprise that transcends traditional business models by integrating deep-rooted Christian values—referred to as CHRISTUDE values—into every facet of its operations. Founded on principles such as Commitment, Happiness, Responsibility, Integrity, Simplicity, Tenacity, Unity, Dynamism, and Excellence, Joy~Nostalg strives to enrich communities and empower families. Our mission is deeply intertwined with our core identity, driving us to create and cater moments of happiness that evolve into lasting memories of hope. We are dedicated to serving and uplifting those in need—home the homeless, power the powerless, and love the loveleast—through innovative solutions that span housing, community building, and social engagement, reflecting our commitment to sparking joy that endures, thereby embodying our motto: “Spark Joy Morever.”</h5>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 mb-4">
                    <img style="height:70px;width:70; float:right;" class="d-block align-items-right mh-100 mx-5" src="https://media.licdn.com/dms/image/v2/C5112AQFRm8EEuoZA5A/article-cover_image-shrink_600_2000/article-cover_image-shrink_600_2000/0/1520134955856?e=2147483647&v=beta&t=U7z9V-pZw4JclYIa8ngD6Buxij04tIhCd36k4MvbL6c" alt="jn_mission">
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 mb-4">
                    <h4 id="mission" class="d-inline fw-bold">Joy~Nostalg</h4><h4 class="d-inline fw-bold"
                    style="color:#E87C0C;"> Mission</h4>
                    <p>To home the homeless, power the poweless and love the loveleast.</p>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 mb-4">
                    <img style="height:70px;width:70; float:right;" class="d-block mh-100 mx-5" src="https://media.licdn.com/dms/image/v2/C5112AQFRm8EEuoZA5A/article-cover_image-shrink_600_2000/article-cover_image-shrink_600_2000/0/1520134955856?e=2147483647&v=beta&t=U7z9V-pZw4JclYIa8ngD6Buxij04tIhCd36k4MvbL6c" alt="jn_mission">
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 mb-4">
                    <h4 id="christude" class="d-inline fw-bold ">Joy~Nostalg</h4><h4 class=" d-inline fw-bold" style="color:#E87C0C;"> CHRISTUDE Values</h4>
                    <p>CHRISTUDE Values are the core principles and standards upon which Joy~Nostalg was founded and shall be guided by in engaging its Mission and realizing its Vision.</p>
                    @foreach($christude as $values)
                    <div class="mb-3 mt-2">
                        <p class = "d-inline fw-bold fs-5" style="color:#E87C0C;">{{$values['Value']}}</p><p class = "d-inline fs-5"> {{$values['Description']}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4">
                <h1 id="leadership" class="fw-bold" style="color:#211F60;">Leadership</h1>
                <hr class="text-warning fw-bold" style="height:5px;"/> 
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4 position-relative">
                    <img style="height:533px;width:400px;" class="d-block mx-auto" src="/img/Photos/who_we_are/EXECUTIVES/Jack Ng.png" alt="jn_leadership_geo">
                    <div class="overlay-box-main col-sm-12 col-md-6 col-lg-12">
                        <h3 class="text-white fw-bold ">Jacinto C. Ng, Jr.</h3>
                        <p style="margin-top:-10px">Group Executive Officer</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-8 mb-4">
                    <h4>Profile</h4>
                    <p class="d-flex flex-wrap">
                       Mr. Jacinto C. Ng, Jr. is the Group Executive Officer of Joy~Nostalg, a spiritually centered, socially-missioned business platform enterprise with a mission to Home the Homeless, Power the Powerless and Love the Loveleast with its core CHRISTUDE values.
                    </p>
                    <p class="d-flex flex-wrap">
                        Mr. Ng’s leadership at Joy~Nostalg reflects his dedication to creating a harmonious balance between economic growth and social responsibility.
                    </p>
                    <p class="d-flex flex-wrap">
                        Mr. Ng was awarded EY Entrepreneur of the Year Philippines in 2024 for his transformative innovation, entrepreneurial spirit, and commitment to uplift the lives of his fellow Filipinos.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <h4 class=" fw-bold" style="color:#211F60;">EXECUTIVES</h4>
            <div class="row mt-4 mb-4">
                @foreach($leaders as $leader)
                <div class="col-sm-12 col-md-6 col-lg-3 mb-4 mt-4 position-relative">
                    <img style="height:335px;width:256px;object-fit: cover;" class="d-block mx-auto" src="{{ $leader['image'] }}" alt="{{ $leader['name'] }}">
                    <div class="overlay-box-sub">
                        <h4 class="text-white fw-bold">{{ $leader['name'] }}</h4>
                        <p class="text-light"style="font-size:0.75rem;">{{ $leader['title'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <hr/>
        <div class="container">
            <div class="row mt-4">
                <h1 id="milestones" class=" fw-bold" style="color:#211F60;">History & Milestones</h1>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 mb-4 text-center">
                                <!--change to dynamic once CMS is Live-->
                                <p class="milestone-year fs-4">2007</p>
                                <p class="milestone-year fs-4">2008</p>
                                <p class="milestone-year fs-4">2009</p>
                                <p class="milestone-year fs-4">2010</p>
                                <p class="milestone-year fs-4">2011</p>
                                <p class="milestone-year fs-4">2012</p>
                                <p class="milestone-year fs-4">2013</p>
                                <p class="milestone-year fs-4">2014</p>
                                <p class="milestone-year fs-4">2015</p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 mb-4 text-center">
                                <p class="milestone-year fs-4 px-5">2016</p>
                                <p class="milestone-year fs-4 px-5 active-milestone">2017</p>
                                <p class="milestone-year fs-4 px-5">2018</p>
                                <p class="milestone-year fs-4 px-5">2019</p>
                                <p class="milestone-year fs-4 px-5">2020</p>
                                <p class="milestone-year fs-4 px-5">2021</p>
                                <p class="milestone-year fs-4 px-5">2022</p>
                                <p class="milestone-year fs-4 px-5">2023</p>
                                <p class="milestone-year fs-4 px-5">2024</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-8 mb-4">
                     @include('components.carousel-content')
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="container">
    <div class="row mt-4">
        <h1 id="awards" class=" fw-bold" style="color:#211F60;">Awards and Recognitions</h1>
        <div class="text-left mb-4">

            <div class="image-box-container">
                <img style="width:800px;height:auto;float:right!important" class="d-block mh-100 w-100 background-image" src="{{ $awards[0]['img_url'] }}">
                <div class="overlay-box">
                    <h3>{{ $awards[0]['title'] }}</h3>
                    <h5>{{ $awards[0]['date'] }}</h5>
                    <p class="text-justify">{{ $awards[0]['content'] }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="award-year-container fs-1 text-center">
        <span class="award-year award-year-box active">2024</span>
        <span class="award-year award-year-box" disabled>2023</span>
        <span class="award-year award-year-box">2022</span>
        <span class="award-year award-year-box">2021</span>
        <span class="award-year award-year-box">2020</span>
    </div>
</div>
</body>
<footer>
    @include('components.footer')
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    // document.addEventListener("DOMContentLoaded", () => {
    //     const yearElements = document.querySelectorAll(".fs-4");
    //     yearElements.forEach((year) => {
    //         year.addEventListener("click", () => {
    //             yearElements.forEach((el) => el.classList.remove("highlight-milestone"));
    //             year.classList.add("highlight-milestone");
    //         });
    //     });
    // });
    document.querySelectorAll('.milestone-year').forEach(year => {
        year.addEventListener('click', function () {
            document.querySelectorAll('.milestone-year').forEach(y => y.classList.remove('active-milestone'));
            this.classList.add('active-milestone');
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
        document.body.style.display = "block";
        contentContainer.style.display = 'block';
    });
</script>
</html>
