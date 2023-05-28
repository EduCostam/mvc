<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>O que é MVC</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Produtos</h1>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Código</td>
                            <td>Nome</td>
                            <td>Preço</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($produtos as $p) {
                                echo "<tr>" . 
                                     "  <td>".$p->codigo."</td>".
                                     "  <td>".$p->nome."</td>".
                                     "  <td>".$p->preco."</td>".
                                      "</tr>";
                            }   
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>