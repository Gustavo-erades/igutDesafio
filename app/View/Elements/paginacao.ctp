<div class="pagination">
    <ul>
        <a class="paginacaoLinks">
            <?=$this->Paginator->first('primeiro')?>
        </a>
        <a class="paginacaoLinks">
            <?=$this->Paginator->prev('anterior');?>
        </a>
        <a class="paginacaoLinks">
            <?=$this->Paginator->next('próximo');?>
        </a>
        <a class="paginacaoLinks">
            <?=$this->Paginator->last('último');?>    
        </a>
    </ul>
</div>