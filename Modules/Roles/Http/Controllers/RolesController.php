<?php

namespace Modules\Roles\Http\Controllers;

use CisFoundation\CisTableBuilder\Facades\CisTable;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Roles\Entities\Roles;
use Modules\User\Entities\User;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function showRoles()
    {
        CisTable::table('roles')
        ->setData(Roles::class)
        ->setFields([
            'name' => 'Name',
            'created_at' => 'Erstellt',
        ])
        ->setDatetime('created_at','d.m.Y H:i')
        ->setCssClass('cis-table');

        return view('roles::show-roles');
    }

    public function editUserRoles(User $user) {
        return view("roles::user.edit.roles",['user' => $user]);
    }
}
