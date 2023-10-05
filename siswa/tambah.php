<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul Siswa</h1>
        </div>
        <div class="col-4">
            <a href="?n=siswa&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
        </div>
        <div class="col">
            <form action="?n=siswa&s=simpan" method="post">
                <div class="mb-2">
                    <label for="">nama</label>
                    <input type="text" name="nama" class="form-control" autofocus>
                </div>
                <div class="mb-2">
                    <label for="">nis</label>
                    <input type="number" name="nis" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">jk</label>
                    <input type="number" name="jk" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="">tempat_lahir</label>
                    <input type="number" name="tempat_lahir" class="form-control">
                </div>
                <div class="mb-2">
                    <input type="reset" class="btn btn-warning">
                    <input type="submit" name="simpan" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>