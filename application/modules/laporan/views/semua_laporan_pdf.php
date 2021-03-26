
<!DOCTYPE html>
<html lang="en-US">
<head>
<head>
<title>Print Invoice</title>
<style>
*
{
margin:0;
padding:0;
font-family:serif;
font-size:10pt;
color:#000;
}
body
{
width:100%;
font-family:serif;
font-size:10pt;
margin:0;
padding:0;
}

p
{
margin:0;
padding:0;
}


.page
{
height:297mm;
width:210mm;
page-break-after:always;
}

table.body
{
border-left: 1px solid black;
border-top: 1px solid black;

border-spacing:0;
border-collapse: collapse;

}

table td.body
{
border-right: 1px solid black;
border-bottom: 1px solid black;
padding: 2mm;
}

table.heading
{
height:50mm;
}

h1.heading
{
font-size:14pt;
color:#000;
font-weight:normal;
}

h2.heading
{
font-size:9pt;
color:#000;
font-weight:normal;
}

hr
{
color:black;
background:black;
}

#invoice_body
{
height: 149mm;
}

#invoice_body , #invoice_total
{
width:100%;
}
#invoice_body table , #invoice_total table
{
width:100%;
border-left: 1px solid black;
border-top: 1px solid black;

border-spacing:0;
border-collapse: collapse;

margin-top:5mm;
}

#invoice_body table td , #invoice_total table td.
{
font-size:9pt;
border-right: 1px solid black;
border-bottom: 1px solid black;
padding:2mm 0;
}

#invoice_body table td.text-center
{
text-align:center;
font-size:9pt;
border-right: 1px solid black;
border-bottom: 1px solid black;
padding:2mm 0;
}

#invoice_body table td.mono , #invoice_total table td.mono
{
text-align:right;
padding-right:3mm;
font-size:10pt;
}


</style>
</head>
<body>
<div id="wrapper">



<table style="width: 100%;" border="0">
	<tr>
		<td style="width: 100px;"><img style="position: absolute;width: 100px;height: auto;" src="<?= base_url('assets/img/e-spp.png');  ?>"></td>
		<td align="center">
			<span style="font-weight: bold;font-size: 18px;font-family: Arial;">
				Laporan Sistem Pembayaran Pendidikan <br>
				Sekolah Menengah Kejuruan
			</span>
		</td>
		<td style="width: 100px;"></td>
	</tr>
</table>
<hr style="border: 0;border-style: inset;border-top: 1px solid black;">


<div id="content">

<div id="invoice_body">
<table class="body">
	<tr>
        <td class="body"> No.</td>
        <td class="text-center body">ID Pembayaran</td>
        <td class="text-center body">Nama Siswa</td>
        <td class="text-center body">Kelas</td>
        <td class="text-center body">Tgl Bayar</td>
        <td class="text-center body">Bulan</td>
        <td class="text-center body">Jumlah Bayar</td>
    </tr>

   <?php
      $i=1;
      foreach ($pembayaran as $key => $value): ?>
                                                                                                                                           
      <tr>
        <td class="text-center body"><?= $i;  ?>.</td>
        <td class=" body"><?= $value['id_pembayaran'];  ?></td>
        <td class="body"><?= $value['nama'];  ?></td>
        <td class="body"><?= $value['nama_kelas'];  ?></td>
        <td class="body"><?= $value['tgl_bayar']; ?></td>
        <td class="body"><?= $value['bulan_dibayar'];  ?></td>
        <td class="mono body"><?= 'Rp '.number_format($value['jumlah_bayar'],0,".","."); ?></td>
     </tr>

     <?php 
       $i++; 
       endforeach; ?> 

                          

<tr>
<td class="body" colspan="5"></td>
<td class="mono body">Total :</td>
<td class="mono body"><?= 'Rp '.number_format($total,0,".","."); ?></td>
</tr>
</table>
</div>
<!-- <script type="text/javascript">
	window.print();
</script> -->
</body>

</html>