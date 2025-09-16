<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Experiencias laborales</title>
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

    .experiencias {
      display: grid;
      gap: 1.5rem;
    }

    .card {
      background: white;
      border-radius: 12px;
      padding: 1.5rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    }

    .card h2 {
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
      color: #667eea;
    }

    .card p {
      margin: 0;
      font-size: 0.95rem;
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
    <h1>Experiencias Laborales</h1>
    <section class="experiencias">
      <div class="card">
        <h2>Colaboración en tareas repetitivas</h2>
        <p>Apoyé a mi padre durante aproximadamente 3 meses en 2022 y 2023, realizando tareas rutinarias y organizativas.</p>
      </div>

      <div class="card">
        <h2>Tareas manuales en empresa familiar</h2>
        <p>Colaboré en la empresa de mi padre en 2022 y principios de 2023, participando en procesos manuales y de producción.</p>
      </div>

      <div class="card">
        <h2>Gestión de datos e inventario</h2>
        <p>Realicé hojas de Excel, registros de datos y manejo de software de gestión de inventario para apoyar la organización.</p>
      </div>
    </section>
  </main>
</body>
</html>
