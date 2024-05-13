<?php
/**
 * 理解度チェック（DB操作基礎）
 */

$user = 'test_user';
$pwd = 'pwd';
$host = 'localhost';
$dbName = 'test_phpdb';
$dsn = "mysql:host={$host};port=8889;dbname={$dbName};";
$conn = new PDO($dsn, $user, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 以下の操作を行ってみてください。
// またtry, catchによってコードを囲んでください。

/**
 * 問１：
 * 店舗Cの全ての商品の在庫数に+10を足し合わせる
 */
// select * from test_phpdb.txn_stocks ts where shop_id = 3

// try {
//   $result = $conn->exec(
//     'update txn_stocks set amount = amount + 10
//     where shop_id = 3'
//   );
// } catch (Error $e) {
//   echo '例外処理です。<br>';
//   echo $e->getMessage();
// } finally {
//   echo '終了です。<br>';
// }


/**
 * 問２：
 * 店舗Dを以下のように追加してください。
 */
/**
 * name: '店舗D'
 * pref_id: 4
 */

// try {
//   $result = $conn->exec(
//     "insert into mst_shops(name, pref_id, updated_by)
//     values ('店舗D', 4, 'mikuriya')" );
// } catch (Error $e) {
//   echo '例外処理です。<br>';
//   echo $e->getMessage();
// } finally {
//   echo '終了です。<br>';
// }

/**
 * 問３：
 * 店舗Aの椅子の在庫数を取得してください。
 */

try {
  $result = $conn->query(
    "select amount from txn_stocks ts
    where shop_id = 1 and product_id = 2"
  )->fetch()['amount'];

  echo $result;
} catch (Error $e) {
  echo '例外処理です。<br>';
  echo $e->getMessage();
} finally {
  echo '終了です。<br>';
}