<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/11/11
 * Time: 17:01
 */

namespace App\Repositories;

use App\Models\Source;

class SourceRepository
{

    public function __construct(Source $source)
    {
        $this->source = $source;
    }

    public function getAll($nbrPages, $parameters)
    {
        return Source::orderBy($parameters['order'], $parameters['direction'])->paginate($nbrPages);
    }

    /**
     * @param $request
     */
    public function store($request)
    {
        Source::create($request->all());
    }

    public function update($request, $source)
    {
        $source->update($request->all());
    }
}