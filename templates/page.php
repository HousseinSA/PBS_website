<?php

namespace ProcessWire;
?>

<?php include('head.inc'); ?>
<!-- hero section start  -->
<div class="slider-section">
	<!-- revolution slider -->

	<section class="no-top no-bottom" aria-label="section-slider">
		<!-- home -->
		<div class="fullwidthbanner-container">
			<div id="revolution-slider-half">
				<?php $hero_section = $pages->get('/hero-section/') ?>
				<ul>

					<?php foreach ($hero_section->hero_repeater as $hero) : ?>
						<li data-transition="slidehorizontal" data-slotamount="10" data-masterspeed="1200" data-delay="8000">
							<img style="z-index: 1;" src="<?= $hero->image->url; ?>" alt="PBS | Poteaux Béton du Sahel" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center center" />
							<div class="tp-caption slide_mask  sfl tp-resizeme " data-x="0" data-y="0" data-speed="500" data-start="10" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style=" max-width: auto; max-height: auto; white-space: nowrap;">
							</div>
							<div class="tp-caption slide-big-heading sft" data-x="0" data-y="220	" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="450">
								<?= $hero_section->section_title; ?>
							</div>
							<div class="tp-caption slide-sub-heading sft" data-x="0" data-y="300" data-speed="1000" data-start="800" data-easing="easeOutExpo" data-endspeed="400">
								<?= $hero_section->sub_title; ?>
							</div>
						</li>
					<?php endforeach; ?>

				</ul>
				<div class="tp-bannertimer hide"></div>
			</div>
		</div>

		<div class="mobile_hero">
			<h2>
				<?= $hero_section->section_title; ?>
			</h2>
			<p>
				<?= $hero_section->sub_title; ?>
			</p>
		</div>
		<!-- home end -->
	</section>
	<!-- revolution slider end -->
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
					<img src="<?= $about->image->url; ?>" alt="PBS | Poteaux Béton du Sahel" class="img-fluid rounded">
				</div>
			</div>
			<!-- Text column -->
			<div class="col-lg-7">
				<div class="about-text">
					<div class="section-title ">
						<span>
							<h2><?= $about->section_title; ?></h2>
						</span>
						<?php
						$item_number = 1;
						?>
						<?php foreach ($about->objectifs_repeater as $item) :  ?>
							<edit 1021.objectifs_repeater>
								<div class="objectif">
									<div>
											<i>	<?= $item_number; ?>
									</div>
								<p>	<?= $item->object_details; ?> </p>
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
				<h2><?= $fabrication->section_title; ?></h2>
			</span>
		</div>
		<div class="row">
			<?php foreach ($fabrication->service_repeater as $service_card) : ?>
				<edit 1022.service_repeater.section_title>
					<div class="col-lg-4 col-sm-6">
						<div class="service-card text-center">
							<div class="service-img" style="background-position: center center;background-size: cover; background: url(<?= $service_card->image->url; ?>);">
							</div>
							<div class="service-content">
								<h3>
									<?= $service_card->section_title; ?>
								</h3>
							</div>
						</div>
					</div>
				</edit>

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
						<h2	>	<?= $facilities->section_title; ?></h2>
						</span>
						<h3>
							<?= $facilities->sub_title; ?>
						</h3>
						<?= $facilities->section_description; ?>
					</div>
					<ul>
						<?php $item_number = 1; ?>
						<?php foreach ($facilities->points as $item) : ?>
							<li>
								<div class="objectif">
									<div>
										<!-- <?= $item_number; ?> -->
										<i class="fas fa-check"></i>
									</div>
									<?= $item->section_title ?>
								</div>
							</li>
						<?php $item_number++;
						endforeach; ?>
					</ul>

				</div>
			</div>
			<div class="col-lg-6 p-0">
				<div class="facilities-img" style="background-position: center center ; background-size: cover; background: url(<?= $facilities->image->url; ?>) ">
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
									<img src="<?= $logo->icon_image->url; ?>" class="img-fluid client-img" alt="PBS |Poteaux Béton du Sahel">
								</edit>

								<h3><?= $logo->section_title; ?></h3>
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