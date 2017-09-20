<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
  <div class="col-sm-10">
      <h3><b>Java program to find factorial</b></h3>
	<p>This java program finds factorial of a number. Entered number is checked first if its negative then an error message is printed.
	</p>
	<pre>import java.util.Scanner;
 
class Factorial
{
   public static void main(String args[])
   {
      int n, c, fact = 1;
 
      System.out.println("Enter an integer to calculate it's factorial");
      Scanner in = new Scanner(System.in);
 
      n = in.nextInt();
 
      if ( n < 0 )
         System.out.println("Number should be non-negative.");
      else
      {
         for ( c = 1 ; c <= n ; c++ )
            fact = fact*c;
 
         System.out.println("Factorial of "+n+" is = "+fact);
      }
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
