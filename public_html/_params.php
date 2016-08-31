<?php


switch (dirname(__FILE__)) {
    case '/Users/citrusplus01/Sites/dubs/dub-floor.ru/public_html':
        error_reporting(1);
        $site = 'dub-floor';

        $from = 'distribution@dub-floor.ru';
        $to = array(
//    'sales@dub-floor.ru',
            'vn.gerasimov@citrus-plus.ru',
        );
        $dev = 'Dev_mode';
        break;
    default:
        error_reporting(0);
        $site = 'dub-floor.ru';
        $from = 'distribution@dub-floor.ru';
        $to = array(
            'sales@dub-floor.ru',
//            'vn.gerasimov@citrus-plus.ru',
        );
        $metrika_id = '33555768';

        $metrika_code = '<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter' . $metrika_id . ' = new Ya.Metrika({ id:' . $metrika_id . ', clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/' . $metrika_id . '" style="position:absolute; left:-9999px;" alt="" /></div></noscript>';

        $google_id = '962541576';
        $google_code = '<!-- Код тега ремаркетинга Google -->
        <!--------------------------------------------------
        С помощью тега ремаркетинга запрещается собирать информацию, по которой можно идентифицировать личность пользователя. Также запрещается размещать тег на страницах с контентом деликатного характера. Подробнее об этих требованиях и о настройке тега читайте на странице http://google.com/ads/remarketingsetup.
        --------------------------------------------------->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = '.$google_id.';
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/'.$google_id.'/?value=0&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>';
        
        $google_analitics_code = 'UA-78969589-1';
        
        $google_analitics = "<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', '".$google_analitics_code."', 'auto');
        ga('send', 'pageview');

        </script>";
        break;
}

