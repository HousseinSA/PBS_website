<?php

namespace ProcessWire;

?>

<?php include('head.inc'); ?>
<!-- hero section start  -->
<div class="slider-section">
	<div class="slider-container">
		<?php  
		$hero_section= $pages->get('/hero-section/');
		foreach ($hero_section->hero_repeater as $hero) : ?>
		<div class="slide">
			<img  src="<?= $hero->image->url; ?>" alt="pbs sahel | pbs mr ">
		</div>
		<?php endforeach; ?>
	</div>

	<!-- Caption over the images -->
	<div class="caption-over-images">
		<edit 1015.section_title>
		<h1  style="color: white;">
		<a href="<?php echo $pages->get('/presentation/')->url?>">
			<?= $hero_section->section_title; ?>
			</a>
		</h1>
		</edit>
		<edit 1015.sub_title>
		<p>
			<?= $hero_section->sub_title; ?>
		</p>
		</edit>
	</div>

	<!-- Caption under the slider (for smaller screens) -->
</div>
<div class="caption-under-slider">
	<h1 style="color: white;">
	<a  href="<?php echo $pages->get('/presentation/')->url?>">
		<?= $hero_section->section_title; ?>
	</a>
	</h1>
	<p>
		<?= $hero_section->sub_title; ?>
	</p>
</div>

<!-- hero section ends  -->


<!-- about section start  -->
<section class="about-style-two py-5">
	<div class="container">
		<div class="row align-items-center">
			<?php $about = $pages->get('/presentation/'); ?>
			<!-- Image column -->
			<div class="col-lg-5">
				<div class="about-img">
					<edit 1021.image>
					<img src="<?= $about->image->url; ?>" alt=" about pbs pbs sahel | pbs mr" class="img-fluid ">
					</edit>
				</div>
			</div>
			<!-- Text column -->
			<div class="col-lg-7">
				<div class="about-text">
					<div class="section-title">
						<span>
							<h1>
							<a href="<?php echo $pages->get('/presentation/')->url?>">
								<?= $about->section_title; ?>
							</a>
							</h1>
						</span>
						<?php
						$item_number = 1;
						?>
						<?php foreach ($about->objectifs_repeater as $item) :  ?>
						<edit 1021.objectifs_repeater>
							<div class="objectif">
								<div>
									<i>
										<?= $item_number; ?>
								</div>
								<p>
									<?= $item->object_details; ?>
								</p>
							</div>
						</edit>
						<?php $item_number++;
						endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about section ends  -->

<!-- services section starts  -->
<section class="service-style-three  pb-70">
	<?php $fabrication = $pages->get('/fabrication/'); ?>
	<div class="container">
		<div class="section-title text-center">
			<span>
				<h1>
				<a href="<?php echo $pages->get('/essai/')->url?>">
					<?= $fabrication->section_title; ?>
				</a>
				</h1>
			</span>
		</div>
		<div class="row">
			<?php foreach ($fabrication->service_repeater as $service_card) : ?>
				<div class="col-lg-4 col-sm-6">
					<edit 1022.service_repeater.section_title>
					<div class="service-card text-center">
						<div class="service-img"
							style="background-position: center center;background-size: cover; background: url(<?= $service_card->image->url; ?>);">
						</div>
						<div class="service-content">
							<h3>
								<?= $service_card->section_title; ?>
							</h3>
						</div>
					</div>
				</edit>
				</div>

			<?php endforeach; ?>
		</div>
	</div>
	</div>
</section>
<!-- services section ends  -->

<!-- polutique qualitue section starts  -->
<?php $facilities = $pages->get('/facilities/') ?>
<section class="facilities-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 offset-lg-1 p-lg-0">
				<div class="facililties-text pt-100 pb-70">
					<div class="section-title ">
						<span>
							<edit 1030.section_title>
							<h1>
							<a href="<?php echo $pages->get('/realisation/')->url?>">
								<?= $facilities->section_title; ?>
							</a>
							</h1>
							</edit>
						</span>
						<edit 1030.sub_title>
						<h3>
							<?= $facilities->sub_title; ?>
						</h3>
					</edit>
					</div>
					<ul>
						<?php foreach ($facilities->points as $item) : ?>
							<edit 1030.points.section_title>
						<li>
							<div class="objectif">
								<div>
									<i class="fas fa-check"></i>
								</div>
								<?= $item->section_title ?>
							</div>
						</li>
						</edit>
						<?php 
						endforeach; ?>
					</ul>

				</div>
			</div>
			<div class="col-lg-6 p-0">
				<div class="facilities-img">
					<edit 1030.image>
					<img src="<?= $facilities->image->url; ?>" alt="pbs mr fabrication pbs sahel" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
					>
				</edit>
				</div>
			</div>
		</div>
	</div>
</section>

<!--  polutique qualitue section ends -->


<!-- clients  section starts  -->
<section class="client-section bggray py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="client-outer">
					<div class="slick-slider client-slider">
						<?php foreach ($pages->get('/clients/')->images as $logo) : ?>
						<div class="item  logo-item  wow slideInLeft" data-wow-delay=".5s">
							<edit 1044.images.icon_image>
								<img src="<?= $logo->icon_image->url; ?>" class="img-fluid client-img"
									alt="pbs clients pbs sahel | pbs mr">
							</edit>
							<h3>
								<?= $logo->section_title; ?>
							</h3>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- clients  section ends  -->
<!-- select menu styling -->



<?php include('foot.inc') ?>