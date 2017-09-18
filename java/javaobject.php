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
		<?php include 'javamenu.php';?>
		</div>
    </div>
    <div class="col-sm-8">
      <h3>Java Object</h3>
      <p>The Java Objects are created by calling the constructors of the Class.</p></br>
	  <p><b>How Objects Behave?</b></p>
	  <p>All Objects have the <b>State</b> and <b>behaviour<b>.</p><br>
	  <p>State affects behaviour and behaviour affects State.</p></br>
	  <p>For brief description:In the Class has variables and Methods.At First Objects are made by forming the instance of the
	  class by assigning the values to the variables through the methods or the behaviour of the method changes by changing the value of the variables.</p>
	  <p><b>Every class in Java extends	class Object.</b></p>
	  <p>Class Object is the mother of all classes.It is the superclass of everything.</p></br>
	  <p>Any class that doesn’t explicitly extend another class, implicitly extends Object.</p>
	 <div class="row">
	  <div class="col-sm-2">
	  <form action="javaclass.php" method="post">
	  <div class="form-group">
        <div class="col-md-offset-2 col-sm-2">
          <div class="submit">
            <label>
			  <button type="submit" class="btn btn-default">Prev</button>
          </div>
        </div>
      </div>
	  </form>
	  </div>
	  <div class="col-sm-10">
	  <form action="javainterface.php" method="post">
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
<?php include 'javafooter.php';?>
</div>