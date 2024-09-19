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