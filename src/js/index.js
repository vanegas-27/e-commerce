// $(document).ready(function($){
  
// });

$(() => {




    $("#darkMode").click(()=>{

        let valor = $("body").attr("data-bs-theme");

        valor == "dark"?
        $("body").attr("data-bs-theme","ligth"):
        $("body").attr("data-bs-theme","dark");

    })


    window.colum = "producto";

    $('select').change(()=> {
        colum = $('select').val();
        console.log(colum); 
    })

    $('.bi-search').click(()=> {

        if($("input[type=text]").val() == ""){
            return;
        }

        $.ajax({
            type : "GET",
            url : "../src/php/components/catalogo.php",
            async : true,
            data : {
                colum : window.colum,
                value : $("input[type=text]").val()
            },
            success(){console.log("peticion enviada...")},

            complete(res){
                $(".catalogo").html($(res.responseText));
                console.log("peticion completada.");
            },

            error(err) {
                alert("Error en la conexión" + err.status);
            }
        });
        
    })



    
});


