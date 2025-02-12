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
        .content-list {
            display: flex;
            flex-direction: column;
            height: auto;
        }

        .content-list-scroll {
            overflow-y: auto;
            max-height: 100%; /* Will be set dynamically */
            padding-right: 10px; /* Prevent scrollbar from touching the edge */
        }

        /* Optional: Custom scrollbar */
        .content-list-scroll::-webkit-scrollbar {
            width: 6px;
        }

        .content-list-scroll::-webkit-scrollbar-thumb {
            background-color: #aaa;
            border-radius: 4px;
        }

        .content-list-scroll::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }

        .share-btn {
            border-radius: 15px;
            width: 150px !important;
            margin-left: auto; /* Aligns button to the end of the line */
        }
    </style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @include('components.loader')
    @include('components.navbar')
    
    <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
        <h1 class="fw-bold text-warning">Joy~Nostalg News</h1>
    </div>
    
    <div class="container mt-3">
        <div class="row d-flex">
            <h1 class="col-lg-9">{{$content['title']}}</h1>
            <div class="content-news col-lg-9">
                <img style="object-fit: scale-down; width: 100%" src="{{$content['img_url']}}">
                <div class="mt-3 d-flex">
                    <span class="fs-6">{{$content['date']}}</span>
                    <button class="share-btn col text-end float-end" id="share-btn"><span><i class="bi bi-box-arrow-up-right"></i>Share</span></button>
                </div>
                <p class="fs-4">{{$content['content']}}</p>
            </div>

            <div class="content-list col-lg-3">
                <h5 class="fs-3">Recent {{$contentType}}</h5>
                <div class="content-list-scroll">
                    @foreach($contents as $index => $contentitem)
                        <a class="fs-4 {{ ($content['id'] == $contentitem['id']) ? 'fw-bold' : '' }}" href="/view/content/news/{{$contentitem['id']}}">{{$contentitem['title']}}</a>
                        <span>{{$contentitem['date']}}</span>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        @include('components.footer');
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('load', () => {
            const contentNews = document.querySelector('.content-news');
            const contentList = document.querySelector('.content-list');
            const contentListScroll = document.querySelector('.content-list-scroll');
            
            if (contentNews && contentListScroll) {
                let newHeight = contentNews.clientHeight + "px";
                contentList.style.height = newHeight;
                contentListScroll.style.maxHeight = newHeight;
            }
        });
    </script>
</body>
</html>
