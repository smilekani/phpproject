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
      <h3>Java Inheritance</h3>
      <p class="normal"><b>Understanding Inheritance</b></p></br>
	  <p class="normal">When you design with inheritance, you put common code in a class and then tell other more specific classes that the common
	  (more abstract) class is their superclass. When one class inherits from another, the subclass inherits from the superclass. </br>
	  In Java, we say that the subclass extends the superclass. An inheritance relationship means that the subclass inherits the memebers of the superclass,
	  When we say "members of a class" we mean the instance variables and methods.</br>
	  For example, if PantherMan is a subclass of SuperHero, the PantherMan class automatically inherits the instance variables and methods 
	  common to all superheroes including suit, tights, specialPower, useSpecialPower () and so on. But the PantherMan subclass can add 
	  new methods and instance variables of its own, and it can override the methods it inherits from the superc1ass SuperHero.</p></br>
	  <p class="normal"><b>Java Inheritance Example</b></p>
	  <pre>public class Doctor {
boolean worksAtHospita1;
void treatPatient() { // perform a checkup
}
}
	  </br>
public class FamilyOoctor extends Doctor {
boolean makesHouseCalls;
void giveAdvice(} { // give homespun advice
}
}
</br>
public class Surgeon extends Doctor {
void treatPatient () ( // perform surgery
void makeIncision() ( // make incision (yikes!)
}
}
	</pre>
	<p class="normal"><b>Note:</b></p></br>
	<p class="normal"><b>If class B extends class A, class B IS-A class A.
This is true anywhere in the inheritance tree. If class C extends class B, class C passes the IS-A test for both Band A.</b></p>
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