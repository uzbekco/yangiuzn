<?php
ob_start();
define('API_KEY','[*1428131175:AAHo3R6X9omiaE2BH-kRG1UADPLuyckpRYo*]');
//tokenni yozing
$admin = "[**1171894731**]";
$kun = date('d-m-20y', strtotime('2 hour'));
$soat= date('H:i', strtotime('2 hour'));
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
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$mtext = $message->text;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$tx = $message->text;
$first_name = $message->from->first_name;
$step = file_get_contents("data/$fadmin/name.txt");


//callback
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

//bu yerni o'zgartirishingiz mumkin.


// start
    if(stripos($mtext,"") !== false){
  $text = "";
  $a=json_encode(bot(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ])));
}

// start
    if(stripos($mtext,"/start") !== false){
  $text = "🔁 Bu Bot Guruhni Kirdi-Chiqtilardan Tozalaydi! [*Advokat_Sbot*] ni Guruhingizga Admin Qiling Keyin Ko'rasiz!
 🎩 Bot Admini: <a href='tg://user?id=[**ADMIN**]'>[**Shox Xacker**]</a>";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=>'html',
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[
          [['text'=>'♨ Buyruqlar','callback_data'=>"buyruq"],
          ['text'=>'🔥 Pul ishlash','callback_data'=>"referal"]]
       ]
    ])
  ]));
}

if($data=="buyruq"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"/screen saytnomi - saytni rasmga olish
url= so'z - share ssilka tayyorlash
#nick so'z - Chiroyli usulda ism yoki nik yasash
/new_year - Yangi yilga qolgan vaqtni bilish
/bot va so'z - Keep Calmga yozish
/love va so'z - Yurakchaga yozish",
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]]
           ]
        ])
    ]);
}




if($data=="referal"){
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>"*Pul Ushlash Uchun Eng Zor Botlar Royhati Va Ular 100% ISHONCHLI*",
        'parse_mode'=>'markdown',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>'3⃣ Minimalka 20 rubl','url'=>'https://t.me/omadlikun_tanlovi2_bot?start=4389042']],
              [['text'=>'5⃣ Minimalka 3 dollor','url'=>'https://t.me/omadlikun_tanlovi2_bot?start=4389042']],
              [['text'=>"🔙Ortga qaytish", 'callback_data'=>"back"]],
           ]
        ])
    ]);
}







$step = file_get_contents("azouzb/$chat_id.step");
$orqa = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Orqaga"]]]
]);
if($tx == "/send" and $chat_id == $admin){
      ty($ch);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"matni kiritin",
      'reply_markup'=>$orqa
      ]);
      file_put_contents("azo/$chat_id.step","send");
    }
    if($step == "send" and $chat_id == $admin){
      ty($ch);
      if($tx == "Orqaga"){
      del("azo/$chat_id.step");
      }else{
      ty($chat_id);
$idss=file_get_contents("azo.dat");
      $idszs=explode("\n",$idss);
      foreach($idszs as $idlat){
      bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$tx,
      ]);
      }
      unlink("azo/$chat_id.step");
      }
    }
    if($tx=="Orqaga"){
        bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"ok",
            'reply_markup'=>$key
            ]);
}

if($data=="back"){
  $text = "🔁 Bu Bot Guruhni Kirdi-Chiqtilardan Tozalaydi! [*Advokat_Sbot*] ni Guruhingizga Admin Qiling Keyin Ko'rasiz!
 🎩 Bot Admini: <a href='tg://user?id=[**ADMIN**]'>[**Shox Xacker**]</a>";
    bot('editmessagetext',[
        'chat_id'=>$callcid,
        'message_id'=>$callmid,
        'text'=>$text,
        'parse_mode'=>'html',
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
          [['text'=>'♨ Buyruqlar','callback_data'=>"buyruq"],
          ['text'=>'🔥 Pul ishlash','callback_data'=>"referal"]]
           ]
        ])
    ]);
}
if($soat<"77"){
$usa = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $usa->result;
$kun3 = date('N'); 
$yil =date('Y');
$mast ="💎 Bosh Homiy:  [*Advokat_Sbot*]"; 
$kun =date('d-M', strtotime('2 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$message="👋 Guruhimizga Hush Kelibsiz!
😊 Kuningiz Hayrli Va Barokatli O'tsin!
☺️ Eslatib O'tamiz:
🗓 Bugun: $kun $yil-yil
🔵 Hafta kuni: $hafta1
⌚️ Soat: $soat
👥 Guruh Azolari: $count
💎 Bosh Homiy:  [*@Hacker_Bey*]"; 
  bot('setChatDescription',[ 
        'chat_id'=>$chat_id, 
        'description'=>"$message", 
        'parse_mode'=>'html', 
    ]); 
}

if(mb_stripos($tx,"/start")!==false){

   $baza=file_get_contents("azo.dat");
   if(mb_stripos($baza,$chat_id) !==false){
   }else{
   $txt="\n$chat_id";
   $file=fopen("azo.dat","a");
   fwrite($file,$txt);
   fclose($file);
   }
}

  
if(mb_stripos($tx,"stat")!==false){
      $baza=file_get_contents("azo.dat");
      $all=substr_count($baza,"\n");
      $gr=substr_count($baza,"-");
      $us=$all-$gr;
      bot('sendmessage',[
   'chat_id'=>$chat_id,
   'parse_mode'=>'html',
   'text'=>"<b>📡 Bot Foydalanuvchilari
👥 Super Group: $gr
👤 Userlar: $us
👨‍👩‍👧‍👦 Jami: $all
📣 @Hacker_Bey",
  ]);
}




if($tx == "/new_year") {   
$kun1 = date('z ',strtotime('2 hour')); 
$a = 364;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;
  bot('sendmessage',[   
   'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,  
   'text'=>"😃* Urra!
🎄 Yangi Yilga $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!
❄️ Kirib Kelayotgan Yangi yil Bilan! *", 'parse_mode'=>'markdown', 
]);   
  bot('sendChatAction',['chat_id'=>$chat_id,
 'action'=>"typing"]);
}   


if(mb_stripos($tx,"#nick") !== false){
$c = explode(" ",$tx);
$content = $c[1];
$content=str_replace('a',' 🇦',$content);
$content=str_replace('b',' 🇧',$content);
$content=str_replace('c',' 🇨',$content);
$content=str_replace('d',' 🇩',$content);
$content=str_replace('e',' 🇪',$content);
$content=str_replace('f',' 🇫',$content);
$content=str_replace('g',' 🇬',$content);
$content=str_replace('h',' 🇭',$content);
$content=str_replace('i',' 🇮',$content);
$content=str_replace('j',' 🇯',$content);
$content=str_replace('k',' 🇰',$content);
$content=str_replace('l',' 🇱',$content);
$content=str_replace('m',' 🇲',$content);
$content=str_replace('n',' 🇳',$content);
$content=str_replace('o',' 🇴',$content);
$content=str_replace('p',' 🇵',$content);
$content=str_replace('q',' 🇶',$content);
$content=str_replace('r',' 🇷',$content);
$content=str_replace('s',' 🇸',$content);
$content=str_replace('t',' 🇹',$content);
$content=str_replace('u',' 🇺',$content);
$content=str_replace('v',' 🇻',$content);
$content=str_replace('w',' 🇼',$content);
$content=str_replace('x',' 🇽',$content);
$content=str_replace('y',' 🇾',$content);
$content=str_replace('z',' 🇿',$content);
$content=str_replace('‘​','*',$content);
$content=str_replace('A',' 🇦',$content);
$content=str_replace('B',' 🇧',$content);
$content=str_replace('C',' 🇨',$content);
$content=str_replace('D',' 🇩',$content);
$content=str_replace('E',' 🇪',$content);
$content=str_replace('F',' 🇫',$content);
$content=str_replace('G',' 🇬',$content);
$content=str_replace('H',' 🇭',$content);
$content=str_replace('I',' 🇮',$content);
$content=str_replace('J',' 🇯',$content);
$content=str_replace('K',' 🇰',$content);
$content=str_replace('L',' 🇱',$content);
$content=str_replace('M',' 🇲',$content);
$content=str_replace('N',' 🇳',$content);
$content=str_replace('O',' 🇴',$content);
$content=str_replace('P',' 🇵',$content);
$content=str_replace('Q',' 🇶',$content);
$content=str_replace('R',' 🇷',$content);
$content=str_replace('S',' 🇸',$content);
$content=str_replace('T',' 🇹',$content);
$content=str_replace('U',' 🇺',$content);
$content=str_replace('V',' 🇻',$content);
$content=str_replace('W',' 🇼',$content);
$content=str_replace('X',' 🇽',$content);
$content=str_replace('Y',' 🇾',$content);
$content=str_replace('Z',' 🇿',$content);
$content=str_replace('‘​','*',$content);

bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>$content,
]);  
}











if($tx== "Vaqt" or $tx== "Soat" or $tx== "vaqt" or $tx== "soat" or $tx== "sana" or $tx== "Sana" or $tx== "вакт" or $tx== "Вакт" or $tx== "Bugun" or $tx== "bugun"){ 
      $kun3 = date('N'); 
      $yil =date('Y');
      $mast ="[*Advokat_Sbot*]"; 
      $kun =date('d-M', strtotime('2 hour')); 
      $soat=date('H:i:s', strtotime('2 hour')); 
      $hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
      $ex=explode("$kun3",$hafta); 
      $hafta1="$ex[1]"; 
      $message="🗓 <b>Bugun: $kun $yil-yil</b>
🔵 Hafta kuni: <b>$hafta1</b>
⌚️ Soat: <b>$soat</b>
👨‍💻 $mast"; 
  bot('sendmessage',[ 
        'chat_id'=>$chat_id, 
        'text'=>"$message", 
        'parse_mode'=>'html', 
    ]); 
}

$textmessage = isset($update->message->text)?$update->message->text:'';
$text1 = $message->text;
if(mb_stripos($tx,"url=")!==false){
$rek=" ";
$str=str_replace("$rek","%20","$tx");
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'parse_mode'=>'markdown',
   'text'=>"*Mana sizga share qiladigan kod:*
`http://telegram.me/share/url?$str`",
  ]);
}

// yangi azo
elseif(isset($update->message-> new_chat_member )){
    $name = $message->from->first_name;
bot('deleteMessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$mesid,
    ]);
}

// chiqib ketdi
elseif(isset($update->message-> left_chat_member )){
    $name = $message->from->first_name;
bot('deleteMessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$mesid,
    ]);
}
// chiqib ketdi
elseif(isset($update->message-> leaveChat )){
    $name = $message->from->first_name;
bot('deleteMessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$mesid,
    ]);
}
$abrorjon = json_decode(file_get_contents('php://input'), true);
$ctitle = $abrorjon['message']['chat']['title'];
$ufname = $abrorjon['message']['from']['first_name'];
$uname = $abrorjon['message']['from']['last_name'];
$ulogin = $abrorjon['message']['from']['username'];
$uid = $abrorjon['message']['from']['id'];
$user_id = $abrorjon['message']['from']['id'];

if(mb_stripos($tx,"Admin")!==false){
  bot('sendmessage',[
   'chat_id'=>$admin,
   'parse_mode'=>'markdown',
   'text'=>"✉️ *Yangi Xabar!*
👥 Guruh: *$ctitle*
👤 Kimdan: *$ufname $uname*
📎 Login: @$ulogin
🆔 : *$uid* 
📝 Matn: *$tx*",
  ]);
}

if(mb_stripos($tx,"myid")!==false){
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text'=>"` $chat_id `",
'parse_mode'=>'markdown'
]);
}
if(mb_stripos($tx,"https://")!==false){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mesid,
]);
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text'=>"*$first_name, Bu Guruhda Reklama Tashlash Mumkin Emas!*",
'disable_web_page_preview'=>'true',
'parse_mode'=>'markdown'
]);
}

if(mb_stripos($tx,"http://")!==false){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mesid,
]);
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text'=>"* $first_name, Bu Guruhda Reklama Tashlash Mumkin Emas! *",
'disable_web_page_preview'=>'true',
'parse_mode'=>'markdown'
]);
} 
if(mb_stripos($tx,"t.me")!==false){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mesid,
]);
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text'=>"<b> $first_name, Bu Guruhda Reklama Tashlash Mumkin Emas! </b>",
'parse_mode'=>'html'
]);
} 
if(mb_stripos($tx,"/screen") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://api.site-shot.com/?url=$ex[1]",
'caption'=>"by [*Advokat_Sbot*]",
]);
}
if($forward){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
bot ('SendMessage',[
"chat_id"=> $chat_id,
'text'=>"<a href='tg://user?id=$id'>$first_name</a> <b>Kechirasiz bu guruhda forward qilish mumkin emas!</b>",
'parse_mode'=>"html",
]);
}
}

if(mb_stripos($tx,"/bot") !== false){ 
$ex = explode(" ",$tx);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://www.keepcalmstudio.com/-/p.php?t=%EE%BB%AA%0D%0AKEEP%0D%0ACALM%0D%0A$ex[1]%0D%0A$ex[2]%0D%0A$ex[3]%0D%0A$ex[4]%0D%0A$ex[5]%0D%0A$ex[6]&bc=000000&tc=FFFFFF&cc=FFFFFF&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by [*Advokat_Sbot*]",
]);
}
if(mb_stripos($tx,"/love") !== false){ 
$ex = explode(" ",$tx);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=$ex[1]%EE%BB%AE$ex[2]%20$ex[3]%0A$ex[4]%0D%0ABy%20%20[*BOTNAME*]&bc=000000&tc=ffffff&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"by this [*Advokat_Sbot*]",
]);
}
elseif(isset($update->message-> sticker )){
    $name = $message->from->first_name;
bot('deleteMessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$mesid,
    ]);
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text'=>"* $first_name, Bu Guruhda Sticker Tashlash Mumkin Emas! *
[🔥Pul ishlash](https://t.me/omadlikun_tanlovi2_bot?start=4389042)
",
'disable_web_page_preview'=>'true',
'parse_mode'=>'markdown'
]);
}
elseif(isset($update->message-> video )){
    $name = $message->from->first_name;
bot('deleteMessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$mesid,
    ]);
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text'=>"*$first_name, Bu Guruhda Video Tashlash Mumkin Emas! *
[🔥Pul ishlash](https://t.me/omadlikun_tanlovi2_bot?start=4389042)
",
'disable_web_page_preview'=>'true',
'parse_mode'=>'markdown'
]);
}
elseif(isset($update->message-> link )){
    $name = $message->from->first_name;
bot('deleteMessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$mesid,
    ]);
bot('sendMessage',[
      'chat_id'=>$chat_id,
'text'=>"* $first_name, Bu Guruhda Reklama Tashlash Mumkin Emas! *
[🔥Pul ishlash](https://t.me/omadlikun_tanlovi2_bot?start=4389042)
",
'disable_web_page_preview'=>'true',
'parse_mode'=>'markdown'
]);
}