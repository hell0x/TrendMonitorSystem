<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/11/24
 * Time: 16:39
 */

namespace App\Repositories;

use App\Models\Factor;

class FactorRepository
{

    /**
     * FactorRepository constructor.
     */
    public function __construct(Factor $factor)
    {
        $this->factor = $factor;
    }

    public function getAll($parameters)
    {
        //一级数据
        $factors = Factor::orderBy($parameters['order'], $parameters['direction'])->where('parent_id', 0)->get();
        $result = collect();
        foreach($factors as $key => $factor){
            $result->push($factor);
            $children = $this->factor::where('parent_id', $factor->id)->get();
            foreach($children as $val){
                $result->push($val);
            }
        }
        return $result;
    }
}