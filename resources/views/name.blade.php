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
        <div class="section">
            <h2>Mi niñez</h2>
            <p>Entré a la primaria en el año 2012 (entré al colegio Gimnasio San Diego, ubicado en Floridablanca (Santander)). Allí
                tengo muchos recuerdos, como los descansos (cuando jugaba fútbol o escondite, o hacía locuras como deslizarme por las 
                montañas). Los fines de semana, me gustaba explorar la naturaleza con mis padres y jugar videojuegos. A los 9 años, 
                aproximadamente, realicé mi primera comunión.
            </p>

            <div class="section">
            <h2>Mi adolescencia</h2>
            <p> En mi adolescencia, ocurrió (principalmente) lo siguiente: respecto a mi adolescencia temprana, me gustaba mucho ir a cine para
                ver películas de superhéroes. Saltándome al año 2022 (debido a la pandemia de COVID-19), me gradué del colegio y, además, colaboré
                a mi padre en su empresa. En el año 2023, me tomé medio año para pensar cuál era el paso siguiente en mi vida y, finalmente, en el
                año 2023 (segundo semestre) entré a estudiar a la universidad.
            </p>

            <div class="section">
            <h2>Lo que hago y a lo que me dedico actualmente</h2>
            <p> Actualmente, sigo estudiando Ingeniería de Sistemas en la Universidad Autónoma de Bucaramanga (UNAB); voy en quinto
                semestre del pregrado. Me gusta aprender sobre frameworks, especialmente de back-end. Además de eso, me gusta montar bicicleta
                , especialmente los fines de semana, para estar en la naturaleza. Finalmente, también me dedico a practicar el catolicismo.
            </p>

            
        </div>
</body>
</html>
