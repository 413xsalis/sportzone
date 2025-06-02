<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; }
    </style>
</head>
<body>
    <h1>Reporte de Clases</h1>
    <table>
        <thead>
            <tr>
                <th>Clase</th>
                <th>Instructor</th>
                <th>Horario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $item)
                <tr>
                    <td>{{ $item->clase }}</td>
                    <td>{{ $item->instructor }}</td>
                    <td>{{ $item->horario }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>

