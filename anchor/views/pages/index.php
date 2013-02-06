<?php echo $header; ?>

<script src="<?=admin_asset( 'js/jquery-1.9.0.js' );?>"></script>
<script src="<?=admin_asset( 'js/jquery-ui.js' );?>"></script>
<script>
	$( document ).ready(function(){
		$( '#pages' ).sortable({
			deactivate: function( ui, event )
			{
				$.post( '/admin/pages/reorder', $( '.list' ).sortable( 'serialize' ) );
			}
		});
	});
</script>

<hgroup class="wrap">
	<h1><?php echo __('pages.pages', 'Pages'); ?></h1>

	<?php if($pages->count): ?>
	<nav>
		<?php echo Html::link(admin_url('pages/add'), __('pages.create_page', 'Create a new page'), array('class' => 'btn')); ?>
	</nav>
	<?php endif; ?>
</hgroup>

<section class="wrap">
	<?php echo $messages; ?>

	<?php if($pages->count): ?>
	<ul id="pages" class="list">
		<?php foreach($pages->results as $page): ?>
		<li id="page_<?=$page->id;?>">
			<a href="<?php echo admin_url('pages/edit/' . $page->id); ?>">
				<strong><?php echo $page->name; ?></strong>

				<span>
					<?php echo $page->slug; ?>

					<em class="status <?php echo $page->status; ?>"
						title="This page is currently <?php echo $page->status; ?>"><?php echo ucfirst($page->status); ?></em>
				</span>
			</a>
		</li>
		<?php endforeach; ?>
	</ul>

	<aside class="paging"><?php echo $pages->links(); ?></aside>

	<?php else: ?>
	<aside class="empty pages">
		<span class="icon"></span>
		<?php echo __('comments.nopages_desc', 'You don’t have any pages.'); ?><br>

		<?php echo Html::link(admin_url('pages/add'), __('pages.create_page', 'Create a new page'), array('class' => 'btn')); ?>
	</aside>
	<?php endif; ?>
</section>

<?php echo $footer; ?>
