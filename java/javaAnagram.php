<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
  <div class="col-sm-10">
      <h3>Java program to find all the Anagrams</h3>
	<p class="normal">This java program finds all the Anagrams and then prints it.</p>
	<pre>import java.util.Scanner;

public class Anagram {

    public static char[] charArr;

    public Anagram(String word) {
        charArr = word.toCharArray();
        doAnagram(charArr.length);
    }

    public void changeOrder(int newsize) 
    {
        int j;
        int pointAt = charArr.length - newsize;
        char temp = charArr[pointAt];

        for (j = pointAt + 1; j < charArr.length; j++) {
            charArr[j - 1] = charArr[j];
        }

        charArr[j - 1] = temp;

    }

    public void doAnagram(int newsize) {
    	System.out.println("newsize  = "+newsize);
        if (newsize == 1) {
            return;
        }
        for (int i = 0; i < newsize; i++) {
            doAnagram(newsize - 1);
            if (newsize == 2) {
            	 for (int j = 0; j < charArr.length; j++) {
                     System.out.print(charArr[j]);
                 }
                 System.out.println();
            }
            changeOrder(newsize);
        }
    }

    public static void main(String args[]) {
        System.out.println("Enter a word to find all the anagrams: ");
        Scanner in = new Scanner(System.in);
        String input = in.next();
        new Anagram(input);



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