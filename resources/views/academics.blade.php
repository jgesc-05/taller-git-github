<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hitos Académicos</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background: #f8f9fc;
      color: #333;
      line-height: 1.6;
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
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease, transform 0.2s;
    }

    nav a:hover {
      color: #ffd369;
      transform: translateY(-2px);
    }

    main {
      max-width: 900px;
      margin: 3rem auto;
      padding: 0 1rem;
    }

    h1 {
      text-align: center;
      font-size: 2rem;
      margin-bottom: 2rem;
      color: #444;
    }

    .section {
      background: white;
      border-radius: 12px;
      padding: 1.5rem 2rem;
      margin-bottom: 2rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .section:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    }

    .section h2 {
      margin-top: 0;
      font-size: 1.4rem;
      color: #667eea;
      font-weight: 600;
      border-left: 4px solid #667eea;
      padding-left: 0.6rem;
    }

    .section p {
      margin: 1rem 0 0;
      font-size: 1rem;
      color: #555;
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

  <main>
    <h1>Hitos Académicos</h1>

    <div class="section">
      <h2>Colegio</h2>
      <p>
        Estudié en el colegio Gimnasio San Diego la primaria y el bachillerato. Allí también presenté exámenes de francés e inglés
        en los que obtuve A1 y B2 en el CEFR, respectivamente. Además, realicé un proyecto de grado de gestión de notas (CRUD). Me
        gradué de allí en el año 2022.
      </p>
    </div>

    <div class="section">
      <h2>Universidad</h2>
      <p>
        Llevo 2 años estudiando Ingeniería de Sistemas en la UNAB (Universidad Autónoma de Bucaramanga),
        donde he obtenido buenas calificaciones y he confirmado que esta es mi vocación. Actualmente, me encuentro en quinto semestre.
      </p>
    </div>
  </main>
</body>
</html>
