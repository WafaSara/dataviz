var chart; //global
var selectedContract;
var selectedStation;

$(document).ready(function() {

    setInfos();

    chart = new Highcharts.Chart({
        chart: {
            renderTo: 'chartContainer',
            defaultSeriesType: 'spline',
            events: {
                load: requestData
            }
        },
        title: {
            text: 'Velib Live Availability'
        },
        xAxis: {
            type: 'datetime',
            tickPixelInterval: 150,
            maxZoom: 20 * 1000
        },
        yAxis: {
            minPadding: 0.2,
            maxPadding: 0.2,
            title: {
                text: 'Dispo',
                margin: 80
            }
        },
        plotOptions: {
           line: {
               dataLabels: {
                   enabled: true
               },
               enableMouseTracking: false
           }
       },
        series: [{
            name: 'Vélib Availability',
            data: []
        }]
    });

    $( "#ok" ).click(function() {
        if (($( "#contract" ).val() != selectedContract) || ($( "#station" ).val() != selectedStation)){
            chart.series[0].setData([]);
            setInfos(); 
        }
    });

    function setInfos() {
        selectedContract = $( "#contract" ).val();
        selectedStation = $( "#station" ).val();
        console.log(selectedContract);
        $("#contract-title").text(selectedContract);
        $("#station-title").text(selectedStation);
    }
});
