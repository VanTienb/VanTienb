<?php
error_reporting(0);
$no="\033[0m";
$den="\033[1;30m";
$do="\033[1;31m";
$xanhl="\033[1;32m";
$vang="\033[1;33m";
$tim="\033[1;34m";
$hong="\033[1;35m";
$xanht="\033[1;36m";
$trang="\033[1;37m";
/***
Tool By: VAN TIEN LEAKBNOS
API Tool By: Vantien(fb.com/dvfb.coder)
Sửa Gì Thì Sửa, Không Xóa Bản Quyền Để Tôn Trọng Tác Giả
____________________________________________________________
***/
$useragent = "Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36";
/***[ Đánh Dấu Bản Quyền ]***/
$lmk_tool_dz = $trang."".$do."[".$do ."🔥".$do."] ".$trang."=> ";
$lmk_tool_vip = $trang."".$do."[".$do."🔥".$do."] ";
$thanh_thang_mau_trang = "\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n";
/***[ Config ]***/
$_SESSION['version'] = "9.5";
$_SESSION['shop'] = "zalo.me/kien-coolboy";
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
    $_SESSION['load'] = 1200;
    $_SESSION['delay'] = 2000;
} else {
    $_SESSION['load'] = 0;
    $_SESSION['delay'] = 1000;
}
/***[ Banner ]***/
$banner = "
\033[1;92m     Thương Hiệu: \033[1;33mLEAK-TOOL   🔥  \033[1;92m Coppyright:\033[1;33m Tống Văn Tiền
\033[1;33m •╔═════════════════════════☩══♛══☩═════════════════════════╗•
\033[1;33m  Zalo:\033[1;32m 0975386498              \033[1;31m╭╮╱╱╱╱╱╱╱╱╭╮
\033[1;33m  FB:\033[1;32m Đặng Văn Tiền \033[1;32m┃┃╱╱╱╱╱╱╱╱┃┃
\033[1;33m  Bản Tool:\033[1;32m Tool Gộp            \033[1;33m┃┃╱╱╭━━┳━━┫┃╭╮
\033[1;33m  Update:\033[1;32m V1.0                  \033[1;34m┃┃╱╭┫┃━┫╭╮┃╰╯╯
\033[1;33m  Thương Hiệu:\033[1;32m LEAK-TOOL         \033[1;35m┃╰━╯┃┃━┫╭╮┃╭╮╮                                        \033[1;39m ..........╰━━━┻━━┻╯╰┻╯╰╯
 \033[1;33m•╚═════════════════════════☩══✦══☩═════════════════════════╝•
\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
";
/***[ Clear + Thông Số Admin ]***/
@system("clear");
spamkbgoiy($banner, $lmk_tool_dz);
echo $lmk_tool_dz.$xanhl."Nhập Cookie Facebook$trang: ".$vang;
$cookie = trim(fgets(STDIN));
echo "\e[1;37m".str_repeat('= ', 35)."\n";
echo $lmk_tool_dz.$xanhl."Vui Lòng Nhập Delay$trang: ".$hong;
$delay = trim(fgets(STDIN));
if($delay < 1) {
echo $do."Tối Thiểu 1 Giây\n";
die();
}
echo $lmk_tool_dz.$xanhl."Kết Bạn Bao Lần Thì Dừng Tool$trang: $vang";
    $stop = trim(fgets(STDIN));
$access_token = checkcookie($cookie,$useragent);
if ($access_token == 'die') {
    echo $do."\rCookie Die!!! Hoặc Không Chính Xác\n";
die();
}
$page = thongtin('me', $cookie, $useragent);
$tenfb = explode('<', explode('>', explode('</span>', explode('<span>', $page)[2])[0])[1])[0];
$idfb = explode('%',explode('?lst=', $page)[1])[0];
#
echo "\e[1;37m".str_repeat('= ', 35)."\n";
echo $vang."ID FB: ".$xanhl.$idfb.$do." | ".$vang."Tên FB: ".$xanhl.$tenfb."".$res."\n";
echo "\e[1;37m".str_repeat('= ', 35)."\n";
while(true) {
$json = json_decode(file_get_contents("https://stoolnopro.com/api/kb.php?cookie=".$cookie), true);
$message = $json['message'];
if($message == "" or $message == NULL or empty($message)) {
echo $do."\r Hết Bạn Bè Gợi Ý Rồi, Đang Tìm\r";
} else {
  $dem++;
echo "\033[1;31m[\033[1;33m".$dem."\033[1;31m]\033[1;91m | \033[1;36m".date("H:i:s")."\033[1;31m | \033[1;33mSUCCESS\033[1;31m | \033[1;37m".$message."\n";
if ($dem >= $stop ){ echo $luc." Đã Gửi Thành Công $stop Lời Mời Kết Bạn \n"; exit; }
for ($s = $delay; $s--; $s) {
echo "\r\033[1;31m   Đợi \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m | $s | "; usleep(150000);
        echo "\r\033[1;32m   Đợi \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m | $s | "; usleep(150000);
        echo "\r\033[1;34m   Đợi \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m | $s | "; usleep(150000);
        echo "\r\033[1;35m   Đợi \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m | $s | "; usleep(150000);
        echo "\r\033[1;35m   Đợi \033[0;33m        ~>\033[0;37m LOADING \033[0;31m | $s | "; usleep(150000);
        echo "\r\033[1;35m   Đợi \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $s | ";usleep(150000);
        }
    echo "\r\e[1;95m    LMK TOOL   Đang  Đợi làm thôi :))                  \r"; 
sleep(1);
} #đóng for
} #thành công
 #đóng while
function checkcookie($cookie, $useragent)
{
    $head = array("Connection: keep-alive", "Keep-Alive: 300", "authority: business.facebook.com", "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7", "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5", "cache-control: max-age=0", "upgrade-insecure-requests: 1", "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9", "sec-fetch-site: none", "sec-fetch-mode: navigate", "sec-fetch-user: ?1", "sec-fetch-dest: document");
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://business.facebook.com/business_locations",
        CURLOPT_USERAGENT => $useragent,
        CURLOPT_COOKIE => $cookie,
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CONNECTTIMEOUT => 60,
        CURLOPT_FOLLOWLOCATION => TRUE
    ));
    $access = curl_exec($ch);
    curl_close($ch);
    $access_token = 'EAA' . explode('","', explode('EAA', $access)[1])[0];
    if (strlen($access_token) > 5) {
        return $access_token;
    } else {
        return 'die';
    }
}
function thongtin($id, $cookie, $useragent)
{

    $ch = curl_init();
    $header = array(
        "Host:m.facebook.com",
        "user-agent:$useragent",
        "accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "cookie:$cookie",
    );
    $linkbv = 'https://m.facebook.com/' . $id . '/about';
    curl_setopt($ch, CURLOPT_URL, $linkbv);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
    :'));
    $page = curl_exec($ch);
    $page1 = json_decode($page);

    return $page;
}

function spamkbgoiy($banner, $lmk_tool_dz){
    /* Copyright © 2021 - 2022 : Nguyễn Đức Phát */
    for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep($_SESSION['load']);}
}