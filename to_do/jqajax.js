$(document).ready(function(){
//Ajax Request for Retrieving Data
function showdata(){
    output = "";
    $.ajax({
        url : "retrieve.php",
        method : "GET",
        dataType : "json",
        success : function(data){
           // console.log(data);
           if(data){
            x = data;
           }else {
            x="";
           }
           for(i=0; i< x.length; i++){
            output += "<tr><td>" + x[i].name + "</td><td>" + x[i].category_id + "</td><td>" + x[i].timestamp +
                      "</td><td> <button class='btn-delete' style='background: red; color:white;' data-sid=" + x[i].id + ">Delete</button></td></tr>";   
            $("#tbody").html(output);                                                            

        }
        }
    })
}
showdata();



    //AJax Request for Insert Data    
$("#btn").click(function(e){
    e.preventDefault();
    console.log("get button clicked");

    let cat = $("#category_id").find('option:selected').val();
    let nm = $("#input_text").val();


    mydata = {category: cat, name: nm};
    //console.log(mydata);

    $.ajax({
        url : "insert_indb.php",
        method : "POST",
        data : JSON.stringify(mydata),
        success : function(data){
            console.log(data);
            $("#myform")[0].reset();
            showdata();
        },
    });
  });


  //Ajax Request for Deleting Data
  $("tbody").on("click", ".btn-delete", function(){
    console.log("Delete Button Clicked");
    let id = $(this).attr("data-sid");
    console.log(id);
    mydata = {sid : id};
    mythis =this;
    $.ajax({
        url : "delete.php",
        method : "POST",
        data : JSON.stringify(mydata),
        success : function (data){
            console.log(data);
            showdata(); 
            //$(mythis).closest("tr").fadeout();
        },
    });
  });


});