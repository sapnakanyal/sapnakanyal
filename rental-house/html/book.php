<?php
$con=mysqli_connect("localhost","root","","house");
?>

<!doctype html>
<html>
<head>
<meta name="author"content="himanshu" />
<meta name="description"content="house Rental system" />
<meta name="keywords"content="give ur keyword for SEO" />
<title>HOUSE RENTAL SYSTEM</title>
<style>

 *{
	padding:0 0;
	margin :0 0;
}
body
{
font-family: arial ,sana-seriff;
line-height: 25px;
}



.wrapper{
	
	width:100%;	
	marin:0 auto;
	padding:1% 1%;
	align: left;
}
.clearfix:after
{
content: " ";
visibility:hidden;
display:block;
height:0;
clear:both;
}


.header
{
background-color:darkblue;
color:white;
}


/*css for menu*/


.menu ul
{
list-style-type:none;
 }

.menu ul a
{
color:darkblue;
text-decoration:none;
padding:1%;
}

.menu ul a:hover
{
background-color:blue;
color:white;
}


.menu li
{
display:inline;
 }




/*css for main body*/


.main
{
margin: 1% 0;
}

.margin h2
{
color:purpule;
}

.houses
{
width:22.5%;
border:1px solid grey;
margin:1%;
float:left;
text-align:center;
}

.houses:hover
{
box-shadow:0 0 3px 3px silver;
}

.houses img
{
width:100%;
}

.houses .House-title
{
font-weight:bold;
color:darkblue;
padding:1%;

}

.house-price{
font-size:120;
color:goldenrod;
padding:1%;
}

.houses .House-added {
font-weight:lighter;
font-size:90%;
color:darkblue;
padding:1%;

}

.houses .House-location{
font-weight:lighter;
font-size:90%;
color:darkblue;
padding:1%;

}

.houses .btn-book{
padding:3%;
margin:3%;
background-color:purple;
color:white;
border:none;
}

.houses .btn-book:hover{
background-color:darkblue;

}

.book-house img{
width:40%;
float:left;
margin:2% 2% 2% 0;
}

.book-house h2{
text-align:center;
margin:2%;
text-decoration:underline;
}

.book-house p{
text-align:justify;
padding:1%;
line-height:30px;
color:#394d6d;
}

.main .booking-details{
width:50%;
margin:0 auto;
border:2px solid darkblue;
padding:2%;
margin:2px auto;
}


.main .booking-details h2{
margin-bottom:2%;
}


.main .booking-details .name{
width:18%;
float:left;
}

.main .booking-details input[type='text'],.main .booking-details input[type='email'],
.main .booking-details input[type='tel'],.main .booking-details textarea{
padding:1%;
margin:0.5%;
width:75%;
}

.main .booking-details input[type='submit']
{
padding:2%;
background-color:darkblue;
color:white;
border:none;
margin-left:21%;
}

.main .booking-details input[type='submit']:hover{

box-shadow:0 0  7px 5px black;
}


.main .booking-details input[type='reset']:hover{

box-shadow:0 0 7px 5px red;
}



.main .booking-details input[type='reset']
{
padding:2%;
background-color:darkred;
color:white;
border:none;
}




/*css for footer*/

.footer
{
background-color:darkblue;
color:white;
}


.footer p{
text-align:center;
}


.footer p a
{ color:lightblue;}


.footer p a:hover
{ 
text-decoration:none;
}



.footer p 
{ text-decoration:none;}


</style>

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="../slider/room slider/engine1/style.css" />
<script type="text/javascript" src="../slider/room slider/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->



</head>
<body>
<header class="header">
<div class="wrapper">
<h1>HOUSE RENTAL SYSTEM</h1>

</div>
</header>
<!--header ends here-->


<!--Menu starts here-->
<nav class="menu">
<div class="wrapper">
<ul> 
<a href="index.html"><li>Home</li></a>
<a href="about.html"><li>About Us</li></a>
<a href="#"><li>Houses</li></a>
<a href="contact.html"><li>Contact Us</li></a>
<a href="logi.php"><li>Log In</li></a>

</ul>
</div>
</nav>
<!--Menu Ends Here-->


<!--Main Body  Starts here-->


<div class="main">
<div class="wrapper">
<div class="book-house">
<h2>House Name</h2>

<!--House Data Here -->
<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="../slider/room slider/data1/images/9.jpg" alt="3 BHK Room Set" title="3 BHK Room Set" id="wows1_0"/></li>
		<li><img src="../slider/room slider/data1/images/10.jpg" alt="Fully Furnished" title="Fully Furnished" id="wows1_1"/></li>
		<li><a href="http://wowslider.net"><img src="../slider/room slider/data1/images/13.jpg" alt="wowslider.net" title="Best Environment" id="wows1_2"/></a></li>
		<li><img src="../slider/room slider/data1/images/14.jpg" alt="Great Look" title="Great Look" id="wows1_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="3 BHK Room Set"><span><img src="../slider/room slider/data1/tooltips/9.jpg" alt="3 BHK Room Set"/>1</span></a>
		<a href="#" title="Fully Furnished"><span><img src="../slider/room slider/data1/tooltips/10.jpg" alt="Fully Furnished"/>2</span></a>
		<a href="#" title="Best Environment"><span><img src="../slider/room slider/data1/tooltips/13.jpg" alt="Best Environment"/>3</span></a>
		<a href="#" title="Great Look"><span><img src="../slider/room slider/data1/tooltips/14.jpg" alt="Great Look"/>4</span></a>
	</div></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="../slider/room slider/engine1/wowslider.js"></script>
<script type="text/javascript" src="../slider/room slider/engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->





<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>
<span class="house-price">INR 7000</span>
<p>
With modernization there is a growing number of nuclear families, in which each couple occupies its own house after marriage,
 in urban areas. It is still rare, albeit not impossible, amongst traditional communities for senior citizens to live alone. 
It is extremely rare even in urban areas for couples to live together before marriage. 
Some single young adults live in same-sex dormitories or in shared accommodation during college and the early working years.

With modernization there is a growing number of nuclear families, in which each couple occupies its own house after marriage,
 in urban areas. It is still rare, albeit not impossible, amongst traditional communities for senior citizens to live alone. 
It is extremely rare even in urban areas for couples to live together before marriage. 
Some single young adults live in same-sex dormitories or in shared accommodation during college and the early working years.
It is extremely rare even in urban areas for couples to live together before marriage. 
Some single young adults live in same-sex dormitories or in shared accommodation during college and the early working years.


</p>
</div>

<!--client booking details entry-->

<div class="booking-details">
<h2>Your Booking details</h2>
<form action=book.php method=post>
<span class ="name">First Name </span>
<input type="text" name="first_name" placeholder="Enter First Name "/><br/>


<span class ="name">Last Name </span>
<input type="text" name="last_name" placeholder="Enter Last Name "/><br/>


<span class ="name">E-Mail </span>
<input type="email" name="email" placeholder="Enter E-Mail "/><br/>


<span class ="name">Contact no. </span>
<input type="tel" name="contact" placeholder="Enter Contact No. "/><br/>


<span class ="name">Address </span>
<textarea name="address"placeholder="Your Address Please"></textarea><br/>


<input type="submit" name="submit" placeholder="BOOK NOW"/>
<input type="reset" name="reset" placeholder="RESET"/>
</form>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$sql="Insert into book values('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[contact]','$_POST[address]')";
mysqli_query($con,$sql);
echo "<h1 color='red'>".'Registered Successfully!'."</h1>";
}
?>








</div>
</div>
</div>
<!--main body ends here-->


<!--footer starts here-->


<footer class="footer">
<div class="wrapper">
<p>&copy:<a href="#">House Rental System</a>.All rights reserved 2018</p>
</div>

</footer>
<!--footer ends here-->
</body>
</html>