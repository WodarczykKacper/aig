{* 
* @Module Name: Leo Feature
* @Website: leotheme.com.com - prestashop template provider
* @author Leotheme <leotheme@gmail.com>
* @copyright  2007-2018 Leotheme
* @description: Leo feature for prestashop 1.7: ajax cart, review, compare, wishlist at product list 
*}


<div id="leo_product_reviews_block_extra" class="no-print" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" {if ($nbReviews_product_extra == 0 && $too_early_extra == false && ($customer.is_logged || $allow_guests_extra)) || ($nbReviews_product_extra != 0)}{else}style="display: none;"{/if}>
	
		<div class="reviews_note clearfix" {if $nbReviews_product_extra == 0}style="display: none;"{/if}>
			
			<span>{l s='Rating' mod='leofeature'}&nbsp;</span>
			<div class="star_content clearfix">
				{section name="i" start=0 loop=5 step=1}
					{if $averageTotal_extra le $smarty.section.i.index}
						<div class="star"></div>
					{else}
						<div class="star star_on"></div>
					{/if}
				{/section}
				<meta itemprop="worstRating" content = "0" />
				<meta itemprop="ratingValue" content = "{if isset($ratings_extra.avg)}{$ratings_extra.avg|round:1|escape:'html':'UTF-8'}{else}{$averageTotal_extra|round:1|escape:'html':'UTF-8'}{/if}" />
				<meta itemprop="bestRating" content = "5" />
				<meta itemprop="reviewCount" content="{if $nbReviews_product_extra}{$nbReviews_product_extra}{else}1{/if}" />
			</div>
		</div>
	

	<ul class="reviews_advices">
		{if $nbReviews_product_extra != 0}
			<li>
				<a href="javascript:void(0)" class="read-review">					
					<i class="material-icons">&#xE0B9;</i>
					{l s='Read reviews' mod='leofeature'} (<span itemprop="reviewCount">{$nbReviews_product_extra}</span>)
				</a>
			</li>
		{/if}
		{if ($too_early_extra == false AND ($customer.is_logged OR $allow_guests_extra))}
			<li class="{if $nbReviews_product_extra != 0}last{/if}">
				<a class="open-review-form" href="javascript:void(0)" data-id-product="{$id_product_review_extra}" data-is-logged="{$customer.is_logged}" data-product-link="{$link_product_review_extra}">
					<i class="material-icons">&#xE150;</i>
					{l s='Write a review' mod='leofeature'}
				</a>
			</li>
		{/if}
	</ul>
</div>

