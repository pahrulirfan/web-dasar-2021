<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location: login.php');
}

?>

<!doctype html>
<html>

<head>
    <title>Data Artikel</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="alert alert-info">

            Data Artikel, Selamat Datang :
            <?php echo $_SESSION['fullname']; ?>

        </h2>

        <a href="tambah.php" class="btn btn-info">Tambah Data</a>

        <a href="logout.php" class="btn btn-secondary float-end mb-3">Logout</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Keyword</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'setting.php';
                $query = "SELECT * FROM article";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>

                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $data->author; ?> </td>
                        <td> <?php echo $data->title; ?> </td>
                        <td> <?php echo $data->body; ?> </td>
                        <td> <?php echo $data->keyword; ?> </td>
                        <td>
                            <a href="edit.php?id=<?= $data->id; ?>">
                                <input type="submit" value="edit" class="btn btn-warning">
                            </a>

                            <?php
                            if ($_SESSION['role'] == 'admin') {
                            ?>
                                <a href="hapus.php?id=<?= $data->id ?>">
                                    <input type="submit" value="hapus" onclick="confirm('yakin hapus data?')" class="btn btn-danger">
                                </a>
                            <?php
                            }
                            ?>

                        </td>

                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
    </div>
</body>

</html>