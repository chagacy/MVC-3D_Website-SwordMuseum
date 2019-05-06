//start or stop animations
var animation = false;
function animateModel()
{
	animation = !animation;
    document.getElementById('model__Animation').setAttribute('enabled', animation.toString());
	document.getElementById('model__Animation1').setAttribute('enabled', animation.toString());
	document.getElementById('model__Animation2').setAttribute('enabled', animation.toString());
	document.getElementById('model__Animation3').setAttribute('enabled', animation.toString());
}

//return all models back to their starting positons
function resetPosition()
{
	document.getElementById('model__sword-182').setAttribute('translation', '-0.3243 8.321 -10.24');
	document.getElementById('model__sword-182').setAttribute('rotation', '0 0 0');
	document.getElementById('model__sheath-183').setAttribute('translation', '-7.202 -1.211 -28.27');
	document.getElementById('model__sheath-183').setAttribute('rotation', '0 0 0');

	document.getElementById('model__sword-77').setAttribute('translation', '-0.6747 9.329 1.653');
	document.getElementById('model__sword-77').setAttribute('rotation', '0 0 0');
	document.getElementById('model__sheath-78').setAttribute('translation', '-10.53 -2.316 -12.03');
	document.getElementById('model__sheath-78').setAttribute('rotation', '0 0 0');

	document.getElementById('model__sword-130').setAttribute('translation', '0.8223 0.7222 0.7222');
	document.getElementById('model__sword-130').setAttribute('rotation', '0 0 0');

	document.getElementById('model__dagger-54').setAttribute('translation', '-0.06711 -5.211 -0.9809');
	document.getElementById('model__dagger-54').setAttribute('rotation', '0 0 0');

	

	console.log("reset");
}

//change model to wireframe
function wireFrame()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

//turn front light on or off by changing its intensity
var frontlight = true;
function lightFront()
{
	if (frontlight == true){
		document.getElementById('model__FrontLight-203').setAttribute('intensity', 0);
		frontlight = false;
		console.log("frontRight off");
	}
	else{
		document.getElementById('model__FrontLight-203').setAttribute('intensity', 1);
		frontlight = true;
		console.log("frontRight on");
	}
}

//turn front right light on or off by changing its intensity
var frontrightlight = true;
function lightFrontRight()
{
	if (frontrightlight == true){
		document.getElementById('model__FrontRightLight-194').setAttribute('intensity', 0);
		frontrightlight = false;
		console.log("frontRight off");
	}
	else{
		document.getElementById('model__FrontRightLight-194').setAttribute('intensity', 1.5);
		frontrightlight = true;
		console.log("frontRight on");
	}
}

//turn front left light on or off by changing its intensity
var frontleftlight = true;
function lightFrontLeft()
{
	if (frontleftlight == true){
		document.getElementById('model__FrontLeftLight-192').setAttribute('intensity', 0);
		frontleftlight = false;
		console.log("frontLeft off");
	}
	else{
		document.getElementById('model__FrontLeftLight-192').setAttribute('intensity', 1.5);
		frontleftlight = true;
		console.log("frontLeft on");
	}
}

//turn back left light on or off by changing its intensity
var backrightlight = true;
function lightBackRight()
{
	if (backrightlight == true){
		document.getElementById('model__BackRightLight-195').setAttribute('intensity', 0);
		backrightlight = false;
		console.log("backRight off");
	}
	else{
		document.getElementById('model__BackRightLight-195').setAttribute('intensity', 1.5);
		backrightlight = true;
		console.log("backRight on");
	}
}

//turn back right light on or off by changing its intensity
var backleftlight = true;
function lightBackLeft()
{
	if (backleftlight == true){
		document.getElementById('model__BackLeftLight-193').setAttribute('intensity', 0);
		backleftlight = false;
		console.log("frontLeft off");
	}
	else{
		document.getElementById('model__BackLeftLight-193').setAttribute('intensity', 1.5);
		backleftlight = true;
		console.log("frontLeft on");
	}
}

// change view to the front camera
function cameraFront()
{
	document.getElementById('model__FrontCamera-197').setAttribute('bind', 'true');
}

// change view to the left camera
function cameraLeft()
{
	document.getElementById('model__LeftCamera-95').setAttribute('bind', 'true');
}

// change view to the top camera
function cameraTop()
{
	document.getElementById('model__TopCamera-201').setAttribute('bind', 'true');
}

// change view to the handle camera
function cameraHandle()
{
	document.getElementById('model__HandleCamera-74').setAttribute('bind', 'true');
}

// change view to the blade camera
function cameraBlade()
{
	document.getElementById('model__BladeCamera-72').setAttribute('bind', 'true');
}

