
    "use strict";

var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus","September","Oktober","November","Desember"],
    datasets: [{
      label: 'Jumlah Pembayaran',
      data: [<?php echo $data_chart[0]; ?>,
             <?php echo $data_chart[1]; ?>,
             <?php echo $data_chart[2]; ?>,
             <?php echo $data_chart[3]; ?>,
             <?php echo $data_chart[5]; ?>,
             <?php echo $data_chart[5]; ?>,
             <?php echo $data_chart[6]; ?>,
             <?php echo $data_chart[7]; ?>,
             <?php echo $data_chart[8]; ?>,
             <?php echo $data_chart[9]; ?>,
             <?php echo $data_chart[10]; ?>,
             <?php echo $data_chart[11]; ?>,
            ],
      borderWidth: 2,
      backgroundColor: '#6777ef',
      borderColor: '#6777ef',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
    yAxes: [{
          display: true,
        
          scaleLabel: {
              display: true,
              labelString: 'Total Pembayaran'
            },
            ticks: {
              min: 0,
              max: 1000,

              // forces step size to be 5 units
              stepSize: 100
            }
        }],
      xAxes: [{
          display: true,
          scaleLabel: {
            display: true,
          },
      
        }]
    },
  }
});
