<!-- $Id: article_info.htm 16780 2009-11-09 09:28:30Z sxc_shop $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,selectzone.js,validator.js')); ?>
<!-- start goods form -->
<div class="tab-div">
  <div id="tabbar-div">
    <p>
      <span class="tab-front" id="general-tab"><?php echo $this->_var['lang']['tab_general']; ?></span><span
      class="tab-back" id="detail-tab"><?php echo $this->_var['lang']['tab_content']; ?></span><span
      class="tab-back" id="goods-tab"><?php echo $this->_var['lang']['tab_goods']; ?></span>
    </p>
  </div>
  <div id="tabbody-div">
    <form  action="1_art.php" method="post" >
    <input type="text" name="act" value="insert">
  标题：<input type="text" name="title">
  内容：<textarea name="content"></textarea>
    <div class="button-div">
      <input type="submit" value="提交" class="button"  />
      <input type="reset" value="重置" class="button" />
    </div>
    </form>
  </div>

</div>

<?php echo $this->fetch('pagefooter.htm'); ?>