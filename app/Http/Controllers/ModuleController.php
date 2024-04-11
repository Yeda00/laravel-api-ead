<?php

namespace App\Http\Controllers;

use App\Http\Resources\ModuleResource;
use App\Repositories\CourseRepository;
use App\Repositories\ModuleRepository;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    protected  $repository;
    public function __construct(ModuleRepository $moduleRepository)
    {
        $this->repository  = $moduleRepository;
    }

    public  function  index($courseId)
    {
      $modules =   $this->repository->getModulesCouseById($courseId);

      return ModuleResource::collection($modules);
    }
    //
}
