<?php foreach($karyawan as $k) { ?>
<form action="<?php echo base_url(). 'index.php/karyawan/update' ?>"method="POST">
    <input type="hidden" name="no" value="<?php echo $k['no'];?>">
    
    <label>Nama</label>
    <input type="text" name="nama" value="<?php echo $k['nama'];?>"><br>
    
    <label>Alamat</label>
    <input type="text" name="alamat" value="<?php echo $k['alamat'];?>"><br>
    
    <input type="submit" name="submit" value="Update">
</form>
<?php } ?>