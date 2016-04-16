

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-default">
  <div class="panel-heading"><b>Riwayat Permainan <?php foreach ($histori as $h){ echo $h->nama_murid; } ?></b></div>
  <div class="panel-body">
      <!--a href="<?=base_url()?>kelas/detail_kelas/4" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a-->
      <button onclick="goBack()" class="btn btn-sm btn-info"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</button>
       <table class="table table-striped">
        <thead>
         <tr>
         <th>No</th>
         <th>Kategori / Level</th>    
         <th>Pertanyaan</th>
         <th>Jawaban Benar</th>
         <th>Jawaban Murid</th>
         <th>Mulai Pengerjaan</th>
         <th>Selesai Pengerjaan</th>
         <th>Hasil</th>
         </tr>
        </thead>
        <tbody>
        
         <!--<tr>
          <td colspan="6">Data tidak ditemukan</td>
         </tr>-->
        <?php $numb=1; foreach($histori as $h){ ?>
         <tr>
          <td><?php echo $numb; ?></td>
          <td><?php echo $h->level?></td>
          <td><?php echo $h->soal?></td>
          <td><?php echo $h->jawaban;?></td>
          <td><?php echo $h->jawaban_murid;?></td>
          <td><?php echo $h->waktu_mulai;?></td>
          <td><?php echo $h->waktu_mulai;?></td>
          <td><?php echo $h->poin; ?></td>
         </tr>
            <?php $numb++; } ?>
        </tbody>
       </table>
        </div>
    </div>    <!-- /panel -->

    </div> <!-- /container -->
<script>
function goBack() {
    window.history.back();
}
</script>