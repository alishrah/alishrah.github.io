<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Контакты</title>
    <meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="../images/logomin.png">
	<link rel="stylesheet" href="../css/style.css" medea="all">
    
    <style>
       p {
            /*text-indent: 20px; /* Отступ первой строки в пикселах */
            
            padding-bottom: 15px;
       }
        td {
            vertical-align: middle;
        }
    </style>
</head>
    
<body>
    <?php require 'header.php'; ?>
    <div id="wrapper">
	    <div id="content">
            <div style="width: 960px; margin: 0 auto;">
                <div class="toolbar">
                    <ul>
                        <li>
                            <a href="../index.php">Главная</a>
                        </li>
                        <li>
                            <a>Контакты</a>
                        </li>
                    </ul>
				</div>
                <div class="tm-content">
                    <p style="text-align: left; font-size: 20px; color: #6c7981; margin-bottom: 10px;">
                        <strong>
                           Расположение на карте
                        </strong>
                    </p>
                    <div style="margin-left: 10px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.9730043474797!2d69.30705891586962!3d41.33120037926938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef4c06e227df3%3A0xa368fb55392fe24d!2z0YPQuy4g0JrQsNGC0YLQsCDQlNCw0YDRhdC-0L0sINCi0LDRiNC60LXQvdGCLCDQo9C30LHQtdC60LjRgdGC0LDQvQ!5e0!3m2!1sru!2s!4v1534499261001" width="900" height="675" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <p style="text-align: left; font-size: 20px; color: #6c7981; margin-top: 20px; margin-bottom: 10px;">
                        <strong>
                           Контактная информация
                        </strong>
                    </p>
                    <div class="icon_phone" style="font-size: 16px;">
                        (8371) 286-19-03
                    </div>
                    <div class="icon_mail" style="font-size: 16px;">
                        ekspertiza@uzavtoyul.uz
                    </div>
                    <div class="icon_loc" style="font-size: 16px;">
                        г. Ташкент,  Мирзо Улугбекский район, ул. Т.Садиков 2-переулок, 5-дом,100000
                    </div>
                    <p style="text-align: left; font-size: 20px; color: #6c7981; margin-top: 20px; margin-bottom: 10px;">
                        <strong>
                           Реквизиты организации
                        </strong>
                    </p>
                    <p style="text-align: left; font-size: 16px; color: #6c7981;">
                        Унитарное предприятие "Йул лойиха экспертиза"
                    </p>
                    <p style="text-align: left; font-size: 16px; color: #6c7981;">
                        ИНН 0000000000 / КПП 000000000
                    </p>
                    <p style="text-align: left; font-size: 16px; color: #6c7981;">
                        ОКПО 000000
                    </p>
                    <p style="text-align: left; font-size: 16px; color: #6c7981;">
                        ОКВЭД 74.20.13 , 73.10, 72.20, 72.60 ОКАТО 63401376000
                    </p>
                    <p style="text-align: left; font-size: 16px; color: #6c7981;">
                        ОКОГУ 49013
                    </p>
                    <p style="text-align: left; font-size: 16px; color: #6c7981;">
                        р/сч 40702810903000000506,     к/сч 30101810300000000881
                    </p>
                    <p style="text-align: left; font-size: 16px; color: #6c7981;">
                        НИЖЕГОРОДСКИЙ ФИЛИАЛ ПАО Банка "ФК Открытие" Г.НИЖНИЙ НОВГОРОД БИК 042282881
                    </p>
                    <p style="text-align: left; font-size: 16px; color: #6c7981;">
                        Директор: Касимходжаев Баходир (действует на основании Устава)
                    </p>
                    <p style="text-align: left; font-size: 16px; color: #6c7981;">
                        Главный бухгалтер: Самарина Ольга Ильинична
                    </p>
                </div>
            </div>
        </div>
        <div id="rasporka"></div>
    </div><!-- .wrapper -->
	<?php require 'footer.php'; ?>
	</body>
</html>

