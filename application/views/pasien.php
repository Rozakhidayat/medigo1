<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        
        <button class=" btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" style="font-size:24px; margin-right: 5px;"></i> Daftar sekarang</button>
    </div>


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
    <style>
      
        tr:nth-child(even) {
            background-color: #f2f2f2; 
        }

    </style>
</head>
<body>
    <div class="container-fluid">
      <h3 class="mb-4">Data Pendaftaran</h3>
      <table class="table table-bordered">
      <tr>
            <th>No</th>
            <th>Nama</th>
            <th>umur</th>
            <th>Jenis Kelamin</th>
            <th>Kategori</th>
            <th>Nomer BPJS</th>
            <th>Nomer HP</th>
            <th>Riwayat_penyakit</th>

        </tr>
        <?php
        $nomer = 1;

        foreach($daftar as $data) {
        ?>
        <tr>
            <td><?php echo $nomer++ ?></td>
            <td><?php echo $data->nama ?></td>
            <td><?php echo $data->umur ?></td>
            <td><?php echo $data->jk ?></td>
            <td><?php echo $data->kategori ?></td>
            <td><?php echo $data->no_bpjs ?></td>
            <td><?php echo $data->no_hp ?></td>
            <td><?php echo $data->riwayat_penyakit ?></td>
            

      
        </td>
        </tr>
        <?php } ?>
        </div>
      </table>
      


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Pendaftaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('User/tambah_pasien')?>" method="post">
                  <div class="form-group " enctype="multipart/form-data">
                    <label> Nama </label>
                    <input type="text" name="nama" class="form-control">
                  </div>
                  
                  <div class="form-group ">
                    <label> Umur </label>
                    <input type="text" name="umur" class="form-control">
                  </div>
                  
                  <div class="form-group ">
                    <label> Jenis Kelamin :  </label>
                    <input type="radio" name="gender" value="laki-laki" > laki-laki 
                    <input type="radio" name="gender" value="perempuan"> perempuan
                    </div>

                  <div class="form-group ">
                    <label> Kategori </label>
                    <select name="kategori">
                      <option value="bpjs">bpjs</option>
                      <option value="umum">umum</option>
                    </select>
                    </div>
                  
                  <div class="form-group ">
                    <label> Nomer BPJS </label>
                    <input type="text" name="no_bpjs" class="form-control">
                    </div>

                  <div class="form-group ">
                    <label> Nomer HP</label>
                    <input type="text" name="no_hp" class="form-control">
                    </div>

                  <div class="form-group ">
                    <label> Riwayat Penyakit </label>
                    <textarea name="riwayat" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim</button>
      
                </form>
              </div>
              <div class="modal-footer">
            
           
          
            
</body>      
</html>
        


   
