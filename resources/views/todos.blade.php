    <!--laravel syntax for get all the style from a general layout-->
    @extends('layout')


    <!--laravel syntax for get all the content from a general layout-->
    @section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="/create/todo" method="post">

                    <!--Always write this token,when we use post-->
                    {{ csrf_field() }}

                    <input type="text" class="form-control input-lg inputBar" name="todo" placeholder="Create a new ToDo">
                </form>
            </div>
        </div>
    </div>
    <!--laravel syntax for foreach & echo starts-->

        @foreach($todos as $todo)
            {{ $todo->todo }} 

    <!--for delete purpose,here route() is global method with 2 field, 1st name of the route,2nd parameter of the route-->

            <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">x</a>

            <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info">Update</a>

            @if(!$todo->completed)

            <a href="{{ route('todos.completed', ['id' => $todo->id]) }}" class="btn btn-xs btn-success">Mark as completed</a>

            @else

            <span class="text-success">Completed!</span>

            @endif

            <hr>
        @endforeach
                    
    <!--laravel syntax for foreach & echo ends-->


    <!--laravel syntax for get all the style from a general layout-->
    @stop