<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="nome"></div>
        <div id="mensagem"></div>
        <script src="jquery.js"></script>
        <script>
            $.ajax({
                url:'nome.php'
            }).done(function(valor){
                $('#nome').html(valor);
            }).fail(function(){
                $('#nome').html("Erro no carregamento");
            }).always(function(){
                $('#mensagem').html("Mensagem de Quaquer coisa");
            });
        </script>
    </body>
</html>