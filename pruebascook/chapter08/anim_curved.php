<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter08/anim_curved.php');
$PAGE->requires->js('/pruebascook/chapter08/anim_curved.js', true);
echo $OUTPUT->header();
?>
<div id="anim-container" style="border:1px solid black;background-color:#0099FF;padding:10px;width:150px;margin:30px;">
<h1>Animation: Move</h1>
</div>
<?php
echo $OUTPUT->footer();
?>
