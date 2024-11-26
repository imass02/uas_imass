<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Struk gaji</title>
  </head>
  <body>
    <br><br><br><br><br>
  <center>
         <div class="card border-success mb-3" style="max-width: 18rem;">
           <div class="card-header">Imas Ambarwati</div>
           <div class="card-body text-success">
             <h5 class="card-title">STRUK GAJI</h5>
             <table align="center">
                <tr>
                    <td><?php
if (isset($_POST['proses'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $up = $_POST['up'];
    $tanggal_gaji = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lk'];
    $status_kerja = $_POST['sk'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicil = $_POST['cicil'];
    $infaq = $_POST['infaq'];
    $gaji = 0;
    $bonus = 0;

            echo "No : $no <br>";
            echo "Nama : $nama <br>";
            echo "Unit Pendidikan : $up <br>";
            echo "Tanggal Gaji : $tanggal_gaji <br>";
            echo "Jabatan : $jabatan <br>";
            if ($jabatan == 'Kepala Sekolah') {
                $gaji = 10000000;
             }elseif ($jabatan == 'Wakasek') {
                    $gaji = 7000000;
                }elseif ($jabatan == 'Guru') {
                   $gaji = 5000000;
                }elseif ($jabatan == 'Karyawan'){
                    $gaji = 2500000;
                }else {
                    $gaji = 0;
                    
                }   
            echo "Gaji : $gaji <br>";
            echo "Lama Kerja : $lama_kerja<br>";
            echo "Status Kerja : $status_kerja<br>";
            if ($status_kerja == "Tetap") {
                $bonus = 1000000;
            }else {
                $bonus = 0;
            }
            echo "Bonus : $bonus<br>";
            echo "BPJS : $bpjs<br>";
            echo "Pinjaman : $pinjaman<br>";
            echo "Cicilan : $cicil<br>";
            echo "Infaq : $infaq<br>";
            $gaji_bersih = ($gaji + $bonus)-($bpjs + $pinjaman + $cicil + $infaq);
            echo "Gaji Bersih : $gaji_bersih";
           }
    ?>
                </td>
                </tr>
             </table>
           </div>
           </center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>