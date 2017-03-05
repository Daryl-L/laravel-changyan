<!--PC版-->
<div id="SOHUCS" {{ $sourceId ? 'sid="' . $sourceId . '"' : '' }}></div>
<script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
<script type="text/javascript">
@if ($score)
window._config = { showScore: true };
@endif
window.changyan.api.config({
appid: "{{ config('changyan.appid') }}",
conf: "{{ config('changyan.conf') }}"
});
</script>
