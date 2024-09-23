<?php

      $nama = $_POST['nama'];
      $tugas = $_POST['tgs'];
      $nquiz = $_POST['quiz'];
      $nuts = $_POST['uts'];
      $nuas = $_POST['uas'];
      $total = $tugas + $nquiz + $nuts + $nuas;
      $akhir = $total / 4;
      if ($akhir >= 80) {
        $index = 'A';
      }
      elseif ($akhir >= 70) {
        $index = 'B';
      }
      elseif ($akhir >= 60) {
        $index = 'C';
      }
      elseif ($akhir >= 50) {
        $index = 'D';
      }
      else{
        $index = 'E';
      }


      if ($akhir >= 80) {
        $ket = 'SANGAT BAIK';
      }
      elseif ($akhir >= 70) {
        $ket = 'BAIK';
      }
      elseif ($akhir >= 60) {
        $ket = 'CUKUP';
      }
      elseif ($akhir >= 50) {
        $ket = 'KURANG';
      }
      else{
        $ket = 'SANGAT KURANG';
      }

      echo " <center>
            <table> <tr>
                      <td>Nama</td>
                      <td>$nama</td>
                    </tr>

                    <tr> 
                      <td>Nilai Tugas</td>
                      <td>$tugas</td>
                    </tr>

                    <tr> 
                      <td>Nilai Quiz</td>
                      <td>$nquiz</td>
                    </tr>

                    <tr> 
                      <td>Nilai UTS</td>
                      <td>$nuts</td>
                    </tr>

                    <tr> 
                      <td>Nilai UAS</td>
                      <td>$nuas</td>
                    </tr>

                    <tr> 
                      <td>Nilai Akhir</td>
                      <td>$akhir</td>
                    </tr>

                    <tr> 
                      <td>Index</td>
                      <td>$index</td>
                    </tr>

                    <tr> 
                      <td>Keterangan</td>
                      <td>$ket</td>
                    </tr>
            </table>;
      </center>";
    ?>