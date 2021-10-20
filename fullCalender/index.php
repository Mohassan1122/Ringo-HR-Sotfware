<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="../IndexFolder/Dashboard/scheduling/admin/assets/fullcalendar/main.css" rel="stylesheet">
    <link href="../cssFolder/bootstrap-5.0.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="../IndexFolder/Dashboard/scheduling/admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="../IndexFolder/Dashboard/scheduling/admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="./dist/moment.dev.js"></script>
    <script src="../IndexFolder/Dashboard/scheduling/admin/assets/fullcalendar/main.js"></script>

    <script>
    $(document).ready(function() {
     var calendar = $('#calendar').fullCalendar({
      editable:true,
      header:{
       left:'prev,next today',
       center:'title',
       right:'month,agendaWeek,agendaDay'
      },
      events: [<?php while ($row = $query ->fetch_object()) { ?>{ id : '<?php echo $row->id; ?>', title : '<?php echo $row->title; ?>', start : '<?php echo $row->start_event; ?>', end : '<?php echo $row->end_event; ?>', }, <?php } ?>],
      selectable:true,
      selectHelper:true,
    //   select: function(start, end, allDay)
    //   {
    //   var title = prompt("Enter Event Title");
    //   if(title)
    //   {
    //     var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
    //     var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
    //     $.ajax({
    //     url:"insert.php",
    //     type:"POST",
    //     data:{title:title, start:start, end:end},
    //     success:function(data)
    //     {
    //       calendar.fullCalendar('refetchEvents');
    //       alert("Added Successfully");
    //       window.location.replace("calendar.php");
    //     }
    //     })
    //   }
    //   },
 
    //   editable:true,
    //   eventResize:function(event)
    //   {
    //   var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
    //   var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
    //   var title = event.title;
    //   var id = event.id;
    //   $.ajax({
    //     url:"update.php",
    //     type:"POST",
    //     data:{title:title, start:start, end:end, id:id},
    //     success:function(){
    //     calendar.fullCalendar('refetchEvents');
    //     alert('Event Update');
    //     }
    //   })
    //   },
 
    //   eventDrop:function(event)
    //   {
    //   var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
    //   var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
    //   var title = event.title;
    //   var id = event.id;
    //   $.ajax({
    //     url:"update.php",
    //     type:"POST",
    //     data:{title:title, start:start, end:end, id:id},
    //     success:function()
    //     {
    //     calendar.fullCalendar('refetchEvents');
    //     alert("Event Updated");
    //     }
    //   });
    //   },
 
    //   eventClick:function(event)
    //   {
    //   if(confirm("Are you sure you want to remove it?"))
    //   {
    //     var id = event.id;
    //     $.ajax({
    //     url:"delete.php",
    //     type:"POST",
    //     data:{id:id},
    //     success:function()
    //     {
    //       calendar.fullCalendar('refetchEvents');
    //       alert("Event Removed");
    //     }
    //     })
    //   }
    //   },
 
    });
  });
</script>
</head>
<body>
<br />
  <h2 align="center"><a href="#">Jquery Fullcalandar CRUD(Create, Read, Update, Delete) with PHP Jquery Ajax and Mysql</a></h2>
  <br />
  <div class="container">
    <div id="calendar"></div>
   </div>
</body>
</html>