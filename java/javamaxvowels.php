<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
  <div class="col-sm-10">
      <h3>Program on displaying the word with maximum vowels in a sentence</h3>
	<p class="normal">In this program user will entyer any sentence and the program will display the word with maximum number of vowels. For example, if the entered sentence is : This year 2014 was so so, the output will be year.

In this program we have to break the entered sentence in words and ISC students can use 
StringTokenizer class to break the sentence into tokens where as ICSE students can do the 
same job using substring () and indexOf() function of String class.</p></br>
<h4>First Program is using StringTokenizer class </h4><br>
<pre>import java.io.*;
import java.util.*;
class St
{
    BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
    String str,s1,maxword;
    StringTokenizer stk;
    int i,len,max=0,c;
    public void show()throws Exception
    {
         System.out.print("\nEnter the sentence:");
         str=br.readLine();
         stk=new StringTokenizer(str);
         while(stk.hasMoreTokens())
         {
              c=0;
              s1=stk.nextToken();
              len=s1.length();
              for(i=0;i< len;i++)
              {
                 switch(s1.charAt(i))
                  {
                     case 'a':
                     case 'e':
                     case 'i':
                     case 'o':
                     case 'u':
                      case 'A':
                     case 'E':
                     case 'I':
                     case 'O':
                     case 'U':
                     c++;
                     break;
                    }
                }
                if(c >max)
              {
                  max=c;
                  maxword=s1;
                }
            }
           
         System.out.print("\nWord with maximum number of vowels:"+maxword);
        }
        public static void main(String args[])throws Exception
        {
             St ob=new St();
             ob.show();
            }
        }
       </pre><br><h4>Sample Output</h4>
       <p class="normal"> Enter the sentence:This is an average year

        Word with maximum number of vowels:average</p>
        <h3>This program is using String class functions - substring () and indexOf() </h3>
        <pre>import java.io.*;
class Str
{
    BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
    String str,s1,maxword;
  
    int i,len,max=0,c,c1;
    public void show()throws Exception
    {
         System.out.print("\nEnter the sentence:");
         str=br.readLine().trim()+" ";
       
         while(true)
         {
              c=0;
              c1=str.indexOf(" ");
              if(c1< 0)
              break;
             
              s1=str.substring(0,c1);
              str=str.substring(c1+1);
              len=s1.length();
              for(i=0;i< len;i++)
              {
                 switch(s1.charAt(i))
                  {
                     case 'a':
                     case 'e':
                     case 'i':
                     case 'o':
                     case 'u':
                      case 'A':
                     case 'E':
                     case 'I':
                     case 'O':
                     case 'U':
                     c++;
                     break;
                    }
                }
                if(c >max)
              {
                  max=c;
                  maxword=s1;
                }
            }
           
         System.out.print("\nWord with maximum number of vowels:"+maxword);
        }
        public static void main(String args[])throws Exception
        {
             Str ob=new Str();
             ob.show();
            }
        }</pre>
        <p class="normal"><b>Sample Input Output:</b></p><br>
        <p class="normal">Enter the sentence:year 2015 may be a productive year for India

       Word with maximum number of vowels:productive</p>
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
