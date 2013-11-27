<!DOCTYPE html>
<html lang="en" ng-app="toyBuddyApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>ToyLuv -Beta</title>

    <!-- Bootstrap core CSS -->
    <link href="<?get_template_directory_uri();?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?get_template_directory_uri();?>/css/app.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->

  </head>
<!-- NAVBAR
================================================== -->
  <body data-spy="scroll" data-target=".navbar">

    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="<?php get_template_directory_uri();?>" . "/img/logo.png"></a>
            </div>

            <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav  navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#howitoworks">How it works?</a></li>
                        <li><a href="#playnlearn">Play n Learn</a></li>
                        <li><a href="#discuss">Discuss</a></li>
<!--                        <li><a href="#testimonials">What others say</a></li>-->
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#contactus">Sign Up</a></li>
                    </ul>
            </div>
              <div class="tagline">India's first e-Library of guided learning resources</div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="<?php get_template_directory_uri();?>/img/bg-header.png">
          <div class="container">
            <div class="carousel-caption">
              <p>Get a personal child expert who comes from the background of child development, psychology and counselling to work with you on the development path for your child throughout his learning age...
                  <br /><br /><br /><br />
                  ...without the pain of spending time, effort and resources.</p>
              <p><a class="btn btn-lg btn-success" href="#contactus" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php get_template_directory_uri();?>/img/bg-header.png">
          <div class="container">
            <div class="carousel-caption">
                <p>An exert on childrens learning resources who constantly evaluates toys, games, books, and any learning resource  for its rich educational and recreational conent and selects only the ones that are appropriate to your child's age and learning requirement...
                    <br /><br /><br />
                    ...so that you do not waste money on useless toys and provide  the right ones for your child to play 'n learn
                </p>
              <p><a class="btn btn-lg btn-info" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php get_template_directory_uri();?>/img/bg-header.png">
          <div class="container">
            <div class="carousel-caption">
              <p>An online platform where you can easily network with other parents of same age children and discuss any child related issue, big or small, openly or privately with other parents and also get ready access to experts...
                  <br /><br /><br />
                  ...without feeling awkward or getting misguided by professionals with vested interests.
                </p>
              <p><a class="btn btn-lg btn-success" href="#contactus" role="button">Register for a one month FREE account</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php get_template_directory_uri();?>/img/bg-header.png">
          <div class="container">
            <div class="carousel-caption">
                <p>Get free home deiivery and pickup of the learning resources package pre-selected for your child or as per your own selection through our online e-library  at your doorstep each week...
                    <br /><br /><br />
                    ....so that you spend more quality time with your family and also save lots of money
                </p>
              <p><a class="btn btn-lg btn-success" href="#contactus" role="button">Get started now</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php get_template_directory_uri();?>/img/bg-header.png">
          <div class="container">
            <div class="carousel-caption">
                <p>Get unbiased recommendations on the right age appropriate learning resources package to provide to your child in order to meet his annual learning requirements...
                    <br /><br /><br />
                    ...so that you do not have to spend time chosing the right toys, games, etc.
                </p>
              <p><a class="btn btn-lg btn-success" href="#contactus" role="button">Get started now</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="<?php get_template_directory_uri();?>/img/bg-header.png">
          <div class="container">
            <div class="carousel-caption">
                <p>Get invited to participate in offline fun events, networking meetings and discuss childdevelopment with friends, other parents, experts.in the field of child development and educators...
                    <br /><br /><br />
                    ...so that you are in touch with well wishers
                </p>
                <p><a class="btn btn-lg btn-success" href="#contactus" role="button">Register</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div><!-- /.carousel -->



    <!-- start How it works -->

    <div class="container howitworks" id="howitoworks">
        <h2 class="text-center">How does all this work?</h2>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-5 step-panel">
                <div class="step-text">
                    <h2>Step 1</h2>
                    Register from your desktop, mobile or iPad. Existing members can use the e-library system to browse and define their learning resources preferences.</div>
                <div class="step-img"><img class="img-square" src="<?php get_template_directory_uri();?>/img/step1.png" alt="Generic placeholder image"></div>
            </div><!-- end step1 -->

            <div class="col-lg-2">
                <img class="corner-arrows-0" src="<?php get_template_directory_uri();?>/img/top-to-bottom.png" />
            </div>

            <div class="col-lg-5 step-panel">
                <div class="step-text">
                    <h2>Step 2</h2>
                    Our child expert visits you to evaluate your child learning abilities, preferences, likings, etc.</div>
                <div class="step-img"><img class="img-square" src="<?php get_template_directory_uri();?>/img/step2.png" alt="Step 2"></div>
            </div><!-- end step2 -->
        </div><!-- end row -->
        <div class="row"><div class="col-lg-12">&nbsp;</div></div>
        <div class="row">
            <div class="col-lg-3">
                <img class="corner-arrows-4" src="<?php get_template_directory_uri();?>/img/left-to-top.png" />
            </div>

            <div class="col-lg-6 step-panel">
                <div class="step-text">
                    <h2>Step 3</h2>
                    We select the correct package of learning resources that meets your child�s age appropriate skill development and recreational needs.</div>
                <div class="step-img"><img class="img-square" src="<?php get_template_directory_uri();?>/img/step3.png" alt="Step 3"></div>
            </div>
            <div class="col-lg-3">
                <img class="corner-arrows-1" src="<?php get_template_directory_uri();?>/img/top-to-right.png" />
            </div>
        </div><!-- end row -->
        <div class="row"><div class="col-lg-12">&nbsp;</div></div>
        <div class="row">
            <div class="col-lg-5 step-panel">
                <div class="step-text">
                    <h2>Step 6</h2>
                    We measure the growth progress of your child based on his performane wit hthe assigned learning resources and your feedback.</div>
                <div class="step-img"><img class="img-square" src="<?php get_template_directory_uri();?>/img/step6.png" alt="Generic placeholder image"></div>
            </div>
            <div class="col-lg-2"> </div>
            <div class="col-lg-5 step-panel">
                <div class="step-text">
                    <h2>Step 4</h2>
                    Get free delivery and pickup of sanitized and neatly packaged fresh toys, games, puzzles, etc. at your doorstep</div>
                <div class="step-img"><img class="img-square" src="<?php get_template_directory_uri();?>/img/step4.png" alt="Generic placeholder image"></div>
            </div>
        </div><!-- /.row -->
        <div class="row"><div class="col-lg-12">&nbsp;</div></div>

        <div class="row">
            <div class="col-lg-3">
                <img class="corner-arrows-3" src="<?php get_template_directory_uri();?>/img/bottom-to-left.png" />
            </div>
            <div class="col-lg-6 step-panel">
                <div class="step-text">
                    <h2>Step 5</h2>
                    Use the instructions provided with each learning resource to help your child learn while playing so as to meet the learning outcomes while enjoying the games and toys.</div>
                <div class="step-img"><img class="img-square" src="<?php get_template_directory_uri();?>/img/step5.png" alt="Generic placeholder image"></div>
            </div>
            <div class="col-lg-3">
                <img class="corner-arrows-2" src="<?php get_template_directory_uri();?>/img/right-to-bottom.png" />
            </div>
        </div><!-- /.row -->
      </div><!-- end howitworks -->

      <!-- start playnlearn -->
      <div class="playnlearn" id="playnlearn">
        <h2 class="text-center">Secret behind Play n learn method</h2>
        <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#myTab1" data-toggle="tab">Holistic child development model</a></li>
            <li><a href="#myTab2" data-toggle="tab">Parents</a></li>
            <li><a href="#myTab3" data-toggle="tab">Educators</a></li>
            <li><a href="#myTab4" data-toggle="tab">Child Counsellors</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="myTab1">
                <div class="col-lg-6">
                    <img class="" src="<?php get_template_directory_uri();?>/img/playnlearn.png" />
                </div>
                <div class="col-lg-6">
                    <div class="  panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="text-center panel-title">Play and Learn - Holistic child growth model</h3>
                        </div>
                        <div class="panel-body">
                            <p class="quote">"Play is our brain's favorite way of learning"</p>
                            <p class="text-right"><strong>- Diane Ackerman</strong></p>
                            <p>
                                Our unique model is based on a holistic approach to child development and growth. This model is based on all round skil development and cognitive development of your child.
                            </p>
                            <p>
                                The model brings together the best out of educators, parents and child development experts who can contribute towards the all-round development of the child.
                            </p>
                            <p>
                                Children love to play with toys and spend lot of their time in playing with them. Children are introduced to toys at an early age.
                            </p>
                            <p>
                                Our model utilizes the bonding children have with toys and their interest in games to deliver learning and skill development. We use the same channel and medium to introduce children to education.
                                Our child experts continously scan the universe of toys, international and national, and evaluate them for their educational value as well as recreational quality.
                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- end myTab1-->
            <div class="tab-pane fade" id="myTab2">
                <div class="col-lg-6">
                    <img class="" src="<?php get_template_directory_uri();?>/img/playnlearn-parents.png" />
                </div>
                <div class="col-lg-6 ">
                    <div class="  panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="text-center panel-title">Play and Learn model - Parent's participation</h3>
                        </div>
                        <div class="panel-body">
                            <p class="quote">"We may not be able to prepare the future for our children, but we can at least prepare our children for the future."</p>
                            <p class="text-right"><strong>- Franklin D. Roosevelt</strong></p>
                            <p>
                                Our unique model is based on a holistic approach to child development and growth. This model is based on all round skil development and cognitive development of your child.
                            </p>
                            <p>
                                The model brings together the best out of educators, parents and child development experts who can contribute towards the all-round development of the child.
                            </p>
                            <p>
                                Children love to play with toys and spend lot of their time in playing with them. Children are introduced to toys at an early age.
                            </p>
                            <p>
                                Our model utilizes the bonding children have with toys and their interest in games to deliver learning and skill development. We use the same channel and medium to introduce children to education.
                            </p>
                            <p>
                                Our child experts continously scan the universe of toys, international and national, and evaluate them for their educational value as well as recreational quality.
                            </p>
                            <p>
                                So we smoothen the transition of your child from toy playing to classroom education by throwing out useless toys and replacing them with educational toys. Thus we bring toys to classroom and the classroom to your home through our model of learning resources.
                            </p>
                            <p>
                                Our e-library of learning resources have specific learning outcomes. Our expert recommendations assigns learning resource package to your child depending on his or her specific learning abilities, gaps, recreational needs and preferences. We collect performance measures from you when we pick up toys. This allows us to measure your child's growth and assign next package. The elibrary and home delivery of sanitized, packaged, non-toxic and fresh learning resources saves a lot of your hard earned money.

                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- end myTab2-->
            <div class="tab-pane fade" id="myTab3">
                <div class="col-lg-6">
                    <img class="" src="<?php get_template_directory_uri();?>/img/playnlearn-educators.png" />
                </div>
                <div class="col-lg-6 ">
                    <div class="  panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="text-center panel-title">Play and Learn model - Educator's role</h3>
                        </div>
                        <div class="panel-body">
                            <p class="quote">"The mediocre teacher tells. The good teacher explains. The superior teacher demonstrates. The great teacher inspires."</p>
                            <p class="text-right"><strong>�William Arthur Ward</strong></p>
                            <p>
                                The model helps schools in understanding their students in a better way. This helps them in providing appropriate attention towards the specific needs of their students.
                            </p>
                            <p>
                                The feedback collected from our system can be shared with the school to help them in their evaluation of your child's unique skills, prefered learnng mode, etc.
                            </p>
                            <p>

                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- end myTab3-->
            <div class="tab-pane fade" id="myTab4">
                <div class="col-lg-6">
                    <img class="" src="<?php get_template_directory_uri();?>/img/playnlearn-childcounsellors.png" />
                </div>
                <div class="col-lg-6 ">
                    <div class="  panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="text-center panel-title">Play and Learn model - Child development expert's role</h3>
                        </div>
                        <div class="panel-body">
                            <p class="quote">"Minds are like parachutes, they only function when they are open."</p>
                            <p class="text-right"><strong> �James Dewar </strong></p>
                            <p>
                                Our team of child experts have mix of backgrounds in child psychology, child development and game based learning methodology.
                            </p>
                            <p>
                                Once you register with you, one of our child expert will visit you. She is like your personal child counsellor. She will evalute your child's learning abilities and skills. Based on her discussions with you, she will fill out a form that contains details of your child's specific and unique learning requirements. This information is fed in our record system.
                            </p>
                            <p>
                                Based on the evaluation of your child and his unique learning requirements, a package of learning resources is assigned to your child each week.
                            </p>
                            <p>
                                We then collect information on your child's performance with the learning resource to understand his coginitive development.
                            </p>
                            <p>
                                Our child expert will stay with your child, continuously evaluating and assigning learning packages to help your child continue her learning journey.
                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- end myTab4-->
        </div>
      </div><!-- end playnlearn -->
      <hr />

      <div class="container discuss" id="discuss">
          <h2 class="text-center">Discussion forum and Knowledge base</h2>
          <br />
          <div class="row">
              <div class="col-lg-4 well">
                  <h4>Discussion your issues</h4>
                    <br />
                    <p>A question and answer platform by the parent for the parent. </p>

                    <p>
                        Discussions are guided by child experts who have background in the field of child
                    development, child psychology, paedtrics, child educatio and counselling.
                    </p>
                    <a class="btn btn-sm btn-primary"  href="#contactus" role="button">Register for 1 month Frree trial</a>
              </div>
              <div class="col-lg-4 well">
                  <h4>Rich Articles</h4>
                  <br />
                  <p>
                      A blog containg informative, accurate articles published by leading experts amd professionals with huge experience in the field of child development and counselling.
                  </p>
                  <p>
                      You can connect directly with them, discuss your issues and benefit from their guidance.
                  </p>
                    <a class="btn btn-sm btn-primary"  href="#contactus" role="button">Visit Blog</a>
              </div>
              <div class="col-lg-4 well">
                  <h4>Social Media</h4>
                  <br />
                  <p>
                    Find and network with other like minded parents of same age children.
                  </p>

                  <p>
                      Our forums and blogsare integrated with facebook and twitter to help you login using your facebook or t witter account.
                  </p>
 <a href="#"><img src="<?php get_template_directory_uri();?>/img/Facebook.png" /></a>&nbsp;<a href="#"><img src="<?php get_template_directory_uri();?>/img/twitter.png" /></a>&nbsp;<a href="#"><img src="<?php get_template_directory_uri();?>/img/Google%20Plus.png" /></a>&nbsp;<a href="#"><img src="<?php get_template_directory_uri();?>/img/Pinterest.png" /></a>&nbsp;<a href="#"><img src="<?php get_template_directory_uri();?>/img/YouTube.png" /></a>
              </div>
          </div>
<!--          <div class="row">
              <p class="text-center"><a class="btn btn-lg btn-primary"  href="#contactus" role="button">REGISTER FOR A FREE TRIAL MONTH</a></p>
          </div>
 -->
      </div><!-- end discuss -->

    <div class="container testimonials" id="testimonials">
        <h2 class="text-center">What are they saying?</h2>
        <div class="row">
            <h4>Educators</h4>
                <div class="col-lg-4">
                    <div>
                        <img class="img-circle" src="<?php get_template_directory_uri();?>/img/img-testimonial.png" alt="Generic placeholder image">
                        This is good a thing. I would recommend this service to every parent.This is good a thing. I would recommend this service to every parent.This is good a thing. I would recommend this service to every parent.
                    </div>
                </div>
                <div class="col-lg-4">
                    <div>
                        <img class="img-circle" src="<?php get_template_directory_uri();?>/img/img-testimonial.png" alt="Generic placeholder image">
                        This is good a thing. I would recommend this service to every parent.This is good a thing. I would recommend this service to every parent.This is good a thing. I would recommend this service to every parent.
                    </div>
                </div>
                <div class="col-lg-4">
                    <div>
                        <img class="img-circle" src="<?php get_template_directory_uri();?>/img/img-testimonial.png" alt="Generic placeholder image">
                        This is good a thing. I would recommend this service to every parent.This is good a thing. I would recommend this service to every parent.This is good a thing. I would recommend this service to every parent.
                    </div>
                </div>

        </div>
        <div class="row">
            <h4>Parent</h4>
            <div class="col-lg-4">
                <img class="img-square" src="<?php get_template_directory_uri();?>/img/img-testimonial.png" alt="Generic placeholder image">
                <div>
                    This is good a thing. I would recommend this service to every parent.
                </div>
            </div>
            <div class="col-lg-4">
                <img class="img-square" src="<?php get_template_directory_uri();?>/img/img-testimonial.png" alt="Generic placeholder image">
                <div>
                    This is good a thing. I would recommend this service to every parent.
                </div>
            </div>
            <div class="col-lg-4">
                <img class="img-square" src="<?php get_template_directory_uri();?>/img/img-testimonial.png" alt="Generic placeholder image">
                <div>
                    This is good a thing. I would recommend this service to every parent.
                </div>
            </div>
        </div>
        <div class="row">
            <h4>Child counsellors and psychiatrists</h4>
            <div class="col-lg-4">
                <img class="img-circle" src="<?php get_template_directory_uri();?>/img/img-testimonial.png" alt="Generic placeholder image">
                <div>
                    This is good a thing. I would recommend this service to every parent.
                </div>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="<?php get_template_directory_uri();?>/img/img-testimonial.png" alt="Generic placeholder image">
                <div>
                    This is good a thing. I would recommend this service to every parent.
                </div>
            </div>
            <div class="col-lg-4">
                <img class="img-circle" src="<?php get_template_directory_uri();?>/img/img-testimonial.png" alt="Generic placeholder image">
                <div>
                    This is good a thing. I would recommend this service to every parent.
                </div>
            </div>
        </div>
      </div><!-- end testimonials -->
      <hr />
      <div class="container pricing" id="pricing">
          <h2 class="text-center">Member Subscription rates</h2>
          <br />
          <div class="price">
              <ul>
                  <li>Basic Plan</li>
                  <li>Rs. 600/month</li>
                  <li>Perfect for introducing learning toys to toddlers.</li>
                  <li>Rs. 500 Registration fee</li>
                  <li>Rs. 1,500 security deposit</li>
                  <li>Period of hire: WEEKLY</li>
                  <li>2 Toys per week. (Book/CD/Puzzle extra)</li>
                  <li>12 Month :
                      <span style="text-decoration:line-through;">Rs. 7,200</span>
                      <br />
                      <strong style="color: #990000; font-size: 1.35em; font-weight: normal; letter-spacing: -1px;">Rs. 6,480</strong>
                      <br />
                      <span style="color: red;"><em><strong><span style="text-decoration: underline;">10% (Rs.720) Saving!</span></strong></em></span>
                  </li>
                  <li>6 Month :
                      <span style="text-decoration:line-through;">Rs. 3,600</span>
                      <br />
                      <strong style="color: #990000; font-size: 1.35em; font-weight: normal; letter-spacing: -1px;">Rs. 3,420</strong>
                      <br />
                      <span style="color: red;"><em><strong><span style="text-decoration: underline;">5% (Rs.360) Saving!</span></strong></em></span>
                  </li>
                  <li>3 Month :
                      <span style="text-decoration:line-through;">Rs. 1,800</span>
                      <br />
                      <strong style="color: #990000; font-size: 1.35em; font-weight: normal; letter-spacing: -1px;">Rs. 1,746</strong>
                      <br />
                      <span style="color: red;"><em><strong><span style="text-decoration: underline;">3% (Rs.216) Saving!</span></strong></em></span>
                  </li>
                  <li>
                        <strong>1 Month TRIAL : Rs. 600</strong>
                  </li>
                  <li>No discount on Partyy orders.</li>
                  <li>Fixed days of delivery and pickup</li>
                  <li>No discount on Outdoor toys </li>
                  <li>Alloted as and when available </li>
                  <li><a href="#" class="buy_now">Buy Now</a></li>
              </ul>

				<ul>
					<li>Popular Plan</li>
                  <li>Rs. 500/month</li>
                  <li>Perfect for toddlers and book lovers.</li>
                  <li>Rs. 500 Registration fee</li>
                  <li>Rs. 1,000 security deposit</li>
                  <li>Period of hire: WEEKLY</li>
                  <li>1 Toy + 1 Book/CD/Puzzle per week</li>
                  <li>12 Month :
                      <span style="text-decoration:line-through;">Rs. 6,000</span>
                      <br />
                      <strong style="color: #990000; font-size: 1.35em; font-weight: normal; letter-spacing: -1px;">Rs. 5,400</strong>
                      <br />
                      <span style="color: red;"><em><strong><span style="text-decoration: underline;">10% (Rs.600) Saving!</span></strong></em></span>
                  </li>
                  <li>6 Month :
                      <span style="text-decoration:line-through;">Rs. 3,000</span>
                      <br />
                      <strong style="color: #990000; font-size: 1.35em; font-weight: normal; letter-spacing: -1px;">Rs. 2,850</strong>
                      <br />
                      <span style="color: red;"><em><strong><span style="text-decoration: underline;">5% (Rs.300) Saving!</span></strong></em></span>
                  </li>
                  <li>3 Month :
                      <span style="text-decoration:line-through;">Rs. 1,500</span>
                      <br />
                      <strong style="color: #990000; font-size: 1.35em; font-weight: normal; letter-spacing: -1px;">Rs. 1,455</strong>
                      <br />
                      <span style="color: red;"><em><strong><span style="text-decoration: underline;">3% (Rs.180) Saving!</span></strong></em></span>
                  </li>
                  <li>
                        <strong>1 Month TRIAL : Rs. 500</strong>
                  </li>
                  <li>Sp. Discount on Party orders.</li>
                  <li>Prefernce for delivery days.</li>
                  <li>No discount on Outdoor toys </li>
                  <li>Alloted as and when available </li>
                   <li><a href="#" class="buy_now">Buy Now</a></li>
				</ul>

				<ul>
					<li>Genius Plan</li>
                  <li>Rs. 700/month</li>
                  <li>For the curious, energetic high growth learners</li>
                  <li>Rs. 500 Registration fee</li>
                  <li>Rs. 2,000 security deposit</li>
                  <li>Period of hire: WEEKLY</li>
                  <li>2 Toys + 2 Books/CDs/Puzzles</li>
                  <li>12 Month :
                      <span style="text-decoration:line-through;">Rs. 8,400</span>
                      <br />
                      <strong style="color: #990000; font-size: 1.35em; font-weight: normal; letter-spacing: -1px;">Rs. 7,560</strong>
                      <br />
                      <span style="color: red;"><em><strong><span style="text-decoration: underline;">10% (Rs.840) Saving!</span></strong></em></span>
                  </li>
                  <li>6 Month :
                      <span style="text-decoration:line-through;">Rs. 4,200</span>
                      <br />
                      <strong style="color: #990000; font-size: 1.35em; font-weight: normal; letter-spacing: -1px;">Rs. 3,990</strong>
                      <br />
                      <span style="color: red;"><em><strong><span style="text-decoration: underline;">5% (Rs.420) Saving!</span></strong></em></span>
                  </li>
                  <li>3 Month :
                      <span style="text-decoration:line-through;">Rs. 2,100</span>
                      <br />
                      <strong style="color: #990000; font-size: 1.35em; font-weight: normal; letter-spacing: -1px;">Rs. 2,037</strong>
                      <br />
                      <span style="color: red;"><em><strong><span style="text-decoration: underline;">3% (Rs.252) Saving!</span></strong></em></span>
                  </li>
                  <li>
                        <strong>1 Month TRIAL : Rs. 700</strong>
                  </li>
                  <li>Sp. Discount on Party orders.</li>
                  <li>Prefernce for delivery days.</li>
                  <li>Sp. Discount on Outdoor toys.</li>
                  <li>First preference to hire latest Toys and Books.</li>
                  <li><a href="#" class="buy_now">Buy Now</a></li>
				</ul>
          </div> <!-- end price -->
          <div class="price-sidebar">
            <h4>Summer Offer:</h4>
            <ol>
                <li>You can start with the 1 month TRIAL offer. You just have to pay the balance when you upgrade it to 3,6, or 12 months.</li>
                <li>Get 3% discount on �3 month package�</li>
                <li>Get 5% discount AND 1 EXTRA week FREE on �6 months package�</li>
                <li>Get 10% discount AND 1 EXTRA month FREE on �12 months package�</li>
            </ol>
          </div><!--price-sidebar-->
      </div> <!-- pricing -->
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
      <div class="container contactus" id="contactus">
          <h2 class="text-center">Contact us</h2>
          <div class="row">
              <div class="col-lg-6">
                  <div id="find-us" class="col-lg-4" style="top: 0px;">
                      <h4>Find Us</h4>
                      <ul class="unstyled">
                          <li><span class="glyphicon glyphicon-map-marker"></span> <span class="findus">via Post:</span> 73/3/2, Bhakti Marg, Law College Road, Pune-4, IN</li>
                          <li><span class="glyphicon glyphicon-earphone"></span> <span class="findus">via Phone:</span> 091 966 501 2897</li>
                          <li><span class="glyphicon glyphicon-print"></span> <span class="findus">via Fax:</span> 091 020 2543 2872</li>
                          <li><span class="glyphicon glyphicon-envelope"></span> <span class="findus">via Email:</span> <a href="mailto:mohan@toybuddy.in" class="email-link">mohan@toybuddy.in</a></li>
                      </ul>
                      <ul class="unstyled social">
                          <li>
                              <a href="https://www.facebook.com/Fireupandstartup">
                                  <span class="sprite-social fb-icon"></span>
                              </a>
                          </li>
                          <li>
                              <a href="https://twitter.com/fireupstartup">
                                  <span class="sprite-social tw-icon"></span>
                              </a>
                          </li>
                          <li>
                              <a href="https://plus.google.com/100130203793580838566/about">
                                  <span class="sprite-social gp-icon"></span>
                              </a>
                          </li>
                          <li>
                              <a href="http://pinterest.com/valuefacture">
                                  <span class="sprite-social pt-icon"></span>
                              </a>
                          </li>
                          <li>
                              <a href="http://in.linkedin.com/in/mohanlate/">
                                  <span class="sprite-social ln-icon"></span>
                              </a>
                          </li>
                          <li>
                              <a href="http://www.youtube.com/valuefacture">
                                  <span class="sprite-social yt-icon"></span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-6">
                  <h4>Sign up now!</h4>
                  <form class="form-horizontal" role="form">
                      <div class="form-group">
                          <label for="inputName" class="col-sm-2 control-label">Name</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Name">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputMobile" class="col-sm-2 control-label">Mobile</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputMobile" placeholder="Mobile">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputCity" class="col-sm-2 control-label">City</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputCity" placeholder="City">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputComment" class="col-sm-2 control-label">Comment</label>
                          <div class="col-sm-10">
                              <textarea class="form-control" rows="3" class="form-control"></textarea>

                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Register</button>
                          </div>
                      </div>
                  </form>


              </div>
          </div>

      </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="pull-right">
            <a href="#">Back to top</a>
        </div>
        <div>
            <a href="#">Privacy</a> | <a href="#">Terms</a>
        </div>
        <div class="div-copyright">
            &copy; 2013 ToyLuv.com
        </div>
    </div>




<!--
		<div class="view-container">
			<div ng-view class="view-frame"></div>
		</div>
-->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap.min.js"></script>
    <script src="<?php get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap-transition.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap-alert.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap-modal.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap-tab.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap-popover.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap-button.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap-collapse.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap-carousel.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/bootstrap-typeahead.js"></script>

    <script src="<?php get_template_directory_uri();?>/lib/angular/angular.js"></script>
	<script src="<?php get_template_directory_uri();?>/lib/angular/angular-route.js"></script>
	<script src="<?php get_template_directory_uri();?>/js/app.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/controllers.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/filters.js"></script>
 	<script src="<?php get_template_directory_uri();?>/js/services.js"></script>
	<script src="<?php get_template_directory_uri();?>/lib/angular/angular-resource.js"></script>
    <script src="<?php get_template_directory_uri();?>/js/holder.js"></script>


	<script src="<?php get_template_directory_uri();?>/lib/angular/angular-animate.js"></script>
	<script src="<?php get_template_directory_uri();?>/js/animations.js"></script>




    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'toybuddy'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>

  </body>
</html>
