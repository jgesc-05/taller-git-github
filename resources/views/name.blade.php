<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My name</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            overflow: hidden;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px 60px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            animation: fadeIn 2s ease-in-out;
        }

        h1 {
            font-size: 2.5rem;
            margin: 0;
            letter-spacing: 2px;
        }

        p {
            margin-top: 10px;
            font-size: 1.2rem;
            opacity: 0.9;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>¡Hola! 👋</h1>
        <p>Mi nombre es <strong>Juan Guillermo Escobar Baez</strong></p>
    </div>
</body>
</html>
