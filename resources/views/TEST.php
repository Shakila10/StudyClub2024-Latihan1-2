
<!DOCTYPE html>
<html lang="en">

<body>
    <?php
        // array
        $bulan = array("jan", "feb", "mart", "apr");

        // array asosiatif
        $profil= array(
            "nama"=> "odis", 
            "alamt" => "jambi", 
            "usia" => "20" // <--
        );
        // memasukkan variabel ke dalam text 
        echo "<p> Bulan hari ini adalah bulan $bulan[0] </p>";
        echo "<p> nama pemateri adalah ".$profil['nama']."</p>";

        //  usia saya saat ini 20


        // percobaan percabangan
        $nilai = 50;
        if($nilai >=80){
            echo "nilai sangat baik";
        }elseif($nilai >=60){
            echo "nilai cukup baik";
        }elseif($nilai >=40){
            echo "nilai lumayan jelek";
        }else{
            echo "nilai jelek kali";
        }
        
        // percobaan percabangn switch
        echo "<br>";
        $kota = "jambi";
        switch($kota){
            case 'bandung':
                echo "jawa barat";
                break;
            case "surabaya":
                echo " jawa timur";
                break;
            case "jambi":
                echo " yo jambi la";
                break;
            default:
                echo "yo dk tahu";
                break;
        }

        // percobaan menggunlan perulangan while
        echo "<p>Percobaan Perulangan while </p>";
        $no1 = 1;
        while($no1 <=10){
            echo "<li> while baris ke-".$no1."</li>";
            $no1++;
        }
        
        // percobaan menggunakan perulanagn for
        echo "<p>Percobaan Perulangan for </p>";
        for ($no2=1; $no2 <= 10 ; $no2++) { 
            echo "<li> for baris ke-".$no2."</li>";
        }
        
        // percobaan perulangan foreach
        echo "<p>Percobaan Perulangan forEach </p>";
            // kita menggunakan array bulan dan profil diatas tadi
        echo "<p>nama bulan</p>";
        foreach ($bulan as $value) {
            echo "<li>bulan ".$value." </li>";
        }
        
        echo "<p>profil saya</p>";
        foreach ($profil as $key => $value) {
            echo "<li><b>".$key."</b> : ".$value."</li>";
        }
        








    ?>
</body>
</html>