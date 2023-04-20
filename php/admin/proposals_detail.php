<?php include("template_header--admin.php"); ?>

    <main class="admin-detail bg-color">
      <div class="wrap">
        <h2>연구 제안서</h2>
        <form id="proposal_form" action="">
          <div class="form_row">
            <h5><label>이름</label></h5>
            <input type="text" placeholder="백지윤" />
          </div>
          <div class="form_row">
            <h5><label>소속</label></h5>
            <input type="password" placeholder="(주)위즈랩" />
          </div>
          <div class="form_row">
            <h5><label>이메일</label></h5>
            <input type="email" placeholder="jiyun@wyslab.com" />
          </div>
          <div class="form_row">
            <h5><label>핸드폰 번호</label></h5>
            <input type="text" placeholder="010-1234-5678" />
          </div>
          <div class="form_row">
            <h5><label>연구제안서 제목</label></h5>
            <input
              type="text"
              placeholder="초거성 VX Sgr의 물과 산화규소 메이저 동시 모니터링 관측 연구"
            />
          </div>
          <div class="form_row">
            <h5><label>제출 파일</label></h5>
            <a class="color" href="" download=""
              >SpaceAI_2023_연구제안서_백지윤.hwp</a
            >
          </div>
          <button
            class="gray-btn"
            type="button"
            onclick="location='proposals.php'"
          >
            목록으로
          </button>
        </form>
      </div>
    </main>

    <script>
      feather.replace();
    </script>
  </body>
</html>
