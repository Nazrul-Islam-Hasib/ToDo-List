    <!--laravel syntax for get all the style from a general layout-->
    @extends('layout')


    <!--laravel syntax for get all the content from a general layout-->
    @section('content')
    
    <h1>Welcome to Laravel</h1>
    
    <!--here /todos refers to the routes->web.php-->
    <a href="/todos">Visit my ToDos page</a>

    <!--laravel syntax for get all the style from a general layout-->
    @stop