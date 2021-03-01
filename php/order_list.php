<!doctype html>
<html lang="en">
    <head>
        <meta charSet="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta http-equiv="content-language" content="pt-br"/>

        <title>Atividades php e <i class="fas fa-node-js    "></i></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <h3>
                        Atividade Listagem
                    </h3>
                    <?php
                        $list = array();
                        if(isset($_POST["qtd"])){
                            for ($i=0; $i<$_POST["qtd"]; $i++) {
                                array_push($list, $_POST["n".$i]);
                            }
                        sort($list);
                        foreach ($list as $number) {
                    ?>
                    <div>
                    <?= $number ?>
                    </div>
                    <?php
                        }}
                    ?>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </body>
</html>
