<!DOCTYPE html>
<html lang="en">
<html xmlns="http://www.w3.org/1999/xhtml"    
	xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta name="description" content="SpiderNest Developers Great Responsive Websites at an Affordable price. SpiderNest Offers a Wide variety of Websites Starting at $300. When A Digital Presence is so Important Dont waste time Get Your Affordable Website Now.">
<!--ink to my style sheets for this page-->
<!--<link rel="stylesheet" type="text/css" href="http://www.spidernest.org/css/index.css">
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>SpiderNest Developers</title>
  <meta charset="utf-8">
  <meta name="og:image" content="http://www.spidernest.org/about/contacts.jpg"/>
  <meta property="og:title" content="SpiderNest"/>
  <meta property="og:url" content="http://www.SpiderNest.org/contacts.php"/>
  <meta property="og:site_name" content="SpiderNest"/>
  <meta property="og:type" content="blog"/>
  
  <meta property="og:description" content="Web Development Building Responsive Websites at an Affordable price. SpiderNest Offers a Wide variety of Websites Starting at $300. When A Digital Presence is so Important Dont waste time Get Your Affordable Website Now."/>
	


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
<STYLE>
.Slider {display:none;}

 /* The side navigation menu */
.sidenav {height: 100%; width: 0;position: fixed;z-index: 1;top: 0;left: 0;background-color: #fff;overflow-x: hidden;padding-top: 60px;transition: 0.5s;}

/* The navigation menu links */
.sidenav a {padding: 8px 8px 8px 32px;text-decoration: none;font-size: 25px;color: #818181;display: block;transition: 0.3s}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover, .offcanvas a:focus{color:#129a92;background-color:##ffffff;}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {position: absolute;top: 0;right: 25px;font-size: 36px;margin-left: 50px;}

/*Push Page to Side*/
#push {transition: margin-left .5s;padding: 20px;}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
<!--Btn Button color-->
.btn btn-default{background-color:#129a92; color:#fff}
.headctrl{position: absolute;top:10%;left:48%;transform: translate(-50%,-50%);font-size:30px;color:#129a92;text-shadow:2px 2px #000000;}
</STYLE>
</head>
<body>  
<!--SideBar Navigation with opacity-->
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="http://www.spidernest.org/index.php">HOME!</a>
  <a href="http://www.spidernest.org/portfolio.php">PORTFOLIO!</a>
  <a href="http://www.spidernest.org/blog.php">BLOGS!</a>
  <a href="http://www.spidernest.org/about.php">ABOUT!</a>
</div>


  <div class="some-cont some-cont" style="max-width:1400px">
  <img class="Slider" src="http://www.spidernest.org/img/contacts.jpg" height="500px" style="width:100%">
</div><br />
<div class="headctrl">
    <h1 align ="center">&lt;/CONTACT US!&gt;</h1>
    <p>Fast Response to Questions!</p>
</div><br /><br />
<span onclick="openNav()"><button style="background-color:#129a92; color:#FFFFFF;" type="button" class="btn">Browse</button></span>


<div id="push">


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("Slider");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); 
}
</script>

  
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center" ><font color="#129a92">Contact Us</font></h2>
  <div class="row">
    <div class="col-sm-5">
      <p ><font size="4"><strong>SpiderNest Developers</strong> Work hard to Build Your Website and  stay up to date on Technology whether it is Design,Site Functionality or Security We want to Deliver the Best Possible Product to our Customers.<br /> We offer a Set Variety of Expertise <ul><li>Web Design and Graphics</li> 
      <li>Responsive Interactive Websites</li> <li>Back end Functionality</li> <li>Website Security</li></ul>
       We Hope You Choose Us for your Digital Marketing Strategy.</font></p>
      <!--<p><span class="glyphicon glyphicon-map-marker"></span> , </p>-->
      <!--<p><span class="glyphicon glyphicon-phone"></span> +(555) 555-5555</p>-->
      <p>       <span class="glyphicon glyphicon-envelope"></span><strong> SpiderNest@gmail.com</strong></p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
         <input class="form-control" id="content" name="content" placeholder="What Type of Website?" type="content" required>
      </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-6 form-group" >
          
          <select class ="form-control" name="Selection" >
            <option value="Automotive">Select Type of Business</option>
            <option value="Automotive">Automotive</option>
            <option value="Beauty">Beauty</option>
            <option value="Customer service">Customer Service</option>
            <option value="Estate">Real-Estate</option>
            <option value="Financial Adviser">Financial Advisor</option>
            <option value="Food">Food</option>
            <option value="Home Services">Home Services</option>
            <option value="Insurance">Insurance</option>
            <option value="labor">Labor</option>
            <option value="Legal">Legal</option>
            <option value="Marketing">Marketing</option>
            <option value="Mortgage">Mortgage</option>
            <option value="Promotional">Promotional</option>
            <option value="sales">Sales</option>
            <option value="Technology">Technology</option>
            <option value="Wellness">Wellness</option>
            <option value="Wellness">Other</option>
         </select><br>
      </div>
      
      <div class="col-sm-6 form-group">
         <input class="form-control" id="country" name="country" placeholder="What Country are you from?" type="country" required>
      </div>
      <div class="col-sm-6 form-group">
         <input class="form-control" id="state" name="State" placeholder="Whats Your State/Province" type="state" required>
      </div>
     
      </div>
      <textarea class="form-control" id="comment" name="comments" placeholder="Questions or Comments About Your Future Website?" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button style="background-color:#129a92; color:#ffffff" type="button" class="btn">Submit Info</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script type="text/javascript">
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("push").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("push").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}
</script>
