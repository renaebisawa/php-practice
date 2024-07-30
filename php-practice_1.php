<?php
// Q1 変数と文字列

$name = '海老澤';

echo "私の名前は$name";

echo "です。";

// Q2 四則演算

$num = 5 * 4;

echo $num . "\n";

$divisionResult = $num / 2;

echo $divisionResult . "\n";

// Q3 日付操作

$currentDateTime = date('Y年m月d日 H時i分s秒');

echo '現在時刻は、' . $currentDateTime . 'です' . "\n";

// Q4 条件分岐-1 if文

$device = 'windows';

if ($device == 'windows') {
    echo '使用OSは、windowsです。';
} else {
    // $deviceの値が「mac」の場合
    if ($device == 'mac') {
        echo '使用OSは、macです。';
    } else {
        // 上記2つ以外の場合
        echo 'どちらでもありません。';
    }
}

// Q5 条件分岐-2 三項演算子

$age = 25;

$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message . "\n";


// Q6 配列

$kantoRegions = array('東京都', '神奈川県', '栃木県', '千葉県', '茨城県', '群馬県', '埼玉県');

$thirdRegion = $kantoRegions[2]; // 栃木県
$fourthRegion = $kantoRegions[3]; // 千葉県

echo $thirdRegion . 'と' . $fourthRegion . 'は関東地方の都道府県です。' . "\n";


// Q7 連想配列-1

$kantoCapitals = array(
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
);

$order = array('東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県');

foreach ($order as $key) {
  echo $kantoCapitals[$key] . "\n";
}

// Q8 連想配列-2

$kantoCapitals = array(
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
);

$targetPrefecture = '埼玉県';

if (array_key_exists($targetPrefecture, $kantoCapitals)) {
  // 県庁所在地を取得
  $capital = $kantoCapitals[$targetPrefecture];
  // 結果を出力
  echo $targetPrefecture . 'の県庁所在地は、' . $capital . 'です。' . "\n";
}


// Q9 連想配列-3

$kantoCapitals = array(
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
  '愛知県' => '名古屋市',
  '大阪府' => '大阪市'
);

foreach ($kantoCapitals as $prefecture => $capital) {
  if (in_array($prefecture, array('東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'))) {
      // 関東地方の都道府県の場合
      echo $prefecture . 'の県庁所在地は、' . $capital . 'です。' . "\n";
  } else {
      // 関東地方以外の都道府県の場合
      echo $prefecture . 'は関東地方ではありません。' . "\n";
  }
}

// Q10 関数-1

function hello($name) {
  return $name . 'さん、こんにちは。';
}

echo hello('大野') . "\n";
echo hello('櫻井') . "\n";

// Q11 関数-2

function calcTaxInPrice($price) {
  $taxRate = 0.10; 
  $taxInPrice = $price * (1 + $taxRate); 
  return $taxInPrice;
}
$price = 1000; 

$taxInPrice = calcTaxInPrice($price);

echo '税抜き価格は ' . $price . ' 円で、消費税込み価格は ' . number_format($taxInPrice) . ' 円です。' . "\n";

// Q12 関数とif文

function distinguishNum($num) {
  if ($num % 2 == 0) {
      // 偶数の場合
      return $num . 'は偶数です。';
  } else {
      // 奇数の場合
      return $num . 'は奇数です。';
  }
}

// 偶数
$evenNum = 2;
echo distinguishNum($evenNum) . "\n";

// 奇数
$oddNum = 9;
echo distinguishNum($oddNum) . "\n";

// Q13 関数とswitch文

function evaluateGrade($grade) {
  switch ($grade) {
      case 'A':
      case 'B':
          return '合格です。';
      case 'C':
          return '合格ですが追加課題があります。';
      case 'D':
          return '不合格です。';
      default:
          return '判定不明です。講師に問い合わせてください。';
  }
}
echo evaluateGrade('A') . "\n"; // 合格です。
echo evaluateGrade('F') . "\n"; // 判定不明です。講師に問い合わせてください。

?>