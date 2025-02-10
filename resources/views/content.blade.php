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
    <div class="col-lg-8">
        <h1>{{$content['title']}}</h1>
        <img style="object-fit:scale-down; width: 100%"src="{{$content['img_url']}}">
        <span class="fs-6">{{$content['date']}}</span>
        <p class="fs-4">{{$content['content']}}</p>
    </div>
    </div>
    </div>
    

</body>
<footer>
    @include('components.footer');
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modalBody = document.querySelector('.modal-body');
        const agreeButton = document.querySelector('#dataPrivacyModal .modal-footer button');
        
        // Initially disable the button
        agreeButton.disabled = true;

        // Add scroll event listener to modal body
        document.addEventListener('scroll', function () {
                        console.log(modalBody.scrollTop )
            if (modalBody.scrollTop + modalBody.clientHeight >= modalBody.scrollHeight) {
                agreeButton.disabled = false;

            }
        });
    });

    function dpAgree() {
        document.getElementById('dataprivacy').checked = true;
        document.getElementById('dataprivacy').disabled = false;
    }
            window.addEventListener('load', () => {
            const loadingPopup = document.getElementById('loading-popup');
            const contentContainer = document.getElementById('content-container');
            loadingPopup.classList.add('hidden');
            contentContainer.style.display = 'block';
        });
</script>


</html>

