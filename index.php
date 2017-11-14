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
		  <a href="java/javabasics.php"><img class="img-responsive" src="images/Java.png" alt="Java Tutorial"></a>
		  <a href="grewords/lettera.php"><img class="img-responsive" src="images/Java.png" alt="GRE Words"></a>
		  <a href="english/englishgrammerbasics.php"><img class="img-responsive" src="images/Java.png" alt="English"></a>
		  <a href="html/htmlintro.php"><img class="img-responsive" src="images/Java.png" alt="HTML"></a>
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