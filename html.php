
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  
 
  
  
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
  
<style>
body {
  margin-top: 50px;
  background-color: #fff;
  font-family: Arial, sans-serif;
  font-size: 14px;
  letter-spacing: 0.01em;
  color: #39464e;
}

.navbar-default {
  background-color: #FFF;
  margin-left: 200px;
}

/*main side bar*/
.msb {
  width: 200px;
  background-color: #F5F7F9;
  position: fixed;
  left: 0;
  top: 0;
  right: auto;
  min-height: 100%;
  overflow-y: auto;
  white-space: nowrap;
  height: 100%;
  z-index: 1;
  border-right: 1px solid #ddd;
}
.msb .navbar {
  border: none;
  margin-left: 0;
  background-color: inherit;
}
.msb .navbar-header {
  width: 100%;
  border-bottom: 1px solid #e7e7e7;
  margin-bottom: 20px;
  background: #fff;
}
.msb .navbar-nav .panel {
  border: 0 none;
  box-shadow: none;
  margin: 0;
  background: inherit;
}
.msb .navbar-nav li {
  display: block;
  width: 100%;
}
.msb .navbar-nav li a {
  padding: 15px;
  color: #5f5f5f;
}
.msb .navbar-nav li a .glyphicon, .msb .navbar-nav li a .fa {
  margin-right: 8px;
}
.msb .nb {
  padding-top: 5px;
  padding-left: 10px;
  margin-bottom: 30px;
  overflow: hidden;
}

ul.nv,
ul.ns {
  position: relative;
  padding: 0;
  list-style: none;
}

.nv {
  /*ns: nav-sub*/
}
.nv li {
  display: block;
  position: relative;
}
.nv li::before {
  clear: both;
  content: "";
  display: table;
}
.nv li a {
  color: #444;
  padding: 10px 25px;
  display: block;
  vertical-align: middle;
}
.nv li a .ic {
  font-size: 16px;
  margin-right: 5px;
  font-weight: 300;
  display: inline-block;
}
.nv .ns li a {
  padding: 10px 50px;
}

/*main content wrapper*/
.mcw {
  margin-left: 200px;
  position: relative;
  min-height: 100%;
  /*content view*/
}
/*globals*/
a,
a:focus,
a:hover {
  text-decoration: none;
}

.inbox .container-fluid {
  padding-left: 0;
  padding-right: 0;
}
.inbox ul, .inbox li {
  margin: 0;
  padding: 0;
}
.inbox ul li {
  list-style: none;
}
.inbox ul li a {
  display: block;
  padding: 10px 20px;
}

.msb, .mnb {
  -moz-animation: slidein 300ms forwards;
  -o-animation: slidein 300ms forwards;
  -webkit-animation: slidein 300ms forwards;
  animation: slidein 300ms forwards;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.mcw {
  -moz-animation: bodyslidein 300ms forwards;
  -o-animation: bodyslidein 300ms forwards;
  -webkit-animation: bodyslidein 300ms forwards;
  animation: bodyslidein 300ms forwards;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

body.msb-x .mcw, body.msb-x .mnb {
  margin-left: 0;
  -moz-animation: bodyslideout 300ms forwards;
  -o-animation: bodyslideout 300ms forwards;
  -webkit-animation: bodyslideout 300ms forwards;
  animation: bodyslideout 300ms forwards;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
body.msb-x .msb {
  -moz-animation: slideout 300ms forwards;
  -o-animation: slideout 300ms forwards;
  -webkit-animation: slideout 300ms forwards;
  animation: slideout 300ms forwards;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

/* Slide in animation */
@-moz-keyframes slidein {
  0% {
    left: -200px;
  }
  100% {
    left: 0;
  }
}
@-webkit-keyframes slidein {
  0% {
    left: -200px;
  }
  100% {
    left: 0;
  }
}
@keyframes slidein {
  0% {
    left: -200px;
  }
  100% {
    left: 0;
  }
}
@-moz-keyframes slideout {
  0% {
    left: 0;
  }
  100% {
    left: -200px;
  }
}
@-webkit-keyframes slideout {
  0% {
    left: 0;
  }
  100% {
    left: -200px;
  }
}
@keyframes slideout {
  0% {
    left: 0;
  }
  100% {
    left: -200px;
  }
}
@-moz-keyframes bodyslidein {
  0% {
    left: 0;
  }
  100% {
    margin-left: 200px;
  }
}
@-webkit-keyframes bodyslidein {
  0% {
    left: 0;
  }
  100% {
    left: 0;
  }
}
@keyframes bodyslidein {
  0% {
    margin-left: 0;
  }
  100% {
    margin-left: 200px;
  }
}
@-moz-keyframes bodyslideout {
  0% {
    margin-left: 200px;
  }
  100% {
    margin-right: 0;
  }
}
@-webkit-keyframes bodyslideout {
  0% {
    margin-left: 200px;
  }
  100% {
    margin-left: 0;
  }
}
@keyframes bodyslideout {
  0% {
    margin-left: 200px;
  }
  100% {
    margin-left: 0;
  }
}
</style>

 

  
  
</head>

<body translate="no">
  <nav class="mnb navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        
      
      </button>
      <div style="padding: 15px 0;">
         <a href="#" id="msbo"><i class="ic fa fa-bars"></i></a>
      </div>
   
  </div>
</nav>
<!--msb: main sidebar-->
<div class="msb" id="msb">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div class="brand-wrapper">
                    <!-- Brand -->
                    <div class="brand-name-wrapper">
                        <a class="navbar-brand" href="#">
                             LG
                        </a>
                    </div>

                </div>

            </div>

            <!-- Main Menu -->
            <div class="side-menu-container">
                <ul class="nav navbar-nav">

                    <li> <a class="tablinks" onclick="openCity(event, 'London')"><i class="fa fa-dashboard" ></i> Dashboard</a></li>
                    <li class=""><a class="tablinks" onclick="openCity(event, 'Paris')"><i class="fa fa-puzzle-piece"></i> Components</a></li>
                    <li><a class="tablinks" onclick="openCity(event, 'Tokyo')"><i class="fa fa-heart"></i> Extras</a></li>
                    <li ><a class="tablinks" onclick="openCity(event, 'india')"><i class="fa fa-diamond"></i> Apps</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>
                </ul>
            </div> 
        </nav>  
</div>
 

    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
      <script id="rendered-js" >
(function () {
  $('#msbo').on('click', function () {
    $('body').toggleClass('msb-x');
  });
})();
//# sourceURL=pen.js
    </script>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
 
 
 
<div class="container">
<h2>Tabs</h2>
<p>Click on the buttons inside the tabbed menu:</p>


<div id="London" class="tabcontent">
  <h3>London</h3>
  <?php include "create.php";?>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
   <?php include "update.php";?>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  

</div>
<div id="india" class="tabcontent">
  <h3>india</h3>
  <?php include "read.php";?>
</div>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
 



  
</body>

</html>