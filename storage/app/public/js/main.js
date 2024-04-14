const s = (sketch) => {
	let element, canvas;
	sketch.setup = () => {
		element = document.getElementById("p5sketch");
		canvas = sketch.createCanvas(element.offsetWidth, element.offsetHeight);
		canvas.parent("p5sketch");
	};
	sketch.draw = () => {
		for (let i = 0; i < 24; i++) {
			sketch.noStroke();
			sketch.fill("#9bf542");
			sketch.rect(20 * i, sketch.height / 2, 15, sketch.height / 2 + 20, 15);
		}
	};

	sketch.windowResized = () => {
		sketch.resizeCanvas(element.offsetWidth, element.offsetHeight);
	};
};

const d = (sketch) => {
	let element;
	sketch.setup = () => {
		element = document.getElementById("p5sketch2");
		let canvas = sketch.createCanvas(element.offsetWidth, element.offsetHeight);
		canvas.parent("p5sketch2");
	};

	sketch.draw = () => {
		for (let i = 0; i < 24; i++) {
			sketch.noStroke();
			sketch.fill("#9bf542");
			sketch.rect(20 * i, sketch.height / 2, 15, sketch.height / 2 + 20, 15);
		}
	};
	sketch.windowResized = () => {
		sketch.resizeCanvas(element.offsetWidth, element.offsetHeight);
	};
};
let generation = new p5(s);
let usage = new p5(d);
// console.log(document.getElementById("p5sketch"));
