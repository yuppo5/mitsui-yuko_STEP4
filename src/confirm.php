<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>入力内容確認</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>入力内容の確認</h1>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=$_POST["name"];
            $age=$_POST["age"];
            $phone=$_POST["phone"];
            $email=$_POST["email"];
            $address=$_POST["address"];
            $question=$_POST["question"];
            $gender=$_POST["gender"];

            //バリデーション
            if(!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z]+$/u",$name)){
                echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
            }elseif(!preg_match("/^(150|1[0-4][0-9]|[1-9]?[0-9])+$/u",$age)){
                echo "<p>年齢は0から150の間で入力してください。</p>";
            }elseif(!preg_match("/^[0-9-]+$/u",$phone)){
                echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";
            }elseif(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/u",$email)){
                echo "<p>メールアドレスの形式が正しくありません。</p>";
            }elseif(!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z0-9-]+$/u",$address)){
                echo "<p>住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。</p>"
            }else{
                //入力内容の表示
                echo "<p>名前:".htmlspecialchars($name,ENT_QUOTES,'UTF-8')."</p>";
                echo "<p>年齢:".htmlspecialchars($age,ENT_QUOTES,'UTF-8')."</p>";
                echo "<p>電話番号:".htmlspecialchars($phone,ENT_QUOTES,'UTF-8')."</p>";
                echo "<p>メールアドレス:".htmlspecialchars($email,ENT_QUOTES,'UTF-8')."</p>";
                echo "<p>住所:".htmlspecialchars($address,ENT_QUOTES,'UTF-8')."</p>";
                echo "<p>質問:".nl2br(htmlspecialchars($question,ENT_QUOTES,'UTF-8'))."</p>";
                echo "<p>性別:{$gender}</p>";
            }
        }
        ?>
    </body>
</html>