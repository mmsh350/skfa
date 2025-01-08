<!DOCTYPE html><html lang="en"> <head>
    <meta charset="utf-8" />
    <title>SKFA - Sabon Kawo Football Academy</title>
    <meta
      name="keywords"
      content="Football Academy, Soccer, Sports, Training, SKFA, Sabon Kawo"
    />
    <meta
      name="description"
      content="SKFA - Sabon Kawo Football Academy provides top-notch soccer training and facilities for aspiring athletes."
    />
    <meta name="author" content="Abu zulaiha" />

    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Theme CSS -->
    <link href="css/main.css" rel="stylesheet" media="screen" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link
      rel="apple-touch-icon"
      sizes="72x72"
      href="images/apple-touch-icon-72x72.png"
    />
    <link
      rel="apple-touch-icon"
      sizes="114x114"
      href="images/apple-touch-icon-114x114.png"
    />
  </head>

    <body>

        <!-- layout-->
        <div id="layout">
                         <!-- Header-->
      <header id="header"></header>
      <!-- End Header-->

      <!-- mainmenu-->
      <nav class="mainmenu">
        <?php include('includes/menu.php'); ?>
      </nav>
      <!-- End mainmenu-->

      <!-- Mobile Nav-->
      <div id="mobile-nav">
          <?php include('includes/mobile-menu.php'); ?>
      </div>
      <!-- End Mobile Nav-->

            <!-- Google Map -->
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96675.78523415352!2d-74.04718227108513!3d40.78141356385996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2ed64fc3b013b%3A0xd813d2023b2ead16!2sNew+York+County%2C+Nueva+York%2C+EE.+UU.!5e0!3m2!1ses!2sco!4v1515849243841" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
            <!-- End Google Map -->

            <!-- Section Area - Content Central -->
            <section class="content-info">

                <div class="container">
                    <div class="row paddings-mini">
                        <!-- Left Content -->
                        <div class="col-md-4">
                            <aside class="panel-box">
                                <div class="titles no-margin">
                                    <h4>The Office</h4>
                                </div>
                                <div class="info-panel">
                                    <address>
                                      <strong>SKFA Academy</strong><br>
                                      <i class="fa fa-map-marker"></i><strong>Address: </strong> Sabon Kawo Kaduna<br>
                                      <i class="fa fa-plane"></i><strong>City: </strong>xxxxx xxxxxxx<br>
                                      <i class="fa fa-phone"></i> <abbr title="Phone">P:</abbr> (234) xxx -xxxxxx
                                    </address>
                                </div>
                            </aside>

                            <aside class="panel-box">
                                <div class="titles no-margin">
                                    <h4>Emails Contact</h4>
                                </div>
                                <div class="info-panel">
                                    <address>
                                      <i class="fa fa-envelope"></i><strong>Email:</strong><a href="/cdn-cgi/l/email-protection#193a"> <span class="__cf_email__" data-cfemail="a1d2c0cdc4d2e1d2d1ced3d5d2c2d4d18fc2cecc">[email protected]</span></a><br>
                                      <i class="fa fa-envelope"></i><strong>Email:</strong><a href="/cdn-cgi/l/email-protection#0d2e"> <span class="__cf_email__" data-cfemail="fa898f8a8a95888eba898a95888e89998f8ad4999597">[email protected]</span></a>
                                    </address>
                                </div>
                            </aside>
                        </div>
                        <!-- End Left Content -->

                        <!-- Right Content -->
                        <div class="col-md-8">
                            <div class="panel-box">
                                <div class="titles no-margin">
                                    <h4>Contact Form</h4>
                                </div>
                                <div class="info-panel">
                                    <!-- Form Contact -->
                                    <form class="form-theme" action="php/send-mail.php">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Your name *</label>
                                                <input type="text" required="required" value="" maxlength="100" class="form-control" name="Name" id="name">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Your email address *</label>
                                                <input type="email" required="required" value="" maxlength="100" class="form-control" name="Email" id="email">
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <label>Subject *</label>
                                                <input type="text" required="required" value="" maxlength="100" class="form-control" name="Email" id="email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Comment *</label>
                                                <textarea maxlength="5000" rows="10" class="form-control" name="message" style="height: 138px;" required="required"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="submit" value="Send Message" class="btn btn-lg btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Form Contact -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="result"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Right Content -->
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="section-newsletter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <h2>Enter your e-mail and <span class="text-resalt">subscribe</span> to our newsletter.</h2>
                                    <p>Duis non lorem porta,  eros sit amet, tempor sem. Donec nunc arcu, semper a tempus et, consequat.</p>
                                </div>
                                <form id="newsletterForm" action="php/mailchip/newsletter-subscribe.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input class="form-control" placeholder="Your Name" name="name" type="text" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                                <input class="form-control" placeholder="Your  Email" name="email" type="email" required="required">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary" type="submit" name="subscribe">SIGN UP</button>
                                                 </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="result-newsletter"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Newsletter -->
            </section>
            <!-- End Section Area -  Content Central -->

            <div class="instagram-btn">
                <div class="btn-instagram">
                    <i class="fa fa-instagram"></i>
                    FOLLOW
                    <a href="https://www.instagram.com/fifaworldcup/" target="_blank">@skfaclub</a>
                </div>
            </div>

            <div class="content-instagram">
                <div id="instafeed"></div>
            </div>

            

             
               <!-- footer-->
      <footer id="footer"></footer>
      <!-- End footer-->

      <!-- footer Down-->
      <div id="site-copyright" class="footer-down"></div>
            <!-- footer Down-->
        </div>
        <!-- End layout-->
        </div>
        <!-- End layout-->

        <!-- ======================= JQuery libs =========================== -->
        <!-- jQuery local-->
        <script data-cfasync="false" src="js/email-decode.min.js"></script><script type="c528aadfd3773eeb4d31483a-text/javascript" src="js/jquery.js"></script>
        <!-- popper.js-->
        <script type="c528aadfd3773eeb4d31483a-text/javascript" src="js/popper.min.js"></script>
        <!-- bootstrap.min.js-->
        <script type="c528aadfd3773eeb4d31483a-text/javascript" src="js/bootstrap.min.js"></script>
        <!-- required-scripts.js-->
        <script type="c528aadfd3773eeb4d31483a-text/javascript" src="js/theme-scripts.js"></script>
        <!-- theme-main.js-->
        <script type="c528aadfd3773eeb4d31483a-text/javascript" src="js/theme-main.js"></script>
        <!-- ======================= End JQuery libs =========================== -->

    <script src="js/rocket-loader.min.js" data-cf-settings="c528aadfd3773eeb4d31483a-|49" defer=""></script>
<script src="js/config.js"></script>
</body></html>