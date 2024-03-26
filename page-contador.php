<?php /*  Template Name: Contador */  ?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="container-fluid mb-5 mt-5">

	
	<? if(get_option('logo_link')): ?>
<img src="<?php echo get_option('logo_link'); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" class="logo-header"/>
	 
	<?php else: ?>
	 
	 <h1 class="wow rollIn"><?php bloginfo('name'); ?></h1>
<?php endif; ?>
	
</div>
<div class="container" style="min-height: 600px;">
<!-- Display the countdown timer in an element -->
<h1  style="margin-top: 3rem; color:var(--cor_3)">Site em desenvolvimento</h1>
<div id="demo" style="color:var(--cor_5)"></div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Apr 10, 2023 17:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = "<h1>" + days + " Dias : " + hours + " Horas : "
  + minutes + " Minutos : " + seconds + " Segundos </h1>";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

	</div>
<?php endwhile; endif; ?>



<?php get_footer(); ?>
