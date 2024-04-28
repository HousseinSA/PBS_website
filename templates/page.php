<?php

namespace ProcessWire;

$page->edit(true);
?>
<?php include('head.inc'); ?>
<!-- hero section start  -->

<div class="slider-section">
	<!-- revolution slider -->
	<section class="no-top no-bottom" aria-label="section-slider">
		<!-- home -->
		<div class="fullwidthbanner-container">
			<div id="revolution-slider-half">
				<ul>
					<?php foreach ($pages->get('/hero-section/')->children() as $hero) : ?>
						<li data-transition="fade" data-slotamount="10" data-masterspeed="1200" data-delay="5000">
							<!--  BACKGROUND IMAGE -->
							<img src="<?php echo $hero->image->url; ?>" alt="" data-start="0" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="100" data-bgpositionend="center center" />
							<div class="tp-caption slide_mask  sfl tp-resizeme " data-x="0" data-y="0" data-speed="500" data-start="10" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style=" max-width: auto; max-height: auto; white-space: nowrap;">
							</div>
							<div class="tp-caption slide-big-heading sft" data-x="30" data-y="220	" data-speed="800" data-start="400" data-easing="easeInOutExpo" data-endspeed="450">
								<?php echo $hero->section_title; ?>
							</div>
							<div class="tp-caption slide-sub-heading sft" data-x="30" data-y="300" data-speed="1000" data-start="800" data-easing="easeOutExpo" data-endspeed="400">
								<?php echo $hero->sub_title; ?>
							</div>
							<!-- <div class="tp-caption btn-slider sfb" data-x="30" data-y="390" data-speed="400"
							data-start="800" data-easing="easeInOutExpo">
							<span class="shine"></span><a href="#">More Detail</a>
						</div> -->
						</li>
					<?php endforeach; ?>
				</ul>
				<div class="tp-bannertimer hide"></div>
			</div>
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
					<img src="<?php echo $about->image->url; ?>" alt="about image" class="img-fluid rounded">
				</div>
			</div>
			<!-- Text column -->
			<div class="col-lg-7">
				<div class="about-text">
					<div class="section-title ">
						<span>
							<?php echo $about->title; ?>
						</span>
						<?php
						$item_number = 1;
						?>
						<?php foreach ($about->objectifs_repeater as $item) :  ?>
							<div class="objectif">
								<div>
									<?php echo $item_number; ?>
								</div>
								<?php echo $item->section_description ?>
							</div>
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
	<?php $service = $pages->get('/fabrication/'); ?>
	<div class="container">
		<div class="section-title text-center">
			<span>
				<?php echo $service->title; ?>
			</span>
			<h2>
				<?php echo $service->section_title; ?>
			</h2>
			<?php echo $service->section_description; ?>
		</div>
		<div class="row">
			<?php foreach ($service->children() as $service_card) : ?>
				<div class="col-lg-4 col-sm-6">
					<div class="service-card text-center">
						<div class="service-img" style="background-position: center center;background-size: cover; background: url(<?php echo $service_card->image->url; ?>);">
						</div>
						<div class="service-content">

							<h3>
								<?php echo $service_card->title; ?>
							</h3>

						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
	</div>
</section>
<!-- services section ends  -->

<!-- facilities section starts  -->
<?php $facilities = $pages->get('/facilities/') ?>
<section class="facilities-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 offset-lg-1 p-lg-0">
				<div class="facililties-text pt-100 pb-70">
					<div class="section-title ">
						<span>
							<?php echo $facilities->title; ?>
						</span>
						<h2>
							<?php echo $facilities->sub_title; ?>
						</h2>
						<?php echo $facilities->section_description; ?>
					</div>
					<ul>
						<?php $item_number = 1; ?>
						<?php foreach ($facilities->points as $item) : ?>
							<div class="objectif">
								<div>
									<?php echo $item_number; ?>
								</div>
								<li>
									<?php echo $item->section_title ?>
								</li>
							</div>
						<?php $item_number++;  endforeach; ?>
					</ul>
					</div>
			</div>
			<div class="col-lg-6 p-0">
				<div class="facilities-img" style="background-position: center center ; background-size: cover; background: url(<?php echo  $facilities->image->url; ?>) ">
				</div>
			</div>
		</div>
	</div>
</section>

<!--  facilities section ends -->



<!-- clients  section starts  -->
<section class="client-section bggray py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="client-outer">
					<div class="slick-slider client-slider">
						<?php foreach ($pages->get('/clients/')->images as $logo) : ?>
							<div class="item  logo-item  wow slideInLeft" data-wow-delay=".5s">
								<img src="<?php echo $logo->icon_image->url; ?>" class="img-fluid" alt="Imageteam">
								<h3><?php echo $logo->section_title; ?></h3>
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