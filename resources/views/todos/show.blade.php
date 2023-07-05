@extends('layouts.app')

@section('title','Todo - ' . $todo->id)
    
@section('content')

    <div class="container">
        <h1 class="mt-5 text-center">{{$todo->title}}</h1>
        <div class="row justify-content-center pt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span class="details"></span>
                        <span class="badge badge-warning float-right">
                        {{boolval($todo ->completed) ? 'Completed': 'Non Completed'}}
                        </span>
                    </div>
                   <div class="card-body">
                        {{$todo ->description}}

                   </div>
                </div>
            </div>


        </div>
    </div>

@endsection
  <script src="{{ URL::asset('app/resources/js/app.js')}}"></script>
