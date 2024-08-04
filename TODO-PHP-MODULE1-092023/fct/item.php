<?php

function displayItem($key, $item) {
    $editItemId = isset($_GET['editItem']) ? $_GET['editItem'] : null;

    if ($editItemId === $key) {
        $html = '<form action="editItem.php" method="POST">';
        $html .= '<input type="hidden" name="editItem" value="' . $key . '">';
        $html .= '<div class="input-group input-group-sm">';
        $html .= '<input type="text" class="form-control" name="intitule" value="' . $item['intitule'] . '">';
        $html .= '<span class="input-group-append">';
        $html .= '<button type="submit" class="btn btn-info btn-flat">OK</button>';
        $html .= '</span>';
        $html .= '</div>';
        $html .= '</form>';
    } else {
        $html = '<li class="' . ($item['checked'] ? 'done' : '') . '">';
        $html .= '<div class="icheck-primary d-inline ml-2">';
        $html .= '<a href="toggleItem.php?item=' . $key . '">';
        $html .= $item['checked'] ? '<i class="far fa-check-square"></i>' : '<i class="far fa-square"></i>';
        $html .= '</a></div>';
        $html .= '<span class="text">' . $item['intitule'] . '</span>';
        $html .= '<div class="tools">';
        $html .= '<a href="index.php?editItem=' . $key . '"><i class="fas fa-edit"></i></a>';
        $html .= '<a href="deleteItem.php?item=' . $key . '" onclick="return confirm(\'Are you sure you want to delete this item?\');"><i class="fas fa-trash"></i></a>';
        $html .= '</div>';
        $html .= '</li>';
    }

    return $html;
}



function getItem(){
    return unserialize(file_get_contents(FILE_NAME));
}

function saveItems($items){
    file_put_contents(FILE_NAME,serialize($items));
}