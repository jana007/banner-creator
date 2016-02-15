function selectItem(obj){
	if(obj.className == 'seals'){
		for(var i=0; i<document.getElementsByClassName('seals').length; i++){
		document.getElementsByClassName('seals')[i].nextElementSibling.style.backgroundColor = 'white';
		}
		obj.nextElementSibling.style.backgroundColor = 'silver';
	}
	else if(obj.className == 'bks'){
		for(var i=0; i<document.getElementsByClassName('bks').length; i++){
		document.getElementsByClassName('bks')[i].nextElementSibling.style.backgroundColor = 'white';
		}
		obj.nextElementSibling.style.backgroundColor = 'silver';
	}
	clearAndRedraw('all');
}

function previewBanner(sealAddr, backgroundAddr){
	var cSeal = '';
	var cImage = '';
	if(sealAddr != '')
		cSeal = sealAddr;
	if(backgroundAddr != '')
		cImage = backgroundAddr;

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

		drawText("title");
		drawText("number");		
		drawText("instructor");	

		var dataURL = oCanvas.toDataURL('image/png');
	    document.getElementById('downloadCanvas').src = dataURL;
	    document.getElementById('downloadBanner').href = dataURL;
	}

}


function clearAndRedraw(cases){
	var oCanvas = document.getElementById("thecanvas");
	var oCtx = oCanvas.getContext("2d");

	oCtx.clearRect(0, 0, oCanvas.width, oCanvas.height);
	var commonSeal = '';
	var commonBk = '';
	for(var i=0; i<document.getElementsByClassName('seals').length; i++){
			if(document.getElementsByClassName('seals')[i].nextElementSibling.style.backgroundColor == 'silver'){
				commonSeal = document.getElementsByClassName('seals')[i].src.substring(document.getElementsByClassName('seals')[i].src.lastIndexOf('images'),document.getElementsByClassName('seals')[i].src.length);
			}
		}
	for(var j=0; j<document.getElementsByClassName('bks').length; j++){
			if(document.getElementsByClassName('bks')[j].nextElementSibling.style.backgroundColor == 'silver'){
				commonBk = document.getElementsByClassName('bks')[j].src.substring(document.getElementsByClassName('bks')[j].src.lastIndexOf('images'),document.getElementsByClassName('bks')[j].src.length);
				break;
			}
		}
	previewBanner(commonSeal, commonBk);

	switch (cases){
			case "number":
				drawText("title");
				drawText("instructor");
				break;
			case "title":
				drawText('number');
				drawText('instructor');
				break;
			case "instructor":
				drawText("title");
				drawText("number");	
				break;	
			case "all":
				drawText("title");
				drawText("number");		
				drawText("instructor");
				break;
	}		
}

function drawText(type){
	var oCanvas = document.getElementById("thecanvas");
	var oCtx = oCanvas.getContext("2d");

	if(type == 'number'){
		var obj = document.getElementById('course-number').parentNode;
		var num_color = obj.nextElementSibling.childNodes[0].value;
		var num_style = obj.nextElementSibling.nextElementSibling.childNodes[0].value;
		//var num_shadow = obj.nextElementSibling.nextElementSibling.nextElementSibling.childNodes[0].checked;
		
		/*if(num_shadow == true){
		oCtx.shadowColor = "#000";
		oCtx.shadowOffsetX = 5;
		oCtx.shadowOffsetY = 5;
		oCtx.shadowBlur = 5;
		}else{
		oCtx.shadowOffsetX = 0;
		oCtx.shadowOffsetY = 0;
		oCtx.shadowBlur = 0;	
		}*/
		
		switch (num_style){
			case "normal":
				oCtx.font = "normal 18px Arial";
				break;
			case "bold":
				oCtx.font = "bold 18px Arial";	
				break;
			case "italic":
				oCtx.font = "italic 18px Arial";
				break;
		}
		oCtx.fillStyle = num_color;
		oCtx.fillText(document.getElementById('course-number').value, 110, 28);
	}
	else if(type == 'title'){
		var obj = document.getElementById('course-title').parentNode;
		var title_color = obj.nextElementSibling.childNodes[0].value;
		var title_style = obj.nextElementSibling.nextElementSibling.childNodes[0].value;
		//var title_shadow = obj.nextElementSibling.nextElementSibling.nextElementSibling.childNodes[0].checked;
		
		/*if(title_shadow == true){
		oCtx.shadowColor = "#000000";
		oCtx.shadowOffsetX = 5;
		oCtx.shadowOffsetY = 5;
		oCtx.shadowBlur = 5;
		}else{
		oCtx.shadowOffsetX = 0;
		oCtx.shadowOffsetY = 0;
		oCtx.shadowBlur = 0;	
		}*/
		
		switch (title_style){
			case "normal":
				oCtx.font = "normal 30px Arial";
				break;
			case "bold":
				oCtx.font = "bold 30px Arial";	
				break;
			case "italic":
				oCtx.font = "italic 30px Arial";
				break;
		}
		oCtx.fillStyle = title_color;
		oCtx.fillText(document.getElementById('course-title').value, 110, 60);
	}
	else if(type == 'instructor'){
		var obj = document.getElementById('instructor').parentNode;
		var instr_color = obj.nextElementSibling.childNodes[0].value;
		var instr_style = obj.nextElementSibling.nextElementSibling.childNodes[0].value;
		//var instr_shadow = obj.nextElementSibling.nextElementSibling.nextElementSibling.childNodes[0].checked;
		
		/*if(instr_shadow == true){
		oCtx.shadowColor = "#000000";
		oCtx.shadowOffsetX = 5;
		oCtx.shadowOffsetY = 5;
		oCtx.shadowBlur = 5;
		}else{
		oCtx.shadowOffsetX = 0;
		oCtx.shadowOffsetY = 0;
		oCtx.shadowBlur = 0;	
		}*/
		
		switch (instr_style){
			case "normal":
				oCtx.font = "normal 16px Arial";
				break;
			case "bold":
				oCtx.font = "bold 16px Arial";	
				break;
			case "italic":
				oCtx.font = "italic 16px Arial";
				break;
		}
		oCtx.fillStyle = instr_color;
		oCtx.fillText(document.getElementById('instructor').value, 110, 82);
	}


	var dataURL = oCanvas.toDataURL('image/png');
    document.getElementById('downloadCanvas').src = dataURL;
    document.getElementById('downloadBanner').href = dataURL;
}