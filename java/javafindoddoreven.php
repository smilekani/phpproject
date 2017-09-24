<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
  <div class="col-sm-10">
      <h3>Java program to find odd or even</h3>
	<p class="normal">This java program finds if a number is odd or even. If the number is divisible by 2 then it will be even, otherwise it is odd. We use modulus operator to find remainder in our program.</p>
	 <pre>import java.util.Scanner;
 
class OddOrEven
{
   public static void main(String args[])
   {
      int x;
      System.out.println("Enter an integer to check if it is odd or even ");
      Scanner in = new Scanner(System.in);
      x = in.nextInt();
 
      if ( x % 2 == 0 )
         System.out.println("You entered an even number.");
      else
         System.out.println("You entered an odd number.");
   }
}</pre>
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
	<?php include 'javafooter.php';?>
	</div>
</div>
