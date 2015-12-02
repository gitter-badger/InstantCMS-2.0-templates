<?php

function grid_menu_items($controller){

    $options = array(
        'is_auto_init' => false, 
        'is_sortable' => false,
        'is_filter' => false,
        'is_pagination' => false,
        'is_draggable' => true,
        'order_by' => 'ordering',
        'order_to' => 'asc',
        'show_id' => false
    );

    $columns = array(
        'id' => array(
            'title' => 'id',
            'width' => 30,
        ),
        'title' => array(
            'title' => LANG_CP_MENU_ITEM_TITLE,
            'width' => 200,
            'href' => href_to($controller->name, 'menu', array('item_edit', '{id}')),
        ),
        'url' => array(
            'title' => LANG_CP_MENU_ITEM_URL            
        ),
    );

    $actions = array(
        array(
            'title' => LANG_EDIT,
            'class' => 'edit',
            'href' => href_to($controller->name, 'menu', array('item_edit', '{id}'))
        ),
        array(
            'title' => LANG_DELETE,
            'class' => 'delete',
            'href' => href_to($controller->name, 'menu', array('item_delete', '{id}')),
            'confirm' => LANG_CP_MENU_ITEM_DELETE_CONFIRM            
        )
    );

    return array(
        'options' => $options, 
        'columns' => $columns,
        'actions' => $actions
    );
    
}

