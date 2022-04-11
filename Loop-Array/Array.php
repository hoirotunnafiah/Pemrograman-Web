<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoirotun N. (20050974001)</title>
</head>
<body>
    <h1><center>Nama dan NRP Mahasiswa</center></h1>
    <h3><center>yang memenuhi kondisi</center></h3>
    <?php
        $mhs = array(
            array('nama'=>"Hoirotun Nafi'ah",'nrp'=>1,'ipk'=>3.8,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Nurun Decerachmi Emba",'nrp'=>2,'ipk'=>3.06,'rambut'=>array("coklat","berombak"),'bb'=>55,'tb'=>160,'status'=>"cuti"),
            array('nama'=>"Shelma Imara Bakir",'nrp'=>3,'ipk'=>3.14,'rambut'=>array("hitam","lurus"),'bb'=>60,'tb'=>175,'status'=>"aktif"),
            array('nama'=>"Rizky Mutiara",'nrp'=>4,'ipk'=>3.15,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Fadiyatul Muqtasidah",'nrp'=>5,'ipk'=>3.15,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"cuti"),
            array('nama'=>"Rara Kirana",'nrp'=>6,'ipk'=>3.20,'rambut'=>array("coklat","keriting"),'bb'=>60,'tb'=>150,'status'=>"aktif"),
            array('nama'=>"Rizqi Husna",'nrp'=>7,'ipk'=>3.24,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Zaskia Artina",'nrp'=>8,'ipk'=>3.35,'rambut'=>array("coklat","berombak"),'bb'=>55,'tb'=>170,'status'=>"aktif"),
            array('nama'=>"Baga Arhinza",'nrp'=>9,'ipk'=>3.00,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Rica Elvira",'nrp'=>10,'ipk'=>3.4,'rambut'=>array("hitam","keriting"),'bb'=>65,'tb'=>180,'status'=>"aktif"),
            array('nama'=>"Widya Titah",'nrp'=>11,'ipk'=>3.21,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Ramdhan Bachtiar",'nrp'=>12,'ipk'=>3.15,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Ahmad Faza",'nrp'=>13,'ipk'=>3.24,'rambut'=>array("merah","lurus"),'bb'=>70,'tb'=>180,'status'=>"cuti"),
            array('nama'=>"Fadluna Arum",'nrp'=>14,'ipk'=>3.13,'rambut'=>array("coklat","bergelombang"),'bb'=>60,'tb'=>168,'status'=>"cuti"),               
            array('nama'=>"Amalia Puspita",'nrp'=>15,'ipk'=>3.25,'rambut'=>array("merah","bergelombang"),'bb'=>40,'tb'=>160,'status'=>"cuti"),                  
			array('nama'=>"Nizar Alamsyah",'nrp'=>16,'ipk'=>3.28,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Rizal Aditya",'nrp'=>17,'ipk'=>3.36,'rambut'=>array("coklat","berombak"),'bb'=>55,'tb'=>160,'status'=>"cuti"),
            array('nama'=>"Vina Maulidya",'nrp'=>18,'ipk'=>3.34,'rambut'=>array("hitam","lurus"),'bb'=>60,'tb'=>175,'status'=>"aktif"),
            array('nama'=>"Alvina Jacindy",'nrp'=>19,'ipk'=>3.05,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Orin Novita",'nrp'=>20,'ipk'=>3.05,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"cuti"),
            array('nama'=>"Mirna Milasari",'nrp'=>21,'ipk'=>3.17,'rambut'=>array("coklat","keriting"),'bb'=>60,'tb'=>150,'status'=>"aktif"),
            array('nama'=>"Irfan Aliftya",'nrp'=>22,'ipk'=>3.14,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"M. Iksanul",'nrp'=>23,'ipk'=>3.25,'rambut'=>array("coklat","berombak"),'bb'=>55,'tb'=>170,'status'=>"aktif"),
            array('nama'=>"Nomar Sama",'nrp'=>24,'ipk'=>3.20,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Ananda Irvan",'nrp'=>25,'ipk'=>3.35,'rambut'=>array("hitam","keriting"),'bb'=>65,'tb'=>180,'status'=>"aktif"),
            array('nama'=>"Alda Agustina",'nrp'=>26,'ipk'=>3.36,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Okky Arrohman",'nrp'=>27,'ipk'=>3.15,'rambut'=>array("hitam","lurus"),'bb'=>50,'tb'=>160,'status'=>"aktif"),
            array('nama'=>"Aulya Firly",'nrp'=>28,'ipk'=>3.18,'rambut'=>array("merah","lurus"),'bb'=>70,'tb'=>180,'status'=>"cuti"),
            array('nama'=>"Kartika Mega",'nrp'=>29,'ipk'=>3.23,'rambut'=>array("coklat","bergelombang"),'bb'=>60,'tb'=>168,'status'=>"cuti"),               
            array('nama'=>"Irma Mustafidah",'nrp'=>30,'ipk'=>3.25,'rambut'=>array("merah","bergelombang"),'bb'=>40,'tb'=>160,'status'=>"cuti"),                  

        );
        echo "<p>----------------------------------------------if-else------------------------------------<p>";
        $mhslenght = count($mhs);
        for($i = 0;$i<5;$i++)
        if($mhs[$i]['nrp']>=1 && $mhs[$i]['nrp']<=5)
             if($mhs[$i]['ipk']>3 && $mhs[$i]['ipk']<3.25)
                if($mhs[$i]['rambut'][0]=="hitam" && $mhs[$i]['rambut'][1]=="lurus")
                    if($mhs[$i]['bb']==50 && $mhs[$i]['tb']==160)
                        if($mhs[$i]['status']!="cuti")
                            echo "Nama : ".$mhs[$i]['nama']." "."<br/>NRP : ".$mhs[$i]['nrp']."<hr/>";
        echo "<p>----------------------------------------------switch-case------------------------------------<p>";
        for($i = 5;$i<10;$i++){
            switch($mhs){
                case (($mhs[$i]['nrp']>=6 && $mhs[$i]['nrp']<=10) &&
                ($mhs[$i]['ipk']>3 && $mhs[$i]['ipk']<3.25) &&
                ($mhs[$i]['rambut'][0]=="hitam" && $mhs[$i]['rambut'][1]=="lurus") &&
                ($mhs[$i]['bb']==50 && $mhs[$i]['tb']==160) &&
                ($mhs[$i]['status']!="cuti")):
                    echo "Nama : ".$mhs[$i]['nama']." "."<br/>NRP : ".$mhs[$i]['nrp']."<hr/>";
                    break;
            }
        }
        echo "<p>----------------------------------------------do-while------------------------------------<p>";
        $i=10;
        do{
            if($mhs[$i]['nrp']>=11 && $mhs[$i]['nrp']<=15){
                if($mhs[$i]['ipk']>3 && $mhs[$i]['ipk']<3.25){
                    if($mhs[$i]['rambut'][0]=="hitam" && $mhs[$i]['rambut'][1]=="lurus"){
                        if($mhs[$i]['bb']==50 && $mhs[$i]['tb']==160){
                            if($mhs[$i]['status']!="cuti"){
                                echo "Nama : ".$mhs[$i]['nama']."<br/>NRP : ".$mhs[$i]['nrp']."<hr/>";
                            }
                        }
                    }
                }
            }
            $i++;
        }while ($i<15);
        
        echo "<p>----------------------------------------------foreach------------------------------------<p>";
        for($i=15; $i<20; $i++)
        {
        	if($mhs[$i]['nrp']>=16 && $mhs[$i]['nrp']<=20){
                if($mhs[$i]['ipk']>3 && $mhs[$i]['ipk']<3.25){
                    if($mhs[$i]['rambut'][0]=="hitam" && $mhs[$i]['rambut'][1]=="lurus"){
                        if($mhs[$i]['bb']==50 && $mhs[$i]['tb']==160){
                            if($mhs[$i]['status']!="cuti"){
                                echo "Nama : ".$mhs[$i]['nama']." "."<br/>NRP : ".$mhs[$i]['nrp']."<hr/>";
                            }
                        }
                    }
                }
            }
        }
        echo "<p>----------------------------------------------while------------------------------------<p>";
        $i=20;
        while($i<30)
        {
        	if($mhs[$i]['nrp']>=21 && $mhs[$i]['nrp']<=30){
                if($mhs[$i]['ipk']>3 && $mhs[$i]['ipk']<3.25){
                    if($mhs[$i]['rambut'][0]=="hitam" && $mhs[$i]['rambut'][1]=="lurus"){
                        if($mhs[$i]['bb']==50 && $mhs[$i]['tb']==160){
                            if($mhs[$i]['status']!="cuti"){
                                echo "Nama : ".$mhs[$i]['nama']." "."<br/>NRP : ".$mhs[$i]['nrp']."<hr/>";
                            }
                        }
                    }
                }
            }
        	$i++;
        }
    ?>
</body>
</html>
