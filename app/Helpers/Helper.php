<?php

namespace App\Helpers;
use Illuminate\Support\Str;

class Helper {
    public static function datas($datas, $link = '')
    {
        $html = '';
        // dd($menus);
        foreach ($datas as $key => $data)
        {
            $html .= '
                <tr>
                    <td> ' . $data->id . ' </td>
                    <td> ' . $data->title . ' </td>
                    <td> ' . $data->author . ' </td>
                    <td> ' . $data->content . ' </td>
                    <td> ' . $data->source . ' </td>
                    <td style="width:320px"> <img style="width:300px; max-height:300px" src=" '. $data->thumb .' "> </td>
                    
                    <td> ' . Helper::getActive($data->active) . ' </td>
                    <td>
                        <a href="/admin/' .$link. '/edit/'. $data->id .'">
                            <i class="fas fa-edit"></i>
                        </a> &nbsp;
                        <a href="#" onclick="removeRow('. $data->id .', \'/admin/' .$link. '/destroy\')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr> ';
        }

        return $html;
    }

    public static function getActive($active)
    {
        $html = '';
        if ($active == 1)
        {
            $html .= '<span class="badge bg-success">Kích Hoạt</span>';
        } else {
            $html .= '<span class="badge bg-warning">Không Kích Hoạt</span>'; 
        }

        return $html;
    }

    // public static function menus($menus, $parent_id = 0)
    // {
    //     $html = '';

    //     foreach ($menus as $key => $menu) 
    //     {
    //         if ($menu->parent_id == $parent_id)
    //         {
    //             $html .= '
    //                 <li>
    //                     <a href="/danh-muc/' . Str::slug($menu->name, '-') . '">
    //                     ' . $menu->name. '
    //                     </a>';
                
    //                     if (self::isChild($menus, $menu->id))
    //                     {
    //                         $html .= '<ul class="sub-menu"> ';
    //                         $html .= self::menus($menus, $menu->id);
    //                         $html .= '</ul>';
    //                     }

    //             $html .= ' </li>';
    //         }
    //     }

    //     return $html;
    // }

    // public static function isChild($menus, $id)
    // {
    //     foreach ($menus as $menu)
    //     {
    //         if ($menu->parent_id == $id)
    //         {
    //             return true;
    //         }
    //     }

    //     return false;
    // }
}