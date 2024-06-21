<div class="container">
    <footer style="margin-top:5rem">
        <div class="row">
            <div class="col">
                © 2010-2024 Jaicer Indriago - Desarrollador Web
            </div>


        </div>
    </footer>
</div>



<script>
    function Abrirmenu() {
        var element = document.getElementById("menu");
        element.classList.toggle("openmenu");
    }

    function Cerrarmenu() {
        var element2 = document.getElementById("menu");
        element2.classList.remove("openmenu");
    }



    var stickymenu = document.getElementById("menubase")
    var stickymenuoffset = stickymenu.offsetTop
    var scrolltimer

    window.addEventListener("scroll", function(e) {
        requestAnimationFrame(function() {
            if (window.pageYOffset > stickymenuoffset) {
                stickymenu.classList.add('sticky')
            } else {
                stickymenu.classList.remove('sticky')
            }
        })
    })
</script>
<?php wp_footer(); ?>
</body>


</html>