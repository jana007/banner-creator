<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>FSU Blackboard Course Banner Creator</title>
<link rel="stylesheet" type="text/css" href="css/banner.css" />

<script type="text/javascript" src="base64.js"></script>
<script type="text/javascript" src="canvas2image.js"></script>
 <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

<script type="text/javascript">
// setup our test canvas
// and a simple drawing function

var first = true;

window.onload = function() {
	//document.getElementById("canvasimagelink").style.display='none';
	//document.getElementById("convertpngbtn").style.display='none';
	//document.getElementById("thecanvas").style.display='none';
	first = true;
}

function previewBanner(sealAddr, backgroundAddr){
	var cSeal = sealAddr;
	window.console.log(cSeal);
	var cImage = backgroundAddr;
	window.console.log(cImage);

	var oCanvas = document.getElementById("thecanvas");
	var oCtx = oCanvas.getContext("2d");

	var imageObj = new Image();
	var imageSeal = new Image();

	//sets canvas to course image input
    imageObj.src = cImage;
	imageSeal.src = cSeal;
	
    imageObj.onload = function(){
    	oCtx.drawImage(imageObj, 0, 0);
		oCtx.drawImage(imageSeal, 0, 0);
		/*
		oCtx.shadowColor = "#000000";
		oCtx.shadowOffsetX = cNumberShaX;
		oCtx.shadowOffsetY = cNumberShaY;
		oCtx.shadowBlur = cNumberShaB;
		
		//oCtx.font = "normal 18px Arial";
		if (SLIDES_form.elements["course-number-fstyle"].value == 'normal'){ oCtx.font = "normal 18px Arial"; }
		if (SLIDES_form.elements["course-number-fstyle"].value == 'bold'){ oCtx.font = "bold 18px Arial"; }
		if (SLIDES_form.elements["course-number-fstyle"].value == 'italic'){ oCtx.font = "italic 18px Arial"; }
		
		oCtx.fillStyle = cNumberColor;
        oCtx.fillText(cNumber, 110, 28);
		
		oCtx.shadowColor = "#000000";
		oCtx.shadowOffsetX = cTitleShaX;
		oCtx.shadowOffsetY = cTitleShaY;
		oCtx.shadowBlur = cTitleShaB;

		//oCtx.font = "normal 30px Arial";
		if (SLIDES_form.elements["course-title-fstyle"].value == 'normal'){ oCtx.font = "normal 30px Arial"; }
		if (SLIDES_form.elements["course-title-fstyle"].value == 'bold'){ oCtx.font = "bold 30px Arial"; }
		if (SLIDES_form.elements["course-title-fstyle"].value == 'italic'){ oCtx.font = "italic 30px Arial"; }
		oCtx.fillStyle = cTitleColor;
		oCtx.fillText(cTitle, 110, 60);
		
		oCtx.shadowColor = "#000000";
		oCtx.shadowOffsetX = instructorShaX;
		oCtx.shadowOffsetY = instructorShaY;
		oCtx.shadowBlur = instructorShaB;
		
		//oCtx.font = "italic 16px Arial";
		if (SLIDES_form.elements["instructor-fstyle"].value == 'normal'){ oCtx.font = "normal 16px Arial"; }
		if (SLIDES_form.elements["instructor-fstyle"].value == 'bold'){ oCtx.font = "bold 16px Arial"; }
		if (SLIDES_form.elements["instructor-fstyle"].value == 'italic'){ oCtx.font = "italic 16px Arial"; }
		oCtx.fillStyle = instructorColor;
		oCtx.fillText(instructor, 112, 82);
		
		
		oCtx.shadowColor = "#000000";
		oCtx.shadowOffsetX = 0;
		oCtx.shadowOffsetY = 0;
		oCtx.shadowBlur = 0;
		*/

	var dataURL = oCanvas.toDataURL('image/png');
    document.getElementById('downloadCanvas').src = dataURL;
    document.getElementById('downloadBanner').href = dataURL;
	}

	
}

function myFunction(sealAddr) {
     // display download link  
     document.getElementById("preview").style.display = "none";
     document.getElementById("textPreview").style.display="block";
	 document.getElementById("canvasimagelink").style.display = "inline-block";
	 document.getElementById("resetbtn").style.display = "inline-block";
	 document.getElementById("BGS_img").style.display = "none";
	 document.getElementById("thecanvas").style.display="inline-block";
	//document.getElementById("convertpngbtn").style.display = "block";
	
	//course image input value	
	var cSeal = sealAddr;
	window.console.log(cSeal);
	var cImage = SLIDES_form.elements["BGS_select"].value;
	window.console.log(cImage);
	
//	var urlField = document.getElementById('BGS_url_select');
//	if(urlField.value != "") {
//		var cImage = SLIDES_form.elements["BGS_url_select"].value;
//	}

	//input fields
	var cNumber = SLIDES_form.elements["course-number"].value;
	var cTitle = SLIDES_form.elements["course-title"].value;
	var instructor = SLIDES_form.elements["instructor"].value;
	
	//input fields colors
	var cNumberColor = SLIDES_form.elements["course-number-color"].value;
	var cTitleColor = SLIDES_form.elements["course-title-color"].value;
	var instructorColor = SLIDES_form.elements["instructor-color"].value;
	
	//input fields font style	
	//var cNumberStyle = '"' + SLIDES_form.elements["course-number-fstyle"].value +  '18px Arial"';
	//var quo = '"';
	//var cnsyle = SLIDES_form.elements["course-number-fstyle"].value;
	//var cnfont = ' 18px Arial\"';
	//var cNumberStyle = quo.concat(cnsyle,cnfont);
	//alert  (cNumberStyle);
	
	//checkbox fields shadows
	if (SLIDES_form.elements["course-number-shadow"].checked) {
		var cNumberShaX = 1; var cNumberShaY = 1; var cNumberShaB = 2; }
	else { 
		var cNumberShaX = 0; var cNumberShaY = 0; var cNumberShaB = 0; }
	
	if (SLIDES_form.elements["course-title-shadow"].checked) {
		var cTitleShaX = 1; var cTitleShaY = 1; var cTitleShaB = 2; }
	else { 
		var cTitleShaX = 0; var cTitleShaY = 0; var cTitleShaB = 0; }
	
	if (SLIDES_form.elements["instructor-shadow"].checked) {
		var instructorShaX = 1;	var instructorShaY = 1;	var instructorShaB = 2; }
	else {
		var instructorShaX = 0;	var instructorShaY = 0;	var instructorShaB = 0; }
	
	var bMouseIsDown = false;
}
	
//added code ends
function showDownloadText() {
		//document.getElementById("buttoncontainer").style.display = "none";
		//document.getElementById("textdownload").style.display = "block";
			
		document.getElementById("preview").style.display = "none";
}

function hideDownloadText() {
		//document.getElementById("buttoncontainer").style.display = "block";
		//document.getElementById("textdownload").style.display = "none";

		document.getElementById("preview").style.display = "none";
}

function convertCanvas(strType) {
		if (strType == "PNG")
			var oImg = Canvas2Image.saveAsPNG(oCanvas, true);
                

		if (!oImg) {
			alert("Sorry, this browser is not capable of saving " + strType + " files!");
			return false;
		}

		oImg.id = "canvasimage";

		oImg.style.border = oCanvas.style.border;
		oCanvas.parentNode.replaceChild(oImg, oCanvas);
       
		var url = oImg.src.replace("data:image/png;", 'data:application/octet-stream');
		//alert( url);
           
		
        window.open(url); 


		showDownloadText();
}



/*
document.getElementById("canvasimagelink").onclick = function() {
		
		var oImg = Canvas2Image.saveAsPNG(oCanvas, true);
                

		if (!oImg) {
			alert("Sorry, this browser is not capable of saving " + strType + " files!");
			return false;
		}

		oImg.id = "canvasimage";

		oImg.style.border = oCanvas.style.border;
		//oCanvas.parentNode.replaceChild(oImg, oCanvas);

		var url = oImg.src;		
		this.href= url;	 
		
        
        showDownloadText();                         
}
*/

/*
	document.getElementById("convertpngbtn").onclick = function() {
    alert('is this used?');	
	convertCanvas("PNG");
   
                    
                
	}
*/

/*
document.getElementById("resetbtn").onclick = function() {
		
		 location.reload(); 
		 document.getElementById("course-number").value= "";
		 document.getElementById("course-title").value= "";
		 document.getElementById("instructor").value= "";
		 document.getElementById("course-number-shadow").checked = false;
         document.getElementById("course-title-shadow").checked = false;
		 document.getElementById("instructor-shadow").checked = false;
		 setSelectValue('course-number-color-select', '#ffffff');
		 setSelectValue("course-number-fstyle-select", 'normal');
		 setSelectValue('course-title-color-select', '#ffffff');
		 setSelectValue("course-title-fstyle-select", 'normal');
		 setSelectValue("instructor-color-select", '#ffffff');
		 setSelectValue("instructor-fstyle-select", 'normal');
		 
		
	}
*/	
</script>


<script type="text/javascript" src="slideshow.js">
// JavaScript Slideshow by Patrick Fitzgerald - http://slideshow.barelyfitz.com/
</script>

<script type="text/javascript">
// Create the slideshow object
SEALS = new slideshow("SEALS");
// change the i<=[#] value according to however many images
for (var i=1; i<=4; i++) {
	SEAL = new slide();
	SEAL.src =  "images/seal" + i + ".png";
	SEAL.title = "images/seal" + i + ".png";
	SEALS.add_slide(SEAL);
	window.console.log(SEALS);
}

// Create the slideshow object
BGS = new slideshow("BGS");
// change the i<=[#] value according to however many images
for (var i=1; i<=4; i++) {
	BG = new slide();
	BG.src =  "images/background" + i + ".png";
	BG.title = "images/background" + i + ".png";
	BGS.add_slide(BG);
}
//-->



</script>
<!-- end prev/next -->

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
    	<form id="SLIDES_form" name="SLIDES_form" action="" method="POST">
		<h1>Test Site - Blackboard Course Banner Creator</h1>
		<!--<form id="SLIDES_form" name="SLIDES_form" action="" method="GET">-->

		<div id="previewBanner">
			<h2>Preview Your Banner</h2>
			<div class="canvas" style="border:1px solid grey;"><canvas width="3000" height="100" id="thecanvas"></canvas></div>
			<img hidden style="width="3000px; height: 100px;" src="" id="downloadCanvas" />
			<a id="downloadBanner" href="#" class="button" download="banner_result.png">Download</a>
		</div>

		<div>
		<h2>1. Select a seal:</h2>
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
		<h2>2. Select a Background:</h2>
		<figure>
			<img id="bk1" class="bks" style="height:10px;"  src="./images/background1.png" onclick="selectItem(this)"/><figcaption>Black</figcaption>
		</figure>
		<figure>
			<img id="bk2" class="bks" style="height:10px;" src="./images/background2.png" onclick="selectItem(this)"/><figcaption>Red</figcaption>
		</figure>
		<figure>
			<img id="bk3" class="bks" style="height:10px;" src="./images/background3.png" onclick="selectItem(this)"/><figcaption>Yellow</figcaption>
		</figure>
		<figure>
			<img id="bk4" class="bks" style="height:10px;" src="./images/background4.png" onclick="selectItem(this)"/><figcaption>Grey</figcaption>
		</figure>	
		</div>

        
    		<fieldset>
    			<div class="selectSeal">
                    <div id="SEALS_controls">
            			<a id="SEALS_prev" href="javascript:SEALS.previous(); checkMyFunction();"><img src="images/prev.png"/></a>
            			<a id="SEALS_next" href="javascript:SEALS.next(); checkMyFunction();"><img src="images/next.png"/></a>
						<select id="SEALS_select" name="SEALS_select" onChange="SEALS.goto_slide(this.selectedIndex)">
            			</select>
					</div>
                </div>
                
                <div class="selectBg">
                	<h2>2. Select a background:</h2>
					<div id="BGS_controls">
            			<a id="BGS_prev" href="javascript:BGS.previous(); checkMyFunction(); "><img src="images/prev.png"></a>
            			<a id="BGS_next" href="javascript:BGS.next(); checkMyFunction();"><img src="images/next.png"/></a>
						<select id="BGS_select" name="BGS_select" onchange="BGS.goto_slide(this.selectedIndex)">
            			</select>
                        <!--or <input id="BGS_url_select" name="BGS_url_select" placeholder="Try pasting an image url" />-->
					</div>
                </div>
                
                <div class="clear"></div>
                
                <div class="bannerPreview">
                	<div id="SEALS_img_div">
        				<img id="SEALS_img" name="SEALS_img" src="images/seal1.png"/>
        			</div>
					<div id="BGS_img_div">
        				<img id="BGS_img" name="BGS_img" src="images/background1.png"/>
        			</div>
					
                </div>
        	</fieldset>

<script type="text/javascript">
// Finish defining and activating the slideshow

// Set up the select list with the slide titles
function config_BGS_select() {
  var selectlist = document.SLIDES_form.BGS_select;
  selectlist.options.length = 0;
  for (var i = 0; i < BGS.slides.length; i++) {
    selectlist.options[i] = new Option();
    //selectlist.options[i].text = (i + 1) + '. ' + ss.slides[i].title;
	selectlist.options[i].text = BGS.slides[i].title;
  }
  selectlist.selectedIndex = BGS.current;
}

// If you want some code to be called before or
// after the slide is updated, define the functions here

BGS.pre_update_hook = function() {
  return;
}

BGS.post_update_hook = function() {
  // For the select list with the slide titles,
  // set the selected item to the current slide
  document.SLIDES_form.BGS_select.selectedIndex = this.current;
  return;
}

if (document.images) {

  // Tell the slideshow which image object to use
  BGS.image = document.images.BGS_img;

  // Tell the slideshow the ID of the element
  // that will contain the text for the slide
  // ss.textid = "ss_text";

  // Randomize the slideshow?
  // ss.shuffle();

  // Set up the select list with the slide titles
  config_BGS_select();

  // Update the image and the text for the slideshow
  BGS.update();

  // Auto-play the slideshow
  //ss.play();
}

// elizabeth
function setSelectValue (id, val) {
    document.getElementById(id).value = val;
}


</script>

<script type="text/javascript">
// Finish defining and activating the slideshow

// Set up the select list with the slide titles
function config_SEALS_select() {
  var selectlist = document.SLIDES_form.SEALS_select;
  selectlist.options.length = 0;
  for (var i = 0; i < SEALS.slides.length; i++) {
    selectlist.options[i] = new Option();
    //selectlist.options[i].text = (i + 1) + '. ' + ss.slides[i].title;
	selectlist.options[i].text = SEALS.slides[i].title;
  }
  selectlist.selectedIndex = SEALS.current;
}

// If you want some code to be called before or
// after the slide is updated, define the functions here

SEALS.pre_update_hook = function() {
  return;
}

SEALS.post_update_hook = function() {
  // For the select list with the slide titles,
  // set the selected item to the current slide
  document.SLIDES_form.SEALS_select.selectedIndex = this.current;
  return;
}

if (document.images) {

  // Tell the slideshow which image object to use
  SEALS.image = document.images.SEALS_img;

  // Tell the slideshow the ID of the element
  // that will contain the text for the slide
  SEALS.textid = "SEALS_text";

  // Randomize the slideshow?
  // ss.shuffle();

  // Set up the select list with the slide titles
  config_SEALS_select();

  // Update the image and the text for the slideshow
  SEALS.update();

  // Auto-play the slideshow
  //ss.play();
}

function checkMyFunction(){
	if(first == false)
		myFunction();
}
function clickApply(){
	first = false;
	myFunction();
}



function selectItem(obj){
	var commonSeal = '';
	var commonBk = '';
	if(obj.className == 'seals'){
		for(var i=0; i<document.getElementsByClassName('seals').length; i++){
		document.getElementsByClassName('seals')[i].nextElementSibling.style.color = 'black';
		}
		commonSeal = obj.getAttribute('src').substring(obj.getAttribute('src').lastIndexOf('images'),obj.getAttribute('src').length);
		obj.nextElementSibling.style.color = 'red';
		for(var j=0; j<document.getElementsByClassName('bks').length; j++){
			if(document.getElementsByClassName('bks')[j].nextElementSibling.style.color == 'red'){
				commonBk = document.getElementsByClassName('bks')[j].src.substring(document.getElementsByClassName('bks')[j].src.lastIndexOf('images'),document.getElementsByClassName('bks')[j].src.length);
				break;
			}
		}
	}
	else if(obj.className == 'bks'){
		for(var i=0; i<document.getElementsByClassName('bks').length; i++){
		document.getElementsByClassName('bks')[i].nextElementSibling.style.color = 'black';
		}
		commonBk = obj.getAttribute('src').substring(obj.getAttribute('src').lastIndexOf('images'),obj.getAttribute('src').length);
		obj.nextElementSibling.style.color = 'red';
		for(var j=0; j<document.getElementsByClassName('seals').length; j++){
			if(document.getElementsByClassName('seals')[j].nextElementSibling.style.color == 'red'){
				commonSeal = document.getElementsByClassName('seals')[j].src.substring(document.getElementsByClassName('seals')[j].src.lastIndexOf('images'),document.getElementsByClassName('seals')[j].src.length);
				break;
			}
		}
	}
	previewBanner(commonSeal, commonBk);
}
</script>
			<h2>3. Enter your course information</h2>
			<ul class="text-fields">
            	<li><h3>Course information</h3></li>
                <li><h3>Text color</h3></li>
                <li><h3>Text style</h3></li>
               	<li><h3>Text shadow?</h3></li>
            </ul>
           	<ul class="text-fields">
            	<li><input type="text" name="course-number" id="course-number" placeholder="Course Number" value="<?php echo htmlentities($courseNumber) ?>" /></li>
        		<li><select name="course-number-color" id="course-number-color-select">
        			<option value="#ffffff" >White</option>
            		<option value="#000000">Black</option>
            		<option value="#540115">Garnet</option>
            		<option value="#efe8bb">Gold</option>
        			</select></li>
                <li><select name="course-number-fstyle" id="course-number-fstyle-select">
                	<option value="normal">Normal</option>
                    <option value="bold">Bold</option>
                    <option value="italic">Italic</option>
                	</select></li>
                <li><input name="course-number-shadow" id="course-number-shadow"type="checkbox" /></li>
            </ul>
            
            <ul class="text-fields">
            	<li><input type="text" name="course-title" id="course-title" placeholder="Course Title" value="<?php echo htmlentities($courseTitle) ?>" /></li>
        		<li><select name="course-title-color" id="course-title-color-select">
        			<option value="#ffffff">White</option>
            		<option value="#000000">Black</option>
            		<option value="#540115">Garnet</option>
            		<option value="#efe8bb">Gold</option>
        			</select></li>
                <li><select name="course-title-fstyle" id="course-title-fstyle-select">
                	<option value="normal">Normal</option>
                    <option value="bold">Bold</option>
                    <option value="italic">Italic</option>
                	</select></li>
                <li><input name="course-title-shadow" id="course-title-shadow" type="checkbox" /></li>
            </ul>
            
            <ul class="text-fields">
        		<li><input type="text" name="instructor" id="instructor" placeholder="Instructor" value="<?php echo htmlentities($instructor) ?>" /></li>
                <li><select name="instructor-color" id="instructor-color-select">
        			<option value="#ffffff">White</option>
            		<option value="#000000">Black</option>
           			<option value="#540115">Garnet</option>
            		<option value="#efe8bb">Gold</option>
        			</select></li>
                <li><select name="instructor-fstyle" id="instructor-fstyle-select">
                	<option value="normal">Normal</option>
                    <option value="bold">Bold</option>
                    <option value="italic">Italic</option>
                	</select></li>
                <li><input name="instructor-shadow"  id="instructor-shadow"  type="checkbox" /></li>
    		</ul>

           	<ul class="text-fields">
           		<li>
           			<input style="display:none;" class="btn-lg" type="button" value="Update Text Style" id="textPreview" onClick="myFunction()" />
           		</li>
           	</ul>

    	<!--	<fieldset class="clear">
        		<input type="button" value="Apply" id="preview" onClick="myFunction()" />
    		</fieldset>-->
			<br />
			<br />
				<br />
			<br />
			
				<fieldset class="clear">
		<div class="row-fluid">
			<div class="span4 offset4 text-left">
				<h2>4. Apply style and Preview your banner</h2>
				<ul class="text-fields">
           		<li>
					<input class=" btn-lg" type="button" value="Apply" id="preview" onClick="clickApply()" />
				</li>
				<li>	
					<a id="canvasimagelink"  style="text-decoration:none" download="my_banner.png" > 
						<input style="min-width: 100px; min-height: 30px;" class="btn-lg" type="button" value = "Download" />							
					</a>
				</li>
				<li>		
					<input style="min-width: 100px; min-height: 30px;" class="btn-lg" type="button" id="resetbtn" value="Reset" />
				</li>
				</ul>
			</div>
		</div>

		<div class="row-fluid" id="previewPart">
			
		</div>

		</fieldset>
		</form>
        <div class="clear"></div>
        <br />
        <!--div class="canvas"><canvas width="765" height="100" id="thecanvas"></canvas></div-->
        <br/>
		
		<!--
		<p>
		  <button type="button" class="btn btn-primary">Default button</button>
		  <button type="button" class="btn btn-default">Default button</button>
		</p>
		 candidate for removal 
        <div id="textdownload" style="display:none;font-style:italic;">
        	Right-click to download the image<br />
        	<input type="button" id="resetbtn" value="Reset" />
    	</div>

				candidate for removal -->
				
	
		
    </div><!--//wrap//-->
	</div><!--//content//-->
    
    <div id="footer">
    <div class="wrap">
    	<p>If you have questions, comments, or suggestions please contact our <a href="mailto:webmaster@campus.fsu.edu">web developer</a>.</p>
    </div>
    </div>
</div><!--//container//-->

<div class="hide">



</div>


</body>
</html>
