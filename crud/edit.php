<!doctype html>
<html>
<head>
    <title>Tambah Data Artikel</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="alert alert-info">Tambah Data Artikel</h2>

    <?php
    require 'setting.php';
    if (isset($_POST['simpan'])) {
        $id=$_POST['id'];
        $txtauthor = $_POST['txtauthor'];
        $txttitle = $_POST['txttitle'];
        $txtbody = $_POST['txtbody'];
        $txtkeyword = $_POST['txtkeyword'];

        $sql = "UPDATE article SET 
        author='$txtauthor',title='$txttitle',body='$txtbody',keyword='$txtkeyword' WHERE id=$id";

        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header('location: index.php');
        } else {
            echo 'Query Error : ' . mysqli_error($koneksi);
        }
    }else{
        $id=$_GET['id'];
        $query="SELECT * FROM article WHERE id=$id";
        $sql=mysqli_query($koneksi,$query);
        $data=mysqli_fetch_object($sql);

    }

    ?>

    <form action="" method="post">
        <input type="hidden" name="txtid" value="<?=$id?>">
        <div class="mb-3">
            <label>Author</label>
            <input required type="text" name="txtauthor" class="form-control" value="<?=$data->author;?>">
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="txttitle" class="form-control" value="<?=$data->title;?>">
        </div>

        <div class="mb-3">
            <label>Body</label>
            <textarea name="txtbody" class="form-control" cols="30" rows="5">
                <?=$data->body;?>
            </textarea>
        </div>

        <div class="mb-3">
            <label>Keyword</label>
            <input type="text" name="txtkeyword" class="form-control" value="<?=$data->keyword;?>">
        </div>

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

</div>
</body>
</html>