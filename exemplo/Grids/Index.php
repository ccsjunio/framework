<?php

class Grids_Index extends Superlogica_Js_Grid {  
    
    /**
     * Mensagem para Grid vazio
     * @var string
     */
    protected $_msgVazio = "Nenhum fornecedor encontrado.";
    
    
    // Array de botoes do Grid
    protected $_botoes = array(
        array(
            'acao' => 'post',
            'form' => 'Forms_Fornecedores_Post',
            'titulo' => 'Editar fornecedor',
            'img' => 'post.png',
            'tipo' => 'abaixo',
        )
    );
    
    protected $_colunas = array(
        'nome' => array(
            'label' => 'Nome',
            'template' => '{st_fantasia_fav}',
            'tamanho' => '80%'
        ), 
        
        'telefone' => array(
            'label' => 'Telefone',
            'template' => '{st_telefone_fav}',
            'tamanho' => '20%'
        ),         
    );
    
}