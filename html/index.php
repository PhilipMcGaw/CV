<!DOCTYPE html>
<html lang="en-GB">
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Philip McGaw | Electronics Engineer with specalisum in EMC</title>
    <meta name="description" content="Philip McGaw, JLR, ARRIVAL, CASS Industries, EMC, EMF, RF">

    <link rel="icon" href="img/favicon.png">

    <meta property="og:title" content="Philip McGaw | Electronics Engineer with specalisum in EMC">
    <meta property="og:description" content="Dyson | Brompton Bicycle | Imperial College Dyson School of Design Engineering">
    <meta property="og:image" content="<?php $_SERVER['SERVER_NAME']; ?>img/ogimage.jpg">
    <meta property="og:url" content="<?php $_SERVER['SERVER_NAME']; ?>">

    <meta name="theme-color" content="#000000">


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="https://use.typekit.net/dkg6njd.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-default" style="display:none;" id="myNav">
        <div class="container" style="margin-top: 20px; padding:0px">

            <div class="navbar-header page-scroll">
                <div class="row">
                    <div style="z-index: 1000;">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <h2 style="font-size:60px; margin-top:0px">Philip McGaw</h2>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="    font-family: 'Source Sans Pro', sans-serif;font-weight: 500;text-transform: uppercase;">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#About" style="text-decoration: none">About</a>
                    </li>
                    <li>
                        <a href="philipmcgaw.pdf" target="_blank" style="text-decoration: none">CV</a>
                    </li>
                    <li>
                        <a target="_blank" href="//www.linkedin.com/in/philipmcgaw/" style="text-decoration: none">LinkedIn</a>
                    </li>
                </ul>
            </div>

            <div id="myBtnContainer" class="myBtnContainer" style="margin-top: 40px; margin-left: 1px">
                <button class="btn active" onclick="filterSelection('all')">Show all</button>
                <button class="btn" onclick="filterSelection('Industry')">Industry</button>
                <button class="btn" onclick="filterSelection('Mechatronic')">Mechatronic</button>
                <button class="btn" onclick="filterSelection('Strategy')">Strategy</button>
                <button class="btn" onclick="filterSelection('Algorithm')">Algorithm</button>
                <button class="btn" onclick="filterSelection('Interaction')">Interaction</button>
                <button class="btn" onclick="filterSelection('CAD')">CAD</button>
                <button class="btn" onclick="filterSelection('Web')">Web Dev</button>
                <button class="btn" onclick="filterSelection('Product')">Product</button>
                <button class="btn" onclick="filterSelection('Mechanical')">Mechanical</button>
            </div>
        </div>
    </nav>

    <div id="loader">
        <h2 style="font-size: 64px; padding: 0; margin: 0; padding-bottom: 0px;">PM</h2>
    </div>

    <section id="portfolio">
        <div class="container container-content" style="display:none;" id="myDiv">
            <div class="row row-0-gutter">


                <!-- GoogleX-->
                <div class="column col-0-gutter Industry Mechatronic Algorithm Interaction CAD Mechanical">
                    <div class="ot-portfolio-item">
                        <figure class="effect-bubba">
                            <img src="img/Covers/xcover.jpg" class="img-responsive lighter" />
                            <figcaption>
                                <h2>Placement - Google X</h2>
                                <p>A 6 month placement at Google's moonshot factory prototyping the next big bets</p>
                                <a href="img/GoogleX/placement_poster.pdf" data-toggle="modal">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!--Lettuce Labs-->
                <div class="column col-0-gutter Strategy Algorithm Interaction Product ">
                    <div class="ot-portfolio-item">
                        <figure class="effect-bubba">
                            <img src="img/Covers/lettucelabscover.png" class="img-responsive lighter" />
                            <figcaption>
                                <h2 style="color: #000000">Future Food</h2>
                                <p>How might the connected smart kitchen of the future reduce consumer food waste?</p>
                                <a href="#" data-toggle="modal" data-target="#FutureFood">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Dyson -->
                <div class="column col-0-gutter Industry CAD Mechanical Product Interaction">
                    <div class="ot-portfolio-item">
                        <figure class="effect-bubba">
                            <img src="img/Covers/dysoncover2.png" class="img-responsive" />
                            <figcaption>
                                <h2 style="color: #000000">Internship - Dyson</h2>
                                <p>A 3 month internship in New Product Development. Solved a design problem in an upcoming product.</p>
                                <a href="#" data-toggle="modal" data-target="#Dyson">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Kaufmann -->
                <div class="column col-0-gutter Mechatronic Interaction  CAD Product">
                    <div class="ot-portfolio-item">
                        <figure class="effect-bubba">
                            <img src="img/Covers/kaufmanncover.png" class="img-responsive" />
                            <figcaption>
                                <h2>Kaufmann Tools</h2>
                                <p>Power tools reimagined for education. Putting DIY tools in the hands of young people, an invaluable life skill.</p>
                                <a href="#" data-toggle="modal" data-target="#KaufmannTools">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Stackpack -->
                <div class="column col-0-gutter Product Interaction Systemdesign">
                    <div class="ot-portfolio-item">
                        <figure class="effect-bubba">
                            <img src="img/Covers/stackpackcover.png" class="img-responsive" />
                            <figcaption>
                                <h2>Stackpack</h2>
                                <!--color: #4186C4; style="font-family:'Changa One';"-->
                                <p>How might we reuse cardboard packaging in a more sustainable future?</p>
                                <a href="#" data-toggle="modal" data-target="#Stackpack">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Gizmo -->
                <div class="column col-0-gutter Mechatronic Interaction  Algorithm">
                    <div class="ot-portfolio-item">
                        <figure class="effect-bubba">
                            <img src="img/Covers/gizmocover.png" class="img-responsive" />
                            <figcaption>
                                <h2 style="color: #000000">Gizmo</h2>
                                <p>An interactive experiment in mechatronics. Can a robot inspire empathy? Will the public collaborate to keep it alive?</p>
                                <a href="#" data-toggle="modal" data-target="#Gizmo">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- PiCam -->
                <div class="column col-0-gutter Product Interaction">
                    <div class="ot-portfolio-item">
                        <figure class="effect-bubba">
                            <img src="img/Covers/picamcover3.png" class="img-responsive" />
                            <figcaption>
                                <h2>PiCam</h2>
                                <p>A personal project on making the 35mm experience digital, with Raspberry Pi.</p>
                                <a href="#" data-toggle="modal" data-target="#PiCam">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Mars -->
                <div class="column col-0-gutter Mechatronic CAD Mechanical">
                    <div class="ot-portfolio-item">
                        <figure class="effect-bubba">
                            <img src="img/Covers/marscover2.png" class="img-responsive" />
                            <figcaption>
                                <h2 style="color: #000000">JumpBot</h2>
                                <p>An exercise in the mechanical design of a jumping robot for the exploration of Mars.</p>
                                <a href="#" data-toggle="modal" data-target="#JumpBot">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Brompton -->
                <div class="column col-0-gutter Industry CAD Mechanical Product Interaction">
                    <div class="ot-portfolio-item">
                        <figure class="effect-bubba">
                            <img src="img/Covers/bromptoncover.png" class="img-responsive lighter" />
                            <figcaption>
                                <h2 style="color: #000000">Internship - Brompton</h2>
                                <p>Developed and prototyped a new Brompton product. From blank sheet of paper to 3 ridable, foldable prototype bikes.</p>
                                <a href="#" data-toggle="modal" data-target="#Brompton">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Tetris -->
                <div class="column col-0-gutter Algorithm">
                    <div class="ot-portfolio-item">
                        <figure class="effect-bubba">
                            <img src="img/Covers/tetriscover2.png" class="img-responsive lighter" />
                            <figcaption>
                                <h2 style="color: #000000">Tetromino Algorithm Challenge</h2>
                                <p>Completing a Tetris puzzle pattern as fast and accurately as possible. Coded in Python.</p>
                                <a href="#" data-toggle="modal" data-target="#Tetris">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <p id="back-top" style="display:none;">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </p>

    <footer id="myFooter" style="display:none">
        <div class="container footer-container">
            <p>Copyright Philip McGaw <?php echo date("Y"); ?>. All rights reserved. </p>
        </div>
    </footer>










		<!-- About -->
		<?php include 'sections/about.php';?>

    <!-- GoogleX -->
    <div class="modal fade" id="GoogleX" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="https://www.bencobley.com/img/GoogleX/loon2.jpg" class="img-responsive" />
                </div>
                <div class="modal-body">
                    <h2>X, the moonshot factory</h2>
                    <h5>6-Month Placement in Mountain View, California<li>Prototyping early stage projects in the Rapid Evaluation team</li><li>Offered return placement or graduate role</li>
                    </h5>
                    <div class="modal-works"><span>Industry</span><span>Mechatronics</span><span>Algorithm</span><span>CAD</span><span>Mechanical</span></div>
                    <h3>Moonshot Intern</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>A paid 12 week internship in the New Product Development team, Floor Care. I was challenged with solving a design problem in an upcoming product [currently confidential]. From concept generation to design for manufacture, I was given significant responsibility in ownership of part design. I developed 4 schemes across a range of engineering risk levels, from quick fixes to radical changes that aim to solve the problem 'properly'.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Developing my skills in CAD, prototyping and fabrication, I manufactured prototype rigs to demonstrate and validate my solutions. I presented my designs to senior project leaders. My work will feature in upcoming products. At the end of the placement I was offered the opportunity to return to Dyson in a future intern or Graduate role.</p>
                        </div>
                    </div>
                    <img src="https://www.bencobley.com/img/GoogleX/loon.jpg" />
                    <p class="caption">Dyson Cyclone V10, a predecessor to the project I worked on.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Futurefood -->
    <div class="modal fade" id="FutureFood" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/Futurefood/show.jpg" class="img-responsive" />
                </div>
                <div class="modal-body">
                    <h2>Lettuce Labs</h2>
                    <h5>How might the connected kitchen of the future reduce consumer food waste?
                    <li>Third year group project</li>
                    <li>My focus: system design, vision demo and exhibition piece</li>
                    </h5>
                    <div class="modal-works"><span>Product Design</span><span>Interaction</span><span>System Design</span><span>Strategy</span><span>Algorithm</span></div>

                    <h3 style="color: darkred; font-style: italic">Temporary overview page - please check back for a full write-up soon!</h3>

                    <h3>The connected kitchen of 2030</h3>

                    <p> Lettuce Labs outlines a vision for the Connected Kitchen of 2030 and how it might reduce consumer food waste by a factor of 10.

                    We forsee a future in which a suite of IOT kitchen devices feeding data to an Alexa-style virtual assistant will dramatically reduce food waste due to human error - while making the shopping cooking and grocery shopping experience a breeze. Food that does make it to the (smart) bin will be connected to underutilised Biogas plants across the country.
                    </p>

                    <div class="slickcarousel">
                        <div><img src="img/Futurefood/futurefood6.png" class="slickslide">
                            <div class="slickcaption">
                                <p>Internet of Things connected devices will provide unprecedented data to aid reduction in food waste. </p>
                            </div>
                        </div>
                        <div><img src="img/Futurefood/futurefood7.png" class="slickslide">
                            <div class="slickcaption">
                                <p>Kitchen-specific voice assistants will help decision making and waste due to reduce human error.</p>
                            </div>
                        </div>
                        <div><img src="img/Futurefood/futurefood8.png" class="slickslide">
                            <div class="slickcaption">
                                <p>IOT smart cameras and weighing scales will accurately track ingredient inventory.</p>
                            </div>
                        </div>
                        <div><img src="img/Futurefood/futurefood9.png" class="slickslide">
                            <div class="slickcaption">
                                <p>Voice assistant will aid weighing out of perfect portions, based on your eating habits.</p>
                            </div>
                        </div>
                        <div><img src="img/Futurefood/futurefood10.png" class="slickslide">
                            <div class="slickcaption">
                                <p>Finally, waste will be monitored through a smart bin, also including scales and cameras.  </p>
                            </div>
                        </div>

                    </div>

                    <h3>One system tackling food waste through both prevention and recovery</h3>

                    <p>The Lettuce Labs connected system enables you to reduce the impact of your waste through the power of data.

                    <br><strong>Prevention: </strong>AI powered delivery of the right portions of ingredients, based on your habits. Avoid overpurchasing and always use ingredients in time with help from a virtual assistant.

                    <br><strong>Recovery: </strong> An effortless service connecting your biodegradable bin boxes with under-utilised biogas plants across the UK.</p>

                    <div class="slickcarousel">
                        <div><img src="img/Futurefood/futurefood5.png" class="slickslide">
                            <div class="slickcaption">
                                <p>Preventing food waste in the first place is more valuable than resource recovery</p>
                            </div>
                        </div>
                        <div><img src="img/Futurefood/futurefood11.png" class="slickslide">
                            <div class="slickcaption">
                                <p>The majority of home food waste is edible - a behaviour change is needed, powered by tech.</p>
                            </div>
                        </div>
                        <div><img src="img/Futurefood/futurefood12.png" class="slickslide">
                            <div class="slickcaption">
                                <p>The waste - including unavoidable, inedible waste - is sent to underutilised biogas plants. </p>
                            </div>
                        </div>
                        <div><img src="img/Futurefood/futurefood13.png" class="slickslide">
                            <div class="slickcaption">
                                <p>The waste data allows the perfect mixture of waste containers to be calculated, for optimum digestion conditions.</p>
                            </div>
                        </div>
                        <div><img src="img/Futurefood/futurefood14.png" class="slickslide">
                            <div class="slickcaption">
                                <p>This combination of prevention and recovery could drive a 10X reduction in consumer food waste.</p>
                            </div>
                        </div>
                        <div><img src="img/Futurefood/futurefood15.png" class="slickslide">
                            <div class="slickcaption">
                                <p>Micro-servos actuate the self-righting mechanism</p>
                            </div>
                        </div>


                    </div>
                        <h3>Lettuce Labs in the Press</h3>
                        <div><img src="img/Futurefood/linkedin.png" style="width: 500px" class="slickslide">
                            <div class="slickcaption">
                                <p>Check out the article <a href="https://www.standard.co.uk/tech/food-waste-virtual-chef-kitchen-a4142036.html">here.</a></p>
                        </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Dyson -->
    <div class="modal fade" id="Dyson" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/Dyson/dyson4.jpg" class="img-responsive" />
                </div>
                <div class="modal-body">
                    <h2>Dyson Internship Summer 2018</h2>
                    <h5>3 month internship in New Product Development team<li>Tackled design challenge in an upcoming product.</li>
                        <li>Offered return placement or graduate role</li>
                    </h5>
                    <div class="modal-works"><span>Industry</span><span>CAD</span><span>Mechanical</span><span>Product Design</span><span>Interaction</span></div>
                    <h3>Research, Design and Development Intern</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>A paid 12 week internship in the New Product Development team. I was challenged with solving a design problem in an upcoming product [currently confidential]. From concept generation to design for manufacture, I was given significant responsibility in ownership of part design. I developed 4 schemes covering a range of engineering risk levels, from quick fix to a radical change that solves the problem 'properly'.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Developing my skills in CAD, prototyping and fabrication, I manufactured prototype rigs to demonstrate and validate my solutions. I presented my designs to senior project leaders. My work will feature in upcoming products. At the end of the placement I was offered the opportunity to return to Dyson in a future intern or Graduate role.</p>
                        </div>
                    </div>
                    <img src="img/Dyson/dysonv10.jpg" />
                    <p class="caption">Dyson Cyclone V10, a predecessor to the project I worked on.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Kaufmann -->
    <div class="modal fade" id="KaufmannTools" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/Kaufmann/cover2.png" class="img-responsive" />
                </div>
                <div class="modal-body">
                    <h2 class="kmhead" style="font-weight: 500">Kaufmann Tools</h2>
                    <h5>A power tool reimagined for education.<li>Second year group project</li>
                        <li> My focus: prototype design and build </li>
                    </h5>
                    <div class="modal-works"><span>Interaction</span><span>Mechatronics</span><span>CAD</span><span>Product Design</span><span>Web Design</span></div>

                    <div style="background-color:#0FAED5; margin: 60px 0 40px !important" align='center'><img src="img/Kaufmann/logowhite.png" style="max-height: 140px; width: auto; margin: 20px 0 0px; " />
                        <p style="text-align: center; color: #ffffff; margin: 15px 0 20px 0; padding-bottom: 15px; font-size: 22px; font-family:'futura-pt' !important;">Powerful education.</p>
                    </div>

                    <h3 class="kmhead">How can we rethink power tools for education?</h3>
                    <div class="row">
                        <div class="col-md-7">
                            <p class="km">70% of students drop DT before GCSE, missing out on any education in power tools. These students will likely lack the confidence and expertise to use them ever in life. </p>


                            <!--  <p class="kmhead" style="font-size: 16px; text-align: center;"><span style="font-size: 48px">“</span> I wish I could teach all my students to use power tools it’s <span style="font-weight: 500"> such an important life skill." </span> &nbsp;&nbsp;Mark - DT Teacher</p>-->

                            <blockquote class="kmhead" style="font-size: 16px; text-align: center;"><span style="font-weight: 300 !important; line-height: 1.7">I wish I could teach all my students to use power tools, it's such an <span style="font-weight: 500"> important life skill. </span></span>
                                <p style="text-align: right; color: #A9A9B1; padding: 10px 20px 0 0">Mark - My DT teacher</p>
                            </blockquote>

                            <p class="km">What if we could introduce power tools earlier? We aim to extend the reach of education in DIY skills, boost engagement and combat falling DT participation. </p>
                        </div>
                        <div class="col-md-5">
                            <img style="padding-right: 10px" src="img/Kaufmann/gcse.png" />
                            <p class="kmcaption">The state of power tool education in the UK </p>
                        </div>
                    </div>



                    <h3 class="kmhead">Concept development </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/Kaufmann/development1.png" />
                        </div>
                        <div class="col-md-6">
                            <img src="img/Kaufmann/development2.png" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="km">Our first product redesigns the Jigsaw: there is significant scope for improvements in safety, control, intuitiveness and accessibility for students.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="km">Concept development process: ideation, sketching, 3D modelling, interviews and focus groups. Repeat iteratively. </p>
                        </div>
                    </div>
                </div>

                <div class="modal-body kaufmannorange">
                    <div class="row" style="padding-top: 0; margin-right: 0;">
                        <div class="col-md-5 kmrow">

                            <div align="center"><img src="img/Kaufmann/logowhite.png" style="max-height: 100px; width: auto; margin: 30px 0 0px;" /></div>
                            <h3 style="margin-top: 10px; text-align: center; font-size: 18px; font-family:'futura-pt' !important; font-weight: 100">12V BATTERY JIGSAW </h3>


                            <h4 style="margin-top: 0;">Smarter</h4>
                            <p>Impossible to operate incorrectly.</p>
                            <ul>
                                <li>Dual-switch technology ensures both hands are on the tool: zero risk of injury to free hand</li>
                                <li>Tool only activates when flat on the workpiece: deliberate misuse prevented by pressure sensor</li>

                            </ul>

                        </div>
                        <div class="col-md-7 kmo">
                            <img src="img/Kaufmann/safer2.png" />
                            <p class="orangecaption">Smart pressure plate (left) and 2-handed trigger</p>
                        </div>
                    </div>
                    <div class="row" style="margin-right: 0;">
                        <div class="col-md-5 kmrow">
                            <h4 style="margin-top: 20px;" class="kmhead bump">Safer</h4>

                            <p>Full control for teachers and technicians</p>
                            <ul>
                                <li>Tools must be enabled at the start of each lesson</li>
                                <li>Tools can be disabled at the press of a button</li>
                                <li>Redesigned high visibility fixed blade guard</li>
                            </ul>
                        </div>
                        <div class="col-md-7 kmo">
                            <img src="img/Kaufmann/safer3.png" />
                            <p class="orangecaption">Emergency stop button (left) and redesigned guard</p>
                        </div>
                    </div>
                    <div class="row" style="margin-right: 0">
                        <div class="col-md-5 kmrow">
                            <h4 class="kmhead">For all age groups</h4>
                            <p>Suitable for students from Year 7 to 13 and beyond</p>
                            <ul>
                                <li>Ergonomically designed for secondary school students</li>
                                <li>Unneccesary, overwhelming features removed</li>

                                <li>Switchable low power mode for young students</li>
                                <li>Smart safety settings can be disabled for experienced users</li>
                            </ul>
                        </div>
                        <div class="col-md-7 kmo">
                            <img src="img/Kaufmann/ages2.png" />
                            <p class="orangecaption">Ergonomically designed for young people</p>
                        </div>
                    </div>
                </div>


                <div class="modal-body">
                    <button class="accordion kmhead" style="margin-top: 50px;">Pretotyping</button>
                    <!--  <h3 class="kmhead">Pretotype</h3>-->
                    <div class="panel">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="kmhead">Branding</h4>
                                <p class="km">The Kaufmann Tools brand (namesake of the inventor of the jigsaw) was created as a response to the 'heavy duty' design language of competitor brands. Designed to be more accessible; the simple, modern brand resonated better with young people. </p>
                                <img src="img/Kaufmann/colours.png" style="padding-bottom: 30px;">
                                <h4 class="kmhead">Fake door testing</h4>
                                <p class="km">The fake door pretotyping technique was used to validate the product. A website was built to simulate a real brand with a 'shop now' button. The clickthrough rate was measured and shoppers were only informed of the university project after clicking. We received a good indication of interest and some great feedback from DT teachers and technicians.</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/Kaufmann/website.png">
                                <p class="kmcaption">The kaufmanntools.com website</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/Kaufmann/website2.png">
                                <p class="kmcaption">Fake door - button through to 'shop'</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/Kaufmann/fakedoor.png">
                                <p class="kmcaption">'Shop' page redirects to message about the project</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="kmhead">Build</h3>
                    <h4 class="kmhead">Donor product</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="km">A donor product was used for the mechanism. I measured and replicated all of the internal features of the casing, modifying the outside.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="km">All plastic components were designed using design-for-injection-molding practices. The custom casing was 3D printed. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/Kaufmann/build1.png" style="margin-top: 5px" />

                        </div>
                        <div class="col-md-6">
                            <img src="img/Kaufmann/build2.png" style="margin-top: 5px" />
                        </div>
                    </div>
                    <p class="kmcaption">Creation of prototype 1</p>


                    <h4 class="kmhead">Electronics</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="km">It was not possible to address the in-built microcontroller, smart functionality was prototyped by directly breaking the circuit with high current relays. I designed a circuit of from off-the-shelf parts: </p>
                            <ul class="km">
                                <li>RC garage door relays</li>
                                <li>30A relays</li>
                                <li>Buttons</li>
                                <li>12V radial blower</li>
                            </ul>



                            <div class="row">
                                <div class="col-xs-6">
                                    <img src="img/Kaufmann/electronics1.jpg">
                                </div>
                                <div class="col-xs-6">
                                    <img src="img/Kaufmann/electronics2.jpg">
                                </div>
                            </div>
                            <p class="kmcaption">Wiring for safety system and blower</p>
                        </div>
                        <div class="col-md-6">
                            <img src="img/Kaufmann/wiring.png">
                            <p class="kmcaption">Wiring diagram</p>
                        </div>
                    </div>

                    <h3 class="kmhead">Fully functional prototype</h3>

                    <div class="slickcarousel">
                        <div><img src="img/Kaufmann/WorkingPrototype2.png" class="slickslide">
                            <p class="orangecaption" style="margin-bottom: -32px"></p>
                        </div>
                        <div><img src="img/Kaufmann/WorkingPrototype3.png" class="slickslide">
                            <p class="orangecaption" style="margin-bottom: -32px"></p>
                        </div>
                        <div><img src="img/Kaufmann/WorkingPrototype1.png" class="slickslide">
                            <p class="orangecaption" style="margin-bottom: -32px"></p>
                        </div>
                        <div><img src="img/Kaufmann/WorkingPrototype4.png" class="slickslide">
                            <p class="orangecaption" style="margin-bottom: -32px"></p>
                        </div>
                    </div>
                </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Stackpack -->
    <div class="modal fade" id="Stackpack" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/Stackpack/newcover.png" class="img-responsive" />
                </div>

                <div class="modal-body">
                    <h2>Stackpack</h2>
                    <h5>How might we reuse cardboard packaging in a more sustainable future?<li>Second year group project</li>
                        <li>Runner up in DESIRE Sustainability award</li>
                    </h5>
                    <div class="modal-works"><span>Product Design</span><span>Interaction</span><span>System Design</span></div>
                </div>


                <div class="modal-body" style="background-color:#4186C4;">
                    <h2 style="font-family:'Changa One'; color:#ffffff; padding: 40px 0px 10px; font-size: 48px;">Stackpack</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <h3 style="color: #ffffff; margin-top: 0">What if we <span style="font-style: italic">reuse</span> (instead of recycle) cardboard? </h3>
                            <p style="color:#ffffff">Cardboard is complicit in a global culture of over-consumption and disposal. Over 4 million tonnes are disposed of annually in the UK; while widely recycled, each cycle wastes energy that could be saved through reuse.</p>
                            <p style="color:#ffffff">How do we tackle the perception that used cardboard is worthless? Stackpack provokes users to consider the sustainability of their cardboard consuming lifestyle.</p>
                            <p style="color:#ffffff; ">Stackpack presents a challenge to today's packaging habits:</p>
                            <ul style="margin-bottom: 70px; font-style: italic; color:#ffffff;"><li>Reuses without reprocessing</li>
                            <li>Protects without plastic pockets</li>
                            <li>Lighter and smaller than equivalent packaging</li></ul>
                        </div>

                        <div class="col-md-4">

                            <img src="img/Stackpack/stackpackfact.png" style="margin-bottom: 40px"/>


                        </div>
                    </div>


                </div>

                <div class="modal-body">
                    <h3>How it works:</h3>
                </div>

                <img src="img/Stackpack/stackpackmanufacture2.png" style="width: 100%;" />


                <div class="modal-body">
                    <h3>Design for reused material</h3>
                    <img src="img/Stackpack/stackpacksketches.png" />

                    <div class="row">
                        <div class="col-md-6">
                            <p>In <span style="font-style: italic">reusing</span> cardboard, it is not possible to define the material geometry. Instead, I realised that stacking layers provides a unique opportunity for innovation in geometry and interaction design, and allows use of material of all shapes and sizes. </p>
                        </div>
                        <div class="col-md-6">
                            <p>The crisp cut edges appear almost purpose-formed from the outside, however opening reveals a glimpse into the history of each layer. Stacking creates a unique unpacking interaction where  layers fall apart in the hand, ready for recycling. </p>
                        </div>
                    </div>

                    <h3>Iterative prototyping</h3>
                    <div class="slickcarousel">
                        <div><img src="img/Stackpack/STACKPACK_A5.jpg" class="slickslide"></div>
                        <div><img src="img/Stackpack/STACKPACK_A2.jpg" class="slickslide"></div>
                        <div><img src="img/Stackpack/STACKPACK_A3.jpg" class="slickslide"></div>
                        <div><img src="img/Stackpack/STACKPACK_A4.jpg" class="slickslide"></div>
                        <div><img src="img/Stackpack/STACKPACK_A1.jpg" class="slickslide"></div>
                    </div>

                    <h3>Stackpack // ecoffee cup&trade;</h3>
                    <div class="row" style="padding-bottom: 40px">
                        <div class="col-md-5">
                            <div align="center" ><img src="img/Stackpack/ecoffeelogo.png" style="max-width: 120px"/></div>
                            <p>Any great sustainable product needs great sustainable packaging; I redesigned packaging for the ecoffee cup&trade;.</p>

                            <p>Stackpack is designed for dematerialisation. Made from 100% paper and cardboard derivatives, Stackpack packaging can be thrown straight in the recycling, no separation required.</p>

                            <p>I shared my designs with Ecoffee Cup, receiving highly positive feedback from founder and CEO David McLagan.</p>
                        </div>
                        <div class="col-md-7">
                            <img src="img/Stackpack/stackpacksummary.png" />
                        </div>
                    </div>


                </div>
                <div class="modal-body" style="background-color:#4186C4; padding-top: 20px; padding-bottom: 40px">
                    <h3 style="color: #ffffff">Optimisation</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p style="color: #ffffff">The stacked cardboard manufacture technique allows for optimisation in terms of mass, volume, and material use.  </p>

                        </div>
                        <div class="col-md-6">
                            <p style="color: #ffffff"> As a direct comparison with Amazon and ecoffeecup.com, Stackpack's  delivery packaging is <span style="font-weight: 600">lighter, smaller, and uses fewer materials.</span></p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px; padding-bottom: 20px">
                        <div class="col-md-6">
                            <img src="img/Stackpack/graphicstop.png"  />
                        </div>
                        <div class="col-md-6">
                            <img src="img/Stackpack/graphicsbottom.png"  />
                        </div>
                    </div>


                </div>


                <div class="modal-body" style="padding-top: 50px">
                <img src="img/Stackpack/comparison.png" style="width: 100%" />
                <img src="img/Stackpack/stackpack4.jpg" style="width: 100%" />
                    <button class="accordion" style="margin-top: 30px;">Does it work?</button>
                    <div class="panel">
                        <div class="row">
                            <div class="col-md-6">
                                <p>To test Stackpack's durability I posted a glass to myself with Royal Mail. I opened the parcel in my final presentation: to my relief, it survived!</p>
                                <p>Check out the video: </p>
                            </div>
                        <div class="col-md-6">
                            <div class="youtubecontainer"><iframe src="https://www.youtube-nocookie.com/embed/JADe5p-LihM?rel=0&amp;showinfo=0;vq=hd108" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="youtubevideo"></iframe></div>
                        </div>
                            </div>
                    </div>



                    <div class="slickcarousel" style="margin-top: 30px">
                        <div><img src="img/Stackpack/STACKPACK_R1.jpg" class="slickslide"></div>
                        <div><img src="img/Stackpack/STACKPACK_R3.jpg" class="slickslide"></div>
                        <div><img src="img/Stackpack/STACKPACK_R4.jpg" class="slickslide"></div>
                        <div><img src="img/Stackpack/STACKPACK_R5.jpg" class="slickslide"></div>
                        <div><img src="img/Stackpack/STACKPACK_R6.jpg" class="slickslide"></div>

                        <div><img src="img/Stackpack/STACKPACK_R9.jpg" class="slickslide"></div>
                    </div>
                    <h3>Project outcome</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p> I was proud to be awarded the runner up prize in our end of module DESIRE Sustainability Award. </p>
                        </div>
                        <div class="col-md-6">
                            <p>While it may be a challenge to ever change user perceptions enough to reuse cardboard, I am confident that there is scope for more innovation in cardboard packaging geometry and design (including Stacking!).  </p>
                        </div>
                    </div>
                </div>



                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!--                        style="background-color:#4186C4; border-color: #fffffff; color: #ffffff"-->
                </div>
            </div>
        </div>
    </div>

    <!-- Gizmo -->
    <div class="modal fade" id="Gizmo" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/Gizmo/gizmo7.jpg" class="img-responsive" />
                </div>
                <div class="modal-body">
                    <h2>Gizmo</h2>
                    <h5>Can a robot inspire empathy? Will the general public collaborate to keep it alive?<li>Second year group project</li>
                        <li> My focus: tracking with computer vision</li>
                    </h5>

                    <div class="modal-works"><span>Mechatronics</span><span>Interaction</span><span>Algorithm</span></div>
                    <h3>An interactive experience for a wall of interactive experiences</h3>
                    <img src="img/Gizmo/gizmointro.png" />
                    <p class="caption">The grid of pixels (left) and our initial design ideas (right)</p>
                    <div class="row">
                        <div class="col-md-6">
                            <p><span style="font-weight: 600">The brief:</span> design a 30x30 interactive experience for a wall of interactive 'pixels'. <span style="font-weight: 600"><br>Our concept:</span> An interactive robot 'pet' with a personality, designed to encourage crowd collaboration.</p>
                        </div>
                        <div class="col-md-6">
                            <p>How can we inspire empathy through technology? <br> How can we create intuitive interaction?<br>How can we track the robot in space?</p>
                        </div>
                    </div>

                    <h3>Hardware build with Raspberry Pi </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p><span style="font-weight: 600"></span>The robot was built from the ground up around a Raspberry Pi. Fitting so many components in a small form-factor was a significant challenge. </p>
                        </div>
                        <div class="col-md-6">
                            <p>A 5-inch touch screen displayed eye animations. Expressions were animated with Adobe Character Animator and played as MP4 fies.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/Gizmo/gizmoexploded.png" />
                            <p class="caption">Hardware - exploded view</p>
                        </div>
                        <div class="col-md-6">
                            <img src="img/Gizmo/gizmo12.jpg">
                            <p class="caption">Gizmo with interaction objects</p>
                        </div>
                    </div>


                    <div class="slickcarousel">
                        <div><img src="img/Gizmo/gizmoa.jpg" class="slickslide"></div>
                        <div><img src="img/Gizmo/gizmob.jpg" class="slickslide"></div>
                        <div><img src="img/Gizmo/gizmoc.jpg" class="slickslide"></div>
                        <div><img src="img/Gizmo/gizmod.jpg" class="slickslide"></div>
                        <div><img src="img/Gizmo/gizmoe.jpg" class="slickslide"></div>
                        <div><img src="img/Gizmo/gizmof.jpg" class="slickslide"></div>
                    </div>

                    <h3>Tracking with OpenCV</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>We needed to be able to track Gizmo as he moved around the box, such that he could be in the correct place to interact with users. I built a computer vision tracking system using OpenCV, written in Python. </p>
                        </div>
                        <div class="col-md-6">
                            <p>Colourful dots were chosen for their ease of differentiation from the background and each other. Image recognition and tracking was achieved in 4 steps, shown below. </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/Gizmo/opencv2.png" style="padding: 10px 0" />
                        </div>
                        <div class="col-md-6">
                            <img src="img/Gizmo/opencv1.png" style="padding: 10px 0" />
                        </div>
                    </div>

                    <h3>Designing an interaction system</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>We considered many ways for users to interact with the robot, but decided to use placement of objects tracked by computer vision. I built the computer vision system to track many objects simultaneously. </p>
                        </div>
                        <div class="col-md-6">
                            <p>Moving objects in and out of the box made for intuitive interaction with Gizmo. An algorithm was written for his mood over time, where Gizmo's reaction encourages users to collaborate to keep him alive. </p>
                        </div>
                    </div>

                </div>
                <div class="modal-body" style="background-color: #f2f2f2; margin-bottom: 40px">
                    <h3 style="padding-top: 30px; color: #00AEEF;">Meet: Gizmo</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Feeding Gizmo</h4>
                            <img src="img/Gizmo/feed.png" style="margin: 13px 0">
                            <p style="font-style: italic">Much like any other pet, Gizmo needs to eat to stay alive. Also like any other pet, he gets angry when he isn’t fed. While hungry Gizmo will make loud and annoying noises until his food bowl is placed in front of him. He won't want to play, dance or sleep until he has been fed.</p>
                        </div>
                        <div class="col-md-6">
                            <h4>Playing with Gizmo</h4>
                            <img src="img/Gizmo/Play.png">
                            <p style="font-style: italic">Living alone in a box is a somewhat melancholy existence; when Gizmo isn't kept busy he becomes bored and makes whimpering sounds. Gizmo can be entertained by giving him his ball (which he will hit around the box) or by giving him his boombox for a dance.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Putting Gizmo to bed</h4>
                            <img src="img/Gizmo/bed.png" style="margin: -10px 0 10px 0">
                            <p style="font-style: italic;">With all the eating, playing and dancing Gizmo quickly becomes tired and in need of a nap. When he’s tired Gizmo will close his eyes, waiting for you to put in his comfy bed. While too tired Gizmo won't do any other activities.</p>
                        </div>
                        <div class="col-md-6">
                            <h4>Resurrecting Gizmo</h4>
                            <img src="img/Gizmo/Dead.png" style="margin: 10px 0 15px 0">
                            <p style="font-style: italic; margin-bottom: 40px">If you are a truly terrible owner and Gizmo is left unattended for a long time, like any other pet he will die. However, unlike other pets, Gizmo can be resurrected. Give Gizmo the 3 things he craved before he died and he will be resurrected, but he won't be happy about it.</p>
                        </div>
                    </div>

                </div>
                <div class="modal-body">
                    <h3>Project outcome</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Gizmo was demonstrated at the end-of-year showcase, and was a great success. </p>
                        </div>
                        <div class="col-md-6">
                            <p style=" margin-bottom: 40px">Many people came together to interact with him like a real pet, collaborating to keep him alive. Check out the video: </p>
                        </div>
                    </div>
                    <!--                        <img  src="img/Gizmo/gizmo5mb.gif" style="width:400px; height:auto">-->
                    <!--                        style="max-width: 800px"-->

                    <div>
                        <div class="youtubecontainer"><iframe src="https://www.youtube-nocookie.com/embed/cX8SoPqyv6w?rel=0&amp;showinfo=0;vq=hd108" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="youtubevideo"></iframe>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- PiCam -->
    <div class="modal fade" id="PiCam" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/PiCam/picamheader.png" class="img-responsive" />
                </div>
                <div class="modal-body">

                    <h2>PiCam</h2>
                    <h5>Making the 35mm experience digital with Raspberry Pi<li>Personal project</li>
                        <li>Raspberry Pi / Python / Electronics</li>
                    </h5>



                    <div class="modal-works"><span>Product Design</span><span>Interaction</span></div>
                    <h3>Can I recreate 35mm experience with DIY electronics?</h3>

                    <div class="row">
                        <div class="col-md-6">
                            <p>Analog photography is back in fashion, but developing photos still requires effort and expense. What if you could enjoy the 35mm experience with a digital camera? </p>
                            <p>I recreated the disconnected interaction of an analogue camera but maintained the convenience of digital photo sharing. </p>
                            <ul style="font-weight: 500">
                                <li>Stop experiencing life through a screen! </li>
                                <li>Stop retaking photos to find the perfect one</li>
                                <li>Enjoy looking back at memories when the 'film' is downloaded</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="img/PiCam/sketches.png" />
                        </div>
                    </div>

                    <h3>Component specification</h3>
                    <div class="row">
                        <div class="col-md-9">
                            <img src="img/PiCam/picamfritzing.png" />
                            <p class="caption">Wiring diagram</p>
                        </div>
                        <div class="col-md-3">
                            <p>Built on the Raspberry Pi Platform with DIY electronics.</p>
                            <ul>
                                <li>Pi Zero W </li>
                                <li>LISPAROI 5V Flash Ring </li>
                                <li>Pi Camera 2.1</li>
                                <li>Wiring and soldering</li>
                            </ul>
                        </div>
                    </div>

                    <h3>Design Iteration</h3>
                    <div class="slickcarousel">
                        <div><img src="img/PiCam/PiCamR1.jpg" class="slickslide"></div>
                        <div><img src="img/PiCam/PiCamR2.jpg" class="slickslide"></div>
                        <div><img src="img/PiCam/PiCamR3.jpg" class="slickslide"></div>
                        <div><img src="img/PiCam/PiCamR4.jpg" class="slickslide"></div>
                    </div>



                    <h3>User interface</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>With only 2 buttons (flash and shutter), designing for natural interaction was a challenge. An LED button intuitively communicates status and flash mode. </p>
                        </div>
                        <div class="col-md-6">
                            <p>Written in Python, the photos save to the SD card. Future features include a small screen and a 36 photo limit! </p>
                        </div>
                    </div>

                    <button class="accordion">Python</button>
                    <div class="panel">
                        <pre class="prettyprint pretty">
import RPi.GPIO as GPIO
import time
import os
import datetime

print('Raspberry Pi Cardboard Camera ')
print('Copyright Ben Cobley 2018')

GPIO.setmode(GPIO.BCM)

GPIO.setup(15, GPIO.IN, pull_up_down=GPIO.PUD_UP)  # Button 1
GPIO.setup(24, GPIO.IN, pull_up_down=GPIO.PUD_UP)  # Button 2
GPIO.setup(25, GPIO.OUT)  # Flash LED
GPIO.output(25, GPIO.LOW)
GPIO.setup(18, GPIO.OUT)  # Button LED
GPIO.output(18, GPIO.HIGH)

flash_on = True
flash_button_count = 0
flash_prev_pressed = False
shutter_prev_pressed = False
camera_pause = "500"

def button_blink(n, flash_delay):
    for repeats in range(n):
        GPIO.output(18, GPIO.LOW)
        time.sleep(flash_delay)
        GPIO.output(18, GPIO.HIGH)
        time.sleep(flash_delay)

def button_LED_on():
    GPIO.output(18, GPIO.HIGH)

def button_LED_off():
    GPIO.output(18, GPIO.LOW)

def switch_flash_on():
    if flash_on:
        GPIO.output(25, GPIO.HIGH)

def switch_flash_off():
    GPIO.output(25, GPIO.LOW)

def get_filename():
    now = datetime.datetime.now()
    time_string = now.strftime("%m%d_%H%M%S")
    file_name = "CC_" + time_string + ".jpg"
    return file_name

button_blink(2, 0.25)

try:
    while True:
        shutter_button = GPIO.input(15)
        flash_button = GPIO.input(24)
        button_LED_on()

        if shutter_button == False:
            if shutter_prev_pressed == False:
                button_LED_off()
                switch_flash_on()
                image_name = get_filename()
                print(image_name)
                command = "sudo raspistill -o " + image_name + " -q 100 -t " + camera_pause
                os.system(command)
                time.sleep(1)
                switch_flash_off()
                button_LED_on()
            shutter_prev_pressed = True

        elif flash_button == False:
            if flash_prev_pressed == True and flash_button_count >=8:
                button_LED_off()
                time.sleep(0.25)
                button_LED_on()
                GPIO.output(25, GPIO.LOW)
                GPIO.output(18, GPIO.LOW)
                GPIO.cleanup()
                os.system("sudo shutdown -h now")
                button_blink(60, 0.5)
            else:
                flash_prev_pressed = True
            flash_button_count += 1
            time.sleep(0.2)

        elif flash_prev_pressed == True: #and flash button not pressed by definition
            if flash_on:
                flash_on = False
                button_blink(1, 0.5)
            else:
                flash_on = True
                button_blink(2, 0.25)
            flash_button_count = 0
            flash_prev_pressed = False

        else:
            flash_button_count = 0
            flash_prev_pressed = False
            shutter_prev_pressed = False
        time.sleep(0.2)

except KeyboardInterrupt:
    GPIO.output(25, GPIO.LOW)
    GPIO.output(18, GPIO.LOW)
    GPIO.cleanup()
    quit()</pre>
                    </div>

                    <img src=img/PiCam/back.png style="margin-top: 50px" />
                    <p class="greencaption">Attention: stop experiencing life through a screen!</p>

                </div>

                <div class="modal-footer" style="margin-top: 50px">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mars -->
    <div class="modal fade" id="JumpBot" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/Mars/mars.jpg" class="img-responsive" />
                </div>
                <div class="modal-body">
                    <h2 style="margin-top: 0">Jumpbot</h2>
                    <h5>Mechanical design for a jumping robot for Mars Exploration<li>Second year individual project</li>
                        <li>CAD proficiency / Technical drawing</li>
                    </h5>
                    <div class="modal-works"><span>Mechatronics</span><span>CAD</span><span>Mechanical</span></div>
                    <h3>Swarming explorer bots for Mars</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Curiosity has covered less than 20 km in 6 years on Mars. A swarm of lightweight robots could:</p>
                            <ul>
                                <li>Cover more ground</li>
                                <li>Reach a greater diversity of areas</li>
                                <li>Spread the cost of failure</li>
                                <li>Jump (instead of drive) to navigate terrain </li>
                            </ul>
                            <p style="font-style: italic">How would the mechanism work?</p>
                            <p>This project explores the calculation, specification and mechanism design for a prototype, eventually destined for Mars.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="img/Mars/mars.png" />
                        </div>
                    </div>

                    <h3>How to store the energy (in a limited space)?</h3>

                    <div class="row">
                        <div class="col-md-6">
                            <p>A motor alone is not sufficient for rapid energy release required for a jump; an energy storage method was required. Torsion springs are a compact and manageable method of storing and rapidly releasing energy. </p>
                        </div>
                        <div class="col-md-6">
                            <p>My design coils the spring around the motor and gearhead; eliminating dead space inside the spring. Teeth move radially to unlock the driveshaft, releasing spring energy. </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="img/Mars/drawing1.jpg" />
                            <p class="caption">Tooth release actuation methods</p>
                        </div>
                        <div class="col-sm-5">
                            <img src="img/Mars/drawing2.jpg" />
                            <p class="caption">Initial assembly design sketches</p>
                        </div>
                        <div class="col-sm-3">
                            <img src="img/Mars/mechanism4.png"/>
                            <p class="caption">Compact mechanism design</p>
                        </div>
                    </div>

                    <h3>How to the release energy?</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>It is important to minimise the number of mechanisms (things that could go wrong). What if the release mechanism could be controlled by the drivetrain direction of rotation?</p><p>Design specification</p>
                            <ul>
                                <li>Forward motion: winds spring. Backward motion: releases energy.</li>
                                <li>Teeth must release torsion spring energy ‘instantaneously’</li>
                                <li>Jump must not require motion of gearbox and motor</li>
                                <li>Must be able to begin winding from any position</li>
                            </ul>
                        </div>
                            <div class="col-md-6">
                            <div class="youtubecontainer"><iframe src="https://www.youtube.com/embed/YSKzCAvkc6k?vq=hd1080&amp;modestbranding=1&amp;showinfo=0&amp;rel=0"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="youtubevideo"></iframe>
                            </div>
                        </div>
                    </div>

                    <!--                    <h4>Energy storage and release mechanism</h4>-->
                    <img src="img/Mars/mechanism.png" style="margin-bottom: 50px; margin-top: 30px" />
<!--                    <img src="img/Mars/innermechanism.png" />-->


                    <h3>Biomimetic design</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>The leg mechanism design was biomimetically informed by data from a grasshopper species (Pholidoptera). Leg position before takeoff data was modelled in SOLIDWORKS, generating a target curve for motion of the end point. </p>
                            <img src="img/Mars/grasshopper1.png" />
                            <p class="caption" style="margin-bottom: -10px">Position of a grasshopper leg before takeoff (<a href="https://www.researchgate.net/publication/267836773_Design_and_Analysis_of_Grasshopper-Like_Jumping_Leg_Mechanism_in_Biomimetic_Approach">Eroglu et al.</a>)</p>
                            <p>The linkage mechanism was iteratively designed to follow the plotted path. Unlike a grasshopper the legs sit horizontal while retracted, allowing for compact storage/transport. </p>

                        </div>
                        <div class="col-md-6">
                            <div style="max-width: 59%; float: left">
                                <img src="img/Mars/grasshopper3.png" />
                            </div>
                            <div style="max-width: 40%; float: left">
                                <img src="img/Mars/grasshopper4.png" />
                            </div>
                            <p class="caption" style="margin-bottom: 30px">Target curves generated from grasshopper data in SOLIDWORKS</p>
                        </div>
                    </div>


                    <!--Quad image-->
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <img src="img/Mars/oldleg1.png" />
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="img/Mars/oldleg2.png" />
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="img/Mars/side1.png" />
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <img src="img/Mars/side2.png" />
                        </div>
                    </div>
                    <p class="caption">Iteration of leg design, based on grasshopper data</p>

                    <button class="accordion">Gearing</button>
                    <div class="panel">
                    <div class="row">
                        <div class="col-md-5">
                            <p>The 360° deflection of the torsion spring necessitated the inclusion of a gearing-down mechanism, as the ‘femur’ link range of motion is only 58°. </p>
                        </div>
                        <div class="col-md-7">
                            <p>A geartrain with ratio 1:5.3 was designed. The gearing transfers the motion to the centreline of the robot, where it meets the opposing leg mechanism. All parts were standard off-the-shelf parts (or derivatives thereof) where possible. </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <img src="img/Mars/isogears.png" />
                            <p class="caption">Gearing down mechanism</p>
                        </div>
                        <div class="col-md-7">
                            <img src="img/Mars/gearsinfo.png" style="margin-bottom: 5px" />
                            <p class="caption">Specification of components</p>
                        </div>
                    </div>
                    </div>

                    <h3>JumpBot: Earth Test Prototype</h3>
                    <div class="slickcarousel">
                        <div><img src="img/Mars/isobottomR.png" class="slickslide">
                            <div class="slickcaption">
                                <p>Complete mechanism layout</p>
                            </div>
                        </div>
                        <div><img src="img/Mars/isotopR.png" class="slickslide">
                            <div class="slickcaption">
                                <p></p>
                            </div>
                        </div>

                        <div><img src="img/Mars/flipR.png" class="slickslide">
                            <div class="slickcaption">
                                <p>Self-righting mechanism - biomimetically inspired by beetle wings</p>
                            </div>
                        </div>
                        <div><img src="img/Mars/hingeR.png" class="slickslide">
                            <div class="slickcaption">
                                <p>60 degree hinge facilitates up-and-out motion of beetle wings</p>
                            </div>
                        </div>
                        <div><img src="img/Mars/wings2R.png" class="slickslide">
                            <div class="slickcaption">
                                <p>Micro-servos actuate the self-righting mechanism</p>
                            </div>
                        </div>

                        <div><img src="img/Mars/wingsR.png" class="slickslide">
                            <div class="slickcaption">
                                <p>Solar panels mounted on self-righting wings</p>
                            </div>
                        </div>
                        <div><img src="img/Mars/bendylegsideR.png" class="slickslide">
                            <div class="slickcaption">
                                <p>Flexible silicone foot allows timing/forces of each leg to be varied, enabling steered jumping.</p>
                            </div>
                        </div>
                        <div><img src="img/Mars/bendylegfrontR.png" class="slickslide">
                            <div class="slickcaption">
                                <p></p>
                            </div>
                        </div>

                    </div>

                    <h3>Better than Curiosity?</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Calculated solar recharge time = 47 seconds <br>
                                Calculated spring charge time = 5.5 seconds <br>
                                Assume jump and self-right time = 10 seconds <br>
                                Assume data recording time = 5 seconds <br>
                                Total time per jump ≈ 60 seconds <br>
                                Assume solar charge day length = 8 hours (factoring dust storms) <br>
                                Assume average efficiency of jumping in intended direction = 50%
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>Therefore, estimated average distance covered per day is 192 metres. Thus, the distance covered by 4500 bots weighing 200 grams, (the total mass equivalent of NASA’s Curiosity), would be over 300,000 km per year! <br> <br> <span style="font-weight: 600">Beat that NASA!</span> </p>
                        </div>
                    </div>

                    <h3>Drawings</h3>
                    <div class="slickcarousel">
                        <div><img src="img/Mars/TECHNICALDRAWINGS1.png" class="slickslide"></div>
                        <div><img src="img/Mars/TECHNICALDRAWINGS2.png" class="slickslide"></div>
                        <div><img src="img/Mars/TECHNICALDRAWINGS3.png" class="slickslide"></div>
                        <div><img src="img/Mars/TECHNICALDRAWINGS4.png" class="slickslide"></div>
                        <div><img src="img/Mars/TECHNICALDRAWINGS5.png" class="slickslide"></div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Brompton -->
    <div class="modal fade" id="Brompton" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/Brompton/bromptoncensor.jpg" class="img-responsive" />
                </div>
                <div class="modal-body">
                    <h2>Brompton Bicycle Internship Summer 2018</h2>
                    <h5>Developed and prototyped a new core Brompton product.<li>Joined live project team of 3 interns</li>
                        <li>From blank sheet of paper to 3 ridable, foldable, prototype bikes</li>
                    </h5>
                    <div class="modal-works"><span>Industry</span><span>CAD</span><span>Mechanical</span><span>Product Design</span><span>Interaction</span></div>
                    <h3>Design Intern</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>In Summer 2017 I interned at Brompton Bicycle. I joined a live project team challenged with developing a new Brompton product. We began with a blank sheet of paper and concluded with 3 fully ridable (and foldable) bikes in two months. The CEO was highly complementary about our work [currently confidential], a refined version will be announced soon.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Many of the parts were made by hand. Joining the parts on a highly specialised production line presented a challenge as it is not designed for variability. We designed custom brazing jigs for manufacture, fabricating the parts for 3 prototype bicycles. </p>
                        </div>
                    </div>
                    <img src="img/Brompton/brompton3.png" />
                    <p class="caption">Manufactured multiple rear frames for the prototype bicycles</p>
                    <div class="row">
                        <div class="col-md-6">
                            <p>I took ownership of the rear frame part of the project, responsible for design decisions and management of component manufacture. The greatest challenge was ensuring mechanisms worked with Brompton’s complicated fold technology. There were many failures in the design process, but I learnt to fail fast and take each lesson into the next iteration.</p>
                        </div>
                        <div class="col-md-6">
                            <p>The images show rapid prototyping used for dimensioning and testing fold mechanics. Custom jigs hold the new parts during brazing, allowing small scale mass-manufacture. The final version features steel tubing, brazed to laser cut steel dropouts of my design. Parts were painted and assembled into a full rear frame.</p>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- SkiTrip -->
    <div class="modal fade" id="SkiTrip" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/Skitrip/macbookpixel.jpg" class="img-responsive" />
                </div>
                <div class="modal-body">
                    <h2 style="margin-top: 0; padding-top: 50px;">Design Engineering Ski Trip</h2>
                    <h5>A new website for my annual departmental ski trip<li>For a stronger brand and organised information</li>
                        <li>Built in self-taught HTML</li>
                    </h5>
                    <div class="modal-works"><span>Web Design</span><span>Interaction</span></div>
                    <h3>Motivation</h3>

                    <div class="row">
                        <div class="col-md-7">
                            <p>In 2017 I found myself looking for people to go skiing with. The University Ski Trip was clashed with course deadlines, I founded the first annual Design Engineering Ski Trip. It was a great success. In aid of more effective marketing and better organised information I built a brand and website for the trip. Check it out: <br> <a href="https://www.deseng.ski" target="_blank" style="color: red; font-weight: 900; font-size: 18px; font-style: italic; line-height: 30px">www.deseng.ski</a></p>
                            <img src="img/Skitrip/main2.png" style="border:2px solid #f0f0f0; border-radius: 2px">
                        </div>
                        <div class="col-md-5">
                            <img src="img/Skitrip/poster.jpg">
                        </div>
                    </div>
                    <h3>Website</h3>

                    <div class="row">
                        <div class="col-md-12">
                            <p style="padding-bottom: 0">Coded in HTML (self taught), pulling together bootstrap features where required. </p>
                            <pre class="prettyprint pretty">&lt;section class="about-area"&gt;
    &lt;div class="container" id="ABOUT"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col-md-6"&gt;
                &lt;h1&gt;DesEng go skiing&lt;/h1&gt;
                &lt;h2&gt;23rd - 30th March 2019&lt;/h2&gt;
                &lt;p&gt;This year, Design Engineering returns to France for the second annual ski trip...
</pre>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/Skitrip/flights.png" style="border:2px solid #f0f0f0 ; border-radius: 5px" />
                            <p class="caption">Flights suggestions and tips on how to get the best prices</p>
                        </div>
                        <div class="col-md-6">
                            <img src="img/Skitrip/faqs.png" style="border:2px solid #f0f0f0; border-radius: 5px" />
                            <p class="caption">Packed with information, including a full packing list!</p>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Tetris -->
    <div class="modal fade" id="Tetris" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/Tetris/TETRIS2.png" class="img-responsive" />
                </div>
                <div class="modal-body">
                    <h2>Tetromino Algorithm Challenge</h2>
                    <h5>Completing a TETRIS pattern as fast and accurately as possible.
                        <li>Built in Python</li>
                        <li>3rd place in algorithm competition</li>
                    </h5>
                    <div class="modal-works"><span>Algorithm</span></div>
                    <h3>The Tetriling Puzzle</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p><span style="font-weight: 600">The challenge: </span>find the most accurate solution to a target pattern of tetrominoes in the fastest possible time. A balance between speed and accuracy must be found; the beauty of the puzzle lies in the unlimited variety of algorithmic methods and the lack of a perfect solution.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="img/Tetris/tetris3.png" />
                            <p class="caption">A 10 x 10 target puzzle and 90% accurate solution</p>
                        </div>
                    </div>

                    <h3>A greedy algorithm</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>The algorithm passes over the target, testing solutions at every position. It places the <span style="font-style: italic">first</span> found solution each time; it is a greedy algorithm, making short term decisions without considering long term consequences. TETRIS piece components (relative to start position) are stored in a tree (below). </p>
                        </div>
                        <div class="col-md-6">
                            <p>A node’s children denote the possible steps towards finding a complete piece. The hierarchy of children (left to right) puts most common relative positions first, maximising eliminated pieces each time. Greedy algorithms and storage in tree form are both highly efficient.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/Tetris/tree.png" />
                            <p class="caption">Tree of relative positions of TETRIS components (and their shape reference number) </p>
                        </div>
                        <div class="col-md-6">
                            <pre class="prettyprint pretty" style="margin: 0">tree = \
    Node('Home', [
        Node((0, 0), [
            Node((1, 0), [
                Node((0, 1), [
                    Node((1, 1), [Node(1)]),
                    Node((2, 0), [Node(10)]),
                    Node((1, -1), [Node(16)]),
                    Node((0, 2), [Node(7)]),
                ]),
                Node((1, 1), [
                    Node((2, 0), [Node(12)]),
                    Node((1, -1), [Node(13)]),
                    Node((1, 2), [Node(11)]),
                    Node((2, 1), [Node(17)]),
                ]),
                # Etc...
</pre>
                            <p class="caption">The same tree, represented in Python</p>
                        </div>

                    </div>


                    <h3>Recursive traversal</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>The tree is traversed recursively. For each of a node’s children, the algorithm checks whether the position has available space. If successful, the function is called recursively for each of the <span style="font-style: italic">child’s children</span>, and so on. Reaching the bottom level of the tree denotes finding a successful path, and the corresponding shape number is passed out.</p>
                            <p>Recursion simplifies a large and complicated problem into a series of smaller problems with simple solutions (reduction). Recursive problem solving contributed to the code being highly succinct, at just 85 lines.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="img/Tetris/recursion.png" />
                            <p class="caption">Visualisation of recursive steps</p>
                        </div>
                    </div>

                    <button class="accordion">Summary of code</button>
                    <div class="panel">
                        <pre class="prettyprint pretty" style="margin: 0">def get_path(x, y, score_difference, target, solution, Node, path=None):
        if len(path) &lt; 5:  # for incomplete paths
            for child in Node.children:
                try:
                    j = child.data[0]  # set values of relative positions of blocks in shape
                    i = child.data[1]
                    if solution[y + j][x + i] == (0, 0):  # if space in solution matrix
                        if target[y + j][x + i] == 1:  # record a score for each individual piece
                            score += 1
                        else:
                            score -= 1
                        try_path = get_path(x, y, score_difference, target, solution, child, path[:])
                            # attempt to move to next child recursively by setting node to child
                        if try_path:  # check for failure in next child
                            path = try_path  # if not fail: update path
                        else:
                            if target[y + j][x + i] == 1:  # if fail: return score to previous value
                                score -= 1
                            else:
                                score += 1
                        if found:  # found is set to true to pass path out of recursion
                            return path
        else: # once path is complete
            found = True  # if path length &gt; 5 piece must be found
            return shape_id # return shape id out of function. Success!
</pre>
                        <p class="caption">For your interest! (Note: this has been simplified and will not run) </p>
                    </div>
                    <h3>Analysing accuracy</h3>
                    <div class="row">
                        <div class="col-md-7">
                            <p>The mean accuracy of the algorithm was consistently above 88%, and over 94% for higher densities. The (greedy) algorithm is unable to achieve higher accuracy, as the <span style="font-style: italic">first</span> ‘successful' piece is placed, without consideration for better options.</p>
                            <p>Accuracy increases for higher densities, as there are more options for accounting for the effects of bad choices.</p>
                            <h4>Plotting mean accuracy against target density</h4>
                            <img src="img/Tetris/graph22.png" />
                            <p class="caption">Mean accuracy vs target density (sample size 20)</p>
                        </div>
                        <!--                            <div class="col-md-1"></div>-->
                        <div class="col-md-5">
                            <img src="img/Tetris/accuracy1.png" />
                            <p class="caption" style="margin-bottom: 0">Example at 0.5 density</p>
                            <img src="img/Tetris/accuracy2.png" />
                            <p class="caption">Example at 0.8 density</p>
                        </div>
                    </div>

                    <h3>Analysing speed</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>The algorithm is fast. Running time of course increases with the size of the target matrix. Taking input size n as the target side length, the time complexity of the tree traversal is Θ(log(n)): low complexity, ideal for maximising speed.</p>
                        </div>
                        <div class="col-md-6">
                            <p>This function is called for every square in the target matrix: area=n&sup2;. It is known that a time complexity of Θ(n&sup2;) takes precedence over that of Θ(log(n)) so the complexity is therefore Θ(n&sup2;). Graphical analysis confirmed this hypothesis.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Plotting average running time against side length n</h4>
                            <img src="img/Tetris/graph12.png" />
                            <p class="caption">Mean running time against vs side length n (sample size 20)</p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <img src="img/Tetris/25x25.png" />
                            <p class="caption" style="margin-bottom: 0">Example of a 25 x 25 puzzle</p>
                            <img src="img/Tetris/100x100.png" />
                            <p class="caption">Example of a 100 x 100 puzzle</p>
                        </div>
                    </div>

                    <h3>Competition</h3>
                    <div class="row">
                        <div class="col-md-7">
                            <p>The module concluded in a competition, where students were ranked on a function of their speed and accuracy for a variety of test puzzles. I was proud to place 3rd out of 55, including beating all but 1 of the Graduate Teaching Assistants (the supposed experts!) </p>
                        </div>
                        <div class="col-md-5">
                            <img src="img/Tetris/rankings.png" />
                            <p class="caption">Year rankings (score based on function of speed and accuracy)</p>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Rendering -->
    <div class="modal fade" id="Rendering" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/Rendering/Rendering8.jpg" class="img-responsive" />
                </div>
                <div class="modal-body">
                    <h2>Illustrative cad and rendering</h2>
                    <h5>Illustrations for Mechanical Design text book<li>Modelled in SOLIDWORKS </li>
                        <li>Rendered in Keyshot 7.</li>
                    </h5>
                    <div class="modal-works"><span>CAD</span></div>
                    <h3>Peter Childs: Mechanical Design Third Edition</h3>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="row" style>
                                <div class="col-md-6">
                                    <img src="img/Rendering/1stedition.jpg" style="max-height:242px; width: auto" />
                                </div>
                                <div class="col-md-6">
                                    <img src="img/Rendering/2ndedition.jpg" style="max-height:242px; width: auto;" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <p>I was approached by Peter Childs to undertake some paid work for the illustration of the latest edition of his textbook, Mechanical Design. I generated photo-realistic images of parts and mechanisms, models were built in SOLIDWORKS and rendered with Keyshot 7. The edition is due to be released shortly. </p>
                        </div>
                    </div>
                    <!--                    <h4 style="margin-top: 40px">A selection of my work in the book </h4>-->
                    <div class="slickcarousel" style="margin-bottom: 60px; margin-top: 30px">
                        <!--                            <div><img  src="img/Rendering/RenderingR1.jpg" class="slickslide"></div>-->
                        <div><img src="img/Rendering/RenderingR2.jpg" class="slickslide"></div>
                        <div><img src="img/Rendering/RenderingR4.jpg" class="slickslide"></div>
                        <!--                            <div><img  src="img/Rendering/RenderingR11.jpg" class="slickslide"></div>-->
                        <!--                            <div><img  src="img/Rendering/RenderingR6.jpg" class="slickslide"></div>-->
                        <div><img src="img/Rendering/RenderingR7.jpg" class="slickslide"></div>
                        <div><img src="img/Rendering/RenderingR10.jpg" class="slickslide"></div>
                        <div><img src="img/Rendering/RenderingR8.jpg" class="slickslide"></div>
                        <div><img src="img/Rendering/RenderingR9.jpg" class="slickslide"></div>
                        <!--                            <div><img  src="img/Rendering/RenderingR5.jpg" class="slickslide"></div>-->
                        <div><img src="img/Rendering/RenderingR3.jpg" class="slickslide"></div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Electronics -->
    <div class="modal fade" id="Electronics" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/Electronics/electronics.jpg" class="img-responsive" />
                </div>
                <div class="modal-body">
                    <h2>Electronics</h2>
                    <h5>Project work in Electronics for Design Engineering module<li>Second year group project: Segway control with PID</li>
                        <li>First year group project: RoboChicken</li>
                    </h5>
                    <div class="modal-works"><span>Mechatronics</span><span>Algorithm</span></div>

                    <h3>Dancing Segway robot</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p><span style="font-weight: 600">The challenge:</span> build a PID controller to balance a segway. Then make it autonomously dance to music. Written in Python.</p>
                            <p>My team was the first in the class to get the robot balancing. We designed a signal processor to detect music beats and synchronize dance moves to the music. </p>
                            <p>The project developed my skills in PID control, feedback systems, noise detection and wireless communication. Check out the project code at my GitHub <a href="https://github.com/bencobley/elecprojectmarch2k18">here.</a></p>


                        </div>
                        <div class="col-md-6">
                            <div class="youtubecontainer"><iframe src="https://www.youtube.com/embed/iRIEm58ono0?vq=hd1080&amp;modestbranding=1&amp;showinfo=0&amp;rel=0"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="youtubevideo"></iframe>
                            </div>
                        </div>
                    </div>
                    <h3>RoboChicken</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p><span style="font-weight: 600">The challenge: </span>build a robot for a penalty shoot-out competition and hide and seek challenge. Include bluetooth control and signal detection functionality (magnetic and ultrasonic). Marks for speed of challenge completion, quality of build, and aesthetics.
                            </p><p>
                            The task introduced us to circuit design, electronics component, and Python GPIO control.
                            </p><p>
                            RoboChicken ‘swallows’ the ping pong balls and ‘lays eggs’ into the penalty shoot-out goal. It was by far the most popular robot, and was asked to act as goalkeeper after unfortunately being eliminated. </p>
                        </div>
                        <div class="col-md-6">
                            <div class="youtubecontainer"><iframe src="https://www.youtube-nocookie.com/embed/k398NXqdGmM?rel=0&amp;controls=0&amp;showinfo=0;vq=hd108" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="youtubevideo"></iframe>
                            </div>
                        </div>


                    </div>
                    <img src="img/Electronics/robochicken1.png" style="margin: 30px 0" />



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio -->
    <div class="modal fade" id="Portfolio" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-img">
                    <img src="img/Portfolio/portfolio.png" class="img-responsive" />
                </div>
                <div class="modal-body">
                    <h2>bencobley.com</h2>
                    <h5>This portfolio is built from scratch in self-taught HTML</h5>
                    <div class="modal-works"><span>Web Design</span><span>Interaction</span></div>
                    <h3>Web design</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <p>After finding my feet with HTML in building the Ski Trip website, I challenged myself to build a portfolio website instead of a PDF: after all, the future is digital. </p>
                        </div>
                        <div class="col-md-6">
                            <p>Written in HTML, CSS and JavaScript, bringing together multiple features from the Bootstrap 4 framework and other open source toolkits. Feedback? Contact me on LinkedIn or send me an email. </p>
                        </div>
                    </div>
                    <pre class="prettyprint pretty">&lt;title&gt;Ben Cobley | Design Engineer&lt;/title&gt;
&lt;meta name="description" content="Dyson | Brompton Bicycle | Imperial College Dyson School of Design Engineering"&gt;
</pre>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
			================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--<script src="js/SmoothScroll.js"></script>-->
    <script src="js/theme-scripts.js"></script>
    <script src="js/main.js"></script>
    <script src="js/backbutton-closebootstrap-modal.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>
</html>
