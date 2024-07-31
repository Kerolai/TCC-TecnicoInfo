<?php
	$servidor = "localhost"; $usuario = "root"; $senha = ""; $dbname = "tcc";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if(!empty($_GET['estrela'])){
		$estrela = $_GET['estrela'];
		
		//Salvar no banco de dados
		$result_avaliacos = "INSERT INTO avaliacao (qnt_estrela, created) VALUES ('$estrela', NOW())";
		$resultado_avaliacos = mysqli_query($conn, $result_avaliacos);
		
		if(mysqli_insert_id($conn)){
			$_SESSION['msg'] = "Avaliação cadastrada com sucesso!";
			echo "<script>alert('Avaliação cadastrada com sucesso!');</script>";
		}else{
			$_SESSION['msg'] = "<script>alert('Erro ao cadastrar a avaliação!');</script>";
			echo "<script>alert('Erro ao cadastrar a avaliação!');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="imagens/logoCortada.png">
	<meta charset="utf-8">
	<title>TekMind | Matérias | Programação I | Linguagem C</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="estiloCP1.css">
</head>
<body>
	<!--MENU-->
	<div class="titulo">
		<font id="fonte1" style="font-family: Courier New; font-size: 65px;">Programação I</font>
			
	<!--LOGO-->
		<img src="imagens/logoNova.png" width="98" height="100" style="padding-left: 15px; margin-top: 8px;">
	</div>
	<br><br><br><br>
	<br><br><br>

	<!--BOTÃO PARA VOLTAR-->
		<div>
			<table style="margin-left: 2%;" width="7%">
			  	<tr>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/prog1/C003P1.php'"> <img src="imagens/esquerda.png" width="35px"></button></td>
			    	<td><button id="voltar" onclick="window.location.href = 'http://localhost/TCC/conteudos/prog1/C003P1.php'"><font style="font-family: Century Gothic; font-size: 15px;"><b>Voltar</b></font></button></td>
			 	</tr>
			</table><br>
		</div>

	<!--TÍTULO E LOGO DA MATÉRIA-->
		<table style="margin-left: 5%;" width="23%">
		  	<tr>
		    	<td><img src="imagens/prog1.png" width="90" height="90"></td>
		    	<td><font id="fonte2"><b>Linguagem C</b></font></td>
		 	</tr>
		</table><br>

		<div>
			<center><font size="6"><b>Declarações de variáveis globais</b></font></center><br>
			<p>
				As linguagens de programação exigem que o programador defina o <b>espaço</b> e o <b>local da memória</b> a ser usado por um determinado valor.<br><br>
				<b>Quantidade de espaço:</b> definida quando informamos qual é o tipo de valor a ser armazenado. Por exemplo, quando indicamos um valor do tipo char, um byte é colocado na memória RAM para seu armazenamento.<br><br>
				<b>Local da memória:</b> Locais na memória do computador que podem ser acessados, portanto, deve nomear em relação ao endereço da memória onde será armazenado determinado valor.<br><br>
				Esse processo de definir um local e uma quantidade de espaço na memória do computador para armazenar os dados, é chamada de <b>declaração de variáveis</b>.<br>
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ Algumas regras para criar nome das variáveis</b></font><br><br>
			<ul>
				<li>Pode conter letras, números e caracteres sublinhados;</li>
				<li>O primeiro caractere não pode ser número;</li>
				<li>Letras minúsculas são consideradas diferentes das maiúsculas (Ex.: delta e Delta, são diferentes);</li>
				<li>Os caracteres não podem ter sinais de pontuação (Ex: variável1, cão, etc.);</li>
			</ul><br><br>

			<font size="5" style="margin-left: 7%;"><b>→ Declaração e Atribuição</b></font><br>
			<p>
				Para declarar uma variável em seu algoritmo, escreva o <b>tipo</b> de dado que será armazenado na variável, seguido de seu <b>nome</b>. Sintaxe:<br>
				<b>tipo nome_variável;</b><br><br>

				Atribuindo valores às variáveis. Sintaxe:<br>
				<b>nome_variável = valor;</b>
			</p><br>

			<font size="5" style="margin-left: 7%;"><b>→ Compatibilidade de Tipos</b></font><br>
			<p>
				O valor a ser armazenado em uma variável deve ser do <b>mesmo tipo</b> da variável. <b>Exemplo</b>: int a;<br><br>
				&nbsp;&nbsp;a = 5; //correto<br>
				&nbsp;&nbsp;a = 5,3; //cuidado: a parte decimal será perdida, pois não há espaço suficiente para armazená-la.
			</p><br>

			<center><font size="6"><b>Funções</b></font></center><br>

			<font size="5" style="margin-left: 7%;"><b>→ main()</b></font>
			<p>
				Função principal e obrigatória para <b>execução</b> de um programa em C, que contém o código de execução após rodar o programa. Se não for adicionado no algoritmo, será gerado um erro durante o processo de geração do programa.<br><br>
				<b>Estrutura de todo programa C</b><br>
				<img src="imagens/C3/foto1.1.jpg" width="18%">
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ printf()</b></font>
			<p>
				Função de que permite <b>escrever caracteres</b> que serão exibidos na tela juntamente com os códigos de formatação, que indicam o <b>formato</b> em que os argumentos devem ser impressos. Cada <b>argumento</b> deve ser separado por <b>vírgula</b>. Sintaxe:
			</p>

			<center>
				<table id="sintaxe" width="27%">
					<tr><th>printf("expressão de controle", argumentos);</th></tr>
				</table>
			</center>
			<p>
				<b>Exemplo:</b> int n = 15;<br>
				printf("O valor de n eh: %d", n); //exibe o “O valor de n eh 15”.<br><br>
				Note-se que todo formato da string de dados é exibido com o especificador <b>“%d”</b>, que é substituído pelo valor em formato <b>inteiro</b> da variável.<br><br>
				<b>Especificadores de Formato mais utilizados:</b>
			</p>

			<center>
				<table class="tabela">
					<tr><td><b>%c</b></td><td>Caracteres simples (char)</td></tr>
					<tr><td><b>%d</b></td><td>Inteiro (int)</td></tr>
					<tr><td><b>%e</b></td><td>Notação científica</td></tr>
					<tr><td><b>%f</b></td><td>Ponto flutuante (float)</td></tr>
					<tr><td><b>%g</b></td><td>%e ou %f (mais curto)</td></tr>
					<tr><td><b>%o</b></td><td>Octal</td></tr>
					<tr><td><b>%s</b></td><td>String</td></tr>
					<tr><td><b>%u</b></td><td>Inteiro sem sinal</td></tr>
					<tr><td><b>%x</b></td><td>Hexadecimal</td></tr>
					<tr><td><b>%if</b></td><td>Tipo double</td></tr>
					<tr><td><b>%u</b></td><td>Inteiro não sinalizado (unsigned int)</td></tr>
					<tr><td><b>%old</b></td><td>Tipo long int</td></tr>
				</table>
			</center><br>

			<font size="5" style="margin-left: 7%;"><b>→ scanf()</b></font>
			<p>
				É o complemento do printf(), que nos permite ler dados formatados do teclado. Sintaxe:
			</p>
			<center>
				<table id="sintaxe" width="27%">
					<tr><th>scanf (“string de formato”, &var1, &var2,...&varN);</th></tr>
				</table>
			</center><br>

			<b style="font-size: 18px; margin-left: 8%;">– Operador de endereço “&”</b><br><br>
			<p>
				Ele tem a função de <b>retornar</b> o endereço do operando.<br><br>
				<b>Exemplo 1:</b><br>
				&nbsp;&nbsp;int t;<br>
				&nbsp;&nbsp;printf(“Digite um inteiro: “);<br>
				&nbsp;&nbsp;scanf(“%d”, &t);<br><br>
				/*aguarda a digitação de um número do tipo int. O número digitado é armazenado na variável t quando o usuário digita ENTER */<br><br>

				<b>Exemplo 2:</b><br>
				&nbsp;&nbsp;char carac1;<br>
				&nbsp;&nbsp;int i;<br>
				&nbsp;&nbsp;printf(“Digite um caracter e um int, separados por vírgula: ”);<br>
				&nbsp;&nbsp;scanf(“%c, %d”, &carac1, &i);<br><br>
				/*Os especificadores de formato %c e %d estão separados por vírgula, o que significa que o usuário deve digitar os valores também separados por vírgula e na ordem correta*/
			</p>

			<font size="5" style="margin-left: 7%;"><b>→ getchar()</b></font>
			<p>
				Função original de entrada de caractere dos sistemas baseados em UNIX. Ele armazena a entrada até que ENTER seja pressionado. <b>Exemplo</b>:<br><br>
				&nbsp;&nbsp;main(){<br>
				&nbsp;&nbsp;&nbsp;&nbsp;char ch;<br>
				&nbsp;&nbsp;&nbsp;&nbsp;ch = getchar();<br>
				&nbsp;&nbsp;&nbsp;&nbsp;printf("%c",ch);<br>
				&nbsp;&nbsp;}
			</p>
		</div><br><br><br><br>

		<div class="est">
			<fieldset class="estre">
				<h2 style="color: white">Avalie-nos!</h2><br>
				<span style="color: white">
					<?php
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg']. "<br><br>";
						}
					?>
				</span>
				<form method="GET" enctype="multipart/form-data">
					<div class="estrelas">
						<input type="radio" id="vazio" name="estrela" value="" checked>
							
						<label for="estrela_um"><i class="fa"></i></label>
						<input type="radio" id="estrela_um" name="estrela" value="1">
							
						<label for="estrela_dois"><i class="fa"></i></label>
						<input type="radio" id="estrela_dois" name="estrela" value="2">
							
						<label for="estrela_tres"><i class="fa"></i></label>
						<input type="radio" id="estrela_tres" name="estrela" value="3">
							
						<label for="estrela_quatro"><i class="fa"></i></label>
						<input type="radio" id="estrela_quatro" name="estrela" value="4">
							
						<label for="estrela_cinco"><i class="fa"></i></label>
						<input type="radio" id="estrela_cinco" name="estrela" value="5">
						<br><br>
						<input type="submit" value="Avaliar" class="bot">
					</div>
				</form>
			</fieldset>
		</div><br><br>

		<!--CRÉDITOS-->
		<div class="div">
			<p class="cred">Elisângela e Kerolai ® 2021</p>
		</div>
</body>
</html>