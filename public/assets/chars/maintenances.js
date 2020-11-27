window.onload = function () {
  var ctx2 = document.getElementById('maintenances').getContext('2d');

  var chart = new Chart(ctx2, {
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
      data: [$active_maintenances, $nonactive_maintenances]
  }]
  },
  
  // Configuration options go here
  options: {}
  });
  // 
  // 
  // 
  var ctx = document.getElementById('maintenances2').getContext('2d');

  var chart2 = new Chart(ctx, {
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
      data: [$active_maintenances, $nonactive_maintenances]
  }]
  },
  
  // Configuration options go here
  options: {}
  });

}