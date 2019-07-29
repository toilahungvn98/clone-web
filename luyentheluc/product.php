<!DOCTYPE html>
<html>

<head>
	<?php require_once 'common/head.php'; ?>
</head>

<body>
	<?php require_once 'common/header.php'; ?>
   
	<main id="productPage">
		<!-- overlay close all -->
		<div class="overlay-close"></div>
		<?php require_once 'common/breadcrumb.php'; ?>
		<div class="uk-container uk-container-center">
			<div class="banner">
				<div class="owl-carousel">
					<div class="item">
						<div class="banner__img">
							<a href="" title="">
								<img src="resources/img/upload/product-banner-1.jpg" alt="produc-banner-1">
								<div class="banner__img--content">
									<div class="title-medium">Sale 50% off</div>
									<div class="title-big">Modern $ style new television</div>
									<p class="paragraphy">Be quick! Only 100 products avaiable <br/> at this sale price</p>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="banner__img">
							<a href="" title="">
								<img src="resources/img/upload/product-banner-2.jpg" alt="produc-banner-2">
								<div class="banner__img--content">
									<div class="title-medium">Sale 50% off</div>
									<div class="title-big">Modern $ style new television</div>
									<p class="paragraphy">Be quick! Only 100 products avaiable <br/> at this sale price</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="categories">
				<div class="owl-carousel">
					<?php 
					$cateName = [
						1 => 'Accessories',
						2 => 'Baby & toys',
						3 => 'Beauty',
						4 => 'Electronics',
						5 => 'Fashion',
						6 => 'Sport & travel'
					];
					for($j = 1 ; $j <= 6; $j++) { ?>
						<div class="item">
							<div class="categories__img">
								<a href="#" title="<?= $cateName[$j]; ?>">
									<img src="resources/img/upload/c1.jpg" alt="categories-<?= $cateName[$j]; ?>" class="img-cover">
									<div class="categories__img--content">
										<h2 class="categories-title"><span><?= $cateName[$j]; ?></span></h2>
									</div>
								</a>
							</div>
						</div>
					<?php } ?>

				</div>
			</div>
			<!-- top nav -->
			<div class="product-nav top uk-flex uk-flex-middle uk-flex-space-between">
				<div class="left uk-flex">
					<div class="overlay-grid uk-flex">
						<div class="view-mode uk-flex">
							<span  class="btn grid-view active" data-btn-grid>
								<i class="fa fa-th" ></i>
							</span>
							<span  class="btn list-view" data-btn-list>
								<i class="fa fa-th-list"></i>
							</span>	
						</div>
						<div class="order-by uk-flex">
							<ul class="uk-list uk-clearfix order-list">
								<li class="item">
									<span class="current-item">
										<span class="current-item-content">Sort by Default</span>
									</span>
									<ul class="uk-list uk-clearfix sub-list-order">
										<?php 
										$nameSort = [
											'Default',
											'Popularity',
											'Rating',
											'Date',
											'Price'
										];
										for($j = 0; $j < count($nameSort); $j++) { ?>
											<li class="item desc"><a href="" title="">Sort by <?= $nameSort[$j]; ?></a></li>
										<?php } ?>
									</ul>
								</li>
							</ul>
							<ul class="uk-list uk-clearfix order">
								<li class="item desc">
									<a href="#" title="">
										<i class="fa fa-long-arrow-up"></i>
									</a>
								</li>						
							</ul>
							<div class="uk-flex show">
								<span class="show-product">Show</span>
								<ul class="uk-list uk-clearfix show-list">
									<li class="item">
										<span class="current-item"><a href="" title="">12</a></span>
										<ul class="uk-list uk-clearfix sub-list">
											<li class="item"><a href="" title="">12</a></li>
											<li class="item"><a href="" title="">24</a></li>
										</ul>
									</li>
								</ul>				
							</div>
						</div>
						<div class="close">
							<i class="fa fa-times"></i>
						</div>
					</div>

					<div class="menu-select" title="menu">
						<div class="hamburger-bar" >
							<span class="open"><i class="fa fa-bars" ></i></span>					
						</div>
					</div>
				</div>
              
				<div class="right ">
					<div class="page-product uk-flex">
						<span class="page">Page:</span>
						<ul class="uk-list uk-clearfix uk-flex list-page">
							<li class="item active"><a href="" title="">1</a></li>
							<li class="item"><a href="" title="">2</a></li>
							<li class="item"><a href="" title=""><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				
			</div>
			<div class="product-section grid">
				<ul class="uk-list uk-clearfix uk-grid uk-grid-medium uk-grid-width-large-1-4 uk-grid-width-medium-1-3 uk-grid-width-small-1-2 uk-grid-width-1-2 product">
					<?php 
					for($p = 1; $p <= 11; $p++) {?>
						<li class="item">
							<div class="product__item">
								<header class="product__item--img">
									<a href="" title="" class="image img-scaledown">
										<img src="resources/img/upload/p-1.jpg" alt="product-1">
									</a>
									<div class="overlay-btn">
										<ul class="uk-list uk-clearfix uk-flex uk-flex-middle list-choose">
											<li class="icon">
												<a href="" title="" >
													<i class="fa fa-shopping-cart"></i>
												</a>
											</li>
											<li class="icon">
												<a href="" title="" >
													<i class="fa fa-exchange"></i>
												</a>
											</li>
											<li class="icon">
												<a href="" title="" >
													<i class="fa fa-heart-o"></i>
												</a>
											</li>
											<li class="icon">
												<a href="" title="" >
													<i class="fa fa-search" ></i>
												</a>
											</li>

										</ul>
									</div>
								</header>
								<section class="product__item--content">
									<div class="rating-review">
										<span class="rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</span>
									</div>
									<div class="name-product">
										<a href="" title="" class="name">Fatback Enim Velit</a>
									</div>
									<div class="price">
										<span class="price-num">$100.00</span>
									</div>
								</section>
							</div>
						</li>
					<?php } ?>
					
				</ul>
			</div>
			<div class="product-section list">
				<ul class="uk-list uk-clearfix uk-grid uk-grid-medium uk-grid-width-large-1-1 uk-grid-width-medium-1-1 uk-grid-width-small-1-1 product">
					<?php 
					for($p = 1; $p <= 11; $p++) {?>
						<li class="item">
							<div class="product__item clearfix">
								<header class="product__item--img ">
									<a href="" title="" class="image img-scaledown">
										<img src="resources/img/upload/p-1.jpg" alt="product-1">
									</a>

								</header>

								<section class="product__item--content">
									<div class="rating-review">
										<span class="rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</span>
									</div>
									<div class="name-product">
										<a href="" title="" class="name">Fatback Enim Velit</a>
									</div>
									<div class="price">
										<span class="price-num">$100.00</span>
									</div>

									<div class="description ">
										<p class="paragrahp">Proin nunc nibh, adipiscing eu nisi id, ultrices suscipit augue. Sed rhoncus hendrerit lacus, et venenatis felis. Donec ut fringilla magna ultrices suscipit augue. Proin nunc nibh, adipiscing eu nisi id, ultrices suscipit augue. Sed rhoncus hendrerit lacus, et venenatis felis. Donec ut fringilla magna ultrices suscipit augue.</p>
									</div>

									<div class="block-btn">
										<ul class="uk-list uk-clearfix uk-flex uk-flex-middle list-choose">
											<li class="icon addToCart">
												<a href="" title="" >
													<i class="fa fa-shopping-cart"></i>
													<span class="addCart">Add to cart</span>
												</a>
											</li>
											<li class="icon">
												<a href="" title="" >
													<i class="fa fa-exchange"></i>
												</a>
											</li>
											<li class="icon">
												<a href="" title="" >
													<i class="fa fa-heart-o"></i>
												</a>
											</li>
											<li class="icon">
												<a href="" title="" >
													<i class="fa fa-search" ></i>
												</a>
											</li>

										</ul>
									</div>
								</section>
								
							</div>
						</li>
					<?php } ?>
					
				</ul>
			</div>

			<!-- bottom nav -->
			<div class="product-nav bottom uk-flex uk-flex-middle uk-flex-space-between">
				<div class="left uk-flex">
					<div class="overlay-grid uk-flex">
						<div class="view-mode uk-flex">
							<span  class="btn grid-view active" data-btn-grid>
								<i class="fa fa-th" ></i>
							</span>
							<span  class="btn list-view" data-btn-list>
								<i class="fa fa-th-list"></i>
							</span>	
						</div>
						<div class="order-by uk-flex">
							<ul class="uk-list uk-clearfix order-list">
								<li class="item">
									<span class="current-item">
										<span class="current-item-content">Sort by Default</span>
									</span>
									<ul class="uk-list uk-clearfix sub-list-order">
										<?php 
										$nameSort = [
											'Default',
											'Popularity',
											'Rating',
											'Date',
											'Price'
										];
										for($j = 0; $j < count($nameSort); $j++) { ?>
											<li class="item desc"><a href="" title="">Sort by <?= $nameSort[$j]; ?></a></li>
										<?php } ?>
									</ul>
								</li>
							</ul>
							<ul class="uk-list uk-clearfix order">
								<li class="item desc">
									<a href="#" title="">
										<i class="fa fa-long-arrow-up"></i>
									</a>
								</li>						
							</ul>
							<div class="uk-flex show">
								<span class="show-product">Show</span>
								<ul class="uk-list uk-clearfix show-list">
									<li class="item">
										<span class="current-item"><a href="" title="">12</a></span>
										<ul class="uk-list uk-clearfix sub-list">
											<li class="item"><a href="" title="">12</a></li>
											<li class="item"><a href="" title="">24</a></li>
										</ul>
									</li>
								</ul>				
							</div>
						</div>
						<div class="close">
							<i class="fa fa-times"></i>
						</div>
					</div>

					<div class="menu-select" title="menu">
						<div class="hamburger-bar" >
							<span class="open"><i class="fa fa-bars" ></i></span>					
						</div>
					</div>
				</div>
              
				<div class="right ">
					<div class="page-product uk-flex">
						<span class="page">Page:</span>
						<ul class="uk-list uk-clearfix uk-flex list-page">
							<li class="item active"><a href="" title="">1</a></li>
							<li class="item"><a href="" title="">2</a></li>
							<li class="item"><a href="" title=""><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</main>


	<?php require_once 'common/footer.php'; ?>
	<?php require_once 'common/offcanvas.php'; ?>
	<?php require_once 'common/script.php'; ?>
</body>

</html>