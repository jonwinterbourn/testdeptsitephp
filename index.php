<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Whiteside Community College (Test)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dept.css" rel="stylesheet">
    <link href="css/dept2.css" rel="stylesheet">
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */
/*
      .container {
        width: auto;
        max-width: 680px;
      }
      .container .copyright {
        margin: 20px 0;
      }
*/

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>

	<div class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<a class="navbar-brand" href="/">
			<!--<span>Department of Economics</span>-->
			</a>
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="/">Home</a>
				</li>
				<li>
					<a href="#">Link 1</a>
				</li>
				<li>
					<a href="#">Link 2</a>
				</li>
				<li>
					<a href="#">Link 3</a>
				</li>
				<li>
					<a href="#">Link 4</a>
				</li>
			</ul>
		</div>
	</div>


<div class="container">
	<div class="row visible-print">
		<div class="col col-sm-3">
		</div>
		<div class="col col-sm-9">
			<div class="row">
				<div class="col col-sm-6">
					<p>
						Tel no here
						<br>
						Web address here
						<br>
						email here
					</p>
				</div>
				<div class="col col-sm-6">
					<p>
						Address line 1
					<br>
						Address line 2
					<br>
						Postcode
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col col-sm-12">
				</div>
			</div>
		</div>
	</div>

<!-- next row -->

<div class="row">
	<div class="col col-lg-9 col-push-3">
		<div class="jumbotron">
			<h1>Welcome to the Department of Economics</h1>
			<p>
			Some blurb about the department and its excellence here. Some blurb about the department and its excellence here. Some blurb about the department and its excellence here. Some blurb about the department and its excellence here. Some blurb about the department and its excellence here.
			</p>
		</div>

<!-- items -->

<div class="row">


<?php
        $catalog = simplexml_load_file('http://cricket-test.herokuapp.com/courses.xml?org_unit_id=29');
        if (!$catalog) {
                exit('<p>Failed to load xml.</p>');
        } else {
		
		$result = $catalog->xpath('//course');#[contains(subject,"Economics")]');
                foreach ($result as $key=>$course) {
			echo '<div class="col col-lg-4 col-sm-6">', PHP_EOL;
                	echo '<div class="thumbnail" itemscope itemtype="http://schema.org/Product">', PHP_EOL;
                        echo '<h4 class="courseTitle">', $course->title, '</h4>', PHP_EOL;
			echo '<div class="caption">', PHP_EOL;
			echo '<h5 class="ellipsis">Level: ', $course->{'education-level'}, '</h5>', PHP_EOL;
			echo '<h5 class="ellipsis">Starts: ', $course->{'start-date'}, '</h5>', PHP_EOL;
			echo '<h5 class="ellipsis">Duration: ', $course->fields->{'j017fbfe5-a8f4-4733-acd1-046092acfdd1'}->Duration, ' year/s</h5>', PHP_EOL;
			echo '<div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><a href="http://cricket-test.herokuapp.com/courses/', $course->id,'.xml"><span class="label label-danger">View course details</span></a></div>', PHP_EOL;
			echo '</div></div></div>', PHP_EOL;
			
                }

	}
?>

<!--

	<div class="col col-lg-4 col-sm-6">
		<div class="thumbnail" itemscope itemtype="http://schema.org/Product">
			<h4 class="courseTitle">Course Title</h4>
			<div class="caption">
				<h5 class="ellipsis">
					Brief details
				</h5>
				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <a href="#">
                                        <span class="label label-danger">View course details</span>
                                        </a>
                                </div>
			</div>
		</div>
	</div>
	<div class="col col-lg-4 col-sm-6">
		<div class="thumbnail" itemscope itemtype="http://schema.org/Product">
			<h4 class="courseTitle">Course Title</h4>
			<div class="caption">
				<h5 class="ellipsis">
					Brief details
				</h5>
				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <a href="#">
                                        <span class="label label-danger">View course details</span>
                                        </a>
                                </div>
			</div>
		</div>
	</div>

	<div class="col col-lg-4 col-sm-6">
                <div class="thumbnail" itemscope itemtype="http://schema.org/Product">
			<h4 class="courseTitle">Course Title</h4>
                        <div class="caption">
                                <h5 class="ellipsis">
                                        Brief details
                                </h5>
				<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
					<a href="#">
					<span class="label label-danger">View course details</span>
					</a>
				</div>
                        </div>
                </div>
        </div>

	<div class="col col-lg-4 col-sm-6">
                <div class="thumbnail" itemscope itemtype="http://schema.org/Product">
                        <h4 class="courseTitle">Course Title</h4>
                        <div class="caption">
                                <h5 class="ellipsis">
                                        Brief details
                                </h5>
                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <a href="#">
                                        <span class="label label-danger">View course details</span>
                                        </a>
                                </div>
                        </div>
                </div>
        </div>

	<div class="col col-lg-4 col-sm-6">
                <div class="thumbnail" itemscope itemtype="http://schema.org/Product">
                        <h4 class="courseTitle">Course Title</h4>
                        <div class="caption">
                                <h5 class="ellipsis">
                                        Brief details
                                </h5>
                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <a href="#">
                                        <span class="label label-danger">View course details</span>
                                        </a>
                                </div>
                        </div>
                </div>
        </div>

	<div class="col col-lg-4 col-sm-6">
                <div class="thumbnail" itemscope itemtype="http://schema.org/Product">
                        <h4 class="courseTitle">Course Title</h4>
                        <div class="caption">
                                <h5 class="ellipsis">
                                        Brief details
                                </h5>
                                <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <a href="#">
                                        <span class="label label-danger">View course details</span>
                                        </a>
                                </div>
                        </div>
                </div>
        </div>
-->

</div>


<!-- nav -->

<div class="visible-print">
Tuck Software, Test Site
</div>
</div>
<div class="col col-lg-3 col-pull-9 sidebar hidden-print">
<p class="visible-sm">
<a href="#">
<i class="glyphicon glyphicon-arrow-up"></i>
Back to top
</a>
</p>
<div class="panel">
<div class="panel-heading">
<h4>Courses</h4>
</div>
<div class="list-group list-group-flush">
<a class="list-group-item" href="#">
<span class="badge">3</span>
Undergraduate courses
</a>
<a class="list-group-item" href="#">
<span class="badge">5</span>
Postgraduate courses
</a>
</div>
</div>


<div class="panel">
	<div class="panel-heading">
		<h4>Research</h4>
	</div>
	<div class="list-group list-group-flush">
		<a class="list-group-item" href="#">
			Discussion papers
		</a>
		<a class="list-group-item" href="#">
			PhD candidates
		</a>
	</div>
</div>


</div>
</div>

</div>

<footer class="footer hidden-print">
<div class="container">
<div class="row">
<div class="col col-lg-4 col-sm-12">
<p>
&#169;

Tuck Software, Test Site
</p>
</div>
<div class="col col-lg-4 col-sm-12">
<!--
<p>
<strong>Mon - Sat</strong>
<br>
9:30 am - 5:30 pm
</p>
<p>
<strong>Sunday</strong>
<br>
10:00 am - 4:00 pm
</p>
-->
</div>
<div class="col col-lg-4 col-sm-12">
<i class="glyphicon glyphicon-envelope"></i>
<a href="mailto:tucksoftware@gmail.com">tucksoftware@gmail.com</a>
</div>
</div>
</div>



    
<!--
    <div id="footer">
      <div class="container">
        <p class="muted copyright">&copy; Tuck Software using Twitter Bootstrap.</p>
      </div>
    </div>
-->


    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-collapse.js"></script>

  </body>
</html>

