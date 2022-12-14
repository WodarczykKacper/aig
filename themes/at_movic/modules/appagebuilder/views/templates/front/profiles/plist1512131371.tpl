{* 
* @Module Name: AP Page Builder
* @Website: apollotheme.com - prestashop template provider
* @author Apollotheme <apollotheme@gmail.com>
* @copyright Apollotheme
* @description: ApPageBuilder is module help you can build content for your shop
*}
<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="product-image">
{block name='product_thumbnail'}
{if isset($cfg_product_list_image) && $cfg_product_list_image}
	<div class="leo-more-info" data-idproduct="{$product.id_product}"></div>
{/if}

{if $product.cover}
    {if isset($formAtts) && isset($formAtts.lazyload) && $formAtts.lazyload}

	    {if $lmobile_swipe && $isMobile}
		    <div class="product-list-images-mobile">
		    	<div>
		{/if}
			    	<a href="{$product.url}" class="thumbnail product-thumbnail">
					  <img
						class="img-fluid lazyOwl"
						src = ""
						data-src = "{$product.cover.bySize.kwadrat_img.url}"
						alt = "{$product.cover.legend}"
						data-full-size-image-url = "{$product.cover.large.url}"
						loading="lazy"
					  >
					  {if isset($cfg_product_one_img) && $cfg_product_one_img}
						<span class="product-additional" data-idproduct="{if $lmobile_swipe && $isMobile}0{else}{$product.id_product}{/if}"></span>
					  {/if}
					</a>
		{if $lmobile_swipe == 1 && $isMobile}			
				</div>
		    	{foreach from=$product.images item=image}
			    	{if $product.cover.bySize.home_default.url != $image.bySize.home_default.url}
			            <div>
					    	<a href="{$product.url}" class="thumbnail product-thumbnail">
			                    <img
			                      class="img-fluid thumb js-thumb {if $image.id_image == $product.cover.id_image} selected {/if}{if $aplazyload} lazy{/if}"
			                      data-src="{$image.bySize.kwadrat_img.url}"
			                      alt="{$image.legend}"
			                      title="{$image.legend}"
			                      loading="lazy"
			                      itemprop="image"
			                    >
			                </a>
						</div>
					{/if}
				{/foreach}
			<div>
		{/if}
    {else}
    	{if $lmobile_swipe == 1 && $isMobile}
		    <div class="product-list-images-mobile">
		    	<div>
		{/if}
		    	<a href="{$product.url}" class="thumbnail product-thumbnail">
				  <img
					class="img-fluid"
					src = "{$product.cover.bySize.kwadrat_img.url}"
					alt = "{$product.cover.legend}"
					data-full-size-image-url = "{$product.cover.large.url}"
					loading="lazy"
				  >
				  {if isset($cfg_product_one_img) && $cfg_product_one_img}
					<span class="product-additional" data-idproduct="{if $lmobile_swipe && $isMobile}0{else}{$product.id_product}{/if}"></span>
				  {/if}
				</a>

		{if $lmobile_swipe == 1 && $isMobile}
				</div>
		    	{foreach from=$product.images item=image}
			    	{if $product.cover.bySize.home_default.url != $image.bySize.home_default.url}
			            <div>
					    	<a href="{$product.url}" class="thumbnail product-thumbnail">
			                    <img
			                      class="thumb js-thumb img-fluid {if $image.id_image == $product.cover.id_image} selected {/if}"
			                      src="{$image.bySize.kwadrat_img.url}"
			                      alt="{$image.legend}"
			                      title="{$image.legend}"
			                      itemprop="image"
								  loading="lazy"
			                    >
			                </a>
						</div>	
					{/if}
				{/foreach}
			</div>
		{/if}
    {/if}
{else}
  <a href="{$product.url}" class="thumbnail product-thumbnail leo-noimage">
 <img class="img-fluid" loading="lazy" {if $aplazyload}class="lazy" data-src{else}src{/if} = "{$urls.no_picture_image.bySize.kwadrat_img.url}"
 >
  </a>
{/if}
  
{/block}


<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
{block name='product_flags'}
<ul class="product-flags">
  {foreach from=$product.flags item=flag}
	<li class="product-flag {$flag.type}">{$flag.label}</li>
  {/foreach}
</ul>
{/block}
<div class="functional-buttons clearfix"></div></div>
    <div class="product-meta">
<!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
{block name='product_name'}
  <h3 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h3>
{/block}
</div>
  </div>
</article>
