<?php if (isset($data)) { ?>
    <div class="modal-body">
        <div class="row">
            <h2>DATA INDIVIDU</h2>
            <div class="col-lg-6">
                <label class="col-form-label">Nama Lengkap:</label>
                <input type="text" class="form-control" value="<?= $data->nama ?>" readonly />
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">NIK:</label>
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="nik" aria-label="NIK" value="<?= $data->nik ?>" readonly />
                    <a class="btn btn-primary" target="popup" onclick="window.open('<?= base_url('upload/ptk/ktp') . '/' . $data->lampiran_ktp ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/ktp') . '/' . $data->lampiran_ktp ?>" id="nik">Lampiran KTP</a>
                </div>
                <!-- <input type="text" class="form-control" value="<?= $data->nik ?>" readonly /> -->
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">NUPTK:</label>
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="nuptk" aria-label="NUPTK" value="<?= $data->nuptk ?>" readonly />
                    <a class="btn btn-primary" target="popup" onclick="window.open('<?= base_url('upload/ptk/nuptk') . '/' . $data->lampiran_nuptk ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/nuptk') . '/' . $data->lampiran_nuptk ?>" id="nik">Lampiran NUPTK</a>
                </div>
                <!-- <input type="text" class="form-control" value="<?= $data->nuptk ?>" readonly /> -->
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">NIP:</label>
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="nip" aria-label="NIP" value="<?= $data->nip ?>" readonly />
                    <a class="btn btn-primary" target="popup" onclick="window.open('<?= base_url('upload/ptk/karpeg') . '/' . $data->lampiran_karpeg ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/karpeg') . '/' . $data->lampiran_karpeg ?>" id="nik">Lampiran Karpeg</a>
                </div>
                <!-- <input type="text" class="form-control" value="<?= $data->nip ?>" readonly /> -->
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">NRG:</label>
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="nrg" aria-label="NRG" value="<?= $data->nrg ?>" readonly />
                    <a class="btn btn-primary" target="popup" onclick="window.open('<?= base_url('upload/ptk/nrg') . '/' . $data->lampiran_nrg ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/nrg') . '/' . $data->lampiran_nrg ?>" id="nik">Lampiran NRG</a>
                </div>
                <!-- <input type="text" class="form-control" value="<?= $data->nrg ?>" readonly /> -->
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">No Peserta:</label>
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="no_peserta" aria-label="No Peserta" value="<?= $data->no_peserta ?>" readonly />
                    <a class="btn btn-primary" target="popup" onclick="window.open('<?= base_url('upload/ptk/serdik') . '/' . $data->lampiran_serdik ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/serdik') . '/' . $data->lampiran_serdik ?>" id="no_peserta">Lampiran Serdik</a>
                </div>
                <!-- <input type="text" class="form-control" value="<?= $data->no_peserta ?>" readonly /> -->
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">NPWP:</label>
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="npwp" aria-label="NPWP" value="<?= $data->npwp ?>" readonly />
                    <a class="btn btn-primary" target="popup" onclick="window.open('<?= base_url('upload/ptk/npwp') . '/' . $data->lampiran_npwp ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/npwp') . '/' . $data->lampiran_npwp ?>" id="nik">Lampiran NPWP</a>
                </div>
                <!-- <input type="text" class="form-control" value="<?= $data->npwp ?>" readonly /> -->
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">No Rekening:</label>
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="no_rekening" aria-label="NO REKENING" value="<?= $data->no_rekening ?>" readonly />
                    <a class="btn btn-primary" target="popup" onclick="window.open('<?= base_url('upload/ptk/bukurekening') . '/' . $data->lampiran_buku_rekening ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/bukurekening') . '/' . $data->lampiran_buku_rekening ?>" id="nik">Lampiran Rekening</a>
                </div>
                <!-- <input type="text" class="form-control" value="<?= $data->no_rekening ?>" readonly /> -->
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">Cabang Bank:</label>
                <input type="text" class="form-control" value="<?= $data->cabang_bank ?>" readonly />
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">Tempat Lahir:</label>
                <input type="text" class="form-control" value="<?= $data->tempat_lahir ?>" readonly />
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">Tanggal Lahir:</label>
                <input type="text" class="form-control" value="<?= $data->tgl_lahir ?>" readonly />
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">Jenis Kelamin:</label>
                <div><?php switch ($data->jenis_kelamin) {
                            case 'P':
                                echo '<span class="badge badge-pill badge-soft-primary">Perempuan</span>';
                                break;
                            case 'L':
                                echo '<span class="badge badge-pill badge-soft-primary">Laki-Laki</span>';
                                break;
                            default:
                                echo '-';
                                break;
                        } ?>
                </div>
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">Email Dapodik:</label>
                <input type="text" class="form-control" value="<?= $data->email ?>" readonly />
            </div>
            <div class="col-lg-6">
                <label class="col-form-label">No Hanphone Dapodik:</label>
                <input type="text" class="form-control" value="<?= $data->no_hp ?>" readonly />
            </div>
        </div>
        <hr />
        <div class="row mt-2">
            <h2>DATA PENUGASAN</h2>

            <?php switch ($data->bidang_studi_sertifikasi) {
                case '':
                    echo '<div class="col-lg-6">
                            <label class="col-form-label">Sudah Sertifikasi:</label>
                            <div><span class="badge badge-pill badge-soft-danger">Belum</span></div>
                        </div>';
                    break;
                case null:
                    echo '<div class="col-lg-6">
                            <label class="col-form-label">Sudah Sertifikasi:</label>
                            <div><span class="badge badge-pill badge-soft-danger">Belum</span></div>
                        </div>';
                    break;
                case '-':
                    echo '<div class="col-lg-6">
                            <label class="col-form-label">Sudah Sertifikasi:</label>
                            <div><span class="badge badge-pill badge-soft-danger">Belum</span></div>
                        </div>';
                    break;
                case ' ':
                    echo '<div class="col-lg-6">
                            <label class="col-form-label">Sudah Sertifikasi:</label>
                            <div><span class="badge badge-pill badge-soft-danger">Belum</span></div>
                        </div>';
                    break;

                default:
                    echo '<div class="col-lg-6">
                        <label class="col-form-label">Sudah Sertifikasi:</label>
                        <div><span class="badge badge-pill badge-soft-success">Sudah</span></div>
                    </div>
                    <div class="col-lg-6">
                        <label class="col-form-label">Bidang Studi Sertifikasi:</label>
                        <input type="text" class="form-control" value="' . $data->bidang_studi_sertifikasi . '" readonly />
                    </div>';
                    break;
            } ?>
            <div class="col-lg-12 mt-4">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NPSN</th>
                                <th>Satuan Pendidikan</th>
                                <th>Nomor Surat Tugas</th>
                                <th>Tanggal Surat</th>
                                <th>Status</th>
                                <th>Jumlah Jam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($penugasans)) {
                                if (count($penugasans) > 0) {
                                    foreach ($penugasans as $key => $v) { ?>
                                        <tr>
                                            <th scope="row"><?= $key + 1 ?></th>
                                            <td><?= $v->npsn ?></td>
                                            <td><?= $v->namaSekolah ?></td>
                                            <td><?= $v->nomor_surat_tugas ?></td>
                                            <td><?= $v->tanggal_surat_tugas ?></td>
                                            <td><?= $v->ptk_induk == "1" ? '<span class="badge badge-pill badge-soft-success">INDUK</span>' : '<span class="badge badge-pill badge-soft-warning">NON INDUK</span>' ?></td>
                                            <td><?= $v->jumlah_total_jam_mengajar_perminggu ?> Jam</td>
                                        </tr>
                                    <?php }
                                } else { ?>
                                    <tr>
                                        <td colspan="6">Tidak ada penugasan</td>
                                    </tr>
                                <?php }
                            } else { ?>
                                <tr>
                                    <td colspan="6">Tidak ada penugasan</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr />
        <div class="row mt-2">
            <h2>DATA ATRIBUT USULAN</h2>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="col-form-label">Absen 1:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" aria-describedby="absen_1" aria-label="ABSEN 1" value="<?= $data->bulan_1 ?> Hari" readonly />
                            <a class="btn btn-primary" target="popup" onclick="window.open('<?= base_url('upload/sekolah/kehadiran') . '/' . $data->lampiran_absen1 ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/sekolah/kehadiran') . '/' . $data->lampiran_absen1 ?>" id="nik">Lampiran Absen 1</a>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="col-form-label">Absen 2:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" aria-describedby="absen_2" aria-label="ABSEN 2" value="<?= $data->bulan_2 ?> Hari" readonly />
                            <a class="btn btn-primary" target="popup" onclick="window.open('<?= base_url('upload/sekolah/kehadiran') . '/' . $data->lampiran_absen2 ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/sekolah/kehadiran') . '/' . $data->lampiran_absen2 ?>" id="nik">Lampiran Absen 2</a>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label class="col-form-label">Absen 3:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" aria-describedby="absen_3" aria-label="ABSEN 3" value="<?= $data->bulan_3 ?> Hari" readonly />
                            <a class="btn btn-primary" target="popup" onclick="window.open('<?= base_url('upload/sekolah/kehadiran') . '/' . $data->lampiran_absen3 ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/sekolah/kehadiran') . '/' . $data->lampiran_absen3 ?>" id="nik">Lampiran Absen 3</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-sm-8">
                        <label class="col-form-label">Pangkat Golongan:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" aria-describedby="pangkat_golongan" aria-label="PANGKAT GOLONGAN" value="<?= $data->us_pang_golongan ?>" readonly />
                            <?php if ($data->us_pang_jenis == 'pangkat') { ?>
                                <a class="btn btn-primary" target="popup" onclick="window.open('<?= base_url('upload/ptk/pangkat') . '/' . $data->lampiran_pangkat ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/pangkat') . '/' . $data->lampiran_pangkat ?>" id="nik">Lampiran Pangkat</a>
                            <?php } else if ($data->us_pang_jenis == 'kgb') { ?>
                                <a class="btn btn-primary" target="popup" onclick="window.open('<?= base_url('upload/ptk/kgb') . '/' . $data->lampiran_kgb ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/kgb') . '/' . $data->lampiran_kgb ?>" id="nik">Lampiran KGB</a>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <label class="col-form-label">Jenis Dokumen:</label>
                        <input type="text" class="form-control" value="<?= strtoupper($data->us_pang_jenis) ?>" readonly />
                    </div>
                    <div class="col-sm-6">
                        <label class="col-form-label">TMT:</label>
                        <input type="text" class="form-control" value="<?= $data->us_pang_tmt ?>" readonly />
                    </div>
                    <div class="col-sm-6">
                        <label class="col-form-label">Tanggal:</label>
                        <input type="text" class="form-control" value="<?= $data->us_pang_tgl ?>" readonly />
                    </div>
                    <div class="col-sm-3">
                        <label class="col-form-label">MK Tahun:</label>
                        <input type="text" class="form-control" value="<?= rpAwalan($data->us_pang_mk_tahun) ?>" readonly />
                    </div>
                    <div class="col-sm-3">
                        <label class="col-form-label">MK Bulan:</label>
                        <input type="text" class="form-control" value="<?= $data->us_pang_mk_bulan ?>" readonly />
                    </div>
                    <div class="col-sm-6">
                        <label class="col-form-label">Gaji Pokok:</label>
                        <input type="text" class="form-control" value="<?= rpAwalan($data->us_gaji_pokok) ?>" readonly />
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-2">
                <label class="col-form-label">Lampiran Dokumen:</label>
                <br />
                <a class="btn btn-secondary btn-sm btn-rounded waves-effect waves-light mr-2 mb-1" target="popup" onclick="window.open('<?= base_url('upload/sekolah/pembagian-tugas') . '/' . $data->lampiran_pembagian_tugas ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/sekolah/pembagian-tugas') . '/' . $data->lampiran_pembagian_tugas ?>" id="nik">
                    Pembagian Tugas
                </a>
                <a class="btn btn-secondary btn-sm btn-rounded waves-effect waves-light mr-2 mb-1" target="popup" onclick="window.open('<?= base_url('upload/sekolah/slip-gaji') . '/' . $data->lampiran_slip_gaji ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/sekolah/slip-gaji') . '/' . $data->lampiran_slip_gaji ?>" id="nik">
                    Slip Gaji
                </a>
                <?php if ($data->lampiran_cuti === null || $data->lampiran_cuti === "") {
                } else { ?>
                    <a class="btn btn-secondary btn-sm btn-rounded waves-effect waves-light mr-2 mb-1" target="popup" onclick="window.open('<?= base_url('upload/ptk/keterangancuti') . '/' . $data->lampiran_cuti ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/keterangancuti') . '/' . $data->lampiran_cuti ?>" id="nik">
                        Cuti
                    </a>
                <?php } ?>
                <?php if ($data->lampiran_pensiun === null || $data->lampiran_pensiun === "") {
                } else { ?>
                    <a class="btn btn-secondary btn-sm btn-rounded waves-effect waves-light mr-2 mb-1" target="popup" onclick="window.open('<?= base_url('upload/ptk/pensiun') . '/' . $data->lampiran_pensiun ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/pensiun') . '/' . $data->lampiran_pensiun ?>" id="nik">
                        Pensiun
                    </a>
                <?php } ?>
                <?php if ($data->lampiran_kematian === null || $data->lampiran_kematian === "") {
                } else { ?>
                    <a class="btn btn-secondary btn-sm btn-rounded waves-effect waves-light mr-2 mb-1" target="popup" onclick="window.open('<?= base_url('upload/ptk/kematian') . '/' . $data->lampiran_kematian ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/kematian') . '/' . $data->lampiran_kematian ?>" id="nik">
                        Kematian
                    </a>
                <?php } ?>
                <?php if ($data->lampiran_attr_lainnya === null || $data->lampiran_attr_lainnya === "") {
                } else { ?>
                    <a class="btn btn-secondary btn-sm btn-rounded waves-effect waves-light mr-2 mb-1" target="popup" onclick="window.open('<?= base_url('upload/ptk/lainnya') . '/' . $data->lampiran_attr_lainnya ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/ptk/lainnya') . '/' . $data->lampiran_attr_lainnya ?>" id="nik">
                        Atribut Lainnya
                    </a>
                <?php } ?>
                <?php if ($data->lampiran_absen_lainnya === null || $data->lampiran_absen_lainnya === "") {
                } else { ?>
                    <a class="btn btn-secondary btn-sm btn-rounded waves-effect waves-light mr-2 mb-1" target="popup" onclick="window.open('<?= base_url('upload/sekolah/doc-lainnya') . '/' . $data->lampiran_absen_lainnya ?>','popup','width=600,height=600'); return false;" href="<?= base_url('upload/sekolah/doc-lainnya') . '/' . $data->lampiran_absen_lainnya ?>" id="nik">
                        Atribut Lainnya
                    </a>
                <?php } ?>
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="actionTolak(this)" class="btn btn-danger waves-effect waves-light">Tolak Usulan Tamsil</button>
        <button type="button" onclick="actionApprove(this)" class="btn btn-success waves-effect waves-light">Setujui Usulan Tamsil</button>
    </div>
    <script>
        function actionTolak(e) {
            const nama = '<?= $data->nama ?>';
            Swal.fire({
                title: 'Apakah anda yakin ingin menolak usulan Tamsil ini?',
                text: "Tolak Usulan Tamsil PTK: <?= $data->nama ?>",
                showCancelButton: true,
                icon: 'question',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Tolak!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "./formtolak",
                        type: 'POST',
                        data: {
                            id: '<?= $data->id_usulan ?>',
                            nama: nama,
                        },
                        dataType: 'JSON',
                        beforeSend: function() {
                            $('div.modal-content-loading').block({
                                message: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
                            });
                        },
                        success: function(resul) {
                            $('div.modal-content-loading').unblock();
                            if (resul.status !== 200) {
                                Swal.fire(
                                    'Failed!',
                                    resul.message,
                                    'warning'
                                );
                            } else {
                                $('#content-tolakModalLabel').html('TOLAK USULAN TAMSIL ' + nama);
                                $('.contentTolakBodyModal').html(resul.data);
                                $('.content-tolakModal').modal({
                                    backdrop: 'static',
                                    keyboard: false,
                                });
                                $('.content-tolakModal').modal('show');
                            }
                        },
                        error: function() {
                            $('div.modal-content-loading').unblock();
                            Swal.fire(
                                'Failed!',
                                "Server sedang sibuk, silahkan ulangi beberapa saat lagi.",
                                'warning'
                            );
                        }
                    });
                }
            })
        }

        function simpanTolak(e) {
            const id = '<?= $data->id_usulan ?>';
            const nama = '<?= $data->nama ?>';
            const keterangan = document.getElementsByName('_keterangan_tolak')[0].value;

            $.ajax({
                url: "./tolak",
                type: 'POST',
                data: {
                    id: id,
                    nama: nama,
                    keterangan: keterangan,
                },
                dataType: 'JSON',
                beforeSend: function() {
                    e.disabled = true;
                    $('div.modal-content-loading').block({
                        message: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
                    });
                },
                success: function(resul) {
                    $('div.modal-content-loading').unblock();

                    if (resul.status !== 200) {
                        if (resul.status !== 201) {
                            if (resul.status === 401) {
                                Swal.fire(
                                    'Failed!',
                                    resul.message,
                                    'warning'
                                ).then((valRes) => {
                                    reloadPage();
                                });
                            } else {
                                e.disabled = false;
                                Swal.fire(
                                    'GAGAL!',
                                    resul.message,
                                    'warning'
                                );
                            }
                        } else {
                            Swal.fire(
                                'Peringatan!',
                                resul.message,
                                'success'
                            ).then((valRes) => {
                                reloadPage();
                            })
                        }
                    } else {
                        Swal.fire(
                            'SELAMAT!',
                            resul.message,
                            'success'
                        ).then((valRes) => {
                            reloadPage();
                        })
                    }
                },
                error: function(erro) {
                    console.log(erro);
                    // e.attr('disabled', false);
                    e.disabled = false
                    $('div.modal-content-loading').unblock();
                    Swal.fire(
                        'PERINGATAN!',
                        "Server sedang sibuk, silahkan ulangi beberapa saat lagi.",
                        'warning'
                    );
                }
            });
        };

        function actionApprove(e) {
            const id = '<?= $data->id_usulan ?>';
            const nama = '<?= $data->nama ?>';

            $.ajax({
                url: "./approve",
                type: 'POST',
                data: {
                    id: id,
                    nama: nama,
                },
                dataType: 'JSON',
                beforeSend: function() {
                    e.disabled = true;
                    $('div.modal-content-loading').block({
                        message: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
                    });
                },
                success: function(resul) {
                    $('div.modal-content-loading').unblock();

                    if (resul.status !== 200) {
                        if (resul.status !== 201) {
                            if (resul.status === 401) {
                                Swal.fire(
                                    'Failed!',
                                    resul.message,
                                    'warning'
                                ).then((valRes) => {
                                    reloadPage();
                                });
                            } else {
                                e.disabled = false;
                                Swal.fire(
                                    'GAGAL!',
                                    resul.message,
                                    'warning'
                                );
                            }
                        } else {
                            Swal.fire(
                                'Peringatan!',
                                resul.message,
                                'success'
                            ).then((valRes) => {
                                reloadPage();
                            })
                        }
                    } else {
                        Swal.fire(
                            'SELAMAT!',
                            resul.message,
                            'success'
                        ).then((valRes) => {
                            reloadPage();
                        })
                    }
                },
                error: function(erro) {
                    console.log(erro);
                    // e.attr('disabled', false);
                    e.disabled = false
                    $('div.modal-content-loading').unblock();
                    Swal.fire(
                        'PERINGATAN!',
                        "Server sedang sibuk, silahkan ulangi beberapa saat lagi.",
                        'warning'
                    );
                }
            });
        };
    </script>
<?php } ?>