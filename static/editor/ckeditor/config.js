CKEDITOR.editorConfig = function( config )
{
	config.language	= 'zh-cn';
	config.height	= 400;
	config.skin		= 'v2';
	config.toolbar	=
	[
		['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
		['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
		['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		['Link','Unlink','Anchor'],
		['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','PasteFromWord'],
		'/',
		['Styles','Format','Font','FontSize'],
		['TextColor','BGColor'],
		['Maximize', 'ShowBlocks','-','Source','-','Undo','Redo']
	];
	config.protectedSource.push( /display[\s]*\:[\s]*none;?/gi );
};