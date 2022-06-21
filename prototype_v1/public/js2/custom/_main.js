
    var TRX_UTILS_STORAGE = {
          "ajax_url": "#"
        , "ajax_nonce": "84f142d0bf"
        , "site_url": "http:\/\/lovestory-html.themerex.net"
        , "user_logged_in": "0"
        , "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$"
        , "msg_ajax_error": "Invalid server answer!"
        , "msg_error_global": "Invalid field's value!"
        , "msg_name_empty": "The name can't be empty"
        , "msg_email_empty": "Too short (or empty) email address"
        , "msg_email_not_valid": "E-mail address is invalid"
        , "msg_text_empty": "The message text can't be empty"
        , "msg_send_complete": "Send message complete!"
        , "msg_send_error": "Transmit failed!"
        , "login_via_ajax": "1"
        , "msg_login_empty": "The Login field can't be empty"
        , "msg_login_long": "The Login field is too long"
        , "msg_password_empty": "The password can't be empty and shorter then 4 characters"
        , "msg_password_long": "The password is too long"
        , "msg_login_success": "Login success! The page will be reloaded in 3 sec."
        , "msg_login_error": "Login failed!"
        , "msg_not_agree": "Please, read and check 'Terms and Conditions'"
        , "msg_email_long": "E-mail address is too long"
        , "msg_password_not_equal": "The passwords in both fields are not equal"
        , "msg_registration_success": "Registration success! Please log in!"
        , "msg_registration_error": "Registration failed!"
    };

       
    var LOVESTORY_STORAGE = {
        "system_message": {
            "message": ""
            , "status": ""
            , "header": ""
        }
        , "theme_font": "PTSerif"
        , "theme_color": "#424443"
        , "theme_bg_color": "#ffffff"
        , "strings": {
            "ajax_error": "Invalid server answer"
            , "bookmark_add": "Add the bookmark"
            , "bookmark_added": "Current page has been successfully added to the bookmarks. You can see it in the right panel on the tab &#039;Bookmarks&#039;"
            , "bookmark_del": "Delete this bookmark"
            , "bookmark_title": "Enter bookmark title"
            , "bookmark_exists": "Current page already exists in the bookmarks list"
            , "search_error": "Error occurs in AJAX search! Please, type your query and press search icon for the traditional search way."
            , "email_confirm": "On the e-mail address &quot;%s&quot; we sent a confirmation email. Please, open it and click on the link."
            , "reviews_vote": "Thanks for your vote! New average rating is:"
            , "reviews_error": "Error saving your vote! Please, try again later."
            , "error_like": "Error saving your like! Please, try again later."
            , "error_global": "Global error text"
            , "name_empty": "The name can&#039;t be empty"
            , "name_long": "Too long name"
            , "email_empty": "Too short (or empty) email address"
            , "email_long": "Too long email address"
            , "email_not_valid": "Invalid email address"
            , "subject_empty": "The subject can&#039;t be empty"
            , "subject_long": "Too long subject"
            , "text_empty": "The message text can&#039;t be empty"
            , "text_long": "Too long message text"
            , "send_complete": "Send message complete!"
            , "send_error": "Transmit failed!"
            , "geocode_error": "Geocode was not successful for the following reason:"
            , "googlemap_not_avail": "Google map API not available!"
            , "editor_save_success": "Post content saved!"
            , "editor_save_error": "Error saving post data!"
            , "editor_delete_post": "You really want to delete the current post?"
            , "editor_delete_post_header": "Delete post"
            , "editor_delete_success": "Post deleted!"
            , "editor_delete_error": "Error deleting post!"
            , "editor_caption_cancel": "Cancel"
            , "editor_caption_close": "Close"
        }
        , "ajax_url": "#"
        , "ajax_nonce": "84f142d0bf"
        , "site_url": "http:\/\/lovestory-html.themerex.net"
        , "site_protocol": "http"
        , "vc_edit_mode": ""
        , "accent1_color": "#a3ad6f"
        , "accent1_hover": "#cbb9a6"
        , "slider_height": "100"
        , "user_logged_in": ""
        , "toc_menu": "float"
        , "toc_menu_home": "1"
        , "toc_menu_top": "1"
        , "menu_fixed": "1"
        , "menu_mobile": "960"
        , "menu_hover": "fade"
        , "button_hover": "fade"
        , "input_hover": "default"
        , "demo_time": "0"
        , "media_elements_enabled": "1"
        , "ajax_search_enabled": "1"
        , "ajax_search_min_length": "3"
        , "ajax_search_delay": "200"
        , "css_animation": "1"
        , "menu_animation_in": "fadeIn"
        , "menu_animation_out": "fadeOutDown"
        , "popup_engine": "magnific"
        , "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$"
        , "contacts_maxlength": "1000"
        , "comments_maxlength": "1000"
        , "remember_visitors_settings": ""
        , "admin_mode": ""
        , "isotope_resize_delta": "0.3"
        , "error_message_box": null
        , "viewmore_busy": ""
        , "video_resize_inited": ""
        , "top_panel_height": "0"
    };

    jQuery(document).ready(function() {
        "use strict";
        main_slider_init();
        esg_init();
      
    });

    /*Revolution slider*/
    function revslider_showDoubleJqueryError(sliderID) {
        "use strict";
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
    }

    function main_slider_init() {
        if (jQuery("#mainslider_1").length > 0) {
        "use strict";
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); 
        var htmlDivCss="";
        if(htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }else{
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }

        
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = ".tp-caption.Title-slider,.Title-slider{color:rgba(255,255,255,1.00);font-size:64px;line-height:64px;font-weight:700;font-style:normal;font-family:Playfair Display;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px}.tp-caption.Divider-slider,.Divider-slider{color:rgba(255,255,255,1.00);font-size:20px;line-height:22px;font-weight:400;font-style:normal;font-family:;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px}";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }
        else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
               
    
        var setREVStartSize=function(){
            try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                e.c = jQuery('#rev_slider_2_1');
                e.gridwidth = [1920];
                e.gridheight = [816];

                e.sliderLayout = "fullwidth";
                if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})

            }catch(d){console.log("Failure at Presize of Slider:"+d)}
        };

    setREVStartSize();

        var tpj=jQuery;
        var revapi2;
            if(tpj("#rev_slider_2_1").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider_2_1");
            }else{
                revapi2 = tpj("#rev_slider_2_1").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"js/vendor/revslider/public/assets/js/",
                    sliderLayout:"fullwidth",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        mouseScrollReverse:"default",
                        onHoverStop:"off",
                        bullets: {
                            enable:true,
                            hide_onmobile:false,
                            style:"custom",
                            hide_onleave:false,
                            direction:"horizontal",
                            h_align:"center",
                            v_align:"bottom",
                            h_offset:0,
                            v_offset:80,
                            space:15,
                            tmp:''
                        }
                    },
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:1920,
                    gridheight:816,
                    lazyType:"none",
                    shadow:0,
                    spinner:"spinner0",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }
            var htmlDivCss = unescape(".custom.tp-bullets%20%7B%0A%7D%0A.custom.tp-bullets%3Abefore%20%7B%0A%09content%3A%22%20%22%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.custom%20.tp-bullet%20%7B%0A%09width%3A12px%3B%0A%09height%3A12px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%23aaa%3B%0A%20%20%20%20background%3Argba%28125%2C125%2C125%2C0.5%29%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.custom%20.tp-bullet%3Ahover%2C%0A.custom%20.tp-bullet.selected%20%7B%0A%09background%3Argb%28125%2C125%2C125%29%3B%0A%7D%0A.custom%20.tp-bullet-image%20%7B%0A%7D%0A.custom%20.tp-bullet-title%20%7B%0A%7D%0A%0A");
            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
            if(htmlDiv) {
                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
            }
            else{
                var htmlDiv = document.createElement('div');
                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
            }
        }
        if (jQuery("#mainslider_2").length > 0) {
        "use strict";
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); 
        var htmlDivCss="";
        if(htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }else{
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }


        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = ".tp-caption.Title-slider,.Title-slider{color:rgba(255,255,255,1.00);font-size:64px;line-height:64px;font-weight:700;font-style:normal;font-family:Playfair Display;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px}.tp-caption.Divider-slider,.Divider-slider{color:rgba(255,255,255,1.00);font-size:20px;line-height:22px;font-weight:400;font-style:normal;font-family:;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-width:0px;border-radius:0 0 0 0px}";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }
        else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    

        var setREVStartSize=function(){
            try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                e.c = jQuery('#rev_slider_2_1');
                e.gridwidth = [1920];
                e.gridheight = [816];

                e.sliderLayout = "fullwidth";
                if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})

            }catch(d){console.log("Failure at Presize of Slider:"+d)}
        };

        setREVStartSize();

        var tpj = jQuery;

        var revapi3;
        if (tpj("#rev_slider_3_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_3_1");
        }else {
            revapi3 = tpj("#rev_slider_3_1").show().revolution({
                    sliderType: "standard"
                    , jsFileLocation: "js/vendor/revslider/public/assets/js/"
                    , sliderLayout: "fullwidth"
                    , dottedOverlay: "none"
                    , delay: 9000
                    , navigation: {
                        keyboardNavigation: "off"
                        , keyboard_direction: "horizontal"
                        , mouseScrollNavigation: "off"
                        , mouseScrollReverse: "default"
                        , onHoverStop: "off"
                        , bullets: {
                            enable: true
                            , hide_onmobile: false
                            , style: "custom"
                            , hide_onleave: false
                            , direction: "horizontal"
                            , h_align: "center"
                            , v_align: "bottom"
                            , h_offset: 0
                            , v_offset: 80
                            , space: 15
                            , tmp: ''
                        }
                    }
                    , visibilityLevels: [1240, 1024, 778, 480]
                    , gridwidth: 1440
                    , gridheight: 680
                    , lazyType: "none"
                    , shadow: 0
                    , spinner: "spinner0"
                    , stopLoop: "off"
                    , stopAfterLoops: -1
                    , stopAtSlide: -1
                    , shuffle: "off"
                    , autoHeight: "off"
                    , disableProgressBar: "on"
                    , hideThumbsOnMobile: "off"
                    , hideSliderAtLimit: 0
                    , hideCaptionAtLimit: 0
                    , hideAllCaptionAtLilmit: 0
                    , debugMode: false
                    , fallbacks: {
                        simplifyAll: "off"
                        , nextSlideOnWindowFocus: "off"
                        , disableFocusListener: false
                    , }
                });
            }
             
            var htmlDivCss = unescape(".custom.tp-bullets%20%7B%0A%7D%0A.custom.tp-bullets%3Abefore%20%7B%0A%09content%3A%22%20%22%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.custom%20.tp-bullet%20%7B%0A%09width%3A12px%3B%0A%09height%3A12px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%23aaa%3B%0A%20%20%20%20background%3Argba%28125%2C125%2C125%2C0.5%29%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.custom%20.tp-bullet%3Ahover%2C%0A.custom%20.tp-bullet.selected%20%7B%0A%09background%3Argb%28125%2C125%2C125%29%3B%0A%7D%0A.custom%20.tp-bullet-image%20%7B%0A%7D%0A.custom%20.tp-bullet-title%20%7B%0A%7D%0A%0A");
            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
            if(htmlDiv) {
                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
            }
            else{
                var htmlDiv = document.createElement('div');
                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
            }
        }

    }

    /* Essential Grid */
function esg_init() {
    if (jQuery("#esg-grid-1-1").length > 0) {
		"use strict";
        function eggbfc(winw,resultoption) {
            var lasttop = winw,
            lastbottom = 0,
            smallest =9999,
            largest = 0,
            samount = 0,
            lamoung = 0,
            lastamount = 0,
            resultid = 0,
            resultidb = 0,
            responsiveEntries = [
                                { width:1400,amount:4},
                                { width:1170,amount:4},
                                { width:1024,amount:4},
                                { width:960,amount:4},
                                { width:778,amount:4},
                                { width:640,amount:3},
                                { width:480,amount:1}
                                ];
            if (responsiveEntries!=undefined && responsiveEntries.length>0)
                jQuery.each(responsiveEntries, function(index,obj) {
                    var curw = obj.width != undefined ? obj.width : 0,
                        cura = obj.amount != undefined ? obj.amount : 0;
                    if (smallest>curw) {
                        smallest = curw;
                        samount = cura;
                        resultidb = index;
                    }
                    if (largest<curw) {
                        largest = curw;
                        lamount = cura;
                    }
                    if (curw>lastbottom && curw<=lasttop) {
                        lastbottom = curw;
                        lastamount = cura;
                        resultid = index;
                    }
                })
                if (smallest>winw) {
                    lastamount = samount;
                    resultid = resultidb;
                }
                var obj = new Object;
                obj.index = resultid;
                obj.column = lastamount;
                if (resultoption=="id")
                    return obj;
                else
                    return lastamount;
        }

            if ("even"=="even") {
            var coh=0,
                container = jQuery("#esg-grid-1-1");
            var	cwidth = container.width(),
                ar = "4:4",
                gbfc = eggbfc(jQuery(window).width(),"id"),
            row = 3;
            ar = ar.split(":");
            aratio=parseInt(ar[0],0) / parseInt(ar[1],0);
            coh = cwidth / aratio;
            coh = coh/gbfc.column*row;
                var ul = container.find("ul").first();
                ul.css({display:"block",height:coh+"px"});
        }
        var essapi_1;
        jQuery(document).ready(function() {
            essapi_1 = jQuery("#esg-grid-1-1").tpessential({
                gridID:1,
                layout:"even",
                forceFullWidth:"off",
                lazyLoad:"off",
                row:3,
                loadMoreAjaxToken:"bded71d631",
                loadMoreAjaxUrl:"#",
                loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",
                ajaxContentTarget:"ess-grid-ajax-container-",
                ajaxScrollToOffset:"0",
                ajaxCloseButton:"off",
                ajaxContentSliding:"on",
                ajaxScrollToOnLoad:"on",
                ajaxNavButton:"off",
                ajaxCloseType:"type1",
                ajaxCloseInner:"false",
                ajaxCloseStyle:"light",
                ajaxClosePosition:"tr",
                space:0,
                pageAnimation:"fade",
                paginationScrollToTop:"off",
                spinner:"spinner0",
                evenGridMasonrySkinPusher:"off",
                lightBoxMode:"single",
                animSpeed:1000,
                delayBasic:1,
                mainhoverdelay:1,
                filterType:"single",
                showDropFilter:"hover",
                filterGroupClass:"esg-fgc-1",
                googleFonts:['Open+Sans:300,400,600,700,800','Raleway:100,200,300,400,500,600,700,800,900','Droid+Serif:400,700'],
                aspectratio:"4:4",
                responsiveEntries: [
                                { width:1400,amount:4},
                                { width:1170,amount:4},
                                { width:1024,amount:4},
                                { width:960,amount:4},
                                { width:778,amount:4},
                                { width:640,amount:3},
                                { width:480,amount:1}
                                ]
            });
            try{
                jQuery("#esg-grid-1-1 .esgbox").esgbox({
                    padding : [0,0,0,0],
                    afterLoad:function() { 
                        if (this.element.hasClass("esgboxhtml5")) {
                            var mp = this.element.data("mp4"),
                                ogv = this.element.data("ogv"),
                                webm = this.element.data("webm");
                            this.content ='<div style="width:100%;height:100%;"><video autoplay="true" loop="" class="rowbgimage" poster="" width="100%" height="auto"><source src="'+mp+'" type="video/mp4"><source src="'+webm+'" type="video/webm"><source src="'+ogv+'" type="video/ogg"></video></div>';  
                            var riint = setInterval(function() {jQuery(window).trigger("resize");},100); setTimeout(function() {clearInterval(riint);},2500);
                        };
                    },
                    beforeShow : function () { 
                        this.title = jQuery(this.element).attr('title');
                        if (this.title) {
                            this.title="";
                            this.title =  '<div style="padding:0px 0px 0px 0px">'+this.title+'</div>';
                        }
                    },
                    afterShow : function() {
                    },
                    openEffect : 'fade',
                    closeEffect : 'fade',
                    nextEffect : 'fade',
                    prevEffect : 'fade',
                    openSpeed : 'normal',
                    closeSpeed : 'normal',
                    nextSpeed : 'normal',
                    prevSpeed : 'normal',
                    helpers : {
                        media : {},
                        title : {
                            type:""
                        }
                    }
                });

            } catch (e) {}

        });
        
    }

    if (jQuery("#esg-grid-2-1").length > 0) {
		"use strict";
        function eggbfc(winw,resultoption) {
            var lasttop = winw,
            lastbottom = 0,
            smallest =9999,
            largest = 0,
            samount = 0,
            lamoung = 0,
            lastamount = 0,
            resultid = 0,
            resultidb = 0,
            responsiveEntries = [
                                { width:1400,amount:4},
                                { width:1170,amount:4},
                                { width:1024,amount:4},
                                { width:960,amount:4},
                                { width:778,amount:3},
                                { width:640,amount:3},
                                { width:480,amount:1}
                                ];
            if (responsiveEntries!=undefined && responsiveEntries.length>0)
                jQuery.each(responsiveEntries, function(index,obj) {
                    var curw = obj.width != undefined ? obj.width : 0,
                        cura = obj.amount != undefined ? obj.amount : 0;
                    if (smallest>curw) {
                        smallest = curw;
                        samount = cura;
                        resultidb = index;
                    }
                    if (largest<curw) {
                        largest = curw;
                        lamount = cura;
                    }
                    if (curw>lastbottom && curw<=lasttop) {
                        lastbottom = curw;
                        lastamount = cura;
                        resultid = index;
                    }
                })
                if (smallest>winw) {
                    lastamount = samount;
                    resultid = resultidb;
                }
                var obj = new Object;
                obj.index = resultid;
                obj.column = lastamount;
                if (resultoption=="id")
                    return obj;
                else
                    return lastamount;
        }
        
        if ("cobbles"=="even") {
            var coh=0,
                container = jQuery("#esg-grid-2-1");
            var	cwidth = container.width(),
                ar = "4:4",
                gbfc = eggbfc(jQuery(window).width(),"id"),
            row = 3;
        ar = ar.split(":");
        aratio=parseInt(ar[0],0) / parseInt(ar[1],0);
        coh = cwidth / aratio;
        coh = coh/gbfc.column*row;
            var ul = container.find("ul").first();
            ul.css({display:"block",height:coh+"px"});
        }
        
        var essapi_2;
        jQuery(document).ready(function() {
            essapi_2 = jQuery("#esg-grid-2-1").tpessential({
                gridID:2,
                layout:"cobbles",
                forceFullWidth:"off",
                lazyLoad:"off",
                row:3,
                loadMoreAjaxToken:"bded71d631",
                loadMoreAjaxUrl:"#",
                loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",
                ajaxContentTarget:"ess-grid-ajax-container-",
                ajaxScrollToOffset:"0",
                ajaxCloseButton:"off",
                ajaxContentSliding:"on",
                ajaxScrollToOnLoad:"on",
                ajaxNavButton:"off",
                ajaxCloseType:"type1",
                ajaxCloseInner:"false",
                ajaxCloseStyle:"light",
                ajaxClosePosition:"tr",
                space:0,
                pageAnimation:"fade",
                paginationScrollToTop:"off",
                spinner:"spinner0",
                lightBoxMode:"single",
                animSpeed:1000,
                delayBasic:1,
                mainhoverdelay:1,
                filterType:"single",
                showDropFilter:"hover",
                filterGroupClass:"esg-fgc-2",
                googleFonts:['Open+Sans:300,400,600,700,800','Raleway:100,200,300,400,500,600,700,800,900','Droid+Serif:400,700'],
                aspectratio:"4:4",
                responsiveEntries: [
                                { width:1400,amount:4},
                                { width:1170,amount:4},
                                { width:1024,amount:4},
                                { width:960,amount:4},
                                { width:778,amount:3},
                                { width:640,amount:3},
                                { width:480,amount:1}
                                ]
            });
            try{
                jQuery("#esg-grid-2-1 .esgbox").esgbox({
                    padding : [0,0,0,0],
                    afterLoad:function() { 
                        if (this.element.hasClass("esgboxhtml5")) {
                            var mp = this.element.data("mp4"),
                                ogv = this.element.data("ogv"),
                                webm = this.element.data("webm");
                            this.content ='<div style="width:100%;height:100%;"><video autoplay="true" loop="" class="rowbgimage" poster="" width="100%" height="auto"><source src="'+mp+'" type="video/mp4"><source src="'+webm+'" type="video/webm"><source src="'+ogv+'" type="video/ogg"></video></div>';  
                            var riint = setInterval(function() {jQuery(window).trigger("resize");},100); setTimeout(function() {clearInterval(riint);},2500);
                        };
                    },
                    beforeShow : function () { 
                        this.title = jQuery(this.element).attr('title');
                        if (this.title) {
                            this.title="";
                            this.title =  '<div style="padding:0px 0px 0px 0px">'+this.title+'</div>';
                        }
                    },
                    afterShow : function() {
                    },
                    openEffect : 'fade',
                    closeEffect : 'fade',
                    nextEffect : 'fade',
                    prevEffect : 'fade',
                    openSpeed : 'normal',
                    closeSpeed : 'normal',
                    nextSpeed : 'normal',
                    prevSpeed : 'normal',
                    helpers : {
                        media : {},
                        title : {
                            type:""
                        }
                    }
                });

            } catch (e) {}

        });
    }

    if (jQuery("#esg-grid-5-1").length > 0) {
		"use strict"; 
        function eggbfc(winw,resultoption) {
            var lasttop = winw,
            lastbottom = 0,
            smallest =9999,
            largest = 0,
            samount = 0,
            lamoung = 0,
            lastamount = 0,
            resultid = 0,
            resultidb = 0,
            responsiveEntries = [
                                { width:1400,amount:4},
                                { width:1170,amount:4},
                                { width:1024,amount:4},
                                { width:960,amount:4},
                                { width:778,amount:4},
                                { width:640,amount:3},
                                { width:480,amount:1}
                                ];
            if (responsiveEntries!=undefined && responsiveEntries.length>0)
                jQuery.each(responsiveEntries, function(index,obj) {
                    var curw = obj.width != undefined ? obj.width : 0,
                        cura = obj.amount != undefined ? obj.amount : 0;
                    if (smallest>curw) {
                        smallest = curw;
                        samount = cura;
                        resultidb = index;
                    }
                    if (largest<curw) {
                        largest = curw;
                        lamount = cura;
                    }
                    if (curw>lastbottom && curw<=lasttop) {
                        lastbottom = curw;
                        lastamount = cura;
                        resultid = index;
                    }
                })
                if (smallest>winw) {
                    lastamount = samount;
                    resultid = resultidb;
                }
                var obj = new Object;
                obj.index = resultid;
                obj.column = lastamount;
                if (resultoption=="id")
                    return obj;
                else
                    return lastamount;
            }
        if ("even"=="even") {
            var coh=0,
                container = jQuery("#esg-grid-5-1");
            var cwidth = container.width(),
                ar = "4:4",
                gbfc = eggbfc(jQuery(window).width(),"id"),
            row = 1;
        ar = ar.split(":");
        aratio=parseInt(ar[0],0) / parseInt(ar[1],0);
        coh = cwidth / aratio;
        coh = coh/gbfc.column*row;
            var ul = container.find("ul").first();
            ul.css({display:"block",height:coh+"px"});
        }
        var essapi_5;
        jQuery(document).ready(function() {
            essapi_5 = jQuery("#esg-grid-5-1").tpessential({
                gridID:5,
                layout:"even",
                forceFullWidth:"off",
                lazyLoad:"off",
                row:1,
                loadMoreAjaxToken:"063e071ba2",
                loadMoreAjaxUrl:"#",
                loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",
                ajaxContentTarget:"ess-grid-ajax-container-",
                ajaxScrollToOffset:"0",
                ajaxCloseButton:"off",
                ajaxContentSliding:"on",
                ajaxScrollToOnLoad:"on",
                ajaxNavButton:"off",
                ajaxCloseType:"type1",
                ajaxCloseInner:"false",
                ajaxCloseStyle:"light",
                ajaxClosePosition:"tr",
                space:0,
                pageAnimation:"fade",
                paginationScrollToTop:"off",
                spinner:"spinner0",
                evenGridMasonrySkinPusher:"off",
                lightBoxMode:"single",
                animSpeed:1000,
                delayBasic:1,
                mainhoverdelay:1,
                filterType:"single",
                showDropFilter:"hover",
                filterGroupClass:"esg-fgc-5",
                googleFonts:['Open+Sans:300,400,600,700,800','Raleway:100,200,300,400,500,600,700,800,900','Droid+Serif:400,700'],
                aspectratio:"4:4",
                responsiveEntries: [
                                { width:1400,amount:4},
                                { width:1170,amount:4},
                                { width:1024,amount:4},
                                { width:960,amount:4},
                                { width:778,amount:4},
                                { width:640,amount:3},
                                { width:480,amount:1}
                                ]
            });
            try{
                jQuery("#esg-grid-5-1 .esgbox").esgbox({
                    padding : [0,0,0,0],
                    afterLoad:function() { 
                        if (this.element.hasClass("esgboxhtml5")) {
                            var mp = this.element.data("mp4"),
                                ogv = this.element.data("ogv"),
                                webm = this.element.data("webm");
                            this.content ='<div style="width:100%;height:100%;"><video autoplay="true" loop="" class="rowbgimage" poster="" width="100%" height="auto"><source src="'+mp+'" type="video/mp4"><source src="'+webm+'" type="video/webm"><source src="'+ogv+'" type="video/ogg"></video></div>';  
                            var riint = setInterval(function() {jQuery(window).trigger("resize");},100); setTimeout(function() {clearInterval(riint);},2500);
                        };
                    },
                    beforeShow : function () { 
                        this.title = jQuery(this.element).attr('title');
                        if (this.title) {
                            this.title="";
                            this.title =  '<div style="padding:0px 0px 0px 0px">'+this.title+'</div>';
                        }
                    },
                    afterShow : function() {
                    },
                    openEffect : 'fade',
                    closeEffect : 'fade',
                    nextEffect : 'fade',
                    prevEffect : 'fade',
                    openSpeed : 'normal',
                    closeSpeed : 'normal',
                    nextSpeed : 'normal',
                    prevSpeed : 'normal',
                    helpers : {
                        media : {},
                        title : {
                            type:""
                        }
                    }
                });

            } catch (e) {}

        });
 
    }
        
    if (jQuery("#esg-grid-4-1").length > 0) {
    	"use strict";
        function eggbfc(winw,resultoption) {
			var lasttop = winw,
			lastbottom = 0,
			smallest =9999,
			largest = 0,
			samount = 0,
			lamoung = 0,
			lastamount = 0,
			resultid = 0,
			resultidb = 0,
			responsiveEntries = [
								{ width:1400,amount:3},
								{ width:1170,amount:3},
								{ width:1024,amount:3},
								{ width:960,amount:3},
								{ width:778,amount:3},
								{ width:640,amount:3},
								{ width:480,amount:1}
								];
			if (responsiveEntries!=undefined && responsiveEntries.length>0)
				jQuery.each(responsiveEntries, function(index,obj) {
					var curw = obj.width != undefined ? obj.width : 0,
						cura = obj.amount != undefined ? obj.amount : 0;
					if (smallest>curw) {
						smallest = curw;
						samount = cura;
						resultidb = index;
					}
					if (largest<curw) {
						largest = curw;
						lamount = cura;
					}
					if (curw>lastbottom && curw<=lasttop) {
						lastbottom = curw;
						lastamount = cura;
						resultid = index;
					}
				})
				if (smallest>winw) {
					lastamount = samount;
					resultid = resultidb;
				}
				var obj = new Object;
				obj.index = resultid;
				obj.column = lastamount;
				if (resultoption=="id")
					return obj;
				else
					return lastamount;
			}
		if ("even"=="even") {
			var coh=0,
				container = jQuery("#esg-grid-4-1");
			var	cwidth = container.width(),
				ar = "4:4",
				gbfc = eggbfc(jQuery(window).width(),"id"),
			row = 2;
		ar = ar.split(":");
		aratio=parseInt(ar[0],0) / parseInt(ar[1],0);
		coh = cwidth / aratio;
		coh = coh/gbfc.column*row;
			var ul = container.find("ul").first();
			ul.css({display:"block",height:coh+"px"});
		}
		var essapi_4;
		jQuery(document).ready(function() {
			essapi_4 = jQuery("#esg-grid-4-1").tpessential({
		        gridID:4,
		        layout:"even",
		        forceFullWidth:"off",
		        lazyLoad:"off",
		        row:2,
		        loadMoreAjaxToken:"a3d285dcc5",
		        loadMoreAjaxUrl:"#",
		        loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",
		        ajaxContentTarget:"ess-grid-ajax-container-",
		        ajaxScrollToOffset:"0",
		        ajaxCloseButton:"off",
		        ajaxContentSliding:"on",
		        ajaxScrollToOnLoad:"on",
		        ajaxNavButton:"off",
		        ajaxCloseType:"type1",
		        ajaxCloseInner:"false",
		        ajaxCloseStyle:"light",
		        ajaxClosePosition:"tr",
		        space:0,
		        pageAnimation:"fade",
		        paginationScrollToTop:"off",
		        spinner:"spinner0",
		        evenGridMasonrySkinPusher:"off",
		        lightBoxMode:"single",
		        animSpeed:1000,
		        delayBasic:1,
		        mainhoverdelay:1,
		        filterType:"single",
		        showDropFilter:"hover",
		        filterGroupClass:"esg-fgc-4",
		        googleFonts:['Open+Sans:300,400,600,700,800','Raleway:100,200,300,400,500,600,700,800,900','Droid+Serif:400,700'],
		        aspectratio:"4:4",
		        responsiveEntries: [
								{ width:1400,amount:3},
								{ width:1170,amount:3},
								{ width:1024,amount:3},
								{ width:960,amount:3},
								{ width:778,amount:3},
								{ width:640,amount:3},
								{ width:480,amount:1}
								]
			});
            try{
                jQuery("#esg-grid-4-1 .esgbox").esgbox({
                    padding : [0,0,0,0],
                    afterLoad:function() { 
                        if (this.element.hasClass("esgboxhtml5")) {
                            var mp = this.element.data("mp4"),
                                ogv = this.element.data("ogv"),
                                webm = this.element.data("webm");
                            this.content ='<div style="width:100%;height:100%;"><video autoplay="true" loop="" class="rowbgimage" poster="" width="100%" height="auto"><source src="'+mp+'" type="video/mp4"><source src="'+webm+'" type="video/webm"><source src="'+ogv+'" type="video/ogg"></video></div>';  
                            var riint = setInterval(function() {jQuery(window).trigger("resize");},100); setTimeout(function() {clearInterval(riint);},2500);
                        };
                    },
                    beforeShow : function () { 
                        this.title = jQuery(this.element).attr('title');
                        if (this.title) {
                            this.title="";
                            this.title =  '<div style="padding:0px 0px 0px 0px">'+this.title+'</div>';
                        }
                    },
                    afterShow : function() {
                    },
                    openEffect : 'fade',
                    closeEffect : 'fade',
                    nextEffect : 'fade',
                    prevEffect : 'fade',
                    openSpeed : 'normal',
                    closeSpeed : 'normal',
                    nextSpeed : 'normal',
                    prevSpeed : 'normal',
                    helpers : {
                        media : {},
                        title : {
                            type:""
                        }
                    }
                });

            } catch (e) {}

		});
    }

}

    /* Shop data */
    var woocommerce_price_slider_params = {
        "currency_symbol": "$",
        "currency_pos": "left",
        "min_price": "",
        "max_price": ""
    };
    var wc_single_product_params = {
        "i18n_required_rating_text": "Please select a rating",
        "review_rating_required": "yes"
    };
