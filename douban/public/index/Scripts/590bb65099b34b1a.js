
    Douban.init_edit_signature = function(o){
        var disp = $('#display',o), form = $('form',o)[0], a = $('a','#edi');
        var error = $('#error', o);
        var show = function(t){
            if(t != undefined){
                disp.text(t);
                if (disp.text() == ''){
                    a.text('添加签名档').addClass('sign-text');
                }else{
                    a.text('编辑').removeClass('sign-text');
                };
            }
            disp.show();
            $(form).hide();
            $('#edi').show();
        }
        show(disp.text());
        if(form.name) $(form).set_len_limit(form.name);
        $(form).submit(function(){
            remote_submit_json(form, function(r){
                if (r.r == '0') {
                    show(r.signature);
                    error.css('display', 'none');
                    disp.css('font-style', 'normal');
                } else {
                    error.text(r.error);
                    error.css('display', 'inline');
                    $('input', 'form').attr('disabled', 0);
                    $(form).css('display', 'inline');
                    $(':input:first', o).focus();
                }
            })
            return false;
        })
        $('.cancel',form).click(function(){
            show();
            error.css('display', 'none');
        });
        $('#edi',o).click(function(){
            $('#display,#edi').hide();
            $('input', 'form').attr('disabled', 0);
            $(form).css('display', 'inline');
            $(':input:first', o).focus();
            return false;
        })
    }


    


Do(function() {
    if ($('#remarkMod').length) {
        var $display = $('#remarkDisplay'),
            $editBtn = $('#editRemark'),
            $form = $editBtn.next(),
            $error = $('#remarkError');
        function showResult() {
            $editBtn.show();
            $display.show();
            $form.hide();
            $error.hide();
            updateRemarkBtn();
        }
        function showForm() {
            $editBtn.hide();
            $display.hide();
            $form.css('display', 'inline');
        }
        function showError(tip) {
            $error.text(tip).show();
        }
        function updateRemarkBtn() {
            if ($.trim($display.text()).length) {
                $editBtn.text('编辑');
            } else {
                $editBtn.text('添加备注');
            }
        }

        updateRemarkBtn();

        $editBtn.click(function() {
            showForm();
        });
        $form.submit(function(e) {
            e.preventDefault();
            var url = '/j/contact/remark',
                people = $form.find('.people').val(),
                remark = $form.find('#remarkInput').val();
            remark = $.trim(remark);
            $.postJSON_withck(url, {
                    'people': people,
                    'remark': remark
                }, function(o) {
                    if (o.result === true) {
                        if (!o.msg.length) {
                            $display.text('');
                        } else {
                            $display.text('（备注：' +o.msg+ '）');
                        }
                        showResult();
                    } else {
                        showError(o.msg);
                    }
                }
            )
        });
        $form.find('.cancel').click(function() {
            showResult();
        });
    }
});

