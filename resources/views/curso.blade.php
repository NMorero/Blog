@extends('layouts.app')

@section('content')
    <main class="container mt-5">
        <div class="col-3 text-center mb-5">
            <h4 class="rounded ">{{$cur->nombre_curso}}</h4>
        </div>
        <div class="col-12 text-right">
            @if ()
            <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                Nuevo post
            </button>
            @endif
            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo posteo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="/Curso/upload/{{$id}}" id="upload" method="POST" enctype="multipart/form-data">
                                @csrf



                                <div class="input-group mb-3">

                                    <input type="text" name="titulo" class="form-control" placeholder="Titulo" aria-label="titulo" aria-describedby="basic-addon1">
                                  </div>
                                  <div class="input-group">

                                    <textarea class="form-control" name="mensaje" aria-label="With textarea" placeholder="Mensaje"></textarea>
                                  </div>
                                  <div class="input-group mt-2">
                                    <input  type="file" name="file[]" multiple>

                                  </div>


                                  <button class="btn btn-info" type="submit">Enviar</button>
                            </form>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                    </div>
                </div>
        </div>
        @foreach ($posts as $post)
            <div class="row col-12 border-bottom mb-5 pb-4">
                <h6 class="text-center col-12">{{$post->titulo}}</h6>
                <p class="col-12 mensajePost">{{$post->mensaje}}</p>

                @if (isset($post['files']) && !empty($post['files']) && count($post['files']) > 0)
                    <h6 class="col-12 text-center">Archivos</h6>
                    <div class="col-12 row justify-content-center d-flex mt-3">
                        @foreach ($post['files'] as $file)
                            <div class="col-3 text-center">
                                <p>{{$file->nombre}}</p>
                                <a href="/Download/{{$file->id}}" class="btn btn-info">Download</a>
                            </div>
                        @endforeach
                    </div>
                @endif


            </div>
        @endforeach
    </main>
@endsection


@section('scripts')

@endsection
