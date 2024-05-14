<?php

/**
 * 理解度チェック（画面とDB操作クラス）
 * 
 * 以下のフォームで飛んできたproduct_idで商品テーブル（mst_products）を検索して
 * 画面上に文字を表示してください。
 * 
 * ※ DataSourceクラスを使用してください。
 * 
 * 商品が存在する場合
 * -> 商品名は[{商品名}]です。
 * 
 * 商品が存在しない場合
 * -> 一致する商品が見つかりません。
 * 
 * レコードは存在するが、delete_flg が 1 の場合
 * -> 一致する商品が見つかりません。
 * 
 * DB操作で例外が発生した場合
 * -> 時間をおいて再度お試しください。
 */

require_once 'datasource.php';

use db\DataSource;

try {

    if (isset($_POST['product_id'])) {
        $db = new DataSource();
        $product_id = $_POST['product_id'];

        $db->begin();

        $sql = '
        select name, delete_flg from mst_products mp
        where mp.id = :product_id
        ';

        $result = $db->selectOne(
            $sql,
            [
                ':product_id' => $product_id
            ]
        );

        $db->commit();
    }

    if (!empty($result) && $result['delete_flg'] !== 1 ) {
        echo "商品名は[{$result['name']}]です。";
    } else {
        echo "一致する商品が見つかりません。";
    }

} catch (PDOException $e) {

    echo '時間をおいて再度お試しください。<br>';
    echo $e->getMessage();
    $db->rollBack();
}

?>

<form action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST">
    商品ID：<input type="text" name="product_id">
    <input type="submit">
</form>

<?php
