<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LinkShortening</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #282c34;
      color: #000000;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    p {
      font-size: 20px;
      line-height: 1.6;
      text-align: center;
    }


    /* ヘッダー全体のスタイル */
.header {
  background-color: #333; /* ヘッダーの背景色を設定 */
  color: #fff; /* テキストの色を設定 */
  padding: 10px; /* 必要に応じてパディングを設定 */
  display: flex; /* 左右に要素を配置するために Flexbox を使用 */
  justify-content: space-between; /* 左右の要素を均等に配置 */
  position: fixed; /* ヘッダーを固定位置に配置 */
  top: 0; /* ヘッダーを画面の上端に配置 */
  width: 100%; /* ヘッダーの幅を画面幅に合わせる */
}

/* 左側のリンクのスタイル */
.left-links {
  order: 1; /* 左側の要素を左側に配置 */
}

/* 右側のリンクのスタイル */
.right-links {
  order: 2; /* 右側の要素を右側に配置 */
  margin-right: 10px;
}

/* リンクの共通スタイル */
.header a {
  text-decoration: none; /* リンクの下線を削除 */
  color: #fff; /* リンクのテキスト色を設定 */
  margin: 0 10px; /* リンク間の間隔を設定 */
}

/* ホバーエフェクトを追加する場合のスタイル */
.header a:hover {
  text-decoration: underline; /* マウスオーバー時にリンクを下線表示 */
}

.fa-house {
  margin-left: 10px;
}

/* フォーム */
.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    margin-top: 10px;
}

input {
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 15px;
    width: 100%;
    box-sizing: border-box;
}

button {
    padding: 10px 50px;
    background-color: #618ae2;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px; /* ボタンと他の要素の間隔を調整 */

    transition: 0.5s;
}

button:hover {
    background-color: #3b5488;
}

a {
    color: #3498db;
}
  </style>
</head>
<body>
    <div class="header">
        <div class="left-links">
          <a href="/"><i class="fa-solid fa-house"></i></a>
          <a href="/ls/">LinkShortening</a>
          <a href="/el/">EmbeddedLink</a>
        </div>
        <div class="right-links">
            <a href="/tos">ToS</a>
            <a href="/privacy">Privacy</a>   
        </div>
      </div>
      <div class="container">
        <h1>LinkShortening</h1>
        <p>リンクを短縮することができます。<br>永遠に使えることができます。</p>
        <form action="compress.php" method="post">
            <label for="link">リダイレクト先リンク</label>
            <input type="url" id="link" name="link" required placeholder="https://example.com">

            <label for="directory">名前</label>
            <input type="text" id="directory" name="directory" placeholder="ni7.xyz/〇〇" required>

            <button type="submit">生成</button>
            <?php
        // フォームからのリダイレクト後にメッセージを表示
        if (isset($_GET['link'])) {
            echo '<p class="compressed-link">圧縮されたリンク: <a href="http://' . htmlspecialchars($_GET['link']) . '">' . htmlspecialchars($_GET['link']) . '</a></p>';
        }
        ?>
                    <?php
        // フォームからのリダイレクト後にメッセージを表示
        if (isset($_GET['error'])) {
            echo '<p class="compressed-link">ERROR: ' . htmlspecialchars($_GET['error']) . '</p>';
        }
        ?>
        </form>
    </div>
                   <!-- JavaScriptの巣窟 -->
                   <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://kit.fontawesome.com/dd69661a1b.js" crossorigin="anonymous"></script>
                   <!-- オシマイ☆ -->
                 </body>
                 </html>
</body>
</html>
