<div id="loading-popup">
    <div id="spinner-container" class="spinner"></div>
</div>

<style>
    #loading-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }
    #loading-popup.hidden {
        display: none;
    }
    .spinner {
        display: inline-block;
    }
    .spinner-default {
        border: 8px solid #f3f3f3;
        border-top: 8px solid #211F60;
        border-radius: 50%;
        width: 80px;
        height: 80px;
        animation: spin 1.5s linear infinite;
    }
    .spinner-dots div {
        width: 10px;
        height: 10px;
        background-color: #211F60;
        border-radius: 50%;
        display: inline-block;
        animation: bounce 1.4s infinite ease-in-out both;
    }
/*    .spinner-dots div:nth-child(1) { animation-delay: -2.56s; }
    .spinner-dots div:nth-child(2) { animation-delay: -1.28s; }
    .spinner-dots div:nth-child(3) { animation-delay: 0; }*/
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    @keyframes bounce {
        0%, 60%, 100% { transform: scale(0); }
        40% { transform: scale(1); }
    }
</style>

<script>          
    const spinners = '<div class="spinner-grow text-warning" style="width: 5rem; height: 5rem;"> <img alt="Joy Nostalg Logo" style ="width: 100%;object-fit: scale-down;" src="{{asset("img/Photos/icons/logo.png")}}"></div>';
        // const spinners = ' <img alt="Joy Nostalg Logo" style="width: 5rem; height: 5rem;object-fit: cover; border-radius:5rem" src="{{asset("img/Photos/icons/loadingImgHouse.gif")}}"><br><span class="sr-only text-center text-white">Loading...</span>';
    // const spinners = [
    //     '<div class="spinner-default"></div>',
    //     '<div class="spinner-dots"><div></div><div></div><div></div></div>'
    // ];

    // Function to randomly select a spinner
    // function getRandomSpinner() {
    //     const randomIndex = Math.floor(Math.random() * spinners.length);
    //     return spinners[randomIndex];
    // }

    document.addEventListener('DOMContentLoaded', () => {
        const spinnerContainer = document.getElementById('spinner-container');
        // spinnerContainer.innerHTML = getRandomSpinner();
         spinnerContainer.innerHTML = spinners;
    });
</script>
