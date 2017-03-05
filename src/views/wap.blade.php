<!--WAP版-->
<div id="SOHUCS" {{ $sourceId ? 'sid="' . $sourceId . '"' : '' }}></div>
<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" 
src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id={{ config('changyan.appid') }}&conf={{ config('changyan.conf') }}">
</script>