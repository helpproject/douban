
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
  
  (function(b,a){b.fn.fixSide=function(d,k){var h=/ipod|iphone|ipad|android|blackberry|mobile|webos|windows phone/i.test(navigator.userAgent),l="",f="",g="",c="",i="",j="",e="";if(b.browser.ie&&b.browser.version|0<7||h){return}l=b(a).height();f=b("#content .aside");g=f[0];c=g.clientHeight;i=b("#content")[0];j=b("#content .article");e=g.clientHeight>l?true:false;a.addEventListener("load",function(){c=g.clientHeight;i=b("#content")[0];e=g.clientHeight>=l?true:false});b(a).bind("scroll",function(){var n=j.offset().left+(i.clientWidth-g.clientWidth),m=i.getBoundingClientRect().top;if(e){if(m<0&&Math.abs(m)+l-d>c){f.css({position:"fixed",left:n+"px",bottom:d+"px"})}else{if(Math.abs(m)+l-d<c){f.css({position:"static"})}}}else{if(m<0){f.css({position:"fixed",left:n+"px",top:k+"px"})}else{f.css({position:"static"})}}});b(a).bind("resize",function(n){var m=j.offset().left+(i.clientWidth-g.clientWidth);f.css({left:m+"px"})})}})(jQuery,window);;
  $().fixSide(200, 52);

    function deferred(){var a={done:[],fail:[]};var b={done:function(c){a.done.push(c);return b},fail:function(c){a.fail.push(c);return b}};return{resolve:function(){var d=0,c;for(;c=a.done[d++];){c.apply(this,arguments)}},reject:function(){var d=0,c;for(;c=a.fail[d++];){c.apply(this,arguments)}},promise:b}}var loader=function(a,g,c,d,h,i){if(!a){return}if(typeof g==="function"){d=g;g=""}if(typeof c==="function"){d=c;c=""}var e=function(){loader.loaded[a]=1;d&&d(a);d=null;clearTimeout(f)};if(loader.loaded[a]){if(loader.loading[a]){loader.loading[a]=0}setTimeout(function(){e()},0);return}if(loader.loading[a]){setTimeout(function(){loader(a,g,c,d,h,i)},10);return}loader.loading[a]=1;var f=setTimeout(function(){try{i(a)}catch(l){}},h||6000);var k=g||a.toLowerCase().split(/\./).pop().replace(/[\?#].*/,"");var b;if(k==="js"){b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("src",a);b.setAttribute("async",true)}else{if(k==="css"){b=document.createElement("link");b.setAttribute("type","text/css");b.setAttribute("rel","stylesheet");b.setAttribute("href",a)}}if(c){b.charset=c}if(k==="css"){setTimeout(function(){e()},0)}else{b.onerror=function(){e();b.onerror=null};b.onload=b.onreadystatechange=function(){var l;if(!this.readyState||this.readyState==="loaded"||this.readyState==="complete"){setTimeout(function(){e()},0);b.onload=b.onreadystatechange=null}}}var j=(function(){var l=document.getElementsByTagName("script");return l[l.length-1]})();j.parentNode.insertBefore(b,j)};loader.loaded=window.__external_files_loaded=window.__external_files_loaded||{};loader.loading=window.__external_files_loading=window.__external_files_loading||{};loader.batch=function(){if(arguments.length==0){return}var e=Array.prototype.slice.call(arguments);if(Object.prototype.toString.call(e[0])=="[object Array]"){e=e[0]}var f=deferred();var a=[];var d=function(){a.pop();if(a.length===0){f.resolve()}};for(var c=0,b;b=e[c++];){a.push(b);loader(b,d)}return f.promise};
    Do(function() {
      loader.batch([
        'https://img3.doubanio.com/f/shire/8377b9498330a2e6f056d863987cc7a37eb4d486/css/ui/dialog.css',
        'https://img3.doubanio.com/f/shire/4b3bad5e25de78678d700dd5353570dce3e6bbcc/js/ui/dialog.js'
      ]).done(function() {
        var encodeHTML = function(s) {
    return s.replace(/\&/g, '&amp;')
            .replace(/\"/g, '&quot;')
            .replace(/\'/g, '&apos;')
            .replace(/\</g, '&lt;')
            .replace(/\>/g, '&gt;');
};

function deferred() {
  var callbacks = {
    done: [],
    fail: []
  };

  var promise = {
    done: function(callback) {
      callbacks.done.push(callback);
      return promise;
    },

    fail: function(callback) {
      callbacks.fail.push(callback);
      return promise;
    }
  };

  return {
    resolve: function() {
      var i = 0, cb;
      for(;cb = callbacks['done'][i++];) {
        cb.apply(this, arguments);
      }
    },

    reject: function() {
      var i = 0, cb;
      for(;cb = callbacks['fail'][i++];) {
        cb.apply(this, arguments);
      }
    },

    promise: promise 
  };
}

function asyncRequest(url, params, method) {
  var defer = deferred();
  var xhr = null;
  var t = (method || 'get').toLowerCase();
  xhr = $.ajax({
    url: url,
    type: t, 
    dataType: 'json',
    data: (t === 'post')? $.extend(params, {ck: get_cookie('ck')}) : params,
    error: function(e) {
      defer.reject(e);
    },
    success: function(e) {
      defer.resolve(e);
    }
  });

  defer.promise.abort = function() {
    xhr && xhr.abort();
  }
  return defer.promise;
}

var DOULIST_ADDITEM = '/j/doulist/{doulist_id}/additem';
var DOULIST_EDITITEM = '/j/doulist/{doulist_id}/edititem';
var DOULIST_COMMENT = '/j/doulist/{doulist_id}/poke';
var DOULIST_CREATE = '/j/doulist/add';
var DOULIST_LIST = '/j/doulist/cat';
var DOULIST_SEARCH = '/j/doulist/search';
var DOULIST_SEARCH_SELF = '/j/doulist/search_user_doulists';
var DOULIST_GET_ITEM_INFO = '/j/doulist/get_item_info';

var validateForm = function(frm, rules) {
  var bool = true;
  var inp;
  for (var n in rules) {
    if (rules.hasOwnProperty(n)) {
      inp = frm.find(n);
      bool = rules[n](inp);
      if (bool) {
        validateForm.cleanError(inp);
      }
    }
  }
  return bool;
};

validateForm.displayError = function(inp, error) {
  if (!inp) {
    return;
  }
  var item = inp.closest('.item');
  var errorNode = item.find('.form-field-error');
  if (errorNode.length === 0) {
    errorNode = $('<div class="form-field-error"></div>').prependTo(item);
  }
  errorNode.show().html(error);
};

validateForm.cleanError = function(inp) {
  inp.closest('.item').find('.form-field-error').hide();
};



function doulistCustomeEvents(dialog) {
  var cancelBtn = dialog.node.find('.bn-cancel');
  dialog.node.bind('dialog-error', function(e, error) {
    dialog.setContent(
      '<div class="doulist-submit-success"><p>' + error + '</p>\
         <div class="item-submit">\
           <span class="bn-flat"><input type="button" value="关闭" class="bn-cancel"></span>\
         </div>\
       </div>\
      '
    ).update();
    cancelBtn.click(function() {
      dialog.close();
    });
    setTimeout(function() {
      dialog.close();
    }, 3000);
  });

  dialog.node.bind('dialog-success', function(e, doulist) {
    dialog.setTitle("添加成功").setContent(
      '<div class="doulist-submit-success">\
         <i></i>已经添加到<a href="' + doulist.url + '" target="_blank">' + doulist.name + '</a>\
         <div>\
           <p>窗口将在<b class="num">3</b>秒后关闭</p>\
           <span class="bn-flat"><input type="button" value="关闭" class="bn-cancel"></span>\
         </div>\
       </div>\
      '
    );
    cancelBtn = dialog.node.find('.bn-cancel');
    cancelBtn.click(function() {
      dialog.close();
      timer && clearTimeout(timer);
    });
    var num = dialog.node.find('.num')
      , count = num.text()
      , countdown, timer
    ;(function() {
      countdown = countdown || arguments.callee;
      timer = setTimeout(function() {
        num.text(--count);
        count? countdown(): dialog.close();
      }, 1000);
    })();
  });
}

var doulistDialogForm = typeof doulistDialogForm === 'undefined'? {} : doulistDialogForm

;(function() {
  var initForm = function(dialog) {
    var frm = dialog.node.find('form');

    frm.submit(function(e){
      e.preventDefault();
      var frmData = {
        subjectId: frm.find('input[name=subject_id]').val(),
        subjectKind: frm.find('input[name=subject_kind]').val(),
        subjectUrl: frm.find('input[name=subject_url]').val(),
        comment: frm.find('textarea[name="comment"]').val(),
        sync: frm.find('#dlg-opt-share').attr('checked')? '1': ''
      };
      existListHandler(dialog, frm, frmData)
        .bind('form-submit-error', function(e, error) {
          dialog.node.trigger('dialog-error', error);
        })
        .bind('form-submit-success', function(e, doulist) {
          dialog.node.trigger('dialog-success', doulist);
        })
    });
    frm.bind('form-submit-fail', function(e, msg){
      validateForm.displayError(frm.find('input[name=dl_title]'), msg);
    });
    doulistCustomeEvents(dialog);
  }

  function existListHandler(dialog, frm, frmData) {
    var doulistSelect = frm.find('input[name=dl_id]:checked');
    var doulistId = doulistSelect.val();
    var doulistName = doulistSelect.next().find('b').text();
    var validateRules = {
      '.dl_exist_select input:checked': function(e) {
        if (!e.length) {
          validateForm.displayError($('.dl_exist_select'), '请选择一个豆列');
          return false;
        }
        return true;
      }
    }
    if (validateForm(frm, validateRules)) {
      asyncRequest(
        DOULIST_ADDITEM.replace('{doulist_id}', doulistId),
        {
          sid: frmData.subjectId,
          skind: frmData.subjectKind,
          surl: frmData.subjectUrl,
          comment: frmData.comment,
          sync_to_mb: frmData.sync
        },
        'post'
      ).done(function(res) {
        if (res.r) {
          frm.trigger('form-submit-error', res.err);
          return;
        }

        res.sid = frmData.subjectId;
        res.doulist_id = doulistId;
        res.name = $.trim(encodeHTML(doulistName));

        frm.trigger('form-submit-success', res);
      });
    }
    return frm;
  }

  doulistDialogForm.initForm = initForm;
})()

// ref: docs/widgets/doulist_btn.html

;(function($){
var current_doulist_dialog;

function DoulistDialog(node, config) {
  showDoulistDialog(config);
  node.trigger('dialog:show', current_doulist_dialog);
  getExistDoulist(config, node);
  doulistDialogForm.initForm(current_doulist_dialog);
}

function showDoulistDialog(config) {
  if (current_doulist_dialog) {
    current_doulist_dialog.close();
  }
  config.picture = config.picture || '/pics/doulist_article.png';
  var dialog = current_doulist_dialog = dui.Dialog({
    title: '添加到豆列',
    width: 640,
    cls: 'dialog-doulist',
    content:
      (config.canview === 'False' ? '<div class="doulist-ft" style="text-align:left;">啊，该内容你没有权限查看或已被作者删除。</div>':
       '<form action="" method="post">\
        <div class="doulist-bd">\
          <div class="doulist-preview">\
            <div><img src="{{picture}}" /></div>\
            <p class="item-title">{{title}}</p>\
          </div>\
          <div class="doulist-content">\
            <div class="item">\
              <div class="item-hd">\
                <input type="text" name="search" class="dl_search" autocomplete="off" placeholder="请输入豆列名称" maxlength="40" />\
                <a href="javascript: void 0;" class="clear_search">×</a>\
                <h3>选择豆列</h3>\
                <input type="button" name="dl_choose" id="dl_new" autocomplete="off" class="lnk-flat" value="创建豆列" />\
              </div>\
              <div class="dl-bd">\
                <div class="dl-item">\
                  <div class="dl_new_title" style="display: none;"><input id="dl_title" type="text" class="basic-input dl-title" placeholder="输入新豆列名称" maxlength="40" />\
                   <input type="button" class="lnk-flat dl_new_submit" disabled value="创建" />\
                  </div>\
                </div>\
                <div class="dl-loading">\
                  加载中...\
                </div>\
              </div>\
            </div>\
            <div class="item">\
              <div class="item-hd">\
                <h3>推荐语<span>（选填）</span></h3>\
              </div>\
              <textarea id="doulist_item_comment" class="basic-textarea" name="comment" placeholder="告诉大家你添加它的理由吧"></textarea>\
            </div>\
            <input type="hidden" name="dl_cat" value="{{cate}}">\
            <input type="hidden" name="subject_id" value="{{id}}">\
            <input type="hidden" name="subject_kind" value="{{cate}}">\
            <input type="hidden" name="subject_url" value="{{url}}">\
            </div>\
          </div>\
          <div class="doulist-ft">\
            <a target="_blank" href="https://www.douban.com/service/bookmarklet" class="lnk-bookmarklet">小工具：从浏览器直接把网页内容加入豆列</a>\
            <span class="bn-flat cancel_btn"><input type="button" class="j_close_dialog" value="取消"></span>\
            <span class="bn-flat"><input type="submit" class="doulist_submit" value="保存"></span>\
          </div>\
      </form>\
      ').replace(/{{[^{}]+}}/g, function(match) {
        return encodeHTML(config[match.replace(/[{}]/g, "")]);
      })
    }, true).open();

  dialog.update();

  dialog.node.bind('dialog:close', function() {
    dialog.node.remove();
  });

  dialog.node.bind('dialog:change', function() {
    dialog.update();
  });
}

function getExistDoulist(config, link) {
  var dialog = current_doulist_dialog;
  asyncRequest(DOULIST_LIST
  ).done(function(e) {
    var DL_TMPL = '<div><input type="radio" value="{{id}}" id="{{id}}" name="dl_id"><label for="{{id}}"><span>{{count}}</span><b>{{name}}</b></label></div>';
    var DL_STR = '<div class="dl_exist_select">';
    $(e.doulist).each(function(i, dl) {
      DL_STR += DL_TMPL.replace(/{{[^{}]+}}/g, function(match) {
        return encodeHTML(dl[match.replace(/[{}]/g, "")]);
      });
    });
    DL_STR += '</div>';
    $('<div />', {'class': 'dl-item dl-item-exist'}).insertAfter($('.dl-item')).html(DL_STR);
    $('.dl-item-exist :radio').eq(0).attr('checked', true);
    $('.dl_new_title').hide();
    dialog.node.find('form #doulist_item_comment').val(e.comment);
    handleDoulist(config);
    handleNewDoulist();
    handleDoulistSearch();
  }).fail(function() {
    $('.dl-loading').text('+_+ 加载失败，请刷新重试');
  });
}

function handleDoulist(config) {
  var dialog = current_doulist_dialog;
  var dl_new = $('#dl_new');
  var dl_new_title = $('.dl_new_title');
  var dl_title = $('#dl_title');
  var dl_exist = $('.dl_exist_select');
  var dl_id = $('#dl_id');
  dl_new.click(function() {
      var form_error = $('.form-field-error');
      if (dl_new_title.is(':hidden')) {
        form_error.show() && dl_new.val('取消创建');
        dl_new_title.slideDown(function() {
          dl_exist.addClass('fold');
          dl_title.focus();
        });
      } else {
        form_error.hide() && dl_new_title.hide() && dl_new.val('创建豆列') && dl_exist.removeClass('fold');
      }
  });

  dialog.node.delegate(':radio', 'change', function(){
    var did = $(this).val();
    var url = DOULIST_COMMENT.replace('{doulist_id}', did);

    // for lt ie8
    $(this).parent().siblings('.checked_dl').removeClass('checked_dl');
    $(this).parent().addClass('checked_dl');

    asyncRequest(
      url, {sid: config.id, skind: config.cate}
    ).done(function(e){
      dialog.node.find('form #doulist_item_comment').val(e.comment);
    }).fail(function(){
      // ignore
    });
  });

  // stop page scrolling
  dl_exist.bind('DOMMouseScroll mousewheel wheel', function(e) {
    var scrollTo = null;
    if (e.type == 'mousewheel') {
      scrollTo = (e.originalEvent.wheelDelta * -1);
    } else if (e.type == 'wheel') {
      scrollTo = e.originalEvent.deltaY;
    } else if (e.type == 'DOMMouseScroll') {
      scrollTo = 40 * e.originalEvent.detail;
    }
    if (scrollTo) {
      e.preventDefault();
      $(this).scrollTop(scrollTo + $(this).scrollTop());
    }
  });
}

function handleNewDoulist() {
  var dialog = current_doulist_dialog;
  var dl_new_title = $('.dl_new_title');
  var dl_title = $('#dl_title');
  var dl_new_submit = $('.dl_new_submit');

  dl_title.bind('keyup change', function() {
    if ($.trim(dl_title.val()).length) {
      dl_new_submit.removeAttr('disabled');
    } else {
      dl_new_submit.attr('disabled', true);
    }
  });

  dl_title.bind('keydown', function(e) {
    if (e.keyCode === 13) {
      newListHandler(dialog, dl_new_title);
      return false;
    }
  });

  dl_new_submit.click(function() {
    newListHandler(dialog, dl_new_title);
  });
}

function handleDoulistSearch() {
  var dl_search = $('.dl_search');
  var dl_exist = $('.dl_exist_select');
  var dl_new_title = $('.dl_new_title');
  var dl_new = $('#dl_new');
  var clear_search = $('.clear_search');
  var promise = null;
  var search_query = '';
  function show_no_match() {
    $('.no-match-warning').length ? $('.no-match-warning').show() : dl_exist.before('<p class="no-match-warning">没有找到匹配豆列，可以换个关键词试试</p>');
  }
  clear_search.click(function() {
    dl_search.val('').change();
    return false;
  });
  dl_search.focus(function() {
    $(this).addClass('expand');
    if (!dl_new_title.is(':hidden')) {
      var form_error = $('.form-field-error');
      form_error.hide() && dl_new_title.hide() && dl_new.val('创建豆列') && dl_exist.removeClass('fold');
    }
  });
  dl_search.bind('keyup change', function() {
    var q = $.trim(dl_search.val());
    if (q.length && search_query !== q) {
      $('.no-match-warning').hide();
      if (promise) {
        promise.abort();
      }
      clear_search.hide();
      dl_search.addClass('loading');
      search_query = q;
      promise = asyncRequest(
        DOULIST_SEARCH_SELF,
        {
          'q': q
        });
      promise.done(function(res) {
        dl_search.removeClass('loading');
        clear_search.show();
        if (res && res.doulists) {
          dl_exist.children().hide();
          for (var i=0; i<res.doulists.length; i++) {
            $('#'+res.doulists[i].id).parent().show();
          }
          if (!res.doulists.length) {
            show_no_match();
          }
        }
      }).fail(function(){
        show_no_match();
        dl_search.removeClass('loading');
        clear_search.show();
      });
    } else if (q.length === 0) {
      $('.no-match-warning').hide();
      dl_exist.children().show();
      clear_search.hide();
    }
  });

  dl_search.bind('keydown', function(e) {
    if (e.keyCode === 13) {
      $('.dl-item-exist label:visible').eq(0).prev().attr('checked', true);
      return false;
    }
  });
}

// 表单验证（创建豆列时）
function newListHandler(dialog, wrap) {
  var DL_TMPL = '<div><input type="radio" value="{{id}}" id="{{id}}" name="dl_id" checked="checked"><label for="{{id}}"><b>{{name}}</b></label></div>';
  var dl_title = $('#dl_title');
  var dl_new = $('#dl_new');
  var dl_exist = $('.dl_exist_select');
  var validateRules = {
    '#dl_title': function(e) {
      if (e.val() === '') {
        validateForm.displayError(e, '请给你的列表起一个名称');
        return false;
      }
      return true;
    }
  }
  if (validateForm(wrap, validateRules)) {
    var dl_new_submit = $('.dl_new_submit');
    dl_new_submit.attr('disabled', true);
    asyncRequest(DOULIST_CREATE, {title: $('#dl_title').val()}, 'post')
      .done(function(res) {
        if (res.r) {
          alert(res.err);
          return;
        }

        res.doulist_id = res.id;
        var DL_STR = DL_TMPL.replace(/{{[^{}]+}}/g, function(match) {
          return encodeHTML(res[match.replace(/[{}]/g, "")]);
        });
        var new_dl = $(DL_STR);
        new_dl.prependTo(dl_exist);

        // for lt ie8
        new_dl.siblings().removeClass('checked_dl');
        new_dl.addClass('checked_dl');

        dl_exist.animate({'scrollTop': 0}, 100);
        dl_new.click();
        dl_title.val('').change();
      })
      .fail(function() {
        alert('网络问题，请稍后重试');
        dl_new_submit.removeAttr('disabled');
      });
  } else {
    dialog.update();
  }
  return wrap;
}

$.fn.doulistDialog = function(options) {
  return new DoulistDialog($(this), options);
};

})(jQuery);


        $(document).delegate('.lnk-doulist-add', 'click', function(e) {
          e.preventDefault();
          var self = $(this);
          var param = $.extend({'url':''}, $(this).data(), {link: this.href});
          // 兼容jquery 1.8.x
          var newParam = {};
          for (key in param) {
            if (typeof param[key] === 'number') {
              param[key] = self.attr('data-'+key);
            }
            if (param.hasOwnProperty(key)) {
              newParam[$.camelCase(key)] = param[key];
            }
          }
          self.doulistDialog(newParam);
        });

      });
    });
  
        ;(function(e,d,b){var c={weibo:{appkey:""},douban:{},qq:{},qzone:{}};function a(f,g){this.config=b.extend(true,{},c,f);var h=a.serializeOpenGraph();this.pageInfo=b.extend({title:h.title||d.title,url:h.url||d.location.href,pic:(b.type(h.image)==="array"?h.image[0]:h.image)||"",desc:h.description||"",site:h.site_name||""},g)}a.serializeOpenGraph=function(){var g={};b('meta[property^="og:"]').each(function(j,k){k=b(k);var h=k.attr("property").replace(/^og\:/,"");g[h]=k.attr("content")});var f=b('meta[property="og:image"]');if(f.length>1){g.image=f.map(function(h,j){return b(j).attr("content")}).toArray()}return g};a.prototype={constructor:a,set:function(g,f){var h={};h[g]=f;b.extend(this.config,h)},get:function(f){var g=b.extend({},this.pageInfo,this.config[f]);return({douban:{url:"https://www.douban.com/share/service/?"+b.param({href:g.url,name:g.title,image:g.pic,text:g.desc})},weibo:{url:"http://v.t.sina.com.cn/share/share.php?"+b.param({appkey:g.appkey,url:g.url,title:g.title,pic:g.pic})},qq:{url:"http://connect.qq.com/widget/shareqq/index.html?"+b.param({url:g.url,desc:g.title,pics:g.pic,site:g.site})},qzone:{url:"http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?"+b.param({url:g.url,title:g.title,summary:g.desc,pics:g.pic})}})[f]},openInNewWindow:function(i,h){h=h||{};var j=h.width||500,f=h.height||360;var g=b.extend({},{width:j,height:f,toolbar:0,location:0,resizable:1,scrollbars:"yes",left:h.left||(screen.width-j)/2,top:h.top||(screen.height-f)/2},h);e.open(i,"SocialSharing",b.param(g).replace(/&/g,","))}};window.SocialSharing=a})(window,document,jQuery);
        ;(function() {
            var doc = $(document)
            var sharingConfig = {
                weibo: {
                    appkey: '3015934887'
                }
            }
            var logVendors = {
                'weibo': 'bshare_sina',
                'qq': 'bshare_qqim',
                'qzone': 'bshare_qzone'
            }
            var windowFeatures = {
                qq: { width: 800, height: 600 },
                qzone: { width: 800, height: 600 }
            }
            function getSocialSharing(elem) {
                var pageInfo = $.parseJSON(elem.closest('.clst').find('.data-review-sharing').text())
                return new SocialSharing(sharingConfig, pageInfo)
            }
            doc.delegate('.sharing-button', 'mouseover', function(e) {
                var button = $(this),
                    sharing = button.closest('.sharing'),
                    sharingLayer = sharing.find('.sharing-layer'),
                    socialSharing = getSocialSharing(sharing)
                sharing.find('.sharing-wechat-qrcode').html('<img src="http://douban.com/qrgen/v?text=' + encodeURIComponent(socialSharing.pageInfo.url) + '" alt="扫描二维码" />')
                sharingLayer.removeClass('is-hidden')
            })
            doc.delegate('.sharing-layer', 'mouseleave', function() {
                $(this).addClass('is-hidden')
            })
            doc.delegate('[data-share]', 'click', function() {
                var elem = $(this),
                    network = elem.data('share'),
                    socialSharing = getSocialSharing(elem.closest('.sharing')),
                    url = 'http://www.douban.com/link2?type=redir&vendor=' + logVendors[network] + '&url=' + encodeURIComponent(socialSharing.get(network).url)
                socialSharing.openInNewWindow(url, windowFeatures[network])
            })
        })();
    
    $(document).ready(function(){
      var annotationComments = $('.comments .con');

      annotationComments.each(function() {
        var el = $(this)
          , note = el.find('.reading-note')
          , shortNote = note.find('.short')
          , fullNote = note.find('.all')
          , unfolder = el.find('.note-unfolder')
          , folder = el.find('.note-folder');

        unfolder.click(function(e) {
          e.preventDefault();
          unfolder.hide();
          folder.css('display', 'block');
          fullNote.show();
          shortNote.hide();
        });
        folder.click(function(e) {
          e.preventDefault();
          unfolder.css('display', 'block');
          folder.hide();
          fullNote.hide();
          shortNote.show();
        });
      });
    });
  
    $(function(){
      $('.add2cartWidget').each(function() {
        var add2CartBtn = $(this).find('.add2cart');
        var inCartHint = $(this).find('.book-in-cart');
        var deleteBtn = inCartHint.find('.delete-cart-item');

        deleteBtn.click(function(e) {
          e.preventDefault();
          $.post_withck('/cart', {remove: this.rel}, function() {
            add2CartBtn.show();
            inCartHint.hide();
          });
        });
      });
    });
  