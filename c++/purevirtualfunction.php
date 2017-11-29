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
	  </br><p class="normal">Purpose of Pure Virtual Function</p>
	  <pre>
	 Briefly, it's to make the class abstract, so that it can't be instantiated,
	  but a child class can override the pure virtual methods to form a concrete class.
	  This is a good way to define an interface in C++. This forces a derived class to define the function.
	  
	  A pure virtual function or pure virtual method is a virtual function 
	  that is required to be implemented by a derived class if the derived class is not abstract. 
	  Classes containing pure virtual methods are termed "abstract" and they cannot be instantiated directly.
		
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