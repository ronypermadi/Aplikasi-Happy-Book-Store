<?php
  $tgl=date('Y-m-d');
?>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <!-- page start-->
      <section class="panel">
          <header class="panel-heading">
            Daftar Nota Penjualan
          </header>
          <div class="panel-body">
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><img src="img/favicon.gif"  width="100%" /></td>
                <td style="text-align:center;">
                  <div>
                    <h3><b>HAPPY BOOK STORE</b></h3>
                    <h4>Jalan Jend. Sudirman No. 54-56, Kota Baru, Gondokusuman, Kota Yogyakarta</h4>
                    <h4>Daerah Istimewa Yogyakarta 55233</h4>
                    <h4>Telp. (0274) 512621</h4>
                  </div>
                </td>
                <td style="font-size:16px;text-align:center;">
                </td>
              </tr>
            </table><br />
              <div class="adv-table editable-table ">
                  <div class="clearfix">
                  </div>

                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                      <thead>
                        <tr>
        									<th>No Nota</th>
        									<th>Tanggal</th>
        									<th>Jumlah Harga</th>
        									<th>Nama Kasir</th>
        									<th>Cetak</th>
        								</tr>
                      </thead>
                      <tbody>
                        <?php
        							$hasil=mysql_query("SELECT DISTINCT nonota FROM penjualan order by nonota desc limit 15",$id_mysql);

        							while($baris=mysql_fetch_array($hasil)){

        									$angka = $baris[nonota];

        									$hasil1=mysql_query("SELECT * FROM penjualan WHERE nonota='$baris[nonota]'",$id_mysql);
        									$no=1;
        									$total1='0';
        									while($baris1=mysql_fetch_array($hasil1)){
        										$tanggal=$baris1[tanggal];
        										$kasir = $baris1[id_kasir];
        									if($no=='1')
        										$total1 = $baris1[total];
        									else
        										$total1 = $total1 + $baris1[total];

        									$no++;
        									}
        									?>

        								<tr>
        									<td><?php echo $baris['nonota'] ?></td>
        									<td><?php echo list_tanggal($tanggal); ?></td>
        									<td><?php echo  'Rp '. number_format($total1); ?></td>
        									<td><?php echo nama_kasir($kasir); ?></td>
        									<td class="text-center">
        										<a onClick="javascript:popUp('nota_penjualan.php?nonota=<?php echo "$angka"; ?>') " href=# title="Cetak Nota" class="btn btn-primary btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="radius">Cetak Nota</a>
        									</td>
        								</tr>
        								<?php
        									}
        								?>
                      </tbody>
                  </table>
              </div>
          </div>
      </section>
      <!-- page end-->


</section>
<!--main content end-->
