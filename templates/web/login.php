<?php
 
    $connect = mysql_connect('localhost','root','');
 
    $db = mysql_select_db('medicasa');
 
    if (isset( $_POST['login']))
    {
 
        $email  = $_POST['email_usu'];    
        $senha = $_POST['senha_usu'];
 
       $verifica = ("SELECT * FROM acesso where email_usu = '$email' and senha = '$senha_usu'");
 
       $res = mysql_query($verifica);
 
       if (mysql_num_rows ( $res ) !=1)
      {
                   echo "<script language='javascript' type='text/javascript'>
                                   alert('Login e/ou senha incorretos');
                         window.location.href='cadastro.php';</script>";
                    die();
                }
 
                else{
                   header("Location:home-logado.html");
             }
              }
?>
<!DOCTYPE html>
              <html lang="en">
              <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <script src="https://kit.fontawesome.com/223af74c50.js" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="css/estilo.css" />
              
                <title>Login</title>
              </head>
              <style>
                * {
                  margin: 0;
                  padding: 0;
                }
              
              
              </style>
              <body>
                <section>
                  <form action="" class="logSection">
                    <div>
                      <h1>MediCasa</h1>
                
                      <div>
                        <label for="sou">Eu sou</label><br>
                        <select name="sou" id="EuSou">
                          <option>Paciente</option>
                          <option>Colaborador</option>
                        </select>
                      </div>
                    </div>
                    <div>
                      <a href="">Outros acessos</a>
              
                      <div>
                        <h2>Login</h2>
                        <div>
                          <label for="email">Email:</label>
                          <input name="email" type="email" id="email" placeholder="Exemplo@gmail.com" required size="25"/>
                        </div>
                        <div>
                          <label for="password">Senha:</label>
                          <div class="passInput">
                            <input name="password" type="password" id="password" placeholder="******" required size="25"/>
                            <i class="fas fa-eye" id="olho"></i>
                          </div>
                        </div>
                        <div>
                          <a href="">Esqueceu a senha?</a>
                          <input type="submit" value="Entrar">
                          <a href="cadastrar.html">Não possui uma conta? Registre-se</a>
                        </div>
                      </div>
                    </div>
                  </form>
                </section>
              
                <script src="js/index.js"></script>
              </body>
              </html>