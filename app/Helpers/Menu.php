<?php
    function menu($data,$parent_id=0,$str=""){
        foreach ($data as $val){
            $id=$val["id"];
            $category=$val["category"];
            if ($val["parent_id"]==$parent_id) {
                echo '<option value="' . $id . '">' . $str . "" . $category . '</option>';
                menu($data, $id, $str . "&nbsp;&nbsp;&nbsp;&nbsp;");
            }

        }
    }
?>