
<script src="{{asset('frontend\assets\js\jquery.min.js')}}"></script> 
<script src="{{asset('frontend\assets\js\bootstrap.min.js')}}"></script> 
<!-- <script src="{{asset('frontend\assets\js\hammer.min.js')}}"></script>   -->

<!--<script src="{{asset('frontend\assets\js\ScrollTrigger.min.js')}}"></script>   -->
<script src="{{asset('frontend\assets\js\gsap.min.js')}}"></script>
<script src="{{asset('frontend\assets\js\jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend\assets\js\TweenMax.min.js')}}"></script>
<script src="{{asset('frontend\assets\js\splitting.min.js')}}"></script>
<script src="{{asset('frontend\assets\js\jquery.placeholder.label.js')}}"></script>
<script src="{{asset('frontend\assets\js\popper.min.js')}}"></script>

<script src="{{asset('frontend\assets\js\bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend\assets\js\cursor.js')}}"></script>
<script src="{{asset('frontend\assets\js\menu.js')}}"></script>
<!-- <script src="{{asset('frontend\assets\js\image-scroll.js')}}"></script>  -->
<script src="{{asset('frontend\assets\js\back-to-top.js')}}"></script>
<!--<script src="{{asset('frontend\assets\js\counter.js')}}"></script> --> 
<script src="{{asset('frontend\assets\js\slick.min.js')}}"></script>
<script src="{{asset('frontend\assets\js\slider.js')}}"></script>
<script src="{{asset('frontend\assets\js\custom.js')}}"></script>
<!-- <script src="{{asset('frontend\assets\js\image-animation.js')}}"></script>   -->
<script>
		var CountAction = "{{ route('sahitya.action') }}";
</script>
<script src="{{asset('frontend\assets\js\custom\view.js')}}"></script>
<script>
/* document.addEventListener('DOMContentLoaded', function() {
    var touchStartY = 0;

    document.querySelectorAll('.nav-dropdown').forEach(function(dropdown) {
        dropdown.addEventListener('touchstart', function(e) {
            touchStartY = e.touches[0].clientY;
        });

        dropdown.addEventListener('touchmove', function(e) {
            var touchEndY = e.touches[0].clientY;
            var deltaY = touchEndY - touchStartY;

            // Check if scrolling vertically
            if (Math.abs(deltaY) > 10) {
                e.stopPropagation(); // Stop event propagation to prevent default action
            }
        });

        dropdown.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function(e) {
                if (Math.abs(touchStartY - e.clientY) > 5) {
                    e.preventDefault(); // Prevent default click behavior if there was vertical touch movement
                }
            });
        });
    });
}); */



</script>


@yield('scripts')

