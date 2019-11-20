
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row text-center pt-3">
                <div class="col">
                    <p> Copyright <i class=" far fa-copyright fa-1x"></i> 2019 all right
                        reversed |
                        <span>yudha.code</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url();?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url();?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>/assets/js/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="<?= base_url();?>/assets/js/swiper.js"></script>
    <script src="<?= base_url();?>/assets/js/tilt.jquery.js"></script>
    <script src="<?= base_url();?>/assets/js/parallax.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.easing.1.3.js"></script>
    <script>
        // fixed navbar
        var zero = 0;
        $(document).ready(function () {
            $(window).on('scroll', function () {
                $('.navbar').toggleClass('hide', $(window).scrollTop() > zero);
                zero = $(window).scrollTop();

                $('.navbar').toggleClass('show', zero > 19);
            })
        });

        // background move
        var headerBg = document.getElementsByClassName('carousel-inner')
        window.addEventListener('scroll', function () {
            var wScroll = $(this).scrollTop();
            $('.carousel-inner').css({
                'opacity': 1 - +window.pageYOffset / 700 + '',
                'transform': 'translateY(' + wScroll / 15 + '%)',
            })

            $('.carousel-indicators').css({
                'opacity': 1 - +window.pageYOffset / 500 + '',
            })

            $('.title-header').css({
                'transform': 'translateY(' + - +wScroll * 0.2 + 'px)'
            })
            $('.box-content').css({
                'transform': 'translateY(' + - +wScroll * 0.3 + 'px)'
            })
            var nilai = $('.title-header').css('transform');

        });

        // swiper
        var slider1 = document.querySelectorAll('.swiper-slide');
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 10,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: true,
            }
        });

        // event pada saat di klik
        $('.page-scroll').on('click', function (e) {

            //ambil isi href
            var href = $(this).attr('href');
            //tangkap elemen yang bersangkutan
            var elementhref = $(href);

            //pindahkan Scroll
            $('body').animate({
                scrollTop: elementhref.offset().top - 50
            }, 1500, 'easeInOutExpo');

            e.preventDefault();

        });
    </script>


</body>

</html>