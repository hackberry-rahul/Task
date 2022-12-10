<!-- Start header -->
<header id="header" class="site-header header-style-5">
            <div class="topbar">
                <div class="upper-topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col col-sm-9">
                                <div class="upper-topbar-contact">
                                    <ul>
                                        <li><i class="fa fa-envelope"></i> contact@finXpert.in</li>
                                        <li><i class="fa fa-location-arrow"></i> 104 Akash Complex ,
                                            C.G.Road,Navrangpura,Ahemdabad-380 009.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col col-sm-3">
                                <div class="upper-topbar-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/finxpertin/"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/CONTACTFINXPERT"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a
                                                href="https://www.linkedin.com/company/finxpert-a-complete-capital-solution/"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end container -->
                </div>
            </div> <!-- end topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand"><img src="assets/images/slider/logo1.png" alt></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="index-5.php">Home</a>
                            </li>
                            <li><a href="about.php">About</a></li>
                            <li class="menu-item-has-children">
                                <a href="services.php">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="services.php">Business Loan</a></li>
                                    <li><a href="service-single-finance.php">Home Loan</a></li>
                                    <li><a href="service-single-management.php">Working Capital (cc)</a></li>
                                    <li><a href="service-single-investment.php">Mortgage Loan (LAP)</a></li>
                                    <li><a href="service-single-vc.php">Machinery Loan </a></li>
                                    <li><a href="service-single-insurance.php">Project Finance</a></li>
                                    <li><a href="service-single-mutual.php">Personal Loan </a></li>
                                </ul>
                            </li>

                            <?php
                            
                            if($a==1)
                            {
                             ?>
                                          <li>
                                <!-- <a href="emi calculator/index.html">EMI-calculator</a> -->
                                <a id="lnkEmiCalculator" data-toggle="modal" data-target="#myModal">EMI-calculator</a>
                            </li>
                             <?php
                            }?>
               
                            <!-- <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="projects.html">Projects</a></li>
                                    <li><a href="projects-3-col.html">Projects 3 col </a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-default.html">Blog Default</a></li>
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                    <li><a href="blog-details.html">Blog details</a></li>
                                </ul>
                            </li>-->
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->

                    <!-- Calculator Code -->

                    
<!-- Trigger the modal with a button -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="card card-body text-center mt-5">
            <h1 class="heading display-5 pb-3">Loan Calculator</h1>
            <form id="loan-form">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">₹</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    id="amount"
                    placeholder="Loan Amount"
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">%</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    id="interest"
                    placeholder="Interest"
                  />
                </div>
              </div>
              <div class="form-group">
                <input
                  type="number"
                  id="years"
                  class="form-control"
                  placeholder="Years To Repay"
                />
              </div>
              <div class="form-group">
                <input
                  type="submit"
                  value="Calculate"
                  class="btn btn-dark btn-block"
                />
              </div>
            </form>
            <!-- Loader Here -->
            <div id="loading">
              <img
                src="https://media.giphy.com/media/jAYUbVXgESSti/giphy.gif"
                alt=""
              />
            </div>
            <!-- Results -->
            <div id="result">
              <h5>Results</h5>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Monthly Payment</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    id="monthly-payment"
                    disabled
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Total Payment</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    id="total-payment"
                    disabled
                  />
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Total Interest</span>
                  </div>
                  <input
                    type="number"
                    class="form-control"
                    id="total-interest"
                    disabled
                  />
                </div>
              </div>
            </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

                    <div class="search-social">
                        <div class="header-search-area">
                            <div class="header-search-form">
                                <form class="form">
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search here">
                                    </div>
                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div>
                                <button class="btn open-btn"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </header>
        <!-- end of header -->