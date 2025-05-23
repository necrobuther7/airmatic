/***
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
 * needs please contact us for extra customization service at an affordable price
 *
 *  @author ETS-Soft <etssoft.jsc@gmail.com>
 *  @copyright  2007-2024 ETS-Soft
 *  @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */
$(document).ready(function(){
    $('#ybc-blog-capcha-refesh').click(function(){
        originalCapcha = $('#ybc-blog-capcha-img').attr('src');
        originalCode = $('#ybc-blog-capcha-img').attr('rel');
        newCode = Math.random();
        $('#ybc-blog-capcha-img').attr('src', originalCapcha.replace(originalCode,newCode));
        $('#ybc-blog-capcha-img').attr('rel', newCode);
    });
    $('.blog_rating_star').click(function(){
        var rating = parseInt($(this).attr('rel'));
        $('.blog_rating_star').removeClass('star_on');
        $('#blog_rating').val(rating);
        for(i = 1; i<= rating; i++)
        {
            $('.blog_rating_star_'+i).addClass('star_on');
        }
    });
    
    if($('#ybc_specificprices').length != 0){
        $('.homeblog_wrapper').addClass('custom_blog_half_width col-sm-12 col-md-6 col-lg-6');
    } else {
        $('.homeblog_wrapper').addClass('custom_blog_full_width col-sm-12 col-xs-12');
    }
    
    $('.ybc-block-comment-report').click(function(){
        if(!confirm(ybc_blog_free_report_warning))
            return false;
        btnObj = $(this);
        btnObj.addClass('active');
        $.ajax({
            url : ybc_blog_free_report_url,
            data : {
                id_comment : btnObj.attr('rel')
            },
            dataType: 'json',
            type : 'post',
            success: function(json){
                if(json['success'])
                   btnObj.remove();
                else
                {
                    alert(json['error']);
                }
                btnObj.removeClass('active'); 
            },
            error: function(){
                alert(ybc_blog_free_error);
                btnObj.removeClass('active'); 
            }                       
        });
    });
    
    $('.ybc-blog-like-span').click(function(){        
        btnObj = $(this);        
        if(!btnObj.hasClass('active'))
        {
            $('.ybc-blog-like-span-'+btnObj.attr('data-id-post')).addClass('active');
            $.ajax({
                url : ybc_blog_free_like_url,
                data : {
                    id_post : btnObj.attr('data-id-post')
                },
                dataType: 'json',
                type : 'post',
                success: function(json){
                    if(json['success'])
                    {    
                        $('.ben_'+btnObj.attr('data-id-post')).text(json['likes']);   
                    }                       
                    else
                    {
                        $('.ybc-blog-like-span-'+btnObj.attr('data-id-post')).removeClass('active');
                        alert(json['error']);
                    }                   
                },
                error: function(){                    
                    $('.ybc-blog-like-span-'+btnObj.attr('data-id-post')).removeClass('active'); 
                    alert(ybc_like_error);             
                }                       
            });   
        }        
    });    
    
    if ($('.page_home.ybc_block_slider:not(.ybc_block_latest) ul').length > 0)
    	$('.page_home.ybc_block_slider:not(.ybc_block_latest) ul').owlCarousel({            
            items : 4,
            responsive : {
                    0 : {
                        items : 1
                    },
                    480 : {
                        items : 2
                    },
                    768 : {
                        items : 3
                    },
                    992 : {
                        items : 3
                    },
                    1199 : {
                        items : 4
                    }
                },
            nav : true,  
            loop: $(".page_home.ybc_block_slider:not(.ybc_block_latest) ul li").length > 1,
            rewindNav : false,
            margin:30,
            dots : false,         
            navText: ['', ''],  
            callbacks: true,  
        });
        
     if ($('.custom_blog_half_width .page_home.ybc_block_slider.ybc_block_latest .block_content').length > 0)
    	$('.custom_blog_half_width .page_home.ybc_block_slider.ybc_block_latest .block_content').owlCarousel({            
            items : 1,
            nav : true,  
            loop: $(".page_home.ybc_block_slider.ybc_block_latest .block_content .group_blog_item").length > 1,
            rewindNav : false,
            margin:10,
            dots : false,         
            navText: ['', ''],  
            callbacks: true,  
        });
     if ($('.custom_blog_full_width .page_home.ybc_block_slider.ybc_block_latest .block_content').length > 0)
    	$('.custom_blog_full_width .page_home.ybc_block_slider.ybc_block_latest .block_content').owlCarousel({            
            items : 2,
            nav : true,  
            loop: $(".page_home.ybc_block_slider.ybc_block_latest .group_blog_item").length > 2,
            rewindNav : false,
            responsive : {
                    0 : {
                        items : 1
                    },
                    992 : {
                        items : 2
                    },
                },
            margin:10,
            dots : false,         
            navText: ['', ''],  
            callbacks: true,  
        });
     if ($('.page_home_gallery.ybc_block_slider ul').length > 0)
    	$('.page_home_gallery.ybc_block_slider ul').owlCarousel({            
            items : 6,
            responsive : {
                    0 : {
                        items : 3
                    },
                    480 : {
                        items : 4
                    },
                    768 : {
                        items : 5
                    },
                    992 : {
                        items : 6
                    }
                },
            nav : true,  
            loop: $(".page_home_gallery.ybc_block_slider ul li").length > 1,
            rewindNav : false,
            margin:30,
            dots : false,         
            navText: ['', ''],  
            callbacks: true,  
        });
        
     // page blog
     
     
     if ($('.page_blog.ybc_block_slider ul').length > 0)
    	$('.page_blog.ybc_block_slider ul').owlCarousel({            
            items : 1,
            nav : true,  
            loop: $(".page_blog.ybc_block_slider ul li").length > 1,
            rewindNav : false,
            dots : false,     
            margin: 30,    
            navText: ['', ''],  
            callbacks: true,  
        });
     
     if ($('.page_blog_gallery.ybc_block_slider ul').length > 0)
    	$('.page_blog_gallery.ybc_block_slider ul').owlCarousel({            
            items : 3,
            nav : true,  
            loop: $(".page_blog_gallery.ybc_block_slider ul li").length > 1,
            rewindNav : false,
            margin:10,
            dots : false,         
            navText: ['', ''],  
            callbacks: true,  
        });
     
        if ($('.ybc-blog-related-products-wrapper .ybc_related_products_type_carousel').length > 0)
    	$('.ybc-blog-related-products-wrapper .ybc_related_products_type_carousel').owlCarousel({            
            items : 3,
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items : 1
                },
                370 : {
                    items : 2
                },
                992 : {
                    items : 3
                },
            },
            nav : true,  
            navRewind : false,
            //Pagination
            margin: 30,
            dots : false,    
            navText : [ , ],
        });
        
        if ($('.ybc_blog_free_related_posts_type_carousel ul').length > 0)
    	$('.ybc_blog_free_related_posts_type_carousel ul').owlCarousel({            
            items : 3,
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items : 1
                },
                480 : {
                    items : 2
                },
                992 : {
                    items : 3
                },
            },
            nav : true,  
            navRewind : false,
            //Pagination
            margin: 30,
            dots : false,    
            navText : [ , ],
        });
     //Nivo slider
     if($('#ybc_slider').length > 0)
         $(window).load(function() {
            $('#ybc_slider').nivoSlider({
                manualAdvance : !sliderAutoPlay,
                pauseTime: YBC_BLOG_FREE_SLIDER_SPEED,
                afterLoad: function(){   
                    $('.ybc-blog-slider').removeClass('loading');
                }
            });
        });    
     
});