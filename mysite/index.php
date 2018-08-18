<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>

<html>
<head>
    <title>UK Yo'l loyiha ekspertiza</title>
    <meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logomin.png">
	<link rel="stylesheet" href="css/style.css" medea="all">
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="js/mobilyslider.js" type="text/javascript"></script>
	<script src="js/init.js" type="text/javascript"></script>
    <style>
       p {
        text-indent: 20px; /* Отступ первой строки в пикселах */
       }
    </style>
</head>
    
<body>
    <?php require 'header.php'; ?>
    <div id="wrapper">
        
	    <div id="content">
            <div style="width: 960px; margin: 0 auto;">
                <div class="slider slider2">
               <div class="sliderContent">
                    <div class="item">
                    <img src="images/roads/pic1.jpg" alt="" />
                    </div>
                    <div class="item">
                        <img src="images/roads/pic2.jpg" alt="" />
                    </div>
                   <div class="item">
                        <img src="images/roads/pic3.jpg" alt="" />
                    </div>
                </div>
            </div>
		    <div class="news_1">
                <h2 class="title">Новости предприятия</h2>
                <div class="noshadowbox">
                    <a href="#" class="subtitle">
                        На улице Бунёдкор города Ташкента открылся новый мост
                    </a>
                    <p style="text-align: justify; margin: 10px; margin-top: 0">
                        Президент Республики Узбекистан Шавкат Мирзиёев 10 августа ознакомился с новым сооружением.<br>
                    </p>
                    <p style="text-align: justify; margin: 10px; margin-top: 0">
                        Как известно, улица Бундёкор является одной из самых загруженных в столице. Вдоль улицы, на пересечении с Ташкентской кольцевой дорогой, крупными улицами Фарход, Мукими, Ислама Каримова, Навои и другими возведены путепроводы и тоннели.
                    </p>
                    
                </div>
            </div>
            <div class="news_2">
                <h2 class="title">Актуальные темы</h2>
                <div class="noshadowbox">
                    <a href="#" class="subtitle">
                        Заголовок
                    </a>
                    <p style="text-align: justify; margin: 10px; margin-top: 0">
                        Предназначена для измерения прогибов покрытия при динамической нагрузке. Рассчитываются модули упругости дорожной одежды и производится построение чаши прогиба...
                        Предназначена для измерения прогибов покрытия при динамической нагрузке. Рассчитываются модули упругости дорожной одежды и производится построение чаши прогиба...
                        Предназначена для измерения прогибов покрытия при динамической 
                    </p>
                </div>
            </div>
            </div>
        </div>
            <div id="rasporka"></div>
    </div><!-- .wrapper --> 
	<?php require 'footer.php'; ?>
</body>
</html>

