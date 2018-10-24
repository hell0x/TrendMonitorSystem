<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/23
 * Time: 17:39
 */

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;

trait Indexable
{

    protected $repository;

    protected $table;

    public function index(Request $request)
    {
        $parameters = $this->getParameters($request);

        $records = $this->repository->getAll(config("app.nbrPages.back.$this->table"), $parameters);
        foreach ($records as $val){
            foreach($val->permissions as $val2){
                print_r($val2->name."<br/>");
            }
//            print_r($val->permissions);
        }
//        $links = $records->
    }

    /**
     * @param $request
     * @return \Illuminate\Config\Repository|mixed
     */
    protected function getParameters($request)
    {
        $parameters = config("parameters.$this->table");

        // 控制请求参数
        foreach ($parameters as $parameter => &$value) {
            if(isset($request->$parameter)){
                $value = $request->$parameter;
            }
        }

        return $parameters;
    }
}