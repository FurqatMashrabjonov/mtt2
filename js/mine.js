

  var BaseRecord = {
	remove : function(typeRemove, id){
        var ajaxSetting = {
		   method : "post",
		   url : "index.php",
		   data : {
			page : 'start',
			hook :  'TypeRemove',
			typeRemove : typeRemove,
			id : id,
		   },
		   success : function(data){

		   },
		   error : function(data){
			   alert(data);
		   }
		};
		$.ajax(ajaxSetting);
    },
    
    editTeacher : function(id){
        var ajaxSetting = {
		   method : "get",
		   url : "index.php",
		   data : {
			page : 'start',
			hook : 'GetTeacherInfo',
			id : id,
		   },
		    success : function(data){
                var data_json = JSON.parse(data);
                $('.editor').html(BaseRecord.readFile());
            },
		   error : function(data){
			   alert(data);
		   }
		};
		$.ajax(ajaxSetting);
    },

   

}


