<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
  <div class="col-sm-10">
      <h3>What is Parallel Computer?</h3>
	<p class="normal">A computer with multiple processors that can all be run simultaneously on parts of the same problem to reduce the solution time. 
	The term is nowadays mostly reserved for those MASSIVELY PARALLEL computers with hundreds or thousands of processors that are used in science and engineering to tackle enormous computational problems.


 
There are two fundamental divisions in parallel computer architecture. The first is between those architectures in which each processor has it own memory space and communicates with others by MESSAGE PASSING, and those architectures in which all the processors communicate through a shared memory (SHARED-MEMORY MULTIPROCESSORS). The increasing number of high-end PCs and servers that contain more than one processor fall into this latter category.

The other fundamental division is between those computer architectures in which each processor executes the same program on a different data item (SINGLE-INSTRUCTION MULTIPLE-DATA or SIMD)and those in which each processor executes a different program (MIMD or multiple-instruction multiple-data). Within these subdivisions, the processors can be connected together in many different ways (their TOPOLOGY) which profoundly affect the efficiency of communication between them. 
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
