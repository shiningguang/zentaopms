<?php
/**
 * The batch create view of todo module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2013 青岛易软天创网络科技有限公司 (QingDao Nature Easy Soft Network Technology Co,LTD www.cnezsoft.com)
 * @license     LGPL (http://www.gnu.org/licenses/lgpl.html)
 * @author      Congzhi Chen <congzhi@cnezsoft.com>
 * @package     todo
 * @version     $Id: create.html.php 2741 2012-04-07 07:24:21Z areyou123456 $
 * @link        http://www.zentao.net
 */
?>
<?php include '../../common/view/m.header.html.php';?>
</div>
<form method='post' target='hiddenwin'>
<?php echo html::hidden("date", date('Y-m-d'));?>
<?php for($i = 1; $i <= 5; $i++):?>
<?php
echo html::input("names[$i]", '', "placeholder='TODO{$lang->todo->name}'");
echo html::hidden("types[$i]", 'custom');
echo html::hidden("pris[$i]", 3);
echo html::hidden("descs[$i]", '');
echo html::hidden("begins[$i]", '2400');
echo html::hidden("ends[$i]",   '2400');
?>
<?php endfor;?>
<p>
<?php
echo html::submitButton('', "data-inline='true' data-theme='b'");
echo html::backButton("data-inline='true'");
?>
</p>
</form>
<?php include '../../common/view/m.footer.html.php';?>