<?php
// 正規表現を使って形式が正しいかチェックしてみよう。
/**
 * よく使う表現
 * . 任意の一文字
 * * 0回以上の繰り返し
 * + 1回以上の繰り返し
 * {n} n回の繰り返し
 * [] 文字クラスの作成
 * [abc] aまたはbまたはc
 * [^abc] aまたはbまたはc以外
 * [0-9] 0~9まで
 * [a-z] a~zまで
 * $ 終端一致
 * ^ 先頭一致
 * \w 半角英数字とアンダースコア
 * \d 数値
 * \ エスケープ
 */


/**
 * 郵便番号
 *
 * 001-0012 -> OK
 * 001-001 -> NG
 * 2.2-3042 -> NG
 * wd3-2132 -> NG
 * 124-56789 -> NG
 */

// $zip_code = '001-0012';
// if(preg_match("/^\d+-\d{4}$/", $zip_code, $result)) {
//   echo '検索成功';
//   print_r($result);
// } else {
//   echo '検索失敗';
// }

/**
 * Email
 * . _ - と半角英数字が可能
 *
 * example000@gmail.com -> OK
 * example-0.00@gmail.com -> OK
 * example-0.00@ex.co.jp -> OK
 * example/0.00@ex.co.jp -> NG
 */

// $email = 'example/0.00@ex.co.jp';
// if(preg_match("/^([0-9A-Za-z])+([0-9A-Za-z\._-])*@([0-9A-Za-z\._-])+$/", $email, $result)) {
//   echo '検索成功';
//   print_r($result);
// } else {
//   echo '検索失敗';
// }

// $email = 'example/0.00@ex.co.jp';
// if(preg_match("/^[\w\.-]+@[\w\-]+\.[\w\.\-]+$/", $email, $result)) {
//   echo '検索成功';
//   print_r($result);
// } else {
//   echo '検索失敗';
// }


/**
 * HTML
 * 見出しタグ(h1~h6)の中身のみ取得してみよう。
 */

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <h1>見出し1</h1>
  <h2>見出し2</h2>
  <h3>見出し3</h3>
</body>
</html>';


if(preg_match_all("/<h[1-6]>(.+)<\/h[1-6]>/i", $html, $result)) {
  // echo '検索成功';
  // print_r($result);
  print_r($result[count($result) - 1]);
} else {
  // echo '検索失敗';
}