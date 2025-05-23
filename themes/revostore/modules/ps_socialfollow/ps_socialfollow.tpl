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
{block name='block_social'}
  <div class="block-social col-md-12 col-sm-12">
    <h4 class="title_social_follow">
        {l s='Follow us: ' d='Shop.Theme.Actions'}
    </h4>
    <ul>
      {foreach from=$social_links item='social_link'}
        <li class="{$social_link.class|escape:'html':'UTF-8'}">
            <a href="{$social_link.url|escape:'html':'UTF-8'}" target="_blank">{$social_link.label|escape:'html':'UTF-8'}</a>
        </li>
      {/foreach}
    </ul>
  </div>
{/block}
