<?php
// source: C:\xampp\htdocs\chat_nette\app\presenters/templates/Debate/../components/room/printRooms.latte

class Template88ff84e0d95f8c909607b82c28227dbf extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('864b5733fe', 'html')
;
// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
$iterations = 0; foreach ($rooms as $room) { ?><div class="post">                
    <li <?php if ($room->id_rooms == $localRoom->id_rooms) { ?> class="current_room" <?php } ?>>
        <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Debate:room", array($room->id_rooms)), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($room->title, ENT_NOQUOTES) ?></a>   
    </li>
</div>
<?php $iterations++; } ?>
<div class="post"><li><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:create"), ENT_COMPAT) ?>
">►</a></li></div><?php
}}