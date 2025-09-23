<!-- Post Content-->
<article class="mb-4 mt-5">
  <div class="container px-4 px-lg-5">
    <div class="row">
      <p class="fs-1 mt-5">Detail Reservasi</p>
      <div class="col-6 col-md-6">
        <p>Id Reservasi</p>
        <p>Nama Mahasiswa</p>
        <p>NRP</p>
        <p>No. Telpon Mahasiswa</p>
        <p>Nama Pembimbing</p>
        <p>Id Komputer</p>
        <p>Software</p>
        <p>Status</p>
        <p>Tanggal Running</p>
        <p>Tanggal Selesai</p>
        <p>Tanggal Daftar</p>
        <p>Bukti Selesai</p>
      </div>
      <?php
      if (isset($_GET['id_detail'])) {
        $id_peminjaman = $_GET['id_detail'];
        require $_SERVER['DOCUMENT_ROOT'] . "/monsystem/controller/controller_detail.php";
        $gDetail = new controllerDetail();
        $detail = $gDetail->show($id_peminjaman);
        $table_detail = mysqli_fetch_array($detail);
      } else {
        header("Location: index.php?page=status");
      }
      ?>
      <div class="col-6 col-md-6">
        <p><?= '#' . $table_detail['id_peminjaman'] ?></p>
        <p><?= $table_detail['nama_mahasiswa'] ?></p>
        <p><?= $table_detail['nrp'] ?></p>
        <p><?= $table_detail['telp_mahasiswa'] ?></p>
        <p><?= $table_detail['pembimbing'] ?></p>
        <p><?= $table_detail['id_komputer'] == 0 ? '-' : $table_detail['id_komputer'] ?></p>
        <p><?= $softwere = $table_detail['software'] == '' ? "-" : $softwere = $table_detail['software'] ?></p>
        <p>
        <div class="<?= $table_detail['status'] == 'menunggu' ? 'bg-warning' : 'bg-success'
                    ?> text-white col-sm-4 text-center p-2 "><?= $table_detail['status'] ?></div>
        </p>
        <p><?php $date = date_create($table_detail['tanggal_running']);
            echo date_format($date, "d-m-Y");  ?></p>
        <p><?php $date = date_create($table_detail['tanggal_selesai']);
            echo date_format($date, "d-m-Y") == '30-11--0001' ? '-' : date_format($date, "d-m-Y");  ?></p>
      </div>
    </div>
  </div>
</article>