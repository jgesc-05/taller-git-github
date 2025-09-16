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
    <a href="#">Academia</a>
  </nav>


  <header>
    <h1>🌟 Mi Historia</h1>
  </header>

  <div class="container">
    <div class="section">
      <h2>👤 Mi nombre</h2>
      <p>Mi nombre es <strong>Juan Guillermo Escobar Baez</strong>.</p>
    </div>

    <div class="section">
      <h2>📍 Lugar de nacimiento y familia</h2>
      <p>Nací el <strong>1ero de noviembre de 2005</strong> en la ciudad de <strong>Bucaramanga</strong>. 
         Tengo <strong>dos hermanos</strong>: uno es mi gemelo y el otro es <strong>6 años mayor</strong>. 
         Mis padres son bumangueses, aunque mis abuelos provienen de otras zonas de Colombia.</p>
    </div>

    <div class="section">
      <h2>🎒 Mi niñez</h2>
      <p>Entré a la primaria en el año 2012 en el colegio <strong>Gimnasio San Diego</strong>, ubicado en Floridablanca (Santander). Allí
         tengo muchos recuerdos, como los descansos jugando fútbol o escondite, y haciendo locuras como deslizarme por las montañas. 
         Los fines de semana, me gustaba explorar la naturaleza con mis padres y jugar videojuegos. A los 9 años, aproximadamente, 
         realicé mi primera comunión.</p>
    </div>

    <div class="section">
      <h2>👦 Mi adolescencia</h2>
      <p>En mi adolescencia ocurrió lo siguiente: en mi adolescencia temprana me gustaba mucho ir a cine para ver películas de superhéroes. 
         Saltándome al año 2022 (debido a la pandemia de COVID-19), me gradué del colegio y además colaboré a mi padre en su empresa. 
         En el año 2023, me tomé medio año para pensar cuál era el paso siguiente en mi vida y, finalmente, en el segundo semestre de ese año, entré a estudiar en la universidad.</p>
    </div>

    <div class="section">
      <h2>📚 Lo que hago actualmente</h2>
      <p>Actualmente, sigo estudiando <strong>Ingeniería de Sistemas</strong> en la Universidad Autónoma de Bucaramanga (UNAB); 
         voy en quinto semestre del pregrado. Me gusta aprender sobre frameworks, especialmente de back-end. 
         Además de eso, me gusta montar bicicleta los fines de semana para estar en la naturaleza. 
         Finalmente, también practico el catolicismo.</p>
    </div>

    <div class="section">
      <h2>🚀 Aspiraciones y metas</h2>
      <p>Aspiro ser un profesional formado, que represente al catolicismo adecuadamente en mi entorno de trabajo, 
         y trabajar para contribuir en lo que se necesite.</p>
      <p><strong>Mis metas principales:</strong></p>
      <ul>
        <li>Estudiar un semestre fuera del país.</li>
        <li>Entender adecuadamente las temáticas y no solamente graduarme con buenas notas, sino también desarrollar habilidades blandas.</li>
      </ul>
    </div>
  </div>

</body>
</html>
