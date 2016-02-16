<!DOCTYPE html>
<html>
    <head>
        <title>Formulário Dinâmico</title>
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    </head>

    <body>

    <div class="container">
        <h1>Fase 2</h1>

        <?php
        require_once "../autoloader.php";

        use SON\Form\Form,
            SON\Form\Validators\Validator,
            SON\Form\Requests\Request;

        use SON\Form\Elements\Input,
            SON\Form\Elements\Label,
            SON\Form\Elements\Textarea;

        //Instância 1 - Contato

        echo "<h3>1 - Contato</h3>";

        $request_1    = new Request();
        $validator_1  = new Validator($request_1);
        $form_1       = new Form($validator_1);

        $LabelNome_1 = new Label(['for'=>'nome']);
        $LabelNome_1->setTexto('Nome Completo');
        $InputName_1 = new Input(['type'=>'text','name'=>'nome','size'=>'50','placeholder'=>'Digite seu nome...',
            'class'=>'form-control']);
        $LabelEmail_1 = new Label(['for'=>'email']);
        $LabelEmail_1->setTexto('E-Mail');
        $InputEmail_1 = new Input(['type'=>'text','name'=>'email','size'=>'50','placeholder'=>'Digite seu email...',
            'class'=>'form-control']);

        $LabelMens_1 = new Label(['for'=>'menssage']);
        $LabelMens_1->setTexto('Mensagem');
        $InputMens_1 = new Textarea(['name'=>'menssage','rows'=>'10','placeholder'=>'Digite sua mensagem...',
            'class'=>'form-control']);

        $InputSubmit_1 = new Input(['type'=>'submit','value'=>'Enviar','class'=>'btn btn-primary']);
        $InputLimpar_1 = new Input(['type'=>'reset','value'=>'Limpar','class'=>'btn btn-default']);

        $form_1->addField($LabelNome_1);
        $form_1->addField($InputName_1);
        $form_1->addField($LabelEmail_1);
        $form_1->addField($InputEmail_1);
        $form_1->addField($LabelMens_1);
        $form_1->addField($InputMens_1);
        $form_1->addField($InputSubmit_1)->addField($InputLimpar_1);

        $form_1->render();

        //Instância 2 - Clientes

        echo "<h3>2 - Clientes</h3>";

        $request_2    = new Request();
        $validator_2  = new Validator($request_2);
        $form_2       = new Form($validator_2);

        $LabelNome_2 = new Label(['for'=>'nome']);
        $LabelNome_2->setTexto('Nome Completo');
        $InputName_2 = new Input(['type'=>'text','name'=>'nome','size'=>'50','placeholder'=>'Digite seu nome...',
            'class'=>'form-control']);
        $LabelEmail_2 = new Label(['for'=>'email']);
        $LabelEmail_2->setTexto('E-Mail');
        $InputEmail_2 = new Input(['type'=>'text','name'=>'email','size'=>'50','placeholder'=>'Digite seu email...',
            'class'=>'form-control']);
        $LabelEnd_2 = new Label(['for'=>'endereco']);
        $LabelEnd_2->setTexto('Endereço');
        $InputEnd_2 = new Input(['type'=>'text','name'=>'endereco','size'=>'50','placeholder'=>'Digite seu endereço...',
            'class'=>'form-control']);

        $Labelrg_2 = new Label(['for'=>'rg']);
        $Labelrg_2->setTexto('RG');
        $Inputrg_2 = new Input(['type'=>'text','name'=>'rg','size'=>'20','placeholder'=>'Digite seu RG...',
            'class'=>'form-control']);

        $Labelidade_2 = new Label(['for'=>'idade']);
        $Labelidade_2->setTexto('Idade');
        $Inputidade_2 = new Input(['type'=>'number','name'=>'idade','size'=>'3','class'=>'form-control',
                                   'max'=>'150', 'min'=>'0']);

        $InputSubmit_2 = new Input(['type'=>'submit','value'=>'Enviar','class'=>'btn btn-primary']);
        $InputLimpar_2 = new Input(['type'=>'reset','value'=>'Limpar','class'=>'btn btn-default']);

        $form_2->addField($LabelNome_2);
        $form_2->addField($InputName_2);
        $form_2->addField($LabelEmail_2);
        $form_2->addField($InputEmail_2);
        $form_2->addField($LabelEnd_2);
        $form_2->addField($InputEnd_2);
        $form_2->addField($Labelrg_2);
        $form_2->addField($Inputrg_2);
        $form_2->addField($Labelidade_2);
        $form_2->addField($Inputidade_2);
        $form_2->addField($InputSubmit_2)->addField($InputLimpar_2);

        $form_2->render();

        //Instância 3 - Produtos

        echo "<h3>3 - Produtos</h3>";

        $request_3    = new Request();
        $validator_3  = new Validator($request_3);
        $form_3       = new Form($validator_3);

        $LabelNome_3 = new Label(['for'=>'nome']);
        $LabelNome_3->setTexto('Nome do Produto');
        $InputName_3 = new Input(['type'=>'text','name'=>'nome','size'=>'50','placeholder'=>'Digite o nome do Produto...',
            'class'=>'form-control']);

        $LabelMarca_3 = new Label(['for'=>'marca']);
        $LabelMarca_3->setTexto('Marca');
        $InputMarca_3 = new Input(['type'=>'text','name'=>'marca','size'=>'50','placeholder'=>'Digite a marca...',
            'class'=>'form-control']);

        $LabelValidade_3 = new Label(['for'=>'validade']);
        $LabelValidade_3->setTexto('Validade');
        $InputValidade_3 = new Input(['type'=>'date','name'=>'validade','placeholder'=>'Validade',
            'class'=>'form-control']);

        $LabelEstoque_3 = new Label(['for'=>'estoque']);
        $LabelEstoque_3->setTexto('Estoque');
        $InputEstoque_3 = new Input(['type'=>'number','name'=>'estoque','placeholder'=>'Estoque..', 'max'=>'100000',
            'class'=>'form-control']);

        $InputSubmit_3 = new Input(['type'=>'submit','value'=>'Enviar','class'=>'btn btn-primary']);
        $InputLimpar_3 = new Input(['type'=>'reset','value'=>'Limpar','class'=>'btn btn-default']);

        $form_3->addField($LabelNome_1);
        $form_3->addField($InputName_1);
        $form_3->addField($LabelMarca_3);
        $form_3->addField($InputMarca_3);
        $form_3->addField($LabelValidade_3);
        $form_3->addField($InputValidade_3);
        $form_3->addField($LabelEstoque_3);
        $form_3->addField($InputEstoque_3);
        $form_3->addField($InputSubmit_3)->addField($InputLimpar_3);

        $form_3->render();

        //Instância 4 - Carros

        echo "<h3>4 - Carros</h3>";

        $request_4    = new Request();
        $validator_4  = new Validator($request_4);
        $form_4       = new Form($validator_4);

        $LabelMarca_4 = new Label(['for'=>'marca']);
        $LabelMarca_4->setTexto('Marca');
        $InputMarca_4 = new Input(['type'=>'text','name'=>'marca','size'=>'50','placeholder'=>'Digite a marca...',
            'class'=>'form-control']);

        $LabelModelo_4 = new Label(['for'=>'modelo']);
        $LabelModelo_4->setTexto('Modelo');
        $InputModelo_4 = new Input(['type'=>'text','name'=>'modelo','size'=>'50','placeholder'=>'Digite o modelo...',
            'class'=>'form-control']);

        $LabelAno_4 = new Label(['for'=>'ano']);
        $LabelAno_4->setTexto('Ano');
        $InputAno_4 = new Input(['type'=>'number','name'=>'ano','placeholder'=>'Ano','min'=>'1900', 'max'=>'2020',
            'class'=>'form-control']);

        $LabelOpc_1_4 = new Label(['for'=>'opc_1']);
        $LabelOpc_1_4->setTexto('Banco de Couro');
        $InputOpc_1_4 = new Input(['type'=>'checkbox','name'=>'opc_1', 'class'=>'form-control']);

        $LabelOpc_2_4 = new Label(['for'=>'opc_2']);
        $LabelOpc_2_4->setTexto('Porta Copo');
        $InputOpc_2_4 = new Input(['type'=>'checkbox','name'=>'opc_2', 'class'=>'form-control']);

        $LabelOpc_3_4 = new Label(['for'=>'opc_3']);
        $LabelOpc_3_4->setTexto('DVD Player');
        $InputOpc_3_4 = new Input(['type'=>'checkbox','name'=>'opc_3', 'class'=>'form-control']);

        $LabelOpc_4_4 = new Label(['for'=>'opc_4']);
        $LabelOpc_4_4->setTexto('GPS');
        $InputOpc_4_4 = new Input(['type'=>'checkbox','name'=>'opc_4', 'class'=>'form-control']);

        $LabelOpc_5_4 = new Label(['for'=>'opc_5']);
        $LabelOpc_5_4->setTexto('Alarme');
        $InputOpc_5_4 = new Input(['type'=>'checkbox','name'=>'opc_5', 'class'=>'form-control']);

        $InputSubmit_4 = new Input(['type'=>'submit','value'=>'Enviar','class'=>'btn btn-primary']);
        $InputLimpar_4 = new Input(['type'=>'reset','value'=>'Limpar','class'=>'btn btn-default']);

        $form_4->addField($LabelMarca_4);
        $form_4->addField($InputMarca_4);
        $form_4->addField($LabelModelo_4);
        $form_4->addField($InputModelo_4);
        $form_4->addField($LabelAno_4);
        $form_4->addField($InputAno_4);
        $form_4->addField($LabelOpc_1_4);
        $form_4->addField($InputOpc_1_4);
        $form_4->addField($LabelOpc_2_4);
        $form_4->addField($InputOpc_2_4);
        $form_4->addField($LabelOpc_3_4);
        $form_4->addField($InputOpc_3_4);
        $form_4->addField($LabelOpc_4_4);
        $form_4->addField($InputOpc_4_4);
        $form_4->addField($LabelOpc_5_4);
        $form_4->addField($InputOpc_5_4);
        $form_4->addField($InputSubmit_4)->addField($InputLimpar_4);

        $form_4->render();


        ?>
        </div>
    </body>
</html>