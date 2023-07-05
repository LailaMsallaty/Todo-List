@extends('layouts.app')

@section('title','All Todos')
    
@section('content')
    

    
     <div class="container">
         <div class="row pt-3 justify-content-center">
             <div class="card" style="width: 50%">
                <div class="card-header text-center">
                    <h1>All Todos</h1>
                </div>
              @if (session()->has('success'))
                  <div class="alert alert-success">
                      {{session()->get('success')}}
                  </div>
              @endif
                <div class="card-body">
                    <ul class="list-group">

                        @forelse ($todos as $todo)
                            <li class="list-group-item text-muted">
                                {{$todo -> title}}
                                <span class="float-right">
                                    <a href="/todos/{{$todo->id}}/delete" style="color:#0c0c0c">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                </span>
                                
                                <span class="float-right mr-2">
                                <a href="/todos/{{$todo->id}}/edit" style="color:#ab0a0a">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                </span>
                                <span class="float-right mr-2">
                                <a href="/todos/{{$todo->id}}" style="color:#03562c">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a> 
                                </span>
                              @if (!$todo->completed)

                              <span class="float-right mr-2">
                                <a href="/todos/{{$todo->id}}/complete" style="color:#8d71e2">
                                        <i class="fa fa-check-square" aria-hidden="true"></i>
                                    </a> 
                                </span>
                                  
                              @endif

                            </li>
                            


                        @empty
                        <p class="text-center">No Users</p>

                        @endforelse
                    </ul>
                </div>
            </div>
         </div>
     </div>

 @endsection
  <script src="{{ URL::asset('app/resources/js/app.js')}}"></script>
