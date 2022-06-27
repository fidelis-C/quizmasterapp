let stage = document.getElementById('board');
let ctx = stage.getContext("2d");

let playX = 20;
let playY = 20;
let playW = 10;
let playH = 10;

let setSpeed;

let score = 0;
let speedometer = 0;


function question(ques){
	let input = String(prompt(ques))
}
loopRight = function (loop){
	playX += loop;
	return loopRight;
}

function moveRight(speed){
	playX +=speed;
}

function loopLeft(speed){

}
function moveLeft(speed){
	playX -=speed;
}

function loopUp(speed){
	playY -=speed;
}
function moveUp(speed){
	playY -=speed;
}
function loopDown(speed){
	playY +=speed;
}
function moveDown(speed){
	playY +=speed;
}



function drawBoard(boardWidth, boardHeight, bgColor) {
	
let boardX = document.getElementById('board');
let boardY = document.getElementById('board');
let boardColor = document.getElementById('board');
boardX.width = boardWidth;
boardY.height = boardHeight;
boardColor.style.backgroundColor = bgColor;
}

function backgroundImage(srcs, x, y, width, height){

	var img = new Image();
		img.src = srcs;
		ctx.beginPath();
		ctx.drawImage(img, x, y, width, height);
		ctx.closePath();
}

function boardPosition(position){
let placeBoard = document.getElementById('panel');
	placeBoard.align = position;
	
}

let counter = function(on, off){

	counterOn = on;

	counterOff = off;

	if(counterOn == 'on' && counterOff == 'off'){
		speedometer ++;
	}

	else if(counterOn == 'off' && counterOff == 'on'){
		speedometer = 0;
	}
	else{
		alert("wrong input");
	}



	return counter;
}
function count(counts){

	ctx.beginPath();
	ctx.fillText(counts + speedometer, 400,30);
	ctx.fillStyle = 'green';
	ctx.fill();
	ctx.closePath();
}

function welcomeText(){

	
	ctx.beginPath();
	ctx.fillText('Hello world:' + score, 30,30);
	ctx.fillStyle = 'green';
	ctx.fill();
	ctx.closePath();
}

function img(srcs, x1, y1, w1, h1){
	var img = new Image();
		img.src = srcs;

		ctx.beginPath();
		ctx.drawImage(img, x1, y1, w1, h1);
		ctx.closePath();
}

function player(){
	ctx.clearRect(0,0,stage.width, stage.height);
	ctx.beginPath();
	ctx.rect(playX, playY, playW, playH);
	ctx.fillStyle = 'blue';
	ctx.fill();
	ctx.closePath();

}

function enemy(x2,y2,w2,h2, color){

ctx.beginPath();
	ctx.rect(x2,y2,w2,h2);
	ctx.fillStyle = color;
	ctx.fill();
	ctx.closePath();
}


function start(setSpeed){
setInterval(init, parseInt(setSpeed));
}