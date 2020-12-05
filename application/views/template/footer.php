<!--====== FOOTER PART START ======-->
	<footer id="footer" class="footer-area pt-170">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="footer-widget">
						<h2 class="mb-35 wow fadeInUp" data-wow-delay=".2s">Corporate</h2>
						<h2 class="mb-35 wow fadeInUp" data-wow-delay=".2s">Legal</h2>
						<h2 class="mb-35 wow fadeInUp" data-wow-delay=".2s">Academy</h2>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 offset-xl-1 offset-lg-1 col-md-6">
					<div class="footer-widget">
						<h5>Quick Links</h5>
						<ul>
							<li><a href="#home">Home</a></li>
							<li><a href="#about-us">About Us</a></li>
							<li><a href="#our-speaker">Ourspeaker</a></li>
							<li><a href="#session">Session</a></li>
							<li><a href="#publication">Publication</a></li>
							<li><a href="#commitess">The Committess</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="footer-widget">
						<h5>Contact Us</h5>
						<ul>
							<li><i class="lni lni-phone"></i>+62 8123 4567 8910</li>
							<li><i class="lni lni-envelope"></i> cla@gmail.com</li>
							<li><i class="lni lni-facebook-filled"></i> Facebook </li>
							<li><i class="lni lni-instagram-filled"></i> Instagram </li>
							<li><i class="lni lni-linkedin-original	"></i> Linked	in</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-credit">
				<div class="row">
					<div class="col-md-6">
						<div class="copy-right text-center text-md-left">
							<p>CLA @2020</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--====== FOOTER PART ENDS ======-->

	<!--====== BACK TOP TOP PART START ======-->
	<a href="#" class="back-to-top btn-hover"><i class="lni lni-chevron-up"></i></a>
	<!--====== BACK TOP TOP PART ENDS ======-->


	<!--====== Bootstrap js ======-->
	<script src="<?php echo base_url();?>assets/js/bootstrap.bundle-5.0.0.alpha-min.js"></script>

	<!--====== wow js ======-->
	<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>

	<!--====== Main js ======-->
	<script src="<?php echo base_url();?>assets/js/main.js"></script>

	<script>


    // Get the navbar

    // for menu scroll 
    var pageLink = document.querySelectorAll('.page-scroll');
    
    pageLink.forEach(elem => {
        elem.addEventListener('click', e => {
            e.preventDefault();
            document.querySelector(elem.getAttribute('href')).scrollIntoView({
                behavior: 'smooth',
                offsetTop: 1 - 60,
            });
        });
    });

    // section menu active
    function onScroll(event) {
        var sections = document.querySelectorAll('.page-scroll');
        var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

        for (var i = 0; i < sections.length; i++) {
            var currLink = sections[i];
            var val = currLink.getAttribute('href');
            var refElement = document.querySelector(val);
            var scrollTopMinus = scrollPos + 73;
            if (refElement.offsetTop <= scrollTopMinus && (refElement.offsetTop + refElement.offsetHeight > scrollTopMinus)) {
                document.querySelector('.page-scroll').classList.remove('active');
                currLink.classList.add('active');
            } else {
                currLink.classList.remove('active');
            }
        }
    };

    window.document.addEventListener('scroll', onScroll);


    //===== close navbar-collapse when a  clicked
    let navbarToggler = document.querySelector(".navbar-toggler");    
    var navbarCollapse = document.querySelector(".navbar-collapse");

    document.querySelectorAll(".page-scroll").forEach(e =>
        e.addEventListener("click", () => {
            navbarToggler.classList.remove("active");
            navbarCollapse.classList.remove('show')
        })
    );
    navbarToggler.addEventListener('click', function() {
        navbarToggler.classList.toggle("active");
    });

	</script>


</body>

</html>