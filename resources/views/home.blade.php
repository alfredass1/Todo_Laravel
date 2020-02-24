@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3">
                <table class="table">
                    <thead class="thead-dark">


                    <tr>
                        <th scope="col">Tema</th>
                        <th scope="col">Prioritetas</th>
                        <th scope="col">Pridėjimo data</th>
                        <th scope="col">Statusas</th>
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
                                       Žymėti
                                    </label>
                                </div></td>
                            <td>{{$task->tema}}  </td>
                            <td>{{$task->prioritetas}}</td>
                            <td>{{$task->data}}</td>
                            <td>{{$task->statusas}}</td>
                            <td>{{$task->redaguota}}</td>

                            <td><a href="">Šalinti</a></td>
                            <td><a href="">Redaguoti</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="buton">
                    <a class="btn btn-primary" href="/prideti" role="button">Pridėti užduotį</a>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection
