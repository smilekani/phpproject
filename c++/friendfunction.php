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
	  </br><p class="normal">Friend Function</p>
	  <pre>
	    A friend function of a class is defined outside that class' scope but it has the right to access all private and protected members of the class. 
	    Even though the prototypes for friend functions appear in the class definition, friends are not member functions.
	    
	    In object-oriented programming, a friend function, that is a "friend" of a given class,
	    is a function that is given the same access as methods to private and protected data. 
	    
	    A friend function is declared by the class that is granting access, so friend functions are part of the class interface, like methods.
		
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