@extends('layout.app')

@section('main-content')
    <section class="container-fluid bg-dark">
        <div class="d-flex flex-wrap justify-content-center">
            @forelse ($trains as $train)
            {{-- Card per ogni treno --}}
            <div class="card m-2 bg-danger" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-danger">
                        <strong>Train code:</strong> {{ $train->train_code }}
                    </li>
                    <li class="list-group-item bg-light">
                        <strong>Train code:</strong> {{ $train->train_code }}
                    </li>
                    <li class="list-group-item bg-light">
                        <strong>Train company:</strong> {{ $train->company }}
                    </li>
                    <li class="list-group-item bg-light">
                        <strong>Arrival Station:</strong> {{ $train->arrival_station }}
                    </li>
                    <li class="list-group-item bg-light">
                        <strong>Departure Time:</strong> {{ $train->departure_time }}
                    </li>
                    <li class="list-group-item bg-light">
                        <strong>Arrival Time:</strong> {{ $train->arrival_time }}
                    </li>
                    <li class="list-group-item bg-light">
                        <strong>Carriages Number:</strong> {{ $train->carriages_number }}
                    </li>
                    <li class="list-group-item bg-light">
                        <strong>On Time:</strong> {{ $train->on_time ? 'Yes' : 'No' }}
                    </li>
                    <li class="list-group-item bg-light">
                        <strong>Canceled:</strong> {{ $train->canceled ? 'Yes' : 'No' }}
                    </li>
                </ul>
            </div>
            @empty
                <div class="alert alert-info m-2" role="alert">
                    No trains found in the database.
                </div>
            @endforelse
        </div>
    </section>
@endsection