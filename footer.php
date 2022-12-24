<script src="resources/js/jquery.min.js"></script>

<script src="resources/js/mixitup.min.js"></script>

<script src="resources/swiper js/swiper-bundle.min.js"></script>
<script src="resources/js/email.min.js"></script>
<script type="text/javascript">
    (function () {
        emailjs.init("user_5OMETIDQ2Nm9qBMtaFNz4");
    })();
</script>
<!-----------------VANILLA TILT JS {https://micku7zu.github.io/vanilla-tilt.js/}----------------->
<script src="resources/js/vanilla-tilt.min.js"></script>
<!-----------------ANIME JS {https://animejs.com/} [USED LOCALLY.]----------------->
<script src="resources/js/anime.min.js"></script>
<!-----------------LOCAL (HOME)----------------->
<script src="resources/js/home.js"></script>
<!-----------------LOCAL (ABOUT)----------------->
<script src="resources/js/about.js"></script>
<!-----------------LOCAL (SERVICES)----------------->
<script src="resources/js/services.js"></script>
<!-----------------LOCAL (PORTFOLIO)----------------->
<script src="resources/js/portfolio.js"></script>
<!-----------------LOCAL (BLOG)----------------->
<script src="resources/js/blog.js"></script>
<!-----------------LOCAL (CONTACT)----------------->
<script src="resources/js/contact.js"></script>
<!-----------------LOCAL (MAIN FILE)----------------->
<script src="resources/js/main.js"></script>

<!-----------------LOCAL (MAIN FILE { USED TO ANIMATE WEBPAGE.})----------------->
<script>
    const animate1 = anime.timeline({
        targets: ".circle",
        loop: true,
        duration: 2000,
        direction: "alternate",
        easing: "easeInOutQuad",
    });
    animate1.add({
        translateX: 350,
    });

    let dot = document.querySelectorAll(".dot");
    for (let i = 0; i < dot.length; i++) {
        const ind = dot[i];
        const animate2 = anime.timeline({
            targets: ind,
            loop: true,
            direction: "alternate",
            delay: i * 100,
        });
        animate2.add({
            scale: 2,
        });
    }

    let span = document.querySelectorAll(".content .text span");
    const animate3 = anime.timeline({
        targets: span,
        easing: "easeInOutExpo",
        delay: anime.stagger(20, { direction: "reverse" }),
        direction: "reverse",
        autoplay: false,
    });

    animate3.add({
        rotate: () => {
            return anime.random(-360, 360);
        },
        translateX: () => {
            return anime.random(-500, 500);
        },
        translateY: () => {
            return anime.random(-500, 500);
        },
        duration: 3000,
    });

    const animate4 = anime({
        targets: ".button",
        scale: [0, 1],
        delay: anime.stagger(200, { start: 7000 }),
        autoplay: false,
    });

    const animate5 = anime({
        targets: [
            document.querySelectorAll(".info"),
            document.querySelectorAll(".inp_field"),
            ".message",
            ".submit",
        ],
        translateY: [50, 0],
        rotateX: [90, 0],
        opacity: [0, 1],
        delay: anime.stagger(300, { start: 1000 }),
        duration: 750,
        autoplay: false,
        easing: "easeOutQuint",
    });
    
    const animate6 = anime({
        targets: ['.services .t_dummy', '.services .hero-text'],
        duration: 1000,
        scaleX: [0, 1],
        delay: anime.stagger(300, {start: 1000}),
        autoplay: false,
    });

    function resize() {
        if (window.innerWidth <= 632) {
            animate5.play();
            animate3.play();
            animate4.play();
            animate6.play();
        }
    }
    resize();
    window.addEventListener("resize", resize);
</script>
<script>
    var el_up = document.getElementById("GFG_UP");
    var el_down = document.getElementById("GFG_DOWN");
    el_up.innerHTML = "Click on the button to disable right click";
    
    function gfg_Run() {
        document.addEventListener('contextmenu',
                event => event.preventDefault());
        el_down.innerHTML = "Right click disabled";
    }		
</script>
<script>
function myFunction() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
x.className += " responsive";
} else {
x.className = "topnav";
}
}
</script>				
</body>
</html>