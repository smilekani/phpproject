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
      <h3>Usittg the Library (the Java API)</h3>
	  <p>In the Java API, the classes are grouped into packages.</p></br>
	  <p>To use a class in the API. you have to know which package the class Is in.</p></br>
	  <p>Every class in theJava library belongs to a package. The package has a name, like javax.swlng 
	  (a package that holds some ofthe Swing GUI classes you'll learn about soon). ArrayList is in the package called java.util,
	  which surprise surprise, holds a pile of utilityclasses<p></br>
	  <p>Even if you didn't know it, you've already been using classesfrom a package. 
	  System (System.out.println), String, and Math (Math.random0), all belong to the java.lang package.</p></br>
	  <p>You have to know the full name* -of the class you want to use in your code.</p></br>
	  <p>You have to tell Java which ArrayList you want to use. You have two options:</br>
	  A.IMPORT</br>
	  Put an import statement at the top ofyour source code file: import java.util.ArrayList; public class MyClass {... }</p><br>
	  <p> TYPE Type the full name everywhere in your code. Each time you use it. Anywhere you use it.</br>
	  
	  When you declare and/or instantlate It: </br>
	  java.util.ArrayList<Doq> list = new java.util.ArrayList<Dog>();</br>
	  
	When you use it as an argument type:
	public void go(java.util.Arraytist<Dog> list) { }</br>
	
	When you use it as a return type:
	public java.util.Arraytist<Doq> fooO { .. . }</p>

	 <div class="row">
	  <div class="col-sm-2">
	  <form action="javaobject.php" method="post">
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
	  <form action="javaabstractclass.php" method="post">
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