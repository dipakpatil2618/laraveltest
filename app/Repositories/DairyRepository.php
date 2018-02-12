<?php

namespace App\Repositories;

use App\Dairy;
use Illuminate\Support\Facades\Auth;
/**
 * Interface DairyRepositoryInterface
 * @package App\Repositories\Clients
 */
class DairyRepository implements DairyRepositoryInterface
{
    protected $id;

    public function __construct()
    {
    }
   	/**
     * Get the list
     *
     * @param  $userId
     * @return Object array
     */
    public function listDairy($userId){
    	$dairy = Dairy::with('user')->where('user_id',$userId)->get();
    	return $dairy;
    }

    /**
     * Get the list
     *
     * @param  $dairyData
     * @return boolean
     */
    public function addDairy($dairyData){
    	if (Auth::check()){
               $dairy = new Dairy();
               $userId =Auth::id();
    		   $dairy->user_id = $userId;
    		   $dairy->title = $dairyData['dairy_title'];
    		   $dairy->description = $dairyData['dairy_description'];
    		   return $dairy->save();
   		}
   		return false;
   	}

   	/**
     * Get the list
     *
     * @param  $id
     * @return Object array
     */
   	public function removeDairy($id){
   			$dairy = Dairy::find($id)->delete();
   			return $dairy;
   	}

   	/**
     * Get the list
     *
     * @param  $dairyData,$id
     * @return boolean
     */
   	public function editDairy($dairyData,$id){
   		if (Auth::check()){
               $userId =Auth::id();
               //ownership check
               if($dairyData['dairy_user_id'] == $userId){
               		$dairy = Dairy::find($id);
    		   		$dairy->title = $dairyData['dairy_title'];
    		   		$dairy->description = $dairyData['dairy_description'];
    		   		return $dairy->save();
               }
   		}
   		return false;		
   	}

   	/**
     * Get the list
     *
     * @param  $id,$userId
     * @return Object array
     */
   	public function showDairy($id,$userId){

               $userId =Auth::id();
               $dairyData = Dairy::where('id',$id)->where('user_id',$userId)->first();
               return $dairyData;
   	}
}