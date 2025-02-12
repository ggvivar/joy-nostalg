<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Joy-Nostalg Group</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .content-list {
            display: flex;
            flex-direction: column;
            height: auto;
        }

        .content-list-scroll {
            overflow-y: auto;
            max-height: 100%;
            padding-right: 10px;
        }

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
            margin-left: auto;
            cursor: pointer;
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
                <div class="mt-3 d-flex align-items-center">
                    <span class="fs-6">{{$content['date']}}</span>
                    <button class="share-btn btn btn-warning text-white ms-auto" id="share-btn" data-bs-toggle="modal" data-bs-target="#shareModal">
                        <i class="bi bi-box-arrow-up-right"></i> Share
                    </button>
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
    
    <!-- Social Media Share Modal -->
    <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shareModalLabel">Share this article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Share this news with your friends:</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a id="facebook-share" href="#" class="btn btn-primary" target="_blank">
                            <i class="bi bi-facebook"></i> Facebook
                        </a>
                        <a id="twitter-share" href="#" class="btn btn-info text-white" target="_blank">
                            <i class="bi bi-twitter"></i> Twitter
                        </a>
                        <a id="linkedin-share" href="#" class="btn btn-primary" target="_blank">
                            <i class="bi bi-linkedin"></i> LinkedIn
                        </a>
                        <a id="whatsapp-share" href="#" class="btn btn-success" target="_blank">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        @include('components.footer')
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const facebookBtn = document.getElementById("facebook-share");
            const twitterBtn = document.getElementById("twitter-share");
            const linkedinBtn = document.getElementById("linkedin-share");
            const whatsappBtn = document.getElementById("whatsapp-share");

            // Get current page URL
            const pageUrl = encodeURIComponent(window.location.href);
            const pageTitle = encodeURIComponent(document.title);

            // Set share links dynamically
            facebookBtn.href = `https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`;
            twitterBtn.href = `https://twitter.com/intent/tweet?url=${pageUrl}&text=${pageTitle}`;
            linkedinBtn.href = `https://www.linkedin.com/shareArticle?mini=true&url=${pageUrl}&title=${pageTitle}`;
            whatsappBtn.href = `https://api.whatsapp.com/send?text=${pageTitle} - ${pageUrl}`;
        });
    </script>
</body>
</html>
