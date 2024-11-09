var $grid = $(".sotcox-project-grid");

	var filterFns = {};
	var defaultFilterValue = $(".sotcox-project-filter li:first-child").attr("data-filter");
	
    $grid.isotope({
        filter: defaultFilterValue,
    });
	
	$(".sotcox-project-filter").on("click", "li", function () {
		var filterValue = $(this).attr("data-filter");
		filterValue = filterFns[filterValue] || filterValue;
		$grid.isotope({
			filter: filterValue,
		});
	});


    // project filter active
	var $grid = $(".sotcox-project-grid");

	var filterFns = {};

	$(".sotcox-project-filter").on("click", "li", function () {
		var filterValue = $(this).attr("data-filter");
		filterValue = filterFns[filterValue] || filterValue;
		$grid.isotope({
			filter: filterValue,
		});
	});
