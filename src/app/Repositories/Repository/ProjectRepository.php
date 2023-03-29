<?php

namespace App\Repositories\Repository;

use App\Repositories\ProjectRepositoryInterface;
use Illuminate\Support\Facades\DB;

class ProjectRepository implements ProjectRepositoryInterface
{

    protected $table = 'projects';

    public function all()
    {
        return DB::table($this->table)->get();
    }

    public function create($data) {}

    public function find($id) {}

    public function update($id, $data) {}

    public function delete($id) {}

    public function getProjectInfo() {
        return DB::table("$this->table as p")
            ->leftJoin('clients as c', 'p.client_id' , '=', 'c.id')
            ->leftJoin('users as u', 'p.project_lead_id' , '=', 'u.id')
            ->select(['p.name as project_name', 'c.name as client_name', 'u.username as lead_name', 'p.active'])->get();
    }
}
