@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <ul>
                    @foreach ($trains as $train)
                        <li>
                            {{ $train->Corporation }}
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection
