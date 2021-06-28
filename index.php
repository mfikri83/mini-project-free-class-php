<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

    <div class="container">
        <h2><a href="index.php">Aplikasi Todo List</a></h2>
        <p>kelola keseharianmu disini</p>
        <form action="functions/tambah.php" method="POST">
            <div class="row">
                <div class="col-75">
                    <input type="text" id="aktifitas" name="aktifitas" placeholder="Mau melakukan apa hari ini?">
                </div>
                <div class="col-25">
                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>
        <br>
        <a href="index.php?tambah=true" class="badge badge-coklat">tambah</a>
        <br>
        <br>
        <ul>
            <li class="selesai">ngoding</li>
            <li>makan
                <div class="action">
                    <a href="#" class="badge badge-biru">selesai</a>
                    <a href="#" class="badge badge-cream">ubah</a>
                    <a href="#" class="badge badge-merah">hapus</a>
                </div>
            </li>
            <li>tidur
                <div class="action">
                    <a href="#" class="badge badge-biru">selesai</a>
                    <a href="#" class="badge badge-cream">ubah</a>
                    <a href="#" class="badge badge-merah">hapus</a>
                </div>
            </li>
        </ul>
    </div>
    </body>
</html>