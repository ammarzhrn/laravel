<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pertama</title>
</head>
<body>
    <h1>Saya Ammar</h1>
    <a href="/">welcome</a>

    <form action="kirim" method="post">
        <!-- CSRF Security Untuk Keamanan Data -->
        <!-- Digunakan Untuk Setiap Form -->
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="Last_name">
        </div>
        <div class="form-group">
            <button type="submit">submit</button>
        </div>
        
    </form>
</body>
</html>