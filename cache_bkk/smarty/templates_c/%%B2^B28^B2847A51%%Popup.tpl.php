<?php /* Smarty version 2.6.29, created on 2018-06-25 10:40:24
         compiled from cache/themes/SuiteR/modules/Contacts/Popup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'cache/themes/SuiteR/modules/Contacts/Popup.tpl', 19, false),array('function', 'sugar_getimage', 'cache/themes/SuiteR/modules/Contacts/Popup.tpl', 115, false),array('function', 'sugar_action_menu', 'cache/themes/SuiteR/modules/Contacts/Popup.tpl', 240, false),array('function', 'counter', 'cache/themes/SuiteR/modules/Contacts/Popup.tpl', 245, false),array('function', 'sugar_translate', 'cache/themes/SuiteR/modules/Contacts/Popup.tpl', 251, false),array('function', 'sugar_evalcolumn_old', 'cache/themes/SuiteR/modules/Contacts/Popup.tpl', 302, false),array('function', 'sugar_currency_format', 'cache/themes/SuiteR/modules/Contacts/Popup.tpl', 304, false),array('function', 'multienum_to_array', 'cache/themes/SuiteR/modules/Contacts/Popup.tpl', 319, false),array('function', 'sugar_field', 'cache/themes/SuiteR/modules/Contacts/Popup.tpl', 325, false),array('modifier', 'default', 'cache/themes/SuiteR/modules/Contacts/Popup.tpl', 249, false),array('modifier', 'lower', 'cache/themes/SuiteR/modules/Contacts/Popup.tpl', 251, false),)), $this); ?>

        <style>
        <?php echo '
        
        ul.clickMenu li span{
        float:unset !important;
        }
        '; ?>

        </style>    


<?php $this->assign('alt_start', $this->_tpl_vars['navStrings']['start']);  $this->assign('alt_next', $this->_tpl_vars['navStrings']['next']);  $this->assign('alt_prev', $this->_tpl_vars['navStrings']['previous']);  $this->assign('alt_end', $this->_tpl_vars['navStrings']['end']); ?>


  <link href="themes/SuiteR/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_3.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/popup_helper.js'), $this);?>
"></script>
<script type="text/javascript">
	<?php echo $this->_tpl_vars['ASSOCIATED_JAVASCRIPT_DATA']; ?>


<?php echo '
function clearAll() {
   for(i=0; i < document.popup_query_form.length; i++) {
       if(/select/i.test(document.popup_query_form.elements[i].type)) {
          for(x=0; x < document.popup_query_form.elements[i].options.length; x++) {
             document.popup_query_form.elements[i].options[x].removeAttribute(\'selected\');
          }
       }
   }
}
'; ?>

</script>
<?php echo $this->_tpl_vars['SEARCH_FORM_HEADER']; ?>

<table cellpadding="0" cellspacing="0" border="0" width="100%" class="edit view">
<tr>
<td>
<form action="index.php" method="post" name="popup_query_form" id="popup_query_form">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td>
<?php echo $this->_tpl_vars['searchForm']; ?>

</td></tr>
<tr>
<td>
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
" />
<input type="hidden" name="action" value="Popup" />
<input type="hidden" name="query" value="true" />
<input type="hidden" name="func_name" value="" />
<input type="hidden" name="request_data" value="<?php echo $this->_tpl_vars['request_data']; ?>
" />
<input type="hidden" name="populate_parent" value="false" />
<input type="hidden" name="hide_clear_button" value="true" />
<input type="hidden" name="record_id" value="" />
<?php echo $this->_tpl_vars['MODE']; ?>

<input type="submit" name="button" class="button" id="search_form_submit"
	title="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_TITLE']; ?>
"
	value="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_LABEL']; ?>
" />
<input type="reset" onclick="SUGAR.searchForm.clear_form(this.form); return false;" class="button" id="search_form_clear"
	title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
"
	value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
"/>
</td>
<td align='right'></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<p>
<div id='addformlink'>
<input type="button" name="showAdd" class="button" value="<?php echo $this->_tpl_vars['popupMeta']['create']['createButton']; ?>
" onclick="toggleDisplay('addform');" />
</div>
<div id='addform' style='display:none;position:relative;z-index:2;left:0px;top:0px;'>
<form name="form_QuickCreate_<?php echo $this->_tpl_vars['module']; ?>
" id="form_QuickCreate_<?php echo $this->_tpl_vars['module']; ?>
"  method="post" action="index.php">
<?php echo $this->_tpl_vars['ADDFORMHEADER']; ?>

<table cellpadding="0" cellspacing="0" border="0" width="100%" class="edit view">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<input type="hidden" name="doAction" value="save" />
<input type="hidden" name="query" value="true" />
<?php echo $this->_tpl_vars['ADDFORM']; ?>

</td></tr>
</table></td></tr></table>
</form>
</div>
</p>
	<form action="index.php" method="post" name="MassUpdate" id="MassUpdate">
	<?php echo $this->_tpl_vars['MODE']; ?>

<input type="hidden" name="mu" value="false" />
<input type='hidden' name='massupdate' value='true' />
<?php echo $this->_tpl_vars['massUpdateData']; ?>

<input type='hidden' name='Leads_LEAD_offset' value=''><input type='hidden' name='saved_associated_data' value=''><input type='hidden' name='module' value='<?php echo $this->_tpl_vars['module']; ?>
'><input type='hidden' name='action' value='Popup'><input type='hidden' name='return_module' value='<?php echo $this->_tpl_vars['module']; ?>
'><input type='hidden' name='return_action' value='Popup'><input type='hidden' name='hide_clear_button' value='true'><input type='hidden' name='current_query_by_page' value='<?php echo $this->_tpl_vars['current_query']; ?>
'>

	<?php echo $this->_tpl_vars['multiSelectData']; ?>

	<input class="button" type="button" id="MassUpdate_select_button" value='<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
' onclick="send_back_selected('<?php echo $this->_tpl_vars['module']; ?>
',document.MassUpdate,'mass[]','<?php echo $this->_tpl_vars['APP']['ERR_NOTHING_SELECTED']; ?>
');">
<?php echo $this->_tpl_vars['jsLang']; ?>

<?php echo $this->_tpl_vars['LIST_HEADER']; ?>

<?php if ($this->_tpl_vars['should_process']): ?>
	<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list view'>
		<tr class='pagination'  role='presentation'>
			<td colspan='<?php echo $this->_tpl_vars['colCount']+1; ?>
' align='right'>
				<table border='0' cellpadding='0' cellspacing='0' width='100%' height='60px'>
					<tr>
						<td align='left' >
							&nbsp;</td>
						<td  align='right' nowrap='nowrap'>
							<?php if ($this->_tpl_vars['pageData']['urls']['startPage']): ?>
							
							<!--Smith-->
							&nbsp;&nbsp;
								<a id="popupViewStartButton"<?php if ($this->_tpl_vars['prerow']): ?> onclick='return sListView.save_checks(0, "<?php echo $this->_tpl_vars['moduleString']; ?>
");'<?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['startPage']; ?>
"' <?php endif; ?>>
								<!--<?php echo smarty_function_sugar_getimage(array('name' => 'start','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['start'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
-->

								<i class="fa fa-angle-double-left fa-2x pagination-icon-bottom" aria-hidden="true"></i>

								
								 </a>
								 &nbsp;&nbsp;
							
								<!--<button type='button' id='popupViewStartButton' title='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(0, "<?php echo $this->_tpl_vars['moduleString']; ?>
");'<?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['startPage']; ?>
"' <?php endif; ?>>
									<?php echo smarty_function_sugar_getimage(array('name' => 'start','ext' => ".png",'other_attributes' => 'align="absmiddle" border="0" ','alt' => ($this->_tpl_vars['alt_start'])), $this);?>

								</button>-->
								<!--<a href='<?php echo $this->_tpl_vars['pageData']['urls']['startPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(0, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> ><?php echo smarty_function_sugar_getimage(array('name' => 'start','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['start'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
&nbsp;<?php echo $this->_tpl_vars['navStrings']['start']; ?>
</a>&nbsp;-->
							<?php else: ?>
							<!--smith-->
							&nbsp;&nbsp;
							<a  id='popupViewStartButton' disabled='disabled' style="color:#6d6d6d">
																<i class="fa fa-angle-double-left fa-2x pagination-icon-bottom-disabled" aria-hidden="true"></i>

								 </a>
								 &nbsp;&nbsp;
							
								<!--<button type='button' id='popupViewStartButton' title='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' class='button' disabled>
									<?php echo smarty_function_sugar_getimage(array('name' => 'start_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['start'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>

								</button>-->
								<!--<?php echo smarty_function_sugar_getimage(array('name' => 'start_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['start'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
&nbsp;<?php echo $this->_tpl_vars['navStrings']['start']; ?>
&nbsp;&nbsp;-->
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pageData']['urls']['prevPage']): ?>
							<!--Smith-->
							 &nbsp;&nbsp;
								<a  id='popupViewPrevButton' title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['prev']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['prevPage']; ?>
"'<?php endif; ?>>
																<i class="fa fa-angle-left fa-2x pagination-icon-bottom" aria-hidden="true"></i>

								</a>
								 &nbsp;&nbsp;
								 
								<!--<button type='button' id='popupViewPrevButton' title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['prev']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['prevPage']; ?>
"'<?php endif; ?>>
									<?php echo smarty_function_sugar_getimage(array('name' => 'previous','ext' => ".png",'other_attributes' => 'align="absmiddle" border="0" ','alt' => ($this->_tpl_vars['alt_prev'])), $this);?>

								</button>-->
								<!--<a href='<?php echo $this->_tpl_vars['pageData']['urls']['prevPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['prev']; ?>
, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> ><?php echo smarty_function_sugar_getimage(array('name' => 'previous','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['previous'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
&nbsp;<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
</a>&nbsp;-->
							<?php else: ?>
							<!--smith-->
							&nbsp;&nbsp;
								<a id="popupViewPrevButton" title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' disabled='disabled' style="color:#6d6d6d">
																<i class="fa fa-angle-left fa-2x pagination-icon-bottom-disabled" aria-hidden="true"></i>
								</a>
								 &nbsp;&nbsp;
							
								<!--<button type='button' id='popupViewPrevButton' class='button' disabled title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
'>
									<?php echo smarty_function_sugar_getimage(array('name' => 'previous_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['previous'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>

								</button>-->
								<!--<?php echo smarty_function_sugar_getimage(array('name' => 'previous_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['previous'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
&nbsp;<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
&nbsp;-->
							<?php endif; ?>
								<span class='pageNumbers'>(<?php if ($this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage'] == 0): ?>0<?php else:  echo $this->_tpl_vars['pageData']['offsets']['current']+1;  endif; ?> - <?php echo $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']; ?>
 <?php echo $this->_tpl_vars['navStrings']['of']; ?>
 <?php if ($this->_tpl_vars['pageData']['offsets']['totalCounted']):  echo $this->_tpl_vars['pageData']['offsets']['total'];  else:  echo $this->_tpl_vars['pageData']['offsets']['total'];  if ($this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage'] != $this->_tpl_vars['pageData']['offsets']['total']): ?>+<?php endif;  endif; ?>)</span>
							<?php if ($this->_tpl_vars['pageData']['urls']['nextPage']): ?>
							
							<!--Smith-->
							&nbsp;&nbsp;
								<a id="popupViewNextButton" <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['next']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['nextPage']; ?>
"'<?php endif; ?>>
																<i class="fa fa-angle-right fa-2x pagination-icon-bottom" aria-hidden="true"></i>
								</a>
								 &nbsp;&nbsp;	
							
								<!--<button type='button' id='popupViewNextButton' title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['next']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['nextPage']; ?>
"'<?php endif; ?>>
									<?php echo smarty_function_sugar_getimage(array('name' => 'next','ext' => ".png",'other_attributes' => 'align="absmiddle" border="0" ','alt' => ($this->_tpl_vars['alt_next'])), $this);?>

								</button>-->
								<!--&nbsp;<a href='<?php echo $this->_tpl_vars['pageData']['urls']['nextPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['next']; ?>
, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> ><?php echo $this->_tpl_vars['navStrings']['next']; ?>
&nbsp;<?php echo smarty_function_sugar_getimage(array('name' => 'next','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['next'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
</a>&nbsp;-->
							<?php else: ?>
							<!--smith-->
							&nbsp;&nbsp;
								<a id="popupViewNextButton" title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' disabled='disabled' style="color:#6d6d6d">
																<i class='fa fa-angle-right fa-2x pagination-icon-bottom-disabled' aria-hidden='true'></i>
								</a>
								 &nbsp;&nbsp;
							
								<!--<button type='button' id='popupViewNextButton' class='button' title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' disabled>
									<?php echo smarty_function_sugar_getimage(array('name' => 'next_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['next'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>

								</button>-->
								<!--&nbsp;<?php echo $this->_tpl_vars['navStrings']['next']; ?>
&nbsp;<?php echo smarty_function_sugar_getimage(array('name' => 'next_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['next'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
-->
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pageData']['urls']['endPage'] && $this->_tpl_vars['pageData']['offsets']['total'] != $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']): ?>
							<!--smith-->
							&nbsp;&nbsp;
								<a id="popupViewEndButton" <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks("end", "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['endPage']; ?>
"'<?php endif; ?>>
																<i class="fa fa-angle-double-right fa-2x pagination-icon-bottom" aria-hidden="true"></i>

								</a>
								 &nbsp;&nbsp;		
							
								<!--<button type='button' id='popupViewEndButton' title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks("end", "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['endPage']; ?>
"'<?php endif; ?>>
									<?php echo smarty_function_sugar_getimage(array('name' => 'end','ext' => ".png",'other_attributes' => 'align="absmiddle" border="0" ','alt' => ($this->_tpl_vars['alt_end'])), $this);?>

								</button>-->
								<!--<a href='<?php echo $this->_tpl_vars['pageData']['urls']['endPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['end']; ?>
, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> ><?php echo $this->_tpl_vars['navStrings']['end']; ?>
&nbsp;<?php echo smarty_function_sugar_getimage(array('name' => 'end','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['end'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
</a></td>-->
							<?php elseif (! $this->_tpl_vars['pageData']['offsets']['totalCounted'] || $this->_tpl_vars['pageData']['offsets']['total'] == $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']): ?>
								<!--smith-->
								&nbsp;&nbsp;							
							<a id="popupViewEndButton" disabled='disabled' title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' style="color:#6d6d6d">
							 								 	<i class="fa fa-angle-double-right fa-2x pagination-icon-bottom-disabled" aria-hidden="true"></i>

							 	</a>
								 &nbsp;&nbsp;	
								
								<!--<button type='button' id='popupViewEndButton' class='button' disabled title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
'>
								 	<?php echo smarty_function_sugar_getimage(array('name' => 'end_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['end'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>

								</button>-->
								<!--&nbsp;<?php echo $this->_tpl_vars['navStrings']['end']; ?>
&nbsp;<?php echo smarty_function_sugar_getimage(array('name' => 'end_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['end'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
-->
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<thead>
		<tr height='20'>
			<?php if ($this->_tpl_vars['prerow']): ?>
				<td nowrap="nowrap" width="43px" class="selectCol td_alt">
				<div style="width:43px">
					<?php echo smarty_function_sugar_action_menu(array('id' => $this->_tpl_vars['link_select_id'],'params' => $this->_tpl_vars['selectLink']), $this);?>

				</div>
				</td>
				<td class='td_alt' nowrap="nowrap" width='1%'>&nbsp;</td>
			<?php endif; ?>
			<?php echo smarty_function_counter(array('start' => 0,'name' => 'colCounter','print' => false,'assign' => 'colCounter'), $this);?>

			<?php $_from = $this->_tpl_vars['displayColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['colHeader'] => $this->_tpl_vars['params']):
?>
				<?php if ($this->_tpl_vars['colCounter'] == '0'): ?><th scope='col' width='<?php echo $this->_tpl_vars['params']['width']; ?>
%' valign="top" data-toggle="true">
				<?php else: ?><th scope='col' width='<?php echo $this->_tpl_vars['params']['width']; ?>
%' valign="top" data-hide="phone,tablet"><?php endif; ?>
					<div style='white-space: normal;font-weight: bold;'width='100%' align='<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['align'])) ? $this->_run_mod_handler('default', true, $_tmp, 'left') : smarty_modifier_default($_tmp, 'left')); ?>
' class="text-uppercase">
	                <?php if (((is_array($_tmp=@$this->_tpl_vars['params']['sortable'])) ? $this->_run_mod_handler('default', true, $_tmp, true) : smarty_modifier_default($_tmp, true))): ?>
                                <a href="<?php echo $this->_tpl_vars['pageData']['urls']['orderBy'];  echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
" onclick='sListView.save_checks(0, "<?php echo $this->_tpl_vars['moduleString']; ?>
");' class='listViewThLinkS1'><?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['label'],'module' => $this->_tpl_vars['pageData']['bean']['moduleDir']), $this);?>
&nbsp;&nbsp;
						<?php if (((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == $this->_tpl_vars['pageData']['ordering']['orderBy']): ?>
							<?php if ($this->_tpl_vars['pageData']['ordering']['sortOrder'] == 'ASC'): ?>
                                <?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_SORT_DESC'), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('arrowAlt', ob_get_contents());ob_end_clean(); ?>
                                <?php ob_start(); ?>arrow_down.<?php echo $this->_tpl_vars['arrowExt'];  $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
								<?php echo smarty_function_sugar_getimage(array('name' => ($this->_tpl_vars['imageName']),'ext' => 'gif','width' => ($this->_tpl_vars['arrowWidth']),'height' => ($this->_tpl_vars['arrowHeight']),'alt' => ($this->_tpl_vars['arrowAlt']),'other_attributes' => 'align="absmiddle" border="0"'), $this);?>

							<?php else: ?>
                                <?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_SORT_ASC'), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('arrowAlt', ob_get_contents());ob_end_clean(); ?>
                                <?php ob_start(); ?>arrow_up.<?php echo $this->_tpl_vars['arrowExt'];  $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
								<?php echo smarty_function_sugar_getimage(array('name' => ($this->_tpl_vars['imageName']),'ext' => 'gif','width' => ($this->_tpl_vars['arrowWidth']),'height' => ($this->_tpl_vars['arrowHeight']),'alt' => ($this->_tpl_vars['arrowAlt']),'other_attributes' => 'align="absmiddle" border="0"'), $this);?>

							<?php endif; ?>
						<?php else: ?>
                            <?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_SORT'), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('arrowAlt', ob_get_contents());ob_end_clean(); ?>
                            <?php ob_start(); ?>arrow.<?php echo $this->_tpl_vars['arrowExt'];  $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('imageName', ob_get_contents());ob_end_clean(); ?>
							<?php echo smarty_function_sugar_getimage(array('name' => ($this->_tpl_vars['imageName']),'ext' => 'gif','width' => ($this->_tpl_vars['arrowWidth']),'height' => ($this->_tpl_vars['arrowHeight']),'alt' => ($this->_tpl_vars['arrowAlt']),'other_attributes' => 'align="absmiddle" border="0"'), $this);?>

						<?php endif; ?>
					<?php else: ?>
						<?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['label'],'module' => $this->_tpl_vars['pageData']['bean']['moduleDir']), $this);?>

					<?php endif; ?>
					</div>
				</th>
				<?php echo smarty_function_counter(array('name' => 'colCounter'), $this);?>

			<?php endforeach; endif; unset($_from); ?>
			<?php if (! empty ( $this->_tpl_vars['quickViewLinks'] )): ?>
			<td class='td_alt' nowrap="nowrap" width='1%'>&nbsp;</td>
			<?php endif; ?>
		</tr>
		</thead>
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rowIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rowIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['rowData']):
        $this->_foreach['rowIteration']['iteration']++;
?>
			<?php if ((1 & $this->_foreach['rowIteration']['iteration'])): ?>
				<?php $this->assign('_rowColor', $this->_tpl_vars['rowColor'][0]); ?>
			<?php else: ?>
				<?php $this->assign('_rowColor', $this->_tpl_vars['rowColor'][1]); ?>
			<?php endif; ?>
			<tr height='20' class='<?php echo $this->_tpl_vars['_rowColor']; ?>
S1'>
				<?php if ($this->_tpl_vars['prerow']): ?>
				<td width='1%' nowrap='nowrap'>
						<input onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='checkbox' name='mass[]' value='<?php echo $this->_tpl_vars['rowData']['ID']; ?>
'>
				</td>
				<td width='1%' nowrap='nowrap'>
						<?php echo $this->_tpl_vars['pageData']['additionalDetails'][$this->_tpl_vars['id']]; ?>

				</td>
				<?php endif; ?>
				<?php echo smarty_function_counter(array('start' => 0,'name' => 'colCounter','print' => false,'assign' => 'colCounter'), $this);?>

				<?php $_from = $this->_tpl_vars['displayColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['params']):
?>
					<td scope='row' align='<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['align'])) ? $this->_run_mod_handler('default', true, $_tmp, 'left') : smarty_modifier_default($_tmp, 'left')); ?>
' valign=top class='<?php echo $this->_tpl_vars['_rowColor']; ?>
S1' bgcolor='<?php echo $this->_tpl_vars['_bgColor']; ?>
'>
						<?php if ($this->_tpl_vars['params']['link'] && ! $this->_tpl_vars['params']['customCode']): ?>

							<<?php echo ((is_array($_tmp=@$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']][$this->_tpl_vars['params']['ACLTag']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN'])); ?>
 href='javascript:void(0)' onclick="send_back('<?php if ($this->_tpl_vars['params']['dynamic_module']):  echo $this->_tpl_vars['rowData'][$this->_tpl_vars['params']['dynamic_module']];  else:  echo ((is_array($_tmp=@$this->_tpl_vars['params']['module'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']));  endif; ?>','<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
');"><?php echo $this->_tpl_vars['rowData'][$this->_tpl_vars['col']]; ?>
</<?php echo ((is_array($_tmp=@$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']][$this->_tpl_vars['params']['ACLTag']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN'])); ?>
>

						<?php elseif ($this->_tpl_vars['params']['customCode']): ?>
							<?php echo smarty_function_sugar_evalcolumn_old(array('var' => $this->_tpl_vars['params']['customCode'],'rowData' => $this->_tpl_vars['rowData']), $this);?>

						<?php elseif ($this->_tpl_vars['params']['currency_format']): ?>
							<?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['rowData'][$this->_tpl_vars['col']],'round' => $this->_tpl_vars['params']['currency_format']['round'],'decimals' => $this->_tpl_vars['params']['currency_format']['decimals'],'symbol' => $this->_tpl_vars['params']['currency_format']['symbol'],'convert' => $this->_tpl_vars['params']['currency_format']['convert'],'currency_symbol' => $this->_tpl_vars['params']['currency_format']['currency_symbol']), $this);?>

						<?php elseif ($this->_tpl_vars['params']['type'] == 'bool'): ?>
								<input type='checkbox' disabled=disabled class='checkbox'
								<?php if (! empty ( $this->_tpl_vars['rowData'][$this->_tpl_vars['col']] )): ?>
									checked=checked
								<?php endif; ?>
								/>
                        <?php elseif ($this->_tpl_vars['params']['type'] == 'multienum'): ?>
								<?php echo smarty_function_counter(array('name' => 'oCount','assign' => 'oCount','start' => 0), $this);?>

								<?php echo smarty_function_multienum_to_array(array('string' => $this->_tpl_vars['rowData'][$this->_tpl_vars['col']],'assign' => 'vals'), $this);?>

								<?php $_from = $this->_tpl_vars['vals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
									<?php echo smarty_function_counter(array('name' => 'oCount'), $this);?>

									<?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['options'],'select' => $this->_tpl_vars['item']), $this); if ($this->_tpl_vars['oCount'] != count ( $this->_tpl_vars['vals'] )): ?>,<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
                        <?php else: ?>
                            <?php echo smarty_function_sugar_field(array('parentFieldArray' => $this->_tpl_vars['rowData'],'vardef' => $this->_tpl_vars['params'],'displayType' => 'ListView','field' => $this->_tpl_vars['col']), $this);?>

						<?php endif; ?>
					</td>
					<?php echo smarty_function_counter(array('name' => 'colCounter'), $this);?>

				<?php endforeach; endif; unset($_from); ?>

		<?php endforeach; endif; unset($_from); ?>
		<tr class='pagination' role='presentation'>
			<td colspan='<?php echo $this->_tpl_vars['colCount']+1; ?>
' align='right'>
				<table border='0' cellpadding='0' cellspacing='0' width='100%' height='60px'>
					<tr>
						<td align='left' >
							&nbsp;</td>
						<td  align='right' nowrap='nowrap'>
							<?php if ($this->_tpl_vars['pageData']['urls']['startPage']): ?>
							<!--smith-->
								&nbsp;&nbsp;
								<a id="listViewStartButton_bottom"<?php if ($this->_tpl_vars['prerow']): ?> onclick='return sListView.save_checks(0, "<?php echo $this->_tpl_vars['moduleString']; ?>
");'<?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['startPage']; ?>
"' <?php endif; ?>>
								<!--<?php echo smarty_function_sugar_getimage(array('name' => 'start','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['start'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
-->

								<i class="fa fa-angle-double-left fa-2x pagination-icon-bottom" aria-hidden="true"></i>

								
								 </a>
								 &nbsp;&nbsp;
							
								<!--<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(0, "<?php echo $this->_tpl_vars['moduleString']; ?>
");'<?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['startPage']; ?>
"' <?php endif; ?>>
									<?php echo smarty_function_sugar_getimage(array('name' => 'start','ext' => ".png",'other_attributes' => 'align="absmiddle" border="0" ','alt' => ($this->_tpl_vars['alt_start'])), $this);?>

								</button>-->
								<!--<a href='<?php echo $this->_tpl_vars['pageData']['urls']['startPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(0, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> ><?php echo smarty_function_sugar_getimage(array('name' => 'start','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['start'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
&nbsp;<?php echo $this->_tpl_vars['navStrings']['start']; ?>
</a>&nbsp;-->
							<?php else: ?>
							<!--smith-->
							 &nbsp;&nbsp;
							<a  id='listViewStartButton_bottom' disabled='disabled' style="color:#6d6d6d">
																<i class="fa fa-angle-double-left fa-2x pagination-icon-bottom-disabled" aria-hidden="true"></i>

								 </a>
								 &nbsp;&nbsp;
							
							
								<!--<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' class='button' disabled>
									<?php echo smarty_function_sugar_getimage(array('name' => 'start_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['start'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>

								</button>-->
								<!--<?php echo smarty_function_sugar_getimage(array('name' => 'start_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['start'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
&nbsp;<?php echo $this->_tpl_vars['navStrings']['start']; ?>
&nbsp;&nbsp;-->
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pageData']['urls']['prevPage']): ?>
							<!--smith-->
							 &nbsp;&nbsp;
								<a  id='listViewPrevButton_bottom' title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['prev']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['prevPage']; ?>
"'<?php endif; ?>>
																<i class="fa fa-angle-left fa-2x pagination-icon-bottom" aria-hidden="true"></i>

								</a>
								 &nbsp;&nbsp;
							
								<!--<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['prev']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['prevPage']; ?>
"'<?php endif; ?>>
									<?php echo smarty_function_sugar_getimage(array('name' => 'previous','ext' => ".png",'other_attributes' => 'align="absmiddle" border="0" ','alt' => ($this->_tpl_vars['alt_prev'])), $this);?>

								</button>-->
								<!--<a href='<?php echo $this->_tpl_vars['pageData']['urls']['prevPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['prev']; ?>
, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> ><?php echo smarty_function_sugar_getimage(array('name' => 'previous','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['previous'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
&nbsp;<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
</a>&nbsp;-->
							<?php else: ?>
							<!--smith-->
							&nbsp;&nbsp;
								<a id="listViewPrevButton_bottom" title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' disabled='disabled' style="color:#6d6d6d">
																<i class="fa fa-angle-left fa-2x pagination-icon-bottom-disabled" aria-hidden="true"></i>
								</a>
								 &nbsp;&nbsp;
							
								<!--<button type='button' class='button' disabled title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
'>
									<?php echo smarty_function_sugar_getimage(array('name' => 'previous_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['previous'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>

								</button>-->
								<!--<?php echo smarty_function_sugar_getimage(array('name' => 'previous_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['previous'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
&nbsp;<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
&nbsp;-->
							<?php endif; ?>
								<span class='pageNumbers'>(<?php if ($this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage'] == 0): ?>0<?php else:  echo $this->_tpl_vars['pageData']['offsets']['current']+1;  endif; ?> - <?php echo $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']; ?>
 <?php echo $this->_tpl_vars['navStrings']['of']; ?>
 <?php if ($this->_tpl_vars['pageData']['offsets']['totalCounted']):  echo $this->_tpl_vars['pageData']['offsets']['total'];  else:  echo $this->_tpl_vars['pageData']['offsets']['total'];  if ($this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage'] != $this->_tpl_vars['pageData']['offsets']['total']): ?>+<?php endif;  endif; ?>)</span>
							<?php if ($this->_tpl_vars['pageData']['urls']['nextPage']): ?>
							<!--smith-->
							&nbsp;&nbsp;
								<a id="listViewNextButton_bottom" <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['next']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['nextPage']; ?>
"'<?php endif; ?>>
																<i class="fa fa-angle-right fa-2x pagination-icon-bottom" aria-hidden="true"></i>
								</a>
								 &nbsp;&nbsp;
							
								<!--<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['next']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['nextPage']; ?>
"'<?php endif; ?>>
									<?php echo smarty_function_sugar_getimage(array('name' => 'next','ext' => ".png",'other_attributes' => 'align="absmiddle" border="0" ','alt' => ($this->_tpl_vars['alt_next'])), $this);?>

								</button>-->
								<!--&nbsp;<a href='<?php echo $this->_tpl_vars['pageData']['urls']['nextPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['next']; ?>
, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> ><?php echo $this->_tpl_vars['navStrings']['next']; ?>
&nbsp;<?php echo smarty_function_sugar_getimage(array('name' => 'next','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['next'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
</a>&nbsp;-->
							<?php else: ?>
							<!--smith-->
							 &nbsp;&nbsp;
								<a id="listViewNextButton_bottom" title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' disabled='disabled' style="color:#6d6d6d">
																<i class='fa fa-angle-right fa-2x pagination-icon-bottom-disabled' aria-hidden='true'></i>
								</a>
								 &nbsp;&nbsp;
							
								<!--<button type='button' class='button' title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' disabled>
									<?php echo smarty_function_sugar_getimage(array('name' => 'next_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['next'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>

								</button>-->
								<!--&nbsp;<?php echo $this->_tpl_vars['navStrings']['next']; ?>
&nbsp;<?php echo smarty_function_sugar_getimage(array('name' => 'next_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['next'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
-->
							<?php endif; ?>
							<?php if ($this->_tpl_vars['pageData']['urls']['endPage'] && $this->_tpl_vars['pageData']['offsets']['total'] != $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']): ?>
							<!--smith-->
							&nbsp;&nbsp;
								<a id="listViewEndButton_bottom" <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks("end", "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['endPage']; ?>
"'<?php endif; ?>>
																<i class="fa fa-angle-double-right fa-2x pagination-icon-bottom" aria-hidden="true"></i>

								</a>
								 &nbsp;&nbsp;	
							
								<!--<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['end']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['endPage']; ?>
"'<?php endif; ?>>
									<?php echo smarty_function_sugar_getimage(array('name' => 'end','ext' => ".png",'other_attributes' => 'align="absmiddle" border="0" ','alt' => ($this->_tpl_vars['alt_end'])), $this);?>

								</button>-->
								<!--<a href='<?php echo $this->_tpl_vars['pageData']['urls']['endPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['end']; ?>
, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> ><?php echo $this->_tpl_vars['navStrings']['end']; ?>
&nbsp;<?php echo smarty_function_sugar_getimage(array('name' => 'end','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['end'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
</a></td>-->
							<?php elseif (! $this->_tpl_vars['pageData']['offsets']['totalCounted'] || $this->_tpl_vars['pageData']['offsets']['total'] == $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']): ?>
								<!--smith-->
								&nbsp;&nbsp;							
							<a id="listViewEndButton_bottom" disabled='disabled' title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' style="color:#6d6d6d">
							 								 	<i class="fa fa-angle-double-right fa-2x pagination-icon-bottom-disabled" aria-hidden="true"></i>

							 	</a>
								 &nbsp;&nbsp;
								
								<!--<button type='button' class='button' disabled title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
'>
								 	<?php echo smarty_function_sugar_getimage(array('name' => 'end_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['end'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>

								</button>-->
								<!--&nbsp;<?php echo $this->_tpl_vars['navStrings']['end']; ?>
&nbsp;<?php echo smarty_function_sugar_getimage(array('name' => 'end_off','ext' => ".png",'alt' => $this->_tpl_vars['navStrings']['end'],'other_attributes' => 'align="absmiddle" border="0" '), $this);?>
-->
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<?php if ($this->_tpl_vars['prerow']): ?>
	<script>
	<?php echo 'function lvg_dtails(id){return SUGAR.util.getAdditionalDetails( \'';  echo $this->_tpl_vars['module'];  echo '\',id, \'adspan_\'+id);}'; ?>

	</script>
	<?php endif;  else: ?>
	<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_POPULATE_ONLY']; ?>

<?php endif; ?>

	</form>