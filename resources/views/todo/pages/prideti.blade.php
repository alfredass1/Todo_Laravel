@extends('layouts.app')
@section('content')
<div class="site-section bg-light">
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/store-task" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-7 mb-5"  data-aos="fade">

                    <h2 class="mb-5 text-black">Pridėkite užduotį</h2>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Tema</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-area" for="subject">Prioritetas</label>
                            <select class="form-control" name="priority">
                            <option>Aukštas</option>
                            <option>Vidutinis</option>
                            <option>Žemas</option>
                            </select>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">data</label>
                            <input type="number" id="price" name="data" class="form-control">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Statusas</label>
                            <select class="form-control" name="status">
                                <option>Baigtas</option>
                                <option>Vykdomas</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Redaguota</label>
                            <input type="number" id="location" name="edited" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Pridėti" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>

</div>
@endsection