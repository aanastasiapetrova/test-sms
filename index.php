

<?php

echo 'fksnbk jksjkn knnzklxblks';

include $_SERVER['DOCUMENT_ROOT'] . '/qtsms.class/QTSMS.class.php';
//include $_SERVER['DOCUMENT_ROOT'] . '/qtsms.class/test_config.php';

$cfg = array(
    'login' => '1690601',					// ваш логин в системе
    'password' => '16906011',				// ваш пароль
    'host' => 'https://a2p-sms.beeline.ru'		// хост для доступа к сервису
);

$sms_text = 'test sms';
$phone_num = '+79170615202';

$iwix_sms_name = 'LogicT';
$iwix_sms_period = 600;

$qtsms = new Qtsms($cfg['login'], $cfg['password'], $cfg['host']);
$result = $qtsms->post_message($sms_text, $phone_num, $phone_num, 'x124127456', $iwix_sms_period);

//header("Content-Type: text/xml; charset=UTF-8");
echo "hello";
?>

