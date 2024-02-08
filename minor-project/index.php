<?php
require 'config.php';

if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM regilog WHERE id= $id");
    $row = mysqli_fetch_assoc($result);

}
else{
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food ordering website</title>
    <link rel="stylesheet" href="css/style.css">
    <!-------------box icons------------>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- ---google fonts-- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
        .row img{
                width: 100%;
                height: auto;
                transition: transform .50s ease;
                cursor: pointer;
                border-radius: 8rem;
            }
            button{
                border: none;
                background-color: var(--other-color)
                border-radius: 3rem;
            }
            
    </style>
</head>


<body>
    
    <!-- ----header--- -->
    <header>
        <a href="#" class="logo"><i class='bx bxs-home'></i>food</a>


        <ul class="navlist">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#shop">Our Shop</a></li>
            <li><a href="#review">Our Cutomer</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
        <div class="nav-icons">
            
            <a href="mycart.php"><i class='bx bx-shopping-bag'></i></a>
            
            <div class="dropdown">
                <a class="sign_btn" href="#"><i class='bx bx-user-circle'></i></a>
                <div class="dropdown-menu">
                <a href="logout.php" class="dropdown-item">Logout</a>
                <a href="registration.php" class="dropdown-item">Register</a>
                
                </div>
            </div>
            
             <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    
    <!-- --home-- -->
    <section class="home" id="home">
    <div class="home-text">
        <h1>Meet, <span>Eat &</span> <br>Enjoy The true <br>taste</h1>
        <a href="menu.php" class="btn">Explore Menu<i class='bx bxs-right-arrow' ></i></a>
        <a href="menu.php" class="btn2">Order Now</a>

    </div>
    

    <div class="home-img">
        <img src="img/hero.png" alt="">
    </div>
</section>
<!----container---->
<section class="container">
    <div class="container-box">
        <img src="img/c1.png" alt="">
        <h3>11:00 am - 8:00 pm</h3>
        <a href="#">Working Hours</a>
    </div>
    <div class="container-box">
        <img src="img/c2.png" alt="">
        <h3>Honey Springs</h3>
        <a href="#">Get Directions</a>
    </div>
    <div class="container-box">
        <img src="img/c3.png" alt="">
        <h3>(555) 111-345345</h3>
        <a href="#">Call Us Now</a>
    </div>
</section>
<!----about us---->
<section class="about" id="about">
    <div class="about-img">
        <img src="img/about.png" alt="">
    </div>
    <div class="about-text">
        <h2>Living well begins <br> with eating well.</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed ipsa facilis fuga! Accusamus blanditiis enim repellat rerum odit. Nam inventore fugit beatae omnis neque nihil dolore quisquam incidunt dicta, sunt itaque temporibus eaque voluptatum sapiente laboriosam <br> <br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, rerum saepe! Tempora eligendi possimus tempore minus distinctio. Aperiam, explicabo commodi harum quia molestias amet at labore pariatur, tempore autem maiores?</p>
        <a href="#" class="btn">Explore Story<i class='bx bxs-right-arrow' ></i></a>
    </div>
</section>
<!----our shop---->
<section class="shop" id="shop">
    <div class="middle-text">
        <h4>
           Our Shop
        </h4>
        <h2>Lets Check Popular Products</h2>
    </div>
    <div class="shop-content">

    
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img\Margherit.jpg" alt="">
            <h3>Margherita</h3>
            <p>A hugely popular margherita, with a deliciously tangy single cheese topping</p>
            <div class="in-text">
                <div class="price">
                    <h6>499Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Margherita">
                <input type="hidden" name="Price" value="499">
                </form>
            </div>

           
        </div>
    
        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/Double_Cheese_Margherita.jpg" alt="">
            <h3>Double cheese Margherita </h3>
            <p>The ever-popular Margherita - loaded with extra cheese... oodies of it!</p>
            <div class="in-text">
                <div class="price">
                    <h6>300Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Double cheese Margherita">
                <input type="hidden" name="Price" value="300">
            </div>

            </form>
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/Farmhouse.jpg" alt="">
            <h3>Farm House</h3>
            <p>A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp capsicum, succulent mushrooms and fresh tomatoes
            <div class="in-text">
                <div class="price">
                    <h6>200Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Farm House">
                <input type="hidden" name="Price" value="200">
            </div>

            </form>   
        </div>

        <div class="row">
        <form action="manage_cart.php" method="POST">
            <img src="img/Peppy_Paneer.jpg" alt="">
            <h3>Peppy Paneer</h3>
            <p>Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful!</p>
            <div class="in-text">
                <div class="price">
                    <h6>100Rs.</h6>
                </div>
                <button type="submit" name="Add_To_Cart" class="s-btnn">
                    <a>Add to Bag</a>
                </button>
                <input type="hidden" name="Item_Name" value="Bag 4">
                <input type="hidden" name="Price" value="100">
            </div>
            

            </form>   
        </div>
        
    </div>
    <div class="row-btn">
        <a href="menu.php" class="btn">All products<i class='bx bxs-right-arrow' ></i></a>
    </div>
</section>

<!----reviews---->
<section class="review" id="review">
    <div class="middle-text">
        <h4>Our Customer</h4>
        <h2>Clients Review About Our Food</h2>
    </div>

    <div class="review-content">
        <div class="box">
            <p>The Test is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo</p>
            <div class="in-box">
                <div class="bx-img">
                    <img src="img/r1.jpg">
                </div>
                <div class="bxx-text">
                    <h4>Johan Karahan</h4>
                    <h5>Food Vlogger</h5>
                    <div class="ratings">
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>The Test is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo</p>
            <div class="in-box">
                <div class="bx-img">
                    <img src="img/r2.jpg">
                </div>
                <div class="bxx-text">
                    <h4>Johan Karahan</h4>
                    <h5>Food Vlogger</h5>
                    <div class="ratings">
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <p>The Test is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the food. I really Love Fafo</p>
            <div class="in-box">
                <div class="bx-img">
                    <img src="img/r3.jpg">
                </div>
                <div class="bxx-text">
                    <h4>Johan Karahan</h4>
                    <h5>Food Vlogger</h5>
                    <div class="ratings">
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                        <a href="#"><i class='bx bxs-star'></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!--Contact-->
<section class="contact" id="contact">
    <div class="contact-content">
        <div class="contact-img">
            <div class="c-one">
                <img src="img/f1.png" alt="">   
            </div>
            <div class="c-one">
                <img src="img/f2.png" alt="">   
            </div>
        </div>
        <div class="contact-text">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus est fuga culpa saepe modi, aperiam voluptas vitae dolores quo unde rerum dolorem eum ipsum, earum, temporibus eaque sit laborum quisquam ipsam officiis nobis fugiat.</p>
            <div class="social">
                <a href="#" class="clr"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-github'></i></a>
                <a href="#"><i class='bx bxl-google' ></i></a>
            </div>

        </div>

        <div class="details">
            <div class="main-d">
                <a href="#"><i class='bx bxs-location-plus' ></i>Main stree 65,ny, ny</a>
            </div>

            <div class="main-d">
                <a href="#"><i class='bx bx-mobile-alt'></i>01646895741</a>
            </div>

            <div class="main-d">
                <a href="#"><i class='bx bxl-youtube' ></i></i>Tahmid Ahmed</a>
            </div>

            <div class="main-d">
                <a href="#"><i class='bx bxs-bell'></i>Subscribe</a>
            </div>

        </div>
    </div>
</section>

<!--scroll gap-->
<a href="#" class="scroll">
    <i class='bx bx-up-arrow-alt'></i>
</a>

<script src="https://unpkg.com/scrollreveal"></script>
    <!-- ---link to js--- -->
<script src="js/script.js"></script>
</body>

</html>