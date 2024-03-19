<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>

<main class="page">

	<section class="hero">
		<div class="hero__container">
			<div class="hero__content">
				<h3 class="hero__sub-heading">
					Donec sollicitudin
				</h3>
				<h1 class="hero__heading">
					JEWELLERY STORE
				</h1>
				<p class="hero__desc">
					An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting
					favourable now unpleasing. Son law garden chatty temper. Oh children provided to mr
					elegance marriage strongly
				</p>
				<div class="hero__btn-block">
					<a href="#" class="hero__btn btn btn-white">shop now</a>
					<a href="#" class="hero__btn btn btn-black">VIEW MORE</a>
				</div>
			</div>
		</div>
	</section>

	<section class="sollicitudin">
		<div class="sollicitudin__container">
			<div class="sollicitudin__illustration">
				<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/donec_sollicitudin.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/donec_sollicitudin.png" width="624" height="500" alt="Donec sollicitudin"></picture>
			</div>
			<div class="sollicitudin__content">
				<h4 class="sollicitudin__sub-heading sub-heading">Donec sollicitudin</h4>
				<h2 class="sollicitudin__heading h2">JEWELLERY <br> <small>STORE</small></h2>
				<p class="sollicitudin__desc">
					An sincerity so extremity he additions. Her yet there truth merit.
					Mrs all projecting favourable now unpleasing.
					Son law garden chatty temper. Oh children provided to mr elegance marriage strongly.
				</p>
				<div class="sollicitudin__btn-block">
					<a href="#" class="sollicitudin_btn btn btn-grey">shop now</a>
					<a href="#" class="sollicitudin_btn btn btn-outline">VIEW MORE</a>
				</div>
			</div>
		</div>
	</section>

	<section class="featured-products">
		<div class="featured-products__container">
			<h5 class="featured-products__sub-title sub-heading">
				Adipisicing elit
			</h5>
			<h3 class="featured-products__heading h3">
				FEATURED PRODUCTS
			</h3>
			<p class="featured-products__desc">
				There are many variations of passages of lorem ipsum available.
			</p>

			<div class="featured-products__futered">
				<div class="featured-products__card">
					<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/TRISTIQUE.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/TRISTIQUE.png" alt="TRISTIQUE"></picture>
					<h3 class="featured-products__card_title">
						TRISTIQUE JUSTO
					</h3>
					<p class="featured-products__card_text">
						Started now shortly had for assured hearing expense led juvenile.
					</p>

					<a href="#" class="featured-products__card_btn btn">Shop now</a>
				</div>

				<div class="featured-products__slider-wrap">
					<div class="products__slider swiper">
						<div class="products__wrapper swiper-wrapper">
							<?php 
								$productCategory = get_field( "product_category" ); 
								$numberSlides = get_field( "number_slides" ); 
							?>
							<?php foreach(getProducts($productCategory, $numberSlides) as $prod) {?>
								<div class="products__slide swiper-slide">
									<div class="products__slide_thumbnail">
										<picture><source srcset="<?php echo $prod['img']; ?>" type="image/webp"><img src="<?php echo $prod['img']; ?>" width="250" height="270" alt="Curabitur sitamet"></picture>
									</div>
									<h4 class="products__slide_title">
										<?php echo $prod['title']; ?>
									</h4>
									<div class="products__slide_category">
										<?php echo $prod['category']; ?>
									</div>
									<div class="products__slide_price">
										<?php echo $prod['price']; ?>
									</div>
								</div>
							<?php }?>
						</div>
					</div>

					<!-- If we need navigation buttons -->
					<div class="swiper-navigation">
						<div class="swiper-button-prev products__btn-prev"></div>
						<div class="swiper-button-next products__btn-next"></div>
					</div>
				</div>
			</div>

			<div class="featured-products__futered">
				<div class="featured-products__card featured-products__card_white-text">
					<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/JUSTO.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/JUSTO.png" alt="TRISTIQUE"></picture>
					<h3 class="featured-products__card_title">
						TRISTIQUE JUSTO
					</h3>
					<p class="featured-products__card_text">
						Started now shortly had for assured hearing expense led juvenile.
					</p>

					<a href="#" class="featured-products__card_btn btn">Shop now</a>
				</div>

				<div class="featured-products__slider-wrap">
					<div class="products__slider_2 swiper">
						<div class="products__wrapper swiper-wrapper">

							<div class="products__slide swiper-slide">
								<div class="products__slide_thumbnail">
									<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/sitamet.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/sitamet.png" width="250" height="270" alt="Curabitur sitamet"></picture>
								</div>
								<h4 class="products__slide_title">
									Curabitur sitamet
								</h4>
								<div class="products__slide_category">
									Jewelry
								</div>
								<div class="products__slide_price">
									$169.00
								</div>
							</div>

							<div class="products__slide swiper-slide">
								<div class="products__slide_thumbnail">
									<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/accumsan.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/accumsan.png" width="250" height="270" alt="Porttitor accumsan"></picture>
								</div>
								<h4 class="products__slide_title">
									Porttitor accumsan
								</h4>
								<div class="products__slide_category">
									Jewelry
								</div>
								<div class="products__slide_price">
									$269.00
								</div>
							</div>

							<div class="products__slide swiper-slide">
								<div class="products__slide_thumbnail">
									<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/molestie.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/molestie.png" width="250" height="270" alt="Sollicitudin molestie"></picture>
								</div>
								<h4 class="products__slide_title">
									Sollicitudin molestie
								</h4>
								<div class="products__slide_category">
									Jewelry
								</div>
								<div class="products__slide_price">
									$169.00
								</div>
							</div>

							<div class="products__slide swiper-slide">
								<div class="products__slide_thumbnail">
									<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/Curabitur.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/Curabitur.png" width="250" height="270" alt="Curabitur sitamet"></picture>
								</div>
								<h4 class="products__slide_title">
									Curabitur sitamet
								</h4>
								<div class="products__slide_category">
									Jewelry
								</div>
								<div class="products__slide_price">
									$169.00
								</div>
							</div>
						</div>
					</div>

					<!-- If we need navigation buttons -->
					<div class="swiper-navigation">
						<div class="swiper-button-prev products__btn-prev_2"></div>
						<div class="swiper-button-next products__btn-next_2"></div>
					</div>
				</div>
			</div>


		</div>
	</section>

	<section class="special-offer">
		<div class="special-offer__container">
			<div class="special-offer__video-wrap">
				<video poster="<?php bloginfo('template_url'); ?>/assets/img/preview.jpg" class="special-offer__video" id="specialOfferPlayer">
					<source src="<?php bloginfo('template_url'); ?>/assets/img/video/BabyShark.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
					<source src="<?php bloginfo('template_url'); ?>/assets/img/video/BabyShark.mp4" type="video/mp4" />
				</video>

				<div class="special-offer__video-btn video__btn-wrp">
					<button class="video__btn"></button>
				</div>

			</div>
			<div class="special-offer__text">
				<h4 class="special-offer__sub-heading sub-heading">Special offer</h4>
				<h2 class="special-offer__heading h2">
					JEWELLERY BOX <br>
					<small>ALL IN ONE BOX</small>
				</h2>
				<a href="#" class="special-offer_btn btn btn-grey">shop now</a>
			</div>
		</div>
	</section>

	<section class="discount">
		<div class="discount__container">
			<div class="discount__text">
				<h2 class="discount__heading h2">
					DISCOUNT OF <span>20%</span> <br>
					<small>ON ALL GOLD RINGS</small>
				</h2>

				<p class="discount__desc">
					She exposed painted fifteen are noisier mistake led waiting.
					Surprise not wandered speedily husbands although yet end.
					Are court tiled cease young built fat one man taken. We highest
					ye friends is exposed equally in. Ignorant had too.
				</p>

				<div class="discount__list">
					<ul class="list">
						<li class="list__item">
							His six are entreaties instrument acceptance unsatiable.
						</li>
						<li class="list__item">
							Iscovery commanded fat mrs remaining son she principle.
						</li>
						<li class="list__item">
							Settling you has separate supplied bed concluded resembled.
						</li>
						<li class="list__item">
							Cause dried no solid no an small so still width ten weather.
						</li>
					</ul>
				</div>

				<div class="discount__btn-block">
					<a href="#" class="discount__btn btn btn-grey">Go to shop</a>
					<a href="#" class="discount__btn btn btn-outline">VIEW MORE</a>
				</div>
			</div>

			<div class="discount__illustration">
				<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/discount.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/discount.png" width="585" height="520" alt="discount"></picture>
			</div>
		</div>
	</section>

	<section class="mauris-rhoncus">
		<div class="mauris-rhoncus__container">
			<div class="mauris-rhoncus__offer">
				<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/jewelry-banner.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/jewelry-banner.png" class="mauris-rhoncus__offer_bg" width="577" height="334" alt="Mauris Rhoncus"></picture>
				<div class="mauris-rhoncus__offer_block">
					<h5 class="mauris-rhoncus__sub-title">
						Special offer
					</h5>
					<h3 class="mauris-rhoncus__heading">
						Mauris
						Rhoncus
					</h3>
					<p class="mauris-rhoncus__text">
						Curabitur non nullat amet.
					</p>
					<a href="#" class="mauris-rhoncus__btn btn btn-grey">view more</a>
				</div>
			</div>

			<div class="mauris-rhoncus__products">
				<div class="mauris-rhoncus__products-colum">
					<h4 class="mauris-rhoncus__products_heading">
						FEATURED PRODUCTS
					</h4>
					<div class="mauris-rhoncus__products_item">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/Curabitur_sitamet.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/Curabitur_sitamet.png" class="mauris-rhoncus__products_img" width="65" height="65" alt="Curabitur sitamet"></picture>
						<div class="mauris-rhoncus__products_block">
							<h5 class="mauris-rhoncus__products_title">Curabitur sitamet</h5>
							<p class="mauris-rhoncus__products_price">$169.00</p>
						</div>
					</div>
					<div class="mauris-rhoncus__products_item">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/Accumsan_tincidunt.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/Accumsan_tincidunt.png" class="mauris-rhoncus__products_img" width="65" height="65" alt="Curabitur sitamet"></picture>
						<div class="mauris-rhoncus__products_block">
							<h5 class="mauris-rhoncus__products_title">Accumsan tincidunt</h5>
							<p class="mauris-rhoncus__products_price">$199.00</p>
						</div>
					</div>
					<div class="mauris-rhoncus__products_item">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/Praesent_sapienmassa.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/Praesent_sapienmassa.png" class="mauris-rhoncus__products_img" width="65" height="65" alt="Curabitur sitamet"></picture>
						<div class="mauris-rhoncus__products_block">
							<h5 class="mauris-rhoncus__products_title">Praesent sapienmassa</h5>
							<p class="mauris-rhoncus__products_price">$119.00</p>
						</div>
					</div>
				</div>
				<div class="mauris-rhoncus__products-colum">
					<h4 class="mauris-rhoncus__products_heading">
						NEW PRODUCTS
					</h4>

					<div class="mauris-rhoncus__products_item">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/Sollicitudin_molestie.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/Sollicitudin_molestie.png" class="mauris-rhoncus__products_img" width="65" height="65" alt="Curabitur sitamet"></picture>
						<div class="mauris-rhoncus__products_block">
							<h5 class="mauris-rhoncus__products_title">Sollicitudin molestie</h5>
							<p class="mauris-rhoncus__products_price">$259.00</p>
						</div>
					</div>
					<div class="mauris-rhoncus__products_item">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/Primis_faucibus.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/Primis_faucibus.png" class="mauris-rhoncus__products_img" width="65" height="65" alt="Curabitur sitamet"></picture>
						<div class="mauris-rhoncus__products_block">
							<h5 class="mauris-rhoncus__products_title">Primis faucibus orci</h5>
							<p class="mauris-rhoncus__products_price">$239.00</p>
						</div>
					</div>
					<div class="mauris-rhoncus__products_item">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/products/Donec_sollicitudin.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/products/Donec_sollicitudin.png" class="mauris-rhoncus__products_img" width="65" height="65" alt="Curabitur sitamet"></picture>
						<div class="mauris-rhoncus__products_block">
							<h5 class="mauris-rhoncus__products_title">Donec sollicitudin</h5>
							<p class="mauris-rhoncus__products_price">$219.00</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="blog">
		<div class="blog__container">
			<h5 class="blog__sub-title sub-heading">Adipisicing elit</h5>
			<h3 class="blog__heading h3">JEWELRY DESIGN BLOG</h3>
			<p class="blog__desc">
				There are many variations of passages of lorem ipsum available.
			</p>

			<div class="blog__slider-wrapper">
				<div class="blog__slider swiper">
					<div class="blog__wrapper swiper-wrapper">

						<div class="blog__slide swiper-slide">
							<div class="blog__thumbnail">
								<div class="blog__date">
									<p class="blog__date_day">23</p>
									<p class="blog__date_mont">JUL</p>
								</div>
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/blog/sleeping.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/blog/sleeping.png" alt="Wooden accessories"></picture>
								<div class="blog__dots">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="blog__category">
								Wooden accessories
							</div>

							<h4 class="blog__title">
								A flat-picked chair made of a seat and sticks
							</h4>

							<div class="blog__meta">
								<p class="blog__by">Posted by</p>
								<picture><source srcset="img" type="image/webp"><img src="img" alt=""></picture>
								<p class="blog__autor">S. Rogers</p>
							</div>

							<p class="blog__text">
								Parturient in potenti id rutrum duis torquent parturient sceler
								isque sit vestibulum a posuere scelerisque viverra urna.
								 Egestas tristique vestib...
							</p>

							<a href="#" class="blog__btn">Continue reading</a>
						</div>

						<div class="blog__slide swiper-slide">
							<div class="blog__thumbnail">
								<div class="blog__date">
									<p class="blog__date_day">23</p>
									<p class="blog__date_mont">JUL</p>
								</div>
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/blog/Pic.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/blog/Pic.png" alt="Wooden accessories"></picture>
								<div class="blog__dots">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="blog__category">
								Wooden accessories
							</div>

							<h4 class="blog__title">
								A flat-picked chair made of a seat and sticks
							</h4>

							<div class="blog__meta">
								<p class="blog__by">Posted by</p>
								<picture><source srcset="img" type="image/webp"><img src="img" alt=""></picture>
								<p class="blog__autor">S. Rogers</p>
							</div>

							<p class="blog__text">
								Parturient in potenti id rutrum duis torquent parturient sceler
								isque sit vestibulum a posuere scelerisque viverra urna.
								 Egestas tristique vestib...
							</p>

							<a href="#" class="blog__btn">Continue reading</a>
						</div>

						<div class="blog__slide swiper-slide">
							<div class="blog__thumbnail">
								<div class="blog__date">
									<p class="blog__date_day">23</p>
									<p class="blog__date_mont">JUL</p>
								</div>
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/blog/chair.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/blog/chair.png" alt="Wooden accessories"></picture>
								<div class="blog__dots">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="blog__category">
								Wooden accessories
							</div>

							<h4 class="blog__title">
								A flat-picked chair made of a seat and sticks
							</h4>

							<div class="blog__meta">
								<p class="blog__by">Posted by</p>
								<picture><source srcset="img" type="image/webp"><img src="img" alt=""></picture>
								<p class="blog__autor">S. Rogers</p>
							</div>

							<p class="blog__text">
								Parturient in potenti id rutrum duis torquent parturient sceler
								isque sit vestibulum a posuere scelerisque viverra urna.
								 Egestas tristique vestib...
							</p>

							<a href="#" class="blog__btn">Continue reading</a>
						</div>

						<div class="blog__slide swiper-slide">
							<div class="blog__thumbnail">
								<div class="blog__date">
									<p class="blog__date_day">23</p>
									<p class="blog__date_mont">JUL</p>
								</div>
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/blog/sleeping.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/blog/sleeping.png" alt="Wooden accessories"></picture>
								<div class="blog__dots">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
							<div class="blog__category">
								Wooden accessories
							</div>

							<h4 class="blog__title">
								A flat-picked chair made of a seat and sticks
							</h4>

							<div class="blog__meta">
								<p class="blog__by">Posted by</p>
								<picture><source srcset="img" type="image/webp"><img src="img" alt=""></picture>
								<p class="blog__autor">S. Rogers</p>
							</div>

							<p class="blog__text">
								Parturient in potenti id rutrum duis torquent parturient sceler
								isque sit vestibulum a posuere scelerisque viverra urna.
								 Egestas tristique vestib...
							</p>

							<a href="#" class="blog__btn">Continue reading</a>
						</div>

					</div>
				</div>

				<!-- If we need navigation buttons -->
				<div class="swiper-navigation">
					<div class="swiper-button-prev blog__btn-prev"></div>
					<div class="swiper-button-next blog__btn-next"></div>
				</div>
			</div>
		</div>
	</section>

<pre>
	<?php var_dump($products); ?>
</pre>


</main>

<?php get_footer();?>