

$(document).ready(function() {
	$("#calculate").on("click", function(){
		console.log("sending....");
		$(".result").html('<img style="margin-top: 21%; margin-left: 30%" src="css/loader.gif">');
		$.ajax({
			type: "POST",
			url:  "http://localhost/cloud_computing/server.php",
			data: {co_a: $("#co_a").val().trim(),co_b: $("#co_b").val().trim(),co_c: $("#co_c").val().trim()},
			dataType: "text",
			cache: false,
			success:
			function(data) {
                        console.log(data);
                        var result = $.parseJSON(data);
                        //alert("success");
                        var result_txt="<h2>Result</h2>";
                         result_txt +='<h3 id="ans_ip">Your Request is served by '+result['ip']+'</h3>';
                        result_txt +='<h4 id="ans_txt">Answer is</h4>';
                        result_txt +='<p>X1=<span id="x1">'+result['x1']+'</span></p>';
                        result_txt +='<p>X2=<span id="x2">'+result['x2']+'</span></p>';
                        $(".result").html(result_txt);
                    }
                });
	});
});