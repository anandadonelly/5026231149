<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Alat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #FFFFFF; 
        }
        .custom-box {
            width: 450px;
            height: 810px;
            background-color: #FFFFFF; 
            position: relative;
            border-radius: 10px;
            padding-bottom: 60px;
        }
        .card {
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05); 
            border: 1px solid #E0E0E0; 
            background-color: #f2eff0;
        }
        .btn-blue {
            background-color: #007BFF; 
            color: white;
            border-radius: 5px;
        }
        .header-text {
            font-weight: bold;
            color: #000000; 
        }
        .muted-text {
            color: #3f4453; 
        }
        .bottom-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #f5f5f5; 
            padding: 10px;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
            border-top: 1px solid #E0E0E0; 
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .btn-light {
            border: 1px solid #E0E0E0; 
            background-color: #F8F9FA; 
            color: #000000; 
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="custom-box p-3">
            
            <div class="container">
                <div class="d-flex align-items-center">
                    <!-- Tombol Back -->
                    <button onclick="window.history.back()" class="btn btn-light mr-2">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    
                    <!-- Teks di Kanan -->
                    <div class="ml-auto">
                        <span class="muted-text">CekDong!</span>
                        <span class="header-text ml-1">Booking Alat</span>
                    </div>
                </div>
            </div>

            <div class="card mt-2">
                <div class="d-flex align-items-center">
                    <img src="camera.png" alt="Camera" width="80" class="mr-3">
                    <div>
                        <h5 class="header-text">CAMERA CANON EOS 4000D</h5>
                        <p class="muted-text mb-1">Disewakan pada tanggal 20/11/24 <i class="fas fa-calendar-alt"></i></p>
                        <p class="muted-text mb-1">E17_YANUAR - CREW ITS TV</p>
                        <p class="muted-text mb-1">07.00 - 19.00</p>
                        <p>Liputan: <strong>Pengukuhan Proffesor</strong></p>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <button class="btn btn-light">-</button>
                    <span class="mx-2">1</span>
                    <button class="btn btn-light">+</button>
                </div>
            </div>

            
            <div class="bottom-bar d-flex justify-content-between align-items-center">
                <span class="muted-text">Teknisi hari ini<br><strong>E17_AJI - TEKNISI ITS TV</strong></span>
                <button class="btn btn-blue">KONFIRMASI TEKNISI</button>
            </div>
        </div>
    </div>
</body>
</html>
