<?php
?>
<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" href="booking.css"/> -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Settings Account Profile</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<style>
    .babysitter{
        width: 100px;
        height: 100px;
        background-color: #A7BBC7;
        margin: 40px;
    }
    .name{
        margin-top: 5px;
        text-align: center;
    }
    .my-icon{
        font-size: 100px;
        color: blueviolet;
    }
    </style>
</head>
<body>
<div class="container">
<?php
            // Koneksi ke database
            $koneksi = mysqli_connect("localhost", "root", "", "dbbabyxpress");

            // Cek koneksi
            if (mysqli_connect_errno()) {
                echo "Koneksi database gagal: " . mysqli_connect_error();
            }

            // Query untuk mengambil data pengguna (misalnya berdasarkan ID)
            $query = "SELECT babysitter_id, photo, name FROM babysitter";
            $result = mysqli_query($koneksi, $query);

            // Periksa apakah data ditemukan
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)){
                    $babysitter_id = $row["babysitter_id"];
                    $photo = $row["photo"];
                    $name = $row["name"];    

                    ?>
                    <div class="babysitter">
                        <a href="booking.php">
                    <i class="iconify my-icon" data-icon="iconamoon:profile-fill"></i>
                    <i class="iconify my-icontengah" data-icon="mdi:clipboard-text-history"></i>
			
                    <!-- <img src="<#?php echo $photo; ?>" alt="photo Profil"> -->
                    <p class="name"><?php echo $name; ?></p>
                    </a>    
                </div>
                    <?php
                }
            } else {
            echo "Data pengguna tidak ditemukan.";
            }

        // Tutup koneksi
        mysqli_close($koneksi);
    ?>
</div>
</body>
</html>