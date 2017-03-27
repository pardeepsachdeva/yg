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
function navigation($menu,$active,$logopath){
    $out="<nav class='navigation'><ul><img src='$logopath' class='nav-logo' />";
    $buttons=explode(",",$menu);
    foreach($buttons as $button){
        $button==$active?$class="nav-button active":$class="nav-button";
        $link=strtolower($button);
        $out.="<a href='$link.php'><li class='$class'>$button</li></a>\n";
    }
    $out.="</ul></nav>\n";
    return $out;
}
?>