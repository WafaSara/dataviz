/**
 * Request data from the server, add it to the graph and set a timeout
 * to request again
 */
function requestData() {
    $.ajax({
        url: 'web_service/VelibManager.php' + '?contract=' + selectedContract + "&station=" + selectedStation,
        success: function(point) {
            // console.log(point);
            var series = chart.series[0],
            shift = series.data.length > 20;

            // add the point
            chart.series[0].addPoint(point, true, shift);

            // call it again after one second
            setTimeout(requestData, 60000);
        },
        cache: false
    });
}
