function updatePie(arg) {
    if (arguments.length==0) arg='%'; // TODO: Set default to Raw Coal (?)
    var _pit = alasql("SELECT MAKTX,SUM(TOTAL) AS TOTAL FROM ? WHERE MAKTX LIKE '"+arg+"%' GROUP BY MAKTX",[actual]);
    var act_pit = [];
    _pit.forEach(function(item, index){
        act_pit.push({'name':item.MAKTX.replace(/\wMO /g,''),'y':item.TOTAL});
    });

    var _pit = alasql("SELECT KNAME,SUM(TOTAL) AS TOTAL FROM ? WHERE MAKTX LIKE '"+arg+"%' GROUP BY KNAME ORDER BY KNAME",[actual]);
    var act_pit2 = [];
    _pit.forEach(function(item, index){
        act_pit2.push({'name':item.KNAME,'y':item.TOTAL,'drilldown':(index+1)});
    });

    $('#piechart').highcharts({
        chart: {plotBackgroundColor: null, plotBorderWidth: null, plotShadow: false, type: 'pie'},
        title: {text: 'Actual Production<br>per Pit'},
        tooltip: {pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'},
        plotOptions: {
            pie: {allowPointSelect:true, cursor:'pointer', dataLabels:{enabled:false}, showInLegend:true}
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: act_pit
            //[{name: 'Microsoft Internet Explorer', y: 56.33 }, {name: 'Chrome', y: 24.03, sliced: false, selected: false }, {name: 'Firefox', y: 10.38 }, {name: 'Safari', y: 4.77 }, {name: 'Opera', y: 0.91 }, {name: 'Proprietary or Undetectable', y: 0.2 }]
        }]
    });

    $('#piechart2').highcharts({
        chart: {plotBackgroundColor: null, plotBorderWidth: null, plotShadow: false, type: 'pie'},
        title: {text: 'Actual Production<br>per Contractor'},
        tooltip: {pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'},
        plotOptions: {
            pie: {allowPointSelect:true, cursor:'pointer', dataLabels:{enabled:false}, showInLegend:true}
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: act_pit2
        }]
    })
};

$(document).ready(function(){
    updatePie();
});