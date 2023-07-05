@extends('layouts.app')

@section('title','Edit Todo')
    
@section('content')
<div class="container pt-5">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">

           <div class="card">
                <div class="card-header text-center">
                    <h1>Edit Todo</h1>
                </div>
                <div class="card-body">
               
                    <form action="/todos/{{$todo->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text"
                                   placeholder="Enter Todo Title"
                                   name="todoTitle"
                                   class="form-control"
                                   value="{{$todo->title}}">
                               
                        </div>
                       
                     
                        @if($errors->has('todoTitle'))
                        
                         <div class="alert alert-danger">{{ $errors->first('todoTitle') }}</div>
                       
                        @endif

                        <div class="form-group">
                            <textarea 
                                      rows="3"
                                      name="todoDescription"
                                      placeholder="Enter Description For Your Todo"
                                      class="form-control">{{$todo->description}}</textarea>
                        </div>
                    
                      @if($errors->has('todoDescription'))
                     
                        <div class="alert alert-danger">{{ $errors->first('todoDescription') }}</div>
                    
                      @endif

                        <div class="form-group text-center">
                            <button type="submit"
                                    class="btn btn-success "
                                    style="width:40%">Update</button>
                        </div>
                    </form>
                </div>
           </div>
        </div>
    </div>
</div>   
@endsection