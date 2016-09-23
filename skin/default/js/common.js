/**
 * Created by lqm on 2016/9/6.
 * @desc 公共底部预约
 */
$(function () {
    //底部反馈
    var feedback = {
        init: function () {
            this.initDom();
            this.initEvent();
        },
        initDom: function () {
            this.nodes = {
                name: $('#fd_name'),
                mycall: $('#fd_mycall'),
                saytext: $('#fb_saytext'),
                btn: $('#feedbackBtn')
            }
        },
        initEvent: function () {
            var that = this;
            that.nodes.btn.click(function () {
                if (!$.trim(that.nodes.name.val())) {
                    alert('姓名不能为空');
                    return false;
                }
                if (!$.trim(that.nodes.mycall.val())) {
                    alert('电话不能为空');
                    return false;
                }
                if (!$.trim(that.nodes.saytext.val())) {
                    alert('留言内容不能为空');
                    return false;
                }
                var _data = {
                    name: $.trim(that.nodes.name.val()),
                    mycall: $.trim(that.nodes.mycall.val()),
                    saytext: $.trim(that.nodes.saytext.val())
                };
                that.startFB(_data);
            });
        },
        startFB: function (data) {
            $.ajax({
                url: '//best.tiny.ren/api/index.php?m=Show&a=feedback',
                type: 'POST',
                data: data,
                success: function (e) {
                    if (e == 1) {
                        alert('留言成功');
                    } else if (e == 0) {
                        alert('操作失败，请稍候再试');
                    }
                }
            });
        }
    };
    feedback.init();
});