jQuery(function($) {
    TraceKit.report.subscribe(function yourLogger(error) {
        if (!window.ga) {
            return;
        }

        ga('send', 'exception', {
          'exDescription': JSON.stringify(error),
          'exFatal': false
        });
    });
});
