<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Inserir despesa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link href="{{asset('assets/images/favicon.png')}}" rel="icon" type="image/png"/>
<!--===============================================================================================-->
	<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
	<link href="{{asset('fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
	<link href="{{asset('fonts/material-design-iconic-font.min.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
    <link href="{{asset('vendor/animate/animate.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
    <link href="{{asset('vendor/animsition/css/animsition.min.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
    <link href="{{asset('vendor/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->
    <link href="{{asset('css/util.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css"/>
<!--===============================================================================================-->

@include('layout.fonts')
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url({{asset('images/bg-01.jpg')}});">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

                <span class="login100-form-title p-b-49">
                    <h3>{{ isset($despesa) ? 'Editar' : 'Inserir' }} Despesa</h3>
                </span>

				<form class="login100-form validate-form" action="{{ isset($despesa) ? route('user.update.despesa',['id'=>$despesa->id]) : route('user.insert.despesa') }}" method="POST">
                    @csrf

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "O nome despesa é obrigatório">
                        <span class="label-input100 ">Descrição da despesa</span>
                        <input id="desc" class="input100" name="desc" type="text" placeholder="Insira a descrição da despesa" value="{{ isset($despesa) ? $despesa->desc : '' }}">
                    </div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "O valor da despesa é obrigatório">
						<span class="label-input100 ">Valor</span>
						<input id="value" class="input100" type="text " name="value" placeholder="Insira o valor da despesa" value="{{ isset($despesa) ? $despesa->value : '' }}">
					</div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "O tipo é obrigatório">
						<span class="label-input100 ">Despesa fixa?</span>
                        <select  name="fixed" id="fixed">
                            <option value="1" {{ isset($despesa) && $despesa->fixed == 1 ? 'selected' : ''}}>Sim</option>
                            <option value="0" {{ isset($despesa) && $despesa->fixed == 0 ? 'selected' : ''}}>Não</option>
                        </select>
					</div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "A data inicial é obrigatória">
                    <span class="label-input100 "  for="ini_date">Data Inicial</span>
                    <input id="ini_date" class="date input100" type="text " name="ini_date" class="" data-mask="00/00/0000" maxlength="10" value="{{ isset($despesa) ? $despesa->ini_date : '' }}">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100" for="deadline">Prazo</span>
						<select  name="deadline" id="deadline">
                            @foreach($deadlines as $dl)
                            <option value="{{$dl->id}}" {{ isset($despesa) && $despesa->deadline == $dl->id ? 'selected' : ''}}>{{$dl->desc}}</option>
                            @endforeach
                        </select>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100" for="type">Categoria</span>
						<select  name="type" id="type">
                            @foreach($types as $tp)
                            <option value="{{$tp->id}}" {{ isset($despesa) && $despesa->type == $tp->id ? 'selected' : ''}}>{{$tp->desc}}</option>
                            @endforeach
                        </select>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100" for="relevance">Relevância</span>
						<select  name="relevance" id="relevance">
                            @foreach($relevances as $rl)
                            <option value="{{$rl->id}}" {{ isset($despesa) && $despesa->relevance == $rl->id ? 'selected' : ''}}>{{$rl->desc}}</option>
                            @endforeach
                        </select>
					</div>
                    <br>
                    <br>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>

							<button class="login100-form-btn"  type="submit" >
								Enviar
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--===============================================================================================-->
    <script src="js/jquery.mask.js"></script>

</body>
</html>

