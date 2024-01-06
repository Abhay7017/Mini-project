<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUR GROCERY STORE</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!--font awesome cdn link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>



<!--css file link-->
<link rel="stylesheet" href="style.css">

</head>
<body>

<!--header section starts-->
<header class="header">
<a href="#" class="logo"> <i class="fas fa-shopping-cart"></i> groco</a>
<nav class="navbar">
    <a href="#home">home</a>
    <a href="#features">features</a>
    <a href="#products">products</a>
    <a href="#catogori">catogories</a>
    <a href="#review">review</a>
    <a href="#blog">blogs</a>
</nav>


<div class="icons">

<div class="fas fa-search" id="search-btn"></div>
<div class="fas fa-shopping-cart" id="cart-btn"></div>

</div>
<form action="" class="search-form">
    <input type="search" id="search-box" placeholder="search here...">
    <label for="search-box" class="fas fa-search"></label>
</form>




<div class="shopping-cart">
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="https://img.freepik.com/free-photo/green-striped-ripe-watermelon-with-slice-cross-section-isolated-white-background-with-copy-space-text-images-special-kind-berry-sweet-pink-flesh-with-black-seeds-side-view_639032-1254.jpg?w=1060&t=st=1704520771~exp=1704521371~hmac=44dc3e9bf4263c2344e1e1ff22c8f8d0945643b17f754b3a16af9a7987b74f7c">
        <div class="content">
            <h3>watermelon</h3>
            <span class="price">₹5/-</span>
            <span class="quantity">qty : 1</span>
        </div>
    </div>


        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="https://img.freepik.com/free-vector/isolated-red-onion-cartoon_1308-127254.jpg?w=740&t=st=1704521334~exp=1704521934~hmac=e002fcbf63dc6f951c575846197749973e88264045d24c30885328adff73f196" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">₹5/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>


            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="https://img.freepik.com/free-psd/delicious-fried-chicken-with-french-fries-isolated-transparent-background_191095-11720.jpg?w=740&t=st=1704521851~exp=1704522451~hmac=9bb32bef6764caececcff3f533f6d47ef8c933dbf0d50e067b259cfc9f0bcde9" alt="">
                <div class="content">
                    <h3>chicken</h3>
                    <span class="price">₹5/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
                <div class="total">total: ₹15/-</div>
                <a href="#" class="btn">checkout</a>
</div>

    <a href="logout.php"  class="hlo">Logout</a>



</header>    

<section class="home" id="home">
    <div class="con">
        <h3>fresh and <span>organic</span> products for your</h3>
       <p> Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
        veniam facere tempor nisi</p>
        <a href="#"  class="hlo">shop now</a> 
    </div>
</section>


<section class="features" id="features">
    <h1 class="heading">our <span>features</span></h1>

<div class="box-container">


    <div class="box">
        <img src="https://img.freepik.com/free-photo/basket-full-vegetables_1112-316.jpg?w=996&t=st=1704522044~exp=1704522644~hmac=99d2cf0ce14de175f5537ae97746d3f7984a8ca67f622aea6f1c636241567b3a" alt="">
        <h3>fresh and organic</h3>
        <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.</p>
        <a href="#" class="btn">read more</a>       
    </div>
    <div class="box">
        <img src="https://img.freepik.com/free-vector/delivery-guy-motor-scooter-wearing-mask_23-2148498576.jpg?w=740&t=st=1704522131~exp=1704522731~hmac=661edc613f083fd6735a5d682dfb0a0365259bdc0fb47f6dd3a282907629caa1" alt="">
        <h3>free delivery</h3>
        <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.</p>
        <a href="#" class="btn">read more</a>       
    </div>
    <div class="box">
        <img src="https://img.freepik.com/free-vector/mobile-payments-concept-illustration_114360-1243.jpg?w=740&t=st=1704522222~exp=1704522822~hmac=226993123de71a2c29ec099857307525a7902d7793b363adbf4f0d68b0f96aca" alt="">
        <h3>easy payment</h3>
        <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.</p>
        <a href="#" class="btn">read more</a>       
    </div>

</div>
</section>


<section class="products" id="products">
    <h1 class="heading"> our <span>products</span></h1>


        <div class="box-container">
            
            <div class="box">
                <img src="https://img.freepik.com/free-photo/orange-juicy-ripe-circle-citrus_1172-203.jpg?w=1060&t=st=1704522343~exp=1704522943~hmac=68e95fa4f0a8d07af2f8bac475f89eee7514083ee447da5d4435d6f68a1e5ebb"    alt="">
                <h3>fresh orange</h3>
                <div class="price">₹5-₹9/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
                <div class="box">
                    <img src="https://img.freepik.com/free-vector/isolated-red-onion-cartoon_1308-127254.jpg?w=740&t=st=1704521334~exp=1704521934~hmac=e002fcbf63dc6f951c575846197749973e88264045d24c30885328adff73f196"    alt="">
                    <h3>onion</h3>
                    <div class="price">₹5-₹9/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            
                    <div class=" box">
                        <img src="https://img.freepik.com/free-photo/tomatoes_144627-15412.jpg?w=1060&t=st=1704522565~exp=1704523165~hmac=864b0772f734a1615aeedad3b9c1c842ff42f76a7df3404a8cb481274ba1f8fe"    alt="">
                        <h3>tomatos</h3>
                        <div class="price">₹5-₹9/-</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
        
                        <div class=" box">
                            <img src="https://img.freepik.com/free-photo/white-cabbage-white-surface_144627-45152.jpg?w=996&t=st=1704522692~exp=1704523292~hmac=39b427d3dc4b6462ccd5af0a147185fa3927756db179ab897e5ea3afadb93440"    alt="">
                            <h3>fresh cabbage</h3>
                            <div class="price">₹5-₹9/-</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <a href="#" class="btn">add to cart</a>
                        </div>

            <div class=" box">
                <img src="https://img.freepik.com/free-photo/potato-table_144627-14824.jpg?w=740&t=st=1704522747~exp=1704523347~hmac=fc5ecb044e6e0d6583db6c7f015da313c8e24f8917ca10fe7f816866c8278a1b"    alt="">
                <h3>fresh potato</h3>
                <div class="price">₹5-₹9/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
                <div class=" box">
                    <img src="https://img.freepik.com/free-photo/green-avocados-white-surface_144627-45153.jpg?w=996&t=st=1704522787~exp=1704523387~hmac=d6e4f50d84cc551f1fbe726cd5a39de6c9e5e5309f18eb2ee5505a884b972244"    alt="">
                    <h3>fresh avocado</h3>
                    <div class="price">₹5-₹9/-</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                    <div class=" box">
                        <img src="https://img.freepik.com/free-photo/baby-carrots_1339-7954.jpg?w=1060&t=st=1704522845~exp=1704523445~hmac=e867557139069f9050c661191b0eb102c8aaf4263cc5c9f49b9979e86dcc46ff"    alt="">
                        <h3>fresh carrot</h3>
                        <div class="price">₹5-₹9/-</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>
            
                        <div class=" box">
                            <img src="https://img.freepik.com/free-photo/fresh-lime-fruit-isolated_144627-30038.jpg?w=1060&t=st=1704522890~exp=1704523490~hmac=4dc2e2d8f755f19b9bf3faa8d1626e585c528c6c7294d612bfff3958e932b8b9"    alt="">
                            <h3>green lemon</h3>
                            <div class="price">₹5-₹9/-</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
                        <div class=" box">
                            <img src="https://img.freepik.com/free-vector/cucumber-isolated-white_98292-5103.jpg?w=996&t=st=1704522928~exp=1704523528~hmac=b39526a53268912c7c0286c129d5fe9fe40324058459f59da2cd284da4838ff2"    alt="">
                            <h3>Cucumber</h3>
                            <div class="price">₹5-₹9/-</div>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <a href="#" class="btn">add to cart</a>
                        </div>
        </div>
</section>

<section class="catogori" id="catogori">
    <h1 class="heading">product<span>categories</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="https://img.freepik.com/free-photo/pile-fresh-vegetables_144627-16683.jpg?w=1060&t=st=1704523113~exp=1704523713~hmac=f87ca18ce08fe5ee63531e9100765e43ca3dd2f100de6808841d99e0aa6c2625" alt="">
            <h3>vegetables</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="https://img.freepik.com/free-photo/colorful-fruits-tasty-fresh-ripe-juicy-white-desk_179666-169.jpg?w=1060&t=st=1704523153~exp=1704523753~hmac=9b8f8346e5b91af9569970cebae5a4992c52b981d307a898ff46399b65be47c2" alt="">
            <h3>fresh fruits</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="https://img.freepik.com/free-photo/fresh-milk-bottle-glass_1150-17631.jpg?w=1060&t=st=1704523214~exp=1704523814~hmac=5d5d6de9360bbd24f607e8c67949120c3502244c4086acc2b5492998f9340d9e" alt="">
            <h3>dairy products</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="https://img.freepik.com/free-photo/side-view-green-fresh-red-raw-meat-cutting-board-pepper-lemon-black-hammer-flower-green-black-mix-color-background_179666-47484.jpg?w=1060&t=st=1704523327~exp=1704523927~hmac=ae3c9cfb4d20bd628a84264d5474760ae527a4e52c808cc00e4d5eb6c3769dca" alt="">
            <h3>fresh meat</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
</section>

<section class="review" id="review">
    <h1 class="heading"> customer's<span>review</span></h1>
    <div class=" swiper review-slider">
        <div class="swiper-wrapper">
            <div class=" box">
                <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg?w=1060&t=st=1704523435~exp=1704524035~hmac=48438ca7d7569a4e2c6ab45527f7828f5f7e2ae70cfd3b05ee14dfc5fee22e8f" alt="">
                <P>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</P>
                    <h3>Aman</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
            </div>

            <div class=" box">
                <img src="https://img.freepik.com/free-photo/bohemian-man-with-his-arms-crossed_1368-3542.jpg?w=740&t=st=1704523495~exp=1704524095~hmac=f5f4a418ecc89a8ed3e7ddd596dcfc999ca3b5542d364585fee9bfe42aad691b" alt="">
                <P>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</P>
                    <h3>Rahul</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
            </div>

            <div class=" box">
                <img src="https://img.freepik.com/free-photo/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair_285396-896.jpg?w=1060&t=st=1704523598~exp=1704524198~hmac=ca02beaed83df60d8be10ad77bd146c02d703e35ca61b54afa95e8aaf7da8238" alt="">
                <P>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</P>
                    <h3>Ragini</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
            </div>

            <div class="box">
                <img src="https://img.freepik.com/free-photo/brunette-girl-walking-through-park-during-autumn_1157-17764.jpg?w=360&t=st=1704523638~exp=1704524238~hmac=42175408592fdd1e341f585e05b360fd75b6adf58a7dbbc2decdd2a0a6292141" alt="">
                <P>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</P>
                    <h3>Payal</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
            </div>

            <div class="box">
                <img src="https://img.freepik.com/free-photo/indoor-picture-cheerful-handsome-young-man-having-folded-hands-looking-directly-smiling-sincerely-wearing-casual-clothes_176532-10257.jpg?w=1060&t=st=1704523545~exp=1704524145~hmac=2bc4815490e98742d6318305939241ce022d6380f3e13e06a2a13a4a8275d4f2" alt="">
                <P>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</P>
                    <h3>Yash</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
            </div>

            
        </div>
    </div>
</section>

<section class="blog" id="blog">
    <h1 class="heading">our <span>blogs</span></h1>

    <div class="box-container">
        <div class="box">
            <img src="https://img.freepik.com/free-photo/fresh-healthy-vegetables-nature-food-generative-ai_188544-11963.jpg?w=1380&t=st=1704523926~exp=1704524526~hmac=4830daab2c9c0de43b5665639e418dd8c900ebe66d11b44459106c7bf60c4160" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> john</a>
                    <a href="#"> <i class="fas fa-calender"></i> 1st may,2023</a>

                </div>
                <h3>fresh and organic vegetables and fruits</h3>
                <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="b1.jpg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> Rohit</a>
                    <a href="#"> <i class="fas fa-calender"></i> 15th Aug,2022</a>

                </div>
                <h3>fresh and organic vegetables and fruits</h3>
                <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="https://img.freepik.com/free-photo/top-view-fresh-vegetables-with-greens-dark-table-color-ripe-salad-vegetable_140725-72687.jpg?w=1060&t=st=1704524118~exp=1704524718~hmac=9a90473c99b8d640994ca8f19882aec8389c6301b182e573ae47c950494e196c" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-user"></i> Aman</a>
                    <a href="#"> <i class="fas fa-calender"></i> 3rd Feb,2021</a>

                </div>
                <h3>fresh and organic vegetables and fruits</h3>
                <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
                    veniam facere tempor nisi</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
    </div>
</section>

<section class="footer">
    <div class="box-container">
        <div class="box">
          <h3>groco <i class="fas fa-shopping-basket"></i></h3>
           <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. Aliquam libero nostrum 
            veniam facere tempor nisi</p>
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/checkpoint/lg/sign-in-another-account?session_redirect=&trk=" class="fab fa-linkedin"></a>

            </div> 
        </div>
         
        
          <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890  </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333  </a>
            <a href="#" class="links"> <i class="fas fa-envelop"></i> rohansingh@gmail.com  </a>
            <a href="#" class="links"> <i class="fas fa-map-market-alt"></i> mumbai, india-400104 </a>
          </div>

          <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Home  </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Features  </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Catogori </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Review </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Blog</a>
          </div>

          <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
          </div>
     </div>

     <div class="credit"> created by <Span> mr. web dessigner</Span>| all rights reserved</div>
</section>

















<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!--js file link-->
<script src="script.js"></script>





</body>
</html>


