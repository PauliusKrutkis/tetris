<?php $editor_id = $this->playground['mce']; ?>
<label for="<?php echo $editor_id ?>"><?php echo $heading ?></label>
<?php wp_editor(stripslashes($content), $editor_id, array('quicktags' => false, 'wpautop' => false)); ?>

<script type="text/javascript">
var editorStr = editorSettings.replace(/hidden_editor/gi, '<?php echo $editor_id; ?>');
var editorJSON = JSON.parse(editorStr);
tinymce.execCommand('mceRemoveEditor', true, '<?php echo $editor_id; ?>');
tinymce.init(editorJSON.mceInit['<?php echo $editor_id; ?>']);
quicktags(editorJSON.qtInit['<?php echo $editor_id; ?>']);
</script>
