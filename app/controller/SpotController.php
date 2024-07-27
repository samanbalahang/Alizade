<?php

namespace App\Http\Controllers\User\Panel\Spot;

use App\Http\Controllers\Controller;
use App\Models\exchange;
use App\Models\pair;
use App\Models\user;
use App\Models\user_exchange_rel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SpotController extends Controller
{
    public function smartPage(request $request)
    {
        $per = checkUrl(Session::get('plan'),request()->segment(count(request()->segments())));
        if($per) {
            $user = user::where('uid','=',Session::get('uid'))->where('token','=',Session::get('webToken'))->first();
            $connection = user_exchange_rel::where('uId','=',Session::get('uid'))->where('status','=',0)->where('verify','=',0)->with('connection')->get();
            $exchange = exchange::where('status','=',1)->orderBy('status','desc')->get();
            Session::put('menuSelection','spot_smart');
            Session::put('pageTitle','TradeInBit | Spot Smart');
            return view('App.Panel.Spot.smart.index',['connection'=>$connection,'exchange'=>$exchange,'user'=>$user]);
        }else{
            return redirect(route('panel_payment_list'));
        }
    }
    public function getBase(request $request)
    {
        $per = checkUrl(Session::get('plan'),request()->segment(count(request()->segments())));
        if($per) {
            $validated = $request->validate([
                'base' => 'required',
                'connection' => 'required',
            ],[
                'base.required'    => 'لطفا نوع ارز پایه خود را انتخاب کنید',
                'connection.required'    => 'لطفا یک حساب انتخاب کنید',
            ]);
            $useruid = Session::get('uid');
            $baseSpot = getAsset($useruid,$request->connection,'spot',$request->base);
            if(json_decode($baseSpot,true) != null){
                $spotBaseAvailable = floatval(json_decode($baseSpot,true)[0]['USDT']['available']);
                $spotBaseTotal = floatval(json_decode($baseSpot,true)[0]['USDT']['total']);
                $spotBaseLock = floatval(json_decode($baseSpot,true)[0]['USDT']['lock']);
            }else{
                $spotBaseAvailable = floatval(0.000);
                $spotBaseTotal = floatval(0.000);
                $spotBaseLock = floatval(0.000);
            }
            return response()->json(['status'=>true,'spotBaseAvailable'=>$spotBaseAvailable,'spotBaseTotal'=>$spotBaseTotal,'spotBaseLock'=>$spotBaseLock]);
        }else{
            abort(404);
        }
    }
    public function getTarget(request $request)
    {
        $per = checkUrl(Session::get('plan'),request()->segment(count(request()->segments())));
        if($per) {
            $validated = $request->validate([
                'target' => 'required',
                'connection' => 'required',
            ],[
                'target.required'    => 'لطفا نوع ارز مورد معامله خود را انتخاب کنید',
                'connection.required'    => 'لطفا یک حساب انتخاب کنید',
            ]);
            $useruid = Session::get('uid');
            $targetSpot = getAsset($useruid,$request->connection,'spot',$request->target);
            if(json_decode($targetSpot,true) != null){
                $spotTargetAvailable = floatval(json_decode($targetSpot,true)[0]['USDT']['available']);
                $spotTargetTotal = floatval(json_decode($targetSpot,true)[0]['USDT']['total']);
                $spotTargetLock = floatval(json_decode($targetSpot,true)[0]['USDT']['lock']);
            }else{
                $spotTargetAvailable = floatval(0.000);
                $spotTargetTotal = floatval(0.000);
                $spotTargetLock = floatval(0.000);
            }
            return response()->json(['status'=>true,'spotTargetAvailable'=>$spotTargetAvailable,'spotTargetTotal'=>$spotTargetTotal,'spotTargetLock'=>$spotTargetLock]);
        }else{
            abort(404);
        }
    }
    public function getPairs(request $request)
    {
        $per = checkUrl(Session::get('plan'),request()->segment(count(request()->segments())));
        if($per) {
            $validated = $request->validate([
                'exchange' => 'required',
            ],[
                'exchange.required'    => 'لطفا اتصال مورد نظر و صرافی مورد نطر را انتخاب کنید',
            ]);
            $pairs = pair::select('id','symbol_id','symbol','base','quote')->where('ex_id','=',$request->exchange)->get();
            if(!$pairs->isEmpty()){
                return response()->json(['status'=>true,'data'=>$pairs]);
            }else{
                return response()->json(['status'=>false,'message'=>'جفت ارزی برای صرافی انتخاب شده یافت نشد']);
            }
        }else{
            abort(404);
        }
    }
    public function getAvailable(request $request)
    {
        $per = checkUrl(Session::get('plan'),request()->segment(count(request()->segments())));
        if($per) {
            $validated = $request->validate([
                'pair' => 'required',
                'connection' => 'required',
            ],[
                'pair.required'    => 'لطفا جفت ارز مورد معامله خود را انتخاب کنید',
                'connection.required'    => 'لطفا صرافی مورد نطر خود را انتخاب کنید',
            ]);
            $pairs = pair::where('id','=',$request->pair)->first();
            $userid = Session::get('uid');
            $spotAvailable = '';
            $assets = getasset($request->connection,'spot');
            try{
                $baseAsset = json_decode($assets,true)[$pairs->base];
                $baseAvailable = floatval($baseAsset['free']);
                $baseTotal = floatval($baseAsset['total']);
            }catch (\Exception $e){
                $baseAvailable = floatval(0.000);
                $baseTotal = floatval(0.000);
            }
            try{
                $quoteAsset = json_decode($assets,true)[$pairs->quote];
                $quoteAvailable = floatval($quoteAsset['free']);
                $quoteTotal = floatval($quoteAsset['total']);
            }catch (\Exception $e){
                $quoteAvailable = floatval(0.000);
                $quoteTotal = floatval(0.000);
            }
            $free = json_decode($assets,true)['free'];
            $total = json_decode($assets,true)['total'];
            $used = json_decode($assets,true)['used'];
            $spotQuery = getOrderQueries($userid,$request->connection);

            return response()->json(['status'=>true,
                'baseAvailable'=>$baseAvailable,
                'quoteAvailable'=>$quoteAvailable,
                'baseTotal'=>$baseTotal,
                'quoteTotal'=>$quoteTotal,
                'total'=>$total,
//                'orders'=>json_decode($spotQuery),
                'limit_price_max'=>$pairs->limit_price_max,
                'limit_price_min'=>$pairs->limit_price_min,
                'precision_price'=>$pairs->precision_price,
                'precision_amount'=>$pairs->precision_amount,
                'limit_amount_min'=>$pairs->limit_amount_min,
                'limit_amount_max'=>$pairs->limit_amount_max]);



            $spotAvailable = '';
            $quoteAvailable = '';

            $spotQuery = getOrderQueries($userid,$request->connection,"");
            $statusQuery = json_decode($spotQuery,true)['orders'];
            $reponseQuery = $statusQuery['result'];
            return response()->json(['status'=>true,
                'baseAvailable'=>$baseAvailable,
                'quoteAvailable'=>$quoteAvailable,
                'assets'=>$data,
                'orders'=>$reponseQuery,
                'quotePrecision'=>$pairs->quotePrecision,
                'basePrecision'=>$pairs->basePrecision,
                'minPricePrecision'=>$pairs->minPricePrecision,
                'minTradeAmount'=>$pairs->minTradeAmount,
                'maxTradeAmount'=>$pairs->maxTradeAmount]);

        }else{
            abort(404);
        }
    }
    public function orderBuyMarket(request $request)
    {
        $per = checkUrl(Session::get('plan'),request()->segment(count(request()->segments())));
        if($per) {
            $validated = $request->validate([
                'connection' => 'required',
                'symbol' => 'required',
                'amount' => 'required',
            ],[
                'connection.required'    => 'لطفا صرافی مورد نطر خود را انتخاب کنید',
                'symbol.required'    => 'لطفا جفت ارز مورد معامله خود را انتخاب کنید',
                'amount.required'    => 'لطفا ارزش سفارش خود را وارد کنید',
            ]);
            $useruid = Session::get('uid');
            $side='buy';
            $type='market';
            $params = array("tp"=>null,"sl"=>null,"triggerPrice"=>null,"postOnly"=>null,"reduceOnly"=>null,"position_id"=>null,"timeInForce"=>null,"positionside"=>null);
            return $order = ceateorder($useruid,$request->connection,$request->symbol,$request->symbol_id,$type,$side,$request->amount,null,$params);
            if($order['status'] == 201){
                return response()->json(['status'=>true,
                    'message'=>'خرید شما موفق بود، موجودی خود را بررسی کنید']);
            }else{
                return response()->json(['status'=>false,'message'=>$order['data']]);
            }
        }else{
            abort(404);
        }
    }
    public function orderSellMarket(request $request)
    {
        $per = checkUrl(Session::get('plan'),request()->segment(count(request()->segments())));
        if($per) {
            $validated = $request->validate([
                'connection' => 'required',
                'symbol' => 'required',
                'amount' => 'required',
            ],[
                'connection.required'    => 'لطفا صرافی مورد نطر خود را انتخاب کنید',
                'symbol.required'    => 'لطفا جفت ارز مورد معامله خود را انتخاب کنید',
                'amount.required'    => 'لطفا ارزش سفارش خود را وارد کنید',
            ]);
            $useruid = Session::get('uid');
            $side='sell';
            $type='market';
            $params = array("tp"=>null,"sl"=>null,"triggerPrice"=>null,"postOnly"=>null,"reduceOnly"=>null,"position_id"=>null,"timeInForce"=>null,"positionside"=>null);
            return $order = ceateorder($useruid,$request->connection,$request->symbol_id,$request->symbol,$type,$side,$request->amount,null,$params);
            if($order['status'] == 201){
                return response()->json(['status'=>true,
                    'message'=>'فروش شما موفق بود، موجودی خود را بررسی کنید']);
            }else{
                return response()->json(['status'=>false,'message'=>$order['data']]);
            }
        }else{
            abort(404);
        }
    }
    public function orderBuyLimit(request $request)
    {
        $per = checkUrl(Session::get('plan'),request()->segment(count(request()->segments())));
        if($per) {
            $validated = $request->validate([
                'connection' => 'required',
                'symbol' => 'required',
                'price' => 'required',
                'amount' => 'required',
            ],[
                'connection.required'    => 'لطفا صرافی مورد نطر خود را انتخاب کنید',
                'symbol.required'    => 'لطفا جفت ارز مورد معامله خود را انتخاب کنید',
                'price.required'    => 'لطفا قیمت سفارش خود را وارد کنید',
                'amount.required'    => 'لطفا مقدار سفارش خود را وارد کنید',
            ]);
            $useruid = Session::get('uid');
            $side='buy';
            $type='limit';
            $params = array("tp"=>null,"sl"=>null,"triggerPrice"=>null,"postOnly"=>null,"reduceOnly"=>null,"position_id"=>null,"timeInForce"=>null,"positionside"=>null);
            ceateorder($useruid,$request->connection,$request->symbol_id,$request->symbol,$type,$side,$request->amount,$request->price,$params);
            $spotQuery = orderquery($useruid,$request->connection,$request->symbol,$request->symbol_id);
            return response()->json(['status'=>true,
                'message'=>'سفارش خرید شما موفق بود',
                'orders'=> json_decode($spotQuery)]);
        }else{
            abort(404);
        }
    }
    public function orderSellLimit(request $request)
    {
        $per = checkUrl(Session::get('plan'),request()->segment(count(request()->segments())));
        if($per) {
            $validated = $request->validate([
                'connection' => 'required',
                'symbol' => 'required',
                'price' => 'required',
                'amount' => 'required',
            ],[
                'connection.required'    => 'لطفا صرافی مورد نطر خود را انتخاب کنید',
                'symbol.required'    => 'لطفا جفت ارز مورد معامله خود را انتخاب کنید',
                'price.required'    => 'لطفا قیمت سفارش خود را وارد کنید',
                'amount.required'    => 'لطفا مقدار سفارش خود را وارد کنید',
            ]);
            $useruid = Session::get('uid');
            $side='sell';
            $type='limit';
            $params = array("tp"=>null,"sl"=>null,"triggerPrice"=>null,"postOnly"=>null,"reduceOnly"=>null,"position_id"=>null,"timeInForce"=>null,"positionside"=>null);
            ceateorder($useruid,$request->connection,$request->symbol_id,$request->symbol,$type,$side,$request->amount,$request->price,$params);
            $spotQuery = orderquery($useruid,$request->connection,$request->symbol,$request->symbol_id);
            return response()->json(['status'=>true,'message'=>'سفارش فروش شما موفق بود','orders'=> json_decode($spotQuery)]);
        }else{
            abort(404);
        }
    }
    public function orderBuyLimitDelete(request $request)
    {
        $per = checkUrl(Session::get('plan'),request()->segment(count(request()->segments())));
        if($per) {
            $validated = $request->validate([
                'connection' => 'required',
                'orderid' => 'required',
            ],[
                'connection.required'    => 'لطفا صرافی مورد نطر خود را انتخاب کنید',
                'orderid.required'    => 'لطفا سفارش حود را انتخاب کنید',
            ]);
            $useruid = Session::get('uid');
            $delete = cancelorder($useruid,$request->connection,$request->symbol,$request->symbol_id,$request->orderid);
            $spotQuery = orderquery($useruid,$request->connection,$request->symbol,$request->symbol_id);
            return response()->json(['status'=>true,'message'=>'حذف سفارش باموفقیت انجام شد !','orders'=>json_decode($spotQuery)]);
        }else{
            abort(404);
        }
    }
}
