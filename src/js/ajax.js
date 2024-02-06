$(() => {
  function catalogoAjax(query) {
    $.ajax({
      type: "GET",
      url: "../src/php/components/catalogo.php",
      async: false,
      data: {
        p: query,
      },

      // beforeSend() {
      //   console.log("peticion recibida...");
      //   $(".catalogo").html("<div class='loader'></div>");
      // },

      success() {
        $(".catalogo").html("<div class='loader'></div>");
        console.log("peticion enviada...");
      },

      complete(res) {
        $(".catalogo").html($(res.responseText));

        $(".catalogo .btnCart").click(function () {
          modalAjax($(this).data("id"));
        });

        $(".card img").dblclick(function(){
          modalAjax($(this).data("id"));
        })

        console.log("peticion completada.");
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

  function modalAjax(id) {
    $.ajax({
      type: "GET",
      url: "../src/php/components/modal.php",
      async: false,
      data: {
        id: id,
      },

      // beforeSend() {
      //   console.log("peticion recibida...");
      // },

      success() {
        console.log("peticion enviada...");
      },

      complete(data) {
        $(".cart").html($(data.responseText));
        $(".cart-container").removeClass("d-none");

        $(".bi-x-lg").click(() => {
          $(".cart-container").addClass("d-none");
        });

        console.log("peticion completada.");
      },
    });
  }


});
