<?php theme_include('header'); ?>

		<section id="start-page-image">
			<span>Hi,<br> my name is Noah Mayerhofer<br>and i'm currently:<br><br>18 years old<br>Studing at LTH<br>A freelance web developer</span>
      	<div id="start-page-background-image" class="background-image"></div>
			<div class="overlay"></div>
		</section>
		<script>
			$('#start-page-background-image').backgroundBlur({
			    imageURL : 'http://<?php echo  $_SERVER['SERVER_NAME'] . page_custom_field('start_page_image') ?>',
			    blurAmount : 5,
			    imageClass : 'bg-blur'
			 });
		</script>

<?php //theme_include('footer'); ?>
