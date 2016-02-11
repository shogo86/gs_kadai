<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>BeFriends</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:700,400">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <p class="site-title-sub">Language Exchange Servise</p>
        <h1 class="site-title">世界と話そう</h1>
        <p class="site-description">100カ国以上の人たちと友達になろう</p>
        <div class="buttons">
            <a class="button" href="#login">ログイン</a>
            <a class="button button-showy" href="#contact">新規登録</a>
        </div>
    </header>
    <section class="about" id="about">
        <h2 class="heading">ABOUT</h2>
        <p class="about-text">
            はじめまして。日本でWebデザイナーをしています。
            <br> デザインの専門学校を卒業し、制作会社での業務経験を経て、現在はフリーランスとして働いています。
        </p>
        <p class="about-text">
            このサイトは「HTML/CSS モダンコーディング」という書籍のサンプルとして作られた、架空のWebデザイナーのポートフォリオサイトです。
            <br> このサンプルのようなサイトをいちから作る過程を通して、HTMLとCSSの実践的なコーディングノウハウを学ぶことができます。
        </p>
    </section>
    <section class="works">
        <h2 class="heading">WORKS</h2>
        <div class="works-wrapper">
            <div class="work-box tree">
                <img class="work-image" src="images/tree.jpg" alt="制作事例1">
                <div class="work-description">
                    <div class="work-description-inner">
                        <p class="work-text">
                            ひとつめの制作事例が入ります。
                            <br> 簡単な説明が入ります。
                            <br> 使用ツール：XXX, XXX, XXX
                            <br>
                            <a href="#" class="button button-ghost">READ MORE</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="work-box building">
                <img class="work-image" src="images/building.jpg" alt="制作事例2">
                <div class="work-description">
                    <div class="work-description-inner">
                        <p class="work-text">
                            ふたつめの制作事例が入ります。
                            <br> 簡単な説明が入ります。
                            <br> 使用ツール：XXX, XXX, XXX
                            <br>
                            <a href="#" class="button button-ghost">READ MORE</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="work-box lake">
                <img class="work-image" src="images/lake.jpg" alt="制作事例3">
                <div class="work-description">
                    <div class="work-description-inner">
                        <p class="work-text">
                            みっつめの制作事例が入ります。
                            <br> 簡単な説明が入ります。
                            <br> 使用ツール：XXX, XXX, XXX
                            <br>
                            <a href="#" class="button button-ghost">READ MORE</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="work-box sky">
                <img class="work-image" src="images/sky.jpg" alt="制作事例4">
                <div class="work-description">
                    <div class="work-description-inner">
                        <p class="work-text">
                            よっつめの制作事例が入ります。
                            <br> 簡単な説明が入ります。
                            <br> 使用ツール：XXX, XXX, XXX
                            <br>
                            <a href="#" class="button button-ghost">READ MORE</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="skills">
        <h2 class="heading">MY SKILLS</h2>
        <div class="skills-wrapper">
            <div class="skill-box">
                <i class="skill-icon fa fa-lightbulb-o"></i>
                <div class="skill-title">IDEA</div>
                <p class="skill-text">
                    何かを考えることが好きです。
                    <br> 新しいことを思いついては試しています。
                    <br> ディレクションの経験もあります。
                </p>
            </div>
            <div class="skill-box">
                <i class="skill-icon fa fa-paint-brush"></i>
                <div class="skill-title">DESIGN</div>
                <p class="skill-text">
                    見た目の綺麗さだけじゃなくて、
                    <br> 使いやすさ、情報の伝わりやすさなど、
                    <br> その先まで考えることを意識しています。
                </p>
            </div>
            <div class="skill-box">
                <i class="skill-icon fa fa-code"></i>
                <div class="skill-title">CODING</div>
                <p class="skill-text">
                    HTML/CSSコーディングも行います。
                    <br> 正しく美しいマークアップと、
                    <br> 今後の変更への強さを考慮しています。
                </p>
            </div>
        </div>
    </section>
    <section class="login" id="login">
        <h2 class="heading">ログイン</h2>
        <form class="contact-form" method="post" action="login_check.php">
            <input type="text" name="email" placeholder="メールアドレス">
            <input type="password" name="pass" placeholder="パスワード">
            <input type="submit" value="SEND">
        </form>
    </section>

    <section class="contact" id="contact">
        <h2 class="heading">新規登録</h2>
        <form class="contact-form" method="post" action="entry_check.php">
            <input type="text" name="name" placeholder="お名前">
            <input type="text" name="email" placeholder="メールアドレス">
            <input type="password" name="pass" placeholder="パスワード">
            <input type="password" name="pass2" placeholder="パスワード確認">
            <select name="main">
                <option value="0">得意な言語を選択してください</option>
                <option value="1">日本語</option>
                <option value="2">英語</option>
                <option value="3">中国語</option>
            </select>
            <select name="sub">
                <option value="0">学びたい言語を選択してください</option>
                <option value="1">日本語</option>
                <option value="2">英語</option>
                <option value="3">中国語</option>
            </select>
            <input type="submit" value="SEND">
        </form>
    </section>
    <footer class="footer">
        © sample site
    </footer>
    <script src="lib/placeholders.min.js"></script>
</body>

</html>