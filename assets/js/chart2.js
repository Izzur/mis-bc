function updateHC2(arg){
	if (arguments.length==0) arg='%'; // TODO: Set default to Raw Coal (?)
	var _pit = alasql("SELECT KNAME,SUM(TOTAL) AS TOTAL FROM ? WHERE MAKTX LIKE '"+arg+"%' GROUP BY KNAME ORDER BY KNAME",[actual]);
	var act_pit = [];
	var act_pit_dd = [];
	var drilldown = [];
	var temp = [];
	var currentID;
	alasql("SELECT KNAME,SUM(TOTAL) AS TOTAL,MONTHS FROM ? "+
	"WHERE MAKTX LIKE '"+arg+"%' GROUP BY KNAME, MONTHS ORDER BY KNAME, MONTHS",[actual]).forEach(function(item,index){
		if(index==0) currentID=item.KNAME;
		if(item.KNAME!=currentID){
			currentID=item.KNAME;
			drilldown.push(temp);
			temp=[];
		} temp.push([item.MONTHS,item.TOTAL]);
	}); drilldown.push(temp);
	_pit.forEach(function(item, index){
		act_pit.push({'name':item.KNAME,'y':item.TOTAL,'drilldown':(index+1)});
	});
	drilldown.forEach(function(item,index){
		act_pit_dd.push({'name':_pit[index].KNAME,'id':(index+1),'data':drilldown[index]});
	});
	$('#container-chart2').highcharts({
		chart: { type: 'column' },
		title: { text: 'Actual Production per Contractor. In 1000 MT<br>January, 2015 to December, 2015' },
		subtitle: { text: 'Click the columns to view detailed data.' },
		xAxis: { type: 'category' },
		yAxis: {
			title: { text: 'Total Production' }
		},
		legend: { enabled: false },
		plotOptions: {
			column: { minPointLength: 10 },
			series: {
				borderWidth: 0,
				dataLabels: {
					enabled: true,
					format: '{point.y:,.2f}'
				}
			}
		},
		tooltip: {
			headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
			pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:,.2f}</b><br/>'
		},
		series: [{
			name: 'Pit',
			colorByPoint: true,
			data: act_pit
		}],
		drilldown: {
			drillUpButton:{
				position:{
					x: 0, y:-50
				}
			},
			series: act_pit_dd
		}
	});
}

$(document).ready(function(){
	updateHC2();
});