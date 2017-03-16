<?php
    function append($content){
        print"$content";
    };
    function unorderedList($content){
        $data=explode(',',$content);
        $out="<ul>";
        foreach($data as $item){
            $out.="<li>$item</li>";
        }
        $out.="</ul>";
        return $out;
    }
?>