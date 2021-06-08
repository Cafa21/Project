<?php
class database{

    var $host = "localhost";
    var $uname = "root";
    var $pass =  "";
    var $db = "loker";
    var $con;

    function __construct(){
        $this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        mysqli_select_db($this->con, $this->db);
    }

    function tampil_data(){
        $data = mysqli_query($this->con, "select * from lowongankerja");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function input($Nama, $Umur,$Alamat ,$Email){
        mysqli_query($this->con, "insert into lowongankerja values ('', '$Nama', '$Umur', '$Alamat','$Email')");
    }

    function hapus($ID){
        mysqli_query($this->con, "delete from lowongankerja where ID='$ID'");
    }

    function edit($ID){
        $data = mysqli_query($this->con, "select * from lowongankerja where ID='$ID'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($ID, $Nama, $Umur, $Alamat, $Email){
        mysqli_query($this->con, "update lowongankerja set Nama='$Nama',Umur='$Umur',Alamat='$Alamat',Email='$Email' where ID='$ID'");
    }
}
?>