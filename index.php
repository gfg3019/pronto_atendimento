<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hospital Maria Joaquina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body class=" bg-info text-white">
    <header>
    <nav class="navbar navbar-light bg-secondary text-white">
        <a id="sair" class="btn btn-info" href="login.php">
            Sair
        </a>
        <a id="log"class="navbar-brand" href="index.php">
        <img src="img/Hospital" width="50" height="50" class="d-inline-block align-top">
        Hospital Maria Joaquina
        </a>
    </nav>
    </header>
    <main>
        <div class="container bg-light text-dark">
            <h2>Atendimento Hospitalar</h2>
            <br><br><br>
            <input type="text" id="nome"  style="font-family: 'Aleo', serif;" class="form-control col-3" name="nome" id="elemento" draggable="true" ondragstart="arrastar(event);" placeholder="nome">
            <br><br><br>
            <nav>
                <ul class="ull">
                    <li class="lii">
                        <div id="normal" name="normal" class="card" ondrop="receberBlue(event)" ondragover="arrastAquiMouse(event)">
                            Atendimento normal 
                        </div>
                    </li>
                    <li class="lii">
                        <div id="atencao" name="atencao" class="card" ondrop="receberYellow(event)" ondragover="arrastAquiMouse(event)">
                            <p>Atendimento com atenção</p> 
                        </div>        
                    </li>
                    <li class="lii">
                        <div id="grave" name="grave" class="card" ondrop="receberRed(event)" ondragover="arrastAquiMouse(event)">
                                <p>Atendimento grave</p> 
                        </div>
                    </li>
                
                </ul>
            </nav>
            <br><br><br>
            <a class="btn btn-success" style="font-family: 'Aleo', serif;" id="button" href="index.php">Encaminhar</a>
            <br><br><br>
        </div>
    </main>    
<footer class="footer mt-auto py-3 bg-dark text-white">
	<div class="container">
				
	<div class="col-md-12 text-center copyright rodape">
		<p>
			<small class="block">&copy; 2019 Genisson. Todos os Direitos Reservados.</small>
			<small class="block">Desenvolvido por
				Genisson Ferreira
			</small>
		</p>
	</div>

    </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>