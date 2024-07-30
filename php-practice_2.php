<?php
// Q1 tic-tac問題

for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 == 0 && $i % 5 == 0) {
      echo "tic-tac\n";
  } elseif ($i % 4 == 0) {
      echo "tic\n";
  } elseif ($i % 5 == 0) {
      echo "tac\n";
  } else {
      echo $i . "\n";
  }
}

// Q2 多次元連想配列
1.
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

foreach ($personalInfos as $info) {
  if ($info['name'] === 'Bさん') {
      echo $info['name'] . 'の電話番号は' . $info['tel'] . 'です。';
      break; 
  }
}

2.

foreach ($personalInfos as $index => $info) {

  echo ($index + 1) . '番目の' . $info['name'] . 'のメールアドレスは' . $info['mail'] . 'で、電話番号は' . $info['tel'] . 'です。' . "\n";
}

3.

$ageList = [25, 30, 18];

foreach ($personalInfos as $index => &$info) {
    // $index に基づいて $ageList から年齢を取得し、'age' キーとして追加
    $info['age'] = $ageList[$index];
}

var_dump($personalInfos);


// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(120, '二宮');

// 出力結果を表示
echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。';

// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($courseName)
    {
       echo $this->studentName . 'は' . $courseName . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$ninomiya = new Student(120, '二宮');
$ninomiya->attend('PHP');



// Q5 定義済みクラス
1.

$currentDate = new DateTime();

$currentDate->modify('-1 month');

echo $currentDate->format('Y-m-d');

2.

$today = new DateTime();

$specifiedDate = new DateTime('1992-04-25');

$interval = $today->diff($specifiedDate);

$totalDays = $interval->days;

echo 'あの日から ' . $totalDays . ' 日経過しました。';



?>