<?

echo '<b>User Name</b> '.(!empty($_POST['f3_user']) ? $_POST['f3_user'] .'<br>': 'nu a fost introdus!<br>'/*header("Location: /index.php");- pentru redirect */);
echo '<b>First Name</b> '.(!empty($_POST['f3_fname']) ? $_POST['f3_fname'] .'<br>': 'nu a fost introdus!<br>');
echo '<b>Last Name</b> '.(!empty($_POST['f3_lname']) ? $_POST['f3_lname'] .'<br>': 'nu a fost introdus!<br>');
echo '<b>Password </b> '.(!empty($_POST['f3_password']) ? $_POST['f3_password'] .'<br>': 'nu a fost ales!<br>');
echo '<b>Retype password </b> '.(!empty($_POST['f3_password_2']) ? $_POST['f3_password_2'] .'<br>': 'nu a fost ales!<br>');
echo '<b>Gender</b> '.(!empty($_POST['gender']) ? $_POST['gender'] .'<br>': 'nu a fost ales!<br>');
echo '<b>Date of Birth</b> '.(!empty($_POST['f3_dbrith']) ? $_POST['f3_dbrith'] .'<br>': 'nu a fost alesă!<br>');
echo '<b>Email</b> '.(!empty($_POST['f3_email']) ? $_POST['f3_email'] .'<br>': 'nu a fost ales!<br>');
// // sau
// if ((empty($_POST['f3_user'])) || (empty($_POST['f3_lname'])) || (empty($_POST['f3_lname'])) || (empty($_POST['f3_password_2'])) ||(!empty($_POST['gender'])) || (!empty($_POST['f3_dbrith'])) || (!empty($_POST['f3_email'])) ){
//     header("Location: /index.php");
// }