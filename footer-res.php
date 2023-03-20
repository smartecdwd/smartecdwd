<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville,wght@1,300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif,wght@1,300&display=swap" rel="stylesheet">
<footer>
<div class="footer-overlayer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 col-lg-3 col-sm-4" >
			    <a href="#">
				    <span class="p-3" style="font-family: 'Libre Baskerville', sans-serif; font-size:13px;font-weight:bold;font-style:none;color:#fff">KARNATAK UNIVERSITY DHARWAD</span>
				</a> 
			</div>
			<div class="col-md-3">
			    <a href="#" style="color:#fff">
				    <span class="fa fa-map-marker p-3" style="color:#fff;padding-right:2px"> Pavate Nagar, Dharwad - 580 003.<br> <br>Karnataka State, INDIA.</span>
				</a>
			</div>
			<div class="col-md-3">
				<a href="#" style="color:#fff"><span class="fa fa-envelope p-3" style="color:#fff;padding-right:2px"> registrar@kud.ac.in</span></a><br>
				<a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&hd=kud.ac.in&sacu=1&flowName=GlifWebSignIn&flowEntry=AddSession" target="_blank" style="color:#fff;">
			        <span class="fa fa-envelope px-3" style="color:#fff;">KUD Webmail</span>
				</a>
		    </div>
		    <div class="col-md-3">
				<a href="#" style="color:#fff"><span class="fa fa-phone p-3" style="color:#fff;padding-right:3px">+91 - 0836 -2447750 / 2215201  </span>	</a>
			</div>
		</div>
		</div>
	</div>
</div>
</footer>
<div class="bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 text-center">
					<p style="color:#fff;text-align:center;font-family:Noto serif;font-size:12px"><i class="fa fa-copyright"></i> 2022. <a href="#">Karnatak University Dharwad</a>. All Rights Reserved | Designed &amp; Developed By : <a href="#">SmarTec IT Solutions</a></p>
				</div>
			</div>
		</div>
	</div>




<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/easing.min.html"></script>
<script src="js/jquery.easy-ticker.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js"></script>
<script src="js/script.js"></script>
  <script src="js/jquery.mixitup.min.js"></script>




	<script src="js/testjquery.js"></script>

    <script type="text/javascript">
        $(function () {

            var filterList = {

                init: function () {

                    $('#portfoliolist').mixItUp({

                        selectors: {
                            target: '.portfolio',
                            filter: '.filter'
                        },
                        load: {
                            filter: '.foundation'
                        }
                    });

                }

            };

            // Run the show!
            filterList.init();


        });
  </script>
    

<script>
        $(".btn-group, .dropdown").hover(
    function () {
        $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
        $(this).addClass('open');
    },
    function () {
        $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
        $(this).removeClass('open');
    });
    </script>
     <script src="js/Lightgallery.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#lightgallery').lightGallery();
        });
         $(document).ready(function () {
            $('#lightgallery2').lightGallery();
        });
        </script>

          <script>
        $(document).ready(function () {

            var toggleAffix = function (affixElement, scrollElement, wrapper) {

                var height = affixElement.outerHeight(),
                    top = wrapper.offset().top;

                if (scrollElement.scrollTop() >= top) {
                    wrapper.height(height);
                    affixElement.addClass("affix");
                }
                else {
                    affixElement.removeClass("affix");
                    wrapper.height('auto');
                }

            };


            $('[data-toggle="affix"]').each(function () {
                var ele = $(this),
                    wrapper = $('<div></div>');

                ele.before(wrapper);
                $(window).on('scroll resize', function () {
                    toggleAffix(ele, $(this), wrapper);
                });

                // init
                toggleAffix(ele, $(window), wrapper);
            });

        });

        // ===== Scroll to Top ====

$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
    </script>

<script>
$(function(){
    $('.publication').easyTicker({
        direction: 'up',
        visible: 3,
        interval: 2500,
        controls: {
            up: '.btnUp',
            down: '.btnDown',
            toggle: '.btnToggle'
        }

    });
     $('.notification').easyTicker({
        direction: 'up',
        visible: 5,
        interval: 2500,
        controls: {
            up: '.butnUp',
            down: '.butnDown',
            toggle: '.butnToggle'
        }

    });

});
</script>

<script>
	var hiddenBox;

	$( "#academics" ).on( "click", function( event ) {
		hiddenBox = $( "#aclist" );
		hiddenBox.toggleClass( "invisible" );
	});
	
	$( "#research" ).on( "click", function( event ) {
		hiddenBox = $( "#resrchlist" );
		hiddenBox.toggleClass( "invisible" );
	});
	
	$( "#campuslife" ).on( "click", function( event ) {
		hiddenBox = $( "#campuslist" );
		hiddenBox.toggleClass( "invisible" );
	});
	
	$( "#people" ).on( "click", function( event ) {
		hiddenBox = $( "#peoplelist" );
		hiddenBox.toggleClass( "invisible" );
	});
	
	$( "#about" ).on( "click", function( event ) {
		hiddenBox = $( "#aboutlist" );
		hiddenBox.toggleClass( "invisible" );
	});
</script>
</form>

<script src="js_L0JHXVH_b3zU1WK3g5A71kBZRBBXxTjVQAhFH9qjtIU.js"></script>
<script src="https://cse.google.com/cse.js?cx=003542863852187245998:1iuxkpwcroy"></script>
<script src="js_SFFd7CyQHNk9YNahjX_qhNLSvFmi7EUVAxDSRkikgPA.js"></script>
<script>
    $(document).ready(function() {
    $("img").on("contextmenu",function(){
       return false;
    });
});
</script>
</body>


</html>