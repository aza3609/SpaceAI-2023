<?php include("template_header--admin.php"); ?>

    <main class="members-admin">
      <div class="wrap">
        <h2>회원가입자 목록</h2>
        <table class="members-admin__list">
          <tr class="tr_header">
            <th><input class="checkbox check-all" type="checkbox" /></th>
            <th>No.</th>
            <th>아이디</th>
            <th>이름</th>
            <th>휴대폰 번호</th>
            <th>소속</th>
          </tr>
          <tr>
            <td><input class="checkbox" type="checkbox" /></td>
            <td class="td_number">1</td>
            <td class="td_id">
              <a href="members_detail.php">user@example.com</a>
            </td>
            <td class="td_name">백지윤</td>
            <td class="td_phone">010-1234-5678</td>
            <td class="td_affiliation">한국천문연구원</td>
          </tr>
          <tr>
            <td><input class="checkbox" type="checkbox" /></td>
            <td class="td_number">2</td>
            <td class="td_id">
              <a href="members_detail.php">user@example.com</a>
            </td>
            <td class="td_name">백지윤</td>
            <td class="td_phone">010-1234-5678</td>
            <td class="td_affiliation">한국천문연구원</td>
          </tr>
          <tr>
            <td><input class="checkbox" type="checkbox" /></td>
            <td class="td_number">3</td>
            <td class="td_id">
              <a href="members_detail.php">user@example.com</a>
            </td>
            <td class="td_name">백지윤</td>
            <td class="td_phone">010-1234-5678</td>
            <td class="td_affiliation">한국천문연구원</td>
          </tr>
          <tr>
            <td><input class="checkbox" type="checkbox" /></td>
            <td class="td_number">4</td>
            <td class="td_id">
              <a href="members_detail.php">user@example.com</a>
            </td>
            <td class="td_name">백지윤</td>
            <td class="td_phone">010-1234-5678</td>
            <td class="td_affiliation">한국천문연구원</td>
          </tr>
        </table>
        <div class="admin-btn">
          <button class="delet-btn"><i data-feather="trash"></i>삭제</button>
          <button class="copy-btn">
            <i data-feather="copy"></i>메일주소 복사
          </button>
        </div>
      </div>
    </main>
    <script>
      feather.replace();
    </script>
  </body>
</html>
