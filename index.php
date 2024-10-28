<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css"
        integrity="sha512-B46MVOJpI6RBsdcU307elYeStF2JKT87SsHZfRSkjVi4/iZ3912zXi45X5/CBr/GbCyLx6M1GQtTKYRd52Jxgw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- swiper link added -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

    <?php include "navbar.php"?>


    <!-- home section  -->
    <section class="home" id="home">
        <div class="row">

            <div class="content">
                <h3>online <span>education</span></h3>
                <a href="#contact" class="btn">contact us</a>
            </div>

            <div class="image">
                <img src="images/home-image.svg" alt="#" class="fab fa-twitter">
            </div>
        </div>
    </section>


    <!-- home section ends -->

    <!-- counter section stars -->
    <section class="count">
        <div class="box-container">
            <div class="box">
                <i class="fas fa-user-graduate"></i>
                <div class="content">
                    <h3>1300+</h3>
                    <p>students</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-user-graduate"></i>
                <div class="content">
                    <h3>150+</h3>
                    <p>courses</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-chalkboard-user"></i>
                <div class="content">
                    <h3>80+</h3>
                    <p>teachers</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-face-smile"></i>
                <div class="content">
                    <h3>100+</h3>
                    <p>satisfaction</p>
                </div>
            </div>
        </div>
    </section>
    <!-- counter section ends -->

    <section class="about" id="about">
        <div class="row">
            <div class="image">
                <img src="images/home-image.svg" alt="">
            </div>

            <div class="content">
                <h3>Why choose us ?</h3>
                <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. cumque quibusdam magnitude error , aut enim
                    rerum !</p>
                <a href="#content" class="btn">contact us</a>
            </div>
        </div>
    </section>
    <!-- about section ends -->

    <!-- course section starts -->
    <section class="courses" id="courses">
        <h1 class="heading">our <span>courses</span></h1>
        <div class="swiper course-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <img src="images/home-image.svg" alt="">
                    <h3>web development</h3>
                    <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. cumque quibusdam magnitude error , aut
                        enim rerum !</p>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/home-image.svg" alt="">
                    <h3>digital marketing</h3>
                    <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. cumque quibusdam magnitude error , aut
                        enim rerum !</p>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/home-image.svg" alt="">
                    <h3>science and biology</h3>
                    <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. cumque quibusdam magnitude error , aut
                        enim rerum !</p>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/home-image.svg" alt="">
                    <h3>graphic design</h3>
                    <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. cumque quibusdam magnitude error , aut
                        enim rerum !</p>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/home-image.svg" alt="">
                    <h3>teachingt</h3>
                    <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. cumque quibusdam magnitude error , aut
                        enim rerum !</p>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/home-image.svg" alt="">
                    <h3>engineering</h3>
                    <p>Lorem ipsum dolar sit amet consectetur adipisicing elit. cumque quibusdam magnitude error , aut
                        enim rerum !</p>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- course section ends -->

    <!-- teachers section starts -->
    <section class="teachers" id="teachers">
        <h1 class="heading">expert <span>tutors</span></h1>
        <div class="swiper teachers-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <img src="images/home-image.svg" alt="">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <h3>john deos1</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/home-image.svg" alt="">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <h3>john deos2</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/home-image.svg" alt="">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <h3>john deos3</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/home-image.svg" alt="">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <h3>john deos4</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/home-image.svg" alt="">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <h3>john deos5</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/home-image.svg" alt="">
                    <div class="share">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                    <h3>john deos6</h3>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- teachers section ends -->

    <!-- review section starts  -->
    <section class="reviews" id="reviews">
        <h1 class="heading">student's <span>review</span></h1>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat veritatis quae magni quos
                        voluptatibus commodi repellat repellendus velit eum eius dolores ea, distinctio ab itaque,
                        similique ipsum voluptates beatae corporis voluptatum facere fugit deserunt dignissimos? Neque
                        culpa distinctio esse deserunt eveniet quod nostrum facilis numquam eligendi id praesentium,
                        reiciendis saepe repellendus natus tempora alias necessitatibus suscipit impedit ipsam vitae
                        magnam. 
                    </p>
                    <div class="user">
                        <img src="images/home-image.svg" alt="">
                        <div class="user-info">
                            <h3>john deos</h3>
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
                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat veritatis quae magni quos
                        voluptatibus commodi repellat repellendus velit eum eius dolores ea, distinctio ab itaque,
                        similique ipsum voluptates beatae corporis voluptatum facere fugit deserunt dignissimos? Neque
                        culpa distinctio esse deserunt eveniet quod nostrum facilis numquam eligendi id praesentium,
                        reiciendis saepe repellendus natus tempora alias necessitatibus suscipit impedit ipsam vitae
                        magnam.
                    </p>
                    <div class="user">
                        <img src="images/home-image.svg" alt="">
                        <div class="user-info">
                            <h3>john deos</h3>
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
                <div class="swiper-slide slide">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat veritatis quae magni quos
                        voluptatibus commodi repellat repellendus velit eum eius dolores ea, distinctio ab itaque,
                        similique ipsum voluptates beatae corporis voluptatum facere fugit deserunt dignissimos? Neque
                        culpa distinctio esse deserunt eveniet quod nostrum facilis numquam eligendi id praesentium,
                        reiciendis saepe repellendus natus tempora alias necessitatibus suscipit impedit ipsam vitae
                        magnam.
                    </p>
                    <div class="user">
                        <img src="images/home-image.svg" alt="">
                        <div class="user-info">
                            <h3>john deos</h3>
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
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- review section ends -->


    <!-- contact setion start -->
     <section class="contact" id="contact">
        <h1 class="heading"><span>Contact</span>us</h1>
        <div class="row">
            <div class="image">
                <img src="images/home-image.svg" alt="">
            </div>
            <form action=""  method="post">
                <span>your name</span>
                <input type="text" required placeholder="enter your full name" maxlength="50" name="name" class="box">
                <span>your email</span>
                <input type="email" required placeholder="enter your email" maxlength="50" name="email" class="box">
                <span>your number</span>
                <input type="number" required placeholder="enter your valide mobile number" max="9999999999" min="0" name="number" class="box" onkeypress="if(this.value.length==10)return false;">
                <span>select course</span>
                <select name="courses" class="box" required>
                    <option value="" disabled selected>selected the course --</option>
                    <option value="web development">web development</option>
                    <option value="app development">app development</option>
                    <option value="cloud computing">cloud computing</option>
                    <option value="web design">web design</option>
                    <option value="graphic designer">graphic designer</option>
                    <option value="artifial intelligence">artifial intelligence</option>
                </select>
                <span>select gender</span>
                <div class="radio">
                    <input type="radio" name="gender" value="male" id="male">
                    <label for="male">male</label>
                    <input type="radio" name="gender" value="female" id="female">
                    <label for="female">female</label>
                </div>
                <input type="submit" value="send message" class="btn" name="send">
            </form>
        </div>
     </section>
     <!-- contact section end -->

    <!-- footer start -->
     <footer class="footer">
        <section>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-youtube"></a>
            </div>
        </section>
     </footer>
    <!-- footer end -->
    <!-- swiper link added -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="javascript.js"></script>
</body>

</html>