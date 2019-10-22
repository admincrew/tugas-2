<?php
error_reporting(E_ALL ^ E_NOTICE);
/***Created By www.admincrew.web.id
    2018.010.011 - Maulana Adhie Pratama
    Programming 2
***/

echo "    /   \     |       \ |   \/   | |  | |  \ |  |  /      ||   _  \     |   ____\   \  /  \  /   /\n"; 
echo "   /  ^  \    |  .--.  ||  \  /  | |  | |   \|  | |  ,----'|  |_)  |    |  |__   \   \/    \/   /\n";  
echo "  /  /_\  \   |  |  |  ||  |\/|  | |  | |  . `  | |  |     |      /     |   __|   \            /\n";   
echo " /  _____  \  |  '--'  ||  |  |  | |  | |  |\   | |  `----.|  |\  \----.|  |____   \    /\    /\n";    
echo "/__/     \__\ |_______/ |__|  |__| |__| |__| \__|  \______|| _| `._____||_______|   \__/  \__/\n";     
echo "+++ Script Tugas Online 2 +++\n";

function tugas_online() {
    echo "Apakah Pembeli Sebagai Member ? (Y/N) : ";
    $member = trim(fgets(STDIN));
    if ( $member == "Y") {
        $diskon = (5/100);
        $discount = 5;
    } else {
        $diskon = 0;
    }
    $jumlah = readline("Jumlah Barang Yang Dibeli : ");
    $pembelian = 0;
    for ($i=1; $i<=$jumlah; $i++) {
        echo "Barang Ke : ".$i."\n";
        $namaBarang = readline("Nama : ");
        $hargaBarang = readline("Harga : ");
        $jumlahBarang = readline("Jumlah : ");
        $diskonBarang = readline("Diskon (Tanpa %) : ");
        $totalHarga = $hargaBarang*$jumlahBarang;
        $diskonDiterima = ($diskonBarang/100)*$totalHarga;
        $hargaDiterima = $totalHarga-$diskonDiterima;
        $mauDibayar = $pembelian += $hargaDiterima;
        echo "Harga Setelah Diskon = Rp.".$hargaDiterima.",-\n";
        echo "\n";
    }
    echo "===========NOTA PEMBELIAN===========\n";
    echo "Total Harga Barang : Rp.".$mauDibayar.",-\n";
    echo "Diskon Yang Di Dapat : ".$discount."%\n";
    $diskonMember = $diskon*$mauDibayar;
    $pastiDibayar = $mauDibayar-$diskonMember;
    echo "Harga Yang Harus Di Bayar : Rp.".$pastiDibayar.",-\n"; 
}
echo tugas_online();
?>