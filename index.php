<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Modelador de processos</title>
        <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.8.18.custom.css" />
        <link rel="stylesheet" href="css/default.css" />
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
        <script type="text/javascript" src="js/jquery.layout.js"></script>
        <script type="text/javascript" src="js/default.js"></script>
    </head>
    <body>
        <div class="ui-layout-north" style="text-align: center">
            <h1 class="ui-widget-header">Prot&oacute;tipo do modelador de processos</h1>
        </div>
        <div class="ui-layout-west">
            <h1 class="ui-widget-header">BPMN</h1>	
            <div id="repositorio">
		<h3><a href="#">Eventos Iniciais</a></h3>
                <div class="components">
                    <ul>
                        <li>
                            <div class="bpmn" id="ei_1">
                                <img  src="images/none.png" /><span class="bpmn">Inicio do processo</span>
                            </div>
                        </li>
                        <li>
                            <div class="bpmn" id="ei_2">
                                <img src="images/timer.png" />Inicio do tempo
                            </div>
                        </li>
                    </ul>
		</div>
		<h3><a href="#">Atividades</a></h3>
		<div class="components">
                    <ul>
                        <li>
                            <div class="bpmn" id="at_1">
                                <img src="images/task.png" />Tarefas
                            </div>
                        </li>
                        <li>
                            <div class="bpmn" id="at_2">
                                <img src="images/subprocess.png" />Subprocessos
                            </div>
                        </li>
                    </ul>
		</div>
		<h3><a href="#">Gateways</a></h3>
		<div class="components">
                    <ul>
                        <li>
                            <div class="bpmn" id="gw_1">
                                <img src="images/complex.png" />Condi&ccedil;&atilde;o complexa
                            </div>
                        </li>
                        <li>
                            <div class="bpmn" id="gw_2">
                                <img  src="images/parallel.png" />Condi&ccedil;&atilde;o paralela
                            </div>
                        </li>
                    </ul>
		</div>
		<h3><a href="#">Eventos de fim</a></h3>
		<div class="components">
                    <ul>
                        <li>
                            <div class="bpmn" id="ef_1">
                                <img  src="images/terminate.png" />Finalizar processo
                            </div>
                        </li>
                    </ul>
		</div>
            </div>
        </div>
        <div class="ui-layout-south">   
            Rodape
        </div>
        <div class="ui-layout-east">
           <h1 class="ui-widget-header">Propriedades</h1>
        </div>
        <div id="droppable" class="ui-layout-center"></div>
    </body>
</html>