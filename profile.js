var finalx = 600, finaly=500;

window.onload=move;

function move(){
	setInterval("after()",1);
}

function after(){
	dom = document.getElementById('greatDay');
	
	var x = dom.style.left;
	var y = dom.style.top;


	x = parseInt(x);
	y = parseInt(y);

	
	if ((x != finalx) || (y != finaly)) 
	{ 
		if (x < finalx) x++;
		if (y < finaly) y++;
	  
		dom.style.left = x + "px";
		dom.style.top = y + "px";
	}

}