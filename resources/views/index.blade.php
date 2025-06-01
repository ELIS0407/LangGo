<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>LangGo! - Pilih Login</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      height: 100vh;
    }
    .left {
      background-color: #4a7392;
      width: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .right {
      width: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .btn {
      background-color: #4a7392;
      color: white;
      padding: 12px 24px;
      margin: 10px;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
    }
    .btn:hover {
      background-color: #355469;
    }
  </style>
</head>
<body>
  <div class="left">
    <img src="https://i.pinimg.com/736x/55/bb/33/55bb332697bc830188720747bd03f9ea.jpg" width="500" alt="Logo LangGo">
  </div>
  <div class="right">
    <h2>Daftar/login sebagai</h2>
    <a href="register_siswa.php"><button class="btn">Siswa</button></a>
    <a href="register_guru.php"><button class="btn">Guru</button></a>
    <a href="register_guru.php"><button class="btn">cek status</button></a>
  </div>
</body>
</html>