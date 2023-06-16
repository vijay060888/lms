<html>
<head>
    <title>Holiday List</title>
</head>
<body>
    <h1>Holiday List</h1>

    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Holiday</th>
            </tr>
        </thead>
        <tbody>
            @foreach($holidays as $holiday)
                <tr>
                    <td>{{ $holiday->holiday_date }}</td>
                    <td>{{ $holiday->holidays }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
