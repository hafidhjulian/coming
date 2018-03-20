<?php


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cakra Satriatama</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<nav class="navbar navbar-expand-sm fixed-top">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#beranda">
								<span class="navbar-toggler-icon"></span>
							</button>
						<a class="navbar-brand"><img src="assets/images/aset1.jpg"></a>	
						<div class="collapse navbar-collapse" id="beranda">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="#about">About</a>
								<li class="nav-item">
									<a class="nav-link" href="#kontak">Contact</a>
								</li>
							</ul>	
						</div>
					</nav>
				</div>
				<div class="container" id="home">
					<div class="row">
						<div class="col-md-12 descrp text-center">
							<h1 class="display-3 jud1">COMING SOON</h1>
                            <h3 class="jud2">Patroli Keamanan Sekolah</h3>
                            <h5 class="jud3">SMA 5 Semarang</h5>
                            <hr style="color=white;">
							<p id="demo" style="font-size:30px"></p>
							<button type="button" class="btn btn-outline-light" style="color= white;">NOTIFY ME</button>
						</div>
                    </div>
                    <div class="row foot">
                        <div class="col-md-12 text-center">
                            <p>Website by hafidhjulian. All right Reserved.</p>
                            <span class="fa-stack fa-lg">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-twitter fa-stack-1x"></i>
                            </span>
                            <span class="fa-stack fa-lg">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-facebook fa-stack-1x"></i>
                            </span>
                            <span class="fa-stack fa-lg">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-instagram fa-stack-1x"></i>
                            </span>
                            <span class="fa-stack fa-lg">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-pinterest-p fa-stack-1x"></i>
                            </span>
                        </div>
                    </div>    
				</div>
			</div>
            <!-- footer -->
            <div>
            <!-- fill in the blank -->
            <p>Abdurahman</p>
            </div>
	</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
                $(".contactLink").click(function(){
                    if ($("#contactForm").is(":hidden")){
                        $("#contactForm").slideDown("slow");
                    }
                    else{
                        $("#contactForm").slideUp("slow");
                    }
                });
            });
            function closeForm(){
                $("#messageSent").show("slow");
                setTimeout('$("#messageSent").hide();$("#contactForm").slideUp("slow")', 2000);
           }

$(document).ready(function() {
  function filterPath(string) {
    return string
      .replace(/^\//,'')
      .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
      .replace(/\/$/,'');
  }
  $('a[href*=#]').each(function() {
    if ( filterPath(location.pathname) == filterPath(this.pathname)
    && location.hostname == this.hostname
    && this.hash.replace(/#/,'') ) {
      var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
      var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
       if ($target) {
         var targetOffset = $target.offset().top;
         $(this).click(function() {
           $('html, body').animate({scrollTop: targetOffset}, 1000);
           var d = document.createElement("div");
        d.style.height = "101%";
        d.style.overflow = "hidden";
        document.body.appendChild(d);
        window.scrollTo(0,scrollToM);
        setTimeout(function() {
        d.parentNode.removeChild(d);
            }, 10);
           return false;
         });
      }
    }
  });
});

</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Apr 21, 2018 00:00:00").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>