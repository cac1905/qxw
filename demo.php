<?php
    header("Access-Control-Allow-Origin:*");
    header("Access-Control-Allow-Headers:Origin, X-Requested-With, Content-Type, Accept,USER_ID,TOKEN");
    header("Access-Control-Allow-Methods:HEAD, GET, POST, DELETE, PUT, OPTIONS");
    $info = file_get_contents('https://qxw.qm6686.com/include/AjaxValidation.asp?act=getGames5Url');
    $macth_info = explode("</tr></thead>", explode("<thead><tr>",$info)[1]);
    $tab_info = '<thead><tr><th nowrap>赛事</th>'.explode("<th width=\"60\" nowrap>序号</th>", $macth_info[0])[1].'</tr></thead>';
    $content_info = explode("</tr></tbody>", explode("<tbody><tr>", $macth_info[1])[1]);
    $xiangxi = explode("<td>", $content_info[0]);
    $liebiao = array();
    for ($i=0;$i<count($xiangxi);$i++){
        if($xiangxi[$i] != ''){
            if(strstr($xiangxi[$i],'class')){
                $row = explode(' ', explode("<td class=\"t\">", explode("</td>", $xiangxi[$i])[1])[1]);
                $team_name = "<td class='t'>" . $row[0] . '</td>';
                $time = "<td style='text-align:center'>" . $row[1] . ' ' . $row[2] . "</td>";
                $liebiao[$i] = $team_name . $time;
            }else{
                $liebiao[$i] = "<td>".$xiangxi[$i];
            }
        }
    }
    $tab_content_info = '';
    for ($j=1;$j<=count($liebiao);$j++){
        $tab_content_info .= $liebiao[$j];
    }
    $tab_content = "<table>" . $tab_info . $tab_content_info . '</table>';
    print_R($tab_content);die;
?>