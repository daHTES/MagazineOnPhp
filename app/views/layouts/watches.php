<!DOCTYPE html>
<html>
<head>
	<base href="/">
    <?= $this->getMeta();?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="megamenu/css/ionicons.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="megamenu/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body> 
	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					<div class="drop">
						<div class="box">
							<select id="currency" tabindex="4" class="dropdown drop">
							<?php new \app\widgets\currency\Currency();?>
							</select>
						</div>
						<div class="btn-group">
							<a class="dropdown-toggle" data-toggle="dropdown">Account <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<?php if(!empty($_SESSION['user'])): ?>
								<li><a href="#">Добро пожаловать, <?=h($_SESSION['user']['name']);?></a></li>
								<li><a href="user/logout">Выход</a></li>
							<?php else: ?>
									<li><a href="user/login">Вход</a></li>
									<li><a href="user/signup">Регистрация</a></li>
							<?php endif; ?>
						 </ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 top-header-left">
					<div class="cart box_1">
					<a href="cart/show" onclick="getCart(); return false;">
						<div class="total">
							<img src="images/cart-1.png" alt=""/>
							<?php if(!empty($_SESSION['cart'])): ?>
								<span class="simpleCart_total"><?=$_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum'] .$_SESSION['cart.qty'];?></span>
							<?php else: ?>
								<span class="simpleCart_total">Empty Cart</span>
							<?php endif;?>
						</div>
				    </a>
						 <!---<a href="checkout.html">
							<div class="total">
								<span class="simpleCart_total"></span></div>
								<img src="/images/cart-1.png" alt=""/></a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>-->
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<a href="<?PATH;?>"><h1>Luxury Watches</h1></a>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
					<div class="menu-container">
					   <div class="menu">
						<?php new \app\widgets\menu\Menu([
								'tpl' => WWW . '/menu/menu.php',
						]); ?>
					  </div>
					 </div>
				<!--<div class="top-nav">
					<ul class="memenu skyblue"><li class="active"><a href="index.html">Home</a></li>
						<li class="grid"><a href="#">Men</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>
											<li><a href="products.html">New Arrivals</a></li>
											<li><a href="products.html">Blazers</a></li>
											<li><a href="products.html">Swem Wear</a></li>
											<li><a href="products.html">Accessories</a></li>
											<li><a href="products.html">Handbags</a></li>
											<li><a href="products.html">T-Shirts</a></li>
											<li><a href="products.html">Watches</a></li>
											<li><a href="products.html">My Shopping Bag</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Style Zone</h4>
										<ul>
											<li><a href="products.html">Shoes</a></li>
											<li><a href="products.html">Watches</a></li>
											<li><a href="products.html">Brands</a></li>
											<li><a href="products.html">Coats</a></li>
											<li><a href="products.html">Accessories</a></li>
											<li><a href="products.html">Trousers</a></li>
										</ul>	
									</div>
									<div class="col1 me-one">
										<h4>Popular Brands</h4>
										<ul>
											<li><a href="products.html">499 Store</a></li>
											<li><a href="products.html">Fastrack</a></li>
											<li><a href="products.html">Casio</a></li>
											<li><a href="products.html">Fossil</a></li>
											<li><a href="products.html">Maxima</a></li>
											<li><a href="products.html">Timex</a></li>
											<li><a href="products.html">TomTom</a></li>
											<li><a href="products.html">Titan</a></li>
										</ul>		
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Women</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>
											<li><a href="products.html">New Arrivals</a></li>
											<li><a href="products.html">Blazers</a></li>
											<li><a href="products.html">Swem Wear</a></li>
											<li><a href="products.html">Accessories</a></li>
											<li><a href="products.html">Handbags</a></li>
											<li><a href="products.html">T-Shirts</a></li>
											<li><a href="products.html">Watches</a></li>
											<li><a href="products.html">My Shopping Bag</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Style Zone</h4>
										<ul>
											<li><a href="products.html">Shoes</a></li>
											<li><a href="products.html">Watches</a></li>
											<li><a href="products.html">Brands</a></li>
											<li><a href="products.html">Coats</a></li>
											<li><a href="products.html">Accessories</a></li>
											<li><a href="products.html">Trousers</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Popular Brands</h4>
										<ul>
											<li><a href="products.html">499 Store</a></li>
											<li><a href="products.html">Fastrack</a></li>
											<li><a href="products.html">Casio</a></li>
											<li><a href="products.html">Fossil</a></li>
											<li><a href="products.html">Maxima</a></li>
											<li><a href="products.html">Timex</a></li>
											<li><a href="products.html">TomTom</a></li>
											<li><a href="products.html">Titan</a></li>
										</ul>	
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="#">Kids</a>
							<div class="mepanel">
								<div class="row">
									<div class="col1 me-one">
										<h4>Shop</h4>
										<ul>
											<li><a href="products.html">New Arrivals</a></li>
											<li><a href="products.html">Blazers</a></li>
											<li><a href="products.html">Swem Wear</a></li>
											<li><a href="products.html">Accessories</a></li>
											<li><a href="products.html">Handbags</a></li>
											<li><a href="products.html">T-Shirts</a></li>
											<li><a href="products.html">Watches</a></li>
											<li><a href="products.html">My Shopping Bag</a></li>
										</ul>
									</div>
									<div class="col1 me-one">
										<h4>Style Zone</h4>
										<ul>
											<li><a href="products.html">Shoes</a></li>
											<li><a href="products.html">Watches</a></li>
											<li><a href="products.html">Brands</a></li>
											<li><a href="products.html">Coats</a></li>
											<li><a href="products.html">Accessories</a></li>
											<li><a href="products.html">Trousers</a></li>
										</ul>	
									</div>
									<div class="col1 me-one">
										<h4>Popular Brands</h4>
										<ul>
											<li><a href="products.html">499 Store</a></li>
											<li><a href="products.html">Fastrack</a></li>
											<li><a href="products.html">Casio</a></li>
											<li><a href="products.html">Fossil</a></li>
											<li><a href="products.html">Maxima</a></li>
											<li><a href="products.html">Timex</a></li>
											<li><a href="products.html">TomTom</a></li>
											<li><a href="products.html">Titan</a></li>
										</ul>	
									</div>
								</div>
							</div>
						</li>
						<li class="grid"><a href="typo.html">Blog</a>
						</li>
						<li class="grid"><a href="contact.html">Contact</a>
						</li>
					</ul>
				</div>-->
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 header-right"> 
				<div class="search-bar">
					<form action="search" autocomplete="off">
						<input type="text" class="typeahead" id="typeahead" name="s">
						<input type="submit" value="">
					</form>
					<!--<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">-->
				</div>
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>

    <div class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if(isset($_SESSION['error'])): ?>
						<div class="aleft alert-danger">
							<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
						</div>
					<?php endif;?>
					<?php if(isset($_SESSION['success'])): ?>
						<div class="aleft alert-success">
							<?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
						</div>
					<?php endif;?>
				</div>
			</div>
		</div>
		<?= $content?>
    </div>
	
	<div class="information">
		<div class="container">
			<div class="infor-top">
				<div class="col-md-3 infor-left">
					<h3>Follow Us</h3>
					<ul>
						<li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
						<li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
						<li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Information</h3>
					<ul>
						<li><a href="#"><p>Specials</p></a></li>
						<li><a href="#"><p>New Products</p></a></li>
						<li><a href="#"><p>Our Stores</p></a></li>
						<li><a href="contact.html"><p>Contact Us</p></a></li>
						<li><a href="#"><p>Top Sellers</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>My Account</h3>
					<ul>
						<li><a href="account.html"><p>My Account</p></a></li>
						<li><a href="#"><p>My Credit slips</p></a></li>
						<li><a href="#"><p>My Merchandise returns</p></a></li>
						<li><a href="#"><p>My Personal info</p></a></li>
						<li><a href="#"><p>My Addresses</p></a></li>
					</ul>
				</div>
				<div class="col-md-3 infor-left">
					<h3>Store Information</h3>
					<h4>The company name,
						<span>Lorem ipsum dolor,</span>
						Glasglow Dr 40 Fe 72.</h4>
					<h5>+955 123 4567</h5>	
					<p><a href="mailto:example@email.com">contact@example.com</a></p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--information-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-6 footer-left">
					<form>
						<input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="col-md-6 footer-right">					
					<p>© 2023 Luxury Watches. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--footer-end-->

<!--Модальное окно корзины-->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Корзина</h4>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
				<a href="cart/view" type="button" class="btn btn-primary">Оформить заказ</a>
				<button type="button" class="btn btn-danger" onclick="clearCart()">Очистить</button>
			</div>
		</div>
	</div>
</div>
<!--Finish Модальное окно корзины-->
<script>
	var path = '<?=PATH;?>',
	course = <?=$curr['value'];?>,
	symbolLeft = '<?=$curr['symbol_left'];?>',
	symbolRight ='<?=$curr['symbol_right'];?>';
</script>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/typeahead.bundle.js"></script>		
<script src="js/responsiveslides.min.js"></script>
			    <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
</script>
<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
</script> 
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu_drop > li > ul'),
	           menu_a  = $('.menu_drop > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>
<script type="text/javascript" src="js/memenu.js"></script>
<script src="js/jquery.easydropdown.js"></script>	
<script src="megamenu/js/megamenu.js"></script>
<script src="js/main.js"></script>
<script src="js/imagezoom.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
</body>
</html>