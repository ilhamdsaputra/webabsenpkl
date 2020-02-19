<table border="1">
 <tr>
 <th>NO.</th>
 <th>NAMA LENGKAP</th>
 <th>KELAS</th>
 <th>JURUSAN</th>
 </tr>
 <?php
 //koneksi ke database
 mysql_connect("localhost", "root", "12345");
 mysql_select_db("absensi_pkl");
 
 //query menampilkan data
 $sql = mysql_query("SELECT * FROM data_absen ORDER BY id ASC");
 $no = 1;
 while($data = mysql_fetch_assoc($sql)){
 echo '
 <tr>
 <td>'.$no.'</td>
 <td>'.$data['nama'].'</td>
 <td>'.$data['kelas'].'</td>
 <td>'.$data['jurusan'].'</td>
 <td>'.$data['jurusan'].'</td>
 <td>'.$data['jurusan'].'</td>
 <td>'.$data['jurusan'].'</td>
 <td>'.$data['jurusan'].'</td>
 <td>'.$data['jurusan'].'</td>
 <td>'.$data['jurusan'].'</td>
 </tr>
 ';
 $no++;
 }
 ?>
</table>