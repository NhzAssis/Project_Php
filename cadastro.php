<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Cadastro - Clinica</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">


</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                      <div class="box">
                        <form action="cadastrar.php" method="POST" id="temp">
                            <div class="field">
                                <div class="control">
                                    <span style="display: none" id="spanome">
                                        Preencha o Campo Nome
                                    </span>
                                    <input required name="nome" type="text" class="input is-large" placeholder="Nome" id="nome" autocomplete="off" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input required name="consulta" type="text" class="input is-large" autocomplete="off" id="consulta"  placeholder="Consulta">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input required name="medico" class="input is-large" id="medico" autocomplete="off" placeholder="Medico">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input required name="data" type="text" class="input is-large" id="data" autocomplete="off" placeholder="Data da Consulta">
                                </div>
                            </div>
                            <br>
                            <button type="button" onclick="exibeMensagem()" id="alert" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
</script>
<script>
    function exibeMensagem() {
        if (validaForm()) {
            Swal.fire({           
                title: "Parabens!! Registrado com sucesso!!",
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'Ok',
                icon: 'success'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('temp').submit();

                }
            })
        }

    };

    function validaForm() {
        if ($("#nome").val() == "" || $("#consulta").val() == "" || $("#medico").val() == "" || $("#data").val() == "") {
            validacao()

            return false
        } else {
            return true
        }
    }

    function validacao() {
         var model = {
            nome: $("#nome"),
            consulta: $('#consulta'),
            medico: $('#medico'),
            data: $('#data')
        };

        $.each(model, function(i, item) {
            if (item.val() == "") {
                item.css("border-color", "red")
                $("#spa" + item.attr(id))
            }
        })
    }

    function validaOnKeyUp(campo)
    {
        if($(campo) != "")
        {
            $(campo).css("border-color", "")
        }
    }

        
</script>