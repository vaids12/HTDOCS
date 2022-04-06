pre>
<?php

class User{
   public $uid;
   public $name;
   public $status;
}

function GetUserInfo($uid)
{

   $userObj = new User();
   $userObj->uid=$uid;
   $userObj->name='zaf';
   $userObj->status='guru';
   return $userObj;
}

$newuser = GetUserInfo(1);
// var_dump($newuser);

$new =GetUserInfo(2);
// var_dump($new);

$ne=GetUserInfo((rand(1,2)));
var_dump($ne);



// object(User)#1 (3) {
//   ["uid"]=>
//   int(1)
//   ["name"]=>
//   string(3) "zaf"
//   ["status"]=>
//   string(4) "guru"
// }

?>