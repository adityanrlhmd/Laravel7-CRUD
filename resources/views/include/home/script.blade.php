<script src="./src/js/swiper-bundle.min.js"></script>
<script>
    // var swiper = new Swiper(".mySwiper", {
    //     watchSlidesProgress: true,
    //     watchSlidesVisibility: true,
    //     slidesPerView: 3,
    // });
    const swiper = new Swiper('.swiper-container', {
        // Default parameters
        slidesPerView: 1,
        spaceBetween: 10,
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            950: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        }
    });

</script>

<script src="./src/js/popper.min.js"></script>
<script src="./src/js/bootstrap.min.js"></script>
