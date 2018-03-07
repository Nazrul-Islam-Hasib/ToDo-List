    <!--laravel syntax for get all the style from a general layout-->
    @extends('layout')


    <!--laravel syntax for get all the content from a general layout-->
    @section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('todos.save', ['id' => $todo->id ]) }}" method="post">

                    <!--Always write this token,when we use post-->
                    {{ csrf_field() }}

                    <input type="text" class="form-control input-lg inputBar" name="todo" value="{{ $todo->todo }}" placeholder="Create a new ToDo">
                </form>
            </div>
        </div>
    </div>


    <!--laravel syntax for get all the style from a general layout-->
    @stop