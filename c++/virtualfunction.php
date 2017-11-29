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
	  </br><p class="normal">C++ is a general-purpose object-oriented programming (OOP) language, developed by Bjarne Stroustrup, and is an extension of the C language.</p>
	  <br><p class="normal"> It is therefore possible to code C++ in a "C style" or "object-oriented style."</p>
	  <pre>
	  A virtual function is a member function that you expect to be redefined in derived classes. 
	  When you refer to a derived class object using a pointer or a reference to the base class, 
	  you can call a virtual function for that object and execute the derived class's version of the function.
		
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