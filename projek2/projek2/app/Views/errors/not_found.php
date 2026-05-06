<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404 Error</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            background: #0f172a;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Courier New', monospace;
            color: #fff;
            overflow: hidden;
        }

        .container {
            text-align: center;
        }

        .glitch {
            font-size: 120px;
            font-weight: bold;
            position: relative;
            color: #fff;
            animation: glitch 1s infinite;
        }

        .glitch::before,
        .glitch::after {
            content: '404';
            position: absolute;
            left: 0;
        }

        .glitch::before {
            color: #ff00c1;
            animation: glitchTop 1s infinite;
        }

        .glitch::after {
            color: #00fff9;
            animation: glitchBottom 1s infinite;
        }

        @keyframes glitch {
            0% { transform: translate(0); }
            20% { transform: translate(-2px, 2px); }
            40% { transform: translate(-2px, -2px); }
            60% { transform: translate(2px, 2px); }
            80% { transform: translate(2px, -2px); }
            100% { transform: translate(0); }
        }

        @keyframes glitchTop {
            0% { transform: translate(0); }
            50% { transform: translate(-5px, -5px); }
            100% { transform: translate(0); }
        }

        @keyframes glitchBottom {
            0% { transform: translate(0); }
            50% { transform: translate(5px, 5px); }
            100% { transform: translate(0); }
        }

        p {
            margin-top: 10px;
            color: #94a3b8;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 25px;
            border: 1px solid #00fff9;
            color: #00fff9;
            text-decoration: none;
            transition: 0.3s;
        }

        a:hover {
            background: #00fff9;
            color: #000;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="glitch">404</div>
        <p>Oops... halaman ini hilang di dimensi lain 🌀</p>

        <a href="<?= base_url('/'); ?>">
            Kembali ke Home
        </a>
    </div>

</body>
</html>