@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <ul>
                    @foreach ($trains as $train)
                        <li>
                            <span>
                                //company:
                                {{ $train->company }}//
                            </span>
                            <span>
                                //departure_station:
                                {{ $train->departure_station }}//
                            </span>
                            <span>
                                //arrival_station:
                                {{ $train->arrival_station }}//
                            </span>
                            <span>
                                //departure_time:
                                {{ $train->departure_time }}//
                            </span>
                            <span>
                                //arrival_time:
                                {{ $train->arrival_time }}//
                            </span>
                            <span>
                                //train_code:
                                {{ $train->train_code }}//
                            </span>
                            <span>
                                //number_of_carriages:
                                {{ $train->number_of_carriages }}//
                            </span>
                            <span>
                                //on_time:
                                {{ $train->on_time }}//
                            </span>
                            <span>
                                //deleted:
                                {{ $train->deleted }}//
                            </span>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection
