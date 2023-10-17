<?php
   include("config.php");
   session_start();
   $error = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT IDPERSONAS FROM PERSONAS WHERE CORREO = '$myusername' and contraseña = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Nombre de usuario o contraseña incorrecto";
      }
   }
?>

<br>
<br>
<br>

<html>
   
   <head>
      <title>Iniciar sesion</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
      <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
     </style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 


   <script>
      
   function verificar_campos(){
      
    var text=document.forms[0].username.value.length;
    
    if(text==0) {
        document.forms[0].username.focus();
        alert("El formulario no puede quedar vacio");
        return false;
    }else{
        document.forms[0].submit();
    }
}
</script>
 

      <div align = "center">
      <title>Login</title>
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Ingreso de usuario</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  


                  <input type="button" value="Entrar" onclick="verificar_campos()" />
                  <br>
                  <br>
                  <button type="button" onclick="window.location.href='reset-password.php'">Restablecer contraseña</button>
                  <br>
                  <br>
                  <button type="button" onclick="window.location.href='registro.php'">Registro nuevo usuario</button>

                  
                  <!-- <input type = "button" value = " Entrar "onclick="verificar_campos()"/><br />
                  <button type="button" onclick="window.location.href='reset-password.php'">Restablecer contraseña</button>
                  <button type="button" onclick="window.location.href='registro.php'">Registro nuevo usuario</button> -->
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>