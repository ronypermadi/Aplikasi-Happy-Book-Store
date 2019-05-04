<!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <!-- page start-->
      <section class="panel">
          <header class="panel-heading">
              Menu Pengelolaan Pembayaran Transaksi Member
          </header>
          <div class="panel-body">
            <table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><img src="img/favicon.gif"  width="100%" /></td>
                <td style="text-align:center;">
                  <div>
                    <h3><b>HAPPY BOOK STORE</b></h3>
                    <h4>Jalan Masjid, Wonosari, Gunungkidul, Daerah Istimewa Yogyakarta, 55233</h4>
                    <h4>Telp. 085-602-082-990</h4>
                  </div>
                </td>
                <td style="font-size:16px;text-align:center;">
                </td>
              </tr>
            </table><br />
              <div class="adv-table editable-table ">
                  <div class="space15"></div>
                  <h4 align="center">Data Pembayaran ( Belum Lunas )</h4>
                  <table class="table table-striped table-hover table-bordered" id="editable-sample">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Kode Pemesanan</th>
                          <th>Nama Pengirim</th>
                          <th>Bank</th>
                          <th>Bukti Pembayaran</th>
                          <th>Tanggal Kirim</th>
                          <th>Tanggal Pemesanan</th>
                          <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql1 = mysql_query("SELECT * FROM pembayaran JOIN pemesanan ON pembayaran.kode_pemesanan=pemesanan.kode_pemesanan  WHERE pembayaran.status='Belum Lunas'",$id_mysql);
                        while ($hasil1=mysql_fetch_array($sql1)) {?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $hasil1['kode_pemesanan'] ?></td>
                          <td><?php echo $hasil1[''] ?></td>
                          <td><?php echo $hasil1['bank'] ?></td>
                          <td><?php echo $hasil1['bukti_transfer'] ?></td>
                          <td><?php echo list_tanggal($hasil1['tgl_kirim']) ?></td>
                          <td><?php echo list_tanggal($hasil1['tanggal']) ?></td>
                          <td></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                  </table>

                  <h4 align="center">Data Pembayaran ( Lunas )</h4>
                  <table class="table table-striped table-hover table-bordered">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Kode Pemesanan</th>
                          <th>Nama Pengirim</th>
                          <th>Bank</th>
                          <th>Bukti Pembayaran</th>
                          <th>Tanggal Kirim</th>
                          <th>Tanggal Pemesanan</th>
                          <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                      </tbody>
                  </table>
        </div>
      </div>
 </section>
                  <!-- page end-->
</section>
