<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Power Grid Solutions</title>
    <meta name="description" content="Power Grid Solutions">
    <link rel="icon" href="img/supply.png">
    <!-- custom.css -->
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />

	<!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/chatbot.css">
</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(img/banner-bk.jpg);">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="img/supply.png" alt="logo">
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
                POWER GRID SOLUTIONS<br>
            	Private Limited
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
                Join us in our mission for a greener future with our tailored solar installations and off-grid solar inverters! . We specialize in providing power electronic solutions to meet your energy needs. Let's power the world sustainably together!
                <br>
            </p>
            <div data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">We are provideing <span class="typing" style="color: #d82653;"></span></div>
            <a href="https://web.facebook.com/profile.php?id=100087342554901" target="_blank" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-1 font-weight-bold" id="seemore">Explore More</a>
            <!-- <div class="d-flex mt-3">
                <a href="service/automation.html" target="_blank" class="hoveranc">Automation</a>
                <div class="mx-1 text-white">|</div>
                <a href="http://" target="_blank" class="hoveranc">Consilution</a>
                <div class="mx-1 text-white">|</div>
                <a href="http://" target="_blank" class="hoveranc">Installation</a>
                <div class="mx-1 text-white">|</div>
                <a href="http://" target="_blank" class="hoveranc">Renewable Energy</a>
                <div class="mx-1 text-white">|</div>
                <a href="http://" target="_blank" class="hoveranc">Computer Programming</a>
                <div class="mx-1 text-white">|</div>
                <a href="http://" target="_blank" class="hoveranc">Communication Service</a>
            </div> -->
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container" style="margin-top: 100px;">
        <h2 class="text-center font-weight-bold mt-5">Domestic On Grid Power Systems</h2>
        <p class="text-center font-weight-bold mb-5">We are providing wide range of power services</p>
        <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 h-70" src="img/automat.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Industrial Automation</h2>
                        <p>Industrial and Heavy Elctrical Automation Solutions for Industries</p>
                        <a href="https://web.facebook.com/profile.php?id=100087342554901" target="_blank" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-1 font-weight-bold" id="seemore">See More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/constl.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Technical Consultation and Instructions</h2>
                        <p>We are providing reliable technical consultations and instruction services for all power services</p>
                        <a href="https://web.facebook.com/profile.php?id=100087342554901" target="_blank" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-1 font-weight-bold" id="seemore">See More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/setup.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Electrical Installation Testing and Commissioning</h2>
                        <p>Electrical installation testing and commissioning for extra low voltage, low voltage, and medium voltage</p>
                        <a href="https://web.facebook.com/profile.php?id=100087342554901" target="_blank" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-1 font-weight-bold" id="seemore">See More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/install.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Communication Systems and Datacenters</h2>
                        <p>Communication Systems and Datacenters installation testing and commissioning</p>
                        <a href="https://web.facebook.com/profile.php?id=100087342554901" target="_blank" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-1 font-weight-bold" id="seemore">See More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/program.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Computer Programming and Software Development</h2>
                        <p>Power systems, Industrial automation systems, embeded software system development</p>
                        <a href="https://web.facebook.com/profile.php?id=100087342554901" target="_blank" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-1 font-weight-bold" id="seemore">See More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/renew.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Renewable Energy Solutions</h2>
                        <p>Renewable energy solutions (solar, wind, mini hydro, etc.)</p>
                        <a href="https://web.facebook.com/profile.php?id=100087342554901" target="_blank" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-1 font-weight-bold" id="seemore">See More</a>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
    </div>
    <!-- feature (skew background) -->
    <div class="container">
        <div class="row justify-content-between text-center text-md-left">
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 d-flex justify-content-center align-items-center" style="height: 100vh; display: flex;">
                <div>
                    <h2 class="font-weight-bold">Custom Power Solutions</h2>
                    <ul style="list-style-type: square; padding-left: 0; font-family: Arial, sans-serif; font-size: 16px; margin-left: 30px;" class="my-4">
                        <li class="text-dark">Custom power electronic designs for all needs.</li>
                        <li class="text-dark">Solve energy challenges with tailored circuits.</li>
                        <li class="text-dark">Specializing in off-grid inverter design and repair.</li>
                        <li class="text-dark">Empower your energy journey with custom power solutions! Say goodbye to energy woes and hello to tailored designs. Let's collaborate for the perfect solution.</li>
                    </ul>
                </div>
            </div>
            
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                <img src="img/green-energy.png" alt="Take a look inside" class="mx-auto d-block">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-between text-center text-md-left">
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                <img src="img/renewable-energy.png" alt="Take a look inside" class="mx-auto d-block">
            </div>

            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 d-flex justify-content-center align-items-center" style="height: 100vh; display: flex;">
                <div>
                    <h2 class="font-weight-bold">Safe and Reliable Services</h2>
                    <ul style="list-style-type: square; padding-left: 0; font-family: Arial, sans-serif; font-size: 16px; margin-left: 30px;" class="my-4">
                        <li class="text-dark">Trust us for reliable power solutions for your home or business.</li>
                        <li class="text-dark">Safety is our top priority</li>
                        <li class="text-dark">Transparent communication, always.</li>
                        <li class="text-dark">Empowering your energy journey.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- price table -->
    <div class="container py-2" id="price-table" style="margin-top: -100px;">
        <h2 class="text-center font-weight-bold d-block my-3 underline">Checkout Us</h2>
        <div class="row">
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center mt-5">
                <img src="img/pgs.png" alt="Free image">
                <a href="img/pgs.png" class="btn my-4 font-weight-bold atlas-cta cta-ghost">See more</a>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center mt-5 rounded">
                <img src="img/bma.png" alt="Free image">
                <a href="img/bma.png" class="btn my-4 font-weight-bold atlas-cta cta-green">See more</a>
            </div>
            <div data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center mt-5">
                <img src="img/eye.png" alt="Free image">
                <a href="img/eye.png" class="btn my-4 font-weight-bold atlas-cta cta-ghost">See more</a>
            </div>
        </div>
    </div>
    <h2 class="text-center font-weight-bold d-block py-2">Our Services</h2>
    <div class="container py-2" id="price-table">
        <div class="row mb-4">
            <div class="col-sm-4">
              <div class="card">
                <img class="card-img-top" src="img/predictive-models.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="font-weight-bold service">System Design</h4>
                    <p class="card-text">Electrical Power (HV, MV, LV), Renewable Energy, Lightning Protection Systems, Building Services (MEP)</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card">
                    <img class="card-img-top" src="img/planning.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="font-weight-bold service">Modeling & Simulations</h4>
                        <p class="card-text">Load Flow, Short Circuit, Protection Coordination, Arc Flash Analysis, Substation Earthing, Lighting.</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card">
                        <img class="card-img-top" src="img/energy-efficiency.png" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="font-weight-bold service">Design Review</h4>
                            <p class="card-text">Review Electrical Power & MEP designs to assure Standards compliance with BS, IEC, IEEE, ANZ, VDA, NFPA</p>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-4">
              <div class="card">
                <img class="card-img-top" src="img/value-chain.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="font-weight-bold service">Value Engineering</h4>
                    <p class="card-text">Value Engineering of Electrical Power, MEP designs to cut down project cost while complying with standards</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card">
                    <img class="card-img-top" src="img/commission.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="font-weight-bold service">Project Management</h4>
                        <p class="card-text">Streamlining Electrical Power & MEP project components with effective planning & resource management</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card">
                        <img class="card-img-top" src="img/schedule.png" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="font-weight-bold service">Periodical Testing</h4>
                            <p class="card-text">Periodic Inspections & Testing of Medium & Low Voltage Electrical Installations, Earthing & Lightning Protection Systems</p>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-4">
              <div class="card">
                <img class="card-img-top" src="img/troubleshoot.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="font-weight-bold service">Troubleshooting</h4>
                    <p class="card-text">Diagnosing Electrical System related issues with inspection by consultants, professional instruments & analysis</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card">
                    <img class="card-img-top" src="img/shield.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="font-weight-bold service">Electrical Safety Audits</h4>
                        <p class="card-text">MV & LV systems as per BS, IEC, IEEE & NFPA standards. Visual Inspection, Testing, Analysis with recommendations</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card">
                        <img class="card-img-top" src="img/service.png" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="font-weight-bold service">Servicing</h4>
                            <p class="card-text">LV, MV Electrical Panels, Switchgear & Transformers. Functional & Electrical Tests under consultant supervision</p>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-4">
              <div class="card">
                <img class="card-img-top" src="img/maintenance.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="font-weight-bold service">Maintenance Procedures</h4>
                    <p class="card-text">Preparing Electrical System Maintenance plans, procedures, documentation & Training</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card">
                    <img class="card-img-top" src="img/briefing.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="font-weight-bold service">Energy Audits</h4>
                        <p class="card-text">Electrical & Mechanical system energy auditing with Inspections, measuring & analysis to reduce energy cost & waste</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card">
                        <img class="card-img-top" src="img/stamp.png" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="font-weight-bold service">Certification</h4>
                            <p class="card-text">Chartered Engineer Certification of Electrical Systems complying with respective Standards</p>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-4">
              <div class="card">
                <img class="card-img-top" src="img/clipboard.png" alt="Card image cap">
                <div class="card-body">
                    <h4 class="font-weight-bold service">Standard Compilation</h4>
                    <p class="card-text">Electrical standarization, installation and provide standard on Electrical & Mechanical system energy</p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card">
                    <img class="card-img-top" src="img/artificial-intelligence.png" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="font-weight-bold service">Intelligence Solution</h4>
                        <p class="card-text">AI-based techniques to provide real-time control, monitoring and power management service</p>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card">
                        <img class="card-img-top" src="img/data-management.png" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="font-weight-bold service">Commissioning</h4>
                            <p class="card-text">Tests & Inspections of Electrical Systems (HV, MV, LV), Renewable Energy (Solar, Wind, Hydro etc)</p>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>

    <!-- feature (skew background) -->
    <div class="container">
        <div class="row justify-content-between text-center text-md-left">
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 p-3">
                <h2 class="font-weight-bold">Meet Us</h2>
                <p>Meet us for discussions and service reservations</p>
                <div class="d-flex p-2">
                    <a href="https://maps.app.goo.gl/bH7krnu4dDEM3iQV9" target="_blank" rel="noopener noreferrer"><img src="img/location.png" alt="Location" class="contact"></a>
                    <a href="https://web.facebook.com/profile.php?id=100087342554901" target="_blank" rel="noopener noreferrer"><img src="img/facebook.png" alt="Location" class="contact mx-3"></a>
                    <a href="mailto:hasithawd@powergrid.lk" rel="noopener noreferrer"><img src="img/email.png" alt="Location" class="contact"></a>
                    <a href="https://www.linkedin.com/company/90523164/admin/feed/posts/" target="_blank" rel="noopener noreferrer"><img src="img/linkedin.png" alt="Location" class="contact mx-3"></a>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7920910557677!2d79.89829207403011!3d6.795132919949147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae245416b7f34b5%3A0x7bd32721ab02560e!2sUniversity%20of%20Moratuwa!5e0!3m2!1sen!2slk!4v1718425082642!5m2!1sen!2slk" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- client -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client-1.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client-2.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client-3.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client-4.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client-5.png" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="img/client-6.png" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(img/contact-bk.jpg);">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="font-weight-bold">Contact Us</h2>
                    <p class="my-4">
                        Contact us for all your sustainable power solutions,
                        <br> We are provide environment friendly power solutions for you.
                    </p>
                    <ul class="list-unstyled">
                        <li>Email : hasithawd@powergrid.lk</li>
                        <li>Phone : +94 71 2437010</li>
                        <li>Address : Powergrid Solution, UBLC, <br>University of Moratuwa, Katubadda</li>
                        <li>Web: <a href="http://powergrid.lk/" style="color: #d82653;">Browse us</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form action="send_email.php" method="post">
                    	<div class="row">
	                        <div class="form-group col-md-6">
	                            <label for="name">Your Name</label>
	                            <input type="name" name="name" class="form-control" id="name">
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label for="Email">Your Email</label>
	                            <input type="email" name="email" class="form-control" id="email">
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="form-group col-md-12">
	                            <label for="name">Subject</label>
	                            <input type="text" name="subject" class="form-control" id="subject">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="message">Message</label>
	                        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
	                    </div>
                        <button type="submit" name="send" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div>
        <button class="chatbot-toggler">
            <span class="material-symbols-rounded">mode_comment</span>
            <span class="material-symbols-outlined">close</span>
          </button>
          <div class="chatbot">
            <header>
              <h2>Powergrid Help</h2>
              <span class="close-btn material-symbols-outlined">close</span>
            </header>
            <ul class="chatbox">
              <li class="chat incoming">
                <span class="material-symbols-outlined">smart_toy</span>
                <p>Hi 👋<br>How can I help you today?</p>
              </li>
            </ul>
            <div class="chat-input">
              <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
              <span id="send-btn" class="material-symbols-rounded">send</span>
            </div>
          </div>
    </div>
    <div>
        <a href="https://web.whatsapp.com/send?phone=94712437010&amp;text=" class="float" data-action="open" data-phone="94712437010" data-message="" role="button" tabindex="0" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
    </div>

	<!-- copyright -->
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    <a href="https://kaveeshbhashitha.github.io/" target="_blank" class="text-white">Developed by PowerGrid Solution (Pvt). Ltd.</a>
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="https://web.facebook.com/profile.php?id=100087342554901" target="_blank" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="mailto:hasitha@powergrid.lk" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-medium" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/90523164/admin/feed/posts/" target="_blank" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- AOS -->
    <script src="js/aos.js"></script>
    <script src="js/script.js"></script>
    <script src="js/chatbot.js"></script>
    <script>
      AOS.init({
      });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>