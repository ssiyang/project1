
<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <title>My eBay</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<!-- -------------------------------------Header------------------------------------- -->

<header>

  <div class="container">
    <ul class="navbar">
      <li id="signin-style" class="navItem">Hi! <a href="#">Sign in</a> or <a href="#">register</a></li>
      <li class="navItem"><a href="#">Daily Deals</a></li>
      <li class="navItem"><a href="#">Sell</a></li>
      <li class="navItem no-border"><a href="#">Help&Contact</a></li>

      <li id="cart" class="navItem float-right no-border"><img src="img/cart.png" alt="cart" title="your shopping cart" width="40px"></li>
      <li id="bell" class="navItem float-right no-border"><img src="img/bell.png" alt="bell" width="40px"></li>
      <li class="navItem float-right no-border"><a href="#">My eBay</a></li>

    </ul>
  </div>

</header>

 <!-- -------------------------------------Search Form------------------------------------- -->
<div id="search-bar" class="clearfix setBGColor">
  <div class="container">
    <img id="brand" src="img/ebay.png" alt="eBay" height="55px">

    <button id="shopping-button" type="button">
      <p>Shop by category</p>
      <img id="arrow" src="img/arrow.png" alt="arrow" width="20px">
    </button>
      <form id="search-form">
        <table>
          <tr>

            <td>
              <input id="search-field" class="text-field" type="text" name="search-content" placeholder="Search for anything">
            </td>

            <td>
              <div id="category-text-field" class="text-field">
                <select class="options" name="cate">
                  <option selected="selected" value="0">All Categories</option>
                  <option value="1">Antiques</option>
                  <option value="2">Art</option>
                  <option value="3">Baby</option>
                  <option value="4">Books</option>
                  <option value="5">Business &amp; Industry</option>
                  <option value="6">Caneras &amp; Photo</option>
                  <option value="7">Cell Phones &amp; Accessories</option>
                </select>
              </div>
            </td>

            <td>
              <input class="btn-primary" value="Search" type="submit">
            </td>

            <td>
              <a href="#" id="advanced-button" title="高級搜索">Advanced</a>
            </td>

          </tr>
        </table>
      </form>
    </div>
  </div>

<!-- -------------------------------------Navigation Bar------------------------------------- -->

  <nav class="clearfix setBGColor">
    <div class="container">
      <ul id="Navigation-bar" class="navbar tb-border">
        <li class="navItem no-border li-space"><a href="#">Following</a></li>
        <li class="navItem no-border li-space active"><a href="#">Today</a></li>

          <div class="divider">
          </div>

        <li class="navItem no-border li-space"><a href="#">Fashion</a></li>
        <li class="navItem no-border li-space"><a href="#">Electronics</a></li>
        <li class="navItem no-border li-space"><a href="#">Collectibles &amp; Art</a></li>
        <li class="navItem no-border li-space"><a href="#">Home &amp; Garden</a></li>
        <li class="navItem no-border li-space" class="navItem"><a href="#">Sporting Goods</a></li>
        <li class="navItem no-border li-space"><a href="#">Motors</a></li>
        <li class="navItem no-border li-space"><a href="#">Daily Deals</a></li>
      </ul>
    </div>
  </nav>


   <!-- -------------------------------------Advertisement------------------------------------- -->

  <section id="adSection" class="setBGColor clearfix">
    <div class="container">

      <div id="column1">
        <div>
          <img id="ad1" class="add-border" src="img/1.png" alt="ad1" width="750px">
        </div>
      </div>

      <div id="column2">
        <div>
          <img id="ad2" class="add-border" src="img/2.png" alt="ad2" width="350px">
        </div>

        <div>
          <img id="ad3" class="add-border" src="img/3.png" alt="ad3" width="350px">
        </div>
      </div>
    </div>
  </section>

  <!-- -------------------------------------Product Section------------------------------------- -->
  <section id="productSection" class="setBGColor clearfix">
    <div class="container">
      <h2 class="hero-heading">Today's Featured Collections</h2>
      <div id="show-product">

         <!-- ---------------------------------Product1--------------------------------- -->

        <div class="product-section">
          <div class="product-photo">

            <div class="photo-column1">
              <img id="photo1" src="img/product1.png" alt="product1">
            </div>

            <div class="photo-column2">
              <div class="thumb">
              <img class="thumbnail" src="img/product2.png" alt="product2">
              </div>
              <div class="thumb">
              <img class="thumbnail" src="img/product3.png" alt="product3">
              </div>
              <div class="thumb">
              <img class="thumbnail" src="img/product4.png" alt="product4">
              </div>
            </div>

          </div>

 <!-- ---------------------------------Article--------------------------------- -->

  <article>

    <div class="left-col">

      <h3 class="title">In a Flash</h3>

        <div class="description-container">

          <p class="product-details">
            Make new memories with instant cameras like a Fuji Instax Mini 25. a Leica Sofort, or a Polaroid instant-print camera-plus a Lomo'Instant Automat from Lomography.
            <a href="#" title="Read more">
              <span class="readmore"></span>
            </a>
          </p>


        </div>

    </div>



    <div class="right-col right-col-text">

      <ul class="right-col-container">
        <li class="right-col-item">15 items</li>
        <li class="right-col-item">by ebaytecheditor</li>
        <li class="right-col-item"><a class="active-link" href="#">Shop now</a></li>

      </ul>
    </div>
  </article>
  </div>

        <!-- ---------------------------------Product1 End--------------------------------- -->


        <!-- ---------------------------------Product2--------------------------------- -->

        <div class="product-section right-section">
          <div class="product-photo">

            <div class="photo-column1">
              <img id="photo1" src="img/product5.png" alt="product5">
            </div>

            <div class="photo-column2">
              <div class="thumb">
              <img class="thumbnail" src="img/product6.png" alt="product6">
              </div>
              <div class="thumb">
              <img class="thumbnail" src="img/product7.png" alt="product7">
              </div>
              <div class="thumb">
              <img class="thumbnail" src="img/product8.png" alt="product8">
              </div>
            </div>

          </div>

<!-- ---------------------------------Article--------------------------------- -->

  <article>

    <div class="left-col">

      <h3 class="title">Culinary Cuteness</h3>

        <div class="description-container">

          <p class="product-details">
            Find adorably playful kitchen gadgets like a Kipik porcupine toothpick holder, a Suck UK tea infuser shaped like a goldfish, or a ship-shaped butter dish from Alessi-plus a pair of Red Ridging Hood and Bid Bad Wolf salt and
            <a href="#" title="Read more">
              <span class="readmore"></span>
            </a>
          </p>


        </div>

    </div>



    <div class="right-col right-col-text">

      <ul class="right-col-container">
        <li class="right-col-item">15 items</li>
        <li class="right-col-item">by ebaytecheditor</li>
        <li class="right-col-item"><a class="active-link" href="#">Shop now</a></li>

      </ul>
    </div>
  </article>
</div>

   <!-- ---------------------------------Product2 End--------------------------------- -->

      </div>
    </div>


  </section>

   <!-- ---------------------------------Daily Deals--------------------------------- -->

  <section id="daily-deals" class="clearfix setBGColor">
    <div class="container">

      <h2 class="hero-heading">Daily Deals</h2>

      <div class="box">

        <div class="box-subcontent">

          <img class="sale" src="img/sale1.png" alt="sale-pic">
          <a href="#" class="details">BISSELL SpotClean ProHeat Portable Spot</a>
          <h4 class="price">HKD 666.66</h4>

        </div>

        <div class="box-subcontent">

          <img class="sale" src="img/sale2.png" alt="sale-pic">
          <a href="#" class="details">BISSELL SpotClean ProHeat Portable Spot</a>
          <h4 class="price">HKD 666.66</h4>

        </div>

        <div class="box-subcontent">

          <img class="sale" src="img/sale3.png" alt="sale-pic">
          <a href="#" class="details">BISSELL SpotClean ProHeat Portable Spot</a>
          <h4 class="price">HKD 666.66</h4>

        </div>

        <div class="box-subcontent">

          <img class="sale" src="img/sale4.png" alt="sale-pic">
          <a href="#" class="details">BISSELL SpotClean ProHeat Portable Spot</a>
          <h4 class="price">HKD 666.66</h4>

        </div>

        <div class="box-subcontent">

          <img class="sale" src="img/sale1.png" alt="sale-pic">
          <a href="#" class="details">BISSELL SpotClean ProHeat Portable Spot</a>
          <h4 class="price">HKD 666.66</h4>

        </div>

         <!-- ---------------------------------Pagination--------------------------------- -->

        <div class="pagination clearfix">

          <div class="pagination-content">

            <a href="#"><</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#" class="active">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">></a>

          </div>

        </div>

      </div>

       <!-- ---------------------------------Collections--------------------------------- -->

      <div id="collections">

        <p>Get inspired! Explore all of our <a href="#">Trending Collections</a></p>

      </div>

    </div>
  </section>

  <!-- ---------------------------------Footer--------------------------------- --> 

  <footer>
    <div class="container">
      <div style="float: right">

        <p>&copy; 2019 Brian 製作</p>

      </div>
    </div>
  </footer>

</body>
</html>
