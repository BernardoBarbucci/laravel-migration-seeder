@extends('layout.app')

@section('main-content')
    <section class="container-fluid bg-dark py-3">
        <div class="row d-flex flex-wrap justify-content-center">
            
            @forelse ($trains as $train)
                {{-- Card per ogni treno --}}
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-header">
                        {{ $train->train_code }} - {{ $train->company }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Departure Station:</strong> {{ $train->departure_station }}
                        </li>
                        <li class="list-group-item">
                            <strong>Arrival Station:</strong> {{ $train->arrival_station }}
                        </li>
                        <li class="list-group-item">
                            <strong>Departure Time:</strong> {{ $train->departure_time }}
                        </li>
                        <li class="list-group-item">
                            <strong>Arrival Time:</strong> {{ $train->arrival_time }}
                        </li>
                        <li class="list-group-item">
                            <strong>Carriages Number:</strong> {{ $train->carriages_number }}
                        </li>
                        <li class="list-group-item">
                            <strong>On Time:</strong> {{ $train->on_time ? 'Yes' : 'No' }}
                        </li>
                        <li class="list-group-item">
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