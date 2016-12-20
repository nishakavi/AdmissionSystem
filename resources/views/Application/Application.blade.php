@extends('layout.default')
@section('content')
    <h1>DATABASE PROJECT - APPLICATION</h1>
    WELCOME PAGE

    <div class="col-lg-4 col-sm-4">
        <table>
            @foreach($routes as $arrival)
                {{$arrival->ApplicationId}}
                <tr>
                    {{$arrival->DistrictCode}}
                </tr>
            @endforeach
        </table>
    </div>
@stop