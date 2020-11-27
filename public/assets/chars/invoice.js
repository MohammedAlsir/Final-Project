
window.onload = function () {

    // console.log($active);
    // console.log($nonactive);

    var ctx = document.getElementById('invoices').getContext('2d');
    var ctx2 = document.getElementById('invoices_2').getContext('2d');
    // var ctx3 = document.getElementById('myChart3').getContext('2d');
    
   

    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        
        // The data for our dataset
        data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
           
            label: 'Invoices THIS YEAR',
            backgroundColor: [
                '#ffe0e6',
                '#a75dba',
                '#a2bf39',
                '#47bdef',
                '#e371b2',
                '#ffb54d',
                '#6ddbdb',
                '#8561c8',
                '#ed6647',
                '#fad55c',
                '#68c182',
                '#267db3',
            ],
            data: $a
        }]
        },
        
        // Configuration options go here
        options: {}
        });


        var chart2 = new Chart(ctx2, {
            // The type of chart we want to create
            type: 'bar',
            
            // The data for our dataset
            data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul","Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
               
                label: 'Invoices THIS YEAR',
                backgroundColor: [
                    '#ffe0e6',
                    '#a75dba',
                    '#a2bf39',
                    '#47bdef',
                    '#e371b2',
                    '#ffb54d',
                    '#6ddbdb',
                    '#8561c8',
                    '#ed6647',
                    '#fad55c',
                    '#68c182',
                    '#267db3',
                ],
                data: $a
            }]
            },
            
            // Configuration options go here
            options: {}
            });
    
   
}
    