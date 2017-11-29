<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
  <div class="col-sm-10">
      <h3>Java program to check the Two Entered Strings are Anagrams or not.</h3>
	<p class="normal">This java program finds whether the two Entered Strings are Anagrams or not.</p>
	<pre>import java.util.Arrays;
import java.util.Scanner;

public class CheckAnagram 
{
	public CheckAnagram() 
	{
	}
	
	public CheckAnagram(String str1, String str2)
	{
		String newStr1 = str1.replaceAll("\\s", "");
		String newStr2 = str2.replaceAll("\\s", "");
		char[] charArr1 = newStr1.toLowerCase().toCharArray();
		char[] charArr2 = newStr2.toLowerCase().toCharArray();
		Arrays.sort(charArr1);
		Arrays.sort(charArr2);
		for (char c : charArr1) 
		{
			System.out.print(c);
		}
		for (char c : charArr2) 
		{
			System.out.print(c);
		}
		boolean equals = Arrays.equals(charArr1, charArr2);
		
		System.out.println("Anagram Status: "+equals);
	}
	
	public static void main(String[] args) 
	{
		System.out.println("Enter Two Words to find whether they are Anagram or not :");
		Scanner in = new Scanner(System.in);
		String str1 = in.next();
		String str2 = in.next();
		new CheckAnagram(str1, str2);
	}
}

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
	<?php include 'javafooter.php';?>
	</div>
</div>