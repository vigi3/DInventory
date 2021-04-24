
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);



function loadPieChart() 
{
    console.log('javascript');
}

function drawChart() 
{

    $.ajax({
        url: "Controller/PieChartService.php",
        dataType: "json",
        async: true
        }).done(function(jsonData){
            console.log(jsonData);
            // var arrayJson = JSON.parse(jsonData);
            

            var data =  new google.visualization.arrayToDataTable([
                ['Color', 'Quantity'],
                ['Rupture de Stock',     jsonData['red']],
                ['Stock Faible',         jsonData['orange']],
                ['Stock à moitié',       jsonData['yellow']],
                ['En stock',             jsonData['green']],
            ]); 


            var options = {
                title: 'Etat des stocks',
                titleTextStyle:  {color: '#5e6668',
                                  fontName: 'Bodoni Moda'}, 
                backgroundColor: 'white',
                colors:['#aa3d01','#df861d', '#fdc029', '#a1ae25'],
                legend: {position: 'none'},
                slices: { 1: {offset: 0.1}
                }
            };

            var chart = new google.visualization.PieChart(document.getElementsByClassName('pieChart')[0]);

            chart.draw(data, options);
                }).fail(function() {
                    google.visualization.errors.addError(chartDiv, 
                      "Failed to load data for the chart.");
                  });
}