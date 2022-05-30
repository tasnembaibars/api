 <?php 
$dsn='mysql:host=localhost;db=attempt;';
$user='tasnem';
$pass='1234';

try{
$db=new pdo($dsn,$user,$pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo 'connected';
}catch(PDOException $e){
echo 'error'.$e->getMessage();
die();
}

// try{
    $id  = (isset($_POST['id ']) ? $_POST['id '] : '');
    $name  = (isset($_POST['name ']) ? $_POST['name '] : '');
    $age  = (isset($_POST['age ']) ? $_POST['age '] : '');
    $education  = (isset($_POST['education ']) ? $_POST['education '] : '');
    $address  = (isset($_POST['address ']) ? $_POST['address '] : '');


    //  $sql="UPDATE attempt.info_employee set age=$age where id=$id ";
    //   $sql=$db->query($sql);
    // echo 'one feild has been updated';
if(isset($_POST['update'])){
 $sql = "UPDATE attempt.info_employee SET name=? WHERE id=?";
$stmt= $db->prepare($sql);
$stmt->execute([$name,$id]);
echo 'one feild has been updated';

}

// header("location:task1.html");
// }catch(PDOException $e){
//     echo 'error'.$e->getMessage();
//     die();
//     echo 'no update occured';
    

// }
?> 

