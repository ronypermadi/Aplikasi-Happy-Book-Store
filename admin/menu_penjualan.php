<?php
$show_buku = show_buku();
$show_penjualan = show_penjualan();

if($akses=='1'||$akses=='3'){
?>
<!--main content start-->
<SCRIPT TYPE="text/javascript">
<!--
function popupform1(myform, windowname)
{
if (! window.focus)return true;
window.open('', windowname, 'height=600,width=800,scrollbars=yes');
myform.target=windowname;
return true;
}
</SCRIPT>
<section id="main-content">
    <section class="wrapper">
      <section>
                  <div class="panel panel-primary">
                      <!--<div class="panel-heading navyblue"> INVOICE</div>-->
                      <div class="panel-body">
                          <div class="row invoice-list">
                              <div class="text-center corporate-id">
                                <?php
                                  $tgl=date('Y-m-d');
                                  //untuk autonumber di nota
                                  $auto=mysql_query("select * from penjualan order by nonota desc limit 1",$id_mysql);
                                  $no=mysql_fetch_array($auto);

                                  if($_GET[tampil]=='1')
                                  $angka=$_GET[no];
                                  else
                                  $angka=$no['nonota']+1;
                                 ?>
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
                                        <td style="font-size:16px;text-align:center;">
                                          No Nota<span>:</span><?php echo $angka ?><br/>
                                          Tanggal<span>:</span> <?php echo list_tanggal($tgl) ?><br/>
                                          Kasir<span>:</span> <?php echo nama_kasir_popup($username) ?>
                                        </td>
                                      </td>
                                    </tr>
                                  </table>
                              </div>
                          </div>
                              <div class="adv-table editable-table ">
                                  <div class="clearfix">
                                    <form action='transaksi_simpan.php' method='POST'>
                                    <div class=form-group>
                                    <a href=?menu=jual_kelola class=btn btn-primary><b><i class=icon-folder-open></i></b> Tambah Nota</a>
                                  </div>
                                    <div class='col-md-6'>
                                        <div class='form-group form-group-material'>
                                  <input type="text" class="form-control" id="dbTxt" alt="Search Criteria" onKeyUp="searchSuggest();" autocomplete="off" name="id_buku" size="70" placeholder="Cari Buku"/>
                                        </div>
                                    <div id="layer1"></div>
                                    </div>

                                      <input type='hidden' name='nonota' value="<?php echo $angka; ?>">
                                    <input type="hidden" name="username" value="<?php echo $username; ?>">
                                    <div class="col-md-3">
                                    <div class="form-group form-group-material">
                                         <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Beli" size="8">
                                    </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-group form-group-material">
                                      <input type=submit value="Tambah"  class="btn btn-primary btn-ladda btn-ladda-spinner" data-spinner-color="#333" data-style="radius">
                                    </div>
                                    </div>
                                      </form>

                                    <?php $hasil=mysql_query("SELECT penjualan.id_buku, buku.judul, buku.harga_jual, penjualan.jumlah FROM penjualan,buku WHERE penjualan.id_buku=buku.id_buku and penjualan.nonota='$angka'",$id_mysql); ?>
                                    <table class=table table-striped table-hover table-bordered>
                        							<thead>
                        								<tr>
                        									<th>No</th>
                        									<th>ID Buku</th>
                        									<th>Judul</th>
                        									<th>Harga Jual</th>
                        									<th>Stok</th>
                        									<th class="text-center">Total</th>
                        								</tr>
                        							</thead>
                        							<tbody>

                        								<?php
                        									$no=1;
                        									while($baris=mysql_fetch_row($hasil)){
                        								?>

                        								<tr>
                        									<td><?php echo $no++ ?></td>
                        									<td><?php echo $baris[0] ?></td>
                        									<td><?php echo $baris[1] ?></td>
                        									<td><?php echo  'Rp '. number_format($baris[2]) ?></td>
                        									<td><?php echo $baris[3] ?></td>
                        									<td class="text-center">
                        									<?php
                        										$sub_total = $baris[2] * $baris[3];
                        										echo 'Rp '. number_format($sub_total);
                        										echo "</td></tr>";
                        										if($no=='1')
                        											$total = $sub_total;
                        										else
                        											$total = $total + $sub_total;

                        										$no++;
                        										}
                                          ?>
                        							</tbody>
                                        <tr>
                                        <td colspan=4 rowspan=5></td>
                                        <td><b>Jumlah Total<b></td>
                                        <td class="text-center"><b><?php echo 'Rp '. number_format($total); ?></b></td>
                                      </tr>
                                      <form class="" action="nota_penjualan.php" method=GET onSubmit="popupform1(this, 'join')">
                                        <tr>
                                          <input type="hidden" name="nonota" value="<?php echo $angka ?> ">
                                          <td><b>Jumlah Uang</b></td>
                                          <td class="text-center"><input type="text" class="form-control" name="bayar" ></td>
                                        </tr>
                                      </table><br>
                                      <div class="text-center invoice-btn">
                                          <button type="submit" class="btn btn-danger btn-md" name="proses"><i class="icon-check"></i> Proses </button>
                                          <a class="btn btn-info btn-md" href=?menu=nota_kelola_daftar title="Cetak Nota"><i class="icon-print"></i> Lihat Semua Nota </a>
                                      </div>
                                      </form>
                                      <?php
                          						//echo "<tr>
                                  //<td colspan=5  align=center>Jumlah</td>
                                  //<td>";echo 'Rp '. number_format($total);
                                  //echo "</td>";

                          		//echo "</table><br>";
                          						?>
                          					</div>
                                </div>
                      </div>
                  </div>
              <!-- invoice end-->
          </section>
</section>
<?php
  }
?>
<!--main content end-->
