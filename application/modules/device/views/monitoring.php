<?php 
$min_rh = 0;
$mid_rh = 0;
$mid2_rh = 0;
$max_rh = 0;

$min_suhu_udara = 0;
$mid_suhu_udara = 0;
$mid2_suhu_udara = 0;
$max_suhu_udara = 0;

$min_suhu_daun = 0;
$mid_suhu_daun = 0;
$mid2_suhu_daun = 0;
$max_suhu_daun = 0;

$min_media_tanam = 0;
$mid_media_tanam = 0;
$mid2_media_tanam = 0;
$max_media_tanam = 0;

$min_ppm = 0;
$mid_ppm = 0;
$mid2_ppm = 0;
$max_ppm = 0;

$min_ph = 0;
$mid_ph = 0;
$mid2_ph = 0;
$max_ph = 0;

$min_oksigen = 0;
$mid_oksigen = 0;
$mid2_oksigen = 0;
$max_oksigen = 0;

$hasilmin_rh = 0; // Untuk menampung hasil perhitungan
$hasilmid_rh = 0;
$hasilmax_rh = 0;

$hasilmin_suhu_udara = 0;
$hasilmid_suhu_udara = 0;
$hasilmax_suhu_udara = 0;

$hasilmin_suhu_daun = 0;
$hasilmid_suhu_daun = 0;
$hasilmax_suhu_daun = 0;

$hasilmin_media_tanam = 0;
$hasilmid_media_tanam = 0;
$hasilmax_media_tanam = 0;

$hasilmin_ppm = 0;
$hasilmid_ppm = 0;
$hasilmax_ppm = 0;

$hasilmin_ph = 0;
$hasilmid_ph = 0;
$hasilmax_ph = 0;

$hasilmin_oksigen = 0;
$hasilmid_oksigen = 0;
$hasilmax_oksigen = 0;

$hasilfusifikasi_rh =0;
$hasilfusifikasi_suhu_udara =0;
$hasilfusifikasi_suhu_daun =0;
$hasilfusifikasi_media_tanam =0;
$hasilfusifikasi_ppm =0;
$hasilfusifikasi_ph =0;
$hasilfusifikasi_oksigen =0;

$hasilfusifikasi_kesimpulan_rh = '';
$hasilfusifikasi_kesimpulan_suhu_udara = '';
$hasilfusifikasi_kesimpulan_suhu_daun = '';
$hasilfusifikasi_kesimpulan_media_tanam = '';
$hasilfusifikasi_kesimpulan_ppm = '';
$hasilfusifikasi_kesimpulan_ph = '';
$hasilfusifikasi_kesimpulan_oksigen = '';

$kesimpulan_hasil_kondisi_vpd = '';
$kesimpulan_hasil_kondisi = '';
$kesimpulan_hasil_debit = '';
$kesimpulan_hasil_kontrol_suhu ='';
$kesimpulan_hasil_kontrol_kelembapan = '';
$kesimpulan_hasil_kontrol_nutrisi = '';
$kesimpulan_hasil_kontrol_ph = '';


    
		foreach($rule as $r){ //untuk menampilkan variabel data yang diangkut dari controller
		?>
		<?php
            $min_rh += $r->min_rh;
			$mid_rh += $r->mid_rh;
			$mid2_rh += $r->mid2_rh;
			$max_rh += $r->max_rh;

			$min_suhu_udara += $r->min_suhu_udara;
			$mid_suhu_udara += $r->mid_suhu_udara;
			$mid2_suhu_udara += $r->mid2_suhu_udara;
			$max_suhu_udara += $r->max_suhu_udara;

			$min_suhu_daun += $r->min_suhu_daun;
			$mid_suhu_daun += $r->mid_suhu_daun;
			$mid2_suhu_daun += $r->mid2_suhu_daun;
			$max_suhu_daun += $r->max_suhu_daun;

			$min_media_tanam += $r->min_media_tanam;
			$mid_media_tanam += $r->mid_media_tanam;
			$mid2_media_tanam += $r->mid2_media_tanam;
			$max_media_tanam += $r->max_media_tanam;

			$min_ppm += $r->min_ppm;
			$mid_ppm += $r->mid_ppm;
			$mid2_ppm += $r->mid2_ppm;
			$max_ppm += $r->max_ppm;

			$min_ph += $r->min_ph;
			$mid_ph += $r->mid_ph;
			$mid2_ph += $r->mid2_ph;
			$max_ph += $r->max_ph;

			$min_oksigen += $r->min_oksigen;
			$mid_oksigen += $r->mid_oksigen;
			$mid2_oksigen += $r->mid2_oksigen;
			$max_oksigen += $r->max_oksigen;
		 ?>
        <?php } ?>

        <?php 
		foreach($data as $d){ //untuk menampilkan variabel data yang diangkut dari controller
		?>
		<?php
        $time=$d->time;
        $rh=$d->rh;
        $suhu_udara=$d->suhu_udara;
        $suhu_daun=$d->suhu_daun;
        $media_tanam=$d->media_tanam;
        $ppm=$d->ppm;
        $ph=$d->ph;
        $oksigen=$d->oksigen;

        //Fuzifikasi RH => Kering
				if($d->rh <= $min_rh){$hasilmin_rh += 1;}
				else if ($min_rh <= $d->rh && $d->rh < $mid_rh){$hasilmin_rh += 1 - (($d->rh - $min_rh)/($mid_rh - $min_rh));}
				else{$hasilmin_rh += 0;}

				//Fuzifikasi RH => Sangat Lembap
				if($max_rh <= $d->rh){$hasilmax_rh += 1;}
				else if($mid2_rh < $d->rh && $d->rh <= $max_rh){$hasilmax_rh += 1- (($max_rh - $d->rh)/($max_rh - $mid2_rh));}
				else{$hasilmax_rh += 0;}
				
				//Fuzifikasi RH => Ideal
				if($mid_rh <= $d->rh && $d->rh <= $mid2_rh){$hasilmid_rh +=1;}
				else if ($hasilmin_rh > 0){$hasilmid_rh += 1 - $hasilmin_rh;}
				else if ($hasilmax_rh > 0){$hasilmid_rh += 1 - $hasilmax_rh;}
				else {$hasilmid_rh += 0;}
			


        		//Fuzifikasi Suhu Udara => Dingin
				if($d->suhu_udara <= $min_suhu_udara){$hasilmin_suhu_udara += 1;}
				else if ($min_suhu_udara <= $d->suhu_udara && $d->suhu_udara < $mid_suhu_udara){$hasilmin_suhu_udara += 1 - (($d->suhu_udara - $min_suhu_udara)/($mid_suhu_udara - $min_suhu_udara));}
				else{$hasilmin_suhu_udara += 0;}

				//Fuzifikasi Suhu Udara => Panas
				if($max_suhu_udara <= $d->suhu_udara){$hasilmax_suhu_udara += 1;}
				else if($mid2_suhu_udara < $d->suhu_udara && $d->suhu_udara <= $max_suhu_udara){$hasilmax_suhu_udara += 1- (($max_suhu_udara - $d->suhu_udara)/($max_suhu_udara - $mid2_suhu_udara));}
				else{$hasilmax_suhu_udara += 0;}
				
				//Fuzifikasi Suhu Udara => Ideal
				if($mid_suhu_udara <= $d->suhu_udara && $d->suhu_udara <= $mid2_suhu_udara){$hasilmid_suhu_udara +=1;}
				else if ($hasilmin_suhu_udara > 0){$hasilmid_suhu_udara += 1 - $hasilmin_suhu_udara;}
				else if ($hasilmax_suhu_udara > 0){$hasilmid_suhu_udara += 1 - $hasilmax_suhu_udara;}
				else {$hasilmid_suhu_udara += 0;}			
			
			
			
            	//Fuzifikasi Suhu daun => Dingin
                if($d->suhu_daun <= $min_suhu_daun){$hasilmin_suhu_daun += 1;}
                else if ($min_suhu_daun <= $d->suhu_daun && $d->suhu_daun < $mid_suhu_daun){$hasilmin_suhu_daun += 1 - (($d->suhu_daun - $min_suhu_daun)/($mid_suhu_daun - $min_suhu_daun));}
                else{$hasilmin_suhu_daun += 0;}
    
                //Fuzifikasi Suhu daun => Panas
                if($max_suhu_daun <= $d->suhu_daun){$hasilmax_suhu_daun += 1;}
                else if($mid2_suhu_daun < $d->suhu_daun && $d->suhu_daun <= $max_suhu_daun){$hasilmax_suhu_daun += 1- (($max_suhu_daun - $d->suhu_daun)/($max_suhu_daun - $mid2_suhu_daun));}
                else{$hasilmax_suhu_daun += 0;}
                    
                //Fuzifikasi Suhu daun => Ideal
                if($mid_suhu_daun <= $d->suhu_daun && $d->suhu_daun <= $mid2_suhu_daun){$hasilmid_suhu_daun +=1;}
                else if ($hasilmin_suhu_daun > 0){$hasilmid_suhu_daun += 1 - $hasilmin_suhu_daun;}
                else if ($hasilmax_suhu_daun > 0){$hasilmid_suhu_daun += 1 - $hasilmax_suhu_daun;}
                else {$hasilmid_suhu_daun += 0;}
				
				

				//Fuzifikasi Media Tanam => Kering
				if($d->media_tanam <= $min_media_tanam){$hasilmin_media_tanam += 1;}
				else if ($min_media_tanam <= $d->media_tanam && $d->media_tanam < $mid_media_tanam){$hasilmin_media_tanam += 1 - (($d->media_tanam - $min_media_tanam)/($mid_media_tanam - $min_media_tanam));}
				else{$hasilmin_media_tanam += 0;}
				
				//Fuzifikasi Media Tanam => Lembap
				if($max_media_tanam <= $d->media_tanam){$hasilmax_media_tanam += 1;}
				else if($mid2_media_tanam < $d->media_tanam && $d->media_tanam <= $max_media_tanam){$hasilmax_media_tanam += 1- (($max_media_tanam - $d->media_tanam)/($max_media_tanam - $mid2_media_tanam));}
				else{$hasilmax_media_tanam += 0;}
									
				//Fuzifikasi Media Tanam => Ideal
				if($mid_media_tanam <= $d->media_tanam && $d->media_tanam <= $mid2_media_tanam){$hasilmid_media_tanam +=1;}
				else if ($hasilmin_media_tanam > 0){$hasilmid_media_tanam += 1 - $hasilmin_media_tanam;}
				else if ($hasilmax_media_tanam > 0){$hasilmid_media_tanam += 1 - $hasilmax_media_tanam;}
				else {$hasilmid_media_tanam += 0;}



				//Fuzifikasi PPM => Kurang
				if($d->ppm <= $min_ppm){$hasilmin_ppm += 1;}
				else if ($min_ppm <= $d->ppm && $d->ppm < $mid_ppm){$hasilmin_ppm += 1 - (($d->ppm - $min_ppm)/($mid_ppm - $min_ppm));}
				else{$hasilmin_ppm += 0;}
				
				//Fuzifikasi PPM => Berlebih
				if($max_ppm <= $d->ppm){$hasilmax_ppm += 1;}
				else if($mid2_ppm < $d->ppm && $d->ppm <= $max_ppm){$hasilmax_ppm += 1- (($max_ppm - $d->ppm)/($max_ppm - $mid2_ppm));}
				else{$hasilmax_ppm += 0;}
									
				//Fuzifikasi PPM => Ideal
				if($mid_ppm <= $d->ppm && $d->ppm <= $mid2_ppm){$hasilmid_ppm +=1;}
				else if ($hasilmin_ppm > 0){$hasilmid_ppm += 1 - $hasilmin_ppm;}
				else if ($hasilmax_ppm > 0){$hasilmid_ppm += 1 - $hasilmax_ppm;}
				else {$hasilmid_ppm += 0;}



				//Fuzifikasi pH => Asam
				if($d->ph <= $min_ph){$hasilmin_ph += 1;}
				else if ($min_ph <= $d->ph && $d->ph < $mid_ph){$hasilmin_ph += 1 - (($d->ph - $min_ph)/($mid_ph - $min_ph));}
				else{$hasilmin_ph += 0;}
				
				//Fuzifikasi pH => Basa
				if($max_ph <= $d->ph){$hasilmax_ph += 1;}
				else if($mid2_ph < $d->ph && $d->ph <= $max_ph){$hasilmax_ph += 1- (($max_ph - $d->ph)/($max_ph - $mid2_ph));}
				else{$hasilmax_ph += 0;}
									
				//Fuzifikasi pH => Ideal
				if($mid_ph <= $d->ph && $d->ph <= $mid2_ph){$hasilmid_ph +=1;}
				else if ($hasilmin_ph > 0){$hasilmid_ph += 1 - $hasilmin_ph;}
				else if ($hasilmax_ph > 0){$hasilmid_ph += 1 - $hasilmax_ph;}
				else {$hasilmid_ph += 0;}



				//Fuzifikasi Oksigen => Kurang
				if($d->oksigen <= $min_oksigen){$hasilmin_oksigen += 1;}
				else if ($min_oksigen <= $d->oksigen && $d->oksigen < $mid_oksigen){$hasilmin_oksigen += 1 - (($d->oksigen - $min_oksigen)/($mid_oksigen - $min_oksigen));}
				else{$hasilmin_oksigen += 0;}
				
				//Fuzifikasi Oksigen => Ideal
				if($max_oksigen <= $d->oksigen){$hasilmax_oksigen += 1;}
				else if($mid2_oksigen < $d->oksigen && $d->oksigen <= $max_oksigen){$hasilmax_oksigen += 1- (($max_oksigen - $d->oksigen)/($max_oksigen - $mid2_oksigen));}
				else{$hasilmax_oksigen += 0;}
									
				//Fuzifikasi Oksigen => Ideal
				if($mid_oksigen <= $d->oksigen && $d->oksigen <= $mid2_oksigen){$hasilmid_oksigen +=1;}
				else if ($hasilmin_oksigen > 0){$hasilmid_oksigen += 1 - $hasilmin_oksigen;}
				else if ($hasilmax_oksigen > 0){$hasilmid_oksigen += 1 - $hasilmax_oksigen;}
				else {$hasilmid_oksigen += 0;}


				//Hasil Fuzifikasi RH
				 if($hasilmin_rh >= $hasilmid_rh && $hasilmid_rh >= $hasilmax_rh){$hasilfusifikasi_rh += $hasilmin_rh;}
				 else if($hasilmid_rh >= $hasilmin_rh && $hasilmid_rh >= $hasilmax_rh){$hasilfusifikasi_rh += $hasilmid_rh;}
				 else if($hasilmax_rh >= $hasilmid_rh && $hasilmax_rh >= $hasilmin_rh){$hasilfusifikasi_rh += $hasilmax_rh;}
				 else{$hasilfusifikasi_rh += 0;}

				 //Kesimpulan Fuzifikasi RH
				 if($hasilmin_rh >= $hasilmid_rh && $hasilmid_rh >= $hasilmax_rh){$hasilfusifikasi_kesimpulan_rh .= 'Kering';}
				 else if($hasilmid_rh >= $hasilmin_rh && $hasilmid_rh >= $hasilmax_rh){$hasilfusifikasi_kesimpulan_rh .= 'Ideal';}
				 else if($hasilmax_rh >= $hasilmid_rh && $hasilmax_rh >= $hasilmin_rh){$hasilfusifikasi_kesimpulan_rh .= 'Sangat Lembap';}
				 else{$hasilfusifikasi_kesimpulan_rh .= 'error';}	
				 
				 

				//Hasil Fuzifikasi Suhu Udara
                if($hasilmin_suhu_udara >= $hasilmid_suhu_udara && $hasilmid_suhu_udara >= $hasilmax_suhu_udara){$hasilfusifikasi_suhu_udara += $hasilmin_suhu_udara;}
                else if($hasilmid_suhu_udara >= $hasilmin_suhu_udara && $hasilmid_suhu_udara >= $hasilmax_suhu_udara){$hasilfusifikasi_suhu_udara += $hasilmid_suhu_udara;}
                else if($hasilmax_suhu_udara >= $hasilmid_suhu_udara && $hasilmax_suhu_udara >= $hasilmin_suhu_udara){$hasilfusifikasi_suhu_udara += $hasilmax_suhu_udara;}
                else{$hasilfusifikasi_suhu_udara += 0;}

                //Kesimpulan Fuzifikasi Suhu Udara
                if($hasilmin_suhu_udara >= $hasilmid_suhu_udara && $hasilmid_suhu_udara >= $hasilmax_suhu_udara){$hasilfusifikasi_kesimpulan_suhu_udara .= 'Dingin';}
                else if($hasilmid_suhu_udara >= $hasilmin_suhu_udara && $hasilmid_suhu_udara >= $hasilmax_suhu_udara){$hasilfusifikasi_kesimpulan_suhu_udara .= 'Ideal';}
                else if($hasilmax_suhu_udara >= $hasilmid_suhu_udara && $hasilmax_suhu_udara >= $hasilmin_suhu_udara){$hasilfusifikasi_kesimpulan_suhu_udara .= 'Panas';}
                else{$hasilfusifikasi_kesimpulan_suhu_udara .= 'error';}
				
				
				
				//Hasil Fuzifikasi Suhu Daun
                if($hasilmin_suhu_daun >= $hasilmid_suhu_daun && $hasilmid_suhu_daun >= $hasilmax_suhu_daun){$hasilfusifikasi_suhu_daun += $hasilmin_suhu_daun;}
                else if($hasilmid_suhu_daun >= $hasilmin_suhu_daun && $hasilmid_suhu_daun >= $hasilmax_suhu_daun){$hasilfusifikasi_suhu_daun += $hasilmid_suhu_daun;}
                else if($hasilmax_suhu_daun >= $hasilmid_suhu_daun && $hasilmax_suhu_daun >= $hasilmin_suhu_daun){$hasilfusifikasi_suhu_daun += $hasilmax_suhu_daun;}
                else{$hasilfusifikasi_suhu_daun += 0;}

                //Kesimpulan Fuzifikasi Suhu Daun
                if($hasilmin_suhu_daun >= $hasilmid_suhu_daun && $hasilmid_suhu_daun >= $hasilmax_suhu_daun){$hasilfusifikasi_kesimpulan_suhu_daun .= 'Dingin';}
                else if($hasilmid_suhu_daun >= $hasilmin_suhu_daun && $hasilmid_suhu_daun >= $hasilmax_suhu_daun){$hasilfusifikasi_kesimpulan_suhu_daun .= 'Ideal';}
                else if($hasilmax_suhu_daun >= $hasilmid_suhu_daun && $hasilmax_suhu_daun >= $hasilmin_suhu_daun){$hasilfusifikasi_kesimpulan_suhu_daun .= 'Panas';}
                else{$hasilfusifikasi_kesimpulan_suhu_daun .= 'error';}	
				
				

				//Hasil Fuzifikasi Media Tanam
                if($hasilmin_media_tanam >= $hasilmid_media_tanam && $hasilmid_media_tanam >= $hasilmax_media_tanam){$hasilfusifikasi_media_tanam += $hasilmin_media_tanam;}
                else if($hasilmid_media_tanam >= $hasilmin_media_tanam && $hasilmid_media_tanam >= $hasilmax_media_tanam){$hasilfusifikasi_media_tanam += $hasilmid_media_tanam;}
                else if($hasilmax_media_tanam >= $hasilmid_media_tanam && $hasilmax_media_tanam >= $hasilmin_media_tanam){$hasilfusifikasi_media_tanam += $hasilmax_media_tanam;}
                else{$hasilfusifikasi_media_tanam += 0;}

                //Kesimpulan Fuzifikasi Media Tanam
                if($hasilmin_media_tanam >= $hasilmid_media_tanam && $hasilmid_media_tanam >= $hasilmax_media_tanam){$hasilfusifikasi_kesimpulan_media_tanam .= 'Kering';}
                else if($hasilmid_media_tanam >= $hasilmin_media_tanam && $hasilmid_media_tanam >= $hasilmax_media_tanam){$hasilfusifikasi_kesimpulan_media_tanam .= 'Ideal';}
                else if($hasilmax_media_tanam >= $hasilmid_media_tanam && $hasilmax_media_tanam >= $hasilmin_media_tanam){$hasilfusifikasi_kesimpulan_media_tanam .= 'lembap';}
                else{$hasilfusifikasi_kesimpulan_media_tanam .= 'error';}	
				
				

				//Hasil Fuzifikasi PPM
                if($hasilmin_ppm >= $hasilmid_ppm && $hasilmid_ppm >= $hasilmax_ppm){$hasilfusifikasi_ppm += $hasilmin_ppm;}
                else if($hasilmid_ppm >= $hasilmin_ppm && $hasilmid_ppm >= $hasilmax_ppm){$hasilfusifikasi_ppm += $hasilmid_ppm;}
                else if($hasilmax_ppm >= $hasilmid_ppm && $hasilmax_ppm >= $hasilmin_ppm){$hasilfusifikasi_ppm += $hasilmax_ppm;}
                else{$hasilfusifikasi_ppm += 0;}

                //Kesimpulan Fuzifikasi PPM
                if($hasilmin_ppm >= $hasilmid_ppm && $hasilmid_ppm >= $hasilmax_ppm){$hasilfusifikasi_kesimpulan_ppm .= 'Kurang';}
                else if($hasilmid_ppm >= $hasilmin_ppm && $hasilmid_ppm >= $hasilmax_ppm){$hasilfusifikasi_kesimpulan_ppm .= 'Ideal';}
                else if($hasilmax_ppm >= $hasilmid_ppm && $hasilmax_ppm >= $hasilmin_ppm){$hasilfusifikasi_kesimpulan_ppm .= 'Berlebih';}
                else{$hasilfusifikasi_kesimpulan_ppm .= 'error';}	
				
				

				//Hasil Fuzifikasi pH
                if($hasilmin_ph >= $hasilmid_ph && $hasilmid_ph >= $hasilmax_ph){$hasilfusifikasi_ph += $hasilmin_ph;}
                else if($hasilmid_ph >= $hasilmin_ph && $hasilmid_ph >= $hasilmax_ph){$hasilfusifikasi_ph += $hasilmid_ph;}
                else if($hasilmax_ph >= $hasilmid_ph && $hasilmax_ph >= $hasilmin_ph){$hasilfusifikasi_ph += $hasilmax_ph;}
                else{$hasilfusifikasi_ph += 0;}

                //Kesimpulan Fuzifikasi pH
                if($hasilmin_ph >= $hasilmid_ph && $hasilmid_ph >= $hasilmax_ph){$hasilfusifikasi_kesimpulan_ph .= 'Asam';}
                else if($hasilmid_ph >= $hasilmin_ph && $hasilmid_ph >= $hasilmax_ph){$hasilfusifikasi_kesimpulan_ph .= 'Ideal';}
                else if($hasilmax_ph >= $hasilmid_ph && $hasilmax_ph >= $hasilmin_ph){$hasilfusifikasi_kesimpulan_ph .= 'Basa';}
                else{$hasilfusifikasi_kesimpulan_ph .= 'error';}
				
				

				//Hasil Fuzifikasi Oksigen
                if($hasilmin_oksigen >= $hasilmid_oksigen && $hasilmid_oksigen >= $hasilmax_oksigen){$hasilfusifikasi_oksigen += $hasilmin_oksigen;}
                else if($hasilmid_oksigen >= $hasilmin_oksigen && $hasilmid_oksigen >= $hasilmax_oksigen){$hasilfusifikasi_oksigen += $hasilmid_oksigen;}
                else if($hasilmax_oksigen >= $hasilmid_oksigen && $hasilmax_oksigen >= $hasilmin_oksigen){$hasilfusifikasi_oksigen += $hasilmax_oksigen;}
                else{$hasilfusifikasi_oksigen += 0;}

                //Kesimpulan Fuzifikasi Oksigen
                if($hasilmin_oksigen >= $hasilmid_oksigen && $hasilmid_oksigen >= $hasilmax_oksigen){$hasilfusifikasi_kesimpulan_oksigen .= 'Kurang';}
                else if($hasilmid_oksigen >= $hasilmin_oksigen && $hasilmid_oksigen >= $hasilmax_oksigen){$hasilfusifikasi_kesimpulan_oksigen .= 'Ideal';}
                else if($hasilmax_oksigen >= $hasilmid_oksigen && $hasilmax_oksigen >= $hasilmin_oksigen){$hasilfusifikasi_kesimpulan_oksigen .= 'Ideal';}
                else{$hasilfusifikasi_kesimpulan_oksigen .= 'error';}
                
                ?>
        <?php } 
        
        #----------Bayes------------#
		//Hasil VPD
		$sangat_baik_vpd1 = $this->db->select('*')->from('data_pelatihan')->where('hasil_vpd', 'Sangat Baik')->get()->num_rows();
		$baik_vpd1 = $this->db->select('*')->from('data_pelatihan')->where('hasil_vpd', 'Baik')->get()->num_rows();
		$buruk_vpd1 = $this->db->select('*')->from('data_pelatihan')->where('hasil_vpd', 'Buruk')->get()->num_rows();
		$sangat_buruk_vpd1 = $this->db->select('*')->from('data_pelatihan')->where('hasil_vpd', 'Sangat Buruk')->get()->num_rows();
		$total_keseluruhan_vpd = $sangat_baik_vpd1 + $baik_vpd1 + $buruk_vpd1 + $sangat_buruk_vpd1;

		$sangat_baik_vpd = number_format((float)($sangat_baik_vpd1/$total_keseluruhan_vpd), 3, '.', '');
		$baik_vpd = number_format((float)($baik_vpd1/$total_keseluruhan_vpd), 3, '.', '');
		$buruk_vpd = number_format((float)($buruk_vpd1/$total_keseluruhan_vpd), 3, '.', '');
		$sangat_buruk_vpd = number_format((float)($sangat_buruk_vpd1/$total_keseluruhan_vpd), 3, '.', '');

		$rh_sangat_baik_vpd = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('hasil_vpd', 'Sangat Baik')->get()->num_rows();
		$rh_baik_vpd = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('hasil_vpd', 'Baik')->get()->num_rows();
		$rh_buruk_vpd = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('hasil_vpd', 'Buruk')->get()->num_rows();
		$rh_sangat_buruk_vpd = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('hasil_vpd', 'Sangat Buruk')->get()->num_rows();

		$rh_sangat_baik_vpd = number_format((float)($rh_sangat_baik_vpd / $sangat_baik_vpd1), 3, '.', '');
		$rh_baik_vpd = number_format((float)($rh_baik_vpd / $baik_vpd1), 3, '.', '');
		$rh_buruk_vpd = number_format((float)($rh_buruk_vpd / $buruk_vpd1), 3, '.', '');
		$rh_sangat_buruk_vpd = number_format((float)($rh_sangat_buruk_vpd / $sangat_buruk_vpd1), 3, '.', '');

		$suhu_udara_sangat_baik_vpd = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('hasil_vpd', 'Sangat Baik')->get()->num_rows();
		$suhu_udara_baik_vpd = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('hasil_vpd', 'Baik')->get()->num_rows();
		$suhu_udara_buruk_vpd = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('hasil_vpd', 'Buruk')->get()->num_rows();
		$suhu_udara_sangat_buruk_vpd = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('hasil_vpd', 'Sangat Buruk')->get()->num_rows();

		$suhu_udara_sangat_baik_vpd = number_format((float)($suhu_udara_sangat_baik_vpd / $sangat_baik_vpd1), 3, '.', '');
		$suhu_udara_baik_vpd = number_format((float)($suhu_udara_baik_vpd / $baik_vpd1), 3, '.', '');
		$suhu_udara_buruk_vpd = number_format((float)($suhu_udara_buruk_vpd / $buruk_vpd1), 3, '.', '');
		$suhu_udara_sangat_buruk_vpd = number_format((float)($suhu_udara_sangat_buruk_vpd / $sangat_buruk_vpd1), 3, '.', '');

		$suhu_daun_sangat_baik_vpd = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('hasil_vpd', 'Sangat Baik')->get()->num_rows();
		$suhu_daun_baik_vpd = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('hasil_vpd', 'Baik')->get()->num_rows();
		$suhu_daun_buruk_vpd = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('hasil_vpd', 'Buruk')->get()->num_rows();
		$suhu_daun_sangat_buruk_vpd = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('hasil_vpd', 'Sangat Buruk')->get()->num_rows();

		$suhu_daun_sangat_baik_vpd = number_format((float)($suhu_daun_sangat_baik_vpd / $sangat_baik_vpd1), 3, '.', '');
		$suhu_daun_baik_vpd = number_format((float)($suhu_daun_baik_vpd / $baik_vpd1), 3, '.', '');
		$suhu_daun_buruk_vpd = number_format((float)($suhu_daun_buruk_vpd / $buruk_vpd1), 3, '.', '');
		$suhu_daun_sangat_buruk_vpd = number_format((float)($suhu_daun_sangat_buruk_vpd / $sangat_buruk_vpd1), 3, '.', '');	

		//hasil probabilitas VPD
		$pembilang_vpd = number_format((float)(($sangat_baik_vpd*$rh_sangat_baik_vpd*$suhu_udara_sangat_baik_vpd*$suhu_daun_sangat_baik_vpd) + ($baik_vpd*$rh_baik_vpd*$suhu_udara_baik_vpd*$suhu_daun_baik_vpd) + ($buruk_vpd*$rh_buruk_vpd*$suhu_udara_buruk_vpd*$suhu_daun_buruk_vpd) + ($sangat_buruk_vpd*$rh_sangat_buruk_vpd*$suhu_udara_sangat_buruk_vpd*$suhu_daun_sangat_buruk_vpd)), 5, '.', '');
		$hasil_sangat_baik_vpd = number_format((float)(($sangat_baik_vpd*$rh_sangat_baik_vpd*$suhu_udara_sangat_baik_vpd*$suhu_daun_sangat_baik_vpd) / $pembilang_vpd), 5, '.', '');
		$hasil_baik_vpd = number_format((float)(($baik_vpd*$rh_baik_vpd*$suhu_udara_baik_vpd*$suhu_daun_baik_vpd) / $pembilang_vpd), 5, '.', '');
		$hasil_buruk_vpd = number_format((float)(($buruk_vpd*$rh_buruk_vpd*$suhu_udara_buruk_vpd*$suhu_daun_buruk_vpd) / $pembilang_vpd), 5, '.', '');
		$hasil_sangat_buruk_vpd = number_format((float)(($sangat_buruk_vpd*$rh_sangat_buruk_vpd*$suhu_udara_sangat_buruk_vpd*$suhu_daun_sangat_buruk_vpd) / $pembilang_vpd), 5, '.', '');

		//Kesimpulan Hasil VPD
		if($hasil_sangat_baik_vpd >= $hasil_baik_vpd && $hasil_sangat_baik_vpd >= $hasil_buruk_vpd && $hasil_sangat_baik_vpd >= $hasil_sangat_buruk_vpd){$kesimpulan_hasil_kondisi_vpd .= 'Sangat Baik';}
		else if ($hasil_baik_vpd >= $hasil_sangat_baik_vpd && $hasil_baik_vpd >= $hasil_buruk_vpd && $hasil_baik_vpd >= $hasil_sangat_buruk_vpd){$kesimpulan_hasil_kondisi_vpd .= 'Baik';}
		else if ($hasil_buruk_vpd >= $hasil_sangat_baik_vpd && $hasil_buruk_vpd >= $hasil_baik_vpd && $hasil_buruk_vpd >= $hasil_sangat_buruk_vpd){$kesimpulan_hasil_kondisi_vpd .= 'Buruk';}
		else if ($hasil_sangat_buruk_vpd >= $hasil_sangat_baik_vpd && $hasil_sangat_buruk_vpd >= $hasil_baik_vpd && $hasil_sangat_buruk_vpd >= $hasil_buruk_vpd){$kesimpulan_hasil_kondisi_vpd .= 'Sangat Buruk';}
		else {$kesimpulan_hasil_kondisi_vpd .= 'error';}
		

        //Hasil kondisi
		$sangat_baik_kondisi1 = $this->db->select('*')->from('data_pelatihan')->where('hasil_kondisi', 'Sangat Baik')->get()->num_rows();
		$baik_kondisi1 = $this->db->select('*')->from('data_pelatihan')->where('hasil_kondisi', 'Baik')->get()->num_rows();
		$buruk_kondisi1 = $this->db->select('*')->from('data_pelatihan')->where('hasil_kondisi', 'Buruk')->get()->num_rows();
		$sangat_buruk_kondisi1 = $this->db->select('*')->from('data_pelatihan')->where('hasil_kondisi', 'Sangat Buruk')->get()->num_rows();
		$total_keseluruhan_kondisi = $sangat_baik_kondisi1 + $baik_kondisi1 + $buruk_kondisi1 + $sangat_buruk_kondisi1;

		$sangat_baik_kondisi = number_format((float)($sangat_baik_kondisi1/$total_keseluruhan_kondisi), 3, '.', '');
		$baik_kondisi = number_format((float)($baik_kondisi1/$total_keseluruhan_kondisi), 3, '.', '');
		$buruk_kondisi = number_format((float)($buruk_kondisi1/$total_keseluruhan_kondisi), 3, '.', '');
		$sangat_buruk_kondisi = number_format((float)($sangat_buruk_kondisi1/$total_keseluruhan_kondisi), 3, '.', '');

		$rh_sangat_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('hasil_kondisi', 'Sangat Baik')->get()->num_rows();
		$rh_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('hasil_kondisi', 'Baik')->get()->num_rows();
		$rh_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('hasil_kondisi', 'Buruk')->get()->num_rows();
		$rh_sangat_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('hasil_kondisi', 'Sangat Buruk')->get()->num_rows();
	
		$rh_sangat_baik_kondisi = number_format((float)($rh_sangat_baik_kondisi / $sangat_baik_kondisi1), 3, '.', '');
		$rh_baik_kondisi = number_format((float)($rh_baik_kondisi / $baik_kondisi1), 3, '.', '');
		$rh_buruk_kondisi = number_format((float)($rh_buruk_kondisi / $buruk_kondisi1), 3, '.', '');
		$rh_sangat_buruk_kondisi = number_format((float)($rh_sangat_buruk_kondisi / $sangat_buruk_kondisi1), 3, '.', '');		

		$suhu_udara_sangat_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('hasil_kondisi', 'Sangat Baik')->get()->num_rows();
		$suhu_udara_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('hasil_kondisi', 'Baik')->get()->num_rows();
		$suhu_udara_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('hasil_kondisi', 'Buruk')->get()->num_rows();
		$suhu_udara_sangat_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('hasil_kondisi', 'Sangat Buruk')->get()->num_rows();
	
		$suhu_udara_sangat_baik_kondisi = number_format((float)($suhu_udara_sangat_baik_kondisi / $sangat_baik_kondisi1), 3, '.', '');
		$suhu_udara_baik_kondisi = number_format((float)($suhu_udara_baik_kondisi / $baik_kondisi1), 3, '.', '');
		$suhu_udara_buruk_kondisi = number_format((float)($suhu_udara_buruk_kondisi / $buruk_kondisi1), 3, '.', '');
		$suhu_udara_sangat_buruk_kondisi = number_format((float)($suhu_udara_sangat_buruk_kondisi / $sangat_buruk_kondisi1), 3, '.', '');

		$suhu_daun_sangat_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('hasil_kondisi', 'Sangat Baik')->get()->num_rows();
		$suhu_daun_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('hasil_kondisi', 'Baik')->get()->num_rows();
		$suhu_daun_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('hasil_kondisi', 'Buruk')->get()->num_rows();
		$suhu_daun_sangat_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('hasil_kondisi', 'Sangat Buruk')->get()->num_rows();
	
		$suhu_daun_sangat_baik_kondisi = number_format((float)($suhu_daun_sangat_baik_kondisi / $sangat_baik_kondisi1), 3, '.', '');
		$suhu_daun_baik_kondisi = number_format((float)($suhu_daun_baik_kondisi / $baik_kondisi1), 3, '.', '');
		$suhu_daun_buruk_kondisi = number_format((float)($suhu_daun_buruk_kondisi / $buruk_kondisi1), 3, '.', '');
		$suhu_daun_sangat_buruk_kondisi = number_format((float)($suhu_daun_sangat_buruk_kondisi / $sangat_buruk_kondisi1), 3, '.', '');

		$media_tanam_sangat_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('hasil_kondisi', 'Sangat Baik')->get()->num_rows();
		$media_tanam_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('hasil_kondisi', 'Baik')->get()->num_rows();
		$media_tanam_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('hasil_kondisi', 'Buruk')->get()->num_rows();
		$media_tanam_sangat_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('hasil_kondisi', 'Sangat Buruk')->get()->num_rows();
	
		$media_tanam_sangat_baik_kondisi = number_format((float)($media_tanam_sangat_baik_kondisi / $sangat_baik_kondisi1), 3, '.', '');
		$media_tanam_baik_kondisi = number_format((float)($media_tanam_baik_kondisi / $baik_kondisi1), 3, '.', '');
		$media_tanam_buruk_kondisi = number_format((float)($media_tanam_buruk_kondisi / $buruk_kondisi1), 3, '.', '');
		$media_tanam_sangat_buruk_kondisi = number_format((float)($media_tanam_sangat_buruk_kondisi / $sangat_buruk_kondisi1), 3, '.', '');

		$ppm_sangat_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('hasil_kondisi', 'Sangat Baik')->get()->num_rows();
		$ppm_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('hasil_kondisi', 'Baik')->get()->num_rows();
		$ppm_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('hasil_kondisi', 'Buruk')->get()->num_rows();
		$ppm_sangat_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('hasil_kondisi', 'Sangat Buruk')->get()->num_rows();
	
		$ppm_sangat_baik_kondisi = number_format((float)($ppm_sangat_baik_kondisi / $sangat_baik_kondisi1), 3, '.', '');
		$ppm_baik_kondisi = number_format((float)($ppm_baik_kondisi / $baik_kondisi1), 3, '.', '');
		$ppm_buruk_kondisi = number_format((float)($ppm_buruk_kondisi / $buruk_kondisi1), 3, '.', '');
		$ppm_sangat_buruk_kondisi = number_format((float)($ppm_sangat_buruk_kondisi / $sangat_buruk_kondisi1), 3, '.', '');

		$ph_sangat_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('hasil_kondisi', 'Sangat Baik')->get()->num_rows();
		$ph_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('hasil_kondisi', 'Baik')->get()->num_rows();
		$ph_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('hasil_kondisi', 'Buruk')->get()->num_rows();
		$ph_sangat_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('hasil_kondisi', 'Sangat Buruk')->get()->num_rows();
	
		$ph_sangat_baik_kondisi = number_format((float)($ph_sangat_baik_kondisi / $sangat_baik_kondisi1), 3, '.', '');
		$ph_baik_kondisi = number_format((float)($ph_baik_kondisi / $baik_kondisi1), 3, '.', '');
		$ph_buruk_kondisi = number_format((float)($ph_buruk_kondisi / $buruk_kondisi1), 3, '.', '');
		$ph_sangat_buruk_kondisi = number_format((float)($ph_sangat_buruk_kondisi / $sangat_buruk_kondisi1), 3, '.', '');

		$oksigen_sangat_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('hasil_kondisi', 'Sangat Baik')->get()->num_rows();
		$oksigen_baik_kondisi = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('hasil_kondisi', 'Baik')->get()->num_rows();
		$oksigen_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('hasil_kondisi', 'Buruk')->get()->num_rows();
		$oksigen_sangat_buruk_kondisi = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('hasil_kondisi', 'Sangat Buruk')->get()->num_rows();
	
		$oksigen_sangat_baik_kondisi = number_format((float)($oksigen_sangat_baik_kondisi / $sangat_baik_kondisi1), 3, '.', '');
		$oksigen_baik_kondisi = number_format((float)($oksigen_baik_kondisi / $baik_kondisi1), 3, '.', '');
		$oksigen_buruk_kondisi = number_format((float)($oksigen_buruk_kondisi / $buruk_kondisi1), 3, '.', '');
		$oksigen_sangat_buruk_kondisi = number_format((float)($oksigen_sangat_buruk_kondisi / $sangat_buruk_kondisi1), 3, '.', '');

		//hasil probabilitas Kondisi
		$pembilang_kondisi = number_format((float)(($sangat_baik_kondisi*$rh_sangat_baik_kondisi*$suhu_udara_sangat_baik_kondisi*$suhu_daun_sangat_baik_kondisi*$media_tanam_sangat_baik_kondisi*$ppm_sangat_baik_kondisi*$ph_sangat_baik_kondisi*$oksigen_sangat_baik_kondisi) + ($baik_kondisi*$rh_baik_kondisi*$suhu_udara_baik_kondisi*$suhu_daun_baik_kondisi*$media_tanam_baik_kondisi*$ppm_baik_kondisi*$ph_baik_kondisi*$oksigen_baik_kondisi) + ($buruk_kondisi*$rh_buruk_kondisi*$suhu_udara_buruk_kondisi*$suhu_daun_buruk_kondisi*$media_tanam_buruk_kondisi*$ppm_buruk_kondisi*$ph_buruk_kondisi*$oksigen_buruk_kondisi) + ($sangat_buruk_kondisi*$rh_sangat_buruk_kondisi*$suhu_udara_sangat_buruk_kondisi*$suhu_daun_sangat_buruk_kondisi*$media_tanam_sangat_buruk_kondisi*$ppm_sangat_buruk_kondisi*$ph_sangat_buruk_kondisi*$oksigen_sangat_buruk_kondisi)), 5, '.', '');
		$hasil_sangat_baik_kondisi = number_format((float)(($sangat_baik_kondisi*$rh_sangat_baik_kondisi*$suhu_udara_sangat_baik_kondisi*$suhu_daun_sangat_baik_kondisi*$media_tanam_sangat_baik_kondisi*$ppm_sangat_baik_kondisi*$ph_sangat_baik_kondisi*$oksigen_sangat_baik_kondisi) / $pembilang_kondisi), 5, '.', '');
		$hasil_baik_kondisi = number_format((float)(($baik_kondisi*$rh_baik_kondisi*$suhu_udara_baik_kondisi*$suhu_daun_baik_kondisi*$media_tanam_baik_kondisi*$ppm_baik_kondisi*$ph_baik_kondisi*$oksigen_baik_kondisi) / $pembilang_kondisi), 5, '.', '');
		$hasil_buruk_kondisi = number_format((float)(($buruk_kondisi*$rh_buruk_kondisi*$suhu_udara_buruk_kondisi*$suhu_daun_buruk_kondisi*$media_tanam_buruk_kondisi*$ppm_buruk_kondisi*$ph_buruk_kondisi*$oksigen_buruk_kondisi) / $pembilang_kondisi), 5, '.', '');
		$hasil_sangat_buruk_kondisi = number_format((float)(($sangat_buruk_kondisi*$rh_sangat_buruk_kondisi*$suhu_udara_sangat_buruk_kondisi*$suhu_daun_sangat_buruk_kondisi*$media_tanam_sangat_buruk_kondisi*$ppm_sangat_buruk_kondisi*$ph_sangat_buruk_kondisi*$oksigen_sangat_buruk_kondisi) / $pembilang_kondisi), 5, '.', '');
	
		//Kesimpulan Hasil Kondisi
		if($hasil_sangat_baik_kondisi >= $hasil_baik_kondisi && $hasil_sangat_baik_kondisi >= $hasil_buruk_kondisi && $hasil_sangat_baik_kondisi >= $hasil_sangat_buruk_kondisi){$kesimpulan_hasil_kondisi .= 'Sangat Baik';}
		else if ($hasil_baik_kondisi >= $hasil_sangat_baik_kondisi && $hasil_baik_kondisi >= $hasil_buruk_kondisi && $hasil_baik_kondisi >= $hasil_sangat_buruk_kondisi){$kesimpulan_hasil_kondisi .= 'Baik';}
		else if ($hasil_buruk_kondisi >= $hasil_sangat_baik_kondisi && $hasil_buruk_kondisi >= $hasil_baik_kondisi && $hasil_buruk_kondisi >= $hasil_sangat_buruk_kondisi){$kesimpulan_hasil_kondisi .= 'Buruk';}
		else if ($hasil_sangat_buruk_kondisi >= $hasil_sangat_baik_kondisi && $hasil_sangat_buruk_kondisi >= $hasil_baik_kondisi && $hasil_sangat_buruk_kondisi >= $hasil_buruk_kondisi){$kesimpulan_hasil_kondisi .= 'Sangat Buruk';}
		else {$kesimpulan_hasil_kondisi .= 'error';}


        //Output Debit
		$lambat_debit1 = $this->db->select('*')->from('data_pelatihan')->where('debit', 'Lambat')->get()->num_rows();
		$sedang_debit1 = $this->db->select('*')->from('data_pelatihan')->where('debit', 'Sedang')->get()->num_rows();
		$cepat_debit1 = $this->db->select('*')->from('data_pelatihan')->where('debit', 'Cepat')->get()->num_rows();
		$total_keseluruhan_debit = $lambat_debit1 + $sedang_debit1 + $cepat_debit1;

		$lambat_debit = number_format((float)($lambat_debit1/$total_keseluruhan_debit), 3, '.', '');
		$sedang_debit = number_format((float)($sedang_debit1/$total_keseluruhan_debit), 3, '.', '');
		$cepat_debit = number_format((float)($cepat_debit1/$total_keseluruhan_debit), 3, '.', '');

		$rh_lambat_debit = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('debit', 'Lambat')->get()->num_rows();
		$rh_sedang_debit = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('debit', 'Sedang')->get()->num_rows();
		$rh_cepat_debit = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('debit', 'Cepat')->get()->num_rows();	
	
		$rh_lambat_debit = number_format((float)($rh_lambat_debit / $lambat_debit1), 3, '.', '');
		$rh_sedang_debit = number_format((float)($rh_sedang_debit / $sedang_debit1), 3, '.', '');
		$rh_cepat_debit = number_format((float)($rh_cepat_debit / $cepat_debit1), 3, '.', '');

		$suhu_udara_lambat_debit = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('debit', 'Lambat')->get()->num_rows();
		$suhu_udara_sedang_debit = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('debit', 'Sedang')->get()->num_rows();
		$suhu_udara_cepat_debit = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('debit', 'Cepat')->get()->num_rows();	
	
		$suhu_udara_lambat_debit = number_format((float)($suhu_udara_lambat_debit / $lambat_debit1), 3, '.', '');
		$suhu_udara_sedang_debit = number_format((float)($suhu_udara_sedang_debit / $sedang_debit1), 3, '.', '');
		$suhu_udara_cepat_debit = number_format((float)($suhu_udara_cepat_debit / $cepat_debit1), 3, '.', '');

		$suhu_daun_lambat_debit = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('debit', 'Lambat')->get()->num_rows();
		$suhu_daun_sedang_debit = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('debit', 'Sedang')->get()->num_rows();
		$suhu_daun_cepat_debit = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('debit', 'Cepat')->get()->num_rows();	
	
		$suhu_daun_lambat_debit = number_format((float)($suhu_daun_lambat_debit / $lambat_debit1), 3, '.', '');
		$suhu_daun_sedang_debit = number_format((float)($suhu_daun_sedang_debit / $sedang_debit1), 3, '.', '');
		$suhu_daun_cepat_debit = number_format((float)($suhu_daun_cepat_debit / $cepat_debit1), 3, '.', '');

		$media_tanam_lambat_debit = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('debit', 'Lambat')->get()->num_rows();
		$media_tanam_sedang_debit = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('debit', 'Sedang')->get()->num_rows();
		$media_tanam_cepat_debit = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('debit', 'Cepat')->get()->num_rows();	
	
		$media_tanam_lambat_debit = number_format((float)($media_tanam_lambat_debit / $lambat_debit1), 3, '.', '');
		$media_tanam_sedang_debit = number_format((float)($media_tanam_sedang_debit / $sedang_debit1), 3, '.', '');
		$media_tanam_cepat_debit = number_format((float)($media_tanam_cepat_debit / $cepat_debit1), 3, '.', '');

		$ppm_lambat_debit = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('debit', 'Lambat')->get()->num_rows();
		$ppm_sedang_debit = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('debit', 'Sedang')->get()->num_rows();
		$ppm_cepat_debit = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('debit', 'Cepat')->get()->num_rows();	
	
		$ppm_lambat_debit = number_format((float)($ppm_lambat_debit / $lambat_debit1), 3, '.', '');
		$ppm_sedang_debit = number_format((float)($ppm_sedang_debit / $sedang_debit1), 3, '.', '');
		$ppm_cepat_debit = number_format((float)($ppm_cepat_debit / $cepat_debit1), 3, '.', '');

		$ph_lambat_debit = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('debit', 'Lambat')->get()->num_rows();
		$ph_sedang_debit = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('debit', 'Sedang')->get()->num_rows();
		$ph_cepat_debit = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('debit', 'Cepat')->get()->num_rows();	
	
		$ph_lambat_debit = number_format((float)($ph_lambat_debit / $lambat_debit1), 3, '.', '');
		$ph_sedang_debit = number_format((float)($ph_sedang_debit / $sedang_debit1), 3, '.', '');
		$ph_cepat_debit = number_format((float)($ph_cepat_debit / $cepat_debit1), 3, '.', '');

		$oksigen_lambat_debit = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('debit', 'Lambat')->get()->num_rows();
		$oksigen_sedang_debit = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('debit', 'Sedang')->get()->num_rows();
		$oksigen_cepat_debit = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('debit', 'Cepat')->get()->num_rows();	
	
		$oksigen_lambat_debit = number_format((float)($oksigen_lambat_debit / $lambat_debit1), 3, '.', '');
		$oksigen_sedang_debit = number_format((float)($oksigen_sedang_debit / $sedang_debit1), 3, '.', '');
		$oksigen_cepat_debit = number_format((float)($oksigen_cepat_debit / $cepat_debit1), 3, '.', '');

		//hasil Output Debit
		$pembilang_debit = number_format((float)(($lambat_debit*$rh_lambat_debit*$suhu_udara_lambat_debit*$suhu_daun_lambat_debit*$media_tanam_lambat_debit*$ppm_lambat_debit*$ph_lambat_debit*$oksigen_lambat_debit) + ($sedang_debit*$rh_sedang_debit*$suhu_udara_sedang_debit*$suhu_daun_sedang_debit*$media_tanam_sedang_debit*$ppm_sedang_debit*$ph_sedang_debit*$oksigen_sedang_debit) + ($cepat_debit*$rh_cepat_debit*$suhu_udara_cepat_debit*$suhu_daun_cepat_debit*$media_tanam_cepat_debit*$ppm_cepat_debit*$ph_cepat_debit*$oksigen_cepat_debit)), 5, '.', '');
		$hasil_lambat_debit = number_format((float)(($lambat_debit*$rh_lambat_debit*$suhu_udara_lambat_debit*$suhu_daun_lambat_debit*$media_tanam_lambat_debit*$ppm_lambat_debit*$ph_lambat_debit*$oksigen_lambat_debit) / $pembilang_debit), 5, '.', '');
		$hasil_sedang_debit = number_format((float)(($sedang_debit*$rh_sedang_debit*$suhu_udara_sedang_debit*$suhu_daun_sedang_debit*$media_tanam_sedang_debit*$ppm_sedang_debit*$ph_sedang_debit*$oksigen_sedang_debit) / $pembilang_debit), 5, '.', '');
		$hasil_cepat_debit = number_format((float)(($cepat_debit*$rh_cepat_debit*$suhu_udara_cepat_debit*$suhu_daun_cepat_debit*$media_tanam_cepat_debit*$ppm_cepat_debit*$ph_cepat_debit*$oksigen_cepat_debit) / $pembilang_debit), 5, '.', '');
	
		//Kesimpulan Output Debit
		if($hasil_lambat_debit >= $hasil_sedang_debit && $hasil_lambat_debit >= $hasil_cepat_debit ){$kesimpulan_hasil_debit .= 'Lambat';}
		else if ($hasil_sedang_debit >= $hasil_lambat_debit && $hasil_sedang_debit >= $hasil_cepat_debit ){$kesimpulan_hasil_debit .= 'Sedang';}
		else if ($hasil_cepat_debit >= $hasil_sedang_debit && $hasil_cepat_debit >= $hasil_lambat_debit ){$kesimpulan_hasil_debit .= 'Cepat';}
		else {$kesimpulan_hasil_debit .= 'error';}


        //Output Kontrol Suhu
		$lambat_kontrol_suhu1 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_suhu', 'LED Menyala')->get()->num_rows();
		$sedang_kontrol_suhu1 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows();
		$cepat_kontrol_suhu1 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows();
		$total_keseluruhan_kontrol_suhu = $lambat_kontrol_suhu1 + $sedang_kontrol_suhu1 + $cepat_kontrol_suhu1;

		$lambat_kontrol_suhu = number_format((float)($lambat_kontrol_suhu1/$total_keseluruhan_kontrol_suhu), 3, '.', '');
		$sedang_kontrol_suhu = number_format((float)($sedang_kontrol_suhu1/$total_keseluruhan_kontrol_suhu), 3, '.', '');
		$cepat_kontrol_suhu = number_format((float)($cepat_kontrol_suhu1/$total_keseluruhan_kontrol_suhu), 3, '.', '');

		$rh_lambat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('kontrol_suhu', 'LED Menyala')->get()->num_rows();
		$rh_sedang_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows();
		$rh_cepat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows();	
	
		$rh_lambat_kontrol_suhu = number_format((float)($rh_lambat_kontrol_suhu / $lambat_kontrol_suhu1), 3, '.', '');
		$rh_sedang_kontrol_suhu = number_format((float)($rh_sedang_kontrol_suhu / $sedang_kontrol_suhu1), 3, '.', '');
		$rh_cepat_kontrol_suhu = number_format((float)($rh_cepat_kontrol_suhu / $cepat_kontrol_suhu1), 3, '.', '');

		$suhu_udara_lambat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('kontrol_suhu', 'LED Menyala')->get()->num_rows();
		$suhu_udara_sedang_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows();
		$suhu_udara_cepat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows();	
	
		$suhu_udara_lambat_kontrol_suhu = number_format((float)($suhu_udara_lambat_kontrol_suhu / $lambat_kontrol_suhu1), 3, '.', '');
		$suhu_udara_sedang_kontrol_suhu = number_format((float)($suhu_udara_sedang_kontrol_suhu / $sedang_kontrol_suhu1), 3, '.', '');
		$suhu_udara_cepat_kontrol_suhu = number_format((float)($suhu_udara_cepat_kontrol_suhu / $cepat_kontrol_suhu1), 3, '.', '');

		$suhu_daun_lambat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('kontrol_suhu', 'LED Menyala')->get()->num_rows();
		$suhu_daun_sedang_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows();
		$suhu_daun_cepat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows();	
	
		$suhu_daun_lambat_kontrol_suhu = number_format((float)($suhu_daun_lambat_kontrol_suhu / $lambat_kontrol_suhu1), 3, '.', '');
		$suhu_daun_sedang_kontrol_suhu = number_format((float)($suhu_daun_sedang_kontrol_suhu / $sedang_kontrol_suhu1), 3, '.', '');
		$suhu_daun_cepat_kontrol_suhu = number_format((float)($suhu_daun_cepat_kontrol_suhu / $cepat_kontrol_suhu1), 3, '.', '');

		$media_tanam_lambat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('kontrol_suhu', 'LED Menyala')->get()->num_rows();
		$media_tanam_sedang_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows();
		$media_tanam_cepat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows();	
	
		$media_tanam_lambat_kontrol_suhu = number_format((float)($media_tanam_lambat_kontrol_suhu / $lambat_kontrol_suhu1), 3, '.', '');
		$media_tanam_sedang_kontrol_suhu = number_format((float)($media_tanam_sedang_kontrol_suhu / $sedang_kontrol_suhu1), 3, '.', '');
		$media_tanam_cepat_kontrol_suhu = number_format((float)($media_tanam_cepat_kontrol_suhu / $cepat_kontrol_suhu1), 3, '.', '');

		$ppm_lambat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('kontrol_suhu', 'LED Menyala')->get()->num_rows();
		$ppm_sedang_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows();
		$ppm_cepat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows();	
	
		$ppm_lambat_kontrol_suhu = number_format((float)($ppm_lambat_kontrol_suhu / $lambat_kontrol_suhu1), 3, '.', '');
		$ppm_sedang_kontrol_suhu = number_format((float)($ppm_sedang_kontrol_suhu / $sedang_kontrol_suhu1), 3, '.', '');
		$ppm_cepat_kontrol_suhu = number_format((float)($ppm_cepat_kontrol_suhu / $cepat_kontrol_suhu1), 3, '.', '');

		$ph_lambat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('kontrol_suhu', 'LED Menyala')->get()->num_rows();
		$ph_sedang_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows();
		$ph_cepat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows();	
	
		$ph_lambat_kontrol_suhu = number_format((float)($ph_lambat_kontrol_suhu / $lambat_kontrol_suhu1), 3, '.', '');
		$ph_sedang_kontrol_suhu = number_format((float)($ph_sedang_kontrol_suhu / $sedang_kontrol_suhu1), 3, '.', '');
		$ph_cepat_kontrol_suhu = number_format((float)($ph_cepat_kontrol_suhu / $cepat_kontrol_suhu1), 3, '.', '');

		$oksigen_lambat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('kontrol_suhu', 'LED Menyala')->get()->num_rows();
		$oksigen_sedang_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('kontrol_suhu', 'Pemanas & LED Menyala')->get()->num_rows();
		$oksigen_cepat_kontrol_suhu = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('kontrol_suhu', 'Pendingin Menyala')->get()->num_rows();	
	
		$oksigen_lambat_kontrol_suhu = number_format((float)($oksigen_lambat_kontrol_suhu / $lambat_kontrol_suhu1), 3, '.', '');
		$oksigen_sedang_kontrol_suhu = number_format((float)($oksigen_sedang_kontrol_suhu / $sedang_kontrol_suhu1), 3, '.', '');
		$oksigen_cepat_kontrol_suhu = number_format((float)($oksigen_cepat_kontrol_suhu / $cepat_kontrol_suhu1), 3, '.', '');

		//hasil Output Kontrol Suhu
		$pembilang_kontrol_suhu = number_format((float)(($lambat_kontrol_suhu*$rh_lambat_kontrol_suhu*$suhu_udara_lambat_kontrol_suhu*$suhu_daun_lambat_kontrol_suhu*$media_tanam_lambat_kontrol_suhu*$ppm_lambat_kontrol_suhu*$ph_lambat_kontrol_suhu*$oksigen_lambat_kontrol_suhu) + ($sedang_kontrol_suhu*$rh_sedang_kontrol_suhu*$suhu_udara_sedang_kontrol_suhu*$suhu_daun_sedang_kontrol_suhu*$media_tanam_sedang_kontrol_suhu*$ppm_sedang_kontrol_suhu*$ph_sedang_kontrol_suhu*$oksigen_sedang_kontrol_suhu) + ($cepat_kontrol_suhu*$rh_cepat_kontrol_suhu*$suhu_udara_cepat_kontrol_suhu*$suhu_daun_cepat_kontrol_suhu*$media_tanam_cepat_kontrol_suhu*$ppm_cepat_kontrol_suhu*$ph_cepat_kontrol_suhu*$oksigen_cepat_kontrol_suhu)), 5, '.', '');
		$hasil_lambat_kontrol_suhu = number_format((float)(($lambat_kontrol_suhu*$rh_lambat_kontrol_suhu*$suhu_udara_lambat_kontrol_suhu*$suhu_daun_lambat_kontrol_suhu*$media_tanam_lambat_kontrol_suhu*$ppm_lambat_kontrol_suhu*$ph_lambat_kontrol_suhu*$oksigen_lambat_kontrol_suhu) / $pembilang_kontrol_suhu), 5, '.', '');
		$hasil_sedang_kontrol_suhu = number_format((float)(($sedang_kontrol_suhu*$rh_sedang_kontrol_suhu*$suhu_udara_sedang_kontrol_suhu*$suhu_daun_sedang_kontrol_suhu*$media_tanam_sedang_kontrol_suhu*$ppm_sedang_kontrol_suhu*$ph_sedang_kontrol_suhu*$oksigen_sedang_kontrol_suhu) / $pembilang_kontrol_suhu), 5, '.', '');
		$hasil_cepat_kontrol_suhu = number_format((float)(($cepat_kontrol_suhu*$rh_cepat_kontrol_suhu*$suhu_udara_cepat_kontrol_suhu*$suhu_daun_cepat_kontrol_suhu*$media_tanam_cepat_kontrol_suhu*$ppm_cepat_kontrol_suhu*$ph_cepat_kontrol_suhu*$oksigen_cepat_kontrol_suhu) / $pembilang_kontrol_suhu), 5, '.', '');
	
		//Kesimpulan Output Kontrol Suhu
		if($hasil_lambat_kontrol_suhu >= $hasil_sedang_kontrol_suhu && $hasil_lambat_kontrol_suhu >= $hasil_cepat_kontrol_suhu ){$kesimpulan_hasil_kontrol_suhu .= 'LED Menyala';}
		else if ($hasil_sedang_kontrol_suhu >= $hasil_lambat_kontrol_suhu && $hasil_sedang_kontrol_suhu >= $hasil_cepat_kontrol_suhu ){$kesimpulan_hasil_kontrol_suhu .= 'Pemanas & LED Menyala';}
		else if ($hasil_cepat_kontrol_suhu >= $hasil_sedang_kontrol_suhu && $hasil_cepat_kontrol_suhu >= $hasil_lambat_kontrol_suhu ){$kesimpulan_hasil_kontrol_suhu .= 'Pendingin Menyala';}
		else {$kesimpulan_hasil_kontrol_suhu .= 'error';}



        		//Output Kontrol Kelembapan
		$lambat_kontrol_kelembapan1 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows();
		$sedang_kontrol_kelembapan1 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_kelembapan', '-')->get()->num_rows();
		$cepat_kontrol_kelembapan1 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows();
		$total_keseluruhan_kontrol_kelembapan = $lambat_kontrol_kelembapan1 + $sedang_kontrol_kelembapan1 + $cepat_kontrol_kelembapan1;

		$lambat_kontrol_kelembapan = number_format((float)($lambat_kontrol_kelembapan1/$total_keseluruhan_kontrol_kelembapan), 3, '.', '');
		$sedang_kontrol_kelembapan = number_format((float)($sedang_kontrol_kelembapan1/$total_keseluruhan_kontrol_kelembapan), 3, '.', '');
		$cepat_kontrol_kelembapan = number_format((float)($cepat_kontrol_kelembapan1/$total_keseluruhan_kontrol_kelembapan), 3, '.', '');

		$rh_lambat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows();
		$rh_sedang_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('kontrol_kelembapan', '-')->get()->num_rows();
		$rh_cepat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows();	
	
		$rh_lambat_kontrol_kelembapan = number_format((float)($rh_lambat_kontrol_kelembapan / $lambat_kontrol_kelembapan1), 3, '.', '');
		$rh_sedang_kontrol_kelembapan = number_format((float)($rh_sedang_kontrol_kelembapan / $sedang_kontrol_kelembapan1), 3, '.', '');
		$rh_cepat_kontrol_kelembapan = number_format((float)($rh_cepat_kontrol_kelembapan / $cepat_kontrol_kelembapan1), 3, '.', '');

		$suhu_udara_lambat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows();
		$suhu_udara_sedang_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('kontrol_kelembapan', '-')->get()->num_rows();
		$suhu_udara_cepat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows();	
	
		$suhu_udara_lambat_kontrol_kelembapan = number_format((float)($suhu_udara_lambat_kontrol_kelembapan / $lambat_kontrol_kelembapan1), 3, '.', '');
		$suhu_udara_sedang_kontrol_kelembapan = number_format((float)($suhu_udara_sedang_kontrol_kelembapan / $sedang_kontrol_kelembapan1), 3, '.', '');
		$suhu_udara_cepat_kontrol_kelembapan = number_format((float)($suhu_udara_cepat_kontrol_kelembapan / $cepat_kontrol_kelembapan1), 3, '.', '');

		$suhu_daun_lambat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows();
		$suhu_daun_sedang_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('kontrol_kelembapan', '-')->get()->num_rows();
		$suhu_daun_cepat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows();	
	
		$suhu_daun_lambat_kontrol_kelembapan = number_format((float)($suhu_daun_lambat_kontrol_kelembapan / $lambat_kontrol_kelembapan1), 3, '.', '');
		$suhu_daun_sedang_kontrol_kelembapan = number_format((float)($suhu_daun_sedang_kontrol_kelembapan / $sedang_kontrol_kelembapan1), 3, '.', '');
		$suhu_daun_cepat_kontrol_kelembapan = number_format((float)($suhu_daun_cepat_kontrol_kelembapan / $cepat_kontrol_kelembapan1), 3, '.', '');

		$media_tanam_lambat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows();
		$media_tanam_sedang_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('kontrol_kelembapan', '-')->get()->num_rows();
		$media_tanam_cepat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows();	
	
		$media_tanam_lambat_kontrol_kelembapan = number_format((float)($media_tanam_lambat_kontrol_kelembapan / $lambat_kontrol_kelembapan1), 3, '.', '');
		$media_tanam_sedang_kontrol_kelembapan = number_format((float)($media_tanam_sedang_kontrol_kelembapan / $sedang_kontrol_kelembapan1), 3, '.', '');
		$media_tanam_cepat_kontrol_kelembapan = number_format((float)($media_tanam_cepat_kontrol_kelembapan / $cepat_kontrol_kelembapan1), 3, '.', '');

		$ppm_lambat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows();
		$ppm_sedang_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('kontrol_kelembapan', '-')->get()->num_rows();
		$ppm_cepat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows();	
	
		$ppm_lambat_kontrol_kelembapan = number_format((float)($ppm_lambat_kontrol_kelembapan / $lambat_kontrol_kelembapan1), 3, '.', '');
		$ppm_sedang_kontrol_kelembapan = number_format((float)($ppm_sedang_kontrol_kelembapan / $sedang_kontrol_kelembapan1), 3, '.', '');
		$ppm_cepat_kontrol_kelembapan = number_format((float)($ppm_cepat_kontrol_kelembapan / $cepat_kontrol_kelembapan1), 3, '.', '');

		$ph_lambat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows();
		$ph_sedang_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('kontrol_kelembapan', '-')->get()->num_rows();
		$ph_cepat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows();	
	
		$ph_lambat_kontrol_kelembapan = number_format((float)($ph_lambat_kontrol_kelembapan / $lambat_kontrol_kelembapan1), 3, '.', '');
		$ph_sedang_kontrol_kelembapan = number_format((float)($ph_sedang_kontrol_kelembapan / $sedang_kontrol_kelembapan1), 3, '.', '');
		$ph_cepat_kontrol_kelembapan = number_format((float)($ph_cepat_kontrol_kelembapan / $cepat_kontrol_kelembapan1), 3, '.', '');

		$oksigen_lambat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('kontrol_kelembapan', 'Humidifer Menyala')->get()->num_rows();
		$oksigen_sedang_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('kontrol_kelembapan', '-')->get()->num_rows();
		$oksigen_cepat_kontrol_kelembapan = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('kontrol_kelembapan', 'Dehumidifer Menyala')->get()->num_rows();	
	
		$oksigen_lambat_kontrol_kelembapan = number_format((float)($oksigen_lambat_kontrol_kelembapan / $lambat_kontrol_kelembapan1), 3, '.', '');
		$oksigen_sedang_kontrol_kelembapan = number_format((float)($oksigen_sedang_kontrol_kelembapan / $sedang_kontrol_kelembapan1), 3, '.', '');
		$oksigen_cepat_kontrol_kelembapan = number_format((float)($oksigen_cepat_kontrol_kelembapan / $cepat_kontrol_kelembapan1), 3, '.', '');

		//hasil Output Kontrol Kelembapan
		$pembilang_kontrol_kelembapan = number_format((float)(($lambat_kontrol_kelembapan*$rh_lambat_kontrol_kelembapan*$suhu_udara_lambat_kontrol_kelembapan*$suhu_daun_lambat_kontrol_kelembapan*$media_tanam_lambat_kontrol_kelembapan*$ppm_lambat_kontrol_kelembapan*$ph_lambat_kontrol_kelembapan*$oksigen_lambat_kontrol_kelembapan) + ($sedang_kontrol_kelembapan*$rh_sedang_kontrol_kelembapan*$suhu_udara_sedang_kontrol_kelembapan*$suhu_daun_sedang_kontrol_kelembapan*$media_tanam_sedang_kontrol_kelembapan*$ppm_sedang_kontrol_kelembapan*$ph_sedang_kontrol_kelembapan*$oksigen_sedang_kontrol_kelembapan) + ($cepat_kontrol_kelembapan*$rh_cepat_kontrol_kelembapan*$suhu_udara_cepat_kontrol_kelembapan*$suhu_daun_cepat_kontrol_kelembapan*$media_tanam_cepat_kontrol_kelembapan*$ppm_cepat_kontrol_kelembapan*$ph_cepat_kontrol_kelembapan*$oksigen_cepat_kontrol_kelembapan)), 5, '.', '');
		$hasil_lambat_kontrol_kelembapan = number_format((float)(($lambat_kontrol_kelembapan*$rh_lambat_kontrol_kelembapan*$suhu_udara_lambat_kontrol_kelembapan*$suhu_daun_lambat_kontrol_kelembapan*$media_tanam_lambat_kontrol_kelembapan*$ppm_lambat_kontrol_kelembapan*$ph_lambat_kontrol_kelembapan*$oksigen_lambat_kontrol_kelembapan) / $pembilang_kontrol_kelembapan), 5, '.', '');
		$hasil_sedang_kontrol_kelembapan = number_format((float)(($sedang_kontrol_kelembapan*$rh_sedang_kontrol_kelembapan*$suhu_udara_sedang_kontrol_kelembapan*$suhu_daun_sedang_kontrol_kelembapan*$media_tanam_sedang_kontrol_kelembapan*$ppm_sedang_kontrol_kelembapan*$ph_sedang_kontrol_kelembapan*$oksigen_sedang_kontrol_kelembapan) / $pembilang_kontrol_kelembapan), 5, '.', '');
		$hasil_cepat_kontrol_kelembapan = number_format((float)(($cepat_kontrol_kelembapan*$rh_cepat_kontrol_kelembapan*$suhu_udara_cepat_kontrol_kelembapan*$suhu_daun_cepat_kontrol_kelembapan*$media_tanam_cepat_kontrol_kelembapan*$ppm_cepat_kontrol_kelembapan*$ph_cepat_kontrol_kelembapan*$oksigen_cepat_kontrol_kelembapan) / $pembilang_kontrol_kelembapan), 5, '.', '');
	
		//Kesimpulan Output Kontrol Kelembapan
		if($hasil_lambat_kontrol_kelembapan >= $hasil_sedang_kontrol_kelembapan && $hasil_lambat_kontrol_kelembapan >= $hasil_cepat_kontrol_kelembapan ){$kesimpulan_hasil_kontrol_kelembapan .= 'Humidifer Menyala';}
		else if ($hasil_sedang_kontrol_kelembapan >= $hasil_lambat_kontrol_kelembapan && $hasil_sedang_kontrol_kelembapan >= $hasil_cepat_kontrol_kelembapan ){$kesimpulan_hasil_kontrol_kelembapan .= '-';}
		else if ($hasil_cepat_kontrol_kelembapan >= $hasil_sedang_kontrol_kelembapan && $hasil_cepat_kontrol_kelembapan >= $hasil_lambat_kontrol_kelembapan ){$kesimpulan_hasil_kontrol_kelembapan .= 'Dehumidifer Menyala';}
		else {$kesimpulan_hasil_kontrol_kelembapan .= 'error';}


        //Output Kontrol Nutrisi & Air
		$lambat_kontrol_nutrisi1 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows();
		$sedang_kontrol_nutrisi1 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_nutrisiair', '-')->get()->num_rows();
		$cepat_kontrol_nutrisi1 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows();
		$total_keseluruhan_kontrol_nutrisi = $lambat_kontrol_nutrisi1 + $sedang_kontrol_nutrisi1 + $cepat_kontrol_nutrisi1;

		$lambat_kontrol_nutrisi = number_format((float)($lambat_kontrol_nutrisi1/$total_keseluruhan_kontrol_nutrisi), 3, '.', '');
		$sedang_kontrol_nutrisi = number_format((float)($sedang_kontrol_nutrisi1/$total_keseluruhan_kontrol_nutrisi), 3, '.', '');
		$cepat_kontrol_nutrisi = number_format((float)($cepat_kontrol_nutrisi1/$total_keseluruhan_kontrol_nutrisi), 3, '.', '');

		$rh_lambat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows();
		$rh_sedang_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('kontrol_nutrisiair', '-')->get()->num_rows();
		$rh_cepat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows();	
	
		$rh_lambat_kontrol_nutrisi = number_format((float)($rh_lambat_kontrol_nutrisi / $lambat_kontrol_nutrisi1), 3, '.', '');
		$rh_sedang_kontrol_nutrisi = number_format((float)($rh_sedang_kontrol_nutrisi / $sedang_kontrol_nutrisi1), 3, '.', '');
		$rh_cepat_kontrol_nutrisi = number_format((float)($rh_cepat_kontrol_nutrisi / $cepat_kontrol_nutrisi1), 3, '.', '');

		$suhu_udara_lambat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows();
		$suhu_udara_sedang_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('kontrol_nutrisiair', '-')->get()->num_rows();
		$suhu_udara_cepat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows();	
	
		$suhu_udara_lambat_kontrol_nutrisi = number_format((float)($suhu_udara_lambat_kontrol_nutrisi / $lambat_kontrol_nutrisi1), 3, '.', '');
		$suhu_udara_sedang_kontrol_nutrisi = number_format((float)($suhu_udara_sedang_kontrol_nutrisi / $sedang_kontrol_nutrisi1), 3, '.', '');
		$suhu_udara_cepat_kontrol_nutrisi = number_format((float)($suhu_udara_cepat_kontrol_nutrisi / $cepat_kontrol_nutrisi1), 3, '.', '');

		$suhu_daun_lambat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows();
		$suhu_daun_sedang_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('kontrol_nutrisiair', '-')->get()->num_rows();
		$suhu_daun_cepat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows();	
	
		$suhu_daun_lambat_kontrol_nutrisi = number_format((float)($suhu_daun_lambat_kontrol_nutrisi / $lambat_kontrol_nutrisi1), 3, '.', '');
		$suhu_daun_sedang_kontrol_nutrisi = number_format((float)($suhu_daun_sedang_kontrol_nutrisi / $sedang_kontrol_nutrisi1), 3, '.', '');
		$suhu_daun_cepat_kontrol_nutrisi = number_format((float)($suhu_daun_cepat_kontrol_nutrisi / $cepat_kontrol_nutrisi1), 3, '.', '');

		$media_tanam_lambat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows();
		$media_tanam_sedang_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('kontrol_nutrisiair', '-')->get()->num_rows();
		$media_tanam_cepat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows();	
	
		$media_tanam_lambat_kontrol_nutrisi = number_format((float)($media_tanam_lambat_kontrol_nutrisi / $lambat_kontrol_nutrisi1), 3, '.', '');
		$media_tanam_sedang_kontrol_nutrisi = number_format((float)($media_tanam_sedang_kontrol_nutrisi / $sedang_kontrol_nutrisi1), 3, '.', '');
		$media_tanam_cepat_kontrol_nutrisi = number_format((float)($media_tanam_cepat_kontrol_nutrisi / $cepat_kontrol_nutrisi1), 3, '.', '');

		$ppm_lambat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows();
		$ppm_sedang_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('kontrol_nutrisiair', '-')->get()->num_rows();
		$ppm_cepat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows();	
	
		$ppm_lambat_kontrol_nutrisi = number_format((float)($ppm_lambat_kontrol_nutrisi / $lambat_kontrol_nutrisi1), 3, '.', '');
		$ppm_sedang_kontrol_nutrisi = number_format((float)($ppm_sedang_kontrol_nutrisi / $sedang_kontrol_nutrisi1), 3, '.', '');
		$ppm_cepat_kontrol_nutrisi = number_format((float)($ppm_cepat_kontrol_nutrisi / $cepat_kontrol_nutrisi1), 3, '.', '');

		$ph_lambat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows();
		$ph_sedang_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('kontrol_nutrisiair', '-')->get()->num_rows();
		$ph_cepat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows();	
	
		$ph_lambat_kontrol_nutrisi = number_format((float)($ph_lambat_kontrol_nutrisi / $lambat_kontrol_nutrisi1), 3, '.', '');
		$ph_sedang_kontrol_nutrisi = number_format((float)($ph_sedang_kontrol_nutrisi / $sedang_kontrol_nutrisi1), 3, '.', '');
		$ph_cepat_kontrol_nutrisi = number_format((float)($ph_cepat_kontrol_nutrisi / $cepat_kontrol_nutrisi1), 3, '.', '');

		$oksigen_lambat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('kontrol_nutrisiair', 'Pompa Nutrisi AB Menyala')->get()->num_rows();
		$oksigen_sedang_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('kontrol_nutrisiair', '-')->get()->num_rows();
		$oksigen_cepat_kontrol_nutrisi = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('kontrol_nutrisiair', 'Pompa Penguras Menyala')->get()->num_rows();	
	
		$oksigen_lambat_kontrol_nutrisi = number_format((float)($oksigen_lambat_kontrol_nutrisi / $lambat_kontrol_nutrisi1), 3, '.', '');
		$oksigen_sedang_kontrol_nutrisi = number_format((float)($oksigen_sedang_kontrol_nutrisi / $sedang_kontrol_nutrisi1), 3, '.', '');
		$oksigen_cepat_kontrol_nutrisi = number_format((float)($oksigen_cepat_kontrol_nutrisi / $cepat_kontrol_nutrisi1), 3, '.', '');

		//hasil Output Kontrol Nutrisi & Air
		$pembilang_kontrol_nutrisi = number_format((float)(($lambat_kontrol_nutrisi*$rh_lambat_kontrol_nutrisi*$suhu_udara_lambat_kontrol_nutrisi*$suhu_daun_lambat_kontrol_nutrisi*$media_tanam_lambat_kontrol_nutrisi*$ppm_lambat_kontrol_nutrisi*$ph_lambat_kontrol_nutrisi*$oksigen_lambat_kontrol_nutrisi) + ($sedang_kontrol_nutrisi*$rh_sedang_kontrol_nutrisi*$suhu_udara_sedang_kontrol_nutrisi*$suhu_daun_sedang_kontrol_nutrisi*$media_tanam_sedang_kontrol_nutrisi*$ppm_sedang_kontrol_nutrisi*$ph_sedang_kontrol_nutrisi*$oksigen_sedang_kontrol_nutrisi) + ($cepat_kontrol_nutrisi*$rh_cepat_kontrol_nutrisi*$suhu_udara_cepat_kontrol_nutrisi*$suhu_daun_cepat_kontrol_nutrisi*$media_tanam_cepat_kontrol_nutrisi*$ppm_cepat_kontrol_nutrisi*$ph_cepat_kontrol_nutrisi*$oksigen_cepat_kontrol_nutrisi)), 5, '.', '');
		$hasil_lambat_kontrol_nutrisi = number_format((float)(($lambat_kontrol_nutrisi*$rh_lambat_kontrol_nutrisi*$suhu_udara_lambat_kontrol_nutrisi*$suhu_daun_lambat_kontrol_nutrisi*$media_tanam_lambat_kontrol_nutrisi*$ppm_lambat_kontrol_nutrisi*$ph_lambat_kontrol_nutrisi*$oksigen_lambat_kontrol_nutrisi) / $pembilang_kontrol_nutrisi), 5, '.', '');
		$hasil_sedang_kontrol_nutrisi = number_format((float)(($sedang_kontrol_nutrisi*$rh_sedang_kontrol_nutrisi*$suhu_udara_sedang_kontrol_nutrisi*$suhu_daun_sedang_kontrol_nutrisi*$media_tanam_sedang_kontrol_nutrisi*$ppm_sedang_kontrol_nutrisi*$ph_sedang_kontrol_nutrisi*$oksigen_sedang_kontrol_nutrisi) / $pembilang_kontrol_nutrisi), 5, '.', '');
		$hasil_cepat_kontrol_nutrisi = number_format((float)(($cepat_kontrol_nutrisi*$rh_cepat_kontrol_nutrisi*$suhu_udara_cepat_kontrol_nutrisi*$suhu_daun_cepat_kontrol_nutrisi*$media_tanam_cepat_kontrol_nutrisi*$ppm_cepat_kontrol_nutrisi*$ph_cepat_kontrol_nutrisi*$oksigen_cepat_kontrol_nutrisi) / $pembilang_kontrol_nutrisi), 5, '.', '');
	
		//Kesimpulan Output Kontrol Nutrisi & Air
		if($hasil_lambat_kontrol_nutrisi >= $hasil_sedang_kontrol_nutrisi && $hasil_lambat_kontrol_nutrisi >= $hasil_cepat_kontrol_nutrisi ){$kesimpulan_hasil_kontrol_nutrisi .= 'Pompa Nutrisi AB Menyala';}
		else if ($hasil_sedang_kontrol_nutrisi >= $hasil_lambat_kontrol_nutrisi && $hasil_sedang_kontrol_nutrisi >= $hasil_cepat_kontrol_nutrisi ){$kesimpulan_hasil_kontrol_nutrisi = '-';}
		else if ($hasil_cepat_kontrol_nutrisi >= $hasil_sedang_kontrol_nutrisi && $hasil_cepat_kontrol_nutrisi >= $hasil_lambat_kontrol_nutrisi ){$kesimpulan_hasil_kontrol_nutrisi .= 'Pompa Penguras Menyala';}
		else {$kesimpulan_hasil_kontrol_nutrisi .= 'error';}



        //Output Kontrol ph
		$lambat_kontrol_ph1 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows();
		$sedang_kontrol_ph1 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_ph', '-')->get()->num_rows();
		$cepat_kontrol_ph1 = $this->db->select('*')->from('data_pelatihan')->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows();
		$total_keseluruhan_kontrol_ph = $lambat_kontrol_ph1 + $sedang_kontrol_ph1 + $cepat_kontrol_ph1;

		$lambat_kontrol_ph = number_format((float)($lambat_kontrol_ph1/$total_keseluruhan_kontrol_ph), 3, '.', '');
		$sedang_kontrol_ph = number_format((float)($sedang_kontrol_ph1/$total_keseluruhan_kontrol_ph), 3, '.', '');
		$cepat_kontrol_ph = number_format((float)($cepat_kontrol_ph1/$total_keseluruhan_kontrol_ph), 3, '.', '');

		$rh_lambat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows();
		$rh_sedang_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('kontrol_ph', '-')->get()->num_rows();
		$rh_cepat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('rh', $hasilfusifikasi_kesimpulan_rh)->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows();	
	
		$rh_lambat_kontrol_ph = number_format((float)($rh_lambat_kontrol_ph / $lambat_kontrol_ph1), 3, '.', '');
		$rh_sedang_kontrol_ph = number_format((float)($rh_sedang_kontrol_ph / $sedang_kontrol_ph1), 3, '.', '');
		$rh_cepat_kontrol_ph = number_format((float)($rh_cepat_kontrol_ph / $cepat_kontrol_ph1), 3, '.', '');

		$suhu_udara_lambat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows();
		$suhu_udara_sedang_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('kontrol_ph', '-')->get()->num_rows();
		$suhu_udara_cepat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('suhu_udara', $hasilfusifikasi_kesimpulan_suhu_udara)->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows();	
	
		$suhu_udara_lambat_kontrol_ph = number_format((float)($suhu_udara_lambat_kontrol_ph / $lambat_kontrol_ph1), 3, '.', '');
		$suhu_udara_sedang_kontrol_ph = number_format((float)($suhu_udara_sedang_kontrol_ph / $sedang_kontrol_ph1), 3, '.', '');
		$suhu_udara_cepat_kontrol_ph = number_format((float)($suhu_udara_cepat_kontrol_ph / $cepat_kontrol_ph1), 3, '.', '');

		$suhu_daun_lambat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows();
		$suhu_daun_sedang_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('kontrol_ph', '-')->get()->num_rows();
		$suhu_daun_cepat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('suhu_daun', $hasilfusifikasi_kesimpulan_suhu_daun)->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows();	
	
		$suhu_daun_lambat_kontrol_ph = number_format((float)($suhu_daun_lambat_kontrol_ph / $lambat_kontrol_ph1), 3, '.', '');
		$suhu_daun_sedang_kontrol_ph = number_format((float)($suhu_daun_sedang_kontrol_ph / $sedang_kontrol_ph1), 3, '.', '');
		$suhu_daun_cepat_kontrol_ph = number_format((float)($suhu_daun_cepat_kontrol_ph / $cepat_kontrol_ph1), 3, '.', '');

		$media_tanam_lambat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows();
		$media_tanam_sedang_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('kontrol_ph', '-')->get()->num_rows();
		$media_tanam_cepat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('media_tanam', $hasilfusifikasi_kesimpulan_media_tanam)->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows();	
	
		$media_tanam_lambat_kontrol_ph = number_format((float)($media_tanam_lambat_kontrol_ph / $lambat_kontrol_ph1), 3, '.', '');
		$media_tanam_sedang_kontrol_ph = number_format((float)($media_tanam_sedang_kontrol_ph / $sedang_kontrol_ph1), 3, '.', '');
		$media_tanam_cepat_kontrol_ph = number_format((float)($media_tanam_cepat_kontrol_ph / $cepat_kontrol_ph1), 3, '.', '');

		$ppm_lambat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows();
		$ppm_sedang_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('kontrol_ph', '-')->get()->num_rows();
		$ppm_cepat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('ppm', $hasilfusifikasi_kesimpulan_ppm)->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows();	
	
		$ppm_lambat_kontrol_ph = number_format((float)($ppm_lambat_kontrol_ph / $lambat_kontrol_ph1), 3, '.', '');
		$ppm_sedang_kontrol_ph = number_format((float)($ppm_sedang_kontrol_ph / $sedang_kontrol_ph1), 3, '.', '');
		$ppm_cepat_kontrol_ph = number_format((float)($ppm_cepat_kontrol_ph / $cepat_kontrol_ph1), 3, '.', '');

		$ph_lambat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows();
		$ph_sedang_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('kontrol_ph', '-')->get()->num_rows();
		$ph_cepat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('ph', $hasilfusifikasi_kesimpulan_ph)->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows();	
	
		$ph_lambat_kontrol_ph = number_format((float)($ph_lambat_kontrol_ph / $lambat_kontrol_ph1), 3, '.', '');
		$ph_sedang_kontrol_ph = number_format((float)($ph_sedang_kontrol_ph / $sedang_kontrol_ph1), 3, '.', '');
		$ph_cepat_kontrol_ph = number_format((float)($ph_cepat_kontrol_ph / $cepat_kontrol_ph1), 3, '.', '');

		$oksigen_lambat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('kontrol_ph', 'Pompa pH Turun Menyala')->get()->num_rows();
		$oksigen_sedang_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('kontrol_ph', '-')->get()->num_rows();
		$oksigen_cepat_kontrol_ph = $this->db->select('*')->from('data_pelatihan')->where('oksigen', $hasilfusifikasi_kesimpulan_oksigen)->where('kontrol_ph', 'Pompa pH Naik Menyala')->get()->num_rows();	
	
		$oksigen_lambat_kontrol_ph = number_format((float)($oksigen_lambat_kontrol_ph / $lambat_kontrol_ph1), 3, '.', '');
		$oksigen_sedang_kontrol_ph = number_format((float)($oksigen_sedang_kontrol_ph / $sedang_kontrol_ph1), 3, '.', '');
		$oksigen_cepat_kontrol_ph = number_format((float)($oksigen_cepat_kontrol_ph / $cepat_kontrol_ph1), 3, '.', '');

		//hasil Output Kontrol ph
		$pembilang_kontrol_ph = number_format((float)(($lambat_kontrol_ph*$rh_lambat_kontrol_ph*$suhu_udara_lambat_kontrol_ph*$suhu_daun_lambat_kontrol_ph*$media_tanam_lambat_kontrol_ph*$ppm_lambat_kontrol_ph*$ph_lambat_kontrol_ph*$oksigen_lambat_kontrol_ph) + ($sedang_kontrol_ph*$rh_sedang_kontrol_ph*$suhu_udara_sedang_kontrol_ph*$suhu_daun_sedang_kontrol_ph*$media_tanam_sedang_kontrol_ph*$ppm_sedang_kontrol_ph*$ph_sedang_kontrol_ph*$oksigen_sedang_kontrol_ph) + ($cepat_kontrol_ph*$rh_cepat_kontrol_ph*$suhu_udara_cepat_kontrol_ph*$suhu_daun_cepat_kontrol_ph*$media_tanam_cepat_kontrol_ph*$ppm_cepat_kontrol_ph*$ph_cepat_kontrol_ph*$oksigen_cepat_kontrol_ph)), 5, '.', '');
		$hasil_lambat_kontrol_ph = number_format((float)(($lambat_kontrol_ph*$rh_lambat_kontrol_ph*$suhu_udara_lambat_kontrol_ph*$suhu_daun_lambat_kontrol_ph*$media_tanam_lambat_kontrol_ph*$ppm_lambat_kontrol_ph*$ph_lambat_kontrol_ph*$oksigen_lambat_kontrol_ph) / $pembilang_kontrol_ph), 5, '.', '');
		$hasil_sedang_kontrol_ph = number_format((float)(($sedang_kontrol_ph*$rh_sedang_kontrol_ph*$suhu_udara_sedang_kontrol_ph*$suhu_daun_sedang_kontrol_ph*$media_tanam_sedang_kontrol_ph*$ppm_sedang_kontrol_ph*$ph_sedang_kontrol_ph*$oksigen_sedang_kontrol_ph) / $pembilang_kontrol_ph), 5, '.', '');
		$hasil_cepat_kontrol_ph = number_format((float)(($cepat_kontrol_ph*$rh_cepat_kontrol_ph*$suhu_udara_cepat_kontrol_ph*$suhu_daun_cepat_kontrol_ph*$media_tanam_cepat_kontrol_ph*$ppm_cepat_kontrol_ph*$ph_cepat_kontrol_ph*$oksigen_cepat_kontrol_ph) / $pembilang_kontrol_ph), 5, '.', '');
	
		//Kesimpulan Output Kontrol ph
		if($hasil_lambat_kontrol_ph >= $hasil_sedang_kontrol_ph && $hasil_lambat_kontrol_ph >= $hasil_cepat_kontrol_ph ){$kesimpulan_hasil_kontrol_ph .= 'Pompa pH Turun Menyala';}
		else if ($hasil_sedang_kontrol_ph >= $hasil_lambat_kontrol_ph && $hasil_sedang_kontrol_ph >= $hasil_cepat_kontrol_ph ){$kesimpulan_hasil_kontrol_ph = '-';}
		else if ($hasil_cepat_kontrol_ph >= $hasil_sedang_kontrol_ph && $hasil_cepat_kontrol_ph >= $hasil_lambat_kontrol_ph ){$kesimpulan_hasil_kontrol_ph .= 'Pompa pH Naik Menyala';}
		else {$kesimpulan_hasil_kontrol_ph .= 'error';}
       
        ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
						<h7>Update Terakhir : <?php echo $time ?></h7>
                    </div>
					<h1 class="h4 mb-0 text-gray-800"><center>Nilai Sensor</center></h1> </br>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                RH</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rh ?> % </br> <?php echo $hasilfusifikasi_kesimpulan_rh ?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-solid fa-wind fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Suhu Udara</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $suhu_udara ?> C </br> <?php echo $hasilfusifikasi_kesimpulan_suhu_udara ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-solid fa-temperature-low fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Suhu Daun
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $suhu_daun ?> C </br> <?php echo $hasilfusifikasi_kesimpulan_suhu_daun ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
										<i class="fas fa-solid fa-temperature-low fa-2x text-gray-300"></i>                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Media Tanam</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $media_tanam ?> % </br> <?php echo $hasilfusifikasi_kesimpulan_media_tanam ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-solid fa-water fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                PPM</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ppm ?> ppm </br> <?php echo $hasilfusifikasi_kesimpulan_ppm ?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-solid fa-thumbtack fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                pH</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ph ?> </br> <?php echo $hasilfusifikasi_kesimpulan_ph ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-solid fa-prescription-bottle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Oksigen
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $oksigen ?> ppm </br> <?php echo $hasilfusifikasi_kesimpulan_oksigen ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-regular fa-lemon fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

		</br> <h1 class="h4 mb-0 text-gray-800"><center>Kesimpulan Kondisi & Hasil Optimasi</center></h1> </br>


		<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
	<div class="card border-left-primary shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
						Hasil VPD</div>
					<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kesimpulan_hasil_kondisi_vpd; ?> </div>
				</div>
				<div class="col-auto">
				<i class="fas fa-solid fa-temperature-low fa-2x text-gray-300"></i>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
	<div class="card border-left-success shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
						Hasil Kondisi</div>
					<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kesimpulan_hasil_kondisi; ?></div>
				</div>
				<div class="col-auto">
					<i class="fas fa-solid fa-leaf fa-2x text-gray-300"></i>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
	<div class="card border-left-info shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Hasil Debit
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col-auto">
							<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $kesimpulan_hasil_debit; ?></div>
						</div>
					</div>
				</div>
				<div class="col-auto">
				<i class="fas fa-solid fa-shower fa-2x text-gray-300"></i>    
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
	<div class="card border-left-warning shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
					Hasil Kontrol Suhu</div>
					<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kesimpulan_hasil_kontrol_suhu; ?></div>
				</div>
				<div class="col-auto">
					<i class="fas fa-solid fa-snowflake fa-2x text-gray-300"></i>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
	<div class="card border-left-primary shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
					Hasil Kontrol Kelembapan</div>
					<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kesimpulan_hasil_kontrol_kelembapan; ?> </div>
				</div>
				<div class="col-auto">
				<i class="fas fa-solid fa-wind fa-2x text-gray-300"></i>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
	<div class="card border-left-success shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
					Hasil kontrol Nutrisi & Air</div>
					<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kesimpulan_hasil_kontrol_nutrisi; ?></div>
				</div>
				<div class="col-auto">
				<i class="fas fa-regular fa-lemon fa-2x text-gray-300"></i>	
				</div>
			</div>
		</div>
	</div>
</div>
  
  <div class="col-xl-3 col-md-6 mb-4">
	<div class="card border-left-info shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kontrol pH
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col-auto">
							<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $kesimpulan_hasil_kontrol_ph; ?></div>
						</div>
					</div>
				</div>
				<div class="col-auto">
               <i class="fas fa-solid fa-prescription-bottle fa-2x text-gray-300"></i>
				</div>
			</div>
		</div>
	</div>
</div>
  
        </div>
        </div>
</div>
</div>	

<meta http-equiv="refresh" content="10">

  
