<!DOCTYPE html>

<html lang="zxx">

<head>

	<!-- Meta Options -->
	<?php $this->load->view("display/load/header")?>
	

	<!-- Banner Start -->

	<section class="banner position-relative">

		<div class="parallax" style="background-image: url(<?php echo base_url();?>images/<?php echo $header["photo"]?>);"></div>

			<div class="banner-data text-center">

				<h2 class="text-white font-bold" style='text-shadow: 2px 2px 4px #000000'><?php echo $header["title"]?></h2>

				<ul class="flex-all">

					<li><a href="<?php echo base_url()?>" style='text-shadow: 2px 2px 4px #000000' class="text-white">Home</a></li>


				</ul>
			</div>

	</section>

	<!-- Banner End -->

    

	<!-- Contact Us Start -->

	<section class="gap contact-us">

<div class="heading">

	<h2 class="m-auto">Contact Us</h2>

</div>

<div class="container">

	<div class="row">


		<div class="col-lg-6 col-md-12 col-sm-12">

			<div class="content">

				<div class="c-detail d-flex" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
				<span class="font-bold">United States</span>

					<ul>

						<li><span class="font-bold">Address:  </span><?php echo $info["address"]?></li>

						<li><span class="font-bold">Telephone:  </span><?php echo $info["telephone"]?></li>

						<li><span class="font-bold">Email:  </span> <?php echo $info["email"]?></li>

					</ul>

				</div>

	

			</div>

		</div>

		<div class="col-lg-6 col-md-12 col-sm-12" id="contact">
<?php 	echo '<div style="text-align:center; color:red;"><b>' . validation_errors() . '</b></div><br>';
				if(isset($feedback)) echo $feedback?>
			<?php print form_open("home/send");
												?>
                 <?php print form_input("name", set_value("name", ""), 'required placeholder="Full Name" data-aos="fade-up" data-aos-delay="100" data-aos-duration="400"') ?>
                 <?php print form_input("email", set_value("email", ""), 'required placeholder="Email Id" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500" type="email"') ?>
                 <?php print form_input("text", set_value("text", ""), 'required placeholder="Subject" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500"') ?>
                 <?php print form_textarea("message", set_value("message", ""), 'placeholder="Your Message" required data-aos="fade-up" data-aos-delay="400" name="message" data-aos-duration="700"') ?>
				 <?php print form_submit("Submit", "Send Message", 'class="theme-btn" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800" style="text-align:center;"') ?>

			
<?php echo form_close()?>
		</div>

	</div>
	<div class="map">
<div class="container" >
<div class="heading">
	<img src="<?php echo base_url();?>images/event.svg" alt="Heading Image">
		<h1>Get Directions</h2>
		<p>Locate Us Wherever you are</p>
		<br>
	</div>
	<div class="col-lg-12 col-md-12">
					<div class="row">
					<?php echo $info["googlemap"]?>
						
						
					</div>
					
				</div>
	</div>
</div>
	<!-- Social Media Start -->

	<div class="s-medias">

		<div class="container">

			<ul class="flex-all position-relative">

				<li class="flex-all">

					<a href="<?php echo $info["facebook"]?>" class="flex-all rounded-circle">

						<svg id="gggg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg>

					</a>

					<p class="font-bold">Facebook Page</p>

				</li>

				<li class="flex-all">

					<a href="<?php echo $info["twitter"]?>" class="flex-all rounded-circle">

						<svg version="1.1" id="sdsff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016 c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992 c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056 c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152 c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792 c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44 C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568 C480.224,136.96,497.728,118.496,512,97.248z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>

					</a>

					<p class="font-bold">Follow us on Twitter</p>

				</li>

				<li class="flex-all">

					<a href="<?php echo $info["instagram"]?>" class="flex-all rounded-circle">

						<svg viewBox="0 0 511 511.9"  xmlns="http://www.w3.org/2000/svg"><path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"/><path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"/><path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"/></svg>

					</a>

					<p class="font-bold">Instagram Updates</p>

				</li>

			</ul>

		</div>

	</div>

	<!-- Social Media End -->


</section>

<!-- Contact Us End -->


	<!-- Sermon Detail End -->


	<?php $this->load->view("display/load/footer")?>

</body>

</html>