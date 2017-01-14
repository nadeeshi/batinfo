
$(document).ready(function(){
    $.ajax({
        // http://localhost/batinfo/admin/controller/insert/graph_data.php
        //url: "http://localhost/batinfo/controller/graph/data2.php",
        url: "../../controller/graph/data2.php",
        method: "GET",
        success: function(data) {
            console.log(data);
            var bats = [];
            var popultion = [];

            for(var i in data) {
                bats.push("Bats " + data[i].scientific_name);
                popultion.push(data[i].population);
            }

            var chartdata = {
                labels: bats,
                datasets : [
                    {
                        label: 'Bats Population',
                        backgroundColor: 'rgba(500, 500, 500, 0.75)',
                        borderColor: 'rgba(200, 200, 200, 0.75)',
                        hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                        hoverBorderColor: 'rgba(200, 200, 200, 1)',
                        data: popultion
                    }
                ]
            };

            var ctx = $("#mycanvas");

            var barGraph = new Chart(ctx, {
                type: 'pie',
                data: chartdata
            });
        },
        error: function(data) {
            console.log(data);
        }
    });
});
