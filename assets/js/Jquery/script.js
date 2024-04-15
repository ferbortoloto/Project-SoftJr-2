// ALUNOS
$(function () {
    $('#form1').on('submit', function (e) {
        e.preventDefault();
        addAluno();
    });
});

function addAluno() {
    var dadosajax = {
        'cpf': $("#cpf").val(),
        'nome': $("#nome").val(),
        'telefone': $("#telefone").val(),
        'idade': $("#idade").val(),
        'nomeResponsavel': $("#nomeResponsavel").val(),
    };
    $.ajax({
        url: 'php_action/create.php',
        type: 'post',
        data: dadosajax,
        success: function (result) {
            $(".result").html(result);
            closeModal();
        }
    });
}

// PROFESSORES
$(function () {
    $('#form2').on('submit', function (e) {
        e.preventDefault();
        addProf();
    });
});

function addProf() {
    var dadosajax = {
        'cpf': $("#cpf").val(),
        'nome': $("#nome").val(),
        'telefone': $("#telefone").val(),
        'idade': $("#idade").val(),
    };
    $.ajax({
        url: '../php_action/professores/createProf.php',
        type: 'post',
        data: dadosajax,
        success: function (result) {
            $(".result").html(result);
            closeModal();
        }
    });
}

// AULAS
$(function () {
    $('#form3').on('submit', function (e) {
        e.preventDefault();
        addAula();
    });
});

function addAula() {
    var dadosajax = {
        'idCurso': $("#idCurso").val(),
        'tituloAula': $("#tituloAula").val(),
        'descricao': $("#descricao").val(),
        'dataAula': $("#dataAula").val(),
    };
    $.ajax({
        url: '../php_action/aulas/createAula.php',
        type: 'post',
        data: dadosajax,
        success: function (result) {
            $(".result").html(result);
            closeModal();
        }
    });
}

// PRESENÇA
function handleCourseChange(event) {
    var dadosajax = {
        'idCurso': parseInt($(".teste").val(), 10),
    }
    $.ajax({
        url: 'indexPresenca.php', 
        type: 'POST',
        data: dadosajax,
        success: function(result) {
            console.log(dadosajax);
            console.log("Sucesso aulas");
            $('#idCurso').html(result);
        },
        error: function(xhr, status, error) {
            console.error("Error fetching presence data: " + error);
        }
    });
}
// $(function() {
   
//     this.form.submit()
//     $('#form4').on('change', function() {
//         var selectedCourse = $(this).val();
//         $.ajax({
//             url: '../php_action/aulas/createAula.php', 
//             type: 'GET',
//             data: { idCurso: selectedCourse },
//             success: function(result) {
//                 console.log("Sucesso curso");
//                 $('#idCurso').html(result);
//             },
//             error: function(xhr, status, error) {
//                 console.error("Error fetching classes: " + error);
//             }});
//     });

//     $('#idAulas').on('change', function() {
//         var selectedClass = $(this).val();
//         $.ajax({
//             url: '../php_action/aulas/createAula.php', 
//             type: 'GET',
//             data: { idAulas: selectedClass },
//             success: function(result) {
//                 console.log("Sucesso aulas");
//                 $('#idAulas').html(result);
//             },
//             error: function(xhr, status, error) {
//                 console.error("Error fetching presence data: " + error);
//             }
//         });
//     });

   

//     $(document).on('click', '#yourFormSubmitButtonId', function(event) {
//         event.preventDefault();
//         var formData = $('#form4').serialize();
//         $.ajax({
//             url: $('#form4').attr('action'),
//             type: 'POST',
//             data: formData,
//             success: function(result) {
//             },
//             error: function(xhr, status, error) {
//                 console.error("Error submitting form: " + error);
//             }
//         });
//     });
// });




