<?php 
if(session_id() == ''){
session_start();
}
require_once 'functions.php';

require_once 'classes/dbInsert.php';
if (isset($_POST['submit'])){
    $order_id = $_POST["order"];
    $topic = $_POST["topic"];
    $doctype = $_POST["doctype"];
    $pagesnum = $_POST["npp"];
    $space = $_POST["spacing"];
    $academic = $_POST["alevel"];
    $urgency = $_POST["urgency"];
    $totalamt = $_POST["tamount"];
    $pagecost = $_POST["cpp"];
    $subj_area = $_POST["sub_cat"];
    $style = $_POST["style"];
    $reference = $_POST["ref"];
    $lang = $_POST["pref"];
    $descrip = $_POST["desc"];
    $writer = $_POST["writer"];
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $contact = $_POST["contact"];
    $discount = $_POST["discount"];
	$discAmt = $_POST['discamt'];
	$fil     = $_POST['upload'];
    
    $insert = new INSERT();
    if($insert->addOrder($order_id,$topic,$doctype,$pagesnum,$space,$academic,$urgency,$totalamt,$pagecost,$subj_area,$style,$reference,$lang,$descrip,$fil,$writer,$firstname,$lastname,$email,$country,$contact,$discount,$discAmt))
                {
        header("Location: secure.php");
                }
                    
}


if(isset($_POST['username'])){
 process();
 }

session_destroy();
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
table.altrowstable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #a9c6c9;
	border-collapse: collapse;
}
table.altrowstable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
table.altrowstable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #a9c6c9;
}
.oddrowcolor{
	background-color:#c3dde0;
}
.evenrowcolor{
	background-color:#6699FF;
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
                                                <div align="center"> <!--Begin Comm100 Live Chat Code-->
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
<!--End Comm100 Live Chat Code-->
                                                  </script>
                                                </div>
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
                                    <p><strong>&quot;I was so stranded and almost lost hope with my essay, but  thanks to the online services that i came across. Academic Research really  helped me out by writing a very professional and quality essay that made me  emerge top in my academic results. AcademicResearchPapers, you are simply the  best writing company i know of so far&quot; </strong><strong><br />
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
                                    <li>6-hour delivery available </li>
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
                            
 <table>
        <tr><td><form name="josForm" method="post" id="josForm" action="" onSubmit="return notEmpty()" enctype="multipart/form-data">
       <table class="altrowstable" id="alternatecolor">
       <td>Your Order id is:</td>
       
<td><input type="text" name="order" value="<?php echo $_SESSION['values']['orderID']?> " readonly="readonly" id="topic" size="50"/> </td></tr>
<tr><td>Topic</td><td><input type="text" name="topic" value="<?php echo $_SESSION['values']['txtTopic']?> " readonly="readonly" id="topic" size="50"/> </td></tr>
<tr><td>Document_type</td><td><input type="text" name="doctype" value="<?php echo $_SESSION['values']['doc_type']?> " readonly="readonly" id="doctype" size="50"/> </td></tr>
<tr><td>Number_of_pages</td><td><input type="text" name="npp" value="<?php echo $_SESSION['values']['no_of_pages']?> " readonly="readonly" id="npp" size="50"/> </td></tr>
<tr>
  <td>Spacing</td>
  <td><input type="text" name="spacing" value="<?php echo $_SESSION['values']['spacing']?> " readonly="readonly" id="spacing" size="50"/> </td></tr>
<tr>
  <td>Academic Level</td>
  <td><input type="text" name="alevel" value="<?php echo $_SESSION['values']['aalevel']?> " readonly="readonly" id="alevel" size="50"/> </td></tr>
<tr>
  <td>Urgency</td>
  <td><input type="text" name="urgency" value="<?php echo $_SESSION['values']['uurgency']?> " readonly="readonly" id="urgency" size="50"/> </td></tr>
<tr>
  <td>Total Amount</td>
  <td><input type="text" name="tamount" value="<?php echo $_SESSION['values']['tamount']?> " readonly="readonly" id="tamount" size="50"/> </td></tr>
<tr>
  <td>Cost per page</td>
  <td><input type="text" name="cpp" value="<?php echo $_SESSION['values']['cpp']?> " readonly="readonly" id="cpp" size="50"/> </td></tr>

<tr>
  <td>Subject Area</td>
  <td><input type="text" name="sub_cat" value="<?php echo $_SESSION['values']['subject_cat']?> " readonly="readonly" id="sub_cat" size="50"/> </td></tr>
<tr>
  <td>Style</td>
  <td><input type="text" name="style" value="<?php echo $_SESSION['values']['style']?> " readonly="readonly" id="style"
            size="50" /> </td></tr>
<tr>
  <td>References</td>
  <td><input type="text" name="ref" value="<?php echo $_SESSION['values']['sources']?> " readonly="readonly" id="ref" size="50"/> </td></tr>
<tr>
  <td>Preferred Language</td>
  <td><input type="text" name="pref" value="<?php echo $_SESSION['values']['lang']?> " readonly="readonly" id="pref" size="50"/> </td></tr>
  <tr>
  <td>Description</td>
  <td><input  type="text" name="desc" value="<?php echo $_SESSION['values']['desc']?> " readonly="readonly" id="desc" size="50"/> </td></tr>
  <tr>
  <td>Preferred Writer</td>
  <td><input type="text" name="writer" value="<?php echo $_SESSION['values']['writer']?> " readonly="readonly" id="writer" size="50"/> </td></tr>
  
  <tr>
  <td>Firstname</td>
  <td><input type="text" name="fname" value="<?php echo $_SESSION['values']['firstname']?> " readonly="readonly" id="fname" size="50"/> </td></tr>
  <tr>
  <td>Lastname</td>
  <td><input type="text" name="lname" value="<?php echo $_SESSION['values']['lastname']?> " readonly="readonly" id="lname" size="50"/> </td></tr>
  <tr>
  <td>Email</td>
  <td><input type="text" name="email" value="<?php echo $_SESSION['values']['email']?> " readonly="readonly" id="email" size="50"/> </td></tr>
  <tr>
  <td>Country</td>
  <td><input type="text" name="country" value="<?php echo $_SESSION['values']['country']?> " readonly="readonly" id="country" size="50"/> </td></tr>
  <tr>
  <td>Contact</td>
  <td><input type="text" name="contact" value="<?php echo $_SESSION['values']['phone']?> " readonly="readonly" id="contact" size="50"/> </td></tr>
<td>Discount</td>
  <td><input type="text" name="discount" value="<?php echo $_SESSION['values']['discount']?> " readonly="readonly" id="contact" size="50"/> </td></tr>
  <td>Discounted amount</td>
  <td><input type="text" name="discamt" value="<?php echo $_SESSION['values']['discounted_amt']?> " readonly="readonly" id="contact" size="50"/> </td></tr>
  <tr><td><input type="hidden" name="upload" value="<? if (isset($_SESSION['upl'])){  echo $_SESSION['upl'];}?>"/></td><td><input type="submit" name="submit" value="Confirm Order And Proceed To Secure Checkout" size="50"/></td></tr>
  <tr><td></td><td><a href="order.php">GO BACK TO THE ORDERING FORM</a></td></tr>
</table>
</form></td></tr>

     <script>
         function submit(){
             $('#josForm').find('form').submit();
             $('.clearFields').val('');
         }
     </script>


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