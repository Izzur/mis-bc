$(document).ready(function(){
	$('#option1').click(function(){
		// TODO: Edit data raw coal
		updatePage('Raw');
	});
	$('#option2').click(function(){
		// TODO: Edit data overburden
		updatePage('OB');
	});
	function updatePage(args) {
		myChart.destroy();
		myChart=new Chart(ctx,{type:'bar',data:chartData,options:chartOption});
		total_plan=alasql("SELECT SUM(TOTAL) AS TOTAL FROM ? WHERE MAKTX LIKE '"+args+"%'",[plan]);
		total_act=alasql("SELECT SUM(TOTAL) AS TOTAL FROM ? WHERE MAKTX LIKE '"+args+"%'",[actual])
		$('#side-plan').html(total_plan[0].TOTAL.toFixed(3).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
		$('#side-act').html(total_act[0].TOTAL.toFixed(3).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
		$('#side-prc').html(((total_act[0].TOTAL/total_plan[0].TOTAL)*100).toFixed(2).toString()+"%");
	}
});