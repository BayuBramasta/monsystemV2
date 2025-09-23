<!-- Main Content-->
<main class="container-fluid mt-5 mb-4">
    <div class="container-fluid px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 mt-5">
                <table id="example" class="table table-striped nowrap">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NRP/NIP</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require $_SERVER['DOCUMENT_ROOT'] . "/monsystem/controller/controller_status.php";
                        $itteration = 1;
                        $Status = new controllerStatus();
                        $tb_peminjaman = $Status->show();
                        while ($data = mysqli_fetch_array($tb_peminjaman)):
                        ?>
                            <tr>
                                <td><?= $itteration++ ?></td>
                                <td><?= $data["nama_mahasiswa"] ?></td>
                                <td><?= $data["nrp"] ?></td>
                                <td><?= $data["status"] ?></td>
                                <td><a href="index.php?page=detail&id_detail=<?= $data['id_peminjaman'] ?>" class="btn btn-sm btn-primary">Detail</a></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>