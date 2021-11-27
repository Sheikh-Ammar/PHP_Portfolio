<?php include "header.php"; ?>

<!-- ABOUT US -->
<h1 class="text-center  text-capitalize font-weight-bold mt-5">ABOUT <span class="title">ME</span></h1>
<hr class="mx-auto pt-5">

<section class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6 order-md-2 about-text">
            <h1 class="ff">I am Sheikh Ammar</h1>
            <p>Hello I am Ammar.This Is My Portfolio Which I Created By Using <span class="text-warning">(HTML , CSS , BOOTSTRAP , JavaScript, PHP, MySQL)</span>.
            This Portfolio Shows About My skills and Services Which I Offered
            </p>
            <a href="about.php"><span>Click Here</span></a>
        </div>
        <div class="col-md-6 order-md-1 about-img">
            <img class="img-fluid mx-auto" style="width: 300px; height: 300px" src="images/model.jpg" />
        </div>
</section>


<!-- SKILLS -->
<h1 class="text-center  text-capitalize font-weight-bold mt-5"><span class="title">MY</span> SKILLS</h1>
<hr class="mx-auto pt-5">

<section class="container" id="skills">
    <div class="row mx-auto">
        <div class="single-skill col-md-3 col-6 mx-auto pt-5">
            <div class="circlechart" data-percentage="95"> HTML </div>
        </div>
        <div class="single-skill col-md-3 col-6 mx-auto pt-5">
            <div class="circlechart" data-percentage="95"> CSS </div>
        </div>
        <div class="single-skill col-md-3 col-6 mx-auto pt-5">
            <div class="circlechart" data-percentage="90"> BOOTSTRAP </div>
        </div>
        <div class="single-skill col-md-3 col-6 mx-auto pt-5">
            <div class="circlechart" data-percentage="70"> JavaScript </div>
        </div>
        <div class="single-skill col-md-3 col-6 mx-auto pt-5">
            <div class="circlechart" data-percentage="70"> JQuery </div>
        </div>
        <div class="single-skill col-md-3 col-6 mx-auto pt-5">
            <div class="circlechart" data-percentage="60"> PHP </div>
        </div>
        <div class="single-skill col-md-3 col-6 mx-auto pt-5">
            <div class="circlechart" data-percentage="80"> MySQL </div>
        </div>
        <div class="single-skill col-md-3 col-6 mx-auto pt-5">
            <div class="circlechart" data-percentage="60"> WordPress </div>
        </div>
    </div>
    <div class="skill-btn pt-5 text-center">
        <button class="btn btn-outline-success"><a href="skills.php">Click Here</a></button>
    </div>
</section>


<!-- RECENT -->
<h1 class="text-center  text-capitalize font-weight-bold mt-5">RECENT <span class="title">PROJECTS</span></h1>
<hr class="mx-auto pt-5">

<section id="recent">
    <ul class="recent-menu">
        <li class="list activebtn" data-filter="all">All</li>
        <li class="list" data-filter="ecommerce">E-Commerce</li>
        <li class="list" data-filter="blogs">Blogs</li>
        <li class="list" data-filter="webpages">Staic Web pages</li>
        <li class="list" data-filter="android">Android</li>
    </ul>

    <div class="sample">
        <!-- 1 -->
        <div class="itemBox" data-item="ecommerce">
            <img src="images/e1.png" alt="ecommerce 1">
        </div>
        <div class="itemBox" data-item="blogs">
            <img src="images/b1.png" alt="blog 1">
        </div>
        <div class="itemBox" data-item="webpages">
            <img src="images/swp1.png" alt="webpage 1">
        </div>
        <div class="itemBox" data-item="android">
            <img src="images/a1.jpg" alt="android 1">
        </div>

        <!-- 2 -->
        <div class="itemBox" data-item="ecommerce">
            <img src="images/e2.png" alt="ecommerce 2">
        </div>
        <div class="itemBox" data-item="blogs">
            <img src="images/b2.png" alt="blog 2">
        </div>
        <div class="itemBox" data-item="webpages">
            <img src="images/swp2.png" alt="webpage 2">
        </div>

        <!-- 3 -->
        <div class="itemBox" data-item="ecommerce">
            <img src="images/e3.png" alt="ecommerce 3">
        </div>
        <div class="itemBox" data-item="blogs">
            <img src="images/b3.png" alt="blog 3">
        </div>
        <div class="itemBox" data-item="webpages">
            <img src="images/swp3.png" alt="webpage 3">
        </div>

        <!-- 4 -->
        <div class="itemBox" data-item="blogs">
            <img src="images/b4.png" alt="blog 4">
        </div>

        <!-- 5 -->
        <div class="itemBox" data-item="blogs">
            <img src="images/b5.png" alt="blog 5">
        </div>
    </div>
</section>



<!-- SERVICES -->
<h1 class="text-center  text-capitalize font-weight-bold mt-5"><span class="title">MY</span> SERVICES</h1>
<hr class="mx-auto pt-5">

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="imgb"><img src="images/skill.jpg" alt=""></div>
                    <div class="imgm"><img src="images/s1.png" alt=""></div>
                    <div class="card-text">
                        <h2>Static Web PAGES</h2>
                        <p>I can create static web pages of any type by using HTML CSS JavaScript JQuery Bootstrap ReactJs.
                            Contact me if you want to create web pages at low cost.</p>
                    </div>
                    <div class="card-icon">
                        <a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i><a>
                                <a href="https://www.linkedin.com/in/ammar-ahmad-59508b210/" target="blank"><i class="fa fa-linkedin"></i></a>
                                <a href="https://twitter.com/home" target="blank"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="imgb"><img src="images/skill.jpg" alt=""></div>
                    <div class="imgm"><img src="images/s2.jpg" alt=""></div>
                    <div class="card-text">
                        <h2>Dynamics WEBSITES</h2>
                        <p>I can create dynamic websites like blog and e-commerce by using front End languages and for back end PHP and MySQl.
                            These websites is fully CMS based system with Admin Pannel.
                            Choose me to create your websites at low cost.</p>
                    </div>
                    <div class="card-icon">
                        <a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i><a>
                                <a href="https://www.linkedin.com/in/ammar-ahmad-59508b210/" target="blank"><i class="fa fa-linkedin"></i></a>
                                <a href="https://twitter.com/home" target="blank"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="imgb"><img src="images/skill.jpg" alt=""></div>
                    <div class="imgm"><img src="images/s3.jpg" alt=""></div>
                    <div class="card-text">
                        <h2>Android APP</h2>
                        <p>Coming Soon....</p>
                    </div>
                    <div class="card-icon">
                        <a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i><a>
                                <a href="https://www.linkedin.com/in/ammar-ahmad-59508b210/" target="blank"><i class="fa fa-linkedin"></i></a>
                                <a href="https://twitter.com/home" target="blank"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>











<?php include "footer.php"; ?>