<?php

?>
<!DOCTYPE html>
<html>
<head>
    <script src="javascript.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>CPAとは？デジタルマーケティングの基本知識 | バリューアップ</title>
    <meta content="リスティング広告、SNS広告などのデジタルマーケティングでよく耳にする専門用語。意味、計算方法、CPAを下げる方法まで詳しくご紹介します。" name="description">
</head>

<body>
    <p>
    <h1>【マーケティング基本用語】CPA</h1>
    <h2>CPAの意味と計算方法</h2>    
    <p>
        CPA（Cost per Conversion）とは、購入などの目標・成果を獲得するためにかかった1人あたりの広告コストを指します。<br>
        計算式は「広告コスト ÷ コンバージョン数」です。<br>
        
        例：ある商品に100万円の投じた結果、100人のコンバージョンを獲得した場合のCPAは、「100万円 ÷ 100人 = 1万円」になります。<br>
    </p>

    <h2>CPAはなぜ重要？</h2>
    <p>
        CPAは、プロモーションがどれほど効果的だったかを評価する際の指標としてよく使われます。<br>
        CPAが低ければ低いほど、1件あたりのコンバージョン獲得に対する広告コストが低く、その広告が効果的だったと評価できます。<br>
    </p>


    <h2>CPA 計算シミュレーター</h2>
    <p>
        広告の適切なCPAは、コンバージョンの対象や予算などの詳細に応じて異なります。<br>
        プロモーションを開始する際には、よく検討して採算の取れるCPAを設定する必要があります。<br>
        シミュレーターで計算してみましょう。<br>
    </p>

    <form action="index.php" method="POST">
            <div>
                <label for="cost">
                    広告コスト: <input type="number" name="cost" value="<?php echo $cost; ?>" /><br>
                </label>
            </div>
            <div>
                <label for="cv">
                    コンバージョン（CV）: <input type="number" name="cv" value="<?php echo $cv; ?>" /><br>
                </label>
            </div>
            <input type="submit" value="算出">
    </form>

    <p>
    <?php
    if ($cpa !== false) {
        echo "CPA: ￥" . number_format($cpa, 0) . " / コンバージョン";
    }
    ?>
    </p>

    <h1>代理店をお探しですか？</h1>
    <p>
        バリューアップはEC事業専門のデジタルマーケティングエージェンシーです。<br>
        リスティング広告、SNS広告の戦略的運用はぜひ当社にお任せください。
    </p>

</body>
</html>