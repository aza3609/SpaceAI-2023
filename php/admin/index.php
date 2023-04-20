<?php include("template_header--admin.php"); ?>

    <main class="admin-main bg-color">
      <div class="wrap columns-2">
        <h2>SpaceAI 관리자 메뉴</h2>
        <button class="btn-hover" onclick="location='members.php'">
          회원가입자
        </button>
        <button class="btn-hover" onclick="location='proposals.php'">
          연구제안서
        </button>
        <button
          class="btn-hover"
          onclick="location='s-participants.php'"
        >
          S 트랙 참가자
        </button>
        <button
          class="btn-hover"
          onclick="location='c-paricipants.php'"
        >
          C 트랙 참가자
        </button>
      </div>
    </main>
    <script>
      feather.replace();
    </script>
  </body>
</html>
