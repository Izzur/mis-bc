$(document).ready(function(){
	var ctx = $('#srChart');
	var srData = {
		labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
		datasets: [{
			label: 'Stripping Ratio',
			data: [12, 10, 7, 14, 10, 8],
			backgroundColor: ['rgba(255, 99, 132, 0.2)'],
            borderColor: ['rgba(255,99,132,1)'],
            borderWidth: 1
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