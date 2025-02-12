
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
                        <a href="#" id="linkedin-share" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <!-- <a href="#" id="whatsapp-share" target="_blank"><i class="bi bi-whatsapp"></i></a> -->
                        
                    </div>
                    <div class="social-icons">
                    <a href="#" id="copy-link" onclick="copyToClipboard()" title="Copy Link"><i class="bi bi-clipboard"></i><span id="currentUrl"></span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        document.addEventListener("DOMContentLoaded", function () {
            const shareUrl = window.location.href;
            const shareTitle = document.querySelector("h1").innerText;
            document.getElementById('currentUrl').innerHTML = window.location.href;
            document.getElementById("facebook-share").href = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(shareUrl)}`;
            document.getElementById("twitter-share").href = `https://twitter.com/intent/tweet?text=${encodeURIComponent(shareTitle)}&url=${encodeURIComponent(shareUrl)}`;
            document.getElementById("linkedin-share").href = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(shareUrl)}`;
            document.getElementById("whatsapp-share").href = `https://wa.me/?text=${encodeURIComponent(shareTitle + " " + shareUrl)}`;

            window.copyToClipboard = function () {
                navigator.clipboard.writeText(shareUrl).then(() => {
                    alert("Link copied to clipboard!");
                }).catch(err => {
                    console.error("Error copying link: ", err);
                });
            };
        });
    </script>

