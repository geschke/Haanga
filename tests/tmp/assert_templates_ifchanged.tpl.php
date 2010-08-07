<?php
/* Generated from /home/crodas/projects/playground/haanga/tests/assert_templates/ifchanged.tpl */
function haanga_be17029b5fd2998df7c922a92652b6886d7780fd($vars, $return=FALSE, $blocks=array())
{
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    $sorted_users  = $users;
    $field  = Array();
    foreach ($sorted_users as  $key => $item) {
        $field[$key]  = $item[$regroup_field];
    }
    array_multisort($field, SORT_REGULAR, $sorted_users);
    echo "\n";
    foreach ($sorted_users as  $user) {
        echo "\n    ";
        $buffer1  = "Users with ".htmlentities($user["age"])." years";
        if (isset($ifchanged1) == FALSE || $ifchanged1 != $buffer1) {
            echo $buffer1;
            $ifchanged1  = $buffer1;
        }
        echo "\n    ".htmlentities($user["name"])."\n";
    }
    echo "\n\n";
    foreach ($sorted_users as  $user) {
        echo "\n    ";
        if ((isset($ifchanged2[0]) == FALSE || $ifchanged2[0] != $user["age"]) && (isset($ifchanged2[1]) == FALSE || $ifchanged2[1] != $user["foo"])) {
            echo "Users with ".htmlentities($user["age"])." years";
            $ifchanged2  = Array($user["age"], $user["foo"]);
        } else {
            echo "continue";
        }
        echo "\n    ".htmlentities($user["name"])."\n";
    }
    echo "\n";
    if ($return == TRUE) {
        return ob_get_clean();
    }
}