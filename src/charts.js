<?php 
echo $battleship1->ammo . ',' . $battleship2->ammo . ',' . $battleship1->health . ',' . $battleship2->health
. ',' . $ship->fuel . ',' . $battleship2->fuel . ',' . $ship->hitPoints . ',' . $battleship2->hitPoints; 
?>
  var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Ship1 Ammo', 'Ship2 Ammo', 'Ship1 Health', 'Ship2 Health', 'Ship1 Fuel', 'Ship2 Fuel', 'Ship1 HP', 'Ship2 HP'],
            datasets: [{
                label: 'Stats',
                data: [],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });