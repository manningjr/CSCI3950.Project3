<script type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript">
// run the function below once the DOM(Document Object Model) is ready 
$(document).ready(function() {
    // trigger the function when clicking on an assigned element
    $(".toggle2-letters").click(function () {
        // check the visibility of the next element in the DOM
        if ($(this).next().is(":hidden")) {
             $(this).next().slideDown("fast"); // slide it down
			//$(this).hide("slide", { direction: "left" }, 1000);
			//$(this).next("slide", { direction: "left" }, 1000);
			//.show("slide",{direction: 'right'}, 1000);
        } else {
           $(this).next().hide(); // hide it
        }
    });
});
</script>