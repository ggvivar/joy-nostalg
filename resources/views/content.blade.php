<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>

.content-list {
    display: flex;
    flex-direction: column;
    height: 100%;
    max-height: 600px;
}

.content-list-scroll {
    overflow-y: auto;
    flex-grow: 1; /* This allows it to take up the remaining space */
    padding-right: 10px;
    max-height: 600px;
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
.share-btn{
    font-size: 10px;
    border-radius: 15px;
    width: 120px !important;
    margin-left: auto; /* Aligns button to the end of the line */
    background-color: blue;
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
    
    <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
        <h1 class="fw-bold text-warning">Joy~Nostalg News</h1>
    </div>
    <div class="container mt-3">
    <div class="row d-flex">
            <h1 id="title" class="col-lg-9">{{$content['title']}}</h1>
            <div class="content-news col-lg-9">
                <img style="object-fit: scale-down; width: 100%" src="{{$content['img_url']}}">
                <div class="mt-3 d-flex align-items-center">
                    <span class="fs-6">{{$content['date']}}</span>
                    <button class="share-btn text-white ms-auto bg-primary" id="share-btn" data-bs-toggle="modal" data-bs-target="#shareModal">
                        <i class="bi bi-box-arrow-up-right"></i> Share
                    </button>
                </div>
                <p class="fs-4">{{$content['content']}}</p>
            </div>

    <div class="content-list col-lg-3">
        <h5 class="fs-3 fw-bold text-warning">Recent {{$contentType}}</h5>
        <div class="content-list-scroll d-block">
                    @foreach($contents as $index => $contentitem)
                        <a class="col-lg-12fs-4 {{ ($content['id'] == $contentitem['id']) ? 'fw-bold' : '' }}" href="/view/content/news/{{$contentitem['id']}}">{{$contentitem['title']}}</a><br>
                        <span class="fs-6">{{$contentitem['date']}}</span>
                        <hr class="text-warning">
                    @endforeach
        </div>
    </div>
    </div>
    </div>
    @include('components.share')

</body>
<footer>
    @include('components.footer');
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
   
    window.addEventListener('load', () => {
            const loadingPopup = document.getElementById('loading-popup');
            const contentContainer = document.getElementById('content-container');
            loadingPopup.classList.add('hidden');
            contentContainer.style.display = 'block';
                });
</script>


</html>

