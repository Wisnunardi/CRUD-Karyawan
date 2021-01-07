<table border="1">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php foreach ($karyawan as $k) : ?>
    <tr>
        <td><?php echo $k['no']; ?></td>
        <td><?php echo $k['nama']; ?></td>
        <td><?php echo $k['alamat']; ?></td>
        <td>
            <?php echo anchor('karyawan/edit/' . $k['no'], 'Edit') ?> |
            <?php echo anchor('karyawan/hapus/' . $k['no'], 'Hapus') ?>
        </td>
    </tr>
<?php endforeach ?>
</table>
<a href="<?php echo base_url() . 'index.php/karyawan/tambah' ?>">Tambah Data</a>