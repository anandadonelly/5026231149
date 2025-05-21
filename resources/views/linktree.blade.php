<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Will Smith</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background-color: #c42e00;
            font-family: 'Raleway', sans-serif;
            color: white;
            padding: 20px;
            text-align: center;
            max-width: 500px;
            margin: 0 auto;
        }
    
        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            margin: 0 auto 15px;
            display: block;
        }
    
        .profile-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 25px;
        }
    
        .social-link {
            color: white;
            font-size: 20px;
            text-decoration: none;
        }

        .social-link:hover {
        color: white;
        font-size: 20px;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
    }
    
    /* Instagram */
    .social-link:nth-child(1):hover {
        color: #e849d0;
        transform: scale(1.2) translateY(-3px);
        text-shadow: 0 0 10px rgba(225, 48, 108, 0.5);
    }
    
    /* TikTok */
    .social-link:nth-child(2):hover {
        color: #25F4EE;
        transform: scale(1.2) translateY(-3px);
        text-shadow: 0 0 10px rgba(37, 244, 238, 0.5);
    }
    
    /* YouTube */
    .social-link:nth-child(3):hover {
        color: #FF0000;
        transform: scale(1.2) translateY(-3px);
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
    }
    
    /* Facebook */
    .social-link:nth-child(4):hover {
        color: #1877F2;
        transform: scale(1.2) translateY(-3px);
        text-shadow: 0 0 10px rgba(24, 119, 242, 0.5);
    }
    
    .link-card {
    background-color: #f4b29e;
    color: black;
    border-radius: 0;
    padding: 15px;
    margin-bottom: 15px;
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.3);
    font-weight: 500;
    display: flex; /* Changed to flex */
    align-items: center; /* Vertically center items */
    text-decoration: none;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

        .link-icon {
            width: 30px;
            height: 30px;
            object-fit: cover;
            flex-shrink: 0;
        
        }

        .link-text {
            flex-grow: 1;
            text-align: center;
        }

        .card-left {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-right: 15px; 
        }

        .card-left img, .card-left svg {
        width: 40px;
        height: 40px;
        object-fit: cover;
        }
    
        .link-card:hover {
            transform: translateY(-5px);
            box-shadow: 8px 8px 20px rgba(0, 0, 0, 0.4);
        }
    
        .bold-card {
            font-weight: bold;
        }
    
        .plain-text {
            margin-bottom: 15px;
            font-size: 16px;
            text-align: center;
            padding-left: 10px;
        }
    
        .video-gallery {
            position: relative;
            margin-top: 5px;
        }
    
        .video-container {
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            padding: 15px;
            position: relative;
        }
    
        .video-scroller {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        padding: 10px 0;
        -webkit-overflow-scrolling: touch;
        transition: transform 1s;
        will-change: transform;
        }

        @keyframes fadeIn {
        from { opacity: 0.5; }
        to { opacity: 1; }
        }
    
        .video-scroller::-webkit-scrollbar {
            display: none;
        }
    
        .video-item {
        flex: 0 0 auto;
        width: 300px;
        height: 170px;
        scroll-snap-align: start;
        border-radius: 16px;
        scroll-behavior: smooth;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
        transition: transform 0.3s ease;
        }

        .video-item iframe {
        width: 100%;
        height: 100%;
        border: none;
        }
    
        .youtube-embed {
            width: 100%;
            border-radius: 8px;
            aspect-ratio: 16/9;
            background: #000;
        }
    
        .video-item iframe {
    width: 100%;
    height: 100%;
    border: none;
}

        .video-item:hover {
            transform: scale(1.03);
        }

        .video-gallery {
            margin-top: 20px;
        }
    
        .nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 24px;
            cursor: pointer;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .prev-button {
            left: 10px;
        }

        .next-button {
            right: 10px;
        }

    </style>
    
</head>
<body>
    <!-- Profile Picture -->
    <img src="will.jpeg" alt="Will Smith" class="profile-pic">
    
    <!-- Profile Name -->
    <div class="profile-name" style="display: inline-flex; align-items: center;">
        Will Smith 
        <i class="fa-solid fa-circle-check" 
           style="color: #00bfff; font-size: 14px; margin-left: 6px;"></i>
    </div>
    
      
    
    
    <!-- Social Media Links -->
    <div class="social-links">
        <a href="https://www.instagram.com/willsmith" class="social-link"><i class="fab fa-instagram"></i></a>
        <a href="https://www.tiktok.com/@willsmith" class="social-link"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.youtube.com/@WillSmith" class="social-link"><i class="fab fa-youtube"></i></a>
        <a href="https://www.facebook.com/WillSmith" class="social-link"><i class="fab fa-facebook"></i></a>
    </div>
    
    <!-- Link Cards -->
    <a href="https://willsmith.lnk.to/BOATS" class="link-card">
        <div class="card-left">
            <img src="album.jpg" alt="Album" class="link-icon">
        </div>
        <span class="link-text">My album 'Based on a True Story' is out now!</span>
    </a>
    
    <a href="https://willsmith.com/#tour" class="link-card">
        <div class="card-left">
            <img src="ticket.png" alt="Tickets" class="link-icon">
        </div>
        <span class="link-text">Summer tour tickets!</span>
    </a>
    
    <a href="sms:+12152449455" class="link-card">
        <div class="card-left">
            <i class="fa-regular fa-message" style="font-size: 26px;"></i>
        </div>
        <span class="link-text">Txt my #: 215-244-9455</span>
    </a>

    <!--icon cards-->
    
    <!-- Videos Section -->
    <div class="plain-text">Videos</div>
    
    <div class="video-gallery">
        <div class="video-container">
            <button class="nav-button prev-button" onclick="scrollVideos(-1)">‹</button>
            
            <div class="video-scroller" id="videoScroller">
                 <!-- Embed Video yt nya -->
                <div class="video-item">
                    <div class="youtube-embed">
                        
                        <iframe width="100%"
                                height="100%"
                                src="https://www.youtube.com/embed/eVX4DqDzGDE?autoplay=0&controls=1&modestbranding=1&rel=0" 
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </div>
                   
                </div>
                
                <div class="video-item">
                    <div class="youtube-embed">
                      
                        <iframe width="100%" 
                                height="100%" 
                                src="https://www.youtube.com/embed/isQ5Ycie73U?autoplay=0&controls=1&showinfo=0" 
                                frameborder="0" 
                                allowfullscreen>
                        </iframe>
                    </div>
                    
                </div>

                <div class="video-item">
                    <div class="youtube-embed">
                        
                        <iframe width="100%" 
                                height="100%" 
                                src="https://www.youtube.com/embed/XOBVEpBa_CQ?autoplay=0&controls=1&showinfo=0" 
                                frameborder="0" 
                                allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
            
            <button class="nav-button next-button" onclick="scrollVideos(1)">›</button>
        </div>
    </div>

    <script>
            function scrollVideos(direction) {
        const scroller = document.getElementById('videoScroller');
        const videoWidth = scroller.querySelector('.video-item').offsetWidth + 20; // gap
        const startScroll = scroller.scrollLeft;
        const endScroll = startScroll + direction * videoWidth;

        const duration = 500; // durasi animasi dalam ms
        let startTime = null;

        function animateScroll(currentTime) {
            if (!startTime) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const progress = Math.min(timeElapsed / duration, 1); // 0 to 1

            // Easing function (easeInOutQuad)
            const ease = progress < 0.5 
                ? 2 * progress * progress 
                : -1 + (4 - 2 * progress) * progress;

            scroller.scrollLeft = startScroll + (endScroll - startScroll) * ease;

            if (progress < 1) {
                requestAnimationFrame(animateScroll);
            }
        }

        requestAnimationFrame(animateScroll);
    }
    </script>
</body>
</html>