$(function (){
	var menu = $("#menu").val();
	$(".list-group .active").nextAll().hide();
	if(menu != ""){
		$(".list-group ."+menu).nextAll().show();
	}
	$(".list-group .active").click(function (){
		$(this).nextAll().toggle();
		$(".list-group .active").not($(this)).nextAll().hide();
	});

	//KindEditor
	var editor;
	var uploadUrl = $("textarea[name='content']").attr("accesskey");
	KindEditor.ready(function(K) {
		editor = K.create('textarea[name="content"]', {
			resizeType : 1,
			uploadJson : uploadUrl,
			allowPreviewEmoticons : false,
			items : [
				'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				'insertunorderedlist', '|', 'emoticons', 'image', 'link']
		});
	});
});