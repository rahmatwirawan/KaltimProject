<?php
session_start();
include("koneksi.php");

if (isset($_POST['login'])){                            
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query	=	mysql_query("SELECT * FROM users where username='$username'");
    $llk	=	mysql_num_rows($query);
    if($llk==1){
    $fetch_query = mysql_fetch_array($query);
   	    $ppa	=	$fetch_query['password'];
        $idus	=	$fetch_query['id_user'];
        $username1  =   $fetch_query['username'];
        $full_name  =   $fetch_query['full_name'];
        $avatar = $fetch_query['avatar'];
        if ($username == $username1){
            if(md5($password)==$ppa){  
                $_SESSION['username'] = $username;
                $_SESSION['fullname'] = $full_name;
                $_SESSION['idu'] = $idus;
				$_SESSION['avatar'] = $avatar;
                echo "<META http-equiv='refresh' content='0;URL=admin/index.php?module=galeri'>";
            }else{
                echo "<script>alert('password salah, ulangi kembali!');javascript:history.go(-1);</script>";
			}
        }else{
            echo "<script>alert('Username Salah, ulangi kembali!');javascript:history.go(-1);</script>";
        }
   }else{
    echo "<script>alert('Maaf, Username Tidak Terdaftar!!!');javascript:history.go(-1);</script>";
   }

}else{
    echo "<script>alert('Silahkan Login Dengan Baik!!!');javascript:history.go(-1);</script>";
}

?>
