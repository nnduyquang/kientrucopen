<?php

namespace App\Repositories\Frontend;

interface FrontendRepositoryInterface
{
    public function getFrontEndInfo();

    public function getFrontend();

    public function getDetailPage($path,$type);

    public function getPageDuAn();

    public function getDetailDuAn($path);
}