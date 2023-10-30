$(document).ready(function () {
    var form = $("#formPropsal"); // se captura el formulario

    form.submit(function (e) {
        e.preventDefault(); 

        var datos = form.serialize(); // se obtiene los datos
        var url = form.attr("action"); // se obtiene la url del formulario

        $.post(url, datos, function (e) {
            if (e.status === 1) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: e.message,
                    text: "Se envio tu propuesta con exito",
                    confirmButtonText: 'Aceptar'
                });

                form[0].reset(); // se limpio el formulario
            }
        });
    });
});
