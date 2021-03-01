<!doctype html>
<html lang="en">
    <head>
        <meta charSet="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta http-equiv="content-language" content="pt-br"/>

        <title>Atividades php e <i class="fas fa-node-js"></i></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <h3>
                        Atividade
                    </h3>
                    <input type="number" id="text-box"/>
                    <button type="button" class="btn btn-primary" id="btn-box">Clique para gerar novos campos</button>
                    <form action="/order_list.php" method="POST">
                        <button type="submit" class="btn btn-success d-none" id="btn-order">Ordenar</button>
                        <div id='inputs'>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </body>
</html>
<script src="js/index.js"></script>
