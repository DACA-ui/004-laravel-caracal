<!-- resources/views/declaracion_jurada.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaración Jurada</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 40px;
        }
        h1 {
            text-align: center;
            text-transform: uppercase;
            font-size: 20px;
        }
        p {
            text-align: justify;
            line-height: 1.5;
            font-size: 14px;
        }
        .firma {
            margin-top: 50px;
            text-align: center;
        }
        .firma span {
            display: block;
            margin-top: 80px;
        }
        .datos-docente {
            margin-top: 40px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <h1>Declaración Jurada de No Estar Incurso en Causales de Incompatibilidad</h1>

    <p>
        Yo, <strong>{{ $nombre }}</strong>, identificado(a) con DNI N° <strong>{{ $dni }}</strong>, de la Facultad/Filial de 
        Ingeniería adscrito al  <strong>{{ $departamento }}</strong>, en el marco de la Ley Universitaria 
        30220, D.S. N° 418-2017-EF, Estatuto Reformado 2021 y el reglamento de asignación de la Carga Académica de los Docentes 
        de la UNT, declaro bajo juramento y en honor a la verdad que:
    </p>

    <p>
        NO ESTOY INCURSO en causales de incompatibilidad laboral y NO TENGO impedimento para ejercer la docencia en la Universidad 
        Nacional de Trujillo, de conformidad con lo previsto en el Capítulo VIII de las Incompatibilidades, Impedimentos y Sanciones, 
        del Título XII: de los docentes, del Estatuto Institucional vigente, según la especificación siguiente:
    </p>

    <p>
        Soy docente, ordinario a Dedicación Exclusiva y NO EJERZO cualquier otra actividad o cargo remunerado en otra universidad, 
        entidad pública o privada, fuera de la Universidad Nacional de Trujillo (De conformidad con el Artículo 225° del Estatuto 
        Institucional vigente).
    </p>

    <p>
        En caso de faltar a la verdad, me someto a las sanciones que sean aplicables de acuerdo a la ley. Asimismo, de encontrarme 
        incurso en situación de incompatibilidad o impedimento para ejercer la docencia en la U.N.T., me someto a las sanciones 
        previstas por su Estatuto, y autorizo al funcionario competente disponer el descuento de mi planilla de haberes, del monto 
        que la Unidad de Remuneraciones liquide como pagos indebidos por el lapso de tiempo laborado ilegalmente.
    </p>

    <div class="firma">
        <p>Firma del Docente: _________________________________</p>
        <span>{{ $nombre }}</span>
        <span>DNI: {{ $dni }}</span>
    </div>

    <div class="datos-docente">
    <p>Trujillo, {{ \Carbon\Carbon::now()->day }} de {{ \Carbon\Carbon::now()->translatedFormat('F') }} del {{ \Carbon\Carbon::now()->year }}</p>
</div>

</body>
</html>
