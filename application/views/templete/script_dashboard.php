
  <!-- General JS Scripts -->
  <script src="<?= base_url('assets/');  ?>assets/modules/jquery.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/popper.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/tooltip.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/moment.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="<?= base_url('assets/');  ?>assets/modules/jquery.sparkline.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/chart.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <!-- JS Libraies -->
  <script src="<?= base_url('assets/');  ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>

    <script src="<?= base_url('assets/');  ?>assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>

  <script src="<?= base_url('assets/');  ?>assets/modules/cleave-js/dist/cleave.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="<?= base_url('assets/');  ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('assets/');  ?>assets/js/page/bootstrap-modal.js"></script>





  <!-- Page Specific JS File -->
  <script src="<?= base_url('assets/');  ?>assets/js/page/modules-datatables.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/modules/sweetalert/sweetalert.min.js"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('assets/');  ?>assets/js/scripts.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/js/custom.js"></script>
  
  <script src="<?= base_url('assets/');  ?>assets/js/mask.js"></script>
  <script src="<?= base_url('assets/');  ?>assets/js/function.js"></script>

  <script type="text/javascript">
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
              max: 2000,

              // forces step size to be 5 units
              stepSize: 200
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
  </script>

  

  <script type="text/javascript">
    $(document).ready(function(){

      $('.uang').mask('000.000.000.000.000', {reverse:true});
      $('.telepon').mask('000 000 000 0000', {reverse:true});
      $('.nisn').mask('000 000 0000', {reverse:true});


    });

      $('.tambah-siswa').on('click',function(){

            $('.telepon').unmask();
            $('.nisn').unmask();

      });


    //    $("#nominal_bulan").keyup(function(){
   
    //     // $("#nominal_bulan").unmask();
    //     var bil1 = $("#nominal_bulan").val();
    //     console.log(bil1);
    //     // var hasil = bil1 * 12;

    //     // $("#nominal_tahun").attr("value",hasil);
    //     // $('#nominal_tahun').mask('000.000.000', {reverse:true});
    // });







  </script>
</body>
</html>