$(document).ready(function(){
  function foobar(arr) {
    var n = [];
    arr.forEach(function(item,index){
      n.push(item.X);
    });
    return n;
  }
  function avg() {
    var n = [];
    for (var i = 0; i < lati.length; i++) {
      n.push((lati[i]+binungan[i]+sambarata[i])/3);
    }
    return n;
  }
  var lati = foobar(alasql("SELECT SUM(TOTAL) AS X FROM ? WHERE MAKTX LIKE 'Raw%' AND WERKS='B300' GROUP BY MONTHS ORDER BY MONTHS",[actual]));
  var binungan = foobar(alasql("SELECT SUM(TOTAL) AS X FROM ? WHERE MAKTX LIKE 'Raw%' AND WERKS='B400' GROUP BY MONTHS ORDER BY MONTHS",[actual]));
  var sambarata = foobar(alasql("SELECT SUM(TOTAL) AS X FROM ? WHERE MAKTX LIKE 'Raw%' AND WERKS='B500' GROUP BY MONTHS ORDER BY MONTHS",[actual]));
  var average = avg();
  $('#linechart').highcharts({
      title: {text: 'Actual Production per Pit per Month', x: -20 /*center*/ },
      subtitle: {text: '', x: -20 },
      xAxis: {categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'] },
      yAxis: {
          title: {text: 'TOTAL PRODUCTION (1000MT)'},
          plotLines: [{value: 0, width: 1, color: '#808080'}]
      },
      tooltip: {valueSuffix: '°C'},
      legend: {
          layout: 'horizontal',
          align: 'center',
          verticalAlign: 'bottom',
          borderWidth: 0
      },
      series: [{
          name: 'Lati', data: lati }, {
          name: 'Binungan', data: binungan }, {
          name: 'Sambarata', data: sambarata }, {
          name: 'Average', data: average
      }]
  });
});
