<div class="banner"></div>
<!-- form -->
<form action="<?= BASEURL; ?>/form/tambah" method="post" class="m-md-5 m-2">
    <input type="hidden" value="<?= date("Y/m/d") ?>" name="created_at">
    <!-- nama -->
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="nama anda..." name="nama" required>
    </div>
    <!-- alamat -->
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" placeholder="alamat anda..." name="alamat" required>
    </div>
    <!-- no.telp -->
    <div class="mb-3">
        <label for="notelp" class="form-label">No Telp</label>
        <input type="number" class="form-control" id="notelp" placeholder="nomor telepon anda..." name="telepon" required>
    </div>
    <!-- email -->
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="email anda..." name="email" required>
    </div>
    <!-- program -->
    <div class="mb-3">
        <label for="program" class="form-label">Program</label>
        <select class="form-select" id="program" name="program">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <!-- sub program -->
    <div class="mb-3">
        <label for="subprogram" class="form-label">Sub Program</label>
        <select class="form-select" id="subprogram" name="sub_program">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <!-- tangal -->
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal Kursus</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal_kursus" required>
    </div>
    <!-- pesan -->
    <div class="mb-3">
        <label for="pesan" class="form-label">Pesan</label>
        <textarea class="form-control" id="text" rows="3" name="pesan" required></textarea>
    </div>
    <!-- button -->
    <button type="submit" class="btn btn-primary">Daftar</button>
</form>