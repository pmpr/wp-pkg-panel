/*! For license information please see trigger.0o9cFESYk.js.LICENSE.txt */
!function(){"use strict";window.WP_HOOKS_STORE=window.WP_HOOKS_STORE||{},window.WP_HOOKS=window.WP_HOOKS||{action:{},filter:{}};const i={do:function(i,n){let t,O=n[0];if(!(O in WP_HOOKS[i]))return n[1];[].shift.apply(n);for(let o in WP_HOOKS[i][O])if(t=WP_HOOKS[i][O][o],void 0!==t)for(let O in t){let o=t[O].callback;"function"==typeof o&&("filter"===i?n[0]=o.apply(null,n):o.apply(null,n))}return"filter"===i?n[0]:void 0},add:function(i,n,t,O=10){O=O||10,n in WP_HOOKS[i]||(WP_HOOKS[i][n]=[]),O in WP_HOOKS[i][n]||(WP_HOOKS[i][n][O]=[]),WP_HOOKS[i][n][O].push({callback:t,priority:O})},applyFilters:function(n,t,O){return i.do("filter",arguments)},addFilter:function(n,t,O){i.add("filter",n,t,O)},doAction:function(n,t){return WP_HOOKS_STORE[n]=[t],i.do("action",arguments)},addAction:function(n,t,O=0){if(i.add("action",n,t,O),0===O){let i=WP_HOOKS_STORE[n];void 0!==i&&t.apply(null,i)}}};window.PMPRTrigger=i}();