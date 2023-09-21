

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Plataforma de Cadastro - FORTEC</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<style>
 body {
            background-color: #1e90ff;
            font-family: sans-serif;

                    display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
		position: absolute;
		top: 300px;
		height: 350px;
            width: 400px;
            padding: 40px;
            text-align: left;
            background-color: aliceblue;
            border-radius: 20px;
            box-shadow: 10px 10px #3251f9;
        }

        .card-top {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .mensagem-sucesso {
            color: green;
            font-weight: bold;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .btn-login {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn-login:hover {
            background-color: #0056b3;
		}
		#img {
		position: absolute;
		top: 50px;
		}
		</style>
		<img src="https://www.fatef.com.br/wp-content/uploads/2020/04/LOGO-BRANCA-SEM-FUNDO-MENOR-300x233.png" id="img">
    <div class="card">
        <div class="card-top">
            <h1>Cadastro</h1><br>
            <h4>Preencha os dados de usuário.</h4>
        </div>

        <form method="post" action="php\cadastro.php">
            <div class="card-group">
                <label>Usuário:</label><input type="text" name="usuario" placeholder="Usuário" required/><br>
            </div>
            <div class="card-group">
                <label>Senha:</label><input type="password" name="senha" placeholder="Senha" required/>
            </div>
            <div class="card-group btn">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>
