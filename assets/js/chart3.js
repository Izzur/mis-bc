function updatePie(arg) {
    if (arguments.length==0) arg='%'; // TODO: Set default to Raw Coal (?)
    var _pit = alasql("SELECT MAKTX,SUM(TOTAL) AS TOTAL FROM ? WHERE MAKTX LIKE '"+arg+"%' GROUP BY MAKTX",[actual]);
    var act_pit = [];
    var act_pit_dd = [];
    var drilldown = [];
    var temp = [];
    var currentID;
    _pit.forEach(function(item, index){
        act_pit.push({'name':item.MAKTX.replace(/\wMO /g,''),'y':item.TOTAL});
    });

    $('#piechart').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Browser market shares January, 2015 to May, 2015'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
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
};

$(document).ready(function(){
    updatePie();
});