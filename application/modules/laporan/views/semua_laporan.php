
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>

<style type="text/css">
     h1 {
        font-weight: bold;
        font-size: 20pt;
        text-align: center;
    }
 
    table {
        border-collapse: collapse;
        width: 100%;
    }
 
    .table th {
        padding: 8px 8px;
        border:1px solid #000000;
        text-align: center;
    }
 
    .table td {
        padding: 3px 3px;
        border:1px solid #000000;
        font-size: 12px;
    }

    .head {
      font-size: 12px;
    }
 
    .text-center {
        text-align: center;
    }
</style>
<body>
  

  <table border="0">
    <tr >
      <th width="100px;"></th>
      <th style="text-align: right !important;">
        <img style="width: 60px; height: 30px;" src="e-spp.png">
      </th>
      <th style="text-align: left !important; padding-left: 5px;font-size: 24px;">Laporan Pembayaran SPP <br> </th>
    </tr>
    <tr>
      <th colspan="5" align="5" style="font-size: 14px;">SMK KARTIKA XX-1 MAKASSAR</th>
    </tr>
  </table>


    <table border="1px" class="table">
                        <thead>                                 
                          <tr>
                            <th class="text-center head">
                              No.
                            </th>
                            <th class="text-center head">NISN</th>
                            <th class="text-center head">Nama Siswa</th>
                            <th class="text-center head">Kelas</th>
                            <th class="text-center head">Tgl Bayar</th>
                            <th class="text-center head">Bulan Bayar</th>
                             <th class="text-center head">Jumlah Bayar</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                        $i=1;
                         foreach ($pembayaran as $key => $value): ?>
                                                                                                                                           
                          <tr>
                            <td class="text-center"><?= $i;  ?>.</td>
                            <td class="text-center"><?= $value['nisn'];  ?></td>
                            <td><?= $value['nama'];  ?></td>
                            <td><?= $value['nama_kelas'];  ?></td>
                            <td><?= $value['tgl_bayar']; ?></td>
                            <td><?= $value['bulan_dibayar'];  ?></td>
                            <td><?= 'Rp '.number_format($value['jumlah_bayar'],0,".","."); ?></td>
                          </tr>

                            <?php 
                           $i++; 
                          endforeach; ?>  
    
                        </tbody>
                      </table>

                      <script type="text/javascript">
                        window.print();
                      </script>

</body>
</html>
