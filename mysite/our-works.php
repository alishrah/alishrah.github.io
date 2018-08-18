<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Диагностика автодорог</title>
    <meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="../images/logomin.png">
	<link rel="stylesheet" href="../css/style.css" medea="all">
    
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
                <div class="toolbar">
                    <ul>
                        <li>
                            <a href="../index.php">Главная</a>
                        </li>
                        <li>
                            <a>Виды работ</a>
                        </li>
                    </ul>
				</div>
                <div class="tm-content">
                    <p style="padding: 10px; text-align: left; font-size: 16px;">
                        <strong>
                            ООО "ДорТехПроект+" осуществляет следующие виды работ:
                        </strong>
                    </p>         
                    <ul style="list-style-type: disc; margin-left: 70px;">
                        <li>
                            - 
                            <a href="./our-works/roads-diagnostics.php">
                                диагностика и оценка состояния автомобильных дорог
                            </a>
                            ;
                        </li>
                        <li>
                            - 
                            <a href="./our-works/priemochnaya-diagnostika.php">
                                приемочная диагностика автомобильных дорог
                            </a>
                            ;
                        </li>
                        <li>
                            -
                            <a href="./our-works/roads-pasport.php">
                                учет и&nbsp;паспортизация автомобильных дорог
                            </a>
                            ;
                        </li>
                        <li>
                            -
                            <a href="./our-works/videobank.php">
                                формирование видеобанка автомобильных дорог региона
                            </a>
                            ;
                        </li>
                        <li>
                            - учет и паспортизация городских улиц;&nbsp;
                        </li>
                        <li>
                            - инвентаризация автомобильных дорог;
                        </li>
                        <li>
                            - формирование информационных систем по управлению состоянием автомобильных дорог региона;
                        </li>
                        <li>
                            - обследование характеристик транспортных потоков;
                        </li>
                        <li>
                            - 
                            <a href="#">
                                научные исследования
                            </a>
                            ;
                        </li>
                        <li>
                            - формирование целевых дорожных программ.
                        </li>
                    </ul>
                </div>
                <div style="background:#fff; margin-top: 10px; padding: 10px;">
                    <img style="display: block; margin-left: auto; margin-right: auto;" src="../images/our-works/bkjdfg5456xgf54.JPG" width="915" height="864">
                </div>
            </div>
        </div>
        <div id="rasporka"></div>
    </div><!-- .wrapper -->
	<?php require 'footer.php'; ?>
	</body>
</html>

