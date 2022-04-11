    <?php
        date_default_timezone_set('asia/jakarta');
        $sword = "Saya sedang belajar web PHP";
        $sword = explode(" ", $sword);
        var_dump($sword);
        echo $sword[3];//php
        echo "<br>";
        $im_sword = implode("_", $sword);
        echo $im_sword;
        echo "<br>";
        echo date("l, d/m/y")."<br>";
        echo "Tanggal hari ini ".date("d/m/y")." atau ".date("y/m/d");
        echo "<br>Waktu sekarang ".date("d/y/y H:i:s");
        echo "<br>";
        $birthday = date_create("18-12-2002");
        $birthdaynow = date("d-m-Y");
        $old = date_diff($birthday, date_create($birthdaynow));
        echo "Putra"."<br>";
        echo "hidup di dunia= ".$old->format('%y')." lebih ".$old->format('%m')." bulan ".$old->format('%a')." hari";
        function datapribadi(){
            $nama = "Rahmad Hidayat Putra";
            $asal = "Surabaya";
            echo "Nama: ".$nama."<br>";
            echo "Asal: ".$asal."<br>";
        }
        echo "<hr>";
        datapribadi();
        function cek_saldo($saldo,$akun){
            if($saldo >= 3000000){
                $thr = $saldo *0.1;
            }
            else if($saldo >= 1000000){
                $thr = $saldo *0.2;
            }
            else {
                $thr = 0 ;
            }
            return "Kamu mendapatkan THR Rp.".$thr." dari saldo Rp.".$saldo." Account ".$akun;
        }
        echo cek_saldo(4000000,"rahmad");
    ?> 