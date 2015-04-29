<?php defined('InShopNC') or exit('Access Invalid!');?>

      <div class="title">
        <h3><a href="<?php echo urlShop('category');?>"><?php echo $lang['nc_all_goods_class'];?></a></h3>
        <i class="arrow"></i></div>
      <div class="category">
        <ul class="menu">
          <?php if (!empty($output['show_goods_class']) && is_array($output['show_goods_class'])) { $i = 0; ?>
          <?php foreach ($output['show_goods_class'] as $key => $val) { $i++; ?>
          <li cat_id="<?php echo $val['gc_id'];?>" class="<?php echo $i%2==1 ? 'odd':'even';?>" <?php if($i>8){?>style="display:none;"<?php }?>>
            <div class="class">
              <?php if(!empty($val['pic'])) { ?>
              <span class="ico"><img src="<?php echo $val['pic'];?>"></span>
              <?php } ?>
              <h4><a href="<?php echo urlShop('search','index',array('cate_id'=> $val['gc_id']));?>"><?php echo $val['gc_name'];?></a></h4>
              <span class="recommend-class">
              <?php if (!empty($val['class3']) && is_array($val['class3'])) { ?>
              <?php foreach ($val['class3'] as $k => $v) { ?>
              <a href="<?php echo urlShop('search','index',array('cate_id'=> $v['gc_id']));?>" title="<?php echo $v['gc_name']; ?>"><?php echo $v['gc_name'];?></a>
              <?php } ?>
              <?php } ?>
              </span> </div>
          </li>
          <?php } ?>
          <?php } ?>
        </ul>
      </div>