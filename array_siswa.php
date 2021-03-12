<?php  
$proses= $_GET['sumbit'];
$nama_siswa = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts = $_GET['nilai_uts'];
$nilai_uas = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];
$ns1 = ['nama'=>$nama_siswa,'matkul'=>$mata_kuliah,'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];
// $ns2 = ['id'=>$nama_siswa,'nim'=>'01121','uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];
// $ns3 = ['id'=>$nama_siswa,'nim'=>'01130','uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];
// $ns4 = ['id'=>$nama_siswa,'nim'=>'01134','uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];

$ar_nilai = [$ns1];
// echo 'Proses : '.$proses;
// echo "<br/>Nama : ".$nama_siswa;
// echo "<br/>Mata Kuliah : ".$mata_kuliah;
// echo "<br/>Nilai UTS : ".$nilai_uts;
// echo "<br/>Nilai UAS : ".$nilai_uas;
// echo "<br/>Nilai Tugas Praktikum : ".$nilai_tugas;
?>

<h3 style="text-align: center;">Daftar Nilai Siswa</h3>
<table border="1" width="80%" align="center">
	<thead>
		<tr>
			<th>Mata Kuliah</th><th>Nama</th><th>UTS</th>
			<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
		</tr>
	</thead>
	<tbody>
 		<?php
		// $nomor=1;
		foreach ($ar_nilai as $ns) {
			echo '<tr><td>'.$ns['matkul'].'</td>';
			echo '<td>'.$ns['nama'].'</td>';
			echo '<td>'.$ns['uts'].'</td>';
			echo '<td>'.$ns['uas'].'</td>';
			echo '<td>'.$ns['tugas'].'</td>';
			$nilai_akhir = ($ns['uts']+$ns['uas']+$ns['tugas'])/3;
			echo '<td>'.number_format($nilai_akhir,2,',','.').'</td><tr/>';
		// 	$nomor++;
		}
		?>
	</tbody>
</table>