<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Tambah Data Siswa</h1>

    <form action="kirim" method="post">
        
        @csrf

        <div class="form-group">
            <label>Nama Siswa</label>
            <input type="text" name="nama_siswa" id="">
        </div>

        <div class="form-group">
            <label>NISN</label>
            <input type="number" name="nisn" id="">
        </div>

        <div class="form-group">
            <label>NIS</label>
            <input type="number" name="nis" id="">
        </div>

        <div class="form-group">
            <label>Kelas</label>
            <select name="kelas" id="">
                <option value="X RPL">X RPL</option>
                <option value="X DKV">X DKV</option>
                <option value="X TKJ">X TKJ</option>
                <option value="XI RPL">XI RPL</option>
                <option value="XI DKV">XI DKV</option>
                <option value="XI TKJ">XI TKJ</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit">Tambah Siswa</button>
        </div>

    </form>
</body>
</html>