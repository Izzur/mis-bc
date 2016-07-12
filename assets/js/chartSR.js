var color = [];
do {color.push('#'+("000000"+Math.random().toString(16).slice(2, 8).toUpperCase()).slice(-6))}
while(color.length<3)
$(document).ready(function(){
	var ctx = $('#srChart');
	var srData = {
		labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
		datasets: [{
			label: 'Lati',
			data: [12, 10, 7, 14, 10, 8],
			fill: false,
			backgroundColor: color[0],
            borderColor: color[0]
		}, {
			label: 'Binungan',
			data: [8, 6, 10, 14, 12, 14],
			fill: false,
			backgroundColor: color[1],
            borderColor: color[1]
		}, {
			label: 'Sambarata',
			data: [9, 5, 11, 12, 9, 10],
			fill: false,
			backgroundColor: color[2],
            borderColor: color[2]
		}]
	};
	var srOptions = {
		scales: {
			yAxes: [{
				ticks: {
					beginAtZero: true,
					suggestedMax: 20
				}
			}]
		}
	};
	var srChart = new Chart(ctx, {
		type: 'line',
		data: srData,
		options: srOptions
	});
	
});