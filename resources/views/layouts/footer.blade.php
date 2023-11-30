<footer class="w3l-footer">
    <section class="footer-inner-main">
        <div class="footer-hny-grids py-5">
            <div class="container py-lg-4">
                <div class="text-txt">
                    <div class="right-side">

                        <div class="row footer-links">
                            <div class="col-md-4 col-sm-6 sub-two-right mt-5">
                                <h6>Genre</h6>
                                <ul>
                                    <li><a href="index.html#">Movies</a></li>
                                    <li><a href="index.html#">Drama</a></li>
                                    <li><a href="index.html#">Commedy</a></li>
                                    <li><a href="index.html#">Music</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6 sub-two-right mt-5">
                                <h6>Information</h6>
                                <ul>
                                    <li><a href="index.html">About</a> </li>
                                    <li><a href="about.html">Privacy Policy</a> </li>
                                    <li><a href="blog.html">License</a> </li>
                                    <li><a href="blog.html">Help</a> </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-6 sub-two-right mt-5">
                                <h6>Others</h6>
                                <ul>
                                    <li><a href="genre.html">My Account</a></li>
                                    <li><a href="genre.html">Subscription</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="below-section">
            <div class="container">
                <div class="copyright-footer">
                    <div class="columns text-lg-left">
                        <p>&copy;2023 E.B. Solutions Limited. All rights reserved</p>
                    </div>

                    <ul class="social text-lg-right">
                        <li><a href="index.html#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="index.html#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="index.html#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        </li>
                        <li><a href="index.html#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- copyright -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fa fa-arrow-up" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- /move top -->

    </section>
</footer>
