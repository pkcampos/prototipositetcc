<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Search</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/script.js"></script> 
     <script src="js/jquery.horizontalNav.js"></script>
     <script src="js/superfish.js"></script>
     <script src="search/search.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script>
      $(document).ready(function(){

      $().UItoTop({ easingType: 'easeOutQuart' });

$('.full-width').horizontalNav({});
    });
     </script>
     <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
     </head>
     <body class="page1">
       
<!--==============================header=================================-->
 <header class="mb0"> 
  <div class="container_24">
          <div class="grid_9"> <h1><a href="index.html"><img src="images/logo.png" alt="Trump Business co."></a> </h1></div>
          <div class="grid_9 fright"> <div class="search_block">
               <form id="search" action="search.php" method="GET"  accept-charset="utf-8">
            <input type="text" name="s" />
            <a onclick="document.getElementById('search').submit()">search</a>
          </form></div></div>          
     <div class="clear"></div>
  </div>
  <div class="header_bot">
    <div class="container_24">
      <div class="grid_24">
         <div class="menu_block">
           <nav  class="horizontal-nav full-width horizontalNav-notprocessed" >
            <ul class="sf-menu">
                   <li class=""><a href="index.html">Home </a></li>
                   <li class="whith_ul "><a href="index-1.html">About district</a><ul>
                        <li><a href="#">District Information</a></li>
                       
                        <li><a href="#">District  Goals</a></li>
                        <li><a href="#">District  Strategies</a></li>
                        <li><a href="#">Educational Service Centers</a></li>
                         <li><a href="#">Facilities</a>
                          <ul>
                            <li><a href="#">Facilities Initiatives</a></li>
                            <li><a href="#">Facilities Branches</a></li>
                            <li><a href="#">Community</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Fingertip Facts</a></li>
                     </ul></li>
                   <li><a href="index-2.html">Departments</a></li>
                   <li><a href="index-3.html">Staff</a></li>
                   <li><a href="index-4.html">Blog </a></li>
                   <li><a href="index-5.html">Contacts</a></li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>

     </div>
      </div>
    </div>
</header>
<!--=======content================================-->
<div class="content">
  <div class="container_24 privacy">
    	<div class="grid_24">
         <h3>Search result:</h3>
			   <div id="search-results"></div>
      </div>
  <div class="clear"></div>
</div>
</div>

<!--==============================footer=================================-->

  <footer>
       <div class="copy">
           <div class="container_24">
      <div class="grid_24">
       <span>US School District</span>&nbsp; &copy; &nbsp;2013&nbsp; All Rights Reserved &nbsp; &nbsp;|&nbsp;&nbsp; <a href="index-6.html">Privacy Policy</a>
       </div>
       <div class="clear"></div>
      </div>
    </div>
  </footer>
</body>
</html>