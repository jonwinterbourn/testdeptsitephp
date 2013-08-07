<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Whiteside Community College: Course page</title>
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
			<h1>Economics BSc</h1>
			<p>
			Some blurb about the course and its excellence here. 
			</p>
		</div>

<!-- items -->

<div class="row">


<?php
        $course = simplexml_load_file('http://cricket-test.herokuapp.com/courses/20.xml');
        if (!$course) {
                exit('<p>Failed to load xml.</p>');
        } else {
		
		$result = $course;#[contains(subject,"Economics")]');
                #foreach ($result as $key=>$course) {
			echo '<div class="col col-lg-12 col-sm-18">', PHP_EOL;
                	echo '<div class="thumbnail singleCourse" itemscope itemtype="http://schema.org/Product">', PHP_EOL;
#                        echo '<h4 class="courseTitle">', $course->title, '</h4>', PHP_EOL;
#			echo '<div class="caption">', PHP_EOL;
#			echo '<h5 class="ellipsis">Level: ', $course->{'education-level'}, '</h5>', PHP_EOL;
#			echo '<h5 class="ellipsis">Starts: ', $course->{'start-date'}, '</h5>', PHP_EOL;
#			echo '<h5 class="ellipsis">Duration: ', $course->fields->{'j017fbfe5-a8f4-4733-acd1-046092acfdd1'}->Duration, ' year/s</h5>', PHP_EOL;
			#echo '<div itemprop="offers" itemscope itemtype="http://schema.org/Offer"><a href="http://cricket-test.herokuapp.com/courses/', $course->id,'.xml"><span class="label label-danger">View course details</span></a></div>', PHP_EOL;
#			echo '</div>', PHP_EOL;
			echo '<div class="description">', PHP_EOL;
			echo '<p>', $course->description, '<p>', PHP_EOL;			
?>
<p>Our BSc Economics degree course will give you excellent training . in theory and practice . for tackling a wide range of relevant problems facing society as well as the world economy.</p>
<p>
Taught by leading economists and with an impressive faculty alumni 
Renowned for producing high-calibre graduates
91% of our graduates go on to careers in professional or managerial jobs
Course satisfaction ratings of 93%
Average starting salaries for our graduates of £21,000 
Students go on to be in high demand by employers in diverse sectors, such as financial management and accountancy, government services, investment and retail banking, teaching, insurance, general management, personnel and journalism.
</p>
<p>
<strong>The BSc Economics course at Birmingham is ranked 1st out of the Russell Group of UK universities.</strong></p>
<p>
The Russell Group is committed to maintaining the very best research, an outstanding teaching and learning experience and unrivalled links with business and the public sector.
</p>
</div>
<?php
	echo '<div class="caption">', PHP_EOL;
        echo '<h4>Course Fact File</h4>', PHP_EOL;
	echo '<h5 class="ellipsis">Level: ', $course->{'education-level'}, '</h5>', PHP_EOL;
	echo '<h5 class="ellipsis">UCAS Code: ', $course->fields->{'g7fb0ebf0-5b9a-45ef-a53e-072a1fcfd924'}->{'UCAS-Code'}, '</h5>', PHP_EOL;
        echo '<h5 class="ellipsis">Duration: ', $course->fields->{'j017fbfe5-a8f4-4733-acd1-046092acfdd1'}->Duration, ' year/s</h5>', PHP_EOL;
	echo '<h5 class="ellipsis">Places Available: ', $course->fields->{'b7d89c9ae-3200-4cd8-b6e4-6d91bba8cd05'}->Places, '</h5>', PHP_EOL;
	echo '<h5 class="ellipsis">Applications Last Year: ', $course->fields->{'i7635767d-160a-4cfa-8af0-f1d341ebaec5'}->Applicants, '</h5>', PHP_EOL;
	echo '<h5 class="ellipsis">Typical Offer: ', $course->fields->{'xd42f1821-516e-46dd-97e3-f6b5be0722f5'}->{'Typical-offer-A-level'}, '</h5>', PHP_EOL;
	echo '<h5 class="ellipsis">Start date: ', $course->{'start-date'}, '</h5>', PHP_EOL;
	echo '</div>'
?>

<?php
			echo '</div>', PHP_EOL;
			echo '</div></div>', PHP_EOL;
			
                #}

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

