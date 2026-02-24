<div class="container-fluid">
    <h1 class="h3 rb-4 text-gray-800"> Edit kategori</h1>
    <div class="chart-shadow rb-4">
        <div class="card-body">
            <form action="" method="POST">
                <?php
                   $id = $_GET['id'];
                   if(isset($_POST['submit'])) {
                    $kategori = strtolower($_POST['kategori']);
                    $cek = mysqli_query($koneksi, "SELECT * FROM kategori WHERE LOWER(kategori)='$kategori'");
                    $check = mysqli_num_rows($cek);
                    if ($check > 0) {
                        echo "data yang dimasukkan sama";
                   }else {
                    $query = mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori' WHERE id_kategori='$id'");
                    if ($query) {
                        echo '<script>alert("edit data berhasil"); </script>';
                    } else {
                        echo '<script>alert("edit data gagal"); </script>';

                    }
                   }
                }
                ?>
                <div class="row mb-3">
                    <label class="col-md-3 col-from-label">ubah kategori</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="kategori" placeholder="masukkan kategori" required>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-9 offsset-md-3">
                        <button type="submit" class="btn btn-primary" name="submit" value="submit">
                                simpan
                        </button>
                        <button type="reset" class="btn btn-secondary">
                                reset
                        </button>
                        <a href="?page=kategori" class="btn btn-danger">
                                kembali
                        </a>
                    </div>
                </div>
                
        </div>
    </div>
</div>