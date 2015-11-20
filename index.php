<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">
    <link href="css/iniciosesion.css" rel="stylesheet" type="text/css">
	<title>Login</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <script>
        function desactivado(){
            alert ("Usuario desactivado");
        }
    </script>
</head>

<body>

<center><img src="images/logologin.png"></center>
    <div id="login">
        
        <form action="login.php" method="get">
            
            <fieldset class="clearfix">
                
                <p><span class="fontawesome-user"></span><input type="text" name="user" value="Usuario" onBlur="if(this.value == '') this.value = 'Usuario'" onFocus="if(this.value == 'Usuario') this.value = ''" required></p> 
                <p><span class="fontawesome-lock"></span><input type="password" name="pass" value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> 
                <p><input type="submit" value="Iniciar Sesión"></p>

            </fieldset>

        </form>


    </div>
<?php
    if(isset($_REQUEST['visible'])){
?>
    <script type="text/javascript">

        desactivado();

    </script>
<?php
    }
?>
</body>
</html>