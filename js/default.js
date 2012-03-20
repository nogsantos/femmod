$(function() {
    /**
     * Layout
     **/
    $(document).ready(function () {
        myLayout = $('body').layout({});
    });
    /**
     * Obtendo a identificação do objeto no clique
     **/
    var elemet = "";
    $("#repositorio li .bpmn").mousedown(function(){
        elemet = $(this).context.id; 
    });
    /**
     * Paleta de componentes
     **/
    $( "#repositorio" ).accordion({
        fillSpace: true
    });
    /**
     * componentes
     **/
    $( "#repositorio li" ).draggable({
        appendTo: "body",
        helper: "clone"
    });    
    /**
     * area 
     **/
    $( "#droppable" ).droppable({
        drop: function( event, ui ) {
            element(ui);
        }
    });
    function element(ui){
        switch (elemet){
            case "ei_1" :
                $( "<span class='element iniciais'></span>" ).html("<img src='images/inicio.jpg' style='position: relative;' class='ui-draggable' />").appendTo("#droppable");
                elemet = "";
                break;
            case "ei_2" :
                $( "<span class='element iniciais'></span>" ).html("<img src='images/time.ico' style='position: relative;' class='ui-draggable' />").appendTo("#droppable");
                elemet = "";
                break;
            case "at_1" :
                $( "<span class='element atividades'></span>" ).html("<img src='images/atividade.png' style='position: relative;' class='ui-draggable' />").appendTo("#droppable");
                elemet = "";
                break;
            case "at_2" :
                $( "<span class='element atividades'></span>" ).html("<img src='images/subprocesso.jpg' style='position: relative;' class='ui-draggable' />").appendTo("#droppable");
                elemet = "";
                break;
            case "gw_1" :
                $( "<span class='element gateways'></span>" ).html("<img src='images/condicao-complexa.png' style='position: relative;' class='ui-draggable' />").appendTo("#droppable");
                elemet = "";
                break;
            case "gw_2" :
                $( "<span class='element gateways'></span>" ).html("<img src='images/condicao-paralela.png' style='position: relative;' class='ui-draggable' />").appendTo("#droppable");
                elemet = "";
                break;
            case "ef_1" :
                $( "<span class='element finais'></span>" ).html("<img src='images/fim.jpg' style='position: relative;' class='ui-draggable' />").appendTo("#droppable");
                elemet = "";
                break;
        }
        /**
         * movimento do elemento
         **/    
        $( ".element" ).draggable({
            appendTo: "body"
        });
//        resize();
    }
   /**
    *
    **/
//    function resize(){
//         $( ".element img" ).resizable({
//             containment: "#droppable",
//             minHeight: 50,
//             minWidth: 50,
//             distance: 1,
//             helper: "ui-resizable-helper"
//         });
//    }
});