<?php
    session_start();
    require_once('conn.php');
    error_reporting(0);
    ini_set("display_errors", 0 );
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleMain.css">
    <link rel="stylesheet" href="styleFooter.css">
    <link rel="stylesheet" href="styleCardOpen.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="nav">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="/">Imobiliaria de Jesus</a>
                    </div>
                    <div class="bar">
                        <ul>
                            <li>
                                <a href="comprar.php" data-scroll>Comprar</a>
                            </li>
                            <li>
                                <a href="">Alugar</a>
                            </li>
                            <li>
                                <a href="">Institucional</a>
                            </li>
                            <li>
                                <a href="">Sobre</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contato">
                        <a href="https://api.whatsapp.com/send?phone=55499890628&text=Ol%C3%A1%20Gabriel%20tudo%20bem?">(49) 9 8906-2882</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="open-card-row">
                <?php
                    $imov = $_POST['imovel'];
                    $busca_imoveis = "SELECT * FROM `imoveis_gabrielsj151@gmail.com` WHERE id = '$imov'";
                    $resultado_imoveis = mysqli_query($conn,$busca_imoveis);
                    $tatal_imoveis = mysqli_num_rows($resultado_imoveis);
                    
                    while($dados_imoveis = mysqli_fetch_array($resultado_imoveis)){
                        $id_imovel = $dados_imoveis['id'];
                        $titulo_imovel = $dados_imoveis['titulo_imov'];
                        $tipo_imovel = $dados_imoveis['tipo_imov'];
                        $desc_imovel = $dados_imoveis['desc_imov'];
                        $img_imovel = $dados_imoveis['img_imov'];
                        $quartos_imovel = $dados_imoveis['quartos_imov'];
                        $banheiros_imovel = $dados_imoveis['banheiros_imov'];
                        $suites_imovel = $dados_imoveis['suites_imov'];
                        $dependencias_imovel = $dados_imoveis['dependencias_imov'];
                        $vagas_garragem_imovel = $dados_imoveis['vagas_garragem_imov'];
                        $mquadrada_imovel = $dados_imoveis['mquadrada'];
                        $metragempriv_imovel = $dados_imoveis['mquadrada_priv_imov'];
                        $val_imovel = $dados_imoveis['valor'];
                        $obs_imovel = $dados_imoveis['obs'];
                        $email_imovel = $dados_imoveis['email'];
                    
                ?> 
                <div class="imovel-aberto">
                    <h1><?php echo "$titulo_imovel";?></h1>   
                    <div>
                        <img src="./Images_slides/img1.jpg" alt="Mountains">
                    </div>
                    <div class="dados-imovel">
                        <div>
                            <p>Cod Imov: <?php echo "$id_imovel";?></p>
                            <h4>Valor: <?php echo "$val_imovel";?></h4>
                        </div>
                        <div>
                            <p>Área Total M²: <?php echo "$mquadrada_imovel";?></p>
                            <p>Area Privativa M²: <?php echo "$metragempriv_imovel";?></p>
                            <p>Quartos: <?php echo "$quartos_imovel";?></p>
                            <p>Banheiros: <?php echo "$banheiros_imovel";?></p>
                            <p>Dependencias: <?php echo "$dependencias_imovel";?></p>
                            <p>Vagas de Garagem: <?php echo "$vagas_garragem_imovel";?></p>
                        </div>
                    </div>
                    <div>
                        <h2>Descrição</h2>
                        <p>
                            <?php echo "$desc_imovel";?>
                        </p>
                    </div>
                </div>
                <?php
                    }
                ?>
                <div class="form-contato">
                    <div class="contato-wpp">
                        <h3>Gostou? Entre em contato conosco!</h3>
                        <div>
                            <span>Wpp</span>
                        </div>
                    </div>
                    <div class="contato-email">
                        <h3>Enttre em contato conosco por Email!</h3>
                        <form action="/action_page.php">
                            <label for="fname">Nome Completo:</label>
                            <input type="text" id="fname" value="John">
                            <label for="fname">Telefone para Contato:</label>
                            <input type="text" id="fname" value="John">
                            <label for="fname">Email:</label>
                            <input type="text" id="fname" value="John">
                            <label for="fname">Mensagem</label>
                            <input type="text" id="fname" value="John">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="bg-footer">
            <div class="container">
                <div class="flex-footer">
                    <div class="creci">
                        <div>
                            <a href="">Logo</a>
                            <p>CRECI 111G</p>
                        </div>
                    </div>
                    <div class="imoveis">
                        <h1>Buscar Imovel</h1>
                        <div>
                            <a href="">Alugar</a>
                            <a href="">Comprar</a>           
                        </div>
                    </div>
                    <div class="intitucional">
                        <h1>Intitucional</h1>
                        <div>
                            <a href="">Venda Conosco</a>
                            <a href="">Contato</a>
                            <a href="">Politica de privacidade</a>           
                        </div>
                    </div>
                    <div class="localizacao">
                        <h1>Localização</h1>
                        <div>
                            <a href="">Rua Fernando Machado, 1111-D</a>
                            <a href="">Centro, Chapecó / SC</a>         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
