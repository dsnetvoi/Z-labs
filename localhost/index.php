<?php
    include 'include/db.php';
    
  
  if(isset($_GET['go'])){ 
  
  $name=$_POST['search-title']; 
  $sql = "SELECT * FROM Poisk WHERE headline LIKE '%$name%'";
   
  
  $result= $mysql->query($sql); 
  $result1= $mysql->query($sql); 
  } 
  

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.cdnfonts.com/css/gilroy?styles=20876,20877,20878,20879,20880&display=swap&subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Верстка поиска</title>
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <h1>Поиск по сайту</h1>
      </header>
        <div class="content">
        <div class="search-box">

                <form class="search-window" method="post" action="index.php?go"  id="searchform"> 
                
                    <input class="search" type="text" name="search-title" placeholder="Введите поисковый запрос">
                    <label>
                    <input type="submit"/> 
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.6125 15.4913C18.7935 13.8785 19.4999 11.8975 19.4999 9.74998C19.4999 4.37403 15.1259 0 9.74993 0C4.37398 0 0 4.37403 0 9.74998C0 15.1259 4.37403 19.5 9.74998 19.5C11.8975 19.5 13.8787 18.7934 15.4915 17.6124L21.8789 23.9999L24 21.8788C24 21.8787 17.6125 15.4913 17.6125 15.4913ZM9.74998 16.4999C6.02781 16.4999 3.00001 13.4721 3.00001 9.74998C3.00001 6.02781 6.02781 3.00001 9.74998 3.00001C13.4721 3.00001 16.4999 6.02781 16.4999 9.74998C16.4999 13.4721 13.4721 16.4999 9.74998 16.4999Z" fill="#342733"/>
                        </svg>
                    </label>  
                </form>
                
                </a>
        </div>
        <div class="search-result">
                <?
                    $count = 0;
                     
                    if(isset($_GET['go'])){
                    if(isset($_POST['search-title'])){
                    while($row1=mysqli_fetch_array($result1)){  
                        $count++;

                    }
                    if ($count != 0) {?> <h2 class="search-label">НОВОСТИ (<?=$count?>)</h2> <?}
                    while($row=mysqli_fetch_array($result)){ 
                    $News_headline = $row['headline'];
                    $Short_description = $row['description'];
                    $News_text = $row['newstext']; 
                    $News_img = $row['newsimg']; 
                    $ID = $row['id'];
                    $count++;
                    ?>
                    <a class="result" href="#">
                    <img src="<?=$News_img?>">
                        <div class="info">
                            <span class="title"><?=$News_headline?></span>
                            <span class="descr"><?=$Short_description?></span>
                        </div>
                    </a>
                    <?  
                    }
                    }
                    }
                    ?> 
        </div>
        <?php
        if ($count===0){
        ?>
        <div class="Non-search">

            <h2>К сожалению,<br class="mobile-show tablet-hide"> ничего не найдено</h2>
            <p>Попробуйте ввести другой запросили связаться с нами по номеру <a href="tel:84162151145"><b>8 (4162) 151-145</b></a></p>
        </div>
        <?php
        }
        ?>

    </div>
    </div>
    <footer class="footer">

        <div class="footer-up">
            <div class="otd">
                <p><a href="tel:84162151145"><b>8 (4162) 151-145</b></a></p>
                <p>ОТДЕЛ ПРОДАЖ</p>
            </div>
            <a class="btn-1" href="#">Заказать звонок</a>
            <p class="cons tablet-hide mobile-hide">Требуется консультация?</p>
            <a class="btn-1" href="#">Напишите нам</a>

        </div>
        <div class="footer-second">
            <div class="column mobile-hide">
                <div class="footer-label">ПРОЕКТЫ</div>
                    <nav class="footer-nav">
                        <ul class="menu-footer">
                            <li class="menu-footer-item"><a href="#">Жилые комплексы</a></li>
                            <li class="menu-footer-item"><a href="#">Коммерчиские помещения</a></li>
                            <li class="menu-footer-item"><a href="#">Гаражи и машиноместа</a></li>
                        </ul>
                    </nav>
            </div>
            <div class="column mobile-hide">
                <div class="footer-label">КЛИЕНТАМ</div>
                <nav class="footer-nav">
                    <ul class="menu-footer">
                        <li class="menu-footer-item"><a href="#">Способы покупки</a></li>
                        <li class="menu-footer-item"><a href="#">Ипотека</a></li>
                        <li class="menu-footer-item"><a href="#">Рассрочка</a></li>
                        <li class="menu-footer-item"><a href="#">Информация для собственников</a></li>
                        <li class="menu-footer-item"><a href="#">Региональный покупатель</a></li>
                    </ul>
                </nav>
            </div>
            <div class="column mobile-hide">
                <div class="footer-label">ИНФОРМАЦИЯ</div>
                <nav class="footer-nav">
                    <ul class="menu-footer">
                        <li class="menu-footer-item"><a href="#">О компании</a></li>
                        <li class="menu-footer-item"><a href="#">Контакты</a></li>
                        <li class="menu-footer-item"><a href="#">Инвесторам</a></li>
                        <li class="menu-footer-item"><a href="#">Новости</a></li>
                        <li class="menu-footer-item"><a href="#">Вакансии</a></li>
                        <li class="menu-footer-item"><a href="#">Офисы продаж</a></li>
                    </ul>
                </nav>
            </div>
            <div class="social">
                <div class="footer-label tablet-hide mobile-hide">МЫ В СОЦ СЕТЯХ</div>
                <div class="social-inner">
                    <svg width="32" height="35" viewBox="0 0 32 35"  xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.55556 0H28.4444C29.3874 0 30.2918 0.402012 30.9586 1.1176C31.6254 1.83318 32 2.80373 32 3.81572V30.5257C32 31.5377 31.6254 32.5083 30.9586 33.2239C30.2918 33.9395 29.3874 34.3415 28.4444 34.3415H3.55556C2.61256 34.3415 1.70819 33.9395 1.0414 33.2239C0.374602 32.5083 0 31.5377 0 30.5257V3.81572C0 2.80373 0.374602 1.83318 1.0414 1.1176C1.70819 0.402012 2.61256 0 3.55556 0ZM26.6667 3.81572H22.2222C20.572 3.81572 18.9893 4.51924 17.8224 5.77151C16.6556 7.02379 16 8.72224 16 10.4932V15.2629H12.4444V20.9865H16V34.3415H21.3333V20.9865H26.6667V15.2629H21.3333V11.4472C21.3333 10.9412 21.5206 10.4559 21.854 10.0981C22.1874 9.7403 22.6396 9.5393 23.1111 9.5393H26.6667V3.81572Z" fill-opacity="0.8"/>
                    </svg>
                    <svg width="32" height="35" viewBox="0 0 32 35"  xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.62433 0H26.375C29.481 0 32 2.7026 32 6.03659V28.3049C32 31.6381 29.481 34.3415 26.375 34.3415H5.62433C2.51833 34.3415 0 31.6381 0 28.3049V6.03659C0 2.7026 2.51833 0 5.62433 0ZM20.6526 5.28329H11.348C9.64404 5.28329 8.00992 6.0097 6.80507 7.30271C5.60022 8.59572 4.92334 10.3494 4.92334 12.178V22.1634C4.92334 25.9674 7.80334 29.0582 11.348 29.0582H20.6526C22.3565 29.0582 23.9906 28.3318 25.1955 27.0387C26.4003 25.7457 27.0772 23.992 27.0772 22.1634V12.178C27.0772 8.37402 24.1972 5.28329 20.6526 5.28329ZM8.30669 8.91421C9.05453 8.11165 10.0688 7.66078 11.1264 7.66078H20.8741C23.0784 7.66078 24.8618 9.57466 24.8618 11.9403V22.4012C24.8618 23.5362 24.4417 24.6247 23.6938 25.4272C22.946 26.2298 21.9317 26.6807 20.8741 26.6807H11.1264C8.92211 26.6807 7.13872 24.7668 7.13872 22.4012V11.9403C7.13872 10.8053 7.55886 9.71677 8.30669 8.91421ZM22.7947 9.87911C22.5351 9.60045 22.1829 9.44389 21.8156 9.44389C21.4484 9.44389 21.0962 9.60045 20.8366 9.87911C20.5769 10.1578 20.431 10.5357 20.431 10.9298C20.431 11.3239 20.5769 11.7019 20.8366 11.9805C21.0962 12.2592 21.4484 12.4158 21.8156 12.4158C22.1829 12.4158 22.5351 12.2592 22.7947 11.9805C23.0544 11.7019 23.2003 11.3239 23.2003 10.9298C23.2003 10.5357 23.0544 10.1578 22.7947 9.87911ZM19.9165 12.9679C18.8779 11.8532 17.4692 11.227 16.0003 11.227C14.5314 11.227 13.1226 11.8532 12.084 12.9679C11.0453 14.0825 10.4618 15.5944 10.4618 17.1707C10.4618 18.7471 11.0453 20.2589 12.084 21.3736C13.1226 22.4882 14.5314 23.1144 16.0003 23.1144C17.4692 23.1144 18.8779 22.4882 19.9165 21.3736C20.9552 20.2589 21.5387 18.7471 21.5387 17.1707C21.5387 15.5944 20.9552 14.0825 19.9165 12.9679ZM13.6505 14.649C14.2737 13.9802 15.1189 13.6045 16.0003 13.6045C16.8816 13.6045 17.7268 13.9802 18.35 14.649C18.9732 15.3178 19.3233 16.2249 19.3233 17.1707C19.3233 18.1165 18.9732 19.0236 18.35 19.6924C17.7268 20.3612 16.8816 20.737 16.0003 20.737C15.1189 20.737 14.2737 20.3612 13.6505 19.6924C13.0273 19.0236 12.6772 18.1165 12.6772 17.1707C12.6772 16.2249 13.0273 15.3178 13.6505 14.649Z" fill-opacity="0.8"/>
                    </svg>
                    <svg width="32" height="35" viewBox="0 0 32 35"  xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.7247 18.9264C17.2117 18.6059 16.4987 18.6059 15.9193 18.6059H14.017V22.8127H15.763C16.4093 22.8127 17.2337 22.8625 17.791 22.4425C18.3027 22.073 18.5923 21.3475 18.5923 20.6567C18.5923 20.015 18.2363 19.2473 17.7247 18.9264ZM17.007 15.3338C17.4303 14.9879 17.6523 14.3712 17.6523 13.8031C17.6523 13.186 17.3853 12.5937 16.8957 12.2731C16.3833 11.9526 15.447 12.0267 14.8457 12.0267H14.017V15.7291H15.1133C15.737 15.7288 16.4727 15.7781 17.007 15.3338ZM26.375 0H5.62433C2.51833 0 0 2.7026 0 6.03659V28.3049C0 31.6381 2.51833 34.3415 5.62433 34.3415H26.375C29.481 34.3415 32 31.6381 32 28.3049V6.03659C32 2.7026 29.481 0 26.375 0ZM16.868 25.9475H10.3307V9.01499H17.4733C19.5423 9.01499 21.4513 10.4284 21.4513 12.9213C21.4513 14.8462 20.45 16.1645 19.1727 16.574V16.6238C21.0667 17.0437 22.4193 18.1477 22.4193 20.8109C22.4193 23.2756 20.8553 25.9475 16.868 25.9475Z" fill-opacity="0.8"/>
                    </svg>
                    <svg width="32" height="35" viewBox="0 0 32 35"  xmlns="http://www.w3.org/2000/svg">
                        <rect width="32" height="34.3415" rx="4"  fill-opacity="0.8"/>
                        <g clip-path="url(#clip0_1083_1810)">
                            <path d="M22.2247 16.8367L12.3786 11.2983C12.1878 11.1912 11.9552 11.1937 11.7669 11.3032C11.5774 11.414 11.4617 11.6158 11.4617 11.8349V22.9118C11.4617 23.1309 11.5774 23.3327 11.7669 23.4435C11.8629 23.4989 11.97 23.5272 12.0771 23.5272C12.1804 23.5272 12.2851 23.5013 12.3786 23.4484L22.2247 17.9099C22.4179 17.8004 22.5386 17.5961 22.5386 17.3733C22.5386 17.1506 22.4179 16.9463 22.2247 16.8367Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_1083_1810">
                                <rect width="12.3077" height="13.2083" fill="white" transform="translate(10.8462 10.5667)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>

        <div class="footer-third wrapper">
            <div class="label">
                <p>*Информация, предоставленная на сайте, не является публичной офертой. Сведения носят исключительно информационный характер.</p>
                <p class="comp">ОАО «Компания», 2020</p>
            </div>
            <a class="btn-2" href="https://z-labs.ru/">Разработано <span>Студией Z-labs</span></a>
        </div>

    </footer>

    <script src="js/script.js" async></script>
  </body>
</html>
