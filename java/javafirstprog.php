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
      <h3>First Java Program</h3>
      <p>Let start learning to write Java Program</br>
	  This Simple Java Program just print "Hello, Welcome to Java Programming."</p></br>
	  <pre>public class FirstJavaProg {
	  public static void main(String[] args) {
	  System.out.println("Hello, Welcome to Java Programming.");
	}
  }</pre>
	  <h4>How to run a Java Program?</h4>
	  <p>Just copy the above program and paste it in a file named as <b>FirstJavaProg.java</b></p></br>
	  <p><b>Note:</b>The name of the source File is same as the class Name which has the main method</p>
	  <p>Compile the class as javac FirstJavaProg.java</p><br>
	  <p>After Compilation, run as java FirstJavaProg</p><br>
	  <p>Output is displayed as "Hello, Welcome to Java Programming."</p>
	  
	 <div class="row">
	  <div class="col-sm-2">
	  <form action="javabasics.php" method="post">
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
	  <form action="javacodestructure.php" method="post">
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