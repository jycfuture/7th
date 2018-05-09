<?php /* Smarty version 2.6.26, created on 2012-08-14 09:26:29
         compiled from info/class/setting.htm */ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/global.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
images/main.css">
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['SKIN_PATH']; ?>
js/global.js"></script>
</head>

<body>
<div class="wrap inner clearfix">
	<div class="container">
		<div class="tips">
			<a href="<?php echo $this->_tpl_vars['refreshUrl']; ?>
" class="lnkReturn">Return to list</a> 
		</div>
		<table class="tabTable" id="tableTab">
			<tr>
				<td><a href="?con=admin&ctl=info/class&act=edit&id=<?php echo $this->_tpl_vars['data']['id']; ?>
"><em class="tip" tips="Can configure advanced parameters limit">Basic parameters</em></a></td>
				<td><a class="current" href="#"><em class="tip" tips="Advanced parameter controls the basic parameters can be configured in the form item. Note: The classification is created, senior parameters inherited from the parent classification">Advanced Parameters</em></a></td>
			</tr>
		</table>
		<form action="?con=admin&ctl=info/class&act=setting&id=<?php echo $this->_tpl_vars['data']['id']; ?>
" method="post">
			<table class="editTable">
				<tr class="editHdTr">
					<td colspan="2">Classification of high-level parameter settings</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">List of each page the amount of information</td>
					<td class="editRtTd">
						<input type="text" name="data[perPageCount]" size="10" maxlength="3" class="text" value="<?php echo $this->_tpl_vars['data']['perPageCount']; ?>
" />
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Information thumbnail size</td>
					<td class="editRtTd">
						<input type="text" name="other[pic1width]" size="10" maxlength="3" class="text" value="<?php echo $this->_tpl_vars['data']['other']['pic1width']; ?>
" /> Width 
						<input type="text" name="other[pic1height]" size="10" maxlength="3" class="text" value="<?php echo $this->_tpl_vars['data']['other']['pic1height']; ?>
" /> Height
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Information enlarge size</td>
					<td class="editRtTd">
						<input type="text" name="other[pic2width]" size="10" maxlength="3" class="text" value="<?php echo $this->_tpl_vars['data']['other']['pic2width']; ?>
" /> Width 
						<input type="text" name="other[pic2height]" size="10" maxlength="3" class="text" value="<?php echo $this->_tpl_vars['data']['other']['pic2height']; ?>
" /> Height
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Information pics thumbnail size</td>
					<td class="editRtTd">
						<input type="text" name="other[infopic1width]" size="10" maxlength="3" class="text" value="<?php echo $this->_tpl_vars['data']['other']['infopic1width']; ?>
" /> Width 
						<input type="text" name="other[infopic1height]" size="10" maxlength="3" class="text" value="<?php echo $this->_tpl_vars['data']['other']['infopic1height']; ?>
" /> Height
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Information pics enlarge size</td>
					<td class="editRtTd">
						<input type="text" name="other[infopic2width]" size="10" maxlength="3" class="text" value="<?php echo $this->_tpl_vars['data']['other']['infopic2width']; ?>
" /> Width 
						<input type="text" name="other[infopic2height]" size="10" maxlength="3" class="text" value="<?php echo $this->_tpl_vars['data']['other']['infopic2height']; ?>
" /> Height
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">The type of information attachments</td>
					<td class="editRtTd">
						<input type="text" name="other[exts]" size="60" class="text" value="<?php echo $this->_tpl_vars['data']['other']['exts']; ?>
" />
						Note: multiple file types, please use the "|" separated empty by default to allow: jpg | png | gif | jpeg | rar | pdf
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd">Display mode</td>
					<td class="editRtTd">
						<?php $_from = $this->_tpl_vars['data']['displayModes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
							<input id="displayModes<?php echo $this->_tpl_vars['item'][0]; ?>
" name="displayModes[]" value="<?php echo $this->_tpl_vars['item'][0]; ?>
" type="checkbox"<?php if ($this->_tpl_vars['item'][2]): ?> checked<?php endif; ?> /><label for="displayModes<?php echo $this->_tpl_vars['item'][0]; ?>
"><?php echo $this->_tpl_vars['item'][1]; ?>
</label>
						<?php endforeach; endif; unset($_from); ?>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Control the basic parameters of the information classification can be configured item">Classification parameters</em></td>
					<td class="editRtTd">
						<input id="classhasDisplayMode" name="class[hasDisplayMode]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasDisplayMode']): ?> checked<?php endif; ?> /><label for="classhasDisplayMode">Display mode</label>
						<input id="classhasAlias" name="class[hasAlias]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasAlias']): ?> checked<?php endif; ?> /><label for="classhasAlias">Alias</label>
						<input id="classhasDomain" name="class[hasDomain]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasDomain']): ?> checked<?php endif; ?> /><label for="classhasDomain">Domain</label>
						<input id="classStyle" name="class[hasclassStyle]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasclassStyle']): ?> checked<?php endif; ?> /><label for="classStyle">Style</label>
						<input id="classhasUrl" name="class[hasUrl]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasUrl']): ?> checked<?php endif; ?> /><label for="classhasUrl">Link</label>
						<input id="classhasPageTitle" name="class[hasPageTitle]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasPageTitle']): ?> checked<?php endif; ?> /><label for="classhasPageTitle">Page title</label>
						<input id="classhasKeywords" name="class[hasKeywords]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasKeywords']): ?> checked<?php endif; ?> /><label for="classhasKeywords">Keyword</label>
						<input id="classhasDescription" name="class[hasDescription]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasDescription']): ?> checked<?php endif; ?> /><label for="classhasDescription">Description</label>
						<input id="classhasImageUrl" name="class[hasImageUrl]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasImageUrl']): ?> checked<?php endif; ?> /><label for="classhasImageUrl">Picture</label>
						<input id="classhasFiles" name="class[hasFiles]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasFiles']): ?> checked<?php endif; ?> /><label for="classhasFiles">Attachment</label>
						<input id="classhasIntro" name="class[hasIntro]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasIntro']): ?> checked<?php endif; ?> /><label for="classhasIntro">Introduction</label>
						<input id="classhasContent" name="class[hasContent]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasContent']): ?> checked<?php endif; ?> /><label for="classhasContent">Content</label>
						<br />
						<input id="classhasTemplate" name="class[hasTemplate]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['extend']['hasTemplate']): ?> checked<?php endif; ?> /><label for="classhasTemplate">Template</label>
					</td>
				</tr>
				<tr class="editTr">
					<td class="editLtTd"><em class="tip" tips="Control of all information in the classification of configuration items">Information Parameter</em></td>
					<td class="editor">
						<input id="hasTop" name="info[hasTop]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasTop']): ?> checked<?php endif; ?> /><label for="hasTop">Top</label>
						<input id="hasRecommended" name="info[hasRecommended]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasRecommended']): ?> checked<?php endif; ?> /><label for="hasRecommended">Recommend</label>
						<input id="hasHot" name="info[hasHot]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasHot']): ?> checked<?php endif; ?> /><label for="hasHot">Hot spot</label>
						<input id="hasView" name="info[hasView]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasView']): ?> checked<?php endif; ?> /><label for="hasView">Page Views</label>
						<input id="hasPageTitle" name="info[hasPageTitle]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasPageTitle']): ?> checked<?php endif; ?> /><label for="hasPageTitle">Page title</label>
						<input id="hasKeywords" name="info[hasKeywords]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasKeywords']): ?> checked<?php endif; ?> /><label for="hasKeywords">Keyword</label>
						<input id="hasDescription" name="info[hasDescription]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasDescription']): ?> checked<?php endif; ?> /><label for="hasDescription">Description</label>
						<input id="hasPublishdate" name="info[hasPublishdate]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasPublishdate']): ?> checked<?php endif; ?> /><label for="hasPublishdate">Published</label>
						<input id="hasSource" name="info[hasSource]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasSource']): ?> checked<?php endif; ?> /><label for="hasSource">Source</label>
						<br />
						<input id="hasAuthor" name="info[hasAuthor]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasAuthor']): ?> checked<?php endif; ?> /><label for="hasAuthor">Author</label>
						<input id="hasUrl" name="info[hasUrl]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasUrl']): ?> checked<?php endif; ?> /><label for="hasUrl">Link</label>
						<input id="hasTitleStyle" name="info[hasTitleStyle]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasTitleStyle']): ?> checked<?php endif; ?> /><label for="hasTitleStyle">Heading styles</label>
						<input id="hasAlias" name="info[hasAlias]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasAlias']): ?> checked<?php endif; ?> /><label for="hasAlias">Subtitle</label>
						<input id="hasImageUrl" name="info[hasImageUrl]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasImageUrl']): ?> checked<?php endif; ?> /><label for="hasImageUrl">Thumbnails</label>
						<input id="hasBigImageUrl" name="info[hasBigImageUrl]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasBigImageUrl']): ?> checked<?php endif; ?> /><label for="hasBigImageUrl">Enlarge</label>
						<input id="hasInfoPic" name="info[hasInfoPic]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasInfoPic']): ?> checked<?php endif; ?> /><label for="hasInfoPic">Infopics</label>
						<input id="hasFiles" name="info[hasFiles]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasFiles']): ?> checked<?php endif; ?> /><label for="hasFiles">Attachment</label>
						<br />
						<input id="hasIntro" name="info[hasIntro]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasIntro']): ?> checked<?php endif; ?> /><label for="hasIntro">Introduction</label>
						<input id="hasSourceHtml" name="info[hasSourceHtml]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasSourceHtml']): ?> checked<?php endif; ?> /><label for="hasSourceHtml">Source URL</label>
						<input id="hasContent" name="info[hasContent]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasContent']): ?> checked<?php endif; ?> /><label for="hasContent">Content</label>
						<input id="hasTags" name="info[hasTags]" value="1" type="checkbox"<?php if ($this->_tpl_vars['data']['info']['hasTags']): ?> checked<?php endif; ?> /><label for="hasTags">Tags</label>
					</td>
				</tr>
				<tr class="editFtTr">
					<td></td>
					<td>
						<input type="submit" value="" class="lnkSave" /> 
						<a href="<?php echo $this->_tpl_vars['refreshUrl']; ?>
" class="lnkReturn">Return to list</a> 
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>