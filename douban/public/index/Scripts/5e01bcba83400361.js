
Do(function(){
  var cookieCfg={key:"ap",cookie:"1"},$doubanTip=$("#doubanapp-tip"),data={};function hideDoubanTip(){if(!$doubanTip.length){return}$doubanTip.hide();data[cookieCfg.key]=cookieCfg.cookie;set_cookie(data)}$doubanTip.delegate("a","click",hideDoubanTip);if(!get_cookie(cookieCfg.key)){$doubanTip.show()}var popup;var nav=$("#db-global-nav");var more=nav.find(".bn-more");function handleShowMoreActive(c){var a=$(c.currentTarget);var b=a.parent();hideDoubanTip();if(popup){popup.parent().removeClass("more-active");if($.contains(b[0],popup[0])){popup=null;return}}b.addClass("more-active");popup=b.find(".more-items");popup.trigger("moreitem:show")}nav.delegate(".bn-more, .top-nav-reminder .lnk-remind","click",function(a){a.preventDefault();handleShowMoreActive(a);return}).delegate(".lnk-doubanapp","mouseenter",function(b){var a=$(this);if(!a.parent().hasClass("more-active")){handleShowMoreActive(b)}}).delegate(".top-nav-doubanapp","mouseleave",function(){var b=$(this);var a=b.find(".lnk-doubanapp");if(popup){b.removeClass("more-active");if($.contains(b[0],popup[0])){popup=null}}});$(document).click(function(a){if($(a.target).closest(".more-items").length||$(a.target).closest(".more-active").length){return}if(popup){popup.parent().removeClass("more-active");popup=null}});
});

  Do(function(){
    var nav = $('#db-nav-sns');
    var inp=$("#inp-query"),label=inp.closest(".nav-search").find("label");if("placeholder" in inp[0]){label.hide();inp.attr("placeholder",label.text())}else{if(inp.val()!==""){label.hide()}inp.parent().click(function(){inp.focus();label.hide()}).end().focusin(function(){label.hide()}).focusout(function(){if($.trim(this.value)===""){label.show()}else{label.hide()}}).keydown(function(){label.hide()})}inp.parents("form").submit(function(){if(!$.trim(inp.val()).length){return false}});nav.find(".lnk-more, .lnk-account").click(function(b){b.preventDefault();var d,a=$(this),c=a.hasClass("lnk-more")?$("#db-productions"):$("#db-usr-setting");if(!c.data("init")){d=a.offset();c.css({"margin-left":(d.left-$(window).width()/2-c.width()+a.width()+parseInt(a.css("padding-right"),10))+"px",left:"50%",top:d.top+a.height()+"px"});c.data("init",1);c.hide();$("body").click(function(g){var f=$(g.target);if(f.hasClass("lnk-more")||f.hasClass("lnk-account")||f.closest("#db-usr-setting").length||f.closest("#db-productions").length){return}c.hide()})}if(c.css("display")==="none"){$(".dropdown").hide();c.show()}else{$(".dropdown").hide()}});
  });
  
  var tagsug_src = "https://img3.doubanio.com/f/shire/4605e734f440a79abdf4866eb4e6c785dfefbba1/js/lib/tagsug.js";
  Do(function(){
// a very simple asynchronous js loader
// @author: ktmud
window.Do = window.Do || function(fn) {
  typeof fn == 'function' && setTimeout(fn, 0);
};
Do.add_js = function add_js(src) {
  var x = document.createElement('script');
  x.src = src;
  document.getElementsByTagName('head')[0].appendChild(x);
};
Do.add_css = function add_css(src, cb) {
  var x = document.createElement('link');
  x.rel = 'stylesheet';
  x.href = src;
  document.getElementsByTagName('head')[0].appendChild(x);
};
Do.check_js = function check_js(indicator, callback) {
  var indicator_ret = indicator();
  if (indicator_ret) {
    callback(indicator_ret);
  } else {
    setTimeout(function() {
      check_js(indicator, callback);
    }, 33);
  }
};

  var t = $('#inp-query,#search_text'),
      tempQuery,
      tagsug_api_search,
      tagsug_api_at,
      defaultSug = {"q":"","items":[{"num":"","name":"日记","cat":1015},{"num":"","name":"成员","cat":1005},{"num":"","name":"图片","cat":1025},{"num":"","name":"小站","cat":2012},{"num":"","name":"电影","cat":1002},{"num":"","name":"书籍","cat":1001},{"num":"","name":"音乐","cat":1003},{"num":"","name":"移动应用","cat":3064}],"source":"suggest"};
  t.one('focus', function() {
    Do.add_js(tagsug_src);
    Do.check_js(function() {
      return $.fn.tagsug && window.Mustache;
    }, function() {
      tagsug_api_search = t.tagsug({
        wordLimit: 30,
        url: '/j/search_suggest?q=',
        arrName: 'items',
        max: null,
        haltLink: false,
        sugOffset: {
          left: -6,
          top: 26
        },
        listTmpl: '<ul class="sug-kind-search"><li class="title"><a href="javascript: void 0;">搜索 “<span>{{q}}</span>” 相关的：</a></li>{{#items}}<li><a href="/search?cat={{cat}}&q={{q}}&source={{source}}"><span>{{num}}</span>{{name}}</a></li>{{/items}}</ul>',
        leadChar: '',
        hideChar: ['@'],
        alignLeft: true,
        queryIncludingSpace: true,
        tips: null
      })._tagsug_api[0];
      tagsug_api_search.on('query', function(e, q) {
        if (q !== tempQuery) {
          defaultSug.q = tempQuery = q;
          tagsug_api_search._anterior_txt = '';
          tagsug_api_search.showSug(defaultSug);
        }
      });
      tagsug_api_at = t.tagsug({
        max: 8,
        useUid: true,
        tips: '@某人，直达其个人主页'
      })._tagsug_api[0];
      tagsug_api_at.on('choose', function(e, uid) {
        window.location = '/people/' + uid + '/';
      });
    });
  });
  $('body').click(function(e) {
    var sug = $('#db-tagsug-list');
    if (sug.length && !$.contains(sug[0], e.target)){
      sug.hide();
    }
    if ($(e.target).is('#db-tagsug-list .title a')) {
      $('.nav-search form').submit();
    }
  });
});

