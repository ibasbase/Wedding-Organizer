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
		$pdf->ezText('LAPORAN DATA MEMBER', 15, array('justification' => 'center'));
		$pdf->ezText('Studi Kasus Toko Baju Online dengan PHP & MySQL', 15, array('justification' => 'center'));
		$pdf->ezSetDy(-10);
		$pdf->ezText('Muhammad Sadeli, Maxikom', 12, array('justification' => 'center'));
		$pdf->ezText('Jl. Residen H. Abdul Rozak No. 33 B5-B6 Palembang 30114', 10, array('justification' => 'center'));
		$pdf->ezText('maxi@maxikom.co.id / Telp : 0711 - 717 598 / Fax : 0711 -717598 / BB : 2A82D0B4', 10, array('justification' => 'center'));
		
		$pdf->ezSetDy(-10); //perintah untuk memberikan jarak spasi paragraf
		
		//$pdf->line(50,1500,2273,1500); //perintah untuk membuat garis atas tabel
					
		$pdf->ezSetDy(-10);
		
		$sql = mysql_query("SELECT * FROM pelanggantbl order by id asc"); 	 	
		$i = 1;
		while($tampil = mysql_fetch_array($sql)) {
			 
			$data[$i]=array('ID'=> $tampil['id'], 	 	
							'NAMA'=>$tampil['nama'],
							'ALAMAT'=>$tampil['alamat'],
							'EMAIL'=>$tampil['email'],
							'TELEPON'=>$tampil['telepon'],
							);
								
			$i++;
			
		}
		
		//perintah untuk mengatur teks yang di cetak pada pdf
		//$pdf->ezStartText(100, 557, 12);
		//$pdf->ezStartText2(500, 557, 12);
		$pdf->ezStartPageNumbers(35, 15, 10);
		$pdf->ezTable($data, '', '', '');
		$pdf->ezSetDy(-50);
		
		$pdf->ezText('NB :', 13, array('justification' => 'LEFT')); //membuat teks NB di bawah tabel
		
		$pdf->ezStream();
?>
