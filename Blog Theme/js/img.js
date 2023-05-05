var canvas,ctx;
var n = 20;
var cx,cy;
var rad = 50;

var delta = 0;
window.onload(init());

function init() {
    canvas = document.getElementById('canvas');
    ctx = canvas.getContext("2d");
    
  
    ctx.canvas.width  = window.innerWidth;
    ctx.canvas.height = window.innerHeight;
  
    cx = ctx.canvas.width/2;
    cy = ctx.canvas.height/2;

    draw();
}

function draw () {

    ctx.clearRect(0,0,canvas.width,canvas.height);

    delta += 0.05;
  
    console.log(cx-2*rad,cx-2*rad,
      cx+rad,cx+rad);
    var gradient=ctx.createLinearGradient(
      cx-rad,cy-rad,
      cx+rad,cy+rad);
    gradient.addColorStop(0,"#FF00FF");
    gradient.addColorStop(0.5,"#FFFF00");
    gradient.addColorStop(1.0,"#FF0000");

    for(var i=0;i<n;i++){
        var pivx = (cx+rad*Math.cos(i*2*Math.PI/n + delta ));
        var pivy = (cy+rad*Math.sin(i*2*Math.PI/n + delta ));

        ctx.translate(pivx,pivy);
        ctx.rotate(i*2*Math.PI/n);
        ctx.translate(-pivx,-pivy);

        ctx.beginPath();
        ctx.fillStyle = gradient;
        ctx.fillRect(pivx,pivy,10,50);
        //ctx.fill();
        ctx.closePath();

        ctx.translate(pivx,pivy);
        ctx.rotate(-i*2*Math.PI/n);
        ctx.translate(-pivx,-pivy);
    }

    window.requestAnimationFrame(draw);
}

//window.onload(init());