<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Attendance Sheet</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    th {
        background-color: #f2f2f2;
    }
    
    tr:hover {
        background-color: #f5f5f5;
    }
</style>

</head>

<body class="antialiased">
    <h1>Attendance Information</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Total Working Hours</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
            <tr>
                <td>{{ $attendance['employee']['name'] }}</td>
                <td>{{ $attendance['check_in'] ?: 'N/A' }}</td>
                <td>{{ $attendance['check_out'] ?: 'N/A' }}</td>
                <td>{{ $attendance['total_hours'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>