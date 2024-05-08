
<h1 class="ml-5 mb-5">My profile</h1>
<div class="card mb-3 ml-5 " style="max-width: 580px; padding-bottom: 20px;">
    <div class="row no-gutters">
        
        <div class="col-md-4">
            <img src="<?= base_url('assets/template/img/profile/') . $user['foto'];?>" alt="..." class="img-fluid "
            style="max-height: 100% ; object-fit:cover; display:" >
        </div>
        <div class="col-md-8">
            <div class="card-body" style="margin-bottom: 0;">
                <h5 class="card-title"><?= $user['nama'];?></h5>
                <p class="card-text"><?= $user['email'];?></</p>
                <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created'])?></small></p>
            </div>
        </div>
    </div>
</div>
