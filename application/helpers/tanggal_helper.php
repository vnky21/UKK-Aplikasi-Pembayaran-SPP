<?php

if (!function_exists('getBulan')) {
	function getBulan($bulan){

		switch ($bulan) {
			case 1:
				$bulan='Januari';
				break;

			case 2:
				$bulan='Februari';
				break;

			case 3:
				$bulan='Maret';
				break;

		    case 4:
				$bulan='April';
				break;

			case 5:
				$bulan='Mei';
				break;

			case 6:
				$bulan='Juni';
				break;

			case 7:
				$bulan='Juli';
				break;

			case 8:
				$bulan='Agustus';
				break;

			case 9:
				$bulan='September';
				break;

			case 10:
				$bulan='Oktober';
				break;

			case 11:
				$bulan='November';
				break;

			case 12:
				$bulan='Desember';
				break;
			
			default:
				$bulan= Date('F');
				break;
		}

		return $bulan;
	}
}

if (!function_exists('bulan')) {
	function bulan_selanjutnya($bulan){

		switch ($bulan) {
			case 'Januari':
				$bulan= getBulan(2);
				break;

			case 'Februari':
				$bulan=getBulan(3);
				break;

			case 'Maret':
				$bulan=getBulan(4);
				break;

		    case 'April':
				$bulan=getBulan(5);
				break;

			case 'Mei':
				$bulan=getBulan(6);
				break;

			case 'Juni':
				$bulan=getBulan(7);
				break;

			case 'Juli':
				$bulan=getBulan(8);
				break;

			case 'Agustus':
				$bulan=getBulan(9);
				break;

			case 'September':
				$bulan=getBulan(10);
				break;

			case 'Oktober':
				$bulan=getBulan(11);
				break;

			case 'November':
				$bulan=getBulan(12);
				break;

			case 'Desember':
				$bulan=getBulan(13);
				break;
			
			default:
				$bulan= Date('F');
				break;
		}

		return $bulan;
	}
}

if (!function_exists('bulan')) {
	function bulan(){
		$bulan= Date('m');

		switch ($bulan) {
			case 1:
				$bulan='januari';
				break;

			case 2:
				$bulan='Februari';
				break;

			case 3:
				$bulan='Maret';
				break;

		    case 4:
				$bulan='April';
				break;

			case 5:
				$bulan='Mei';
				break;

			case 6:
				$bulan='Juni';
				break;

			case 7:
				$bulan='Juli';
				break;

			case 8:
				$bulan='Agustus';
				break;

			case 9:
				$bulan='September';
				break;

			case 10:
				$bulan='Oktober';
				break;

			case 11:
				$bulan='November';
				break;

			case 12:
				$bulan='Desember';
				break;
			
			default:
				$bulan= Date('F');
				break;
		}

		return $bulan;
	}
}

if(!function_exists('tanggal')){
	function tanggal(){
		$tanggal= Date('d')." ".bulan()." ".Date('Y');

		return $tanggal;
	}
}