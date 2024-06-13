<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ParentsController extends BaseController
{
    private const VIEWS_DIRECTORY = 'Parents/';

    public function index(): string
    {
        $this->dataToView['title'] = 'Gerenciar os Responsáveis';

        return view(self::VIEWS_DIRECTORY . 'index', $this->dataToView);
    }

    public function new(): string
    {
        $this->dataToView['title'] = 'Novo responsável';
        $this->dataToView['Parents'] = new ParentStudent([
            'address' => new Address()
        ]);

        return view(self::VIEWS_DIRECTORY . 'new', $this->dataToView);
    }
}
