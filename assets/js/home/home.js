var cpr = cpr || {};
cpr.home = {
    init: function(){
        cpr.home.bindEvents();
    },
    bindEvents: function(){
        $('.get-profile').on('click', function(e){
            cpr.home.call('/api/profile/get-profile');
        });
        $('.action-btn').on('click', function(e){
            cpr.home.call('/api/results/get-results');
        });
        $('.user-list-btn').on('click', function(e){
            cpr.home.call('/api/user/list');
        });
        $('.practice').on('click', function(e){
            cpr.home.call('/api/practice');
        });
    },
    call: function(theUrl){
        //var api_request_data = '{"APIKEY":"EE109DAC-CDA6-4299-8095-F6D6DBF96380","APPLICATION_NAME":"web","CLIENT_TRACK_ID":"knovel","METHOD":{"NAME":"logging/send-event","PARAMS":{"EVENT_TYPE":"UI","EVENT_NAME":"PAGE_LOAD","EVENT_VALUE":{"URL":"https://lalith-new.knewknovel.com/web/browse.v","KPROMOTER":""}},"TYPE":"POST"},"OPTIONAL_INPUT":{"ANALYTICS_ID":"","DOMAIN_TOKEN":"","DOMAIN_NAME":"moc.levonkwenk.wen-htilal"},"SESSION":{"ID":"59b77330-258a-c36c-223c-0425631700b7"}}';
        
        var api_request_data = JSON.stringify({name:'lalith'});
        
        //var api_request_data = {myName:'lalith', sno: '1'};
        
        $.ajax({
            type: 'GET',
            url: theUrl,
            data: api_request_data,
            contentType: "application/json; charset=utf-8",
            success: function(response) {
                                
            },
            error: function(jqXHR, textStatus, errorThrown) {
                
            }
        });
    }
}

$(document).ready(function(e){
    cpr.home.init();
});