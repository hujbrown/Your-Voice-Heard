<?php
echo "
{% load static %}
<!DOCTYPE html>
<html lang=\"en\">
<!-- Basic -->

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">

    <!-- Site Metas -->
    <title>Your Voice Heard - We Need Your Voice</title>
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Site Icons -->
    <link rel=\"shortcut icon\" href=\"#\" type=\"image/x-icon\" />
    <link rel=\"apple-touch-icon\" href=\"#\" />

    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{% static 'website/css/bootstrap.min.css' %}\" />
    <!-- Pogo Slider CSS -->
    <link rel=\"stylesheet\" href=\"{% static 'website/css/pogo-slider.min.css' %}\" />
    <!-- Site CSS -->
    <link rel=\"stylesheet\" href=\"{% static 'website/css/style.css' %}\" />
    <!-- Responsive CSS -->
    <link rel=\"stylesheet\" href=\"{% static 'website/css/responsive.css' %}\" />
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"{% static 'website/css/custom.css' %}\" />

    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
	<script>
	function validateForm() {
		var err = 0;
		var err_msg = \"Please select one of the given options!:\n\";
		var vote_selection1 = document.forms[\"voting_selections\"][\"voting_selection1\"].value;
		var vote_selection2 = document.forms[\"voting_selections\"][\"voting_selection2\"].value;
		var vote_selection3 = document.forms[\"voting_selections\"][\"voting_selection3\"].value;
		var vote_selection4 = document.forms[\"voting_selections\"][\"voting_selection4\"].value;
		if ((vote_selection1 == \"\") &&
		    (vote_selection2 == \"\") &&
			(vote_selection3 == \"\") &&
			(vote_selection4 == \"\")
		   ){
			return(err_msg);
      }
      else {
	        return(true);
      } 
	</script>

</head>

<body id=\"inner_page\" data-spy=\"scroll\" data-target=\"#navbar-wd\" data-offset=\"98\">

    <!-- LOADER -->
    <div id=\"preloader\">
        <div class=\"loader\">
            <img src=\"{% static 'website/images/loader.gif' %}\" alt=\"#\" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

   <!-- Start header -->
    <header class=\"top-header\">
        <div class=\"header_top\">

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"logo_section\">
                        <a class=\"navbar-brand\" href=\"{% url 'emailreps:index' %}\"><img src=\"{% static 'website/images/logo.jpg' %}\" alt=\"image\"></a>
                    </div>
                    <div class=\"site_information\">
                        <ul>
                            <li><a href=\"mailto:yourvoiceheard115@gmail.com\"><img src=\"{% static 'website/images/mail_icon.png' %}\" alt=\"#\" />yourvoiceheard115@gmail.com</a></li>
                            <li><a href=\"tel:yourvoiceheard115@gmail.com\"><img src=\"{% static 'website/images/phone_icon.png' %}\" alt=\"#\" />N/A</a></li>
                            <li><a class=\"join_bt\" href=\"{% url 'emailreps:vote' %}\">We need your voice</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class=\"header_bottom\">
          <div class=\"container\">
            <div class=\"col-sm-12\">
                <div class=\"menu_orange_section\">
                   <nav class=\"navbar header-nav navbar-expand-lg\">
                     <div class=\"menu_section\">
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-wd\" aria-controls=\"navbar-wd\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbar-wd\">
                    <ul class=\"navbar-nav\">
                        <li><a class=\"nav-link active\" href=\"{% url 'emailreps:index' %}\">Home</a></li>
                        <li><a class=\"nav-link\" href=\"{% url 'emailreps:blm' %}\">#BLM</a></li>
                        <li><a class=\"nav-link\" href=\"{% url 'emailreps:ice' %}\">ICE</a></li>
                        <li><a class=\"nav-link\" href=\"{% url 'emailreps:yemen' %}\">Yemen</a></li>
                        <li><a class=\"nav-link\" href=\"{% url 'emailreps:climatechange' %}\">Climate Change</a></li>
                         <li><a class=\"nav-link\" href=\"{% url 'emailreps:2020elections' %}\">2020 Elections</a></li>
                        <li><a class=\"nav-link\" href=\"{% url 'emailreps:caofficals' %}\">About CA Officals</a></li>
                        <li><a class=\"nav-link\" href=\"{% url 'emailreps:proposeissues' %}\">Propose Your Issues?</a></li>
                    </ul>
                </div>
                     </div>
                 </nav>
                </div>
            </div>
          </div>
        </div>

    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class=\"section inner_page_banner\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"banner_title\">
                        <h3>We Need Your Voice</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- section -->
    <div class=\"section layout_padding about_bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"full paddding_left_15\">
                        <div class=\"heading_main text_align_left\">
                           <h2>Vote for Issues You'd Like to See!</h2>
                        </div>
                    </div>



                </div>

                <!-- Voting Poll Here -->
					<h2>Please make a selection from the followings and vote accordingly!:</h2><br>
					<form name=\"voting_selections\" action=\"record_voting.php\" method=\"post\" enctype=\"multipart/form-data\" onsubmit=\"return validateForm()\">
						<table>	
							<tr>
								<td>
									<input type=\"radio\" name=\"voting_selection1\"  checked=\"\" value=\"voting_selection1\">Voting Selection1
								</td>
							</tr>
							<tr>
								<td>
									<input type=\"radio\" name=\"voting_selection2\"  checked=\"\" value=\"voting_selection2\">Voting Selection2
								</td>
							</tr>
							<tr>
								<td>
									<input type=\"radio\" name=\"voting_selection3\"  checked=\"\" value=\"voting_selection3\">Voting Selection3
								</td>
							</tr>
							<tr>
								<td>
									<input type=\"radio\" name=\"voting_selection4\"  checked=\"\" value=\"voting_selection4\">Voting Selection4
								</td>
							</tr>							
							<tr>
								</td>
									<input type=\"submit\" name=\"Voting_Poll\"  style=\"padding: 5px;
											      font-size:14px;
											      font:bold;
											      border: 2px solid #333;
											      border-radius: 5px;
											      background: none;
											    \"
											value=\"Vote!\">
								</td>					
							</tr>
					   </table>
					</form>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- Start Footer -->
    <footer class=\"footer-box\">
        <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-md-12 white_fonts\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"full\">
                                <img class=\"img-responsive\" src=\"{% static 'website/images/footer_logo.png' %}\" alt=\"#\" />
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"full\">
                                <h3>Quick Links</h3>
                            </div>
                            <div class=\"full\">
                                <ul class=\"menu_footer\">
                                    <li><a href=\"{% url 'emailreps:index' %}\">> Home</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"full\">
                                <div class=\"footer_blog full white_fonts\">
                             <h3>Newsletter</h3>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                             <div class=\"newsletter_form\">
                                <form action=\"index.html\">
                                   <input type=\"email\" placeholder=\"Your Email\" name=\"#\" required=\"\">
                                   <button>Submit</button>
                                </form>
                             </div>
                         </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-md-6 col-lg-3\">
                            <div class=\"full\">
                                <div class=\"footer_blog full white_fonts\">
                             <h3>Contact us</h3>
                             <ul class=\"full\">
                                <li><img src=\"{% static 'website/images/i5.png' %}\"><span>California<br>United States</span></li>
                                <li><img src=\"{% static 'website/images/i6.png' %}\"><span>yourvoiceheard115@gmail.com</span></li>
                                <li><img src=\"{% static 'website/images/i7.png' %}\"><span>Number N/A</span></li>
                             </ul>
                         </div>
                            </div>
                        </div>
					</div>
                </div>
			 </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div class=\"footer_bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <p class=\"crp\">© Copyrights 2019 design by html.design</p>
                </div>
            </div>
        </div>
    </div>

    <a href=\"#\" id=\"scroll-to-top\" class=\"hvr-radial-out\"><i class=\"fa fa-angle-up\"></i></a>

    <!-- ALL JS FILES -->
    <script src=\"{% static 'website/js/jquery.min.js' %}\"></script>
	<script src=\"{% static 'website/js/popper.min.js' %}\"></script>
    <script src=\"{% static 'website/js/bootstrap.min.js' %}\"></script>

    <!-- ALL PLUGINS -->
    <script src=\"{% static 'website/js/jquery.magnific-popup.min.js' %}\"></script>
    <script src=\"{% static 'website/js/jquery.pogo-slider.min.js' %}\"></script>
    <script src=\"{% static 'website/js/slider-index.js' %}\"></script>
    <script src=\"{% static 'website/js/smoothscroll.js' %}\"></script>
    <script src=\"{% static 'website/js/form-validator.min.js' %}\"></script>
    <script src=\"{% static 'website/js/contact-form-script.js' %}\"></script>
    <script src=\"{% static 'website/js/isotope.min.js' %}\"></script>
    <script src=\"{% static 'website/js/images-loded.min.js' %}\"></script>
    <script src=\"{% static 'website/js/custom.js' %}\"></script>

</body>
</html>
"
?>