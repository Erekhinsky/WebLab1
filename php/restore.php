<?php
session_start();
if (isset($_SESSION['results'])) {
    foreach ($_SESSION['results'] as $result) { ?>
        <tr>
            <td><?php echo $result[0] ?></td>
            <td><?php echo $result[1] ?></td>
            <td><?php echo $result[2] ?></td>
            <td class="<?php echo $result[3] ?>"><?php echo $result[3] ?></td>
        </tr>
<?php }} ?>