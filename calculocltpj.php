<?php  /* Template Name: CalculoCLTxPJ */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cálculo CLT > PJ</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="/wp-content/themes/biography/assets/css/form-wizard-using-tabs.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /* Sticky footer styles
        -------------------------------------------------- */
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            /* Margin bottom by footer height */
            margin-bottom: 50px;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Set the fixed height of the footer here */
            height: 50px;
            background-color: #f5f5f5;
            padding: 12px
        }
        /* Custom styles
        -------------------------------------------------- */
        body div.container {
            max-width: 860px;
            margin: 0 auto;
        }
        .tab-title {
            text-align: center;
            padding-bottom: 20px;
        }
        .panel-footer {
            font-weight: bold;
            text-align: right;
        }
    </style>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <section>
                <h1>Cálculo CLT > PJ</h1>
                <p>Esta calculadora auxiliará você na conversão de um salário CLT para uma taxa PJ conforme os parâmetros do seu salário e benefícios atuais e a carga horária prevista.<p>
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Carga Horária">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-time"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Valores CLT">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-book"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Despesas PJ">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-usd"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Resultado">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form role="form" class="form-horizontal">
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <div class="tab-title">
                                    <h3>Qual é sua carga horária como CLT e a previsão para PJ?</h3>
                                </div>
                                <div class="form-group">
                                    <label for="cargaHorariaCLT" class="col-md-4 control-label">Carga Horária CLT</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="cargaHorariaCLT" placeholder="176" value="176" required="required">
                                            <div class="input-group-addon">horas / mês</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cargaHorariaPJ" class="col-md-4 control-label">Carga Horária PJ</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="cargaHorariaPJ" placeholder="168" value="168" required="required">
                                            <div class="input-group-addon">horas / mês</div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <div class="tab-title">
                                    <h3>Quanto você realmente recebe como CLT?</h3>
                                    <p>
                                        Consulte quanto você custa para sua empresa informando o seu salário e benefícios no site <a href="http://www.calculador.com.br/calculo/custo-funcionario-empresa" target="_blank">calculador.com.br</a>.
                                        <br />Depois copie o Total, o INSS e a Provisão INSS para os campos abaixo respectivamente.
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="custoFuncionarioEmpresa" class="col-md-4 control-label">Custo Funcionário Empresa</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control money" id="custoFuncionarioEmpresa" placeholder="Custo Total Funcionário Empresa" value="5351.11" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inss" class="col-md-4 control-label">INSS</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control money" id="inss" placeholder="INSS" value="700.00" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="provisaoInss" class="col-md-4 control-label">Provisão INSS (13º e Férias)</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control money" id="provisaoInss" placeholder="Provisão INSS (13º e Férias)" value="136.11" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="irrf" class="col-md-4 control-label">IRRF</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control money" id="irrf" placeholder="IRRF" value="112.45" required="required">
                                        </div>
                                        <p class="help-block">O IRRF precisa ser consultado nesta <a href="http://www.calculador.com.br/calculo/salario-liquido" target="_blank">outra página</a> do calculador.com.br</p>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3">
                                <div class="tab-title">
                                    <h3>Quais serão suas despesas mensais como PJ?</h3>
                                </div>
                                <div class="form-group">
                                    <label for="custoImposto" class="col-md-4 control-label">Imposto(s) sobre Faturamento</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="custoImposto" placeholder="Imposto(s) sobre Faturamento" value="6" required="required">
                                            <div class="input-group-addon">%</div>
                                        </div>
                                        <p class="help-block">Por exemplo: 6% do Simples Nacional (2016)</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="custoContador" class="col-md-4 control-label">Gastos com Contador</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control money" id="custoContador" placeholder="Gastos com Contador" value="250.00" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="custoPrevidencia" class="col-md-4 control-label">Previdência Privada / INSS</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control money" id="custoPrevidencia" placeholder="Previdência Privada / INSS" value="290.00" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="custoIR" class="col-md-4 control-label">Imposto de Renda</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control money" id="custoIR" placeholder="Imposto de Renda" value="33.00" required="required">
                                        </div>
                                        <p class="help-block">Imposto de renda sobre Pró-labore</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="outrosCustos" class="col-md-4 control-label">Outras Despesas</label>
                                    <div class="col-md-8">
                                        <div class="input-group">
                                            <div class="input-group-addon">R$</div>
                                            <input type="text" class="form-control money" id="outrosCustos" placeholder="Outras Despesas" value="64.00" required="required">
                                        </div>
                                        <p class="help-block">Por exemplo: taxas de uma conta bancária empresarial</p>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                                    <li><button id="calcular" type="button" class="btn btn-success btn-info-full next-step">Calcular!</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="complete">
                                <div id="invalidFormAlert" class="alert alert-warning" role="alert">
                                    <p class="text-center"><strong>Ops...</strong> parece que não temos as informações necessárias para o cálculo!<br />
                                    Por gentileza, volte ao formulário e preencha todos os campos</p>
                                </div>
                                <div id="resultados">
                                    <div class="tab-title">
                                        <h3>Cálculo</h2>
                                    </div>

                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            Receita líquida como CLT
                                        </div>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Custo Funcionário Empresa</td>
                                                    <td class="text-right">R$ <span id="resultadoCustoFuncionarioEmpresa"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>INSS</td>
                                                    <td class="text-right">- R$ <span id="resultadoInss"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>Provisão INSS (13º e Férias)</td>
                                                    <td class="text-right">- R$ <span id="resultadoProvisaoInss"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>IRRF</td>
                                                    <td class="text-right">- R$ <span id="resultadoIrrf"></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="panel-footer">
                                            R$ <span id="resultadoValoresCLT"></span>
                                        </div>
                                    </div>

                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            Despesas previstas como PJ
                                        </div>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Imposto(s) sobre Faturamento</td>
                                                    <td class="text-right">R$ <span id="resultadoImposto"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>Gastos com Contador</td>
                                                    <td class="text-right">+ R$ <span id="resultadoGastosContador"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>Previdência Privada / INSS</td>
                                                    <td class="text-right">+ R$ <span id="resultadoPrevidencia"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>Imposto de Renda</tdth>
                                                    <td class="text-right">+ R$ <span id="resultadoImpostoDeRenda"></span></td>
                                                </tr>
                                                <tr>
                                                    <td>Outras Despesas</td>
                                                    <td class="text-right">+ R$ <span id="resultadoOutrasDespesas"></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="panel-footer">
                                            R$ <span id="resultadoDespesasPJ"></span>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="tab-title">
                                                <h3>Resultado</h2>
                                                Pra sair <strong>"elas por elas"</strong> em uma contratação PJ, os valores aproximados que você deveria almejar são estes aqui =)
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Faturamento Bruto Mensal (Receita líquida CLT + Despesas PJ)</td>
                                                        <td class="text-right"><strong>R$ <span id="faturamentoBruto"></span></strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Taxa para <span id="horasCLT"></span> horas mensais</td>
                                                        <td class="text-right"><strong>R$ <span id="taxaCargaHorariaCLT"></span> / hora</strong></td>
                                                    </tr>
                                                    <tr id="taxaHoraDiferente">
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="tab-title">
                                                <h3>Considerações</h2>
                                            </div>
                                            <p>Lembre-se de levar em conta os diversos outros prós e contras que cada forma de contratação possui, como estes a seguir:</p>
                                            <br />
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="text-center"><strong>Benefícios CLT</strong></p>
                                                    <ul>
                                                        <li>Valores diferenciados para hora-extra (tanto para banco de horas quanto as pagas)</li>
                                                        <li>Possibilidade de dias não trabalhados com atestado médico</li>
                                                        <li>Dispensa em caso de nascimento de filho(a) e/ou morte de familiar de primeiro grau</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="text-center"><strong>Benefícios PJ</strong></p>
                                                    <ul>
                                                        <li>Maior flexibilidade quanto ao horário de trabalho</li>
                                                        <li>Flexibilidade quanto ao uso dos valores referentes à FGTS, férias e décimo terceiro</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <br />
                                            <p>* Esta fórmula de cálculo foi criada com base na minha visão e experiência. Caso queira outros pontos de vista, existem diversas opções na Internet como a da <a href="http://economia.uol.com.br/empregos-e-carreiras/noticias/redacao/2011/06/14/calcule-se-vale-a-pena-prestar-servicos-como-pessoa-juridica-ou-ser-contratado.htm" target="_blank">UOL</a>, <a href="http://www.apinfo.com/apinfo/inc/sal.cfm" target="_blank">APInfo</a> e <a href="https://blog.contaazul.com/pj-ou-clt-planilha/" target="_blank">ContaAzul</a></p>                                            
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    
    <footer class="footer">
        <div class="container">
            <p class="text-muted text-center">Idealizado e desenvolvido por <a href="http://www.andreborgonovo.com.br" target="_blank">André Borgonovo<a/></p>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.min.js"></script>
    <script src="/wp-content/themes/biography/assets/js/form-wizard-using-tabs.js"></script>
    <script type="text/javascript">
    function parseMoney(a){var b=a.replace(".","").replace(",",".");return parseFloat(b)}function roundMoney(a){return(Math.round(100*a)/100).toFixed(2)}function roundTax(a){return Math.ceil(a)}function formatMoney(a,b,c,d){var e=a,b=isNaN(b=Math.abs(b))?2:b,d=void 0==d?",":d,c=void 0==c?".":c,f=e<0?"-":"",g=parseInt(e=Math.abs(+e||0).toFixed(b))+"",h=(h=g.length)>3?h%3:0;return f+(h?g.substr(0,h)+c:"")+g.substr(h).replace(/(\d{3})(?=\d)/g,"$1"+c)+(b?d+Math.abs(e-g).toFixed(b).slice(2):"")}$(function(){$("#resultados, #invalidFormAlert").hide(),$(".money").mask("000.000.000.000.000,00",{reverse:!0}),$("#calcular").click(function(a){$("#resultados, #invalidFormAlert").hide();var b=$("form")[0].checkValidity();if(b===!1)return $("#invalidFormAlert").show(),void a.preventDefault();var c=$("#cargaHorariaCLT").val(),d=$("#cargaHorariaPJ").val(),e=parseMoney($("#custoFuncionarioEmpresa").val()),f=parseMoney($("#inss").val()),g=parseMoney($("#provisaoInss").val()),h=parseMoney($("#irrf").val()),i=Number($("#custoImposto").val()),j=parseMoney($("#custoContador").val()),k=parseMoney($("#custoPrevidencia").val()),l=parseMoney($("#custoIR").val()),m=parseMoney($("#outrosCustos").val()),n=e-f-g-h,o=j+k+l+m,p=n+o,q=p*(i/100);p=roundMoney(p+q);var r=roundTax(p/c),s=roundTax(p/d);if($("#resultadoCustoFuncionarioEmpresa").html(formatMoney(e)),$("#resultadoInss").html(formatMoney(f)),$("#resultadoProvisaoInss").html(formatMoney(g)),$("#resultadoIrrf").html(formatMoney(h)),$("#resultadoValoresCLT").html(formatMoney(n)),$("#resultadoGastosContador").html(formatMoney(j)),$("#resultadoPrevidencia").html(formatMoney(k)),$("#resultadoImpostoDeRenda").html(formatMoney(l)),$("#resultadoOutrasDespesas").html(formatMoney(m)),$("#resultadoImposto").html(formatMoney(q)),$("#resultadoDespesasPJ").html(formatMoney(o+q)),$("#faturamentoBruto").html(formatMoney(p)),$("#horasCLT").html(c),$("#taxaCargaHorariaCLT").html(r),$("#taxaHoraDiferente").html(""),r!=s){var t=r<s?"menos":"mais";$("#taxaHoraDiferente").append("<td>Taxa para "+d+" horas mensais (ganhar o mesmo que CLT, e trabalhar "+t+")</td>"),$("#taxaHoraDiferente").append('<td class="text-right"><strong>R$ '+s+" / hora</strong></td>")}$("#resultados").show(),a.preventDefault()})});
    </script>
  </body>
</html>