<?php return [ 'body' => function($opt) { ?>
    <div id="request"></div>
    <script>
        Z.Request.action("request", {
            parameter: "Params",
        },(res) => {
            $("#request").text(res.request);
        });
    </script>

    <div id="root-request"></div>
    <script>
        Z.Request.root("core/rootrequest", "normal", {"abc": "def"}, (res) => {
            $("#root-request").html(res);
        }, true, false);
    </script>

    <div id="root-request-parse"></div>
    <script>
        Z.Request.root("core/rootrequest", "parse", {}, (res) => {
            $("#root-request-parse").html(res.result);
        }, true, true);
    </script>
<?php }]; ?>