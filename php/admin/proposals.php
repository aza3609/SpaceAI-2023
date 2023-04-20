<?php include("template_header--admin.php"); ?>

    <main class="admin-proposals">
      <div class="wrap">
        <h2>연구제안서 목록</h2>
        <table class="admin-proposals__list">
          <tr class="tr_header">
            <th><input class="checkbox check-all" type="checkbox" /></th>
            <th>No.</th>
            <th>이름</th>
            <th>연구제안서 제목</th>
          </tr>
          <tr>
            <td><input class="checkbox" type="checkbox" /></td>
            <td class="td_number">1</td>
            <td class="td_name">
              <a href="proposals_detail.php">백지윤</a>
            </td>
            <td class="td_title">
              <a download href="propasal.hwp"
                >초거성 VX Sgr의 물과 산화규소 메이저 동시 모니터링 관측 연구</a
              >
            </td>
          </tr>
          <tr>
            <td><input class="checkbox" type="checkbox" /></td>
            <td class="td_number">2</td>
            <td class="td_name">
              <a href="proposals_detail.php">백지윤</a>
            </td>
            <td class="td_title">
              <a download href="propasal.hwp"
                >초거성 VX Sgr의 물과 산화규소 메이저 동시 모니터링 관측 연구</a
              >
            </td>
          </tr>
          <tr>
            <td><input class="checkbox" type="checkbox" /></td>
            <td class="td_number">3</td>
            <td class="td_name">
              <a href="proposals_detail.php">백지윤</a>
            </td>
            <td class="td_title">
              <a download href="propasal.hwp"
                >초거성 VX Sgr의 물과 산화규소 메이저 동시 모니터링 관측 연구</a
              >
            </td>
          </tr>
          <tr>
            <td><input class="checkbox" type="checkbox" /></td>
            <td class="td_number">4</td>
            <td class="td_name">
              <a href="proposals_detail.php">백지윤</a>
            </td>
            <td class="td_title">
              <a download href="propasal.hwp"
                >초거성 VX Sgr의 물과 산화규소 메이저 동시 모니터링 관측 연구</a
              >
            </td>
          </tr>
        </table>
        <div class="admin-btn">
          <button class="delet-btn"><i data-feather="trash"></i>삭제</button>
          <button class="copy-btn">
            <i data-feather="copy"></i>메일주소 복사
          </button>
          <button class="download-btn">
            <i data-feather="download"></i>제안서 다운
          </button>
        </div>
      </div>
    </main>
    <script>
      feather.replace();
    </script>
  </body>
</html>
