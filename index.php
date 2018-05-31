<!DOCTYPE html>
<html>
<head>
	<title>New Perfect Engineering Works</title>
<?php include('header.php'); ?>



 


 <!--  
        If you want to change #bootstrap-touch-slider id then you have to change Carousel-indicators and Carousel-Control  #bootstrap-touch-slider slide as well
        Slide effect: slide, fade
        Text Align: slide_style_center, slide_style_left, slide_style_right
        Add Text Animation: https://daneden.github.io/animate.css/
        -->


        <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- First Slide -->
                <div class="item active">

                    <!-- Slide Background -->
                    <img src="img/machining-works.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_left">
                                <h1 data-animation="animated zoomInRight">Machining Works</h1>
                                <p data-animation="animated fadeInLeft">We do all kinds of Turning, Milling, Drilling, Engraving, Topping, Slotting works</p>
                                <a href="machining.php" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">Know More</a>
                                <a href="#" onclick="myfunction('contact');" class="btn btn-primary" data-animation="animated fadeInRight">Quick Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="img/railing-works.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated flipInX">Railing Works</h1>
                        <p data-animation="animated lightSpeedIn">Let it be your Balcony or Stair Case, We're there to give it a very modern look.</p>
                        <a href="railing.php" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">Check Samples</a>
                        <a href="#" onclick="myfunction('contact');"  class="btn btn-primary" data-animation="animated fadeInDown">Contact</a>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="img/fabrication-works.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">
                        <h1 data-animation="animated zoomInLeft">Fabrication Works</h1>
                        <p data-animation="animated fadeInRight">We undertake Kitchen Equipment Works.</p>
                        <a href="fabrication.php" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">Know More</a>
                        <a href="#" onclick="myfunction('contact');" class="btn btn-primary" data-animation="animated fadeInRight">Contact</a>
                    </div>
                </div>
                <!-- End of Slide -->


            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  bootstrap-touch-slider Slider -->

<!--Features section-->

<div class="container custpad">
	<div class="row">
	<center><h2>SERVICES</h2></center><br>
		<div class="col-md-4 font-sz-fix" id="icon">
    <a href="machining.php">
			<i class="fa fa-cogs fa-5x"></i>
      			<p>MACHINING WORKS</p>
      </a>


			<span class="features-para"><p>Turning, Milling, Drilling, Engraving, Topping, Slotting</p></span>
		</div>

      <div class="col-md-4 font-sz-fix">
      <a href="railing.php">
      <i class="fa fa-bars fa-5x"></i>
      <p>RAILING WORKS</p>
      </a>
      <span class="features-para"><p>SS Railing, SS Glass Railing works & Hardware</p></span>
    </div>

		<div class="col-md-4 font-sz-fix">
    <a href="fabrication.php">
			<i class="fa fa-industry fa-5x"></i>
			<p>FABRICATION WORKS</p>
      </a>
			<span class="features-para"><p>Kitchen Equipments, Steam Boilers, Pipe Line Insulation</p></span>
		</div>
			
	</div>
</div>
        
        
  <div class="container-fluid">
      <div class="row color-fix">
          <div class="col-md-6 about-contact" id="about">
              <h2>About New Perfect Engineering Works</h2>
              <p class="about-class">25+ years of experience in this industry, served many companies. We always try to give our best whether it is product quality or service or the customer experience, we always strive hard for excellence.</p>

              <center><button class="btn btn-primary btn-lg black-btn">Know More</button></center>

          </div>
          <div class="col-md-6 about-contact-form" id="contact">
              <h2>Request a Free Quote Now!</h2>
              
                  <form action="" method="POST" id="contactForm">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                         </div>
                         <div class="form-group">
                              <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>

                         <div class="form-group">
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Contact No." required>
                        </div> 

                         <div class="form-group">
                              <textarea class="form-control" name="message" id="message" placeholder="Message" required></textarea>
                        </div>
                            
                        <div class="form-group">
                              <label for="service">Select a Service:</label>
                                  <select class="form-control" id="service" placeholder="select a service" required>
                                    <option value="Machining">Machining</option>
                                    <option value="Fabrication">Fabrication</option>
                                    <option value="Railing">Railing</option>
                                    <option value="Other">Other</option>
                                  </select>
                        </div>      
                              <center><button class="btn btn-primary btn-lg blue-btn" type="submit" id="form-submit">Submit</button>
                              <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>
                              </center>
                  </form>
              
          </div>
      </div>
  </div>      
             
          





<?php include('footer.php'); ?>