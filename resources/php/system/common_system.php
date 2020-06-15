<?php
//require '../database/connection.php';

#$_SESSION['alert'] = "";
$errors = array('fields' => 'שכחת למלא את כל השדות.' ,
                'password' => 'שגיאה: סיסמאות אינן תואמות.',
                'query' => 'שגיאה: שאילתה נכשלה.',
                'exist' => 'שגיאה: שם משתמש או סיסמא קיימים במאגר.' );
$success = array('account' => 'חשבונך נוצר בהצלחה !' ,
                'exsist' => 'שגיאה: שם משתמש או סיסמא קיימים במאגר.' );

if ( isset($_GET['uid']) ) {
  $uid = $_GET['uid'];
}
 ?>
