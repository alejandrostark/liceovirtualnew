<?php
require_once(dirname(__FILE__) . '/../../config.php');
$PAGE->set_context(get_context_instance(CONTEXT_SYSTEM));
$PAGE->set_url('/pruebascook/chapter08/anim_fadein.php');
$PAGE->requires->js('/pruebascook/chapter08/anim_fadein.js', true);
echo $OUTPUT->header();
?>
<div id="anim-container" style="border:1px solid black;background-color:#0099FF;float:left;padding:30px;opacity:0;">
<h1>Animation: Fade-in</h1>
</div>
<?php
echo $OUTPUT->footer();
?>

