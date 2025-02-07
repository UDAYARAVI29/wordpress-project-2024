<?php wp_head(); ?>

        <!-- =========================
             HEADER 
        ============================== -->
        <header id="nav1-3">
            
            <nav class="navbar navbar-fixed-top bg-transparent" id="main-navbar" role="navigation">
            
                <div class="container">
                    
                    <div class="navbar-header">
                        <!-- Menu Button for Mobile Devices -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <!-- Image Logo -->
                        <!-- 
                        recommended sizes
                            width: 150px;
                            height: 35px;
                        -->
                       <!-- Image Logo For Background Transparent -->
                        <a href="#" class="navbar-brand logo-black smooth-scroll"><img src="<?php bloginfo('template_directory'); ?>/images/logo-black.png" alt="logo" /></a>
                        <a href="#" class="navbar-brand logo-white smooth-scroll"><img src="<?php bloginfo('template_directory'); ?>/images/logo-white.png" alt="logo" /></a> 
                    </div><!-- /End Navbar Header -->

                    <div class="collapse navbar-collapse cta-header" id="navbar-collapse">
                        <!-- Menu Links -->
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#content2-1" class="smooth-scroll">About</a></li>
                            <li><a href="#features11-1" class="smooth-scroll">Departments</a></li>
                            <li><a href="#team6-1" class="smooth-scroll">Doctors</a></li>
                            <li><a href="#contact6-1" class="smooth-scroll">Contact</a></li>
                           
                            
                            <li><a href="#hero11" class="btn-nav btn-blue smooth-scroll">Book Appointment</a></li>
                        </ul><!-- /End Menu Links -->
                    </div><!-- /End Navbar Collapse -->

                </div><!-- /End Container -->
            </nav><!-- /End Navbar -->
        </header>
        <!-- /End Header Section -->

        
        <!-- =========================
            HERO SECTION
        ============================== -->
        <section id="hero11" class="bg-img hero-leadbox content-align-md" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/medical-1.jpg');">
            <div class="overlay"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 y-middle c2">
                        <!-- Intro Text -->
                        <div class="col-md-6 center-md text-white">
                            <h1>We care for you</h1>
                            <p class="lead f-w-700">Medical Services That You Can Trust.</p>
                            <p class="m-t-md">Nesciunt quasi id vero porro, facere ducimus quis officiis nobis pariatur corrupti alias, deleniti earum perspiciatis neque sunt fugiat saepe impedit reiciendis iusto. Voluptas minima nobis ipsa rerum fugiat explicabo corporis.</p>
                        </div>
                        <!-- Booking Form -->
                        <div class="col-md-6">
                            <form class="form-horizontal form-white form-2col text-white" id="dateForm">
                                <h4 class="text-center">Make an Appointment</h4>
                                <p class="text-center m-b-md">Just fill out the form below to make an appointment to get help from our qualified staff of doctors. It's easy and fast.</p>
                                <!-- Notifications -->
                                <p class="success df text-center"><i class="fa fa-check"></i> <strong>Your message has successfully been sent.</strong></p>
                                <p class="failed df text-center"><i class="fa fa-exclamation-circle"></i><strong> Something went wrong!</strong></p>

                                <div class="form-group w-50">
                                    <input type="text" class="form-control" id="dfName" placeholder="Name" required> 
                                    <input type="email" class="form-control" id="dfEmail" placeholder="Email" required>
                                </div>
                                <div class="form-group w-50">
                                    <input type="tel" class="form-control" id="dfPhone" placeholder="Phone Number" required>
                                    <input type="text" class="form-control" id="dfDate" placeholder="Booking Date" required>
                                </div>
                                <div class="form-group">
                                    <textarea id="dfMessage" rows="5" class="form-control" placeholder="Your Message"  required></textarea>
                                </div> 
                                <div class="form-group">
                                    <button type="submit" class="btn btn-shadow btn-blue">BOOK NOW!</button>
                                </div>
                            </form>
                        </div><!-- /End Booking Form -->
                    </div><!-- /End Col -->
                </div><!-- /End Row -->
            </div><!-- /End Container -->

        </section>
        <!-- /End Hero Section -->


        <!-- =========================
           CONTENT SECTION
        ============================== -->
        <section id="content2-1" class="content-spotlight bg-edit p-t-lg">
            
            <!-- Section Header -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center wow fadeIn">
                            <h2 class="m-b-md">Providing Total Health Care Solution</h2>
                            <p class="lead m-b-md">Each day the staff at Getleads strives for continued progress in clinical excellence, ratione excepturi debitis saepe aspernatur tempora, cumque esse.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container p-a-0">
                
                <div class="row m-a-0 spotlight-block img-right">
                    <!-- Image Block -->
                    <figure class="col-md-6 col-md-push-6 p-a-0">
                        <div class="img-wrap" style="background-image:url('images/medical-2.jpg')"></div>
                    </figure>
                    <!-- Text Block -->
                    <div class="col-md-6 col-md-pull-6 bg-edit bg-blue text-white spotlight-text center-md">
                        <div class="vertical-center-rel">
                            <h6 class="text-uppercase f-w-900 wow slideInLeft">World Renowned Doctors</h6>
                            <h3 class="f-w-900 m-b-md wow slideInLeft">Pioneering New Treatment Options In Patient Care.</h3>
                            <p class="m-b-md">Democritum inciderint nam ut, duo ne rebum tibique molestiae, mediocrem incorrupte dissentiunt has in. Vidisse gloriatur eum in, alia docendi molestie est te. Nam facer erant aeterno te, sed no utamur perfecto.</p>
                            <a href="#team6-1" class="btn btn-ghost smooth-scroll text-uppercase">Our Doctors</a>
                        </div>
                    </div>
                </div><!-- /End Row -->
            
            </div><!-- /End Container  -->
        </section>
        <!-- /End Content Intro -->


        <!-- =========================
           DEPARTMENTS SECTION
        ============================== -->
        <section id="features11-1" class="p-y-lg bg-edit">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center wow fadeIn">
                            <h2>Our Departments</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt doloremque dolores unde earum repellendus esse molestias explicabo deleniti.</p>
                        </div>
                    </div>
                </div>

                <div class="row features-panels">
                    <!-- Features Nav-Tabs -->
                    <div class="col-md-12 p-b-md">
                        <ul class="nav nav-tabs nav-justified m-b-md" role="tablist">
                            <li role="presentation" class="active"><a href="#dental" role="tab" data-toggle="tab" class="text-edit"><img src="<?php bloginfo('template_directory'); ?>/images/department2.png" alt="">Dental Care</a></li>
                            <li role="presentation"><a href="#cardiology" role="tab" data-toggle="tab" class="text-edit"><img src="<?php bloginfo('template_directory'); ?>/images/department1.png" alt="">Cardiology</a></li>
                            <li role="presentation"><a href="#eyecare" role="tab" data-toggle="tab" class="text-edit"><img src="<?php bloginfo('template_directory'); ?>/images/department3.png" alt="">Eye Care</a></li>
                            <li role="presentation"><a href="#neurology" role="tab" data-toggle="tab" class="text-edit"><img src="<?php bloginfo('template_directory'); ?>/images/department4.png" alt="">Neurology</a></li>
                            <li role="presentation"><a href="#ent" role="tab" data-toggle="tab" class="text-edit"><img src="<?php bloginfo('template_directory'); ?>/images/department5.png" alt="">Ent Center</a></li>
                            <li role="presentation"><a href="#orthopedics" role="tab" data-toggle="tab" class="text-edit"><img src="<?php bloginfo('template_directory'); ?>/images/department6.png" alt="">Orthopedics</a></li>
                        </ul>
                    </div>
                    
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active wow fadeIn" id="dental">
                            <div class="content-block content-align-md">
                                <div class="col-md-10 c2 col-md-offset-1 y-middle">
                                    <div class="col-md-6 col-md-push-6">
                                        <h3 class="f-w-900">Dental Care</h3>
                                        <h5 class="m-t-md m-b-md">Velit sunt eos iste explicabo adipisci laboriosam itaque, distinctio doloribus dicta.</h5>
                                        <p class="m-b-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus corporis ea consequatur quas, id voluptatem, non doloribus necessitatibus dolores autem alias ipsa.</p>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">Qualified Staff of Doctors</p>
                                        </div>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">24x7 Emergency Services</p>
                                        </div>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">Medical Counseling</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-pull-6">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/medical-3.jpg" class="img-responsive m-x-auto" alt="">
                                    </div>
                                </div>
                            </div><!-- /End Content Block-->
                        </div><!-- /End of Tab-panel 1 -->

                        <div role="tabpanel" class="tab-pane fade" id="cardiology">
                            <div class="content-block content-align-md">
                                <div class="col-md-10 c2 col-md-offset-1 y-middle">
                                    <div class="col-md-6">
                                        <h3 class="f-w-900">Cardiology</h3>
                                        <h5 class="m-t-md m-b-md">Velit sunt eos iste explicabo adipisci laboriosam itaque, distinctio doloribus dicta.</h5>
                                        <p class="m-b-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus corporis ea consequatur quas, id voluptatem, non doloribus necessitatibus dolores autem alias ipsa.</p>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">Qualified Staff of Doctors</p>
                                        </div>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">24x7 Emergency Services</p>
                                        </div>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">Medical Counseling</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/medical-4.jpg" class="img-responsive m-x-auto" alt="">
                                    </div>
                                </div>
                            </div><!-- /End Content Block-->
                        </div><!-- /End of Tab-panel 2 -->

                        <div role="tabpanel" class="tab-pane fade" id="eyecare">
                            <div class="content-block content-align-md">
                                <div class="col-md-10 c2 col-md-offset-1 y-middle">
                                    <div class="col-md-6 col-md-push-6">
                                        <h3 class="f-w-900">Eye Care</h3>
                                        <h5 class="m-t-md m-b-md">Velit sunt eos iste explicabo adipisci laboriosam itaque, distinctio doloribus dicta.</h5>
                                        <p class="m-b-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus corporis ea consequatur quas, id voluptatem, non doloribus necessitatibus dolores autem alias ipsa.</p>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">Qualified Staff of Doctors</p>
                                        </div>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">24x7 Emergency Services</p>
                                        </div>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">Medical Counseling</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-pull-6">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/medical-3.jpg" class="img-responsive m-x-auto" alt="">
                                    </div>
                                </div>
                            </div><!-- /End Content Block-->
                        </div><!-- /End of Tab-panel 3 -->

                        <div role="tabpanel" class="tab-pane fade" id="neurology">
                            <div class="content-block content-align-md">
                                <div class="col-md-10 c2 col-md-offset-1 y-middle">
                                    <div class="col-md-6">
                                        <h3 class="f-w-900">Neurology</h3>
                                        <h5 class="m-t-md m-b-md">Velit sunt eos iste explicabo adipisci laboriosam itaque, distinctio doloribus dicta.</h5>
                                        <p class="m-b-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus corporis ea consequatur quas, id voluptatem, non doloribus necessitatibus dolores autem alias ipsa.</p>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">Qualified Staff of Doctors</p>
                                        </div>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">24x7 Emergency Services</p>
                                        </div>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">Medical Counseling</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/medical-4.jpg" class="img-responsive m-x-auto" alt="">
                                    </div>
                                </div>
                            </div><!-- /End Content Block-->
                        </div><!-- /End of Tab-panel 4 -->

                        <div role="tabpanel" class="tab-pane fade" id="ent">
                            <div class="content-block content-align-md">
                                <div class="col-md-10 c2 col-md-offset-1 y-middle">
                                    <div class="col-md-6 col-md-push-6">
                                        <h3 class="f-w-900">Ent Center</h3>
                                        <h5 class="m-t-md m-b-md">Velit sunt eos iste explicabo adipisci laboriosam itaque, distinctio doloribus dicta.</h5>
                                        <p class="m-b-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus corporis ea consequatur quas, id voluptatem, non doloribus necessitatibus dolores autem alias ipsa.</p>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">Qualified Staff of Doctors</p>
                                        </div>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">24x7 Emergency Services</p>
                                        </div>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">Medical Counseling</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-pull-6">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/medical-3.jpg" class="img-responsive m-x-auto" alt="">
                                    </div>
                                </div>
                            </div><!-- /End Content Block-->
                        </div><!-- /End of Tab-panel 5 -->

                        <div role="tabpanel" class="tab-pane fade" id="orthopedics">
                            <div class="content-block content-align-md">
                                <div class="col-md-10 c2 col-md-offset-1 y-middle">
                                    <div class="col-md-6">
                                        <h3 class="f-w-900">Orthopedics</h3>
                                        <h5 class="m-t-md m-b-md">Velit sunt eos iste explicabo adipisci laboriosam itaque, distinctio doloribus dicta.</h5>
                                        <p class="m-b-md">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus corporis ea consequatur quas, id voluptatem, non doloribus necessitatibus dolores autem alias ipsa.</p>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">Qualified Staff of Doctors</p>
                                        </div>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">24x7 Emergency Services</p>
                                        </div>
                                        <div class="icon-left"> 
                                            <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                            <p class="m-t">Medical Counseling</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/medical-4.jpg" class="img-responsive m-x-auto" alt="">
                                    </div>
                                </div>
                            </div><!-- /End Content Block-->
                        </div><!-- /End of Tab-panel 6 -->
                    </div><!-- /End Tab-Content -->
                </div><!-- /End Row -->
            
            </div><!-- /End Container -->
        </section>
        <!-- /End Departments -->


        <!-- =========================
             TESTIMONIAL
        ============================== -->
        <section id="testimonials2-2" class="p-y-lg bg-edit bg-blue">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 wow fadeIn">
                        <div class="section-header text-center text-white">
                            <h2>What others are saying</h2>
                            <p class="lead">They’re the results you can expect</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Item -->
                <div class="row testimonials m-b-lg text-white wow slideInUp">
                    <div class="col-md-2 col-md-offset-1 hidden-sm hidden-xs text-right">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/images/quote1-white.png" class="img-responsive m-x-auto"  alt=""> 
                        </figure>
                    </div>
                    <div class="col-md-9 big-img-left">
                        <div class="col-md-3 col-md-push-8 text-center">
                            <!-- Testimonial Image -->
                            <figure>
                                <img src="<?php bloginfo('template_directory'); ?>/images/testimonial1.jpg" class="img-circle img-thumbnail m-x-auto" width="130" height="130" alt=""> 
                            </figure>
                        </div>
                        
                        <!-- Testimonial Quote -->
                        <div class="col-md-8 col-md-pull-3">
                            <blockquote>
                                <p class="m-b p-opacity f-w-700">"Corporis quis fugit repudiandae qui natus alias enim aut maiores, repellat eius voluptates dolorem, iusto necessitatibus laboriosam placeat, aspernatur, iste atque a cumque explicabo impedit non eius fugiat ab, provident esse aliquam tempore maxime." </p>
                                <div class="cite text-edit">
                                    Carol Miller  
                                    <span class="cite-info">Founder of IpsumProject.com</span> 
                                </div>
                            </blockquote>
                        </div>
                    </div><!-- /End Col-md-8 -->
                </div><!-- /End Row -->
                
                <!-- Testimonial Item -->
                <div class="row testimonials text-white wow slideInUp">
                    <div class="col-md-12">
                        <div class="col-md-9 big-img-left">
                            <div class="col-md-3 col-md-offset-1 text-center">
                                <!-- Testimonial Image -->
                                <figure>
                                    <img src="<?php bloginfo('template_directory'); ?>/images/testimonial3.jpg" class="img-circle img-thumbnail m-x-auto" width="130" height="130" alt=""> 
                                </figure>
                            </div>

                            <!-- Testimonial Quote -->
                            <div class="col-md-8">
                                <blockquote>
                                    <p class="m-b p-opacity f-w-700">"Velit veritatis commodi maxime et, illo eius libero, asperiores deleniti! Mollitia eligendi repudiandae ex aspernatur cupiditate voluptatibus voluptate veniam magni quibusdam rerum similique nesciunt laboriosam deserunt quae distinctio fugiat." </p>
                                    <div class="cite text-edit">
                                        Jonathan Lawson
                                        <span class="cite-info">Founder of StartupLorem.com</span> 
                                    </div>
                                </blockquote>
                            </div>
                        </div><!-- /End Col-md-9 -->
                        <div class="col-md-2 hidden-sm hidden-xs text-right">
                            <figure>
                                <img src="<?php bloginfo('template_directory'); ?>/images/quote2-white.png" class="img-responsive m-x-auto"  alt=""> 
                            </figure>
                        </div>
                    </div>
                </div><!-- /End Row -->
            </div><!-- /End Container -->
            
        </section>
        <!-- /End Testimonials -->

        
        <!-- =========================
             TEAM SECTION
        ============================== -->
        <section id="team6-1" class="p-y-lg team bg-edit">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center wow fadeIn">
                            <h2>Meet our Medical Specialists</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt doloremque dolores unde earum repellendus esse molestias explicabo deleniti.</p>
                        </div>
                    </div>
                </div>
                <!-- Item Carousel -->
                <div class="row c3">

                    <div id="carousel-team1" class="carousel slide carousel-team" data-ride="carousel" data-interval="7000"> 
                        
                        <!-- Indicators -->
                        <ol class="carousel-indicators inverse">
                            <li data-target="#carousel-team1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-team1" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <!-- 3 col Team Item -->
                            <div class="item active">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="h caption-4 m-b">
                                        <figure><img src="<?php bloginfo('template_directory'); ?>/images/doctor1.jpg" alt="">
                                            <figcaption>
                                                <div class="caption-box vertical-center-abs text-center social-btn">
                                                    <a href="#" class="sb-twitter"><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="sb-linkedin"><i class="fa fa-linkedin"></i></a>
                                                    <a href="#" class="sb-instagram"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <h5 class="f-w-900">Dr. Adams Austin</h5>
                                    <p class="role">Head Physician</p>
                                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto animi vero eos velit at illo maiores. Distinctio voluptates doloribus.</p>
                                </div><!-- /End Col -->

                                <div class="col-sm-4 col-xs-12">
                                    <div class="h caption-4 m-b">
                                        <figure><img src="<?php bloginfo('template_directory'); ?>/images/doctor2.jpg" alt="">
                                            <figcaption>
                                                <div class="caption-box vertical-center-abs text-center social-btn">
                                                    <a href="#" class="sb-twitter"><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="sb-linkedin"><i class="fa fa-linkedin"></i></a>
                                                    <a href="#" class="sb-instagram"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <h5 class="f-w-900">Dr. Lara Barrett</h5>
                                    <p class="role">Neurologist</p>
                                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto animi vero eos velit at illo maiores. Distinctio voluptates doloribus.</p>
                                </div><!-- /End Col -->

                                <div class="col-sm-4 col-xs-12">
                                    <div class="h caption-4 m-b">
                                        <figure><img src="<?php bloginfo('template_directory'); ?>/images/doctor3.jpg" alt="">
                                            <figcaption>
                                                <div class="caption-box vertical-center-abs text-center social-btn">
                                                    <a href="#" class="sb-twitter"><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="sb-linkedin"><i class="fa fa-linkedin"></i></a>
                                                    <a href="#" class="sb-instagram"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <h5 class="f-w-900">Dr. Marylin Hamilton</h5>
                                    <p class="role">Cardiologist</p>
                                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto animi vero eos velit at illo maiores. Distinctio voluptates doloribus.</p>
                                </div><!-- /End Col -->
                            </div>
                            <!-- /End Item -->

                            <!-- 3 col Team Item -->
                            <div class="item">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="h caption-4 m-b">
                                        <figure><img src="<?php bloginfo('template_directory'); ?>/images/doctor2.jpg" alt="">
                                            <figcaption>
                                                <div class="caption-box vertical-center-abs text-center social-btn">
                                                    <a href="#" class="sb-twitter"><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="sb-linkedin"><i class="fa fa-linkedin"></i></a>
                                                    <a href="#" class="sb-instagram"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <h5 class="f-w-900">Dr. Diana Powell</h5>
                                    <p class="role">Dental Surgeon</p>
                                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto animi vero eos velit at illo maiores. Distinctio voluptates doloribus.</p>  
                                </div><!-- /End Col -->

                                <div class="col-sm-4 col-xs-12">
                                    <div class="h caption-4 m-b">
                                        <figure><img src="<?php bloginfo('template_directory'); ?>/images/doctor1.jpg" alt="">
                                            <figcaption>
                                                <div class="caption-box vertical-center-abs text-center social-btn">
                                                    <a href="#" class="sb-twitter"><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="sb-linkedin"><i class="fa fa-linkedin"></i></a>
                                                    <a href="#" class="sb-instagram"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <h5 class="f-w-900">Dr. Adams Austin</h5>
                                    <p class="role">Head Physician</p>
                                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto animi vero eos velit at illo maiores. Distinctio voluptates doloribus.</p>
                                </div><!-- /End Col -->

                                <div class="col-sm-4 col-xs-12">
                                    <div class="h caption-4 m-b">
                                        <figure><img src="<?php bloginfo('template_directory'); ?>/images/doctor3.jpg" alt="">
                                            <figcaption>
                                                <div class="caption-box vertical-center-abs text-center social-btn">
                                                    <a href="#" class="sb-twitter"><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="sb-linkedin"><i class="fa fa-linkedin"></i></a>
                                                    <a href="#" class="sb-instagram"><i class="fa fa-instagram"></i></a>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <h5 class="f-w-900">Dr. Marylin Hamilton</h5>
                                    <p class="role">Cardiologist</p>
                                    <p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto animi vero eos velit at illo maiores. Distinctio voluptates doloribus.</p>
                                </div><!-- /End Col -->
                            </div>
                            <!-- /End Item -->
                            
                        </div><!-- /End Wrapper --> 
                    </div><!-- /End Carousel -->
                    
                </div><!-- /End Row -->
            
            </div><!-- /End Container -->

        </section> 
        <!-- /End Team -->


        <!-- =========================
            CTA SECTION
        ============================== -->
        <section id="cta4" class="p-y-md cta bg-edit bg-dark content-align-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 outline no-border y-middle c2">
                        <div class="col-md-7">
                            <h4 class="text-white">Do you need help from our experts?</h4>
                            <p class="text-white m-b-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eum dolorem iusto, corrupti accusamus nostrum rem eveniet.</p>
                        </div>
                        <div class="col-md-5 text-center">
                            <a href="#hero11" class="btn btn-shadow btn-blue btn-md smooth-scroll">Book an Appointment</a>
                        </div>                            
                    </div>
                </div>
            </div><!-- /End Container -->
        </section>
        <!-- /End Cta Section -->


        <!-- =========================
             BLOG SECTION
        ============================== -->
        <section id="blog3-1" class="p-t-lg p-b-sm blog bg-edit">
            <div class="container">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center wow fadeIn">
                            <h2>Latest News</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt doloremque dolores unde earum repellendus esse molestias explicabo deleniti doloribus.</p> 
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 content-block c2">
                        <!-- Blog Post -->
                        <div class="col-sm-6">
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/medical-1.jpg" alt="" class="img-responsive img-rounded"></a>
                            <div class="post-info">
                                <div class="date text-edit">
                                    <span class="day">25</span>
                                    Nov
                                </div>
                                <a href="#"><h5>Provident cumque nam odit reiciendis iste sunt est sapiente rerum.</h5></a>
                                <h6 class="p-opacity">Posted by Harold Butler in <strong>Neurology</strong></h6>
                            </div>
                            <p class="p-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, odio eum magni optio laborum non et accusamus, itaque.</p>
                            <a href="#" class="more-link edit">Continue Reading ...</a>
                        </div>
                        <!-- Blog Post -->
                        <div class="col-sm-6">
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/medical-4.jpg" alt="" class="img-responsive img-rounded"></a>
                            <div class="post-info">
                                <div class="date text-edit">
                                    <span class="day">12</span>
                                    Oct
                                </div>
                                <a href="#"><h5>Minus cupiditate sapiente esse vel sint totam quos hic natus assumenda. </h5></a>
                                <h6 class="p-opacity">Posted by Anthony Kim in <strong>Medical Center</strong></h6>
                            </div>
                            <p class="p-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, odio eum magni optio laborum non et accusamus, itaque.</p>
                            <a href="#" class="more-link edit">Continue Reading ...</a>
                        </div>
                    </div>
                </div>

                <div class="row new-row-md">
                    <div class="col-md-10 col-md-offset-1 content-block c2">
                        <!-- Blog Post -->
                        <div class="col-sm-6">
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/medical-3.jpg" alt="" class="img-responsive img-rounded"></a>
                            <div class="post-info">
                                <div class="date text-edit">
                                    <span class="day">26</span>
                                    Sep
                                </div>
                                <a href="#"><h5>Magni vitae ducimus voluptatem.</h5></a>
                                <h6 class="p-opacity">Posted by Carl Bradley in <strong>Staff</strong></h6>
                            </div>
                            <p class="p-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, odio eum magni optio laborum non et accusamus, itaque.</p>
                            <a href="#" class="more-link edit">Continue Reading ...</a>
                        </div>
                        <!-- Blog Post -->
                        <div class="col-sm-6">
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/doctor3.jpg" alt="" class="img-responsive img-rounded"></a>
                            <div class="post-info">
                                <div class="date text-edit">
                                    <span class="day">8</span>
                                    Aug
                                </div>
                                <a href="#"><h5>Impedit quibusdam ratione nihil.</h5></a>
                                <h6 class="p-opacity">Posted by Frank Smith in <strong>Dental Clinic</strong></h6>
                            </div>
                            <p class="p-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, odio eum magni optio laborum non et accusamus, itaque.</p>
                            <a href="#" class="more-link edit">Continue Reading ...</a>
                        </div>
                    </div>
                </div><!-- /End Row -->
            </div><!-- /End Container -->
        
        </section>
        <!-- /End Blog -->


        <!-- =========================
           CONTACT SECTION
        ============================== -->
        <section id="contact6-1" class="content-spotlight m-b-0 p-y-lg bg-edit">
            <div class="container p-a-0">
                <!-- Section Header -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-header text-center wow fadeIn">
                            <h2>Where we are</h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt doloremque dolores unde earum repellendus esse molestias explicabo deleniti.</p> 
                        </div>
                    </div>
                </div>
                
                <div class="row m-a-0 spotlight-block img-left">
                    <!-- Map -->
                    <figure class="col-md-6 p-a-0">
                        <div class="img-wrap">
                            <iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.836019454195!2d144.9532423152502!3d-37.81730974201917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4e793770d3%3A0x9e44d6ad0d76ba7c!2s121+King+St%2C+Melbourne+VIC+3000%2C+Australia!5e0!3m2!1sit!2sit!4v1445033865264" style="border:0" allowfullscreen></iframe>
                        </div>
                    </figure>
                    <!-- Content Block -->
                    <div class="col-md-6 bg-blue text-white spotlight-text center-md">
                        <div class="vertical-center-rel">
                            <h3 class="f-w-900 m-b-md">Getting Here.</h3>
                            <p class="m-b-md f-w-900 text-uppercase">
                                121 King Street<br>
                                Melbourne VIC 3000<br>
                                Australia
                            </p>
                            <p class="m-b-md">Democritum inciderint nam ut, duo ne rebum tibique molestiae, mediocrem incorrupte dissentiunt has in. Vidisse gloriatur eum in, alia docendi molestie est te. Nam facer erant aeterno te, sed no utamur perfecto.</p>
                            <a href="https://www.google.com/maps/place/121+King+St,+Melbourne+VIC+3000,+Australia/@-37.8173097,144.953237,17z/data=!3m1!4b1!4m2!3m1!1s0x6ad65d4e793770d3:0x9e44d6ad0d76ba7c?hl=it-IT" class="btn btn-white smooth-scroll">GET DIRECTIONS</a>
                        </div>
                    </div>
                </div><!-- /End Row -->
            </div><!-- /End Container -->
        </section>
        <!-- /End Contact Section -->

<?php get_footer(); ?>
        