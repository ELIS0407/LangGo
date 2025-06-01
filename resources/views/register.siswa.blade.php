<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Siswa - LangGo!</title>
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
      padding: 0 40px;
    }
    input {
      margin-bottom: 15px;
      padding: 10px;
      width: 100%;
      border-radius: 8px;
      border: 1px solid #ccc;
    }
    button {
      background-color: #4a7392;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="left">
    <img src="https://i.pinimg.com/736x/55/bb/33/55bb332697bc830188720747bd03f9ea.jpg" width="400" alt="Logo LangGo">
  </div>
  <div class="right">
    <h2>LangGo! Belajar Bahasa Cepat dan Seru Berbasis WEB</h2>
    <form method="post" action="proses_daftar_siswa.php">
      <input type="text" name="username" placeholder="Username.." required>
      <input type="email" name="email" placeholder="Email.." required>
      <input type="text" name="telepon" placeholder="No. telepon.." required>
      <input type="password" name="password" placeholder="Password.." required>
      <button type="submit">Sign Up</button>
    </form>
  </div>
</body>
</html>