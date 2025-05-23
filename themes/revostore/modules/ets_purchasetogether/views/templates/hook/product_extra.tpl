{*
* 2007-2024 ETS-Soft
*
* NOTICE OF LICENSE
*
* This file is not open source! Each license that you purchased is only available for 1 wesite only.
* If you want to use this file on more websites (or projects), you need to purchase additional licenses. 
* You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
* 
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs, please contact us for extra customization service at an affordable price
*
*  @author ETS-Soft <etssoft.jsc@gmail.com>
*  @copyright  2007-2024 ETS-Soft
*  @license    Valid for 1 website (or project) for each purchase of license
*  International Registered Trademark & Property of ETS-Soft
*}
<div id="product-purchasetogether" class="{if isset($is17) && !$is17}panel product-tab{/if}" data-url-ajax="{$url_ajax|escape:'html':'UTF-8'}">
    <input name="submitted_tabs[]" value="PurchaseTogether" type="hidden" />
    {if isset($is17) && $is17}<input name="id_product" value="{$product->id|intval}" type="hidden" />{/if}
    <h3>{l s='Frequently purchased together' d='Shop.Theme.Actions'}</h3>
    <div class="form-group">
		<label class="control-label col-lg-3" for="product_autocomplete_input_ets">
			<span class="label-tooltip" data-toggle="tooltip"
			title="{l s='You can indicate existing products as purchase for this product.' d='Shop.Theme.Actions'}">
			{l s='Frequently purchased together products' d='Shop.Theme.Actions'}
			</span>
		</label>
		<div class="col-lg-9">
			<input type="hidden" name="inputPurchaseTogether" id="inputPurchaseTogether" value="{if $purchase_togethers}{foreach from=$purchase_togethers item=purchase}{$purchase.id_product|escape:'html':'UTF-8'}-{if $purchase.id_product_attribute}{$purchase.id_product_attribute|escape:'html':'UTF-8'}{else}0{/if},{/foreach}{/if}" />
			<div id="ajax_choose_product">
				<div class="input-group">
					<input type="text" id="product_autocomplete_input_ets" class="ac_input form-control autocomplete search m-b-1 ui-autocomplete-input" name="product_autocomplete_input_ets" autocomplete="off" />
					{if isset($is17) && !$is17}<span class="input-group-addon"><i class="icon-search"></i></span>{/if}
				</div>
                <div class="result-ets">
                    <ul class="item_ets"></ul>
                </div>
			</div>
			<div id="divPurchaseTogether">
			{if $purchase_togethers}
				{foreach from=$purchase_togethers item=purchase}
				<div class="form-control-static">
					<button type="button" class="btn btn-default delPurchaseTogether" data-id-product="{$purchase.id_product|intval}" data-id-product-attribute="{if $purchase.id_product_attribute}{$purchase.id_product_attribute|intval}{else}0{/if}" name="{$purchase.id_product|intval}">
						<span class="purchase_icon_close"></span>
					</button>
                    {if $purchase.image}<img src="{$purchase.image|escape:'html':'UTF-8'}" alt="{$purchase.name|escape:'html':'UTF-8'}" width="80px" height="auto" />{/if}
					<span class="productName">{$purchase.id_product|intval}-{$purchase.name|escape:'html':'UTF-8'}{if !empty($purchase.ref)}&nbsp;{l s='(ref: %s)' sprintf=$purchase.ref}{/if}</span>
				</div>
				{/foreach}
			{/if}
			</div>
		</div>
	</div>
</div>