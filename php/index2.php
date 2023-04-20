<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SpaceAI 2023</title>
    <link rel="stylesheet" href="inc/styles.css" />
    <link rel="stylesheet" as="style" crossorigin href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.6/dist/web/static/pretendard.css" />
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <header class="header header--main">
      <a class="header__logo" href="index2.php"
        ><img src="img/spaceai-logo-white.svg" alt="logo"
      /></a>
      <nav class="header__nav">
        <ul>
          <li><a href="about.php">SpaceAI 소개</a></li>
          <li><a href="s-track.php">Scientist 트랙</a></li>
          <li><a href="c-track.php">Citizen Scientist 트랙</a></li>
          <li><a href="achievement.php">연구성과</a></li>
          <li><a href="contact.php">문의하기</a></li>
        </ul>
      </nav>
      <div class="header__util">
        <a href="my-page_account.php">마이페이지</a>
        <a href="login.php">로그인</a>
      </div>
    </header>

    <main>
      <div class="main-visual">
        <div class="main-visual__img">
          <img src="img/main.png" alt="" />
        </div>
        <div class="main-visual__contents">
          <div class="main-visual__title">
            <span>인공지능, 우주를 만나다</span>
            <span>SpaceAI 2023</span>
          </div>
          <div class="main-visual__quick-row">
            <a href="s-track.php">
              <div class="main-visual__quick">
                <span class="color">Submit</span>
                <span class="main-visual__schedule">연구제안서 제출하기</span>
                <span class="main-visual__date">접수기간 : - 5월 7일(일) 자정</span>
              <img src="img/main-quick-arrow.svg" alt="">
            </div>
            </a>
            <a href="s-track.php">
              <div class="main-visual__quick">
                <span class="color">Registration</span>
                <span class="main-visual__schedule">Scientist 트랙 참가 신청하기</span>
                <span class="main-visual__date">접수기간 : 5월 15일(월) - 5월 31일(수)</span>
                <img src="img/main-quick-arrow.svg" alt="">
              </div>
            </a>
            <a>
              <div class="main-visual__quick main-visual__quick--disabled">
                <span class="color">Registration</span>
                <span class="main-visual__schedule">Citizen Scientist 트랙 참가 신청하기</span>
                <span class="main-visual__date">5월 중 접수 예정</span>
                <img src="img/main-quick-arrow.svg" alt="">
              </div>
            </a>
          </div>
        </div>
      </div>
      <section class="main-spaceai">
        <div class="wrap">
          <h2>SpaceAI 2023<br><span class="color">인공지능, 우주를 만나다</span></h2>
          <p>
            <span class="bold">SpaceAI</span>는 우주과학기술 분야에 인공지능(Artificial Intelligence, AI)을 적용할 수 있도록 지원하는 프로그램입니다. </br>프로그램은 과학기술 분야 전문가들을 위한 <span class="bold">Scientist 트랙</span>과 일반 시민들도 참여할 수 있는 <span class="bold">Citizen Scientist 트랙</span>이 각각 독립적으로 진행됩니다. </br>SpaceAI를 통해 우주에 대한 우리 인류의 이해가 넓혀질 것으로 기대하며, 프로그램을 통해 개발된 여러가지 AI기술 인프라는 제품화하여 향후 다양한 분야에 활용될 수 있도록 지원할 것입니다. </br>SpaceAI 2023에 여러분들의 많은 관심과 참여 부탁드립니다.
          </p>
        </div>
      </section>
      <section class="main-program">
        <div class="wrap">
          <h2>Program<span>프로그램</span></h2>
          <div class="main-program__wrap columns-2">
            <div>
              <h4>Scientist 트랙</h4>
              <p>최신 AI 기술을 사용하여 다양한 우주 분야 연구가 수행될 수 있도록 연구 주제 발굴, 전문가들로 이루어진 팀 구성, 다양한 빅데이터와 AI 모델 개발을 위한 플랫폼을 제공하고자 합니다.</p>
              <a class="color" href="s-track.php">자세히 보기<i data-feather="arrow-right"></i></a>
            </div>
            <div>
              <h4>Citizen Scientist 트랙</h4>
              <p>학생/시민들을 대상으로 실제 우주 분야에서 사용되는 AI 모델의 개발 과정을 교육함으로써 앞으로 대한민국 우주시대를 열어갈 인재를 양성하는데 기여하고자 합니다.</p>
              <a class="color" href="c-track.php">자세히 보기<i data-feather="arrow-right"></i></a>
            </div>
          </div>
        </div>
      </section>
      <section class="main-schedule">
        <div class="wrap">
          <h2>Schedule<span>일정</span></h2>
          <div class="columns-2">
            <div>
              <h4>Scientist 트랙</h4>
              <div class="main-schedule__rows">
                <div>
                  <span class="bold color">연구제안서 접수</span><span>5월 7일(일) 자정까지</span>
                </div>
                <div>
                  <span class="bold">참가신청 접수</span><span>5월 15일(월) - 5월 31일(수) </span>
                </div>
                <div>
                  <span><span class="bold">킥오프 워크숍</span><br>연구과제별 팀 구성 및 업무 논의 </span><span>6월 예정</span> 
                </div>
                <div>
                  <span><span class="bold">팀별 업무 진행</span><br>데이터세트 준비 및 AI 모델 설계 </span><span>6월 - 7월</span>
                </div>
                <div>
                  <span><span class="bold">단기간 집중협업캠프</span><br>AI 모델 개발/학습 </span><span>8월 예정</span>
                </div>
                <div>
                  <span><span class="bold">AI 모델 성능평가 및 연구결과 정리/활용</span><br>논문, 특허, API 등</span><span>9월 - 11월</span>
                </div>
               <div>
                <span><span class="bold">SpaceAI 2023 컨퍼런스</span><br>연구결과 발표 및 프로그램 마무리 </span><span>12월 예정</span>
              </div>
    
              </div>
            </div>
            <div>
              <h4>Citizen Scientist 트랙</h4>
              <p>추후 업로드 예정</p>
            </div>
          </div>
        </div>
        <!--
        <div class="wrap">
        <h2>Schedule<span>일정</span></h2>
          <p>Space AI 프로그램은 관련 분야 대학원생 및 연구자들을 위한 <span>Scientist 트랙</span>과 학생들과 <br/>일반 시민들의 AI 장벽을 낮추기 위한 <span>Citizen Scientist 트랙</span> 각각이 독립적으로 진행될 예정입니다.</p>
          <div class="main-schedule__months">
            <h4></h4>
            <span>4월</span>
            <span>5월</span>
            <span>6월</span>
            <span>7월</span>
            <span>8월</span>
            <span>9월</span>
            <span>10월</span>
            <span>11월</span>
          </div>
          <div class="main-schedule__track main-schedule__track--s">
            <h4>Scientist<br>트랙</h4>
            <div>신청서 접수<span>연구제안서: 4월 말까지</br>참가신청서: 5월 말까지</span></div>
            <div>워크숍<span>팀 구성 및 업무 분장</span></div>
            <div>팀별 업무 진행<span>데이터 세트 준비,</br>AI 모델 설계</span></div>
            <div>단기간 집중협업캠프<span>AI 모델 개발/학습/훈련</span></div>
            <div>AI 모델 성능평가 및 연구결과 정리/활용<span>논문, 특허, API 등</span></div>
          </div>
          <div class="main-schedule__track main-schedule__track--c">
            <h4>Citizen Scientist <br/>트랙</h4>
            <div>데이터 세트 생성</div>
            <div>프로그래밍 교육</div>
            <div>집중 캠프</br>(AI 교육)</div>
            <div>데이터 서비스</div>
          </div>
    </div>-->
      </section>
      <section class="main-institutes">
        <div class="wrap"><img src="img/main-institutes.png" alt=""></div>
      </section>
</main>
<?php include("template_footer.php"); ?>
