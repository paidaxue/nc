<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.mousewheel.js"></script>

<div class="page">
  <div class="fixed-bar">
    <div class="item-title">
      <h3><?php echo $lang['dashboard_wel_system_info'];?><!--<?php echo $lang['dashboard_wel_lase_login'].$lang['nc_colon'];?><?php echo $output['admin_info']['admin_login_time'];?>--></h3>
    </div>
  </div>
  <div class="fixed-empty"></div>
  <div class="info-panel">
    <dl class="member">
      <dt>
        <div class="ico"><i></i><sub title="<?php echo $lang['dashboard_wel_total_member'];?>"><span><em id="statistics_member"></em></span></sub></div>
        <h3><?php echo $lang['nc_member'];?></h3>
        <h5><?php echo $lang['dashboard_wel_member_des'];?></h5>
      </dt>
      <dd>
        <ul>
          <li class="w50pre normal"><a href="index.php?act=member&op=member"><?php echo $lang['dashboard_wel_new_add'];?><sub><em id="statistics_week_add_member"></em></sub></a></li>
          <li class="w50pre none"><a href="index.php?act=predeposit&op=pd_cash_list"><?php echo $lang['dashboard_wel_predeposit_get'];?><sub><em id="statistics_cashlist">0</em></sub></a></li>
        </ul>
      </dd>
    </dl>
    <dl class="shop">
      <dt>
        <div class="ico"><i></i><sub title="<?php echo $lang['dashboard_wel_count_store_add'];?>"><span><em id="statistics_store"></em></span></sub></div>
        <h3><?php echo $lang['nc_store'];?></h3>
        <h5><?php echo $lang['dashboard_wel_store_des'];?></h5>
      </dt>
      <dd>
        <ul>
          <li class="w33pre none"><a href="index.php?act=store&op=store_joinin">开店审核<sub><em id="statistics_store_joinin">0</em></sub></a></li>
          <li class="w33pre none"><a href="index.php?act=store&op=store&store_type=expired"><?php echo $lang['dashboard_wel_expired'];?><sub><em id="statistics_store_expired">0</em></sub></a></li>
          <li class="w34pre none"><a href="index.php?act=store&op=store&store_type=expire"><?php echo $lang['dashboard_wel_expire'];?><sub><em id="statistics_store_expire">0</em></sub></a></li>
        </ul>
      </dd>
    </dl>
    <dl class="goods">
      <dt>
        <div class="ico"><i></i><sub title="<?php echo $lang['dashboard_wel_total_goods'];?>"><span><em id="statistics_goods"></em></span></sub></div>
        <h3><?php echo $lang['nc_goods'];?></h3>
        <h5><?php echo $lang['dashboard_wel_goods_des'];?></h5>
      </dt>
      <dd>
        <ul>
          <li class="w25pre normal"><a href="index.php?act=goods&op=goods"><?php echo $lang['dashboard_wel_new_add'];?><sub title="<?php echo $lang['dashboard_wel_count_goods'];?>"><em id="statistics_week_add_product"></em></sub></a></li>
          <li class="w25pre none"><a href="<?php echo urlAdmin('goods','goods',array('type'=>'waitverify', 'search_verify' => 10));?>">商品审核<sub><em id="statistics_product_verify">0</em></sub></a></li>
          <li class="w25pre none"><a href="index.php?act=inform&op=inform_list"><?php echo $lang['dashboard_wel_inform'];?><sub><em id="statistics_inform_list">0</em></sub></a></li>
          <li class="w25pre none"><a href="index.php?act=brand&op=brand_apply"><?php echo $lang['dashboard_wel_brnad_applay'];?><sub><em id="statistics_brand_apply">0</em></sub></a></li>
        </ul>
      </dd>
    </dl>
    <dl class="trade">
      <dt>
        <div class="ico"><i></i><sub title="<?php echo $lang['dashboard_wel_total_order'];?>"><span><em id="statistics_order"></em></span></sub></div>
        <h3><?php echo $lang['nc_trade'];?></h3>
        <h5><?php echo $lang['dashboard_wel_trade_des'];?></h5>
      </dt>
      <dd>
        <ul>
          <li class="w25pre none"><a href="index.php?act=refund&op=refund_manage">退款<sub><em id="statistics_refund"></em></sub></a></li>
          <li class="w25pre none"><a href="index.php?act=return&op=return_manage">退货<sub><em id="statistics_return"></em></sub></a></li>
          <li class="w25pre none"><a href="index.php?act=complain&op=complain_new_list"><?php echo $lang['dashboard_wel_complain'];?><sub><em id="statistics_complain_new_list">0</em></sub></a></li>
          <li class="w25pre none"><a href="index.php?act=complain&op=complain_handle_list"><?php echo $lang['dashboard_wel_complain_handle'];?><sub><em id="statistics_complain_handle_list">0</em></sub></a></li>
        </ul>
      </dd>
    </dl>
    <dl class="operation">
      <dt>
        <div class="ico"><i></i></div>
        <h3><?php echo $lang['nc_operation'];?></h3>
        <h5><?php echo $lang['dashboard_wel_stat_des'];?></h5>
      </dt>
      <dd>
        <ul>
          <li class="w25pre none"><a href="index.php?act=groupbuy&op=groupbuy_verify_list"><?php echo $lang['dashboard_wel_groupbuy'];?><sub><em id="statistics_groupbuy_verify_list">0</em></sub></a></li>
          <li class="w25pre none"><a href="index.php?act=pointorder&op=pointorder_list"><?php echo $lang['dashboard_wel_point_order'];?><sub><em id="statistics_points_order">0</em></sub></a></li>
          <li class="w25pre none"><a href="index.php?act=bill&op=show_statis&os_month=&query_store=&bill_state=2"><?php echo $lang['dashboard_wel_check_billno'];?><sub><em id="statistics_check_billno">0</em></sub></a></li>
          <li class="w25pre none"><a href="index.php?act=bill&op=show_statis&os_month=&query_store=&bill_state=3"><?php echo $lang['dashboard_wel_pay_billno'];?><sub><em id="statistics_pay_billno">0</em></sub></a></li>
        </ul>
      </dd>
    </dl>
    <div class=" clear"></div>
  </div>
</div>
<script type="text/javascript">
var normal = ['week_add_member','week_add_product'];
var work = ['store_joinin','store_expired','store_expire','brand_apply','cashlist','groupbuy_verify_list','points_order','complain_new_list','complain_handle_list', 'product_verify','inform_list','refund','return','cms_article_verify','cms_picture_verify','circle_verify','check_billno','pay_billno'];
$(document).ready(function(){
	$.getJSON("index.php?act=dashboard&op=statistics", function(data){
	  $.each(data, function(k,v){
		  $("#statistics_"+k).html(v);
		  if (v!= 0 && $.inArray(k,work) !== -1){
			$("#statistics_"+k).parent().parent().parent().removeClass('none').addClass('high');
		  }else if (v == 0 && $.inArray(k,normal) !== -1){
			$("#statistics_"+k).parent().parent().parent().removeClass('normal').addClass('none');
		  }
	  });
	});
	//自定义滚定条
	$('#system-info').perfectScrollbar();
});
</script>
