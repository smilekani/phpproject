<!DOCTYPE html>
<html lang="en">
<head>
  <title>kani Tutorial</title>
  <form id="searchForm" action="javascript:search();">
   <div class="input-group">
      <button id="go" class="btn btn-default" type="button" 
              onclick="document.getElementById('searchForm').submit(); return false;">
      </button>
      <input type="text" id="searchItem" class="form-control" placeholder="Suchbegriff">
   </div>
</form>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/trs.css">
  <script src="jquery/jquery-3.2.1.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script>
function search() {
 
   var name = document.getElementById("searchForm").elements["searchItem"].value;
   var pattern = name.toLowerCase();
   var targetId = "";
 
   var divs = document.getElementsByClassName("col-md-2");
   for (var i = 0; i < divs.length; i++) {
      var para = divs[i].getElementsByTagName("p");
      var index = para[0].innerText.toLowerCase().indexOf(pattern);
      if (index != -1) {
         targetId = divs[i].parentNode.id;
         document.getElementById(targetId).scrollIntoView();
         break;
      }
   }  
}
</script>
</head>
<body>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
	  <div class="col-sm-8">
	  <form action="java/javabasics.php" method="post">
	  <div class="form-group">
        <div class="col-md-offset-2 col-sm-2">
		  <a href="apache/apachebasics.php"><img class="img-responsive" src="images/Java.png" alt="Apache Tutorial"></a>
          <a href="biology/biologybasics.php"><img class="img-responsive" src="images/Java.png" alt="Biology"></a>
          <a href="botany/botanybasics.php"><img class="img-responsive" src="images/Java.png" alt="Botany"></a>
          <a href="BPM/bpmbasics.php"><img class="img-responsive" src="images/Java.png" alt="BPM"></a>
          <a href="c/cbasics.php"><img class="img-responsive" src="images/Java.png" alt="C"></a>
          <a href="c++/cpluscplusbasics.php"><img class="img-responsive" src="images/Java.png" alt="C++"></a>
          <a href="civics/civicsbasics.php"><img class="img-responsive" src="images/Java.png" alt="Civics"></a>
          <a href="chemistry/chemistrybasics.php"><img class="img-responsive" src="images/Java.png" alt="Chemistry"></a>
		  <a href="english/englishgrammerbasics.php"><img class="img-responsive" src="images/Java.png" alt="English"></a>
          <a href="eclipse/eclipsebasics.php"><img class="img-responsive" src="images/Java.png" alt="Eclipse"></a>
          <a href="embedded/emdeddedbasics.php"><img class="img-responsive" src="images/Java.png" alt="Embedded"></a>
          <a href="finance/financebasics.php"><img class="img-responsive" src="images/Java.png" alt="Finance"></a>
		  <a href="grewords/lettera.php"><img class="img-responsive" src="images/Java.png" alt="GRE Words"></a>
		  <a href="geography/geographybasics.php"><img class="img-responsive" src="images/Java.png" alt="Geography"></a>
		  <a href="hbase/hbasebasics.php"><img class="img-responsive" src="images/Java.png" alt="Hbase"></a>
		  <a href="history/historybasics.php"><img class="img-responsive" src="images/Java.png" alt="History"></a>
          <a href="html/htmlintro.php"><img class="img-responsive" src="images/Java.png" alt="HTML"></a>
		  <a href="interviewquestions/interviewbasics.php"><img class="img-responsive" src="images/Java.png" alt="Interview Questions"></a>
		  <a href="java/javabasics.php"><img class="img-responsive" src="images/Java.png" alt="Java Tutorial"></a>
		  <a href="javascript/javascriptbasics.php"><img class="img-responsive" src="images/Java.png" alt="JavaScript"></a>
		  <a href="jobs/jobsbasics.php"><img class="img-responsive" src="images/Java.png" alt="Jobs"></a>
		  <a href="karaf/karafbasics.php"><img class="img-responsive" src="images/Java.png" alt="Karaf"></a>
		  <a href="linux/linuxbasics.php"><img class="img-responsive" src="images/Java.png" alt="Linux"></a>
		  <a href="mapr/maprbasics.php"><img class="img-responsive" src="images/Java.png" alt="Mapr"></a>
		  <a href="maths/mathsbasics.php"><img class="img-responsive" src="images/Java.png" alt="Maths"></a>
		  <a href="mysql/mysqlbasics.php"><img class="img-responsive" src="images/Java.png" alt="MySql"></a>
		  <a href="osgi/osgibasics.php"><img class="img-responsive" src="images/Java.png" alt="OSGI"></a>
		  <a href="php/phpbasics.php"><img class="img-responsive" src="images/Java.png" alt="PHP"></a>
		  <a href="perl/perlbasics.php"><img class="img-responsive" src="images/Java.png" alt="Perl"></a>
		  <a href="python/pythonbasics.php"><img class="img-responsive" src="images/Java.png" alt="Python"></a>
		  <a href="social/socialbasics.php"><img class="img-responsive" src="images/Java.png" alt="Social"></a>
		  <a href="science/sciencebasics.php"><img class="img-responsive" src="images/Java.png" alt="Science"></a>
		  <a href="telecom/telecombasics.php"><img class="img-responsive" src="images/Java.png" alt="Telecom"></a>
		  <a href="zoology/zoologybasics.php"><img class="img-responsive" src="images/Java.png" alt="Zoology"></a>
        </div>
      </div>
	  </form>
	  </div>
    <div class="col-sm-2">
      <h3>Related Topics</h3>        
      <p></p>
    </div>
  </div>
</div>

</body>
</html>