<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/23
 * Time: 17:39
 */

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

trait Indexable
{
    protected $repository;

    protected $table;

    public function index(Request $request)
    {
        $parameters = $this->getParameters($request);
        $records = $this->repository->getAll(config("app.nbrPages.back.$this->table"), $parameters);
        $links = $records->appends($parameters)->links('back.pagination');

        if($request->ajax()){
            return response()->json([
                'table' => view("back.$this->table.table", [$this->table => $records])->render(),
                'pagination' => $links->toHtml(),
            ]);
        }

        return view("back.$this->table.index", [$this->table => $records, 'links' => $links]);

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