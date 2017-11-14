<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function getAllMenus() {
        //todo 按格式获取菜单字段，并于页面用blade模版生成菜单样式
        $menus = $this->all();
        return $menus;
    }
}
