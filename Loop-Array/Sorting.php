<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hoirotun N. (20050974001)</title>
    </head>
    <body>
        <?php 
        $mhs_a = array(
            array('nama'=>"Hoirotun Nafi'ah",'nrp'=>1,'ipk'=>3.8,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Nurun Decerachmi Emba",'nrp'=>2,'ipk'=>3.06,'rambut'=>"coklat, berombak",'bb'=>55,'tb'=>160,'status'=>"cuti"),
            array('nama'=>"Shelma Imara Bakir",'nrp'=>3,'ipk'=>3.14,'rambut'=>"hitam, lurus",'bb'=>60,'tb'=>175,'status'=>"aktif"),
            array('nama'=>"Rizky Mutiara",'nrp'=>4,'ipk'=>3.15,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Fadiyatul Muqtasidah",'nrp'=>5,'ipk'=>3.15,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"cuti"),
            array('nama'=>"Rara Kirana",'nrp'=>6,'ipk'=>3.20,'rambut'=>"coklat, keriting",'bb'=>60,'tb'=>150,'status'=>"aktif"),
            array('nama'=>"Rizqi Husna",'nrp'=>7,'ipk'=>3.24,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Zaskia Artina",'nrp'=>8,'ipk'=>3.35,'rambut'=>"coklat, berombak",'bb'=>55,'tb'=>170,'status'=>"aktif"),
            array('nama'=>"Baga Arhinza",'nrp'=>9,'ipk'=>3.00,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Rica Elvira",'nrp'=>10,'ipk'=>3.4,'rambut'=>"hitam, keriting",'bb'=>65,'tb'=>180,'status'=>"aktif"),
            array('nama'=>"Widya Titah",'nrp'=>11,'ipk'=>3.21,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Ramdhan Bachtiar",'nrp'=>12,'ipk'=>3.15,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Ahmad Faza",'nrp'=>13,'ipk'=>3.24,'rambut'=>"merah, lurus",'bb'=>70,'tb'=>180,'status'=>"cuti"),
            array('nama'=>"Fadluna Arum",'nrp'=>14,'ipk'=>3.13,'rambut'=>"coklat, bergelombang",'bb'=>60,'tb'=>168,'status'=>"cuti"),               
            array('nama'=>"Amalia Puspita",'nrp'=>15,'ipk'=>3.25,'rambut'=>"merah, bergelombang",'bb'=>40,'tb'=>160,'status'=>"cuti"),                  
		    array('nama'=>"Nizar Alamsyah",'nrp'=>16,'ipk'=>3.28,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Rizal Aditya",'nrp'=>17,'ipk'=>3.36,'rambut'=>"coklat, berombak",'bb'=>55,'tb'=>160,'status'=>"cuti"),
            array('nama'=>"Vina Maulidya",'nrp'=>18,'ipk'=>3.34,'rambut'=>"hitam, lurus",'bb'=>60,'tb'=>175,'status'=>"aktif"),
            array('nama'=>"Alvina Jacindy",'nrp'=>19,'ipk'=>3.05,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Orin Novita",'nrp'=>20,'ipk'=>3.05,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"cuti"),
            array('nama'=>"Mirna Milasari",'nrp'=>21,'ipk'=>3.17,'rambut'=>"coklat, keriting",'bb'=>60,'tb'=>150,'status'=>"aktif"),
            array('nama'=>"Irfan Aliftya",'nrp'=>22,'ipk'=>3.14,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"M. Iksanul",'nrp'=>23,'ipk'=>3.25,'rambut'=>"coklat, berombak",'bb'=>55,'tb'=>170,'status'=>"aktif"),
            array('nama'=>"Nomar Sama",'nrp'=>24,'ipk'=>3.20,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Ananda Irvan",'nrp'=>25,'ipk'=>3.35,'rambut'=>"hitam, keriting",'bb'=>65,'tb'=>180,'status'=>"aktif"),
            array('nama'=>"Alda Agustina",'nrp'=>26,'ipk'=>3.36,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Okky Arrohman",'nrp'=>27,'ipk'=>3.15,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Aulya Firly",'nrp'=>28,'ipk'=>3.18,'rambut'=>"merah, lurus",'bb'=>70,'tb'=>180,'status'=>"cuti"),
            array('nama'=>"Kartika Mega",'nrp'=>29,'ipk'=>3.23,'rambut'=>"coklat, bergelombang",'bb'=>60,'tb'=>168,'status'=>"cuti"),               
            array('nama'=>"Irma Mustafidah",'nrp'=>30,'ipk'=>3.25,'rambut'=>"merah, bergelombang",'bb'=>40,'tb'=>160,'status'=>"cuti"),
        );

        sort($mhs_a);
        function dataMhsa ($mhs_a){
            for ($i=0; $i<count($mhs_a); $i++){
            }
        }
        echo "<h1><center> Sort Ascending (Nama)</center></h1>";
        echo "<br>";
        echo "<center><table border = '1'></center>";
        echo "<th>NRP</th>";
        echo "<th>NAMA</th>";
        echo "<th>IPK</th>";
        echo "<th>RAMBUT</th>";
        echo "<th>BERAT BADAN(kg)</th>";
        echo "<th>TINGGI BADAN(cm)</th>";
        echo "<th>STATUS</th>";
        echo "</tr>";
        for ($i=0; $i<count($mhs_a); $i++){
            echo "<tr>";
            echo "<td>".$mhs_a[$i]["nrp"]."</td>";
            echo "<td>".$mhs_a[$i]["nama"]."</td>"; 
            echo "<td>".$mhs_a[$i]["ipk"]."</td>"; 
            echo "<td>".$mhs_a[$i]["rambut"]."</td>"; 
            echo "<td>".$mhs_a[$i]["bb"]."</td>"; 
            echo "<td>".$mhs_a[$i]["tb"]."</td>"; 
            echo "<td>".$mhs_a[$i]["status"]."</td>";
            echo "</tr>";
        }
        echo "</table>";

        $mhs_d = array (
            array('nrp'=>1,'nama'=>"Hoirotun Nafi'ah",'ipk'=>3.8,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nrp'=>2,'nama'=>"Nurun Decerachmi Emba",'ipk'=>3.06,'rambut'=>"coklat, berombak",'bb'=>55,'tb'=>160,'status'=>"cuti"),
            array('nrp'=>3,'nama'=>"Shelma Imara Bakir",'ipk'=>3.14,'rambut'=>"hitam, lurus",'bb'=>60,'tb'=>175,'status'=>"aktif"),
            array('nrp'=>4,'nama'=>"Rizky Mutiara",'ipk'=>3.15,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nrp'=>5,'nama'=>"Fadiyatul Muqtasidah",'ipk'=>3.15,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"cuti"),
            array('nrp'=>6,'nama'=>"Rara Kirana",'ipk'=>3.20,'rambut'=>"coklat, keriting",'bb'=>60,'tb'=>150,'status'=>"aktif"),
            array('nrp'=>7,'nama'=>"Rizqi Husna",'ipk'=>3.24,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nrp'=>8,'nama'=>"Zaskia Artina",'ipk'=>3.35,'rambut'=>"coklat, berombak",'bb'=>55,'tb'=>170,'status'=>"aktif"),
            array('nrp'=>9,'nama'=>"Baga Arhinza",'ipk'=>3.00,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nrp'=>10,'nama'=>"Rica Elvira",'ipk'=>3.4,'rambut'=>"hitam, keriting",'bb'=>65,'tb'=>180,'status'=>"aktif"),
            array('nrp'=>11,'nama'=>"Widya Titah",'ipk'=>3.21,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nrp'=>12,'nama'=>"Ramdhan Bachtiar",'ipk'=>3.15,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nrp'=>13,'nama'=>"Ahmad Faza",'ipk'=>3.24,'rambut'=>"merah, lurus",'bb'=>70,'tb'=>180,'status'=>"cuti"),
            array('nrp'=>14,'nama'=>"Fadluna Arum",'ipk'=>3.13,'rambut'=>"coklat, bergelombang",'bb'=>60,'tb'=>168,'status'=>"cuti"),               
            array('nrp'=>15,'nama'=>"Amalia Puspita",'ipk'=>3.25,'rambut'=>"merah, bergelombang",'bb'=>40,'tb'=>160,'status'=>"cuti"),                  
		    array('nrp'=>16,'nama'=>"Nizar Alamsyah",'ipk'=>3.28,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nrp'=>17,'nama'=>"Rizal Aditya",'ipk'=>3.36,'rambut'=>"coklat, berombak",'bb'=>55,'tb'=>160,'status'=>"cuti"),
            array('nrp'=>18,'nama'=>"Vina Maulidya",'ipk'=>3.34,'rambut'=>"hitam, lurus",'bb'=>60,'tb'=>175,'status'=>"aktif"),
            array('nrp'=>19,'nama'=>"Alvina Jacindy",'ipk'=>3.05,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nrp'=>20,'nama'=>"Orin Novita",'ipk'=>3.05,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"cuti"),
            array('nrp'=>21,'nama'=>"Mirna Milasari",'ipk'=>3.17,'rambut'=>"coklat, keriting",'bb'=>60,'tb'=>150,'status'=>"aktif"),
            array('nrp'=>22,'nama'=>"Irfan Aliftya",'ipk'=>3.14,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nrp'=>23,'nama'=>"M. Iksanul",'ipk'=>3.25,'rambut'=>"coklat, berombak",'bb'=>55,'tb'=>170,'status'=>"aktif"),
            array('nrp'=>24,'nama'=>"Nomar Sama",'ipk'=>3.20,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nrp'=>25,'nama'=>"Ananda Irvan",'ipk'=>3.35,'rambut'=>"hitam, keriting",'bb'=>65,'tb'=>180,'status'=>"aktif"),
            array('nrp'=>26,'nama'=>"Alda Agustina",'ipk'=>3.36,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nrp'=>27,'nama'=>"Okky Arrohman",'ipk'=>3.15,'rambut'=>"hitam, lurus",'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nrp'=>28,'nama'=>"Aulya Firly",'ipk'=>3.18,'rambut'=>"merah, lurus",'bb'=>70,'tb'=>180,'status'=>"cuti"),
            array('nrp'=>29,'nama'=>"Kartika Mega",'ipk'=>3.23,'rambut'=>"coklat, bergelombang",'bb'=>60,'tb'=>168,'status'=>"cuti"),               
            array('nrp'=>30,'nama'=>"Irma Mustafidah",'ipk'=>3.25,'rambut'=>"merah, bergelombang",'bb'=>40,'tb'=>160,'status'=>"cuti"),
        );

        rsort($mhs_d);
        function dataMhsb ($mhs_d){
            for ($i=0; $i<count($mhs_d); $i++){
            }
        }
        echo "<h1>Sort Descending (NRP)</h1>";
        echo "<br>";
        echo "<center><table border = '1'></center>";
        echo "<th>NRP</th>";
        echo "<th>NAMA</th>";
        echo "<th>IPK</th>";
        echo "<th>RAMBUT</th>";
        echo "<th>BERAT BADAN(kg)</th>";
        echo "<th>TINGGI BADAN(cm)</th>";
        echo "<th>STATUS</th>";
        echo "</tr>";
            for ($i=0; $i<count($mhs_d); $i++){
                echo "<tr>";
                echo "<td>".$mhs_d[$i]["nrp"]."</td>";
                echo "<td>".$mhs_d[$i]["nama"]."</td>"; 
                echo "<td>".$mhs_d[$i]["ipk"]."</td>"; 
                echo "<td>".$mhs_d[$i]["rambut"]."</td>";
                echo "<td>".$mhs_d[$i]["bb"]."</td>"; 
                echo "<td>".$mhs_d[$i]["tb"]."</td>"; 
                echo "<td>".$mhs_d[$i]["status"]."</td>";
                echo "</tr>";
            }
            echo "</table>";

        ?>
    </body>
</html>