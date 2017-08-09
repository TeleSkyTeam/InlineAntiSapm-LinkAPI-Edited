<?php
ob_start();
/*
AntiSpamBot
V 1.1
@TeleSkyTeam
Edit : @SHila_Sali
*/
define('API_KEY','*TOKEN*');
//__________ Shilan __________
//فانکشن FALASBot :
function FALASBot($method,$datas=[]){
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
//__________ @Shila_Sali __________
//متغیر ها :
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
mkdir("data/$from_id");
$chat_id = $message->chat->id;
mkdir("data/$chat_id");
mkdir("data/$chat_id/$from_id");
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
mkdir("data/username.txt/$username");
$textmassage = $message->text;
$chatid = $update->callback_query->message->chat->id;
$fm = $update->callback_query->from->id;
$step= file_get_contents("data/$from_id/file.txt");
$owners= file_get_contents("data/$chat_id/owner.txt");
$owners2= file_get_contents("data/$chatid/owner.txt");
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$welcome= file_get_contents("data/$chat_id/welcome.txt");
$textwelcome= file_get_contents("data/$chat_id/textwelcome.txt");
$Dev = *ID*;
$txtt = file_get_contents('data/users.txt');
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_id = $forward_from_chat->id;
$data = $update->callback_query->data;
$firstcall = $update->callback_query->message->chat->first_name;
$usercall = $update->callback_query->message->chat->username;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$textpost = file_get_contents("data/$chatid/textpost.txt");
$linkpost = file_get_contents("data/$chatid/linkpost.txt");
$namepost = file_get_contents("data/$chatid/namepost.txt");
$channel = file_get_contents("data/$chatid/channel.txt");
$newchatmemberid = $update->message->new_chat_member->id;
$newchatmemberu = $update->message->new_chat_member->username;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;
$tedadmsg = $update->message->message_id;
$fwd = $update->message->forward_from;
$edit = $update->edited_message->text;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->message->from->id;
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$lockphoto= file_get_contents("data/$chat_id/lockphoto.txt");
$lockedit= file_get_contents("data/$chat_id/lockedit.txt");
$lockgame= file_get_contents("data/$chat_id/lockgame.txt");
$locklocation= file_get_contents("data/$chat_id/locklocation.txt");
$lockcontact= file_get_contents("data/$chat_id/lockcontact.txt");
$lockusername= file_get_contents("data/$chat_id/lockusername.txt");
$lockaudio= file_get_contents("data/$chat_id/lockaudio.txt");
$namegroup = $update->message->chat->title;
$lockvoice= file_get_contents("data/$chat_id/lockvoice.txt");
$locksticker= file_get_contents("data/$chat_id/locksticker.txt");
$lockjoin= file_get_contents("data/$chat_id/lockjoin.txt");
$lockdecument= file_get_contents("data/$chat_id/lockdecument.txt");
$lockvideo= file_get_contents("data/$chat_id/lockvideo.txt");
$lockgif= file_get_contents("data/$chat_id/lockgif.txt");
$lockforward= file_get_contents("data/$chat_id/lockforward.txt");
$lockoperator= file_get_contents("data/$chat_id/lockoperator.txt");
$lockfosh= file_get_contents("data/$chat_id/lockfosh.txt");
$locklink2= file_get_contents("data/$chatid/locklink.txt");
$lockphoto2= file_get_contents("data/$chatid/lockphoto.txt");
$lockedit2= file_get_contents("data/$chatid/lockedit.txt");
$lockgame2= file_get_contents("data/$chatid/lockgame.txt");
$locklocation2= file_get_contents("data/$chatid/locklocation.txt");
$lockcontact2= file_get_contents("data/$chatid/lockcontact.txt");
$lockusername2= file_get_contents("data/$chatid/lockusername.txt");
$lockaudio2= file_get_contents("data/$chatid/lockaudio.txt");
$muteall2 = file_get_contents("data/$chatid/muteall2.txt");
$lockvoice2= file_get_contents("data/$chatid/lockvoice.txt");
$locksticker2= file_get_contents("data/$chatid/locksticker.txt");
$lockjoin2= file_get_contents("data/$chatid/lockjoin.txt");
$lockdecument2= file_get_contents("data/$chatid/lockdecument.txt");
$lockvideo2= file_get_contents("data/$chatid/lockvideo.txt");
$lockgif2= file_get_contents("data/$chatid/lockgif.txt");
$lockforward2= file_get_contents("data/$chatid/lockforward.txt");
$lockoperator2= file_get_contents("data/$chatid/lockoperator.txt");
$lockbots2= file_get_contents("data/$chatid/lockbots.txt");
$lockfosh2= file_get_contents("data/$chatid/lockfosh.txt");
$lockbots= file_get_contents("data/$chat_id/lockbots.txt");
$floods= file_get_contents("data/$chat_id/lockflood.txt");
$floods2= file_get_contents("data/$chatid/lockflood.txt");
$flood= file_get_contents("data/$chat_id/numflood.txt");
$flood2= file_get_contents("data/$chatid/numflood.txt");
$text = $update->inline_qurey->qurey;
$token = '*TOKEN*';
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$statjson = json_decode($stat, true);
$status = $statjson['result']['status'];
$lockedit3 = file_get_contents("data/$chat_edit_id/lockedit.txt");
$get = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
//__________ @Shila_Sali __________
//فانکشن ها :
function SendMessage($chat_id, $text){
FALASBot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function sendAction($chat_id, $action){
FALASBot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
function Forward($berekoja,$azchejaei,$kodompayam)
{
FALASBot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
//__________ @Shila_Sali __________
if($textmassage=="/start" && $tc == "private"){
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Hi Welcome To PowerFul AntiSpam Bot My Name IS *FALAS* :)\nAdd Me To Group & Send /add To Group 😁",
  'parse_mode'=>'MarkDown',
	]);
	}
 //groupmanager
 elseif($data=="settings" && $fm == $owners2){
         FALASBot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"لیست تنظیمات گروه :",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
 ],
  [
 ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
],
[
['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
],
[
['text'=>"برگشت 😕",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="back" && $fm == $owners2){
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"✍🏻 انتخاب کنید :",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"تنظیمات ⚡️",'callback_data'=>'settings']
   ],
    [
   ['text'=>"اطلاعات گروه 📡",'callback_data'=>'groupe'],['text'=>"راهنمای مدیریتی 🛠",'callback_data'=>'help']
   ],
   [
['text'=>"کانال ما ❄️",'url'=>"https://telegram.me/*CHANNEL*"]
  ],
    ]
    ])
    ]);
    }
  elseif($textmassage=="/manage" && $from_id == "$owners"){
  if ($tc == 'group' | $tc == 'supergroup'){
    sendAction($chat_id, 'typing');
  	FALASBot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"انتخاب کنید :",
    'parse_mode'=>'MarkDown',
  	'reply_markup'=>json_encode([
  	'resize_keyboard'=>true,
  	'inline_keyboard'=>[
   [
   ['text'=>"تنظیمات ⚡️",'callback_data'=>'settings']
   ],
    [
   ['text'=>"اطلاعات گروه 📡",'callback_data'=>'groupe'],['text'=>"راهنمای مدیریتی 🛠",'callback_data'=>'help']
   ],
   [
['text'=>"کانال ما ❄️",'url'=>"https://telegram.me/*CHANNEL*"]
  ],
  	]
  	])
  	]);
  	}}
    elseif($data=="groupe" && $fm == $owners2){
            FALASBot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"📡 اطلاعات گروه : \n\n 📡 نام گروه : $gpname\n  📡 شناسه گروه : $chatid \n⚜️ تعداد پیام ها : $messageid\n  ✋🏻 صاحب گروه : $owners2\n",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"برگشت 😕",'callback_data'=>'back']
                     ],
                      ]
               ])
           ]);
    }
    elseif($data=="help" && $fm == $owners2){
            FALASBot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"لیست راهنما : \n > راهنمای بخش دریافت تنظیمات و مدیریت کاربران
             *[/]manage* ➖ (دریافت تنظیات ربات به صورت اینلاین)
             *[/]kick |reply|* ➖ (اخراج کاربر با ریپلی)
             *➖➖➖➖➖➖*
             >راهنمای دستورات مدیریتی
             *[/]lock|unlock link* ➖ (فعال سازی/غیرفعال سازی قفل ارسال لینک)
             *[/]lock|unlock username* ➖ (فعال سازی/غیرفعال سازی قفل ارسال یوزرنیم)
             *[/]lock|unlock sticker* ➖ (فعال سازی/غیرفعال سازی قفل ارسال استیکر)
             *[/]lock|unlock contact* ➖ (فعال سازی/غیرفعال سازی قفل اشتراک گزاری شماره)
             *[/]lock|unlock forward* ➖ (فعال سازی/غیرفعال سازی قفل ارسال فوروارد)
             *[/]lock|unlock photo* ➖ (فعال سازی/غیرفعال سازی قفل ارسال تصویر)</code>
             *[/]lock|unlock audio* ➖ (فعال سازی/غیرفعال سازی قفل ارسال موسیقی(Audio))
             *[/]lock|unlock voice* ➖ (فعال سازی/غیرفعال سازی قفل ارسال صدا(Voice))
             *[/]lock|unlock edit* ➖ (فعال سازی/غیرفعال سازی قفل ویرایش پیام)
             *[/]lock|unlock game* ➖ (فعال سازی/غیرفعال سازی قفل انجام بازی در گروه)
             *[/]lock|unlock location* ➖ (فعال سازی/غیرفعال سازی قفل اشتراک گزاری مکان)
             *[/]lock|unlock fosh* ➖ (فعال سازی/غیرفعال سازی قفل فحاشی)
             *[/]lock|unlock join* ➖ (فعال سازی/غیرفعال سازی قفل ورود به گروه)
             *[/]lock|unlock operator* ➖ (فعال سازی/غیرفعال سازی قفل تبلیغات اوپراتورها)
             *[/]lock|unlock video* ➖ (فعال سازی/غیرفعال سازی قفل ارسال ویدیو)
             *[/]lock|unlock bots* ➖ (فعال سازی/غیرفعال سازی قفل ورود ربات ها)
             *➖➖➖➖➖➖*
             >راهنمای فلود 
             *[/]flood manage* ➖ (دریافت تنظیمات فلود به صورت اینلاین)
             *[/]lock|unlock flood* ➖ (فعال سازی/غیرفعال سازی قفل فلود)
             *[/]setflood [Number]* ➖ (تنظیم میزان فلود)
             *➖➖➖➖➖➖*
             >راهنمای حذف پیام
             *[/]rmsg [Number]* ➖ (حذف پیام به تعداد معین (بین 0 و100))
             *➖➖➖➖➖➖*
             >راهنمای بخش خوش امدگویی
             *[/]welcome enable|disable * ➖ (فعال سازی/غیرفعال سازی عملیات خوش امدگویی)
             *[/]set welcome* ➖ (تنظیم پیغام خوش امدگویی)
             *➖➖➖➖➖➖*
             >راهنمای دستورات جدید
             *➖➖➖➖➖➖*
             *[/]setname [Name]* ➖ (تنظیم نام گروه)
             *[/]setdescription [Text]* ➖ (تنظیم توضیحات گروه)
             *[/]setphoto* ➖ (تنظیم تصویر گروه)
             *[/]delphoto* ➖ (حذف تصویر گروه)
             *[/]pin [reply]* ➖ (پین کردن یک پیام با ریپلای)
             *[/]unpin [reply]* ➖ (برداشتن پین با ریپلای)
             *[/]link* ➖ (دریافت لینک گروه)
             *[/]setowner [TelegramID]* ➖ (تغییر صاحب گروه با شناسه کاربری)
             *[/]automatic [manage]* ➖ (مدیریت گروه به صورت خودکار توسط ربات)",
            'parse_mode'=>'MarkDown',
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"برگشت 😕",'callback_data'=>'back']
                     ],
                      ]
               ])
           ]);
    }
  elseif($data=="lockphoto" && $lockphoto2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockphoto.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockphoto" && $lockphoto2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockphoto.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvideo" && $lockvideo2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockvideo.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
				  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvideo" && $lockvideo2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockvideo.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockgame" && $lockgame2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockgame.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockgame" && $lockgame2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockgame.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locksticker" && $locksticker2=="✔️" && $fm == $owners2){
    save("data/$chatid/locksticker.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locksticker" && $locksticker2=="✖️" && $fm == $owners2){
    save("data/$chatid/locksticker.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvoice" && $lockvoice2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockvoice.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvoice" && $lockvoice2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockvoice.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockaudio" && $lockaudio2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockaudio.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockaudio" && $lockaudio2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockaudio.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockforward" && $lockforward2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockforward.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockforward" && $lockforward2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockforward.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
				  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockcontact" && $lockcontact2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockcontact.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
				  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockcontact" && $lockcontact2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockcontact.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locklocation" && $locklocation2=="✔️" && $fm == $owners2){
    save("data/$chatid/locklocation.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locklocation" && $locklocation2=="✖️" && $fm == $owners2){
    save("data/$chatid/locklocation.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockfosh" && $lockfosh2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockfosh.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockfosh" && $lockfosh2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockfosh.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockoperator" && $lockoperator2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockoperator.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockoperator" && $lockoperator2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockoperator.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockedit" && $lockedit2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockedit.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
    elseif($data=="muteall" && $muteall2=="✔️" && $fm == $owners2){
    save("data/$chatid/muteall2.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="muteall" && $muteall2=="✖️" && $fm == $owners2){
    save("data/$chatid/muteall2.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
    elseif($rt && $textmassage=="/unkick" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
	FALASBot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"از اخراج خارج شد :| ❤️",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif( $textmassage == "/leave" && $from_id == $Dev){
	sendmessage($chat_id,"به درخواست مدیر رفتم بای :| ❤️");
	FALASBot('leaveChat',[
	'chat_id'=>$chat_id,
	]);
}elseif($rt && $textmassage == "/del" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
 FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$update->message->reply_to_message->message_id
    ]);
	}
}
  elseif($data=="lockedit" && $lockedit2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockedit.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockusername" && $lockusername2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockusername.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockusername" && $lockusername2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockusername.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locklink" && $locklink2=="✔️" && $fm == $owners2){
    save("data/$chatid/locklink.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                  	]
             ])
         ]);
  }
  elseif($data=="locklink" && $locklink2=="✖️" && $fm == $owners2){
    save("data/$chatid/locklink.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                  	]
             ])
         ]);
  }
  elseif($data=="lockbots" && $lockbots2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockbots.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockbots" && $lockbots2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockbots.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🎗 لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                   [
                   ['text'=>"🎗 تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                   [
                   ['text'=>"🎗 یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                   [
                   ['text'=>"🎗 ادیت",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                   [
                   ['text'=>"🎗 اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                   [
                   ['text'=>"🎗 فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                   [
                   ['text'=>"🎗 مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'locklocation']
                   ],
                   [
                   ['text'=>"🎗 شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                   [
                   ['text'=>"🎗 فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                   [
                   ['text'=>"🎗 موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                   [
                   ['text'=>"🎗 صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoice']
                   ],
                   [
                   ['text'=>"🎗 استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                   [
                   ['text'=>"🎗 بازی",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                   ['text'=>"🎗 فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                   ],
                   [
                   ['text'=>"🎗 ربات",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots']
                   ],
                   [
                   ['text'=>"🎗 سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall']
                   ],
                   [
                   ['text'=>"برگشت 😕",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
elseif (strpos($textmassage, "/setowner") !== false && $from_id == $owners) {
$owner = str_replace("/setowner ","",$textmassage);
save("data/$from_id/file.txt","none");
FALASBot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"😕✋🏻 این فرد  _".$owner."_ مدیر گروه شد .  😕✋🏻",
		'parse_mode'=>'MarkDown'
    		]);
save("data/$chat_id/owner.txt","$owner");
}
elseif ( strpos($textmassage , '/setrank') !== false && $rt && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
$rank = str_replace("/setrank","",$textmassage);
Save("data/$rtid/rank.txt","$rank");
  sendAction($chat_id, 'typing');
 FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"مقام کاربر ثبت شد . ✍🏻",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif ( strpos($textmassage , '/delrank') !== false && $rt && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
Save("data/$rtid/rank.txt","");
  sendAction($chat_id, 'typing');
 FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"مقام کاربر پاک شد 👾",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/ping" && $from_id == $Dev){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
 FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"آنلاینم و حواسم به گروهه 😝 . لازم نیست نگران باشی 🤗",
'reply_to_message_id'=>$message_id,
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/ping" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
 FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"آنلاینم و حواسم به گروهه 😝 . لازم نیست نگران باشی 🤗",
'reply_to_message_id'=>$message_id,
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/ping"){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
 FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"آنلاینم و حواسم به گروهه 😝 . لازم نیست نگران باشی 🤗",
'reply_to_message_id'=>$message_id,
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif ( strpos($textmassage , '/who') !== false && $rt) {
    $ran = file_get_contents("data/$rtid/rank.txt");
if ($tc == 'group' | $tc == 'supergroup'){
    if ($ran != ""){
  sendAction($chat_id, 'typing');
 FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"😐 مقام :
     $ran",
  'parse_mode'=>'MarkDown',
 ]);
 }else{
     sendmessage($chat_id,"این عزیز مقام نداره 🙁");
 }}
}
elseif(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage)){
preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklink == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
 FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock link" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklink.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال لینک فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock link" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklink.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال لینک باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->photo){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockphoto == "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock photo" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockphoto.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال عکس فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock photo" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockphoto.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال عکس باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif ($textmassage == "/automatic manage" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockvideo.txt","✖️");
save("data/$chat_id/lockbots.txt","✔️");
save("data/$chat_id/locklink.txt","✔️");
save("data/$chat_id/lockphoto.txt","✖️");
save("data/$chat_id/lockedit.txt","✔️");
save("data/$chat_id/lockoperator.txt","✔️");
save("data/$chat_id/lockforward.txt","✔️");
save("data/$chat_id/lockaudio.txt","✖️");
save("data/$chat_id/locksticker.txt","✖️");
save("data/$chat_id/lockvoice.txt","✖️");
save("data/$chat_id/lockcontact.txt","✔️");
save("data/$chat_id/locklocation.txt","✖️");
save("data/$chat_id/lockfosh.txt","✖️");
save("data/$chat_id/lockjoin.txt","✖️");
save("data/$chat_id/lockgame.txt","✖️");
save("data/$chat_id/lockdecument.txt","✖️");
save("data/$chat_id/lockusername.txt","✔️");
save("data/$chat_id/lockflood.txt","✔️");
save("data/$chat_id/numflood.txt","5");
save("data/$chat_id/welcome.txt","Welcome NewMember To Group ✋🏻🙃");
SendMessage($chat_id,"#انجام شد\nگروه به صورت خودکار مدیریت میشود.");
}
}
elseif ($textmassage == "/add" && $status == "creator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/owner.txt","$from_id");
save("data/$chat_id/lockvideo.txt","✖️");
save("data/$chat_id/lockbots.txt","✖️");
save("data/$chat_id/locklink.txt","✖️");
save("data/$chat_id/lockphoto.txt","✖️");
save("data/$chat_id/lockedit.txt","✖️");
save("data/$chat_id/lockoperator.txt","✖️");
save("data/$chat_id/lockforward.txt","✖️");
save("data/$chat_id/lockaudio.txt","✖️");
save("data/$chat_id/locksticker.txt","✖️");
save("data/$chat_id/lockvoice.txt","✖️");
save("data/$chat_id/lockcontact.txt","✖️");
save("data/$chat_id/locklocation.txt","✖️");
save("data/$chat_id/lockfosh.txt","✖️");
save("data/$chat_id/lockjoin.txt","✖️");
save("data/$chat_id/lockgame.txt","✖️");
save("data/$chat_id/lockdecument.txt","✖️");
save("data/$chat_id/lockusername.txt","✖️");
save("data/$chat_id/lockflood.txt","✖️");
save("data/$chat_id/muteall2.txt","✖️");
save("data/$chat_id/numflood.txt","0");
save("data/$chat_id/welcome.txt","Welcome NewMember To Group");
SendMessage($chat_id,"#انجام شد\nاین دستور را دوباره تکرار نکنید.");
}
}
elseif($rt && $textmassage=="/promote" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 FALASBot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid,
    'can_change_info'=>true,
    'can_post_messages'=>true,
	'can_edit_messages'=>true,
	'can_delete_messages'=>true,
	'can_invite_users'=>true,
	'can_restrict_members'=>true,
	'can_pin_messages'=>true,
	'can_promote_members'=>false
      ]);
FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($rt && $textmassage=="/demote" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 FALASBot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid,
    'can_change_info'=>false,
    'can_post_messages'=>false,
	'can_edit_messages'=>false,
	'can_delete_messages'=>false,
	'can_invite_users'=>false,
	'can_restrict_members'=>false,
	'can_pin_messages'=>false,
	'can_promote_members'=>false
      ]);
FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($update->message->gif){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockgif == "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock gif" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgif.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال گیف فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock gif" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgif.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال گیف باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->video){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvideo == "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if($update->message->video || $update->message->photo || $update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($muteall2 == "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock video" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvideo.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فیلم فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock video" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvideo.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فیلم باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}

elseif($textmassage=="/muteall" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/muteall2.txt","✔️");
  sendAction($chat_id, 'typing');
  FALASBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"سکوت همگانی فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="/unmute all" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/muteall2.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سکوت همگانی غیر فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}

if(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$edit)){
  preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage,$match);
if ($lockedit3== "✔️"){
if ($you != "creator" && $you != "administrator"){
	FALASBot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
	}
}
}
elseif($textmassage=="/lock edit" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockedit.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ویرایش پیام فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock edit" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockedit.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ویرایش پیام باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockgame== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock game" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgame.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل انجام بازی در گروه فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock game" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgame.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل انجام بازی در گروه باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklocation== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock location" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklocation.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گذاری مکان فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock location" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklocation.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گذاری مکان باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockcontact== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock contact" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockcontact.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گزاری شماره فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock contact" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockcontact.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گزاری شماره باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock username" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال یوزرنیم فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock username" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال یوزرنیم باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockaudio== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock audio" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockaudio.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال موسیقی فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock audio" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockaudio.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال موسیقی باز شد . ✍🏻.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvoice == "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock voice" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvoice.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال صدا فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock voice" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvoice.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال صدا باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locksticker== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock sticker" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locksticker.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال استیکر فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock sticker" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locksticker.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال استیکر باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->decument){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockdecument== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock decument" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdecument.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فایل فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock decument" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdecument.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فایل باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->forward_from){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockforward== "✔️"){
if ($status != "creator" && $status != "administrator"){
sendAction($chat_id, 'typing');
 FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
elseif($textmassage=="/lock forward" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockforward.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل فوروارد پیام فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock forward" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockforward.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل فوروارد پیام باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
//Lock Operator
if(preg_match("/^(.*)ایرانسل|ایرانسل(.*)|(.*)ایرانسل(.*)|(.*)همراه اول(.*)|همراه اول(.*)|(.*)همراه اول/",$textmassage)){
preg_match("/^(.*)ایرانسل|ایرانسل(.*)|(.*)ایرانسل(.*)|(.*)همراه اول(.*)|همراه اول(.*)|(.*)همراه اول/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockoperator == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}

elseif($textmassage=="/lock operator" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockoperator.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال تبلیغات اوپراتور ها فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock operator" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockoperator.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال تبلیغات اوپراتور ها باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
//Lock Fosh
elseif(preg_match("'^(کس)(.*)'",$textmassage)){
preg_match("'^(کس)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(کس ننت)(.*)'",$textmassage)){
preg_match("'^(کس ننت)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(بی ناموس)(.*)'",$textmassage)){
preg_match("'^(بی ناموس)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(دیوث)(.*)'",$textmassage)){
preg_match("'^(دیوث)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(کیر)(.*)'",$textmassage)){
preg_match("'^(کیر)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	FALASBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="/lock fosh" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockfosh.txt","✔️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فحش فعال شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock fosh" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockfosh.txt","✖️");
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فحش باز شد . ✍🏻",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->new_chat_title){
if ($tc == 'group' | $tc == 'supergroup'){
$newname = $update->message->new_chat_title;
sendAction($chat_id, 'typing');
FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📡 نام گروه تغییر یافت به : $newname",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
if ($welcome == "✔️"){
sendAction($chat_id, 'typing');
FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$textwelcome",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
 elseif($textmassage=="/help" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"لیست راهنما : \n > راهنمای بخش دریافت تنظیمات و مدیریت کاربران
*[/]manage* ➖ (دریافت تنظیات ربات به صورت اینلاین)
*[/]kick |reply|* ➖ (اخراج کاربر با ریپلی)
*➖➖➖➖➖➖*
>راهنمای دستورات مدیریتی
*[/]lock|unlock link* ➖ (فعال سازی/غیرفعال سازی قفل ارسال لینک)
*[/]lock|unlock username* ➖ (فعال سازی/غیرفعال سازی قفل ارسال یوزرنیم)
*[/]lock|unlock sticker* ➖ (فعال سازی/غیرفعال سازی قفل ارسال استیکر)
*[/]lock|unlock contact* ➖ (فعال سازی/غیرفعال سازی قفل اشتراک گزاری شماره)
*[/]lock|unlock forward* ➖ (فعال سازی/غیرفعال سازی قفل ارسال فوروارد)
*[/]lock|unlock photo* ➖ (فعال سازی/غیرفعال سازی قفل ارسال تصویر)</code>
*[/]lock|unlock audio* ➖ (فعال سازی/غیرفعال سازی قفل ارسال موسیقی(Audio))
*[/]lock|unlock voice* ➖ (فعال سازی/غیرفعال سازی قفل ارسال صدا(Voice))
*[/]lock|unlock edit* ➖ (فعال سازی/غیرفعال سازی قفل ویرایش پیام)
*[/]lock|unlock game* ➖ (فعال سازی/غیرفعال سازی قفل انجام بازی در گروه)
*[/]lock|unlock location* ➖ (فعال سازی/غیرفعال سازی قفل اشتراک گزاری مکان)
*[/]lock|unlock fosh* ➖ (فعال سازی/غیرفعال سازی قفل فحاشی)
*[/]lock|unlock join* ➖ (فعال سازی/غیرفعال سازی قفل ورود به گروه)
*[/]lock|unlock operator* ➖ (فعال سازی/غیرفعال سازی قفل تبلیغات اوپراتورها)
*[/]lock|unlock video* ➖ (فعال سازی/غیرفعال سازی قفل ارسال ویدیو)
*[/]lock|unlock bots* ➖ (فعال سازی/غیرفعال سازی قفل ورود ربات ها)
*➖➖➖➖➖➖*
>راهنمای فلود 
*[/]flood manage* ➖ (دریافت تنظیمات فلود به صورت اینلاین)
*[/]lock|unlock flood* ➖ (فعال سازی/غیرفعال سازی قفل فلود)
*[/]setflood [Number]* ➖ (تنظیم میزان فلود)
             *➖➖➖➖➖➖*
>راهنمای حذف پیام
*[/]rmsg [Number]* ➖ (حذف پیام به تعداد معین (بین 0 و100))
*➖➖➖➖➖➖*
>راهنمای بخش خوش امدگویی
*[/]welcome enable|disable * ➖ (فعال سازی/غیرفعال سازی عملیات خوش امدگویی)
*[/]set welcome* ➖ (تنظیم پیغام خوش امدگویی)
*➖➖➖➖➖➖*
>راهنمای دستورات جدید
*➖➖➖➖➖➖*
*[/]setname [Name]* ➖ (تنظیم نام گروه)
*[/]setdescription [Text]* ➖ (تنظیم توضیحات گروه)
*[/]setphoto* ➖ (تنظیم تصویر گروه)
*[/]delphoto* ➖ (حذف تصویر گروه)
*[/]pin [reply]* ➖ (پین کردن یک پیام با ریپلای)
*[/]unpin [reply]* ➖ (برداشتن پین با ریپلای)
*[/]link* ➖ (دریافت لینک گروه)
*[/]setowner [TelegramID]* ➖ (تغییر صاحب گروه با شناسه کاربری)
*[/]automatic [manage]* ➖ (مدیریت گروه به صورت خودکار توسط ربات)",
  'parse_mode'=>'MarkDown',
	]);
	}
 }
elseif($rt && $textmassage=="/pin" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 FALASBot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام_شد . ✍🏻",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
  elseif($rt && $textmassage=="/kick" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
	FALASBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"اخراج شد . 🙁",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/info" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	FALASBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"شناسه کاربری گروه : *$chat_id*\nنام گروه : *$namegroup*\nتعداد پیام ها : *$tedadmsg*\nنوع گروه : *$tc*",
  'parse_mode'=>'MarkDown',
	]);
	}
 }
$users = file_get_contents('data/username.txt');
$members = explode("\n", $users);
if (!in_array($username, $members)) {
    $adduser = file_get_contents('data/username.txt');
    $adduser .=$username . "\n";
    file_put_contents('data/username.txt', $adduser);
}$users = file_get_contents('data/users.txt');
$members = explode("\n", $users);
if (!in_array($chat_id, $members)) {
    $adduser = file_get_contents('data/users.txt');
    $adduser .= $chat_id . "\n";
    file_put_contents('data/users.txt', $adduser);
}elseif($textmassage=="آمار ربات"){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        sendAction($chat_id, 'typing');
				FALASBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"تعداد کاربران : $mmemcount",
                'hide_keyboard'=>true,
		]);
		}elseif ($textmassage == 'ارسال به همه' && $from_id == $Dev) {
save("data/$from_id/file.txt","sendtoall");
         FALASBot('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'sendtoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","to");
     FALASBot('sendmessage',[
          'chat_id'=>$memuser,        'text'=>$textmassage,
    'parse_mode'=>'MarkDown'
        ]);
    }
} elseif ($textmassage == 'فروارد همگانی' && $from_id == $Dev) {
save("data/$from_id/file.txt","fortoall");
         FALASBot('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'fortoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","none");
Forward($memuser, $chat_id,$message_id);
    }
}
elseif (strpos($textmassage , "/setwelcome") !== false && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
$we = str_replace("/setwelcome","",$textmassage);
save("data/$chat_id/textwelcome.txt","$we");
SendMessage($chat_id,"#انجام شد");
}
}
elseif (strpos($textmassage , "/setflood") !== false && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
$we = str_replace("/setflood","",$textmassage);
if ($we <= 20 && $we >= 1){
save("data/$chat_id/numflood.txt","$we");
SendMessage($chat_id,"#انجام شد");
}
else{
FALASBot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"اخطار\nعدد باید بین 1 و  20 باشد.",
              ]);
}
}
}
elseif ($textmassage == "/welcome enable" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/welcome.txt","✔️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/flood check" && $from_id == $Dev) {
rmdir("data/spam");
mkdir("data/spam");
SendMessage($chat_id,"#انجام شد");
}
elseif ($textmassage == "/lock flood" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockflood.txt","✔️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/unlock flood" && $status == "creator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockflood.txt","✖️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/welcome enable" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/welcome.txt","✔️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/lock bots" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockbots.txt","✔️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif ($textmassage == "/unlock bots" && $status == "creator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockbots.txt","✖️");
SendMessage($chat_id,"#انجام شد");
}
}
elseif (preg_match('/^(.*)([Bb][Oo][Tt])/s',$newchatmemberu) && $lockbots == "✔️" && $newchatmemberu != "SPDLBot") {
 FALASBot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'ربات ها اجازه ورود ندارند.\n#اخراج شد',
  'parse_mode'=>'HTML'
 ]);
 FALASBot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
elseif ( strpos($textmassage , '/rmsg') !== false  ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($from_id == $owners){
$num = str_replace("/rmsg","",$textmassage);
if ($num <= 100 && $num >= 1){
for($i=$message_id; $i>=$message_id-$num; $i--){
FALASBot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
FALASBot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"تعداد $num پیام پاک شد",
              ]);
}else{
FALASBot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"اخطار\nعدد باید بین 1 و 100 باشد.",
              ]);
}
}
}
}
elseif ( strpos($textmassage , '/setname') !== false  ) {
  $newname= str_replace("/setname","",$textmassage);
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 FALASBot('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif ( strpos($textmassage , '/setdescription') !== false  ) {
  $newdec= str_replace("/setdescription","",$textmassage);
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 FALASBot('setChatDescription',[
    'chat_id'=>$chat_id,
    'description'=>$newdec
      ]);
FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($rt && $textmassage=="/unpin" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
 FALASBot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/delphoto" && $from_id == $owners){
  save("data/$from_id/file.txt","setphoto");
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
FALASBot('deleteChatPhoto',[
   'chat_id'=>$chat_id,
     ]);
FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/me" && $from_id == $owners){
$sti = "https://provps.ir/anti/Owner.webp";
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	FALASBot('sendSticker',[
	'chat_id'=>$chat_id,
	'sticker'=>$sti,
	]);
	}
}
elseif($textmassage=="/me" && $from_id == $Dev){
$sti = "https://provps.ir/anti/Dev.webp";
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	FALASBot('sendSticker',[
	'chat_id'=>$chat_id,
	'sticker'=>$sti,
	]);
	}
}
elseif($textmassage=="/me"){
$sti = "https://provps.ir/anti/Member.webp";
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	FALASBot('sendSticker',[
	'chat_id'=>$chat_id,
	'sticker'=>$sti,
	]);
	}
}
elseif($textmassage=="/link" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
sendAction($chat_id, 'typing');
FALASBot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"لینک گروه :\n$getlinkde",
    'parse_mode'=>'html',
     ]);
 }
}
elseif($textmassage=="/setphoto" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"عکس خود را بفرستید :",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($step=="setphoto"){
  save("data/$from_id/file.txt","none");
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
$photo = $update->message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = FALASBot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
    file_put_contents("data/$chat_id/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
FALASBot('setChatPhoto',[
   'chat_id'=>$chat_id,
   'photo'=>new CURLFile("data/$chat_id/photogp.png")
     ]);
FALASBot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"#انجام شد.",
  'parse_mode'=>'MarkDown',
 ]);
 unlink("data/$chat_id/photogp.png");
 }
}
elseif($textmassage=="/flood manage" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
  FALASBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"تنطیمات فلود بارگزاری شد.\nتوجه فلود فقط باید عددی بین 1 و 20 باشد.",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
  'resize_keyboard'=>true,
  'inline_keyboard'=>[
 [
 ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"$floods",'callback_data'=>'lockflood']
 ],
  [
 ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
 ],
  ]
  ])
  ]);
  }}
  elseif($data=="f-"  && $fm == $owners2){
    $floodnew = $flood2 - 1;
    $floodnew1 = $flood2 - 1;
    save("data/$chatid/numflood.txt","$floodnew");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"انتخاب کنید :",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodnew1",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif($data=="f+"  && $fm == $owners2){
    $floodne = $flood2 + 1;
    $floodne2 = $flood2 + 1;
    save("data/$chatid/numflood.txt","$floodne");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"انتخاب کنید :",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodne2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockflood" && $floods2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockflood.txt","✔️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockflood" && $floods2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockflood.txt","✖️");
          FALASBot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif ($data == 'text')
{
FALASBot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"ربات حرفه ای مدیریت گروه.",
]);
}
$timing = date("Y-m-d-h-i-sa");
$timing = str_replace("am","",$timing);
$metti_khan = file_get_contents("data/spam/$timing-$from_id.txt");
$timing_spam = $metti_khan+1;
file_put_contents("data/spam/$timing-$from_id.txt","$timing_spam");
$metti_khan2 = file_get_contents("data/spam/$timing-$from_id.txt");
if($metti_khan2 >= $flood){
if($floods == "✔️"){
FALASBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
    FALASBot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"این فرد $first_name به دلیل تکرار پیام مکرر در گروه اخراج شد.",
      'parse_mode'=>'MarkDown',
    	]);

}
}
elseif ($text == "ads") {
}
{
   FALASBot('answerInlineQuery', [
        'inline_query_id' => $update->inline_query->id,
        'results' => json_encode([[
            'type' => 'article',
             'thumb_url'=>"http://up.upinja.com/mpjd9.jpg",
            'id' => base64_encode(rand(5, 555)),
            'title' => 'بنر تبلیغاتی',
            'input_message_content' => ['parse_mode' => 'MarkDown', 'message_text' => "ربات جديد و حرفه اي مديريت گروه
باقابليت هاي فراوان
ازجمله :
داراي تمام قفل هاي مديريتي
قفل تکرار پيام مکرر
قفل وارد کردن ربات ها
قابليت شناسي ادمين ن عدم پاک کردن پيام هاي او
قابليت پاک کردن پيام
با سرعت بالا
بدون هيچ مشکلي
داراي پنل مديريت فوق حرفه اي اينلاين وساده
داراي عمليات پيغام خوش امدگويي
و...
➖➖➖
*TeleSkyTeam AntiSpamBot*"],
            'reply_markup' => [
                'inline_keyboard' => [
                    [
                        ['text' => "عضویت در ربات", 'url' => 'https://telegram.me/*BOT*']
                    ],
                    [
                        ['text' => "اشتراک با دیگران", 'switch_inline_query' => 'ads']
                    ]
                ]
            ]
        ]])
    ]);
}
/*
AntiSpamBot
V 1.1
@TeleSkyTeam
Edit : @SHila_Sali
*/
?>
