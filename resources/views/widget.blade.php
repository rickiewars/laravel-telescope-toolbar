<!-- Start of Telescope Toolbar widget !-->
<div id="sfwdt{{ $token }}" class="sf-toolbar sf-display-none"></div>

<script @if(isset($csp_script_nonce) && $csp_script_nonce) nonce="{{ $csp_script_nonce }}" @endif>/*<![CDATA[*/
  (function () {
    Sfjs.loadToolbar('{{ $token }}');
    @foreach ($requestStack as $request)
      Sfjs.requestStack.push(@json($request));
    @endforeach
  })();
/*]]>*/</script>
<!-- End of Telescope Toolbar widget !-->
