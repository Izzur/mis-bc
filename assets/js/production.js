$(document).ready(function(){
	$('#option1').click(function(){
		updatePage('Raw');
		updateHC('Raw');
		updateHC2('Raw');
	});
	$('#option2').click(function(){
		updatePage('OB');
		updateHC('OB');
		updateHC2('OB');
	});
	function updatePage(args) {
		data_plan=[];data_act=[];
		alasql("SELECT MONTHS, ROUND(SUM(TOTAL),3) AS TOTAL FROM ? GROUP BY MONTHS ORDER BY MONTHS",[alasql(
			"SELECT MID(GSTRP,5,2) AS MONTHS,TOTAL FROM ? WHERE MAKTX LIKE '"+args+"%'",[plan])]).forEach(
			function(item,index){data_plan.push(item.TOTAL)});
		alasql("SELECT MONTHS, ROUND(SUM(TOTAL),3) AS TOTAL FROM ? "+
			"WHERE MAKTX LIKE '"+args+"%' GROUP BY MONTHS ORDER BY MONTHS",[actual]).forEach(
			function(item,index){data_act.push(item.TOTAL)});
		chartData={
			labels:label,
			datasets:[
			{label:'Plan (1000 MT)',data:data_plan,backgroundColor: 'rgba(128, 222, 234, 0.8)',borderColor: 'rgba(0, 188, 212,0.8)',borderWidth: 2},
			{label: 'Actual (1000 MT)',data: data_act,backgroundColor: 'rgba(0, 230, 118, 0.8)',borderColor: 'rgba(0, 200, 83,1)',borderWidth: 2}]
		};
		myChart.destroy();
		myChart=new Chart(ctx,{type:'bar',data:chartData,options:chartOption});
		total_plan=alasql("SELECT SUM(TOTAL) AS TOTAL FROM ? WHERE MAKTX LIKE '"+args+"%'",[plan]);
		total_act=alasql("SELECT SUM(TOTAL) AS TOTAL FROM ? WHERE MAKTX LIKE '"+args+"%'",[actual])
		$('#side-plan').html(total_plan[0].TOTAL.toFixed(3).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
		$('#side-act').html(total_act[0].TOTAL.toFixed(3).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
		$('#side-prc').html(((total_act[0].TOTAL/total_plan[0].TOTAL)*100).toFixed(2).toString()+"%");
		$('#container-chart').highcharts().series[0].setData([],true);
	}
});