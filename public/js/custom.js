$(document).ready(function() {
    $('.dropdown').on('show.bs.dropdown', function(e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
    });
    $('.dropdown').on('hide.bs.dropdown', function(e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
    });
});



$(document).ready(function() {
    var $crmSidebar = $(".crm-sidebar");
    var $body = $("body");

    $(".sidebar-open-btn, .sidebar-close-btn").click(function() {
        $crmSidebar.toggleClass("crm-sidebar-open");
        $body.toggleClass("crm-sidebar-bg");
    });
});

$(document).ready(function() {

    function createProgressBar(containerId, trailColor, color, percentage) {
        return new ProgressBar.Circle(containerId, {
            trailColor: trailColor,
            color: color,
            strokeWidth: 9,
            trailWidth: 9,
            text: {
                value: (percentage * 100).toFixed(0) + '%',
                style: {
                    backgroundColor: trailColor,
                },
            },
            svgStyle: { strokeLinecap: 'round' },
        });
    }

    var progressData = [
        { containerId: '#dashboard-progress-1', trailColor: 'rgba(18, 170, 103, 0.10)', color: '#12AA67', percentage: 0.78 },
        { containerId: '#dashboard-progress-2', trailColor: 'rgba(18, 143, 170, 0.10)', color: '#128FAA', percentage: 0.25 },
        { containerId: '#dashboard-progress-3', trailColor: 'rgba(124, 125, 65, 0.10)', color: '#7C7D41', percentage: 0.49 },
        { containerId: '#dashboard-progress-4', trailColor: 'rgba(104, 206, 88, 0.10)', color: '#68CE58', percentage: 0.36 },
        { containerId: '#dashboard-progress-5', trailColor: 'rgba(133, 177, 158, 0.10)', color: '#85B19E', percentage: 0.06 },
    ];

    progressData.forEach(function(data) {
        var progressBar = createProgressBar(data.containerId, data.trailColor, data.color, data.percentage);
        progressBar.animate(data.percentage);
    });
});


$(document).ready(function() {
    $(".year-picker").datepicker({
        autoclose: true,
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
    });

    $(".year-picker").datepicker().on('show', function(e) {
        $('.prev').html('<i class="fa-solid fa-angles-left"></i>');
        $('.next').html('<i class="fa-solid fa-angles-right"></i>');
    });
});

$(document).ready(function() {
    $('select.comn-form-control').select2({
        minimumResultsForSearch: -1,
        width: "100%",
    });
});
$(document).ready(function() {
    $('.filter-menu').on('click', function(event) {
        event.stopPropagation();
    });
});

$(document).ready(function() {
    $(".properties-open-close-row").each(function() {
        var $box = $(this);
        var openPropertiesBtn = $box.find(".open-properties");
        var closePropertiesBtn = $box.find(".close-properties");

        openPropertiesBtn.css("display", "none");
        openPropertiesBtn.click(function(e) {
            e.preventDefault();
            closePropertiesBtn.css("display", "inline-flex");
            openPropertiesBtn.css("display", "none");
        });

        closePropertiesBtn.click(function(e) {
            e.preventDefault();
            openPropertiesBtn.css("display", "inline-flex");
            closePropertiesBtn.css("display", "none");
        });
    });

});


$(document).ready(function() {

    $('#addSellerForm').smartWizard({
        theme: 'dots',
        transition: {
            animation: 'fade',
        },
        toolbar: {
            extraHtml: '<button class="sw-btn comn-btn wizard-submit-btn d-none">submit</button>'
        },
        lang: {
            previous: 'Back'
        },
    });
    $("#addSellerForm").on("leaveStep", function(e, anchorObject, stepIndex, stepDirection, stepPosition) {
        if (stepDirection == "2") {
            $('.wizard-submit-btn').removeClass('d-none');
            $('.sw-btn-next').addClass('d-none');
        } else {
            $('.wizard-submit-btn').addClass('d-none');
            $('.sw-btn-next').removeClass('d-none');
        }
    });

    $('.sw-btn-prev').html('<i class="fa-solid fa-angle-left"></i>back');
    $('.sw-btn-next').html('next<i class="fa-solid fa-angle-right"></i>');
});




$(document).ready(function() {

    var noOfunitRow = $(".no-of-unit-row");

    noOfunitRow.css("display", "none");
    if ($("#developerProperty").prop("checked")) {
        noOfunitRow.css("display", "flex");
    }

    $("input[name='iWantToSellRadio']").change(function() {
        if ($("#developerProperty").prop("checked")) {
            noOfunitRow.css("display", "flex");
        } else {
            noOfunitRow.css("display", "none");
        }
    });

});


$(document).ready(function() {

    $(".rera-data-row").hide();
    $("input[name='reraregistered']").change(function() {
        if ($(this).prop("checked")) {
            $(".rera-data-row").show();
        } else {
            $(".rera-data-row").hide();
        }
    });

});

$(document).ready(function() {

    var additionalPricingRow = $(".additional-pricing-row");
    var additionalPricingData = $(".additional-pricing-data");
    var additionalPricingBtn = $("#additional-pricing-btn");

    additionalPricingRow.hide();
    additionalPricingData.hide();
    additionalPricingBtn.click(function(e) {
        e.preventDefault();
        additionalPricingRow.slideDown();
        additionalPricingBtn.hide();
    });
    $("#additional-pricing-row-delete").click(function(e) {
        e.preventDefault();
        additionalPricingRow.slideUp();
        additionalPricingBtn.show();
    });
    $("#additional-pricing-data-row-add").click(function(e) {
        e.preventDefault();
        additionalPricingRow.slideUp();
        additionalPricingData.slideDown();
    });
    $("#additional-pricing-edit-btn").click(function(e) {
        e.preventDefault();
        additionalPricingData.slideUp();
        additionalPricingRow.slideDown();
    });
    $("#additional-pricing-delete-btn").click(function(e) {
        e.preventDefault();
        additionalPricingData.slideUp();
        additionalPricingBtn.show();
    });
});

$(document).ready(function() {
    $(".add-manually-box").hide();
    $("#amenities-add-manually-btn").click(function(e) {
        e.preventDefault();
        $("#add-manually-amenities-box").slideDown();
    });
    $("#delete-amenities-box").click(function(e) {
        e.preventDefault();
        $("#add-manually-amenities-box").slideUp();
    });
    $("#nearby-add-manually-btn").click(function(e) {
        e.preventDefault();
        $("#add-manually-nearby-box").slideDown();
    });
    $("#delete-nearby-box").click(function(e) {
        e.preventDefault();
        $("#add-manually-nearby-box").slideUp();
    });
});


$(document).ready(function() {
    $(document).delegate('.ui-page', 'touchmove', false);

    var budgetPriceSlider = $("#budget-price-slider");
    var budgetPriceValue = $("#budget-price-value");

    function formatNumberWithCommas(number) {
        return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    budgetPriceSlider.slider({
        range: "max",
        min: 0,
        max: 10000000,
        step: 1,
        value: 3050000,
        slide: function(event, ui) {
            budgetPriceValue.val(formatNumberWithCommas(ui.value));
            updateSliderHandle(ui.value);
        }
    });

    budgetPriceValue.on('input', function() {
        var value = parseInt($(this).val().replace(/,/g, '')) || 0;
        budgetPriceSlider.slider("value", value);
        updateSliderHandle(value);

        $(this).val(formatNumberWithCommas(value));
    });

    $('.btn-plusminus').click(function() {
        var direction = $(this).data("dir");
        var currentValue = budgetPriceSlider.slider("value");
        var increment = (direction === "plus") ? 10000 : -10000;
        var newValue = currentValue + increment;

        budgetPriceSlider.slider("value", newValue);
        updateSliderHandle(newValue);
        budgetPriceValue.val(formatNumberWithCommas(newValue));
    });

    function updateSliderHandle(value) {
        budgetPriceSlider.find(".ui-slider-handle").text(formatNumberWithCommas(value));
    }
});



$(document).ready(function() {
    var options = {
        series: [{
            name: "",
            data: [279, 250, 290, 251, 300, 275, 350, 320, 380, 360, 440, 360]
        }],
        chart: {
            height: 350,
            width: '100%',
            type: 'area',
            toolbar: {
                show: false,
            },
            zoom: {
                enabled: false
            },
            offsetX: -15,
            fontFamily: 'poppins, sans-serif',
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight',
            colors: ['#FFCB6D'],
            width: 1,
        },
        fill: {
            type: "gradient",
            colors: ['#FFCB6D'],
            gradient: {
                opacityFrom: .6,
                opacityTo: .1,
                stops: [65, 100, 100]
            }
        },
        markers: {
            hover: {
                size: 7,
            },
            colors: ['#E7B262'],
        },

        tooltip: {
            followCursor: true,
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'oct', 'nov', 'dec'],
            axisBorder: {
                show: false,
            },
            labels: {
                style: {
                    cssClass: 'lead-perfo-xaxis-label',
                },
            },
            crosshairs: {
                stroke: {
                    color: '#1e1e1e26',
                },
            },
            tooltip: {
                enabled: false,
            },
        },
        yaxis: {
            min: 100,
            max: 600,
            tickAmount: 5,
        },
        responsive: [{
                breakpoint: 1199,
                options: {
                    chart: {
                        height: 250,
                        offsetX: -10,
                    },
                },
            },
            {
                breakpoint: 767,
                options: {
                    chart: {
                        height: 220,
                        offsetX: 0,
                    },
                },
            },
        ],
    };

    var chart = new ApexCharts(document.querySelector("#lead-performance-chart"), options);
    chart.render();
});