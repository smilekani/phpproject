<?php
<div>
<?php include 'heading.php';?>
</div>
<div class="menu">
<?php include 'menu.php';?>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
		<div>
		<?php include 'cplusmenu.php';?>
		</div>
    </div>
    <div class="col-sm-8">
      <h3>C++ Basics</h3>
	  <h2>C++</h2>
      <p class="normal" class="normal">C++</p>
	  </br><p class="normal">Difference between C and C++</p>
	  <pre>
	 What are the differences between C and C++?
1) C++ is a kind of superset of C, most of C programs except few exceptions (See this and this) work in C++ as well.
2) C is a procedural programming language, but C++ supports both procedural and Object Oriented programming.
3) Since C++ supports object oriented programming, it supports features like function overloading, templates, inheritance, virtual functions, friend functions. These features are absent in C.
4) C++ supports exception handling at language level, in C exception handling is done in traditional if-else style.
5) C++ supports references, C doesn’t.
6) In C, scanf() and printf() are mainly used input/output. C++ mainly uses streams to perform input and output operations. cin is standard input stream and cout is standard output stream.

There are many more differences, above is a list of main differences.
		
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
<div>
<?php include 'cplusplusfooter.php';?>
</div>