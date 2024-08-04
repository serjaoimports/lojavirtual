<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
   <div class="container">
     <div class="row">
        <div class="col">
            <h2>Cadastro de Produtos</h2>
        </div>
     </div>
        <div class="row">
            <div class="col-4">   
                <img src="imagens/produtos.png" alt="produto" class="img-produto">
            </div>
            <div class="col-8">
                <form method="GET" action="controller/salvar.php">
                 <div class="mt-3 form-floating">
                        <input type="number" class="form-control desabilitado" id="codigo" name="codigo" readonly>
                        <label for="codigo" class="form-label">Código</label>
                 </div> 
                 <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="nome" name="nome">
                    <label for="nome" class="form-label">Nome do Produto</label>
             </div>
             <div class="mt-3 form-floating">
                <input type="text" class="form-control" id="valor" name="valor">
                <label for="valor" class="form-label">Valor</label>
         
         </div>
         
        <div class="mt-3 form-floating">
            <div class="row">
            <div class="col"><button type="button" class="btn btn-primary form-control botaonovo">
                Novo</button>
            </div>
          
            <div class="col">
                <div class="col"><button type="submit" class="btn btn-primary form-control botaosalvar">
                    Salvar</button>
                </div>
            </div>
        </div>
        
     </form>
               
            </div>
        </div>
   </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col">
                    <h2>Produtos Cadastrados</h2>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-light table-hover">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nome Produto</th>
                                <th>Valor</th>
                                <th>Editar></th>
                                <th>Excluir</th>

                            </tr>
                        </thead>
                        <tbody>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>