<?php

namespace Sip\Http\Controllers;

use Sip\Repositories\PessoaCondecoracaoRepository;
use Sip\Services\PessoaCondecoracaoService;
use Illuminate\Http\Request;

class PessoaCondecoracaoController extends Controller
{
    /** @var PessoaCondecoracaoRepository $repository */
    private $repository;

    /** @var PessoaCondecoracaoService $service */
    private $service;

    /**
     * PessoaCondecoracaoController constructor.
     * @param \Sip\Repositories\PessoaCondecoracaoRepository $repository
     */
    public function __construct(PessoaCondecoracaoRepository $repository, PessoaCondecoracaoService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->repository->all();
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
       return $this->service->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->repository->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($this->service);
        return $this->service->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->service->delete($id);
    }
}