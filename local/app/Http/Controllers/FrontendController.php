<?php

namespace App\Http\Controllers;

use App\Repositories\Frontend\FrontendRepositoryInterface;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $frontendRepository;

    public function __construct(FrontendRepositoryInterface $frontendRepository)
    {
        $this->frontendRepository = $frontendRepository;
    }

    public function getFrontend()
    {
        $data = $this->frontendRepository->getFrontend();
        return view('frontend.home.index', compact('data'));
    }
    public function getDetailDichVu($path){
        $data = $this->frontendRepository->getDetailDichVu($path);
        return view('frontend.details.index', compact('data'));
    }
    public function getPageDuAn(){
        $data = $this->frontendRepository->getPageDuAn();
        return view('frontend.project.index', compact('data'));
    }

}

