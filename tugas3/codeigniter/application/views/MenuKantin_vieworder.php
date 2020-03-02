<!DOCTYPE html>
<html>
<head>
    <title>Menu Kantin</title>
</head>
<body>
<br><br>
    <table style="border: 1px solid black;">
        <tr>
            <th>No</th>
            <th>Nama Warung</th>
            <th>Nama Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        <?php for($y=0;$y<sizeof($order);$y++) {?>
            <tr>
            <form action="<?php echo base_url(). 'menukantin/add_data'; ?>" method="post">
                <td><?php echo $order[$y]['kode_warung']; ?></td>
                <input type="number" id="kode_warung" name="kode_warung" value="<?php echo $order[$y]['kode_warung']; ?>" hidden/>
                
                <td><?php echo $order[$y]['nama_warung']; ?></td>
                <input type="text" id="nama_warung" name="nama_warung" value="<?php echo $order[$y]['nama_warung']; ?>" hidden />
                
                <td><?php echo $order[$y]['nama_menu']; ?></td>
                <input type="text" id="nama_menu" name="nama_menu" value="<?php echo $order[$y]['nama_menu']; ?>" hidden />
                
                <td><?php echo $order[$y]['harga']; ?></td>
                <input type="number" id="harga" name="harga" value="<?php echo $order[$y]['harga']; ?>" hidden />
            
                <td><?php echo $order[$y]['jumlah']; ?></td>
            </form>
            </tr>
        <?php } 
        ?>
    </table>
</body>
</html>