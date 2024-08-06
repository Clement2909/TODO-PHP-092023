<?php

function displayItem($item) {
    $editItemId = get('editItem');

    if ($editItemId == $item['id']) {
        $html = '<form action="editItem.php" method="POST">';
        $html .= '<input type="hidden" name="editItem" value="' . $item['id'] . '">';
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
        $html .= '<a href="toogleItem.php?item=' . $item['id'] . '">';
        $html .= $item['checked'] ? '<i class="far fa-check-square"></i>' : '<i class="far fa-square"></i>';
        $html .= '</a></div>';
        $html .= '<span class="text">' . $item['intitule'] . '</span>';
        $html .= '<div class="tools">';
        $html .= '<a href="index.php?editItem=' . $item['id'] . '"><i class="fas fa-edit"></i></a>';
        $html .= '<a href="deleteItem.php?item=' . $item['id'] . '" onclick="return confirm(\'Are you sure you want to delete this item?\');"><i class="fas fa-trash"></i></a>';
        $html .= '</div>';
        $html .= '</li>';
    }

    return $html;
}

