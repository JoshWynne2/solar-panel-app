const s = (sketch) => {
	let element, canvas;
	sketch.setup = () => {
		console.log(inputdata.today_hourly.generation);
		element = document.getElementById("p5sketch");
		canvas = sketch.createCanvas(element.offsetWidth, element.offsetHeight);
		canvas.parent("p5sketch");
	};
	sketch.draw = () => {
		let barWidth = sketch.width / 25;
		let gap = (sketch.width - 24 * barWidth) / (24 + 1);

		barWidth = sketch.width / 35;
		gap = sketch.width / 56;
		// trial and error gives me these numbers i kinda like them more than anything else

		sketch.push();
		sketch.translate(0, sketch.height);
		for (let i = 0; i < inputdata.today_hourly.generation.length; i++) {
			let barHeight = inputdata.today_hourly.generation[i % 24];
			sketch.noStroke();
			sketch.fill("#9bf542");
			if (i == inputdata.today_hourly.generation.length - 1) sketch.fill("#fa8057");
			sketch.rect(0, barWidth, barWidth, -barHeight - barWidth, 0, 0, 15, 15);
			sketch.translate(barWidth + gap, 0);
		}
		sketch.pop();
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
		let barWidth = sketch.width / 25;
		let gap = (sketch.width - 24 * barWidth) / (24 + 1);

		barWidth = sketch.width / 35;
		gap = sketch.width / 56;
		// trial and error gives me these numbers i kinda like them more than anything else

		sketch.push();
		sketch.translate(0, sketch.height);
		for (let i = 0; i < inputdata.today_hourly.usage.length; i++) {
			let barHeight = inputdata.today_hourly.usage[i % 24];
			sketch.noStroke();
			sketch.fill("#9bf542");
			if (i == inputdata.today_hourly.usage.length - 1) sketch.fill("#fa8057");
			sketch.rect(0, barWidth, barWidth, -barHeight - barWidth, 0, 0, 15, 15);
			sketch.translate(barWidth + gap, 0);
		}
		sketch.pop();
	};
	sketch.windowResized = () => {
		sketch.resizeCanvas(element.offsetWidth, element.offsetHeight);
	};
};
let generation = new p5(s);
let usage = new p5(d);
// console.log(document.getElementById("p5sketch"));
