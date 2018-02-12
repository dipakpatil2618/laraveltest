<?php

namespace App\Repositories;

/**
 * Interface DairyRepositoryInterface
 * @package App\Repositories
 */
interface DairyRepositoryInterface
{
	public function listDairy($userId);
    public function addDairy($dairyData);
    public function removeDairy($id);
    public function editDairy($dairyData,$id);
    public function showDairy($id,$userId);
    
}