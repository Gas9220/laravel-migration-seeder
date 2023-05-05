@extends('layouts.app')

@section('page.main')
<section class="p-2">
<h2>All trains</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Train ID</th>
                <th scope="col">Train Code</th>
                <th scope="col">Wagons</th>
                <th scope="col">Company</th>
                <th scope="col">Departure Station</th>
                <th scope="col">Arrival Station</th>
                <th scope="col">Departure Date time</th>
                <th scope="col">Arrival Date time</th>
                <th scope="col">In time?</th>
                <th scope="col">Cancelled?</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <th scope="row">{{ $train['id']}}</th>
                    <td>{{ $train['train_code']}}</td>
                    <td>{{ $train['wagons']}}</td>
                    <td>{{ $train['company']}}</td>
                    <td>{{ ucfirst($train['departure_station']) }}</td>
                    <td>{{ ucfirst($train['arrival_station']) }}</td>
                    <td>{{ $train['departure_time']}}</td>
                    <td>{{ $train['arrival_time']}}</td>
                    <td>{{ $train['in_time'] == 0 ? 'No' : 'Yes' }}</td>
                    <td>{{ $train['cancelled'] == 0 ? 'No' : 'Yes'  }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
<section class="p-2">
    <h2>Today</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Train ID</th>
                <th scope="col">Train Code</th>
                <th scope="col">Wagons</th>
                <th scope="col">Company</th>
                <th scope="col">Departure Station</th>
                <th scope="col">Arrival Station</th>
                <th scope="col">Departure Date time</th>
                <th scope="col">Arrival Date time</th>
                <th scope="col">In time?</th>
                <th scope="col">Cancelled?</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todayTrains as $todayTrain)
                <tr>
                    <th scope="row">{{ $todayTrain['id']}}</th>
                    <td>{{ $todayTrain['train_code']}}</td>
                    <td>{{ $todayTrain['wagons']}}</td>
                    <td>{{ $todayTrain['company']}}</td>
                    <td>{{ ucfirst($todayTrain['departure_station']) }}</td>
                    <td>{{ ucfirst($todayTrain['arrival_station']) }}</td>
                    <td>{{ $todayTrain['departure_time']}}</td>
                    <td>{{ $todayTrain['arrival_time']}}</td>
                    <td>{{ $todayTrain['in_time'] == 0 ? 'No' : 'Yes' }}</td>
                    <td>{{ $todayTrain['cancelled'] == 0 ? 'No' : 'Yes' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>  
</section>
@endsection
