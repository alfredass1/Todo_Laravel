@extends('todo.main')

@section('content')
@include('todo/_partials/bar')


    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-2">
                <table class="table">
                    <thead class="thead-dark">

                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Tema</th>
                        <th scope="col">Prioritetas</th>
                        <th scope="col">Data</th>
                        <th scope="col">Statusas</th>
                        <th scope="col">Progresas</th>
                        <th scope="col">Redaguota</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($tasks as $task)
                        <tr>

                            <td><div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                    </label>
                                </div></td>
                            <td>{{$task->tema}}  </td>
                            <td>{{$task->prioritetas}}</td>
                            <td>{{$task->created_at}}</td>
                            <td>{{$task->statusas}}</td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"
                                         aria-valuemin="0" aria-valuemax="100" style="width:{{$task->procentai}}%">
                                        {{$task->procentai}}%
                                    </div>
                                </div>
                            </td>
                            <td>{{$task->updated_at}}</td>


                            @auth()
                                <td><a href="/delete-task/{{$task->id}}">Šalinti</a></td>
                                <td><a href="/redaguoti/{{$task->id}}">Redaguoti</a></td>
                            @endauth
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @auth()
                <div class="buton">
                    <a class="btn btn-primary" href="/prideti" role="button">Pridėti užduotį</a>
                </div>
                @endauth
                <br>
            </div>
        </div>
    </div>
@endsection
