<?php
include_once "dbconfig.php";
$month = date("m");
$day = date("d");
$query = 'SELECT * from jumak ORDER BY `like` DESC;';
$query2 = "SELECT * from booth WHERE `date` LIKE '%$day%';";
$result = mysqli_query($link,$query);
$result2 = mysqli_query($link,$query2);
$total_count = mysqli_num_rows($result);
$total_count2 = mysqli_num_rows($result2);
$name = array();
$class = array();
$like = array();
$num = array();
$booth = array();
$img_path = array();
$date = array();
$booth_path = array();
$comment_path = array();
$no = 0;
$no2 = 0;
while($row = mysqli_fetch_array($result)){
    $num[$no] = $row['num'];
    $name[$no] = $row['name'];
    $class[$no] = $row['class'];
    $like[$no] = $row['like'];
    $img_path[$no] = $row['img_path'];
    $no++;
}
while($row2 = mysqli_fetch_array($result2)){
    $booth_num[$no2] = $row2['num'];
    $booth[$no2] = $row2['booth_name'];
    $date[$no2] = $row2['date'];
    $booth_path[$no2] = $row2['booth_path'];
    $no2++;
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" charset="utf-8">
	<link rel="shortcut icon" href="http://52.79.170.113/likelion.ico"/>
    <title>목포대 대동제 | 축제정보제공</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <link href="css/grayscale.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <!--daum api-->
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=99690d88ac73c52bcd1cf3a50efb969e"></script>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106822733-1"></script>
  </head>

  <body id="page-top">
    <!-- 네비게이션 -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img style = "width: 20%" src="img/logo.png" alt="">
          <img style = "width: 20%" src="img/logo2.png" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <li class="fa fa-bars"></li>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">축제일정</a>
            </li>
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#booth">오늘의 부스</a>
              </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#jumak">주막정보</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#vote">주막투표</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- HEADER -->
    <header class="masthead">
<!--      <div class="intro-body">-->
<!--        <div class="container">-->
<!--          <div class="row">-->
<!--            <div class="col-lg-8 mx-auto">-->
<!--            <!---->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
    </header>

    <!-- 축제 일정 -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h3>축제일정</h3>
              <img class="line-img" src="img/bg_img/crossline2.png" alt="">
              <div>
                  <button class="btn btn1" rel="plan1" style="background-color: #cf6044; color: #fff; border-color: #cf6044" type="button">9월 26일</button>
                  <button class="btn btn1" rel="plan2" type="button">9월 27일</button>
                  <button class="btn btn1" rel="plan3" type="button">9월 28일</button>
              </div>
              <div>
                  <div class="plan" style="display:block;" id="plan1">
                      <img class="content-img" src="img/lineup1.jpg" alt="">
                      <img class="line-img" src="img/bg_img/crossline.png" alt="">
                      <img class="content-img" src="img/plan/plan.jpg"  alt="">
                  </div>
                  <div class="plan" style="display:none" id="plan2">
                      <img class="content-img" src="img/lineup2.jpg" alt="">
                      <img class="line-img" src="img/bg_img/crossline.png" alt="">
                      <img class="content-img plan" src="img/plan/plan2.jpg"  alt="">
                  </div>
                  <div class="plan" style="display:none" id="plan3">
                      <img class="content-img" src="img/lineup3.jpg" alt="">
                      <img class="line-img" src="img/bg_img/crossline.png" alt="">
                      <img class="content-img plan" src="img/plan/plan3.jpg"  alt="">
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <section id="booth" class="booth-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h3>오늘의 부스정보</h3>
                    <img class="line-img" src="img/bg_img/crossline2.png" alt="">
                    <table class="booth table" style="margin: auto; table-layout: fixed; width:100%;">
                        <thead>
                            <th id="<?php echo $day;?>" style="text-align: center; font-size: 17px;"><?php echo $month;?>월 <?php echo $day ?>일</th>
                        </thead>
                        <tbody>
                        <?php if($total_count2 <= 0){?>
                        <tr><td><p>현재 일정이 없습니다.</p></td></tr>
                        <?php } ?>
                            <?php for($i=0; $i<$total_count2; $i++){ ?>
                                <tr><td><button type="button" class="btn btn2" data-toggle="modal" data-target="#booth<?php echo $i; ?>" ><?php echo $booth[$i];?></button></td></tr>
                        <?php }?>
                        </tbody>
                    </table>
                    <?php for($i=0; $i<$total_count2;$i++){ ?>
                    <div class="modal modal-center fade" id="booth<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                        <div class="modal-dialog modal-center modal-80size">
                            <div class="modal-content modal-80size scroll">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">X</span>
                                        <span class="sr-only">닫기</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel"><?php echo $booth[$i]; ?></h4>
                                </div>
                                <div class="modal-body">
                                    <?php $arr= explode("|",$booth_path[$i]);
                                    for($j=0; $j<sizeof($arr); $j++){ ?>
                                    <img style="width:100%" src="<?php echo $arr[$j];?>" alt="">
                                    <?php } ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section id="jumak" class="jumak-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h3>주막정보</h3>
              <img class="line-img" src="img/bg_img/crossline2.png" alt="">
            <div id="map" style="width: 80%; height: 300px; margin: auto;"></div>
              <?php for($i=0;$i<$total_count; $i++) { ?>
                <button type="button" class="btn btn2" data-toggle="modal" data-target="#jumak<?php echo $i; ?>" >
                  <?php echo $name[$i]; ?>
                </button>
            <div class="modal modal-center fade" id="jumak<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
              <div class="modal-dialog modal-center modal-80size">
                <div class="modal-content modal-80size scroll">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">X</span>
                      <span class="sr-only">닫기</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo $name[$i];?></h4>
                  </div>
                  <div class="modal-body">
                      <?php $arr2=explode("|",$img_path[$i]);
                      for($j=0;$j<sizeof($arr2);$j++){ ?>
                      <img style="width:100%"src=<?php echo $arr2[$j];?> alt="">
                      <?php }?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
                  </div>
                </div>
              </div>
            </div>
              <?php }?>
          </div>
        </div>
      </div>
    </section>

    <section id="vote" class="vote-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
              <div>
                  <h3>주막투표</h3>
                  <img class="line-img" src="img/bg_img/crossline2.png" alt="">
                  <h4 class="rank">1위</h4>
                  <h4 class="rank">2위</h4>
                  <h4 class="rank">3위</h4>
                  <img class="line-img" src="img/bg_img/crossline.png" alt="">
                  <div class="display-container">
                      <button class="nt_btn display-left" onclick="plusDivs(-1)">&#10094;</button>
                      <?php for($i=0; $i<3; $i++) {
                          $arr3=explode("|",$img_path[$i]); ?>
                          <img class="show_img" src=<?php echo $arr3[0]; ?>>
                      <?php }?>
                      <button class="nt_btn display-right" onclick="plusDivs(+1)">&#10095;</button>
                  </div>
                  <p>추천해주고싶은 주막의 버튼을 클릭해주세요.</p>

                  <img class="line-img" src="img/bg_img/crossline.png" alt="">
              </div>
                <table class="table" style="margin: auto; table-layout: fixed; width:100%;">
                    <colgroup>
                        <col style="width: 15%;" />
                        <col style="width: 25%;" />
                        <col style="width: 35%;" />
                        <col style="width: 20%;" />
                        <col style="width: 15%;" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th style="text-align: center">순위</th>
                            <th style="text-align: center">주막이름</th>
                            <th style="text-align: center">주최</th>
                            <th style="text-align: center">득표수</th>
                            <th style="text-align: center">UP</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for($i=0; $i<$total_count; $i++) { ?>
                    <tr>
                        <td style="vertical-align: middle;"><?php echo $i+1; ?></td>
                        <td style="vertical-align: middle;"><?php echo $name[$i]; ?></td>
                        <td style="vertical-align: middle;"><?php echo $class[$i]; ?></td>
                        <td style="vertical-align: middle;"><?php echo $like[$i]; ?>표</td>
                        <td style="vertical-align: middle;"><img class="like thumb" id=<?php echo $num[$i]; ?> src="img/thumb.png" alt=""></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                </table>
              <p>(매일 00:00시 마다 득표수는 초기화됩니다.)</p>
              <p>하루에 최대 3번까지 투표가능합니다.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="jumak-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">

                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
      <div class="container text-center footer">
          <iframe id="iframe1" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fmokpolion%2F&width=450&layout=standard&action=like&size=large&show_faces=true&share=true&height=80&appId" width="100%" height="30" style="border:none; overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
          <h5 style="color: black">Developers</h5>
          <img class="line-img" src="img/bg_img/crossline2.png" alt="">
          <div class="center-list">
              <ul class="list-inline">
                  <li><img class="icon btn-ico btn-outline" src="img/profile/juda.jpg" alt="프로필 사진"><br>정유다</li>
                  <li><a href="https://www.facebook.com/profile.php?id=100004319043497"><img class="icon btn-ico btn-outline" src="img/profile/gon.jpg" alt="프로필 사진"></a><br>이형곤</li>
                  <li><a href="https://www.facebook.com/profile.php?id=100002347333017"><img class="icon btn-ico btn-outline" src="img/profile/hong.jpg" alt="프로필 사진"></a><br>박주홍</li>
                  <li><a href="https://www.facebook.com/hansoncoding"><img class="icon btn-ico btn-outline" src="img/profile/seunghan.jpg" alt="프로필 사진"></a><br>손승한</li>
                  <li><a href="https://www.facebook.com/Jeongmin.Oo"><img class="icon btn-ico btn-outline" src="img/profile/jeongmin.png" alt="프로필 사진"></a><br>오정민</li>
                  <li><img class="icon btn-ico btn-outline" src="img/profile/dong.jpg" alt="프로필 사진"><br>두동근</li>
                  <li><img class="icon btn-ico btn-outline" src="img/profile/seongmin.jpg" alt="프로필 사진"><br>배성민</li>
                  <li><img class="icon btn-ico btn-outline" src="img/profile/jaemin.jpg" alt="프로필 사진"><br>이재민</li>
                  <li><img class="icon btn-ico btn-outline" src="img/profile/chunghwan.jpg" alt="프로필 사진"><br>정춘곤</li>
              </ul>
          </div>
          <p>Created By &copy; Likelion AT MokpoUniv.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->

    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.js"></script>
  </body>

</html>

