<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<style>
    #cfacebook{position:fixed;bottom:38px;right:20px;z-index:99;width:260px;height:auto;box-shadow:6px 6px 6px 10px rgba(0,0,0,0.2);border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}
    #cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}
    #cfacebook .fchat .fb-page{margin-top:-5px;float:left;}
    #cfacebook a.chat_fb{float:left;padding:0 25px;width:260px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}
    #cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}
    .fchat span{ width:260px!important;}
</style>
<script>
    jQuery(document).ready(function () {
        jQuery(".chat_fb").click(function() {
            jQuery('.fchat').toggle('slow');
        });
    });
</script>
<div id="cfacebook">
    <a href="javascript:;" class="chat_fb" onClick="return:false;"><i class="fa fa-facebook-square"></i> {{$appInfo->app_title_chat_box}}</a>
    <div class="fchat">
        <div style="width:250px;" class="fb-page"
             data-href="/{{$appInfo->app_link_facebook_fanpage}}"
             data-tabs="messages"
             data-width="260"
             data-height="280"
             data-small-header="true">
            <div class="fb-xfbml-parse-ignore">
                <blockquote></blockquote>
            </div>
        </div>
    </div>


</div>
</div>
