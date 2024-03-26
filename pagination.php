<style type="text/css">
	.paginacao{padding: 50px 0px;}
	.paginacao .page-item span{
		color: #242323;
		font-size: 1rem;
    line-height: 3.5rem;
    font-weight: 400;
    text-align: justify;
	}
	
	.paginacao .page-item a.page-numbers { color:#DBB569;font-size: 1rem;
    line-height: 3.5rem;
    font-weight: 400;
    text-align: justify;
	padding: 25px;
	margin-left: 50px;
	}
	span.page-numbers.current{margin-left: 50px; padding: 25px;}
</style>


<section class="paginacao">

					<div class="container">

						<div class="row">

							<div class="col-xs-12 col-sm-12">

								

								<?php  wordpress_pagination();  ?>

							

							</div>

						</div>
	</div>
	</section>