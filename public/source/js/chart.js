$(document).ready(function(){
    var order = $('#chart').data('order');
    var listOfValue = [];
    var listofmonth = [];
    order.forEach(function(element){
        listofmonth.push(element.NL);
        listOfValue.push(element.DT);
    });
    var chart = Highcharts.chart('chart', {



        title: {
            text: 'DOANH THU THEO THÁNG'
        },

        subtitle: {
            text: ''
        },

        xAxis: {
            title: {
                text: 'Tháng'
            },
            categories: listofmonth,
        },
        yAxis: {
            title: {
                text: 'Tổng tiền'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
         plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                maxPointWidth: 50
            }
        },
        responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                }
            }
        }]
    },


        series: [{
            name:'Doanh thu',
            type: 'column',
            colorByPoint: true,
            data: listOfValue,
            showInLegend: false
        }]
    });
    
    $('#plain').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: false
            },
            subtitle: {
                text: 'Plain'
            }
        });
    });

    $('#inverted').click(function () {
        chart.update({
            chart: {
                inverted: true,
                polar: false
            },
            subtitle: {
                text: 'Inverted'
            }
        });
    });

    $('#polar').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: true
            },
            subtitle: {
                text: 'Polar'
            }
        });
    });
});