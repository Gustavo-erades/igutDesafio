//paginação (resolver)
$(document).ready(function () {
    $('.pagination a').on('click', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        $.ajax(
            {
                url: url,
                type: 'get',
                dataType: 'html',
                success: function (data) {
                    $('#mainContent').html(data);
                },
                error: function () {
                    alert("Erro ao carregar os dados.")
                }
            }
        );
    });
});
function chamada_medicos() {
    $.ajax({
        type: 'get',
        url: 'medicos/index/',
        dataType: 'html',
        success: function (data) {
            $('#mainContent').html(data);
        },
        error: function () {
            alert('Erro ao carregar as consultas.');
        }
    });
}
function chamada_medico(id) {
    var botaoId= id
    $.ajax({
        type: 'get',
        url: 'medicos/view/' + botaoId,
        dataType: 'html',
        success: function (data) {
            $('#mainContent').html(data);
        },
        error: function () {
            alert('Erro ao carregar as consultas.');
        }
    });
}
function chamada_paciente(id) {
    var botaoId = id;
    $.ajax({
        type: 'get',
        url: 'pacientes/view/' + botaoId,
        dataType: 'html',
        success: function (data) {
            $('#mainContent').html(data);
        },
        error: function () {
            alert('Erro ao carregar consultas.');
        }
    })
}
function chamada_novo_paciente(id) {
    var botaoId = id;
    $.ajax({
        type: 'get',
        url: '/igutDesafio/pacientes/new/' + botaoId,
        dataType: 'html',
        success: function (data) {
            $('#mainContent').html(data);
        },
        error: function () {
            alert('Erro ao carregar consultas.');
        }
    })
}
function chamada_pacientes() {
    $.ajax({
        type: 'get',
        url: 'pacientes/index/',
        dataType: 'html',
        success: function (data) {
            $('#mainContent').html(data);
        },
        error: function () {
            alert('Erro ao carregar as consultas.');
        }
    });
}
function chamada_atendimentos() {
    $.ajax({
        type: 'get',
        url: 'atendimentos/index/',
        dataType: 'html',
        success: function (data) {
            $('#mainContent').html(data);
        },
        error: function () {
            alert('Erro ao carregar atendimentos.');
        }
    })
}
function chamada_convenios() {
    $.ajax({
        type: 'get',
        url: 'convenios/index',
        dataType: 'html',
        success: function (data) {
            $('#mainContent').html(data);
        },
        error: function () {
            alert('Erro ao carregar convenios');
        }
    })
}
function getConsultas() {
    $.ajax({
        type: 'get',
        url: 'consultas/index/',
        dataType: 'html',
        beforeSend: function () {

        },
        success: function (data) {
            $('#mainContent').html(data);
        },
        error: function () {
            alert('Erro ao carregar as consultas.');
        }
    });
}
function newConsulta() {
    $.ajax({
        type: 'get',
        url: 'consultas/new/',
        dataType: 'html',
        beforeSend: function () {
        },
        success: function (data) {
            $('#mainContent').html(data);
        },
        error: function () {
            alert('Erro ao carregar as consultas.');
        }
    });
}
function newMedico() {
    $.ajax({
        type: 'get',
        url: 'medicos/new/',
        dataType: 'html',
        success: function (data) {
            $('#mainContent').html(data);
        },
        error: function () {
            alert('Erro ao carregar consultas.');
        }
    })
}
function cadMedico() {
    var medico = $('#medicoNome').val(); 
    var crm = $('#medicoCrm').val();
    var especialidade = $('#medicoEspecialidade').val();
    var data = {
        nome: medico,
        crm: crm,
        especialidade: especialidade
    };
    $.ajax({
        type: 'POST',
        url: 'medicos/new/',
        data: data, 
        dataType: 'json', 
        success: function(response) {
            if (response.success) {
                console.log("funcionando");
            } else {
                alert(response.message); 
            }
        }
    });
}
function delMedico(id) {
    $.ajax({
        type: 'DELETE',
        url: 'medicos/new/',
        data: id, 
        dataType: 'json', 
        success: function(response) {
            if (response.success) {
                console.log("funcionando");
            } else {
                alert(response.message); 
            }
        }
    });
}
function cadPaciente() {
    var paciente = $('#pacienteNome').val(); 
    var cpf = $('#pacienteCpf').val();
    var telefone = $('#pacienteTelefone').val();
    var nascimento=$('pacienteNascimento').val();
    var data = {
        nome: paciente,
        cpf: cpf,
        telefone: telefone,
        dt_nasc:nascimento
    };
    $.ajax({
        type: 'POST',
        url: 'pacientes/new/',
        data: data, 
        dataType: 'json', 
        success: function(data) {
            console.log("foi");
        }
    });
}
function cadAtendimento() {
    var atendimento = $('#atendimetoNome').val();
    var data = {
        nome: atendimento
    };
    $.ajax({
        type: 'POST',
        url: 'atendimentos/index/',
        data: data, 
        dataType: 'json', 
        success: function(response) {
            if (response.success) {
                console.log("funcionando");
            } else {
                alert(response.message); 
            }
        }
    });
}
function cadConvenio(){
    var convenio = $('#convenioNome').val();
    var data = {
        nome: convenio
    };
    $.ajax({
        type: 'POST',
        url: 'convenios/index/',
        data: data, 
        dataType: 'json', 
        success: function(response) {
            if (response.success) {
                console.log("funcionando");
            } else {
                alert(response.message); 
            }
        }
    });
}
function cadConsultas(){
    var dia = $('#consultaDia').val();
    var hora = $('#consultaTime').val();
    var medico = $('#consultaTime').val();
    var paciente = $('#consultaTime').val();
    var atendimento = $('#consultaAtendimento').val();
    var convenio = $('#consultaConvenio').val();
    var data = {
        nome: convenio,
        hora:hora,
        medico_id:medico,
        paciente_id:paciente,
        atendimento_id:atendimento
    };
    $.ajax({
        type: 'POST',
        url: 'convenios/index/',
        data: data, 
        dataType: 'json', 
        success: function(response) {
            if (response.success) {
                console.log("funcionando");
            } else {
                alert(response.message); 
            }
        }
    });
}
$('#getHome').on('click', getConsultas);
$('#getMedicos').on('click', chamada_medicos);
$('#getPacientes').on('click', chamada_pacientes);
$('#getAtendimentos').on('click', chamada_atendimentos);
$('#getConvenios').on('click', chamada_convenios);
getConsultas();

