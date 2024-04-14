const s = (sketch) => {
	let x, y;
	let element, canvas;
	sketch.setup = () => {
		element = document.getElementById("p5sketch");
		canvas = sketch.createCanvas(element.offsetWidth, element.offsetHeight);
		canvas.parent("p5sketch");
	};
	sketch.draw = () => {
		x = sketch.mouseX;
		y = sketch.mouseY;
		sketch.stroke(170);
		sketch.fill(255);
		sketch.rect(x, y, 50, 50);
		sketch.rect(100, 100, 50, 50);
	};

	sketch.windowResized = () => {
		sketch.resizeCanvas(element.offsetWidth, element.offsetHeight);
	};
};

const d = (sketch) => {
	let x = 50;
	let y = 50;
	sketch.setup = () => {
		let element = document.getElementById("p5sketch2");
		let canvas = sketch.createCanvas(element.offsetWidth, element.offsetHeight);
		canvas.parent("p5sketch2");
	};
	sketch.windowResized = () => {
		sketch.resizeCanvas(element.offsetWidth, element.offsetHeight);
	};
};
let generation = new p5(s, document.getElementById("p5sketch"));
let usage = new p5(d, document.getElementById("p5sketch2"));
// console.log(document.getElementById("p5sketch"));
