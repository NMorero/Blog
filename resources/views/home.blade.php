@extends('layouts.app')

@section('content')
    <main class="container d-flex justify-content-center mt-5 pt-5 bgGrey">

        <div class="col-5 row ">
            <div id="accordion" class="row col-12">
                <div class="   col-12">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <a class="btn btn-block bg-transparent collapsed"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Primer grado
                      </a>
                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse border" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <a class="btn btn-block bg-transparent border-bottom" href="/Curso/1">
                            Primer grado 'I'
                          </a>
                          <a class="btn btn-block bg-transparent" href="/Curso/2">
                            Primer grado 'N'
                          </a>
                    </div>
                  </div>
                </div>
                <div class="  col-12">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <a class="btn btn-block bg-transparent collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Segundo grado
                      </a>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse border" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <a class="btn btn-block bg-transparent border-bottom" href="/Curso/3">
                            Segundo grado 'I'
                          </a>
                          <a class="btn btn-block bg-transparent" href="/Curso/4">
                            Segundo grado 'N'
                          </a>
                    </div>
                  </div>
                </div>
                <div class="  col-12">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <a class="btn btn-block bg-transparent collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Tercer grado
                      </a>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse border" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <a class="btn btn-block bg-transparent border-bottom" href="/Curso/5">
                            Tercer grado 'I'
                          </a>
                          <a class="btn btn-block bg-transparent" href="/Curso/6">
                            Tercer grado 'N'
                          </a>
                    </div>
                  </div>
                </div>

                <div class="  col-12">
                    <div class="card-header" id="headingFour">
                      <h5 class="mb-0">
                        <a class="btn btn-block bg-transparent collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Cuarto grado
                        </a>
                      </h5>
                    </div>
                    <div id="collapseFour" class="collapse border" aria-labelledby="headingFour" data-parent="#accordion">
                      <div class="card-body">
                        <a class="btn btn-block bg-transparent border-bottom" href="/Curso/7">
                            Cuarto grado 'I'
                          </a>
                          <a class="btn btn-block bg-transparent" href="/Curso/8">
                            Cuarto grado 'N'
                          </a>
                      </div>
                    </div>
                  </div>

                  <div class="  col-12">
                    <div class="card-header" id="headingQuinto">
                      <h5 class="mb-0">
                        <a class="btn btn-block bg-transparent collapsed text-decoration-none" data-toggle="collapse" data-target="#collapseQuinto" aria-expanded="false" aria-controls="collapseQuinto">
                          Quinto grado
                        </a>
                      </h5>
                    </div>
                    <div id="collapseQuinto" class="collapse border" aria-labelledby="headingQuinto" data-parent="#accordion">
                      <div class="card-body">
                        <a class="btn btn-block bg-transparent border-bottom" href="/Curso/9">
                            Quinto grado 'I'
                          </a>
                          <a class="btn btn-block bg-transparent" href="/Curso/10">
                            Quinto grado 'N'
                          </a>
                      </div>
                    </div>
                  </div>

                  <div class="  col-12">
                    <div class="card-header" id="headingSexto">
                      <h5 class="mb-0">
                        <a class="btn btn-block bg-transparent collapsed" data-toggle="collapse" data-target="#collapseSexto" aria-expanded="false" aria-controls="collapseSexto">
                          Sexto grado
                        </a>
                      </h5>
                    </div>
                    <div id="collapseSexto" class="collapse border" aria-labelledby="headingSexto" data-parent="#accordion">
                      <div class="card-body">
                        <a class="btn btn-block bg-transparent border-bottom" href="/Curso/11">
                            Sexto grado 'I'
                          </a>
                          <a class="btn btn-block bg-transparent" href="/Curso/12">
                            Sexto grado 'N'
                          </a>
                      </div>
                    </div>
                  </div>


              </div>
        </div>
    </main>
@endsection
