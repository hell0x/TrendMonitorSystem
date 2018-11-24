<?php

namespace App\Http\Controllers\Back;

use App\Models\Factor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\FactorRepository;

class FactorController extends Controller
{

    use Indexable;

    /**
     * FactorController constructor.
     */
    public function __construct(FactorRepository $repository)
    {
        $this->repository = $repository;

        $this->table = 'factors';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $parameters = $this->getParameters($request);
        $records = $this->repository->getAll($parameters);

        if($request->ajax()){
            return response()->json([
                'table' => view("back.$this->table.table", [$this->table => $records])->render(),
            ]);
        }

        return view("back.$this->table.index", [$this->table => $records]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function show(Factor $factor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function edit(Factor $factor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factor $factor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factor $factor)
    {
        //
    }
}
