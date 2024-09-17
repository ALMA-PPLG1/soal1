<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br/>
    <a href="tambahmurid.php" class="btn btn-primary" >+ TAMBAH </a> <br/><br/>
    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>no</th>
                <th>id</th>
                <th>nama</th>
                <th>jurusan</th>
               </tr>
        </thead>
        <tbody>
            <?php
            include 'database.php';
            $p = mysqli_query($data, "select * from data");
            $no = 1;
            while ($d = mysqli_fetch_array($p)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['id']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['jurusan']; ?></td>
                    <td>
                        <a href="delete.php?id=<?php echo $d['id'];?>">hapus</a>
                    </td>
        
                </tr>
        </tbody>
        <?php
    }
    ?>
</table>
</body>
</html>