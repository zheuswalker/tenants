/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3 & 4
Version: 4.0.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v4.0/admin/
*/

var handleDataTableDefault = function() {
	"use strict";
 

    if ($('#table').length !== 0) {
        $('#table').DataTable({
              retrieve: true,
            responsive: true
        });
    }
};

var TableManageDefault = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleDataTableDefault();
        }
    };
}();