<?php 
if(session_id() == ''){
session_start();
}
require_once 'functions.php';
if(isset($_POST['validationType'])){
 update_order();
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
		<script type="text/javascript" src="jquery.validate.js"></script>
		
		<script>
$.validator.setDefaults({
	//submitHandler: function() { alert("submitted!"); }
});

$().ready(function() {
	// validate the comment form when it is submitted
	

	// validate signup form on keyup and submit
	$("#josForm").validate({
		rules: {
			txtTopic: "required",
			doc_type: "required",
			style: "required",
			no_of_pages: {
				required: true,
				
			},
			
			lang: {
				required: true,
				
			},
			sources: {
				required: true,
				
			},
			
			country: {
				required: true,
				
			},
			
			urgency: {
				required: true,
				
			},
			email: {
				required: true,
				email: true,
			},
			
			email1: {
				required: true,
				
				equalTo: "#email",
			},
			aclevel: {
				required: true,
				
			},
			desc: {
				required: true,
				
			},
			firstname: {
				required: true,
				
			},
			lastname: {
				required: true,
				
			},
			phone: {
				required: true,
				tlphone: true,
			},
			
			spacing: {
				required: true,
				
			},
			subject_cat: {
				required: true,
				
			},
			agree: "required"
		},
		messages: {
			txtTopic: "Please enter your Topic!",
			doc_type: "Please Select Document Type!",
			style: "Please Select Style! ",
			no_of_pages: {
				required: "Please select Number of Pages!",
				
			},
			lang: {
				required: "Please select Your Preferred Language!",
				
			},
			sources: {
				required: "Please select the Number of References!",
				
			},
			
			urgency: {
				required: "Please select Urgency!",
				
			},
			email: {
				required: "Please provide an Email Address",
				email: "Please Enter a Valid Email Address ",
			},
			email1: {
				required: "Please Enter an Email Address",
				
				equalTo: "Please enter the same email as above",
				},
			aclevel: {
				required: "Please select Academic Level!",
				
			},
			desc: {
				required: "Please Provide Description!",
				
			},
			
			country: {
				required: "Please Select Your Country!",
			},
			firstname: {
				required: "Please Enter Your Firstname!",
				
			},
			
			lastname: {
				required: "Please Enter your Lastname!",
				
			},
			
			phone: {
				required: "Please Enter Your Phone Number",
				tlphone: "Please insert a valid  phone number (xxx-xxx-xxxx).",
			},
			spacing: "Please select spacing!",
			subject_cat: "Please select Subject Category!"
		}
		
	}); 
	
	
	 });  </script>

		
		
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
	
	<script src='https://www.google.com/recaptcha/api.js'></script>	
		
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
     <tr><td>  <input type="hidden" name="validationType" value="php"/></td><td><span style="font-size:15px;">&nbsp;<span id="discount_perc">25</span>%&nbsp; Discount code:&nbsp;<span id="discount_code">WC247</span></span></td></tr>
     <tr><td>Topic *</td><td class='element_label'><input type="text" name="txtTopic" id="txtTopic" size="40" value="<?php  if (isset($_SESSION['values']['txtTopic'])){ echo $_SESSION['values']['txtTopic'] ;}?>" />
<span id="txtTopicFailed" class="ccc"><?php if (isset($_SESSION['error']['txtTopic'])){ echo $_SESSION['error']['txtTopic'];}?> </span></td></tr>

     <tr><td>Document Type *</td><td><select  name="doc_type" id="doc_type" >
      
      <option value='An Essay'>An Essay</option>
      <option value='Rehabilitation Sceience'>Rehabilitation Sceience</option>
<option  value='Article' >Article</option>
<option  value='Systematic Review' >Systematic Review</option>
<option  value='Capstone Projects' >Capstone Projects</option>
<option  value='Math Problem' >Math Problem</option>
<option  value='Economic Assignment' >Economic Assignment</option>
<option  value='Homework' >Homework</option>
<option  value='Speech/Presentation' >Speech/Presentation</option>
    <option  value='Term Paper' >Term Paper</option>
<option  value='Critique Essay' >Critique Essay</option>
<option  value='PowerPoint' >PowerPoint</option>
<option  value='Application/Admission Essay' >Application/Admission Essay</option>
<option  value='Article Critique' >Article Critique</option>
    <option  value='Research paper' >Research Paper</option>
    <option  value='Course Work' >Course Work</option>
    <option  value='Book Report' >Book Report</option>
    <option value='Book Review'>Book Review</option>
    <option  value='Movie Review' >Movie Review</option>
<option  value='Personal Statement' >Personal Statement</option>
<option  value='Proofreading' >Proofreading</option>
    <option  value='Thesis' >Thesis</option>
    <option  value='Thesis Proposal' >Thesis Proposal</option>
    <option  value='Research Proposal' >Research Proposal</option>
    <option value='Dissertation'>Dissertation</option>
    <option  value='Dissertation Chapter - Abstract' >Dissertation Chapter - Abstract</option>
    <option  value='Dissertation Chapter - Introduction' >Dissertation Chapter - Introduction</option>
    <option  value='Dissertation Chapter - List Review' >Dissertation Chapter - List Review</option>
    <option  value='Dissertation Chapter - Methodology' >Dissertation Chapter - Methodology</option>
    <option value='Dissertation Chapter - Results'>Dissertation Chapter - Results</option>
    <option  value='Dissertation Chapter - Discussion' >Dissertation Chapter - Discussion</option>
    <option  value='Dissertation Chapter - Editing' >Dissertation Chapter - Editing</option>
    <option  value='Dissertation Chapter - Proofreading' >Dissertation Chapter - ProofReading</option>
<option  value='Annotated Bibliography' >Annotated Bibliography</option>
    <option  value='Formatting' >Formatting</option>
<option  value='Editing' >Editing</option>
<option  value='Not Sure' >Not Sure</option>
<option  value='SEO Articles' >SEO Articles</option>
<option  value='Lab Report' >Lab Report</option>
<option  value='Business Plan' >Business Plan</option>
   
  </select> </td></tr>

<tr><td>Number of Pages *</td><td><select name="no_of_pages" id="no_of_pages" onchange="caltotal()">
    <option id= '1nop' value='1' title='1.00'>1 Page(s)/275 Words</option>
    <option id= '2nop' value='2' title='2.00'>2 Page(s)/550 Words</option>
    <option id= '3nop' value='3'title='3.00'>3 Page(s)/825 Words</option>
    <option id= '4nop' value='4' title='4.00'>4 Page(s)/1100 Words</option>
     <option id= '5nop' value='5' title='5.00'>5 Page(s)/1375 Words</option>
    <option id= '6nop' value='6' title='6.00'>6 Page(s)/1650 Words</option>
    <option id= '7nop' value='7'title='7.00'>7 Page(s)/1925 Words</option>
    <option id= '8nop' value='8' title='8.00'>8 Page(s)/2200 Words</option>
     <option id= '9nop' value='9' title='9.00'>9 Page(s)/2475 Words</option>
    <option id= '10nop' value='10' title='10.00'>10 Page(s)/2750 Words</option>
    <option id= '11nop' value='11'title='11.00'>11 Page(s)/3025 Words</option>
    <option id= '12nop' value='12' title='12.00'>12 Page(s)/3300 Words</option>
     <option id= '13nop' value='13' title='13.00'>13 Page(s)/3575 Words</option>
    <option id= '14nop' value='14' title='14.00'>14 Page(s)/3850 Words</option>
    <option id= '15nop' value='15'title='15.00'>15 Page(s)/4125 Words</option>
    <option id= '16nop' value='16' title='16.00'>16 Page(s)/4400 Words</option>
     <option id= '17nop' value='17' title='17.00'>17 Page(s)/4675 Words</option>
    <option id= '18nop' value='18' title='18.00'>18 Page(s)/4950 Words</option>
    <option id= '19nop' value='19'title='19.00'>19 Page(s)/5225 Words</option>
    <option id= '20nop' value='20' title='20.00'>20 Page(s)/5500 Words</option>
     <option id= '21nop' value='21' title='21.00'>21 Page(s)/5775 Words</option>
    <option id= '22nop' value='22' title='22.00'>22 Page(s)/6050 Words</option>
    <option id= '23nop' value='23'title='23.00'>23 Page(s)/6325 Words</option>
    <option id= '24nop' value='24' title='24.00'>24 Page(s)/6600 Words</option>
     <option id= '25nop' value='25' title='25.00'>25 Page(s)/6875 Words</option>
    <option id= '26nop' value='26' title='26.00'>26 Page(s)/7150 Words</option>
    <option id= '27nop' value='27'title='27.00'>27 Page(s)/7425 Words</option>
    <option id= '28nop' value='28' title='28.00'>28 Page(s)/7700 Words</option>
     <option id= '29nop' value='29' title='29.00'>29 Page(s)/7975 Words</option>
    <option id= '30nop' value='30' title='30.00'>30 Page(s)/8250 Words</option>
    <option id= '31nop' value='31'title='31.00'>31 Page(s)/8525 Words</option>
    <option id= '32nop' value='32' title='32.00'>32 Page(s)/8800 Words</option>
     <option id= '33nop' value='33' title='33.00'>33 Page(s)/9075 Words</option>
    <option id= '34nop' value='34' title='34.00'>34 Page(s)/9350 Words</option>
    <option id= '35nop' value='35' title='35.00'>35 Page(s)/9625 Words</option>
    <option id= '36nop' value='36' title='36.00'>36 Page(s)/9900 Words</option>
   	<option id= '37nop' value='37' title='37.00'>37 Page(s)/10175 Words</option>
   	<option id= '38nop' value='38' title='38.00'>38 Page(s)/10450 Words</option>
   	<option id= '39nop' value='39' title='39.00'>39 Page(s)/9350 Words</option>
   	<option id= '40nop' value='40' title='40.00'>40 Page(s)/11000 Words</option>
  	 <option id= '41nop' value='41' title='41.00'>41 Page(s)/11275 Words</option>
   	<option id= '42nop' value='42' title='42.00'>42 Page(s)/11550 Words</option>
    <option id= '43nop' value='43' title='43.00'>43 Page(s)/11825 Words</option>
    <option id= '44nop' value='44'title='44.00'>44 Page(s)/12100 Words</option>
    <option id= '45nop' value='45' title='45.00'>45 Page(s)/12375 Words</option>
     <option id= '46nop' value='46' title='46.00'>46 Page(s)/12650 Words</option>
    <option id= '47nop' value='47' title='47.00'>47 Page(s)/12925 Words</option>
    <option id= '48nop' value='48'title='48.00'>48 Page(s)/13200 Words</option>
    <option id= '49nop' value='49' title='49.00'>49 Page(s)/13475 Words</option>
     <option id= '50nop' value='50' title='50.00'>50 Page(s)/13750 Words</option>
    <option id= '51nop' value='51' title='51.00'>51 Page(s)/14025 Words</option>
    <option id= '52nop' value='52'title='52.00'>52 Page(s)/14300 Words</option>
    <option id= '53nop' value='53' title='53.00'>53 Page(s)/14575 Words</option>
     <option id= '54nop' value='54' title='54.00'>54 Page(s)/14850 Words</option>
    <option id= '55nop' value='55' title='55.00'>55 Page(s)/15125 Words</option>
    <option id= '56nop' value='56' title='56.00'>56 Page(s)/15400 Words</option>
    <option id= '57nop' value='57' title='57.00'>57 Page(s)/15675 Words</option>
   <option id= '58nop' value='58' title='58.00'>58 Page(s)/15950 Words</option>
   <option id= '59nop' value='59' title='59.00'>59 Page(s)/16225 Words</option>
   <option id= '60nop' value='60' title='60.00'>60 Page(s)/16500 Words</option>
   <option id= '61nop' value='61' title='61.00'>61 Page(s)/16775 Words</option>
   <option id= '62nop' value='62' title='62.00'>62 Page(s)/17050 Words</option>
 <option id= '63nop' value='63' title='63.00'> Page(s)/17325 Words</option>
    <option id= '64nop' value='64' title='64.00'>64 Page(s)/17600 Words</option>
    <option id= '65nop' value='65'title='65.00'>65 Page(s)/17875 Words</option>
    <option id= '66nop' value='66' title='66.00'>66 Page(s)/18150 Words</option>
     <option id= '67nop' value='67' title='67.00'>67 Page(s)/18475 Words</option>
    <option id= '68nop' value='68' title='68.00'>68 Page(s)/18700 Words</option>
    <option id= '69nop' value='69'title='69.00'>69 Page(s)/19250 Words</option>
 <option id= '68nop' value='68' title='68.00'>68 Page(s)/18975 Words</option>
    <option id= '69nop' value='69'title='69.00'>69 Page(s)/19250 Words</option>
 <option id= '70nop' value='70' title='70.00'>70 Page(s)/19250 Words</option>
    <option id= '71nop' value='71'title='71.00'>71 Page(s)/19525 Words</option>
    <option id= '82nop' value='82'title='82.00'>82 Page(s)/22550 Words</option>
    <option id= '83nop' value='83' title='83.00'>83 Page(s)/22825 Words</option>
     <option id= '84nop' value='84' title='84.00'>84 Page(s)/23100 Words</option>
    <option id= '85nop' value='85' title='85.00'>85 Page(s)/23100 Words</option>
    <option id= '86nop' value='86' title='86.00'>86 Page(s)/23375 Words</option>
    <option id= '87nop' value='87' title='87.00'>87 Page(s)/23650 Words</option>
   <option id= '88nop' value='88' title='88.00'>88 Page(s)/23925 Words</option>
   <option id= '89nop' value='89' title='89.00'>89 Page(s)/24200 Words</option>
   <option id= '90nop' value='90' title='90.00'>90 Page(s)/24750 Words</option>
   <option id= '91nop' value='91' title='91.00'>91 Page(s)/25025 Words</option>
   <option id= '92nop' value='92' title='92.00'>92 Page(s)/25300 Words</option>
   <option id= '93nop' value='93' title='93.00'>93 Page(s)/25575 Words</option>
     <option id= '94nop' value='94' title='94.00'>94 Page(s)/25850 Words</option>
    <option id= '95nop' value='95' title='95.00'>95 Page(s)/26125 Words</option>
    <option id= '96nop' value='96' title='96.00'>96 Page(s)/26400 Words</option>
    <option id= '97nop' value='97' title='97.00'>97 Page(s)/26675 Words</option>
   <option id= '98nop' value='98' title='98.00'>98 Page(s)/26950 Words</option>
   <option id= '99nop' value='99' title='99.00'>99 Page(s)/27225 Words</option>
   <option id= '100nop' value='100' title='100.00'>100 Page(s)/27500 Words</option>
   <option id= '101nop' value='101' title='101.00'>101 Page(s)/27775 Words</option>
   <option id= '102nop' value='102' title='102.00'>102 Page(s)/28050 Words</option>
   <option id= '103nop' value='103' title='103.00'>103 Page(s)/28325 Words</option>
     <option id= '104nop' value='104' title='104.00'>104 Page(s)/28600 Words</option>
    <option id= '105nop' value='105' title='105.00'>105 Page(s)/28875 Words</option>
    <option id= '106nop' value='106' title='106.00'>106 Page(s)/29150 Words</option>
    <option id= '107nop' value='107' title='107.00'>107 Page(s)/29425 Words</option>
   <option id= '108nop' value='108' title='108.00'>108 Page(s)/29700 Words</option>
   <option id= '109nop' value='109' title='109.00'>109 Page(s)/27975 Words</option>
   <option id= '110nop' value='110' title='110.00'>110 Page(s)/30250 Words</option>
   <option id= '111nop' value='111' title='111.00'>111 Page(s)/30525 Words</option>
   <option id= '112nop' value='112' title='112.00'>112 Page(s)/30800 Words</option>
   <option id= '113nop' value='113' title='113.00'>113 Page(s)/31075 Words</option>
     <option id= '114nop' value='114' title='114.00'>114 Page(s)/31350 Words</option>
    <option id= '115nop' value='115' title='115.00'>115 Page(s)/31625 Words</option>
    <option id= '116nop' value='116' title='116.00'>116 Page(s)/31900 Words</option>
    <option id= '117nop' value='117' title='117.00'>117 Page(s)/32175 Words</option>
   <option id= '118nop' value='118' title='118.00'>118 Page(s)/32450 Words</option>
   <option id= '119nop' value='119' title='119.00'>119 Page(s)/32725 Words</option>
   <option id= '120nop' value='120' title='120.00'>120 Page(s)/33000 Words</option>
   <option id= '121nop' value='121' title='121.00'>121 Page(s)/33275 Words</option>
   <option id= '122nop' value='122' title='122.00'>122 Page(s)/33550 Words</option>
   <option id= '123nop' value='123' title='123.00'>123 Page(s)/33825 Words</option>
     <option id= '124nop' value='124' title='124.00'>124 Page(s)/34100 Words</option>
    <option id= '125nop' value='125' title='125.00'>125 Page(s)/34375 Words</option>
    <option id= '126nop' value='126' title='126.00'>126 Page(s)/34650 Words</option>
    <option id= '127nop' value='127' title='127.00'>127 Page(s)/34925 Words</option>
   <option id= '128nop' value='128' title='128.00'>128 Page(s)/35200 Words</option>
   <option id= '129nop' value='129' title='129.00'>129 Page(s)/35475 Words</option>
   <option id= '130nop' value='130' title='130.00'>130 Page(s)/35750 Words</option>
   <option id= '131nop' value='131' title='131.00'>131 Page(s)/36025 Words</option>
   <option id= '132nop' value='132' title='132.00'>132 Page(s)/36300 Words</option>
   <option id= '133nop' value='133' title='133.00'>133 Page(s)/36575 Words</option>
     <option id= '134nop' value='134' title='134.00'>134 Page(s)/3685 Words</option>
    <option id= '135nop' value='135' title='135.00'>135 Page(s)/37125 Words</option>
    <option id= '136nop' value='136' title='136.00'>136 Page(s)/37400 Words</option>
    <option id= '137nop' value='137' title='317.00'>137 Page(s)/37675 Words</option>
   <option id= '138nop' value='138' title='138.00'>138 Page(s)/37950 Words</option>
   <option id= '139nop' value='139' title='139.00'>139 Page(s)/38225 Words</option>
   <option id= '140nop' value='140' title='140.00'>140 Page(s)/38500 Words</option>
   <option id= '141nop' value='141' title='141.00'>141 Page(s)/38775 Words</option>
   <option id= '142nop' value='142' title='142.00'>142 Page(s)/39050 Words</option>
   <option id= '143nop' value='143' title='143.00'>143 Page(s)/39325 Words</option>
     <option id= '144nop' value='144' title='144.00'>144 Page(s)/39600 Words</option>
    <option id= '145nop' value='145' title='145.00'>145 Page(s)/39875 Words</option>
    <option id= '146nop' value='146' title='146.00'>146 Page(s)/40150 Words</option>
    <option id= '147nop' value='147' title='147.00'>147 Page(s)/40425 Words</option>
   <option id= '148nop' value='148' title='148.00'>148 Page(s)/40700 Words</option>
   <option id= '149nop' value='149' title='149.00'>149 Page(s)/40725 Words</option>
   <option id= '140nop' value='140' title='140.00'>140 Page(s)/41000 Words</option>
   <option id= '151nop' value='151' title='151.00'>151 Page(s)/41275 Words</option>
   <option id= '152nop' value='152' title='152.00'>152 Page(s)/41550 Words</option>
   <option id= '153nop' value='153' title='153.00'>153 Page(s)/41825 Words</option>
     <option id= '154nop' value='154' title='154.00'>154 Page(s)/42100 Words</option>
    <option id= '155nop' value='155' title='155.00'>155 Page(s)/42375 Words</option>
    <option id= '156nop' value='156' title='156.00'>156 Page(s)/42650 Words</option>
    <option id= '157nop' value='157' title='157.00'>157 Page(s)/42925 Words</option>
   <option id= '158nop' value='158' title='158.00'>158 Page(s)/43200 Words</option>
   <option id= '159nop' value='159' title='159.00'>159 Page(s)/43425 Words</option>
   <option id= '160nop' value='160' title='160.00'>160 Page(s)/43750 Words</option>
   <option id= '161nop' value='161' title='161.00'>161 Page(s)/44025 Words</option>
   <option id= '162nop' value='162' title='162.00'>162 Page(s)/44300 Words</option>
    <option id= '163nop' value='163' title='163.00'>163 Page(s)/44825 Words</option>
    <option id= '164nop' value='164'title='164.00'>164 Page(s)/45100 Words</option>
    <option id= '165nop' value='165' title='165.00'>165 Page(s)/45375 Words</option>
    <option id= '166nop' value='166' title='166.00'>166 Page(s)/45650 Words</option>
    <option id= '167nop' value='167' title='167.00'>167 Page(s)/45925 Words</option>
    <option id= '168nop' value='168'title='168.00'>168 Page(s)/46200 Words</option>
    <option id= '169nop' value='169' title='169.00'>169 Page(s)/46475 Words</option>
    <option id= '170nop' value='170' title='170.00'>170 Page(s)/46750 Words</option>
    <option id= '171nop' value='171'title='171.00'>171 Page(s)/47025 Words</option>
    <option id= '172nop' value='172' title='172.00'>172 Page(s)/47300 Words</option>
    <option id= '173nop' value='173' title='173.00'>173 Page(s)/47575 Words</option>
    <option id= '174nop' value='174' title='174.00'>174 Page(s)/47850 Words</option>
    <option id= '175nop' value='175'title='175.00'>175 Page(s)/48125 Words</option>
    <option id= '176nop' value='176' title='176.00'>176 Page(s)/48400 Words</option>
    <option id= '177nop' value='177' title='177.00'>177 Page(s)/48675 Words</option>
    <option id= '178nop' value='178' title='178.00'>178 Page(s)/48950 Words</option>
    <option id= '179nop' value='179'title='179.00'>179 Page(s)/49225 Words</option>
    <option id= '180nop' value='180'title='180.00'>180 Page(s)/49500 Words</option>
    <option id= '181nop' value='181' title='181.00'>181 Page(s)/49775 Words</option>
     <option id= '182nop' value='182' title='182.00'>182 Page(s)/50050 Words</option>
    <option id= '183nop' value='183' title='183.00'>183 Page(s)/50325 Words</option>
    <option id= '184nop' value='184'title='184.00'>184 Page(s)/50600 Words</option>
    <option id= '185nop' value='185' title='185.00'>185 Page(s)/50875 Words</option>
     <option id= '186nop' value='186' title='186.00'>186 Page(s)/51150 Words</option>
    <option id= '187nop' value='187' title='187.00'>187 Page(s)/ 51425 Words</option>
    <option id= '188nop' value='188'title='188.00'>188 Page(s)/51700 Words</option>
    <option id= '189nop' value='189' title='189.00'>189 Page(s)/51975 Words</option>
	<option id= '190nop' value='190' title='190.00'>190 Page(s)/52250 Words</option>
	<option id= '191nop' value='191' title='191.00'>191 Page(s)/52525 Words</option>
	<option id= '192nop' value='192' title='192.00'>192 Page(s)/52800 Words</option>
    <option id= '193nop' value='193' title='193.00'>193 Page(s)/53075 Words</option>
    <option id= '194nop' value='194'title='194.00'>194 Page(s)/53350 Words</option>
    <option id= '195nop' value='195' title='195.00'>195 Page(s)/53625 Words</option>
    <option id= '196nop' value='196' title='196.00'>196 Page(s)/53900 Words</option>
    <option id= '197nop' value='197' title='197.00'>197 Page(s)/54175 Words</option>
    <option id= '198nop' value='198'title='198.00'>198 Page(s)/54450 Words</option>
    <option id= '199nop' value='199' title='199.00'>199 Page(s)/54725 Words</option>
    <option id= '200nop' value='200' title='200.00'>200 Page(s)/55000 Words</option>
    <option id= '201nop' value='201'title='201.00'>201 Page(s)/55275 Words</option>
    <option id= '202nop' value='202' title='202.00'>202 Page(s)/55550 Words</option>
    <option id= '203nop' value='203' title='203.00'>203 Page(s)/55838 Words</option>
    <option id= '204nop' value='204' title='204.00'>204 Page(s)/56100 Words</option>
    <option id= '205nop' value='205'title='205.00'>205 Page(s)/56375 Words</option>
    <option id= '206nop' value='206' title='206.00'>206 Page(s)/56650 Words</option>
    <option id= '207nop' value='207' title='207.00'>207 Page(s)/56925 Words</option>
    <option id= '208nop' value='208' title='208.00'>208 Page(s)/57200 Words</option>
    
   <option id= '209nop' value='209'title='209.00'>209 Page(s)/57475 Words</option>
    <option id= '210nop' value='210' title='210.00'>210 Page(s)/57750 Words</option>
     <option id= '211nop' value='211' title='211.00'>211 Page(s)/58025 Words</option>
    <option id= '212nop' value='212' title='212.00'>212 Page(s)/58300 Words</option>
    <option id= '213nop' value='213'title='213.00'>213 Page(s)/58575 Words</option>
    <option id= '214nop' value='214' title='214.00'>214 Page(s)/58850 Words</option>
     <option id= '215nop' value='215' title='215.00'>215 Page(s)/59125 Words</option>
    <option id= '216nop' value='216' title='216.00'>216 Page(s)/ 59400 Words</option>
    <option id= '217nop' value='217'title='217.00'>217 Page(s)/59675 Words</option>
    <option id= '218nop' value='218' title='218.00'>218 Page(s)/59950 Words</option>
    <option id= '219nop' value='219' title='219.00'>219 Page(s)/60225 Words</option>

	<option id= '220nop' value='220' title='220.00'>220 Page(s)/60500 Words</option>
	<option id= '221nop' value='221' title='221.00'>221 Page(s)/60775 Words</option>

	<option id= '222nop' value='222' title='222.00'>222 Page(s)/61050 Words</option>
    <option id= '223nop' value='223' title='223.00'>223 Page(s)/61325 Words</option>
    <option id= '224nop' value='224'title='224.00'>224 Page(s)/61875 Words</option>
    <option id= '225nop' value='225' title='225.00'>225 Page(s)/62150 Words</option>
    <on id= '226nop' value='226' title='226.00'>226 Page(s)/62425 Words</option>
    <option id= '227nop' value='227' title='227.00'>227 Page(s)/62700 Words</option>
    <option id= '228nop' value='228'title='228.00'>228 Page(s)/62975 Words</option>
    <option id= '229nop' value='229' title='229.00'>229 Page(s)/63250 Words</option>
    <option id= '230nop' value='230' title='230.00'>230 Page(s)/63525 Words</option>
    <option id= '231nop' value='231'title='231.00'>231 Page(s)/63525 Words</option>
    <option id= '232nop' value='232' title='232.00'>232 Page(s)/63800 Words</option>
    <option id= '233nop' value='233' title='233.00'>233 Page(s)/64075 Words</option>
    <option id= '234nop' value='234' title='234.00'>234 Page(s)/64350 Words</option>
    <option id= '235nop' value='235'title='235.00'>235 Page(s)/64625 Words</option>
    <option id= '236nop' value='236' title='236.00'>236 Page(s)/64900 Words</option>
    <option id= '237nop' value='237' title='237.00'>237 Page(s)/65175 Words</option>
    <option id= '238nop' value='238' title='238.00'>238 Page(s)/65250 Words</option>
    <option id= '239nop' value='239'title='239.00'>239 Page(s)/65725 Words</option>
    
   <option id= '240nop' value='240'title='240.00'>240 Page(s)/66000 Words</option>
    <option id= '241nop' value='241' title='241.00'>241 Page(s)/66275 Words</option>
     <option id= '242nop' value='242' title='242.00'>242 Page(s)/66550 Words</option>
    <option id= '243nop' value='243' title='243.00'>243 Page(s)/66825 Words</option>
    <option id= '244nop' value='244'title='244.00'>244 Page(s)/67100 Words</option>
    <option id= '245nop' value='245' title='245.00'>245 Page(s)/67375 Words</option>
     <option id= '246nop' value='246' title='246.00'>246 Page(s)/67650 Words</option>
    <option id= '247nop' value='247' title='247.00'>247 Page(s)/ 67975 Words</option>
    <option id= '248nop' value='248'title='248.00'>248 Page(s)/68200 Words</option>
    <option id= '249nop' value='249' title='249.00'>249 Page(s)/68475 Words</option>
    <option id= '250nop' value='250' title='250.00'>250 Page(s)/68750 Words</option>



 </select></td></tr>

<tr><td>Spacing *</td><td><select name="spacing" id="spacing" onchange="caltotal(this)">
      
      <option value="Double Spaced">Double Spaced</option>
    <option value="Single Spaced">Single Spaced</option>
  </select></td></tr>

<tr><td>Academic Level *</td>
  <td><select  name="aclevel" id="aclevel" onchange="caltotal()">
      
      <option id='1al' value=1 title=1.00>High school</option>
    <option id='2al' value=2 title=1.00>1College</option>
    <option id='3al' value=3 title=1.00>University</option>
    <option id='4al' value=4 title=1.00>Masters</option>
    <option id='5al' value=5 title=1.00>PhD</option>
    

  </select></td></tr>
  <tr><td>Urgency *</td>
  <td><select name="urgency" id="urgency" onchange="caltotal()">
      
    <option id='1u' value=1 title=8.95>10 Days</option>    
    <option id='2u' value=2 title=12.95> 7 Days</option>     
    <option id='3u' value=3 title=13.95>5 Days</option>  
    <option id='4u' value=4 title=14.95>4 Days</option>     
    <option id='5u' value=5 title=16.95>3 Days</option>    
    <option id='6u' value=6 title=18.95>48 Hours</option>    
   <option id='7u' value=7 title=20.95>24 Hours</option>   
   <option id='8u' value=8 title=35.95>12 Hours</option>    
   <option id='9u' value=9 title=38.95>6 Hours</option>  
   <option id='10u' value=10 title=43.95>3 Hours</option>
   <option id='11u' value=11 title=7.95>2 weeks</option>
<option id='12u' value=12 title=6.95>3 weeks</option>     
   <option id='0.5u' value=0.5 title=5.95>1 Month</option

    
 ></select></td></tr>

 <tr><td>Total Amount *</td><td><input type="text" name="tamount" id="tamount" value="9.95" readonly="readonly" size="50"/><b>USD</b></td></tr>
 
<tr><td>Cost Per Page *</td><td><input type="text" name="cpp" id="cpp" value="9.95" readonly="readonly" size="50"/><b>USD</b></td></tr>

<tr><td>Subject Area *</td><td colspan="2" height="10"><select name="subject_cat" id="subject_cat">
					<option style="color: rgb(94, 92, 180);" value="">Choose One</option><option value="Assignments"> - Homework
					<option style="color: rgb(94, 92, 180);" value="Literature and Language">Literature and Language</option>
<option value=" Food Biotechnology"> -  Food Biotechnology</option>
<option value="Social Sciences "> - Social Sciences 

					<option value="English Literature"> - English Literature</option>
					<option value="American Literature"> - American Literature</option>
					<option value=" Antique Literature"> - Antique Literature</option>
					<option value="Asian Literature"> - Asian Literature</option>
					<option value="Linguistics"> - Linguistics</option>

					<option value="Shakespeare"> - Shakespeare</option>
					<option value="English"> - English</option>
					<option style="color: rgb(94, 92, 180);" <option value="Not Sure"> - Not Sure
					<option value="Paintings"> - Paintings</option>
					<option value="Architecture"> - Architecture</option>

					<option value="Drama"> - Drama</option>
					<option value="Theatre"> - Theatre</option>
					<option value="Dance"> - Dance</option>
					<option value="Movies"> - Movies</option>
					<option value="Design Analysis"> - Design Analysis</option>

					<option value="Music Studies"> - Music Studies</option>
					<option value="Advanced Art"> - Advanced Art</option>
					<option style="color: rgb(94, 92, 180);" value="20">Social Sciences</option>
					<option value="Psychology"> - Psychology</option>
					<option value="Sociology"> - Sociology</option>

					<option value="Social Issues"> - Social Issues</option>
					<option value="Ethics"> - Ethics</option>
					<option value="Ethnic and Area Studies"> - Ethnic and Area Studies</option>
					<option value="Gender"> - Gender</option>
					<option value="Human Sexuality"> - Human Sexuality</option>

					<option value="Philosophy"> - Philosophy</option>
					<option value="Political Science"> - Political Science</option>
					<option value="Government"> - Government</option>
					<option value="Public Administration"> - Public Administration</option>
					<option value="Methodology"> - Methodology</option>

					<option value="International Relations"> - International Relations</option>
					<option value="Globalization"> - Globalization</option>
					<option value="Labor Studies"> - Labor Studies</option>
					<option style="color: rgb(94, 92, 180);" value="History">History</option>
					<option value="American History"> - American History</option>

					<option value="African-American Studies"> - African-American Studies</option>
					<option value="Native-American Studies"> - Native-American Studies</option>
					<option value="Latin-American Studies"> - Latin-American Studies</option>
					<option value="Canadian Studies"> - Canadian Studies</option>
					<option value="Asian Studies"> - Asian Studies</option>

					<option value="West European Studies"> - West European Studies</option>
					<option value="East European Studies"> - East European Studies</option>
					<option value="Holocaust Studies"> - Holocaust Studies</option>
					<option value="Women Studies"> - Women Studies</option>
					<option style="color: rgb(94, 92, 180);" value="Law">Law</option>

					<option value="Legal Issues"> - Legal Issues</option>
					<option value="Criminology"> - Criminology</option>
					<option style="color: rgb(94, 92, 180);" value="Mathematics and Economics">Mathematics and Economics</option>
					<option value="Mathematics"> - Mathematics</option>
					<option value="Business"> - Business</option>

					<option value="Economics"> - Economics</option>
					<option value="Management"> - Management</option>
					<option value="HR Management"> - HR Management</option>
					<option value="Marketing"> - Marketing</option>
					<option value="Investment"> - Investment</option>

					<option value="Company Analysis"> - Company Analysis</option>
					<option value="Finance"> - Finance</option>
					<option value="Accounting"> - Accounting</option>
					<option value="Case Study"> - Case Study</option>
					<option value="E-Commerce"> - E-Commerce</option>

					<option value="Logistics"> - Logistics</option>
					<option value="Trade"> - Trade</option>
					<option style="color: rgb(94, 92, 180);" value="Technology">Technology</option>
					<option value="Science"> - Science</option>
					<option value="Engineering"> - Engineering</option>
<option value="Information System"> -  Information System</option>
<option value="Buildings/Constructions"> - Buildings/Constructions</option>

					<option value="Mechanical Engineering"> - Mechanical Engineering</option>
					<option value="Civil Engineering"> - Civil Engineering</option>
					<option value="Aviation"> - Aviation</option>
					<option value="Aeronautics"> - Aeronautics</option>
					<option value="Computer Science"> - Computer Science</option>

					<option value="Internet"> - Internet</option>
					<option value="Programming"> - Programming</option>
					<option value="IT Management"> - IT Management</option>
					<option value="Modern Technologies"> - Modern Technologies</option>
					<option value="Web Design"> - Web Design</option>

					<option style="color: rgb(94, 92, 180);" value="Nature">Nature</option>
					<option value="Geography"> - Geography</option>
					<option value="Geology and Geophysics"> - Geology and Geophysics</option>
					<option value="Archeology"> - Archeology</option>
					<option value="Ecology"> - Ecology</option>

					<option value="Environmental Issues"> - Environmental Issues</option>
					<option value="Description/Analysis of Place/Territory"> - Description/Analysis of Place/Territory</option>
					<option value="Agricultural Studies"> - Agricultural Studies</option>
					<option value="Astronomy"> - Astronomy</option>
					<option style="color: rgb(94, 92, 180);" value="Education">Education</option>

					<option value="Pedagogy"> - Pedagogy</option>
					<option value="Education Theories"> - Education Theories</option>
					<option value="Teacher's Career"> - Teachers Career</option>
					<option value="Child"> - Child</option>
					<option value="Youth Issues"> - Youth Issues</option>

					<option value="Application Essay"> - Application Essay</option>
					<option style="color: rgb(94, 92, 180);" value="Health and Medicine">Health and Medicine</option>
					<option value="Nutrition"> - Nutrition</option>
					<option value="Sport"> - Sport</option>
					<option value="Healthcare"> - Healthcare</option>

					<option value="Aging"> - Aging</option>
					<option value="Pharmacology"> - Alternative Medicine</option>
					<option value="100"> - Pharmacology</option>
					<option value="Nursing"> - Nursing</option>
					<option style="color: rgb(94, 92, 180);" value="Communications and Media">Communications and Media</option>

					<option value="Journalism"> - Journalism</option>
					<option value="Public Relations"> - Public Relations</option>
					<option value="Advertising"> - Advertising</option>
					<option value="Information Campaign"> - Information Campaign</option>
					<option value="Communication Strategies"> - Communication Strategies</option>

					<option style="color: rgb(94, 92, 180);" value="Religion and Theology">Religion and Theology</option>
					<option style="color: rgb(94, 92, 180);" value="Life Sciences">Life Sciences</option>
					<option value="Physics"> - Physics</option>
					<option value="Chemistry"> - Chemistry</option>
					<option value="Biology"> - Biology</option>

					<option value="Anthropology"> - Anthropology</option>
					<option style="color: rgb(94, 92, 180);" value="Tourism">Tourism</option>
					<option style="color: rgb(94, 92, 180);" value="Creative writing">Creative writing</option>
					<option value="Personal Experience Essay"> - Personal Experience Essay</option>
					<option value="Personal Interpretation of fiction story/essay"> - Personal Interpretation of fiction story/essay</option>

				</select></td></tr>
                
                <tr><td>Style *</td><td><select  name="style" id="style">
      
      <option value='APA'>APA</option>
    <option  value='MLA' >MLA</option>
    <option  value='Chicago' >Chicago</option>
    <option  value='Oxford' >Oxford</option>
    <option  value='Harvard' >Harvard</option>
    <option value='Turabian'>Turabian</option>
<option value='Vancouver'>Vancouver</option>
<option value='ASA'>ASA</option>
<option value='Not Sure'>Not Sure</option>
    </select>
</td></tr>
    
    <tr><td>Number of Sources/References *</td><td><select  name="sources" id="sources">
       <option value='0'>0</option>
      <option value='1'>1</option>
    <option  value='2' >2</option>
    <option  value='3' >3</option>
    <option  value='4' >4</option>
    <option  value='5' >5</option>
    <option value='6'>6</option>
    <option value='7'>7</option>
    <option  value='8' >8</option>
    <option  value='9' >9</option>
    <option  value='10' >10</option>
    <option  value='11' >11</option>
    <option value='12'>12</option>
    <option value='13'>13</option>
    <option  value='14' >14</option>
    <option  value='15' >15</option>
    <option  value='16' >16</option>
    <option  value='17' >17</option>
    <option value='18'>18</option>
    <option value='19'>19</option>
    <option  value='20' >20</option>
    <option  value='21' >21</option>
    <option  value='22' >22</option>
    <option  value='23' >23</option>
    <option value='24'>24</option>
    <option value='25'>25</option>
    <option  value='26' >26</option>
    <option  value='26' >27</option>
    <option  value='28' >28</option>
    <option  value='29' >29</option>
    <option value='30'>30</option>
<option value='31'>31</option>
<option value='32'>32</option>
<option value='33'>33</option>
<option value='34'>34</option>
<option value='35'>35</option>
<option value='36'>36</option>
<option value='37'>37</option>
<option value='38'>38</option>
<option value='39'>39</option>
<option value='40'>40</option>
<option value='41'>41</option>
<option value='42'>42</option>
<option value='43'>43</option>
<option value='44'>44</option>
<option value='45'>45</option>
<option value='46'>46</option>
<option value='47'>47</option>
<option value='48'>48</option>
<option value='49'>49</option>
<option value='50'>50</option>





    </select>
</td></tr>
    
    <tr><td>Preffered Language</td><td><select name="lang" id="lang">
    <option value="English US" >English US</option>
    <option  value='English UK' >English UK</option>
    <option  value='Not a native speaker' >Not a Native Speaker</option>
    </select>
</td></tr>
    
    <tr><td>Description/instructions</td><td><textarea name="desc" cols="37" rows="15" id="desc" > <?php  if (isset($_SESSION['values']['desc'])){ echo $_SESSION['values']['desc'] ;}?></textarea>
<span id="txtTopicFailed" class="ccc"><?php if (isset($_SESSION['error']['desc'])){ echo $_SESSION['error']['desc'];}?> </span></td></tr>

    <tr><td>Check to Upload files on the Next Page</td><td><input type="checkbox" name="check" value="YES"></td></tr>
    
    <tr><td>Preffered Writer</td><td><input name="writer" type="text" size="40" maxlength="255" id="writer" value="<?php  if (isset($_SESSION['values']['writer'])){ echo $_SESSION['values']['writer'] ;}?>"/><span id="txtTopicFailed" class="ccc"><?php if (isset($_SESSION['error']['writer'])){ echo $_SESSION['error']['writer'];}?> </span></td></tr>
    
<tr><td>Firstname</td><td><input name="firstname" type="text" size="40" maxlength="255" id="firstname" value="<?php  if (isset($_SESSION['values']['firstname'])){ echo $_SESSION['values']['firstname'] ;}?>" />
<span id="txtTopicFailed" class="ccc"><?php if (isset($_SESSION['error']['firstname'])){ echo $_SESSION['error']['firstname'];}?> </span></td></tr> 

<tr><td>Lastname</td><td><input name="lastname" type="text" size="40" maxlength="255" id="lastname" value="<?php  if (isset($_SESSION['values']['lastname'])){ echo $_SESSION['values']['lastname'] ;}?>" />
<span id="txtTopicFailed" class="ccc"><?php if (isset($_SESSION['error']['lastname'])){ echo $_SESSION['error']['lastname'];}?> </span></td></tr> 

<tr><td>Email</td><td><input name="email" type="text" size="40" maxlength="255" id="email" value="<?php  if (isset($_SESSION['values']['email'])){ echo $_SESSION['values']['email'] ;}?>" />
<span id="txtTopicFailed" class="ccc"><?php if (isset($_SESSION['error']['email'])){ echo $_SESSION['error']['email'];}?> </span></td></tr> 

<tr><td>Re Type Email</td><td><input name="email1" type="text" size="40" maxlength="255" id="email1" value="<?php  if (isset($_SESSION['values']['email1'])){ echo $_SESSION['values']['email1'] ;}?>" />
<span id="txtTopicFailed" class="ccc"><?php if (isset($_SESSION['error']['email1'])){ echo $_SESSION['error']['email1'];}?> </span></td></tr>  

<tr><td>Country</td><td><select name="country" id="country">
					 <option value='United States'>	United States	</option>
<option value='Afghanistan'>	Afghanistan	</option>
                    <option value='Albania'>	Albania	</option>
                    <option value='Albania'>	Algeria	</option>
                    <option value='Andorra'>	Andorra	</option>
                    <option value='Angola'>	Angola	</option>
                    <option value='Antigua & Deps'>	Antigua & Deps	</option>
                    <option value='Argentina'>	Argentina	</option>
                    <option value='Armenia'>	Armenia	</option>
                    <option value='Australia'>	Australia	</option>
                    <option value='Austria'>	Austria	</option>
                    <option value='Azerbaijan'>	Azerbaijan	</option>
                    <option value='Bahamas'>	Bahamas	</option>
                    <option value='Bahrain'>	Bahrain	</option>
                    <option value='Bangladesh'>	Bangladesh	</option>
                    <option value='Barbados'>	Barbados	</option>
                    <option value='Belarus'>	Belarus	</option>
                    <option value='Belgium'>	Belgium	</option>
                    <option value='Belize'>	Belize	</option>
                    <option value='Benin'>	Benin	</option>
                    <option value='Bhutan'>	Bhutan	</option>
                    <option value='Bolivia'>	Bolivia	</option>
                    <option value='Bosnia Herzegovina'>	Bosnia Herzegovina	</option>
                    <option value='Botswana'>	Botswana	</option>
                    <option value='Brazil'>	Brazil	</option>
                    <option value='Brunei'>	Brunei	</option>
                    <option value='Bulgaria'>	Bulgaria	</option>
                    <option value='Burkina'>	Burkina	</option>
                    <option value='Burundi'>	Burundi	</option>
                    <option value='Cambodia'>	Cambodia	</option>
                    <option value='Cameroon'>	Cameroon	</option>
                    <option value='Canada'>	Canada	</option>
                    <option value='Cape Verde'>	Cape Verde	</option>
                    <option value='Central African Rep'>	Central African Rep</option>
                    <option value='Chad'>	Chad	</option>
                    <option value='Chile'>	Chile	</option>
                    <option value='China'>	China	</option>
                    <option value='Colombia'>	Colombia	</option>
                    <option value='Comoros'>	Comoros	</option>
                    <option value='Congo'>	Congo	</option>
                    <option value='Costa Rica'>	Costa Rica	</option>
                    <option value='Croatia'>	Croatia	</option>
                    <option value='Cuba'>	Cuba	</option>
                    <option value='Cyprus'>	Cyprus	</option>
                    <option value='Czech Republic'>	Czech Republic	</option>
                    <option value='Denmark'>	Denmark	</option>
                    <option value='Djibouti'>	Djibouti	</option>
                    <option value='Dominica'>	Dominica	</option>
                    <option value='Dominican Republic'>	Dominican Republic	</option>
                    <option value='East Timor'>	East Timor	</option>
                    <option value='Ecuador'>	Ecuador	</option>
                    <option value='Egypt'>	Egypt	</option>
                    <option value='El Salvador'>	El Salvador	</option>
                    <option value='Equatorial Guinea'>	Equatorial Guinea	</option>
                    <option value='Eritrea'>	Eritrea	</option>
                    <option value='Estonia'>	Estonia	</option>
                    <option value='Ethiopia'>	Ethiopia	</option>
                    <option value='Fiji'>	Fiji	</option>
                    <option value='Finland'>	Finland	</option>
                    <option value='France'>	France	</option>
                    <option value='Gabon'>	Gabon	</option>
                    <option value='Gambia'>	Gambia	</option>
                    <option value='Georgia'>	Georgia	</option>
                    <option value='Germany'>	Germany	</option>
                    <option value='Ghana'>	Ghana	</option>
                    <option value='Greece'>	Greece	</option>
                    <option value='Grenada'>	Grenada	</option>
                    <option value='Guatemala'>	Guatemala	</option>
                    <option value='Guinea'>	Guinea	</option>
                    <option value='Guinea-Bissau'>	Guinea-Bissau	</option>
                    <option value='Guyana'>	Guyana	</option>
                    <option value='Haiti'>	Haiti	</option>
                    <option value='Honduras'>	Honduras	</option>
                    <option value='Hungary'>	Hungary	</option>
                    <option value='Iceland'>	Iceland	</option>
                    <option value='India'>	India	</option>
                    <option value='Indonesia'>	Indonesia	</option>
                    <option value='Iran'>	Iran	</option>
                    <option value='Iraq'>	Iraq	</option>
                    <option value='Ireland {Republic}'>	Ireland {Republic}	</option>
                    <option value='Israel'>	Israel	</option>
                    <option value='Italy'>	Italy	</option>
                    <option value='Ivory Coast'>	Ivory Coast	</option>
                    <option value='Jamaica'>	Jamaica	</option>
                    <option value='Japan'>	Japan	</option>
                    <option value='Jordan'>	Jordan	</option>
                    <option value='Kazakhstan'>	Kazakhstan	</option>
                    <option value='Kenya'>	Kenya	</option>
                    <option value='Kiribati'>	Kiribati	</option>
                    <option value='Korea North'>	Korea North	</option>
                    <option value='Korea South'>	Korea South	</option>
                    <option value='Kosovo'>	Kosovo	</option>
                    <option value='Kuwait'>	Kuwait	</option>
                    <option value='Kyrgyzstan'>	Kyrgyzstan	</option>
                    <option value='Laos'>	Laos	</option>
                    <option value='Latvia'>	Latvia	</option>
                    <option value='Lebanon'>	Lebanon	</option>
                    <option value='Lesotho'>	Lesotho	</option>
                    <option value='Liberia'>	Liberia	</option>
                    <option value='Libya'>	Libya	</option>
                    <option value='Liechtenstein'>	Liechtenstein	</option>
                    <option value='Lithuania'>	Lithuania	</option>
                    <option value='Luxembourg'>	Luxembourg	</option>
                    <option value='Macedonia'>	Macedonia	</option>
                    <option value='Madagascar'>	Madagascar	</option>
                    <option value='Malawi'>	Malawi	</option>
                    <option value='Malaysia'>	Malaysia	</option>
                    <option value='Maldives'>	Maldives	</option>
                    <option value='Mali'>	Mali	</option>
                    <option value='Malta'>	Malta	</option>
                    <option value='Majoshall Islands'>	Majoshall Islands	</option>
                    <option value='Mauritania'>	Mauritania	</option>
                    <option value='Mauritius'>	Mauritius	</option>
                    <option value='Mexico'>	Mexico	</option>
                    <option value='Micronesia'>	Micronesia	</option>
                    <option value='Moldova'>	Moldova	</option>
                    <option value='Monaco'>	Monaco	</option>
                    <option value='Mongolia'>	Mongolia	</option>
                    <option value='Montenegro'>	Montenegro	</option>
                    <option value='Morocco'>	Morocco	</option>
                    <option value='Mozambique'>	Mozambique	</option>
                    <option value'=Myanmar, {Burma}'>	Myanmar, {Burma}	</option>
                    <option value='Namibia'>	Namibia	</option>
                    <option value='Nauru'>	Nauru	</option>
                    <option value='Nepal'>	Nepal	</option>
                    <option value='Netherlands'>	Netherlands	</option>
                    <option value='New Zealand'>	New Zealand	</option>
                    <option value='Nicaragua'>	Nicaragua	</option>
                    <option value='Niger'>	Niger	</option>
                    <option value='Nigeria'>	Nigeria	</option>
                    <option value='Norway'>	Norway	</option>
                    <option value='Oman'>	Oman	</option>
                    <option value='Pakistan'>	Pakistan	</option>
                    <option value='Palau'>	Palau	</option>
                    <option value='Panama'>	Panama	</option>
                    <option value='Papua New Guinea'>	Papua New Guinea	</option>
                    <option value='Paraguay'>	Paraguay	</option>
                    <option value='Peru'>	Peru	</option>
                    <option value='Philippines'>	Philippines	</option>
                    <option value='Poland'>	Poland	</option>
                    <option value='Portugal'>	Portugal	</option>
                    <option value='Qatar'>	Qatar	</option>
                    <option value='Romania'>	Romania	</option>
                    <option value='Russian Federation'>	Russian Federation	</option>
                    <option value='Rwanda'>	Rwanda	</option>
                    <option value='St Kitts & Nevis'>	St Kitts & Nevis	</option>
                    <option value='St Lucia'>	St Lucia	</option>
                    <option value='Saint Vincent'>	Saint Vincent </option>
                    <option value='Samoa'>	Samoa	</option>
                    <option value='San Marino'>	San Marino	</option>
                    <option value='Sao Tome & Principe'>	Sao Tome & Principe</option>
                    <option value='Saudi Arabia'>	Saudi Arabia	</option>
                    <option value='Senegal'>	Senegal	</option>
                    <option value='Serbia'>	Serbia	</option>
                    <option value='Seychelles'>	Seychelles	</option>
                    <option value='Sierra Leone'>	Sierra Leone	</option>
                    <option value='Singapore'>	Singapore	</option>
                    <option value='Slovakia'>	Slovakia	</option>
                    <option value='Slovenia'>	Slovenia	</option>
                    <option value='Solomon Islands'>	Solomon Islands	</option>
                    <option value='Somalia'>	Somalia	</option>
                    <option value='South Africa'>	South Africa	</option>
                    <option value=	'Spain'>	Spain	</option>
                    <option value='Sri Lanka'>	Sri Lanka	</option>
                    <option value='Sudan'>	Sudan	</option>
                    <option value='Suriname'>	Suriname	</option>
                    <option value='Swaziland'>	Swaziland	</option>
                    <option value='Sweden'>	Sweden	</option>
                    <option value='Switzerland'>	Switzerland	</option>
                    <option value='Syria'>	Syria	</option>
                    <option value='Taiwan'>	Taiwan	</option>
                    <option value='Tajikistan'>	Tajikistan	</option>
                    <option value='Tanzania'>	Tanzania	</option>
                    <option value='Thailand'>	Thailand	</option>
                    <option value='Togo'>	Togo	</option>
                    <option value='Tonga'>	Tonga	</option>
                    <option value='Trinidad & Tobago'>	Trinidad & Tobago	</option>
                    <option value='Tunisia'>	Tunisia	</option>
                    <option value='Turkey'>	Turkey	</option>
                    <option value='Turkmenistan'>	Turkmenistan	</option>
                    <option value='Tuvalu'>	Tuvalu	</option>
                    <option value='Uganda'>	Uganda	</option>
                    <option value='Ukraine'>	Ukraine	</option>
                    <option value='United Arab Emirates'>	United Arab Emirates</option>
                    <option value='United Kingdom'>	United Kingdom	</option>
                                       <option value='Uruguay'>	Uruguay	</option>
                    <option value='Uzbekistan'>	Uzbekistan	</option
                    ><option value='Vanuatu'>	Vanuatu	</option>
                    <option value='Vatican City'>	Vatican City	</option>
                    <option value='Venezuela'>	Venezuela	</option
                    ><option value='Vietnam'>	Vietnam	</option>
                    <option value='Yemen'>	Yemen	</option>
                    <option value='Zambia'>	Zambia	</option>
                    <option value='Zimbabwe'>	Zimbabwe	</option></select></td></tr>

 <tr><td>Contact Phone</td><td><input name="phone" type="text" size="40" maxlength="255"  id="phone" value="<?php  if (isset($_SESSION['values']['phone'])){ echo $_SESSION['values']['phone'] ;}?>"/>
<span id="txtTopicFailed" class="ccc"><?php if (isset($_SESSION['error']['phone'])){ echo $_SESSION['error']['phone'];}?> </span></td></tr>  

<tr><td>Discount Code</td><td><input name="discode" type="text" id="discode" size="12" onblur="validate_address('discode','discodeMassage')" value=""></td></tr> 
<tr><td>I am Not A  Robot</td><td><div class="g-recaptcha" data-sitekey="6Ld8KxcTAAAAAI_Llm6AadgFhaxuHgXjInTZ-ocJ"></div></td></tr>

<tr><td></td><td><input type="submit" name="submit" value="Proceed...>>"></td></tr>
        <script>
            function submit(){
                $('#josForm').find('form').submit();
                $('.clearFields').val('');
            }
        </script>

</table>
</form></td></tr>

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
                            <div>riting Centre</div>
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