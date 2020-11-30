<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Writing Centre - Home</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
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
        <meta charset="utf-8" />

	<link type="text/css" rel="stylesheet" href="css/example.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
    <body>
    <?php  
        require_once 'config.php';
        $post_id = '1'; 
    ?>
       <script>
        // rating script
        $(function(){ 
            $('.rate-btn').hover(function(){
                $('.rate-btn').removeClass('rate-btn-hover');
                var therate = $(this).attr('id');
                for (var i = therate; i >= 0; i--) {
                    $('.rate-btn-'+i).addClass('rate-btn-hover');
                };
            });
                            
            $('.rate-btn').click(function(){    
                var therate = $(this).attr('id');
                var dataRate = act=rate&post_id=<?php echo $post_id; ?>&rate='+therate; //
                $('.rate-btn').removeClass('rate-btn-active');
                for (var i = therate; i >= 0; i--) {
                    $('.rate-btn-'+i).addClass('rate-btn-active');
                };
                $.ajax({
                    type : "POST",
                    url : "http://localhost/rating/ajax.php",
                    data: dataRate,
                    success:function(){}
                });
                
            });
        });
    </script> 
     <div class="webcodo-top" >
        <a href="http://www.webcodo.net/rating-stars-system-with-jquery-ajax-php">
            <div class="wcd wcd-tuto"> </div>
        </a>
        <a href="http://webcodo.com">
            <div class="wcd wcd-logo"></div>
        </a>
        <div class="wcd"></div>
    </div>
<div id="mainbg"><!-- header begins -->
<div id="header">
<div id="logo">
<div id="apDiv2"><img src="images/header_back.png" alt="" width="1061" height="73" /></div>
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
<div id="slider"><img src="images/header1.jpg" alt="" /> <img src="images/header2.jpg" alt="" /> <img src="images/header3.jpg" alt="" /></div>
</div>
</div>
<script src="lib/jquery-1.4.3.min.js" type="text/javascript"></script>
<script src="lib/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript"><!--
						$(window).load(function() {
							$('#slider').nivoSlider();
						});
// --></script>
</div>
<!-- header ends --> <!-- content begins -->
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
                                                <div id="comm100-button-186"></div>
                                                <div align="center">
                                                  <script type="text/javascript">
    var Comm100API=Comm100API||{chat_buttons:[]};
    Comm100API.chat_buttons.push({code_plan:186,div_id:'comm100-button-186'});
    Comm100API.site_id=155184;Comm100API.main_code_plan=186;
    (function(){
        var lc=document.createElement('script');
        lc.type='text/javascript';lc.async=true;
        lc.src='https://chatserver.comm100.com/livechat.ashx?siteId='+Comm100API.site_id;
        var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(lc,s);
    })();
                                                  </script>
                                                </div>
                                              </div>
                                            </li>
                                    </ul>
                                        <ul>
                                          <li><a href="Categories.php"><strong>Categories</strong></a></li>
                                          <li><a href="Site Map.php"><strong>Site Map</strong></a></li>
                                          <li></li>
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
                                    <p><strong>&quot;I was so stranded and almost lost hope with my essay, but  thanks to the online services that i came across. Writing Centre really  helped me out by writing a very professional and quality essay that made me  emerge top in my academic results. Writingcentre.us, you are simply the  best writing company i know of so far&quot; </strong><strong><br />
                                    <br />
                                    <strong>Robert F. New York</strong></strong><br />
                                      <strong>&lsquo;&rsquo;Dearest writer,
Wao and wonderful, what a big surprise!
May the Almighty God bless you too in all of your endeavors - Ameen.
Thanks awfully.

I just read the completed week 6 assignment (Statistics II).  Thanks.  I will talk to Jennifer during the day or please let her talk to me as soon as she resume.
This appreciation can never be underestimated.

&quot;</strong><strong><br />
                                      <br />
                                      <strong>Dr. Suleiman A. California</strong></strong></p>
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
<h2>Why Choose Us?</h2>
<div class="left_bg">
<div class="left_grad">
<ul>
<li>100% custom original papers </li>
<li>FREE bibliography page </li>
<li>100% privacy guaranteed </li>
<li>Free unlimited amendments upon request </li>
<li>A wide range of services </li>
<li>More than 8 years experience in the custom writing services </li>
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
<ul>
<li> </li>
</ul>
</div>
</div>
</div>
</div>
<div class="left_bg">
<div class="left_grad">
<div class="categories">
<div>
<div>
<h2>Contact Us</h2>
</div>
</div>
<ul>
<li>
<div><span style="text-decoration: underline;"><img src="images/Contact Us.jpg" alt="" width="170" height="183" /></span></div>
</li>
<li><strong>+1 (315) 215-0749 </strong></li>
<li>
<p><strong>EMAIL US - </strong><a href="mailto:info@writingcentre.us">info@writingcentre.us</a></p>
</li>
</ul>
<ul>
</ul>
</div>
</div>
</div>
</div>
<div id="center">
<h1><strong>A Smarter Way To Students.</strong></h1>
<h1><strong>Turn in your best paper with Writingcentre.us  </strong><strong></strong></h1>
<div class="webcodo-top" >
  <div class="wcd"></div>
    </div>
<h1>        
<div class="rate-ex3-cnt">
            <div id="1" class="rate-btn-1 rate-btn"></div>
            <div id="2" class="rate-btn-2 rate-btn"></div>
            <div id="3" class="rate-btn-3 rate-btn"></div>
            <div id="4" class="rate-btn-4 rate-btn"></div>
            <div id="5" class="rate-btn-5 rate-btn"></div>
</div>

                <div class="box-result-cnt">
            <?php
                $query = mysql_query("SELECT * FROM wcd_rate"); 
                while($data = mysql_fetch_assoc($query)){
                    $rate_db[] = $data;
                    $sum_rates[] = $data['rate'];
                }
                if(@count($rate_db)){
                    $rate_times = count($rate_db);
                    $sum_rates = array_sum($sum_rates);
                    $rate_value = $sum_rates/$rate_times;
                    $rate_bg = (($rate_value)/5)*100;
                }else{
                    $rate_times = 0;
                    $rate_value = 0;
                    $rate_bg = 0;
                }
            ?>
           
        
        </div><!-- /rate-result-cnt -->
</h1>
<div class="text"> GIVE YOUR GRADES A BOOST <p>
<p>
Use our essay writing service to score better and meet your deadlines 
<p>
No matter what kind of academic paper you need, it is simple and secure to hire an essay writer for a price you can afford at writingcentre.us. Save more time for yourself.  CALL US NOW!!! +1 (315) 215-0749<p>

Special Offer!! 25% off - Discount Code WC247 
<p><span style="color: #ff0000;"><a href="http://writingcentre.us/Order%20Form.php"><strong>Writingcentre.us</strong></a></span> is the <strong><span style="text-decoration: underline;">only </span></strong>trusted  American Writing Company when it comes to the writing of <strong><em>custom essays, dissertations,  term papers, research papers, Computer Science Homework Accounting, Mathematics, Physics and Economics problems</em></strong> among others. <br /> We have been in this business for over nine years and  have thus perfected the skill of research and writing. <strong>Writingcentre.us</strong> has available at their  fingertips a myriad of research sources thus you our customer can rest assured  that when you entrust us with your writing assignment, it will be done only  after exhaustive research has been done on the topic. <br /> <strong>Writingcentre.us</strong> only has in its  employment highly trained and qualified writers holding only masters and PHD  degrees. This is unlike other research companies which have employed  academically unqualified writers, who produce for students unsatisfactory  papers resulting in failing grades. The writers at <strong>Writingcentre.us</strong> are trained in various  fields e.g. business, management, finance, economics and literature just to  mention a few. They have grown wise by the years when it comes to custom  writing and thus they only produce papers worth A&rsquo; grades, guaranteed.</p>
<p>When you employ the services of <strong>Writingcentre.us, </strong>&nbsp;what can you expect?</p>
<ul type="disc">
<li><strong>Originality-</strong> Our writers only pen out       custom research papers, term papers, dissertations, admission essays,       coursework and essays just to mention a few. You will neither get a       duplicate nor a plagiarized paper; you will only get a custom paper       specifically tailored to your requests. </li>
</ul>
<ul type="disc">
<li><strong>Quality-</strong> We being the only trusted name       in writing live up to those standards and only produce quality papers. You       pay us, and we deliver! Our top notch writers are standing by ready to pen       your desired paper ensuring maximum quality. We know that when you get a       quality paper; you are happy, your lecturer is happy, and we are also       happy for we know you will once more employ our services. </li>
</ul>
<ul type="disc">
<li><strong>Deadline-</strong> <strong>Writingcentre.us</strong> knows how frustrating it is       for a student to order a paper and not have it ready on time. It is       inconveniencing for the student for what do they tell their       teachers/lecturers? Here at <strong>Writingcentre.us</strong> , we put first the welfare of       our students. Our writers are highly disciplined and they know above all       else that they have to meet the deadline! We are flexible, and have given       students different time ranges for which they can expect their papers e.g.       you can order a paper to be ready in just 3 hours! Employ our services       today and watch us beat the deadline! </li>
</ul>
<ul type="disc">
<li><strong>Confidentiality- </strong>We at<strong> </strong><strong>Writingcentre.us</strong> have a confidentiality policy       whereby we do not whatsoever disclose any information about our students.       When you employ our services, you can be sure that it&rsquo;s in strict       confidence, and this confidence cannot be breached. </li>
</ul>
<p>We boast of many returning customers over the years  just because they have come to learn that <strong>Writingcentre.us</strong> is the only name in  this business to be trusted. They too just like you read the above on what to  expect from us. They tried us out, and saw that we do keep our word and they  have been with us ever since. You too, go ahead and try us out, you will never  regret! You don&rsquo;t believe it- just read a few of the testimonials on our page,  and they should change your mind!</p>
<p>What do our students get with each order?</p>
<ul type="disc">
<li>Custom       papers tailored to your specifications! </li>
<li>24/7       writer and customer service contact throughout the writing process! </li>
<li>Free       title page, table of content, references and formatting! </li>
<li>Free       unlimited revisions! </li>
<li>Satisfaction,       guaranteed! </li>
</ul>
</div>
<h1>&nbsp;</h1>
<a href="Order Form.php"><img src="images/discount button.png" alt="" width="547" height="143" /></a></div>
<div style="clear: both">
<p>&nbsp;</p>
<div>
              <div><a href="Order Form.php">
                <div></div>
              </a></div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>
<!-- content ends --> <!-- footer begins -->
<div id="footer">
<p>Copyright  2014. <a href="#">Privacy Policy</a></p>
<div id="apDiv5">
<p align="left"><img src="images/index_clip_image001_0000.png" alt="" width="76" height="67" /></p>
<div id="apDiv4">
<div>
<p align="left"><strong>writingcentre.us</strong></p>
</div>
</div>
</div>
<p><!-- Do not remove -->Design by infoNation<!-- end --></p>
</div>
<!-- footer ends --></div>
</div>
</div>
</body>
</html>