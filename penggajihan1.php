<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>gaji</title>
  </head>
  <body>
   <center>
        <!--image--> 
        <img src="assalaam.png" class="rounded mx-auto d-block" alt="...">
         <!--text-->
         <h4>PENGGAJIHAN <br>
     GURU / KARYAWAN YAYASAN ASSALAAM
 </h4>
    <!-- card -->
     
    <div class="card-header" style="width: 600px;">
  <div class="card-header">
    Data Penggajihan
  </div>
  <!-- form --> 
  <form action="gaji.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No</label>
    <input type="text" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
  </div>
  <label for="select" class="form-label">Unit Pendidikan</label>
  <select class="form-select" name="up" aria-label="Default select example">
  <option selected>Pilih unit Pendidikan</option>
  <option value="TK">TK</option>
  <option value="SD">SD</option>
  <option value="SMP">SMP</option>
  <option value="PPTQ">PPTQ</option>
  <option value="SMA">SMA</option>
  <option value="SMK">SMK</option>
  <option value="TPQ">TPQ</option>
  </select>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Gaji</label>
    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
  </div>
  <!--card--> 
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Gaji</h5>
        <label for="exampleInputEmail1" class="form-label">Jabatan</label>
        <select class="form-select" name="jabatan" aria-label="Default select example">
        <option selected>Pilih Jabatan</option>
        <option value="Kepala Sekolah">Kepala Sekolah</option>
        <option value="Wakasek">Wakasek</option>
        <option value="Guru">Guru</option>
        <option value="Karyawan">Karyawan</option>
        </select>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Lama Kerja</label>
        <input type="text" name="lk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div class="form-text"></div>
     </div>
     <label for="exampleInputEmail1" class="form-label">Status Kerja</label>
         <select class="form-select" name="sk" aria-label="Default select example">
            <option selected>Pilih Status kerja</option>
            <option value="Tetap">Tetap</option>
            <option value="Kontrak">Kontrak</option>
        </select>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Potongan</h5>
        <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">BPJS</label>
             <input type="text" name="bpjs" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             <div class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Pinjaman</label>
            <input type="text" name="pinjaman" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Cicilan</label>
            <input type="text" name="cicil" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Infaq</label>
            <input type="text" name="infaq" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="form-text"></div>
        </div>
      </div>
    </div>
  </div>
</div>

  <button type="submit" name="proses" class="btn btn-primary">Proses</button>
</form>
<br> 
</center>
<br><br><br><br>

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
