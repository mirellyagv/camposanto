var BootstrapDatepicker = {
    init: function() {
        $("#m_datepicker_1").datepicker({
            todayHighlight: !0,
            orientation: "bottom left",
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_1_end").datepicker({
            todayHighlight: !0,
            orientation: "top right",
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_1_modal").datepicker({
            todayHighlight: !0,
            orientation: "bottom left",
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_2, #m_datepicker_2_validate").datepicker({
            todayHighlight: !0,
            orientation: "bottom left",
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_2_modal").datepicker({
            todayHighlight: !0,
            orientation: "bottom left",
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_3, #m_datepicker_3_validate").datepicker({
            todayHighlight: !0,
            autoclose: true,
            orientation: "bottom left",
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_3_modal").datepicker({
            todayHighlight: !0,
            autoclose: true,
            orientation: "bottom left",
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_4_1").datepicker({
            orientation: "bottom left",
            todayHighlight: !0,
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_4_2").datepicker({
            orientation: "bottom left",
            todayHighlight: !0,
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_4_3").datepicker({
            orientation: "bottom left",
            todayHighlight: !0,
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_4_4").datepicker({
            orientation: "bottom left",
            todayHighlight: !0,
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_4_5").datepicker({
            orientation: "bottom left",
            todayHighlight: !0,
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_4_6").datepicker({
            orientation: "bottom left",
            todayHighlight: !0,
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_4_7").datepicker({
            orientation: "bottom left",
            todayHighlight: !0,
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_5").datepicker({
        	orientation: "bottom left",
            todayHighlight: !0,
            autoclose: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        }),
        $("#m_datepicker_6").datepicker({
            todayHighlight: !0,
            autoclose: true,
            orientation: "bottom left",
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        })
    }
};
jQuery(document).ready(function() {
    BootstrapDatepicker.init()
});
