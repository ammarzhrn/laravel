<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Tambah Data Karyawan</h1>

    <form action="{{route('karyawan.store')}}" method="post">
        
        @csrf

        <div class="form-group">
            <label>Nama Karyawan</label>
            <input type="text" name="nama_siswa" id="">
        </div>

        <div class="form-group">
            <label>NIP</label>
            <input type="number" name="nip" id="">
        </div>

        <div class="form-group">
            <label>NO HP</label>
            <input type="number" name="no_hp" id="">
        </div>

        <div class="form-group">
            <label>Departemen</label>
            <select name="departemen" id="">
                <option value="Human Resource Development">Human Resource Development</option>
                <option value="General Affairs">General Affairs</option>
                <option value="Direktorat">Direktorat</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit">Tambah</button>
        </div>

    </form>
</body>
</html>