<script>
    var ep = 0;
    jQuery(".episode-button").each(function() {
        ep++;
        var el = jQuery(`#ep${ep}`);
        var link = el.attr("href");
        if(link == undefined) {
            el.css("display", "none");
        }
        console.log(link);
    })
</script>