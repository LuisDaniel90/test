$(document).ready(function(){
    
    var NumPreguntas = $('.Conteo .CPregunta').length;
    var PregPosicion = 1;
    console.log(NumPreguntas);
    
    $('ul li').click(Pagination);
    $('.avanzar').click(nextPage);
    $('.retroceder').click(prevPage);
    $('.guardar').click(Guardar);
                
    
    function Pagination(){
        var PagPosicion = $(this).index() + 1;
        $('.Conteo .CPregunta').hide();
        $('.Conteo .CPregunta:nth-child('+PagPosicion+')').fadeIn();
        PregPosicion = PagPosicion;
        
    }
    
    
    function nextPage(){
        if(PregPosicion >=NumPreguntas){
            PregPosicion = 60;
        } else{
            PregPosicion++;
        }
        console.log(PregPosicion);
        $('.Conteo .CPregunta').hide();
        $('.Conteo .CPregunta:nth-child('+PregPosicion+')').fadeIn();
    }
    
    function prevPage(){
        if(PregPosicion <=1){
            PregPosicion = 1;
        } else{
            PregPosicion--;
        }
        console.log(PregPosicion);
        $('.Conteo .CPregunta').hide();
        $('.Conteo .CPregunta:nth-child('+PregPosicion+')').fadeIn();
    }
    
    function Guardar(){
        alert("Haz guardado la pregunta");
        $('.btnPregunta').attr('disable','disable');
        
        if(PregPosicion >=NumPreguntas){
            PregPosicion = 60;
        } else{
            PregPosicion++;
        }
        console.log(PregPosicion);
        $('.Conteo .CPregunta').hide();
        $('.Conteo .CPregunta:nth-child('+PregPosicion+')').fadeIn();
        
        
        
    }

});