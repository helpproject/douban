
Do(function(){
  var cookieCfg={key:"ap",cookie:"1"},$doubanTip=$("#doubanapp-tip"),data={};function hideDoubanTip(){if(!$doubanTip.length){return}$doubanTip.hide();data[cookieCfg.key]=cookieCfg.cookie;set_cookie(data)}$doubanTip.delegate("a","click",hideDoubanTip);if(!get_cookie(cookieCfg.key)){$doubanTip.show()}var popup;var nav=$("#db-global-nav");var more=nav.find(".bn-more");function handleShowMoreActive(c){var a=$(c.currentTarget);var b=a.parent();hideDoubanTip();if(popup){popup.parent().removeClass("more-active");if($.contains(b[0],popup[0])){popup=null;return}}b.addClass("more-active");popup=b.find(".more-items");popup.trigger("moreitem:show")}nav.delegate(".bn-more, .top-nav-reminder .lnk-remind","click",function(a){a.preventDefault();handleShowMoreActive(a);return}).delegate(".lnk-doubanapp","mouseenter",function(b){var a=$(this);if(!a.parent().hasClass("more-active")){handleShowMoreActive(b)}}).delegate(".top-nav-doubanapp","mouseleave",function(){var b=$(this);var a=b.find(".lnk-doubanapp");if(popup){b.removeClass("more-active");if($.contains(b[0],popup[0])){popup=null}}});$(document).click(function(a){if($(a.target).closest(".more-items").length||$(a.target).closest(".more-active").length){return}if(popup){popup.parent().removeClass("more-active");popup=null}});
});

  Do(function(){
    var nav = $('#db-nav-book');
    var inp=$("#inp-query"),label=inp.closest(".nav-search").find("label");if("placeholder" in inp[0]){label.hide();inp.attr("placeholder",label.text())}else{if(inp.val()!==""){label.hide()}inp.parent().click(function(){inp.focus();label.hide()}).end().focusin(function(){label.hide()}).focusout(function(){if($.trim(this.value)===""){label.show()}else{label.hide()}}).keydown(function(){label.hide()})}inp.parents("form").submit(function(){if(!$.trim(inp.val()).length){return false}});nav.find(".lnk-more, .lnk-account").click(function(b){b.preventDefault();var d,a=$(this),c=a.hasClass("lnk-more")?$("#db-productions"):$("#db-usr-setting");if(!c.data("init")){d=a.offset();c.css({"margin-left":(d.left-$(window).width()/2-c.width()+a.width()+parseInt(a.css("padding-right"),10))+"px",left:"50%",top:d.top+a.height()+"px"});c.data("init",1);c.hide();$("body").click(function(g){var f=$(g.target);if(f.hasClass("lnk-more")||f.hasClass("lnk-account")||f.closest("#db-usr-setting").length||f.closest("#db-productions").length){return}c.hide()})}if(c.css("display")==="none"){$(".dropdown").hide();c.show()}else{$(".dropdown").hide()}});
  });

    var staticUrl = {
      'widget/suggest': 'https://img3.doubanio.com/f/book/552c65baba39959d23a0d3ae0492898314864bd5/js/book/widget/suggest.js'
    , 'mod/template' :'https://img3.doubanio.com/f/book/655b9284cdc782517563a78e05927942189c0b34/js/book/mod/template.js'
    }

    var setupSearchSuggest = function() {
      var navSearchForm=$(".nav-srh form[name=ssform]");if(!navSearchForm.length){var navSearchForm=$(".nav-search form")}var navSearch=navSearchForm.find("input[name=search_text]");navSearch.searchSuggest({preventSearch:function(a){if(a===""||a==="书名、作者、ISBN"){return true}return false},parse:function(b){if(b.r&&b.r===1){return null}var a=b.suggests;if(!a.length){return null}if(a.length>8){return a.slice(0,8)}return a},tmplEngine:_.template,tmplPanel:'<ul id="nav-srh-suggest"></ul>',tmplItem:$("#suggest-item").html(),url:"/j/suggest_text",form:navSearchForm,queryArg:"q"});
    }

    if(!Do.ready){
      (function(c){var b=function(e,d){d=c.extend(d||{},{dataType:"script",cache:true,url:e});return c.ajax(d)};var a=function(d,e){b(d.shift()).done(function(){if(d.length){a(d,e)}else{e()}})};c.getScripts=a})(jQuery);

      $.getScripts([staticUrl['widget/suggest']
        , staticUrl['mod/template']], setupSearchSuggest)
    }else{
      Do.add('widget/suggest', {
        path: staticUrl['widget/suggest']
      , type: 'js'
      })
      Do.add('mod/template', {
        path: staticUrl['mod/template']
      , type: 'js'
      })
      Do.ready('widget/suggest', 'mod/template', setupSearchSuggest)
    }
  
    function set_cookie(g,f,d,e){var b=new Date(),a,c;b.setTime(b.getTime()+((f||30)*24*60*60*1000));a="; expires="+b.toGMTString();for(c in g){document.cookie=c+"="+g[c]+a+"; domain="+(d||"douban.com")+"; path="+(e||"/")}}function get_cookie(b){var e=b+"=",a=document.cookie.split(";"),d,f;for(d=0;d<a.length;d++){f=a[d];while(f.charAt(0)==" "){f=f.substring(1,f.length)}if(f.indexOf(e)===0){return f.substring(e.length,f.length).replace(/\"/g,"")}}return null};
  
    Do("widget/tabs",function(){$.fn.splat=function(){return this.map(function(d,e){return $(e)})};var a=$(".nav-vendor li"),c=$(".list-ranking"),b=new Tabs(a.splat(),c.splat());b.initState(0)});
    ;Do(function(){
        var imageHoverChange = function(header_id, on_icon, idle_icon) {
            var $hd_img = $(header_id).find("img")
            $(header_id).hover(function(e){
                $hd_img.attr('src', on_icon)
            }, function(){
                if (!$(header_id).hasClass('on')) {
                    $hd_img.attr('src', idle_icon)
                }
            });
            $(".book-chart-hd").click(function(e){
                var target_id = $(e.target).parent().attr('id')
                if(target_id && target_id.indexOf(header_id.replace("#", '')) >= 0) {
                    $hd_img.attr('src', on_icon)
                } else {
                    $hd_img.attr('src', idle_icon)
                }
            })
        }
        var jd_on_icon = "https://img3.doubanio.com/f/book/7fd9bf017a2b6c0349981f25700e2b71c12df7d0/pics/book/partner/jd_chart_hover.png";
        var jd_idle_icon = "https://img3.doubanio.com/f/book/1a000e2b266b7d0e7c6c729591cab99692c04153/pics/book/partner/jd_chart.png";
        var amazon_on_icon = "https://img3.doubanio.com/f/book/d6c95e1ad2d0963f912a64fcb51cfa85137462c6/pics/book/partner/amazon_chart_hover.png";
        var amazon_idle_icon = "https://img3.doubanio.com/f/book/a89c8398b6cf28ef20edfe1b069ee72917e2dd54/pics/book/partner/amazon_chart.png";
        var dangdang_on_icon = "https://img3.doubanio.com/f/book/7d8c0787ecede53ce754df32380011a66b610496/pics/book/partner/dangdang_chart_hover.png";
        var dangdang_idle_icon = "https://img3.doubanio.com/f/book/31b437b71ced2d15e1e110d6be26b070da8c0d4a/pics/book/partner/dangdang_chart.png";
        imageHoverChange("#jd-book-chart-hd", jd_on_icon, jd_idle_icon)
        imageHoverChange("#amazon-book-chart-hd", amazon_on_icon, amazon_idle_icon)
        imageHoverChange("#dangdang-book-chart-hd", dangdang_on_icon, dangdang_idle_icon)
    });

