// $(document).ready(function($){
  
// });


$(() => {


    $("#darkMode").click(()=>{

        let valor = $("body").attr("data-bs-theme");

        valor == "dark"?
        $("body").attr("data-bs-theme","ligth"):
        $("body").attr("data-bs-theme","dark");

    })

    

});