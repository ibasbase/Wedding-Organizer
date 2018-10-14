<?php

//file pendukung class pdf dan koneksi ke database
require("../config.php");
include ('class.ezpdf.php');

//Pengaturan kertas untuk saat ini tipe kertas A4
$pdf =& new Cezpdf('A1','portrait');


		// Atur margin
		$pdf->ezSetCmMargins(1, 3, 3, 3);

		$pdf->addObject($all, 'all');
		$pdf->closeObject();
		
		//baris kode dibawah ini digunakan untuk mencetak info toko dalam pdf
		$pdf->ezText('MAXI BOUTIQUE', 25, array('justification' => 'center'));
		$pdf->ezText('LAPORAN DATA PENJUALAN', 15, array('justification' => 'center'));
		$pdf->ezText('Studi Kasus Toko Baju Online dengan PHP & MySQL', 15, array('justification' => 'center'));
		$pdf->ezSetDy(-10);
		$pdf->ezText('Muhammad Sadeli, Maxikom', 12, array('justification' => 'center'));
		$pdf->ezText('Jl. Residen H. Abdul Rozak No. 33 B5-B6 Palembang 30114', 10, array('justification' => 'center'));
		$pdf->ezText('maxi@maxikom.co.id / Telp : 0711 - 717 598 / Fax : 0711 -717598 / BB : 2A82D0B4', 10, array('justification' => 'center'));
		
		$pdf->ezSetDy(-10); //perintah untuk memberikan jarak spasi paragraf
		
		//$pdf->line(50,1500,2273,1500); //perintah untuk membuat garis atas tabel
					
		$pdf->ezSetDy(-10);
		
//$sql1 = mysql_query("SELECT * FROM transaksitbl"); 	 	
//$hasil = mysql_query($sql1);
//$numrows = mysql_num_rows($sql1);

   //echo "Pengulangan ke " . $x . "<br/>;

//while($cari = mysql_fetch_array($sql1)) {
		//$idx= $cari['notransaksi'];
		//$pdf->ezText($idx, 13, array('justification' => 'LEFT'));

//for($x=$cari['notransaksi']; $x<=$numrows; $x++)
//{
	
	$sql = mysql_query("SELECT * FROM transaksirincitbl inner join transaksitbl on transaksirincitbl.notransaksi = transaksitbl.notransaksi"); 	 	
		$i = 1;
		while($tampil = mysql_fetch_array($sql)) {
		
			$format_harga  = number_format($tampil['harga'], 0, ',', '.');	//format angka
			$format_total  = number_format($tampil['subtotal'], 0, ',', '.');	//format angka
			 
			$data[$i]=array('FAKTUR'=> $tampil['notransaksi'], 	 	
							'MEMBER'=>$tampil['username'],
							'PRODUK'=>$tampil['nama'],
							'HARGA'=>$format_harga,
							'JUMLAH'=>$tampil['jumlah'],
							'SUB TOTAL'=>$format_total,
							);
								
			$i++;
			
		}
		
//$x++;
//}
//}
		//perintah untuk mengatur teks yang di cetak pada pdf
		//$pdf->ezStartText(100, 557, 12);
		//$pdf->ezStartText2(500, 557, 12);
		$pdf->ezStartPageNumbers(35, 15, 10);
		$pdf->ezTable($data, '', '', '');
		$pdf->ezSetDy(-50);
		
		$pdf->ezText('NB :', 13, array('justification' => 'LEFT')); //membuat teks NB di bawah tabel
		
		$pdf->ezStream();
?>
