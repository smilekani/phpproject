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
      <h3><b>Static Variables</b></h3>
	  <p>All static variables in a class are Initialized before any object of that class can be created.</p><br>
	  <h3><b>Final Variables</b></h3>
	  <p>A variable marked final means that once initialized it can never change.</p></br>
	  <h3>Static Final Variables</h3>
	  <p>The value of the static final variable will stay the same as long as the class is loaded:
	  Look up Math.PI in the API, and you'll find:
		public static final double PI = 3.141592653589793;</p>
	 <div class="row">
	  <div class="col-sm-2">
	  <form action="javapolymorphism.php" method="post">
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
	  <form action="javastaticandfinal.php" method="post">
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