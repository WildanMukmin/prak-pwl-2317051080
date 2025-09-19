<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <style>
    body {
      font-family: 'Segoe UI', Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #f0f4ff, #e6ecf5);
    }

    .profile {
      background: #fff;
      border-radius: 15px;
      padding: 30px 40px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      text-align: center;
      max-width: 350px;
      width: 100%;
    }

    .avatar {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      overflow: hidden;
      border: 4px solid #4a90e2;
      margin: 0 auto 20px;
    }

    .avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    h2 {
      margin: 10px 0 20px;
      font-size: 22px;
      color: #333;
    }

    .info {
      background-color: #f7f9fc;
      margin: 10px 0;
      padding: 12px;
      border-radius: 8px;
      font-weight: 500;
      font-size: 16px;
      color: #444;
      transition: background 0.3s;
    }

    .info:hover {
      background-color: #eaf1ff;
    }
  </style>
</head>
<body>
  <div class="profile">
    <div class="avatar">
      <img src="/wildann.webp" alt="Profile Picture">
    </div>

    <div class="info">Nama: {{ $nama }}</div>
    <div class="info">Kelas: {{ $kelas }}</div>
    <div class="info">NPM: {{ $npm }}</div>
  </div>
</body>
</html>
