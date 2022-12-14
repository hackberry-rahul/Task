<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themexriver.com/finance-top/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 05:49:43 GMT -->
<?php
include('partials/head.php');
?>


<body class="contact-pg">

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->
        <?php
        include('partials/header.php');
        ?>
       


        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>Contact</h2>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->


        <!-- start contact-pg-content -->
        <section class="contact-pg-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-8 col-md-offset-2">
                        <div class="section-title-s3">
                            <h2 style="color: white;">Let's Get In Touch</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore. Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col col-md-6">
                        <div class="contact-location-map"   ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.7247933515!2d72.55919001491947!3d23.033874884947334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84f3f31aaf97%3A0x5c66279c2c32fea!2sFinXpert!5e0!3m2!1sen!2sus!4v1670564442774!5m2!1sen!2sus" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
                    <div class="col col-md-6">
                        <div class="contact-form"> 
                            <form method="post" id="contact-form-s2" class="form row contact-validation-active">
                                <div class="col col-xs-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                </div>
                                <div class="col col-xs-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your email address">
                                </div>
                                <div class="col col-xs-12">
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Your location">
                                </div>
                                <div class="col col-xs-12">
                                    <textarea class="form-control" name="message" placeholder="Write.."></textarea>
                                </div>
                                <div class="col col-xs-12 submit-btn">
                                    <button type="submit">Submit</button>
                                    <div id="loader">
                                        <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                    </div>
                                </div>
                                <div class="error-handling-messages">
                                    <div id="success">Thank you</div>
                                    <div id="error"> Error occurred while sending email. Please try again later. </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-content -->



        <?php
        include('partials/footer.php');
        ?>
                     
       

  
</body>

<!-- Mirrored from html.themexriver.com/finance-top/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Nov 2022 05:49:43 GMT -->
</html>
