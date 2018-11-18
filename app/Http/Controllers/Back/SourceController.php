<?php

namespace App\Http\Controllers\Back;

use App\Models\Source;
use App\Repositories\SourceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SourceController extends Controller
{
    use Indexable;

    public function __construct(SourceRepository $repository)
    {
        $this->repository = $repository;
        $this->source_types = config('app.source_types');
        $this->status = config('app.status');
        $this->table = 'sources';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $source_types = collect($this->source_types)->pluck('title', 'id');
        $status = collect($this->status)->pluck('title', 'id');
        return view('back.sources.create', compact('source_types', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repository->store($request);

        return redirect(route('sources.index'))->with('source-ok', __('The source has been successfully created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function show(Source $source)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function edit(Source $source)
    {
        $source_types = collect($this->source_types)->pluck('title', 'id');
        $status = collect($this->status)->pluck('title', 'id');
        $source->type = collect([['id' => $source->type]]);
        $source->status = collect([['id' => $source->status]]);
        return view('back.sources.edit', compact('source', 'source_types', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Source $source)
    {
        $this->repository->update($request, $source);

        return back()->with('source-ok', __('The source has been successfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Source  $source
     * @return \Illuminate\Http\Response
     */
    public function destroy(Source $source)
    {
        $source->delete();

        return response()->json();
    }
}
