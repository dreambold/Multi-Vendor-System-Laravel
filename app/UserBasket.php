<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sentinel;
use DB;

class UserBasket extends Model {

    protected $table = 'au_user_basket';
    protected $guarded = ['id'];
    public  $timestamps = false;

    static public  function isDelete($id){
        return true;
    }

    static public function getBasketList($immeditaly_type =0){
        $user =  Sentinel::getUser();
        $user_id = $user['id'];
        $select = "*, au_user_basket.id basketId";
        $list = DB::table('au_user_basket')
            ->leftJoin('au_product', 'au_user_basket.product_id', '=', 'au_product.id')
            ->where(array('user_id' => $user_id, "immeditaly_type"=>$immeditaly_type))
            ->orderBy("seller_id")
            ->select(DB::raw($select))
            ->get();
        $list = convertAttrToArray($list);
        $itemCount = count($list);
        $totalPrice = 0;
        foreach($list as $key => $item){
            $variant_id = $item['sku_id'];
            $variantInfo = ProductVariant::where(array('id'=>$variant_id))->first();
            if(!isset($variantInfo['id'])){
                $totalPrice += $item['price']*$item['product_count'];
            }else{
                $totalPrice += $variantInfo['price']*$item['product_count'];
                $list[$key]['price'] = $variantInfo['price'];
            }

            $list[$key]['variant'] = $variantInfo;
            $list[$key]['varirant_str'] = ProductVariant::getVariantAttrStr($variant_id);
            $list[$key]['seller'] = User::find($item['seller_id']);
            $list[$key]['totalPrice'] = number_format($list[$key]['price']*$item['product_count'],2);
        }


        $list = convertArrayGroupArray($list, 'seller_id');
        $totalPrice1 = number_format($totalPrice,2);
        $list['totalPrice'] = $totalPrice;
        $list['itemCount'] = $itemCount;
        $transPrice = 0;
        $list['transPrice'] = $transPrice;
        $basketPrice = $totalPrice*1+$transPrice;
        $list['basketPrice'] = number_format($basketPrice,2);
        return $list;
    }

    static public function getBasketRelativeProductList(){
        $user =  Sentinel::getUser();
        $user_id = $user['id'];
        $productList = UserBasket::where(array('user_id'=>$user_id))->get();
        $seller_ids_a = array();
        $product_id_a = array();
        foreach($productList as $item){
            if(!in_array($item['supplier_id'], $seller_ids_a)){
                array_push($seller_ids_a, $item['supplier_id']);
            }
            if(!in_array($item['product_id'], $product_id_a)){
                array_push($product_id_a, $item['product_id']);
            }
        }
        $seller_ids = implode(",", $seller_ids_a);
        $product_ids = implode(",", $product_id_a);
        $relationList = Product::whereRaw("FIND_IN_SET(seller_id, '".$seller_ids."')")->whereRaw("!FIND_IN_SET(id, '".$product_ids."')")->get();
        return $relationList;
    }

    static public function createOrder($immeditaly_type =0){
        $user =  Sentinel::getUser();
        $user_id = $user['id'];
        $groupList = UserBasket::where(array("user_id"=>$user_id, "immeditaly_type"=>$immeditaly_type))->select(DB::raw("GROUP_CONCAT(id) basketIds, supplier_id "))
            ->groupBy("supplier_id")->get();
        $orderIds = "";
        $userReceiveInfo = UserReceiveAddress::where(array("user_id"=>$user_id, "is_active"=>"1"))->first();
        $createTime = date("Y-m-d H:i:s");

        foreach($groupList as $item){
            $basketIds = $item['basketIds'];
            $supplier_id = $item['supplier_id'];
            $totalInfo = UserBasket::whereRaw("FIND_IN_SET(id,'".$basketIds."')")->select(DB::raw("IFNULL(SUM(product_count),0) total_quantity, IFNULL(SUM(getProductPrice(product_id,sku_id)*product_count),0) total_price , supplier_id"))->first();
            $order = new Order();
            $order['user_id'] = $user_id;
            $order['seller_id'] = $supplier_id;
            $order['quantity'] = $totalInfo['total_quantity'];
            $order['total_price'] = $totalInfo['total_price'];
            $order['order_number'] = newOrderNo($user_id);
            $order['receive_region_id'] = $userReceiveInfo['region_id'];
            $order['receive_user_name'] = $userReceiveInfo['user_name'];
            $order['receive_address'] = $userReceiveInfo['address'];
            $order['receive_phone_num'] = $userReceiveInfo['phone_num'];
            $order['member_say'] = '';
            $order['order_time'] = $createTime;
            $order->save();
            $orderId = $order['id'];
            $orderIds .= ("" == $orderIds ? "": ",").$order['id'];
            $basketProductList = UserBasket::whereRaw("FIND_IN_SET(id,'".$item['basketIds']."')")->get();
            foreach($basketProductList as $basket){
                $product_price = Product::getProductPrice($basket['product_id'], $basket['sku_id']);
                if($product_price == null){
                    UserBasket::where(array("id"=>$basket['id']))->delete();
                    continue;
                }
                $orderDetail = new OrderDetail();
                $orderDetail['order_id'] = $orderId;
                $orderDetail['product_id'] = $basket['product_id'];
                $orderDetail['sku_id'] = $basket['sku_id'];
                $orderDetail['product_count'] = $basket['product_count'];
                $orderDetail['product_price'] = $product_price;
                $orderDetail['product_total_price'] = number_format($product_price*$basket['product_count'],2);
                $orderDetail ->save();
            }
        }
        foreach($groupList as $item) {
            UserBasket::whereRaw("FIND_IN_SET(id,'" . $item['basketIds'] . "')")->delete();
        }
        return $orderIds;
    }




}
