<?php 
	include "../model/database.php";
	$db = new database();
 
	$aksi = $_GET['aksi'];
	if ($aksi == "tambah") {
		$db->input($_POST['nama'], $_POST['umur'], $_POST['alamat'],$_POST['email']);		
		header("location:../view/tampil.php");
	}elseif ($aksi == "hapus") {
		$db->hapus($_GET['ID']);
		header("location:../view/tampil.php");
	}
	elseif ($aksi == "update") {
		$db->update($_POST['ID'], $_POST['Nama'], $_POST['Umur'], $_POST['Alamat'],$_POST['Email']);
		header("location:../view/tampil.php");
	}
	elseif ($aksi == "Googleapi"){
require_once "../Config/Googleapi.php";
    if(isset($_SESSION['acces_token'])){
        $google_client->setAccessToken($_SESSION['access_token']);
    }
    elseif (isset($_GET['code'])) {
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token'] = $token;
    }

    $google_service = new Google_Service_Oauth2($google_client);
	$data = $google_service->userinfo_v2_me->get();
	$_SESSION['email'] = $data['email'];
	$_SESSION['name']=$data['name'];

	$db->input($_SESSION['name'],null,null,$_SESSION['email']);
	header("location:../view/tampil.php");
	}
 ?>