<!DOCTYPE html>
<html lang="ja">
    
<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">       
</head>
  
<div class="header_logo">
               <img src="4eachblog_logo.jpg">
</div>
   
   
<body>
   <header>
        <ul class="menu">
           
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
           
        </ul>
    </header>
    
    
    <main>
       
       <div class="left">
       
       <h1>プログラミングに役立つ掲示板</h1>
       
       <p></p>
       
       <h2>入力フォーム</h2>
       <form method="post" action="insert.php">
           <div>
               <label>ハンドルネーム</label>
               <br>
               <input type="text" class="text" size="35" name="handlename">
           </div>
           
           <div>
               <label>タイトル</label>
               <br>
               <input type="text" class="text" size="35" name="title">
           </div>
           
           <div>
                <label>コメント</label>
                <br>
                <textarea cols="35" rows="7" name="comments">
                </textarea>
           </div>
           
           <div>
               <input type="submit" class="submit" value="投稿する">
           </div>
           
                      
        </form>
           
           
           
           <div class="kiji">
               <h3>タイトル</h3>
               <div class="contents">
                   記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                   記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                   記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                   <div class='handlename'>posted by 通りすがり</div>
               </div>
               
               
           </div>
           
           
           <div class="kiji">
               <h3>タイトル</h3>
               <div class="contents">
                   記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                   記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                   記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                   <div class='handlename'>posted by 通りすがり</div>
               </div>
               
               
           </div>
       
       </div>
       
       
       <div class="right">
       
       <h2>人気の記事</h2>
        <ul>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>いま人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
        </ul>
       
        <h2>オススメリンク</h2>
        <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
        </ul>
       
        <h2>カテゴリ</h2>
        <ul>
            <li>HTML</li>
            <li>PHP</li>
            <Li>MySQL</Li>
            <li>JavaScript</li>
        </ul>
       
       </div>
       
    
    </main>
    
    
    
</body>    
    

    
</html>