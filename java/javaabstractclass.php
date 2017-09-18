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
      <h3><b>Abstract class</b></h3>
	  <p>Abstract class is the class that cannot be instantiated</p>
	  <h3><b>Concrete class</b></h3>
	  <p>The class that are enough to be instantiated are called <b> Concrete </b> class.</p>
	  <h3><b>Abstract Vs Concrete</b></h3>
	  <p>Abstract class are marked by the keyword <b>"abstract"<b> before the class declaration.</p><br>
	  <p>The class declaration which does not have abstract keyword are not Concrete classes.The methods also does not has the keyword abstract, then only the 
	  class is enough to be instantiated and such classes are called Concrete Clasess.</p></br>
	  <p>An <b>abstract class</b> has virtually* no use, no value, no
		purpose in life, unless it is <b>extended.</b></p></br>
	  <p>With an abstract class, the guys doing the work at runtime
		are instances of a subclass of your abstract class.</p></br>
	  <p><b>If you declare an abstract method, you MUST
		mark the class abstract as well. You can’t have
		an abstract method in a non-abstract class.</b></p><br>
		<p>Implementing an abstract method is just like overriding a method.</p>
	 <div class="row">
	  <div class="col-sm-2">
	  <form action="javainterface.php" method="post">
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
	  <form action="javapolymorphism.php" method="post">
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