<?php 
    include './Reusable/main_header.php';
?>

<div id="content">
    <form action="../Business/UserLoginAction.php" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="txtName" id="txtName"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="txtPassword" id="txtPassword"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="login"/></td>
            </tr>
        </table>
    </form>
    <?php 
        if(isset($_GET['sucess'])){
            $information = $_GET['sucess'];
            echo '<h2>'.$information.'<h2>';
            
        }else if(isset($_GET['error'])) {
            $information = $_GET['error'];
            echo '<h2>'.$information.'<h2>';
        }
    ?>
</div> 


<?php 
    include './Reusable/main_footer.php';
?>