<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK MUTU</title>
</head>
<body>
    <section class=" ">
        <div class="">
            <form action="datamasuk.php" method="post">
                <table >
                    <tr>
                        <td>id</td>
                        <td><input type="text" name="Fid" class="rounded-4 border-1" ></td>
                    </tr>
                    <tr>
                        <td>nama</td>
                        <td><input type="text" name="Fnama" class="rounded-4 border-1" ></td>
                    </tr>
                    <tr>
                        <td>jurusan</td>
                        <td><input type="text" name="Fjurusan" class="rounded-4 border-1" ></td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><input type="submit" value="simpan" class="rounded-4 border-1" ></td>
                    </tr>
                </table>
            </form>
            <a href="index.php" class="btn btn-primary mt-3 mb-3">Lihat Semua Data</a><br/>
        </div>
    </section>
</body>
</html>