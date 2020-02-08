document.getElementById('b1').onclick = function(){
	swal("Here's a message!");
};

document.getElementById('b2').onclick = function(){
	swal("Here's a message!", "It's pretty, isn't it?")
};

document.getElementById('b3').onclick = function(){
	swal("Good job!", "You clicked the button!", "success");
};

document.getElementById('b4').onclick = function(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		closeOnConfirm: false,
		//closeOnCancel: false
	},
	function(){
		swal("Deleted!", "Your imaginary file has been deleted!", "success");
	});
};


function tae(){
	swal({
		title: "Are you sure?",
		text: "You will not be able to recover this imaginary file!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: "No, cancel plx!",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
    if (isConfirm){
      swal("Deleted!", "Your imaginary file has been deleted!", "success");
    } else {
      swal("Cancelled", "Your imaginary file is safe :)", "error");
    }
	});
};

document.getElementById('b6').onclick = function(){
	swal({
		title: "Sweet!",
		text: "Here's a custom image.",
		imageUrl: 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/p960x960/78115973_2726291467391459_4705118152869019648_o.jpg?_nc_cat=111&_nc_ohc=SFRNReinpzMAX8aaTSf&_nc_ht=scontent.fnak3-1.fna&_nc_tp=6&oh=65a92afb6989885225e1b0642bbc06fb&oe=5EC1449C'
	});
};