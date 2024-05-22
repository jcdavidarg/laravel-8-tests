<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>User View</h1>
    @isset($name)       <!-- PARA BLADE SE USA CON EL @ -->
        <h2>User Name: {{ $name }}</h2> <!-- PARA IMPRIMIR VARIABLES Y EXPRESIONES -->
    @endisset

    
    <table>
        <thead>
            <tr>
                @foreach($users as $key => $value)
                    <th>{{ $key }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($users as $key => $value)
                    <td>{{ $value }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>

</body>
</html>