<link type="text/css" rel="stylesheet" href=href="<?php echo base_url()?>assert/assert3/media/layout.css" />

	<!-- helper libraries -->
<script src="<?php echo base_url()?>assert/assert3/js/jquery-1.9.1.min.js" type="text/javascript"></script>
	
	<!-- daypilot libraries -->
<script src="<?php echo base_url()?>assert/assert3/js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
	        
</head>
<body>
<div class="content">
    <div class="container_12">
        <div class="grid_12">
            <h3>Service Booking Calender</h3>
            <form action="<?php echo base_url()?>index.php/home/employee_signup" style="float: right"><input type="submit" value="Remove Event" class="service-btn"></form>
            <form action="<?php echo base_url()?>index.php/home/employee_signup" style="float: right"><input type="submit" value="Add Event" class="service-btn"></form>
        </div>
        <div class="grid_12">
      
        <div class="shadow"></div>
        <div class="hideSkipLink">
        </div>
        <div class="main">
            
            <div class="space"></div>
                            
            <div id="dp"></div>

            <script type="text/javascript">
                var dp = new DayPilot.Month("dp");

                // view
                dp.startDate = new DayPilot.Date("2015-11-01");  // or just dp.startDate = "2013-03-25";

                dp.moveBy = 'Full';
                dp.showToolTip = false;

                // bubble, with async loading
                dp.bubble = new DayPilot.Bubble({
                    onLoad: function(args) {
                        var ev = args.source;
                        args.async = true;  // notify manually using .loaded()

                        // simulating slow server-side load
                        setTimeout(function() {
                            args.html = "<div style='font-weight:bold'>" + ev.text() + "</div><div>Start: " + ev.start().toString("MM/dd/yyyy HH:mm") + "</div><div>End: " + ev.end().toString("MM/dd/yyyy HH:mm") + "</div><div>Id: " + ev.id() + "</div>";
                            args.loaded();
                        }, 500);

                    }
                });

                // no events at startup, we will load them later using loadEvents()
                //dp.events.list = [];

                dp.onBeforeEventRender = function(args) {
                };

                dp.onBeforeCellRender = function(args) {
                    if (args.cell.start.getDayOfWeek() === 6 || args.cell.start.getDayOfWeek() === 0) {
                        args.cell.backColor = "#eee";
                    }
                };

                dp.onEventMoved = function (args) {
                    $.post("backend_move.php",
                        {
                            id: args.e.id(),
                            start: args.newStart.toString(),
                            end: args.newEnd.toString()
                        },
                        function(data) {
                            dp.message("Moved: " + data.message);
                        }
                    );        
                };

                dp.onEventResized = function (args) {
                    $.post("backend_move.php",
                        {
                            id: args.e.id(),
                            start: args.newStart.toString(),
                            end: args.newEnd.toString()
                        },
                        function(data) {
                            dp.message("Moved: " + data.message);
                        }
                    );        
                };

                // event creating
                dp.onTimeRangeSelected = function (args) {
                    var name = prompt("New event name:", "Event");
                    dp.clearSelection();
                    if (!name) return;

                    $.post("backend_create.php", 
                        {
                            start: args.start.toString(),
                            end: args.end.toString(),
                            name: name
                        }, 
                        function(data) {
                            var e = new DayPilot.Event({
                                start: args.start,
                                end: args.end,
                                id: data.id,
                                text: name
                            });
                            dp.events.add(e);

                            dp.message(data.message);
                        });
                    };

                dp.onEventClick = function(args) {
                    alert("clicked: " + args.e.id());
                };

                dp.init();

                loadEvents();

                function loadEvents() {
                    $.post("backend_events.php", 
                        function(data) {
                           dp.events.list = data;
                            dp.update();
                        }
                    );
                }
            </script>

        </div>
        <div class="clear">
        </div>
            </div>
    </div>
    </div>
</body>
</html>

