<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Habilidades</title>
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

    .habilidades {
      display: grid;
      gap: 1.5rem;
    }

    .card {
      background: white;
      border-radius: 12px;
      padding: 1.5rem;
      display: flex;
      align-items: center;
      gap: 1rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    }

    .icon {
      font-size: 1.8rem;
      color: #667eea;
    }

    .card p {
      margin: 0;
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
    <h1>Mis Habilidades</h1>
    <section class="habilidades">
      <div class="card">
        <div class="icon">💡</div>
        <p>Ser perseverante en el aprendizaje de conceptos retadores.</p>
      </div>

      <div class="card">
        <div class="icon">🎯</div>
        <p>Lograr objetivos propuestos, ya sea a corto o largo plazo; académicos o personales.</p>
      </div>

      <div class="card">
        <div class="icon">📚</div>
        <p>Trabajar en solitario en los proyectos académicos.</p>
      </div>
    </section>
  </main>
</body>
</html>
