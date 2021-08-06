<!doctype html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/dataTables.bootstrap4.min.css">

    <title>KPP Pratama Majalaya</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-top-fixed navbar-expand-lg navbar-dark" style="background-color: #D95454">
        <div class="container">
            <a class="navbar-brand" href="#home">KPP Pratama Majalaya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="nav navbar-nav navbar-right">
                    <a class="nav-item nav-link active" href="menuindex.php">Wajib Pajak <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="jenissurat.php">Jenis Surat <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="nomorrak.php">Rak <span class="sr-only">(current)</span></a>
                    <!--<a class="nav-item nav-link" href="#">Features</a> -->
                </div>
            </div>
        </div>
    </nav>

    <!-- Table Data Document -->
    <div id="NPWP" class="container mt-5 pt-5">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor Rak</th>
                    <th scope="col">Bagian Rak</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no_urut = 0;
                $wajibpajak = mysqli_query($koneksi, "select * from norak_data");
                while ($row = mysqli_fetch_array($wajibpajak)) {
                    $no_urut++;
                    echo "<tr>
                        <td>$no_urut</td>
                        <td>" . $row['Norak'] . "</td>
                        <td>" . $row['Bagian Rak'] . "</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
</body>

</html>