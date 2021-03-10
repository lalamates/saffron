<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>saffron</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tactile Works">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- フォントの使用準備 -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@200;600&family=M+PLUS+Rounded+1c&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">

</head>

<body class="mw1200">

    <header>
        <div class="header_pc_new">

            <img src="images/pc_header03.png" alt="main-bg">
        </div>

        <div class="header_sp_new">
            <div><a href="index.html"><img src="images/sp_header@2x.png" alt="saffronのホームページ" class="logo"></a>
               
            </div>


            <div>
             



                </a>

            </div>




        </div>
        <div class="menu-area">
            <ul>
                <li><a href ="index.html" >ホーム</a></li>
                <li><a href ="takeout.php" >お持帰りMENU</a></li>
                <li><a href ="https://demae-can.com/shop/menu/3092369/">宅配MENU</a></li>
                <li>店内MENU</li>
                <li>アクセス</li>
                <li>お店のブログ</li>
                <li>店内紹介写真</li>
                

            </ul>
        </div>
        <div id="header_sp">
            <nav id="checkbox_sp">
                <input type="checkbox" id="check">
                <span class="span1"></span>
                <span class="span2"></span>
                <span class="span3"></span>
                <label for="check"></label>
                <label class="label2"></label>

                <ul>

                    <li><a href="index.html">ホームへ戻る</a></li>

                    <li>当店へのアクセス</li>
                    <li>お店のブログ</li>
                    <li>店内紹介写真</li>
                    <li><a href="takeout.php">持帰りMENU</a></li>
                    <li><a href ="https://demae-can.com/shop/menu/3092369/">宅配MENU</a></li>
                    <li>店内MENU</li>


                    <!--<li><a href="index.html" class="footer-a">Homeへ戻る</a></li>

                    <li><a href="access.html" class="footer-a">当店へのアクセス</a></li>
                    <li><a href="saffron.jp/blog/" class="footer-a">お店のブログ</a></li>
                    <li><a href="shopgallery.html" class="footer-a">店内紹介写真</a></li>
                    <li><a href="takeout.php" class="footer-a">持帰りMENU</a></li>
                    <li><a href="https://demae-can.com/shop/menu/3092369/?utm_source=google_si&utm_medium=google_si&utm_campaign=gsi" class="footer-a">宅配MENU</a></li>
                    <li><a href="inshop.html" class="footer-a">店内MENU</a></li>-->

                </ul>
            </nav>
        </div>


        <!-- メイン画像部分 -->


    </header>
    <div id="home">

        <main class="wrapper">
            <div class="wrapper">
                <div class="flex">
                    <img class="flex_child01 m-t-10" src="images/logo01.png" height="60px" alt="safronのホームページ">


                    <h3 class="flex_child02 p-r-10 m-t-10">
                        テイクアウト(お持帰り)ご注文完了
                    </h3>
                </div>



             


                <p class="common-p3 t-a-center wrapper mb-30 bgc001">
                <?php
                require_once("lib/util.php");
              
                $_POST = es($_POST);
                $name = $_POST["name"];
                $phone = $_POST["phone"];
                
                
               
                
                echo "
                {$name}様<br>お持ち帰りのご注文を頂き、誠にありがとうございます。<br>"?>
                    <!-- 合計金額は〇〇〇円となっております。<br> -->
                    現金またはクレジットカードをご用意頂き、<br>
                    今から30分後以降に、直接ご来店下さい。<br>
                    
                </p>

                <div class="wrapper bgc001">
                    <p class="common-p t-a-center wrapper mb-30">　（万が一混雑状況により３０分以上かかる可能性が
                        ある場合は、早急にこちらよりお電話にて
                        お知らせさせて頂きますのでご了承下さい。）
                    </p>
                    
                </div>

                <div class="wrapper07">
                    <p class="common-p wrapper02 mb-30 t-a-left">
                        ■住所　〒573-0075<br>
　大阪府枚方市東香里３丁目２−２５<br>
■京阪香里園から京阪バスにて京阪バス「東香里」バス停下車すぐ（目印は東香里にあるTSUTAYAの横です。）<br>
■専用駐車場あり<br>
■電話番号　072-854-1812<br>
■営業時間（月曜日～日曜日・定休日なし）<br>
　11時00分～15時00分<br>
　17時00分～22時00分


                    </p>
                </div>

<div class="wrapper06">
                <div class="location-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15814.911521845941!2d135.65366904385084!3d34.78051435999037!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8f6e60b348e5501e!2z44K144OV44Op44Oz!5e0!3m2!1sja!2sjp!4v1615211649185!5m2!1sja!2sjp" width="800" height="400" frameborder="0" style="border:0;filter: saturate(150%); -webkit-fliter: saturate(150%)" allowfullscreen="" aria-hidden="false" tabindex="0"
                        
                    ></iframe>
                </div><!-- /.location-map --></div>

                
                    <p class="common-p t-a-left m-50-0 p-30-0 wrapper">
                        ご質問やご不明点がございましたら、下記の電話番号までお気軽にお問合せください。↓↓↓</p>

                    <div id="phone-area">
                        <!-- About us -->
                        <p class="phone02"><i class="fas fa-phone-volume fa-lg fa-fw text-black"></i>072-854-1812</p>
                        

                        



                    </div>

        </main>



    </div>



    <footer id="footer-container">

        <div class="flex03">
            <span class="flex_child03 footer-a f-w-15"><a href ="index.html">Homeへ戻る</a></span>
        </div>
        <div class="grid001 wrapper">
            <span class="pt-10" footer-a><a href ="takeout.php">持帰りMENU</a></span>
            <span class="pt-10"><a href="https://demae-can.com/shop/menu/3092369/?utm_source=google_si&utm_medium=google_si&utm_campaign=gsi" class="footer-a">宅配MENU</a></span>
            <span class="pt-10 footer-a">店内MENU</span>
            <span class="pt-10 footer-a">当店へのアクセス</span>
            <span class="pt-10 footer-a">お店のブログ</span>
            <span class="pt-10 footer-a">店内紹介写真</span>

        

        </div>
        <div class="footer-copy wrapper">
            <small>&copy; 2021 Safron.jp All Rights Reserved.</small>

        </div>
    </footer>
   
   
</body>

</html>