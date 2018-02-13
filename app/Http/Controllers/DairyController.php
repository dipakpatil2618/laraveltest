<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dairy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Repositories\DairyRepositoryInterface;
use Illuminate\Support\Facades\Log;

class DairyController extends Controller
{
    public function __construct(DairyRepositoryInterface $dairyRepository)
    {
        //we use repository patterns here
        $this->dairyRepository = $dairyRepository;
    }

    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            if (Auth::check()){
                   $userId =Auth::id();
                   $dairy = $this->dairyRepository->listDairy($userId);
                   return view('dairy.list',['dairyData' => $dairy]); 
            }
        } catch (\Exception $e) {
            Log::error("Problem in fetching list of dairy" . $e->getMessage());
            return redirect('dairy/'); 
        }

            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('dairy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $reqData = $request->all();
            $rules = [
                'dairy_title' => 'required|max:254',
                'dairy_description' => 'required'
            ];
            $validator = Validator::make($reqData, $rules);
            if ($validator->fails()) {
                $request->session()->flash('message.level', 'error');
                $request->session()->flash('message.content', $validator->errors());
            }
            $dairyAdd = $this->dairyRepository->addDairy($reqData);
            if($dairyAdd){
                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Dairy was successfully added!');
                
            }else{
                $request->session()->flash('message.level', 'error');
                $request->session()->flash('message.content', 'Problem in adding Dairy!');
            }
            return redirect('dairy/');
        } catch (\Exception $e) {
            Log::error("Problem in adding dairy" . $e->getMessage());
            return redirect('dairy/');
        }


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            if (Auth::check()){
                $userId =Auth::id();
                $dairyData = $this->dairyRepository->showDairy($id,$userId);
                if(count($dairyData)){
                    return view('dairy.show',['dairyData' => $dairyData]);
                }
            }   
            //if something went wrong redirect to list page
            return redirect('dairy/');
        } catch (\Exception $e) {
            Log::error("Problem in showing perticular dairy ".$id." : ". $e->getMessage());
            return redirect('dairy/');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()){
               $userId =Auth::id();
               $dairy = $this->dairyRepository->showDairy($id,$userId);
               return view('dairy.edit',['dairyData' => $dairy]);  
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $reqData = $request->all();
            $rules = [
                'dairy_title' => 'required|max:254',
                'dairy_description' => 'required'
            ];
            $validator = Validator::make($reqData, $rules);
            if ($validator->fails()) {
                 $request->session()->flash('message.level', 'error');
                 $request->session()->flash('message.content', $validator->errors());
            }
            $dairyAdd = $this->dairyRepository->editDairy($reqData,$id);
            if($dairyAdd){
                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Dairy was successfully updated!');
                
            }else{
                $request->session()->flash('message.level', 'error');
                $request->session()->flash('message.content', 'Problem in updating Dairy!');
            }
            return redirect('dairy/');
        } catch (\Exception $e) {
            Log::error("Problem in updating dairy ".$id." : ". $e->getMessage());
            return redirect('dairy/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        try{
            $dairyRemove = $this->dairyRepository->removeDairy($id);
            if($dairyRemove){
                $request->session()->flash('message.level', 'success');
                $request->session()->flash('message.content', 'Dairy was successfully removed!');
            }else{
                $request->session()->flash('message.level', 'error');
                $request->session()->flash('message.content', 'Problem in removing Dairy!');
            }
            return redirect('dairy/');
        } catch (\Exception $e) {
            Log::error("Problem in removing dairy ".$id." : ". $e->getMessage());
            return redirect('dairy/');
        }
    }
}
