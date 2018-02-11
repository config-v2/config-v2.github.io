<? require_once('array.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Конфигуратор v.<?= $config['ver']?> для <?= $_SERVER['SERVER_NAME']; ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/spacelab/bootstrap.min.css" rel="stylesheet" integrity="sha384-L/tgI3wSsbb3f/nW9V6Yqlaw3Gj7mpE56LWrhew/c8MIhAYWZ/FNirA64AVkB5pI" crossorigin="anonymous">
     <link href="css/style.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
   <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Конфигуратор v.<?= $config['ver']?></a>
        </div>
        <div class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Сменить пароль</a></li>
            <li><a href="../navbar-static-top/">Помощь</a></li>
            <li class="active"><a href="./"><i class="fa fa-power-off" aria-hidden="true"></i> Выход</a></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  
  <div class="container">
   	
	<form class="form-horizontal" action="" role="form">
	<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-money"></i>&#160;
              <a data-toggle="collapse" data-parent="#accordion" href="#price_block">Ценообразование:</a>&#160;<i class="fa fa-caret-down" aria-hidden="true"></i>
            </h4>
    </div>
    <div id="price_block" class="panel-collapse collapse">
      <div class="panel-body">
        <fieldset>
		<div class="form-group">
	   <label class="col-sm-3 control-label">Валюта: </label>
	     <div class="col-sm-9">
         <select id="mask_phone" name="mask_phone" class="form-control" >
		  <? foreach($config['valuta'] as $key => $value) { ?>
			<option  value="<?= $key ?>"><?= $value ?></option>
		  <? } ?>
		</select>
		</div>
		</div>
		
		<div class="form-group">
		<label class="col-sm-3 control-label">Новая цена: <em>*</em></label>
	     <div class="col-sm-9">
		<input class="form-control" required id="price_new" type="text" name="price_new" value="" placeholder="Новая цена. Размещается во всех местах ленда">
</div>
</div>


		<div class="form-group">
	   	<label class="col-sm-3 control-label">Установка старой цены: </label>
		 <div class="col-sm-9">
		<select class="form-control" id="price_old_select" name="price_old_select" onchange="price_old_select_func(); return true;">
 
    <option selected value="1">Считать автоматически, по скидке</option>
    <option  value="0">Задать старую цену вручную</option>
      </select>
</div>
		</div>
		
		
		<div class="form-group">
		<label class="col-sm-3 control-label">Скидка: </label>
		<div class="col-sm-9">
		<input class="form-control" required id="skidka" type="text" name="skidka" value="" placeholder="Скидка. Старая цена будет считаться автоматически">
	</div></div>
	
	<div class="form-group">
		<label class="col-sm-3 control-label">Cтарая цена: <em>*</em></label>
	<div class="col-sm-9">
	<input class="form-control" required id="price_old" type="text" name="price_old" value="1042" placeholder="Старая цена. Размещается во всех местах ленда">
</div></div> 

	<div class="form-group text-center">
		<input type="submit" name="btn" value="Сохранить" class="btn btn-primary">
	</div>
		</fieldset>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-phone"></i>&#160;
              <a data-toggle="collapse" data-parent="#accordion" href="#mask">Маска номера покупателя:</a>&#160;<i class="fa fa-caret-down" aria-hidden="true"></i>
            </h4>
    </div>
    <div id="mask" class="panel-collapse collapse">
      <div class="panel-body">
	   <fieldset>
	   <div class="form-group">
	   	<label class="col-sm-3 control-label">Маска номера: </label>
		 <div class="col-sm-9">
         <select id="mask_phone" name="mask_phone" class="form-control" >
		 <option selected value="-">Отключено</option>
		 <? foreach($config['mask'] as $key => $value) { ?>
		
		<option  value="<?= $key ?>"><?= $value ?></option>
		
		 <? } ?>
		</select>
		</div>
		</div>
		<div class="form-group text-center">
		<input type="submit" name="btn" value="Сохранить" class="btn btn-primary">
	</div>
 </fieldset>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-code"></i>&#160;
              <a data-toggle="collapse" data-parent="#accordion" href="#code_block">
               Дополнительные коды, пиксели, метрики:
              </a>&#160;<i class="fa fa-caret-down" aria-hidden="true"></i>
            </h4>
    </div>
    <div id="code_block" class="panel-collapse collapse">
      <div class="panel-body">
       <fieldset>
	   <div class="form-group">
	   	<label class="col-sm-3 control-label">Блок head для Index:</label><div class="col-sm-9"><textarea class="form-control" rows="5" id="head_index64" name="head_index64" cols="70"></textarea> 
		<span class="help-block">Код для размещения на ГЛАВНОЙ СТРАНИЦЕ в тегах <strong>&#8249;head&#8250; Ваш код &#8249;&#47;head&#8250;</strong> индексной страницы. Здесь размещают пиксели Facebook и Вконтакте, Google-аналитику, дополнительные META-теги, ссылки на JS для аналитики и пр.</span>
		</div>
    </div>
		<div class="form-group">
	 	<label class="col-sm-3 control-label">Блок head для Thanks: </label><div class="col-sm-9"><textarea class="form-control" rows="5" id="head_thanks64" name="head_thanks64" cols="70"></textarea> 
		<span class="help-block">Код для размещения на СТРАНИЦЕ "СПАСИБО" (form-ok.php) в тегах <strong>&#8249;head&#8250; Ваш код &#8249;&#47;head&#8250;</strong> страницы благодарности. Здесь размещают пиксели Facebook и Вконтакте, Google-аналитику, дополнительные META-теги, ссылки на JS для аналитики и пр.</span>
		</div>
    </div>
		<div class="form-group">
		<label class="col-sm-3 control-label">Блок body для Index: </label><div class="col-sm-9"><textarea class="form-control" rows="5" id="body_index64" name="body_index64" cols="70"></textarea> 
		<span class="help-block">Код для размещения на ГЛАВНОЙ СТРАНИЦЕ в тегах <strong>&#8249;body&#8250; Ваш код &#8249;&#47;body&#8250;</strong> индексной страницы. Здесь можно разместить код счетчиков Яндекс-метрики, Mail.Top</span>
		</div>
    </div>
		<div class="form-group">
	 	<label class="col-sm-3 control-label">Блок body для Thanks:</label><div class="col-sm-9"><textarea class="form-control" rows="5" id="body_thanks64" name="body_thanks64" cols="70"></textarea> <span class="help-block">Код для для размещения на СТРАНИЦЕ "СПАСИБО" (form-ok.php) в тегах <strong>&#8249;body&#8250; Ваш код &#8249;&#47;body&#8250;</strong> страницы благодарности. Здесь можно разместить код реагирование на совершение лида (покупка), счетчиков Яндекс-метрики, Mail.Top</span></div>
    </div>
	<div class="form-group text-center">
		<input type="submit" name="btn" value="Сохранить" class="btn btn-primary">
	</div>
	 </fieldset>
      </div>
    </div>
  </div>
  
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"> <i class="fa fa-envelope-o"></i>&#160;
              <a data-toggle="collapse" data-parent="#accordion" href="#email-block">
                Отправка информации о покупке на e-mail:
              </a>&#160;<i class="fa fa-caret-down" aria-hidden="true"></i>
            </h4>
    </div>
    <div id="email-block" class="panel-collapse collapse">
      <div class="panel-body">
	   <fieldset>
 	 <div class="form-group">
	   	<label class="col-sm-3 control-label">Название: <em>*</em></label><div class="col-sm-9"><input class="form-control" required id="product" type="text" name="product" value="ПРОДУКТ" placeholder="Наименование продукта, которое будет указано в заголовке и тексте письма"></div></div>
     <div class="form-group">
	   	<label class="col-sm-3 control-label">E-mail: <em>*</em></label><div class="col-sm-9"><input class="form-control" required id="email" type="text" name="email" value="Ваш EMAIL" placeholder="E-mail, на который будут приходить уведомления о покупке."></div></div>
	 <div class="form-group">
	   	<label class="col-sm-3 control-label">Отправитель: <em>*</em></label><div class="col-sm-9"><input class="form-control" required id="sender" type="text" name="sender" value="%product% <noreply@%host%>" placeholder="Имя и адрес отправителя, от которого будут приходить уведомления о покупке.">
	 	 </div></div>
	 <div class="form-group">
	   	<label class="col-sm-3 control-label">Заголовок письма: <em>*</em></label><div class="col-sm-9"><input class="form-control" required id="subject" type="text" name="subject" value="Заказ товара - %product%" placeholder="Заголовок письма, которое будет уведомлять Вас о покупке.">
	 </div></div>
	 
   <div class="form-group">
	   	<label class="col-sm-3 control-label">Комментарий: </label><div class="col-sm-9"><textarea class="form-control" rows="3" id="comment" name="comment" cols="70"></textarea>
		<span class="help-block">Комментарий к заказу, который автоматически добавится в письмо о покупке<br>А также добавлен в Вашу СРМ систему, (Если ленд подключен) </span>
	</div></div>
	<div class="form-group">
	   	<label class="col-sm-3 control-label">Текст письма:</label> <div class="col-sm-9"><textarea class="form-control" rows="8" id="message" name="message" cols="70"><table border='0'><td colspan='2' height='40' ><p align='center'><i>Информация о покупателе:</i></td></tr><tr><td><b>IP покупателя:</b></td><td>%ip%</td></tr><tr><td><b>Страна (по IP):</b></td><td>%country_code%</td></tr><tr><td><b>Город (по IP):</b></td><td>%city%</td></tr><tr><td><b>Установленный язык:</b> </td><td>%lang%</td></tr><tr><td><b>Браузер: </b> </td><td>%browser%</td></tr><tr><td><b>Устройство:</b></td><td>%device%</td></tr><tr><td><b>ОС:</b></td><td>%os%</td></tr><tr><td><b>Реферер:</b></td><td>%refer%</td></tr><tr><td colspan='2'><p align='center'><b>UTM-метки: </b></p>%utm% </tr></tr><tr><td><b>Комментарий к заказу:  </b></td><td><p>%comment%</p></td></tr></table></textarea>
		<span class="help-block">Текст письма, который будет добавлен к оповещению о покупателе. Может содержать дополнительные переменные.<br><strong>Инструкция в документации</strong></span>
</div></div>
<div class="form-group text-center">
		<input type="submit" name="btn" value="Сохранить" class="btn btn-primary">
	</div>
	 </fieldset>
      </div>
    </div>
  </div>
  
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"> <i class="fa fa-telegram"></i>&#160;
              <a data-toggle="collapse" data-parent="#accordion" href="#telegram-block">
                Отправка информации о покупке на Telegram:
              </a>&#160;<i class="fa fa-caret-down" aria-hidden="true"></i>
            </h4>
    </div>
    <div id="telegram-block" class="panel-collapse collapse">
      <div class="panel-body">
	   <fieldset>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		
		<div class="form-group text-center">
		<input type="submit" name="btn" value="Сохранить" class="btn btn-primary">
	</div>
		 </fieldset>
      </div>
    </div>
  </div>
  
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-info-circle"></i>&#160;
              <a data-toggle="collapse" data-parent="#accordion" href="#info-block">
               Информация о продавце:
              </a>&#160;<i class="fa fa-caret-down" aria-hidden="true"></i>
            </h4>
    </div>
    <div id="info-block" class="panel-collapse collapse">
      <div class="panel-body">
	   <fieldset>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		
		<div class="form-group text-center">
		<input type="submit" name="btn" value="Сохранить" class="btn btn-primary">
	</div>
		 </fieldset>
      </div>
    </div>
  </div>
  
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-line-chart"></i>&#160;
              <a data-toggle="collapse" data-parent="#accordion" href="#script-block">
              Скрипт повышения конверсии: </a>&#160;<i class="fa fa-caret-down" aria-hidden="true"></i>
            </h4>
    </div>
    <div id="script-block" class="panel-collapse collapse">
      <div class="panel-body">
	   <fieldset>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		
		<div class="form-group text-center">
		<input type="submit" name="btn" value="Сохранить" class="btn btn-primary">
	</div>
		 </fieldset>
      </div>
    </div>
  </div>
  
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-check-square-o"></i>&#160;
              <a data-toggle="collapse" data-parent="#accordion" href="#modal-block">
              Скрипт "Перезвоните мне":&#160; </a>&#160;<i class="fa fa-caret-down" aria-hidden="true"></i>
            </h4>
    </div>
    <div id="modal-block" class="panel-collapse collapse">
      <div class="panel-body">
	   <fieldset>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		
		<div class="form-group text-center">
		<input type="submit" name="btn" value="Сохранить" class="btn btn-primary">
	</div>
		 </fieldset>
      </div>
    </div>
  </div>
  
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"> <i class="fa fa-cart-plus"></i>&#160;
              <a data-toggle="collapse" data-parent="#accordion" href="#upsell-block">
             Допродажа на странице "СПАСИБО." :&#160;</a>&#160;<i class="fa fa-caret-down" aria-hidden="true"></i>
            </h4>
    </div>
    <div id="upsell-block" class="panel-collapse collapse">
      <div class="panel-body">
	   <fieldset>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		
		<div class="form-group text-center">
		<input type="submit" name="btn" value="Сохранить" class="btn btn-primary">
	</div>
		 </fieldset>
      </div>
    </div>
  </div>
  
   <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"> <i class="fa fa-connectdevelop"></i>&#160;
              <a data-toggle="collapse" data-parent="#accordion" href="#upsell-block">
             Интеграция с СRМ:&#160;</a>&#160;<i class="fa fa-caret-down" aria-hidden="true"></i>
            </h4>
    </div>
    <div id="upsell-block" class="panel-collapse collapse">
      <div class="panel-body">
	   <fieldset>
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		
		<div class="form-group text-center">
		<input type="submit" name="btn" value="Сохранить" class="btn btn-primary">
	</div>
		 </fieldset>
      </div>
    </div>
  </div>
  
</div>
</form>
</div>

<div class="navbar navbar-default navbar-fixed-bottom footer" role="navigation">
      <div class="container">
        
          <a class="navbar-brand footer" href="#">&copy; 2015-<?= date("Y")?> Конфигуратор для лендингов v.<?= $config['ver']?></a>
      
		
		<ul class="nav navbar-nav navbar-right">
            <li><a href="https://greygler.github.io">Powered by GreyGler</a></li>
            
          </ul>
        
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>