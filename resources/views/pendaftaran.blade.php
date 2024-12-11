<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="register-container">
        <h1>Pendaftaran</h1>
        <form action="success.html" method="POST">
            <div class="input-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="button-group">
            <a href=login style="margin-bottom: 5px;" type="submit" class="button">Daftar</a>
            <a href=welcome style="margin-bottom: 5px;" type="submit" class="button">Kembali</a>    
            </div>
        </form>
    </div>
</body>
</html>
<style>
    .register-container {
    background: #FFE4C4;
    padding: 30px 40px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 400px;
    margin: auto;
    text-align: left;
}

h1 {
    text-align: center;
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.input-group {
    margin-bottom: 15px;
}

label {
    display: block;
    font-size: 14px;
    color: #555;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

input:focus {
    border-color: #007BFF;
    outline: none;
}

.button-group {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.button {
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #E9967A;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
}

.button:hover {
    background-color: #0056b3;
}

.back-button {
    background-color: #6c757d;
}

.back-button:hover {
    background-color: #495057;
}

</style>