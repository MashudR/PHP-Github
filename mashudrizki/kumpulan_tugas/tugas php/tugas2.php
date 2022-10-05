<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas PHP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

	<body>
            <div class="container px-5 my-5">
                <form  method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="namaPegawai">Nama Pegawai</label>
                        <input class="form-control" name="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="agama">Agama</label>
                        <select class="form-select" name="agama" aria-label="Agama">
                            <option value="islam">islam</option>
                            <option value="kristen">kristen</option>
                            <option value="hindu">hindu</option>
                            <option value="buddha">buddha</option>
                            <option value="kong hu chu">kong hu chu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label d-block">Jabatan</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" value="manager" type="radio" name="jabatan" data-sb-validations="" />
                            <label class="form-check-label" for="manager">Manager</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" value="assiten" type="radio" name="jabatan" data-sb-validations="" />
                            <label class="form-check-label" for="assiten">Assiten</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" value="kabag" type="radio" name="jabatan" data-sb-validations="" />
                            <label class="form-check-label" for="kabag">Kabag</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" value="staff" type="radio" name="jabatan" data-sb-validations="" />
                            <label class="form-check-label" for="staff">Staff</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label d-block">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" value="menikah" type="radio" name="status" data-sb-validations="" />
                            <label class="form-check-label" for="menikah">Menikah</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" value="belum" type="radio" name="status" data-sb-validations="" />
                            <label class="form-check-label" for="belum">Belum</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jumlahAnak">Jumlah anak</label>
                        <input class="form-control" name="jumlahAnak" type="text" placeholder="Jumlah anak" data-sb-validations="" />
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" name="simpan" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        <?php
        // tangkap 
        $nama = $_POST['namaPegawai'];
        $agama = $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $jmlanak = $_POST['jumlahAnak'];
        $tombol = $_POST['simpan'];
        switch ($jabatan) {
            case 'manager': $gapok = 20000000;break;
            case 'assiten': $gapok = 15000000;break;
            case 'kabag': $gapok = 10000000;break;            
            case 'staff': $gapok = 4000000;break;
            default: $gapok = '';break;
        }
        $tunjab = 0.2 * $gapok;
        if ($status == 'menikah' && $jmlanak <= 2) $tunkel = 0.05 * $gapok;
        else if ($status == 'menikah' && $jmlanak >= 3 && $jmlanak <= 5) $tunkel = 0.1 * $gapok;
        else if ($status == 'menikah' && $jmlanak > 5) $tunkel = 0.1 * $gapok;
        else $tunkel = 0;
        $gator = $gapok + $tunjab + $tunkel;
        $zaporf = ($agama == 'islam' && $gator >= 6000000) ? 0.025 * $gapok : 0;
        $take = $gator - $zaporf;
        
        if(isset($tombol)){?>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="card" style="width: 100%;">
            <div class="body">
                <div class=" alert alert-primary p-5" role="alert">
                    Nama Pegawai: <?= $nama ?>
                    <br />Agama: <?= $agama ?>
                    <br />Jabatan: <?= $jabatan ?>
                    <br />Status: <?= $status ?>
                    <br />Jumlah Anak: <?= $jmlanak ?>
                    <br />Gaji Pokok: Rp.<?= number_format($gapok, 2, ',', '.'); ?>
                    <br />Tunjagan Jabatan: Rp.<?= number_format($tunjab, 2, ',', '.'); ?>
                    <br />Tunjagan Keluarga: Rp.<?= number_format($tunkel, 2, ',', '.'); ?>
                    <br />Gaji Kotor: Rp.<?= number_format($gator, 2, ',', '.'); ?>
                    <br />Zakat Profesi: Rp.<?= number_format($zaporf, 2, ',', '.'); ?>
                    <br />Take Home Pay: Rp.<?= number_format($take, 2, ',', '.'); ?>
                </div>
            </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        <?php } ?>
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
        <script>
        const modal = new bootstrap.Modal('#exampleModal')
        modal.show()
        </script>
    </body>
</html>