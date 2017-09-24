<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
  <div class="col-sm-10">
      <h3>Java program print prime numbers</h3>
	<p class="normal">This java program prints prime numbers, number of prime numbers required is asked from the user. Remember that smallest prime number is 2.
	</p>
	<pre>import java.util.*;
 
class PrimeNumbers
{
   public static void main(String args[])
   {
      int n, status = 1, num = 3;
 
      Scanner in = new Scanner(System.in);
      System.out.println("Enter the number of prime numbers you want");
      n = in.nextInt();
 
      if (n >= 1)
      {
         System.out.println("First "+n+" prime numbers are :-");
         System.out.println(2);
      }
 
      for ( int count = 2 ; count <=n ;  )
      {
         for ( int j = 2 ; j <= Math.sqrt(num) ; j++ )
         {
            if ( num%j == 0 )
            {
               status = 0;
               break;
            }
         }
         if ( status != 0 )
         {
            System.out.println(num);
            count++;
         }
         status = 1;
         num++;
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
