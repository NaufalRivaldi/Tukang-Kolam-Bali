<!-- Modal -->
<div class="modal fade" id="testimoni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Testimoni</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('testimoni/add') ?>" method="POST">
          <div class="form-group">
            <label for="Nama">Nama</label>
            <input type="text" name="nama" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="Nama">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="Nama">Testimoni Anda</label>
            <textarea name="testimoni" id="" rows="5" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Kirim Testimoni" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- flash data -->
<?php
  if(!empty($this->session->flashdata('success'))){
    echo "
      <script>alert('".$this->session->flashdata('success')."')</script>
    ";
  }
?>