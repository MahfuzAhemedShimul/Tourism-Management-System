


<!-- Footer -->
<div class="copy-right">
    <div class="container">
        <!-- Social Media Links -->
        <div class="footer-social-icons wow fadeInDown animated" data-wow-delay=".5s">
            <ul>
                <li>
                    <a class="facebook" href="https://www.facebook.com/MaverickMahfuz" aria-label="Facebook" target="_blank">
                        <span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a class="twitter" href="#" aria-label="Twitter" target="_blank">
                        <span>Twitter</span>
                    </a>
                </li>
                <li>
                    <a class="flickr" href="#" aria-label="Flickr" target="_blank">
                        <span>Flickr</span>
                    </a>
                </li>
                <li>
                    <a class="googleplus" href="#" aria-label="Google Plus" target="_blank">
                        <span>Google+</span>
                    </a>
                </li>
                <li>
                    <a class="dribbble" href="#" aria-label="Dribbble" target="_blank">
                        <span>Dribbble</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Copyright Information -->
        <p class="wow zoomIn animated" data-wow-delay=".5s">© <?php echo date('Y'); ?> MAS. All Rights Reserved</p>
    </div>
    <!-- Back-to-Top Button -->
    <div class="back-to-top">
        <a href="#top">↑ Back to Top</a>
    </div>
</div>

<!-- Back-to-Top Button Style -->
<style>
    .back-to-top a {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #000;
        color: #fff;
        padding: 10px 15px;
        border-radius: 50%;
        text-decoration: none;
        font-size: 18px;
        display: none;
        z-index: 1000;
    }
    .back-to-top a:hover {
        background: #444;
    }
</style>

<!-- JavaScript for Back-to-Top Button -->
<script>
    window.onscroll = function () {
        const backToTop = document.querySelector('.back-to-top a');
        if (document.documentElement.scrollTop > 200) {
            backToTop.style.display = 'block';
        } else {
            backToTop.style.display = 'none';
        }
    };
</script>
