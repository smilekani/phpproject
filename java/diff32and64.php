<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
  <div class="col-sm-10">
      <h3>What’s the difference between 32-bit and 64-bit?</h3>
	<p class="normal">The term “bit” is short for “binary digit,” which can be a 1 or 0. In this context, the number of bits refers to how many 1’s and 0’s 
	the computer’s processor can use to communicate instructions and assign memory addresses. When dealing with instructions, 
	64-bit software offers increased performance over 32-bit programs, because the processor will be able to deliver more information each time 
	it issues a command. When dealing with memory address, a 32-bit string is limited to a little over 4 million bytes of memory, or 4GB.
	That means the computer cannot store data to RAM beyond 4GB, so installing more than 4GB on a computer that runs a 32-bit version of Windows is a waste.


A 64-bit system reaches a memory address limit at 18.45 exabytes—a number that’s around 4 billion times larger 4GB. 
It’s wise to go with a 64-bit operating system, as it’s backward compatible with almost any popular 32-bit application.
 Those with 64-bit versions of Windows, whether it be Vista, Windows 7, or Windows 8, should opt for 64-bit applications (if a choice is available), 
 because the program will (all else being equal) run faster than a 32-bit counterpart. Note that if you run a 32-bit version of Windows 7 
 and opt for an Upgrade Assistant installation to Windows 8, you’ll end up with a 32-bit version of Win8. To “upgrade” to a 64-bit edition of Windows 8, 
 you’ll need to buy a full version of Windows 8 and perform a Clean Install.
	</p>
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
