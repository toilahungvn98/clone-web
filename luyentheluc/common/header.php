
<header id="header" >
  <!-- top -->
  <section class="header-top">
    <div class="uk-container uk-container-center">
      <div class="uk-flex uk-flex-space-between uk-flex-middle  top-block">
        <div class="left">
         <ul class="uk-list uk-clearfix uk-flex uk-flex-middle list-menu">
           <li class="call-us">
            <span class="call">CALL us Now</span>: 0123-444-666654123
          </li>
          <li class="lang icon-down line-col ">
            <a href="" title="">
              <img src="resources/img/en.png" alt="en" class="lang-img">
              <span class="lang-txt">English</span>
            </a>
            <!-- sub-menu -->
            <ul class="uk-list uk-clearfix sub-menutop">

              <li class="languege ">
                <a href="" title="" class="uk-flex uk-flex-middle ">
                  <img src="resources/img/en.png" alt="en" >
                  <span class="lang-txt">English</span>
                </a>
              </li>
              <li class="languege ">
                <a href="" title="" class="uk-flex uk-flex-middle ">
                  <img src="resources/img/ar.png" alt="en" >
                  <span class="lang-txt">Arabic</span>
                </a>
              </li>

            </ul>
          </li>
          <li class="currency icon-down">
            <a href="" title="" >USD</a>

            <!-- sub-menu -->
            <ul class="uk-list uk-clearfix sub-menutop">

              <li class="">
                <a href="" title="" >
                 USD
               </a>
             </li>
             <li class="">
              <a href="" title="">
                EUR
              </a>
            </li>

          </ul>

        </li>
      </ul>
    </div>
    <div class="right">
      <ul class="uk-list uk-clearfix uk-flex uk-flex-middle uk-flex-wrap  list-menu">
       <li class="line-col">
        <a href="" title="">My Account</a>
      </li>
      <li class="line-col">
        <a href="" title="">Wishlist</a>
      </li>
      <li >
        <a href="" title="">Checkout</a>
      </li>
    </ul>
  </div>
</div>
</div>
</section>
<!-- mid -->
<section class="header-mid ">
  <div class="uk-container uk-container-center">
    <div class="uk-flex uk-flex-middle uk-flex-space-between mid-block">
     <div class="left">
      <div class="logo">
        <a href="home.php" title="" class="image img-scaledown">
          <img src="resources/img/upload/logoEtro.png" alt="Etro">
        </a>
      </div>
    </div>
    <div class="center ">
      <div class="form">
        <form action="" method>
          <input type="text" name="search" class="input-control" placeholder="Search item ...">
          <button type="submit" class="btn-search">Search</button>
        </form>
      </div>
    </div>
    <div class="right">
     <div class="uk-flex ">
       <div class="cart">
         <a href="" title="" class="icon-cart">
           <i class="fa fa-cart-arrow-down" ></i>
         </a>
         <div class="qty">0</div>
         <div class="wrap-minicart">
           <div class="cart-info">
            <div class="cart-item">
              There are <span>item</span> in your cart
            </div>
              <!-- <ul class="cart-content">
              </ul> -->
              <div class="cart-checkout">

                <div class="uk-flex uk-flex-middle uk-flex-space-between">
                  <span class="total">Total</span>
                  <span class="price">$ 0.00</span>
                </div>
              </div>
              
              <div class="cart-links uk-flex uk-flex-middle uk-flex-space-between">

                <div class="view">View cart</div>
                <div class="checkout">Check out</div>

              </div>

            </div>
          </div>
        </div>

        <div class="login">
         <a href="" title="">Login</a>
         <p>Welcome Guest</p>
       </div>
       
     </div>
   </div>
 </div>
</div>
<?php require_once 'common/login.php'; ?>
</section>



<!-- bottom -->

<section class="header-bottom">
  <div class="uk-container uk-container-center">
    <div class="uk-flex uk-flex-middle uk-flex-space-between bottom-block">
      <div class="left">
        <nav class="navbar">
         <ul class="uk-list uk-clearfix uk-flex uk-flex-middle uk-flex-space-between list-menu">
          <li class="icon-down active"><a href="" title="">Home</a></li>
          <li class="icon-down badge">
           <span class="badge-orange">New</span>
           <a href="" title="">shop</a>
         </li>
         <li class="icon-down">
          <a href="" title="" >smartphone & tablet</a>

          <div class="wrap-dropdown ">
           <ul class="uk-list uk-clearfix dropdown-content">
            <div class="uk-grid uk-grid-medium">
              <?php 
              $headName = [
                1 => "Electronics",
                2 => "smartphone",
                3 => "tablet",
                4 => "computer"
              ];
              for( $i = 1; $i <= 4; $i++) { ?>

                <li class="uk-width-1-4">
                  <div class="block-panel">

                   <header class="panel-head">
                    <a href="" title="" class="image">
                      <img src="resources/img/upload/img-dropdown-<?= $i ?>.jpg" alt="category-<?= $i ?>">
                    </a>
                    <h3 class="heading">
                      <a href="" title=""><?= $headName[$i]; ?></a>
                    </h3>
                  </header>

                  <section class="panel-body">

                    <ul class="uk-list uk-clearfix list-cateogry">
                     <li><a href="" title="">Leds</a></li>
                     <li><a href="" title="">Laptop & Desktop Accessories</a></li>
                     <li><a href="" title="">Storage & External Drives</a></li>
                     <li><a href="" title="">Networking & Wireless</a></li>
                     <li><a href="" title="">Motherboards,CPU & PSUs</a></li>
                     <li><a href="" title="">Welcams</a></li>
                     <li><a href="" title="">Gaming</a></li>
                   </ul>
                 </section>

               </div>
             </li>

           <?php } ?>
         </div>

       </ul>
     </div>
   </li>
   <li class="icon-down"><a href="" title="">Blog</a></li>
   <li class="badge">
    <span class="badge-default">Hot</span>
    <a href="" title="" class="badge">Deals</a>
  </li>
  <li class="icon-down dropdown">

    <a href="" title="">portfolios</a>

  </li>
  <li class=""><a href="" title="">About us</a></li>
  <li class=""><a href="" title="">Contact us</a></li>
</ul>
</nav>

<div class="menu-bar" title="AsideBar">
  <div class="hamburger-bar" >
    <span class="open"><i class="fa fa-bars" ></i></span>
  </div>
</div>



<nav id="sideNav" class="sideNavBar">
 <span class="closeNav"><i class="fa fa-times" ></i></span>
 <ul class="uk-list uk-clearfix accordion-menu">
   <li class="item"> 
    <span class="btn">shop</span>
    <div class="sub-menu">
     <ul class="uk-list uk-clearfix">
       <li>  
        <a href="#" title="" class="btn">Luxury</a>
        <div class="sub-menu">
         <ul class="uk-list uk-clearfix">
           <li><a href="" title="" >Gucci</a></li>
           <li><a href="" title="">Supreme</a></li>
           <li><a href="" title="">Nike</a></li>
         </ul>
       </li>

     </ul>
   </div>
 </li>
 <li class="item"> 
  <span class="btn">smartphone & tablet</span>
  <div class="sub-menu">
   <ul class="uk-list uk-clearfix">
     <li>
      <a href="#" title="" class="btn">Electronics</a>
      <div class="sub-menu">
       <ul class="uk-list uk-clearfix">
        <li><a href="#" title="" >one</a></li>
        <li><a href="#" title="" >two</a></li>
        <li><a href="#" title="" >true</a></li>
        <li><a href="#" title="" >four</a></li>
        <li><a href="#" title="" >five</a></li>
        <li><a href="#" title="" >six</a></li>
      </ul>
    </div>
  </li>
  <li>
    <a href="#" title="" class="btn">smartphone</a>
    <div class="sub-menu">
     <ul class="uk-list uk-clearfix">
      <li><a href="#" title="" >one</a></li>
      <li><a href="#" title="" >two</a></li>
      <li><a href="#" title="" >true</a></li>
      <li><a href="#" title="" >four</a></li>
      <li><a href="#" title="" >five</a></li>
      <li><a href="#" title="" >six</a></li>
    </ul>
  </div>
</li>
<li>
  <a href="#" title="" class="btn">tablet</a>
  <div class="sub-menu">
   <ul class="uk-list uk-clearfix">
    <li><a href="#" title="" >one</a></li>
    <li><a href="#" title="" >two</a></li>
    <li><a href="#" title="" >true</a></li>
    <li><a href="#" title="" >four</a></li>
    <li><a href="#" title="" >five</a></li>
    <li><a href="#" title="" >six</a></li>
  </ul>
</div>
</li>
<li>
  <a href="#" title="" class="btn">computer</a>
  <div class="sub-menu">
   <ul class="uk-list uk-clearfix">
    <li><a href="#" title="" >one</a></li>
    <li><a href="#" title="" >two</a></li>
    <li><a href="#" title="" >true</a></li>
    <li><a href="#" title="" >four</a></li>
    <li><a href="#" title="" >five</a></li>
    <li><a href="#" title="" >six</a></li>
  </ul>
</div>
</li>
</ul>
</div>
</li>
<li class="item"> 
  <span class="btn">abcd</span>
  <div class="sub-menu">
   <ul class="uk-list uk-clearfix">
     <li>  <a href="#" title="" class="btn">a1</a></li>
     <li> <a href="#" title="" class="btn">a2</a></li>
     <li>  <a href="#" title="" class="btn">a3</a></li>
   </ul>
 </div>
</li>

</ul>
</nav>
<div class="overlayClose"></div>



</div>
<!-- end left -->
<div class="right">
  <ul class="uk-list uk-clearfix uk-flex uk-flex-middle uk-flex-space-between list-menu">
    <li><a href="" title="">Special offer!</a></li>
    <li class="badge">
      <span class="badge-default">Hot!</span>
      <a href="" title="" class="black-fri">Black Friday</a>
    </li>

  </ul>
</div>
</div>
</div>
</section>

</header><!-- /header -->
