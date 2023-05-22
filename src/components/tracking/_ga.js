/* exported GAcustom */
var GAcustom = function(){
    var clickN = 0,
        cid, // client id
        ea, // action
        el = '', // label
        ec; // category


    function sendToGA(params) {
        clickN++; // ev = event value

        ga(function(tracker) {
            cid = tracker.get('clientId');
            console.log('ga_'+ params);

            $.ajax({
                url: `https://www.google-analytics.com/collect?v=1&t=event&tid=UA-70069700-3&cid=${cid}${params}&ev=${clickN}`,
                type: 'POST',
                cache: false,
                async: true,
                dataType: 'json'
            });
        });
    }

    // track all buttons
    $(document).on('click', 'button', function(){
        var $xthis = $(this);

        ec = $xthis.data('gaec') || 'btn forgotten';
        ea = $xthis.text().replace(/[^a-zA-Z ]/g, ''); // action
        el += ea+'|'; // label

        sendToGA(`&ec=${ec}&ea=${ea}&el=${el}`);
    });


    // track all links
    $(document).on('click', 'a', function(){
        var $xthis = $(this);

        ec = $xthis.data('gaec') || 'link forgotten';
        ea = $xthis.data('gaea') || $xthis.text().replace(/[^a-zA-Z ]/g, ''); // action
        el += ea+'|'; // label

        sendToGA(`&cid=${cid}&ec=${ec}&ea=${ea}&el=${el}`);
    });

    return {
        sendToGA
    };
}();
