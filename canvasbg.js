class Snowflake{
	constructor (opts){
		this.x = 0;
		this.y = 0;
		this.vx = 0;
		this.vy = 0;
		this.radius = 0;
		this.alpha = 0;
		
		this.reset();
	}
	reset(){
		this.x = this.randBetween(0,window.innerWidth);
		this.y = this.randBetween(0,-window.innerHeight);
		this.vy = this.randBetween(3,6);
		this.vx = this.randBetween(-5,5);
		this.radius = this.randBetween(1,4);
		this.alpha = this.randBetween(0.1,0.9);
	}
	randBetween(min,max){
		return min + Math.random() * (max-min);
	}
	update(){
		this.x += this.vx;
		this.y += this.vy;
		if(this.y+this.radius>window.innerWidth){
			this.reset();
		}
	}
}
class Snow {
	constructor(){
		this.canvas = document.getElementById("canvasbg");
		this.ctx = this.canvas.getContext("2d");
		this.snowflakes = [];
		
		
		window.addEventListener("resize",()=>this.onResize());
		this.onResize();
		this.updateBound = this.update.bind(this);
		requestAnimationFrame(this.updateBound);
		
		this.createSnowFlake();
	}
	onResize(){
		this.width = window.innerWidth;
		this.height = window.innerHeight;
		this.canvas.width = this.width;
		this.canvas.height = this.height;
	}
	createSnowFlake(){
		const flakes = window.innerWidth/4;
		
		
		for(let s=0;s<flakes;s++){
			this.snowflakes.push(new Snowflake());
			console.log("fuick");
		}
		
	}
	update(){
		this.ctx.clearRect(0,0,this.width,this.height);
		
		for(const flake of this.snowflakes){
			flake.update();
			
			this.ctx.save();
			this.ctx.fillStyle='#f88';
			this.ctx.beginPath();
			this.ctx.arc(flake.x,flake.y,flake.radius,0,Math.PI*2);
			this.ctx.closePath();
			this.ctx.globalAlpha = flake.alpha;
			this.ctx.fill();
			this.ctx.restore();
		}
		requestAnimationFrame(this.updateBound);
	}
}
new Snow();