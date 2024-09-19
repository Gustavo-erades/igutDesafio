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
                    $('#content').html(data);
                },
                error:function(){
                    alert("Erro ao carregar os dados.")
                }
            }
        );
    });
});

function chamada_medico(id){
        var botaoId = id;
        $.ajax({
            type:'get',
            url:'/igutDesafio/medicos/view/'+botaoId,
            dataType: 'html',
            success: function(data) {
                $('#content').html(data); 
            },
            error: function() {
                alert('Erro ao carregar as consultas.');
            }
        });
} 
function chamada_paciente(id){
    var botaoId=id;
    $.ajax({
        type:'get',
        url:'/igutDesafio/pacientes/view/'+botaoId,
        dataType:'html',
        success:function(data){
            $('#content').html(data);
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
            $('#content').html(data);
        },
        error:function(){
            alert('Erro ao carregar consultas.');
        }
    })
}
function chamada_novo_medico(id){
    var botaoId=id;
    $.ajax({
        type:'get',
        url:'/igutDesafio/medicos/new/'+botaoId,
        dataType:'html',
        success:function(data){
            $('#content').html(data);
        },
        error:function(){
            alert('Erro ao carregar consultas.');
        }
    })
}