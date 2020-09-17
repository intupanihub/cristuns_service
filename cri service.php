<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($_GET["id"])) {echo htmlspecialchars($_GET["id"]);} else {echo "cristuns";} ?></title>
    <link rel="shortcut icon" href="<?php if(isset($_GET["id"])) {echo htmlspecialchars($_GET["id"]);} else {echo "cristuns";} ?>.png">
    <style>
        a, h1, h2, h3, h5, h6, span{
    color: yellow;
    text-decoration: none;
    font-size: 60px;
    margin: 0px;
}
nav{
    position: fixed;
    display: inline;
}
a:hover{
    opacity: 0.3;
}
body{
    background-color: aqua;
    margin: 0px;
}
img{
    width: 60px;
    height: 60px;
}
nav[class="out"]{
    width: 50000000000000000000000000000000000000000000000000000000px;
    height: 100px;
    display: inline-block;
    background-color: aquamarine;
}
.cmd{
    padding-top: 150px;
}
divi{
    background-color: yellow;
    width: 100px;
    height: 100px;
    display: block;
    margin-top: 20px;
    margin-left: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
}
    </style>
</head>
<body>
    <nav class="out">
        <img src="<?php if(isset($_GET["id"])) {echo htmlspecialchars($_GET["id"]);} else {echo "cristuns";} ?>.png"><span>  <?php if(isset($_GET["id"])) {echo htmlspecialchars($_GET["id"]);} else {echo "cristuns";} ?>  ㅣ  </span><?php if($_GET["id"]=="cri service") {echo "<a href='#home'>홈</a><span>  ㅣ  </span><a href='#cr-ser'>서비스</a>";} elseif($_GET["id"]=="cri link") {echo "<a href='#home'>홈</a><span>ㅣ</span><a href='#crl-app'>실행할 프로그램</a>";} elseif($_GET["id"]=="yutr") {echo "<a href='#home'>홈</a><span>ㅣ</span><a href='#yu-dw'>하기 싫은 일</a>";}elseif($_GET["id"]=="play") {echo "<a href='#home'>홈</a><span>ㅣ</span><a href='#pl-wt'>하고 싶은 것</a>";}elseif($_GET["id"]=="user favorite") {echo "<a href='#home'>홈</a><span>ㅣ</span><a href='#ufa-bg'>곤충</a><span>ㅣ</span><a href='#ufa-bg'>곤충</a><a href='#ufa-org'>종이접기</a><a href='#ufa-ytb'>유튜브</a><a href='#ufa-ot'>기타</a>";} ?>
    </nav>
    <br id="home"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 ><?php if($_GET["id"]=="cri service") {echo "<span id='cr-ser'></span><br><br>서비스<br><img src='cri service.png'>  cri service<br>cri service는 모든 서비스에 대한 정보를 제공하며 최적의 서비스를 위한 정보를 제공하고 있습니다.<br><br><br><br><img src='cri link.png'>  cri link<br>cri link는 모든 서비스에 손쉽게 접속하여 주소를 입력하는 번거로움이 없습니다./500원<br><br><br><br><img src='kalimba tutorial.png'>  kalimba tutorial<br>kalimba tutorial은 칼림바 악기, 강의를 제공하여 손쉽게 칼림바를 배울 수 있습니다./제작 대기<br><br><br><br><img src='recorder tutorial.png'>  recorder tutorial<br>recorder tutorial은 리코더 악보 읽는법, 악보, 강의를 제공하여 학교에서 많이 배우는 리코더를 잘 사용할 수 있습니다./1500원<br><br><br><br><img src='microsoft office tutorial.png'>  microsoft office tutorial<br>microsoft office tutorial은 파워포인트, 엑셀 등에 대한 강의, 예제를 제공하여 더 쉽게 office프로그램을 배울 수 있습니다./2100원<br><br><br><br><img src='user.png'> user<br>user은 사용자의 정보를 알려주며, 구매한 것, 추천하는 것 등을 알려줍니다./제작 대기<br><br><br><br><img src='user favorite.png'>  user favorite<br>user favorite은 사용자가 좋아하는 색, 음식 등을 보여줍니다./1200원<br><br><br><br><img src='video.png'>  video<br>video는 신청한 영상을 보여 줍니다./제작 대기<br><br><br><br><img src='music.png'>  music<br>music은 사용자가 신청한 음악을 들려줍니다./제작 대기<br><br><br><br><img src='web os.png'>  web os<br>web os는 인터넷으로 연결하 사용하는 os입니다./2500원<br><br><br><br><img src='play.png'>  play<br>play는 놀 때 필요한것이 모인 서비스 입니다./제작중<br><br><br><br><img src='sheet music tutorial.png'>  sheet music tutorial<br>sheet music tutorial은 악보 읽는 방법에 대해 정확히 알려드립니다./1200원<br><br><br><br><img src='yutr.png'>  yutr<br>yutr은 하기 싫은 일을 대신 해줍니다./제작중<br><br><br><br><img src='search.png'>  search<br>search는 네이버, 유튜브 등의 검색을 도와줍니다./300원<br><br><br><br>";} elseif($_GET["id"]=="yutr") {echo "<span id='yu-dw'></span><br><br>하기싫은일<br>이불피기-200원<br>영어고문-500원<br>문제풀이1장-400원<br>학교준비-600원<br>정리-800원";} elseif($_GET["id"]=="play") {echo "<span id='pl-wt'></span><br><br>하고싶은것<br>민화투-300원<br>체스-600원<br>원카드-400원<br>오목-900원<br>빙고-100원";}?></h1>
</body>
</html>