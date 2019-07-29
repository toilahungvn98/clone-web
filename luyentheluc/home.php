<!DOCTYPE html>
<html>

<head>
	<?php require_once 'common/head.php'; ?>
</head>

<body>
	<?php require_once 'common/header.php'; ?>

	<main id="homepage">

		<div class="uk-container uk-container-center">
			<!-- block grid -->
			<div id="bar1" class="section-bar block-grid">
				<header id="block-btn">
					<ul class="uk-list uk-clearfix   list-active ">
						<li class="">
							<span class="btn-grid active"  data-toggle="tab1">Bestselling</span>
						</li>
						<li class="">
							<span class="btn-grid" data-toggle="tab2">Categoies</span>
						</li>
						<li class="">
							<span class="btn-grid" data-toggle="tab3">Highlights</span>
						</li>
						<li class="">
							<span class="btn-grid" data-toggle="tab4">Promotions</span>
						</li>
						<li class="">
							<span class="btn-grid" data-toggle="tab5">top brand</span>
						</li>
						<li class="">
							<span class="btn-grid" data-toggle="tab6" >top deals</span>
						</li>

					</ul>

				</header>
				<!-- grid system -->
				<section class="block-tabGrid">
					<div id="tab1" class="tabcontent is-open" data-tab="tab1">
						<ul class="grid-container uk-list ">

							<?php for($i = 1; $i <= 6 ; $i++) { ?>
								<li class="grid-item item<?= $i?>">
									<a href="" title="" class="image img-cover">
										<img src="resources/img/upload/banner-<?= $i ?>.jpg" alt="banner<?= $i ?>">
									</a>
								</li>
							<?php } ?>

						</ul>
					</div>
					<!-- tab2 -->
					<div id="tab2" class="tabcontent" data-tab="tab2">
						<ul class="grid-container uk-list ">

							<?php for($i = 1; $i <= 9 ; $i++) { ?>
								<li class="grid-item item<?= $i?>">
									<a href="" title="" class="image img-cover">
										<img src="resources/img/upload/ct<?= $i ?>.jpg" alt="ct<?= $i ?>">
									</a>
								</li>
							<?php } ?>

						</ul>
					</div>

					<div id="tab3" class="tabcontent" data-tab="tab3">
						<ul class="grid-container uk-list ">

							<?php for($i = 1; $i <= 8 ; $i++) { ?>
								<li class="grid-item item<?= $i?>">
									<a href="" title="" class="image img-cover">
										<img src="resources/img/upload/hi<?= $i ?>.jpg" alt="highlight<?= $i ?>">
									</a>
								</li>
							<?php } ?>

						</ul>
					</div>

					<div id="tab4" class="tabcontent" data-tab="tab4">
						<ul class="grid-container uk-list ">

							<?php for($i = 1; $i <= 6 ; $i++) { ?>
								<li class="grid-item item<?= $i?>">
									<a href="" title="" class="image img-cover">
										<img src="resources/img/upload/pro<?= $i ?>.jpg" alt="pro<?= $i ?>">
									</a>
								</li>
							<?php } ?>

						</ul>
					</div>
					<div id="tab5" class="tabcontent" data-tab="tab5">
						<ul class="grid-container uk-list ">

							<?php for($i = 1; $i <= 5 ; $i++) { ?>
								<li class="grid-item item<?= $i?>">
									<a href="" title="" class="image img-cover">
										<img src="resources/img/upload/brand<?= $i ?>.jpg" alt="brand<?= $i ?>">
									</a>
								</li>
							<?php } ?>

						</ul>
					</div>
					<div id="tab6" class="tabcontent" data-tab="tab6">
						<ul class="grid-container uk-list ">

							<?php for($i = 1; $i <= 3 ; $i++) { ?>
								<li class="grid-item item<?= $i?>">
									<a href="" title="" class="image img-cover">
										<img src="resources/img/upload/deal<?= $i ?>.jpg" alt="deal<?= $i ?>">
									</a>
								</li>
							<?php } ?>

						</ul>
					</div>
				</section>
			</div>
			<!-- end grid system -->
			<!-- slider -->
			<div id="bar2" class="section-bar slider">
				<header class="panel-head">
					<div class="uk-flex uk-flex-middle uk-flex-space-between line">
						<div class="left">
							<h2 class="panel-title ">
								<span>Hashtags trend</span>
							</h2>
						</div>
						<div class="right">
							<a href="" title="" class="see-all">See All</a>
						</div>
					</div>
				</header>
				<section class="panel-content">

					<div class="owl-carousel">
						<?php for($i = 1; $i <= 6; $i++) {?>
							<div class="item">
								<div class="slide-img">
									<a href="" title="" class="image ">
										<img src="resources/img/upload/trend<?= $i ?>.jpg" alt="trend<?= $i ?>">
									</a>

									<h3 class="slide-text">
										<a href="" title="">Electronics</a>
									</h3>

								</div>
							</div>

						<?php } ?>

					</div>
					
				</section>
			</div>

			<!-- flash-sale -->
			<div id="bar3" class="section-bar flash-sale">

				<header class="panel-head">
					<div class="uk-flex uk-flex-middle uk-flex-space-between line">
						<div class="left">
							<h2 class="panel-title ">
								<span>Flash Saler</span>
							</h2>
						</div>
					<!-- 	<div class="right">
						
						</div>
					-->	
				</div>
			</header>
			<section class="panel-content">
				<div class="flash">
					<ul class="uk-list uk-clearfix uk-grid uk-grid-width-large-1-2  uk-grid-width-small-1-1">
						<li class="flash-li">
							<div class="flash-block">
								<div class="flash-banner icon-flash">
									<a href="" title="" class="image img-cover">
										<img src="resources/img/upload/flash-banner-1.jpg" alt="flash-banner-1">
									</a>
								</div>

								<div class="flash-product">
									<ul class="uk-list uk-clearfix owl-carousel">
										<?php for($j = 1; $j < 3; $j++ ) { ?>
											<li class="item">
												<div class="uk-flex sub-flash">
													<div class="flash-thumb">
														<a href="" title="" class="image img-scaledown">
															<img class="img" src="resources/img/upload/flash-pro-<?= $j ?>.jpg" alt="flash-pro-<?= $j ?>">
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
													</div>
													<div class="flash-info">
														<div class="flash-cate">
															<a href="" title="" class="cate">
																Accessories for Tablet
															</a>
														</div>
														<div class="rating-review">
															<span class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-o"></i>
															</span>
															<span class="review"> 2 Review(s)</span>
														</div>
														<div class="name-product">
															<a href="" title="" class="name">Fatback Enim Velit</a>
														</div>
														<div class="price">
															<span class="price-root">$150.00</span>
															<span class="price-sale">$100.00</span>
														</div>
														<div class="coutdown uk-flex uk-flex-start">
															<span class="days uk-flex uk-flex-column">
																<span class="num">0</span>
																<span class="text">days</span>
															</span>
															<span class="dot">:</span>
															<span class="hours uk-flex uk-flex-column ">
																<span class="num">0</span>
																<span class="text">hours</span>
															</span>
															<span class="dot">:</span>
															<span class="mins uk-flex uk-flex-column ">
																<span class="num">0</span>
																<span class="text">mins</span>
															</span>
															<span class="dot">:</span>
															<span class="secs uk-flex uk-flex-column ">
																<span class="num">0</span>
																<span class="text">secs</span>
															</span>
														</div>

													</div>
												</div>
											</li>

										<?php } ?>
									</ul>
								</div>
							</div>			
						</li>
						<?php 
						for($i = 2; $i <= 4; $i++) { ?>
							<li class="flash-li">
								<div class="flash-block">
									<div class="flash-banner icon-flash">
										<a href="" title="" class="image img-cover">
											<img src="resources/img/upload/flash-banner-<?= $i ?>.jpg" alt="flash-banner-<?= $i ?>">
										</a>
									</div>

									<div class="flash-product">
										<div class="uk-flex uk-flex-top sub-flash">
											<div class="flash-thumb">
												<a href="" title="" class="image img-scaledown">
															<img class="img" src="resources/img/upload/flash-pro-<?= $i ?>.jpg" alt="flash-pro-<?= $i ?>">
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
											</div>
											<div class="flash-info">
												<div class="flash-cate">
													<a href="" title="" class="cate">
														Accessories for Tablet
													</a>
												</div>
												<div class="rating-review">
													<span class="rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</span>
													<span class="review"> 2 Review(s)</span>
												</div>
												<div class="name-product">
													<a href="" title="" class="name">Fatback Enim Velit</a>
												</div>
												<div class="price">
													<span class="price-root">$150.00</span>
													<span class="price-sale">$100.00</span>
												</div>
												<div class="coutdown uk-flex uk-flex-start">
													<span class="days uk-flex uk-flex-column">
														<span class="num">0</span>
														<span class="text">days</span>
													</span>
													<span class="dot">:</span>
													<span class="hours uk-flex uk-flex-column ">
														<span class="num">0</span>
														<span class="text">hours</span>
													</span>
													<span class="dot">:</span>
													<span class="mins uk-flex uk-flex-column ">
														<span class="num">0</span>
														<span class="text">mins</span>
													</span>
													<span class="dot">:</span>
													<span class="secs uk-flex uk-flex-column ">
														<span class="num">0</span>
														<span class="text">secs</span>
													</span>
												</div>
												
											</div>
										</div>
									</div>
								</div>			
							</li>

						<?php } ?>

						
					</ul>
				</div>		
			</section>
		</div>

		<!-- show-product -->


		<?php

		$dataImage = [
			4 => 'cate1.jpg',
			5 => 'cate2.jpg',
			6 => 'cate3.jpg'
		];
		$dataName = [
			4 => 'Fashion & beauty',
			5 => 'TECHNOLOGY',
			6 => 'FURNITURE & DECOR'
		];
		$dataColor = [
			4 => '#FEB555',
			5 =>'#38ACBF',
			6 => '#20B096'
		];


		for($j = 4; $j <= 6; $j++) {?>
			<div id="bar<?= $j; ?>" class="section-bar categorys" data-color="<?= $dataColor[$j]; ?>">
				<header class="panel-head" >
					<div class="uk-flex uk-flex-middle uk-flex-space-between ">
						<div class="left">
							<div class="uk-flex uk-flex-middle uk-flex-wrap">
								<div class="category-title">
									<h3 class="title"><a href="" title=""><?= $dataName[$j]; ?></a></h3>
								</div>
								<div class="links">
									<a href="" title="" class="see-all">See All</a>
								</div>
							</div>
						</div>
						<div class="right">
							<ul  class="uk-list uk-clearfix uk-flex uk-flex-middle list-menu">
								<li class="line-col">
									<a href="" title="">Television</a>
								</li>
								<li class="line-col">
									<a href="" title="">Air Conditional</a>
								</li>
								<li class="line-col">
									<a href="" title="">Laptops</a>
								</li>
								<li class="line-col">
									<a href="" title="">Accessories For Tablet</a>
								</li>
								<li class="line-col">
									<a href="" title="">Headphone</a>
								</li>

							</ul>

							<div class="menu-bar" title="menu">
								<div class="hamburger-bar" data-navbar="<?= $j; ?>">
									<span class="open"><i class="fa fa-bars" ></i></span>					
								</div>
							</div>


						</div>
					</div>
					<div class="overlay-menu "  data-open-navbar="<?= $j; ?>">
						<span class="close"><i class="fa fa-times" ></i></span>
							<ul id="navigationBar<?= $j; ?>" class="uk-list uk-clearfix uk-flex uk-flex-middle list-menu">
									<li class="line-col">
										<a href="" title="">Television</a>
									</li>
									<li class="line-col">
										<a href="" title="">Air Conditional</a>
									</li>
									<li class="line-col">
										<a href="" title="">Laptops</a>
									</li>
									<li class="line-col">
										<a href="" title="">Accessories For Tablet</a>
									</li>
									<li class="line-col">
										<a href="" title="">Headphone</a>
									</li>
									<li class="line-col">
										<a href="" title="">Fashion</a>
									</li>
									<li class="line-col">
										<a href="" title="">Cap</a>
									</li>
									<li class="line-col">
										<a href="" title="">T-Shirt</a>
									</li>
									<li class="line-col">
										<a href="" title="">Backpack</a>
									</li>
									<li class="line-col">
										<a href="" title="">shoes</a>
									</li>
									<li class="line-col">
										<a href="" title="">Iphone</a>
									</li>
									<li class="line-col">
										<a href="" title="">Samsung</a>
									</li>
									<li class="line-col">
										<a href="" title="">Motorola</a>
									</li>
									<li class="line-col">
										<a href="" title="">Lenovo</a>
									</li>
									
								</ul>
					</div>
				</header>
				<section class="panel-content">
					<div class="block-category uk-flex">
						<div class="category-banner ">
							<a href="" title="" class="image img-cover">
								<img src="resources/img/upload/<?= $dataImage[$j]; ?>" alt="<?= $dataName[$j]; ?>">
							</a>
						</div>
						<div class="block-product uk-flex">

							<?php for($i = 1; $i <= 9; $i++)  {?>

								<div class="product ">
									<div class="product-info">
										<div class="badge-saleOff"><span>-26%</span></div>
										<div class="rating-review">
											<span class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</span>
											<span class="review"> 2 Review(s)</span>
										</div>
										<div class="name-product">
											<a href="" title="" class="name">Fatback Enim Velit</a>
										</div>
										<div class="price">
											<span class="price-root">$150.00</span>
											<span class="price-sale">$100.00</span>
										</div>

									</div>		

									<div class="product-img">
										<a href="" title="" class="image img-scaledown">
											<img src="resources/img/upload/pro-<?= $i ?>.jpg" alt="pro-<?= $i ?>.jpg">
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
									</div>					
								</div>


							<?php }?>

						</div>

					</div>
				</section>

			</div>
		<?php } ?>








		<!-- logo brand -->
		<div class="logo-brand">
			<div class="owl-carousel">
				<?php for($i = 1; $i <= 4; $i++ ){?>
					<div class="item">
						<a href="" title="" class="image img-scaledown">
							<img src="resources/img/upload/logo-brand<?= $i ?>.jpg" alt="ogo-brand<?= $i ?>">
						</a>
					</div>
				<?php }?>
			</div>
		</div>

	</div> <!-- end uk-container -->

	<div class="aside-choose">
		<ul class="uk-list uk-clearfix list-bar">
			<?php 
			$nameBar = [
				1 => 'BestSelling',
				2 => 'Hashtags',
				3 => "Flash Saler",
				4 => 'Fashion',
				5 => 'Technology', 
				6 => 'Furniture'
			];
			for($i = 1; $i <= 6; $i++  ){ ?>
				<li class="bar ">
					<a href="#bar<?= $i ?>" title="<?= $nameBar[$i];  ?>" class="btn-bar">	
						<img src="resources/img/upload/bar<?= $i ?>.png" alt="bar<?= $i ?>">
					</a>			
				</li>
			<?php } ?>
		</ul>
	</div>


</main>


<?php require_once 'common/footer.php'; ?>
<?php require_once 'common/offcanvas.php'; ?>
<?php require_once 'common/script.php'; ?>
</body>

</html>