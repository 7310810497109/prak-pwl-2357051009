<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 3px solid #cccccc;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
            background-color: #f9f9f9;
        }

        .person-icon {
            width: 60px;
            height: 60px;
            background-color: #e0e0e0;
            border-radius: 50% 50% 0 0;
            position: relative;
        }

        .person-icon::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            background-color: #e0e0e0;
            border-radius: 50%;
            top: -20px;
            left: 10px;
        }

        .info-box {
            width: 250px;
            height: 40px;
            background-color: #f0f0f0;
            border-radius: 5px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            padding: 0 15px;
            color: #666666;
            font-size: 16px;
        }

        .info-box:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="avatar">
            <div class="person-icon"></div>
        </div>
        <div class="info-box">{{$nama}}</div>
        <div class="info-box">{{$kelas}}</div>
        <div class="info-box">{{$npm}}</div>
    </div>
</body>
</html>