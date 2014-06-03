<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<div class="subnav">
	<div class="content-menu ib-a blue line-x">
		<?php echo $menu; ?>
	</div>
	<?php if ($html == 0) { ?>
	<div class="bk10"></div>
	<div class="explain-col">
		<font color="gray"><?php echo lang('html-625'); ?></font>
	</div>
	<div class="bk10"></div>
	<fieldset>
        <legend>生成选项</legend>
			<table width="100%" class="table_form">
			<tr>
				<th width="200">生成列表：</th>
				<td>
				<form action="<?php echo SITE_URL;  echo APP_DIR; ?>/index.php?c=category&m=html" method="post" name="myform" target="result_1" style="float:left">
					<?php echo $select; ?>&nbsp;&nbsp;
					<input class="button" type="submit" name="submit" value="开始生成" />
				</form>
                <form action="<?php echo dr_url(APP_DIR.'/home/clear', array('type' => 1)); ?>" method="post" name="myform" target="result_1" style="float:left">
                    <input class="button" type="submit" name="submit" value="清除所有静态文件" style="padding-right:10px; padding-left:10px;" />
				</form>
				</td>
			</tr>
			<tr>
				<th></th>
				<td><iframe frameborder="0" name="result_1" id="result_1" width="100%" height="80"></iframe></td>
			</tr>
			<tr>
				<th>生成内容：</th>
				<td>
				<form action="<?php echo SITE_URL;  echo APP_DIR; ?>/index.php?c=show&m=html" method="post" name="myform" target="result_2" style="float:left">
					<?php echo $select; ?>&nbsp;&nbsp;
					时间段
					<?php echo dr_field_input('start', 'Date', array('option'=>array('format'=>'Y-m-d','width'=>80)), 0); ?>
					-&nbsp;
					<?php echo dr_field_input('end', 'Date', array('option'=>array('format'=>'Y-m-d','width'=>80)), 0); ?>&nbsp;&nbsp;
					<input class="button" type="submit" name="submit" value="开始生成" />
				</form>
                <form action="<?php echo dr_url(APP_DIR.'/home/clear', array('type' => 2)); ?>" method="post" name="myform" target="result_2" style="float:left">
                    <input class="button" type="submit" name="submit" value="清除所有静态文件" style="padding-right:10px; padding-left:10px;" />
				</form>
				</td>
			</tr>
			<tr>
				<th></th>
				<td><iframe name="result_2" frameborder="0" id="result_2" width="100%" height="80"></iframe></td>
			</tr>
			</table>
    </fieldset>
	<?php } else if ($html == 1) { ?>
	<div class="bk10"></div>
	<div class="explain-col">
		<font color=red><b>此模块没有开启生成静态功能</b></font>
	</div>
	<div class="bk10"></div>
	<fieldset>
        <legend>开启步骤</legend>
        <input name="data[alipay][name]" type="hidden" value="支付宝" />
        <table width="100%" class="table_form">
            <tr>
                <th width="200">1、</th> 
                <td>进入”系统“菜单，选择”模块管理“，配置当前模块”<?php echo APP_DIR; ?>“</td>
            </tr>
            <tr>
                <th>2、</th> 
                <td>在”划分站点“选项中，选择当前站点”<?php echo SITE_NAME; ?>“，开启”生成静态“开关</td>
            </tr>
            <tr class="dr_border_none">
                <th>3、</th> 
                <td>保存配置后，更新全站缓存，再回到这个页面</td>
            </tr>
        </table>
    </fieldset>
	<?php } else if ($html == 2) { ?>
	<div class="bk10"></div>
	<div class="explain-col">
		<font color=red><b>由于当前站点不是主站点，因此此模块必须绑定域名之后才能生成静态</b></font>
	</div>
	<div class="bk10"></div>
	<fieldset>
        <legend>操作步骤</legend>
        <input name="data[alipay][name]" type="hidden" value="支付宝" />
        <table width="100%" class="table_form">
            <tr>
                <th width="200">1、</th> 
                <td>进入”系统“菜单，选择”模块管理“，配置当前模块”<?php echo APP_DIR; ?>“</td>
            </tr>
            <tr>
                <th>2、</th> 
                <td>在”划分站点“选项中，选择当前站点”<?php echo SITE_NAME; ?>“，并在”绑定域名“处填写一个域名，域名格式如：test.dayrui.com</td>
            </tr>
            <tr>
                <th>3、</th> 
                <td>保存配置后，更新全站缓存</td>
            </tr>
            <tr>
                <th>4、</th> 
                <td>把上面配置的域名绑定到目录：<?php echo APPPATH; ?>html/<?php echo SITE_ID; ?>/</td>
            </tr>
            <tr class="dr_border_none">
                <th>5、</th> 
                <td>绑定目录之后，域名正常解析时，再返回到这个页面</td>
            </tr>
        </table>
    </fieldset>
	<?php } else if ($html == 3) { ?>
	<div class="bk10"></div>
	<div class="explain-col">
		<font color=red><b>此模块的<?php echo lang('cat-00'); ?>没有设置自定义URL，因此无法生成静态</b></font>
	</div>
	<div class="bk10"></div>
	<fieldset>
        <legend>操作步骤</legend>
        <input name="data[alipay][name]" type="hidden" value="支付宝" />
        <table width="100%" class="table_form">
            <tr>
                <th width="200">1、</th> 
                <td>进入此模块的”<?php echo lang('cat-00'); ?>“界面，在本页的顶部选择”自定义URL“</td>
            </tr>
            <tr>
                <th>2、</th> 
                <td>选择你要自定义URL的栏目，再下面填写对应的规则</td>
            </tr>
            <tr>
                <th>3、</th> 
                <td>保存配置后，更新<?php echo lang('cat-00'); ?>缓存</td>
            </tr>
            <tr>
                <th>4、</th> 
                <td>最重要的一步，”更新URL地址“，否则内容页URL是不会生效的</td>
            </tr>
            <tr class="dr_border_none">
                <th>5、</th> 
                <td>URL地址与你设置的规则一致时，再返回到这个页面</td>
            </tr>
        </table>
    </fieldset>
	<?php } ?>
</div>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>