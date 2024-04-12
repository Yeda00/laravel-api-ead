<?php

namespace App\Http\Controllers;

use App\Http\Resources\ModuleResource;
use App\Http\Resources\SupportResource;
use App\Repositories\ModuleRepository;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    protected  $repository;
    public function __construct(SupportRepository $supportRepository)
    {
        $this->repository  = $supportRepository;
    }

    public  function  index(Request $request )
    {
        $supports =   $this->repository->getSupports();

        return SupportResource::collection($supports);
    }
    //
}
