<div class="environment container">
    <div class="environment-top">
        <h1>Môi trường làm việc tại EQTek</h1>
        <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</br> Lorem Ipsum has been the industry's</h5>
    </div>
    <div class="environtment-bot row">
        <div class="col-lg-7 left-img">
            <img class="inner-img" src="./img/img1.png" alt="">
            <h6>Lorem Ipsum is simply dummy text of the printing and typesetting</br>industry. Lorem Ipsum has been the industry's</h6>
        </div>
        <div class="col-lg-5" style="padding: 0px;">
            <div class="splide1">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img class="inner-img" src="./img/img2.png" alt="">
                            <p>MÔI TRƯỜNG NĂNG ĐỘNG</p>
                        </li>
                        <li class="splide__slide">
                            <img class="inner-img" src="./img/img3.png" alt="">
                            <p>MÔI TRƯỜNG NĂNG ĐỘNG</p>
                        </li>
                        <li class="splide__slide">
                            <img class="inner-img" src="./img/img4.png" alt="">
                            <p>MÔI TRƯỜNG NĂNG ĐỘNG</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener( 'DOMContentLoaded', function() {
        var splide = new Splide( '.splide1', {
        perMove: 1,
        type   : 'loop',
        autoplay: true,
        perPage: 3,
        speed:1500,
        interval:500,
            direction: 'ttb',
            height   : '30rem',
    } );

        splide.mount();
    } );
</script>
