<?php
/**
 * 例外処理
 */

function throwException() {
    $bool = false;
    $bool->method();
}

try {

    // new PDO('', '', '');
    // $bool = false;
    // $bool->method();

    throwException();

    echo '通常処理が最後まで実行されました。<br>';

} catch(PDOException $e) {

    echo 'PDOException<br>';
    echo '例外処理が実行されました。<br>';
    echo $e->getMessage() . '<br>';

} catch(Error $e) {

    echo '例外処理が実行されました。<br>';
    echo $e->getMessage() . '<br>';

} finally {

    echo '終了処理が実行されました。<br>';

}