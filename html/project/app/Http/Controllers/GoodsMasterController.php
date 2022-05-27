<?php

namespace App\Http\Controllers;

use App\Models\GoodsMaster;
use Illuminate\Http\Request;

class GoodsMasterController extends Controller
{
/**
* Display a listing of the resource.
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
switch($request['axreq'])
{
case 'All':
$GoodsMasterData = GoodsMaster::all();
break;

case 'Single':
$id = $request['id'];
$GoodsMasterData = GoodsMaster::where('id',$id)->get(); 
break;

case 'Update':
$GoodsMasterData = new GoodsMaster();

//更新データ
$GoodsMasterData->id = $request['id'];
$GoodsMasterData->office_id = $request['office_id'];
$GoodsMasterData->name = $request['name'];
$GoodsMasterData->post_code = $request['post_code'];
$GoodsMasterData->address1 = $request['address1'];
$GoodsMasterData->address2 = $request['address2'];
$GoodsMasterData->insurance_symbol = $request['insurance_symbol'];
$GoodsMasterData->manager = $request['manager'];
$GoodsMasterData->belong = $request['belong'];
$GoodsMasterData->telephone = $request['telephone'];
$GoodsMasterData->mail = $request['mail'];














$GoodsMasterData->save();
break;

case 'AddSingle':
$GoodsMasterData = new GoodsMaster();

//新規データ
$GoodsMasterData->id = $request['id'];
$GoodsMasterData->office_id = $request['office_id'];
$GoodsMasterData->name = $request['name'];
$GoodsMasterData->post_code = $request['post_code'];
$GoodsMasterData->address1 = $request['address1'];
$GoodsMasterData->address2 = $request['address2'];
$GoodsMasterData->insurance_symbol = $request['insurance_symbol'];
$GoodsMasterData->manager = $request['manager'];
$GoodsMasterData->belong = $request['belong'];
$GoodsMasterData->telephone = $request['telephone'];
$GoodsMasterData->mail = $request['mail'];














$GoodsMasterData->save();
break;

//複数レコード更新【未実装】
case 'UpdateMulti':
//$GoodsMasterData= GoodsMaster::all();::where('id',8)->get();
break;

//複数レコード追加【未実装】
case 'AddMulti':
//$GoodsMasterData= GoodsMaster::all();::where('id',8)->get();
break;

//検索【未実装】
case 'Search':
//$GoodsMasterData= GoodsMaster::all();::where('id',8)->get();
break;                

//削除フラグ更新【未実装】
case 'DelFlg':
//$GoodsMasterData= GoodsMaster::all();::where('id',8)->get();
break;

//削除【未実装】
case 'Delete':
//$GoodsMasterData= GoodsMaster::all();::where('id',8)->get();
break;

default:
$GoodsMasterData = GoodsMaster::all();
break;
}
return $GoodsMasterData;
}
}
