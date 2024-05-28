<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tefa Tax Center</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('layouts.css')
    @stack('css-custom')
</head>

<body>

    <!-- ======= Header ======= header-transparent-->
    @include('layouts.navbar')
    <!-- End Header -->
    @yield('isi-contentLanding')
    {{ isset($slot) ? $slot : null }}


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Tefa Tax Center</h3>
                        <p>Situs resmi Tefa Tax Center Politeknik Negeri Jember.
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a class="nav-link " href="https://polije.ac.id/" target="_blank">Polije</a></li>
                            <li><a class="nav-link " href="https://p3m.polije.ac.id/" target="_blank">P3M Polije</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Alamat</h4>
                        <p>
                            Gedung Tefa Tax Center<br>
                            Politeknik Negeri Jember<br>
                            Jawa Timur, Indonesia <br>

                        </p>

                        <!-- <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div> -->

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>Hubungi Kami</h4>
                        <p>
                            <strong>Phone:</strong> +62 823-1769-1980 (Oryza)<br>
                            <strong>Email:</strong> akp@polije.ac.id<br>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; <strong>IT Team Tefa Tax Center Politeknik Negeri Jember</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="TAXBOT" agent-id="cb55bf2f-0223-4dbd-a41f-0c00ce72c08e" language-code="id"></df-messenger>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- Vendor JS Files -->
    @include('layouts.js')
    @stack('js-custom')
</body>

</html>