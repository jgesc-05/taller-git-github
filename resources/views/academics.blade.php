<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Historia</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f7fb;
      color: #333;
    }

    header {
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
      text-align: center;
      padding: 2.5rem 1rem;
    }

    header h1 {
      margin: 0;
      font-size: 2.5rem;
    }

    .container {
      max-width: 1000px;
      margin: 2rem auto;
      padding: 0 1rem;
    }

    .section {
      background: white;
      border-radius: 16px;
      padding: 1.5rem 2rem;
      margin-bottom: 2rem;
      box-shadow: 0 6px 18px rgba(0,0,0,0.1);
      transition: transform 0.2s ease-in-out;
    }

    .section:hover {
      transform: translateY(-4px);
    }

    .section h2 {
      margin-top: 0;
      font-size: 1.6rem;
      color: #667eea;
      border-bottom: 2px solid #eee;
      padding-bottom: 0.5rem;
    }

    .section p {
      line-height: 1.7;
      margin: 0.8rem 0 0;
    }

    ul {
      margin-top: 0.8rem;
      padding-left: 1.2rem;
    }

    nav {
      background: linear-gradient(135deg, #667eea, #764ba2);
      padding: 1rem;
      display: flex;
      justify-content: center;
      gap: 2rem;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #ffd369;
    }
  </style>
</head>
<body>

<nav>
    <a href="{{ route('stages') }}">Inicio</a>
    <a href="{{ route('work') }}">Experiencia</a>
    <a href="{{ route('abilities') }}">Habilidades</a>
    <a href="{{ route('academics') }}">Academia</a>
  </nav>

    <div class="section">
      <h2>Colegio</h2>
      <p>
        Estudié en el colegio Gimnasio San Diego la primaria y el bachillerato. Allí también presenté exámenes de francés e inglés
        en los que obtuve A1 y B2 en el CEFR, respectivamente. Además, realicé un proyecto de grado de gestión de notas (CRUD). Me
        gradué de allí en el año 2022.
      </p>
    </div>

</body>
</html>