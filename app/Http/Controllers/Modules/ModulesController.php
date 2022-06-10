<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use CisFoundation\CisTableBuilder\Facades\CisTable;
use Nwidart\Modules\Facades\Module;

class ModulesController extends Controller
{
    public function index() {
        $modulesActive = Module::getByStatus(1);
        $modulesInactive = Module::getByStatus(0);

        $table = CisTable::table('active-modules');
        $table->setCssClass('cis-table');
        $table->setData($modulesActive);
        $table->setFields([
            'getName' => 'Name',
            'getPath' => 'Pfad',
        ]);

        $table->addAction('ändern',"modules.show",['name' => 'func:getName']);
        $table->addAction('löschen',"modules.show",['name' => 'func:getName'],'post');

        return view("app.modules.index");
    }

    public function show() {
        return view("app.modules.show");
    }
}
