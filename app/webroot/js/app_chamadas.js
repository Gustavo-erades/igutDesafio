$(document).ready(function(){
    $('.pagination a').on('click',function(e){
        e.preventDefault();
        var url=$(this).attr('href');
        $.ajax(
            {
                url:url,
                type:'get',
                dataType:'html',
                success:function(data){
                    $('#mainContent').html(data);
                },
                error:function(){
                    alert("Erro ao carregar os dados.")
                }
            }
        );
    });
});
function chamada_medicos(){
    $.ajax({
        type:'get',
        url:'medicos/index/',
        dataType: 'html',
        success: function(data) {
            $('#mainContent').html(data); 
        },
        error: function() {
            alert('Erro ao carregar as consultas.');
        }
    });
} 
function chamada_medico(id){
        var botaoId = id.attr('data-id');
        console.log(botaoId);
       /* $.ajax({
            type:'get',
            url:'/igutDesafio/medicos/view/'+botaoId,
            dataType: 'html',
            success: function(data) {
                $('#mainContent').html(data); 
            },
            error: function() {
                alert('Erro ao carregar as consultas.');
            }
        });*/
} 
function chamada_paciente(id){
    var botaoId=id;
    $.ajax({
        type:'get',
        url:'/igutDesafio/pacientes/view/'+botaoId,
        dataType:'html',
        success:function(data){
            $('#mainContent').html(data);
        },
        error:function(){
            alert('Erro ao carregar consultas.');
        }
    })
}
function chamada_novo_paciente(id){
    var botaoId=id;
    $.ajax({
        type:'get',
        url:'/igutDesafio/pacientes/new/'+botaoId,
        dataType:'html',
        success:function(data){
            $('#mainContent').html(data);
        },
        error:function(){
            alert('Erro ao carregar consultas.');
        }
    })
}
function chamada_pacientes(){
    $.ajax({
        type:'get',
        url:'/igutDesafio/pacientes/index/',
        dataType: 'html',
        success: function(data) {
            $('#mainContent').html(data); 
        },
        error: function() {
            alert('Erro ao carregar as consultas.');
        }
    });
} 
function chamada_novo_medico(id){
    var botaoId=id;
    $.ajax({
        type:'get',
        url:'/igutDesafio/medicos/new/'+botaoId,
        dataType:'html',
        success:function(data){
            $('#mainContent').html(data);
        },
        error:function(){
            alert('Erro ao carregar consultas.');
        }
    })
}
function chamada_atendimentos(){
    $.ajax({
        type:'get',
        url:'atendimentos/index/',
        dataType:'html',
        success: function(data){
            $('#mainContent').html(data);
        },
        error: function(){
            alert('Erro ao carregar atendimentos.');
        }
    })
}
function chamada_convenios(){
    $.ajax({
        type:'get',
        url:'convenios/index',
        dataType:'html',
        success: function(data){
            $('#mainContent').html(data);
        },
        error: function(){
            alert('Erro ao carregar convenios');
        }
    })
}
function getConsultas(){
    $.ajax({
        type:'get',
        url:'consultas/index/',
        dataType: 'html',
        beforeSend: function(){
            
        },
        success: function(data) {
            $('#mainContent').html(data); 
        },
        error: function() {
            alert('Erro ao carregar as consultas.');
        }
    });
}
function newConsulta(){
    $.ajax({
        type:'get',
        url:'consultas/new/',
        dataType: 'html',
        beforeSend: function(){
        },
        success: function(data) {
            $('#mainContent').html(data); 
        },
        error: function() {
            alert('Erro ao carregar as consultas.');
        }
    });
}
$('#getHome').on('click',getConsultas);
$('#getMedicos').on('click',chamada_medicos);
$('#getPacientes').on('click',chamada_pacientes);
$('#getAtendimentos').on('click',chamada_atendimentos);
$('#getConvenios').on('click',chamada_convenios);
$('#btnNovaConsulta').on('click',newConsulta);
getConsultas();