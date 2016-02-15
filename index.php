<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>FSU Blackboard Course Banner Creator</title>
<link rel="stylesheet" type="text/css" href="css/banner.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div id="container">
	<div id="fsuHeader">
    	<div class="wrap">
        	<h1 class="hide">FSU Blackboard Course Banner Image Creator</h1>
        	<a href="http://distance.fsu.edu" target="_blank" class="fsuLogo"></a>
        </div>
   	</div>

	<div id="content">
    <div class="wrap">
		<h1>Blackboard Course Banner Creator</h1>
		<p>Instructions: Choose your background and seal. Then type your course information. When you are ready, download your banner and save it on your computer.  Read our <a href="https://support.campus.fsu.edu/kb/article/105-how-to-change-your-course-design-and-adding-a-banner">support article</a> to learn how to add the banner to your course site.</p>

		<div>
		<h2>1. Select a Background:</h2>
		<figure>
			<img id="bk1" class="bks" width=100 height=100 src="./images/background1.png" onclick="selectItem(this)"/><figcaption>Black</figcaption>
		</figure>
		<figure>
			<img id="bk2" class="bks" width=100 height=100 src="./images/background2.png" onclick="selectItem(this)"/><figcaption>Red</figcaption>
		</figure>
		<figure>
			<img id="bk3" class="bks" width=100 height=100 src="./images/background3.png" onclick="selectItem(this)"/><figcaption>Yellow</figcaption>
		</figure>
		<figure>
			<img id="bk4" class="bks" width=100 height=100 src="./images/background4.png" onclick="selectItem(this)"/><figcaption>Grey</figcaption>
		</figure>	
		</div>

		<div>
		<h2>2. Select a seal:</h2>
		<figure>
			<img id="seal1" class="seals" src="./images/seal1.png" onclick="selectItem(this)"/><figcaption>Original</figcaption>
		</figure>
		<figure>
			<img id="seal2" class="seals" src="./images/seal2.png" onclick="selectItem(this)"/><figcaption>Red</figcaption>
		</figure>
		<figure>
			<img id="seal3" class="seals" src="./images/seal3.png" style="background-color: black;" onclick="selectItem(this)"/><figcaption>Transparent</figcaption>
		</figure>
		<figure>
			<img id="seal4" class="seals" src="./images/seal4.png" onclick="selectItem(this)"/><figcaption>Black</figcaption>
		</figure>	
		</div>

		<div>
		<h2>3. Enter your course information</h2>
			<ul class="text-fields">
            	<li><h4>Course information</h4></li>
                <li><h4>Text color</h4></li>
                <li><h4>Text style</h4></li>
               	<!--li><h4>Text shadow?</h4></li-->
            </ul>
           	<ul class="text-fields">
            	<li><input type="text" name="course-number" id="course-number" placeholder="Course Number" onkeyup="clearAndRedraw('number'); drawText('number')" /></li>
        		<li><select name="course-number-color" id="course-number-color-select" onchange="clearAndRedraw('number'); drawText('number')">
        			<option value="#ffffff" >White</option>
            		<option value="#000000">Black</option>
            		<option value="#540115">Garnet</option>
            		<option value="#efe8bb">Gold</option>
        			</select></li>
                <li><select name="course-number-fstyle" id="course-number-fstyle-select" onchange="clearAndRedraw('number'); drawText('number')">
                	<option value="normal">Normal</option>
                    <option value="bold">Bold</option>
                    <option value="italic">Italic</option>
                	</select></li>
                <!--li><input name="course-number-shadow" id="course-number-shadow"type="checkbox" onchange="clearAndRedraw('number'); drawText('number')"/></li-->
            </ul>
            
            <ul class="text-fields">
            	<li><input type="text" name="course-title" id="course-title" placeholder="Course Title" onkeyup="clearAndRedraw('title'); drawText('title')" /></li>
        		<li><select name="course-title-color" id="course-title-color-select" onchange="clearAndRedraw('title'); drawText('title')" >
        			<option value="#ffffff">White</option>
            		<option value="#000000">Black</option>
            		<option value="#540115">Garnet</option>
            		<option value="#efe8bb">Gold</option>
        			</select></li>
                <li><select name="course-title-fstyle" id="course-title-fstyle-select" onchange="clearAndRedraw('title'); drawText('title')">
                	<option value="normal">Normal</option>
                    <option value="bold">Bold</option>
                    <option value="italic">Italic</option>
                	</select></li>
                <!--li><input name="course-title-shadow" id="course-title-shadow" type="checkbox" onchange="clearAndRedraw('title'); drawText('title')"/></li-->
            </ul>
            
            <ul class="text-fields">
        		<li><input type="text" name="instructor" id="instructor" placeholder="Instructor" onkeyup="clearAndRedraw('instructor'); drawText('instructor')" /></li>
                <li><select name="instructor-color" id="instructor-color-select" onchange="clearAndRedraw('instructor'); drawText('instructor')">
        			<option value="#ffffff">White</option>
            		<option value="#000000">Black</option>
           			<option value="#540115">Garnet</option>
            		<option value="#efe8bb">Gold</option>
        			</select></li>
                <li><select name="instructor-fstyle" id="instructor-fstyle-select" onchange="clearAndRedraw('instructor'); drawText('instructor')">
                	<option value="normal">Normal</option>
                    <option value="bold">Bold</option>
                    <option value="italic">Italic</option>
                	</select></li>
                <!--li><input name="instructor-shadow"  id="instructor-shadow"  type="checkbox" onchange="clearAndRedraw('instructor'); drawText('instructor')"/></li-->
    		</ul>
    	</div>

    	<ul class="text-fields">
    	<li>
		<div id="previewBanner">
			<h2>4. Preview Your Banner</h2>
			<div class="canvas">
				<canvas width="3000" height="100" id="thecanvas"></canvas>
			</div>
			<img hidden src="" id="downloadCanvas" />
			<br/>
			<a id="downloadBanner" href="#" class="btn btn-success" download="banner_result.png">Download This Banner</a>
		</div>
		</li>
		</ul>
	</div>
	</div>	
</div>


<script src="banner.js"></script>

</body>
</html>