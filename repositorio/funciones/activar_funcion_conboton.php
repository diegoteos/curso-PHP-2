<?php
$html = "hola mundo";
function php_func($html)
{
    echo $html;
}
?>
<button onclick="clickMe(<?php $html ?>)"> De Click </button>
<script>
    function clickMe(<?php $html ?>) {
        var result = "<?php php_func($html); ?>"
        document.write(result);
    }
</script>