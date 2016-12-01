<?php get_header(); ?>
<style type="text/css" media="screen">
	.row h3
	{
		background-color:LightGray;
		margin-bottom:0px;
		padding:5px;
	}
	.row h4{
		padding:4px;
		margin:-1px;
		border-top: 1pt solid LightGray ; 
		border-bottom: 1pt solid LightGray ;}
	#content
	{
		margin-bottom:100px;
	}
</style>
<div class="container bottom"> 
	<div id="content">
		<div class="row">
		<?php prpin_get_sidebar_single('left'); ?>
			<div class="<?php echo prpin_get_contentspan(); ?>">
				<?php	getPostByCategoryName('test'); ?>
					
			 </div>
		<?php prpin_get_sidebar_single('right'); ?>
	</div>
</div>	
</div>
  <div id="scroll-top"><a href="#"><i class="fa fa-chevron-up fa-3x"></i></a></div>
<?php get_footer(); ?>