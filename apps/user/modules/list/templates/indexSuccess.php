<?php
    use_javascript('jquery.js');
    use_javascript('user.js');
?>
<div>
    <h3>List of Users</h3>
    <a href="../add/index">Add User</a><br><br>
    <!--LIST OF USERS -- START -->
    <table id="userListTbl" border='1' cellpadding="4" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Birth Date</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <?php
            if(!empty($user)):
                foreach($user AS $u):
                    ?>
                    <tr>
                        <td><?php echo $u->getName(); ?></td>
                        <td><?php echo date('F j, Y', strtotime($u->getBirthdate())); ?></td>
                        <td><?php echo $u->getAddress(); ?></td>
                        <td>
                            <a href="../view/index?id=<?php echo $u->getId(); ?>">View</a>
                        </td>
                    </tr>
                    <?php
                endforeach;
            else:
                ?>
                <tr>
                    <td colspan="4" style="text-align: center;">
                        No record(s) found.
                    </td>
                </tr>
                <?php
            endif;
        ?>
    </table>
    <!--LIST OF USERS -- END -->
</div>
