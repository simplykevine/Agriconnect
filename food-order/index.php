<?php include('partials-front/menu.php');?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Vegetables</h2>

            <a href="category-foods.php">
            <div class="box-3 float-container">
                <img src="images/Tomato_je.jpg" alt="Tomatoes" class="img-responsive img-curve">

                <!-- <h3 class="float-text text-white">Tomatoes</h3> -->
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/Carrot__new.jpg" alt="Carrots" class="img-responsive img-curve">

                <!-- <h3 class="float-text text-white">Carrots</h3> -->
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/red-onion.jpg" alt="red-onion" class="img-responsive img-curve">

                <!-- <h3 class="float-text text-white">Red onions</h3> -->
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/images.jpg" alt="Vegetables" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>all vegetables</h4>
                    <p class="food-price">$45</p>
                    <p class="food-detail">
                        Fresh vegetables containing 1kg of (peas, red-onion, ginger,green-pepper, Red-Pepper, Spinach, lettuce, broccoli, potatoes, soya)each
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/download.jpg" alt="spinach" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Spinach</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Fresh spinach  from soil
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/Carrot__new.jpg" alt="Carrots" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Fresh carrots</h4>
                    <p class="food-price">$1.2 /1kg</p>
                    <p class="food-detail">
                        Fresh Carrots from soil with enriching nutrients
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/Tomato_je.jpg" alt="Tomatoes" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>tomatoes</h4>
                    <p class="food-price">$1.3 /1kg</p>
                    <p class="food-detail">
                        fresh Tomatoes from soil
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/lettuce.jpg" alt="Lettuce" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>lettuce</h4>
                    <p class="food-price">$1.3 /1 kg</p>
                    <p class="food-detail">
                        fresh Lettuce
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/red-onion.jpg" alt="red-onion" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Red-onions</h4>
                    <p class="food-price">$1.3 /1kg</p>
                    <p class="food-detail">
                        Fresh onions from soil
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="category-foods.php">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Agrikonect staff</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->
    <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

</body>
