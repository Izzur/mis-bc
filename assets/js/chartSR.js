var color = [];
do {color.push('#'+("000000"+Math.random().toString(16).slice(2, 8).toUpperCase()).slice(-6))}
while(color.length<3)
$(document).ready(function(){
	var dataArr = [];
	for (var i=3; i<6; i++) {
		var dataRC = alasql("SELECT * FROM ? WHERE WERKS='B"+i+"00'",[rc]);
		var dataOB = alasql("SELECT * FROM ? WHERE WERKS='B"+i+"00'",[ob]);
		var foobar = [];
		for (var j = 0; j<12; j++) {
			try {foobar.push(dataOB[j].TOTAL/dataRC[j].TOTAL)} catch(e){foobar.push(0)}
		}
		dataArr.push(foobar);
	};
	var ctx = $('#srChart');
	var srData = {
		labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
		datasets: [{
			label: 'Lati',
			data: dataArr[0],
			fill: false,
			backgroundColor: color[0],
            borderColor: color[0]
		}, {
			label: 'Binungan',
			data: dataArr[1],
			fill: false,
			backgroundColor: color[1],
            borderColor: color[1]
		}, {
			label: 'Sambarata',
			data: dataArr[2],
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
					//suggestedMax: 20
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