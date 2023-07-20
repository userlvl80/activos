<!-- resources/views/tableactivo/pdf.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilos CSS para el formato del PDF (opcional) */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Reporte de Activos</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Codigo</th>
                <th>Marca</th>
                <th>Descripcion</th>
                <th>Numero Serie</th>
                <th>Placa</th>
                <th>Fecha Alta</th>
                <th>Precio Adquisicion</th>
                <th>Moneda</th>
                <th>Precio Actual</th>
                <th>Ubicacion</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tableactivos as $tableactivo)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tableactivo->codigo }}</td>
                    <td>{{ $tableactivo->marca }}</td>
                    <td>{{ $tableactivo->descripcion }}</td>
                    <td>{{ $tableactivo->numero_serie }}</td>
                    <td>{{ $tableactivo->placa }}</td>
                    <td>{{ $tableactivo->fecha_alta }}</td>
                    <td>{{ $tableactivo->precio_adquisicion }}</td>
                    <td>{{ $tableactivo->moneda }}</td>
                    <td>{{ $tableactivo->precio_actual }}</td>
                    <td>{{ $tableactivo->ubicacion }}</td>
                    <td>
                        @if ($tableactivo->estado == 1)
                            Activo
                        @else
                            Eliminado
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
