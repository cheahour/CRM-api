<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sales Report</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        tr {
            background-color: red;
        }

    </style>
</head>

<body>
    <table>
        <tr style="text-align: center">
            <th></th>
            <th colspan={{ $pipelines->count() }} class="heading">Pipeline Achievement</th>
            <th colspan={{ $activities->count() }} class="heading">Activities Achievement</th>
        </tr>
        <tr>
            <td>Sales Person</td>
            @foreach ($pipelines as $pipeline)
                <td>
                    {{ $pipeline->name }}
                </td>
            @endforeach
            @foreach ($activities as $activity)
                <td>
                    {{ $activity->name }}
                </td>
            @endforeach
        </tr>
        @foreach ($sales as $sale)
            <tr>
                <td>
                    {{ $sale->name }}
                </td>
                @foreach ($pipelines as $pipeline)
                    <td>
                        {{ $sale->customers()->where('pipeline_id', $pipeline->id)->whereBetween('updated_at', [$from_date, $to_date])->count() }}
                    </td>
                @endforeach
                @foreach ($activities as $activity)
                    <td>
                        {{ $sale->customers()->where('kpi_activity_id', $activity->id)->whereBetween('updated_at', [$from_date, $to_date])->count() }}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>
</body>

</html>
