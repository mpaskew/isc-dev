/**
 * User: andybaird
 * Date: 1/7/13
 * Time: 12:03 PM
 */

(function($) {
    $(function() {
        if ("onhashchange" in window) {
            window.onhashchange = function() {
                return iscEvents.hashChangeTrigger();
            }
            iscEvents.hashChangeTrigger();
        } else {
            // Shim for IE7
            $('#filter-all').on('click',function() {
                iscEvents.filter('all');
            });

            $('#filter-other').on('click',function() {
                iscEvents.filter('other');
            });

            $('#filter-isc').on('click',function() {
                iscEvents.filter('isc');
            });

        }
    });
})(jQuery);


var iscEvents  = {
    selector: '.toggle-event',
    iscOrganizerId: 8,
    otherOrganizerId: 289,

    hashChangeTrigger: function() {
        var hashParts = location.hash.split('#');
        var hash = hashParts[1];
        if (hash == 'all') {
            iscEvents.filter('all');
            $('.event-filter').removeClass('active');
            $('#filter-all').addClass('active');
        } else if (hash == 'other') {
            iscEvents.filter('other');
            $('.event-filter').removeClass('active');
            $('#filter-other').addClass('active');
        } else if (hash == 'isc') {
            iscEvents.filter('isc');
            $('.event-filter').removeClass('active');
            $('#filter-isc').addClass('active');
        }
    },

    filter: function(type) {
        if (type=='all') {
            $( this.selector ).show();
        } else if (type=='other') {
            $( this.selector ).hide();
            $( this.selector + '.organizer-' + this.otherOrganizerId).show();
        } else if (type=='isc') {
            $( this.selector ).hide();
            $( this.selector  + '.organizer-' + this.iscOrganizerId).show();
        }
    }
}