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
{if $posts}
    <div class="block {$blog_config.YBC_BLOG_FREE_RTL_CLASS|escape:'html':'UTF-8'} ybc_block_featured {if isset($page) && $page}page_{$page|escape:'html':'UTF-8'}{else}page_blog{/if} {if isset($page) && $page=='home'}{if isset($blog_config.YBC_BLOG_FREE_HOME_POST_TYPE) && $blog_config.YBC_BLOG_FREE_HOME_POST_TYPE=='default' || count($posts)<=1}ybc_block_default{else}ybc_block_slider{/if}{else}{if isset($blog_config.YBC_BLOG_FREE_SIDEBAR_POST_TYPE) && $blog_config.YBC_BLOG_FREE_SIDEBAR_POST_TYPE=='default' || count($posts)<=1}ybc_block_default{else}ybc_block_slider{/if}{/if}">
        <h4 class="h1 products-section-title text-uppercase">{l s='Featured posts' d='Shop.Theme.Actions'}</h4>
        <ul class="block_content">
            {foreach from=$posts item='post'}
                <li> 
                    {if $post.thumb}<a class="ybc_item_img" href="{$post.link|escape:'html':'UTF-8'}"><img src="{$post.thumb|escape:'html':'UTF-8'}" alt="{$post.title|escape:'html':'UTF-8'}" title="{$post.title|escape:'html':'UTF-8'}" /></a>{/if}
                    <div class="ybc-blog-latest-post-content">
                        <a class="ybc_title_block" href="{$post.link|escape:'html':'UTF-8'}">{$post.title|escape:'html':'UTF-8'}</a>
                        <div class="ybc-blog-sidear-post-meta">
                            {if isset($post.categories) && $post.categories}
                                <div class="ybc-blog-categories">
                                    {assign var='ik' value=0}
                                    {assign var='totalCat' value=count($post.categories)}                        
                                    <div class="be-categories">
                                        <span class="be-label">{l s='Posted in' d='Shop.Theme.Actions'}: </span>
                                        {foreach from=$post.categories item='cat'}
                                            {assign var='ik' value=$ik+1}                                        
                                            <a href="{$cat.link|escape:'html':'UTF-8'}">{ucfirst($cat.title)|escape:'html':'UTF-8'}</a>{if $ik < $totalCat}<span class="comma">, </span>{/if}
                                        {/foreach}
                                    </div>
                                </div>
                            {/if}
                            <span class="post-date">
                                {l s='Post on ' d='Shop.Theme.Actions'}
                                {if isset($blog_config.YBC_BLOG_FREE_DATE_FORMAT)&&$blog_config.YBC_BLOG_FREE_DATE_FORMAT}
                                    <span>{date($blog_config.YBC_BLOG_FREE_DATE_FORMAT, strtotime($post.datetime_added))|escape:'html':'UTF-8'}</span>
                                {else}
                                    {date('F jS Y', strtotime($post.datetime_added))|escape:'html':'UTF-8'}
                                {/if}
                            </span>
                        </div>
                        
                        {if $allowComments || $show_views || $allow_like} 
                            <div class="ybc-blog-latest-toolbar">
                                {if $show_views}
                                    <span class="ybc-blog-latest-toolbar-views">
                                        {$post.click_number|intval} {if $post.click_number!=1}
                                            <span>{l s='views' d='Shop.Theme.Actions'}</span>
                                        {else}
                                            <span>{l s='view' d='Shop.Theme.Actions'}</span>
                                        {/if}
                                    </span> 
                                {/if}       
                                {if $allowComments}
                                    <span class="ybc-blog-latest-toolbar-comments">{$post.comments_num|intval}
                                    {if $post.comments_num!=1}<span>
                                    {l s='comments' d='Shop.Theme.Actions'}</span>{else}
                                    <span>{l s='comment' d='Shop.Theme.Actions'}</span>{/if}
                                    </span> 
                                {/if}                             
                                {if $allow_like}
                                    <span title="{if $post.liked}{l s='Liked' d='Shop.Theme.Actions'}{else}{l s='Like this post' d='Shop.Theme.Actions'}{/if}" class="ybc-blog-like-span ybc-blog-like-span-{$post.id_post|intval} {if $post.liked}active{/if}" data-id-post="{$post.id_post|intval}">                        
                                        <span class="ben_{$post.id_post|intval}">{$post.likes|intval}</span>
                                        <span class="blog-post-like-text blog-post-like-text-{$post.id_post|intval}">{l s='Liked' d='Shop.Theme.Actions'}</span>
                                 
                                    </span> 
                                {/if}
                                
                            </div>
                        {/if}                           
                        {if $post.short_description}
                            <div class="blog_description">
                                {if isset($blog_config.YBC_BLOG_FREE_POST_EXCERPT_LENGTH) && (int)$blog_config.YBC_BLOG_FREE_POST_EXCERPT_LENGTH>0}
                                    {$post.short_description|strip_tags:'UTF-8'|truncate:(int)$blog_config.YBC_BLOG_FREE_POST_EXCERPT_LENGTH:'...'|escape:'html':'UTF-8'}
                                {else}
                                    {$post.short_description|strip_tags:'UTF-8'|escape:'html':'UTF-8'}
                                {/if}
                            </div>
                        {elseif $post.description}
                            <div class="blog_description">
                                {if isset($blog_config.YBC_BLOG_FREE_POST_EXCERPT_LENGTH) && (int)$blog_config.YBC_BLOG_FREE_POST_EXCERPT_LENGTH>0}
                                    {$post.description|strip_tags:'UTF-8'|truncate:120:'...'|escape:'html':'UTF-8'}
                                {else}
                                    {$post.description|strip_tags:'UTF-8'|escape:'html':'UTF-8'}
                                {/if}                                
                            </div>
                        {/if}
                        <a class="read_more" href="{$post.link|escape:'html':'UTF-8'}">{l s='Read more ...' d='Shop.Theme.Actions'}</a>
                        
                    </div>
                </li>
            {/foreach}
        </ul>
        <div class="clear"></div>
    </div>
    
{/if}