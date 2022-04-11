<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoirotun N. (20050974001)</title>
</head>
<body>
    <h1><center>Function</center></h1>
    <?php
    $mhs = array(
        array('namaMhs'=>"Hoirotun Nafi'ah",'nrp'=>1,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Nurun Decerachmi Emba",'nrp'=>2,'namaKelasMhs'=>"D4-B",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Shelma Imara Bakir",'nrp'=>3,'namaKelasMhs'=>"D4-C",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"B",'status'=>"aktif"),
        array('namaMhs'=>"Rizky Mutiara",'nrp'=>4,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Fadiyatul Muqtasidah",'nrp'=>5,'namaKelasMhs'=>"D4-B",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Rara Kirana",'nrp'=>6,'namaKelasMhs'=>"D4-C",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"B",'status'=>"aktif"),
        array('namaMhs'=>"Rizqi Husna",'nrp'=>7,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Zaskia Artina",'nrp'=>8,'namaKelasMhs'=>"D4-B",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Baga Arhinza",'nrp'=>9,'namaKelasMhs'=>"D4-C",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Rica Elvira",'nrp'=>10,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Widya Titah",'nrp'=>11,'namaKelasMhs'=>"D4-B",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Ramdhan Bachtiar",'nrp'=>12,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Ahmad Faza",'nrp'=>13,'namaKelasMhs'=>"D4-B",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"B",'status'=>"aktif"),
        array('namaMhs'=>"Fadluna Arum",'nrp'=>14,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),               
        array('namaMhs'=>"Amalia Puspita",'nrp'=>15,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),                  
        array('namaMhs'=>"Nizar Alamsyah",'nrp'=>16,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Rizal Aditya",'nrp'=>17,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Vina Maulidya",'nrp'=>18,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Alvina Jacindy",'nrp'=>19,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Orin Novita",'nrp'=>20,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Mirna Milasari",'nrp'=>21,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Irfan Aliftya",'nrp'=>22,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"M. Iksanul",'nrp'=>23,'namaKelasMhs'=>"D4-B",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"B",'status'=>"aktif"),
        array('namaMhs'=>"Nomar Sama",'nrp'=>24,'namaKelasMhs'=>"D4-B",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"B",'status'=>"aktif"),
        array('namaMhs'=>"Ananda Irvan",'nrp'=>25,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Alda Agustina",'nrp'=>26,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Okky Arrohman",'nrp'=>27,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Aulya Firly",'nrp'=>28,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
        array('namaMhs'=>"Kartika Mega",'nrp'=>29,'namaKelasMhs'=>"D4-A",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),               
        array('namaMhs'=>"Irma Mustafidah",'nrp'=>30,'namaKelasMhs'=>"D4-C",'dosenwali'=>"Desi Intan Permatasari",'nilai'=>"A",'status'=>"aktif"),
    );

    sort($mhs);
    function dataMhsa ($mhs){
        for ($i=0; $i<count($mhs); $i++){
        }
    }
    echo "<h1><center>Tabel Mahasiswa D4</center></h1>";
    echo "<br>";
    echo "<center><table border = '1'></center>";
    echo "<th>NRP</th>";
    echo "<th>NAMA</th>";
    echo "<th>KELAS</th>";
    echo "<th>DOSEN WALI</th>";
    echo "<th>NILAI KONSEP PEMROGRAMAN</th>";
    echo "<th>STATUS HIMIT</th>";
    echo "</tr>";
        for ($i=0; $i<count($mhs); $i++){
            echo "<tr>";
            echo "<td>".$mhs[$i]["nrp"]."</td>";
            echo "<td>".$mhs[$i]["namaMhs"]."</td>"; 
            echo "<td>".$mhs[$i]["namaKelasMhs"]."</td>"; 
            echo "<td>".$mhs[$i]["dosenwali"]."</td>"; 
            echo "<td>".$mhs[$i]["nilai"]."</td>";  
            echo "<td>".$mhs[$i]["status"]."</td>";
            echo "</tr>";
        }
    echo "</table>";
    echo "<br>". "<br>" . "<h3>Hasil Akhir Mahasiswa Yang Memenuhi Syarat</h3>" . "<br>";

    for($i = 0; $i < count($mhs); $i++){
        seleksi($mhs, $mhs[$i]['nrp']);
    }

    function seleksi($mhs, $nrp){
        for($i = 0; $i < 30; $i++ ){
            if($mhs[$i]['nrp'] == $nrp){
                $mahasiswa = $mhs[$i];
            }
        }
        if($mahasiswa['namaKelasMhs'] == 'D4-A' || $mahasiswa['namaKelasMhs'] == 'D4-B'){
            if($mahasiswa['dosenwali'] == 'Desi Intan Permatasari'){
                if($mahasiswa['nilai'] == 'A'){
                    if($mahasiswa['status'] == 'aktif'){
                        echo  $mahasiswa['namaMhs'] . ' adalah mahasiswa kelas' .$mahasiswa['namaKelasMhs'] . ' yang '. $mahasiswa['status'] .' di HIMIT'. "<hr>";
                    }
                }
            }
        }
    }
    ?>
</body>