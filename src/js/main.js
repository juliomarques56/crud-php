$(document).ready(function(){
    $('a[data-confirm-for]').click(function(ev){
        var href = $(this).attr('href');
        if (!$('#confirm-delete').length) {
            $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Excluír Fornecedor</h5><button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Deseja excluir o Fornecedor?</div><div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal">Não</button><a class="btn btn-danger" id="dataConfirmOK">Sim</a></div></div></div></div>');
        };

        $('#dataConfirmOK').attr('href',href);
        $('#confirm-delete').modal({show:true});
        return false;
    })
})

$(document).ready(function(){
    $('a[data-confirm-cat]').click(function(ev){
        var href = $(this).attr('href');
        if (!$('#confirm-delete').length) {
            $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Excluír Categoria</h5><button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Deseja excluir a categoria?</div><div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal">Não</button><a class="btn btn-danger" id="dataConfirmOK">Sim</a></div></div></div></div>');
        };

        $('#dataConfirmOK').attr('href',href);
        $('#confirm-delete').modal({show:true});
        return false;
    })
})

$(document).ready(function(){
    $('a[data-confirm-prod]').click(function(ev){
        var href = $(this).attr('href');
        if (!$('#confirm-delete').length) {
            $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Excluír Produto</h5><button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Deseja excluir o produto?</div><div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal">Não</button><a class="btn btn-danger" id="dataConfirmOK">Sim</a></div></div></div></div>');
        };

        $('#dataConfirmOK').attr('href',href);
        $('#confirm-delete').modal({show:true});
        return false;
    })
})

$(document).ready(function(){
    $('a[data-confirm-user]').click(function(ev){
        var href = $(this).attr('href');
        if (!$('#confirm-delete').length) {
            $('body').append('<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">Excluír Usuário</h5><button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button></div><div class="modal-body">Deseja excluir o usuário?</div><div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal">Não</button><a class="btn btn-danger" id="dataConfirmOK">Sim</a></div></div></div></div>');
        };

        $('#dataConfirmOK').attr('href',href);
        $('#confirm-delete').modal({show:true});
        return false;
    })
})