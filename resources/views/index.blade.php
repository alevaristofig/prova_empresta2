<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>       
        <div class="flex-center position-ref full-height">              
            <form class="" name="form_simulacao" action="{{route('simulacao.emprestimo')}}" method="POST">
                @csrf
                <div class="content">
                    <div class="row" style="margin-bottom:30px;">
                        @if(count($errors) > 0)
                           <div>
                               @foreach($errors->all() AS $error)
                                   <li>{{$error}}</li>
                               @endforeach
                           </div>   
                       @endif
                   </div>
                    <div class="row">
                        <label>Valor Empréstimo: R$</label>
                        <input type="number" id="valor_emprestimo" name="valor_emprestimo" value="{{old('valor_emprestimo')}}" />
                    </div>                    
                    <div class="row">
                        <label>Instituição:</label>
                        <select name="instituicao" id="instituicao">
                            <option>Escolha um Instituição</option>
                        </select>
                    </div>
                    <div class="row">
                        <label>Convênios:</label>
                        <select name="convenio" id="convenio" disabled>
                            <option>Escolha um Convênio</option>
                        </select>
                    </div>
                    <div class="row">
                        <label>Parcela:</label>
                        <select name="parcela" id="parcela" disabled>
                            <option>Escolha uma Parcela</option>
                        </select>
                    </div>
                    <div class="row">
                        <input type="submit" name="Enviar" />
                    </div>
                </div>
            </form>
        </div>
        
        <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>  
        <script src="{{asset('js/simulacao.js')}}"></script>
    </body>
</html>

