<?php
namespace Erpk\Harvester\Module\Management;

class WorkQueue
{
    protected $queue = array();

    public function add(Company $company, $ownWork = true, $employeeWorks = 0)
    {
        $this->queue[] = array(
            'id' => $company->getId(),
            'employee_works' => $employeeWorks,
            'own_work' => $ownWork ? 1 : 0
        );
    }

    public function toArray()
    {
        return $this->queue;
    }
}
