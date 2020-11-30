<?php
require_once "upload_func.php";

if (isset($_POST['submit'])) {
  $file = uploadFile('file', true, true);
  if (is_array($file['error'])) {
    $message = '';
    foreach ($file['error'] as $msg) {
      $message .= '<p>'.$msg.'</p>';    
    }
  } else {
    header('location: confirmOrder.php');
 exit;
  }
  
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Writing Centre - Order Form</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
        <script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
		
		
		
		
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript" src="bootstrap-button.js"></script>

<style type="text/css">    
/*General styles*/


/*Features table------------------------------------------------------------*/
.features-table
{
  width: 530px;
  margin: 0 auto;
  border-collapse: separate;
  border-spacing: 0;
  text-shadow: 0 1px 0 #fff;
  color: #2a2a2a;
  background: #fafafa;  
  background-image: -moz-linear-gradient(top, #fff, #eaeaea, #fff); /* Firefox 3.6 */
  background-image: -webkit-gradient(linear,center bottom,center top,from(#fff),color-stop(0.5, #eaeaea),to(#fff)); 
}

.features-table td
{
  height: 50px;
  line-height: 50px;
  padding: 0 20px;
  border-bottom: 1px solid #cdcdcd;
  box-shadow: 0 1px 0 white;
  -moz-box-shadow: 0 1px 0 white;
  -webkit-box-shadow: 0 1px 0 white;
  white-space: nowrap;
  text-align: center;
}

/*Body*/
.features-table tbody td
{
  text-align: center;
  font: normal 12px Verdana, Arial, Helvetica;
  width: 150px;
}

.features-table tbody td:first-child
{
  width: auto;
  text-align: left;
}

.features-table td:nth-child(2), .features-table td:nth-child(3)
{
  background: #efefef;
  background: rgba(144,144,144,0.15);
  border-right: 1px solid white;
}


.features-table td:nth-child(4)
{
  background: #e7f3d4;  
  background: rgba(184,243,85,0.3);
}

/*Header*/
.features-table thead td
{
  font: bold 1.3em 'trebuchet MS', 'Lucida Sans', Arial;  
  -moz-border-radius-topright: 10px;
  -moz-border-radius-topleft: 10px; 
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-top: 1px solid #eaeaea; 
}

.features-table thead td:first-child
{
  border-top: none;
}

/*Footer*/
.features-table tfoot td
{
  font: bold 1.4em Georgia;  
  -moz-border-radius-bottomright: 10px;
  -moz-border-radius-bottomleft: 10px; 
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border-bottom: 1px solid #dadada;
}

.features-table tfoot td:first-child
{
  border-bottom: none;
}
    </style> 

<style type="text/css">
		#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 139px;
	top: 26px;
}
        #apDiv2 {
	position: absolute;
	width: 1060px;
	height: 67px;
	z-index: 1;
	left: 150px;
	top: 2px;
}
#apDiv3 {
	position: absolute;
	width: 295px;
	height: 85px;
	z-index: 1;
	left: 39px;
	top: 146px;
}
#apDiv4 {
	position: absolute;
	width: 105px;
	height: 24px;
	z-index: 2;
	left: 76px;
	top: 25px;
}
        body {
	background-color: #0071E1;
}
        #apDiv5 {
	position: absolute;
	width: 326px;
	height: 68px;
	z-index: 2;
	left: 150px;
	top: 4px;
}
        #mainbg #header #main #footer #apDiv5 #apDiv4 div p strong {
	font-size: 36px;
}
        #mainbg #header #main #content #left .left_bg .left_grad .categories ul li u {
	font-weight: bold;
}
        #apDiv6 {
	position: absolute;
	width: 200px;
	height: 21px;
	z-index: 3;
	left: 110px;
	top: 1162px;
}
        #apDiv7 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 20px;
	top: 31px;
}
        #mainbg #header #main #content #left .left_bg .left_grad .categories div div #apDiv6 div p strong {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 14px;
}
        #mainbg #header #main #content #left .left_bg .left_grad .categories ul li {
	font-weight: bold;
}
        #apDiv {
	position: absolute;
	width: 200px;
	height: 21px;
	z-index: 3;
	left: 947px;
	top: 1138px;
}
        #mainbg #header #main #content #apDiv div p strong {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 14px;
}
        #apDiv8 {
	position: absolute;
	width: 198px;
	height: 428px;
	z-index: 4;
	left: 1100px;
	top: 1263px;
	background-color: #CCCCCC;
}
        #apDiv9 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 28px;
	top: 20px;
}
        #mainbg #header #main #content div #apDiv8 div p strong {
	font-size: 9px;
}
        .a {
	color: #000066;
}
        #apDiv10 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 4;
}
        #apDiv11 {	position: absolute;
	width: 200px;
	height: 21px;
	z-index: 3;
	left: 110px;
	top: 1162px;
}
        #mainbg #header #main #footer #apDiv5 #apDiv4 div {
	font-size: 18px;
}
        .A {
	font-weight: bold;
}
        .b {
	font-size: 9px;
}
        </style>
		
</head>

<body>
        <div id="mainbg">
            <!-- header begins -->
            <div id="header">
                <div id="logo">
                  <div id="apDiv2"><img name="" src="images/header_back.png" width="1061" height="73" alt="" /></div>
                  <h1>&nbsp;</h1>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>
                </div>

                <div id="buttons">
                    <ul>
                    <li><a href="index.php">Home</a></li>
<li><a href="Research Services.php"> Research Papers Services</a></li>
<li><a href="Essay Services.php">Essay Services</a></li>
<li><a class="active" href="Our Prices.php">Our Prices</a> </li>
<li><a href="Order Form.php">Order Now</a></li>
<li><a href="Contact Us.php">Contact Us</a></li>
                          </ul>
                       
                        
                    
                </div>
				<div class="header_back">
				     <div id="wrapper">
							<div id="slider-wrapper">        
								<div id="slider">
									<img src="images/header1.jpg" alt="" />
									<img src="images/header2.jpg" alt=""/>
									<img src="images/header3.jpg" alt="" />
								</div>        
							</div>
					
					</div>                   
                
					
				  
				  <script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
				  <script type="text/javascript">
						$(window).load(function() {
							$('#slider').nivoSlider();
						});
						</script>
				</div>
                <!-- header ends -->
                <!-- content begins -->
                <div id="main">
                    <div id="content">
                      <p>&nbsp;</p>
                      <p>&nbsp;</p>
                      <div id="right">
                        <h2>Live Chat</h2>
                            <div class="right_bg">
                                <div class="right_grad">
                                  <div class="categories">
                                    <ul>
                                            <li>
                                              <div>
                                                <div align="center"> </div>
                                                <!--Begin Comm100 Live Chat Code-->
<div id="comm100-button-186"></div>
<script type="text/javascript">
    var Comm100API = Comm100API || new Object;
    Comm100API.chat_buttons = Comm100API.chat_buttons || [];
    var comm100_chatButton = new Object;
    comm100_chatButton.code_plan = 186;
    comm100_chatButton.div_id = 'comm100-button-186';
    Comm100API.chat_buttons.push(comm100_chatButton);
    Comm100API.site_id = 155184;
    Comm100API.main_code_plan = 186;

    var comm100_lc = document.createElement('script');
    comm100_lc.type = 'text/javascript';
    comm100_lc.async = true;
    comm100_lc.src = 'https://chatserver.comm100.com/livechat.ashx?siteId=' + Comm100API.site_id;
    var comm100_s = document.getElementsByTagName('script')[0];
    comm100_s.parentNode.insertBefore(comm100_lc, comm100_s);

    setTimeout(function() {
        if (!Comm100API.loaded) {
            var lc = document.createElement('script');
            lc.type = 'text/javascript';
            lc.async = true;
            lc.src = 'https://hostedmax.comm100.com/chatserver/livechat.ashx?siteId=' + Comm100API.site_id;
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(lc, s);
        }
    }, 5000)
</script>
<!--End Comm100 Live Chat Code-->      </script>
                                                </div>
                                              
                                            </li>
                                    </ul>
                                        <ul>
                                          <li><a href="Categories.php"><strong>Categories</strong></a></li>
                                          <li><a href="Site Map.php"><strong>Site Map</strong></a></li>
                                    </ul>
                                  </div>
                                </div>
                            </div>
                        <div class="right_bot"></div>

                            <h2>Free Features</h2>
                            <div class="right_bg">
                              <div class="right_grad">
                                    <div class="recent">
                                      <ul>
                                        <li>FREE unlimited amendments </li>
                                        <li>FREE bibliography page </li>
                                        <li>Free title page </li>
                                        <li>Free Plagiarism report </li>
                                        <li>Free Formatting </li>
                                        <li>Unique customer support </li>
                                        <li>Properly cited paper </li>
                                        <li>100% original papers </li>
                                        <li>275 words per page </li>
                                        <li>Any citation style </li>
                                        <li>Guaranteed Privacy </li>
                                        <li>24/7 customer support </li>
                                      </ul>
                                    </div>
                              </div>
                            </div>
                        <div class="right_bot">
                              <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <div>
                            <p>
                            <h2>Testimonials</h2>
                                </p>
                          </div>
                          <div>
                                <div class="right_bg">
                                  <div class="right_grad">
                                    <div class="recent"></div>
                                    <p><strong>&quot;I was so stranded and almost lost hope with my essay, but  thanks to the online services that i came across. Writing Centre really  helped me out by writing a very professional and quality essay that made me  emerge top in my academic results. writingcentre.us, you are simply the  best writing company i know of so far&quot; </strong><strong><br />
                                    <br />
                                    <strong>Robert F. New York</strong></strong><br />
                                      <strong>&lsquo;&rsquo;The writing was not as good as I expected and when I contacted the  support they actually promised they would fix it before my deadline. I was  really surprised that the paper was fixed and read alot better. Thanks for  solving my problems.&quot;</strong><strong><br />
                                      <br />
                                      <strong>Shirley California</strong></strong></p>
                                    <p><strong>25% Discount Code WC247</strong></p>
                                  </div>
                            </div>
                          </div>
                              <p>&nbsp;</p>
<p>&nbsp;</p>
                        </div>
                      </div>
                      <div id="left">
                        <h2>Our Prices</h2>
                            <div class="left_bg">
                                <div class="left_grad">
                                    <div class="categories">
                                  <img src="images/Offer.jpg" height="260" width="250" />
                                    </div>
                                </div>
                            </div>

                            <div class="left_bot"></div>

                            <h2>Why Choose Us?</h2>
                        <div class="left_bg">
                                <div class="left_grad">
                                  <ul>
                                    <li>100% custom original papers </li>
                                    <li>FREE bibliography page </li>
                                    <li>100% privacy guaranteed </li>
                                    <li>Free unlimited amendments upon request </li>
                                    <li>A wide range of services </li>
                                    <li>8 years experience in the custom writing services </li>
                                    <li>Satisfied and returning customers </li>
                                    <li>3-hour delivery available </li>
                                    <li>Professional team of experienced writers </li>
                                    <li>Direct contact with your writer </li>
                                  </ul>
                                  <p>&nbsp;</p>
                          </div>
                        </div>
                        <div class="left_bot">
                              <p>&nbsp;</p>
                              <p>&nbsp;</p>
                          <div class="left_bg">
                            <div class="left_grad">
                              <div class="categories">
                                <div>
                                      <div></div>
                                </div>
                                    <ul>
                                      <li>
                                        <div align="center"></div>
                                      </li>
                                    </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                            <div class="left_bg">
                              <div class="left_grad">
                                <div class="categories">
                                  <div>
                                    <div> <h2>Contact Us</h2></div>
                                  </div>
                                  <ul>
                                    <li>
                                      <div align="center"><u><img name="" src="images/Contact Us.jpg" width="170" height="183" alt="" /></u></div>
                                    </li>
                                    <li><strong>+ (1) 3152150749 </strong></li>
<li>
  <p><strong>EMAIL US - </strong><a href="mailto:info@writingcentre.us">info@writingcentre.us</a></p>
</li>
                                  </ul>
                                  <ul>
                                    <li></li>
                                  </ul>
                                </div>
                              </div>
                        </div>
                      </div>
                        <div id="center">
                            <h1><strong><b>ORDER FORM</b>.</strong></h1>
                            <div class="text">
 

 </script>
<script type="text/javascript">

    function  caltotal()
{	
    var total=0;
	var cpp_s=0;
	
	if(document.getElementById('spacing').value == "Single Spaced")
	{	
		cpp_s = 2;
	}
	else
	{	
		cpp_s = 1;
	}
	
	var tamount11=document.getElementById('no_of_pages').value;
	tamount11=tamount11+'nop';
	var tamount3=document.getElementById(tamount11).title;
	
	var tamount12=document.getElementById('urgency').value;
	tamount12=tamount12+'u';
	var tamount4=document.getElementById(tamount12).title;
	
	var tamount13=document.getElementById('aclevel').value;
	tamount13=tamount13+'al';
	var tamount5=document.getElementById(tamount13).title;
	
        document.getElementById('cpp').value=eval(tamount4) + eval(tamount5);
	var total = (eval(tamount4) + eval(tamount5)) * eval(tamount3)*cpp_s;
	
    document.getElementById('tamount').value = total.toFixed(2);
	 
}
</script>


<script type="text/javascript">
function altRows(id){
	if(document.getElementsByTagName){  
		
		var table = document.getElementById(id);  
		var rows = table.getElementsByTagName("tr"); 
		 
		for(i = 0; i < rows.length; i++){          
			if(i % 2 == 0){
				rows[i].className = "evenrowcolor";
			}else{
				rows[i].className = "oddrowcolor";
			}      
		}
	}
}

window.onload=function(){
	altRows('alternatecolor');
}
</script>
                            
   <table class="features-table" align="center">
				<thead>
					<tr>
						
						
						
					</tr>
				</thead>
				<tfoot>
					<tr>
						<td></td>
						<td></td>
						
					</tr>
				</tfoot>					
				<tbody>
				<tr> <td><form action="https://www.paypal.com/cgi-bin/webscr" method="POST" id="josForm" name="josForm">

<tr>
<td><strong>Secure Payment </strong></td>
</tr>
					<tr>
						<td>Total Amount</td>
						<td>$<?php echo $_SESSION['values']['tamount']?></td>
								
					</tr>
					<tr>
						<td>Discount</td>
						<td>$<?php echo $_SESSION['values']['discount']?></td>
								
					</tr>
					<tr>
						<td>Sub Total</td>
						<td>$<?php echo $_SESSION['values']['discounted_amt']?></td>
						
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"></td>
						
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="hidden" name="business" value="payments@academicresearchpapers.org"></td>
						
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="hidden" name="cmd" value="_xclick"> </td><td> <input type="hidden" name="item_name" value="<?php echo $_SESSION['values']['doc_type']?>"> </td>
						
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type='hidden' name="q"  value="1"></td><td><input type="hidden" name="amount" value="<?php echo $_SESSION['values']['discounted_amt']?>"> </td>
						
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="hidden" name="currency_code" value="USD"> </td> <td> <input type="hidden" name="undefined_quantity" value="1"> </td>
						
					</tr>
					</Form></td></tr>
				</tbody>
		</table>
    

    




                                <p>&nbsp;</p>
                              </form>
                              <p>&nbsp;</p>
                            </div>
                          <h1>&nbsp;</h1>
                      </div>
                        <div style="clear: both">
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                          <p>&nbsp;</p>
                      </div>
                  </div>
                    <!-- content ends -->
                    <!-- footer begins -->
                    <div id="footer">
                        <p>Copyright  2014. <a href="#">Privacy Policy</a></p>
                        <div id="apDiv5">
                          <p align="left"><img src="images/index_clip_image001_0000.png" alt="" width="76" height="67" />                          </p>
                          <div id="apDiv4">
                            <div>Writing Centre</div>
                          </div>
                        </div> 
	<p><!-- Do not remove -->Design by infoNation<!-- end -->
	  </p>
                  </div>
                    <!-- footer ends -->
                </div>
            </div>
        </div>
    </body>
</html>