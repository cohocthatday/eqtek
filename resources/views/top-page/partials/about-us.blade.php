<div class="about-us container">
    <div class="row">
        <div class="col-lg-3 row-img">
            <img class="inner-img" src="./img/duan.png" alt="">
            <h2><span class="number-counter" data-count-from="0" data-count-to="200" data-count-speed="100"></span>+</h2>
            <p>Dự án</p>

        </div>
        <div class="col-lg-3 row-img">
            <img class="inner-img" src="./img/doitac.png" alt="">
            <h2><span class="number-counter" data-count-from="0" data-count-to="100" data-count-speed="50"></span>+</h2>
            <p>Đối tác</p>

        </div>
        <div class="col-lg-3 row-img">
            <img class="inner-img" src="./img/nhansu.png" alt="">
            <h2><span class="number-counter" data-count-from="0" data-count-to="60" data-count-speed="30"></span>+</h2>
            <p>Nhân sự</p>

        </div>
        <div class="col-lg-3 row-img">
            <img class="inner-img" src="./img/khachhang.png" alt="">
            <h2><span class="number-counter" data-count-from="0" data-count-to="200" data-count-speed="100"></span>+</h2>
            <p>Khách hàng</p>

        </div>
    </div>
</div>

<script>
    //-- Plugin implementation
    (function($) {
        $.fn.countTo = function(options) {
            return this.each(function() {
                //-- Arrange
                var FRAME_RATE = 60; // Predefine default frame rate to be 60fps
                var $el = $(this);
                var countFrom = parseInt($el.attr('data-count-from'));
                var countTo = parseInt($el.attr('data-count-to'));
                var countSpeed = $el.attr('data-count-speed'); // Number increment per second

                //-- Action
                var rafId;
                var increment;
                var currentCount = countFrom;
                var countAction = function() {              // Self looping local function via requestAnimationFrame
                    if(currentCount < countTo) {              // Perform number incremeant
                        $el.text(Math.floor(currentCount));     // Update HTML display
                        increment = countSpeed / FRAME_RATE;    // Calculate increment step
                        currentCount += increment;              // Increment counter
                        rafId = requestAnimationFrame(countAction);
                    } else {                                  // Terminate animation once it reaches the target count number
                        $el.text(countTo);                      // Set to the final value before everything stops
                        //cancelAnimationFrame(rafId);
                    }
                };
                rafId = requestAnimationFrame(countAction); // Initiates the looping function
            });
        };
    }(jQuery));

    //-- Executing
    $('.number-counter').countTo();
</script>
