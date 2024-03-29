<footer class="footer">
			<div class="footer__container">
				<div class="footer__column">
					<div class="footer__logo">
						<a href="#">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" width="110" height="40" alt="logo">
						</a>
					</div>

					<p class="footer__text">
						Condimentum adipiscing vel neque dis nam parturient
						orci at scelerisque neque dis nam parturient.
					</p>

					<div class="footer__contacts">
						<ul>
							<li>
								<a href="#">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.008 5.156a2.969 2.969 0 1 0 0 5.938 2.969 2.969 0 0 0 0-5.938zm0 5a2.031 2.031 0 1 1 2.031-2.031 2.04 2.04 0 0 1-2.031 2.031zm0-8.75a6.727 6.727 0 0 0-6.719 6.719c0 2.414 1.125 4.977 3.242 7.414a19.36 19.36 0 0 0 3.211 2.969.47.47 0 0 0 .266.086.517.517 0 0 0 .273-.086 19.859 19.859 0 0 0 3.203-2.969c2.125-2.437 3.243-5 3.243-7.414a6.727 6.727 0 0 0-6.72-6.719zm0 16.133c-1.172-.906-5.781-4.758-5.781-9.414a5.781 5.781 0 0 1 11.562 0c0 4.656-4.61 8.508-5.781 9.414z" fill="#777" />
									</svg>
									<span>451 Wall Street, UK, London</span>
								</a>
							</li>
							<li>
								<a href="tel:0643321233">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.942 1.72H6.058a1.988 1.988 0 0 0-1.866 2.084v12.392a1.988 1.988 0 0 0 1.866 2.083h7.884a1.988 1.988 0 0 0 1.866-2.083V3.804a1.988 1.988 0 0 0-1.866-2.083zm1.033 14.476a1.16 1.16 0 0 1-1.033 1.25H6.058a1.159 1.159 0 0 1-1.033-1.25V3.804a1.16 1.16 0 0 1 1.033-1.25h1.275v.425a.833.833 0 0 0 .834.833h3.666a.833.833 0 0 0 .834-.833v-.425h1.275a1.16 1.16 0 0 1 1.033 1.25v12.392z" fill="#777" />
										<path d="M8.333 15.778h3.334a.416.416 0 1 0 0-.833H8.333a.416.416 0 1 0 0 .833z" fill="#777" />
									</svg>

									<span>Phone: (064) 332-1233</span>
								</a>
							</li>
							<li>
								<a href="tel:0643321233">
									<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M17.5 4.063h-15a.312.312 0 0 0-.313.312V15a.937.937 0 0 0 .938.938h13.75a.938.938 0 0 0 .938-.938V4.375a.312.312 0 0 0-.313-.313zM10 10.828l-6.695-6.14h13.39L10 10.828zM8.172 10l-5.36 4.914V5.086L8.172 10zm.46.422 1.157 1.055a.305.305 0 0 0 .422 0l1.156-1.055 5.328 4.89H3.305l5.328-4.89zM11.829 10l5.36-4.914v9.828L11.828 10z" fill="#777" />
									</svg>
									<span>Fax: (099) 453-1357</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer__column">
					<h4 class="footer__column_title">RECENT POSTS</h4>
					<div class="footer__blog">
						<div class="footer__post">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/blog/sleeping.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/blog/sleeping.png" class="footer__post_thumbnail" width="75" height="65" alt="thumbnail"></picture>
							<div class="footer__post_block">
								<h5 class="footer__post_title">
									A companion for extra sleeping
								</h5>
								<p class="footer__post_meta">
									July 23, 2016
								</p>
							</div>
						</div>
						<div class="footer__post">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/blog/inspiration.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/blog/inspiration.png" class="footer__post_thumbnail" width="75" height="65" alt="thumbnail"></picture>
							<div class="footer__post_block">
								<h5 class="footer__post_title">
									Outdoor seating collection inspiration
								</h5>
								<p class="footer__post_meta">
									July 23, 2016
								</p>
							</div>
						</div>
					</div>

				</div>
				<?php if (is_active_sidebar('sidebar-footer-left')): ?>
				<div class="footer__column">
					<h4 class="footer__column_title">OUR STORES</h4>
					<?php dynamic_sidebar('sidebar-footer-left') ?>
				</div>
				<?php endif; ?>
				<?php if (is_active_sidebar('sidebar-footer-right')): ?>
				<div class="footer__column">
					<h4 class="footer__column_title">USEFUL LINKS</h4>
					<?php dynamic_sidebar('sidebar-footer-right') ?>
				</div>
				<?php endif; ?>
			</div>
		</footer>
	</div>
	
	<?php wp_footer();?>
</body>

</html>