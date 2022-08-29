<x-header />

    <main id="main">
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="box" style="width: 50rem; margin-top: 5rem; margin-left: 10rem;">
                    <div class="card-body">
                        <h3>Enter Your Certificate Number</h3>
                        <form action="{{ route('verify') }}" method="post">
                            <div class="form-group">
                                <input class="form-control form-control-lg" name="certificate_no" type="text" placeholder="Enter Your Certification Number">
                            </div>
                            <div class="btn-wrap">
                                <button type="submit" class="btn-buy" style="border: none;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

        
    <x-footer-side />

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/script.js"></script>
    
</body>
</html>