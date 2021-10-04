<?php
/**
 * Create Blocks for Block Lab
 */


if( function_exists('block_lab_add_block')) {

block_lab_add_block(
    'big-title', 
        array( 
            'title'    => 'Título', 
            'category' => 'common', 
            'icon'     => 'create', 
            'fields'   => array(
                'titulo'  => array( 
                    'label'   => 'titulo', 
                    'control' => 'text', 
                    'width'   => '100', 
                    'default' => '', 
                )
            )
        )
    );


block_lab_add_block(
    'textblock', 
        array( 
            'title'    => 'Texto', 
            'category' => 'common', 
            'icon'     => 'create', 
            'fields'   => array(
                'texto'  => array( 
                    'label'   => 'texto', 
                    'control' => 'rich_text', 
                    'width'   => '100', 
                    'default' => '', 
                )
        )
    )
);


block_lab_add_block(
    'evento', 
        array( 
            'title'    => 'Evento', 
            'category' => 'common', 
            'icon'     => 'today', 
            'fields'   => array(
                'data'  => array( 
                    'label'   => 'Data', 
                    'control' => 'text', 
                    'width'   => '100', 
                    'default' => '', 
                ), 
                'titulo'  => array( 
                    'label'   => 'Título', 
                    'control' => 'text', 
                    'width'   => '100', 
                    'default' => '', 
                ), 
                'descricao'  => array( 
                    'label'   => 'Descrição', 
                    'control' => 'textarea', 
                    'width'   => '100', 
                    'default' => '', 
                ), 
                'texto-botao'  => array( 
                    'label'   => 'Texto para botão', 
                    'control' => 'text', 
                    'width'   => '100', 
                    'default' => '', 
                ),
                'link'  => array( 
                    'label'   => 'Link', 
                    'control' => 'url', 
                    'width'   => '100', 
                    'default' => '', 
            )
        )
    )
);
block_lab_add_block('imagem-citacao', 
    array( 
        'title'    => 'Imagem e citação', 
        'category' => 'common', 
        'icon'     => 'assignment_ind', 
        'fields'   => array(
            'imagem-de-fundo'  => array( 
                'label'   => 'Imagem', 
                'control' => 'image', 
                'width'   => '100', 
                'default' => '', 
            ), 
            'titulo'  => array( 
                'label'   => 'Título', 
                'control' => 'text', 
                'width'   => '100', 
                'default' => '', 
            ), 
            'descricao'  => array( 
                'label'   => 'Descrição', 
                'control' => 'textarea', 
                'width'   => '100', 
                'default' => '', 
            ), 
            'autor'  => array( 
                'label'   => 'Autor', 
                'control' => 'text', 
                'width'   => '100', 
                'default' => '', 
            )

        )
    )
);
block_lab_add_block(
    'large-video', 
            array( 
                'title'    => 'Vídeos', 
                'category' => 'common', 
                'icon'     => 'theaters', 
                'fields'   => array(
                    'url'  => array( 
                        'label'   => 'Endereço', 
                        'control' => 'url', 
                        'width'   => '100', 
                        'default' => '', 
                    )

                )
            )
    );
block_lab_add_block(
    'participar', 
                    array( 
                        'title'    => 'Participar', 
                        'category' => 'common', 
                        'icon'     => 'create', 
                        'fields'   => array(
                            
                            'subtitulo'  => array( 
                                'label'   => 'Subtitulo', 
                                'control' => 'text', 
                                'width'   => '100', 
                                'default' => '', 
                            ),
                            'titulo'  => array( 
                                'label'   => 'Título', 
                                'control' => 'text', 
                                'width'   => '100', 
                                'default' => '', 
                            ),
                            'descricao'  => array( 
                                'label'   => 'Descrição', 
                                'control' => 'rich_text', 
                                'width'   => '100', 
                                'default' => '', 
                            ),
                            'texto-botao'  => array( 
                                'label'   => 'Texto do Botão', 
                                'control' => 'text', 
                                'width'   => '100', 
                                'default' => '', 
                            ),
                            'link'  => array( 
                                'label'   => 'Link', 
                                'control' => 'post',
                                'post-type' => 'page',
                                'width'   => '100', 
                                'default' => '',
                                'post_type_rest_slug' => 'pages' 
                            )
    
                        )
                    )
);
 
      
}

?>