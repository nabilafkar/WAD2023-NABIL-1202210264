<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");
            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = mysqli_query($conn, "SELECT * FROM `showroom_mobil` WHERE 1");

        


            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            $row = mysqli_num_rows($query);
            ?>
               <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Brand Mobil</th>
                        <th scope="col">Warna Mobil</th>
                        <th scope="col">Tipe Mobil</th>
                        <th scope="col">Harga Mobil</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
            <?php
            if ($row > 0){
                while ($dataMobil = mysqli_fetch_assoc($query)){
                    ?>
                    <?php $idmobil = $dataMobil['id']?>
                    <tbody>
                        <tr>
                        <th scope="row"><?php echo $dataMobil['id']?></th>
                        <td><?php echo $dataMobil['nama_mobil']?></td>
                        <td><?php echo $dataMobil['brand_mobil']?></td>
                        <td><?php echo $dataMobil['warna_mobil']?></td>
                        <td><?php echo $dataMobil['tipe_mobil']?></td>
                        <td><?php echo $dataMobil['harga_mobil']?></td>
                        <td><a href="form_detail_mobil.php?id=<?php echo $idmobil ?> " class="btn btn-primary">Detail</a></td>
                        </tr>
                    </tbody>
                    
            <?php
                }
            }?>
            </table>
            <?php

            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id

            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'
          
         
            //<!--  **********************  1  **************************     -->

            
            







            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
          
        </div>
    </center>
</body>
</html>
