<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include(".\assets\utils\head.php"); ?>
    <title>Cadastrar - Reciclottech</title>
</head>
<body>
    <?php include(".\assets\utils\header.php"); ?>
    <form action="read.php" method="post">
        <section class="form-data">
            <h2>Cadastrar dados pessoais</h2>
            
            <div class="input-form">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" required>
            </div>
            
            <div class="input-form">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required>
            </div>
    
            <div class="input-form">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone" required>
            </div>
        </section>

        <section class="form-data">
            <h2>Cadastrar dados dos produtos</h2>
    
            <div class="input-form">
                <label for="titulo">Título do produto</label>
                <input type="text" name="titulo" id="titulo" required>
            </div>

            <div class="input-form">
                <label for="categoria"><span>Selecione a categoria</span></label>
                <select id="categoria" name="categoria">
                    <option value="Periféricos">Periféricos</option>
                    <option value="Placas de circuitos">Placas de circuitos</option>
                    <option value="Baterias e Pilhas">Baterias e Pilhas</option>
                    <option value="Fios">Fios</option>
                    <option value="Celulares">Celulares</option>
                    <option value="Eletrodomésticos">Eletrodomésticos</option>
                    <option value="Rádios">Rádios</option>
                    <option value="Televisores">Televisores</option>
                    <option value="Outros">Outros</option>
                </select>
            </div>
    
            <div class="input-form">
                <label for="quantidade">Quantidade de produtos</label>
                <input type="number" name="quantidade" id="quantidade" required>
            </div>
    
            <div class="input-form">
                <label for="date">Data de descarte</label>
                <input type="date" name="date" id="date" required>
            </div>
            
            <input type="submit" name="submit" value="Enviar Dados" />
        </section>
    </form>
</body>
</html>