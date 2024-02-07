$(() => {


  function carrito(id){

    $.ajax({
      type : "POST",
      url : "../src/php/components/carrito.php",
      async: false,
      data : {
        id
      },

      success(){
        console.log("peticion carrito enviada...")
      },

      complete(data){
        console.log(data);
        $(".cartRender").html(data.responseText);

        $(".cartX").click(function(){
          carrito($(this).data("tab") - 20);
        })

      },

      error(err){
        alert("ocurrio un problema. "+ err);
      }

    });
  }


  function modalAjax(id) {
    $.ajax({
      type: "GET",
      url: "../src/php/components/modal.php",
      async: false,
      data: {
        id: id,
      },


      success() {
        console.log("peticion enviada...");
      },

      complete(data) {
        $(".cart").html($(data.responseText));
        $(".cart-container").removeClass("d-none");

        $(".bi-x-lg").click(() => {
          $(".cart-container").addClass("d-none");
        });

        const toastTrigger = document.getElementById("liveToastBtn");
        const toastLiveExample = document.getElementById("liveToast");

        if (toastTrigger) {
          const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveExample);
            toastTrigger.addEventListener("click", () => {
            toastBootstrap.show();
            $(".cart-container").addClass("d-none");
          });
        }

        console.log("peticion completada.");
      },
    });
  }

  function catalogoAjax(query) {
    $.ajax({
      type: "GET",
      url: "../src/php/components/catalogo.php",
      async: false,
      data: {
        p: query,
      },

      success() {
        $(".catalogo").html("<div class='loader'></div>");
        console.log("peticion enviada...");
      },

      complete(res) {
        $(".catalogo").html($(res.responseText));

        $(".catalogo .btnCart").click(function () {
          modalAjax($(this).data("id"));
        });

        $(".card img").click(function () {
          modalAjax($(this).data("id"));
        });

        $(".carrito").click(function(){
          carrito($(this).data("id"));
        });

        console.log("peticion completada.");
      },

      error(err) {
        alert("Error en la conexión" + err.status);
      },
    });
  }

  function busquedaAjax(colum, value) {
    $.ajax({
      type: "GET",
      url: "../src/php/components/catalogo.php",
      async: true,
      data: {
        colum,
        value,
      },
      success() {
        console.log("peticion enviada...");
      },

      complete(res) {
        $(".catalogo").html($(res.responseText));
        console.log("peticion completada.");


        $(".catalogo .btnCart").click(function () {
          modalAjax($(this).data("id"));
        });

        $(".card img").click(function () {
          modalAjax($(this).data("id"));
        });

        $(".bi-x-lg").click(() => {
          $(".cart-container").addClass("d-none");
        });


        const toastTrigger = document.getElementById("liveToastBtn");
        const toastLiveExample = document.getElementById("liveToast");

        if (toastTrigger) {
          const toastBootstrap =
            bootstrap.Toast.getOrCreateInstance(toastLiveExample);
          toastTrigger.addEventListener("click", () => {
            toastBootstrap.show();
            $(".cart-container").addClass("d-none");
          });
        }

      },

      error(err) {
        alert("Error en la conexión" + err.status);
      },
    });
  }



  catalogoAjax("i");

  $(".paginacion").click(function () {
    catalogoAjax($(this).data("tab"));
  });


  window.colum = "producto";

  $("select").change(() => {
    colum = $("select").val();
    console.log(colum);
  });

  $(".bi-search").click(() => {
    if ($("input[type=text]").val() == "") {
      return;
    }

    busquedaAjax(window.colum, $("input[type=text]").val());
  });

  $(".cartB").click(()=> {
    carrito(0);
    $(".aside-cars").toggle();
});


});
