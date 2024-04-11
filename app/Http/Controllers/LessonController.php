<?php

namespace App\Http\Controllers;

use App\Http\Resources\LessonResource;
use App\Http\Resources\ModuleResource;
use App\Repositories\LessonRepository;
use App\Repositories\ModuleRepository;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    protected  $repository;
    public function __construct(LessonRepository $lessonRepository)
    {
        $this->repository  = $lessonRepository;
    }

    public  function  index($moduleId)
    {
        $modules =  $this->repository->getLessonsByModuleId($moduleId);

        return LessonResource::collection($modules);
    }

    public  function  show($moduleId)
    {
        return new LessonResource($this->repository->getLesson($moduleId));
    }
}
