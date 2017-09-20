<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
  <div class="col-sm-10">
      <h3>Apache Axis</h3>
	<p><b>Vowels in a String (Java)</b></p>
	
	<pre>/This Java program accepts a String from
//the user and  then prints out the vowels
//present in it.
import java.util.*;
class vowel
{
    public static void main(String Args[])
    {
        System.out.println("Enter a string");
        Scanner sc=new Scanner(System.in);
        String s=sc.nextLine();
        System.out.println("The vowels are :-");
        vowel(s);
    }
    
    public static void vowel(String st)
    {
        int i;
        for(i=0;i<st.length();i++)
        {
            if((st.charAt(i)=='a')||(st.charAt(i)=='u')||(st.charAt(i)=='o')||(st.charAt(i)=='i')||(st.charAt(i)=='e'))
            {
                System.out.println(st.charAt(i));
            }
        }
    }
}

More Programs: http://javamylanguage.blogspot.com/2011/09/vowels-in-string.html#ixzz4tEucwTxP</pre>
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
