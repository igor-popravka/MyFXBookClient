<?php
/** @var \WDIP\Plugin\Viewer $this */
/** @var \WDIP\Plugin\ChartOptions $options */

$options = $this->getOptions();
?>

<div id="<?= $options->uid; ?>" class="wdip-myfxbook-chart"></div>
<script>
    (function ($) {
        var options = '<?= $options->toJSON(); ?>';
        $('#<?= $options->uid; ?>').myFxBook(JSON.parse(options));
    })(jQuery);
</script>