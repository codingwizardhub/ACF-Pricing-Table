			<!-- Pricing Table -->
				
			<div class="container">
				<section class="hosting-plan">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<?php if(have_rows('hosting_plans')):?>
										<?php while(have_rows('hosting_plans')): the_row(); ?>
										<div class="col-md-4 hosting-plans-col">
											<div class="hosting-plan-box">
												<h3><?php the_sub_field('hosting_plan_title');?></h3>
												<p><?php the_sub_field('hosting_plan_description');?></p>
												<h3><span class="dem">$</span><?php the_sub_field('hosting_plan_price');?></h3>
												<?php $hosting_btn_1 = get_sub_field('hosting_plan_button_1');?>
												<a class="pricing-btn" href="<?php echo $hosting_btn_1['url'];?>" target="<?php echo $hosting_btn_1['target'];?>"><?php echo $hosting_btn_1['title'];?></a>
											<?php if(have_rows('hostng_plan_features')):?>
												<?php while(have_rows('hostng_plan_features')): the_row(); ?>
													<p><?php the_sub_field('hosting_plan_features_list');?></p>
												<?php endwhile;?>
											<?php endif;?>
												<?php $hosting_btn_2 = get_sub_field('hosting_plan_button_2');?>
												<a class="pricing-btn" href="<?php echo $hosting_btn_2['url'];?>" target="<?php echo $hosting_btn_2['target'];?>"><?php echo $hosting_btn_2['title'];?></a>
											</div>
										</div>
										<?php endwhile;?>
									<?php endif;?>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
				
			<!-- Pricing Table -->