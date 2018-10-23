<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2018/10/23
 * Time: 14:54
 */

namespace App\Http\Controllers\Back;

use App\Repositories\AdmUserRepository;
use Illuminate\Http\Request;

class AdmUserController
{


    protected $admUserRepository;

    protected $nbrPages;

    public function __construct(AdmUserRepository $admUserRepository)
    {
        $this->admUserRepository = $admUserRepository;
        $this->nbrPages = config('app.nbrPages.back.admUsers');
    }


}