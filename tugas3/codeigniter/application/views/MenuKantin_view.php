<!DOCTYPE html>
<html>
<head>
    <title>Menu Kantin</title>
</head>
<body>
    <table style="border: 1px solid black;">
        <tr>
            <th>No</th>
            <th>Nama Warung</th>
            <th>Nama Menu</th>
            <th>Harga</th>
        </tr>
        <?php for($x=0;$x<sizeof($menu);$x++) {?>
            <tr>
            <form action="<?php echo base_url(). 'menukantin/add_data'; ?>" method="post">
                <td><?php echo $menu[$x]['kode_warung']; ?></td>
                <input type="number" id="kode_warung" name="kode_warung" value="<?php echo $menu[$x]['kode_warung']; ?>" hidden/>
                
                <td><?php echo $menu[$x]['nama_warung']; ?></td>
                <input type="text" id="nama_warung" name="nama_warung" value="<?php echo $menu[$x]['nama_warung']; ?>" hidden />
                
                <td><?php echo $menu[$x]['nama_menu']; ?></td>
                <input type="text" id="nama_menu" name="nama_menu" value="<?php echo $menu[$x]['nama_menu']; ?>" hidden />
                
                <td><?php echo $menu[$x]['harga']; ?></td>
                <input type="number" id="harga" name="harga" value="<?php echo $menu[$x]['harga']; ?>" hidden />

                <td><button type="submit" name="submit" id="submit">Pesan</button></td>
            </form>
            </tr>
        <?php } 
        ?>
    </table>
</body>
</html>