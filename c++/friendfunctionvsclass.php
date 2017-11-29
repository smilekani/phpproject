<?php
<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
		<div>
		<?php include 'cplusmenu.php';?>
		</div>
    </div>
    <div class="col-sm-8">
      <h3>C++ Basics</h3>
	  <h2>C++</h2>
      <p class="normal" class="normal">C++</p>
	  </br><p class="normal">Friend Function Vs Friend Class</p>
	  <pre>
	    For the function, just that one function gets access to private members. 
	    
	    For a class, the whole class and all its functions get access to the private members of the befriended class.
	    
	    Friend functions and friend classes are used to access private and protected data members of any class in which it is declared as Friend.
		
	  </pre>
	 <div class="row">
	  <div class="col-sm-2">
	  <form action="javabasic.php" method="post">
	  <div class="form-group">
        <div class="col-md-offset-2 col-sm-2">
          <div class="submit">
            <label>
			  <button type="submit" class="btn btn-default" disabled>Prev</button>
          </div>
        </div>
      </div>
	  </form>
	  </div>
	  <div class="col-sm-10">
	  <form action="javafirstprog.php" method="post">
	  <div class="form-group">
        <div class="col-md-offset-10 col-sm-2">
          <div class="submit">
            <label>
			  <button type="submit" class="btn btn-default">Next</button>
          </div>
        </div>
      </div>
	  </form>
	  </div>
    </div>
	</div>
<div>
<?php include 'cplusplusfooter.php';?>
</div>