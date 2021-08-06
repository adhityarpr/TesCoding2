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
            <a class="navbar-brand" href="#home">Metro Garming</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="nav navbar-nav navbar-right">
                    <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="menuindex.php">Quality Control <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link active" href="logout.php">Logout <span class="sr-only">(current)</span></a>
                    <!--<a class="nav-item nav-link" href="#">Features</a> -->
                </div>
            </div>
        </div>
    </nav>

    <!-- Table Data Document -->
    <div id="mg" class="container mt-5 pt-5">
    <a class="btn btn-primary" href="tambahdata.php"data-toggle="modal" data-target="#tambahuser"><i class="fa fa-male"></i> Tambah Data</a>
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tes</th>
                    <th scope="col">Tes2</th>
                    <th scope="col">Tes3</th>
                    <th scope="col">Tes4</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no_urut = 0;
                $wajibpajak = mysqli_query($koneksi, "select * from ");
                while ($row = mysqli_fetch_array($wajibpajak)) {
                    $no_urut++;
                    echo "<tr>
                        <td>$no_urut</td>
                        <td>" . $row[''] . "</td>
                        <td>" . $row[''] . "</td>
                        <td>" . $row[''] . "</td>
                        <td>" . $row[''] . "</td>
                        <td>" . $row[''] . "</td>
                        <td class='contact-delete'>
                            <form action='delete.php?name=". $row[''] ."' method='post'>
                            <input type='hidden' name='name' value=". $row['']. ">
                            <input type='submit' name='submit' value='Delete'>
                        </form>
                        <button type='button' class='btn btn-warning' >Edit</button>
                    </td>
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