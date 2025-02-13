
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

        .social-icons a {
            font-size: 40px!important;
            margin: 0 10px;
/*            color: #555;*/
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #000;
        }
    </style>
    <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Share this on:</p>
                    <div class="social-icons">
                        <a href="#" id="facebook-share" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="#" id="twitter-share" target="_blank"><i class="bi bi-twitter"></i></a>
                        <?php /*<a href="#" id="linkedin-share" target="_blank"><i class="bi bi-linkedin"></i></a> */?>
                        <a href="https://web.whatsapp.com/send?text=Jacinto%20C.%20Ng%2C%20Jr.%20Wins%20EY%20Entrepreneur%20Of%20The%20Year%202024%20Philippines%20http%3A%2F%2F54.254.83.11%2Fview%2Farticle%2F1%23" id="whatsapp-share" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <a href="#" id="copy-link" onclick="copyToClipboard()" title="Copy Link"><i class="bi bi-clipboard"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
function copyToClipboard() {
    const shareUrl = window.location.href;
    navigator.clipboard.writeText(shareUrl)
        .then(() => {
            alert("Link copied to clipboard!");
        })
        .catch(err => {
            console.error("Error copying link:", err);
            alert("Unable to copy. Please copy manually.");
        });
}
        document.addEventListener("DOMContentLoaded", function () {
            const shareUrl = window.location.href;
            const shareTitle = document.getElementById('title').textContent;
            const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
            var waUrl = isMobile 
                ? `https://wa.me/?text=${encodeURIComponent(shareTitle + " " + shareUrl)}`
                : `https://web.whatsapp.com/send?text=${encodeURIComponent(shareTitle + " " + shareUrl)}`;
                waUrl =`https://web.whatsapp.com/send?text=${encodeURIComponent(shareTitle + " " + shareUrl)}`;
            console.log(waUrl);
            document.getElementById("facebook-share").href = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}`;
            document.getElementById("twitter-share").href = `https://twitter.com/intent/tweet?text=${encodeURIComponent(shareTitle)}&url=${encodeURIComponent(shareUrl)}`;
            document.getElementById("linkedin-share").href = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(shareUrl)}`;
            // document.getElementById("whatsapp-share").href = waUrl;
        });
        $(document).bind("contextmenu",function(e) {
 e.preventDefault();
});
    </script>

