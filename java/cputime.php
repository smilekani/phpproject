<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
  <div class="col-sm-10">
      <h3>CPU Time</h3>
	<p class="normal" class="normal">The amount of time the CPU is actually executing instructions. During the execution of most programs, 
	the CPU sits idle much of the time while the computer fetches data from the keyboard or disk, or sends data to an output device. 
	The CPU time of an executing program, therefore, is generally much less than the total execution time of the program. 
	Multitasking operating systems take advantage of this by sharing the CPU among several programs.
CPU times are used for a variety of purposes: to compare the speed of two different processors, to gauge how CPU-intensive a program is,
 and to measure the amount of processing time being allocated to different programs in a multitasking environment.</p>
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
