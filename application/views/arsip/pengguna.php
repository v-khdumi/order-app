        <div class="row show-on-large hide-on-small-only" >
            <div class="col s12 ">
                <div class="card">
                    <div class="card-content margin" style="margin: 12px;">
                        <h4 class="cardbox-text light left margin">Daftar Pelanggan</h4>
                    </div>
                    <br>
                    <div class="divider"></div>
                    <table class="bordered" id="pelanggan-table">
                        <thead>
                        <tr>
                            <th >Nama Pengguna </th>
                            <th >Nama Lengkap</th>
                            <th >Email</th>
                            <th >Telepon</th>
                            <th >Alamat</th>
                            <th class="center ">AKSI</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($penggunas as $row => $i):
                        ?>
                        <tr>
                            <td class="grey-text">
                                <?= $i['pengguna_username']?>
                            </td>
                            <td class="grey-text"><?= $i['pengguna_fullname']?></td>
                            <td class="grey-text"><?= $i['pengguna_email']?></td>
                            <td class="grey-text"><?= $i['pengguna_telepon']?></td>
                            <td class="grey-text"><?= $i['pengguna_alamat']?></td>
                            <td>
                                <div class="row">
                                    <a href="#restore-<?= $i['pengguna_id']?>" class="btn-flat waves-effect waves-light col l6 modal-trigger" title="hapus data">
                                        <i class="mdi-action-restore teal-text"></i>
                                    </a>
                                </div>
                            </td>

                            <!-- Modal delete -->
                            <div id="restore-<?= $i['pengguna_id']?>" class="modal">
                                <div class="modal-content">
                                    <h4 class="red-text text-lighten-1 ">
                                        <i class="mdi-action-info-outline"></i> pulihkan data pengguna ?
                                    </h4>
                                    <div class="modal-content">
                                        <p class="grey-text text-lighten-1">
                                            item yang anda pulihkan akan kembali tampil
                                        </p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?= base_url('AdminController/restore/'.$i['pengguna_id'])?>" class="modal-close waves-effect waves-green btn green lighten-1">lanjutkan</a>
                                    <a href="#!" class="modal-close waves-effect waves-red btn grey lighten-1" style="margin-right:12px">batalkan</a>
                                </div>
                            </div>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div id="sales-top-home-page" class="hide-on-large-only">
			<div class="row">
				<div class="col s12 m12">
					<input type="text" placeholder="cari pelanggan" class="white z-depth-3 grey-text text-darken-1 custom-box-search" id="search-pelanggan">
				</div>
			</div>
		</div>
		
		<div id="sales-main-home-page" class="hide-on-large-only">
			<div class="row">
                <?php foreach ($pelanggans as $row => $i):?>
				<div class="col s12 m6 l4">
					<a href="<?= base_url('pelanggan/'.$i['pelanggan_id'])?>">
						<div class="card-panel grey lighten-5">
							<div class="row valign-wrapper">
								<div class="col s3">
									<img src="<?= base_url('assets/images/admin.png')?>" alt="" class="circle responsive-img valign">
								</div>
								<div class="col s9">
									<h5 class="teal-text text-lighten-1 light">
										<?= $i['pelanggan_nama']?>
									</h5>
									<span class="grey-text text-lighten-1"><i class="mdi-maps-place"></i> <?= $i['pelanggan_alamat']?></span>
								</div>
							</div>
						</div>
					</a>
				</div>
                <?php endforeach;?>
			</div>
		</div>

        <!-- Floating Action Button -->
        <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
            <a class="btn-floating btn-large teal" href="<?= base_url('pelanggan/tambah')?>">
                <i class="mdi-av-playlist-add"></i>
            </a>
        </div>
        <!-- Floating Action Button -->
