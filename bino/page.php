<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bino
 */

get_header();
?>

<section>
	<div class="container">
		<div class="row who-we">
			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 who-we-block" data-aos="fade-right">
				<div class="who-we-block__square">
					<img src="<?php echo get_template_directory_uri() ?>/img/who-we__icon_01.png" alt="">
				</div>
				<h1 class="who-we-block__title">Sleek design</h1>
				<div class="who-we-block__line"></div>
				<p class="who-we-block__discr">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 who-we-block" data-aos="fade-right">
				<div class="who-we-block__square">
					<img src="<?php echo get_template_directory_uri() ?>/img/who-we__icon_02.png" alt="">
				</div>
				<h1 class="who-we-block__title">Clean code</h1>
				<div class="who-we-block__line"></div>
				<p class="who-we-block__discr">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 who-we-block" data-aos="fade-left">
				<div class="who-we-block__square">
					<img src="<?php echo get_template_directory_uri() ?>/img/who-we__icon_03.png" alt="">
				</div>
				<h1 class="who-we-block__title">Creative ideas</h1>
				<div class="who-we-block__line"></div>
				<p class="who-we-block__discr">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
			</div>

			<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 who-we-block" data-aos="fade-left">
				<div class="who-we-block__square">
					<img src="<?php echo get_template_directory_uri() ?>/img/who-we__icon_04.png" alt="">
				</div>
				<h1 class="who-we-block__title">Free support</h1>
				<div class="who-we-block__line"></div>
				<p class="who-we-block__discr">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
			</div>
		</div>
	</div>
</section>

<section id="about-us">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 about-us__image" data-aos="fade-right">
				<img src="<?php echo get_template_directory_uri() ?>/img/Monitor.png" alt="" class="monitor">
			</div>
			<div class="col-xl-6 col-lg-6 about-us__info" data-aos="fade-left">
				<h1 data-aos="fade-left"><?php the_field('about_us_title'); ?></h1>
				<?php the_field('about_us_discription'); ?>
				<a href="#" class="bino-btn"><?php the_field('about_us_button_text'); ?></a>
			</div>
		</div>
	</div>
</section>

<section class="our-services">
	<div class="our-services__info">
		<h1 class="our-services__heading" data-aos="fade-right">Our services</h1>
		<div class="our-services__slider">
			<div class="our-services__slider_slide">
				<div class="our-services__slide-block">
					<div class="our-services__slide-block_info">
						<h1>Web design</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
					</div>
					<div class="our-services__slide-block_image">
						<img src="<?php echo get_template_directory_uri() ?>/img/web-design__icon.png" alt="">
					</div>
				</div>
				<div class="our-services__slide-block">
					<div class="our-services__slide-block_info">
						<h1>Print design</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
					</div>
					<div class="our-services__slide-block_image">
						<img src="<?php echo get_template_directory_uri() ?>/img/print-design__icon.png" alt="">
					</div>
				</div>
				<div class="our-services__slide-block">
					<div class="our-services__slide-block_info">
						<h1>Photography</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
					</div>
					<div class="our-services__slide-block_image">
						<img src="<?php echo get_template_directory_uri() ?>/img/photography__icon.png" alt="">
					</div>
				</div>
			</div>

			<div class="our-services__slider_slide">
				<div class="our-services__slide-block">
					<div class="our-services__slide-block_info">
						<h1>Web design</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
					</div>
					<div class="our-services__slide-block_image">
						<img src="<?php echo get_template_directory_uri() ?>/img/web-design__icon.png" alt="">
					</div>
				</div>
				<div class="our-services__slide-block">
					<div class="our-services__slide-block_info">
						<h1>Photography</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
					</div>
					<div class="our-services__slide-block_image">
						<img src="<?php echo get_template_directory_uri() ?>/img/photography__icon.png" alt="">
					</div>
				</div>
				<div class="our-services__slide-block">
					<div class="our-services__slide-block_info">
						<h1>Print design</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
					</div>
					<div class="our-services__slide-block_image">
						<img src="<?php echo get_template_directory_uri() ?>/img/print-design__icon.png" alt="">
					</div>
				</div>
			</div>

			<div class="our-services__slider_slide">
				<div class="our-services__slide-block">
					<div class="our-services__slide-block_info">
						<h1>Photography</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
					</div>
					<div class="our-services__slide-block_image">
						<img src="<?php echo get_template_directory_uri() ?>/img/photography__icon.png" alt="">
					</div>
				</div>
				<div class="our-services__slide-block">
					<div class="our-services__slide-block_info">
						<h1>Web design</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
					</div>
					<div class="our-services__slide-block_image">
						<img src="<?php echo get_template_directory_uri() ?>/img/web-design__icon.png" alt="">
					</div>
				</div>
				<div class="our-services__slide-block">
					<div class="our-services__slide-block_info">
						<h1>Print design</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ip sum has been the industry's standard dummy text ever.</p>
					</div>
					<div class="our-services__slide-block_image">
						<img src="<?php echo get_template_directory_uri() ?>/img/print-design__icon.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="our-services__image"></div>
</section>

<section id="works">
	<div class="container">
		<div class="row section-title">
			<h1 class="section-title__heading" data-aos="fade-right">Recent works</h1>
			<p class="section-title__discr" data-aos="fade-left">It has survived not only five centuries, but also the leap scrambled it to make a type.</p>
			<div class="divider" data-aos="fade-up">
				<div class="divider__line"></div>
				<div class="divider__circle"></div>
				<div class="divider__line"></div>
			</div>
		</div>

		<div class="row">
			<ul class="works-categories" data-aos="zoom-in">
				<li class="works-categories__category works-categories__category_all">All</li>
				<li class="works-categories__divider">/</li>
				<li class="works-categories__category works-categories__category_print-design">Print design</li>
				<li class="works-categories__divider">/</li>
				<li class="works-categories__category works-categories__category_animation">Animation</li>
				<li class="works-categories__divider">/</li>
				<li class="works-categories__category works-categories__category_art">Art</li>
				<li class="works-categories__divider">/</li>
				<li class="works-categories__category works-categories__category_web-design">Web design</li>
				<li class="works-categories__divider">/</li>
				<li class="works-categories__category works-categories__category_photography">Photography</li>
				<li class="works-categories__divider">/</li>
				<li class="works-categories__category works-categories__category_video">Video</li>
			</ul>
		</div>
	</div>

	<div class="our-works">
		<div class="work__all work__web-design work__animation">
			<img src="<?php echo get_template_directory_uri() ?>/img/work_01.jpg" alt="">
			<div class="work__hover">
				<div></div>
				<a href="">T-Shirt Design</a>
				<span>art / t-shirt</span>
			</div>
		</div>
		<div class="work__all work__photography">
			<img src="<?php echo get_template_directory_uri() ?>/img/work_02.jpg" alt="">
			<div class="work__hover">
				<div></div>
				<a href="">T-Shirt Design</a>
				<span>art / t-shirt</span>
			</div>
		</div>
		<div class="work__all work__print-design">
			<img src="<?php echo get_template_directory_uri() ?>/img/work_03.jpg" alt="">
			<div class="work__hover">
				<div></div>
				<a href="">T-Shirt Design</a>
				<span>art / t-shirt</span>
			</div>
		</div>
		<div class="work__all work__web-design">
			<img src="<?php echo get_template_directory_uri() ?>/img/work_04.jpg" alt="">
			<div class="work__hover">
				<div></div>
				<a href="">T-Shirt Design</a>
				<span>art / t-shirt</span>
			</div>
		</div>
		<div class="work__all work__art">
			<img src="<?php echo get_template_directory_uri() ?>/img/work_05.jpg" alt="">
			<div class="work__hover">
				<div></div>
				<a href="">T-Shirt Design</a>
				<span>art / t-shirt</span>
			</div>
		</div>
		<div class="work__all work__print-design">
			<img src="<?php echo get_template_directory_uri() ?>/img/work_06.jpg" alt="">
			<div class="work__hover">
				<div></div>
				<a href="">T-Shirt Design</a>
				<span>art / t-shirt</span>
			</div>
		</div>
		<div class="work__all work__print-design">
			<img src="<?php echo get_template_directory_uri() ?>/img/work_07.jpg" alt="">
			<div class="work__hover">
				<div></div>
				<a href="">T-Shirt Design</a>
				<span>art / t-shirt</span>
			</div>
		</div>
		<div class="work__all work__web-design work__video">
			<img src="<?php echo get_template_directory_uri() ?>/img/work_08.jpg" alt="">
			<div class="work__hover">
				<div></div>
				<a href="">T-Shirt Design</a>
				<span>art / t-shirt</span>
			</div>
		</div>
	</div>
</section>

<section class="section-study">
	<div class="container">
		<div class="row section-title">
			<h1 class="section-title__heading" data-aos="fade-right">Case study</h1>
			<p class="section-title__discr" data-aos="fade-left">A brief story about how this process works, keep an eye till the end.</p>
			<div class="divider" data-aos="fade-up">
				<div class="divider__line"></div>
				<div class="divider__circle"></div>
				<div class="divider__line"></div>
			</div>
		</div>
		<div class="row section-study__block">
			<div class="col-xl-7 offset-xl-0 col-lg-6 offset-lg-0 col-md-10 offset-md-1 col-sm-10 offset-sm-1 section-study__block-info">
				<div class="study-slider">
					<div class="study-slider__slide">
						<div class="study-slider__slide-square">
							<img src="<?php echo get_template_directory_uri() ?>/img/who-we__icon_03.png" alt="">
						</div>
						<h1 class="study-slider__slide-title">Accomulate creative ideas</h1>
						<div class="study-slider__slide-divider"></div>
						<p class="study-slider__slide-discr">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry Printing and typelorem Ipsum has been the setting let.</p>
						<div class="bino-btn">Read More</div>
					</div>
					<div class="study-slider__slide">
						<div class="study-slider__slide-square">
							<img src="<?php echo get_template_directory_uri() ?>/img/who-we__icon_02.png" alt="">
						</div>
						<h1 class="study-slider__slide-title">Accomulate clean code</h1>
						<div class="study-slider__slide-divider"></div>
						<p class="study-slider__slide-discr">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry Printing and typelorem Ipsum has been the setting let.</p>
						<div class="bino-btn">Read More</div>
					</div>
					<div class="study-slider__slide">
						<div class="study-slider__slide-square">
							<img src="<?php echo get_template_directory_uri() ?>/img/who-we__icon_01.png" alt="">
						</div>
						<h1 class="study-slider__slide-title">Accomulate sleek design</h1>
						<div class="study-slider__slide-divider"></div>
						<p class="study-slider__slide-discr">Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry Printing and typelorem Ipsum has been the setting let.</p>
						<div class="bino-btn">Read More</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 section-study__block-image">
				<img src="<?php echo get_template_directory_uri() ?>/img/study__image.jpg" alt="">
			</div>
		</div>
	</div>
</section>

<section id="section-statistic">
	<div class="container">
		<div class="row statisctic-info-block">
			<div class="statisctic-info">
				<div class="statisctic-info__icon">
					<img src="<?php echo get_template_directory_uri() ?>/img/statistic__image_01.png" alt="">
				</div>
				<span class="statisctic-info__amount">3891</span>
				<span class="statisctic-info__title">User Favourites</span>
			</div>
			<div class="statisctic-info">
				<div class="statisctic-info__icon">
					<img src="<?php echo get_template_directory_uri() ?>/img/statistic__image_02.png" alt="">
				</div>
				<span class="statisctic-info__amount">281375</span>
				<span class="statisctic-info__title">Posts Last 24 Hours</span>
			</div>
			<div class="statisctic-info">
				<div class="statisctic-info__icon">
					<img src="<?php echo get_template_directory_uri() ?>/img/statistic__image_03.png" alt="">
				</div>
				<span class="statisctic-info__amount">618</span>
				<span class="statisctic-info__title">Total Posts</span>
			</div>
			<div class="statisctic-info">
				<div class="statisctic-info__icon">
					<img src="<?php echo get_template_directory_uri() ?>/img/statistic__image_04.png" alt="">
				</div>
				<span class="statisctic-info__amount">178</span>
				<span class="statisctic-info__title">Campaigns</span>
			</div>
			<div class="statisctic-info">
				<div class="statisctic-info__icon">
					<img src="<?php echo get_template_directory_uri() ?>/img/statistic__image_05.png" alt="">
				</div>
				<span class="statisctic-info__amount">285</span>
				<span class="statisctic-info__title">Amazing Features</span>
			</div>
		</div>
	</div>
</section>

<section id="our-pricing">
	<div class="container">
		<div class="row section-title">
			<h1 class="section-title__heading" data-aos="fade-right">Our pricing</h1>
			<p class="section-title__discr" data-aos="fade-left">A 30 days free trial for all. A brief story about how this process works, keep an eye till the end.</p>
			<div class="divider" data-aos="fade-up">
				<div class="divider__line"></div>
				<div class="divider__circle"></div>
				<div class="divider__line"></div>
			</div>
		</div>
		<div class="row pricing-block" data-aos="zoom-in-up">
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 pricing">
				<div class="pricing__top">
					<h3>Starter</h3>
				</div>
				<div class="pricing__bottom">
					<div class="price-sircle">
						<span class="price-sircle__price">$19</span>
						<span class="price-sircle__on-month">per month</span>
					</div>
					<span>Competition Analysis Methods</span>
					<span>All Ranked URLs</span>
					<span>International Support System</span>
					<span>Social Media Tracking</span>
					<div class="bino-btn">Choosen plan</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 pricing">
				<div class="pricing__top">
					<h3>Premium</h3>
				</div>
				<div class="pricing__bottom">
					<div class="price-sircle">
						<span class="price-sircle__price">$39</span>
						<span class="price-sircle__on-month">per month</span>
					</div>
					<span>Competition Analysis Methods</span>
					<span>All Ranked URLs</span>
					<span>International Support System</span>
					<span>Social Media Tracking</span>
					<div class="bino-btn">Choosen plan</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 pricing">
				<div class="pricing__top">
					<h3>Bussines</h3>
				</div>
				<div class="pricing__bottom">
					<div class="price-sircle">
						<span class="price-sircle__price">$99</span>
						<span class="price-sircle__on-month">per month</span>
					</div>
					<span>Competition Analysis Methods</span>
					<span>All Ranked URLs</span>
					<span>International Support System</span>
					<span>Social Media Tracking</span>
					<div class="bino-btn">Choosen plan</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="our-team">
	<div class="container">
		<div class="row section-title">
			<h1 class="section-title__heading" data-aos="fade-right">Our team</h1>
			<p class="section-title__discr" data-aos="fade-left">Meet the craziest team. Share your thoughts with them.</p>
			<div class="divider" data-aos="fade-up">
				<div class="divider__line"></div>
				<div class="divider__circle"></div>
				<div class="divider__line"></div>
			</div>
		</div>
		<div class="row team">
			<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 team__member">
				<div class="team__member_img team__member_img-01"></div>
				<h5>Natali Jenkins</h5>
				<span>Web Designer</span>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 team__member">
				<div class="team__member_img team__member_img-02"></div>
				<h5>Kazi Erfan</h5>
				<span>UI/UX Designer</span>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 team__member">
				<div class="team__member_img team__member_img-03"></div>
				<h5>Klark Kent</h5>
				<span>Front-end</span>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 team__member">
				<div class="team__member_img team__member_img-04"></div>
				<h5>Ketty Nightly</h5>
				<span>Front-end</span>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 team__member">
				<div class="team__member_img team__member_img-05"></div>
				<h5>Rick WolfF</h5>
				<span>Back-end</span>
			</div>
		</div>
	</div>
</section>

<section id="our-clients">
	<div class="container">
		<div class="row section-title">
			<h1 class="section-title__heading" data-aos="fade-right">Great Integrations with Others</h1>
			<p class="section-title__discr" data-aos="fade-left">Suspendisse sed eros mollis, tincidunt felis eget, interdum erat. <br> Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum quam nec. </p>
			<div class="divider" data-aos="fade-up">
				<div class="divider__line"></div>
				<div class="divider__circle"></div>
				<div class="divider__line"></div>
			</div>
		</div>
		<div class="row clients" data-aos="zoom-in-up">
			<div><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/client_01.png" alt=""></a></div>
			<div><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/client_02.png" alt=""></a></div>
			<div><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/client_03.png" alt=""></a></div>
			<div><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/client_04.png" alt=""></a></div>
			<div><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/client_05.png" alt=""></a></div>
			<div><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/client_06.png" alt=""></a></div>
			<div><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/client_07.png" alt=""></a></div>
			<div><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/client_08.png" alt=""></a></div>
			<div><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/client_09.png" alt=""></a></div>
			<div><a href=""><img src="<?php echo get_template_directory_uri() ?>/img/client_10.png" alt=""></a></div>
		</div>
	</div>
</section>

<section id="our-blog">
	<div class="container">
		<div class="row section-title">
			<h1 class="section-title__heading" data-aos="fade-right">Our blog</h1>
			<p class="section-title__discr" data-aos="fade-left">Suspendisse sed eros mollis, tincidunt felis eget, interdum eratullam sit amet odio.</p>
			<div class="divider" data-aos="fade-up">
				<div class="divider__line"></div>
				<div class="divider__circle"></div>
				<div class="divider__line"></div>
			</div>
		</div>
	</div>

	<div class="blog-container">
		<div class="blog-container__block">
			<div class="blog-container__block_img">
				<img src="<?php echo get_template_directory_uri() ?>/img/blog__img_01.jpg" alt="">
			</div>
			<div class="blog-container__block_info">
				<span>art / t-shirt</span>
				<h3>T-SHIRT DESIGN</h3>
				<div class="blog-info__divider"></div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
				<a href="">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
				<div class="blog__trialgle"></div>
			</div>
		</div>
		<div class="blog-container__block">
			<div class="blog-container__block_img">
				<img src="<?php echo get_template_directory_uri() ?>/img/blog__img_02.jpg" alt="">
			</div>
			<div class="blog-container__block_info">
				<span>art / t-shirt</span>
				<h3>T-SHIRT DESIGN</h3>
				<div class="blog-info__divider"></div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
				<a href="">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
				<div class="blog__trialgle"></div>
			</div>
		</div>
		<div class="blog-container__block">
			<div class="blog-container__block_img">
				<img src="<?php echo get_template_directory_uri() ?>/img/blog__img_03.jpg" alt="">
			</div>
			<div class="blog-container__block_info">
				<span>art / t-shirt</span>
				<h3>T-SHIRT DESIGN</h3>
				<div class="blog-info__divider"></div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
				<a href="">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
				<div class="blog__trialgle"></div>
			</div>
		</div>
		<div class="blog-container__block">
			<div class="blog-container__block_img">
				<img src="<?php echo get_template_directory_uri() ?>/img/blog__img_04.jpg" alt="">
			</div>
			<div class="blog-container__block_info">
				<span>art / t-shirt</span>
				<h3>T-SHIRT DESIGN</h3>
				<div class="blog-info__divider"></div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indu Stry's standard dummy text ever since the 1500s, an unknown printer took a galley of type a scrambled it to make a type specimen book.</p>
				<a href="">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
				<div class="blog__trialgle"></div>
			</div>
		</div>
	</div>
</section>

<section id="our-contacts">
	<div class="container">
		<div class="row section-title">
			<h1 class="section-title__heading" data-aos="fade-right">Keep in touch</h1>
			<p class="section-title__discr" data-aos="fade-left">Nullam sit amet odio eu est aliquet euismod a a urna. Proin eu urna suscipit, dictum quam nec. </p>
			<div class="divider" data-aos="fade-up">
				<div class="divider__line"></div>
				<div class="divider__circle"></div>
				<div class="divider__line"></div>
			</div>
		</div>

		<div class="row contacts-block">
			<div class="col-xl-5 col-lg-5 col-md-5" data-aos="fade-right">
				<div class="contacts-block__info">
					<div>
						<span class="contact-title">Our addres</span>
						<span class="contact-info">House #13, Streat road, Sydney <br> 2310 Australia</span>
					</div>
					<div>
						<span class="contact-title">Call us</span>
						<span class="contact-info">+ 880 168 109 1425 <br>
							+ 021 68 09 142
						</span>
					</div>
					<div>
						<span class="contact-title">Email us</span>
						<span class="contact-info">contactus@email.com</span>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-7 col-md-7" data-aos="fade-left">
				<div class="contacts-block__form">
					<form class="" action="index.html" method="post">
						<input type="text" placeholder="Name">
						<input type="text" placeholder="Email">
						<input type="text" placeholder="Subject">
						<input type="text" placeholder="Message">
					</form>
					<div class="bino-btn">Send Message</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="trial">
	<div class="container">
		<div class="row">
			<h2 class="trial__title" data-aos="fade-right">Let's Get Started Now. <span>It's FREE!</span></h2>
			<span class="trial__discr" data-aos="fade-left">30 day free trial. Free plan allows up to 2 projects. Pay if you need more. Cancel anytime. No catches.</span>
			<div class="bino-btn" data-aos="fade-up">Start free trial</div>
		</div>
	</div>
</section>

<?php

get_footer();
