
window.onload = function () {

    var ctx = document.getElementById('counters').getContext('2d');
    
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'doughnut',
    
    // The data for our dataset
    data: {
    labels: $namesjs,
    
    datasets: [{
       
        backgroundColor: [
           

            
            
            'rgba(0, 197, 220)',
            'rgba(153, 102, 255)',
            'rgba(255, 159, 64)',
            'rgba(75, 192, 192)',
            'rgba(255, 54, 78)',
            'rgba(54, 162, 235)',
            'rgba(255, 206, 86)',
            'rgba(255, 99, 132)',
            'rgba(15, 87, 129)',
            'rgba(11, 255, 4)',
            'rgba(40, 12, 60)',
            
        ],
        borderColor: 'rgb(0, 0,0, 0)',
        data: $countersjs
    }]
    },
    
    // Configuration options go here
    options: {}
    });

    
    
    var ctx2 = document.getElementById('counters2').getContext('2d');
    
    var chart2 = new Chart(ctx2, {
    // The type of chart we want to create
    type: 'doughnut',
    
    // The data for our dataset
    data: {
    labels: $namesjs,
    
    datasets: [{
       
        backgroundColor: [
           

            
            
            'rgba(0, 197, 220)',
            'rgba(153, 102, 255)',
            'rgba(255, 159, 64)',
            'rgba(75, 192, 192)',
            'rgba(255, 54, 78)',
            'rgba(54, 162, 235)',
            'rgba(255, 206, 86)',
            'rgba(255, 99, 132)',
            'rgba(15, 87, 129)',
            'rgba(11, 255, 4)',
            'rgba(40, 12, 60)',
            
        ],
        borderColor: 'rgb(0, 0,0, 0)',
        data: $countersjs
    }]
    },
    
    // Configuration options go here
    options: {}
    });
}
    