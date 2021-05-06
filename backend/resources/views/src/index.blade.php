
@extends('layouts.site')

@section('content')
<p id="Formulario">FAÇA SUA INSCRIÇÃO</p>
            <section id="Formulario">
                    <p id="inscricao">
                        <strong>FAÇA SUA <br />INSCRIÇÃO! </strong>
                    </p>
                    <div id="linha">
                        <hr />
                    </div>
                    <p id="descricaoForm">
                        <br>
                        <strong>Acesse e venha fazer parte<br> da nossa ONG</strong>
                    </p>

                    <a href=""><button>Clique Aqui</button></a>

            </section>
            <h2 id="Voluntarios">Voluntários</h2>
            <br>

            <figure>
                <span class="trs next"></span>
                <span class="trs prev"></span>

                <div id="slider">
                    <a href="#" class="trs"><img src="{{ asset('dist/img/v2.jpg') }}"
                            alt="Equipe de Dentistas Valeclin"></a>
                    <a href="#" class="trs"><img src="{{ asset('dist/img/v3.jpg') }}"
                            alt="Psicóloga Lilian"></a>
                    <a href="#" class="trs inativo"><img src="{{ asset('dist/img/alunos.jpg') }}"
                            alt="Alunos no primeiro dia de aula"></a>

                </div>

                <figcaption>Legenda da imagem 1</figcaption>
            </figure>
@endsection