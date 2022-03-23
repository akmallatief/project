<?php
 require 'function.php';
 $data = query("SELECT * FROM absensi");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!--css-->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="mediaquery.css" />
    <!--css datatable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <title>POLTEK</title>
  </head>
  <body onload="startTime()">
    <!--navbar-->
    <nav class="navbar navbar-light bg-info mb-3">
  <div class="container-fluid d-flex bd-highlight">
    <div class="p-2 w-80 bd-highlight">
    <a class="navbar-brand" href="#">
      <img src="asset/logo.png" alt="" width="80" height="50" class="d-inline-block align-text-top img-logo">
      <h2>POLTEKNIK PENERBANGAN MAKASSAR</h2>
      </div>
      <span id="time" class="navbar-Text p-2 flex-shrink-1 bd-highlight"></span>
    </a>
  </div>
  </nav>
  <!--slider-->
  <div class="container-fluid">
  <div class="row">
    <div class="col-3">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/image 1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="asset/image 2.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
   

    <!--table-->
    <div class="col-9">
    <div class="container-fluid">
    <table id="example" class="display bg-primary bg-gradient" style="width:100%">
      <thead>
      <tr>
      <th>GEDUNG</th>
      <th>KELAS</th>
      <th>COURSE</th>
      <th>DOSEN PENGAJAR</th>
      <th>CO-DOSEN</th>
      <th>MATERI</th>
      <th>MULAI</th>
      <th>SELESAI</th>
      <th>DAFTAR TARUNA</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($data as $key):?>
      <tr class="bg-dark bg-gradient text-light">
        <td class="bg-dark bg-gradient text-light"><?= $key["Gedung"]?></td>
        <td><?= $key["Kelas"]?></td>
        <td><?= $key["Course"]?></td>
        <td><?= $key["Dosen Pengajar"]?></td>
        <td><?= $key["CO-Dosen"]?></td>
        <td><?= $key["Materi"]?></td>
        <td><?= $key["Mulai"]?></td>
        <td><?= $key["Selesai"]?></td>
        <td><?= $key["Daftar Taruna"]?></td>
      </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    </div>
    </div>
    <!--js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
