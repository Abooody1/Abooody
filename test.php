<?php

ob_start();
$API_KEY ='475886222:AAGux5oJfaThYyNdJwcrpDjbp-CNnBW6xrw'; 
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$ali = file_get_contents("ali.txt");
mkdir("data");
$ADMIN = 159801317;
$abooody="";
if($text && $text!="/start"){
$ev1 = $text;
$a1 = str_replace('ا','ا',$ev1);
$b1 = str_replace("ب","بہۣۗہۣۗ" ,$a1);
$c1 = str_replace("ت","تہۣۗہۗ ",$b1);
$d1 = str_replace("ح","حہۣۗہۣۗ",$c1);
$e1 = str_replace("ج","جہۣۗہۣۗ",$d1);
$f1 = str_replace("خ","خہۣۗہۣۗ",$e1);
$g1 = str_replace("د","د",$f1);
$h1 = str_replace("ذ","د",$g1);
$i1 = str_replace("ر","رۣۗ",$h1);
$j1 = str_replace("ز","ہۣۗہۣزۗ",$i1);
$k1 = str_replace("س","سہۣۗہۣۗ",$j1);
$l1 = str_replace("ش","شہۣۗہۣۗ",$k1);
$m1 = str_replace("ص","صہۣۗہۣۗ",$l1);
$n1 = str_replace("ض","ضہۣۗہۣۗ",$m1);
$o1 = str_replace("ظ","ظہۣۗہۣۗ",$n1);
$p1 = str_replace("غ","غہۣۗہۣۗ",$o1);
$q1 = str_replace("ف","فہۣۗہۣۗ",$p1);
$r1 = str_replace("ق","قہۣۗہۣۗ",$q1);
$s1 = str_replace("ك","كہۣۗہۣۗ",$r1);
$t1 = str_replace("ل","لہۣۗہۣۗ",$s1);
$u1 = str_replace("ن","نہۣۗہۣۗ",$t1);
$v1 = str_replace("ه","هہۣۗہۣۗ",$u1);
$w1 = str_replace("و","ہۣۗہوۣۗ",$v1);
$x1 = str_replace("ط","طہۣۗہۗ",$w1);
$y1 = str_replace("ث","ثہۣۗہۣۗ",$x1);
$z1 = str_replace("ي","يہۣۗہۣۗ",$y1);
$z2 = str_replace("ع","عہۣۗہۣۗ",$z1);
$z3 = str_replace("م","مہۣۗہۣۗ",$z2);
$abooody=$abooody."\n".$z3;

/*bot('sendMessage',[
    'chat_id'=>$chat_id,
'text'=>" $z3 "       
]);*/
}
if($text == "/start"){
$user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('Member.txt',$add_user);
    }
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"مرحبا بك سيدي👨‍💻
في اول بوت زخرفة بالتليجرام يقدم هذا النوع من الزخارف💯
يقوم البوت بزخرفة النصوص العربية😉
إلى 10زخارف يقبلها الفيس بوك😮🙌.

هيا ارسل اسمك بالعربية لازخرفه لك✅

ملاحظة:إذا لديك زخارف يقبلها الفيس وجميلة ارسلها للمطور عبر بوت التواصل😉👇لإضافتها.",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[

[
['text'=>"AFMods🤖", 'url'=>"t.me/AFMods"],['text'=>"المطور❤️", 'url'=>"t.me/mail_ru_bot"]
],
]
])
]);
}
if($text && $text!="/start"){
$ev1 = $text;
$a1 = str_replace('ا','ا',$ev1);
$b1 = str_replace("ب","بہہ" ,$a1);
$c1 = str_replace("ت","تہہ",$b1);
$d1 = str_replace("ح","حہہ",$c1);
$e1 = str_replace("ج","جہہ",$d1);
$f1 = str_replace("خ","خہہ",$e1);
$g1 = str_replace("د","د",$f1);
$h1 = str_replace("ذ","د",$g1);
$i1 = str_replace("ر","ر",$h1);
$j1 = str_replace("ز","ز",$i1);
$k1 = str_replace("س","سہہ",$j1);
$l1 = str_replace("ش","شہہ",$k1);
$m1 = str_replace("ص","صہہ",$l1);
$n1 = str_replace("ض","ضہہ",$m1);
$o1 = str_replace("ظ","ظہہ",$n1);
$p1 = str_replace("غ","غہہ",$o1);
$q1 = str_replace("ف","فہہ",$p1);
$r1 = str_replace("ق","قہہ",$q1);
$s1 = str_replace("ك","كہہ",$r1);
$t1 = str_replace("ل","لہہ",$s1);
$u1 = str_replace("ن","نہہ",$t1);
$v1 = str_replace("ه","هہہ",$u1);
$w1 = str_replace("و","و",$v1);
$x1 = str_replace("ط","طہہ",$w1);
$y1 = str_replace("ث","ثہہ",$x1);
$z1 = str_replace("ي","يہہ",$y1);
$z2 = str_replace("ع","عہہ",$z1);
$z3 = str_replace("م","مہہ",$z2);
$abooody=$abooody."\n".$z3;

/*bot('sendMessage',[
    'chat_id'=>$chat_id,
'text'=>" $z3 "       
]);*/
}
if($text && $text!="/start"){
$ev1 = $text;
$a1 = str_replace('ا','ا',$ev1);
$b1 = str_replace("ب","بہۣۙ" ,$a1);
$c1 = str_replace("ت","تہۣۙ",$b1);
$d1 = str_replace("ح","حہۙ",$c1);
$e1 = str_replace("ج","جہۣۙ",$d1);
$f1 = str_replace("خ","خہۣۙ",$e1);
$g1 = str_replace("د","د",$f1);
$h1 = str_replace("ذ","ذ",$g1);
$i1 = str_replace("ر","ر",$h1);
$j1 = str_replace("ز","ز",$i1);
$k1 = str_replace("س","سہۣۙ",$j1);
$l1 = str_replace("ش","شہۣۙ",$k1);
$m1 = str_replace("ص","صہۣۙ",$l1);
$n1 = str_replace("ض","ضہۣۙ",$m1);
$o1 = str_replace("ظ","ظہۣۙ",$n1);
$p1 = str_replace("غ","غہۣۙ",$o1);
$q1 = str_replace("ف","فہۣۙ",$p1);
$r1 = str_replace("ق","قہۣۙ",$q1);
$s1 = str_replace("ك","كہۣۙ",$r1);
$t1 = str_replace("ل","لہۣۙ",$s1);
$u1 = str_replace("ن","نہۣۙ",$t1);
$v1 = str_replace("ه","هہۣۙ",$u1);
$w1 = str_replace("و","ہۣۙو",$v1);
$x1 = str_replace("ط","طہۣۙ",$w1);
$y1 = str_replace("ث","ثہۣۙ",$x1);
$z1 = str_replace("ي","يہۣۙ",$y1);
$z2 = str_replace("ع","عہۣۙ",$z1);
$z3 = str_replace("م","مہۣۙ",$z2);
$abooody=$abooody."\n".$z3;

/*bot('sendMessage',[
    'chat_id'=>$chat_id,
'text'=>" $z3 "       
]);*/
}
if($text && $text!="/start"){
$ev1 = $text;
$a1 = str_replace('ا','ا',$ev1);
$b1 = str_replace("ب","بہٰٰٰٰ۫۫",$a1);
$c1 = str_replace("ت","تہٰٰٰٰ۫۫",$b1);
$d1 = str_replace("ح","حہٰٰٰٰ۫۫",$c1);
$e1 = str_replace("ج","جہٰٰٰٰ۫۫",$d1);
$f1 = str_replace("خ","خہٰٰٰٰ۫۫",$e1);
$g1 = str_replace("د","د",$f1);
$h1 = str_replace("ذ","ذ",$g1);
$i1 = str_replace("ر","ر",$h1);
$j1 = str_replace("ز","ز",$i1);
$k1 = str_replace("س","سہٰٰٰٰ۫۫",$j1);
$l1 = str_replace("ش","شہٰٰٰٰ۫۫",$k1);
$m1 = str_replace("ص","صہٰٰٰٰ۫۫",$l1);
$n1 = str_replace("ض","ضہٰٰٰٰ۫۫",$m1);
$o1 = str_replace("ظ","ظہٰٰٰٰ۫۫",$n1);
$p1 = str_replace("غ","غہٰٰٰٰ۫۫",$o1);
$q1 = str_replace("ف","فہٰٰٰٰ۫۫",$p1);
$r1 = str_replace("ق","قہٰٰٰٰ۫۫",$q1);
$s1 = str_replace("ك","كہٰٰٰٰ۫۫",$r1);
$t1 = str_replace("ل","لہٰٰٰٰ۫۫",$s1);
$u1 = str_replace("ن","نہٰٰٰٰ۫۫",$t1);
$v1 = str_replace("ه","هہٰٰٰٰ۫۫",$u1);
$w1 = str_replace("و","ہٰٰٰ۫و",$v1);
$x1 = str_replace("ط","طہٰٰٰٰ۫۫",$w1);
$y1 = str_replace("ث","ثہٰٰٰٰ۫۫",$x1);
$z1 = str_replace("ي","يہٰٰٰٰ۫۫",$y1);
$z2 = str_replace("ع","عہٰٰٰٰ۫۫",$z1);
$z3 = str_replace("م","مہٰٰٰٰ۫۫",$z2);
$abooody=$abooody."\n".$z3;
}
if($text && $text!="/start"){
$ev1 = $text;
$a1 = str_replace('ا','ا',$ev1);
$b1 = str_replace("ب","بہٰ",$a1);
$c1 = str_replace("ت","تہٰ",$b1);
$d1 = str_replace("ح","حہٰ",$c1);
$e1 = str_replace("ج","جہٰ",$d1);
$f1 = str_replace("خ","خہٰ",$e1);
$g1 = str_replace("د","د",$f1);
$h1 = str_replace("ذ","ذ",$g1);
$i1 = str_replace("ر","ر",$h1);
$j1 = str_replace("ز","ز",$i1);
$k1 = str_replace("س","سہٰ",$j1);
$l1 = str_replace("ش","شہٰ",$k1);
$m1 = str_replace("ص","صہٰ",$l1);
$n1 = str_replace("ض","ضہٰ",$m1);
$o1 = str_replace("ظ","ظہٰ",$n1);
$p1 = str_replace("غ","غہٰ",$o1);
$q1 = str_replace("ف","فہٰ",$p1);
$r1 = str_replace("ق","قہٰ",$q1);
$s1 = str_replace("ك","كہٰ",$r1);
$t1 = str_replace("ل","لہٰ",$s1);
$u1 = str_replace("ن","نہٰ",$t1);
$v1 = str_replace("ه","هہٰ",$u1);
$w1 = str_replace("و","ہٰو",$v1);
$x1 = str_replace("ط","طہٰ",$w1);
$y1 = str_replace("ث","ثہٰ",$x1);
$z1 = str_replace("ي","يہٰ",$y1);
$z2 = str_replace("ع","عہٰ",$z1);
$z3 = str_replace("م","مہٰ",$z2);
$abooody=$abooody."\n".$z3;
}
if($text && $text!="/start"){
$ev1 = $text;
$a1 = str_replace('ا','ا',$ev1);
$b1 = str_replace("ب","بہﱟﱟ",$a1);
$c1 = str_replace("ت","تہﱟﱟ",$b1);
$d1 = str_replace("ح","حہﱟﱟ",$c1);
$e1 = str_replace("ج","جہﱟﱟ",$d1);
$f1 = str_replace("خ","خہﱟﱟ",$e1);
$g1 = str_replace("د","د",$f1);
$h1 = str_replace("ذ","ذ",$g1);
$i1 = str_replace("ر","ر",$h1);
$j1 = str_replace("ز","ز",$i1);
$k1 = str_replace("س","سہﱟﱟ",$j1);
$l1 = str_replace("ش","شہﱟﱟ",$k1);
$m1 = str_replace("ص","صہﱟﱟ",$l1);
$n1 = str_replace("ض","ضہﱟﱟ",$m1);
$o1 = str_replace("ظ","ظہﱟﱟ",$n1);
$p1 = str_replace("غ","غہﱟﱟ",$o1);
$q1 = str_replace("ف","فہﱟﱟ",$p1);
$r1 = str_replace("ق","قہﱟﱟ",$q1);
$s1 = str_replace("ك","كہﱟﱟ",$r1);
$t1 = str_replace("ل","لہﱟﱟ",$s1);
$u1 = str_replace("ن","نہﱟﱟ",$t1);
$v1 = str_replace("ه","هہﱟﱟ",$u1);
$w1 = str_replace("و","ہٰو",$v1);
$x1 = str_replace("ط","طہﱟﱟ",$w1);
$y1 = str_replace("ث","ثہﱟﱟ",$x1);
$z1 = str_replace("ي","يہﱟﱟ",$y1);
$z2 = str_replace("ع","عہﱟﱟ",$z1);
$z3 = str_replace("م","مہﱟﱟ",$z2);
$abooody=$abooody."\n".$z3;
}
if($text && $text!="/start"){
$ev1 = $text;
$a1 = str_replace('ا','ا',$ev1);
$b1 = str_replace("ب","بـِہـِ",$a1);
$c1 = str_replace("ت","تـِہـِ",$b1);
$d1 = str_replace("ح","حـِہـِ",$c1);
$e1 = str_replace("ج","جـِہـ",$d1);
$f1 = str_replace("خ","خـِہـِ",$e1);
$g1 = str_replace("د","د",$f1);
$h1 = str_replace("ذ","ذ",$g1);
$i1 = str_replace("ر","ر",$h1);
$j1 = str_replace("ز","ز",$i1);
$k1 = str_replace("س","سـِہـِ",$j1);
$l1 = str_replace("ش","شـِہـِ",$k1);
$m1 = str_replace("ص","صـِہـِ",$l1);
$n1 = str_replace("ض","ضـِہـِ",$m1);
$o1 = str_replace("ظ","ظـِہـِ",$n1);
$p1 = str_replace("غ","غـِہـِ",$o1);
$q1 = str_replace("ف","فـِہـِ",$p1);
$r1 = str_replace("ق","قـِہـِ",$q1);
$s1 = str_replace("ك","كـِہـِ",$r1);
$t1 = str_replace("ل","لـِہـِ",$s1);
$u1 = str_replace("ن","نـِہـِ",$t1);
$v1 = str_replace("ه","هـِہـِ",$u1);
$w1 = str_replace("و","ـِہـِو",$v1);
$x1 = str_replace("ط","طـِہـِ",$w1);
$y1 = str_replace("ث","ثـِہـِ",$x1);
$z1 = str_replace("ي","يـِہـِ",$y1);
$z2 = str_replace("ع","عـِہـِ",$z1);
$z3 = str_replace("م","مـِہـِ",$z2);
$abooody=$abooody."\n".$z3;
}
if($text && $text!="/start"){
$ev1 = $text;
$a1 = str_replace('ا','ا',$ev1);
$b1 = str_replace("ب","بہٰؒہ",$a1);
$c1 = str_replace("ت","تہٰؒہ",$b1);
$d1 = str_replace("ح","حہٰؒہ",$c1);
$e1 = str_replace("ج","جہٰؒہ",$d1);
$f1 = str_replace("خ","خہٰؒہ",$e1);
$g1 = str_replace("د","د",$f1);
$h1 = str_replace("ذ","ذ",$g1);
$i1 = str_replace("ر","ر",$h1);
$j1 = str_replace("ز","ز",$i1);
$k1 = str_replace("س","سہٰؒہ",$j1);
$l1 = str_replace("ش","شہٰؒہ",$k1);
$m1 = str_replace("ص","صہٰؒہ",$l1);
$n1 = str_replace("ض","ضہٰؒہ",$m1);
$o1 = str_replace("ظ","ظہٰؒہ",$n1);
$p1 = str_replace("غ","غہٰؒہ",$o1);
$q1 = str_replace("ف","فہٰؒہ",$p1);
$r1 = str_replace("ق","قہٰؒہ",$q1);
$s1 = str_replace("ك","كہٰؒہ",$r1);
$t1 = str_replace("ل","لہٰؒہ",$s1);
$u1 = str_replace("ن","نہٰؒہ",$t1);
$v1 = str_replace("ه","هہٰؒہ",$u1);
$w1 = str_replace("و","ہٰؒہو",$v1);
$x1 = str_replace("ط","طہٰؒہ",$w1);
$y1 = str_replace("ث","ثہٰؒہ",$x1);
$z1 = str_replace("ي","يہٰؒہ",$y1);
$z2 = str_replace("ع","عہٰؒہ",$z1);
$z3 = str_replace("م","مہٰؒہ",$z2);
$abooody=$abooody."\n".$z3;
}
if($text && $text!="/start"){
$ev1 = $text;
$a1 = str_replace('ا','ا',$ev1);
$b1 = str_replace("ب","بے",$a1);
$c1 = str_replace("ت","تے",$b1);
$d1 = str_replace("ح","حے",$c1);
$e1 = str_replace("ج","جے",$d1);
$f1 = str_replace("خ","خے",$e1);
$g1 = str_replace("د","د",$f1);
$h1 = str_replace("ذ","ذ",$g1);
$i1 = str_replace("ر","ر",$h1);
$j1 = str_replace("ز","ز",$i1);
$k1 = str_replace("س","سے",$j1);
$l1 = str_replace("ش","شے",$k1);
$m1 = str_replace("ص","صے",$l1);
$n1 = str_replace("ض","ضے",$m1);
$o1 = str_replace("ظ","ظے",$n1);
$p1 = str_replace("غ","غے",$o1);
$q1 = str_replace("ف","فے",$p1);
$r1 = str_replace("ق","قے",$q1);
$s1 = str_replace("ك","كے",$r1);
$t1 = str_replace("ل","لے",$s1);
$u1 = str_replace("ن","نے",$t1);
$v1 = str_replace("ه","هے",$u1);
$w1 = str_replace("و","و",$v1);
$x1 = str_replace("ط","طے",$w1);
$y1 = str_replace("ث","ثے",$x1);
$z1 = str_replace("ي","يے",$y1);
$z2 = str_replace("ع","عے",$z1);
$z3 = str_replace("م","مے",$z2);
$abooody=$abooody."\n".$z3;
}
if($text && $text!="/start"){
$ev1 = $text;
$a1 = str_replace('ا','ا',$ev1);
$b1 = str_replace("ب","بہۧﹻﹻ",$a1);
$c1 = str_replace("ت","تہۧﹻﹻ",$b1);
$d1 = str_replace("ح","حہۧﹻﹻ",$c1);
$e1 = str_replace("ج","جہۧﹻﹻ",$d1);
$f1 = str_replace("خ","خہۧﹻﹻ",$e1);
$g1 = str_replace("د","د",$f1);
$h1 = str_replace("ذ","ذ",$g1);
$i1 = str_replace("ر","ر",$h1);
$j1 = str_replace("ز","ز",$i1);
$k1 = str_replace("س","سہۧﹻﹻ",$j1);
$l1 = str_replace("ش","شہۧﹻﹻ",$k1);
$m1 = str_replace("ص","صہۧﹻﹻ",$l1);
$n1 = str_replace("ض","ضہۧﹻﹻ",$m1);
$o1 = str_replace("ظ","ظہۧﹻﹻ",$n1);
$p1 = str_replace("غ","غہۧﹻﹻ",$o1);
$q1 = str_replace("ف","فہۧﹻﹻ",$p1);
$r1 = str_replace("ق","قہۧﹻﹻ",$q1);
$s1 = str_replace("ك","كہۧﹻﹻ",$r1);
$t1 = str_replace("ل","لہۧﹻﹻ",$s1);
$u1 = str_replace("ن","نہۧﹻﹻ",$t1);
$v1 = str_replace("ه","هہۧﹻﹻ",$u1);
$w1 = str_replace("و","ہۣۙو",$v1);
$x1 = str_replace("ط","طہۧﹻﹻ",$w1);
$y1 = str_replace("ث","ثہۧﹻﹻ",$x1);
$z1 = str_replace("ي","يہۧﹻﹻ",$y1);
$z2 = str_replace("ع","عہۧﹻﹻ",$z1);
$z3 = str_replace("م","مہۧﹻﹻ",$z2);
$abooody=$abooody."\n".$z3;

bot('sendMessage',[
    'chat_id'=>$chat_id,
'text'=>" $ev1 \n $abooody ",
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
        [['text'=>'المطور 👨🏼‍💻', 'url'=>"https://t.me/mail_ru_bot"]],
        [['text'=>'تابع جديدنا', 'url'=>"https://t.me/AFMods"]],
]
])
]);

}
elseif($text == "/abooody" && $from_id == $ADMIN){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"مرحبا بك سيدي المدير في الاعدادات الخاصه بك",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [
              ['text'=>"اعضاء البوت"],['text'=>"رساله عامه"]
              ],
              ],'resize_keyboard'=>true
        ])
            ]);
        }
elseif($text == "اعضاء البوت" && $from_id == $ADMIN){
 sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
 sendmessage($chat_id , " ْعضو مشترك :$member_count" , "html");
}
elseif($text == "رساله عامه" && $from_id == $ADMIN){
    file_put_contents("ali.txt","bc");
 sendaction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"حسنا عبد الغفور اكتب رسالتك الان",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
   [['text'=>'/abooody']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($ali == "bc" && $from_id == $ADMIN){
    file_put_contents("ali.txt","none");
 SendAction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"تم ارسال رسالتك الى جميع اعضاء البوت ",
  ]);
 $all_member = fopen( "Member.txt", "r");
  while( !feof( $all_member)) {
    $user = fgets( $all_member);
   SendMessage($user,$text,"html");
  }
}
?>
/*
اول بوت زخرفة يقبلها الفيس بوك
write by Developer
~~~~~~~~~~~~
Abd Alghafoor haj aref
#sooon.........
*//
