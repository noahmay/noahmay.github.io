<?php theme_include('header'); ?>

		<section class="content-wrapp">
			<div class="container">
				<div class="row card">
					<div class="twelve columns">
						<h1><?php echo page_title(); ?></h1>
						<div class="row">
							<div class="card-content six columns">
								<?php echo page_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php theme_include('footer'); ?>
