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
/*            background-image: linear-gradient(#ffeeb6, white);*/
        }

        .container-category {
            display: flex;
            background-color: gray;
            border-radius: 50px;
            margin-left: 20px;
            margin-right: 20px;
        }
        .category-box {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px;
            padding: 15px;
            margin: 0 auto; /* Center the box */
        }
        .category-item-first {
            border-top-left-radius: 50px!important;
            border-bottom-left-radius: 50px!important;
        }
        .category-item-last {
            border-top-right-radius: 50px!important;
            border-bottom-right-radius: 50px!important;
        }
        .category-item {
            cursor: pointer;
            padding: 5px 10px;
            border: 1px solid transparent;
            border-radius: 50px;
        }

        .category-item.active {
            background-color: #FCC737;
            color: #000;
        }
        .content-category {
            display: none;
        }
        .content-category.active {
            display: block;
        }
    </style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50" >
@include('components.loader')
 @include('components.navbar')
 @include('components.carousel')
 <div class="container d-block">
    <h1 class="fw-bold mt-3 text-warning">All News</h1>

    <div class="row">
        <div class="col-sm-6 col-md-8 col-lg-8">
            <span class="fs-5">Stay up-to-date on the latest news from the Joy~Nostalg Group</span>
        </div>
    </div>
<div class="row mt-3 px-3">
    <div class="col text-end">
        <button type="button" id="toggle-filter" class="btn btn-warning">
            <i class="bi bi-filter"></i>
        </button>
    </div>
</div>
    <form id="filter-form" class="mb-4 mt-3" style="display: none;">

        <div class="row">
            <div class="col-md-4">
                <label for="start_date" class="form-label">Date From</label>
                <input type="date" id="start_date" name="start_date" class="form-control" value="{{ request('start_date') }}">
            </div>
            <div class="col-md-4">
                <label for="end_date" class="form-label">Date To</label>
                <input type="date" id="end_date" name="end_date" class="form-control" value="{{ request('end_date') }}">
            </div>
            <div class="col-md-4">
                <label for="sort" class="form-label">Sort by Group</label>
                <select id="sort" name="sort" class="form-select">
                 <option value="all" selected>All</option>
                 @foreach($companydetails as $index => $company)
                 <option value="{{$company['companyName']}}">{{$company['companyName']}}</option>
                 @endforeach
             </select>
         </div>
     </div>
     <div class="row mt-3">
        <div class="col text-end">
            <button type="submit" class="btn btn-warning">Apply</button>
        </div>
    </div>
</form>

<div class="row news-container mt-3">
    @foreach($newscontents as $index => $news)
    <div id="news-{{$index}}" class="col-sm-12 col-md-4 col-lg-4 px-3">
        <img id="news-image" style="height: 220px;width: auto;" src="{{ $news['img_url'] }}">
        <p class="fw-bold">{{$news['date']}}</p>
        <p class="fs-4 fw-bold">{{$news['title']}}</p>
        <p class="fs-6">{{$news['content']}}</p>
        <p class="fs-6 invisible">{{$news['rank']}}</p>
        <a class="fs-6" href="/view/content/news/{{$news['id']}}" target="_blank"><p class="text-end">READ MORE<i class="bi bi-arrow-up-right"></i></p></a>
    </div>
    @endforeach
</div>
<hr class="fw-bold text-warning"/>
</div>
<div class="container d-block">
    <h1 class="fw-bold mt-3 text-warning">Joy Stories</h1>

    <div class="row">
        <div class="col-sm-6 col-md-8 col-lg-8">
            <span class="fs-5">Stories of hope from our beneficiaries, employees and partners</span>
        </div>
    </div>
    <form id="filter-form" class="mb-4 mt-3" >
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-end">
                <label for="sort" class="form-label">Filter By Year</label>
                <select id="sort" name="sort" class="form-select text-end" style="width: 100px;">
                 <option value="all" selected>All</option>
                 <option value="2025" >2025</option>
                 <option value="2024" >2024</option>
                 <option value="2023" >2023</option>
                 <option value="2022" >2022</option>
                 <option value="2021" >2021</option>
                 <option value="2020" >2020</option>
                 <option value="2019" >2019</option>
                 <option value="2018" >2018</option>
                 <option value="2017" >2017</option>
                 <option value="2016" >2016</option>

             </select>
         </div>
     </div>
     <div class="row mt-3">
        <div class="col text-end">
            <button type="submit" class="btn btn-warning">Apply Filter</button>
        </div>
    </div>
</form>

<div class="row news-container">
    @foreach($storiescontents as $index => $story)
    <div id="news-{{$index}}" class="col-sm-12 col-md-4 col-lg-4 px-3">
        <img id="news-image" style="height: 220px;width: auto;" src="{{ $story['img_url'] }}">
        <p class="fw-bold">{{$story['date']}}</p>
        <p class="fs-4 fw-bold">{{$story['title']}}</p>
        <p class="fs-6">{{$story['content']}}</p>
        <a class="fs-6" href="/news/{{$news['id']}}" target="_blank"><p class="text-end">READ MORE<i class="bi bi-arrow-up-right"></i></p></a>
    </div>
    @endforeach
</div>
<hr class="fw-bold text-warning"/>
</div>
<div class="container d-block">
    <h1 class="fw-bold mt-3 text-warning">Nostalgic Videos</h1>

    
    <div class="row mt-3">
        <div class="col text-end">
            <a class="fs-5 fw-bold text-end" href="https://youtube.com">VIEW ALL VIDEOS</a>
        </div>
    </div>
</form>
<hr/>
    <div class="container-category fs-5 text-white text-center mt-4 mb-4 fw-bold">
            <span class="category-box category-item category-item-first active">
                CULTURE VIDEOS
            </span>
            <span class="category-box category-item category-item-first ">
                PROJECT VIDEOS
            </span>
                        <span class="category-box category-item category-item-first ">
                TEAM STORIES
            </span>
            <span class="category-box category-item category-item-first ">
                BENEFICIARY STORIES
            </span>
            <span class="category-box category-item category-item-last">
                AWARDS
            </span>
    </div>
<div class="row news-container">
    @foreach($videocontents as $index => $video)
    <div id="videos-{{$index}}" class="col-sm-12 col-md-4 col-lg-4 px-3">
        <iframe width=auto height=220px src="{{$video['url']}}" frameborder="0" allowfullscreen name="iframe_{{$video['id']}}"></iframe>
        <a href="{{$video['url']}}" style="height: 220px;width: auto; target="iframe_{{$video['id']}}">
            <!-- <img src="{{$video['url']}}"/> -->
        </a>
            <p class="fw-bold">{{$video['date']}}</p>
            <p class="fs-4 fw-bold">{{$video['title']}}</p>
            <p class="fs-6">{{$news['content']}}</p>
            <p class="fs-6 invisible">{{$news['rank']}}</p>
            <a class="fs-6" href="/news/{{$news['id']}}" target="_blank"><p class="text-end">READ MORE<i class="bi bi-arrow-up-right"></i></p></a>
        </div>
        @endforeach
    </div>
</div>
<div class="container mb-4 mt-5">
    <div class="row">
        <div class ="col-sm-6 col-md-4 col-lg-4">
        <img id="news-image" style="height: 220px;width: auto;" src="{{ asset('/img/Photos/what_s_new/What_s New 11.png') }}">
        </div>
        <div class ="col-sm-6 col-md-8 col-lg-8">
            <h1 class="text-warning fw-bold">Follow us on Social Media</h1>
            <p class="fs-6">Follow us on our social media platforms to get the latest updates about us.</p>
            <span class="fs-4 fw-bold">Joy~Nostalg Group:</span>
               <div class="d-flex">
                <a class="" style="margin: 0 10px; text-decoration: none;" href="">
                  <i class="bi bi-facebook fs-3">Joy~Nostalg</i>
                </a>
                <a class="" style="margin: 0 10px; text-decoration: none;" href="">
                  <i class="bi bi-instagram fs-3">@joynostalg</i>
                </a></div><br>
                <a class="" style="margin: 0 10px; text-decoration: none;" href="">
                  <i class="bi bi-linkedin fs-3">Joy~Nostalg Official</i>
                </a>
                <a class="" style="margin: 0 10px; text-decoration: none;" href="">
                  <i class="bi bi-youtube fs-3">Joy-Nostalg</i>
                </a>
               </div>
      </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // $(document).ready(function () {
    //     $('#filter-form').on('submit', function (e) {
    //         e.preventDefault();
    //         $.ajax({
    //             url: '{{ url("/news/search") }}',
    //             method: 'GET',
    //             data: $(this).serialize(),
    //             success: function (response) {
    //                 $('.news-container').html($(response).find('.news-container').html());
    //             },
    //             error: function () {
    //                 alert('Failed to load news. Please try again.');
    //             }
    //         });
    //     });
    // });
     document.querySelectorAll('.category-item').forEach(category => {
                category.addEventListener('click', function () {
                document.querySelectorAll('.category-item').forEach(x => x.classList.remove('active'));
                this.classList.add('active');

                const categoryId = this.getAttribute('data-category');
                document.querySelectorAll('.content-category').forEach(content => {
                    content.classList.remove('active');
                });
                document.getElementById(categoryId).classList.add('active');
            });
        });
                 window.addEventListener('load', () => {
            const loadingPopup = document.getElementById('loading-popup');
            const contentContainer = document.getElementById('content-container');
            loadingPopup.classList.add('hidden');
            // contentContainer.style.display = 'block';
        });
$(document).ready(function () {
    $('#toggle-filter').on('click', function () {
        $('#filter-form').slideToggle(); // Toggles the visibility of the form with animation
    });

    $('#filter-form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: '{{ url("/news/search") }}',
            method: 'GET',
            data: $(this).serialize(),
            success: function (response) {
                $('.news-container').html($(response).find('.news-container').html());
            },
            error: function () {
                alert('Failed to load news. Please try again.');
            }
        });
    });
});


</script>
</body>
<footer>
    @include('components.footer')
</footer>
</html>
