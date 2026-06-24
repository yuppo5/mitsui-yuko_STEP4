<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>フォーム入力</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h1>フォーム入力</h1>
    <form action="confirm.php" method="post">
        <label for="username">名前:</label>
        <input type="text" id="username" name="username"><br><br>


        <label for="age">年齢:</label>
        <input type="text" id="age" name="age"><br><br>


        <label for="phone">電話番号:</label>
        <input type="text" id="phone" name="phone"><br><br>


        <label for="email">メールアドレス:</label>
        <input type="text" id="email" name="email"><br><br>


        <label for="address">住所:</label>
        <input type="text" id="address" name="address"><br><br>


        <label for="question">質問:</label>
        <textarea id="question" name="question"></textarea><br><br>


        <label for="gender">性別:</label>
        <select id="gender" name="gender">
            <option value="male">男性</option>
            <option value="female">女性</option>
        </select><br><br>


        <button type="submit">送信</button>
    </form>
</body>
</html>