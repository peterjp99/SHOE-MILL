<!DOCTYPE HTML>
<html>
<head>
<title>LOTTO MEN'S RAPID MESH RUNNING SHOES-SHOEMiLL</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://localhost/CodeIgniter/assets/css/style4.css" rel="stylesheet" type="text/css" media="all" />
<link href="http://localhost/CodeIgniter/assets/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://localhost/CodeIgniter/assets/js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<!-- start menu -->     
<link href="http://localhost/CodeIgniter/assets/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="http://localhost/CodeIgniter/assets/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<script type="text/javascript" src="http://localhost/CodeIgniter/assets/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="http://localhost/CodeIgniter/assets/css/etalage.css">
					<script src="http://localhost/CodeIgniter/assets/js/jquery.etalage.min.js"></script>
				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 600,
								thumb_image_height: 500,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
<!-- top scrolling -->
<script type="text/javascript" src="http://localhost/CodeIgniter/assets/js/move-top.js"></script>
<script type="text/javascript" src="http://localhost/CodeIgniter/assets/js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>			
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PUMA-SHOEMiLL</title>
    <!-- Bootstrap core CSS -->
    <link href="http://localhost/CodeIgniter/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="http://localhost/CodeIgniter/assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="http://localhost/CodeIgniter/assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="http://localhost/CodeIgniter/assets/css/style1.css" rel="stylesheet" />		
</head>
<body>

 <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/CodeIgniter/index.php/Project_homectrl/index"><strong>SHOE</strong>MiLL</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


               
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

        <!-- /.row -->

        <div class="row" >
       
                
   		<!-- side menu -->
		        <div>
                <!-- start product_slider -->
                      <ul id="etalage">

							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="http://localhost/CodeIgniter/assets/images/t2.jpeg" />
									<img class="etalage_source_image" src="http://localhost/CodeIgniter/assets/images/t2.jpeg" />
								</a>
							</li>
							
							<li>
								<img class="etalage_thumb_image" src="http://localhost/CodeIgniter/assets/images/t3.jpg" />
								<img class="etalage_source_image" src="http://localhost/CodeIgniter/assets/images/t3.jpg" />
							</li>
							
							
							<li>
								<img class="etalage_thumb_image" src="http://localhost/CodeIgniter/assets/images/t12.jpeg" />
								<img class="etalage_source_image" src="http://localhost/CodeIgniter/assets/images/t12.jpeg" />
							</li>
						</ul>
					
					
			<!-- end product_slider -->
			</div>

			<div class="cont1 span_2_of_a1">
				<h3 class="m_3">LOTTO MEN'S RAPID MESH RUNNING SHOES</h3>
				
				<div class="price_single">
							  <span class="reducedfrom">3000 Rs</span>
							  <span class="actual">799 Rs</span><a href="#">click for offer</a>
							</div>
				<ul class="options">
					<h4 class="m_9">Select a Size</h4>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<div class="clear"></div>
				</ul>
				<div class="btn_form">
				   <form action="http://localhost/CodeIgniter/index.php/Project_cartctrl/index">
					 <input type="submit" value="buy now" >
				  </form>
				</div>
				<ul class="add-to-links">
    			   <li><img src="http://localhost/CodeIgniter/assets/images/wish.png" alt=""/><a href="#">Add to wishlist</a></li>
    			</ul>
    			<p class="m_desc">Material: Mesh
     	<br>
Lifestyle: Casual<br>
Closure type: Lace-Up<br>
Warranty type: Manufacturer<br>
Product warranty against manufacturing defects: 90 days<br>
Care Instructions: Allow your pair of shoes to air and de-odorize at a regular basis, this also helps them retain their natural shape; use shoe bags to prevent any stains or mildew; dust any dry dirt from the surface using a clean cloth, do not use polish or shiner</p>
    			
                <div class="social_single">	
				   <ul>	
					  <li class="fb"><a href="#"><span> </span></a></li>
					  <li class="tw"><a href="#"><span> </span></a></li>
					  <li class="g_plus"><a href="#"><span> </span></a></li>
					  <li class="rss"><a href="#"><span> </span></a></li>		
				   </ul>
			    </div>
			</div>
			<div class="clear"></div>
     
     
         <ul id="flexiselDemo3">
			<li><img src="http://localhost/CodeIgniter/assets/images/pic11.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="http://localhost/CodeIgniter/assets/images/pic10.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
			<li><img src="http://localhost/CodeIgniter/assets/images/pic9.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
			<li><img src="http://localhost/CodeIgniter/assets/images/pic8.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
			<li><img src="http://localhost/CodeIgniter/assets/images/pic7.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
		 </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="http://localhost/CodeIgniter/assets/js/jquery.flexisel.js"></script>
	 <div class="toogle" style="margin:00px 0px 0px 150px;">
     	<h3 class="m_3">Product Details</h3>
     	<p class="m_3">Item model number: AR3181<br>
ASIN: B00WG0ZKH0<br>
Date first available at Shoemill.in: 21 April 2015r</p>
     </div>					
	 <div class="toogle" style="margin:000px 0px 0px 150px;">
     	<h3 class="m_3">Product Reviews</h3>
     	<p class="m_3">Nice shoes....... the quality is awesome<br>
very nice, light weight and in fact looking better than what it looks in photo<br>
This pair of shoes will provide breathable comfort to your feet and will keep them sweat free.<br> Perfect your off-duty look for the day, the sole offers optimum surface traction.Trendy & fashionable which updates you with the latest trends.</p>
     </div>
     </div>
     <div class="clear"></div>
	 </div>
     </div>
	  
       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
        <div class="col-md-12 footer-box">


      
        
        <div class="row">
            <div class="col-md-4">
                <strong>Send a Quick Query </strong>
                <hr>
                <form>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <strong>Our Location</strong>
                <hr>
                <p>
                     682021,Govt. Model Engineering College<br />
                                    Thrikkakara, Kerala<br />
                    Call: 0484-xxxxxx<br>
                    Email: callus@shoemill.com<br>
                </p>

                2016  www.shoemill.com | All Right Reserved 
               
            </div>
            <div class="col-md-4 social-box">
                <strong>We are Social </strong>
                <hr>
                <a href="#"><i class="fa fa-facebook-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-twitter-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-google-plus-square fa-3x c"></i></a>
                <a href="#"><i class="fa fa-linkedin-square fa-3x "></i></a>
                <a href="#"><i class="fa fa-pinterest-square fa-3x "></i></a>
                
            </div>
        </div>
        <hr>
    </div>

</body>
</html>