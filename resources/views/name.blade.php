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
<div class="container">
        <h1>Mi Historia</h1>

        <div class="section">
            <h2>Mi nombre</h2>
            <p>Mi nombre es <strong>Juan Guillermo Escobar Baez</strong>.</p>
        </div>

        <div class="section">
            <h2>Lugar de nacimiento y familia</h2>
            <p>Nací el <strong>1ero de noviembre de 2005</strong> en la ciudad de <strong>Bucaramanga</strong>. 
               Tengo <strong>dos hermanos</strong>: uno es mi gemelo y el otro es <strong>6 años mayor</strong>. 
               Mis padres son bumangueses, aunque mis abuelos provienen de otras zonas de Colombia.</p>
        </div>
</body>
</html>
