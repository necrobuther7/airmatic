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
<article>
  <div class="card">
    <div class="pack-product-container">
      <div class="thumb-mask">
        <div class="mask">
          <img
            src = "{$product.cover.medium.url|escape:'html':'UTF-8'}"
            alt = "{$product.cover.legend|escape:'html':'UTF-8'}"
            data-full-size-image-url = "{$product.cover.large.url|escape:'html':'UTF-8'}"
          >
        </div>
      </div>
      <div class="pack-product-name">
        {$product.name|escape:'html':'UTF-8'}
      </div>
      <div class="pack-product-price">
        <strong>{$product.price|escape:'html':'UTF-8'}</strong>
      </div>
      <div class="pack-product-quantity">
        <span>x {$product.pack_quantity|escape:'html':'UTF-8'}</span>
      </div>
    </div>
  </div>
</article>
