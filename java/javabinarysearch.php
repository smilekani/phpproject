<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
  <div class="col-sm-10">
      <h3>Java program For Binary Search</h3>
	<p class="normal">This java program Binary Search a Element</p>
	<pre>import java.util.Arrays;
import java.util.Scanner;

public class BinarySearch 
{
	public int findNumberAtIndex(int[] arr, int x)
	{
		int low = 0; 
		int high = arr.length;
		System.out.println("high = "+high);
		while(low < high)
		{
			int mid = low + (high - low) / 2;
			if(arr[mid] < x)
				low = mid + 1;
			else if(arr[mid] > x)
				high = mid - 1;
			else
				return mid;
		}
		return -1;
	}
	
	public static void main(String[] args) 
	{
		Scanner in = new Scanner(System.in);
		System.out.println("Enter the Total No of Elements : ");
		int maxLen = in.nextInt(); 
		int[] arr = new int[maxLen];
		System.out.println("Enter Each Elements One by One ");
		for(int i = 0; i < maxLen; i++)
		{
			arr[i] = in.nextInt();
		}
		System.out.println("Enter the Element to Search : ");
		int searchEle = in.nextInt();
		BinarySearch search = new BinarySearch();
		Arrays.sort(arr);
		for (int i : arr) {
			System.out.println("i ="+i);
		}
		int atIndex = search.findNumberAtIndex(arr, searchEle);
		System.out.println("Element is found at the Index : "+atIndex);
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