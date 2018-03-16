<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Relax Corporation</title>
        <link href="../CSS/css.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/example1.js"></script>
        <?php
        include '../Business/PersonBusiness.php';
        ?>
    </head>

    <body>      
        <div id="main">
            <div id="top-nav">
                <b>Relax</b>Corporation
            </div>
            <div id="header">
                <img src="images/header.jpg" alt="" width="720" height="160" />
            </div>
            <div id="navigation">
                main menu
                <hr />
                <a href="?error=empty_field" class="navigation">Home</a>
                <a href="#" class="navigation">Show all</a>
                <a href="#" class="navigation">News</a>
                <a href="#" class="navigation">Contact Us</a>
                <a href="#" class="navigation">Links</a>
            </div>

            <br><br>
                <div id="content">   

                    <form action="../Business/PersonInsertAction.php" method="get" >
                        <table>
                            <tr>
                                <td>Person name</td>
                                <td>
                                    <input type="text" name="txtName" id="txtName"></input>
                                </td>
                                <td><div id="msgErrorName" style="color: red">*</div></td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td>
                                    <input type="text" name="txtAge" id="txtAge"></input>
                                </td>
                                <td><div id="msgErrorAge" style="color: red">*</div></td>
                            </tr>
                            <tr>
                                <td>Wage</td>
                                <td>
                                    <input type="text" name="txtWage" id="txtWage"></input>
                                </td>
                                <td><div id="msgErrorWage" style="color: red">*</div></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" value="Insert" 
                                           name="btnInsert" id="txtInsert" onclick="return validateFields();"/>      
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <?php
                                    if (isset($_GET['error'])) {
                                        if ($_GET['error'] == "empty_field") {
                                            ?>
                                            <div style="color: red">  
                                                Empty Fields
                                            </div>
                                            <?php
                                        } else {
                                            ?>
                                            <div style="color: red">  
                                                Number Format
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        if (isset($_GET['sucess'])) {
                                            ?>
                                            <div style="color: green">  
                                                se guardó   
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>                                
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
        <div id="footer">
            <hr />
            Copyright © 2005 | All Rights Reserved
        </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    console.log("Hello world");
    document.getElementById('msgErrorName').style.visibility = "hidden";
    document.getElementById('msgErrorAge').style.visibility = "hidden";
    document.getElementById('msgErrorWage').style.visibility = "hidden";
    
    function showName(){
        var name = document.getElementById('txtName');        
        alert(name.value);
        
        /*depende lo que se retorne se controla el action del botón del form*/
        return true;
    }
</script>