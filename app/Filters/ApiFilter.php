<?php
namespace App\Filters;
use Illuminate\Http\Request;

class ApiFilter{
    protected $safeParams = [];
    protected $columnMap = [];
    protected $operatorMap = [];

    public function transform(Request $request){
        $eloQuery = [];
        foreach($this->safeParams as $parm => $operators){
            $query = $request->query($)
        }
    }


}