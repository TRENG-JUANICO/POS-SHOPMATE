<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopmate | Apparel Collective</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-blue: #0fbcf9;
            --deep-black: #08080a;
            --fashion-glow: rgba(15, 188, 249, 0.2);
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: var(--deep-black);
            font-family: 'Outfit', sans-serif;
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
            position: relative;
            padding: 20px; /* Padding para sa mobile */
        }

        /* BACKGROUND */
        .bg-overlay {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(45deg, rgba(0,0,0,0.9), rgba(15, 188, 249, 0.1)),
                        url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        /* ANIMATED GLOW */
        .floating-circle {
            position: absolute;
            width: 40vw; height: 40vw;
            background: var(--fashion-glow);
            filter: blur(80px);
            border-radius: 50%;
            z-index: -1;
            animation: float 15s infinite alternate;
        }

        @keyframes float {
            0% { transform: translate(-10%, -10%); }
            100% { transform: translate(10%, 10%); }
        }

        /* RESPONSIVE LOGIN CARD */
        .apparel-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px); /* Safari support */
            border: 1px solid rgba(15, 188, 249, 0.2);
            padding: clamp(30px, 8vw, 60px) clamp(20px, 5vw, 40px);
            border-radius: 30px;
            text-align: center;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 40px 100px rgba(0,0,0,0.8);
            animation: slideUp 1s cubic-bezier(0.23, 1, 0.32, 1);
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .brand-logo {
            font-family: 'Syncopate', sans-serif;
            /* clamp(min, preferred, max) - auto size depende sa screen */
            font-size: clamp(1.8rem, 8vw, 2.8rem);
            font-weight: 700;
            letter-spacing: clamp(4px, 2vw, 8px);
            color: white;
            margin-bottom: 5px;
            text-shadow: 0 0 20px rgba(15, 188, 249, 0.4);
            line-height: 1.2;
        }

        .brand-tagline {
            font-size: clamp(0.6rem, 2vw, 0.75rem);
            text-transform: uppercase;
            letter-spacing: 4px;
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 40px;
            display: block;
        }

        /* BUTTON PORTAL */
        .btn-portal {
            background: white;
            color: black;
            text-decoration: none;
            padding: 18px 30px;
            border-radius: 12px;
            font-weight: 800;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            width: 100%;
            justify-content: center;
            transition: 0.4s;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 0.85rem;
        }

        .btn-portal:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(15, 188, 249, 0.3);
        }

        .status-indicator {
            margin-top: 30px;
            font-size: 0.75rem;
            color: rgba(255,255,255,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .dot {
            width: 7px; height: 7px;
            background: #00ff88;
            border-radius: 50%;
            box-shadow: 0 0 10px #00ff88;
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(1.2); }
        }

        footer {
            position: absolute;
            bottom: 20px;
            font-size: 0.65rem;
            letter-spacing: 2px;
            color: rgba(255,255,255,0.2);
            text-align: center;
            width: 100%;
            padding: 0 10px;
        }

        /* MOBILE OPTIMIZATION */
        @media (max-width: 576px) {
            .apparel-card {
                padding: 40px 20px;
                border-radius: 20px;
            }
            .floating-circle {
                display: none; /* Tangtangon ang bug-at nga effects sa mobile */
            }
            footer {
                position: relative;
                margin-top: 40px;
                bottom: 0;
            }
            body {
                flex-direction: column;
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <div class="bg-overlay"></div>
    <div class="floating-circle"></div>

    <div class="apparel-card shadow-lg">
        <div class="brand-logo">SHOPMATE</div>
        <span class="brand-tagline">Apparel Collective</span>

        <div style="margin-bottom: 35px;">
            <i class="bi bi-layers text-white opacity-25" style="font-size: 2.5rem;"></i>
            <i class="bi bi-tag-fill" style="font-size: 2rem; color: var(--primary-blue); margin-left: -10px;"></i>
        </div>

        <a href="dashboard.php" class="btn-portal">
            Enter Management <i class="bi bi-arrow-right"></i>
        </a>

        <div class="status-indicator">
            <span class="dot"></span> System Online | Node: 0924
        </div>
    </div>

    <footer>
        &copy; 2026 SHOPMATE FASHION MANAGEMENT SYSTEM
    </footer>

</body>
</html>