
<!-- PHP Script for City Dropdown List -->
<?php
require_once "../database/db_connect.php";

$sql = "SELECT DISTINCT City_Name  FROM city_table";
$result = mysqli_query($conn, $sql);

?>
<!-- City Dropdown List End-->

<!DOCTYPE html>
<html lang="zxx">
<head>
<!-- meta tag -->
<meta charset="utf-8">
<title>List of Citiies in all over Pakistan </title>
<meta name="description" content="">
<!-- responsive tag -->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- favicon -->
<link rel="apple-touch-icon" href="apple-touch-icon.html">
<!-- PHP file for Style Links -->
<?php
require_once "php/style_links.php";
?>
<script src="js/selectCity.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<style>
.course-title img {
height: 100px;
float: right;
}
@media only screen and (max-width: 768px) {
.course-title img {
display: none;
}
}
</style>

</head>
<body class="inner-page">
<!-- PHP file for Pre-Loader -->
<?php
    // require_once "php/preLoader.php";
?>

<!--Full width header Start-->
<div class="full-width-header">
<!--Header Start-->
<header id="rs-header-2" class="rs-header-2">
<!-- Menu Start -->
<div class="menu-area menu-sticky">
<div class="container">
<div class="row rs-vertical-middle">
<div class="col-lg-3 col-md-12">
<div class="logo-area">
<a href="index-2.html"><img src="images/logo-white.png" alt="logo"></a>
</div>
</div>
<div class="col-lg-9 col-md-12 relative">
<div class="main-menu">
<a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
<nav class="rs-menu">
<ul class="nav-menu">
<!-- Home -->
<li class="menu-item-has-children"> <a href="index.php" class="home">Home</a>
</li>
<!-- End Home --> 

<!--About Menu Start-->
<li class="menu-item-has-children"><a href="universities.html">Universities</a>
</li>
<!--About Menu End--> 

<!-- Drop Down -->
<li class="current-menu-item current_page_item menu-item-has-children"> <a href="#">Pages</a>
</li>
<!--End Icons -->

<!--Courses Menu Start-->
<li class="menu-item-has-children"> <a href="#">Courses</a>
</li>
<!--Courses Menu End-->

<!--Events Menu Start-->
<li class="menu-item-has-children"> <a href="#">Events</a>
</li>
<!--Events Menu End-->

<!--blog Menu Start-->
<li class="menu-item-has-children"> <a href="#">Blog</a>
</li>
<!--blog Menu End-->

<!--Contact Menu Start-->
<li> <a href="contact.html">Contact</a></li>
<!--Contact Menu End-->
</ul>
</nav>
</div>
</div>													
</div>
</div>
</div>
<!-- Menu End -->
</header>
<!--Header End-->

</div>
<!--Full width header End-->

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
<div class="breadcrumbs-inner">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1 class="page-title">List of Cities in Pakistan</h1>
</div>
</div>
</div>
</div>
</div>
<!-- Breadcrumbs End -->

<!-- Filter Section for Cities -->
<!-- Search Courses Start -->
<div class="rs-search-courses">
    <div class="container">
    <form class="row search-form">
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
        <div class="level">
            <select id="city" onchange = "selectCity()">
                <option disabled selected hidden>Select Discipline</option>
                <?php while ($rows = mysqli_fetch_array($result)) { ?>
                    <option value="<?php echo $rows["City_Name"]; ?>"> <?php echo $rows["City_Name"]; ?> </option>
                <?php } ?>
            </select>
        </div>
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
        </div>
    </form>
    </div>
</div>
<!-- Filter Section End -->

<!-- Dropdown List for cities -->
<!-- <table>
    <tbody id="show"></tbody>
</table> -->
<!-- Dropdown for Cities End -->


<!-- Listed Cities Start -->
<div id="rs-courses-2" class="rs-courses-2 sec-color">
<div class="container">
<div class="row">
<div class="sec-title-2 text-center pt-5">
<h2>List of Cities for Universities in Pakistan</h2>
</div>

<div id="show" class="d-inline">

</div>

<div class="col-lg-4 col-md-6 col-sm-12" >
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="islamabad-universities.html">Islamabad <br> (Capital)</a></h4>
<a href="islamabad-universities.html" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title">
<img src="images/universities-logo/comsats.png">
<a href="comsats.html" target="_blank">COMSATS University <br> Islamabad</a>
</h4>
<a href="comsats.html" target="_blank" class="cource-btn">Visit University</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title">
<img src="images/universities-logo/air-university.png">
<a href="air-university.html" target="_blank">Air University <br> Islamabad</a>
</h4>
<a href="air-university.html" target="_blank" class="cource-btn">Visit University</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title">
<img src="images/universities-logo/allama-iqbal-university.png">
<a href="allama-iqbal-university.html">Allama Iqbal Open University</a>
</h4>
<a href="allama-iqbal-university.html" class="cource-btn">Visit University</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title">
<img src="images/universities-logo/bahria-university.png">
<a href="bahria-university.html" target = "_blank">Bahria University <br> Islamabad</a>
</h4>
<a href="bahria-university.html" target = "_blank" class="cource-btn">Visit University</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title">
<img src="images/universities-logo/capital-university.png">
<a href="capital-university.html" target = "_blank">Capital University (CUST)</a></h4>
<a href="capital-university.html" target = "_blank" class="cource-btn">Visit University</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title">
<img src="images/universities-logo/federal-urdu-university.png">
<a href="Federeal-university.html" target = "_blank">Federal Urdu University (FUUAST)</a></h4>
<a href="Federeal-university.html" target = "_blank" class="cource-btn">Visit University</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="rawalpindi-universities.html">Rawalpindi <br> (Punjab)</a></h4>
<a href="rawalpindi-universities.html" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="lahore-universities.html">Lahore <br> (Punjab)
</a></h4>
<a href="lahore-universities.html" class="cource-btn">Explore</a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Listed Citites End -->

<!--Coming Soon List of Cities Start -->
<div id="rs-courses-2" class="rs-courses-2 sec-color">
<div class="container">
<div class="row">
<div class="sec-title-2 text-center pt-5">
<h2>Coming Soon for these Cities <p>(Working on that Project)</p></h2>
</div>

<div class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Abbottabad <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Bagh (Azad Kashmir)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Bannu <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Bhit Shah <br> (Sindh)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Bahawal Pur (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Bhera <br> (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Bhimber (Azad Kashmir)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Buner <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Chitral <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Chakwal <br> (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Charsadda <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Dera Ghazi Khan (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Dera Ismail Khan (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Faisalabad <br> (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Gilgit <br> (Baltistan)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Gujranwala <br> (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Gujrat <br> (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Gwadar (Balochistan)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Haripur <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Hyderabad <br> (Sindh)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Jhang <br> (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Jamshoro <br> (Sindh)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Karak <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Karachi <br> (Sindh)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Khairpur <br> (Sindh)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Khuzdar (Balochistan)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Kotli <br> (Azad Kasmir)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Kohat <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Lasbela (Balochistan)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Lakki Marwat <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Larkana <br> (Sindh)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>


<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Loralai (Balochistan)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Malakand <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Mirpur (Azad Kahmir)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Mianwali <br> (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Muzaffarabad (Azad Kasmir)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Mandi Bahauddin (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Mirpur Khas <br> (Sindh)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Mardan <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Mansehra <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Multan <br> (Punjab) </a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Nerian Sharif (Azad Kasmir)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Nowshera <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Narowal <br> (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Okara <br> (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4     ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Peshawar <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Poonch (Azad Kasmir)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Quetta (Balochistan)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Rahim Yar Khan (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Sahiwal <br> (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Swat <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Sibi <br> (Balochistan)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Sargodha <br> (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>


<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Swabi <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Sukkur <br> (Sindh)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Shikarpur <br> (Sindh)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>


<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Skardu <br> (Baltistan)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Sialkot <br> (Punjab)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Turbat <br> (Balochistan)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Tando Muhammad Khan (Sindh)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

<div  class="col-lg-3 col-md-4    ">
<div class="cource-item">
<div class="course-body">
<h4 class="course-title"><a href="courses-details.html">Upper Dir <br> (KPK)</a></h4>
<a href="#" class="cource-btn">Explore</a>
</div>
</div>
</div>

</div>
</div>
</div>
<!-- List of Cities End -->

<!-- Footer Start -->
<footer id="rs-footer" class="bg3 rs-footer">
<div class="container">

<!-- Footer Top -->
<?php
require_once "php/footer_top.php";
?>

<!-- start scrollUp  -->
<div id="scrollUp">
<i class="fa fa-angle-up"></i>
</div>

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true" class="fa fa-close"></span>
</button>
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="search-block clearfix">
<form>
<div class="form-group">
<input class="form-control" placeholder="eg: Computer Technology" type="text">
</div>
</form>
</div>
</div>
</div>
</div>
<!-- Search Modal End -->

<!-- modernizr js -->
<script src="js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="js/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- slick.min js -->
<script src="js/slick.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="js/imagesloaded.pkgd.min.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- counter top js -->
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<!-- magnific popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- rsmenu js -->
<script src="js/rsmenu-main.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>
</html>