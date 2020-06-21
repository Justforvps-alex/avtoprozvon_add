<?php
session_start();
$id="2950";
$_SESSION['user_id']=$id;
require ("sidebar.html");

	if($_POST['check'])
	{
		$base_type = $_POST['base_type'];
		$audio_type = $_POST['audio_type'];
		//base_type
		if($base_type=='b1')
		{
			$phones=$_POST['pre_phones'];
		}
		if($base_type=='b2')
		{
			$phones=$_POST['phones_buffer'];
		}
		if($base_type=='b3')
		{
			
		}
		if($base_type=='b4')
		{
			
		}
		//audio_type
		if($audio_type=='e1')
		{
			
		}
		if($audio_type=='e2')
		{
			
		}
		if($audio_type=='e3')
		{
			
		}
		echo $base_type.$audio_type;
}
?>
<style type="text/css">
audio{
	width:100%;
	margin-top:10px;
}
table {border: 1px solid #6cf;}
th {
  font-weight: normal;
  font-size: 13px;
  color: #039;
  text-transform: uppercase;
  border-right: 1px solid #0865c2;
  border-top: 1px solid #0865c2;
  border-left: 1px solid #0865c2;
  border-bottom: 1px solid #fff;
  padding: 20px;
}
td {
  color: #669;
  border-right: 1px dashed #6cf;
  padding: 10px 20px;
}

.main_input_file {
	display: none;
}


.upload_form div {
	width: 100px;
	height: 32px;
	background: #007bff;
	border-radius: 4px;
	color: #fff;
	text-align: center;
	line-height: 32px;
	font-family: arial;
	font-size:14px;
	display: inline-block;
	vertical-align: top;
}

.upload_form div:hover {
	background: #0069d9;
	cursor: pointer;
}

#f_name {
	background: transparent;
	border: 0;
	display: inline-block;
	vertical-align: top;
	height: 30px;
	padding: 0 8px;
	width: 150px;
}


.main_input_file_audio {
	display: none;
}


.upload_form_audio div {
	width: 100px;
	height: 32px;
	background: #007bff;
	border-radius: 4px;
	color: #fff;
	text-align: center;
	line-height: 32px;
	font-family: arial;
	font-size:14px;
	display: inline-block;
	vertical-align: top;
}

.upload_form_audio div:hover {
	background: #0069d9;
	cursor: pointer;
}

#f_name_audio {
	background: transparent;
	border: 0;
	display: inline-block;
	vertical-align: top;
	height: 30px;
	padding: 0 8px;
	width: 150px;
}


@media (max-width: 546px){
.btn-group{
	flex-direction: column !important;
}
.btn{
	width:100% !important;
	margin-top:5px !important;
}
}
</style>
</head>

<body>

 

<div class="container ">
<div class="row  ">

<div class="col-md border border-primary">
<div style="margin-bottom:15px;">
<div style="margin-bottom:15px; text-align:center">
	<h3 id="base_header" >На какие номера будем звонить?</h3>
	<p style="margin-bottom:15px;"  id="base_header_help" for="base_header">Определите Вашу целевую аудиторию на одном из сайтов (Юла, Авито, 2Gis) или добавьте готовую базу.</p>
</div>




<h5 style="margin-bottom:15px; text-align:center">Источник номеров для прозвона:</h5>
<div class="btn-group btn-group-toggle" data-toggle="buttons" style="margin-bottom:30px; display: flex; align-items: center; justify-content: center;" >
<input  style="width:25%" id="b1" type="button" value="Файл" class="btn btn-primary" onClick="base_type('r1', 'b1')"> 
<input  style="width:25%" id="b2" type="button" value="Ручной ввод" class="btn btn-outline-primary " onClick="base_type('r2', 'b2')"> 
<input  style="width:25%" id="b3" type="button" value="Парсинг" class="btn btn-outline-primary" onClick="base_type('r3', 'b3')"> 
<input  style="width:25%" id="b4" type="button" value="База" class="btn btn-outline-primary " onClick="base_type('r4', 'b4')"> 
</div>






<div id="r1">
	<form name="uploader_base" id="uploader_base" enctype="multipart/form-data" method="POST">
	<div class="upload_form">
	<label>
		<input name="userfile" type="file" class="main_input_file" accept=".csv, .xls, .xlsx, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"  />
		<div>Обзор...</div>
		<input class="f_name" type="text" id="f_name" value="Файл не выбран." disabled />
		<small for="f_name" id="fileHelp" class="form-text text-muted">База номеров должна быть в формате XLS, XLSX, CSV</small>
	</label>
	</div>	
</form>
<div id="pre_text" style="display:none;">		
<label for="pre_watch">Предпросмотр</label>
<textarea name="pre_phones" class="form-control" id="pre_watch" rows="3"></textarea>
</div>	
</div>
	  

	  

	






 
	<div id="r2" style="display:none;">
		<div class="form-group">
			<label for="phones_buffer">Вставьте номера из буфера:</label>
			<textarea name="phones_buffer" class="form-control" id="phones_buffer" rows="3"></textarea>
			<small for="phones_buffer" id="phones_help_buffer" class="form-text text-muted">Номера должны располагаться по одному в строке!</small>
		</div>
	</div>

<div id="r3" style="display:none;width:100%;">


<div class="form-group">
    <select class="custom-select" id="select_platform">
      <option value="avi">Авито</option>
      <option value="ula" >Юла</option>
      <option value="2gis">2gis</option>
    </select>
</div>

<div id="avi">
	<div class="form-group">
      <label for="avito_href">Ссылка на Авито</label>
      <input type="text" class="form-control" id="avito_href" aria-describedby="avitoHelp" placeholder="https://www.avito.ru/ekaterinburg/bytovaya_elektronika">
      <small style="margin-bottom:10px;" id="avitoHelp" class="form-text text-muted">Скопируйте ссылку из адресной строки браузера на <a href="https://avito.ru">avito.ru</a></small>
	  
	  <input type="number" class="form-control" id="avi_number" aria-describedby="aviNumber" placeholder="10-4000">
      <small style="margin-bottom:10px;" id="aviNumber" class="form-text text-muted">Лимит объявлений (если Вы хотите пропарсить от 10 до 4000 контактов. Если всю рубрику, оставьте поле пустым)</small>



    </div>
</div>

<div id="ula" style="display:none;">
	<div class="form-group">
      <label for="ula_href">Ссылка на Юлу</label>
      <input type="text" class="form-control" id="ula_href" aria-describedby="ulaHelp" placeholder="https://youla.ru/ekaterinburg/smartfony-planshety">
      <small style="margin-bottom:10px;" id="ulaHelp" class="form-text text-muted">Скопируйте ссылку из адресной строки браузера на <a href="https://youla.ru">youla.ru</a></small>
	  
	  <input type="number" class="form-control" id="ula_number" aria-describedby="ulaNumber" placeholder="10-4000">
      <small style="margin-bottom:10px;" id="ulaNumber" class="form-text text-muted">Лимит объявлений (если Вы хотите пропарсить от 10 до 4000 контактов. Если всю рубрику, оставьте поле пустым)</small>


    </div>
</div>
<div id="2gis" style="display:none;">
	<div class="form-group">
      <label for="ula_href">Ссылка на 2Гис</label>
      <input type="text" class="form-control" id="2gis_href" aria-describedby="2gisHelp" placeholder="https://2gis.ru/ekaterinburg/search/Продукты">
      <small style="margin-bottom:10px;" id="2gisHelp" class="form-text text-muted">Скопируйте ссылку из адресной строки браузера на <a href="https://2gis.ru">2gis.ru</a></small>
	  
	  
	  <input type="number" class="form-control" id="2gis_number" aria-describedby="2gisNumber" placeholder="10-4000">
      <small style="margin-bottom:10px;" id="2gisNumber" class="form-text text-muted">Лимит объявлений (если Вы хотите пропарсить от 10 до 4000 контактов. Если всю рубрику, оставьте поле пустым)</small>
    </div>
</div>
</div>




<div id="r4" style="display:none;">
	<div class="form-group">
    <select class="custom-select" id="">
      <option value="">Выбор базы</option>
    </select>
</div>

</div>


</div>
</div>
<div class="col-md border border-primary">
<div style="margin-bottom:15px;">
<div style="margin-bottom:15px; text-align:center">
	<h3 id="audio_header" >Создание аудиоролика</h3>
	<p id="audio_header_help" for="audio_header">Созданный аудиоролик будет проигрываться во время звонка. Аудиоролики с музыкальным фоном имеют низкое качество.</p>
</div>

<h5 style="margin-bottom:15px; text-align:center">Источник аудиоролика для рассылки:</h5>
<div style="margin-bottom:30px;">
<div id="byttons_audio" class="class_for_min btn-group btn-group-toggle" data-toggle="buttons" style="display: flex; align-items: center; justify-content: center;">
<input  style="width:25%" id="e1" type="button" value="Текст" class="btn btn-primary" onClick="audio_type('d1', 'e1')"> 
<input  style="width:25%" id="e2" type="button" value="Микрофон" class="btn btn-outline-primary" onClick="audio_type('d2', 'e2')"> 
<input  style="width:25%" id="e3" type="button" value="Аудиофайл" class="btn btn-outline-primary" onClick="audio_type('d3', 'e3')"> 
<input  style="width:25%" id="e4" type="button" value="Сохраненные" class="btn btn-outline-primary" onClick="audio_type('d4', 'e4')"> 
</div>
<p style="display:none;" id="formats" for="byttons_audio"  >Вы можете записать аудиоролик с помощью микрофона на Вашем компьютере</p>
</div>


<div id="d1">
	<div class="form-group">
			<label for="text_record">Введите текст аудиоролика:</label>
			<textarea name="phones_buffer" class="form-control" id="text_record" rows="3"></textarea>
			<small for="text_record" id="text_record_help" class="form-text text-muted">Выберите, каким голосом (мужским или женским) озвучить текста аудиоролика</small>
			<div class="form-group">
				<div class="custom-control custom-radio">
				<input type="radio" value="man" id="mans_voice" name="sex_voice" class="custom-control-input" checked="">
				<label class="custom-control-label" for="mans_voice">Мужской</label>
			</div>
			<div class="custom-control custom-radio">
				<input type="radio" value="woman" id="womans_voice" name="sex_voice" class="custom-control-input">
				<label class="custom-control-label" for="womans_voice">Женский</label>  
			</div>
			</div>
			
			<input  type="button" value="Прослушать" class="btn btn-outline-primary " onClick="pre_listen_text()"> 
	</div>

</div>


<div id="d2" style="display:none;">

<div id="controls">
  	 <button class="btn btn-primary" id="recordButton" onclick="change_butt('recordButton');">Начать запись</button>
  	 <button class="btn btn-primary" id="pauseButton" style="display:none;">Pause</button>
  	 <button class="btn btn-primary" id="stopButton" onclick="change_butt('stopButton');" style="display:none;">Закончить запись</button>
</div>

<div id="audio_div" class="audio_div" style="display:none;">
    <audio  class='audio_test' id="test_audio_controls" controls="true">
    <source src="">
    </audio>
</div>
</div>


<div id="d3" style="display:none;">

<form name="uploader_base_audio" id="uploader_base_audio" enctype="multipart/form-data" method="POST">
	<div class="upload_form" >
	<label>
		<input name="audiofile" type="file" class="main_input_file_audio" accept="audio/*"  />
		<div>Обзор...</div>
		<input class="f_name_audio" type="text" id="f_name_audio" value="Файл не выбран." disabled />
		<small for="f_name_audio" id="fileHelp" class="form-text text-muted">Аудиоролик должен быть в формате .mp3 .wav .ogg</small>
	</label>
	</div>	
</form>


<div class="audio_table" id="audio_table" style="display:none;">
	<audio  class='pre_audio' id="pre_audio" controls="true">
		<source id="source" src="">
	</audio>

</div>

</div>


<div id="d4" style="display:none;">

<div class="form-group">
    <select class="custom-select" id="">
      <option value="">Выбор аудио</option>
    </select>
</div>

</div>
</div>
<!-- Скрытые переменные-->
<input type="hidden" id="audio_name" name="audio_name" value=""/>

<input type="hidden" id="base_type" name="base_type" value=""/>
<input type="hidden" id="parse_name" name="parse_name" value=""/>

<input type="hidden" id="audio_type" name="audio_type" value=""/>
<input type="hidden" id="record_path" name="record_path" value=""/>
<input type="hidden" id="load_path" name="load_path" value=""/>
<!-- Скрытые переменные-->

</div>
</div>

<input style="margin-top:10px" type="submit" class="btn btn-primary btn-lg btn-block" name="check" value="check" form="form1" >

</div>


  
  
  
  
  
  
  
  
<!-- Изменение вывода-->
<script type="text/javascript">
function base_type(myid, myb){
	document.getElementById('r1').style.display = "none";
	document.getElementById('r2').style.display = "none";
	document.getElementById('r3').style.display = "none";
	document.getElementById('r4').style.display = "none";
	document.getElementById('b1').className  = "btn  btn-outline-primary";
	document.getElementById('b2').className  = "btn  btn-outline-primary";
	document.getElementById('b3').className  = "btn  btn-outline-primary";
	document.getElementById('b4').className  = "btn  btn-outline-primary";
	document.getElementById(myid).style.display = "block";
	document.getElementById(myb).className  = "btn btn-primary";
	document.getElementById('base_type').value = myb;
};
function audio_type(myid, myb){
	document.getElementById('d1').style.display = "none";
	document.getElementById('d2').style.display = "none";
	document.getElementById('d3').style.display = "none";
	document.getElementById('d4').style.display = "none";
	
	document.getElementById('formats').style.display = "none";
	
	document.getElementById('e1').className  = "btn  btn-outline-primary";
	document.getElementById('e2').className  = "btn  btn-outline-primary";
	document.getElementById('e3').className  = "btn  btn-outline-primary";
	document.getElementById('e4').className  = "btn  btn-outline-primary";
	
	if(myid=="d2"){
		document.getElementById('formats').style.display = "block";
	}
	
	document.getElementById(myid).style.display = "block";
	document.getElementById(myb).className  = "btn btn-primary";
	document.getElementById('audio_type').value = myb;
};

document.querySelector('#select_platform').onchange = function() {
	document.getElementById('avi').style.display = "none";
	document.getElementById('ula').style.display = "none";
	document.getElementById('2gis').style.display = "none";
	

	myid=document.getElementById('select_platform').value;
	document.getElementById(myid).style.display = "block";
	document.getElementById('parse_name').value = myid;
	
}

</SCRIPT>



<!-- Загрузка файла -->
<script type="text/javascript">
//var name=document.getElementById('phones_buffer').value;
function pre_listen_text(){
	var text = jQuery('#text_record_help').val();
	
}
function upload_audio_file(){		

	//document.getElementById('pre_watch').value = "Загрузка...";
		//document.getElementById('pre_text').style.display = "block";
        var formData = new FormData($('#uploader_base_audio')[0]);
		
        $.ajax({
            url: 'add_audio_from_file.php',
            type: "POST",
            data: formData,
            async: false,
            success: function (msg) {
			jQuery('.audio_table p').remove();
			jQuery('.audio_table audio').remove();
			jQuery('.audio_table').append(function(){  //Добавляет в html код
			var res="<audio  class='pre_audio' id='pre_audio' controls='true'><source id='source' src="+msg+"></audio>";
			return res;
            });
			document.getElementById('audio_table').style.display = "block";
			document.getElementById('audio_name').value = msg;
			document.getElementById('load_path').value = msg;
			},
            error: function(msg) {
                alert('Ошибка!');
            },
            cache: false,
            contentType: false,
            processData: false
        });
}

function upload_phones_file(){		
	//document.getElementById('pre_watch').value = "Загрузка...";
		//document.getElementById('pre_text').style.display = "block";
        var formData = new FormData($('#uploader_base')[0]);
        $.ajax({
            url: 'add_from_file.php',
            type: "POST",
            data: formData,
            async: false,
            success: function (msg) {
                document.getElementById('pre_watch').value = msg;
				document.getElementById('pre_text').style.display = "block";
            },
            error: function(msg) {
                alert('Ошибка!');
            },
            cache: false,
            contentType: false,
            processData: false
        });
}	
	$(document).ready(function() {

		$(".main_input_file_audio").change(function() {

			var f_name = [];

			for (var i = 0; i < $(this).get(0).files.length; ++i) {

				f_name.push(" " + $(this).get(0).files[i].name);

			}

			$("#f_name_audio").val(f_name.join(", "));
			upload_audio_file();
		});
	
	});

	$(document).ready(function() {

		$(".main_input_file").change(function() {

			var f_name = [];

			for (var i = 0; i < $(this).get(0).files.length; ++i) {

				f_name.push(" " + $(this).get(0).files[i].name);

			}

			$("#f_name").val(f_name.join(", "));
			upload_phones_file();
		});
	
	});




</script>
<!------------------------------------------------------------------------- Загрузка аудио на сервер ------------------------------------------------------------------>
<script>
  	function change_butt(id){
  	    document.getElementById('recordButton').style.display = "block";
  	    document.getElementById('stopButton').style.display = "block";
  	    document.getElementById(id).style.display = "none";
  	}
</script>
<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
<script src="js/app.js"></script>
<!------------------------------------------------------------------------- Загрузка аудио на сервер ------------------------------------------------------------------>
		

				
</body>
</HTML>


