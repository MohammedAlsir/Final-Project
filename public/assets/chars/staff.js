window.onload = function () {



    var ctx = document.getElementById('staffs').getContext('2d');

    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'doughnut',
    
    // The data for our dataset
    data: {
    labels: ['Active', 'Non Active'],
    
    datasets: [{
       
        backgroundColor: [
            '#00c5dc',
            '#f4516c'
        ],
        borderColor: 'rgb(0, 0,1, 0)',
        data: [$active, $nonactive]
    }]
    },
    
    // Configuration options go here
    options: {}
    });
    // 
    // 
    // 

    var ctx2 = document.getElementById('staffs2').getContext('2d');

    var chart2 = new Chart(ctx2, {
    // The type of chart we want to create
    type: 'doughnut',
    
    // The data for our dataset
    data: {
    labels: ['Active', 'Non Active'],
    
    datasets: [{
       
        backgroundColor: [
            '#00c5dc',
            '#f4516c'
        ],
        borderColor: 'rgb(0, 0,1, 0)',
        data: [$active, $nonactive]
    }]
    },
    
    // Configuration options go here
    options: {}
    });
}