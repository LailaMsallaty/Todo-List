@extends('layouts.app')

@section('title','Create Todo')
    
@section('content')
<div class="container pt-5">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">

           <div class="card">
                <div class="card-header text-center">
                    <h1>Create Todo</h1>
                </div>
                <div class="card-body">
                {{--   @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                   @endif
                 --}}
                    <form action="/create" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text"
                                   placeholder="Enter Todo Title"
                                   name="todoTitle"
                                   class="form-control"
                                   value="{{old('todoTitle')}}">
                               
                        </div>
                       
                     
                        @if($errors->has('todoTitle'))
                        
                         <div class="alert alert-danger">{{ $errors->first('todoTitle') }}</div>
                       
                        @endif

                        <div class="form-group">
                            <textarea 
                                      rows="3"
                                      name="todoDescription"
                                      placeholder="Enter Description For Your Todo"
                                      class="form-control"
                                      value="{{old('todoDescription')}}"></textarea>
                        </div>
                    
                      @if($errors->has('todoDescription'))
                     
                        <div class="alert alert-danger">{{ $errors->first('todoDescription') }}</div>
                    
                      @endif

                        <div class="form-group text-center">
                            <button type="submit"
                                    class="btn btn-success "
                                    style="width:40%">Create Todo</button>
                        </div>
                    </form>
                </div>
           </div>
        </div>
    </div>
</div>   
@endsection