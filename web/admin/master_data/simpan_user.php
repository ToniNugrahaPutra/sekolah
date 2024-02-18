<?php
error_reporting(0);
$query_max_id=mysqli_query($koneksi, "SELECT MAX(id_user) as maxid FROM tabel_user");
$result=mysqli_fetch_array($query_max_id);
$maxid=$result['maxid'];
$uid="UID";
$no_urut=substr($maxid,-3);
$new_urut=$no_urut+1;
$id_user=$uid.sprintf("%03s",$new_urut);
if(isset($_POST['button_tambah'])){
$nm_user	=$_POST['nm_user'];	
$password	=$_POST['password'];
$akses		=$_POST['akses'];
$kd_toko	=$_POST['kd_toko'];
$query_insert="INSERT INTO tabel_user (id_user,nm_user,password,pass_user,akses,kd_toko)VALUES('".$id_user."','".$nm_user."',md5('".$password."'),'".$password."','".$akses."','".$kd_toko."')";
$insert=mysqli_query($koneksi, $query_insert);
if($insert){
echo "<script language='JavaScript'>document.location ='?menu=list_toko'</script>";}
else{
echo "<script language='javascript'>
window.alert('Proses penyimpanan gagal');javascript:history.back();</script>";}
}?>

<form action="" method="post" id="form_tambah">

<div class="row">
  
  <div class="col-sm-6 col-12">
      <div class="font-medium-2 mb-1">
         ID USER
       </div>
       <fieldset class="form-group position-relative has-icon-left input-divider-left">          
         <input type="text" class="form-control" value="<?php echo $id_user;?>" readonly="readonly" />
         <div class="form-control-position">
            <i class="feather icon-user"></i>
           </div>
       </fieldset>
     </div>      
     
     <div class="col-sm-6 col-12">
      <div class="font-medium-2 mb-1">
         KODE TOKO SAYA
       </div>
       <fieldset class="form-group position-relative has-icon-left input-divider-left">          
         <input type="text" name="kd_toko" class="form-control" value="<?php echo $_GET['kd_toko'];?>" readonly="readonly" />
         <div class="form-control-position">
            <i class="feather icon-shopping-cart"></i>
           </div>
       </fieldset>
     </div> 

</div>

<div class="row">   
  
  <div class="col-12 col-sm-6 mb-1">
   <div class="font-medium-2 mb-1">
         NAMA PENJUAL
       </div>
     <div class="input-group">
        <input type="text" name="nm_user" class="form-control" placeholder="Isi disini" required="required" />
         <div class="input-group-append" id="button-addon2">
            <button class="btn btn-primary" type="button"><abbr title="wajib diisi">*</abbr> NAMA PENJUAL</button>
         </div>
     </div>
   </div>
   
  <div class="col-12 col-sm-6 mb-1">
   <div class="font-medium-2 mb-1">
        PASSWORD
       </div>
     <div class="input-group">
       <input type="text" name="password" class="form-control" placeholder="Isi disini" required="required" />
         <div class="input-group-append" id="button-addon2">
            <button class="btn btn-primary" type="button"><abbr title="wajib diisi">*</abbr> PASSWORD</button>
         </div>
     </div>
   </div>

</div>  

<input type="submit" name="button_tambah" id="button_tambah" value="Daftarkan Penjual" class="btn btn-primary" />
<input type="reset" name="button_cancel" id="button_cancel" value="Cancel" onClick="hide(0)" class="btn btn-danger" />

</form>