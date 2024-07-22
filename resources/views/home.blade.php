@extends('layouts.app')

@section('title', 'Laravel')

@section('content')

    <main>
        <h1>TRAINS</h1>

        <table>
            <tr>
                <th>Company</th>
                <th>Train Nr.</th>
                <th>Departure Station</th>
                <th>Departure Time</th>
                <th>Arrival Station</th>
                <th>Arrival Time</th>

            </tr>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->code }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->arrival_time }}</td>
                </tr>
            @endforeach
        </table>

    </main>

@endsection
