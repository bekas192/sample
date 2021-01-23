<?php
class Sale_m extends CI_Model{
    
    function insert($jumlah){
        $data =array(
            'total_beli'  =>$jumlah,
            );
        
            $this->db->insert('penjualan',$data);     
            return $this->db->insert_id();
     }
     
     function show_temp(){
         $query="SELECT tpl.barcode,tpl.item_id,tb.name,tb.price FROM `t_sale` as tpl, p_item as tb WHERE tpl.item_id=tb.item_id and tpl.customer_id=tp.customer_id  and status=0";
         return $this->db->query($query);
     }
}
?>