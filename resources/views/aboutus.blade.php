<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Joy-Nostalg Group</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <style>
        @font-face {
            font-family: 'Gotham';
            src: url('/resources/fonts/GothamBook.woff2') format('woff2'),
                 url('/resources/fonts/GothamBook.woff') format('woff');
            font-weight: normal;
            font-style: normal;
}       
        body {
        /* background-image: linear-gradient(#ffeeb6, white);*/
        /* overflow-x: hidden;*/
            font-family: 'Roboto', sans-serif !important;
        }
        p{
           font-family: 'Gotham', sans-serif !important;
           text-align: justify;
       }
       h5{
           font-family: 'Gotham', sans-serif !important;
       }
#content-container{
    display: none;
}

.text-justify {
    text-align: justify;
}
/*        .container {
            display: flex;
            flex-wrap: wrap;
        }*/
        img {
            width: 100%;
            object-fit: scale-down;
        }

        @media (max-width: 576px) {
            #header-title-image {
                width: 100%!important;
                height: auto!important;
            }
            #header-title-paragraph {
                margin-top: 10px;
            }
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
<body class="font-sans antialiased dark:bg-black dark:text-white/50" id="content-container">
    @include('components.loader')
    @include('components.navbar')
    @include('components.carousel')
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h1 class="text-center text-warning fw-bold mt-4 mb-4 px-4">
                    We Home the Homeless, Power the Powerless, and Love the Loveless
                </h1>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 order-sm-1 order-md-2">
                <img id="header-title-image" src="{{asset('/img/Photos/what_we_do/What We Do 2.png')}}" alt="Dynamic Image">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 order-sm-2 order-md-1" style="margin-right:150px;">
                <p id="header-title-paragraph" class="fs-5 text-left">
                    Joy~Nostalg Group stands at the forefront of a diverse and expansive portfolio, exemplifying an unwavering commitment to innovation and social impact across various industries. Our hospitality sector is represented by Quantuvis Resources Corporation, who owns the Joy~Nostalg Hotel & Suites Manila. Additionally, ZKFX Culture Corporation, another key player in our group, operates The Empress Dining Palace, renowned for its exquisite Chinese culinary experiences. In the energy sector, we lead with initiatives from Palm Concepcion Power Corp. and Solaris, providing reliable energy solutions across the Philippines.
                </p>
                <p id="header-title-paragraph" class="fs-5 text-wrap text-left">
                    Our real estate ventures are robustly supported by developer arms Raemulan Lands Inc. and Rayvanes Realty Inc. Property management is handled by Enclavewrx Commune and construction management by Enclavewrx Fulcrum. Enclavewrx Digital, on the other hand, leads the development of technological solutions.
                </p><p id="header-title-paragraph" class="fs-5 text-wrap text-left">
                    At the heart of our mission, we remain steadfast in our commitment to home the homeless, power the powerless, and love the loveleast, driving sustainable development and fostering community upliftment with every initiative we undertake.
                </p>
            </div>
        </div>
    </div>

    <div class="container-category fs-5 text-white text-center mt-4 mb-5 fw-bold">
        @foreach($companyCategory as $index => $category)
        <span class="category-box category-item {{ $loop->first ? 'category-item-first active' : '' }} {{ $loop->last ? 'category-item-last' : '' }}" data-category="category-{{$index}}">
            {{$category}}
        </span>
        @endforeach
    </div>
    @foreach($companyCategory as $index => $category)
    <div id="category-{{$index}}" class="content-category mb-5 {{ $loop->first ? 'active' : '' }}" style="margin-top:120px">
        @if(View::exists("components.category.{$category}"))
        @include("components.category.{$category}")
        @endif
    </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onload = function() {
            const paragraph = document.getElementById('dynamic-paragraph');
            const image = document.getElementById('dynamic-image');
            if (paragraph && image) {
                image.style.height = `${paragraph.offsetHeight}px`;
            }
        };
        window.onresize = function() {
            const paragraph = document.getElementById('dynamic-paragraph');
            const image = document.getElementById('dynamic-image');
            if (paragraph && image) {
                image.style.height = `${paragraph.offsetHeight}px`;
            }
        };
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
            console.log(contentContainer);
            loadingPopup.classList.add('hidden');
            contentContainer.style.display = 'block';
        });
    </script>
    
</body>
<footer>
   @include('components.footer')
</footer>

</html>
