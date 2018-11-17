<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/23
 * Time: 17:24
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'guard_name'
    ];

    /**
     * 权限角色关系
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}