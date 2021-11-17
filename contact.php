<?php include "header.php"; ?>

<div class="contactus">
    <div id="contact-heading">
        <h1>Contact Me</h1>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-md-6">
            <?php

            $msg = "";
            if (isset($_GET['error'])) {
                $msg = "Please Fill All Blanks";
                echo '<div class="alert alert-danger">' . $msg . '</div>';
            }
            if (isset($_GET['success'])) {
                $msg = "Send Successfully";
                echo '<div class="alert alert-success">' . $msg . '</div>';
            }

            ?>
            <form action="processdata.php" method="POST" autocomplete="off">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Your Name*" name="fullname">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email Address*" name="email">
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="number" class="form-control" placeholder="Mobile no*" name="mobile">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <input type="text" class="form-control" placeholder="message*" name="message">
                </div>
                <input type="submit" class="btn btn-outline-success btn-lg btn-block" name="save"></input>
            </form>
        </div>
        <br>
        <div class="col-md-6 mt-5">
            <div class="box">
                <div class="icon" style="color: green;font-size: 25px;"><i class="fa fa-phone" aria-hidden="true">Phone No.</i></div>
                <p class="text-center">+92340611032</p>
            </div>

            <div class="box">
                <div class="icon" style="color: green;font-size: 25px;"><i class="fa fa-envelope" aria-hidden="true">Email</i></div>
                <p class="text-center">sheikhammar568@gmail.com</p>
            </div>
            <div class="box">
                <div class="icon" style="color: green;font-size: 25px;"> <i class="fa fa-clock-o" aria-hidden="true">Working hours </i></div>
                <p class="text-center">
                    10:00 AM – 6:00 PM<br>
                    Friday – Sunday
                </p>
            </div>
        </div>
    </div>
</div>


<div class="text-center">
    <a href="index.php" class="btn btn-success my-3">Back To Home</a>
</div>



<?php include "footer.php" ?>