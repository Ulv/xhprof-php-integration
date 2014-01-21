<?php
$xhprof_url = "http://xhprof.dev";

if (extension_loaded('xhprof')) {
    $xhprof_data = xhprof_disable();
    include_once "xhprof_lib/utils/xhprof_lib.php";
    include_once "xhprof_lib/utils/xhprof_runs.php";
    $xhprof_runs = new XHProfRuns_Default();
    $run_id      = $xhprof_runs->save_run($xhprof_data, "xhprof_test");

    // disable echo for ajax calls
    if (! @$_SERVER["HTTP_X_REQUESTED_WITH"]) {
        /*
         // HMTL output
        echo <<<EOD
<div class="navbar navbar-fixed-bottom" style="background-color: #000; width:36px; padding: 4px;margin-bottom:20px;">
    <a href='http://xhprof.dev/index.php?run={$run_id}&source=xhprof_test' target="_blank" style="color:#fff;
    font-size: .8em;">xhProf</a>
</div>

EOD;
         */

        // PLAIN TEXT
        echo "<!-- xhprof report: $xhprof_url/index.php?run={$run_id}&source=xhprof_test -->";
    }
}
