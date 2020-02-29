@extends('layer')

@section('header')
	<div class="app-header header d-flex">
		<div class="container-fluid">
			<div class="d-flex">
			    <a class="header-brand" href="/" style="width:100%;text-align:center">
					<img src="{{ asset('images/logo.png') }}" class="header-brand-img main-logo" alt="Hogo logo">
					<img src="{{ asset('images/logo.png') }}" class="header-brand-img icon-logo" alt="Hogo logo">
					<span class='logo-name'>Регистрация на пробное тестирование</span>
				</a>
				<div class="d-flex order-lg-2 ml-auto header-rightmenu"></div>
			</div>
		</div>
	</div> 
@endsection

@section('content')
    <div class="my-3 my-md-5 toggle-content">
        <div class="side-app">
            <div class="page-header"></div><div class="page-header"></div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action='' method='POST' name="regtrial" id="regTrial">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12"> 
                                        <div class='row mb-3'>
                                            <div class='col-md-4 mb-2'>
												<label class="form-label">Фамилия</label>
												<input type="text" class="form-control" name="famil" id="famil" placeholder="" >
											</div> 
											<div class='col-md-4 mb-2'>
												<label class="form-label">Имя</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="" >
											</div> 
											<div class='col-md-4 mb-2'>
												<label class="form-label">Отчество</label>
												<input type="text" class="form-control" name="otch" id="otch" placeholder="" >
											</div>
                                            <div class='col-md-12 mt-2'>
                                                <label class="form-label">Место учебы</label>
                                                <input type="text" class="form-control" name="example-text-input-valid" placeholder="">
                                            </div> 													
                                        </div>												 
                                    </div>	
                                    <div class="col-md-12"> 
                                        <div class='row m-5'>
                                            <div class='col-md-12'>
                                                <div class="custom-controls-stacked custom-center">
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
                                                        <span class="custom-control-label">на базе 11 классов</span>
                                                    </label>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="example-radios" value="option2">
                                                        <span class="custom-control-label">на базе СПО</span>
                                                    </label> 
                                                </div>	
                                            </div>											
                                        </div>												 
                                    </div>										
                                </div>
                                <div class="row text-center">
                                    <div class='col-md-12'>
                                        <h4 style='width: 100%;color: #524c96'>Выберите предметы для тестрования и желаемое время</h4>
                                    </div>
                                    <div class='col-md-12 text-danger'>
                                        <h6>
                                            
                                                <p><b>Уважаемые абитуриенты!<br>
                                                При выборе времени для прохождения тестирования учитывайте, что на прохождение первого теста отводится один час.
                                                Поэтому рекомендуем Вам выбирать последовательно. (Например, время прохождения первого теста Вы выбрали на 9.00.<br>
                                                Соответственно время для второго теста рекомендуем выбрать на 10.00 )</b></p>
                                            
                                        </h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-6"> 
                                        <div class='row mb-3'>
                                            <div class='col-md-12 mb-2'>
                                                <label class="form-label">1-й тест</label>
                                                <select class='form-control'>
                                                    <option>1-й предмет</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                </select>
                                            </div> 
                                            <div class='col-md-12 mb-2'>
                                                <label class="form-label">2-й тест</label>
                                                <select class='form-control'>
                                                    <option>2-й предмет</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                </select>
                                            </div>  
                                        </div>												 
                                    </div>
                                    <div class="col-md-6 col-6"> 
                                        <div class='row mb-3'>
                                            <div class='col-md-12 mb-2'>
                                                <label class="form-label">Время</label>
                                                <select class='form-control'>
                                                    <option>Время начала тестирования</option>
                                                    <option>9:00</option>
                                                    <option>10:00</option>
                                                </select>
                                            </div> 
                                            <div class='col-md-12 mb-2'>
                                                <label class="form-label">Время</label>
                                                <select class='form-control'>
                                                    <option>Время начала тестирования</option>
                                                    <option>9:00</option>
                                                    <option>10:00</option>
                                                </select>
                                            </div>  
                                        </div>												 
                                    </div>
                                    <div class="col-md-12"> 
                                        <div class='row m-5'>
                                            <div class='col-md-4'></div>
                                            <div class='col-md-5'>
                                                <div class="custom-controls-stacked custom-center">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">Требуется общежитие</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>	
                        <div class='text-center mb-5'>
                            <button type='button' class='btn btn-success' onclick="reg()">Регистрация</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-12 col-sm-12   text-center">
                        © {{ date('Y', time()) }} <a href="{{ url("/") }}">ЛНУ имени Тараса Шевченко</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection

@section('includeScripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/accordion.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/jquery.sweet-modal.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert4.min.js') }}"></script>
    <script>
        function reg() {
            Swal.fire({
              title: '',				  
              showCloseButton: false,  
              html:
                '<div class="row">'+
                    '<div class="col-md-12 mb-2"><b>Вы успешно зарегистрировались на ПРОБНОЕ ТЕСТИРОВАНИЕ:</b></div>'+
                    '<div class="col-md-12 mb-2" style="font-size:14px"><b>Для участия в пробном тестировании Вам потребуется:</b></div>'+
                '</div>'+
                '<div class="row">'+				    	
                    '<div class="col-md-12 mb-2" style="text-align: justify; line-height: 16px; font-size: 13px;"><ol>'+
                    '<li><b>Скачать и распечатать</b> "Экзаменационный лист", в котором указаны Ваши данные и <b>персональный PIN</b>. Без "Экзаменационного листа" Вас <b>не допустят к тестированию.</b></li>'+
                    '<li class="mt-2"><b>Прийти</b> для подтверждения регистрации на пробное тестирование, которое будет проходить <b>26.06.2020</b>, по адресу г. Луганск,  ул. Оборонная 2: учебный корпус №2 , 2-й этаж, каб. 270</li>'+
                    '<li class="mt-2">Провести хорошо время</li></ol></div>'+ 
                '</div>'+
                '<div class="row">'+
                '<div class="col-md-4"><button class="btn btn-primary">Открыть</button></div>'+
                '<div class="col-md-4"><button class="btn btn-primary">Скачать</button></div>'+
                '<div class="col-md-4"><button class="btn btn-primary" onclick="Swal.close()">Отмена</button></div>'+
                '</div>'+
                '</div>',
              showCancelButton: false,
              showConfirmButton: false,
              focusConfirm: false,
              cancelButtonText: 'Отмена',
              confirmButtonText:'Отправить',			   
            });
        }
    </script>
@endsection

@section('includeStyles')
    <title>Личный кабинет</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('fonts/fonts/font-awesome.min.css') }}" rel="stylesheet">	
    <style>
        body {
            overflow: hidden;
        }
        .custom-center{
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
@endsection